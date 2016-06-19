<?php

namespace Kanboard\Plugin\Bootstrap;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', 'plugins/Bootstrap/css/app.css');
    }
}
