<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Util;

/**
 * Class TypeHelper
 * @package Concardis\Payengine\Lib\Internal\Util
 */
class TypeHelper
{

    /**
     * convert boolean to string values to avoid booleans to be send as integers within the queryString.
     *
     * @param array $filter
     */
    public static function convertBooleanValues(array &$filter): void
    {
        foreach ($filter as $parameterName => $value){
            //convert boolean to string values to avoid booleans to be send as integers within the queryString.
            $filter[$parameterName] = var_export($value, true);
        }
    }

}