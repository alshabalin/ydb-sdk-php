<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\DataBatch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One client message representation.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.DataBatch.MessageData</code>
 */
class MessageData extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition offset in partition that assigned for message.
     *
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     */
    protected $offset = 0;
    /**
     * Sequence number that provided with message on write from client.
     *
     * Generated from protobuf field <code>uint64 seq_no = 2;</code>
     */
    protected $seq_no = 0;
    /**
     * Timestamp of creation of message provided on write from client.
     *
     * Generated from protobuf field <code>uint64 create_timestamp_ms = 3;</code>
     */
    protected $create_timestamp_ms = 0;
    /**
     * Codec that is used for data compressing.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Codec codec = 4;</code>
     */
    protected $codec = 0;
    /**
     * Compressed client message body.
     *
     * Generated from protobuf field <code>bytes data = 5;</code>
     */
    protected $data = '';
    /**
     * Uncompressed size of client message body.
     *
     * Generated from protobuf field <code>uint64 uncompressed_size = 6;</code>
     */
    protected $uncompressed_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $offset
     *           Partition offset in partition that assigned for message.
     *     @type int|string $seq_no
     *           Sequence number that provided with message on write from client.
     *     @type int|string $create_timestamp_ms
     *           Timestamp of creation of message provided on write from client.
     *     @type int $codec
     *           Codec that is used for data compressing.
     *     @type string $data
     *           Compressed client message body.
     *     @type int|string $uncompressed_size
     *           Uncompressed size of client message body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition offset in partition that assigned for message.
     *
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Partition offset in partition that assigned for message.
     *
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Sequence number that provided with message on write from client.
     *
     * Generated from protobuf field <code>uint64 seq_no = 2;</code>
     * @return int|string
     */
    public function getSeqNo()
    {
        return $this->seq_no;
    }

    /**
     * Sequence number that provided with message on write from client.
     *
     * Generated from protobuf field <code>uint64 seq_no = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeqNo($var)
    {
        GPBUtil::checkUint64($var);
        $this->seq_no = $var;

        return $this;
    }

    /**
     * Timestamp of creation of message provided on write from client.
     *
     * Generated from protobuf field <code>uint64 create_timestamp_ms = 3;</code>
     * @return int|string
     */
    public function getCreateTimestampMs()
    {
        return $this->create_timestamp_ms;
    }

    /**
     * Timestamp of creation of message provided on write from client.
     *
     * Generated from protobuf field <code>uint64 create_timestamp_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_timestamp_ms = $var;

        return $this;
    }

    /**
     * Codec that is used for data compressing.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Codec codec = 4;</code>
     * @return int
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Codec that is used for data compressing.
     *
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.Codec codec = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkEnum($var, \Ydb\PersQueue\V1\Codec::class);
        $this->codec = $var;

        return $this;
    }

    /**
     * Compressed client message body.
     *
     * Generated from protobuf field <code>bytes data = 5;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Compressed client message body.
     *
     * Generated from protobuf field <code>bytes data = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Uncompressed size of client message body.
     *
     * Generated from protobuf field <code>uint64 uncompressed_size = 6;</code>
     * @return int|string
     */
    public function getUncompressedSize()
    {
        return $this->uncompressed_size;
    }

    /**
     * Uncompressed size of client message body.
     *
     * Generated from protobuf field <code>uint64 uncompressed_size = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUncompressedSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->uncompressed_size = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MessageData::class, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage_DataBatch_MessageData::class);
