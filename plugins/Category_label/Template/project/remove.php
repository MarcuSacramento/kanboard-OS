<div class="page-header">
    <h2><?= t('Remove Category label') ?></h2>
</div>

<div class="confirm">
    <p class="alert alert-info"><?= t('Do you really want to remove the custom Category label?') ?></p>
    <div class="form-actions">
        <?= $this->url->link(t('Yes'), 'category_label', 'remove', array('plugin' => 'category_label', 'project_id' => $project['id']), true, 'btn btn-red') ?>
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'category_label', 'edit', array('plugin' => 'category_label', 'project_id' => $project['id'])) ?>
    </div>
</div>