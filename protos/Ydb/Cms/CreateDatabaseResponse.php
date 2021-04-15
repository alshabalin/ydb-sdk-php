<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_cms.proto

namespace Ydb\Cms;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Cms.CreateDatabaseResponse</code>
 */
class CreateDatabaseResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\Operation $operation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbCms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     * @return \Ydb\Operations\Operation
     */
    public function getOperation()
    {
        return isset($this->operation) ? $this->operation : null;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     * @param \Ydb\Operations\Operation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\Operation::class);
        $this->operation = $var;

        return $this;
    }

}

