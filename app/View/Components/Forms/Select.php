<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $name;
    public $values;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $values)
    {
        $this->label = $label;
        $this->name = $name;
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
