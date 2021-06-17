<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Util;

/**
 * Class ArrayHelper
 * @package Concardis\Payengine\Lib\Internal\Util
 */
class ArrayHelper
{
    /**
     * @param array $array
     * @return bool
     */
    public static function isAssocArray(array $array): bool
    {
        if ([] === $array) {
            return false;
        }
        return array_keys($array) !== range(0, count($array) - 1);
    }

}