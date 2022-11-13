<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $pagetitle;

    public function __construct($pagetitle, $user){
        $this->pagetitle = $pagetitle;
        $this->user = $user;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
