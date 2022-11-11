<?php

namespace App\View\Components\Widgets\Summary;

use Illuminate\View\Component;

class Transaction extends Component
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
        return view('components.widgets.summary.transaction', ['data' => $this->data ?? $this->getData()]);
    }

    private function getData(){
        return [
            'total_transactions' => 12,
            'days' => []
        ];
    }
}
