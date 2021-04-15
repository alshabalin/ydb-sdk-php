<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_cms.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class YdbCms
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
�
&kikimr/public/api/protos/ydb_cms.protoYdb.Cms"0
StorageUnits
	unit_kind (	
count ("Q
ComputationalUnits
	unit_kind (	
availability_zone (	
count ("K
AllocatedComputationalUnit
host (	
port (
	unit_kind (	"s
	Resources,
storage_units (2.Ydb.Cms.StorageUnits8
computational_units (2.Ydb.Cms.ComputationalUnits"3
ServerlessResources
shared_database_path (	"j
DatabaseOptions
disable_tx_service ("
disable_external_subdomain (
plan_resolution ("(
	Attribute
name (	
value (	"�
SchemaOperationQuotasG
leaky_bucket_quotas (2*.Ydb.Cms.SchemaOperationQuotas.LeakyBucket:
LeakyBucket
bucket_size (
bucket_seconds ("�
CreateDatabaseRequest9
operation_params (2.Ydb.Operations.OperationParams
path (	\'
	resources (2.Ydb.Cms.ResourcesH .
shared_resources (2.Ydb.Cms.ResourcesH <
serverless_resources (2.Ydb.Cms.ServerlessResourcesH )
options (2.Ydb.Cms.DatabaseOptions&

attributes (2.Ydb.Cms.Attribute?
schema_operation_quotas (2.Ydb.Cms.SchemaOperationQuotas
idempotency_key	 (	B
resources_kind"F
CreateDatabaseResponse,
	operation (2.Ydb.Operations.Operation"c
GetDatabaseStatusRequest
path (	9
operation_params (2.Ydb.Operations.OperationParams"I
GetDatabaseStatusResponse,
	operation (2.Ydb.Operations.Operation"�
GetDatabaseStatusResult
path (	5
state (2&.Ydb.Cms.GetDatabaseStatusResult.State0
required_resources (2.Ydb.Cms.ResourcesH 7
required_shared_resources (2.Ydb.Cms.ResourcesH <
serverless_resources (2.Ydb.Cms.ServerlessResourcesH /
allocated_resources (2.Ydb.Cms.ResourcesA
registered_resources (2#.Ydb.Cms.AllocatedComputationalUnit

generation (?
schema_operation_quotas	 (2.Ydb.Cms.SchemaOperationQuotas"^
State
STATE_UNSPECIFIED 
CREATING
RUNNING
REMOVING
PENDING_RESOURCESB
resources_kind"�
AlterDatabaseRequest
path (	?
computational_units_to_add (2.Ydb.Cms.ComputationalUnitsB
computational_units_to_remove (2.Ydb.Cms.ComputationalUnits3
storage_units_to_add (2.Ydb.Cms.StorageUnitsL
computational_units_to_register (2#.Ydb.Cms.AllocatedComputationalUnitN
!computational_units_to_deregister (2#.Ydb.Cms.AllocatedComputationalUnit9
operation_params (2.Ydb.Operations.OperationParams

generation (?
schema_operation_quotas	 (2.Ydb.Cms.SchemaOperationQuotas
idempotency_key
 (	"E
AlterDatabaseResponse,
	operation (2.Ydb.Operations.Operation"Q
ListDatabasesRequest9
operation_params (2.Ydb.Operations.OperationParams"E
ListDatabasesResponse,
	operation (2.Ydb.Operations.Operation"$
ListDatabasesResult
paths (	"`
RemoveDatabaseRequest
path (	9
operation_params (2.Ydb.Operations.OperationParams"F
RemoveDatabaseResponse,
	operation (2.Ydb.Operations.Operation"�
StorageUnitDescription
kind (	;
labels (2+.Ydb.Cms.StorageUnitDescription.LabelsEntry-
LabelsEntry
key (	
value (	:8"�
AvailabilityZoneDescription
name (	@
labels (20.Ydb.Cms.AvailabilityZoneDescription.LabelsEntry-
LabelsEntry
key (	
value (	:8"�
ComputationalUnitDescription
kind (	A
labels (21.Ydb.Cms.ComputationalUnitDescription.LabelsEntry"
allowed_availability_zones (	-
LabelsEntry
key (	
value (	:8"[
DescribeDatabaseOptionsRequest9
operation_params (2.Ydb.Operations.OperationParams"O
DescribeDatabaseOptionsResponse,
	operation (2.Ydb.Operations.Operation"�
DescribeDatabaseOptionsResult6
storage_units (2.Ydb.Cms.StorageUnitDescription@
availability_zones (2$.Ydb.Cms.AvailabilityZoneDescriptionB
computational_units (2%.Ydb.Cms.ComputationalUnitDescriptionB
com.yandex.ydb.cms�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

