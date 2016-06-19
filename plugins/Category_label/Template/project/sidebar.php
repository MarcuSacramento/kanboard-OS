<?php if ($this->user->hasProjectAccess('category_label', 'edit', $project['id'])): ?>
        <li <?= $this->app->checkMenuSelection('category_label') ?>>
            <?= $this->url->link(t('Category label'), 'category_label', 'edit', array('plugin' => 'category_label', 'project_id' => $project['id'])) ?>
        </li>
<?php endif ?>
