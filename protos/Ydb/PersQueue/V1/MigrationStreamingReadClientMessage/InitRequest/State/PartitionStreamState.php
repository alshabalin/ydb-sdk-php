<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState</code>
 */
class PartitionStreamState extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.PartitionStream partition_stream = 1;</code>
     */
    protected $partition_stream = null;
    /**
     * Current read offset if has one. Actual for states DESTROYING, READING and STOPPED.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     */
    protected $read_offset = 0;
    /**
     * Ranges of committed by client offsets.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.OffsetsRange offset_ranges = 3;</code>
     */
    private $offset_ranges;
    /**
     * Status of partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState.Status status = 4;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\PersQueue\V1\PartitionStream $partition_stream
     *           Partition partition stream.
     *     @type int|string $read_offset
     *           Current read offset if has one. Actual for states DESTROYING, READING and STOPPED.
     *     @type \Ydb\PersQueue\V1\OffsetsRange[]|\Google\Protobuf\Internal\RepeatedField $offset_ranges
     *           Ranges of committed by client offsets.
     *     @type int $status
     *           Status of partition stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.PartitionStream partition_stream = 1;</code>
     * @return \Ydb\PersQueue\V1\PartitionStream
     */
    public function getPartitionStream()
    {
        return isset($this->partition_stream) ? $this->partition_stream : null;
    }

    public function hasPartitionStream()
    {
        return isset($this->partition_stream);
    }

    public function clearPartitionStream()
    {
        unset($this->partition_stream);
    }

    /**
     * Partition partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.PartitionStream partition_stream = 1;</code>
     * @param \Ydb\PersQueue\V1\PartitionStream $var
     * @return $this
     */
    public function setPartitionStream($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\PartitionStream::class);
        $this->partition_stream = $var;

        return $this;
    }

    /**
     * Current read offset if has one. Actual for states DESTROYING, READING and STOPPED.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     * @return int|string
     */
    public function getReadOffset()
    {
        return $this->read_offset;
    }

    /**
     * Current read offset if has one. Actual for states DESTROYING, READING and STOPPED.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReadOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_offset = $var;

        return $this;
    }

    /**
     * Ranges of committed by client offsets.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.OffsetsRange offset_ranges = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOffsetRanges()
    {
        return $this->offset_ranges;
    }

    /**
     * Ranges of committed by client offsets.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.OffsetsRange offset_ranges = 3;</code>
     * @param \Ydb\PersQueue\V1\OffsetsRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOffsetRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\V1\OffsetsRange::class);
        $this->offset_ranges = $arr;

        return $this;
    }

    /**
     * Status of partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of partition stream.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest.State.PartitionStreamState.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest\State\PartitionStreamState\Status::class);
        $this->status = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionStreamState::class, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage_InitRequest_State_PartitionStreamState::class);

