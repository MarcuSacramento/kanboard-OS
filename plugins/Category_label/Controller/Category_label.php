<?php

namespace Kanboard\Plugin\Category_label\Controller;

use Kanboard\Controller\Base;

/**
 * Category_label
 *
 * @package controller
 * @author  Martin Middeke
 */
class Category_label extends Base
{
    /**
     * Save a new category label
     *
     * @access public
     */
    public function save()
    {
        $project = $this->getProject();
        $values = $this->request->getValues();
        $values['user_id'] = $this->userSession->getId();
        $values['project_id'] = $project['id'];

        if (isset($values['category_label']) and !empty($values['category_label'])) {
            if ($this->category_label->create($values)) {
                $this->flash->success(t('Your custom category label has been updated successfully.'));
            } else {
                $this->flash->failure(t('Unable to updated your custom category label.'));
            }
        } else {
            $this->confirm();
        }
        $this->response->redirect($this->helper->url->to('project', 'show', array('project_id' => $project['id'])));
    }

    /**
     * Confirmation dialog before removing a category label
     *
     * @access public
     */
    public function confirm()
    {
        $project = $this->getProject();
        if ($this->projectMetadata->exists($project['id'], 'category_label')) {
            $this->response->html($this->helper->layout->project('category_label:project/remove', array(
                'project' => $project,
                'title' => t('Remove Category label'),
            )));
        }
    }

    /**
     * Edit a category label (display the form)
     *
     * @access public
     */
    public function edit(array $values = array(), array $errors = array())
    {
        $project = $this->getProject();
        $values['category_label'] = $this->category_label->getCategoryMetadataLabel($project['id']);

        $this->response->html($this->helper->layout->project('category_label:project/edit', array(
            'values' => $values,
            'errors' => $errors,
            'project' => $project,
            'title' => t('Edit Category label')
        )));
    }

    /**
     * Remove a category label
     *
     * @access public
     */
    public function remove()
    {
        $this->checkCSRFParam();
        $project = $this->getProject();

        if ($this->category_label->remove($project['id'])) {
            $this->flash->success(t('Your custom Category label has been removed successfully.'));
        } else {
            $this->flash->failure(t('Unable to remove your custom Category label.'));
            $this->flash->failure($this->request->getStringParam('category_label'));
        }

        $this->response->redirect($this->helper->url->to('project', 'show', array('project_id' => $project['id'])));
    }
}
