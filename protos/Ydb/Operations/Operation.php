<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_operation.proto

namespace Ydb\Operations;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Operations.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of the operation, empty value means no active operation object is present (it was forgotten or
     * not created in the first place, as in SYNC operation mode).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * true - this operation has beed finished (doesn't matter successful or not),
     * so Status field has status code, and Result field can contains result data.
     * false - this operation still running. You can repeat request using operation Id.
     *
     * Generated from protobuf field <code>bool ready = 2;</code>
     */
    protected $ready = false;
    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 3;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 4;</code>
     */
    private $issues;
    /**
     * Result data
     *
     * Generated from protobuf field <code>.google.protobuf.Any result = 5;</code>
     */
    protected $result = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 6;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Identifier of the operation, empty value means no active operation object is present (it was forgotten or
     *           not created in the first place, as in SYNC operation mode).
     *     @type bool $ready
     *           true - this operation has beed finished (doesn't matter successful or not),
     *           so Status field has status code, and Result field can contains result data.
     *           false - this operation still running. You can repeat request using operation Id.
     *     @type int $status
     *     @type \Ydb\Issue\IssueMessage[]|\Google\Protobuf\Internal\RepeatedField $issues
     *     @type \Google\Protobuf\Any $result
     *           Result data
     *     @type \Google\Protobuf\Any $metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbOperation::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of the operation, empty value means no active operation object is present (it was forgotten or
     * not created in the first place, as in SYNC operation mode).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Identifier of the operation, empty value means no active operation object is present (it was forgotten or
     * not created in the first place, as in SYNC operation mode).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * true - this operation has beed finished (doesn't matter successful or not),
     * so Status field has status code, and Result field can contains result data.
     * false - this operation still running. You can repeat request using operation Id.
     *
     * Generated from protobuf field <code>bool ready = 2;</code>
     * @return bool
     */
    public function getReady()
    {
        return $this->ready;
    }

    /**
     * true - this operation has beed finished (doesn't matter successful or not),
     * so Status field has status code, and Result field can contains result data.
     * false - this operation still running. You can repeat request using operation Id.
     *
     * Generated from protobuf field <code>bool ready = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setReady($var)
    {
        GPBUtil::checkBool($var);
        $this->ready = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 3;</code>
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
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 4;</code>
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
     * Result data
     *
     * Generated from protobuf field <code>.google.protobuf.Any result = 5;</code>
     * @return \Google\Protobuf\Any
     */
    public function getResult()
    {
        return isset($this->result) ? $this->result : null;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Result data
     *
     * Generated from protobuf field <code>.google.protobuf.Any result = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 6;</code>
     * @return \Google\Protobuf\Any
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 6;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->metadata = $var;

        return $this;
    }

}

