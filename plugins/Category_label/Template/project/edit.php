<div class="page-header">
    <h2><?= t('Edit Category label') ?></h2>
</div>

<form method="post" action="<?= $this->url->href('category_label', 'save', array('plugin' => 'category_label', 'project_id' => $project['id'])) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->label(t('Category label'), 'category_label ') ?>
    <?= $this->form->text('category_label', $values, $errors, array('maxlength="20"')) ?>
    <div><?= t('(empty string will delete label)') ?></div>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue">
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'project', 'show', array('project_id' => $project['id'])) ?>
    </div>
</form>