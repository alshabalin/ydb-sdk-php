<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadServerMessage</code>
 */
class MigrationStreamingReadServerMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     */
    private $issues;
    protected $response;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type \Ydb\Issue\IssueMessage[]|\Google\Protobuf\Internal\RepeatedField $issues
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\InitResponse $init_response
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\DataBatch $data_batch
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Assigned $assigned
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Release $release
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Committed $committed
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\PartitionStatus $partition_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\StatusIds\StatusCode::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     * @param \Ydb\Issue\IssueMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Issue\IssueMessage::class);
        $this->issues = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.InitResponse init_response = 3;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\InitResponse
     */
    public function getInitResponse()
    {
        return $this->readOneof(3);
    }

    public function hasInitResponse()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.InitResponse init_response = 3;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\InitResponse $var
     * @return $this
     */
    public function setInitResponse($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\InitResponse::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.DataBatch data_batch = 4;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\DataBatch
     */
    public function getDataBatch()
    {
        return $this->readOneof(4);
    }

    public function hasDataBatch()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.DataBatch data_batch = 4;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\DataBatch $var
     * @return $this
     */
    public function setDataBatch($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\DataBatch::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Assigned assigned = 5;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Assigned
     */
    public function getAssigned()
    {
        return $this->readOneof(5);
    }

    public function hasAssigned()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Assigned assigned = 5;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Assigned $var
     * @return $this
     */
    public function setAssigned($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Assigned::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Release release = 6;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Release
     */
    public function getRelease()
    {
        return $this->readOneof(6);
    }

    public function hasRelease()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Release release = 6;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Release $var
     * @return $this
     */
    public function setRelease($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Release::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Committed committed = 7;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Committed
     */
    public function getCommitted()
    {
        return $this->readOneof(7);
    }

    public function hasCommitted()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.Committed committed = 7;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Committed $var
     * @return $this
     */
    public function setCommitted($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\Committed::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.PartitionStatus partition_status = 8;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\PartitionStatus
     */
    public function getPartitionStatus()
    {
        return $this->readOneof(8);
    }

    public function hasPartitionStatus()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadServerMessage.PartitionStatus partition_status = 8;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\PartitionStatus $var
     * @return $this
     */
    public function setPartitionStatus($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadServerMessage\PartitionStatus::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->whichOneof("response");
    }

}

