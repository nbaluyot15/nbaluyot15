<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbarBtn extends Component
{   
    public $btnText;
    public $hrefValue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnText, $hrefValue)
    {
        $this->btnText=$btnText;
        $this->hrefValue=$hrefValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar-btn');
    }
}
