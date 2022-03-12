<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace User\V1\UidReq;

use UnexpectedValueException;

/**
 * Protobuf type <code>user.v1.UidReq.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>HY_Z = 0;</code>
     */
    const HY_Z = 0;
    /**
     * Generated from protobuf enum <code>HY_A = 1;</code>
     */
    const HY_A = 1;
    /**
     * Generated from protobuf enum <code>HY_B = 2;</code>
     */
    const HY_B = 2;
    /**
     * Generated from protobuf enum <code>HY_C = 3;</code>
     */
    const HY_C = 3;

    private static $valueToName = [
        self::HY_Z => 'HY_Z',
        self::HY_A => 'HY_A',
        self::HY_B => 'HY_B',
        self::HY_C => 'HY_C',
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
class_alias(Type::class, \User\V1\UidReq_Type::class);

