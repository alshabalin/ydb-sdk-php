<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_scripting.proto

namespace Ydb\Scripting\ExplainYqlRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.Scripting.ExplainYqlRequest.Mode</code>
 */
class Mode
{
    /**
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * PARSE = 1;
     *
     * Generated from protobuf enum <code>VALIDATE = 2;</code>
     */
    const VALIDATE = 2;
    /**
     * Generated from protobuf enum <code>PLAN = 3;</code>
     */
    const PLAN = 3;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::VALIDATE => 'VALIDATE',
        self::PLAN => 'PLAN',
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
class_alias(Mode::class, \Ydb\Scripting\ExplainYqlRequest_Mode::class);

