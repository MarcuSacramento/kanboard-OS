<?php

namespace Kanboard\Plugin\Phpinfo;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:config:sidebar', 'Phpinfo:config/sidebar');
        $this->applicationAccessMap->add('phpinfo', 'index', Role::APP_ADMIN);
    }

    public function getPluginName()
    {
        return 'Phpinfo';
    }

    public function getPluginDescription()
    {
        return t('Get PHP Info in settings page');
    }

    public function getPluginAuthor()
    {
        return 'Martin Middeke';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

	    public function getPluginHomepage()
    {
        return 'https://github.com/Busfreak/kanboard-Phpinfo';
    }
}