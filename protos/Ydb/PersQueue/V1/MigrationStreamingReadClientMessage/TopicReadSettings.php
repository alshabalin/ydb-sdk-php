<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadClientMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.TopicReadSettings</code>
 */
class TopicReadSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Partition groups that will be read by this session.
     * If list is empty - then session will read all partition groups.
     *
     * Generated from protobuf field <code>repeated int64 partition_group_ids = 2;</code>
     */
    private $partition_group_ids;
    /**
     * Read data only after this timestamp from this topic.
     *
     * Generated from protobuf field <code>int64 start_from_written_at_ms = 3;</code>
     */
    protected $start_from_written_at_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Topic path.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $partition_group_ids
     *           Partition groups that will be read by this session.
     *           If list is empty - then session will read all partition groups.
     *     @type int|string $start_from_written_at_ms
     *           Read data only after this timestamp from this topic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Partition groups that will be read by this session.
     * If list is empty - then session will read all partition groups.
     *
     * Generated from protobuf field <code>repeated int64 partition_group_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionGroupIds()
    {
        return $this->partition_group_ids;
    }

    /**
     * Partition groups that will be read by this session.
     * If list is empty - then session will read all partition groups.
     *
     * Generated from protobuf field <code>repeated int64 partition_group_ids = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionGroupIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->partition_group_ids = $arr;

        return $this;
    }

    /**
     * Read data only after this timestamp from this topic.
     *
     * Generated from protobuf field <code>int64 start_from_written_at_ms = 3;</code>
     * @return int|string
     */
    public function getStartFromWrittenAtMs()
    {
        return $this->start_from_written_at_ms;
    }

    /**
     * Read data only after this timestamp from this topic.
     *
     * Generated from protobuf field <code>int64 start_from_written_at_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartFromWrittenAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_from_written_at_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TopicReadSettings::class, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage_TopicReadSettings::class);
