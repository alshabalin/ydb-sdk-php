<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_discovery.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class YdbDiscovery
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbOperation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,kikimr/public/api/protos/ydb_discovery.protoYdb.Discovery"9
ListEndpointsRequest
database (	
service (	"r
EndpointInfo
address (	
port (
load_factor (
ssl (
service (	
location (	"\\
ListEndpointsResult.
	endpoints (2.Ydb.Discovery.EndpointInfo
self_location (	"E
ListEndpointsResponse,
	operation (2.Ydb.Operations.Operation"\'
WhoAmIRequest
include_groups (",
WhoAmIResult
user (	
groups (	">
WhoAmIResponse,
	operation (2.Ydb.Operations.OperationB.
com.yandex.ydb.discoveryBDiscoveryProtos�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

