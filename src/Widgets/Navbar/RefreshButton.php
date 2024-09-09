<?php

namespace CodalityAdmin\Admin\Widgets\Navbar;

use Illuminate\Contracts\Support\Renderable;
use CodalityAdmin\Admin\Admin;

class RefreshButton implements Renderable
{
    public function render()
    {
        return Admin::component('admin::components.refresh-btn');
    }
}
