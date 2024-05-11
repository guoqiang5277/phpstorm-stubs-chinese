<?php

namespace MongoDB\Driver\Exception;

use Throwable;

/**
 * Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.
 * @link https://php.net/manual/zh/class.mongodb-driver-exception-exception.php
 */
interface Exception extends Throwable {}
