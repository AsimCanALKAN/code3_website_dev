<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    private $data;

    public function __construct(){
        $this->data = [
            'summary' => [
                'balance' => [
                    'currentBalance' => 1234412.66,
                    'currentProfit' => 5412.66,
                    'inTransaction' => 12,
                    'unknownProfit' => 5413.66,
                    'bar' => [
                        'profit' => 88,
                        'loss' => 12
                    ],
                    'weekly' => [
                        'profit' => 55,
                        'loss' => 15,
                        'unknown' => 30
                    ]
                ],
                'transaction' => [
                    'total_transactions' => 12,
                    'days' => []
                ]
            ],
            'live' => [
                'strategy' => array(
                    [
                        'pair' => 'USDJPY',
                        'magic' => 666,
                        'broker' => 'Alchemy-209123',
                        'date' => Carbon::now()->format('d/m/Y'),
                        'time' => Carbon::now()->format('H:i:s'),
                        'profit' => 15443.66,
                        'status' => 'In Transaction'
                    ],
                    [
                        'pair' => 'EURUSD',
                        'magic' => 444,
                        'broker' => 'Alchemy-209123',
                        'date' => Carbon::now()->format('d/m/Y'),
                        'time' => Carbon::now()->format('H:i:s'),
                        'profit' => -143.66,
                        'status' => 'Pending'
                    ]
                )
            ],
            'top' => [
                'pnl' => [
                    'profit' => -143.66,
                    'profitpercentage' => 60,
                    'percentage' => -1.2
                ],
                'pnl2' => [
                    'profit' => 189.66,
                    'profitpercentage' => 200,
                    'percentage' => 2.3
                ],
                'totaltransactions' => [
                    'total_transactions' => 123,
                    'profitable_percentage' => 23
                ],
                'symbols' => array(
                    [
                        'symbol' => 'EURUSD',
                        'profit' => 1415,
                        'total' => 4000
                    ],
                    [
                        'symbol' => 'EURUSD',
                        'profit' => 1415,
                        'total' => 4000
                    ],
                    [
                        'symbol' => 'EURUSD',
                        'profit' => 1415,
                        'total' => 4000
                    ],
                    [
                        'symbol' => 'EURUSD',
                        'profit' => 1415,
                        'total' => 4000
                    ],
                    [
                        'symbol' => 'EURUSD',
                        'profit' => 1415,
                        'total' => 4000
                    ]
                ),
            ],
            'activities' => [
                'feed' => array(
                    [
                        'style' => 'primary',
                        'time_readable' => '15 minutes ago',
                        'description' => 'You earned <span class="text-success">$412</span> from EURUSD'
                    ]
                ),
                'notifications' => array(
                    [
                        'style' => 'danger',
                        'time_readable' => '15 minutes ago',
                        'description' => 'You earned <span class="text-success">$412</span> from EURUSD'
                    ]
                )
            ]
        ];
    }

    public function render(Request $request){
        return view('home.dashboard', ['pagetitle' => 'Dashboard', 'data' => $this->data]);
    }
}
