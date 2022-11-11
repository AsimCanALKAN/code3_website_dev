<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\Breakout;

class HomeCards extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    private function getCardInfoFromDB(){
        $this->data = [
            'transactions' => [
                'total' => $this->getTotalTransactionCount(),
                'numberOfSymbols' => $this->getDistinctPairCount(),
                'success' => $this->getBreakoutSuccessRate()
            ],
            'profit' => [
                'totalProfit' => 31456,
                'since' => '08/21',
                'profitableTransactions' => $this->successBreakout,
                'percentage' => '+0.8'
            ],
            'balance' => [
                'totalBalance' => $this->getTotalBalance(),
                'numberOfBrokers' => $this->getDistinctBrokers(),
                'accountOwner' => Auth::user()->name
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.home-cards', ['data' => $this->getCardData()]);
    }

    private function getCardData(){
        $key = Auth::user()->id . '_home_cards';

        if(Cache::has($key)){
            return Cache::get(Auth::user()->id . '_home_cards');
        }
        else{
            $this->getCardInfoFromDB();
            Cache::put($key, $this->data, 30);
            return $this->data;
        }
    }

    private function getTotalTransactionCount(){
        $user = Auth::user();
        $transactions = Transaction::with('breakout', 'breakout.account')
            ->whereHas('breakout.account', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->count();

        return $transactions;
    }

    private function getDistinctPairCount(){
        $pairs = Breakout::with('account')
            ->whereHas('account', function($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->distinct('pair_id')
            ->count();
        return $pairs;
    }

    private function getBreakoutSuccessRate(){
        $totalBreakout = Breakout::with('account')
            ->whereHas('account', function($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->count();

        $this->successBreakout = Breakout::with('account', 'transactions', 'transactions.transaction_orders.order')
            ->whereHas('account', function($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->whereHas('transactions.transaction_orders.order', function($query) {
                $query->havingRaw('SUM(comission + profit + swap) > ?', [0]);
                // $query->where('ticket', -1);
                // dd($query);
            })
            ->count();
        return $totalBreakout != 0 ? round($this->successBreakout / $totalBreakout * 100, 2) : 0;
    }

    private function getTotalBalance(){
        $balance = Account::with('user', Auth::user()->id)
        ->sum('balance');
        return $balance;
    }

    private function getDistinctBrokers(){
        $brokers = Account::with('user', Auth::user()->id)
            ->distinct('broker_id')
            ->count();
        return $brokers;
    }
}
