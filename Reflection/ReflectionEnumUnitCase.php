<?php

use JetBrains\PhpStorm\Pure;

/**
 * @link https://php.net/manual/zh/class.reflectionenumunitcase.php
 * @since 8.1
 */
class ReflectionEnumUnitCase extends ReflectionClassConstant
{
    public function __construct(object|string $class, string $constant) {}

    #[Pure]
    public function getValue(): UnitEnum {}

    /**
     * @return ReflectionEnum
     */
    #[Pure]
    public function getEnum(): ReflectionEnum {}
}
