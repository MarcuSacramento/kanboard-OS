<?php

namespace Kanboard\Plugin\Category_label;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
    public function initialize()
    {

        $this->template->setTemplateOverride('project/filters', 'category_label:project/filters');
        $this->template->hook->attach('template:project:sidebar', 'category_label:project/sidebar');
        $this->on('app.bootstrap', function($container) {
            Translator::load($container['config']->getCurrentLanguage(), __DIR__.'/Locale');
        });
        $this->projectAccessMap->add('category_label', '*', Role::PROJECT_MANAGER);
    }

    public function getClasses()
    {
        return array(
            'Plugin\Category_label\Model' => array(
                'Category_label',
            )
        );
    }

    public function getPluginName()
    {
        return 'Category label';
    }

    public function getPluginDescription()
    {
        return t('Rename the Category label in filter drop down');
    }

    public function getPluginAuthor()
    {
        return 'Martin Middeke';
    }

    public function getPluginVersion()
    {
        return '0.0.0';
    }

	    public function getPluginHomepage()
    {
        return 'https://github.com/Busfreak/Category_label';
    }
}