<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class TopSymbols extends Component
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

    private function getSymbolData(){
        return [
            'symbols' => [
                'symbol' => 'AAPL',
                'total' => 2000,
                'profit' => 1800,
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
        return view('components.widgets.top-symbols' , ['data' => $this->data ?? $this->getSymbolData()]);
    }

}
