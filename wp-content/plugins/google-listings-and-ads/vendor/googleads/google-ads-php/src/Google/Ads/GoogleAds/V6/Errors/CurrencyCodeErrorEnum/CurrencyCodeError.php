<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/currency_code_error.proto

namespace Google\Ads\GoogleAds\V6\Errors\CurrencyCodeErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible currency code errors.
 *
 * Protobuf type <code>google.ads.googleads.v6.errors.CurrencyCodeErrorEnum.CurrencyCodeError</code>
 */
class CurrencyCodeError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The currency code is not supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED = 2;</code>
     */
    const UNSUPPORTED = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNSUPPORTED => 'UNSUPPORTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CurrencyCodeError::class, \Google\Ads\GoogleAds\V6\Errors\CurrencyCodeErrorEnum_CurrencyCodeError::class);

