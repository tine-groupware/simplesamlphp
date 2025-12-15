<?php

declare(strict_types=1);

namespace SimpleSAML\Store;

use Exception;
use SimpleSAML\Configuration;
use SimpleSAML\Error;
use SimpleSAML\Module;
use SimpleSAML\Utils;

/**
 * Base class for data stores.
 *
 * @package simplesamlphp/simplesamlphp
 */
abstract class StoreFactory implements Utils\ClearableState
{
    /**
     * Our singleton instance.
     *
     * This is false if the data store isn't enabled, and null if we haven't attempted to initialize it.
     *
     * @var \SimpleSAML\Store\StoreInterface|false|null
     */
    private static StoreInterface|false|null $instance = null;


    /**
     * Retrieve our singleton instance.
     *
     * @param string $storeType The type of store we need to instantiate
     * @return \SimpleSAML\Store\StoreInterface|false The data store, or false if it isn't enabled.
     *
     * @throws \SimpleSAML\Error\CriticalConfigurationError
     * @throws \Exception
     */
    public static function getInstance(string $storeType): false
    {
       return false;
    }


    /**
     * Clear any SSP specific state, such as SSP environmental variables or cached internals.
     */
    public static function clearInternalState(): void
    {
        self::$instance = null;
    }
}
