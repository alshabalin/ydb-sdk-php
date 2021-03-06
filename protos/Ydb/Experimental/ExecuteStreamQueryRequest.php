<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_experimental.proto

namespace Ydb\Experimental;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Experimental.ExecuteStreamQueryRequest</code>
 */
class ExecuteStreamQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string yql_text = 1;</code>
     */
    protected $yql_text = '';
    /**
     * Generated from protobuf field <code>map<string, .Ydb.TypedValue> parameters = 2;</code>
     */
    private $parameters;
    /**
     * Generated from protobuf field <code>.Ydb.Experimental.ExecuteStreamQueryRequest.ProfileMode profile_mode = 3;</code>
     */
    protected $profile_mode = 0;
    /**
     * Generated from protobuf field <code>bool explain = 4;</code>
     */
    protected $explain = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $yql_text
     *     @type array|\Google\Protobuf\Internal\MapField $parameters
     *     @type int $profile_mode
     *     @type bool $explain
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbExperimental::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string yql_text = 1;</code>
     * @return string
     */
    public function getYqlText()
    {
        return $this->yql_text;
    }

    /**
     * Generated from protobuf field <code>string yql_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setYqlText($var)
    {
        GPBUtil::checkString($var, True);
        $this->yql_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .Ydb.TypedValue> parameters = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Generated from protobuf field <code>map<string, .Ydb.TypedValue> parameters = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\TypedValue::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Experimental.ExecuteStreamQueryRequest.ProfileMode profile_mode = 3;</code>
     * @return int
     */
    public function getProfileMode()
    {
        return $this->profile_mode;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Experimental.ExecuteStreamQueryRequest.ProfileMode profile_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProfileMode($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Experimental\ExecuteStreamQueryRequest\ProfileMode::class);
        $this->profile_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool explain = 4;</code>
     * @return bool
     */
    public function getExplain()
    {
        return $this->explain;
    }

    /**
     * Generated from protobuf field <code>bool explain = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setExplain($var)
    {
        GPBUtil::checkBool($var);
        $this->explain = $var;

        return $this;
    }

}

