<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_coordination.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class YdbCoordination
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbOperation::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbStatusCodes::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbIssueMessage::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbScheme::initOnce();
        $pool->internalAddGeneratedFile(
            '
�2
/kikimr/public/api/protos/ydb_coordination.protoYdb.Coordination/kikimr/public/api/protos/ydb_status_codes.proto0kikimr/public/api/protos/ydb_issue_message.proto)kikimr/public/api/protos/ydb_scheme.proto"
Unsupported"�
Config
path (	 
self_check_period_millis (#
session_grace_period_millis (@
read_consistency_mode (2!.Ydb.Coordination.ConsistencyModeB
attach_consistency_mode (2!.Ydb.Coordination.ConsistencyModeM
rate_limiter_counters_mode (2).Ydb.Coordination.RateLimiterCountersMode"g
SessionDescription

session_id (
timeout_millis (
description (	
attached ("m
SemaphoreSession
order_id (

session_id (
timeout_millis (
count (
data ("�
SemaphoreDescription
name (	
data (
count (
limit (
	ephemeral (2
owners (2".Ydb.Coordination.SemaphoreSession3
waiters (2".Ydb.Coordination.SemaphoreSession"�
SessionRequest9
ping (2).Ydb.Coordination.SessionRequest.PingPongH 9
pong (2).Ydb.Coordination.SessionRequest.PingPongH F
session_start (2-.Ydb.Coordination.SessionRequest.SessionStartH D
session_stop (2,.Ydb.Coordination.SessionRequest.SessionStopH 6
unsupported_5 (2.Ydb.Coordination.UnsupportedH 6
unsupported_6 (2.Ydb.Coordination.UnsupportedH N
acquire_semaphore (21.Ydb.Coordination.SessionRequest.AcquireSemaphoreH N
release_semaphore (21.Ydb.Coordination.SessionRequest.ReleaseSemaphoreH P
describe_semaphore	 (22.Ydb.Coordination.SessionRequest.DescribeSemaphoreH L
create_semaphore
 (20.Ydb.Coordination.SessionRequest.CreateSemaphoreH L
update_semaphore (20.Ydb.Coordination.SessionRequest.UpdateSemaphoreH L
delete_semaphore (20.Ydb.Coordination.SessionRequest.DeleteSemaphoreH 7
unsupported_13 (2.Ydb.Coordination.UnsupportedH 7
unsupported_14 (2.Ydb.Coordination.UnsupportedH 7
unsupported_15 (2.Ydb.Coordination.UnsupportedH 
PingPong
opaque (�
SessionStart
path (	

session_id (
timeout_millis (
description (	
seq_no (
protection_key (
SessionStopx
AcquireSemaphore
req_id (
name (	
timeout_millis (
count (
data (
	ephemeral (0
ReleaseSemaphore
req_id (
name (	�
DescribeSemaphore
req_id (
name (	
include_owners (
include_waiters (

watch_data (
watch_owners (L
CreateSemaphore
req_id (
name (	
limit (
data (=
UpdateSemaphore
req_id (
name (	
data (>
DeleteSemaphore
req_id (
name (	
force (B	
request"�
SessionResponse:
ping (2*.Ydb.Coordination.SessionResponse.PingPongH :
pong (2*.Ydb.Coordination.SessionResponse.PingPongH <
failure (2).Ydb.Coordination.SessionResponse.FailureH K
session_started (20.Ydb.Coordination.SessionResponse.SessionStartedH K
session_stopped (20.Ydb.Coordination.SessionResponse.SessionStoppedH 6
unsupported_6 (2.Ydb.Coordination.UnsupportedH 6
unsupported_7 (2.Ydb.Coordination.UnsupportedH ^
acquire_semaphore_pending (29.Ydb.Coordination.SessionResponse.AcquireSemaphorePendingH \\
acquire_semaphore_result	 (28.Ydb.Coordination.SessionResponse.AcquireSemaphoreResultH \\
release_semaphore_result
 (28.Ydb.Coordination.SessionResponse.ReleaseSemaphoreResultH ^
describe_semaphore_result (29.Ydb.Coordination.SessionResponse.DescribeSemaphoreResultH `
describe_semaphore_changed (2:.Ydb.Coordination.SessionResponse.DescribeSemaphoreChangedH Z
create_semaphore_result (27.Ydb.Coordination.SessionResponse.CreateSemaphoreResultH Z
update_semaphore_result (27.Ydb.Coordination.SessionResponse.UpdateSemaphoreResultH Z
delete_semaphore_result (27.Ydb.Coordination.SessionResponse.DeleteSemaphoreResultH 7
unsupported_16 (2.Ydb.Coordination.UnsupportedH 7
unsupported_17 (2.Ydb.Coordination.UnsupportedH 7
unsupported_18 (2.Ydb.Coordination.UnsupportedH 
PingPong
opaque (]
Failure)
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage<
SessionStarted

session_id (
timeout_millis ($
SessionStopped

session_id ()
AcquireSemaphorePending
req_id (�
AcquireSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage
acquired (�
ReleaseSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage
released (�
DescribeSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessageE
semaphore_description (2&.Ydb.Coordination.SemaphoreDescription
watch_added (X
DescribeSemaphoreChanged
req_id (
data_changed (
owners_changed ({
CreateSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage{
UpdateSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage{
DeleteSemaphoreResult
req_id ()
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessageB

response"�
CreateNodeRequest
path (	(
config (2.Ydb.Coordination.Config9
operation_params (2.Ydb.Operations.OperationParams"B
CreateNodeResponse,
	operation (2.Ydb.Operations.Operation"�
AlterNodeRequest
path (	(
config (2.Ydb.Coordination.Config9
operation_params (2.Ydb.Operations.OperationParams"A
AlterNodeResponse,
	operation (2.Ydb.Operations.Operation"Z
DropNodeRequest
path (	9
operation_params (2.Ydb.Operations.OperationParams"@
DropNodeResponse,
	operation (2.Ydb.Operations.Operation"^
DescribeNodeRequest
path (	9
operation_params (2.Ydb.Operations.OperationParams"D
DescribeNodeResponse,
	operation (2.Ydb.Operations.Operation"_
DescribeNodeResult
self (2.Ydb.Scheme.Entry(
config (2.Ydb.Coordination.Config*h
ConsistencyMode
CONSISTENCY_MODE_UNSET 
CONSISTENCY_MODE_STRICT
CONSISTENCY_MODE_RELAXED*�
RateLimiterCountersMode$
 RATE_LIMITER_COUNTERS_MODE_UNSET )
%RATE_LIMITER_COUNTERS_MODE_AGGREGATED\'
#RATE_LIMITER_COUNTERS_MODE_DETAILEDB6
com.yandex.ydb.coordinationBCoordinationProtosP�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

