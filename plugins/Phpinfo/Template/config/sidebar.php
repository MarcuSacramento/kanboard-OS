        <li <?= $this->app->checkMenuSelection('phpinfo', 'index') ?>>
            <?= $this->url->link(t('PHP Info'), 'phpinfo', 'index', array('plugin' => 'phpinfo')) ?>
        </li>