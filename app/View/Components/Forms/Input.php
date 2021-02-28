<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $type;
    public $inputSize;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $type, $inputSize)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->inputSize = $inputSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
