<?php

namespace CodalityAdmin\Admin\Grid\Selectable;

use CodalityAdmin\Admin\Grid\Displayers\AbstractDisplayer;

class Radio extends AbstractDisplayer
{
    public function display($key = '')
    {
        $value = $this->getAttribute($key);

        return <<<HTML
<input type="radio" name="item" class="form-check-input" value="{$value}"/>
HTML;
    }
}
