<?php

/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Perspective\Theme15Ex2AirFreight\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('None'), 'value' => 'none'],
                ['label' => __('Balloon'), 'value' => 'balloon'],
                ['label' => __('Charter plane'), 'value' => 'charter plane'],
                ['label' => __('High-speed plane'), 'value' => 'high-speed plane'],
                ['label' => __('Spaceship'), 'value' => 'spaceship'],
            ];
        }
        return $this->_options;
    }
}
