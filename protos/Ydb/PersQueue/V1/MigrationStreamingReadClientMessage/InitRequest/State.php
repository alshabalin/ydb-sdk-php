<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State of client read session. Could be provided to server for retries.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State</code>
 */
class State extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState partition_streams_states = 1;</code>
     */
    private $partition_streams_states;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State\PartitionStreamState[]|\Google\Protobuf\Internal\RepeatedField $partition_streams_states
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState partition_streams_states = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionStreamsStates()
    {
        return $this->partition_streams_states;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState partition_streams_states = 1;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State\PartitionStreamState[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionStreamsStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State\PartitionStreamState::class);
        $this->partition_streams_states = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage_InitRequest_State::class);

