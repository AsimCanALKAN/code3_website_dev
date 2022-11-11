<?php

namespace App\View\Components\Widgets\Activities;

use Illuminate\View\Component;

class Feed extends Component
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
        return view('components.widgets.activities.feed', ['data' => $this->data ?? $this->getActivities()]);
    }

    private function getActivities(){
        return [];
    }
}
