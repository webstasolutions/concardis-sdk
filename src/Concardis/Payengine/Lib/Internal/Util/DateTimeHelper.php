<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Util;

/**
 * Class DateTimeHelper
 * @package Concardis\Payengine\Lib\Internal\Util
 */
class DateTimeHelper
{
    /**
     * @param int|float|string|\DateTime $numeric
     *
     * @return \DateTime
     * @throws \Exception
     */
    public static function convertNumericToDateTime(int|float|string|\DateTime $numeric): \DateTimeInterface
    {
        $isDateTime = false;
        $isValidTimeStamp = false;
        if ($numeric instanceof \DateTime) {
            $isDateTime = true;
        } elseif (self::isValidTimeStamp($numeric)) {
            $isValidTimeStamp = true;
        } else {
            throw new \Exception("Must be a valid numeric value or DateTime");
        }

        $dateTime = null;
        if ($isValidTimeStamp) {
            $dateTime = new \DateTime("@$numeric");
        } elseif ($isDateTime) {
            $dateTime = $numeric;
        }

        return $dateTime;
    }

    /**
     * @param int|float $timestamp
     *
     * @return bool
     */
    public static function isValidTimeStamp(int|float $timestamp): bool
    {
        $check = (is_int($timestamp) || is_float($timestamp)) ? $timestamp : (string)(int)$timestamp;
        return ($check === $timestamp) && ((int)$timestamp <= PHP_INT_MAX) && ((int)$timestamp >= ~PHP_INT_MAX);
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return int
     */
    public static function getMillisecondFromDateTime(\DateTime $dateTime): int
    {
        $timestampInSec = $dateTime->getTimestamp();
        return (int)round($timestampInSec * 1000);
    }


}