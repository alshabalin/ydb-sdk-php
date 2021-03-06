<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\StreamingReadServerMessageNew;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Command to destroy concrete partition stream.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.StreamingReadServerMessageNew.DestroyPartitionStreamRequest</code>
 */
class DestroyPartitionStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of partition partition stream that is ready to be closed by server.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     */
    protected $partition_stream_id = 0;
    /**
     * Flag of gracefull or not destroy.
     * If True then server is waiting for Destroyed signal from client before giving of this partition for other read session.
     * Server will not send more data from this partition.
     * Client can process all received data and wait for commit and only after send Destroyed signal.
     * If False then server gives partition for other session right now.
     * All futher commits for this PartitionStream has no effect. Server is not waiting for Destroyed signal.
     *
     * Generated from protobuf field <code>bool graceful = 2;</code>
     */
    protected $graceful = false;
    /**
     * Last known committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     */
    protected $committed_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_stream_id
     *           Identifier of partition partition stream that is ready to be closed by server.
     *     @type bool $graceful
     *           Flag of gracefull or not destroy.
     *           If True then server is waiting for Destroyed signal from client before giving of this partition for other read session.
     *           Server will not send more data from this partition.
     *           Client can process all received data and wait for commit and only after send Destroyed signal.
     *           If False then server gives partition for other session right now.
     *           All futher commits for this PartitionStream has no effect. Server is not waiting for Destroyed signal.
     *     @type int|string $committed_offset
     *           Last known committed offset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of partition partition stream that is ready to be closed by server.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @return int|string
     */
    public function getPartitionStreamId()
    {
        return $this->partition_stream_id;
    }

    /**
     * Identifier of partition partition stream that is ready to be closed by server.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionStreamId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_stream_id = $var;

        return $this;
    }

    /**
     * Flag of gracefull or not destroy.
     * If True then server is waiting for Destroyed signal from client before giving of this partition for other read session.
     * Server will not send more data from this partition.
     * Client can process all received data and wait for commit and only after send Destroyed signal.
     * If False then server gives partition for other session right now.
     * All futher commits for this PartitionStream has no effect. Server is not waiting for Destroyed signal.
     *
     * Generated from protobuf field <code>bool graceful = 2;</code>
     * @return bool
     */
    public function getGraceful()
    {
        return $this->graceful;
    }

    /**
     * Flag of gracefull or not destroy.
     * If True then server is waiting for Destroyed signal from client before giving of this partition for other read session.
     * Server will not send more data from this partition.
     * Client can process all received data and wait for commit and only after send Destroyed signal.
     * If False then server gives partition for other session right now.
     * All futher commits for this PartitionStream has no effect. Server is not waiting for Destroyed signal.
     *
     * Generated from protobuf field <code>bool graceful = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setGraceful($var)
    {
        GPBUtil::checkBool($var);
        $this->graceful = $var;

        return $this;
    }

    /**
     * Last known committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     * @return int|string
     */
    public function getCommittedOffset()
    {
        return $this->committed_offset;
    }

    /**
     * Last known committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommittedOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->committed_offset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DestroyPartitionStreamRequest::class, \Ydb\PersQueue\V1\StreamingReadServerMessageNew_DestroyPartitionStreamRequest::class);

