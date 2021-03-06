<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_cluster_discovery.proto

namespace Ydb\PersQueue\ClusterDiscovery\WriteSessionClusters;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.PersQueue.ClusterDiscovery.WriteSessionClusters.SelectionReason</code>
 */
class SelectionReason
{
    /**
     * Generated from protobuf enum <code>SELECTION_REASON_UNSPECIFIED = 0;</code>
     */
    const SELECTION_REASON_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>CLIENT_PREFERENCE = 1;</code>
     */
    const CLIENT_PREFERENCE = 1;
    /**
     * Generated from protobuf enum <code>CLIENT_LOCATION = 2;</code>
     */
    const CLIENT_LOCATION = 2;
    /**
     * Generated from protobuf enum <code>CONSISTENT_DISTRIBUTION = 3;</code>
     */
    const CONSISTENT_DISTRIBUTION = 3;

    private static $valueToName = [
        self::SELECTION_REASON_UNSPECIFIED => 'SELECTION_REASON_UNSPECIFIED',
        self::CLIENT_PREFERENCE => 'CLIENT_PREFERENCE',
        self::CLIENT_LOCATION => 'CLIENT_LOCATION',
        self::CONSISTENT_DISTRIBUTION => 'CONSISTENT_DISTRIBUTION',
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
class_alias(SelectionReason::class, \Ydb\PersQueue\ClusterDiscovery\WriteSessionClusters_SelectionReason::class);

