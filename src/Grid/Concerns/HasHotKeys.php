<?php

namespace CodalityAdmin\Admin\Grid\Concerns;

use CodalityAdmin\Admin\Admin;

trait HasHotKeys
{
    protected function addHotKeyScript()
    {
        $filterID = $this->getFilter()->getFilterID();

        $refreshMessage = __('admin.refresh_succeeded');

        $script = <<<'SCRIPT'

            admin.grid.hotkeys();


SCRIPT;

        Admin::script($script);
    }

    public function enableHotKeys()
    {
        $this->addHotKeyScript();

        return $this;
    }
}
