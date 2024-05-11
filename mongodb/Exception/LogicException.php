<?php

namespace MongoDB\Driver\Exception;

/**
 * Thrown when the driver is incorrectly used (e.g. rewinding a cursor).
 * @link https://php.net/manual/zh/class.mongodb-driver-exception-logicexception.php
 */
class LogicException extends \LogicException implements Exception {}
