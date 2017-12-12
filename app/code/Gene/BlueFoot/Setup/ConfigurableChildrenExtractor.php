<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Gene\BlueFoot\Setup;

class ConfigurableChildrenExtractor implements ChildrenExtractorInterface
{
    /**
     * @var string
     */
    private $path;

    /**
     * Constructor
     *
     * @param $path
     */
    public function __construct(
        $path
    ) {
        $this->path = $path;
    }

    /**
     * {@inheritdoc}
     */
    public function extract($data)
    {
        if ('/' === $this->path) {
            return $data['children'];
        }
        return [];
    }
}
