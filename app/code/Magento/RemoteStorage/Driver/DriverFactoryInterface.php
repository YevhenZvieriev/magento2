<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\RemoteStorage\Driver;

/**
 * Factory for drivers with additional configuration.
 * @api
 */
interface DriverFactoryInterface
{
    /**
     * Creates driver from stored config.
     *
     * @return ExtendedRemoteDriverInterface
     *
     * @throws DriverException
     */
    public function create(): ExtendedRemoteDriverInterface;

    /**
     * Creates driver from config.
     *
     * @param array $config
     * @param string $prefix
     * @param string $cacheAdapter
     * @param array $cacheConfig
     * @return ExtendedRemoteDriverInterface
     *
     * @throws DriverException
     */
    public function createConfigured(
        array $config,
        string $prefix,
        string $cacheAdapter = '',
        array $cacheConfig = []
    ): ExtendedRemoteDriverInterface;
}
