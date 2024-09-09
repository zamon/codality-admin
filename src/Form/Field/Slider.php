<?php

namespace CodalityAdmin\Admin\Form\Field;

use CodalityAdmin\Admin\Form\Field;
use CodalityAdmin\Admin\Form\Field\Traits\HasNumberModifiers;

class Slider extends Field
{
    use HasNumberModifiers;

    public function render()
    {
        $this->attribute('value', old($this->elementName ?: $this->column, $this->value()));

        return parent::render();
    }
}
