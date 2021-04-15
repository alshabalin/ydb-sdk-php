<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State\PartitionStreamState;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState.Status</code>
 */
class Status
{
    /**
     * Not used state.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * Client seen Create message but not yet responded to server with Created message.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Client seen Destroy message but not yet responded with Released message.
     *
     * Generated from protobuf enum <code>DESTROYING = 2;</code>
     */
    const DESTROYING = 2;
    /**
     * Client sent Created or ResumeReadRequest message to server for this partition stream.
     *
     * Generated from protobuf enum <code>READING = 3;</code>
     */
    const READING = 3;
    /**
     * Client sent StopReadRequest for this partition stream.
     *
     * Generated from protobuf enum <code>STOPPED = 4;</code>
     */
    const STOPPED = 4;

    private static $valueToName = [
        self::STATUS_UNSPECIFIED => 'STATUS_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::DESTROYING => 'DESTROYING',
        self::READING => 'READING',
        self::STOPPED => 'STOPPED',
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
class_alias(Status::class, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage_InitRequest_State_PartitionStreamState_Status::class);

