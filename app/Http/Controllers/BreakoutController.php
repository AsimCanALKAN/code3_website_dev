<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;

use App\Models\Breakout;
use App\Models\Broker;

class BreakoutController extends Controller
{
    public function render(Request $request)
    {
        return view('home.breakoutstrategy', ['pagetitle' => 'Live Trade', 'data' => $this->getHistory($request)]);
    }

    private function getHistory($request)
    {
        $userid = Auth::user()->id;

            $this->data = $this->getHistoryFromDb();
            $this->data->pairs = $this->getPairsStart();
            $this->data->platforms = $this->getPlatformsStart();
            $this->data->brokers = $this->getBrokersStart();
            $this->data->accounts = $this->getAccountsStart();
            $this->data->bots = $this->getBotsStart();
            //Cache::put($cachekey, $this->data, 10);
            return $this->data;
    }

    private function getHistoryFromDb()
    {
        $breakouts = Breakout::with('account', 'transactions', 'account')
            ->whereHas('account', function ($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->paginate(10);
        foreach ($breakouts->items() as $breakout) {
            $breakout->broker = Broker::where('id', $breakout->account->broker_id)->get()->first();
        }
        return $breakouts;
    }

    public function getTableData(Request $request)
    {
        $breakouts = Breakout::with('account', 'transactions', 'account')
            ->whereHas('account', function ($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->paginate(10);
        foreach ($breakouts->items() as $breakout) {
            $breakout->broker = Broker::where('id', $breakout->account->broker_id)->get()->first();
        }
        return $breakouts;
    }

    private function getPairsStart()
    {
        $data = $this->httpGet( ["theUrl" => "/auth/pairs/"]);
        return  $data;
    }

    public function getFromAPI(Request $request)
    {

        $data = $this->httpGet($request->all());
        return  $data;
    }

    public function closeSwingBB(Request $request)
    {

        //$data = $this->httpGet($request->all());
        return response()->json(['closed' => 'true', 'totalProfit' => 12500, 'step' => 6]);

    }

    public function stopSwingBB(Request $request)
    {

        //$data = $this->httpGet($request->all());
        return response()->json(['stoped' => 'true']);

    }

    public function startSwingBB(Request $request)
    {

        //$data = $this->httpGet($request->all());
        return response()->json(['started' => 'true']);

    }

    private function getPlatformsStart()
    {
        $data = $this->httpGet( ["theUrl" => "/auth/platforms/"]);
        return  $data;
    }

    private function getBrokersStart()
    {
        $data = $this->httpGet( ["theUrl" => "/auth/brokers/"]);
        return  $data;
    }


    private function getAccountsStart()
    {
        $data = $this->httpGet( ["theUrl" => "/auth/accounts/"]);
        return  $data;
    }

    private function getBotsStart()
    {
        $data = $this->httpGet( ["theUrl" => "/auth/bots/"]);
        return  $data;
    }

    private function httpGet($theUrl)
    {
        $baseUrl = 'http://157.90.31.191:30000/v1' . $theUrl['theUrl'];
        $client = new \GuzzleHttp\Client();
        foreach ($theUrl as $k => $urlPar) {
            if ($urlPar[0] != "/") {
                $baseUrl = $baseUrl .  '&' .$k . "=" . $urlPar;
            }
        }
        $res = $client->get($baseUrl);
        //echo $res->getStatusCode(); // 200
        //echo $res->getBody(); // { "type": "User", ....
        //Cache::put($cachekey, $res->getBody(), 5);
        return json_decode($res->getBody());
    }
}
