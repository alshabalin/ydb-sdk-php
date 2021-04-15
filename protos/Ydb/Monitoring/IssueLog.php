<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.IssueLog</code>
 */
class IssueLog extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string message = 3;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.Location location = 4;</code>
     */
    protected $location = null;
    /**
     * Generated from protobuf field <code>repeated string reason = 5;</code>
     */
    private $reason;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $status
     *     @type string $message
     *     @type \Ydb\Monitoring\Location $location
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Monitoring\StatusFlag\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.Location location = 4;</code>
     * @return \Ydb\Monitoring\Location
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : null;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.Location location = 4;</code>
     * @param \Ydb\Monitoring\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Monitoring\Location::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string reason = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>repeated string reason = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReason($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reason = $arr;

        return $this;
    }

}

