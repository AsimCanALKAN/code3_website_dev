<?php

namespace App\View\Components\Widgets\TopStats;

use Illuminate\View\Component;

class TodayPnl extends Component
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
        return view('components.widgets.top-stats.today-pnl', ['data' => $this->data]);
    }
}
