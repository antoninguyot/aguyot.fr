<?php

namespace App\Components;

use Illuminate\View\Component;

class CVEntry extends Component
{
    private $title;
    /**
     * @var null
     */
    private $subtitle;

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param null $subtitle
     */
    public function __construct($title, $subtitle = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cv-entry');
    }
}
