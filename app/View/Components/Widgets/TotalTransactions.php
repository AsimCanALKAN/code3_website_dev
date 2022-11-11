<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class TotalTransactions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.total-transactions', ['data' => $this->data ?? $this->getTransactionData()]);
    }

    private function getTransactionData(){
        return [
            'total_transactions' => 687,
            'profitable_percentage' => 92
        ];
    }
}
