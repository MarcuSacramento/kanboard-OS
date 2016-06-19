<?php

namespace Kanboard\Plugin\Phpinfo\Controller;

use Kanboard\Controller\Base;

/**
 * Phpinfo
 *
 * @package controller
 * @author  Martin Middeke
 */
class Phpinfo extends Base
{
    /**
     * Phpinfo index page
     *
     * @access public
     */
    public function index()
    {
        $this->response->html($this->helper->layout->config('phpinfo:config/index', array(
            'title' => t('Settings').' &gt; '.'PHP Info',
        )));
    }
}
