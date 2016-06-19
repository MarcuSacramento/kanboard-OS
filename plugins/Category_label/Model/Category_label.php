<?php

namespace Kanboard\Plugin\Category_label\Model;

use Kanboard\Model\Base;

/**
 * Category_label
 *
 * @package  model
 * @author   Martin Middeke
 */
class Category_label extends Base
{
    /**
     * Get category label
     *
     * @access public
     * @param  integer   $project_id
     * @return array
     */
    public function getCategoryLabel($project_id)
    {
        $CategoryLabel = $this->projectMetadata->get($project_id, 'category_label');
        if ($this->projectMetadata->exists($project_id, 'category_label')) {
            return $this->projectMetadata->get($project_id, 'category_label');
        } else {
            return t('Categories');
        }
    }

    /**
     * Get category label from metadata
     *
     * @access public
     * @param  integer   $project_id
     * @return array
     */
    public function getCategoryMetadataLabel($project_id)
    {
        $CategoryLabel = $this->projectMetadata->get($project_id, 'category_label');
        if ($this->projectMetadata->exists($project_id, 'category_label')) {
            return $this->projectMetadata->get($project_id, 'category_label');
        } else {
            return '';
        }
    }

    /**
     * Remove a specific category label
     *
     * @access public
     * @param  integer  $project_id
     * @return boolean
     */
    public function remove($project_id)
    {
        return $this->projectMetadata->remove($project_id, 'category_label');
    }

    /**
     * Create a custom category label
     *
     * @access public
     * @param  array    $values    Form values
     * @return boolean
     */
    public function create(array $values)
    {
        return $this->projectMetadata->save($values['project_id'], array('category_label' => $values['category_label']));
    }
}