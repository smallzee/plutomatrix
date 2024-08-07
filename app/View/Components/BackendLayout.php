<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class BackendLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('layout.backend.app');
    }
}
