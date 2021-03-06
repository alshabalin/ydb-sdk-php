<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadServerMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for status requst.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.PartitionStatus</code>
 */
class PartitionStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition's topic path.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Path topic = 1;</code>
     */
    protected $topic = null;
    /**
     * Topic's instance cluster name.
     *
     * Generated from protobuf field <code>string cluster = 2;</code>
     */
    protected $cluster = '';
    /**
     * Partition identifier. topic:cluster:partition is unique addressing of partition.
     *
     * Generated from protobuf field <code>uint64 partition = 3;</code>
     */
    protected $partition = 0;
    /**
     * Assign idenfier. Used for matching Assigned and Release requests from server.
     *
     * Generated from protobuf field <code>uint64 assign_id = 5;</code>
     */
    protected $assign_id = 0;
    /**
     * Generated from protobuf field <code>uint64 committed_offset = 6;</code>
     */
    protected $committed_offset = 0;
    /**
     * Generated from protobuf field <code>uint64 end_offset = 7;</code>
     */
    protected $end_offset = 0;
    /**
     * Generated from protobuf field <code>uint64 write_watermark_ms = 8;</code>
     */
    protected $write_watermark_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\PersQueue\V1\Path $topic
     *           Partition's topic path.
     *     @type string $cluster
     *           Topic's instance cluster name.
     *     @type int|string $partition
     *           Partition identifier. topic:cluster:partition is unique addressing of partition.
     *     @type int|string $assign_id
     *           Assign idenfier. Used for matching Assigned and Release requests from server.
     *     @type int|string $committed_offset
     *     @type int|string $end_offset
     *     @type int|string $write_watermark_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition's topic path.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Path topic = 1;</code>
     * @return \Ydb\PersQueue\V1\Path
     */
    public function getTopic()
    {
        return isset($this->topic) ? $this->topic : null;
    }

    public function hasTopic()
    {
        return isset($this->topic);
    }

    public function clearTopic()
    {
        unset($this->topic);
    }

    /**
     * Partition's topic path.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Path topic = 1;</code>
     * @param \Ydb\PersQueue\V1\Path $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\Path::class);
        $this->topic = $var;

        return $this;
    }

    /**
     * Topic's instance cluster name.
     *
     * Generated from protobuf field <code>string cluster = 2;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Topic's instance cluster name.
     *
     * Generated from protobuf field <code>string cluster = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Partition identifier. topic:cluster:partition is unique addressing of partition.
     *
     * Generated from protobuf field <code>uint64 partition = 3;</code>
     * @return int|string
     */
    public function getPartition()
    {
        return $this->partition;
    }

    /**
     * Partition identifier. topic:cluster:partition is unique addressing of partition.
     *
     * Generated from protobuf field <code>uint64 partition = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartition($var)
    {
        GPBUtil::checkUint64($var);
        $this->partition = $var;

        return $this;
    }

    /**
     * Assign idenfier. Used for matching Assigned and Release requests from server.
     *
     * Generated from protobuf field <code>uint64 assign_id = 5;</code>
     * @return int|string
     */
    public function getAssignId()
    {
        return $this->assign_id;
    }

    /**
     * Assign idenfier. Used for matching Assigned and Release requests from server.
     *
     * Generated from protobuf field <code>uint64 assign_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAssignId($var)
    {
        GPBUtil::checkUint64($var);
        $this->assign_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 committed_offset = 6;</code>
     * @return int|string
     */
    public function getCommittedOffset()
    {
        return $this->committed_offset;
    }

    /**
     * Generated from protobuf field <code>uint64 committed_offset = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommittedOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->committed_offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_offset = 7;</code>
     * @return int|string
     */
    public function getEndOffset()
    {
        return $this->end_offset;
    }

    /**
     * Generated from protobuf field <code>uint64 end_offset = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 write_watermark_ms = 8;</code>
     * @return int|string
     */
    public function getWriteWatermarkMs()
    {
        return $this->write_watermark_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 write_watermark_ms = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWriteWatermarkMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->write_watermark_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionStatus::class, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage_PartitionStatus::class);

