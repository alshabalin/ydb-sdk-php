<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_rate_limiter.proto

namespace Ydb\RateLimiter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.RateLimiter.CreateResourceRequest</code>
 */
class CreateResourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     */
    protected $operation_params = null;
    /**
     * Path of a coordination node.
     *
     * Generated from protobuf field <code>string coordination_node_path = 2;</code>
     */
    protected $coordination_node_path = '';
    /**
     * Resource properties.
     *
     * Generated from protobuf field <code>.Ydb.RateLimiter.Resource resource = 3;</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\OperationParams $operation_params
     *     @type string $coordination_node_path
     *           Path of a coordination node.
     *     @type \Ydb\RateLimiter\Resource $resource
     *           Resource properties.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbRateLimiter::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @return \Ydb\Operations\OperationParams
     */
    public function getOperationParams()
    {
        return isset($this->operation_params) ? $this->operation_params : null;
    }

    public function hasOperationParams()
    {
        return isset($this->operation_params);
    }

    public function clearOperationParams()
    {
        unset($this->operation_params);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @param \Ydb\Operations\OperationParams $var
     * @return $this
     */
    public function setOperationParams($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\OperationParams::class);
        $this->operation_params = $var;

        return $this;
    }

    /**
     * Path of a coordination node.
     *
     * Generated from protobuf field <code>string coordination_node_path = 2;</code>
     * @return string
     */
    public function getCoordinationNodePath()
    {
        return $this->coordination_node_path;
    }

    /**
     * Path of a coordination node.
     *
     * Generated from protobuf field <code>string coordination_node_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCoordinationNodePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->coordination_node_path = $var;

        return $this;
    }

    /**
     * Resource properties.
     *
     * Generated from protobuf field <code>.Ydb.RateLimiter.Resource resource = 3;</code>
     * @return \Ydb\RateLimiter\Resource
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource : null;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Resource properties.
     *
     * Generated from protobuf field <code>.Ydb.RateLimiter.Resource resource = 3;</code>
     * @param \Ydb\RateLimiter\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Ydb\RateLimiter\Resource::class);
        $this->resource = $var;

        return $this;
    }

}

