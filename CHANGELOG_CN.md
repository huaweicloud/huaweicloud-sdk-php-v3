# 3.1.85 2024-04-01

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListBareMetalServers**
    - 响应参数变更
      - `- servers.image.name`
      - `- servers.image.__os_type`
      - `- servers.image.links`
  - **ListBareMetalServerDetails**
    - 响应参数变更
      - `- server.image.name`
      - `- server.image.__os_type`
      - `- server.image.links`

### HuaweiCloud SDK KPS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateKeypair**
    - 请求参数变更
      - `+ keypair.key_protection.encryption.kms_key_id`
  - **ImportPrivateKey**
    - 请求参数变更
      - `+ keypair.key_protection.encryption.kms_key_id`
    - 响应参数变更
      - `+ keypair.key_protection.encryption.kms_key_id`

# 3.1.84 2024-03-28

### HuaweiCloud SDK APIG

- _新增特性_
  - 支持以下接口：
    - `UpdateSlDomainSettingV2`
    - `ExportApiDefinitionsAsync`
    - `ImportApiDefinitionsAsync`
    - `ShowAsyncTaskResult`
    - `ListInstanceFeatures`
- _解决问题_
  - 无
- _特性变更_
  - **DeleteGatewayResponseTypeV2**
    - 请求参数变更
      - `+ response_type: enum value [ORCHESTRATION_PARAMETER_NOT_FOUND,ORCHESTRATION_FAILURE]`
  - **ShowDetailsOfGatewayResponseTypeV2**
    - 请求参数变更
      - `+ response_type: enum value [ORCHESTRATION_PARAMETER_NOT_FOUND,ORCHESTRATION_FAILURE]`
  - **UpdateGatewayResponseTypeV2**
    - 请求参数变更
      - `+ response_type: enum value [ORCHESTRATION_PARAMETER_NOT_FOUND,ORCHESTRATION_FAILURE]`
      - `+ headers`
  - **ShowDetailsOfApiGroupV2**
    - 响应参数变更
      - `+ sl_domain_access_enabled`
  - **UpdateApiGroupV2**
    - 响应参数变更
      - `+ sl_domain_access_enabled`
  - **ShowDetailsOfInstanceV2**
    - 响应参数变更
      - `+ public_ipv6_ips`
      - `+ unreliable_ips`
      - `+ node_ipv6_ips`
      - `+ enable_fullstack_ipv6`
      - `+ publicips.ipv6_address`
  - **UpdateInstanceV2**
    - 响应参数变更
      - `+ public_ipv6_ips`
      - `+ unreliable_ips`
      - `+ node_ipv6_ips`
      - `+ enable_fullstack_ipv6`
      - `+ publicips.ipv6_address`
  - **CreateApiGroupV2**
    - 响应参数变更
      - `+ sl_domain_access_enabled`
  - **ListApiGroupsV2**
    - 响应参数变更
      - `+ sl_domain_access_enabled`
      - `+ groups.sl_domain_access_enabled`
  - **ShowDetailsOfApiV2**
    - 响应参数变更
      - `+ func_info.req_protocol`
      - `+ api_group_info.sl_domain_access_enabled`
      - `+ policy_functions.req_protocol`
  - **UpdateApiV2**
    - 请求参数变更
      - `+ func_info.req_protocol`
      - `+ policy_functions.req_protocol`
    - 响应参数变更
      - `+ func_info.req_protocol`
      - `+ api_group_info.sl_domain_access_enabled`
      - `+ policy_functions.req_protocol`
  - **ListApiVersionDetailV2**
    - 响应参数变更
      - `+ func_info.req_protocol`
      - `+ api_group_info.sl_domain_access_enabled`
      - `+ policy_functions.req_protocol`
  - **CreateApiV2**
    - 请求参数变更
      - `+ func_info.req_protocol`
      - `+ policy_functions.req_protocol`
    - 响应参数变更
      - `+ func_info.req_protocol`
      - `+ api_group_info.sl_domain_access_enabled`
      - `+ policy_functions.req_protocol`
  - **ListApisV2**
    - 响应参数变更
      - `+ apis.api_group_info.sl_domain_access_enabled`

### HuaweiCloud SDK CBR

- _新增特性_
  - 支持以下接口：
    - `ListOrganizationPolicies`
    - `CreateOrganizationPolicy`
    - `ShowOrganizationPolicy`
    - `UpdateOrganizationPolicy`
    - `DeleteOrganizationPolicy`
    - `ListOrganizationPolicyDetail`
- _解决问题_
  - 无
- _特性变更_
  - **ShowBackup**
    - 响应参数变更
      - `+ backup.incremental`
      - `- backup.extend_info.incremental`
  - **UpdateBackup**
    - 响应参数变更
      - `+ backup.incremental`
      - `- backup.extend_info.incremental`
  - **ListBackups**
    - 响应参数变更
      - `+ backups.incremental`
      - `- backups.extend_info.incremental`
  - **ListVault**
    - 响应参数变更
      - `- sys_lock_source_service`
  - **CreateVault**
    - 请求参数变更
      - `+ vault.sys_lock_source_service`
  - **ListExternalVault**
    - 响应参数变更
      - `- sys_lock_source_service`

### HuaweiCloud SDK CC

- _新增特性_
  - 支持以下接口：
    - `ListCentralNetworksByTags`
    - `ListCentralNetworkErRouteTableAttachments`
    - `CreateCentralNetworkErRouteTableAttachment`
    - `ShowCentralNetworkErRouteTableAttachment`
    - `UpdateCentralNetworkErRouteTableAttachment`
- _解决问题_
  - 无
- _特性变更_
  - **ListGlobalConnectionBandwidthConfigs**
    - 响应参数变更
      - `+ configs.ratio_95peak_plus`
      - `+ configs.enable_area_bandwidth`
      - `+ configs.enable_change_95`
      - `+ configs.enable_spec_code`
      - `+ configs.size_range.type`
      - `- configs.size_range.charge_mode`
  - **ListGlobalConnectionBandwidths**
    - 响应参数变更
      - `+ globalconnection_bandwidths.local_area`
      - `+ globalconnection_bandwidths.remote_area`
      - `+ globalconnection_bandwidths.admin_state`
  - **CreateGlobalConnectionBandwidth**
    - 响应参数变更
      - `+ globalconnection_bandwidth.local_area`
      - `+ globalconnection_bandwidth.remote_area`
      - `+ globalconnection_bandwidth.admin_state`
  - **ShowGlobalConnectionBandwidth**
    - 响应参数变更
      - `+ globalconnection_bandwidth.local_area`
      - `+ globalconnection_bandwidth.remote_area`
      - `+ globalconnection_bandwidth.admin_state`
  - **UpdateGlobalConnectionBandwidth**
    - 响应参数变更
      - `+ globalconnection_bandwidth.local_area`
      - `+ globalconnection_bandwidth.remote_area`
      - `+ globalconnection_bandwidth.admin_state`
  - **ListSupportBindingConnectionBandwidths**
    - 响应参数变更
      - `+ globalconnection_bandwidths.local_area`
      - `+ globalconnection_bandwidths.remote_area`
      - `+ globalconnection_bandwidths.admin_state`

### HuaweiCloud SDK CCE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowNodePoolConfigurationDetails**
    - 响应参数变更
      - `- kubelet`
  - **ShowClusterConfigurationDetails**
    - 响应参数变更
      - `- kube-apiserver`
  - **ShowCluster**
    - 响应参数变更
      - `- spec.enableAutopilot`
  - **UpdateCluster**
    - 响应参数变更
      - `- spec.enableAutopilot`
  - **DeleteCluster**
    - 请求参数变更
      - `+ lts_reclaim_policy`
    - 响应参数变更
      - `- spec.enableAutopilot`
  - **CreateCluster**
    - 请求参数变更
      - `- spec.enableAutopilot`
    - 响应参数变更
      - `- spec.enableAutopilot`
  - **ListClusters**
    - 响应参数变更
      - `- items.spec.enableAutopilot`

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListFlowLogs**
    - 响应参数变更
      - `* data.records.bytes: int32 -> double`

### HuaweiCloud SDK CTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateTracker**
    - 请求参数变更
      - `+ agency_name`
  - **CreateTracker**
    - 请求参数变更
      - `+ agency_name`
    - 响应参数变更
      - `+ agency_name`
  - **ListTrackers**
    - 响应参数变更
      - `+ trackers.agency_name`
  - **UpdateNotification**
    - 请求参数变更
      - `+ agency_name`
    - 响应参数变更
      - `+ agency_name`
  - **CreateNotification**
    - 请求参数变更
      - `+ agency_name`
    - 响应参数变更
      - `+ agency_name`
  - **ListNotifications**
    - 响应参数变更
      - `+ notifications.agency_name`

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSqlJobs**
    - 请求参数变更
      - `+ job-type: enum value [ALL]`
  - **ShowSqlJobDetail**
    - 响应参数变更
      - `+ owner`
      - `+ database_name`
      - `+ compress`
      - `+ escape_char`
      - `+ is_success`
      - `+ message`
      - `+ table_name`
      - `+ export_mode`
      - `+ data_path`
      - `+ tags`
      - `+ duration`
      - `+ with_column_header`
      - `+ quote_char`
      - `+ timestamp_format`
      - `+ start_time`
      - `+ job_id`
      - `+ delimiter`
      - `+ data_type`
      - `+ date_format`
  - **ShowSqlJobProgress**
    - 响应参数变更
      - `+ sub_jobs`
      - `+ job_id`
      - `+ progress`
      - `+ is_success`
      - `+ message`
      - `+ status`
      - `+ sub_job_id`
  - **ListAuthorizationPrivileges**
    - 响应参数变更
      - `+ privileges`
      - `+ object_type`
      - `+ object_name`
      - `+ count`
      - `+ is_success`
      - `+ message`
  - **ListPartitions**
    - 响应参数变更
      - `+ partitions`
      - `+ is_success`
      - `+ message`
  - **ShowEnhancedConnectionPrivilege**
    - 响应参数变更
      - `+ privileges`
      - `+ connection_id`
      - `+ is_success`
      - `+ message`
  - **ShowFlinkJob**
    - 响应参数变更
      - `+ job_detail`
      - `+ is_success`
      - `+ message`
  - **DeleteFlinkJob**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **ListFlinkJobs**
    - 响应参数变更
      - `+ job_list`
      - `+ is_success`
      - `+ message`
  - **ShowFlinkJobExecutionGraph**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ execute_graph`
  - **ShowDliAgency**
    - 响应参数变更
      - `+ current_roles`
      - `+ is_success`
      - `+ message`
      - `+ version`
  - **CreateDliAgency**
    - 请求参数变更
      - `* body: object<CreateAgencyRequest> -> object<CreateDliAgencyRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **UpdateJobResourceOwner**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **ShowQueue**
    - 响应参数变更
      - `+ owner`
      - `+ chargingMode`
      - `+ create_time`
      - `+ cu_scale_in_limit`
      - `+ resource_type`
      - `+ cu_spec`
      - `+ description`
      - `+ cuCount`
      - `+ elastic_resource_pool_name`
      - `+ is_success`
      - `+ message`
      - `+ enterprise_project_id`
      - `+ queueName`
      - `+ resource_mode`
      - `+ cu_scale_out_limit`
      - `+ queueType`
      - `+ resource_id`
      - `+ queue_id`
  - **RunQueueAction**
    - 响应参数变更
      - `+ queue_name`
      - `+ result`
      - `+ job_id`
      - `+ is_success`
      - `+ message`
  - **ListQueuePlans**
    - 响应参数变更
      - `+ plans`
      - `+ is_success`
      - `+ message`
  - **CreateQueuePlan**
    - 请求参数变更
      - `* body: object<SetQueuePlanReq> -> object<QueuePlanRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **BatchDeleteQueuePlans**
    - 请求参数变更
      - `* body: object<QueuePlanIds> -> object<BatchDeleteQueuePlansRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **DeleteQueuePlan**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **UpdateQueuePlan**
    - 请求参数变更
      - `* body: object<SetQueuePlanReq> -> object<QueuePlanRequestBody>`
    - 响应参数变更
      - `+ queue_name`
      - `+ is_success`
      - `+ message`
      - `+ plan_id`
  - **CreateGlobalVariable**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **UpdateGlobalVariable**
    - 请求参数变更
      - `* body: object<UpdateGlobalValueReq> -> object<UpdateGlobalVariableRequestBody>`
  - **DeleteFlinkSqlJobTemplate**
    - 响应参数变更
      - `+ template`
      - `+ is_success`
      - `+ message`
  - **UpdateFlinkSqlJobTemplate**
    - 请求参数变更
      - `* body: object<UpdateFlinkTemplateRequestBody> -> object<UpdateFlinkSqlJobTemplateRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **RegisterBucket**
    - 请求参数变更
      - `* body: object<ObsBuckets> -> object<RegisterBucketRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **UpdateFlinkSqlJob**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ job`
  - **UpdateFlinkJarJob**
    - 请求参数变更
      - `* body: object<UpdateFlinkJarRequestBody> -> object<UpdateFlinkJarJobRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ job`
  - **BatchDeleteFlinkJobs**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **ShowFlinkMetric**
    - 响应参数变更
      - `+ metrics`
      - `+ is_success`
      - `+ message`
  - **ExportFlinkJobs**
    - 请求参数变更
      - `* body: object<ExportFlinkJobRequestBody> -> object<ExportFlinkJobsRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ zip_file`
  - **ImportFlinkJobs**
    - 响应参数变更
      - `+ job_mapping`
      - `+ is_success`
      - `+ message`
  - **CreateFlinkSqlJobGraph**
    - 请求参数变更
      - `+ flink_version: enum value [1.1,1.12]`
      - `+ graph_type: enum value [simple_graph,job_graph]`
      - `* body: object<GenStreamGraphReq> -> object<CreateFlinkSqlJobGraphRequestBody>`
    - 响应参数变更
      - `+ stream_graph`
      - `+ error_code`
      - `+ is_success`
      - `+ message`
  - **CreateIefMessageChannel**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **ListQueueProperties**
    - 响应参数变更
      - `* properties: list<object> -> list<Property>`
  - **UploadJobResources**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<UploadPackageGroupReq> -> object<UploadJobResourcesRequestBody>`
  - **ListSparkJobs**
    - 响应参数变更
      - `+ total`
      - `+ sessions`
      - `+ create_time`
      - `+ from`
  - **CreateSparkJob**
    - 请求参数变更
      - `* body: object<BatchJobInfo> -> object<CreateSparkJobRequestBody>`
  - **CreateSqlJob**
    - 请求参数变更
      - `+ engine_type`
      - `* tags: list<TmsTagEntity> -> list<Tag>`
  - **CreateDatabase**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
  - **CreateTable**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateTableReq> -> object<CreateTableRequestBody>`
  - **CreateQueue**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateQueueReq> -> object<CreateQueueRequestBody>`
  - **CreateEnhancedConnection**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateEnhancedConnectionsReq> -> object<CreateEnhancedConnectionRequestBody>`
  - **ListElasticResourcePools**
    - 响应参数变更
      - `* elastic_resource_pools: list<ElasticResourcePoolsResponse> -> list<ElasticResourcePool>`
  - **CreateElasticResourcePool**
    - 请求参数变更
      - `* tags: list<TmsTag> -> list<Tag>`
  - **UpdateElasticResourcePoolQueue**
    - 请求参数变更
      - `* queue_scaling_policies: list<QueueScalingPolicyInfo> -> list<QueueScalingPolicy>`
      - `* body: object<UpdateElasticResourcePoolQueueScalingPolicyInfo> -> object<UpdateElasticResourcePoolQueueRequestBody>`
  - **ListFlinkSqlJobTemplates**
    - 响应参数变更
      - `+ template_list`
      - `+ is_success`
      - `+ message`
  - **CreateFlinkSqlJobTemplate**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateFlinkTemplateRequestBody> -> object<CreateFlinkSqlJobTemplateRequestBody>`
    - 响应参数变更
      - `+ template`
      - `+ is_success`
      - `+ message`
  - **CreateFlinkSqlJob**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ job`
  - **CreateFlinkJarJob**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateFlinkJarRequestBody> -> object<CreateFlinkJarJobRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
      - `+ job`
  - **UpdateFlinkJobStatusReport**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **RunIefJobActionCallBack**
    - 请求参数变更
      - `* state: object<state> -> object<State>`
      - `* body: object<IefFlinkJobMessagesReq> -> object<RunIefJobActionCallBackRequestBody>`
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **CreateIefSystemEvents**
    - 响应参数变更
      - `+ is_success`
      - `+ message`
  - **CreateDatasourceConnection**
    - 请求参数变更
      - `* tags: list<TmsTagEntity> -> list<Tag>`
      - `* body: object<CreateDatasourceConnectionReq> -> object<CreateDatasourceConnectionRequestBody>`
  - **ListElasticResourcePoolQueues**
    - 响应参数变更
      - `* queues.queue_scaling_policies: list<QueueScalingPoliciesResponse> -> list<QueueScalingPolicy>`
      - `* queues: list<QueueInfo> -> list<ElasticResourcePoolQueue>`
  - **ShowSparkJobTemplate**
    - 响应参数变更
      - `* body: object<BatchJobInfo> -> object<SparkJobTemplateDetail>`
  - **ListSparkJobTemplates**
    - 响应参数变更
      - `* body: object<BatchJobInfo> -> object<SparkJobTemplateDetail>`
      - `* templates: list<JobTemplateInfo> -> list<SparkJobTemplate>`

### HuaweiCloud SDK DSC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `ListRelationDb`
    - `ListRelationTable`
    - `ListRelationColumn`
    - `ListRelationBuckets`
    - `ListRelationFile`

### HuaweiCloud SDK GA

- _新增特性_
  - 支持接口`ListResourcesByTag`、`CountResourcesByTag`、`ListTags`
- _解决问题_
  - 无
- _特性变更_
  - **CreateAccelerator**
    - 请求参数变更
      - `+ accelerator.ip_sets.ip_type: enum value [IPV6]`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`UpdateApplication`
- _解决问题_
  - 无
- _特性变更_
  - **CreateBatchTask**
    - 请求参数变更
      - `+ task_mode`
      - `+ task_ext_info`
    - 响应参数变更
      - `+ task_ext_info`
      - `+ task_mode`
  - **ListBatchTasks**
    - 响应参数变更
      - `+ task_ext_info`
      - `+ task_mode`
      - `+ batchtasks.task_mode`
      - `+ batchtasks.task_ext_info`
  - **ShowBatchTask**
    - 响应参数变更
      - `+ task_ext_info`
      - `+ task_mode`
      - `+ batchtask.task_mode`
      - `+ batchtask.task_ext_info`
  - **CreateOtaPackage**
    - 请求参数变更
      - `+ file_location.obs_location.sign`
    - 响应参数变更
      - `+ file_location.obs_location.sign`
  - **ShowOtaPackage**
    - 响应参数变更
      - `+ file_location.obs_location.sign`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持以下接口：
    - `ShowDiagnosisPreCheck`
    - `ListMessageDiagnosisReports`
    - `CreateMessageDiagnosisTask`
    - `BatchDeleteMessageDiagnosisReports`
    - `ShowMessageDiagnosisReport`
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstanceByEngine**
    - 请求参数变更
      - `+ ipv6_enable`
  - **ShowInstance**
    - 响应参数变更
      - `+ broker_ssl_enable`
      - `+ new_auth_cert`
      - `+ available_zone_names`
  - **ShowConnectorTask**
    - 响应参数变更
      - `+ source_task.rename_topic_enabled`
      - `- source_task.rename_topic_enable`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `- ipv6_enable`
  - **ListInstances**
    - 响应参数变更
      - `+ broker_ssl_enable`
      - `+ new_auth_cert`
      - `+ available_zone_names`
      - `+ instances.broker_ssl_enable`
      - `+ instances.available_zone_names`
      - `+ instances.new_auth_cert`
  - **CreateConnectorTask**
    - 请求参数变更
      - `+ source_task.rename_topic_enabled`
      - `- source_task.rename_topic_enable`
    - 响应参数变更
      - `+ source_task.rename_topic_enabled`
      - `- source_task.rename_topic_enable`
  - **ListConnectorTasks**
    - 响应参数变更
      - `+ tasks.source_task.rename_topic_enabled`
      - `- tasks.source_task.rename_topic_enable`
  - **CreateReassignmentTask**
    - 请求参数变更
      - `+ time_estimate`
    - 响应参数变更
      - `+ reassignment_time`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeMvsInvoice**
    - 响应参数变更
      - `+ result.reverse_issue`
  - **RecognizeThailandLicensePlate**
    - 响应参数变更
      - `+ result.province`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`BatchStopInstance`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListMessageTrace**
    - 响应参数变更
      - `* trace.retry_times: string -> int32`
  - **CreateInstanceByEngine**
    - 请求参数变更
      - `+ engine_version: enum value [[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[5.x](tag:hcs)]`
      - `- engine_version: enum value [4.8.0]`
      - `+ product_id: enum value [[c6.4u8g.cluster.small](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.2u8g.single.x86](tag:hcs),[c6.4u8g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.4u16g.cluster.x86](tag:hcs),[c6.8u16g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.8u32g.cluster.x86](tag:hcs),[c6.12u24g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.16u64g.cluster.x86](tag:hcs),[c6.16u32g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.32u128g.cluster.x86](tag:hcs),[c6.2u8g.single.arm](tag:hcs),[c6.4u16g.cluster.arm](tag:hcs),[c6.8u32g.cluster.arm](tag:hcs),[c6.16u64g.cluster.arm](tag:hcs),[c6.32u128g.cluster.arm](tag:hcs)]`
      - `- product_id: enum value [c6.4u8g.cluster.small,c6.4u8g.cluster,c6.8u16g.cluster,c6.12u24g.cluster,c6.16u32g.cluster]`
  - **CreateConsumerGroupOrBatchDeleteConsumerGroup**
    - 请求参数变更
      - `- createdAt`
      - `- permissions`
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `* groups.createdAt: string -> int64`
  - **BatchUpdateConsumerGroup**
    - 请求参数变更
      - `- groups.createdAt`
      - `- groups.permissions`
      - `* groups: list<ConsumerGroup> -> list<CreateOrUpdateConsumerGroup>`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `+ engine_version: enum value [[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[5.x](tag:hcs)]`
      - `- engine_version: enum value [4.8.0]`
      - `+ product_id: enum value [[c6.4u8g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.4u16g.cluster.x86](tag:hcs),[c6.8u16g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.8u32g.cluster.x86](tag:hcs),[c6.12u24g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.16u64g.cluster.x86](tag:hcs),[c6.16u32g.cluster](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm)[c6.32u128g.cluster.x86](tag:hcs),[c6.4u16g.cluster.arm](tag:hcs),[c6.8u32g.cluster.arm](tag:hcs),[c6.16u64g.cluster.arm](tag:hcs),[c6.32u128g.cluster.arm](tag:hcs)]`
      - `- product_id: enum value [c6.4u8g.cluster,c6.8u16g.cluster,c6.12u24g.cluster,c6.16u32g.cluster]`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **PublishHttpDetect**
    - 请求参数变更
      - `+ protocol: enum value [https]`
      - `- protocol: enum value [https;]`
  - **UpdateTaskStatus**
    - 请求参数变更
      - `+ operation: enum value [network_check]`
  - **UpdateCopyState**
    - 请求参数变更
      - `+ copystate: enum value [FINISHED]`
  - **UpdateNetworkCheckInfo**
    - 请求参数变更
      - `+ domain_connectivity`
      - `+ destination_connectivity`
  - **ListTasks**
    - 响应参数变更
      - `+ tasks.network_check_info.domain_connectivity`
      - `+ tasks.network_check_info.destination_connectivity`
  - **ShowTask**
    - 响应参数变更
      - `+ network_check_info.domain_connectivity`
      - `+ network_check_info.destination_connectivity`

# 3.1.83 2024-03-21

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **DeletePromInstance**
    - 请求参数变更
      - `+ Enterprise-Project-Id`
  - **ListPromInstance**
    - 请求参数变更
      - `+ Enterprise-Project-Id`
      - `+ prom_type: enum value [default]`
      - `+ prom_type: enum value [DEFAULT]`
    - 响应参数变更
      - `+ prometheus.prom_type: enum value [default]`
      - `- prometheus.prom_type: enum value [DEFAULT]`

### HuaweiCloud SDK CCE

- _新增特性_
  - 支持接口`ShowNodePoolConfigurationDetails`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowVerifyDomainOwnerInfo**
    - 响应参数变更
      - `+ file_verify_domains`

### HuaweiCloud SDK CodeArtsDeploy

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateApp**
    - 请求参数变更
      - `+ group_id`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持以下接口：
    - `ShowBusinessAssetsTree`
    - `RenewDataProfile`
    - `ListSecurityDatasourceConfigurations`
    - `ListSecurityDatasourceUrls`
    - `ListSecurityDatasourceActions`
    - `ListSecurityRoleActions`
    - `ListSecuritySecrecyLevels`
    - `CreateSecuritySecrecyLevel`
    - `ShowSecuritySecrecyLevel`
    - `UpdateSecuritySecrecyLevel`
    - `DeleteSecuritySecrecyLevel`
    - `BatchDeleteSecuritySecrecyLevels`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持接口`ListCatalogs`、`RunCatalogAction`、`ShowCatalog`
- _解决问题_
  - 无
- _特性变更_
  - **RunAuthorizationAction**
    - 请求参数变更
      - `+ grant_project_id`
      - `- projectId`

### HuaweiCloud SDK DRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPositionResult**
    - 响应参数变更
      - `+ status`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateFunction**
    - 请求参数变更
      - `+ encrypted_user_data`
      - `+ mount_config`
      - `+ is_stateful_function`
      - `+ enable_dynamic_memory`
  - **UpdateVersionAlias**
    - 请求参数变更
      - `+ additional_version_strategy`
  - **DeleteFunctionTrigger**
    - 请求参数变更
      - `+ trigger_type_code: enum value [IOTDA]`
  - **ShowFunctionTrigger**
    - 请求参数变更
      - `+ trigger_type_code: enum value [IOTDA]`
  - **UpdateTrigger**
    - 请求参数变更
      - `+ trigger_type_code: enum value [IOTDA]`

### HuaweiCloud SDK GEIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSupportMasks**
    - 响应参数变更
      - `+ support_masks.ip_version: enum value [4,6]`
  - **ListGlobalEips**
    - 响应参数变更
      - `+ global_eips.ip_version: enum value [4,6]`
  - **DetachInternetBandwidth**
    - 响应参数变更
      - `+ global_eip.ip_version: enum value [4,6]`
  - **BatchCreateGlobalEip**
    - 响应参数变更
      - `+ global_eip.ip_version: enum value [4,6]`
  - **ShowGlobalEip**
    - 响应参数变更
      - `+ global_eip.ip_version: enum value [4,6]`
  - **AttachInternetBandwidth**
    - 响应参数变更
      - `+ global_eip.ip_version: enum value [4,6]`
  - **ListGlobalEipSegments**
    - 响应参数变更
      - `+ global_eip_segments.ip_version: enum value [4,6]`
  - **ShowGlobalEipSegment**
    - 响应参数变更
      - `+ global_eip_segment.ip_version: enum value [4,6]`
  - **ListGeipPools**
    - 响应参数变更
      - `+ geip_pools.ip_version: enum value [4,6]`

### HuaweiCloud SDK HSS

- _新增特性_
  - 支持接口`CreateQuotasOrder`、`ShowProductdataOfferingInfos`
- _解决问题_
  - 无
- _特性变更_
  - **DeleteResourceInstanceTag**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowAssetStatistic**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `- environment_num`
      - `- core_conf_file_num`
  - **StopProtection**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowRiskConfigDetail**
    - 请求参数变更
      - `- x-auth-token`
  - **RunImageSynchronize**
    - 请求参数变更
      - `- x-auth-token`
  - **AssociatePolicyGroup**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowVulScanPolicy**
    - 请求参数变更
      - `- x-auth-token`
  - **ChangeVulScanPolicy**
    - 请求参数变更
      - `- x-auth-token`
  - **CreateVulnerabilityScanTask**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowVulStatics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListJarPackageStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListJarPackageHostInfo**
    - 请求参数变更
      - `- x-auth-token`
  - **ListUserStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListPortStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListProcessStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAppStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAutoLaunchStatistics**
    - 请求参数变更
      - `- x-auth-token`
  - **ListUsers**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `- data_list.expire_time`
  - **ListPorts**
    - 请求参数变更
      - `- x-auth-token`
  - **ListApps**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAutoLaunchs**
    - 请求参数变更
      - `- x-auth-token`
  - **ListUserChangeHistories**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAppChangeHistories**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAutoLaunchChangeHistories**
    - 请求参数变更
      - `- x-auth-token`
  - **ListProcessesHost**
    - 请求参数变更
      - `- x-auth-token`
  - **ListPortHost**
    - 请求参数变更
      - `- x-auth-token`
  - **ListProtectionServer**
    - 请求参数变更
      - `- x-auth-token`
  - **ListPasswordComplexity**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.private_ip`
      - `+ data_list.public_ip`
  - **ListRiskConfigs**
    - 请求参数变更
      - `- x-auth-token`
  - **ListRiskConfigHosts**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowCheckRuleDetail**
    - 请求参数变更
      - `- x-auth-token`
  - **ListContainerNodes**
    - 请求参数变更
      - `- x-auth-token`
  - **ListHostStatus**
    - 请求参数变更
      - `- x-auth-token`
  - **SwitchHostsProtectStatus**
    - 请求参数变更
      - `- x-auth-token`
  - **BatchScanSwrImage**
    - 请求参数变更
      - `- x-auth-token`
  - **ListImageVulnerabilities**
    - 请求参数变更
      - `- x-auth-token`
  - **ListVulnerabilityCve**
    - 请求参数变更
      - `- x-auth-token`
  - **ListImageRiskConfigs**
    - 请求参数变更
      - `- x-auth-token`
  - **ListImageRiskConfigRules**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowImageCheckRuleDetail**
    - 请求参数变更
      - `- x-auth-token`
  - **BatchCreateTags**
    - 请求参数变更
      - `- x-auth-token`
      - `- sys_tags`
  - **ListVulHosts**
    - 请求参数变更
      - `+ repair_priority`
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.version`
      - `+ data_list.disabled_operate_types`
      - `+ data_list.repair_priority`
  - **ChangeVulStatus**
    - 请求参数变更
      - `- x-auth-token`
  - **ListHostVuls**
    - 请求参数变更
      - `+ repair_priority`
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.disabled_operate_types`
      - `+ data_list.repair_priority`
  - **ListVulScanTask**
    - 请求参数变更
      - `- x-auth-token`
  - **ListVulScanTaskHost**
    - 请求参数变更
      - `- x-auth-token`
  - **ListWtpProtectHost**
    - 响应参数变更
      - `+ data_list.ipv6`
  - **ListHostProtectHistoryInfo**
    - 请求参数变更
      - `* host_id: required -> optional`
  - **ListHostRaspProtectHistoryInfo**
    - 请求参数变更
      - `* host_id: required -> optional`
  - **UpdateProtectionPolicy**
    - 请求参数变更
      - `- x-auth-token`
  - **ListProtectionPolicy**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowBackupPolicyInfo**
    - 请求参数变更
      - `- x-auth-token`
  - **UpdateBackupPolicyInfo**
    - 请求参数变更
      - `- x-auth-token`
  - **ListWeakPasswordUsers**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.private_ip`
      - `+ data_list.public_ip`
  - **ListRiskConfigCheckRules**
    - 请求参数变更
      - `- x-auth-token`
  - **ChangeCheckRuleAction**
    - 请求参数变更
      - `- x-auth-token`
  - **ShowResourceQuotas**
    - 请求参数变更
      - `- x-auth-token`
  - **ListQuotasDetail**
    - 请求参数变更
      - `- x-auth-token`
  - **ListBlockedIp**
    - 请求参数变更
      - `- x-auth-token`
  - **ChangeBlockedIp**
    - 请求参数变更
      - `- x-auth-token`
  - **ListIsolatedFile**
    - 请求参数变更
      - `+ file_path`
      - `+ private_ip`
      - `+ public_ip`
      - `+ file_hash`
      - `+ asset_value`
      - `- x-auth-token`
      - `- last_days`
      - `- isolation_status`
    - 响应参数变更
      - `+ data_list.os_type`
      - `+ data_list.private_ip`
      - `+ data_list.public_ip`
      - `+ data_list.asset_value`
      - `+ data_list.agent_version`
      - `+ data_list.isolate_source`
      - `+ data_list.event_name`
      - `+ data_list.agent_event_info`
      - `+ data_list.antivirus_result_info`
  - **ChangeIsolatedFile**
    - 请求参数变更
      - `- x-auth-token`
  - **ListAlarmWhiteList**
    - 请求参数变更
      - `- x-auth-token`
  - **DeleteHostsGroup**
    - 请求参数变更
      - `- x-auth-token`
  - **AddHostsGroup**
    - 请求参数变更
      - `- x-auth-token`
  - **ChangeHostsGroup**
    - 请求参数变更
      - `- x-auth-token`
  - **ListHostGroups**
    - 请求参数变更
      - `- x-auth-token`
  - **ListSwrImageRepository**
    - 请求参数变更
      - `- x-auth-token`
  - **ListPolicyGroup**
    - 请求参数变更
      - `+ container_mode`
      - `- x-auth-token`
  - **ListVulnerabilities**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.repair_priority_list`
  - **StartProtection**
    - 请求参数变更
      - `- x-auth-token`
  - **ListSecurityEvents**
    - 请求参数变更
      - `- x-auth-token`
    - 响应参数变更
      - `+ data_list.process_info_list.ancestor_process_path`
      - `+ data_list.process_info_list.ancestor_process_pid`
      - `+ data_list.process_info_list.ancestor_process_cmdline`
  - **ChangeEvent**
    - 请求参数变更
      - `- x-auth-token`

### HuaweiCloud SDK Live

- _新增特性_
  - 支持以下接口：
    - `ListOttChannelInfo`
    - `CreateOttChannelInfo`
    - `DeleteOttChannelInfo`
    - `ModifyOttChannelInfoEndPoints`
    - `ModifyOttChannelInfoInput`
    - `ModifyOttChannelInfoRecordSettings`
    - `ModifyOttChannelInfoGeneral`
    - `ModifyOttChannelInfoStats`
    - `ModifyOttChannelInfoEncoderSettings`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK NAT

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListNatGatewaySnatRules**
    - 请求参数变更
      - `* floating_ip_address: string -> list<string>`
      - `* floating_ip_id: string -> list<string>`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeHouseholdRegister`
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeSmartDocumentRecognizer**
    - 请求参数变更
      - `+ form`
      - `+ kv_map`
    - 响应参数变更
      - `+ result.form_result`
      - `+ result.layout_result.layout_block_list.table_id`
      - `+ result.layout_result.layout_block_list.form_id`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAutoEnlargePolicy**
    - 响应参数变更
      - `+ step_percent`
  - **SetAutoEnlargePolicy**
    - 请求参数变更
      - `+ step_percent`

### HuaweiCloud SDK WAF

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstance**
    - 请求参数变更
      - `+ anti_affinity`

# 3.1.82 2024-03-14

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持接口`ListAvailableNodeTypes`
- _解决问题_
  - 无
- _特性变更_
  - **BatchSetPolicy**
    - 请求参数变更
      - `+ jobs.ddl_topic`
  - **BatchCreateJobs**
    - 请求参数变更
      - `+ jobs.public_ip_list`
  - **ShowJobList**
    - 响应参数变更
      - `+ jobs.children.job_direction: enum value [non-dbs]`
      - `- jobs.children.job_direction: enum value [no-dbs]`
  - **BatchListJobDetails**
    - 响应参数变更
      - `+ results.public_ip_list`
      - `+ results.bind_public_ip_state`
      - `+ results.children`
  - **ShowUpdateObjectSavingStatus**
    - 响应参数变更
      - `+ job_id`
  - **CollectDbObjectsAsync**
    - 响应参数变更
      - `+ job_id`
  - **ShowDataProcessingRulesResult**
    - 响应参数变更
      - `+ job_id`
  - **CollectDbObjectsInfo**
    - 响应参数变更
      - `+ job_id`
  - **CollectPositionAsync**
    - 响应参数变更
      - `+ job_id`
  - **CollectColumns**
    - 响应参数变更
      - `+ job_id`
  - **CreateJob**
    - 请求参数变更
      - `+ job.public_ip_list`
  - **BatchCreateJobsAsync**
    - 请求参数变更
      - `+ jobs.public_ip_list`
  - **UpdateDataProgress**
    - 响应参数变更
      - `+ job_id`
  - **CheckDataFilter**
    - 响应参数变更
      - `+ job_id`
  - **ListAsyncJobDetail**
    - 响应参数变更
      - `+ jobs.public_ip_list`
      - `+ jobs.bind_public_ip_state`
      - `+ jobs.children`
  - **ShowJobDetail**
    - 响应参数变更
      - `+ job.public_ip_list`
      - `+ job.bind_public_ip_state`
      - `+ job.children`
  - **ExecuteJobAction**
    - 请求参数变更
      - `+ job.action_name: enum value [bind_eip,unbind_eip]`
      - `+ job.action_params.public_ip_config`
  - **BatchExecuteJobActions**
    - 请求参数变更
      - `+ jobs.action_name: enum value [bind_eip,unbind_eip]`
      - `+ jobs.action_params.public_ip_config`

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持接口`ListMetrics`、`ListMetricsData`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持以下接口：
    - `ShowAssetReplicationInfo`
    - `CreateAssetbyReplicationInfo`
    - `ListActiveCode`
    - `CreateActiveCode`
    - `ShowActiveCode`
    - `UpdateActiveCode`
    - `ResetActiveCode`
    - `DeleteActiveCode`
- _解决问题_
  - 无
- _特性变更_
  - **CreateFile**
    - 响应参数变更
      - `+ file_id`
      - `+ upload_url`
  - **ShowJobUploadingAddress**
    - 响应参数变更
      - `+ package_url`
      - `+ authorization_letter_uploading_url`
      - `+ segment_url`
  - **ShowJobAuditResult**
    - 响应参数变更
      - `+ system_audit_result`
      - `+ admin_audit_result`
  - **ShowTrainingSegmentInfo**
    - 响应参数变更
      - `+ confirmed_index`
  - **ConfirmTrainingSegment**
    - 响应参数变更
      - `+ unmatched_index_hit`
      - `+ confirm_result`
  - **Create2dModelTrainingJob**
    - 响应参数变更
      - `+ cover_upload_url`
      - `+ job_id`
      - `+ grant_file_upload_url`
      - `+ training_video_upload_url`
      - `+ id_card_image2_upload_url`
      - `+ id_card_image1_upload_url`
  - **List2dModelTrainingJob**
    - 响应参数变更
      - `+ jobs`
      - `+ count`
  - **Execute2dModelTrainingCommandByUser**
    - 响应参数变更
      - `+ commond_result`
      - `+ attachment_upload_url`
      - `+ multipart_data`
  - **ExecuteSmartLiveCommand**
    - 请求参数变更
      - `+ command: enum value [REWRITE_INTERACTION_RULES,GET_LIVE_JOB_CONFIG_INFO]`
    - 响应参数变更
      - `+ command_id`
      - `+ command: enum value [REWRITE_INTERACTION_RULES,GET_LIVE_JOB_CONFIG_INFO]`
  - **CreateTrainingBasicJob**
    - 响应参数变更
      - `+ job_id`
      - `+ segment_uploading_url`
      - `+ authorization_letter_uploading_url`
      - `+ training_data_uploading_url`
  - **CreateTrainingMiddleJob**
    - 响应参数变更
      - `+ job_id`
      - `+ segment_uploading_url`
      - `+ authorization_letter_uploading_url`
      - `+ training_data_uploading_url`
  - **CreateTrainingAdvanceJob**
    - 响应参数变更
      - `+ job_id`
      - `+ segment_uploading_url`
      - `+ authorization_letter_uploading_url`
      - `+ training_data_uploading_url`
  - **ShowVoiceTrainingJob**
    - 响应参数变更
      - `+ job_type`
      - `+ create_time`
      - `+ sex`
      - `+ create_type`
      - `+ voice_name`
      - `+ language`
      - `+ voice_authorization_url`
      - `+ asset_id`
      - `+ lastupdate_time`
      - `+ job_failed_code`
      - `+ reject_times`
      - `+ app_user_id`
      - `+ job_id`
      - `+ state`
      - `+ tag`
      - `+ job_failed_reason`
      - `+ state: enum value [USER_RESULT_REVIEW,USER_REVIEW_REJECT]`
  - **Update2dModelTrainingJob**
    - 响应参数变更
      - `+ cover_upload_url`
      - `+ job_id`
      - `+ grant_file_upload_url`
      - `+ training_video_upload_url`
      - `+ id_card_image2_upload_url`
      - `+ id_card_image1_upload_url`
  - **Show2dModelTrainingJob**
    - 响应参数变更
      - `+ model_version`
      - `+ inference_data_process_action_mark_info`
      - `+ model_resolution`
      - `+ inference_data_process_video_mark_info`
      - `+ asset_id`
      - `+ training_video_download_url`
      - `+ mask_file_download_url`
      - `+ grant_file_download_url`
      - `+ project_id`
      - `+ operation_logs`
      - `+ contact`
      - `+ matting_type`
      - `+ verify_video_download_url`
      - `+ state`
      - `+ cover_download_url`
      - `+ create_time`
      - `+ is_background_replacement`
      - `+ comment_logs`
      - `+ markable_video_download_url`
      - `+ tags`
      - `+ last_update_time`
      - `+ batch_name`
      - `+ id_card_image1_download_url`
      - `+ id_card_image2_download_url`
      - `+ job_id`
      - `+ is_mask_file_uploaded`
      - `+ name`
  - **ListDigitalHumanVideo**
    - 响应参数变更
      - `+ jobs.state: enum value [BLOCK]`
  - **CreateDigitalHumanBusinessCard**
    - 响应参数变更
      - `+ job_id`
  - **ListDigitalHumanBusinessCard**
    - 响应参数变更
      - `+ jobs.state: enum value [BLOCK]`
  - **UpdateDigitalHumanBusinessCard**
    - 响应参数变更
      - `+ job_id`
  - **ShowDigitalHumanBusinessCard**
    - 响应参数变更
      - `+ job_info.state: enum value [BLOCK]`
  - **ListSmartChatRooms**
    - 响应参数变更
      - `+ count_concurrency`
      - `+ smart_chat_rooms.concurrency`
  - **ShowSmartLive**
    - 响应参数变更
      - `+ co_streamer_config`
      - `+ live_job_log`
  - **CreatePictureModelingJob**
    - 响应参数变更
      - `+ model_asset_id`
      - `+ job_id`
  - **ListVoiceTrainingJob**
    - 响应参数变更
      - `+ jobs`
      - `+ count`
      - `+ reject_times`
      - `+ jobs.reject_times`
      - `+ jobs.state: enum value [USER_RESULT_REVIEW,USER_REVIEW_REJECT]`
  - **StartSmartLive**
    - 请求参数变更
      - `+ co_streamer_config`
  - **ListSmartLive**
    - 响应参数变更
      - `+ co_streamer_config`
      - `+ live_job_log`
      - `+ smart_live_jobs.co_streamer_config`
      - `+ smart_live_jobs.live_job_log`
  - **ListSmartLiveJobs**
    - 响应参数变更
      - `+ co_streamer_config`
      - `+ live_job_log`
      - `+ smart_live_jobs.co_streamer_config`
      - `+ smart_live_jobs.live_job_log`
  - **CreateVideoMotionCaptureJob**
    - 响应参数变更
      - `+ rtc_room_info`
      - `+ job_id`
  - **Show2DDigitalHumanVideo**
    - 响应参数变更
      - `+ state: enum value [BLOCK]`
  - **ShowPhotoDigitalHumanVideo**
    - 响应参数变更
      - `+ state: enum value [BLOCK]`
  - **ListSmartLiveRooms**
    - 响应参数变更
      - `+ smart_live_rooms.view_mode`
      - `+ smart_live_rooms.thumbnail`
  - **CreateSmartLiveRoom**
    - 请求参数变更
      - `+ co_streamer_config`
      - `+ scene_scripts.script_id`
      - `+ interaction_rules.trigger.reply_role`
  - **ShowSmartLiveRoom**
    - 响应参数变更
      - `+ thumbnail`
      - `+ co_streamer_config`
      - `+ scene_scripts.script_id`
      - `+ interaction_rules.trigger.reply_role`
  - **UpdateSmartLiveRoom**
    - 请求参数变更
      - `+ co_streamer_config`
      - `+ scene_scripts.script_id`
      - `+ interaction_rules.trigger.reply_role`
    - 响应参数变更
      - `+ thumbnail`
      - `+ co_streamer_config`
      - `+ scene_scripts.script_id`
      - `+ interaction_rules.trigger.reply_role`
  - **UpdateInteractionRuleGroup**
    - 请求参数变更
      - `+ interaction_rules.trigger.reply_role`
    - 响应参数变更
      - `+ interaction_rules.trigger.reply_role`
  - **ListAssets**
    - 请求参数变更
      - `+ X-REAL-IP`
  - **CreateInteractionRuleGroup**
    - 请求参数变更
      - `+ interaction_rules.trigger.reply_role`
  - **ListInteractionRuleGroups**
    - 响应参数变更
      - `+ interaction_rule_groups.interaction_rules.trigger.reply_role`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowBinlogClearPolicy**
    - 响应参数变更
      - `+ binlog_clear_type`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **AddOrRemoveServicePermissions**
    - 响应参数变更
      - `- permission_type: enum value [domainId,orgPath]`
  - **ListServiceDescribeDetails**
    - 响应参数变更
      - `- service_type: enum value [interface]`
      - `* created_at: string -> date-time`
  - **ListServiceDetails**
    - 响应参数变更
      - `- server_type: enum value [VM,VIP,LB]`
      - `- status: enum value [creating,available,failed]`
      - `- service_type: enum value [gataway,interface]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `- tcp_proxy: enum value [close,toa_open,proxy_open,open,proxy_vni]`
  - **UpdateEndpointService**
    - 响应参数变更
      - `- server_type: enum value [VM,VIP,LB]`
      - `- status: enum value [creating,available,failed]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `- tcp_proxy: enum value [close,toa_open,proxy_open,open,proxy_vni]`
  - **ListServicePermissionsDetails**
    - 响应参数变更
      - `- permissions.permission_type: enum value [domainId,orgPath]`
      - `* permissions.created_at: string -> date-time`
  - **ListServicePublicDetails**
    - 响应参数变更
      - `- endpoint_services.service_type: enum value [interface,gateway]`
      - `* endpoint_services.created_at: string -> date-time`
  - **ListEndpointInfoDetails**
    - 响应参数变更
      - `- service_type: enum value [interface,gateway]`
      - `- status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `- enable_status: enum value [enable,disable]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `* policy_statement: list<string> -> list<PolicyStatement>`
  - **UpdateEndpointWhite**
    - 响应参数变更
      - `- service_type: enum value [interface,gateway]`
      - `- status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
  - **BatchAddOrRemoveResourceInstance**
    - 请求参数变更
      - `+ resource_type: enum value [endpoint_service,endpoint]`
      - `+ action: enum value [create,delete]`
      - `* body: object<BatchAddOrRemoveResourceInstanceBody> -> object<BatchAddOrRemoveResourceInstanceRequestBody>`
  - **ListQueryProjectResourceTags**
    - 请求参数变更
      - `+ resource_type: enum value [endpoint_service,endpoint]`
  - **BatchAddEndpointServicePermissions**
    - 请求参数变更
      - `* body: object<BatchAddPermissionRequest> -> object<BatchAddEndpointServicePermissionsRequestBody>`
    - 响应参数变更
      - `* permissions.created_at: string -> date-time`
  - **BatchRemoveEndpointServicePermissions**
    - 请求参数变更
      - `* body: object<BatchRemovePermissionRequest> -> object<BatchRemoveEndpointServicePermissionsRequestBody>`
    - 响应参数变更
      - `* permissions.created_at: string -> date-time`
  - **UpdateEndpointServicePermissionDesc**
    - 请求参数变更
      - `* body: object<UpdatePermissionDescRequest> -> object<UpdateEndpointServicePermissionDescRequestBody>`
    - 响应参数变更
      - `* permissions.created_at: string -> date-time`
  - **UpdateEndpointPolicy**
    - 请求参数变更
      - `+ policy_statement.Effect: enum value [Allow,Refuse]`
    - 响应参数变更
      - `- enable_dns`
      - `- dns_names`
      - `- subnet_id`
      - `- service_type: enum value [interface,gateway]`
      - `- status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `+ policy_statement.Effect: enum value [Allow,Refuse]`
  - **DeleteEndpointPolicy**
    - 响应参数变更
      - `- enable_dns`
      - `- dns_names`
      - `- subnet_id`
      - `- service_type: enum value [interface,gateway]`
      - `- status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `+ policy_statement.Effect: enum value [Allow,Refuse]`
  - **CreateEndpointService**
    - 请求参数变更
      - `+ service_type: enum value [gateway,interface]`
    - 响应参数变更
      - `- server_type: enum value [VM,VIP,LB]`
      - `- status: enum value [creating,available,failed]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `- tcp_proxy: enum value [close,toa_open,proxy_open,open,proxy_vni]`
  - **ListEndpointService**
    - 响应参数变更
      - `- endpoint_services.status: enum value [creating,available,failed]`
      - `- endpoint_services.service_type: enum value [VM,VIP,LB]`
      - `* endpoint_services.created_at: string -> date-time`
      - `* endpoint_services.updated_at: string -> date-time`
      - `- endpoint_services.tcp_proxy: enum value [close,toa_open,proxy_open,open,proxy_vni]`
  - **ListServiceConnections**
    - 请求参数变更
      - `+ status: enum value [pendingAcceptance,accepted,rejected,failed]`
    - 响应参数变更
      - `* connections.created_at: string -> date-time`
      - `* connections.updated_at: string -> date-time`
      - `- connections.status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
  - **AcceptOrRejectEndpoint**
    - 响应参数变更
      - `* connections.created_at: string -> date-time`
      - `* connections.updated_at: string -> date-time`
      - `- connections.status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
  - **CreateEndpoint**
    - 响应参数变更
      - `- dns_names`
      - `- service_type: enum value [interface,gateway]`
      - `- status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `* created_at: string -> date-time`
      - `* updated_at: string -> date-time`
      - `* policy_statement: list<string> -> list<PolicyStatement>`
  - **ListEndpoints**
    - 请求参数变更
      - `+ sort_key: enum value [create_at,update_at]`
      - `+ sort_dir: enum value [desc,asc]`
    - 响应参数变更
      - `- endpoint_pool_id`
      - `- endpoint_service_id`
      - `- vpc_id`
      - `- created_at`
      - `- description`
      - `- error`
      - `- updated_at`
      - `- enable_whitelist`
      - `- project_id`
      - `- marker_id`
      - `- id`
      - `- public_border_group`
      - `- policy_statement`
      - `- routetables`
      - `- endpoint_service_name`
      - `- ip`
      - `- whitelist`
      - `- tags`
      - `- enable_dns`
      - `- service_type`
      - `- active_status`
      - `- dns_names`
      - `- subnet_id`
      - `- status`
      - `- endpoints.service_type: enum value [interface,gateway]`
      - `- endpoints.status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`
      - `* endpoints.created_at: string -> date-time`
      - `* endpoints.updated_at: string -> date-time`
      - `+ endpoints.policy_statement.Effect: enum value [Allow,Refuse]`
      - `* endpoints: list<EndpointResp> -> list<EndpointResponseBody>`
  - **ListQuotaDetails**
    - 响应参数变更
      - `- quotas.resources.type: enum value [endpoint_service,endpoint]`
      - `* quotas: object<ResourcesResp> -> object<ResourcesResponseBody>`
  - **ListVersionDetails**
    - 响应参数变更
      - `- versions.status: enum value [CURRENT,SUPPORT,DEPRECATED]`
      - `- versions.id: enum value [v1]`
      - `* versions.updated: string -> date-time`
  - **ListSpecifiedVersionDetails**
    - 响应参数变更
      - `- version.status: enum value [CURRENT,SUPPORT,DEPRECATED]`
      - `- version.id: enum value [v1]`
      - `* version.updated: string -> date-time`
  - **ListResourceInstances**
    - 请求参数变更
      - `+ resource_type: enum value [endpoint_service,endpoint]`
      - `+ action: enum value [filter,count]`
  - **UpdateEndpointConnectionsDesc**
    - 请求参数变更
      - `* body: object<UpdateEpConnections> -> object<UpdateEndpointConnectionsDescRequestBody>`
    - 响应参数变更
      - `* connections.created_at: string -> date-time`
      - `* connections.updated_at: string -> date-time`
      - `- connections.status: enum value [pendingAcceptance,creating,accepted,rejected,failed,deleting]`

# 3.1.81 2024-03-07

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListBareMetalServers**
    - 响应参数变更
      - `* servers.OS-SRV-USG:launched_at: date-time -> string`
      - `* servers.OS-SRV-USG:terminated_at: date-time -> string`
  - **ListBareMetalServerDetails**
    - 响应参数变更
      - `* server.OS-SRV-USG:launched_at: date-time -> string`
      - `* server.OS-SRV-USG:terminated_at: date-time -> string`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持接口`ShowStepOutputs`、`ShowPipelineArtifacts`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Config

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowBuiltInPolicyDefinition**
    - 响应参数变更
      - `+ display_name`
  - **ShowOrganizationPolicyAssignmentStatuses**
    - 请求参数变更
      - `+ organization_policy_assignment_id`
  - **ListBuiltInPolicyDefinitions**
    - 响应参数变更
      - `+ display_name`
      - `+ value.display_name`
  - **ListPolicyAssignments**
    - 请求参数变更
      - `+ policy_assignment_name`
      - `+ limit`
      - `+ marker`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateSslSwitch**
    - 响应参数变更
      - `+ result`
      - `+ instance_id`
  - **ListClients**
    - 响应参数变更
      - `+ clients.fd`
      - `+ clients.network`
      - `+ clients.peer`
      - `+ clients.user`

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAuthorizationPrivileges**
    - 响应参数变更
      - `+ privileges.object`
      - `* privileges: list<ShowDatabaseUsersPrivilege> -> list<AuthorizationPrivilege>`

### HuaweiCloud SDK DWS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListWorkloadQueue**
    - 请求参数变更
      - `+ logical_cluster_name`
  - **ShowWorkloadQueue**
    - 请求参数变更
      - `+ logical_cluster_name`

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持接口`UpdateDatabases`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **AddCertificate**
    - 响应参数变更
      - `+ template_id`
      - `+ provision_enable`
  - **ListCertificates**
    - 响应参数变更
      - `+ template_id`
      - `+ provision_enable`
      - `+ certificates.provision_enable`
      - `+ certificates.template_id`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `CreateDeleteConnectorOrder`
    - `ListSinkTasks`
    - `CreateSinkTask`
    - `ShowSinkTaskDetail`
    - `DeleteSinkTask`
  - **SendKafkaMessage**
    - 请求参数变更
      - `+ property_list.name`
      - `+ property_list.value`
  - **ShowConnectorTask**
    - 响应参数变更
      - `* source_task.replication_factor: string -> int32`
      - `* source_task.task_num: string -> int32`
      - `* sink_task.target_db: string -> int32`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `+ ipv6_enable`
  - **CreateConnectorTask**
    - 请求参数变更
      - `* source_task.replication_factor: string -> int32`
      - `* source_task.task_num: string -> int32`
    - 响应参数变更
      - `* source_task.replication_factor: string -> int32`
      - `* source_task.task_num: string -> int32`
      - `* sink_task.target_db: string -> int32`
  - **ListConnectorTasks**
    - 响应参数变更
      - `* tasks.source_task.replication_factor: string -> int32`
      - `* tasks.source_task.task_num: string -> int32`
      - `* tasks.sink_task.target_db: string -> int32`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeIdCard**
    - 请求参数变更
      - `+ return_portrait_image`
      - `+ return_adjusted_image`
    - 响应参数变更
      - `+ result.portrait_image`
      - `+ result.adjusted_image`
      - `+ result.front.portrait_image`
      - `+ result.front.adjusted_image`
      - `+ result.back.adjusted_image`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持以下接口：
    - `ShowStorageUsedSpace`
    - `SwitchSqlLimit`
    - `UpdateSqlLimit`
    - `ListSqlLimit`
    - `CreateSqlLimit`
    - `DeleteSqlLimit`
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 响应参数变更
      - `* instances.volume: object<Volume> -> object<VolumeForInstanceResponse>`
  - **CreateRestoreInstance**
    - 请求参数变更
      - `- replica_of_id`
      - `- unchangeable_param`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateDiskInfo**
    - 请求参数变更
      - `* volumegroups.logical_volumes.device_use: int32 -> string`
  - **ShowServer**
    - 响应参数变更
      - `* volume_groups.logical_volumes.device_use: int32 -> string`
  - **CreateTask**
    - 请求参数变更
      - `* target_server.volume_groups.logical_volumes.device_use: int32 -> string`
  - **ShowTask**
    - 响应参数变更
      - `* target_server.volume_groups.logical_volumes.device_use: int32 -> string`
  - **UpdateTask**
    - 请求参数变更
      - `* source_server.volume_groups.logical_volumes.device_use: int32 -> string`
  - **RegisterServer**
    - 请求参数变更
      - `* volume_groups.logical_volumes.device_use: int32 -> string`
  - **ListServers**
    - 响应参数变更
      - `* source_servers.init_target_server.volume_groups.logical_volumes.device_use: int32 -> string`

# 3.1.80 2024-02-29

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAddressSets**
    - 请求参数变更
      - `+ query_address_set_type`
    - 响应参数变更
      - `+ data.records.object_id`
      - `+ data.records.address_set_type`
  - **UpdateAclRuleOrder**
    - 响应参数变更
      - `+ data.name`
  - **AddBlackWhiteList**
    - 响应参数变更
      - `+ data.name`
  - **UpdateBlackWhiteList**
    - 响应参数变更
      - `+ data.name`
  - **DeleteBlackWhiteList**
    - 响应参数变更
      - `+ data.name`
  - **ChangeIpsProtectMode**
    - 响应参数变更
      - `+ data.name`
  - **AddServiceSet**
    - 响应参数变更
      - `+ data.name`
  - **ListServiceSetDetail**
    - 响应参数变更
      - `+ data.service_set_type`
  - **UpdateServiceSet**
    - 响应参数变更
      - `+ data.name`
  - **DeleteServiceSet**
    - 响应参数变更
      - `+ data.name`
  - **DeleteServiceItem**
    - 响应参数变更
      - `+ data.name`
  - **CreateFirewall**
    - 请求参数变更
      - `- flavor.version: enum value [Platinum]`
    - 响应参数变更
      - `- data.flavor.version: enum value [Platinum]`
  - **ChangeEipStatus**
    - 响应参数变更
      - `+ data.id`
  - **DeleteAddressItem**
    - 响应参数变更
      - `+ data.name`
  - **AddAddressSet**
    - 响应参数变更
      - `+ data.name`
  - **ListAddressSetDetail**
    - 请求参数变更
      - `+ query_address_set_type`
    - 响应参数变更
      - `+ data.address_set_type`
  - **UpdateAddressSet**
    - 响应参数变更
      - `* data: object<IdObject> -> object<UpdateAddressSetResponseData>`
  - **DeleteAddressSet**
    - 响应参数变更
      - `+ data.name`
  - **CreateEastWestFirewall**
    - 响应参数变更
      - `+ data.name`
  - **ListEastWestFirewall**
    - 响应参数变更
      - `+ data.protect_infos.status`
  - **AddAclRule**
    - 响应参数变更
      - `+ data.rules.name`
  - **DeleteAclRule**
    - 响应参数变更
      - `+ data.name`
  - **UpdateAclRule**
    - 响应参数变更
      - `+ data.name`
  - **ListAclRules**
    - 响应参数变更
      - `+ data.records.created_date`
      - `+ data.records.last_open_time`
  - **AddServiceItems**
    - 响应参数变更
      - `+ data.items.name`
  - **AddAddressItem**
    - 响应参数变更
      - `+ data.items.name`
  - **ListServiceSets**
    - 响应参数变更
      - `+ data.records.service_set_type`
      - `+ data.records.project_id`
      - `+ data.records.protocols`
  - **ListProtectedVpcs**
    - 响应参数变更
      - `+ data.total_assets`
  - **ListFirewallDetail**
    - 响应参数变更
      - `+ data.records.is_available_obs`
      - `+ data.records.is_support_threat_tags`
  - **ListFirewallList**
    - 响应参数变更
      - `+ is_support_postpaid`
      - `+ is_support_buy_professional`
      - `+ has_ndr`
      - `+ is_support_basic_version`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPipelineDetail**
    - 响应参数变更
      - `+ sources.type`
      - `+ sources.params`
      - `- sources.scmType`
      - `- sources.hookFlag`
      - `- sources.defaultBranch`
      - `- sources.trigger`
      - `- sources.alias`
      - `- sources.displayName`
      - `- sources.repoName`
      - `- sources.repoId`
      - `- sources.repoOwner`
      - `- sources.gitUrl`
      - `- sources.webUrl`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持以下接口：
    - `CreateOrUpdateEntities`
    - `ListFactoryReleasePackages`
    - `ShowFactoryPackageDetail`
    - `DeployFactoryPackages`
    - `CancelFactoryPackages`
    - `ListFactoryJobInstancesByName`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **PreviewSqlJobResult**
    - 响应参数变更
      - `* rows: list<list<string>> -> list<list<object>>`
  - **CreateFlinkSqlJobGraph**
    - 请求参数变更
      - `+ flink_version`
  - **CreateSqlJob**
    - 响应参数变更
      - `* rows: list<list<string>> -> list<list<object>>`
  - **CreateEnhancedConnection**
    - 请求参数变更
      - `+ elastic_resource_pools`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateFunctionTrigger**
    - 响应参数变更
      - `+ event_data.triggerid`
      - `+ event_data.api_id`
      - `+ event_data.api_name`
      - `+ event_data.invoke_url`
      - `+ event_data.roma_app_id`
      - `+ event_data.db_user`
      - `+ event_data.instance_addrs`
      - `+ event_data.mode`
      - `* event_data: object<TriggerEventDataRequestBody> -> object<TriggerEventDataResponseBody>`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowRule**
    - 响应参数变更
      - `+ actions.smn_forwarding.message_template_name`
  - **UpdateRule**
    - 请求参数变更
      - `+ actions.smn_forwarding.message_template_name`
    - 响应参数变更
      - `+ actions.smn_forwarding.message_template_name`
  - **CreateRule**
    - 请求参数变更
      - `+ actions.smn_forwarding.message_template_name`
    - 响应参数变更
      - `+ actions.smn_forwarding.message_template_name`
  - **ListRules**
    - 响应参数变更
      - `+ rules.actions.smn_forwarding.message_template_name`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持以下接口：
    - `ListConnectorTasks`
    - `CreateConnectorTask`
    - `ShowConnectorTask`
    - `DeleteConnectorTask`
    - `PauseConnectorTask`
    - `ResumeConnectorTask`
    - `RestartConnectorTask`
- _解决问题_
  - 无
- _特性变更_
  - **ShowInstance**
    - 响应参数变更
      - `+ connector_node_num`
  - **CreateSinkTask**
    - 请求参数变更
      - `+ obs_destination_descriptor.partition_format: enum value [yyyy,yyyy/MM,yyyy/MM/dd,yyyy/MM/dd/HH,yyyy/MM/dd/HH/mm]`
  - **ListInstances**
    - 响应参数变更
      - `+ connector_node_num`
      - `+ instances.connector_node_num`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateLogStream**
    - 请求参数变更
      - `+ log_stream_name_alias`
      - `+ enterprise_project_name`

# 3.1.79 2024-02-22

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSubCustomers**
    - 请求参数变更
      - `+ customer_id`

### HuaweiCloud SDK CES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateDashboardWidgets**
    - 请求参数变更
      - `* body: list<BaseWidgetInfo> -> list<object>`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ModifyGaussMySqlProxyRouteMode**
    - 请求参数变更
      - `+ new_node_auto_add_status`
      - `+ new_node_weight`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListRecycleInstances**
    - 响应参数变更
      - `+ instances.engine_name`
      - `+ instances.volume_size`
      - `+ instances.enterprise_project_name`
      - `+ instances.backup_level`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListImages**
    - 响应参数变更
      - `+ images.__image_displayname`
  - **UpdateImage**
    - 响应参数变更
      - `+ __image_displayname`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeTrainTicket**
    - 响应参数变更
      - `+ result.invoice_style`
      - `+ result.issue_date`
      - `+ result.discount_mark`
      - `+ result.serial_number`
      - `+ result.tax_amount`
      - `+ result.tax_rate`
      - `+ result.air_conditioning`
      - `+ result.original_invoice_number`
      - `+ result.unified_social_credit_code`
      - `+ result.buyer_name`
      - `+ result.total_amount_excluding_tax`
      - `+ result.invoice_number`
      - `+ result.seal_mark`
      - `+ result.title`
      - `+ result.area`
      - `+ result.receipt_number`
      - `+ result.amount_in_figures`
      - `+ result.amount_in_words`

# 3.1.78 2024-02-20

### HuaweiCloud SDK IAMAccessAnalyzer

- _新增特性_
  - 支持访问分析服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ListClients`、`ScanClients`、`HangUpClients`、`HangUpKillAllClients`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSqlJobs**
    - 响应参数变更
      - `* jobs.duration: int32 -> int64`
      - `* jobs.result_count: int32 -> int64`

# 3.1.77 2024-02-07

### HuaweiCloud SDK GEIP

- _新增特性_
  - 支持全域弹性公网IP服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持以下接口：
    - `ListTenantVpcIgws`
    - `CreateTenantVpcIgw`
    - `ShowInternalVpcIgw`
    - `UpdateTenantVpcIgw`
    - `DeleteTenantVpcIgw`
    - `ListProjectGeipBindings`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`UpdateNewNodeAutoAddSwitch`
- _解决问题_
  - 无
- _特性变更_
  - **CreateGaussMySqlProxy**
    - 请求参数变更
      - `+ new_node_auto_add_status`
      - `+ new_node_weight`
  - **ShowGaussMySqlProxyList**
    - 响应参数变更
      - `+ proxy_list.proxy.new_node_auto_add_status`
      - `+ proxy_list.proxy.new_node_weight`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 支持接口`StopBackup`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持以下接口：
    - `UpdateDatabaseOwner`
    - `ExecutePrivilegeDatabaseUserRole`
    - `ExecuteRevokeDatabaseUserRole`
    - `ListDatabaseUserRole`
    - `UpdatePostgresqlExtension`
- _解决问题_
  - 无
- _特性变更_
  - **ListPostgresqlExtension**
    - 响应参数变更
      - `+ extensions.version_update`

### HuaweiCloud SDK VPN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateVgwCertificate**
    - 请求参数变更
      - `* certificate: object<VpnGatewayCertificateRequestBodyContent> -> object<UpdateVpnGatewayCertificateRequestBodyContent>`
      - `* body: object<VpnGatewayCertificateRequestBody> -> object<UpdateVpnGatewayCertificateRequestBody>`
  - **CreateVgw**
    - 响应参数变更
      - `+ vpn_gateway.tags`
  - **UpdateVgw**
    - 响应参数变更
      - `+ vpn_gateway.tags`

# 3.1.76 2024-02-01

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListEvents**
    - 响应参数变更
      - `* events.annotations: map<string, string> -> map<string, object>`
      - `* events.attach_rule: map<string, string> -> map<string, object>`
  - **PushEvents**
    - 请求参数变更
      - `* events.annotations: map<string, string> -> map<string, object>`
      - `* events.attach_rule: map<string, string> -> map<string, object>`
  - **CreatePromInstance**
    - 请求参数变更
      - `+ region`

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`CreatePrivateProvider`、`CreatePrivateProviderVersion`
- _解决问题_
  - 无
- _特性变更_
  - **GetExecutionPlan**
    - 响应参数变更
      - `+ execution_plan_items.imported`
  - **GetExecutionPlanMetadata**
    - 响应参数变更
      - `+ summary.resource_import`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowSubCustomerBudget**
    - 响应参数变更
      - `+ budget_type`
  - **UpdateSubCustomerBudget**
    - 请求参数变更
      - `+ budget_type`
  - **ListCustomerselfResourceRecordDetails**
    - 请求参数变更
      - `+ query_type`
      - `+ bill_cycle_begin`
      - `+ bill_cycle_end`

### HuaweiCloud SDK CC

- _新增特性_
  - 支持以下接口：
    - `ListGcbResourceTags`
    - `CreateGcbResourceTag`
    - `DeleteGcbResourceTag`
    - `BatchCreateGcbResourceTags`
    - `BatchDeleteGcbResourceTags`
    - `CountGcbResourceByTag`
    - `ListGcbResourceByTag`
    - `ListGcbTenantTags`
    - `ListGlobalConnectionBandwidths`
    - `CreateGlobalConnectionBandwidth`
    - `ShowGlobalConnectionBandwidth`
    - `UpdateGlobalConnectionBandwidth`
    - `DeleteGlobalConnectionBandwidth`
    - `AssociateGlobalConnectionBandwidthInstance`
    - `DisassociateGlobalConnectionBandwidthInstance`
    - `ListSupportBindingConnectionBandwidths`
    - `ListGlobalConnectionBandwidthConfigs`
    - `ListGlobalConnectionBandwidthSpecCodes`
    - `ListGlobalConnectionBandwidthSites`
    - `ListGlobalConnectionBandwidthLineLevels`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ShowLogs`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateFactoryJob**
    - 请求参数变更
      - `+ single_node_job_type: enum value [NormalJob,OneClick]`
      - `- single_node_job_type: enum value [DataMigration]`
      - `+ nodes.type: enum value [DataMigration]`

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSparkJobs**
    - 请求参数变更
      - `+ job_name`
      - `- job-name`

### HuaweiCloud SDK DWS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDatabaseUser**
    - 响应参数变更
      - `+ user_type`
      - `+ name`
      - `+ logical_cluster`
      - `+ desc`
  - **ResizeClusterWithExistedNodes**
    - 请求参数变更
      - `- resize`
      - `- create_node_only`
      - `- is_scheduler_build_mode`
      - `- build_task_info`
      - `- order_id`
      - `- redis_conf.schedule_conf`
      - `- redis_conf.parallel_job`
      - `* redis_conf: object<RedisConf> -> object<RedisConfReq>`
  - **UpdateDatabaseAuthority**
    - 请求参数变更
      - `+ all_object`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateGaussMySqlInstance**
    - 请求参数变更
      - `+ tde_info`
  - **ShowGaussMySqlInstanceInfoUnifyStatus**
    - 响应参数变更
      - `+ instance.tde_info`
  - **ListGaussMySqlInstanceDetailInfoUnifyStatus**
    - 响应参数变更
      - `+ instances.tde_info`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`CreateShrinkageJob`、`ShowShrinkCheckResult`、`UpdateSinkTaskQuota`
  - **CreateInstanceTopic**
    - 响应参数变更
      - `- id`

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持接口`ListSmartLiveJobs`、`CopyVideoScripts`
- _解决问题_
  - 无
- _特性变更_
  - **ListRobot**
    - 响应参数变更
      - `+ llm_url`
      - `+ chat_rounds`
      - `+ is_stream`
      - `+ language`
      - `+ data.language`
      - `+ data.llm_url`
      - `+ data.is_stream`
      - `+ data.chat_rounds`
  - **CreateRobot**
    - 请求参数变更
      - `+ language`
      - `+ third_party_model_config`
  - **ShowRobot**
    - 响应参数变更
      - `+ llm_url`
      - `+ chat_rounds`
      - `+ is_stream`
      - `+ language`
  - **UpdateRobot**
    - 请求参数变更
      - `+ language`
      - `+ third_party_model_config`
  - **ListAssetSummary**
    - 响应参数变更
      - `+ asset_list.thumbnail_url`
  - **ListDigitalHumanVideo**
    - 响应参数变更
      - `+ jobs.job_type`
  - **CreateSmartChatRoom**
    - 请求参数变更
      - `+ layer_config.asset_id`
      - `+ layer_config.video_config.loop_count`
  - **ShowSmartChatRoom**
    - 响应参数变更
      - `+ layer_config.asset_id`
      - `+ layer_config.video_config.loop_count`
  - **UpdateSmartChatRoom**
    - 请求参数变更
      - `+ layer_config.asset_id`
      - `+ layer_config.video_config.loop_count`
    - 响应参数变更
      - `+ layer_config.asset_id`
      - `+ layer_config.video_config.loop_count`
  - **ShowSmartLive**
    - 响应参数变更
      - `+ room_id`
      - `+ cover_url`
      - `+ room_name`
  - **CheckTextLanguage**
    - 请求参数变更
      - `+ shoot_script.audio_config.asset_id`
  - **ShowAsset**
    - 响应参数变更
      - `+ app_user_id`
      - `- is_need_generate_cover`
      - `+ asset_extra_meta.voice_model_meta.order`
      - `+ asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.human_model_2d_meta.model_version: enum value [V3_2]`
  - **UpdateDigitalAsset**
    - 请求参数变更
      - `+ shared_config`
      - `- is_need_generate_cover`
      - `+ asset_extra_meta.voice_model_meta.order`
      - `+ asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.human_model_2d_meta.model_version: enum value [V3_2]`
    - 响应参数变更
      - `+ app_user_id`
      - `- is_need_generate_cover`
      - `+ asset_extra_meta.voice_model_meta.order`
      - `+ asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.human_model_2d_meta.model_version: enum value [V3_2]`
  - **StartSmartLive**
    - 请求参数变更
      - `+ view_mode`
      - `+ play_policy.play_mode: enum value [NO_PRESET]`
  - **ListSmartLive**
    - 响应参数变更
      - `+ room_id`
      - `+ cover_url`
      - `+ room_name`
      - `+ smart_live_jobs.room_id`
      - `+ smart_live_jobs.room_name`
      - `+ smart_live_jobs.cover_url`
  - **CreateDigitalAsset**
    - 请求参数变更
      - `+ shared_config`
      - `- is_need_generate_cover`
      - `+ asset_extra_meta.voice_model_meta.order`
      - `+ asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.human_model_2d_meta.model_version: enum value [V3_2]`
  - **ListAssets**
    - 请求参数变更
      - `+ is_movable`
      - `+ voice_provider`
      - `+ role`
    - 响应参数变更
      - `+ app_user_id`
      - `- is_need_generate_cover`
      - `+ assets.app_user_id`
      - `- assets.is_need_generate_cover`
      - `+ assets.asset_extra_meta.voice_model_meta.order`
      - `+ assets.asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ assets.asset_extra_meta.human_model_2d_meta.model_version: enum value [V3_2]`
  - **Create2DDigitalHumanVideo**
    - 请求参数变更
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **Show2DDigitalHumanVideo**
    - 响应参数变更
      - `+ job_type`
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **CreatePhotoDigitalHumanVideo**
    - 请求参数变更
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **ShowPhotoDigitalHumanVideo**
    - 响应参数变更
      - `+ job_type`
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **ListSmartLiveRooms**
    - 请求参数变更
      - `+ template_own_type`
    - 响应参数变更
      - `+ smart_live_rooms.project_id`
      - `+ smart_live_rooms.shared_config`
  - **CreateSmartLiveRoom**
    - 请求参数变更
      - `+ view_mode`
      - `+ play_policy.play_mode: enum value [NO_PRESET]`
      - `+ scene_scripts.layer_config.asset_id`
      - `+ scene_scripts.layer_config.video_config.loop_count`
      - `+ scene_scripts.shoot_scripts.audio_config.asset_id`
      - `+ interaction_rules.trigger.layer_config.asset_id`
  - **ShowSmartLiveRoom**
    - 响应参数变更
      - `+ view_mode`
      - `+ play_policy.play_mode: enum value [NO_PRESET]`
      - `+ scene_scripts.layer_config.asset_id`
      - `+ scene_scripts.layer_config.video_config.loop_count`
      - `+ scene_scripts.shoot_scripts.audio_config.asset_id`
      - `+ interaction_rules.trigger.layer_config.asset_id`
  - **UpdateSmartLiveRoom**
    - 请求参数变更
      - `+ view_mode`
      - `+ play_policy.play_mode: enum value [NO_PRESET]`
      - `+ scene_scripts.layer_config.asset_id`
      - `+ scene_scripts.layer_config.video_config.loop_count`
      - `+ scene_scripts.shoot_scripts.audio_config.asset_id`
      - `+ interaction_rules.trigger.layer_config.asset_id`
    - 响应参数变更
      - `+ view_mode`
      - `+ play_policy.play_mode: enum value [NO_PRESET]`
      - `+ scene_scripts.layer_config.asset_id`
      - `+ scene_scripts.layer_config.video_config.loop_count`
      - `+ scene_scripts.shoot_scripts.audio_config.asset_id`
      - `+ interaction_rules.trigger.layer_config.asset_id`
  - **UpdateInteractionRuleGroup**
    - 请求参数变更
      - `+ interaction_rules.trigger.layer_config.asset_id`
    - 响应参数变更
      - `+ interaction_rules.trigger.layer_config.asset_id`
  - **CreateVideoScripts**
    - 请求参数变更
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **ShowVideoScript**
    - 响应参数变更
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **UpdateVideoScript**
    - 请求参数变更
      - `+ shoot_scripts.shoot_script.layer_config.asset_id`
      - `+ shoot_scripts.shoot_script.layer_config.video_config.loop_count`
  - **CreateInteractionRuleGroup**
    - 请求参数变更
      - `+ interaction_rules.trigger.layer_config.asset_id`
  - **ListInteractionRuleGroups**
    - 响应参数变更
      - `+ interaction_rule_groups.interaction_rules.trigger.layer_config.asset_id`

### HuaweiCloud SDK NAT

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListNatGatewayDnatRules**
    - 请求参数变更
      - `+ marker`
  - **ListNatGatewaySnatRules**
    - 请求参数变更
      - `+ marker`
  - **ListNatGateways**
    - 请求参数变更
      - `+ marker`

### HuaweiCloud SDK OMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **StartTask**
    - 请求参数变更
      - `+ json_auth_file`
  - **StartTaskGroup**
    - 请求参数变更
      - `+ json_auth_file`
  - **RetryTaskGroup**
    - 请求参数变更
      - `+ json_auth_file`
  - **ShowBucketList**
    - 请求参数变更
      - `+ json_auth_file`
  - **ShowBucketRegion**
    - 请求参数变更
      - `+ json_auth_file`
  - **CheckPrefix**
    - 请求参数变更
      - `+ json_auth_file`
  - **ShowBucketObjects**
    - 请求参数变更
      - `+ json_auth_file`
  - **ShowCdnInfo**
    - 请求参数变更
      - `+ source_cdn.authentication_type: enum value [AZURE_SAS_TOKEN]`
  - **CreateSyncTask**
    - 请求参数变更
      - `+ dst_storage_policy`
      - `+ source_cdn.authentication_type: enum value [AZURE_SAS_TOKEN]`
  - **ShowTaskGroup**
    - 响应参数变更
      - `+ dst_storage_policy`
      - `+ src_node.cloud_type: enum value [GOOGLE]`
      - `+ src_node.list_file.list_file_num`
  - **CreateTask**
    - 请求参数变更
      - `+ dst_storage_policy`
      - `+ source_cdn.authentication_type: enum value [AZURE_SAS_TOKEN]`
      - `+ smn_config.message_template_name`
      - `+ src_node.json_auth_file`
      - `+ src_node.list_file.list_file_num`
  - **ListTasks**
    - 响应参数变更
      - `+ dst_storage_policy`
      - `+ tasks.dst_storage_policy`
      - `+ tasks.src_node.cloud_type: enum value [Google]`
      - `+ tasks.src_node.list_file.list_file_num`
  - **CreateTaskGroup**
    - 请求参数变更
      - `+ dst_storage_policy`
      - `+ smn_config.message_template_name`
      - `+ source_cdn.authentication_type: enum value [AZURE_SAS_TOKEN]`
      - `+ src_node.json_auth_file`
      - `+ src_node.list_file.list_file_num`
  - **ListTaskGroup**
    - 响应参数变更
      - `+ dst_storage_policy`
      - `+ taskgroups.dst_storage_policy`
      - `+ taskgroups.src_node.cloud_type: enum value [GOOGLE]`
      - `+ taskgroups.src_node.list_file.list_file_num`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持以下接口：
    - `StartInstanceReduceVolumeAction`
    - `UpdateHostPrivilege`
    - `ShowIncreBackupPolicy1`
    - `UpdateIncreBackupPolicy1`
    - `ListRdSforMySqlProxy`
    - `DeleteRdSforMySqlProxy`
    - `ModifyRdSforMySqlProxyRouteMode`
    - `RestartRdSforMysqlProxy`
    - `ListRdSforMysqlProxyFlavors`
    - `CreateRdSforMySqlProxy`
- _解决问题_
  - 无
- _特性变更_
  - **SetAuditlogPolicy**
    - 请求参数变更
      - `+ audit_types`
  - **CreateDbUser**
    - 请求参数变更
      - `+ is_privilege`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowGroup**
    - 响应参数变更
      - `* retry_max_time: number -> int32`
  - **UpdateConsumerGroup**
    - 请求参数变更
      - `* retry_max_time: number -> int32`
  - **ResetConsumeOffset**
    - 请求参数变更
      - `* timestamp: number -> string`
  - **CreateConsumerGroupOrBatchDeleteConsumerGroup**
    - 请求参数变更
      - `+ createdAt`
      - `+ permissions`
      - `+ consume_orderly`
      - `- from_beginning`
      - `* retry_max_time: number -> int32`
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `+ groups.createdAt`
      - `+ groups.permissions`
      - `+ groups.consume_orderly`
      - `- groups.from_beginning`
      - `* groups.retry_max_time: number -> int32`
  - **BatchUpdateConsumerGroup**
    - 请求参数变更
      - `+ groups.createdAt`
      - `+ groups.permissions`
      - `+ groups.consume_orderly`
      - `- groups.from_beginning`
      - `* groups.retry_max_time: number -> int32`

### HuaweiCloud SDK WAF

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListEvent**
    - 请求参数变更
      - `+ X-Language`
  - **ShowEvent**
    - 请求参数变更
      - `+ X-Language`

# 3.1.75 2024-01-25

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **DeleteserviceDiscoveryRules**
    - 响应参数变更
      - `+ id`

### HuaweiCloud SDK APIG

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDetailsOfApiV2**
    - 响应参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
  - **UpdateApiV2**
    - 请求参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
    - 响应参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
  - **ListApiVersionDetailV2**
    - 响应参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
  - **CreateApiV2**
    - 请求参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
    - 响应参数变更
      - `+ policy_https.req_protocol: enum value [GRPC]`
      - `+ backend_api.req_protocol: enum value [GRPC]`
  - **ListApisV2**
    - 响应参数变更
      - `+ apis.backend_api.req_protocol: enum value [GRPC]`

### HuaweiCloud SDK CSE

- _新增特性_
  - 支持以下接口：
    - `ShowPlugins`
    - `CreatePlugin`
    - `ShowSinglePlugin`
    - `ModifyPlugin`
    - `DeletePlugin`
    - `ShowHttp2Rpcs`
    - `CreateHttp2Rpc`
    - `ModifyHttp2Rpc`
    - `DeleteHttp2Rpc`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateFactoryJob**
    - 请求参数变更
      - `+ nodes.type: enum value [MRSFlinkJob]`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateGaussMySqlReadonlyNode**
    - 请求参数变更
      - `+ availability_zones`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeAutoClassification**
    - 请求参数变更
      - `+ detect_seal`
    - 响应参数变更
      - `+ result.seal_mark`
  - **RecognizeVatInvoice**
    - 响应参数变更
      - `+ result.province`
      - `+ result.city`
      - `+ result.belong_buyer_name`
      - `+ result.belong_seller_name`
      - `+ result.belong_vat_code`
      - `+ result.belong_number`
      - `+ result.belong_pages`
      - `+ result.belong_current_page`
      - `+ result.belong_remarks`
      - `+ result.belong_issue_date`
      - `+ result.sales_mark`
      - `+ result.belong_sum_amount`
      - `+ result.belong_sum_tax`
      - `+ result.belong_subtotal_amount`
      - `+ result.belong_subtotal_tax`
      - `+ result.belong_discount_amount`
      - `+ result.belong_discount_tax`
      - `+ result.belong_item_list`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListFlavors**
    - 请求参数变更
      - `+ is_serverless`
  - **ListInstances**
    - 响应参数变更
      - `+ instances.serverless_info`
  - **CreateInstance**
    - 请求参数变更
      - `+ serverless_info`
  - **CreateRestoreInstance**
    - 请求参数变更
      - `+ serverless_info`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateTask**
    - 请求参数变更
      - `+ source_server.start_type`
  - **RegisterServer**
    - 请求参数变更
      - `+ start_type`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateAssetByFileUpload**
    - 请求参数变更
      - `* category_id: string -> int32`
  - **CreateAssetProcessTask**
    - 请求参数变更
      - `+ hls_storage_type`
  - **ListTopStatistics**
    - 响应参数变更
      - `- top_urls.duration_ms`
  - **ListAssetList**
    - 响应参数变更
      - `- assets.duration_ms`
  - **ShowTakeOverAssetDetails**
    - 响应参数变更
      - `- base_info.meta_data.duration_ms`
  - **PublishAssets**
    - 响应参数变更
      - `- asset_info_array.base_info.meta_data.duration_ms`
  - **UnpublishAssets**
    - 响应参数变更
      - `- asset_info_array.base_info.meta_data.duration_ms`
  - **ShowAssetMeta**
    - 响应参数变更
      - `- asset_info_array.base_info.meta_data.duration_ms`
  - **ShowAssetDetail**
    - 响应参数变更
      - `- base_info.meta_data.duration_ms`
  - **ShowTakeOverTaskDetails**
    - 响应参数变更
      - `- assets.base_info.meta_data.duration_ms`

# 3.1.74 2024-01-18

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPromInstance**
    - 请求参数变更
      - `+ prom_status: enum value [DELETED,NORMAL,ALL]`
      - `+ prom_status: enum value [true,false]`
    - 响应参数变更
      - `- prometheus.cce_spec`
      - `- prometheus.prom_config`
      - `- prometheus.application`
      - `+ prometheus.prom_status: enum value [DELETED,NORMAL,ALL]`
  - **CreatePromInstance**
    - 请求参数变更
      - `- prom_id`
      - `- cce_spec`
      - `- prom_config`
      - `- prom_create_timestamp`
      - `- prom_update_timestamp`
      - `- prom_status`
      - `- is_deleted_tag`
      - `- deleted_time`
      - `- prom_spec_config`
      - `- cce_spec_config`
      - `- application`
      - `- prom_type: enum value [DEFAULT]`
      - `* body: object<PromInstanceEpsModel> -> object<PromInstanceRequestModel>`
    - 响应参数变更
      - `- prometheus.cce_spec`
      - `- prometheus.prom_config`
      - `- prometheus.is_deleted_tag`
      - `- prometheus.application`
      - `- prometheus.prom_type: enum value [DEFAULT]`
      - `+ prometheus.prom_status: enum value [DELETED,NORMAL,ALL]`
      - `* prometheus: list<PromInstanceEpsModel> -> list<PromInstanceEpsCreateModel>`
  - **AddOrUpdateServiceDiscoveryRules**
    - 响应参数变更
      - `+ id`
      - `+ results`

### HuaweiCloud SDK APIG

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDetailsOfInstanceV2**
    - 响应参数变更
      - `- public_ipv6_ips`
      - `- unreliable_ips`
      - `- node_ipv6_ips`
      - `- enable_fullstack_ipv6`
      - `- publicips.ipv6_address`
  - **UpdateInstanceV2**
    - 响应参数变更
      - `- public_ipv6_ips`
      - `- unreliable_ips`
      - `- node_ipv6_ips`
      - `- enable_fullstack_ipv6`
      - `- publicips.ipv6_address`
  - **CreateInstanceV2**
    - 请求参数变更
      - `+ spec_id: enum value [BASIC_IPV6,PROFESSIONAL_IPV6,ENTERPRISE_IPV6,PLATINUM_IPV6]`
  - **CreateOrder**
    - 请求参数变更
      - `+ instance_info.spec_id: enum value [BASIC_IPV6,PROFESSIONAL_IPV6,ENTERPRISE_IPV6,PLATINUM_IPV6]`

### HuaweiCloud SDK CCE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowCluster**
    - 响应参数变更
      - `+ spec.enableAutopilot`
  - **UpdateCluster**
    - 响应参数变更
      - `+ spec.enableAutopilot`
  - **DeleteCluster**
    - 响应参数变更
      - `+ spec.enableAutopilot`
  - **CreateCluster**
    - 请求参数变更
      - `+ spec.enableAutopilot`
    - 响应参数变更
      - `+ spec.enableAutopilot`
  - **ListClusters**
    - 响应参数变更
      - `+ items.spec.enableAutopilot`

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowTopUrl**
    - 请求参数变更
      - `+ service_area: enum value [global]`

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ListCdnDomainTopRefers`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持以下接口：
    - `ShowDataDetail`
    - `ShowDatamapLineage`
    - `ShowLineageBulk`
    - `ShowNodes`
    - `ShowInstanceInfos`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ChangeMasterStandbyAsync`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DSC

- _新增特性_
  - 支持接口`DeleteScanJob`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持接口`ListWorkloadPlans`
- _解决问题_
  - 无
- _特性变更_
  - **ShowWorkloadPlan**
    - 响应参数变更
      - `* workload_plan.status: string -> int32`

### HuaweiCloud SDK ELB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateListener**
    - 请求参数变更
      - `+ listener.protection_status`
      - `+ listener.protection_reason`
  - **ListLoadbalancers**
    - 响应参数变更
      - `+ loadbalancers.billing_info`
      - `+ loadbalancers.protection_status`
      - `+ loadbalancers.protection_reason`
  - **CreateLoadbalancer**
    - 响应参数变更
      - `+ loadbalancer_id`
      - `+ order_id`
      - `+ loadbalancer.billing_info`
      - `+ loadbalancer.protection_status`
      - `+ loadbalancer.protection_reason`
  - **ShowLoadbalancer**
    - 响应参数变更
      - `+ loadbalancer.billing_info`
      - `+ loadbalancer.protection_status`
      - `+ loadbalancer.protection_reason`
  - **UpdateLoadbalancer**
    - 响应参数变更
      - `+ loadbalancer.billing_info`
      - `+ loadbalancer.protection_status`
      - `+ loadbalancer.protection_reason`

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持以下接口：
    - `CreateDialogUrl`
    - `StartSmartChatJob`
    - `StopSmartChatJob`
    - `ShowSmartChatJob`
    - `CreateOnceCode`
    - `ListRobot`
    - `CreateRobot`
    - `ShowRobot`
    - `UpdateRobot`
    - `DeleteRobot`
    - `ListSmartChatRooms`
    - `CreateSmartChatRoom`
    - `ShowSmartChatRoom`
    - `UpdateSmartChatRoom`
    - `DeleteSmartChatRoom`
- _解决问题_
  - 无
- _特性变更_
  - **ListDigitalHumanVideo**
    - 请求参数变更
      - `+ job_type`
  - **ListSmartLiveRooms**
    - 响应参数变更
      - `+ smart_live_rooms.last_job_status: enum value [BLOCKED]`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeSeal`
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeFlightItinerary**
    - 响应参数变更
      - `+ result.tax`
      - `+ result.tax_rate`
      - `+ result.buyer_name`
      - `+ result.buyer_id`
      - `+ result.number`
      - `+ result.international_flag`
      - `+ result.issue_status`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAuditlogPolicy**
    - 响应参数变更
      - `+ all_audit_log_action`
      - `+ audit_types`
  - **ListRecycleInstances**
    - 响应参数变更
      - `+ instances.is_serverless`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ValidateConsumedMessage**
    - 请求参数变更
      - `+ topic`

# 3.1.73 2024-01-11

### HuaweiCloud SDK APIG

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDetailsOfInstanceV2**
    - 响应参数变更
      - `+ public_ipv6_ips`
      - `+ unreliable_ips`
      - `+ node_ipv6_ips`
      - `+ enable_fullstack_ipv6`
      - `+ publicips.ipv6_address`
  - **UpdateInstanceV2**
    - 响应参数变更
      - `+ public_ipv6_ips`
      - `+ unreliable_ips`
      - `+ node_ipv6_ips`
      - `+ enable_fullstack_ipv6`
      - `+ publicips.ipv6_address`
  - **CreateInstanceV2**
    - 请求参数变更
      - `- spec_id: enum value [BASIC_IPV6,PROFESSIONAL_IPV6,ENTERPRISE_IPV6,PLATINUM_IPV6]`
  - **CreateOrder**
    - 请求参数变更
      - `- instance_info.spec_id: enum value [BASIC_IPV6,PROFESSIONAL_IPV6,ENTERPRISE_IPV6,PLATINUM_IPV6]`

### HuaweiCloud SDK CCE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateNodePool**
    - 响应参数变更
      - `- status.jobId`
      - `* status: object<NodePoolStatus> -> object<UpdateNodePoolStatus>`
  - **CreateNodePool**
    - 响应参数变更
      - `- status.jobId`
      - `* status: object<NodePoolStatus> -> object<CreateNodePoolStatus>`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持接口`ImportLineage`、`ListAllTables`、`ImportCatalogs`、`ImportModels`
- _解决问题_
  - 无
- _特性变更_
  - **ShowEntities**
    - 响应参数变更
      - `* entities.connection: list<Connection> -> object<Connection>`
  - **ShowMetricAssets**
    - 响应参数变更
      - `* entities.connection: list<Connection> -> object<Connection>`

### HuaweiCloud SDK DRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchValidateConnections**
    - 请求参数变更
      - `+ jobs.customized_dns`

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持以下接口：
    - `BatchCreateTags`
    - `BatchDeleteTags`
    - `ListInstanceByTags`
    - `CountInstanceByTags`
    - `ListInstanceTags`
    - `ListTags`
    - `UpdateJobConfigurations`
    - `ListJobParameters`
    - `ListJobHistoryParameters`
- _解决问题_
  - 无
- _特性变更_
  - **ListLinks**
    - 响应参数变更
      - `+ job_links.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
  - **ListJobs**
    - 请求参数变更
      - `+ engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
    - 响应参数变更
      - `+ jobs.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ jobs.children.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
  - **CreateJob**
    - 请求参数变更
      - `+ job.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ job.source_endpoint.customized_dns`
      - `+ job.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ job.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ job.source_endpoint.config.node_num`
  - **BatchCreateJobsAsync**
    - 请求参数变更
      - `+ jobs.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ jobs.source_endpoint.customized_dns`
      - `+ jobs.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ jobs.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ jobs.source_endpoint.config.node_num`
  - **ListAsyncJobDetail**
    - 响应参数变更
      - `+ jobs.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ jobs.source_endpoint.customized_dns`
      - `+ jobs.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ jobs.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ jobs.source_endpoint.config.node_num`
  - **UpdateBatchAsyncJobs**
    - 请求参数变更
      - `+ jobs.params.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ jobs.params.source_endpoint.customized_dns`
      - `+ jobs.params.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ jobs.params.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ jobs.params.source_endpoint.config.node_num`
  - **ShowJobDetail**
    - 响应参数变更
      - `+ job.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ job.source_endpoint.customized_dns`
      - `+ job.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ job.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ job.source_endpoint.config.node_num`
  - **UpdateJob**
    - 请求参数变更
      - `+ job.params.base_info.engine_type: enum value [redis-to-gaussredis,rediscluster-to-gaussredis]`
      - `+ job.params.source_endpoint.customized_dns`
      - `+ job.params.source_endpoint.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ job.params.source_endpoint.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ job.params.source_endpoint.config.node_num`
  - **ExecuteJobAction**
    - 请求参数变更
      - `+ job.action_name: enum value [column_limit,reload_parameters]`
      - `+ job.action_params.endpoints.customized_dns`
      - `+ job.action_params.endpoints.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ job.action_params.endpoints.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ job.action_params.endpoints.config.node_num`
  - **BatchExecuteJobActions**
    - 请求参数变更
      - `+ jobs.action_name: enum value [column_limit,reload_parameters]`
      - `+ jobs.action_params.endpoints.customized_dns`
      - `+ jobs.action_params.endpoints.db_type: enum value [redis,rediscluster,gaussredis]`
      - `+ jobs.action_params.endpoints.endpoint.endpoint_name: enum value [redis,ecs_redis,rediscluster,ecs_rediscluster,cloud_gaussdb_redis]`
      - `+ jobs.action_params.endpoints.config.node_num`

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持以下接口：
    - `ListWorkloadQueueUsers`
    - `ShowWorkloadQueue`
    - `ShowWorkloadPlanStage`
    - `DeleteWorkloadPlanStage`
    - `ListPlanExecLogs`
    - `DeleteQueueUserList`
    - `SwitchPlanStage`
    - `AddQueueUserList`
    - `UpdateQueueResources`
    - `ListSchemas`
    - `UpdateSchemas`
    - `ShowResourceStatistics`
    - `AddWorkloadPlanStage`
- _解决问题_
  - 无
- _特性变更_
  - **CreateClusterV2**
    - 请求参数变更
      - `* cluster.tags: object<Tags> -> list<Tags>`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`NovaShowServerInterface`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateServer**
    - 响应参数变更
      - `+ server.OS-EXT-SRV-ATTR:user_data`

### HuaweiCloud SDK ELB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowCertificate**
    - 响应参数变更
      - `+ tenant_id`
      - `+ create_time`
      - `+ certificate`
      - `+ description`
      - `+ expire_time`
      - `+ private_key`
      - `+ type`
      - `+ update_time`
      - `+ admin_state_up`
      - `+ domain`
      - `+ name`
      - `+ id`
  - **UpdateCertificate**
    - 响应参数变更
      - `+ tenant_id`
      - `+ create_time`
      - `+ certificate`
      - `+ description`
      - `+ expire_time`
      - `+ private_key`
      - `+ type`
      - `+ update_time`
      - `+ admin_state_up`
      - `+ domain`
      - `+ name`
      - `+ id`
  - **CreateCertificate**
    - 响应参数变更
      - `+ tenant_id`
      - `+ create_time`
      - `+ certificate`
      - `+ description`
      - `+ expire_time`
      - `+ private_key`
      - `+ type`
      - `+ update_time`
      - `+ admin_state_up`
      - `+ domain`
      - `+ name`
      - `+ id`
  - **ListHealthmonitors**
    - 响应参数变更
      - `+ healthmonitors`
  - **CreateHealthmonitor**
    - 响应参数变更
      - `+ healthmonitor`
  - **ShowHealthmonitors**
    - 响应参数变更
      - `+ healthmonitor`
  - **UpdateHealthmonitor**
    - 响应参数变更
      - `+ healthmonitor`
  - **ListMembers**
    - 响应参数变更
      - `+ members`
  - **CreateMember**
    - 响应参数变更
      - `+ member`
  - **ShowMember**
    - 响应参数变更
      - `+ member`
  - **UpdateMember**
    - 响应参数变更
      - `+ member`
  - **ShowLoadbalancer**
    - 响应参数变更
      - `+ loadbalancer`
  - **UpdateLoadbalancer**
    - 请求参数变更
      - `+ loadbalancer.protection_status`
      - `+ loadbalancer.protection_reason`
    - 响应参数变更
      - `+ loadbalancer`
  - **ListL7rules**
    - 响应参数变更
      - `+ rules`
  - **CreateL7rule**
    - 响应参数变更
      - `+ rule`
  - **ShowL7rule**
    - 响应参数变更
      - `+ rule`
  - **UpdateL7rule**
    - 响应参数变更
      - `+ rule`
  - **ListPools**
    - 响应参数变更
      - `+ pools`
  - **CreatePool**
    - 请求参数变更
      - `+ pool.protection_status`
      - `+ pool.protection_reason`
    - 响应参数变更
      - `+ pool`
  - **ShowPool**
    - 响应参数变更
      - `+ pool`
  - **UpdatePool**
    - 请求参数变更
      - `+ pool.protection_status`
      - `+ pool.protection_reason`
    - 响应参数变更
      - `+ pool`
  - **ListListeners**
    - 响应参数变更
      - `+ listeners`
  - **CreateListener**
    - 响应参数变更
      - `+ listener`
  - **ShowListener**
    - 响应参数变更
      - `+ listener`
  - **UpdateListener**
    - 请求参数变更
      - `+ listener.protection_status`
      - `+ listener.protection_reason`
    - 响应参数变更
      - `+ listener`
  - **CreateLoadbalancer**
    - 请求参数变更
      - `+ loadbalancer.protection_status`
      - `+ loadbalancer.protection_reason`
    - 响应参数变更
      - `+ loadbalancer`
  - **ListLoadbalancers**
    - 响应参数变更
      - `+ loadbalancers.publicips`
      - `+ loadbalancers.charge_mode`
      - `+ loadbalancers.frozen_scene`
  - **ListL7policies**
    - 响应参数变更
      - `+ l7policies`
  - **CreateL7policy**
    - 响应参数变更
      - `+ l7policy`
  - **UpdateL7policies**
    - 响应参数变更
      - `+ l7policy`

### HuaweiCloud SDK ELB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPools**
    - 请求参数变更
      - `+ connection_drain`
    - 响应参数变更
      - `+ pools.connection_drain`
  - **CreatePool**
    - 请求参数变更
      - `+ pool.connection_drain`
    - 响应参数变更
      - `+ pool.connection_drain`
  - **ShowPool**
    - 响应参数变更
      - `+ pool.connection_drain`
  - **UpdatePool**
    - 请求参数变更
      - `+ pool.connection_drain`
    - 响应参数变更
      - `+ pool.connection_drain`
  - **ListMasterSlavePools**
    - 请求参数变更
      - `+ connection_drain`
    - 响应参数变更
      - `+ pools.connection_drain`
  - **CreateMasterSlavePool**
    - 请求参数变更
      - `+ pool.connection_drain`
    - 响应参数变更
      - `+ pool.connection_drain`
  - **ShowMasterSlavePool**
    - 响应参数变更
      - `+ pool.connection_drain`

### HuaweiCloud SDK GES

- _新增特性_
  - 支持接口`ExportBackup2`、`ImportBackup2`
- _解决问题_
  - 无
- _特性变更_
  - **ListGraphs2**
    - 响应参数变更
      - `+ graphs.capacity_ratio`
  - **CreateGraph2**
    - 请求参数变更
      - `+ graph.capacity_ratio`
  - **ShowGraph2**
    - 响应参数变更
      - `+ graph.capacity_ratio`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateReassignmentTask**
    - 请求参数变更
      - `+ is_schedule`
      - `+ execute_at`

### HuaweiCloud SDK MPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListTranscodingTask**
    - 响应参数变更
      - `+ task_array.progress`
  - **ListTranscodeDetail**
    - 响应参数变更
      - `+ task_array.progress`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeIdCard**
    - 请求参数变更
      - `+ detect_tampering`
      - `+ detect_border_integrity`
      - `+ detect_blocking_within_border`
      - `+ detect_blur`
      - `+ detect_interim`
      - `+ detect_glare`
    - 响应参数变更
      - `+ result.detect_tampering_result`
      - `+ result.detect_border_integrity_result`
      - `+ result.detect_blocking_within_border_result`
      - `+ result.detect_blur_result`
      - `+ result.detect_interim_result`
      - `+ result.detect_glare_result`
      - `+ result.score_info`
      - `+ result.front`
      - `+ result.back`
      - `+ result.verification_result.valid_validity_period`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 请求参数变更
      - `+ eps_id`
  - **BatchRestoreDatabase**
    - 请求参数变更
      - `+ instances.is_fast_restore`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAddressGroup**
    - 响应参数变更
      - `+ address_group.ip_extra_set`
  - **UpdateAddressGroup**
    - 请求参数变更
      - `+ address_group.ip_extra_set`
    - 响应参数变更
      - `+ address_group.ip_extra_set`
  - **ListAddressGroup**
    - 响应参数变更
      - `+ address_groups.ip_extra_set`
  - **CreateAddressGroup**
    - 请求参数变更
      - `+ address_group.ip_extra_set`
    - 响应参数变更
      - `+ address_group.ip_extra_set`

# 3.1.72 2024-01-04

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListNotifiedHistories**
    - 响应参数变更
      - `+ notified_histories`
      - `- event_sn`
      - `- notifications`
  - **ListEvent2alarmRule**
    - 响应参数变更
      - `+ event_names`
      - `+ migrated`
      - `+ topics`
      - `+ trigger_policies.trigger_type: enum value [immediately]`
      - `- trigger_policies.trigger_type: enum value [notification]`
      - `+ alarm_type: enum value [notification,denoising]`
      - `* : list<event2alarmRuleBody> -> list<Event2alarmRuleBody>`
  - **UpdateEventRule**
    - 请求参数变更
      - `+ event_names`
      - `+ migrated`
      - `+ topics`
      - `+ trigger_policies.trigger_type: enum value [immediately]`
      - `- trigger_policies.trigger_type: enum value [notification]`
      - `+ alarm_type: enum value [notification,denoising]`
      - `* body: object<event2alarmRuleBody> -> object<Event2alarmRuleBody>`
  - **AddEvent2alarmRule**
    - 请求参数变更
      - `+ event_names`
      - `+ migrated`
      - `+ topics`
      - `+ trigger_policies.trigger_type: enum value [immediately]`
      - `- trigger_policies.trigger_type: enum value [notification]`
      - `+ alarm_type: enum value [notification,denoising]`
      - `* body: object<event2alarmRuleBody> -> object<Event2alarmRuleBody>`
  - **ListMuteRule**
    - 响应参数变更
      - `* mute_config.scope: list<string> -> list<integer>`
  - **UpdateMuteRule**
    - 请求参数变更
      - `* mute_config.scope: list<string> -> list<integer>`
  - **AddMuteRules**
    - 请求参数变更
      - `* mute_config.scope: list<string> -> list<integer>`
  - **ShowActionRule**
    - 响应参数变更
      - `+ type: enum value [1,2]`
      - `- type: enum value ["1","2"]`
  - **ListEvents**
    - 响应参数变更
      - `* events.metadata: object -> map<string, string>`
      - `* events.annotations: object -> map<string, string>`
      - `* events.attach_rule: object -> map<string, string>`
  - **PushEvents**
    - 请求参数变更
      - `* events.metadata: object -> map<string, string>`
      - `* events.annotations: object -> map<string, string>`
      - `* events.attach_rule: object -> map<string, string>`
  - **UpdateActionRule**
    - 请求参数变更
      - `+ type: enum value [1,2]`
      - `- type: enum value ["1","2"]`
  - **AddActionRule**
    - 请求参数变更
      - `+ type: enum value [1,2]`
      - `- type: enum value ["1","2"]`
  - **ListActionRule**
    - 响应参数变更
      - `+ action_rules.type: enum value [1,2]`
      - `- action_rules.type: enum value ["1","2"]`
  - **ListMetricItems**
    - 响应参数变更
      - `+ metaData.offset`
      - `+ metaData.nextToken`
      - `- metaData.start`
      - `* metaData: object<metaData> -> object<MetaDataSeries>`
  - **UpdateAlarmRule**
    - 请求参数变更
      - `+ is_turn_on`
      - `- id_turn_on`
      - `+ comparison_operator: enum value [<,>,<=,>=]`
      - `+ period: enum value [60000,300000,900000,36000000]`
  - **AddAlarmRule**
    - 请求参数变更
      - `+ is_turn_on`
      - `- id_turn_on`
      - `+ comparison_operator: enum value [<,>,<=,>=]`
      - `+ period: enum value [60000,300000,900000,36000000]`
  - **ListServiceDiscoveryRules**
    - 响应参数变更
      - `+ id`
      - `+ appRules.desc`
      - `+ appRules.spec.dataSource`
      - `+ appRules.spec.editable`
      - `+ appRules.spec.aom_metric_relabel_configs`
  - **AddOrUpdateServiceDiscoveryRules**
    - 请求参数变更
      - `+ appRules.desc`
      - `+ appRules.spec.dataSource`
      - `+ appRules.spec.editable`
      - `+ appRules.spec.aom_metric_relabel_configs`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `ShowProjectOpenSourceStrategy`
    - `ListProjectOpenSourceStrategy`
    - `CreateOpenSourceStrategy`
    - `UpdateOpenSourceStrategy`
    - `ShowOpenSourceStrategy`
    - `ListOpenSourceStrategy`
    - `DeleteOpenSourceStrategy`
    - `SwitchOpenSourceStrategy`

### HuaweiCloud SDK CSE

- _新增特性_
  - 支持接口`ShowEngineQuotas`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持接口`ListFactoryTaskOverview`、`ListFactoryTaskCompletion`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateAccessCode**
    - 请求参数变更
      - `+ force_disconnect`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`ResetMessageOffsetWithEngine`
- _解决问题_
  - 无
- _特性变更_
  - **ShowGroups**
    - 响应参数变更
      - `* group.group_message_offsets.message_current_offset: int32 -> int64`
      - `* group.group_message_offsets.message_log_end_offset: int32 -> int64`
  - **ResetMessageOffset**
    - 请求参数变更
      - `* message_offset: int32 -> int64`
      - `* timestamp: int32 -> int64`
  - **ShowMessages**
    - 响应参数变更
      - `* messages.message_offset: int32 -> int64`
  - **ShowInstanceMessages**
    - 响应参数变更
      - `* messages.message_offset: int32 -> int64`

### HuaweiCloud SDK MPC

- _新增特性_
  - 支持接口`ShowTenantAccessInfo`、`UpdateTenantAccessInfo`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`ShowMrsFlavors`、`ShowSyncIamUser`、`UpdateSyncIamUser`、`CancelSyncIamUser`
- _解决问题_
  - 无
- _特性变更_
  - **CreateCluster**
    - 请求参数变更
      - `+ smn_notify`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchRestartOrDeleteInstances**
    - 请求参数变更
      - `- action: enum value [restart]`
  - **ListInstancesDetails**
    - 请求参数变更
      - `+ status: enum value [UPGRADING,UPGRADINGFAILED]`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **SetOffSiteBackupPolicy**
    - 请求参数变更
      - `* policy_para: list<OffSiteBackupPolicy> -> object<OffSiteBackupPolicy>`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ResizeInstance**
    - 请求参数变更
      - `+ publicip_id`

### HuaweiCloud SDK SecMaster

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAlerts**
    - 响应参数变更
      - `+ data.data_object.data_source`
      - `+ data.data_object.severity`
      - `+ data.data_object.creator`
      - `- data.data_object.datasource`
      - `- data.data_object.serverity`
      - `- data.data_object.cteator`

### HuaweiCloud SDK SFSTurbo

- _新增特性_
  - 支持以下接口：
    - `ShowLdapConfig`
    - `UpdateLdapConfig`
    - `CreateLdapConfig`
    - `DeleteLdapConfig`
    - `ShowJobDetail`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SMN

- _新增特性_
  - 支持以下接口：
    - `PublishHttpDetect`
    - `ShowHttpDetectResult`
    - `BatchUpdateSubscriptionsFilterPolices`
    - `BatchCreateSubscriptionsFilterPolices`
    - `BatchDeleteSubscriptionsFilterPolices`
    - `AddSubscriptionFromSubscriptionUser`
- _解决问题_
  - 无
- _特性变更_
  - 废弃以下接口：
    - `ListApplicationAttributes`
    - `UpdateApplication`
    - `DeleteApplication`
    - `ListApplicationEndpointAttributes`
    - `UpdateApplicationEndpoint`
    - `DeleteApplicationEndpoint`
    - `PublishAppMessage`
    - `CreateApplication`
    - `ListApplications`
    - `CreateApplicationEndpoint`
    - `ListApplicationEndpoints`
  - **PublishMessage**
    - 请求参数变更
      - `+ message_attributes`
  - **ListTopics**
    - 请求参数变更
      - `+ fuzzy_display_name`
  - **ListSubscriptions**
    - 请求参数变更
      - `+ fuzzy_remark`
    - 响应参数变更
      - `+ subscriptions.filter_polices`
  - **ListSubscriptionsByTopic**
    - 请求参数变更
      - `+ fuzzy_remark`
    - 响应参数变更
      - `+ subscriptions.filter_polices`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPorts**
    - 响应参数变更
      - `+ ports.ipv6_bandwidth_id`
  - **CreatePort**
    - 响应参数变更
      - `+ port.ipv6_bandwidth_id`
  - **ShowPort**
    - 响应参数变更
      - `+ port.ipv6_bandwidth_id`
  - **UpdatePort**
    - 响应参数变更
      - `+ port.ipv6_bandwidth_id`

# 3.1.71 2023-12-27

### HuaweiCloud SDK AAD

- _新增特性_
  - 支持以下接口：
    - `CreateAadDomain`
    - `CreateCertificate`
    - `ModifyDomainWebSwitch`
    - `ListSourceIps`
    - `AddBlackWhiteIpList`
    - `DeleteBlackWhiteIpList`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK APIG

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListMetricData**
    - 响应参数变更
      - `* datapoints.timestamp: int32 -> int64`
  - **ListApisV2**
    - 请求参数变更
      - `+ return_data_mode: enum value [brief,include_group,include_group_backend]`

### HuaweiCloud SDK CodeArtsArtifact

- _新增特性_
  - 支持以下接口：
    - `BatchRestoreRepo`
    - `BatchDeleteTrashes`
    - `CreateMavenRepo`
    - `ShowProjectList`
    - `ModifyRepository`
    - `ShowRepositoryInfo`
    - `CreateDockerRepositories`
    - `DeleteRepository`
    - `ShowStorage`
    - `ShowMavenInfo`
    - `CreateProjectRelatedRepository`
    - `SearchByChecksum`
    - `SearchArtifacts`
    - `ResetUserPassword`
    - `ShowFileTree`
    - `ListArtifactoryComponent`
    - `ListAllRepositories`
    - `ShowAudit`
    - `ShowRepository`
    - `ListArtifactoryStorageStatistic`
    - `CreateAttention`
    - `ListAttentions`
    - `UpdateArtifactory`
    - `CreateArtifactory`
    - `DeleteArtifactFile`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CSMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListResourceInstances**
    - 响应参数变更
      - `+ resources.sys_tags`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持接口`ListFactoryJobs`、`CreateFactoryJob`、`ListFactoryAlarmInfo`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ShowInstanceSslDetail`、`UpdateSslSwitch`、`DownloadSslCert`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DDS

- _新增特性_
  - 支持接口`ShowClientNetwork`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持接口`ListJobs`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK HSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAssetStatistic**
    - 响应参数变更
      - `+ environment_num`
      - `+ core_conf_file_num`
  - **ListPorts**
    - 响应参数变更
      - `+ data_list.agent_id`
      - `+ data_list.container_id`
  - **ListSwrImageRepository**
    - 响应参数变更
      - `+ data_list.instance_name`
      - `+ data_list.instance_id`
      - `+ data_list.instance_url`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`CreateShrinkageJob`、`ShowShrinkCheckResult`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持以下接口：
    - `ListDigitalHumanVideo`
    - `ListInteractionRuleGroups`
    - `CreateInteractionRuleGroup`
    - `UpdateInteractionRuleGroup`
    - `DeleteInteractionRuleGroup`
    - `CheckTextLanguage`
    - `CreateFacialAnimations`
    - `ListFacialAnimationsData`
- _解决问题_
  - 无
- _特性变更_
  - **CreateFile**
    - 响应参数变更
      - `- file_id`
      - `- upload_url`
  - **ExecuteSmartLiveCommand**
    - 请求参数变更
      - `+ review_config`
      - `+ command: enum value [GET_CURRENT_PLAYING_SCRIPTS]`
  - **CreatePictureModelingByUrlJob**
    - 请求参数变更
      - `- X-User-Privilege`
  - **ListAssetSummary**
    - 响应参数变更
      - `+ asset_list.asset_type: enum value [AUDIO]`
  - **Create2DDigitalHumanVideo**
    - 请求参数变更
      - `+ review_config`
      - `+ callback_config`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
  - **Show2DDigitalHumanVideo**
    - 响应参数变更
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
  - **CreatePhotoDigitalHumanVideo**
    - 请求参数变更
      - `+ review_config`
      - `- video_config.disable_system_watermark`
  - **ShowPhotoDigitalHumanVideo**
    - 响应参数变更
      - `- video_config.disable_system_watermark`
  - **LiveEventReport**
    - 请求参数变更
      - `+ review_config`
  - **CreateTtsa**
    - 请求参数变更
      - `- X-User-Privilege`
      - `+ script_type`
      - `+ audio_file_download_url`
      - `+ job_type`
      - `- parent_job_id`
      - `- auto_motion`
  - **ListTtsaJobs**
    - 响应参数变更
      - `+ ttsa_jobs.job_type`
  - **ListTtsaData**
    - 响应参数变更
      - `+ start_time`
      - `+ end_time`
      - `+ is_tail`
  - **ListStyles**
    - 响应参数变更
      - `- styles.extra_meta.edit_value_items`
      - `- styles.extra_meta.edit_color_items`
      - `- styles.extra_meta.edit_components`
      - `- styles.extra_meta.modelling_algorithm`
  - **CreateDigitalHumanBusinessCard**
    - 请求参数变更
      - `+ introduction_type`
      - `+ introduction_audio_asset_id`
      - `+ review_config`
    - 响应参数变更
      - `- job_id`
  - **UpdateDigitalHumanBusinessCard**
    - 请求参数变更
      - `+ introduction_type`
      - `+ introduction_audio_asset_id`
      - `+ review_config`
    - 响应参数变更
      - `- job_id`
  - **ShowDigitalHumanBusinessCard**
    - 响应参数变更
      - `+ introduction_audio_asset_id`
      - `+ introduction_type`
  - **ShowSmartLive**
    - 响应参数变更
      - `+ stream_duration`
      - `+ block_reason`
      - `+ live_event_callback_config`
      - `+ state: enum value [BLOCKED]`
      - `+ rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **ListVideoScripts**
    - 请求参数变更
      - `+ name`
      - `+ script_catalog`
      - `+ view_mode`
    - 响应参数变更
      - `+ video_scripts.script_cover_url`
      - `+ video_scripts.script_type`
      - `+ video_scripts.text`
      - `- video_scripts.video_making_type`
      - `- video_scripts.human_image`
  - **ShowVideoScript**
    - 响应参数变更
      - `+ script_cover_url`
      - `+ review_config`
      - `- video_making_type`
      - `- human_image`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `* shoot_scripts: list<ShootScriptItem> -> list<ShootScriptShowItem>`
  - **CreatePictureModelingJob**
    - 请求参数变更
      - `- X-User-Privilege`
    - 响应参数变更
      - `- model_asset_id`
      - `- job_id`
  - **ShowVideoMotionCaptureJob**
    - 响应参数变更
      - `+ input_info.rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **ShowAsset**
    - 响应参数变更
      - `+ reason`
      - `+ is_need_generate_cover`
      - `+ fail_type`
      - `+ asset_type: enum value [AUDIO]`
      - `+ system_properties.key: enum value [MATERIAL_IMG,MATERIAL_VIDEO,BUSSINESS_CARD_VIDEO,TO_BE_TRANSLATED_VIDEO]`
      - `+ files.state`
      - `+ files.reason`
      - `+ asset_extra_meta.voice_model_meta.speed_ratio`
      - `+ asset_extra_meta.voice_model_meta.volume_ratio`
      - `- asset_extra_meta.voice_model_meta.tts_mode`
      - `- asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.voice_model_meta.language: enum value [GER,fr,Kr,por,JPN,Ita,ESP,DBH,GT,GXH,HBH,SXH,SCH,YY,Russian,Filipino,Dutch,Indonesian,Vietnamese,Arabic,Turkish,Malay,Thai,Finnish]`
      - `+ asset_extra_meta.human_model_2d_meta.model_resolution`
      - `- asset_extra_meta.human_model_2d_meta.is_realtime_matting`
      - `+ asset_extra_meta.ppt_meta.error_info`
  - **UpdateDigitalAsset**
    - 请求参数变更
      - `+ is_need_generate_cover`
      - `+ review_config`
      - `+ asset_type: enum value [AUDIO]`
      - `+ system_properties.key: enum value [MATERIAL_IMG,MATERIAL_VIDEO,BUSSINESS_CARD_VIDEO,TO_BE_TRANSLATED_VIDEO]`
      - `+ asset_extra_meta.voice_model_meta.speed_ratio`
      - `+ asset_extra_meta.voice_model_meta.volume_ratio`
      - `- asset_extra_meta.voice_model_meta.tts_mode`
      - `- asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.voice_model_meta.language: enum value [GER,fr,Kr,por,JPN,Ita,ESP,DBH,GT,GXH,HBH,SXH,SCH,YY,Russian,Filipino,Dutch,Indonesian,Vietnamese,Arabic,Turkish,Malay,Thai,Finnish]`
      - `+ asset_extra_meta.human_model_2d_meta.model_resolution`
      - `- asset_extra_meta.human_model_2d_meta.is_realtime_matting`
      - `+ asset_extra_meta.ppt_meta.error_info`
    - 响应参数变更
      - `+ reason`
      - `+ is_need_generate_cover`
      - `+ fail_type`
      - `+ asset_type: enum value [AUDIO]`
      - `+ system_properties.key: enum value [MATERIAL_IMG,MATERIAL_VIDEO,BUSSINESS_CARD_VIDEO,TO_BE_TRANSLATED_VIDEO]`
      - `+ files.state`
      - `+ files.reason`
      - `+ asset_extra_meta.voice_model_meta.speed_ratio`
      - `+ asset_extra_meta.voice_model_meta.volume_ratio`
      - `- asset_extra_meta.voice_model_meta.tts_mode`
      - `- asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.voice_model_meta.language: enum value [GER,fr,Kr,por,JPN,Ita,ESP,DBH,GT,GXH,HBH,SXH,SCH,YY,Russian,Filipino,Dutch,Indonesian,Vietnamese,Arabic,Turkish,Malay,Thai,Finnish]`
      - `+ asset_extra_meta.human_model_2d_meta.model_resolution`
      - `- asset_extra_meta.human_model_2d_meta.is_realtime_matting`
      - `+ asset_extra_meta.ppt_meta.error_info`
  - **ListSmartLiveRooms**
    - 请求参数变更
      - `+ room_type`
    - 响应参数变更
      - `+ smart_live_rooms.room_type`
      - `+ smart_live_rooms.room_state`
      - `+ smart_live_rooms.error_info`
      - `+ smart_live_rooms.model_infos.backup_model_asset_ids`
  - **CreateSmartLiveRoom**
    - 请求参数变更
      - `+ stream_keys`
      - `+ backup_model_asset_ids`
      - `+ live_event_callback_config`
      - `+ review_config`
      - `+ shared_config`
      - `+ room_type: enum value [TEMPLATE]`
      - `+ play_policy.random_play_mode`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `+ scene_scripts.layer_config.group_id`
      - `+ scene_scripts.layer_config.layer_type: enum value [TEXT]`
      - `+ interaction_rules.rule_index`
      - `+ interaction_rules.review_config`
      - `+ interaction_rules.trigger.layer_config`
      - `+ interaction_rules.trigger.reply_audios`
      - `+ interaction_rules.trigger.reply_mode: enum value [CALLBACK,SHOW_LAYER]`
  - **ShowSmartLiveRoom**
    - 响应参数变更
      - `+ backup_model_asset_ids`
      - `+ error_info`
      - `+ stream_keys`
      - `+ shared_config`
      - `+ live_event_callback_config`
      - `+ room_state`
      - `+ review_config`
      - `+ room_type: enum value [TEMPLATE]`
      - `+ play_policy.random_play_mode`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `+ scene_scripts.layer_config.group_id`
      - `+ scene_scripts.layer_config.layer_type: enum value [TEXT]`
      - `+ interaction_rules.rule_index`
      - `+ interaction_rules.review_config`
      - `+ interaction_rules.trigger.layer_config`
      - `+ interaction_rules.trigger.reply_audios`
      - `+ interaction_rules.trigger.reply_mode: enum value [CALLBACK,SHOW_LAYER]`
  - **UpdateSmartLiveRoom**
    - 请求参数变更
      - `+ stream_keys`
      - `+ backup_model_asset_ids`
      - `+ live_event_callback_config`
      - `+ review_config`
      - `+ shared_config`
      - `+ room_type: enum value [TEMPLATE]`
      - `+ play_policy.random_play_mode`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `+ scene_scripts.layer_config.group_id`
      - `+ scene_scripts.layer_config.layer_type: enum value [TEXT]`
      - `+ interaction_rules.rule_index`
      - `+ interaction_rules.review_config`
      - `+ interaction_rules.trigger.layer_config`
      - `+ interaction_rules.trigger.reply_audios`
      - `+ interaction_rules.trigger.reply_mode: enum value [CALLBACK,SHOW_LAYER]`
    - 响应参数变更
      - `+ backup_model_asset_ids`
      - `+ error_info`
      - `+ stream_keys`
      - `+ shared_config`
      - `+ live_event_callback_config`
      - `+ room_state`
      - `+ review_config`
      - `+ room_type: enum value [TEMPLATE]`
      - `+ play_policy.random_play_mode`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `+ scene_scripts.layer_config.group_id`
      - `+ scene_scripts.layer_config.layer_type: enum value [TEXT]`
      - `+ interaction_rules.rule_index`
      - `+ interaction_rules.review_config`
      - `+ interaction_rules.trigger.layer_config`
      - `+ interaction_rules.trigger.reply_audios`
      - `+ interaction_rules.trigger.reply_mode: enum value [CALLBACK,SHOW_LAYER]`
  - **StartSmartLive**
    - 请求参数变更
      - `+ stream_keys`
      - `+ interaction_callback_url`
      - `+ live_event_callback_config`
      - `+ video_config.subtitle_config`
      - `- video_config.disable_system_watermark`
      - `+ video_config.codec: enum value [VP9]`
      - `+ play_policy.random_play_mode`
    - 响应参数变更
      - `+ live_warning_info`
      - `+ live_event_callback_config`
      - `+ rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **ListSmartLive**
    - 响应参数变更
      - `+ stream_duration`
      - `+ block_reason`
      - `+ live_event_callback_config`
      - `+ smart_live_jobs.live_event_callback_config`
      - `+ smart_live_jobs.stream_duration`
      - `+ smart_live_jobs.block_reason`
      - `+ smart_live_jobs.state: enum value [BLOCKED]`
      - `+ smart_live_jobs.rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **CreateVideoMotionCaptureJob**
    - 请求参数变更
      - `+ input_info.rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
    - 响应参数变更
      - `- rtc_room_info`
      - `- job_id`
      - `+ rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **ListVideoMotionCaptureJobs**
    - 响应参数变更
      - `+ video_motion_capture_jobs.input_info.rtc_room_info.users.user_type: enum value [INFERENCE_USER,END_USER]`
  - **CreateDigitalAsset**
    - 请求参数变更
      - `+ is_need_generate_cover`
      - `+ review_config`
      - `+ asset_type: enum value [AUDIO]`
      - `+ system_properties.key: enum value [MATERIAL_IMG,MATERIAL_VIDEO,BUSSINESS_CARD_VIDEO,TO_BE_TRANSLATED_VIDEO]`
      - `+ asset_extra_meta.voice_model_meta.speed_ratio`
      - `+ asset_extra_meta.voice_model_meta.volume_ratio`
      - `- asset_extra_meta.voice_model_meta.tts_mode`
      - `- asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ asset_extra_meta.voice_model_meta.language: enum value [GER,fr,Kr,por,JPN,Ita,ESP,DBH,GT,GXH,HBH,SXH,SCH,YY,Russian,Filipino,Dutch,Indonesian,Vietnamese,Arabic,Turkish,Malay,Thai,Finnish]`
      - `+ asset_extra_meta.human_model_2d_meta.model_resolution`
      - `- asset_extra_meta.human_model_2d_meta.is_realtime_matting`
      - `+ asset_extra_meta.ppt_meta.error_info`
  - **ListAssets**
    - 请求参数变更
      - `- asset_manage_type`
      - `- X-User-MePrivilege`
    - 响应参数变更
      - `+ reason`
      - `+ is_need_generate_cover`
      - `+ fail_type`
      - `+ assets.fail_type`
      - `+ assets.reason`
      - `+ assets.is_need_generate_cover`
      - `+ assets.asset_type: enum value [AUDIO]`
      - `+ assets.system_properties.key: enum value [MATERIAL_IMG,MATERIAL_VIDEO,BUSSINESS_CARD_VIDEO,TO_BE_TRANSLATED_VIDEO]`
      - `+ assets.files.state`
      - `+ assets.files.reason`
      - `+ assets.asset_extra_meta.voice_model_meta.speed_ratio`
      - `+ assets.asset_extra_meta.voice_model_meta.volume_ratio`
      - `- assets.asset_extra_meta.voice_model_meta.tts_mode`
      - `- assets.asset_extra_meta.voice_model_meta.external_voice_meta`
      - `+ assets.asset_extra_meta.voice_model_meta.language: enum value [GER,fr,Kr,por,JPN,Ita,ESP,DBH,GT,GXH,HBH,SXH,SCH,YY,Russian,Filipino,Dutch,Indonesian,Vietnamese,Arabic,Turkish,Malay,Thai,Finnish]`
      - `+ assets.asset_extra_meta.human_model_2d_meta.model_resolution`
      - `- assets.asset_extra_meta.human_model_2d_meta.is_realtime_matting`
      - `+ assets.asset_extra_meta.ppt_meta.error_info`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`SetInstancesNewDbShrink`、`StopBackup`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.70 2023-12-22

### HuaweiCloud SDK Config

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowTrackerConfig**
    - 响应参数变更
      - `+ channel.obs.bucket_prefix`
  - **CreateTrackerConfig**
    - 请求参数变更
      - `+ channel.obs.bucket_prefix`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowGroups**
    - 响应参数变更
      - `* group.group_message_offsets.lag: int32 -> int64`
  - **ShowInstanceTopicDetail**
    - 响应参数变更
      - `* partitions.replicas.lag: int32 -> int64`

# 3.1.69 2023-12-21

### HuaweiCloud SDK AS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateScalingConfig**
    - 请求参数变更
      - `+ instance_config.disk.iops`
      - `+ instance_config.disk.throughput`
      - `+ instance_config.disk.volume_type: enum value [GPSSD2,ESSD2]`
  - **ListScalingConfigs**
    - 响应参数变更
      - `+ scaling_configurations.instance_config.disk.iops`
      - `+ scaling_configurations.instance_config.disk.throughput`
      - `+ scaling_configurations.instance_config.disk.volume_type: enum value [GPSSD2,ESSD2]`
  - **ShowScalingConfig**
    - 响应参数变更
      - `+ scaling_configuration.instance_config.disk.iops`
      - `+ scaling_configuration.instance_config.disk.throughput`
      - `+ scaling_configuration.instance_config.disk.volume_type: enum value [GPSSD2,ESSD2]`

### HuaweiCloud SDK CloudTable

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateCloudTableCluster**
    - 请求参数变更
      - `+ cluster_name`
      - `+ datastore`
      - `+ availability_zone`
      - `+ nics`
      - `+ cluster_info`
      - `+ enterprise_project_id`
      - `+ vpc_id`
      - `+ dbuser`
      - `+ dbuserpwd`
      - `- cluster`
      - `* body: object<CreateClusterRequestBody> -> object<CreateClusterReqBody>`
    - 响应参数变更
      - `+ jobId`
      - `+ getJobEndpoint`
  - **CreateCluster**
    - 请求参数变更
      - `* cluster.instance.nics: list<Nics> -> list<nic>`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPipelineRunDetail**
    - 响应参数变更
      - `* current_system_time: string -> int64`
      - `* stages.pre.endpoint_ids: string -> list<string>`

### HuaweiCloud SDK DC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateVifPeer**
    - 响应参数变更
      - `+ vif_peer.enable_nqa`
      - `+ vif_peer.enable_bfd`
  - **CreateVifPeer**
    - 响应参数变更
      - `+ vif_peer.enable_nqa`
      - `+ vif_peer.enable_bfd`
  - **ShowDirectConnect**
    - 响应参数变更
      - `+ direct_connect.signed_agreement_time`
      - `+ direct_connect.locales`
      - `+ direct_connect.support_feature`
      - `+ direct_connect.ies_id`
      - `+ direct_connect.reason`
      - `+ direct_connect.email`
      - `+ direct_connect.onestop_product_id`
      - `+ direct_connect.building_line_product_id`
      - `+ direct_connect.last_onestop_product_id`
      - `+ direct_connect.last_building_line_product_id`
      - `+ direct_connect.modified_bandwidth`
      - `+ direct_connect.change_mode`
      - `+ direct_connect.onestopdc_status`
      - `+ direct_connect.public_border_group`
      - `+ direct_connect.auto_renew`
      - `+ direct_connect.ratio_95peak`
      - `+ direct_connect.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connect.status: enum value [ORDERING,ACCEPT,REJECTED]`
  - **UpdateDirectConnect**
    - 响应参数变更
      - `+ direct_connect.signed_agreement_time`
      - `+ direct_connect.locales`
      - `+ direct_connect.support_feature`
      - `+ direct_connect.ies_id`
      - `+ direct_connect.reason`
      - `+ direct_connect.email`
      - `+ direct_connect.onestop_product_id`
      - `+ direct_connect.building_line_product_id`
      - `+ direct_connect.last_onestop_product_id`
      - `+ direct_connect.last_building_line_product_id`
      - `+ direct_connect.modified_bandwidth`
      - `+ direct_connect.change_mode`
      - `+ direct_connect.onestopdc_status`
      - `+ direct_connect.public_border_group`
      - `+ direct_connect.auto_renew`
      - `+ direct_connect.ratio_95peak`
      - `+ direct_connect.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connect.status: enum value [ORDERING,ACCEPT,REJECTED]`
  - **ListDirectConnects**
    - 响应参数变更
      - `+ direct_connects.signed_agreement_time`
      - `+ direct_connects.locales`
      - `+ direct_connects.support_feature`
      - `+ direct_connects.ies_id`
      - `+ direct_connects.reason`
      - `+ direct_connects.email`
      - `+ direct_connects.onestop_product_id`
      - `+ direct_connects.building_line_product_id`
      - `+ direct_connects.last_onestop_product_id`
      - `+ direct_connects.last_building_line_product_id`
      - `+ direct_connects.modified_bandwidth`
      - `+ direct_connects.change_mode`
      - `+ direct_connects.onestopdc_status`
      - `+ direct_connects.public_border_group`
      - `+ direct_connects.auto_renew`
      - `+ direct_connects.ratio_95peak`
      - `+ direct_connects.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connects.status: enum value [ORDERING,ACCEPT,REJECTED]`
  - **ListHostedDirectConnects**
    - 响应参数变更
      - `+ hosted_connects.port_type`
      - `+ hosted_connects.type`
      - `+ hosted_connects.status: enum value [PENDING_UPDATE,PENDING_CREATE]`
      - `- hosted_connects.status: enum value [PAID,APPLY,PENDING_SURVEY,DELETED,DENY,PENDING_PAY,ORDERING,ACCEPT,REJECTED]`
  - **CreateHostedDirectConnect**
    - 响应参数变更
      - `+ hosted_connect.port_type`
      - `+ hosted_connect.type`
      - `+ hosted_connect.status: enum value [PENDING_UPDATE,PENDING_CREATE]`
      - `- hosted_connect.status: enum value [PAID,APPLY,PENDING_SURVEY,DELETED,DENY,PENDING_PAY,ORDERING,ACCEPT,REJECTED]`
  - **ShowHostedDirectConnect**
    - 响应参数变更
      - `+ hosted_connect.port_type`
      - `+ hosted_connect.type`
      - `+ hosted_connect.status: enum value [PENDING_UPDATE,PENDING_CREATE]`
      - `- hosted_connect.status: enum value [PAID,APPLY,PENDING_SURVEY,DELETED,DENY,PENDING_PAY,ORDERING,ACCEPT,REJECTED]`
  - **UpdateHostedDirectConnect**
    - 响应参数变更
      - `+ hosted_connect.port_type`
      - `+ hosted_connect.type`
      - `+ hosted_connect.status: enum value [PENDING_UPDATE,PENDING_CREATE]`
      - `- hosted_connect.status: enum value [PAID,APPLY,PENDING_SURVEY,DELETED,DENY,PENDING_PAY,ORDERING,ACCEPT,REJECTED]`
  - **ShowVirtualGateway**
    - 响应参数变更
      - `+ virtual_gateway.device_id`
      - `+ virtual_gateway.redundant_device_id`
      - `+ virtual_gateway.public_border_group`
  - **UpdateVirtualGateway**
    - 响应参数变更
      - `+ virtual_gateway.device_id`
      - `+ virtual_gateway.redundant_device_id`
      - `+ virtual_gateway.public_border_group`
  - **ListVirtualGateways**
    - 响应参数变更
      - `+ virtual_gateways.device_id`
      - `+ virtual_gateways.redundant_device_id`
      - `+ virtual_gateways.public_border_group`
  - **CreateVirtualGateway**
    - 响应参数变更
      - `+ virtual_gateway.device_id`
      - `+ virtual_gateway.redundant_device_id`
      - `+ virtual_gateway.public_border_group`
  - **ShowVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.local_gateway_v4_ip`
      - `+ virtual_interface.remote_gateway_v4_ip`
      - `+ virtual_interface.ies_id`
      - `+ virtual_interface.reason`
      - `+ virtual_interface.rate_limit`
      - `+ virtual_interface.address_family`
      - `+ virtual_interface.local_gateway_v6_ip`
      - `+ virtual_interface.remote_gateway_v6_ip`
      - `+ virtual_interface.lgw_id`
      - `+ virtual_interface.gateway_id`
      - `+ virtual_interface.remote_ep_group`
      - `+ virtual_interface.service_ep_group`
      - `+ virtual_interface.bgp_route_limit`
      - `+ virtual_interface.priority`
      - `+ virtual_interface.vif_peers.enable_nqa`
      - `+ virtual_interface.vif_peers.enable_bfd`
  - **UpdateVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.local_gateway_v4_ip`
      - `+ virtual_interface.remote_gateway_v4_ip`
      - `+ virtual_interface.ies_id`
      - `+ virtual_interface.reason`
      - `+ virtual_interface.rate_limit`
      - `+ virtual_interface.address_family`
      - `+ virtual_interface.local_gateway_v6_ip`
      - `+ virtual_interface.remote_gateway_v6_ip`
      - `+ virtual_interface.lgw_id`
      - `+ virtual_interface.gateway_id`
      - `+ virtual_interface.remote_ep_group`
      - `+ virtual_interface.service_ep_group`
      - `+ virtual_interface.bgp_route_limit`
      - `+ virtual_interface.priority`
      - `+ virtual_interface.vif_peers.enable_nqa`
      - `+ virtual_interface.vif_peers.enable_bfd`
  - **ListVirtualInterfaces**
    - 响应参数变更
      - `+ virtual_interfaces.local_gateway_v4_ip`
      - `+ virtual_interfaces.remote_gateway_v4_ip`
      - `+ virtual_interfaces.ies_id`
      - `+ virtual_interfaces.reason`
      - `+ virtual_interfaces.rate_limit`
      - `+ virtual_interfaces.address_family`
      - `+ virtual_interfaces.local_gateway_v6_ip`
      - `+ virtual_interfaces.remote_gateway_v6_ip`
      - `+ virtual_interfaces.lgw_id`
      - `+ virtual_interfaces.gateway_id`
      - `+ virtual_interfaces.remote_ep_group`
      - `+ virtual_interfaces.service_ep_group`
      - `+ virtual_interfaces.bgp_route_limit`
      - `+ virtual_interfaces.priority`
      - `+ virtual_interfaces.vif_peers.enable_nqa`
      - `+ virtual_interfaces.vif_peers.enable_bfd`
  - **CreateVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.local_gateway_v4_ip`
      - `+ virtual_interface.remote_gateway_v4_ip`
      - `+ virtual_interface.ies_id`
      - `+ virtual_interface.reason`
      - `+ virtual_interface.rate_limit`
      - `+ virtual_interface.address_family`
      - `+ virtual_interface.local_gateway_v6_ip`
      - `+ virtual_interface.remote_gateway_v6_ip`
      - `+ virtual_interface.lgw_id`
      - `+ virtual_interface.gateway_id`
      - `+ virtual_interface.remote_ep_group`
      - `+ virtual_interface.service_ep_group`
      - `+ virtual_interface.bgp_route_limit`
      - `+ virtual_interface.priority`
      - `+ virtual_interface.vif_peers.enable_nqa`
      - `+ virtual_interface.vif_peers.enable_bfd`

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ValidateDeletableReplica`
- _解决问题_
  - 无
- _特性变更_
  - **ShowExpireKeyScanInfo**
    - 请求参数变更
      - `+ offset`
      - `+ limit`
      - `+ status`

### HuaweiCloud SDK DRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchCreateJobs**
    - 请求参数变更
      - `+ jobs.engine_type: enum value [mysql-to-kafka,taurus-to-kafka,gaussdbv5ha-to-kafka]`
      - `+ jobs.source_endpoint.db_type: enum value [taurus]`
  - **BatchValidateConnections**
    - 请求参数变更
      - `+ jobs.db_type: enum value [taurus]`
  - **ShowJobList**
    - 请求参数变更
      - `+ engine_type: enum value [gaussdbv5,postgresql,mysql-to-kafka,taurus-to-kafka,gaussdbv5ha-to-kafka]`
  - **BatchUpdateJob**
    - 请求参数变更
      - `+ jobs.engine_type: enum value [gaussdbv5,postgresql,mysql-to-kafka,taurus-to-kafka,gaussdbv5ha-to-kafka]`
      - `+ jobs.source_endpoint.db_type: enum value [taurus]`
  - **BatchListJobDetails**
    - 响应参数变更
      - `+ results.source_endpoint.db_type: enum value [taurus]`
      - `+ results.inst_info.engine_type: enum value [gaussdbv5,postgresql,mysql-to-kafka,taurus-to-kafka,gaussdbv5ha-to-kafka]`
  - **ShowJobDetail**
    - 请求参数变更
      - `+ type: enum value [compare]`
      - `+ type: enum value [comapre]`
      - `+ query_type: enum value [diff]`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchCreateServerTags**
    - 请求参数变更
      - `* tags: list<ServerTag> -> list<BatchAddServerTag>`
  - **UpdateServer**
    - 请求参数变更
      - `+ server.user_data`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`UpdateDisassociatePublicip`、`UpdateAssociatePublicip`

### HuaweiCloud SDK HSS

- _新增特性_
  - 支持以下接口：
    - `ListProcessesHost`
    - `ListPortHost`
    - `ChangeCheckRuleAction`
    - `ListVulScanTask`
    - `CreateVulnerabilityScanTask`
    - `ListVulScanTaskHost`
- _解决问题_
  - 无
- _特性变更_
  - **ShowAssetStatistic**
    - 请求参数变更
      - `+ category`
    - 响应参数变更
      - `+ web_app_num`
      - `+ database_num`
      - `+ web_service_num`
  - **ChangeVulScanPolicy**
    - 请求参数变更
      - `+ scan_vul_types`
  - **ListJarPackageHostInfo**
    - 请求参数变更
      - `+ part_match`
  - **ListUserStatistics**
    - 请求参数变更
      - `+ category`
  - **ListPortStatistics**
    - 请求参数变更
      - `+ category`
  - **ListProcessStatistics**
    - 请求参数变更
      - `+ category`
  - **ListAppStatistics**
    - 请求参数变更
      - `+ category`
  - **ListUsers**
    - 请求参数变更
      - `+ category`
      - `+ part_match`
    - 响应参数变更
      - `+ data_list.container_id`
      - `+ data_list.container_name`
  - **ListPorts**
    - 请求参数变更
      - `+ category`
  - **ListApps**
    - 请求参数变更
      - `+ category`
      - `+ part_match`
    - 响应参数变更
      - `+ data_list.container_id`
      - `+ data_list.container_name`
  - **ListAutoLaunchs**
    - 请求参数变更
      - `+ part_match`
  - **ListProtectionServer**
    - 响应参数变更
      - `+ data_list.agent_version`
  - **ListContainerNodes**
    - 请求参数变更
      - `+ container_tags`
    - 响应参数变更
      - `+ data_list.protect_interrupt`
      - `+ data_list.container_tags`
      - `+ data_list.private_ip`
      - `+ data_list.public_ip`
      - `+ data_list.resource_id`
      - `+ data_list.group_name`
      - `+ data_list.enterprise_project_name`
      - `+ data_list.detect_result`
      - `+ data_list.asset`
      - `+ data_list.vulnerability`
      - `+ data_list.intrusion`
      - `+ data_list.policy_group_id`
      - `+ data_list.policy_group_name`
  - **ListHostStatus**
    - 响应参数变更
      - `+ data_list.expire_time`
      - `+ data_list.protect_interrupt`
  - **BatchScanSwrImage**
    - 请求参数变更
      - `+ image_size`
      - `+ start_latest_update_time`
      - `+ end_latest_update_time`
      - `+ start_latest_scan_time`
      - `+ end_latest_scan_time`
      - `+ image_info_list.instance_id`
      - `+ image_info_list.instance_url`
  - **ListImageVulnerabilities**
    - 请求参数变更
      - `+ type`
    - 响应参数变更
      - `+ data_list.app_path`
  - **ListImageRiskConfigs**
    - 请求参数变更
      - `+ instance_id`
  - **ListImageRiskConfigRules**
    - 请求参数变更
      - `+ instance_id`
  - **ShowImageCheckRuleDetail**
    - 请求参数变更
      - `+ instance_id`
  - **ListAlarmWhiteList**
    - 响应参数变更
      - `+ data_list.white_field`
      - `+ data_list.field_value`
      - `+ data_list.judge_type`
  - **ListSwrImageRepository**
    - 请求参数变更
      - `+ instance_name`
      - `+ image_size`
      - `+ start_latest_update_time`
      - `+ end_latest_update_time`
      - `+ start_latest_scan_time`
      - `+ end_latest_scan_time`
      - `+ has_malicious_file`
      - `+ has_unsafe_setting`
      - `+ has_vul`
      - `+ instance_id`
    - 响应参数变更
      - `+ data_list.scan_failed_desc`
  - **ListSecurityEvents**
    - 请求参数变更
      - `+ public_ip`
      - `+ event_name`
    - 响应参数变更
      - `+ data_list.event_count`
  - **ChangeEvent**
    - 请求参数变更
      - `+ event_white_rule_list`

### HuaweiCloud SDK IVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **DetectStandardByNameAndId**
    - 请求参数变更
      - `+ data.req_data.detail`
      - `+ data.req_data.crop`
  - **DetectStandardByIdCardImage**
    - 请求参数变更
      - `+ data.req_data.detail`
      - `+ data.req_data.crop`
  - **DetectStandardByVideoAndIdCardImage**
    - 请求参数变更
      - `+ data.req_data.detail`
  - **DetectStandardByVideoAndNameAndId**
    - 请求参数变更
      - `+ data.req_data.detail`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`SendKafkaMessage`
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`CreatePartition`
  - **UpdateInstanceTopic**
    - 请求参数变更
      - `+ topics.new_partition_brokers`
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `* groups.lag: int32 -> int64`
  - **ListInstances**
    - 请求参数变更
      - `+ status: enum value [UPGRADING,UPGRADINGFAILED]`

### HuaweiCloud SDK MPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateTranscodingTask**
    - 请求参数变更
      - `+ video_process.hls_storage_type`

### HuaweiCloud SDK SFSTurbo

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListFsTasks**
    - 响应参数变更
      - `* tasks: list<object> -> list<OneFsTaskResp>`
  - **ShowShare**
    - 响应参数变更
      - `+ tags`
      - `+ enterprise_project_id`
  - **DeleteBackendTarget**
    - 响应参数变更
      - `+ lifecycle: enum value [FAILED]`
  - **CreateShare**
    - 请求参数变更
      - `+ share.tags`
  - **ListShares**
    - 响应参数变更
      - `+ tags`
      - `+ enterprise_project_id`
      - `+ shares.enterprise_project_id`
      - `+ shares.tags`

### HuaweiCloud SDK TICS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAgentDetail**
    - 响应参数变更
      - `* agent_deploy.aom_flag: byte -> boolean`
      - `* agent_deploy.bcs_flag: byte -> boolean`
      - `* agent_deploy.high_avail: byte -> boolean`
      - `+ agent_deploy_detail.ief_instance_id`
      - `+ agent_deploy_node.agent_vpcep_eps_id`
      - `+ agent_deploy_node.league_server_ip_security_group_rule`
      - `+ agent_deploy_node.league_server_snat_ip`
      - `+ agent_deploy_node.server_to_agent_vpcep_epi_id`
      - `+ agent_deploy_node.server_to_agent_vpcep_epi_ip`
      - `+ agent_deploy_node.snat_rule_id`

### HuaweiCloud SDK VOD

- _新增特性_
  - 支持接口`ListAssetDailySummaryLog`、`UpdateStorageMode`、`ShowVodRetrieval`
- _解决问题_
  - 无
- _特性变更_
  - **ShowTakeOverAssetDetails**
    - 响应参数变更
      - `+ transcode_info.output.group_id`
      - `+ transcode_info.output.group_name`
  - **PublishAssets**
    - 响应参数变更
      - `+ asset_info_array.is_multi_transcode`
      - `+ asset_info_array.play_info_array.group_id`
      - `+ asset_info_array.play_info_array.group_name`
  - **UnpublishAssets**
    - 响应参数变更
      - `+ asset_info_array.is_multi_transcode`
      - `+ asset_info_array.play_info_array.group_id`
      - `+ asset_info_array.play_info_array.group_name`
  - **ShowAssetMeta**
    - 响应参数变更
      - `+ asset_info_array.is_multi_transcode`
      - `+ asset_info_array.play_info_array.group_id`
      - `+ asset_info_array.play_info_array.group_name`
  - **ShowAssetDetail**
    - 响应参数变更
      - `+ transcode_info.output.group_id`
      - `+ transcode_info.output.group_name`
  - **ShowTakeOverTaskDetails**
    - 响应参数变更
      - `+ assets.transcode_info.output.group_id`
      - `+ assets.transcode_info.output.group_name`

# 3.1.68 2023-12-14

### HuaweiCloud SDK BMS

- _新增特性_
  - 支持接口`DeleteBaremetalServer`
- _解决问题_
  - 无
- _特性变更_
  - **CreateBareMetalServers**
    - 请求参数变更
      - `+ server.root_volume.volumetype: enum value [GPSSD]`
      - `+ server.data_volumes.volumetype: enum value [GPSSD]`

### HuaweiCloud SDK CES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAlarmTemplates**
    - 请求参数变更
      - `+ template_type: enum value [system_event,custom_event,system_custom_event]`
  - **CreateAlarmTemplate**
    - 请求参数变更
      - `+ template_type`
      - `+ policies.period: enum value [0]`
  - **UpdateAlarmTemplate**
    - 请求参数变更
      - `+ policies.period: enum value [0]`

### HuaweiCloud SDK CFW

- _新增特性_
  - 支持接口`CreateFirewall`、`ListJob`、`DeleteFirewall`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CloudTable

- _新增特性_
  - 支持接口`CreateCloudTableCluster`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持接口`ShowPipelineDetail`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Config

- _新增特性_
  - 支持以下接口：
    - `ListTrackedResources`
    - `CountTrackedResources`
    - `ListTrackedResourceTags`
    - `CollectTrackedResourcesSummary`
    - `ShowTrackedResourceDetail`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持接口`DeleteRouteFromEnhancedConnection`、`CreateRouteToEnhancedConnection`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持以下接口：
    - `ListLogicalClusterVolumes`
    - `ResizeClusterWithExistedNodes`
    - `RestartLogicalCluster`
    - `ListTopoRings`
    - `UpdateLogicalCluster`
    - `DeleteLogicalCluster`
    - `EnableLogicalCluster`
    - `ListClusterNodes`
    - `ConvertToLogicalCluster`
    - `RestoreRedistribution`
    - `StopRedistribution`
    - `ListLogicalClusterTasks`
    - `ListLogicalClusters`
    - `CreateLogicalCluster`
    - `DeleteClusterNodes`
    - `ListLogicalClusterRings`
    - `ListLtsLogs`
    - `ListQueries`
    - `ListTablesStatistic`
    - `ShowQueryDetail`
    - `DisableLtsLogs`
    - `EnableLtsLogs`
- _解决问题_
  - 无
- _特性变更_
  - **ListHostDisk**
    - 请求参数变更
      - `+ instance_id`
    - 响应参数变更
      - `+ instance_id`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowResInstanceInfo**
    - 响应参数变更
      - `+ resources.resource_detail.detailId`
      - `- resources.resource_detail.resource_id`
      - `- resources.resource_detail.func_urn`
      - `- resources.resource_detail.func_name`
      - `- resources.resource_detail.domain_id`
      - `- resources.resource_detail.namespace`
      - `- resources.resource_detail.project_name`
      - `- resources.resource_detail.package`
      - `- resources.resource_detail.runtime`
      - `- resources.resource_detail.timeout`
      - `- resources.resource_detail.handler`
      - `- resources.resource_detail.memory_size`
      - `- resources.resource_detail.gpu_memory`
      - `- resources.resource_detail.cpu`
      - `- resources.resource_detail.code_type`
      - `- resources.resource_detail.code_url`
      - `- resources.resource_detail.code_filename`
      - `- resources.resource_detail.code_size`
      - `- resources.resource_detail.user_data`
      - `- resources.resource_detail.encrypted_user_data`
      - `- resources.resource_detail.digest`
      - `- resources.resource_detail.version`
      - `- resources.resource_detail.image_name`
      - `- resources.resource_detail.xrole`
      - `- resources.resource_detail.app_xrole`
      - `- resources.resource_detail.description`
      - `- resources.resource_detail.last_modified`
      - `- resources.resource_detail.func_vpc_id`
      - `- resources.resource_detail.strategy_config`
      - `- resources.resource_detail.extend_config`
      - `- resources.resource_detail.initializer_handler`
      - `- resources.resource_detail.initializer_timeout`
      - `- resources.resource_detail.pre_stop_handler`
      - `- resources.resource_detail.pre_stop_timeout`
      - `- resources.resource_detail.enterprise_project_id`
      - `- resources.resource_detail.long_time`
      - `- resources.resource_detail.log_group_id`
      - `- resources.resource_detail.log_stream_id`
      - `- resources.resource_detail.type`
      - `- resources.resource_detail.fail_count`
      - `- resources.resource_detail.is_bridge_function`
      - `- resources.resource_detail.bind_bridge_funcUrns`
      - `* resources.resource_detail: object<ListFunctionResult> -> object<ListEnterpriseResourceDetail>`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateAsyncCommand**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **ShowAsyncDeviceCommand**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **BroadcastMessage**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **CreateCommand**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **ListProperties**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
    - 响应参数变更
      - `+ request_id`
  - **UpdateProperties**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
    - 响应参数变更
      - `+ request_id`
  - **CloseDeviceTunnel**
    - 请求参数变更
      - `+ Sp-Auth-Token`
  - **DeleteDeviceTunnel**
    - 请求参数变更
      - `+ Sp-Auth-Token`
  - **ShowDeviceTunnel**
    - 请求参数变更
      - `+ Sp-Auth-Token`
  - **AddTunnel**
    - 请求参数变更
      - `+ Sp-Auth-Token`
  - **ListDeviceTunnels**
    - 请求参数变更
      - `+ Sp-Auth-Token`
  - **ShowDeviceMessage**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **CreateMessage**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`
  - **ListDeviceMessages**
    - 请求参数变更
      - `+ Stage-Auth-Token`
      - `+ Sp-Auth-Token`

### HuaweiCloud SDK Live

- _新增特性_
  - 支持以下接口：
    - `ListDelayConfig`
    - `UpdateDelayConfig`
    - `ShowPullSourcesConfig`
    - `UpdatePullSourcesConfig`
    - `ListGeoBlockingConfig`
    - `UpdateGeoBlockingConfig`
    - `CreateUrlAuthchain`
    - `ListIpAuthList`
    - `UpdateIpAuthList`
    - `ListPublishTemplate`
    - `UpdatePublishTemplate`
    - `DeletePublishTemplate`
- _解决问题_
  - 无
- _特性变更_
  - **ListRecordContents**
    - 请求参数变更
      - `+ record_type: enum value [PLAN_RECORD,ON_DEMAND_RECORD]`
    - 响应参数变更
      - `- record_contents.record_type: enum value [PLAN_RECORD,ON_DEMAND_RECORD]`

### HuaweiCloud SDK LTS

- _新增特性_
  - 支持接口`CreateAgencyAccess`
- _解决问题_
  - 无
- _特性变更_
  - **ListSqlAlarmRules**
    - 响应参数变更
      - `+ sql_alarm_rules.is_css_sql`
      - `+ sql_alarm_rules.notification_frequency`
      - `+ sql_alarm_rules.alarm_action_rule_name`
      - `+ sql_alarm_rules.status: enum value [RUNNING 启用,STOPPING 停止]`
      - `- sql_alarm_rules.status: enum value [RUNNING,STOPPING]`
      - `* sql_alarm_rules.frequency: object<Frequency> -> object<FrequencyRespBody>`
  - **UpdateSqlAlarmRule**
    - 请求参数变更
      - `+ is_css_sql`
      - `+ notification_frequency`
      - `+ alarm_action_rule_name`
      - `* frequency: object<Frequency> -> object<CreateSqlAlarmRuleFrequency>`
    - 响应参数变更
      - `+ is_css_sql`
      - `+ alarm_action_rule_name`
      - `+ notification_frequency`
      - `+ language: enum value [zh-cn,en-us]`
      - `* frequency: object<Frequency> -> object<FrequencyRespBody>`
  - **CreateSqlAlarmRule**
    - 请求参数变更
      - `+ is_css_sql`
      - `+ notification_frequency`
      - `+ alarm_action_rule_name`
      - `* frequency: object<Frequency> -> object<CreateSqlAlarmRuleFrequency>`
  - **ListKeywordsAlarmRules**
    - 响应参数变更
      - `+ keywords_alarm_rules.notification_frequency`
      - `+ keywords_alarm_rules.alarm_action_rule_name`
      - `+ keywords_alarm_rules.status: enum value [RUNNING  启用,STOPPING  停止]`
      - `- keywords_alarm_rules.status: enum value [RUNNING,STOPPING]`
  - **UpdateKeywordsAlarmRule**
    - 请求参数变更
      - `+ notification_frequency`
      - `+ alarm_action_rule_name`
    - 响应参数变更
      - `+ alarm_action_rule_name`
      - `+ notification_frequency`
      - `+ language: enum value [zh-cn,en-us]`
      - `- keywords_requests.search_time_range_unit: enum value [minute]`
      - `* keywords_requests: list<KeywordsRequest> -> list<KeywordsResBody>`
      - `* frequency: object<Frequency> -> object<FrequencyRespBody>`
  - **CreateKeywordsAlarmRule**
    - 请求参数变更
      - `+ notification_frequency`
      - `+ alarm_action_rule_name`
      - `+ keywords_alarm_level: enum value [Critical]`
      - `- keywords_alarm_level: enum value [CRITICAL]`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`ShowMrsVersionMetadata`、`SwitchClusterTags`、`ShowTagStatus`、`ShowTagQuota`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK NAT

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateNatGatewayTag**
    - 请求参数变更
      - `+ tag.key`
      - `+ tag.value`
      - `* tag: object -> object<TagBody>`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`ListLogLtsConfigs`、`SetLogLtsConfigs`、`DeleteLogLtsConfigs`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRocketMqMigrationTask**
    - 请求参数变更
      - `+ topicConfigTable`
      - `+ subscriptionGroupTable`
      - `+ vhosts`
      - `+ queues`
      - `+ exchanges`
      - `+ bindings`
      - `* body: map<string, object> -> object<CreateRocketMqMigrationTaskReq>`

### HuaweiCloud SDK SecMaster

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAlerts**
    - 请求参数变更
      - `* condition.conditions.data: list<object> -> list<string>`
      - `* condition.logics: list<object> -> list<string>`
  - **ListIncidents**
    - 请求参数变更
      - `* condition.conditions.data: list<object> -> list<string>`
      - `* condition.logics: list<object> -> list<string>`
  - **ListIndicators**
    - 请求参数变更
      - `* condition: string -> object`
  - **ListDataobjectRelations**
    - 请求参数变更
      - `* condition.conditions.data: list<object> -> list<string>`
      - `* condition.logics: list<object> -> list<string>`

### HuaweiCloud SDK SMS

- _新增特性_
  - 支持接口`ShowConsistencyResult`、`UpdateConsistencyResult`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateTaskStatus**
    - 请求参数变更
      - `+ is_need_consistency_check`
  - **ListServers**
    - 请求参数变更
      - `+ is_consistency_result_exist`
    - 响应参数变更
      - `+ source_servers.is_consistency_result_exist`

# 3.1.67 2023-12-07

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`DeleteStackInstance`
- _解决问题_
  - 无
- _特性变更_
  - **ListStackSetOperations**
    - 响应参数变更
      - `+ stack_set_operations.action: enum value [UPDATE_STACK_INSTANCES]`
  - **ShowStackSetOperationMetadata**
    - 响应参数变更
      - `+ action: enum value [UPDATE_STACK_INSTANCES]`

### HuaweiCloud SDK APIG

- _新增特性_
  - 支持接口`CheckApiGroupsV2`
- _解决问题_
  - 无
- _特性变更_
  - **CreatePrepayResize**
    - 请求参数变更
      - `+ instance_id`
  - **ListPluginAttachableApis**
    - 请求参数变更
      - `* env_id: optional -> required`
  - **ListApisV2**
    - 请求参数变更
      - `+ return_data_mode`

### HuaweiCloud SDK CBH

- _新增特性_
  - 支持接口`LoginCbh`
- _解决问题_
  - 无
- _特性变更_
  - **ShowAvailableZoneInfo**
    - 响应参数变更
      - `* availability_zone: object<AvailabilityZones> -> list<AvailabilityZones>`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPipelineLog**
    - 请求参数变更
      - `- level`
      - `- job_run_id`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持以下接口：
    - `SetFactoryJobTags`
    - `ListSecurityPermissionSets`
    - `CreateSecurityPermissionSet`
    - `ShowSecurityPermissionSet`
    - `UpdateSecurityPermissionSet`
    - `DeleteSecurityPermissionSet`
    - `ListSecurityPermissionSetMembers`
    - `CreateSecurityPermissionSetMember`
    - `BatchDeleteSecurityPermissionSetMembers`
    - `ListSecurityPermissionSetPermissions`
    - `CreateSecurityPermissionSetPermission`
    - `BatchDeleteSecurityPermissionSetPermissions`
    - `UpdateSecurityPermissionSetPermission`
    - `ListSecurityDataClassificationRules`
    - `CreateSecurityDataClassificationRule`
    - `ShowSecurityDataClassificationRule`
    - `UpdateSecurityDataClassificationRule`
    - `DeleteSecurityDataClassificationRule`
    - `BatchDeleteSecurityDataClassificationRule`
    - `UpdateSecurityRuleEnableStatus`
    - `ListSecurityDataClassificationRuleGroups`
    - `ShowSecurityDataClassificationRuleGroup`
- _解决问题_
  - 无
- _特性变更_
  - **DeleteApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **PublishApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApplyDetail**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowMessageDetail**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowCatalogDetail**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **UpdateCatalog**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **CreateServiceCatalog**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **DeleteServiceCatalog**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **MigrateCatalog**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **MigrateApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **SearchIdByPath**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowPathById**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **PublishApiToInstance**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ExecuteApiToInstance**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **AuthorizeApiToInstance**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **AuthorizeActionApiToInstance**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **DeleteApp**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowAppInfo**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **UpdateApp**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApisOverview**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowAppsOverview**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApisDetail**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowAppsDetail**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **UpdateFactoryJobName**
    - 请求参数变更
      - `- x-Auth-Token`
  - **BatchApproveApply**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApply**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ConfirmMessage**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListMessage**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListAllCatalogList**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListCatalogList**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowPathObjectById**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **DebugApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **SearchPublishInfo**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListInstanceList**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **SearchDebugInfo**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApicInstances**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApicGroups**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **CreateApp**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApps**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApisTop**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListAppsTop**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApisDashboard**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApiDashboard**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowAppsDashboard**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApiTopN**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApis**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **CreateApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ShowApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **UpdateApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **ListApiCatalogList**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **SearchAuthorizeApp**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`
  - **SearchBindApi**
    - 请求参数变更
      - `* Dlm-Type: required -> optional`

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持接口`ListJobAuthInfos`、`UpdateJobAuthInfo`、`CreateJobAuthInfo`、`DeleteJobAuthInfo`
- _解决问题_
  - 无
- _特性变更_
  - 废弃以下接口：
    - `ShowDliAgency`
    - `CreateDliAgency`
    - `DeleteResource`
    - `ShowResourceInfo`
    - `UpdateGroupOrResourceOwner`
    - `ShowBatchLog`
    - `ExportTable`
    - `ImportTable`
    - `ExportSqlJobResult`
    - `UpdateDatabaseOwner`
    - `DeleteDatabase`
    - `RegisterAuthorizedQueue`
    - `UpdateTableOwner`
    - `ShowTableContent`
    - `UpdateQueueCidr`
    - `BatchDeleteQueuePlans`
    - `ChangeQueuePlan`
    - `DeleteQueuePlan`
    - `DeleteAuthInfo`
    - `DeleteEnhancedConnectionRoutes`
    - `CreateEnhancedConnectionRoutes`
    - `RegisterBucket`
    - `CreateIefMessageChannel`
    - `UploadFiles`
    - `UploadPythonFiles`
    - `ListResources`
    - `UploadResources`
    - `UploadJars`
    - `ListDatabases`
    - `CreateDatabase`
    - `ListTableUsers`
    - `ChangeAuthorization`
    - `ListTablePrivileges`
    - `ListDatabaseUsers`
    - `ListQueueUsers`
    - `ListAllTables`
    - `CreateTable`
    - `DeleteTable`
    - `ShowDescribeTable`
    - `CreateQueuePlan`
    - `ListQueuePlans`
    - `UpdateAuthInfo`
    - `CreateAuthInfo`
    - `ListAuthInfo`
    - `ChangeFlinkJobStatusReport`
    - `RunIefJobActionCallBack`
    - `CreateIefSystemEvents`
    - `ListDatasourceConnections`
    - `CreateDatasourceConnection`
    - `DeleteDatasourceConnection`
    - `ShowDatasourceConnection`
    - `ShowSqlSampleTemplates`
    - `ShowPartitions`
    - `ShowFlinkMetric`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `ShowDependcy`
    - `UpdateDependcy`
    - `DeleteDependency`
    - `AsyncInvokeReservedFunction`
    - `CreateDependency`
  - **ShowFuncReservedInstanceMetrics**
    - 请求参数变更
      - `+ marker`
      - `+ limit`
  - **ListFunctionApplications**
    - 请求参数变更
      - `+ limit`
      - `+ marker`
  - **ListStatistics**
    - 请求参数变更
      - `+ limit`
      - `+ marker`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`ListGaussMySqlInstancesUnifyStatus`、`ShowGaussMySqlInstanceInfoUnifyStatus`、`ListGaussMySqlInstanceDetailInfoUnifyStatus`、`SwitchGaussMySqlProxySsl`
- _解决问题_
  - 无
- _特性变更_
  - **ShowGaussMySqlProxyList**
    - 响应参数变更
      - `+ proxy_list.proxy.ssl_option`

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持接口`OfflineNodes`
- _解决问题_
  - 无
- _特性变更_
  - **ListLtsConfigs**
    - 响应参数变更
      - `* instance_lts_configs.instance.supported_log_types: string -> list<string>`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ResetDeviceSecret**
    - 请求参数变更
      - `+ secret_type`
    - 响应参数变更
      - `+ secret_type`
  - **ResetFingerprint**
    - 请求参数变更
      - `+ fingerprint_type`
    - 响应参数变更
      - `+ fingerprint_type`
  - **ShowDevice**
    - 响应参数变更
      - `+ auth_info.secondary_secret`
      - `+ auth_info.secondary_fingerprint`
      - `* auth_info: object<AuthInfo> -> object<AuthInfoRes>`
  - **UpdateDevice**
    - 响应参数变更
      - `+ auth_info.secondary_secret`
      - `+ auth_info.secondary_fingerprint`
      - `* auth_info: object<AuthInfo> -> object<AuthInfoRes>`
  - **AddDevice**
    - 响应参数变更
      - `+ auth_info.secondary_secret`
      - `+ auth_info.secondary_fingerprint`
      - `* auth_info: object<AuthInfo> -> object<AuthInfoRes>`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`UpdateAutoScalingPolicy`、`CreateAutoScalingPolicy`、`DeleteAutoScalingPolicy`
- _解决问题_
  - 无
- _特性变更_
  - **ShowAutoScalingPolicy**
    - 响应参数变更
      - `+ auto_scaling_policy.tags`
      - `- auto_scaling_policy.exec_scripts`
      - `* auto_scaling_policy: object<AutoScalingPolicy> -> object<AutoScalingPolicyInfo>`

### HuaweiCloud SDK NAT

- _新增特性_
  - 支持以下接口：
    - `ListNatGatewayByTag`
    - `BatchCreateDeleteNatGatewayTag`
    - `ShowNatGatewayTag`
    - `CreateNatGatewayTag`
    - `DeleteNatGatewayTag`
    - `ListNatGatewayTag`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OMS

- _新增特性_
  - 支持接口`BatchUpdateTasks`
- _解决问题_
  - 无
- _特性变更_
  - **ShowSyncTask**
    - 响应参数变更
      - `+ dst_storage_policy`
      - `+ object_overwrite_mode`
  - **ListSyncTasks**
    - 响应参数变更
      - `+ tasks.object_overwrite_mode`
      - `+ tasks.dst_storage_policy`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 支持接口`ShowRocketMqConfigs`、`UpdateRocketMqConfigs`
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 请求参数变更
      - `+ status: enum value [UPGRADING,UPGRADINGFAILED]`

### HuaweiCloud SDK SFSTurbo

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **SetHpcCacheBackend**
    - 请求参数变更
      - `* update_hpc_cache.data.nas.type: object -> string`
      - `* update_hpc_cache.data.nas.url: object -> string`

# 3.1.66 2023-11-30

### HuaweiCloud SDK AOM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPermissions**
    - 响应参数变更
      - `* : map<string, AuthModel> -> string`
  - **ListAccessCode**
    - 响应参数变更
      - `- access_codes.status: enum value [enable,unenable]`

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSubCustomerBillDetail**
    - 响应参数变更
      - `* fee_records.usage_amount: double -> bigdecimal`
      - `* fee_records.free_resource_usage: double -> bigdecimal`
      - `* fee_records.ri_usage: double -> bigdecimal`
      - `* fee_records.official_amount: double -> bigdecimal`
      - `* fee_records.official_discount_amount: double -> bigdecimal`
      - `* fee_records.payment_amount: double -> bigdecimal`
      - `* fee_records.cash_amount: double -> bigdecimal`
      - `* fee_records.credit_amount: double -> bigdecimal`
      - `* fee_records.coupon_amount: double -> bigdecimal`
      - `* fee_records.flexipurchase_coupon_amount: double -> bigdecimal`
      - `* fee_records.stored_value_card_amount: double -> bigdecimal`
      - `* fee_records.debt_amount: double -> bigdecimal`
      - `* fee_records.writeoff_amount: double -> bigdecimal`

### HuaweiCloud SDK CC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListBandwidthPackageTags**
    - 响应参数变更
      - `+ tags.values`
      - `- tags.value`
      - `* tags: list<Tag> -> list<MultivaluedTag>`

### HuaweiCloud SDK CCE

- _新增特性_
  - 支持以下接口：
    - `ShowClusterConfig`
    - `UpdateClusterLogConfig`
    - `ListPartitions`
    - `CreatePartition`
    - `ShowPartition`
    - `UpdatePartition`
    - `ShowNodePoolConfigurations`
    - `UpdateNodePoolConfiguration`
    - `ShowClusterConfigurationDetails`
    - `ListCharts`
    - `UploadChart`
    - `ShowChart`
    - `UpdateChart`
    - `DeleteChart`
    - `DownloadChart`
    - `ShowChartValues`
    - `ShowUserChartsQuotas`
    - `ListReleases`
    - `CreateRelease`
    - `ShowRelease`
    - `UpdateRelease`
    - `DeleteRelease`
    - `ShowReleaseHistory`
- _解决问题_
  - 无
- _特性变更_
  - **ResizeCluster**
    - 请求参数变更
      - `* extendParam: object<ResizeClusterRequestExtendParam> -> object`
  - **UpdateClusterEip**
    - 请求参数变更
      - `* spec: object -> object<MasterEIPRequestSpec>`
    - 响应参数变更
      - `* spec: object -> object<MasterEIPResponseSpec>`
  - **ShowClusterEndpoints**
    - 响应参数变更
      - `* spec: object -> object<OpenAPISpec>`
  - **ShowAddonInstance**
    - 响应参数变更
      - `- status.status: enum value [unknown]`
  - **UpdateAddonInstance**
    - 响应参数变更
      - `- status.status: enum value [unknown]`
  - **RollbackAddonInstance**
    - 响应参数变更
      - `- status.status: enum value [unknown]`
  - **ShowCluster**
    - 响应参数变更
      - `+ spec.enableMasterVolumeEncryption`
  - **UpdateCluster**
    - 响应参数变更
      - `+ spec.enableMasterVolumeEncryption`
  - **DeleteCluster**
    - 请求参数变更
      - `+ ondemand_node_policy`
      - `+ periodic_node_policy`
    - 响应参数变更
      - `+ spec.enableMasterVolumeEncryption`
  - **CreateAddonInstance**
    - 响应参数变更
      - `- status.status: enum value [unknown]`
  - **ListAddonInstances**
    - 响应参数变更
      - `- items.status.status: enum value [unknown]`
  - **CreateCluster**
    - 请求参数变更
      - `+ spec.enableMasterVolumeEncryption`
    - 响应参数变更
      - `+ spec.enableMasterVolumeEncryption`
  - **ListClusters**
    - 请求参数变更
      - `+ status: enum value [Hibernating,Hibernation,Awaking]`
    - 响应参数变更
      - `+ items.spec.enableMasterVolumeEncryption`
  - **ShowNode**
    - 响应参数变更
      - `+ spec.hostnameConfig`
      - `+ spec.extendParam.kubeReservedMem`
      - `+ spec.extendParam.systemReservedMem`
      - `+ spec.extendParam.init-node-password`
      - `- spec.extendParam.kube-reserved-mem`
      - `- spec.extendParam.system-reserved-mem`
  - **UpdateNode**
    - 响应参数变更
      - `+ spec.hostnameConfig`
      - `+ spec.extendParam.kubeReservedMem`
      - `+ spec.extendParam.systemReservedMem`
      - `+ spec.extendParam.init-node-password`
      - `- spec.extendParam.kube-reserved-mem`
      - `- spec.extendParam.system-reserved-mem`
  - **DeleteNode**
    - 响应参数变更
      - `+ spec.hostnameConfig`
      - `+ spec.extendParam.kubeReservedMem`
      - `+ spec.extendParam.systemReservedMem`
      - `+ spec.extendParam.init-node-password`
      - `- spec.extendParam.kube-reserved-mem`
      - `- spec.extendParam.system-reserved-mem`
  - **CreateNode**
    - 请求参数变更
      - `+ spec.hostnameConfig`
      - `+ spec.extendParam.kubeReservedMem`
      - `+ spec.extendParam.systemReservedMem`
      - `+ spec.extendParam.init-node-password`
      - `- spec.extendParam.kube-reserved-mem`
      - `- spec.extendParam.system-reserved-mem`
    - 响应参数变更
      - `+ spec.hostnameConfig`
      - `+ spec.extendParam.kubeReservedMem`
      - `+ spec.extendParam.systemReservedMem`
      - `+ spec.extendParam.init-node-password`
      - `- spec.extendParam.kube-reserved-mem`
      - `- spec.extendParam.system-reserved-mem`
  - **ListNodes**
    - 响应参数变更
      - `+ items.spec.hostnameConfig`
      - `+ items.spec.extendParam.kubeReservedMem`
      - `+ items.spec.extendParam.systemReservedMem`
      - `+ items.spec.extendParam.init-node-password`
      - `- items.spec.extendParam.kube-reserved-mem`
      - `- items.spec.extendParam.system-reserved-mem`
  - **ShowNodePool**
    - 响应参数变更
      - `+ spec.nodeTemplate.hostnameConfig`
      - `+ spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ spec.nodeTemplate.extendParam.init-node-password`
      - `- spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- spec.nodeTemplate.extendParam.system-reserved-mem`
  - **UpdateNodePool**
    - 响应参数变更
      - `+ spec.nodeTemplate.hostnameConfig`
      - `+ spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ spec.nodeTemplate.extendParam.init-node-password`
      - `- spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- spec.nodeTemplate.extendParam.system-reserved-mem`
  - **DeleteNodePool**
    - 响应参数变更
      - `+ spec.nodeTemplate.hostnameConfig`
      - `+ spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ spec.nodeTemplate.extendParam.init-node-password`
      - `- spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- spec.nodeTemplate.extendParam.system-reserved-mem`
  - **AddNode**
    - 请求参数变更
      - `+ nodeList.spec.hostnameConfig`
  - **ResetNode**
    - 请求参数变更
      - `+ nodeList.spec.hostnameConfig`
  - **CreateNodePool**
    - 请求参数变更
      - `+ spec.nodeTemplate.hostnameConfig`
      - `+ spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ spec.nodeTemplate.extendParam.init-node-password`
      - `- spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- spec.nodeTemplate.extendParam.system-reserved-mem`
    - 响应参数变更
      - `+ spec.nodeTemplate.hostnameConfig`
      - `+ spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ spec.nodeTemplate.extendParam.init-node-password`
      - `- spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- spec.nodeTemplate.extendParam.system-reserved-mem`
  - **ListNodePools**
    - 响应参数变更
      - `+ items.spec.nodeTemplate.hostnameConfig`
      - `+ items.spec.nodeTemplate.extendParam.kubeReservedMem`
      - `+ items.spec.nodeTemplate.extendParam.systemReservedMem`
      - `+ items.spec.nodeTemplate.extendParam.init-node-password`
      - `- items.spec.nodeTemplate.extendParam.kube-reserved-mem`
      - `- items.spec.nodeTemplate.extendParam.system-reserved-mem`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持接口`ShowPipelineLog`
- _解决问题_
  - 无
- _特性变更_
  - **UpdatePluginBaseInfo**
    - 请求参数变更
      - `+ plugin_composition_type`
  - **CreatePublisher**
    - 请求参数变更
      - `+ description`
  - **ListPublisher**
    - 响应参数变更
      - `+ total`
      - `+ offset`
      - `+ data`
      - `+ limit`
      - `- tenant_id`
      - `- website`
      - `- logo_url`
      - `- description`
      - `- last_update_user_id`
      - `- source_url`
      - `- is_delete`
      - `- last_update_time`
      - `- support_url`
      - `- user_id`
      - `- name`
      - `- en_name`
      - `- auth_status`
      - `- publisher_unique_id`
      - `- last_update_user_name`
  - **ListBasePluginsNewPost**
    - 响应参数变更
      - `+ data.business_type`
      - `+ data.display_name`
      - `+ data.unique_id`
      - `- data.businessType`
      - `- data.displayName`
      - `- data.uniqueId`
      - `+ data.plugins_list.publisher_unique_id`
      - `+ data.plugins_list.manifest_version`
      - `- data.plugins_list.publisherUniqueId`
      - `- data.plugins_list.manifestVersion`
  - **ListPlugins**
    - 响应参数变更
      - `+ data.plugin_name`
      - `+ data.display_name`
      - `+ data.version_description`
      - `+ data.version_attribution`
      - `+ data.unique_id`
      - `+ data.op_user`
      - `+ data.op_time`
      - `+ data.plugin_composition_type`
      - `+ data.plugin_attribution`
      - `+ data.workspace_id`
      - `+ data.business_type`
      - `+ data.business_type_display_name`
      - `+ data.icon_url`
      - `+ data.refer_count`
      - `+ data.usage_count`
      - `+ data.runtime_attribution`
      - `- data.pluginName`
      - `- data.displayName`
      - `- data.versionDescription`
      - `- data.versionAttribution`
      - `- data.uniqueId`
      - `- data.opUser`
      - `- data.opTime`
      - `- data.pluginCompositionType`
      - `- data.pluginAttribution`
      - `- data.workspaceId`
      - `- data.businessType`
      - `- data.businessTypeDisplayName`
      - `- data.iconUrl`
      - `- data.referCount`
      - `- data.usageCount`
      - `- data.runtimeAttribution`
      - `* data: list<object> -> list<PluginBasicVO>`
  - **ListPLuginVersion**
    - 响应参数变更
      - `+ data.plugin_name`
      - `+ data.display_name`
      - `+ data.version_description`
      - `+ data.version_attribution`
      - `+ data.unique_id`
      - `+ data.op_user`
      - `+ data.op_time`
      - `+ data.plugin_composition_type`
      - `+ data.plugin_attribution`
      - `+ data.workspace_id`
      - `+ data.business_type`
      - `+ data.business_type_display_name`
      - `+ data.icon_url`
      - `+ data.refer_count`
      - `+ data.usage_count`
      - `+ data.runtime_attribution`
      - `- data.pluginName`
      - `- data.displayName`
      - `- data.versionDescription`
      - `- data.versionAttribution`
      - `- data.uniqueId`
      - `- data.opUser`
      - `- data.opTime`
      - `- data.pluginCompositionType`
      - `- data.pluginAttribution`
      - `- data.workspaceId`
      - `- data.businessType`
      - `- data.businessTypeDisplayName`
      - `- data.iconUrl`
      - `- data.referCount`
      - `- data.usageCount`
      - `- data.runtimeAttribution`
      - `* data: list<object> -> list<PluginBasicVO>`
  - **ShowPublisher**
    - 响应参数变更
      - `+ publisher_detail_map`
      - `- body`
  - **CreateBasicPlugin**
    - 请求参数变更
      - `+ plugin_composition_type`
  - **UpdateBasicPlugin**
    - 请求参数变更
      - `+ plugin_composition_type`
  - **CreateStrategy**
    - 请求参数变更
      - `- type`
      - `- rules.type`
      - `- rules.name`
      - `- rules.layout_content`
      - `- rules.plugin_id`
      - `- rules.plugin_name`
      - `- rules.plugin_version`
      - `- rules.content`
  - **UpdateStrategy**
    - 请求参数变更
      - `- parent_id`
      - `- rules.type`
      - `- rules.name`
      - `- rules.layout_content`
      - `- rules.plugin_id`
      - `- rules.plugin_name`
      - `- rules.plugin_version`
      - `- rules.content`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **SearchAtomicIndexes**
    - 响应参数变更
      - `+ data.value`
  - **ShowAtomicIndexById**
    - 响应参数变更
      - `+ data.value`
  - **ListDerivativeIndexes**
    - 响应参数变更
      - `+ data.value`
  - **ShowDerivativeIndexById**
    - 响应参数变更
      - `+ data.value`
  - **ListCompoundMetrics**
    - 响应参数变更
      - `+ data.value`
  - **ShowCompoundMetricById**
    - 响应参数变更
      - `+ data.value`
  - **ListApiCatalogList**
    - 响应参数变更
      - `+ apis.publish_messages`
  - **ParseUserBehavior**
    - 请求参数变更
      - `+ params.filter.attribute: enum value [base.DataAsset.sourceType,typeName,classifications.name,tags.name,securityLevel.name,workspaceId]`
      - `+ params.filter.operator: enum value [IN,EQ]`
      - `* params.filter.value: object -> list<string>`
      - `* params.filter.condition: object<ConditionInfo> -> string`
  - **ShowDataSets**
    - 请求参数变更
      - `+ filter.attribute: enum value [base.DataAsset.sourceType,typeName,classifications.name,tags.name,securityLevel.name,workspaceId]`
      - `+ filter.operator: enum value [IN,EQ]`
      - `* filter.value: object -> list<string>`
      - `* filter.condition: object<ConditionInfo> -> string`
    - 响应参数变更
      - `* facets: object -> list<object>`
  - **ListApis**
    - 请求参数变更
      - `+ x-return-publish-messages`
    - 响应参数变更
      - `+ records.publish_messages`
  - **ShowApi**
    - 响应参数变更
      - `+ publish_messages`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSlowlog**
    - 响应参数变更
      - `+ total_num`

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持接口`ShowQuota`
- _解决问题_
  - 无
- _特性变更_
  - **ListQueueProperties**
    - 请求参数变更
      - `+ offset`
      - `+ limit`
      - `- page`
      - `- page_size`

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持接口`BatchModifyBandwidth`、`ListEipBandwidths`、`ListBandwidthsLimit`、`UpdatePublicip`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持接口`ListInfluxdbSlowLogs`
- _解决问题_
  - 无
- _特性变更_
  - **ListLtsConfigs**
    - 响应参数变更
      - `+ instance_lts_configs.instance.supported_log_types`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RunQueryDocumentModerationJob**
    - 响应参数变更
      - `+ result.details.start_position`
      - `+ result.details.end_position`
      - `+ result.details.image_url`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`SetInstancesDbShrink`
- _解决问题_
  - 无
- _特性变更_
  - **UpgradeDbMajorVersion**
    - 响应参数变更
      - `+ job_id`
  - **ShowUpgradeDbMajorVersionStatus**
    - 响应参数变更
      - `+ check_expiration_time`
      - `- report_expiration_time`
  - **StartResizeFlavorAction**
    - 响应参数变更
      - `+ order_id`
  - **StartInstanceEnlargeVolumeAction**
    - 响应参数变更
      - `+ order_id`
  - **StartInstanceSingleToHaAction**
    - 响应参数变更
      - `+ order_id`
  - **ListHistoryDatabase**
    - 请求参数变更
      - `+ engine`
      - `- database_name`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 支持接口`ShowEngineInstanceExtendProductInfo`、`ResizeInstance`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeFlashAsr**
    - 请求参数变更
      - `* obs_bucket_name: optional -> required`
      - `* obs_object_key: optional -> required`

# 3.1.65 2023-11-23

### HuaweiCloud SDK CFW

- _新增特性_
  - 支持接口`ListLogConfig`、`UpdateLogConfig`、`AddLogConfig`、`CreateEastWestFirewall`
- _解决问题_
  - 无
- _特性变更_
  - **ListFlowLogs**
    - 响应参数变更
      - `* data.records.start_time: int32 -> int64`
      - `* data.records.end_time: int32 -> int64`
      - `* data.records.src_port: string -> int32`
      - `* data.records.dst_port: string -> int32`
  - **ListAccessControlLogs**
    - 响应参数变更
      - `* data.records.hit_time: int32 -> int64`
      - `* data.records.src_port: string -> int32`
      - `* data.records.dst_port: string -> int32`
  - **ChangeIpsSwitchStatus**
    - 请求参数变更
      - `+ X-Language`
  - **ListAttackLogs**
    - 响应参数变更
      - `* data.records.event_time: string -> int64`
      - `* data.records.attack_rule_id: int32 -> string`
      - `* data.records.packet: object<Packet> -> string`

# 3.1.64 2023-11-23

### HuaweiCloud SDK AOM

- _新增特性_
  - 支持以下接口：
    - `ListPromInstance`
    - `CreatePromInstance`
    - `DeletePromInstance`
    - `CreateRecordingRule`
    - `ListPermissions`
    - `ListAccessCode`
    - `ListAgents`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持以下接口：
    - `UpdatePluginBaseInfo`
    - `CreatePluginDraft`
    - `PublishPluginDraft`
    - `CreatePluginVersion`
    - `UpdatePluginDraft`
    - `CreatePublisher`
- _解决问题_
  - 无
- _特性变更_
  - **SwitchStrategy**
    - 响应参数变更
      - `+ rule_set_id`
      - `- rule_template_instance_id`
  - **SwitchOpenSourceStrategy**
    - 响应参数变更
      - `+ rule_set_id`
      - `- rule_template_instance_id`
  - **ShowPublisher**
    - 响应参数变更
      - `+ body`
  - **CreatePipelineNew**
    - 请求参数变更
      - `+ group_id`
      - `+ id`
      - `* schedules.days_of_week: string -> list<integer>`
  - **UpdateStrategy**
    - 响应参数变更
      - `+ rule_set_id`
      - `- rule_template_instance_id`
  - **UpdateOpenSourceStrategy**
    - 响应参数变更
      - `+ rule_set_id`
      - `- rule_template_instance_id`

### HuaweiCloud SDK CSE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpgradeEngineConfig**
    - 请求参数变更
      - `+ authType`
      - `- version`
  - **ShowEngine**
    - 响应参数变更
      - `+ specType`
      - `+ enterpriseProjectId`
      - `+ externalEntrypoint`
      - `+ beDefault`
      - `+ engineAdditionalActions`
      - `+ cceSpec`
      - `+ vmIds`
      - `+ latestVersion`
      - `+ createTime`
      - `+ createUser`
      - `+ authType`
      - `+ latestJobId`
      - `+ projectId`
      - `+ enterpriseProjectName`
      - `- auth_type`
      - `- create_time`
      - `- be_default`
      - `- enterprise_project_name`
      - `- latest_job_id`
      - `- spec_type`
      - `- external_entrypoint`
      - `- cce_spec`
      - `- enterprise_project_id`
      - `- latest_version`
      - `- project_id`
      - `- vm_ids`
      - `- engine_additional_actions`
      - `- create_user`
      - `+ reference.azList`
      - `+ reference.networkId`
      - `+ reference.subnetCidr`
      - `+ reference.subnetCidrV6`
      - `+ reference.subnetGateway`
      - `+ reference.publicIpId`
      - `+ reference.serviceLimit`
      - `+ reference.instanceLimit`
      - `- reference.az_list`
      - `- reference.network_id`
      - `- reference.subnet_cidr`
      - `- reference.subnet_cidr_v6`
      - `- reference.subnet_gateway`
      - `- reference.public_ip_id`
      - `- reference.service_limit`
      - `- reference.instance_limit`
  - **CreateEngine**
    - 请求参数变更
      - `+ vpcId`
  - **ListEngines**
    - 响应参数变更
      - `+ data.enterpriseProjectId`
      - `+ data.enterpriseProjectName`
      - `+ data.authType`
      - `+ data.externalAddress`
      - `+ data.serviceEndpoint`
      - `+ data.publicAddress`
      - `+ data.publicServiceEndpoint`
      - `+ data.totalInstance`
      - `+ data.usedInstance`
      - `+ data.availableInstance`
      - `+ data.latestVersion`
      - `+ data.createTime`
      - `+ data.dueTo`
      - `+ data.latestJobId`
      - `+ data.engineAdditionalActions`
      - `+ data.specType`
      - `- data.enterpris_project_id`
      - `- data.enterprise_project_name`
      - `- data.auth_type`
      - `- data.external_address`
      - `- data.service_endpoint`
      - `- data.public_address`
      - `- data.public_service_endpoint`
      - `- data.total_instance`
      - `- data.used_instance`
      - `- data.available_instance`
      - `- data.latest_version`
      - `- data.create_time`
      - `- data.due_to`
      - `- data.latest_job_id`
      - `- data.engine_additional_actions`
      - `- data.spec_type`
      - `+ data.reference.azList`
      - `+ data.reference.networkId`
      - `+ data.reference.subnetCidr`
      - `+ data.reference.subnetCidrV6`
      - `+ data.reference.subnetGateway`
      - `+ data.reference.publicIpId`
      - `+ data.reference.serviceLimit`
      - `+ data.reference.instanceLimit`
      - `- data.reference.az_list`
      - `- data.reference.network_id`
      - `- data.reference.subnet_cidr`
      - `- data.reference.subnet_cidr_v6`
      - `- data.reference.subnet_gateway`
      - `- data.reference.public_ip_id`
      - `- data.reference.service_limit`
      - `- data.reference.instance_limit`
  - **ShowEngineJob**
    - 响应参数变更
      - `+ createUser`
      - `+ startTime`
      - `+ endTime`
      - `+ engineId`
      - `- start_time`
      - `- engine_id`
      - `- end_time`
      - `- create_user`
      - `+ tasks.taskName`
      - `+ tasks.taskNames`
      - `+ tasks.startTime`
      - `+ tasks.endTime`
      - `+ tasks.taskExecutorBrief`
      - `- tasks.task_name`
      - `- tasks.task_names`
      - `- tasks.start_time`
      - `- tasks.end_time`
      - `- tasks.task_executor_brief`
      - `+ tasks.tasks.jobId`
      - `+ tasks.tasks.taskName`
      - `+ tasks.tasks.engineName`
      - `+ tasks.tasks.taskOrder`
      - `+ tasks.tasks.startTime`
      - `+ tasks.tasks.endTime`
      - `+ tasks.tasks.createTime`
      - `+ tasks.tasks.updateTime`
      - `+ tasks.tasks.taskExecutorBrief`
      - `- tasks.tasks.job_id`
      - `- tasks.tasks.task_name`
      - `- tasks.tasks.engine_name`
      - `- tasks.tasks.task_order`
      - `- tasks.tasks.start_time`
      - `- tasks.tasks.end_time`
      - `- tasks.tasks.create_time`
      - `- tasks.tasks.update_time`
      - `- tasks.tasks.task_executor_brief`
  - **CreateMicroserviceRouteRule**
    - 请求参数变更
      - `+ match.headers.<header>`
      - `- match.headers.aaaa`
      - `+ route.tags.<tag>`
      - `- route.tags.version`

### HuaweiCloud SDK CSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCerts**
    - 响应参数变更
      - `* defaultCerts: object<DefaultCertsResource> -> list<DefaultCertsResource>`
      - `* customCerts: object<CustomCertsResource> -> list<CustomCertsResource>`

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`LogoffWebCli`
- _解决问题_
  - 无
- _特性变更_
  - **ListSlowlog**
    - 响应参数变更
      - `+ slowlogs.database_id`
      - `+ slowlogs.username`

### HuaweiCloud SDK DDS

- _新增特性_
  - 支持以下接口：
    - `ListLtsConfigs`
    - `UpdateLtsConfig`
    - `DeleteLtsConfig`
    - `ListLtsErrorLogs`
    - `ShowKillOpRuleRuleList`
    - `UpdateKillOpRule`
    - `CreateKillOpRule`
    - `DeleteKillOpRuleList`
    - `SwitchInstancePrimary`
    - `DeleteReadonlyNode`
    - `StopBackup`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchDeleteJobs**
    - 请求参数变更
      - `+ jobs.is_show_breakpoint_position`
  - **BatchSetPolicy**
    - 请求参数变更
      - `+ jobs.file_and_position`
      - `+ jobs.gtid_set`
  - **BatchListProgresses**
    - 响应参数变更
      - `+ results.incre_trans_delay_millis`
  - **ShowJobList**
    - 请求参数变更
      - `+ instance_ids`
      - `+ instance_ip`

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持接口`UploadJdbcDriver`、`ListJdbcDrivers`、`DeleteJdbcDriver`、`SyncJdbcDriver`
- _解决问题_
  - 无
- _特性变更_
  - **BatchCreateJobsAsync**
    - 请求参数变更
      - `+ jobs.policy_config.dml_types`
  - **ListAsyncJobDetail**
    - 响应参数变更
      - `+ jobs.connection_management`
      - `+ jobs.policy_config.dml_types`
  - **UpdateBatchAsyncJobs**
    - 请求参数变更
      - `+ jobs.params.policy_config.dml_types`
  - **ShowJobDetail**
    - 响应参数变更
      - `+ job.connection_management`
      - `+ job.policy_config.dml_types`
  - **UpdateJob**
    - 请求参数变更
      - `+ job.params.policy_config.dml_types`

### HuaweiCloud SDK ELB

- _新增特性_
  - 支持以下接口：
    - `BatchAddAvailableZones`
    - `BatchRemoveAvailableZones`
    - `ListMasterSlavePools`
    - `CreateMasterSlavePool`
    - `ShowMasterSlavePool`
    - `DeleteMasterSlavePool`
- _解决问题_
  - 无
- _特性变更_
  - **ShowLoadBalancer**
    - 响应参数变更
      - `+ loadbalancer.charge_mode`
      - `+ loadbalancer.log_group_id`
      - `+ loadbalancer.log_topic_id`
  - **UpdateLoadBalancer**
    - 请求参数变更
      - `+ loadbalancer.charge_mode`
      - `+ loadbalancer.ipv6_vip_address`
    - 响应参数变更
      - `+ loadbalancer.charge_mode`
      - `+ loadbalancer.log_group_id`
      - `+ loadbalancer.log_topic_id`
  - **ListListeners**
    - 响应参数变更
      - `+ listeners.ssl_early_data_enable`
  - **CreateListener**
    - 请求参数变更
      - `+ listener.ssl_early_data_enable`
    - 响应参数变更
      - `+ listener.ssl_early_data_enable`
  - **ShowListener**
    - 响应参数变更
      - `+ listener.ssl_early_data_enable`
  - **UpdateListener**
    - 请求参数变更
      - `+ listener.ssl_early_data_enable`
    - 响应参数变更
      - `+ listener.ssl_early_data_enable`
  - **ListLoadBalancers**
    - 请求参数变更
      - `+ log_topic_id`
      - `+ log_group_id`
    - 响应参数变更
      - `+ loadbalancers.charge_mode`
      - `+ loadbalancers.log_group_id`
      - `+ loadbalancers.log_topic_id`
  - **CreateLoadBalancer**
    - 请求参数变更
      - `+ loadbalancer.charge_mode`
      - `+ loadbalancer.ipv6_vip_address`
    - 响应参数变更
      - `+ loadbalancer.charge_mode`
      - `+ loadbalancer.log_group_id`
      - `+ loadbalancer.log_topic_id`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 支持以下接口：
    - `ListAppTemplates`
    - `ShowAppTemplate`
    - `ListFunctionApplications`
    - `CreateFunctionApp`
    - `ShowFunctionApp`
    - `DeleteFunctionApp`
    - `CreateCallbackWorkflow`
- _解决问题_
  - 无
- _特性变更_
  - **ImportFunction**
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **ListFunctions**
    - 响应参数变更
      - `+ functions.pre_stop_handler`
      - `+ functions.pre_stop_timeout`
  - **CreateFunction**
    - 请求参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **ShowFunctionConfig**
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **UpdateFunctionConfig**
    - 请求参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **UpdateFunctionMaxInstanceConfig**
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **ListBridgeFunctions**
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **ShowResInstanceInfo**
    - 响应参数变更
      - `+ resources.resource_detail.pre_stop_handler`
      - `+ resources.resource_detail.pre_stop_timeout`
  - **CreateFunctionVersion**
    - 响应参数变更
      - `+ pre_stop_handler`
      - `+ pre_stop_timeout`
  - **ListFunctionVersions**
    - 响应参数变更
      - `+ versions.pre_stop_handler`
      - `+ versions.pre_stop_timeout`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`ShowRestoreTables`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持以下接口：
    - `ShowElbIpGroup`
    - `SwitchIpGroup`
    - `ListInstancesSession`
    - `DeleteInstancesSession`
    - `ListInstancesSessionStatistics`
    - `ResetParamGroupTemplate`
    - `ListRedisSlowLogs`
    - `ListCassandraSlowLogs`
    - `ListMongodbSlowLogs`
    - `ListLtsConfigs`
    - `SaveLtsConfigs`
    - `DeleteLtsConfigs`
    - `ListRestoreDatabases`
    - `ListRestoreTables`
    - `ListMongodbErrorLogs`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`ShowKafkaUserClientQuota`、`UpdateKafkaUserClientQuotaTask`、`CreateKafkaUserClientQuotaTask`、`DeleteKafkaUserClientQuotaTask`
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 请求参数变更
      - `+ status: enum value [DELETING,ERROR,CREATEFAILED,FREEZING,EXTENDING,SHRINKING,EXTENDEDFAILED,CONFIGURING,UPGRADING,UPGRADINGFAILED,ROLLBACK,ROLLBACKFAILED,VOLUMETYPECHANGING]`
      - `+ status: enum value [FAULTY,RESIZING,RESIZING FAILED]`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeIdCard**
    - 请求参数变更
      - `+ return_portrait_location`
    - 响应参数变更
      - `+ result.portrait_location`

### HuaweiCloud SDK OMS

- _新增特性_
  - 支持以下接口：
    - `ListSyncTasks`
    - `CreateSyncTask`
    - `ShowSyncTask`
    - `DeleteSyncTask`
    - `ListSyncTaskStatistic`
    - `StopSyncTask`
    - `StartSyncTask`
    - `ShowBucketObjects`
    - `ShowCdnInfo`
    - `ShowCloudType`
    - `ShowRegionInfo`
    - `ShowBucketList`
    - `ShowBucketRegion`
    - `CheckPrefix`
- _解决问题_
  - 无
- _特性变更_
  - **ShowTask**
    - 响应参数变更
      - `+ source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`
  - **ShowTaskGroup**
    - 响应参数变更
      - `+ source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`
  - **CreateTask**
    - 请求参数变更
      - `+ source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`
  - **ListTasks**
    - 响应参数变更
      - `+ tasks.source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`
  - **CreateTaskGroup**
    - 请求参数变更
      - `+ source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`
  - **ListTaskGroup**
    - 响应参数变更
      - `+ taskgroups.source_cdn.authentication_type: enum value [TENCENT_COS_A,TENCENT_COS_B,TENCENT_COS_C,TENCENT_COS_D]`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstancesDetails**
    - 请求参数变更
      - `+ status: enum value [DELETING,FREEZING,EXTENDING,SHRINKING,EXTENDEDFAILED,CONFIGURING,UPGRADING,UPGRADINGFAILED,ROLLBACK,ROLLBACKFAILED,VOLUMETYPECHANGING]`
      - `+ status: enum value [STARTING,CLOSING]`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持以下接口：
    - `UpgradeDbMajorVersion`
    - `ShowAvailableVersion`
    - `UpgradeDbMajorVersionPreCheck`
    - `ListInspectionHistories`
    - `ListUpgradeHistories`
    - `ShowUpgradeDbMajorVersionStatus`
    - `UpdateTdeStatus`
    - `ShowTdeStatus`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 请求参数变更
      - `+ status: enum value [DELETING,ERROR,CREATEFAILED,FREEZING,EXTENDING,SHRINKING,EXTENDEDFAILED,CONFIGURING,UPGRADING,UPGRADINGFAILED,ROLLBACK,ROLLBACKFAILED,VOLUMETYPECHANGING]`
      - `+ status: enum value [FAULTY,RESIZING,RESIZING FAILED]`

### HuaweiCloud SDK SecMaster

- _新增特性_
  - 支持以下接口：
    - `ListDataclass`
    - `ListDataclassFields`
    - `ListWorkflows`
    - `CreateDataspace`
    - `CreatePipe`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ServiceStage

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstance**
    - 请求参数变更
      - `+ configuration.container_spec`
  - **ChangeInstance**
    - 请求参数变更
      - `+ configuration.container_spec`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateAssetByFileUpload**
    - 请求参数变更
      - `+ thumbnail.quantity`
      - `+ thumbnail.quantity_time`
      - `+ thumbnail.type: enum value [quantity]`
  - **PublishAssetFromObs**
    - 请求参数变更
      - `+ thumbnail.quantity`
      - `+ thumbnail.quantity_time`
      - `+ thumbnail.type: enum value [quantity]`
  - **CreateAssetProcessTask**
    - 请求参数变更
      - `+ thumbnail.quantity`
      - `+ thumbnail.quantity_time`
      - `+ thumbnail.type: enum value [quantity]`
  - **ListTopStatistics**
    - 响应参数变更
      - `+ top_urls.duration_ms`
  - **UploadMetaDataByUrl**
    - 请求参数变更
      - `+ upload_metadatas.thumbnail.quantity`
      - `+ upload_metadatas.thumbnail.quantity_time`
      - `+ upload_metadatas.thumbnail.type: enum value [quantity]`
  - **ListAssetList**
    - 响应参数变更
      - `+ assets.duration_ms`
  - **ShowTakeOverAssetDetails**
    - 响应参数变更
      - `+ base_info.meta_data.duration_ms`
  - **PublishAssets**
    - 响应参数变更
      - `+ asset_info_array.base_info.meta_data.duration_ms`
  - **UnpublishAssets**
    - 响应参数变更
      - `+ asset_info_array.base_info.meta_data.duration_ms`
  - **ShowAssetMeta**
    - 响应参数变更
      - `+ asset_info_array.base_info.meta_data.duration_ms`
  - **ShowAssetDetail**
    - 响应参数变更
      - `+ base_info.meta_data.duration_ms`
      - `+ thumbnail_info.quantity`
  - **ShowTakeOverTaskDetails**
    - 响应参数变更
      - `+ assets.base_info.meta_data.duration_ms`

# 3.1.63 2023-11-16

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.business_type`
      - `+ configs.service_area`
      - `+ configs.remark`
      - `+ configs.flexible_origin`
      - `+ configs.slice_etag_status`
      - `+ configs.origin_receive_timeout`
      - `+ configs.remote_auth`
      - `+ configs.websocket`
      - `+ configs.video_seek`
      - `+ configs.request_limit_rules`
      - `+ configs.ip_frequency_limit`
      - `+ configs.hsts`
      - `+ configs.quic`
      - `+ configs.url_auth.sign_method`
      - `+ configs.url_auth.match_type`
      - `+ configs.url_auth.inherit_config`
      - `+ configs.url_auth.key`
      - `+ configs.url_auth.backup_key`
      - `+ configs.url_auth.sign_arg`
      - `+ configs.https.expire_time`
      - `+ configs.https.certificate_type`
      - `+ configs.https.ocsp_stapling_status`
      - `+ configs.sources.weight`
      - `+ configs.sources.obs_bucket_type`
      - `+ configs.sources.bucket_access_key`
      - `+ configs.sources.bucket_secret_key`
      - `+ configs.sources.bucket_region`
      - `+ configs.sources.bucket_name`
      - `+ configs.compress.file_type`
      - `+ configs.user_agent_filter.ua_list`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `+ configs.sources.weight`
      - `+ configs.sources.obs_bucket_type`
      - `+ configs.sources.bucket_access_key`
      - `+ configs.sources.bucket_secret_key`
      - `+ configs.sources.bucket_region`
      - `+ configs.sources.bucket_name`
      - `+ configs.compress.file_type`
      - `+ configs.user_agent_filter.ua_list`

### HuaweiCloud SDK CodeArtsBuild

- _新增特性_
  - 支持以下接口：
    - `DownloadBuildLog`
    - `DownloadTaskLog`
    - `ShowFlowGraph`
    - `ShowRecordDetail`
    - `ShowOutputInfo`
    - `StopJob`
    - `CreateBuildJob`
    - `UpdateBuildJob`
    - `ListTemplates`
    - `CreateTemplates`
    - `DeleteTemplates`
    - `ListNotice`
    - `UpdateNotice`
    - `DisableNotice`
    - `ListJobConfig`
- _解决问题_
  - 无
- _特性变更_
  - **ShowRecordInfo**
    - 响应参数变更
      - `+ result.duration`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持以下接口：
    - `CreatePipelineTemplate`
    - `ShowProjectOpenSourceStrategy`
    - `ListProjectStrategy`
    - `ListProjectOpenSourceStrategy`
    - `ShowProjectStrategy`
    - `ShowRule`
    - `ListRule`
    - `UpdateRule`
    - `DeleteRule`
    - `CreateRule`
    - `CreateStrategy`
    - `UpdateStrategy`
    - `ShowStrategy`
    - `ListStrategy`
    - `DeleteStrategy`
    - `SwitchStrategy`
    - `CreateOpenSourceStrategy`
    - `UpdateOpenSourceStrategy`
    - `ShowOpenSourceStrategy`
    - `ListOpenSourceStrategy`
    - `DeleteOpenSourceStrategy`
    - `SwitchOpenSourceStrategy`
    - `CreatePipelineGroup`
    - `UpdatePipelineGroup`
    - `DeletePipelineGroup`
    - `ShowPipelineGroupTree`
    - `BatchMovePipelineToGroup`
    - `PublishPlugin`
    - `PublishPluginBind`
    - `UploadPluginIcon`
    - `UploadPublisherIcon`
    - `DeletePluginDraft`
    - `ListPublisher`
    - `ListAvailablePublisher`
    - `ListStagePlugins`
    - `ListBasePlugins`
    - `ListBasePluginsNewPost`
    - `ListPlugins`
    - `ShowPluginMetrics`
    - `ShowPluginInputs`
    - `ShowPluginOutputs`
    - `ListPLuginVersion`
    - `ShowPluginVersion`
    - `ListPluginVersionNumber`
    - `DeletePublisher`
    - `ShowPublisher`
    - `CreateBasicPlugin`
    - `UpdateBasicPlugin`
    - `DeleteBasicPlugin`
    - `UploadBasicPlugin`
    - `ShowBasicPlugin`
    - `UpdatePipelineTemplate`
    - `DeletePipelineTemplate`
- _解决问题_
  - 无
- _特性变更_
  - **ListPipelines**
    - 响应参数变更
      - `+ pipelines.project_name`
  - **CreatePipelineNew**
    - 请求参数变更
      - `+ variables`
      - `+ schedules`
      - `+ triggers`
      - `+ manifest_version`
      - `+ definition`
      - `+ project_name`

### HuaweiCloud SDK CSE

- _新增特性_
  - 支持以下接口：
    - `ListGovernancePolicy`
    - `CreateGovernancePolicy`
    - `ListGovernancePolicyByPolicyId`
    - `UpdateGovernancePolicy`
    - `DeleteGovernancePolicy`
    - `ListMicroserviceRouteRule`
    - `CreateMicroserviceRouteRule`
    - `DeleteMicroserviceRouteRule`
    - `ListGovernancePolicys`
    - `UpgradeEngineConfig`
    - `ResizeEngine`
    - `ListNacosNamespaces`
    - `UpdateNacosNamespaces`
    - `CreateNacosNamespaces`
    - `DeleteNacosNamespaces`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CSMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSecretTags**
    - 响应参数变更
      - `+ sys_tags.value`
      - `- sys_tags.values`
  - **ListNotificationRecords**
    - 请求参数变更
      - `+ limit`
      - `+ marker`

### HuaweiCloud SDK DataArtsStudio

- _新增特性_
  - 支持接口`UpdateFactoryJobName`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateVifPeer**
    - 响应参数变更
      - `+ vif_peer.receive_route_num`
  - **CreateVifPeer**
    - 响应参数变更
      - `+ vif_peer.receive_route_num`
  - **ShowVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.vif_peers.receive_route_num`
  - **UpdateVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.vif_peers.receive_route_num`
  - **ListVirtualInterfaces**
    - 响应参数变更
      - `+ virtual_interfaces.vif_peers.receive_route_num`
  - **CreateVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.vif_peers.receive_route_num`

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowSqlJobStatus**
    - 响应参数变更
      - `+ result_format`
      - `+ result_path`

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreatePrivateZone**
    - 请求参数变更
      - `+ router.status`
  - **AssociateRouter**
    - 请求参数变更
      - `+ router.status`
  - **DisassociateRouter**
    - 请求参数变更
      - `+ router.status`
  - **ShowPrivateZone**
    - 响应参数变更
      - `+ routers.status`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 支持以下接口：
    - `ListFunctionTags`
    - `ListBridgeFunctions`
    - `ListBridgeVersions`
    - `UpdateFunctionCollectState`
    - `ListFunctionTemplate`
    - `ShowFunctionTemplate`
    - `ShowFuncReservedInstanceMetrics`
    - `ShowFunctionMetrics`
    - `EnableAsyncStatusLog`
    - `ShowProjectAsyncStatusLogInfo`
- _解决问题_
  - 无
- _特性变更_
  - **ListFunctions**
    - 响应参数变更
      - `+ functions.resource_id`
  - **ShowFunctionConfig**
    - 响应参数变更
      - `+ func_id`
      - `+ resource_id`
  - **UpdateFunctionConfig**
    - 响应参数变更
      - `+ func_id`
      - `+ resource_id`
  - **ShowResInstanceInfo**
    - 响应参数变更
      - `+ resources.resource_detail.resource_id`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateGaussMySqlInstance**
    - 响应参数变更
      - `* instance.volume.size: string -> int32`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowRuleAction**
    - 响应参数变更
      - `+ channel_detail.dms_kafka_forwarding.security_protocol`
  - **UpdateRuleAction**
    - 请求参数变更
      - `+ channel_detail.dms_kafka_forwarding.security_protocol`
    - 响应参数变更
      - `+ channel_detail.dms_kafka_forwarding.security_protocol`
  - **CreateRuleAction**
    - 请求参数变更
      - `+ channel_detail.dms_kafka_forwarding.security_protocol`
    - 响应参数变更
      - `+ channel_detail.dms_kafka_forwarding.security_protocol`
  - **ListRuleActions**
    - 响应参数变更
      - `+ actions.channel_detail.dms_kafka_forwarding.security_protocol`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `* groups.createdAt: int32 -> int64`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListTopnTrafficStatistics**
    - 响应参数变更
      - `+ results.cold_storage`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`AddComponent`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizePeruIdCard`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ShowRabbitMqProductCores`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`RevokePostgresqlDbPrivilege`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ServiceStage

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ChangeInstance**
    - 请求参数变更
      - `+ configuration.env`
      - `+ configuration.storage`
      - `+ configuration.strategy`
      - `+ configuration.lifecycle`
      - `+ configuration.scheduler`
      - `+ configuration.probes`
      - `* configuration: map<string, object> -> object<InstanceConfiguration>`

# 3.1.62 2023-11-13

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ShowNodesInformation`、`DeleteCenterTask`、`DeleteDiagnosisTask`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstanceTopics**
    - 请求参数变更
      - `+ offset`
      - `+ limit`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **Createfavorite**
    - 请求参数变更
      - `+ is_global`
    - 响应参数变更
      - `+ is_global`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 支持接口`ShowRabbitMqProductCores`、`ShowCesHierarchy`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`ListPostgresqlListHistoryTables`、`ListHistoryDatabase`、`BatchRestorePostgreSqlTables`、`BatchRestoreDatabase`
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ListInstancesResourceMetrics`、`ListInstancesRecommendation`

# 3.1.61 2023-11-09

### HuaweiCloud SDK APIG

- _新增特性_
  - 支持API网关服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SecMaster

- _新增特性_
  - 支持安全云脑服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ServiceStage

- _新增特性_
  - 支持应用管理与运维平台服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK TICS

- _新增特性_
  - 支持可信智能计算服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CCE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAddonInstance**
    - 响应参数变更
      - `+ status.status: enum value [unknown]`
  - **UpdateAddonInstance**
    - 响应参数变更
      - `+ status.status: enum value [unknown]`
  - **RollbackAddonInstance**
    - 响应参数变更
      - `+ status.status: enum value [unknown]`
  - **ShowCluster**
    - 响应参数变更
      - `+ spec.serviceNetwork`
  - **UpdateCluster**
    - 响应参数变更
      - `+ spec.serviceNetwork`
  - **DeleteCluster**
    - 响应参数变更
      - `+ spec.serviceNetwork`
  - **CreateAddonInstance**
    - 响应参数变更
      - `+ status.status: enum value [unknown]`
  - **ListAddonInstances**
    - 响应参数变更
      - `+ items.status.status: enum value [unknown]`
  - **CreateCluster**
    - 请求参数变更
      - `+ spec.serviceNetwork`
    - 响应参数变更
      - `+ spec.serviceNetwork`
  - **ListClusters**
    - 响应参数变更
      - `+ items.spec.serviceNetwork`
  - **ShowNode**
    - 响应参数变更
      - `- status.phase: enum value [Installed,ShutDown]`
  - **UpdateNode**
    - 响应参数变更
      - `- status.phase: enum value [Installed,ShutDown]`
  - **DeleteNode**
    - 响应参数变更
      - `- status.phase: enum value [Installed,ShutDown]`
  - **CreateNode**
    - 响应参数变更
      - `- status.phase: enum value [Installed,ShutDown]`
  - **ListNodes**
    - 响应参数变更
      - `- items.status.phase: enum value [Installed,ShutDown]`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`CheckMigrationConnectivity`
  - **ListBackupRecords**
    - 响应参数变更
      - `+ backup_record_response.backup_format`
      - `+ backup_record_response.execution_at`

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持接口`ListQueueProperty`、`UpdateQueueProperty`、`CreateQueueProperty`、`DeleteQueueProperty`
- _解决问题_
  - 无
- _特性变更_
  - **ShowSqlJobStatus**
    - 响应参数变更
      - `+ user_conf`

### HuaweiCloud SDK GES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListGraphs2**
    - 响应参数变更
      - `+ graphs.origin_graph_size_type_index`
      - `+ graphs.expand_time`
      - `+ graphs.resize_time`
      - `+ graphs.enable_multi_label`
  - **CreateGraph2**
    - 请求参数变更
      - `+ graph.enable_multi_label`
  - **ShowGraph2**
    - 响应参数变更
      - `+ graph.origin_graph_size_type_index`
      - `+ graph.expand_time`
      - `+ graph.resize_time`
      - `+ graph.enable_multi_label`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`ShowInstanceConfigs`、`ModifyInstanceConfigs`
- _解决问题_
  - 无
- _特性变更_
  - **BatchRestartOrDeleteInstances**
    - 请求参数变更
      - `+ all_failure`
      - `- allFailure`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchRestartOrDeleteInstances**
    - 请求参数变更
      - `+ all_failure`
      - `- allFailure`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchDeleteInstances**
    - 请求参数变更
      - `+ all_failure`
      - `- allFailure`
  - **DeleteRocketMqMigrationTask**
    - 请求参数变更
      - `+ task_ids`
      - `- taskIds`

# 3.1.60 2023-11-02

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ListPostalAddress`、`UpdatePostal`、`CreatePostal`、`DeletePostal`
  - **ListCustomerselfResourceRecordDetails**
    - 响应参数变更
      - `+ monthly_records.id`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecordDetails**
    - 响应参数变更
      - `+ monthly_records.id`

### HuaweiCloud SDK CSMS

- _新增特性_
  - 支持接口`RotateSecret`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持以下接口：
    - `ShowConfigHistoryDetail`
    - `UpdateClientIpTransparentTransmission`
    - `UpdateInstanceConfig`
    - `ListInstanceOperations`
    - `ExportInstancesTask`
    - `ExportExcelJob`
    - `CreateResizeOrder`
    - `ShowExpireAutoScanConfig`
    - `UpdateExpireAutoScanConfig`
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ShowNodesInformation`、`ShowBackUpInfo`、`CreateOrUpdateBackUpInfo`、`CreateConnectivityTest`

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPrivateZone**
    - 响应参数变更
      - `+ enterprise_project_id`
      - `+ proxy_pattern`

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持接口`CollectPositionAsync`、`ShowPositionResult`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持以下接口：
    - `ExecuteClusterUpgradeAction`
    - `ListUpdatableVersion`
    - `ListUpdateRecord`
    - `CheckTableRestore`
    - `RestoreTable`
    - `ListSnapshotCrossRegion`
    - `ListSnapshotCrossRegionPolicy`
    - `AddSnapshotCrossRegionPolicy`
    - `DeleteSnapshotCrossRegionPolicy`
    - `StopWorkloadPlan`
    - `ShowWorkloadPlan`
    - `DeleteWorkloadPlan`
    - `StartWorkloadPlan`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ELB

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListListeners**
    - 请求参数变更
      - `+ proxy_protocol_enable`
    - 响应参数变更
      - `+ listeners.proxy_protocol_enable`
      - `+ listeners.insert_headers.X-Forwarded-Proto`
      - `+ listeners.insert_headers.X-Real-IP`
      - `+ listeners.insert_headers.X-Forwarded-ELB-ID`
      - `+ listeners.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listeners.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listeners.insert_headers.X-Forwarded-TLS-Cipher`
  - **CreateListener**
    - 请求参数变更
      - `+ listener.proxy_protocol_enable`
      - `+ listener.insert_headers.X-Forwarded-Proto`
      - `+ listener.insert_headers.X-Real-IP`
      - `+ listener.insert_headers.X-Forwarded-ELB-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listener.insert_headers.X-Forwarded-TLS-Cipher`
    - 响应参数变更
      - `+ listener.proxy_protocol_enable`
      - `+ listener.insert_headers.X-Forwarded-Proto`
      - `+ listener.insert_headers.X-Real-IP`
      - `+ listener.insert_headers.X-Forwarded-ELB-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listener.insert_headers.X-Forwarded-TLS-Cipher`
  - **ShowListener**
    - 响应参数变更
      - `+ listener.proxy_protocol_enable`
      - `+ listener.insert_headers.X-Forwarded-Proto`
      - `+ listener.insert_headers.X-Real-IP`
      - `+ listener.insert_headers.X-Forwarded-ELB-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listener.insert_headers.X-Forwarded-TLS-Cipher`
  - **UpdateListener**
    - 请求参数变更
      - `+ listener.proxy_protocol_enable`
      - `+ listener.insert_headers.X-Forwarded-Proto`
      - `+ listener.insert_headers.X-Real-IP`
      - `+ listener.insert_headers.X-Forwarded-ELB-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listener.insert_headers.X-Forwarded-TLS-Cipher`
    - 响应参数变更
      - `+ listener.proxy_protocol_enable`
      - `+ listener.insert_headers.X-Forwarded-Proto`
      - `+ listener.insert_headers.X-Real-IP`
      - `+ listener.insert_headers.X-Forwarded-ELB-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Certificate-ID`
      - `+ listener.insert_headers.X-Forwarded-TLS-Protocol`
      - `+ listener.insert_headers.X-Forwarded-TLS-Cipher`
  - **CreatePool**
    - 请求参数变更
      - `+ pool.ip_version`
  - **UpdatePool**
    - 请求参数变更
      - `+ pool.any_port_enable`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持以下接口：
    - `ShowIntelligentDiagnosisAbnormalCountOfInstances`
    - `ShowIntelligentDiagnosisInstanceInfosPerMetric`
    - `ShrinkGaussMySqlProxy`
    - `ShowInstanceDatabaseVersion`
    - `CopyInstanceConfigurations`
    - `ShowAutoScalingPolicy`
    - `UpdateAutoScalingPolicy`
    - `CheckResource`
    - `UpdateInstanceConfigurations`
- _解决问题_
  - 无
- _特性变更_
  - **DeleteGaussMySqlBackup**
    - 响应参数变更
      - `+ backup_id`
      - `+ backup_name`
      - `- job_id`
  - **CreateGaussMySqlProxy**
    - 请求参数变更
      - `+ subnet_id`
  - **ShowGaussMySqlBackupList**
    - 请求参数变更
      - `+ name`
      - `+ instance_name`
    - 响应参数变更
      - `+ backups.instance_name`
      - `- backups.status: enum value [BUILDING,COMPLETED,FAILED,AVAILABLE]`
      - `- backups.type: enum value [auto,manual]`
  - **ShowGaussMySqlProxyList**
    - 响应参数变更
      - `+ proxy_list.proxy.subnet_id`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 支持接口`DeleteDatabase`
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 请求参数变更
      - `+ charge_mode`
  - **ListInstancesDetails**
    - 请求参数变更
      - `+ charge_mode`

### HuaweiCloud SDK HSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSwrImageRepository**
    - 响应参数变更
      - `+ data_list.scannable`
      - `- data_list.scanable`

### HuaweiCloud SDK KPS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ImportPrivateKey**
    - 响应参数变更
      - `+ keypair.user_id`
      - `+ keypair.key_protection`
      - `* keypair: object<KeypairBean> -> object<ImportPrivateKeyAction>`

### HuaweiCloud SDK NAT

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListNatGatewayDnatRules**
    - 响应参数变更
      - `+ dnat_rules.global_eip_id`
      - `+ dnat_rules.global_eip_address`
  - **CreateNatGatewayDnatRule**
    - 请求参数变更
      - `+ dnat_rule.global_eip_id`
    - 响应参数变更
      - `+ dnat_rule.global_eip_id`
      - `+ dnat_rule.global_eip_address`
  - **ShowNatGatewayDnatRule**
    - 响应参数变更
      - `+ dnat_rule.global_eip_id`
      - `+ dnat_rule.global_eip_address`
  - **UpdateNatGatewayDnatRule**
    - 请求参数变更
      - `+ dnat_rule.global_eip_id`
    - 响应参数变更
      - `+ dnat_rule.global_eip_id`
      - `+ dnat_rule.global_eip_address`
  - **BatchCreateNatGatewayDnatRules**
    - 请求参数变更
      - `+ dnat_rules.global_eip_id`
    - 响应参数变更
      - `+ dnat_rules.global_eip_id`
      - `+ dnat_rules.global_eip_address`
  - **ListNatGatewaySnatRules**
    - 响应参数变更
      - `+ snat_rules.global_eip_id`
      - `+ snat_rules.global_eip_address`
  - **CreateNatGatewaySnatRule**
    - 请求参数变更
      - `+ snat_rule.global_eip_id`
    - 响应参数变更
      - `+ snat_rule.global_eip_id`
      - `+ snat_rule.global_eip_address`
  - **ShowNatGatewaySnatRule**
    - 响应参数变更
      - `+ snat_rule.global_eip_id`
      - `+ snat_rule.global_eip_address`
  - **UpdateNatGatewaySnatRule**
    - 请求参数变更
      - `+ snat_rule.global_eip_id`
    - 响应参数变更
      - `+ snat_rule.global_eip_address`
      - `+ snat_rule.global_eip_id`
  - **ListNatGateways**
    - 响应参数变更
      - `+ nat_gateways.ngport_ip_address`
      - `+ nat_gateways.billing_info`
      - `+ nat_gateways.dnat_rules_limit`
      - `+ nat_gateways.snat_rule_public_ip_limit`
  - **CreateNatGateway**
    - 请求参数变更
      - `+ nat_gateway.ngport_ip_address`
    - 响应参数变更
      - `+ nat_gateway.ngport_ip_address`
      - `+ nat_gateway.billing_info`
      - `+ nat_gateway.dnat_rules_limit`
      - `+ nat_gateway.snat_rule_public_ip_limit`
  - **ShowNatGateway**
    - 响应参数变更
      - `+ nat_gateway.ngport_ip_address`
      - `+ nat_gateway.billing_info`
      - `+ nat_gateway.dnat_rules_limit`
      - `+ nat_gateway.snat_rule_public_ip_limit`
  - **UpdateNatGateway**
    - 响应参数变更
      - `+ nat_gateway.ngport_ip_address`
      - `+ nat_gateway.billing_info`
      - `+ nat_gateway.dnat_rules_limit`
      - `+ nat_gateway.snat_rule_public_ip_limit`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRocketMqMigrationTask**
    - 请求参数变更
      - `* body: string -> map<string, object>`

# 3.1.59 2023-10-26

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`ShowStackInstance`、`UpdateStackInstances`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateBareMetalServers**
    - 请求参数变更
      - `+ server.extendparam.chargingMode: enum value [postPaid]`

### HuaweiCloud SDK CC

- _新增特性_
  - 支持接口`ListCentralNetworkCapabilities`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持以下接口：
    - `CreateRefreshTasks`
    - `CreatePreheatingTasks`
    - `ShowHistoryTasks`
    - `ShowHistoryTaskDetails`
    - `ShowUrlTaskInfo`
- _解决问题_
  - 无
- _特性变更_
  - **CreateRefreshTasks**
    - 请求参数变更
      - `+ refresh_task.zh_url_encode`
  - **CreatePreheatingTasks**
    - 请求参数变更
      - `+ preheating_task.zh_url_encode`

### HuaweiCloud SDK CodeArtsPipeline

- _新增特性_
  - 支持接口`CreatePipelineNew`、`RetryPipelineRun`、`AcceptManualReview`、`RejectManualReview`
- _解决问题_
  - 无
- _特性变更_
  - **ListPipelines**
    - 响应参数变更
      - `+ pipelines.latest_run.stage_status_list.id`
  - **CreatePipelineByTemplateId**
    - 请求参数变更
      - `+ variables`

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持以下接口：
    - `ShowBackgroundTaskProgress`
    - `ListCenterTask`
    - `StartInstanceResizeCheckJob`
    - `ShowBackUpInfo`
    - `CreateOrUpdateBackUpInfo`
    - `ShowExpireKeyScanInfo`
    - `ScanExpireKey`
    - `ListMigrationTaskLogs`
    - `CheckMigrationConnectivity`
    - `ExchangeInstanceIp`
    - `ExecuteCommandMobilization`
    - `LoginWebCli`
    - `UpdateMigrationTask`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListBatches**
    - 请求参数变更
      - `+ job-name`
  - **CreateBatchJob**
    - 响应参数变更
      - `- req_body`

### HuaweiCloud SDK HSS

- _新增特性_
  - 支持以下接口：
    - `ListContainerNodes`
    - `ListBlockedIp`
    - `ChangeBlockedIp`
    - `ListIsolatedFile`
    - `ChangeIsolatedFile`
    - `ListSwrImageRepository`
    - `BatchScanSwrImage`
    - `ListImageVulnerabilities`
    - `ListVulnerabilityCve`
    - `RunImageSynchronize`
    - `ListImageRiskConfigs`
    - `ListImageRiskConfigRules`
    - `ShowImageCheckRuleDetail`
    - `ShowVulScanPolicy`
    - `ChangeVulScanPolicy`
    - `ShowVulStatics`
- _解决问题_
  - 无
- _特性变更_
  - **ListPortStatistics**
    - 请求参数变更
      - `+ port_string`
      - `+ sort_key`
      - `+ sort_dir`
    - 响应参数变更
      - `+ data_list.status`
  - **ListProtectionServer**
    - 响应参数变更
      - `+ data_list.host_source`
  - **ListHostStatus**
    - 请求参数变更
      - `+ has_intrusion`
      - `+ agent_upgradable`
  - **ListVulHosts**
    - 响应参数变更
      - `+ data_list.support_restore`
  - **ChangeVulStatus**
    - 请求参数变更
      - `+ backup_info_id`
      - `+ custom_backup_hosts`
  - **ListHostVuls**
    - 响应参数变更
      - `+ data_list.app_name`
      - `+ data_list.app_version`
      - `+ data_list.app_path`
      - `+ data_list.version`
      - `+ data_list.support_restore`
  - **ListHostProtectHistoryInfo**
    - 请求参数变更
      - `+ host_name`
      - `+ host_ip`
      - `+ file_path`
      - `+ file_operation`
  - **ListProtectionPolicy**
    - 响应参数变更
      - `+ data_list.deploy_mode`
      - `+ data_list.default_policy`
  - **ListSecurityEvents**
    - 请求参数变更
      - `+ severity_list`
      - `+ attack_tag`
      - `+ asset_value`
      - `+ tag_list`
      - `+ att_ck`
    - 响应参数变更
      - `+ data_list.description`
      - `+ data_list.event_abstract`
      - `+ data_list.tag_list`
      - `+ data_list.resource_info.container_status`
      - `+ data_list.resource_info.pod_uid`
      - `+ data_list.resource_info.pod_name`
      - `+ data_list.resource_info.namespace`
      - `+ data_list.resource_info.cluster_id`
      - `+ data_list.resource_info.cluster_name`
  - **ChangeEvent**
    - 请求参数变更
      - `+ operate_event_list.operate_detail_list.container_id`
      - `+ operate_event_list.operate_detail_list.container_name`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListProducts**
    - 请求参数变更
      - `+ product_name`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ResizeInstance**
    - 请求参数变更
      - `+ tenant_ips`
      - `+ second_tenant_subnet_id`
  - **ResizeEngineInstance**
    - 请求参数变更
      - `+ tenant_ips`
      - `+ second_tenant_subnet_id`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 支持接口`RunCreateAudioStreamModerationJob`、`RunCloseAudioStreamModerationJob`、`RunCreateVideoStreamModerationJob`、`RunCloseVideoStreamModerationJob`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeGeneralTable**
    - 请求参数变更
      - `+ with_borders`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`ListInstanceDiagnosis`、`ListInstancesInfoDiagnosis`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowGroup**
    - 响应参数变更
      - `+ group_desc`
  - **CreateConsumerGroupOrBatchDeleteConsumerGroup**
    - 请求参数变更
      - `+ group_desc`
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `+ groups.group_desc`
  - **BatchUpdateConsumerGroup**
    - 请求参数变更
      - `+ groups.group_desc`

### HuaweiCloud SDK SFSTurbo

- _新增特性_
  - 支持以下接口：
    - `SetHpcCacheBackend`
    - `CreateHpcCacheTask`
    - `ShowHpcCacheTask`
    - `ListHpcCacheTasks`
    - `ListFsTasks`
    - `CreateFsTask`
    - `ShowFsTask`
    - `DeleteFsTask`
    - `ListBackendTargets`
    - `CreateBackendTarget`
    - `ShowBackendTargetInfo`
    - `DeleteBackendTarget`
    - `ShowFsDirUsage`
    - `ListPermRules`
    - `CreatePermRule`
    - `ShowPermRule`
    - `UpdatePermRule`
    - `DeletePermRule`
    - `UpdateHpcShare`
- _解决问题_
  - 无
- _特性变更_
  - **ListShares**
    - 响应参数变更
      - `* shares: list<Shares> -> list<ShareInfo>`

# 3.1.58 2023-10-19

### HuaweiCloud SDK CBR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAgent**
    - 请求参数变更
      - `* agent_id: string -> list<string>`
  - **ListVault**
    - 请求参数变更
      - `* id: string -> list<string>`

### HuaweiCloud SDK CC

- _新增特性_
  - 支持以下接口：
    - `TagCloudConnection`
    - `UntagCloudConnection`
    - `ListCloudConnectionTags`
    - `ListCloudConnectionsByTags`
    - `TagBandwidthPackage`
    - `UntagBandwidthPackage`
    - `ListBandwidthPackageTags`
    - `ListBandwidthPackagesByTags`
    - `ListCentralNetworks`
    - `CreateCentralNetwork`
    - `ShowCentralNetwork`
    - `UpdateCentralNetwork`
    - `DeleteCentralNetwork`
    - `TagCentralNetwork`
    - `UntagCentralNetwork`
    - `ListCentralNetworkTags`
    - `ListCentralNetworkPolicies`
    - `CreateCentralNetworkPolicy`
    - `ApplyCentralNetworkPolicy`
    - `DeleteCentralNetworkPolicy`
    - `ListCentralNetworkPolicyChangeSet`
    - `ListCentralNetworkConnections`
    - `UpdateCentralNetworkConnection`
    - `ListCentralNetworkGdgwAttachments`
    - `CreateCentralNetworkGdgwAttachment`
    - `ShowCentralNetworkGdgwAttachment`
    - `UpdateCentralNetworkGdgwAttachment`
    - `ListCentralNetworkAttachments`
    - `DeleteCentralNetworkAttachment`
    - `ListCentralNetworkQuotas`
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `ListDomainTags`
    - `DeleteTag`
    - `BatchCreateDeleteTags`
    - `ListResourceByFilterTag`
    - `ListTags`
    - `CreateTag`
  - **ListCloudConnections**
    - 请求参数变更
      - `* id: list<string> -> list<UUIDDef>`
  - **ListCloudConnectionRoutes**
    - 请求参数变更
      - `* cloud_connection_id: list<string> -> list<UUIDDef>`
  - **ListAuthorisations**
    - 请求参数变更
      - `* id: list<string> -> list<UUIDDef>`
      - `* cloud_connection_id: list<string> -> list<UUIDDef>`
  - **ListPermissions**
    - 请求参数变更
      - `* id: list<string> -> list<UUIDDef>`
      - `* cloud_connection_id: list<string> -> list<UUIDDef>`
  - **ListCloudConnectionQuotas**
    - 请求参数变更
      - `+ cloud_connection_id`
      - `+ region_id`
  - **ListNetworkInstances**
    - 请求参数变更
      - `* id: list<string> -> list<UUIDDef>`
      - `* cloud_connection_id: list<string> -> list<UUIDDef>`
  - **ListBandwidthPackages**
    - 请求参数变更
      - `+ cloud_connection_id`
      - `* id: list<string> -> list<UUIDDef>`
  - **ListInterRegionBandwidths**
    - 请求参数变更
      - `* id: list<string> -> list<UUIDDef>`
      - `* cloud_connection_id: list<string> -> list<UUIDDef>`

### HuaweiCloud SDK CFW

- _新增特性_
  - 支持以下接口：
    - `ListDomainSets`
    - `AddDomainSet`
    - `UpdateDomainSet`
    - `DeleteDomainSet`
    - `ListFirewallList`
    - `BatchUpdateAclRuleActions`
    - `ListRuleAclTags`
    - `AddDomains`
    - `DeleteDomains`
    - `ListDomains`
    - `BatchDeleteAclRules`
    - `BatchDeleteServiceItems`
    - `BatchDeleteAddressItems`
- _解决问题_
  - 无
- _特性变更_
  - **ListFlowLogs**
    - 请求参数变更
      - `+ dst_host`
    - 响应参数变更
      - `+ data.records.dst_host`
  - **ListAccessControlLogs**
    - 请求参数变更
      - `+ dst_host`
      - `+ rule_name`
      - `+ action`
    - 响应参数变更
      - `+ data.records.src_region_id`
      - `+ data.records.src_region_name`
      - `+ data.records.dst_region_id`
      - `+ data.records.dst_region_name`
      - `+ data.records.dst_host`
  - **ListBlackWhiteLists**
    - 响应参数变更
      - `+ data.records.description`
  - **ListDomainParseDetail**
    - 请求参数变更
      - `+ address_type`
  - **UpdateDnsServers**
    - 请求参数变更
      - `+ health_check_domain_name`
  - **ListDnsServers**
    - 响应参数变更
      - `+ data.health_check_domain_name`
  - **ListAttackLogs**
    - 请求参数变更
      - `+ dst_host`
      - `+ log_type`
    - 响应参数变更
      - `+ data.records.dst_host`
      - `+ data.records.src_region_id`
      - `+ data.records.src_region_name`
      - `+ data.records.dst_region_id`
      - `+ data.records.dst_region_name`
  - **UpdateAclRule**
    - 请求参数变更
      - `+ tag`
      - `+ source.region_list_json`
      - `+ source.region_list`
      - `+ source.domain_set_id`
      - `+ source.domain_set_name`
      - `+ source.ip_address`
      - `+ source.address_group`
      - `+ source.address_group_names`
      - `+ service.custom_service`
      - `+ service.service_group`
      - `+ service.service_group_names`
  - **ListAclRules**
    - 请求参数变更
      - `+ tags_id`
      - `+ source`
      - `+ destination`
      - `+ service`
    - 响应参数变更
      - `+ data.records.tag`
      - `+ data.records.source.region_list_json`
      - `+ data.records.source.region_list`
      - `+ data.records.source.domain_set_id`
      - `+ data.records.source.domain_set_name`
      - `+ data.records.source.ip_address`
      - `+ data.records.source.address_group`
      - `+ data.records.source.address_group_names`
      - `+ data.records.service.custom_service`
      - `+ data.records.service.service_group`
      - `+ data.records.service.service_group_names`
  - **AddBlackWhiteList**
    - 请求参数变更
      - `+ description`
  - **UpdateBlackWhiteList**
    - 请求参数变更
      - `+ description`
  - **ListEipCount**
    - 响应参数变更
      - `+ data.eip_protected_self`
  - **ChangeEipStatus**
    - 响应参数变更
      - `+ data.object_id`
      - `+ data.fail_eip_id_list`
      - `- data.id`
      - `* data: object<IdObject> -> object<EIPSwitchStatusVO>`
  - **ListEastWestFirewall**
    - 响应参数变更
      - `+ data.mode`
      - `+ data.ew_vpc_route_limit`
      - `+ data.er_associated_subnet.ipv6_enable`
      - `+ data.protect_infos.protected_resource_mode`
  - **AddAclRule**
    - 请求参数变更
      - `+ rules.tag`
      - `+ rules.source.region_list_json`
      - `+ rules.source.region_list`
      - `+ rules.source.domain_set_id`
      - `+ rules.source.domain_set_name`
      - `+ rules.source.ip_address`
      - `+ rules.source.address_group`
      - `+ rules.source.address_group_names`
      - `+ rules.service.custom_service`
      - `+ rules.service.service_group`
      - `+ rules.service.service_group_names`
  - **ListEips**
    - 请求参数变更
      - `+ tags`
    - 响应参数变更
      - `+ data.records.object_id`
      - `+ data.records.tags`
      - `+ data.records.domain_id`
      - `+ data.records.owner`
      - `+ data.records.fw_domain_id`
  - **AddAddressItem**
    - 响应参数变更
      - `+ data.covered_ip`
  - **ListFirewallDetail**
    - 响应参数变更
      - `+ data.records.resource_id`
      - `+ data.records.support_url_filtering`
      - `+ data.records.flavor.session_concurrent`
      - `+ data.records.flavor.session_create`
      - `+ data.records.flavor.total_rule_count`
      - `+ data.records.flavor.used_rule_count`
      - `+ data.records.flavor.vpc_bandwith`

### HuaweiCloud SDK CodeArtsBuild

- _新增特性_
  - 支持以下接口：
    - `DownloadLogByRecordId`
    - `ShowRecordInfo`
    - `StopBuildJob`
    - `DeleteBuildJob`
    - `DisableBuildJob`
    - `ResumeBuildJob`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持以下接口：
    - `CreateConnectivityTest`
    - `ShowReplicationStates`
    - `ListAclAccounts`
    - `CreateAclAccount`
    - `UpdateAclAccountPassWord`
    - `ResetAclAccountPassWord`
    - `UpdateAclAccountRole`
    - `UpdateAclAccountRemark`
    - `DeleteAclAccount`
    - `ShowConfigTemplate`
    - `UpdateConfigTemplate`
    - `DeleteConfigTemplate`
- _解决问题_
  - 无
- _特性变更_
  - **ListConfigTemplates**
    - 响应参数变更
      - `+ templates`
      - `- config_templates`
  - **CreateRedislog**
    - 请求参数变更
      - `+ query_time: enum value [0,1,3,7]`
  - **ListInstances**
    - 响应参数变更
      - `+ instances.features.support_audit_log`
  - **ShowInstance**
    - 响应参数变更
      - `+ features.support_audit_log`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ReinstallServerWithCloudInit**
    - 请求参数变更
      - `+ os-reinstall.metadata.BYOL`
  - **ChangeServerOsWithCloudInit**
    - 请求参数变更
      - `+ os-change.metadata.BYOL`
  - **ChangeServerOsWithoutCloudInit**
    - 请求参数变更
      - `+ os-change.metadata.BYOL`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持以下接口：
    - `UpdateProxyNewConfigurations`
    - `CopyConfigurations`
    - `ListConfigurationsDifferences`
    - `ListConfigurationsInstances`
    - `ListModifyHistory`
    - `ListEnterpriseProjects`
    - `SwitchAccessControl`
    - `CreateAccessControl`
    - `DeleteScheduleTasK`
    - `ListInstanceConfigurations`
    - `ShowGaussMySqlIncrementalBackupList`
    - `UpdateBackupOffsitePolicy`
    - `CreateRestoreTables`
- _解决问题_
  - 无
- _特性变更_
  - **ListGaussMySqlDatabase**
    - 请求参数变更
      - `+ name`
      - `+ charset`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListStructuredLogsWithTimeRange**
    - 响应参数变更
      - `+ result`
      - `- context`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListEngineProducts**
    - 响应参数变更
      - `+ products.properties.product_alias`

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`RunAudioAssessment`、`RunMultiModalAssessment`

### HuaweiCloud SDK VPC

- _新增特性_
  - 支持接口`BatchCreateSecurityGroupRules`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.57 2023-10-12

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持以下接口：
    - `ListStackSets`
    - `CreateStackSet`
    - `ShowStackSetTemplate`
    - `ListStackSetOperations`
    - `ShowStackSetMetadata`
    - `ListStackInstances`
    - `CreateStackInstance`
    - `DeleteStackInstance`
    - `DeployStackSet`
    - `DeleteStackSet`
    - `UpdateStackSet`
    - `ShowStackSetOperationMetadata`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateScalingConfig**
    - 请求参数变更
      - `+ source_scaling_configuration_id`

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateBareMetalServers**
    - 请求参数变更
      - `* server.server_tags: map<string, list<SystemTags>> -> list<SystemTags>`

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListSubCustomerNewTag`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowHistoryTasks**
    - 请求参数变更
      - `+ task_type`
  - **ShowUrlTaskInfo**
    - 响应参数变更
      - `+ result.mode`

### HuaweiCloud SDK CES

- _新增特性_
  - 支持以下接口：
    - `BatchUpdateNotificationMasks`
    - `BatchUpdateNotificationMaskTime`
    - `UpdateNotificationMasks`
    - `BatchDeleteNotificationMasks`
    - `ListNotificationMasks`
    - `ListNotificationMaskResources`
    - `ListOneClickAlarms`
    - `CreateOneClickAlarm`
    - `ListOneClickAlarmRules`
    - `BatchUpdateOneClickAlarmsEnabledState`
    - `BatchDeleteOneClickAlarms`
    - `UpdateOneClickAlarmNotifications`
    - `BatchUpdateOneClickAlarmPoliciesEnabledState`
    - `UpdateAlarmNotifications`
    - `ListCesTargetProjectTags`
- _解决问题_
  - 无
- _特性变更_
  - **ListAlarmHistories**
    - 响应参数变更
      - `+ alarm_histories.condition.suppress_duration: enum value [86400]`
  - **ListAgentInvocations**
    - 请求参数变更
      - `- instance_name`
      - `+ invocation_type: enum value [RETRY]`
    - 响应参数变更
      - `+ invocations.invocation_type: enum value [RETRY]`
  - **ListAgentStatus**
    - 响应参数变更
      - `+ agent_status.extensions.version`

### HuaweiCloud SDK CodeArtsDeploy

- _新增特性_
  - 支持接口`ShowExecutionParams`
- _解决问题_
  - 无
- _特性变更_
  - **ListAllApp**
    - 请求参数变更
      - `+ states`
      - `+ group_id`

### HuaweiCloud SDK Config

- _新增特性_
  - 支持以下接口：
    - `ListOrganizationConformancePacks`
    - `CreateOrganizationConformancePack`
    - `ShowOrganizationConformancePack`
    - `DeleteOrganizationConformancePack`
    - `ListOrganizationConformancePackStatuses`
    - `ShowOrganizationConformancePackDetailedStatuses`
- _解决问题_
  - 无
- _特性变更_
  - **ShowConfigurationAggregatorSourcesStatus**
    - 响应参数变更
      - `+ aggregated_source_statuses.source_name`
  - **ShowConformancePack**
    - 响应参数变更
      - `+ created_by`
  - **CreateConformancePack**
    - 响应参数变更
      - `+ created_by`
  - **ListConformancePacks**
    - 响应参数变更
      - `+ created_by`
      - `+ value.created_by`
  - **ShowAggregatePolicyStateComplianceSummary**
    - 响应参数变更
      - `+ results.group_account_name`
  - **ListAggregateComplianceByPolicyAssignment**
    - 响应参数变更
      - `+ aggregate_policy_assignments.account_name`

### HuaweiCloud SDK CSS

- _新增特性_
  - 支持以下接口：
    - `DeleteConfig`
    - `StopHotPipeline`
    - `ListCerts`
    - `ListElbs`
    - `EnableOrDisableElb`
    - `ShowElbDetail`
    - `CreateElbListener`
    - `UpdateEsListener`
    - `ListElbCerts`
    - `ListAiOps`
    - `CreateAiOps`
    - `DeleteAiOps`
    - `ListSmnTopics`
    - `UpgradeCore`
    - `ListImages`
    - `UpgradeDetail`
    - `RetryUpgradeTask`
    - `UpdateAzByInstanceType`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateShrinkNodes**
    - 请求参数变更
      - `+ migrate_data`
  - **CreateCnf**
    - 请求参数变更
      - `+ sensitive_words`
  - **UpdateCnf**
    - 请求参数变更
      - `+ sensitive_words`
  - **ShowClusterDetail**
    - 响应参数变更
      - `+ bandwidthResourceId`
      - `+ instances.resourceId`
      - `+ instances.volume.resourceIds`
      - `+ publicKibanaResp.bandwidthResourceId`
  - **ListClustersDetails**
    - 响应参数变更
      - `+ clusters.bandwidthResourceId`
      - `+ clusters.instances.resourceId`
      - `+ clusters.instances.volume.resourceIds`
      - `+ clusters.publicKibanaResp.bandwidthResourceId`

### HuaweiCloud SDK CTS

- _新增特性_
  - 支持以下接口：
    - `ListOperations`
    - `BatchCreateResourceTags`
    - `BatchDeleteResourceTags`
    - `ListUserResources`
    - `CheckObsBuckets`
    - `ListTraceResources`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DC

- _新增特性_
  - 支持以下接口：
    - `UpdateVifPeer`
    - `DeleteVifPeer`
    - `CreateVifPeer`
    - `ShowQuotas`
    - `ListSwitchoverTestRecords`
    - `SwitchoverTest`
- _解决问题_
  - 无
- _特性变更_
  - **DeleteResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`
  - **ListProjectTags**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`
  - **ShowResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`
  - **CreateResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`
  - **BatchCreateResourceTags**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`
  - **ShowDirectConnect**
    - 请求参数变更
      - `- limit`
      - `- marker`
    - 响应参数变更
      - `- direct_connect.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connect.charge_mode: enum value [port]`
  - **UpdateDirectConnect**
    - 响应参数变更
      - `- direct_connect.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connect.charge_mode: enum value [port]`
  - **ListDirectConnects**
    - 响应参数变更
      - `- direct_connects.type: enum value [onestop_standard,onestop_hosted]`
      - `- direct_connects.charge_mode: enum value [port]`
  - **ShowVirtualGateway**
    - 响应参数变更
      - `- virtual_gateway.type: enum value [default]`
  - **UpdateVirtualGateway**
    - 响应参数变更
      - `- virtual_gateway.type: enum value [default]`
  - **ListVirtualGateways**
    - 请求参数变更
      - `+ enterprise_project_id`
    - 响应参数变更
      - `- virtual_gateways.type: enum value [default]`
  - **CreateVirtualGateway**
    - 响应参数变更
      - `- virtual_gateway.type: enum value [default]`
  - **ShowVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.service_type: enum value [GDGW]`
      - `- virtual_interface.service_type: enum value [vpc,GDWW]`
  - **UpdateVirtualInterface**
    - 响应参数变更
      - `+ virtual_interface.service_type: enum value [GDGW]`
      - `- virtual_interface.service_type: enum value [vpc,GDWW]`
  - **ListVirtualInterfaces**
    - 响应参数变更
      - `+ virtual_interfaces.service_type: enum value [GDGW]`
      - `- virtual_interfaces.service_type: enum value [vpc,GDWW]`
  - **CreateVirtualInterface**
    - 请求参数变更
      - `+ virtual_interface.service_type: enum value [GDGW]`
      - `- virtual_interface.service_type: enum value [GDWW]`
    - 响应参数变更
      - `+ virtual_interface.service_type: enum value [GDGW]`
      - `- virtual_interface.service_type: enum value [vpc,GDWW]`
  - **ListTagResourceInstances**
    - 请求参数变更
      - `+ resource_type: enum value [dc-lag]`

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持以下接口：
    - `SaveClusterDescriptionInfo`
    - `ExecuteDatabaseOmUserAction`
    - `ShowInstance`
    - `ShowDatabaseOmUserStatus`
    - `ListConfigurationsAuditRecords`
    - `ShowClusterRedistribution`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ReinstallServerWithoutCloudInit**
    - 请求参数变更
      - `+ os-reinstall.metadata.BYOL`
  - **ListFlavors**
    - 响应参数变更
      - `+ flavors.os_extra_specs.quota:vif_max_num`
      - `+ flavors.os_extra_specs.quota:sub_network_interface_max_num`
  - **ListResizeFlavors**
    - 响应参数变更
      - `+ flavors.extra_specs.quota:vif_max_num`
      - `+ flavors.extra_specs.quota:sub_network_interface_max_num`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ShowFunctionUrl`、`UpdateFunctionUrl`、`CreateFunctionUrl`、`DeleteFunctionUrl`
  - **ListAsyncInvocations**
    - 响应参数变更
      - `+ next_marker`
      - `+ count`
  - **ListActiveAsyncInvocations**
    - 响应参数变更
      - `+ next_marker`
      - `+ count`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 响应参数变更
      - `+ instances.datastore.complete_version`
      - `+ instances.datastore.hotfix_versions`
  - **ListInstancesDetails**
    - 响应参数变更
      - `+ instances.datastore.complete_version`
      - `+ instances.datastore.hotfix_versions`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowJob**
    - 响应参数变更
      - `+ entities.addition_error_code`
      - `+ entities.addition_error_msg`
      - `+ entities.error_code`
      - `+ entities.error`
      - `+ entities.alarm_code`

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持接口`CreatePhotoDetection`、`ShowPhotoDetection`
- _解决问题_
  - 无
- _特性变更_
  - **CreateSmartLiveRoom**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`
  - **ShowSmartLiveRoom**
    - 响应参数变更
      - `- video_config.codec: enum value [VP9]`
  - **UpdateSmartLiveRoom**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`
    - 响应参数变更
      - `- video_config.codec: enum value [VP9]`
  - **StartSmartLive**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`
  - **Create2DDigitalHumanVideo**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`
  - **Show2DDigitalHumanVideo**
    - 响应参数变更
      - `- video_config.codec: enum value [VP9]`
  - **CreateVideoScripts**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`
  - **ShowVideoScript**
    - 响应参数变更
      - `- video_config.codec: enum value [VP9]`
  - **UpdateVideoScript**
    - 请求参数变更
      - `- video_config.codec: enum value [VP9]`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeColombiaIdCard`
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeVehicleLicense**
    - 响应参数变更
      - `+ result.energy_type`
      - `+ result.front`
      - `+ result.back`
  - **RecognizeWebImage**
    - 请求参数变更
      - `+ detect_text_direction`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持以下接口：
    - `ListPostgresqlHbaInfo`
    - `ModifyPostgresqlHbaConf`
    - `AddPostgresqlHbaConf`
    - `DeletePostgresqlHbaConf`
    - `ListPostgresqlHbaInfoHistory`
- _解决问题_
  - 无
- _特性变更_
  - **UpgradeDbVersionNew**
    - 请求参数变更
      - `+ is_delayed`
      - `- delay`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowCertKey**
    - 请求参数变更
      - `+ enable_ca_cert`
    - 响应参数变更
      - `+ target_mgmt_private_key`
      - `+ target_data_cert`
      - `+ target_data_private_key`
      - `+ target_mgmt_cert`
      - `+ ca`

### HuaweiCloud SDK VPC

- _新增特性_
  - 支持以下接口：
    - `ListTrafficMirrorSessions`
    - `CreateTrafficMirrorSession`
    - `ShowTrafficMirrorSession`
    - `UpdateTrafficMirrorSession`
    - `DeleteTrafficMirrorSession`
    - `RemoveSourcesFromTrafficMirrorSession`
    - `AddSourcesToTrafficMirrorSession`
    - `ListTrafficMirrorFilters`
    - `CreateTrafficMirrorFilter`
    - `ShowTrafficMirrorFilter`
    - `UpdateTrafficMirrorFilter`
    - `DeleteTrafficMirrorFilter`
    - `ListTrafficMirrorFilterRules`
    - `CreateTrafficMirrorFilterRule`
    - `ShowTrafficMirrorFilterRule`
    - `UpdateTrafficMirrorFilterRule`
    - `DeleteTrafficMirrorFilterRule`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.56 2023-09-19

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateBareMetalServers**
    - 请求参数变更
      - `* server.server_tags: list<SystemTags> -> map<string, list<SystemTags>>`

### HuaweiCloud SDK CTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateTracker**
    - 请求参数变更
      - `+ is_organization_tracker`
      - `+ management_event_selector`
  - **CreateTracker**
    - 请求参数变更
      - `+ is_organization_tracker`
      - `+ management_event_selector`
    - 响应参数变更
      - `+ is_organization_tracker`
      - `+ management_event_selector`
  - **ListTrackers**
    - 响应参数变更
      - `+ trackers.is_organization_tracker`
      - `+ trackers.management_event_selector`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 支持接口`ListActiveAsyncInvocations`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstance**
    - 请求参数变更
      - `+ availability_zone_detail`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstanceTopics**
    - 响应参数变更
      - `+ topic_max_partitions`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateTranscodingsTemplate**
    - 请求参数变更
      - `+ quality_info.bitrate_adaptive`
      - `+ quality_info.i_frame_policy`
  - **CreateTranscodingsTemplate**
    - 请求参数变更
      - `+ quality_info.bitrate_adaptive`
      - `+ quality_info.i_frame_policy`
  - **ShowTranscodingsTemplate**
    - 响应参数变更
      - `+ templates.quality_info.bitrate_adaptive`
      - `+ templates.quality_info.i_frame_policy`

### HuaweiCloud SDK LTS

- _新增特性_
  - 支持以下接口：
    - `ShowLogConvergeConfig`
    - `ShowAdminConfig`
    - `UpdateSwitch`
    - `ShowMemberGroupAndStream`
    - `UpdateLogConvergeConfig`
- _解决问题_
  - 无
- _特性变更_
  - **ListCharts**
    - 响应参数变更
      - `+ config.can_sort`
      - `+ config.can_search`
      - `+ config.page_size`
      - `* config: object -> object<ChartConfig>`
  - **ShowNotificationTemplate**
    - 响应参数变更
      - `+ create_time`
      - `+ project_id`
      - `+ templates`
      - `+ modify_time`
      - `+ name`
      - `+ source`
      - `+ type`
      - `+ locale`
      - `+ desc`
      - `- body`
  - **DeleteTransfer**
    - 响应参数变更
      - `+ log_transfer_info.log_transfer_detail.obs_period`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `+ log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `+ log_transfer_info.log_transfer_detail.obs_period_unit`
      - `+ log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `+ log_transfer_info.log_transfer_detail.obs_eps_id`
      - `+ log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `+ log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `+ log_transfer_info.log_transfer_detail.dis_id`
      - `+ log_transfer_info.log_transfer_detail.dis_name`
      - `+ log_transfer_info.log_transfer_detail.kafka_id`
      - `+ log_transfer_info.log_transfer_detail.kafka_topic`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `+ log_transfer_info.log_transfer_detail.tags`
      - `* log_transfer_info.log_transfer_detail: object -> object<TransferDetail>`
  - **ListTransfers**
    - 响应参数变更
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_period`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_period_unit`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_eps_id`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.dis_id`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.dis_name`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.kafka_id`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.kafka_topic`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_time_zone`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `+ log_transfers.log_transfer_info.log_transfer_detail.tags`
      - `* log_transfers.log_transfer_info.log_transfer_detail: object -> object<TransferDetail>`
  - **UpdateTransfer**
    - 响应参数变更
      - `+ log_transfer_info.log_transfer_detail.obs_period`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `+ log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `+ log_transfer_info.log_transfer_detail.obs_period_unit`
      - `+ log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `+ log_transfer_info.log_transfer_detail.obs_eps_id`
      - `+ log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `+ log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `+ log_transfer_info.log_transfer_detail.dis_id`
      - `+ log_transfer_info.log_transfer_detail.dis_name`
      - `+ log_transfer_info.log_transfer_detail.kafka_id`
      - `+ log_transfer_info.log_transfer_detail.kafka_topic`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `+ log_transfer_info.log_transfer_detail.tags`
      - `* log_transfer_info.log_transfer_detail: object -> object<TransferDetail>`
  - **CreateTransfer**
    - 响应参数变更
      - `+ log_transfer_info.log_transfer_detail.obs_period`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `+ log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `+ log_transfer_info.log_transfer_detail.obs_period_unit`
      - `+ log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `+ log_transfer_info.log_transfer_detail.obs_eps_id`
      - `+ log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `+ log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `+ log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `+ log_transfer_info.log_transfer_detail.dis_id`
      - `+ log_transfer_info.log_transfer_detail.dis_name`
      - `+ log_transfer_info.log_transfer_detail.kafka_id`
      - `+ log_transfer_info.log_transfer_detail.kafka_topic`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone`
      - `+ log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `+ log_transfer_info.log_transfer_detail.tags`
      - `* log_transfer_info.log_transfer_detail: object -> object<TransferDetail>`
  - **ListNotificationTemplates**
    - 响应参数变更
      - `+ create_time`
      - `+ project_id`
      - `+ templates`
      - `+ modify_time`
      - `+ name`
      - `+ source`
      - `+ type`
      - `+ locale`
      - `+ desc`
      - `- body`
  - **UpdateSqlAlarmRule**
    - 请求参数变更
      - `+ frequency.type`
      - `+ frequency.cron_expr`
      - `+ frequency.hour_of_day`
      - `+ frequency.day_of_week`
      - `+ frequency.fixed_rate`
      - `+ frequency.fixed_rate_unit`
      - `* frequency: object -> object<Frequency>`
      - `+ notification_save_rule.language`
      - `+ notification_save_rule.timezone`
      - `+ notification_save_rule.user_name`
      - `+ notification_save_rule.topics`
      - `+ notification_save_rule.template_name`
      - `* notification_save_rule: object -> object<SqlNotificationSaveRule>`
    - 响应参数变更
      - `+ frequency.type`
      - `+ frequency.cron_expr`
      - `+ frequency.hour_of_day`
      - `+ frequency.day_of_week`
      - `+ frequency.fixed_rate`
      - `+ frequency.fixed_rate_unit`
      - `* frequency: object -> object<Frequency>`
  - **CreateSqlAlarmRule**
    - 请求参数变更
      - `+ frequency.type`
      - `+ frequency.cron_expr`
      - `+ frequency.hour_of_day`
      - `+ frequency.day_of_week`
      - `+ frequency.fixed_rate`
      - `+ frequency.fixed_rate_unit`
      - `* frequency: object -> object<Frequency>`
      - `+ notification_save_rule.language`
      - `+ notification_save_rule.timezone`
      - `+ notification_save_rule.user_name`
      - `+ notification_save_rule.topics`
      - `+ notification_save_rule.template_name`
      - `* notification_save_rule: object -> object<SqlNotificationSaveRule>`
  - **ListSqlAlarmRules**
    - 响应参数变更
      - `+ sql_alarm_rules.frequency.type`
      - `+ sql_alarm_rules.frequency.cron_expr`
      - `+ sql_alarm_rules.frequency.hour_of_day`
      - `+ sql_alarm_rules.frequency.day_of_week`
      - `+ sql_alarm_rules.frequency.fixed_rate`
      - `+ sql_alarm_rules.frequency.fixed_rate_unit`
      - `* sql_alarm_rules.frequency: object -> object<Frequency>`
  - **UpdateKeywordsAlarmRule**
    - 请求参数变更
      - `+ frequency.type`
      - `+ frequency.cron_expr`
      - `+ frequency.hour_of_day`
      - `+ frequency.day_of_week`
      - `+ frequency.fixed_rate`
      - `+ frequency.fixed_rate_unit`
      - `* frequency: object -> object<Frequency>`
      - `+ notification_save_rule.language`
      - `+ notification_save_rule.timezone`
      - `+ notification_save_rule.user_name`
      - `+ notification_save_rule.topics`
      - `+ notification_save_rule.template_name`
      - `* notification_save_rule: object -> object<SqlNotificationSaveRule>`
  - **CreateKeywordsAlarmRule**
    - 请求参数变更
      - `+ notification_save_rule.language`
      - `+ notification_save_rule.timezone`
      - `+ notification_save_rule.user_name`
      - `+ notification_save_rule.topics`
      - `+ notification_save_rule.template_name`
      - `* notification_save_rule: object -> object<SqlNotificationSaveRule>`
  - **ListKeywordsAlarmRules**
    - 响应参数变更
      - `+ keywords_alarm_rules.frequency.type`
      - `+ keywords_alarm_rules.frequency.cron_expr`
      - `+ keywords_alarm_rules.frequency.hour_of_day`
      - `+ keywords_alarm_rules.frequency.day_of_week`
      - `+ keywords_alarm_rules.frequency.fixed_rate`
      - `+ keywords_alarm_rules.frequency.fixed_rate_unit`
      - `* keywords_alarm_rules.frequency: object -> object<Frequency>`

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持以下接口：
    - `Create2DDigitalHumanVideo`
    - `Show2DDigitalHumanVideo`
    - `Cancel2DDigitalHumanVideo`
    - `ListDigitalHumanBusinessCard`
    - `CreateDigitalHumanBusinessCard`
    - `ShowDigitalHumanBusinessCard`
    - `UpdateDigitalHumanBusinessCard`
    - `DeleteDigitalHumanBusinessCard`
    - `CreatePhotoDigitalHumanVideo`
    - `ShowPhotoDigitalHumanVideo`
    - `CancelPhotoDigitalHumanVideo`
    - `ListSmartLiveRooms`
    - `CreateSmartLiveRoom`
    - `ShowSmartLiveRoom`
    - `UpdateSmartLiveRoom`
    - `DeleteSmartLiveRoom`
    - `ListSmartLive`
    - `StartSmartLive`
    - `ShowSmartLive`
    - `StopSmartLive`
    - `ExecuteSmartLiveCommand`
    - `LiveEventReport`
    - `ListVideoScripts`
    - `CreateVideoScripts`
    - `ShowVideoScript`
    - `UpdateVideoScript`
    - `DeleteVideoScript`
- _解决问题_
  - 无
- _特性变更_
  - **CreatePictureModelingByUrlJob**
    - 请求参数变更
      - `+ X-User-Privilege`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`ExpandCluster`、`ShrinkCluster`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeVehicleCertificate`、`RecognizeAcceptanceBill`、`RecognizeRealEstateCertificate`、`RecognizeVietnamIdCard`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateConsumerGroup**
    - 请求参数变更
      - `* body: object<ConsumerGroup> -> object<UpdateConsumerGroup>`
  - **CreateRocketMqMigrationTask**
    - 响应参数变更
      - `+ task_id`

### HuaweiCloud SDK SMS

- _新增特性_
  - 支持接口`ShowPrivacyAgreements`、`CreatePrivacyAgreements`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.55 2023-09-14

### HuaweiCloud SDK BMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateBareMetalServers**
    - 请求参数变更
      - `+ server.nics.allowed_address_pairs`

### HuaweiCloud SDK CBR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateVault**
    - 请求参数变更
      - `- vault.billing.promotion_info`
      - `- vault.billing.purchase_mode`
      - `- vault.billing.order_id`
  - **CreatePostPaidVault**
    - 请求参数变更
      - `- vault.billing.promotion_info`
      - `- vault.billing.purchase_mode`
      - `- vault.billing.order_id`

### HuaweiCloud SDK CES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateEvents**
    - 请求参数变更
      - `- detail.dimensions`
  - **ListEventDetail**
    - 响应参数变更
      - `* event_info.detail.dimensions: object<MetricsDimension> -> list<MetricsDimension>`
      - `* event_info.detail: object<EventItemDetail> -> object<ShowEventItemDetail>`

### HuaweiCloud SDK CodeArtsDeploy

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAppDetailById**
    - 响应参数变更
      - `* result.arrange_infos: object -> list<TaskV2Info>`
  - **ListNewHosts**
    - 响应参数变更
      - `+ result.permission.can_copy`
      - `- result.permission.can_connection_test`
      - `* result.permission: object<PermissionHostDetail> -> object<PermissionHostDetailNew>`
  - **ShowHostDetail**
    - 响应参数变更
      - `* result.proxy_host: string -> object<HostInfoDetail>`
      - `+ result.permission.can_copy`
      - `- result.permission.can_connection_test`
      - `* result.permission: object<PermissionHostDetail> -> object<PermissionHostDetailNew>`

### HuaweiCloud SDK CSMS

- _新增特性_
  - 支持以下接口：
    - `ListSecretEvents`
    - `CreateSecretEvent`
    - `ShowSecretEvent`
    - `UpdateSecretEvent`
    - `DeleteSecretEvent`
    - `ListNotificationRecords`
    - `UpdateVersion`
- _解决问题_
  - 无
- _特性变更_
  - **ListSecrets**
    - 请求参数变更
      - `+ event_name`
    - 响应参数变更
      - `+ secrets.secret_type`
      - `+ secrets.auto_rotation`
      - `+ secrets.rotation_period`
      - `+ secrets.rotation_config`
      - `+ secrets.rotation_time`
      - `+ secrets.next_rotation_time`
      - `+ secrets.event_subscriptions`
      - `+ secrets.enterprise_project_id`
  - **CreateSecret**
    - 请求参数变更
      - `+ secret_type`
      - `+ auto_rotation`
      - `+ rotation_period`
      - `+ rotation_config`
      - `+ event_subscriptions`
      - `+ enterprise_project_id`
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **ShowSecret**
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **UpdateSecret**
    - 请求参数变更
      - `+ auto_rotation`
      - `+ rotation_period`
      - `+ event_subscriptions`
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **UploadSecretBlob**
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **ListSecretVersions**
    - 响应参数变更
      - `+ version_metadatas.expire_time`
  - **CreateSecretVersion**
    - 请求参数变更
      - `+ expire_time`
    - 响应参数变更
      - `+ version_metadata.expire_time`
  - **DeleteSecretForSchedule**
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **RestoreSecret**
    - 响应参数变更
      - `+ secret.secret_type`
      - `+ secret.auto_rotation`
      - `+ secret.rotation_period`
      - `+ secret.rotation_config`
      - `+ secret.rotation_time`
      - `+ secret.next_rotation_time`
      - `+ secret.event_subscriptions`
      - `+ secret.enterprise_project_id`
  - **ListSecretTags**
    - 响应参数变更
      - `* sys_tags: list<TagItem> -> list<SysTag>`
  - **ListProjectSecretsTags**
    - 响应参数变更
      - `* tags: list<Tag> -> list<TagResponse>`
  - **ShowSecretVersion**
    - 响应参数变更
      - `+ version.version_metadata.expire_time`
  - **ListResourceInstances**
    - 请求参数变更
      - `* matches: list<TagItem> -> list<TagMatches>`
    - 响应参数变更
      - `- resources.sys_tags`
      - `+ resources.resource_detail.secret_type`
      - `+ resources.resource_detail.auto_rotation`
      - `+ resources.resource_detail.rotation_period`
      - `+ resources.resource_detail.rotation_config`
      - `+ resources.resource_detail.rotation_time`
      - `+ resources.resource_detail.next_rotation_time`
      - `+ resources.resource_detail.event_subscriptions`
      - `+ resources.resource_detail.enterprise_project_id`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListFlavors**
    - 响应参数变更
      - `+ flavors.replica_count`

### HuaweiCloud SDK EVS

- _新增特性_
  - 支持接口`ModifyVolumeQoS`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 支持接口`ShowFunctionUrl`、`UpdateFunctionUrl`、`CreateFunctionUrl`、`DeleteFunctionUrl`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateFuncSnapshot**
    - 请求参数变更
      - `+ action: enum value [enable,disable]`
  - **CreateFunction**
    - 请求参数变更
      - `+ custom_image`
      - `+ code_type: enum value [Custom-Image-Swr]`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`ListAuditLogDownloadLink`
- _解决问题_
  - 无
- _特性变更_
  - **CreateGaussMySqlInstance**
    - 响应参数变更
      - `+ instance.volume`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`UpdateInstanceConsumerGroup`、`UpdateInstanceUser`
- _解决问题_
  - 无
- _特性变更_
  - **CreateKafkaConsumerGroup**
    - 请求参数变更
      - `+ group_desc`
  - **CreateInstanceUser**
    - 请求参数变更
      - `+ user_desc`
  - **ShowInstanceUsers**
    - 响应参数变更
      - `+ users.user_desc`
  - **ShowInstanceMessages**
    - 请求参数变更
      - `+ keyword`

### HuaweiCloud SDK KPS

- _新增特性_
  - 支持接口`ImportPrivateKey`、`ExportPrivateKey`、`BatchAssociateKeypair`、`ClearPrivateKey`
- _解决问题_
  - 无
- _特性变更_
  - **ListKeypairDetail**
    - 响应参数变更
      - `+ keypair.key_id`
      - `+ keypair.algorithm`
  - **ListFailedTask**
    - 请求参数变更
      - `* limit: string -> int32`
      - `* offset: string -> int32`
  - **AssociateKeypair**
    - 请求参数变更
      - `+ server.port`
    - 响应参数变更
      - `+ error_msg`
      - `+ error_code`
      - `+ server_id`
      - `+ status`
  - **DisassociateKeypair**
    - 响应参数变更
      - `+ error_msg`
      - `+ error_code`
      - `+ server_id`
      - `+ status`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCharts**
    - 响应参数变更
      - `- config.can_sort`
      - `- config.can_search`
      - `- config.page_size`
  - **ShowNotificationTemplate**
    - 响应参数变更
      - `+ body`
      - `- create_time`
      - `- project_id`
      - `- templates`
      - `- modify_time`
      - `- name`
      - `- source`
      - `- type`
      - `- locale`
      - `- desc`
  - **ListLogStream**
    - 请求参数变更
      - `- tag`
    - 响应参数变更
      - `* log_streams: list<LogStream> -> list<LogStreamResBody>`
  - **ListStructuredLogsWithTimeRange**
    - 响应参数变更
      - `+ context`
      - `- body`
  - **DeleteTransfer**
    - 响应参数变更
      - `- log_transfer_info.log_transfer_detail.obs_period`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `- log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `- log_transfer_info.log_transfer_detail.obs_period_unit`
      - `- log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `- log_transfer_info.log_transfer_detail.obs_eps_id`
      - `- log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `- log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `- log_transfer_info.log_transfer_detail.dis_id`
      - `- log_transfer_info.log_transfer_detail.dis_name`
      - `- log_transfer_info.log_transfer_detail.kafka_id`
      - `- log_transfer_info.log_transfer_detail.kafka_topic`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `- log_transfer_info.log_transfer_detail.tags`
  - **ListTransfers**
    - 响应参数变更
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_period`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_period_unit`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_eps_id`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `- log_transfers.log_transfer_info.log_transfer_detail.dis_id`
      - `- log_transfers.log_transfer_info.log_transfer_detail.dis_name`
      - `- log_transfers.log_transfer_info.log_transfer_detail.kafka_id`
      - `- log_transfers.log_transfer_info.log_transfer_detail.kafka_topic`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_time_zone`
      - `- log_transfers.log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `- log_transfers.log_transfer_info.log_transfer_detail.tags`
  - **UpdateTransfer**
    - 响应参数变更
      - `- log_transfer_info.log_transfer_detail.obs_period`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `- log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `- log_transfer_info.log_transfer_detail.obs_period_unit`
      - `- log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `- log_transfer_info.log_transfer_detail.obs_eps_id`
      - `- log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `- log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `- log_transfer_info.log_transfer_detail.dis_id`
      - `- log_transfer_info.log_transfer_detail.dis_name`
      - `- log_transfer_info.log_transfer_detail.kafka_id`
      - `- log_transfer_info.log_transfer_detail.kafka_topic`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `- log_transfer_info.log_transfer_detail.tags`
  - **CreateTransfer**
    - 响应参数变更
      - `- log_transfer_info.log_transfer_detail.obs_period`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_id`
      - `- log_transfer_info.log_transfer_detail.obs_prefix_name`
      - `- log_transfer_info.log_transfer_detail.obs_period_unit`
      - `- log_transfer_info.log_transfer_detail.obs_transfer_path`
      - `- log_transfer_info.log_transfer_detail.obs_eps_id`
      - `- log_transfer_info.log_transfer_detail.obs_bucket_name`
      - `- log_transfer_info.log_transfer_detail.obs_encrypted_enable`
      - `- log_transfer_info.log_transfer_detail.obs_dir_pre_fix_name`
      - `- log_transfer_info.log_transfer_detail.dis_id`
      - `- log_transfer_info.log_transfer_detail.dis_name`
      - `- log_transfer_info.log_transfer_detail.kafka_id`
      - `- log_transfer_info.log_transfer_detail.kafka_topic`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone`
      - `- log_transfer_info.log_transfer_detail.obs_time_zone_id`
      - `- log_transfer_info.log_transfer_detail.tags`
  - **ListNotificationTemplates**
    - 响应参数变更
      - `+ body`
      - `- create_time`
      - `- project_id`
      - `- templates`
      - `- modify_time`
      - `- name`
      - `- source`
      - `- type`
      - `- locale`
      - `- desc`
  - **UpdateSqlAlarmRule**
    - 请求参数变更
      - `- frequency.type`
      - `- frequency.cron_expr`
      - `- frequency.hour_of_day`
      - `- frequency.day_of_week`
      - `- frequency.fixed_rate`
      - `- frequency.fixed_rate_unit`
      - `- notification_save_rule.language`
      - `- notification_save_rule.timezone`
      - `- notification_save_rule.user_name`
      - `- notification_save_rule.topics`
      - `- notification_save_rule.template_name`
    - 响应参数变更
      - `- frequency.type`
      - `- frequency.cron_expr`
      - `- frequency.hour_of_day`
      - `- frequency.day_of_week`
      - `- frequency.fixed_rate`
      - `- frequency.fixed_rate_unit`
  - **CreateSqlAlarmRule**
    - 请求参数变更
      - `- frequency.type`
      - `- frequency.cron_expr`
      - `- frequency.hour_of_day`
      - `- frequency.day_of_week`
      - `- frequency.fixed_rate`
      - `- frequency.fixed_rate_unit`
      - `- notification_save_rule.language`
      - `- notification_save_rule.timezone`
      - `- notification_save_rule.user_name`
      - `- notification_save_rule.topics`
      - `- notification_save_rule.template_name`
  - **ListSqlAlarmRules**
    - 响应参数变更
      - `- sql_alarm_rules.frequency.type`
      - `- sql_alarm_rules.frequency.cron_expr`
      - `- sql_alarm_rules.frequency.hour_of_day`
      - `- sql_alarm_rules.frequency.day_of_week`
      - `- sql_alarm_rules.frequency.fixed_rate`
      - `- sql_alarm_rules.frequency.fixed_rate_unit`
  - **UpdateKeywordsAlarmRule**
    - 请求参数变更
      - `- frequency.type`
      - `- frequency.cron_expr`
      - `- frequency.hour_of_day`
      - `- frequency.day_of_week`
      - `- frequency.fixed_rate`
      - `- frequency.fixed_rate_unit`
      - `- notification_save_rule.language`
      - `- notification_save_rule.timezone`
      - `- notification_save_rule.user_name`
      - `- notification_save_rule.topics`
      - `- notification_save_rule.template_name`
  - **CreateKeywordsAlarmRule**
    - 请求参数变更
      - `- notification_save_rule.language`
      - `- notification_save_rule.timezone`
      - `- notification_save_rule.user_name`
      - `- notification_save_rule.topics`
      - `- notification_save_rule.template_name`
  - **ListKeywordsAlarmRules**
    - 响应参数变更
      - `- keywords_alarm_rules.frequency.type`
      - `- keywords_alarm_rules.frequency.cron_expr`
      - `- keywords_alarm_rules.frequency.hour_of_day`
      - `- keywords_alarm_rules.frequency.day_of_week`
      - `- keywords_alarm_rules.frequency.fixed_rate`
      - `- keywords_alarm_rules.frequency.fixed_rate_unit`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RunCreateVideoModerationJob**
    - 请求参数变更
      - `+ biz_type`
  - **RunCreateAudioModerationJob**
    - 请求参数变更
      - `+ biz_type`
  - **RunTextModeration**
    - 请求参数变更
      - `+ biz_type`
  - **CheckImageModeration**
    - 请求参数变更
      - `+ biz_type`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`RestoreTablesNew`、`UpgradeDbVersionNew`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.54 2023-09-07

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`DeleteStackEnhanced`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListScalingActivityLogs**
    - 响应参数变更
      - `* scaling_activity_log.scaling_value: string -> int32`
  - **CreateScalingPolicy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **UpdateScalingPolicy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ShowScalingPolicy**
    - 响应参数变更
      - `+ scaling_policy.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scaling_policy.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ListScalingPolicies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **CreateScalingV2Policy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ListAllScalingV2Policies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **UpdateScalingV2Policy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ShowScalingV2Policy**
    - 响应参数变更
      - `+ scaling_policy.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scaling_policy.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ListScalingV2Policies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
  - **ListScalingActivityV2Logs**
    - 响应参数变更
      - `* scaling_activity_log.scaling_value: string -> int32`
  - **CreateScalingGroup**
    - 请求参数变更
      - `+ lbaas_listeners.protocol_version`
  - **ListScalingGroups**
    - 响应参数变更
      - `+ scaling_groups.lbaas_listeners.protocol_version`
  - **UpdateScalingGroup**
    - 请求参数变更
      - `+ lbaas_listeners.protocol_version`
  - **ShowScalingGroup**
    - 响应参数变更
      - `+ scaling_group.lbaas_listeners.protocol_version`

### HuaweiCloud SDK CES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateEvents**
    - 请求参数变更
      - `+ detail.dimensions`
  - **ListEventDetail**
    - 响应参数变更
      - `- dimensions`
      - `+ event_info.detail.dimensions`

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持以下接口：
    - `StopJobAction`
    - `ShowDataProgress`
    - `UpdateDataProgress`
    - `ShowDataProcessingRulesResult`
    - `CheckDataFilter`
    - `ShowDataFilteringResult`
    - `CollectColumns`
    - `ShowColumnInfoResult`
    - `BatchStopJobsAction`
    - `ExportOperationInfo`
    - `BatchTagAction`
    - `ListProjectTags`
    - `ShowInstanceTags`
    - `UpdateStartPosition`
    - `ShowMonitorData`
    - `ShowSupportObjectType`
    - `ShowIncrementComponentsDetail`
    - `CollectDbObjectsInfo`
    - `ShowDbObjectsList`
- _解决问题_
  - 无
- _特性变更_
  - **ShowDbObjectTemplateResult**
    - 请求参数变更
      - `+ type: enum value [change]`
  - **ShowUpdateObjectSavingStatus**
    - 请求参数变更
      - `+ X-Language: enum value [en-us,zh-cn]`
  - **ShowObjectMapping**
    - 请求参数变更
      - `+ X-Language: enum value [en-us,zh-cn]`
  - **ListJobs**
    - 请求参数变更
      - `+ instance_ids`
      - `+ instance_ip`
  - **ShowDbObjectCollectionStatus**
    - 请求参数变更
      - `+ X-Language: enum value [en-us,zh-cn]`
  - **UpdateBatchAsyncJobs**
    - 请求参数变更
      - `+ jobs.type: enum value [re_create,expired_days]`
  - **UpdateJob**
    - 请求参数变更
      - `+ job.type: enum value [re_create,expired_days]`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`ListInstancesResourceMetrics`、`ListInstancesRecommendation`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.53 2023-08-31

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecordDetails**
    - 请求参数变更
      - `+ query_type`
      - `+ bill_cycle_begin`
      - `+ bill_cycle_end`

### HuaweiCloud SDK CCE

- _新增特性_
  - 支持接口`RollbackAddonInstance`、`ResizeCluster`、`BatchCreateClusterTags`、`BatchDeleteClusterTags`
- _解决问题_
  - 无
- _特性变更_
  - **ShowAddonInstance**
    - 响应参数变更
      - `+ status.isRollbackable`
      - `+ status.previousVersion`
      - `+ status.status: enum value [rollbackFailed]`
  - **UpdateAddonInstance**
    - 响应参数变更
      - `+ status.isRollbackable`
      - `+ status.previousVersion`
      - `+ status.status: enum value [rollbackFailed]`
  - **CreateAddonInstance**
    - 响应参数变更
      - `+ status.isRollbackable`
      - `+ status.previousVersion`
      - `+ status.status: enum value [rollbackFailed]`
  - **ListAddonInstances**
    - 响应参数变更
      - `+ items.status.isRollbackable`
      - `+ items.status.previousVersion`
      - `+ items.status.status: enum value [rollbackFailed]`

### HuaweiCloud SDK CES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowResourceGroup**
    - 响应参数变更
      - `+ resources.event_type`
  - **ListResourceGroup**
    - 响应参数变更
      - `+ resource_groups.type`
      - `+ resource_groups.relation_ids`
      - `+ resource_groups.resources`
  - **ListEventDetail**
    - 响应参数变更
      - `+ dimensions`

### HuaweiCloud SDK CES

- _新增特性_
  - 支持以下接口：
    - `ListDashboardInfos`
    - `CreateOneDashboard`
    - `UpdateDashboard`
    - `DeleteDashboards`
    - `ListDashboardWidgets`
    - `CreateDashboardWidgets`
    - `ShowWidget`
    - `DeleteOneWidget`
    - `BatchUpdateWidgets`
- _解决问题_
  - 无
- _特性变更_
  - **ListAlarmRulePolicies**
    - 响应参数变更
      - `+ policies.extra_info`
      - `+ policies.type`
      - `* policies: list<Policy> -> list<ListPolicy>`
  - **UpdateAlarmRulePolicies**
    - 请求参数变更
      - `+ policies.type`
      - `* policies: list<Policy> -> list<UpdatePolicy>`
    - 响应参数变更
      - `+ policies.type`
      - `* policies: list<Policy> -> list<UpdatePolicy>`
  - **ListAlarmTemplates**
    - 响应参数变更
      - `- alarm_templates.association_alarm_total`
      - `- alarm_templates.policy_total`
      - `- alarm_templates.policy_statistics`
      - `- alarm_templates.association_resource_groups`
  - **ShowAlarmTemplate**
    - 响应参数变更
      - `- association_alarm_total`

### HuaweiCloud SDK CodeArtsDeploy

- _新增特性_
  - 支持以下接口：
    - `ListHostClusters`
    - `CreateHostCluster`
    - `ShowHostClusterDetail`
    - `ListNewHosts`
    - `CreateHost`
    - `ShowHostDetail`
    - `ListEnvironments`
    - `CreateEnvironment`
    - `ShowEnvironmentDetail`
    - `DeleteEnvironment`
    - `ImportHostToEnvironment`
    - `DeleteHostFromEnvironment`
    - `ListAllApp`
    - `CreateApp`
    - `ShowAppDetailById`
    - `DeleteApplication`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowInstance**
    - 响应参数变更
      - `+ available_zones`

### HuaweiCloud SDK DLI

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSqlJobs**
    - 响应参数变更
      - `+ jobs.cpu_cost`
      - `+ jobs.output_byte`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowJob**
    - 响应参数变更
      - `+ entities.server_id`
      - `+ entities.nic_id`
  - **CreateServers**
    - 请求参数变更
      - `+ server.extendparam.CB_CSBS_BACKUP`

### HuaweiCloud SDK ER

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchCreateResourceTags**
    - 请求参数变更
      - `- sys_tags`
  - **ShowStaticRoute**
    - 响应参数变更
      - `- route.attachments.priority`
  - **UpdateStaticRoute**
    - 响应参数变更
      - `- route.attachments.priority`
  - **ListStaticRoutes**
    - 响应参数变更
      - `- routes.attachments.priority`
  - **CreateStaticRoute**
    - 响应参数变更
      - `- route.attachments.priority`
  - **ListEffectiveRoutes**
    - 响应参数变更
      - `- routes.address_group_id`
      - `- routes.next_hops.priority`

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **DetectFaceByFile**
    - 响应参数变更
      - `+ faces.attributes.gender`
  - **DetectFaceByFileIntl**
    - 响应参数变更
      - `+ faces.attributes.gender`
  - **DetectFaceByUrl**
    - 响应参数变更
      - `+ faces.attributes.gender`
  - **DetectFaceByUrlIntl**
    - 响应参数变更
      - `+ faces.attributes.gender`
  - **DetectFaceByBase64**
    - 响应参数变更
      - `+ faces.attributes.gender`
  - **DetectFaceByBase64Intl**
    - 响应参数变更
      - `+ faces.attributes.gender`

### HuaweiCloud SDK GES

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ExportGraph2**
    - 请求参数变更
      - `+ paginate`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstanceByEngine**
    - 请求参数变更
      - `- engine_version: enum value [1.1.0,2.7]`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `- engine_version: enum value [1.1.0,2.7]`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`ShowMrsVersionList`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeSmartDocumentRecognizer`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 响应参数变更
      - `+ instances.public_dns_names`

# 3.1.52 2023-08-24

### HuaweiCloud SDK HSS

- _新增特性_
  - 支持企业主机安全服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK MetaStudio

- _新增特性_
  - 支持数字内容生产线服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SWR

- _新增特性_
  - 支持容器镜像服务
- _解决问题_
  - 无
- _特性变更_
  - 无

HuaweiCloud SDK APIG

- 新增特性
  - 支持以下接口：
    - ListEndpointConnections
    - AcceptOrRejectEndpointConnections
    - ListEndpointPermissions
    - AddEndpointPermissions
    - DeleteEndpointPermissions
- 解决问题
  - 无
- 特性变更
  - AssociateSignatureKeyV2
    - 响应参数变更
      - + bindings.req_method
  - ListSignatureKeysBindedToApiV2
    - 响应参数变更
      - + bindings.req_method
  - ListApisNotBoundWithSignatureKeyV2
    - 响应参数变更
      - + apis.req_method
  - ListApisBindedToSignatureKeyV2
    - 响应参数变更
      - + bindings.req_method
  - ListApisBindedToRequestThrottlingPolicyV2
    - 响应参数变更
      - + apis.req_method
  - ListApisUnbindedToRequestThrottlingPolicyV2
    - 响应参数变更
      - + apis.req_method
  - ListApiRuntimeDefinitionV2
    - 响应参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
  - ListApisBindedToAclPolicyV2
    - 响应参数变更
      - + apis.req_method
  - ListApisUnbindedToAclPolicyV2
    - 响应参数变更
      - + apis.req_method
  - ShowDetailsOfCustomAuthorizersV2
    - 响应参数变更
      - + network_type
  - UpdateCustomAuthorizerV2
    - 请求参数变更
      - + network_type
    - 响应参数变更
      - + network_type
  - ListInstancesV2
    - 响应参数变更
      - + instances.cbc_operation_locks
      - + instances.status: enum value [Resizing,ResizeFailed,ResizeTimeout]
      - + instances.instance_status: enum value [42,43,44]
      - + instances.spec: enum value [PLATINUM_X2,PLATINUM_X3,PLATINUM_X4,PLATINUM_X5,PLATINUM_X6,PLATINUM_X7,PLATINUM_X8]
  - CreateInstanceV2
    - 请求参数变更
      - + spec_id: enum value [PLATINUM_X2,PLATINUM_X3,PLATINUM_X4,PLATINUM_X5,PLATINUM_X6,PLATINUM_X7,PLATINUM_X8]
  - ShowDetailsOfInstanceV2
    - 响应参数变更
      - + cbc_operation_locks
      - + status: enum value [Resizing,ResizeFailed,ResizeTimeout]
      - + instance_status: enum value [42,43,44]
      - + spec: enum value [PLATINUM_X2,PLATINUM_X3,PLATINUM_X4,PLATINUM_X5,PLATINUM_X6,PLATINUM_X7,PLATINUM_X8]
  - UpdateInstanceV2
    - 响应参数变更
      - + cbc_operation_locks
      - + status: enum value [Resizing,ResizeFailed,ResizeTimeout]
      - + instance_status: enum value [42,43,44]
      - + spec: enum value [PLATINUM_X2,PLATINUM_X3,PLATINUM_X4,PLATINUM_X5,PLATINUM_X6,PLATINUM_X7,PLATINUM_X8]
  - ShowDetailsOfApiV2
    - 响应参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
  - UpdateApiV2
    - 请求参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
    - 响应参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
  - ListApiVersionDetailV2
    - 响应参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
  - CreateCustomAuthorizerV2
    - 请求参数变更
      - + network_type
    - 响应参数变更
      - + network_type
  - ListCustomAuthorizersV2
    - 响应参数变更
      - + network_type
      - + authorizer_list.network_type
  - CreateApiV2
    - 请求参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
    - 响应参数变更
      - + content_type: enum value [multipart/form-data]
      - - content_type: enum value [multipart/form-date]
  - ListApisV2
    - 响应参数变更
      - + apis.content_type: enum value [multipart/form-data]
      - - apis.content_type: enum value [multipart/form-date]

### HuaweiCloud SDK CBR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateSubscriptionTarget**
    - 请求参数变更
      - `+ detail.url`
      - `+ detail.agency_name`
      - `+ detail.invocation_http_parameters`
      - `* detail: object -> object<Detail>`
  - **UpdateSubscriptionTarget**
    - 请求参数变更
      - `+ detail.url`
      - `+ detail.agency_name`
      - `+ detail.invocation_http_parameters`
      - `* detail: object -> object<Detail>`
  - **UpdateSubscription**
    - 请求参数变更
      - `+ targets.detail.url`
      - `+ targets.detail.agency_name`
      - `+ targets.detail.invocation_http_parameters`
      - `* targets.detail: object -> object<Detail>`
  - **CreateSubscription**
    - 请求参数变更
      - `+ targets.detail.url`
      - `+ targets.detail.agency_name`
      - `+ targets.detail.invocation_http_parameters`
      - `* targets.detail: object -> object<Detail>`

### HuaweiCloud SDK ER

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListJarPackageHostInfo**
    - 响应参数变更
      - `* data_list.record_time: int32 -> int64`

### HuaweiCloud SDK IMS

- _新增特性_
  - 支持以下接口：
    - `ListAimMsgTemplate`
    - `CreateAimMsgTemplate`
    - `ShowAimMsgTemplateVariable`
    - `SendAimBatchMessages`
    - `SendAimBatchDifferentMessages`
    - `DeleteAimMsgSignature`
    - `ShowAimMsgTemplateDetail`
    - `UpdateAimMsgTemplate`
    - `DeleteAimMsgTemplate`
    - `ListAimMsgSignature`
    - `AddAimMsgSignature`
    - `ListAimMsgApp`
    - `CreateSmsApp`
    - `ListAimMsgAppDetail`
    - `UpdateAimMsgApp`
    - `ShowAimMsgSignatureFileInfo`
    - `UploadAimMsgSignatureFile`
    - `ListAimMsgSignatureDetail`
    - `UpdateAimMsgSignature`
- _解决问题_
  - 无
- _特性变更_
  - **ListAimResolveDetails**
    - 请求参数变更
      - `+ task_name`
    - 响应参数变更
      - `+ resolve_details.task_name`
  - **ListResolveTasks**
    - 请求参数变更
      - `+ task_name`
    - 响应参数变更
      - `+ resolve_tasks.task_name`

### HuaweiCloud SDK LTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListNatGateways**
    - 响应参数变更
      - `+ nat_gateways.session_conf`
  - **CreateNatGateway**
    - 请求参数变更
      - `+ nat_gateway.session_conf`
    - 响应参数变更
      - `+ nat_gateway.session_conf`
  - **ShowNatGateway**
    - 响应参数变更
      - `+ nat_gateway.session_conf`
  - **UpdateNatGateway**
    - 请求参数变更
      - `+ nat_gateway.session_conf`
    - 响应参数变更
      - `+ nat_gateway.session_conf`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`ShowLoginType`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RunTts**
    - 请求参数变更
      - `+ config.property: enum value [chinese_huaxiaoman_common,chinese_huaxiaofang_common,chinese_huaxiaojun_common]`

### HuaweiCloud SDK VPC

# 3.1.51 2023-08-21

### HuaweiCloud SDK LTS

- _新增特性_
  - 支持接口`DeleteDashboard`
- _解决问题_
  - 无
- _特性变更_
  - **CreateDashBoard**
    - 响应参数变更
      - `* last_update_time: string -> int64`
      - `* useSystemTemplate: string -> boolean`
  - **CreateLogStream**
    - 请求参数变更
      - `- enterprise_project_name`
      - `- log_stream_name: enum value [lts-stream-13ci]`
      - `* ttl_in_days: string -> int32`
      - `* tags: list<tagsBody> -> object<tagsBody>`
  - **ListAccessConfig**
    - 响应参数变更
      - `+ cluster_id`
      - `+ result.cluster_id`
  - **UpdateAccessConfig**
    - 请求参数变更
      - `+ cluster_id`
    - 响应参数变更
      - `+ cluster_id`
  - **CreateAccessConfig**
    - 请求参数变更
      - `+ cluster_id`
    - 响应参数变更
      - `+ cluster_id`
  - **DeleteAccessConfig**
    - 响应参数变更
      - `+ cluster_id`
      - `+ result.cluster_id`

# 3.1.50 2023-08-17

### HuaweiCloud SDK DC

- _新增特性_
  - 支持云专线服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AOS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateStack**
    - 请求参数变更
      - `+ agencies.agency_urn`
  - **GetStackMetadata**
    - 响应参数变更
      - `+ agencies.agency_urn`
  - **CreateStack**
    - 请求参数变更
      - `+ agencies.agency_urn`

### HuaweiCloud SDK CloudRTC

- _新增特性_
  - 支持接口`ListRtcAbnormalEvent`、`ListRtcEvent`、`ListObsBuckets`、`ListObsBucketObjects`、`UpdateObsBucketAuthority`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ShowNodesInformation`
- _解决问题_
  - 无
- _特性变更_
  - **ShowInstance**
    - 响应参数变更
      - `+ cloud_service_type_code`
      - `+ inquery_spec_code`
      - `+ cloud_resource_type_code`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateServers**
    - 请求参数变更
      - `+ server.root_volume.iops`
      - `+ server.root_volume.throughput`
      - `+ server.root_volume.volumetype: enum value [GPSSD2,ESSD2]`
      - `+ server.data_volumes.iops`
      - `+ server.data_volumes.throughput`
      - `+ server.data_volumes.volumetype: enum value [GPSSD2,ESSD2]`
  - **CreatePostPaidServers**
    - 请求参数变更
      - `+ server.data_volumes.iops`
      - `+ server.data_volumes.throughput`
      - `+ server.data_volumes.volumetype: enum value [GPSSD2,ESSD2]`
      - `+ server.root_volume.iops`
      - `+ server.root_volume.throughput`
      - `+ server.root_volume.volumetype: enum value [GPSSD2,ESSD2]`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`ModifyGaussMysqlDns`、`CreateGaussMysqlDns`
- _解决问题_
  - 无
- _特性变更_
  - **ShowGaussMySqlInstanceInfo**
    - 响应参数变更
      - `+ instance.private_dns_names`
  - **ListGaussMySqlInstanceDetailInfo**
    - 响应参数变更
      - `+ instances.private_dns_names`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchRestartOrDeleteInstances**
    - 请求参数变更
      - `+ allFailure`
      - `- all_failure`
  - **CreateInstanceByEngine**
    - 请求参数变更
      - `- engine_version: enum value [2.3.0]`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `- engine_version: enum value [2.3.0]`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSnapshotConfigs**
    - 响应参数变更
      - `* body: object<LiveSnapshotConfig> -> list<LiveSnapshotConfig>`

### HuaweiCloud SDK MPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateThumbnailsTask**
    - 请求参数变更
      - `+ thumbnail_para.dots_ms`
      - `+ thumbnail_para.type: enum value [DOTS_MS]`
  - **CreateTranscodingTask**
    - 请求参数变更
      - `+ thumbnail.params.dots_ms`
      - `+ thumbnail.params.type: enum value [DOTS_MS]`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchRestartOrDeleteInstances**
    - 请求参数变更
      - `+ allFailure`
      - `- all_failure`
  - **CreatePostPaidInstanceByEngine**
    - 请求参数变更
      - `- engine_version: enum value [3.7.17]`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `- engine_version: enum value [3.7.17]`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BatchDeleteInstances**
    - 请求参数变更
      - `+ allFailure`
      - `- all_failure`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `- engine_version: enum value [5.x]`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateSecurityGroupRule**
    - 请求参数变更
      - `+ security_group_rule.remote_address_group_id`
  - **NeutronCreateSecurityGroupRule**
    - 请求参数变更
      - `+ security_group_rule.remote_address_group_id`

# 3.1.49 2023-08-10

### HuaweiCloud SDK CES

- _新增特性_
  - 支持云监控服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CodeArtsBuild

- _新增特性_
  - 支持编译构建服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSubCustomerBillDetail**
    - 响应参数变更
      - `+ fee_records.id`

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPrivateZones**
    - 请求参数变更
      - `* type: optional -> required`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`UpdateProxyPort`、`DescribeBackupEncryptStatus`、`ModifyBackupEncryptStatus`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateProxySessionConsistence**
    - 请求参数变更
      - `+ consistence_mode`
  - **CreateGaussMySqlInstance**
    - 请求参数变更
      - `* datastore: object<MysqlDatastore> -> object<MysqlDatastoreInReq>`
    - 响应参数变更
      - `* instance.datastore: object<MysqlDatastore> -> object<MysqlDatastoreInRes>`
  - **ShowGaussMySqlBackupList**
    - 响应参数变更
      - `- backups.datastore.kernel_version`
      - `* backups.datastore: object<MysqlDatastore> -> object<MysqlDatastoreInBackup>`
  - **ShowGaussMySqlProxyList**
    - 响应参数变更
      - `+ proxy_list.proxy.consistence_mode`

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstanceConsumerGroups**
    - 响应参数变更
      - `+ groups.createdAt`
      - `+ groups.group_desc`
      - `+ groups.lag`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeMyanmarIdcard**
    - 请求参数变更
      - `+ return_translation`
    - 响应参数变更
      - `+ result.translation_info`

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持接口`ListXellogFiles`、`CreateXelLogDownload`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowOneTopic**
    - 响应参数变更
      - `+ message_type`
  - **ShowTopicStatus**
    - 响应参数变更
      - `+ max_offset`
      - `+ min_offset`
  - **ShowInstance**
    - 响应参数变更
      - `+ grpc_address`
      - `+ public_grpc_address`
  - **CreateTopicOrBatchDeleteTopic**
    - 请求参数变更
      - `+ message_type`
  - **ListRocketInstanceTopics**
    - 响应参数变更
      - `+ message_type`
      - `+ topics.message_type`
  - **ListMessages**
    - 响应参数变更
      - `* messages.reconsume_times: string -> int32`
      - `* messages.queue_id: string -> int32`
      - `* messages.queue_offset: string -> int32`
  - **ExportDlqMessage**
    - 响应参数变更
      - `* reconsume_times: string -> int32`
      - `* queue_id: string -> int32`
      - `* queue_offset: string -> int32`
  - **CreatePostPaidInstance**
    - 请求参数变更
      - `+ engine_version: enum value [5.x]`
  - **ListInstances**
    - 响应参数变更
      - `+ grpc_address`
      - `+ public_grpc_address`
      - `+ instances.grpc_address`
      - `+ instances.public_grpc_address`
  - **ShowConsumerListOrDetails**
    - 响应参数变更
      - `+ lag`
      - `+ max_offset`
      - `+ consumer_offset`

# 3.1.48 2023-08-03

### HuaweiCloud SDK CCE

- _新增特性_
  - 支持云容器引擎服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecords**
    - 响应参数变更
      - `+ fee_records.id`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecords**
    - 响应参数变更
      - `+ fee_records.id`

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainDetailByName**
    - 响应参数变更
      - `- domain.sources.weight`
      - `* domain.sources: list<SourcesConfig> -> list<SourcesDomainConfig>`
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.remark`
      - `+ configs.ip_frequency_limit`
      - `+ configs.hsts`
      - `+ configs.quic`
      - `+ configs.url_auth.inherit_config`
      - `+ configs.sources.bucket_access_key`
      - `+ configs.sources.bucket_secret_key`
      - `+ configs.sources.bucket_region`
      - `+ configs.sources.bucket_name`
      - `+ configs.request_limit_rules.priority`
      - `+ configs.request_limit_rules.match_type`
      - `+ configs.request_limit_rules.match_value`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `+ configs.remark`
      - `+ configs.ip_frequency_limit`
      - `+ configs.hsts`
      - `+ configs.quic`
      - `+ configs.url_auth.inherit_config`
      - `+ configs.sources.bucket_access_key`
      - `+ configs.sources.bucket_secret_key`
      - `+ configs.sources.bucket_region`
      - `+ configs.sources.bucket_name`
      - `+ configs.request_limit_rules.priority`
      - `+ configs.request_limit_rules.match_type`
      - `+ configs.request_limit_rules.match_value`

### HuaweiCloud SDK Config

- _新增特性_
  - 支持以下接口：
    - `ListConformancePacks`
    - `CreateConformancePack`
    - `ShowConformancePack`
    - `DeleteConformancePack`
    - `CollectConformancePackComplianceSummary`
    - `ListConformancePackComplianceByPackId`
    - `ListConformancePackComplianceDetailsByPackId`
    - `ListConformancePackComplianceScores`
    - `ListBuiltInConformancePackTemplates`
    - `ShowBuiltInConformancePackTemplate`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CTS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **DeleteTracker**
    - 请求参数变更
      - `+ tracker_type: enum value [system]`

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持接口`ModifyGaussMySqlProxyRouteMode`
- _解决问题_
  - 无
- _特性变更_
  - **ShowGaussMySqlEngineVersion**
    - 响应参数变更
      - `+ datastores.version`
      - `+ datastores.kernel_version`
  - **CreateGaussMySqlProxy**
    - 请求参数变更
      - `+ route_mode`
  - **CreateGaussMySqlInstance**
    - 请求参数变更
      - `+ datastore.kernel_version`
    - 响应参数变更
      - `+ instance.datastore.kernel_version`
  - **ShowGaussMySqlBackupList**
    - 响应参数变更
      - `+ backups.datastore.kernel_version`
  - **ShowGaussMySqlProxyList**
    - 响应参数变更
      - `+ proxy_list.proxy.route_mode`
      - `+ proxy_list.proxy.balance_route_mode_enabled`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListInstances**
    - 响应参数变更
      - `+ instances.backup_used_space`
  - **ListComponentInfos**
    - 请求参数变更
      - `+ component_type`
      - `+ availability_zone_id`
    - 响应参数变更
      - `+ nodes.name`
      - `+ nodes.availability_zone_id`
      - `+ nodes.description`
      - `+ nodes.status`
      - `+ nodes.components.distributed_id`
  - **ListInstancesDetails**
    - 响应参数变更
      - `+ instances.backup_used_space`

### HuaweiCloud SDK MRS

- _新增特性_
  - 支持接口`ListDataConnector`、`CreateDataConnector`、`UpdateDataConnector`、`DeleteDataConnector`
- _解决问题_
  - 无
- _特性变更_
  - **CreateCluster**
    - 请求参数变更
      - `+ charge_info.period_type`
      - `+ charge_info.period_num`
      - `+ charge_info.is_auto_pay`
  - **RunJobFlow**
    - 请求参数变更
      - `+ charge_info.period_type`
      - `+ charge_info.period_num`
      - `+ charge_info.is_auto_pay`

### HuaweiCloud SDK RDS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListDatastores**
    - 请求参数变更
      - `+ database_name: enum value [MariaDB]`
  - **ListConfigurations**
    - 响应参数变更
      - `+ configurations.datastore_name: enum value [mariadb]`
  - **CreateConfiguration**
    - 请求参数变更
      - `+ datastore.type: enum value [MariaDB]`
    - 响应参数变更
      - `+ configuration.datastore_name: enum value [mariadb]`
  - **ShowConfiguration**
    - 响应参数变更
      - `+ datastore_name: enum value [mariadb]`
  - **ShowInstanceConfiguration**
    - 响应参数变更
      - `+ datastore_name: enum value [mariadb]`
  - **ListFlavors**
    - 请求参数变更
      - `+ database_name: enum value [MariaDB]`
  - **ListStorageTypes**
    - 请求参数变更
      - `+ database_name: enum value [MariaDB]`
  - **ListInstances**
    - 请求参数变更
      - `+ datastore_type: enum value [MariaDB]`
    - 响应参数变更
      - `+ instances.datastore.type: enum value [MariaDB]`
  - **CreateInstance**
    - 请求参数变更
      - `+ datastore.type: enum value [MariaDB]`
    - 响应参数变更
      - `+ instance.datastore.type: enum value [MariaDB]`
  - **CreateRestoreInstance**
    - 请求参数变更
      - `+ datastore.type: enum value [MariaDB]`
    - 响应参数变更
      - `+ instance.datastore.type: enum value [MariaDB]`
  - **ListBackups**
    - 响应参数变更
      - `+ backups.datastore.type: enum value [MariaDB]`
  - **ListOffSiteBackups**
    - 响应参数变更
      - `+ backups.datastore.type: enum value [MariaDB]`
  - **ListOffSiteInstances**
    - 响应参数变更
      - `+ offsite_backup_instances.datastore.type: enum value [MariaDB]`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListMessageTrace**
    - 请求参数变更
      - `* msg_id: optional -> required`
  - **ListMessages**
    - 请求参数变更
      - `+ key`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPorts**
    - 请求参数变更
      - `+ enable_efi`
    - 响应参数变更
      - `+ ports.enable_efi`
  - **CreatePort**
    - 响应参数变更
      - `+ port.enable_efi`
  - **ShowPort**
    - 响应参数变更
      - `+ port.enable_efi`
  - **UpdatePort**
    - 响应参数变更
      - `+ port.enable_efi`

# 3.1.47 2023-07-27

### HuaweiCloud SDK BMS

- _新增特性_
  - 支持裸机金属服务器
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ELB

- _新增特性_
  - 支持弹性负载均衡服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DRS

- _新增特性_
  - 支持以下接口：
    - `DownloadBatchCreateTemplate`
    - `ImportBatchCreateJobs`
    - `CopyJob`
    - `ShowMetering`
    - `ShowDirtyData`
    - `ShowComparePolicy`
    - `ShowHealthCompareJobList`
    - `ShowProgressData`
    - `ShowObjectMapping`
    - `ShowActions`
    - `ValidateJobName`
    - `ShowEnterpriseProject`
- _解决问题_
  - 无
- _特性变更_
  - **DownloadDbObjectTemplate**
    - 请求参数变更
      - `+ file_import_db_level`
  - **UploadDbObjectTemplate**
    - 请求参数变更
      - `+ file_import_db_level`
  - **ListAsyncJobs**
    - 响应参数变更
      - `+ jobs.status: enum value [AUTO_PARAM_VALIDATE_SUCCESS,COMMIT_SUCCESS]`
      - `- jobs.status: enum value [ASYNC_JOB_CREATING,ASYNC_JOB_CREATE_FAILED,ASYNC_JOB_COMPLETED]`
  - **CreateJob**
    - 请求参数变更
      - `+ job.node_info.base_info`
    - 响应参数变更
      - `+ is_clone_job`
      - `+ create_time`
      - `+ name`
      - `+ id`
      - `+ status`
      - `+ job.is_clone_job`
  - **BatchCreateJobsAsync**
    - 请求参数变更
      - `+ jobs.node_info.base_info`
  - **ListAsyncJobDetail**
    - 响应参数变更
      - `+ jobs.support_import_file_resp`
      - `+ jobs.instance_features`
      - `+ jobs.task_version`
      - `+ jobs.node_info.base_info`
  - **UpdateBatchAsyncJobs**
    - 请求参数变更
      - `+ jobs.type: enum value [policy]`
      - `- jobs.type: enum value [policy_config]`
      - `+ jobs.params.node_info.base_info`
  - **ShowJobDetail**
    - 请求参数变更
      - `+ type: enum value [file]`
    - 响应参数变更
      - `+ job.support_import_file_resp`
      - `+ job.instance_features`
      - `+ job.task_version`
      - `+ job.node_info.base_info`
  - **UpdateJob**
    - 请求参数变更
      - `+ job.type: enum value [policy]`
      - `- job.type: enum value [policy_config]`
      - `+ job.params.node_info.base_info`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **AttachShareBandwidth**
    - 响应参数变更
      - `+ publicip.vnic.vtep`
      - `+ publicip.vnic.vni`
      - `+ publicip.vnic.port_profile`
  - **DetachShareBandwidth**
    - 响应参数变更
      - `+ publicip.vnic.vtep`
      - `+ publicip.vnic.vni`
      - `+ publicip.vnic.port_profile`
  - **EnableNat64**
    - 响应参数变更
      - `+ publicip.vnic.vtep`
      - `+ publicip.vnic.vni`
      - `+ publicip.vnic.port_profile`
  - **DisableNat64**
    - 响应参数变更
      - `+ publicip.vnic.vtep`
      - `+ publicip.vnic.vni`
      - `+ publicip.vnic.port_profile`
  - **AttachBatchPublicIp**
    - 响应参数变更
      - `+ publicips.publicip.vnic.vtep`
      - `+ publicips.publicip.vnic.vni`
      - `+ publicips.publicip.vnic.port_profile`
  - **DetachBatchPublicIp**
    - 响应参数变更
      - `+ publicips.publicip.vnic.vtep`
      - `+ publicips.publicip.vnic.vni`
      - `+ publicips.publicip.vnic.port_profile`

### HuaweiCloud SDK ER

- _新增特性_
  - 支持以下接口：
    - `BatchCreateResourceTags`
    - `ShowQuotas`
    - `ListFlowLogs`
    - `CreateFlowLog`
    - `ShowFlowLog`
    - `UpdateFlowLog`
    - `DeleteFlowLog`
    - `EnableFlowLog`
    - `DisableFlowLog`
- _解决问题_
  - 无
- _特性变更_
  - **ListProjectTags**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
    - 响应参数变更
      - `+ tags`
  - **DeleteResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
  - **ShowResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
    - 响应参数变更
      - `+ tags`
  - **CreateResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
  - **ListEnterpriseRouters**
    - 请求参数变更
      - `+ owned_by_self`
  - **ShowStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **UpdateStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **ListStaticRoutes**
    - 响应参数变更
      - `+ routes.attachments.priority`
  - **CreateStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **ListEffectiveRoutes**
    - 响应参数变更
      - `+ routes.address_group_id`
      - `+ routes.next_hops.priority`

### HuaweiCloud SDK GA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListRegions**
    - 响应参数变更
      - `+ regions`
      - `- area_regions`

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持接口`ShowInstanceBiactiveRegions`
- _解决问题_
  - 无
- _特性变更_
  - **ListConfigurations**
    - 响应参数变更
      - `+ quota`
      - `+ configurations.mode`
  - **ListConfigurationTemplates**
    - 响应参数变更
      - `+ quota`
      - `+ configurations.mode`
  - **ShowInstanceConfiguration**
    - 响应参数变更
      - `+ mode`
      - `+ id`
  - **ListConfigurationDatastores**
    - 响应参数变更
      - `+ datastores.mode`
  - **ShowQuotas**
    - 请求参数变更
      - `+ datastore_type`
      - `+ mode`
  - **ListInstances**
    - 响应参数变更
      - `+ instances.datastore.whole_version`

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 支持接口`DownloadBackup`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持以下接口：
    - `ListDeviceTunnels`
    - `AddTunnel`
    - `ShowDeviceTunnel`
    - `CloseDeviceTunnel`
    - `DeleteDeviceTunnel`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Kafka

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateInstanceByEngine**
    - 请求参数变更
      - `+ disk_encrypted_enable`
      - `+ disk_encrypted_key`

### HuaweiCloud SDK LTS

- _新增特性_
  - 支持接口`UpdateLogStream`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateLogGroup**
    - 请求参数变更
      - `+ tags`
  - **CreateLogGroup**
    - 请求参数变更
      - `+ tags`
  - **CreateLogStream**
    - 请求参数变更
      - `+ enterprise_project_name`
      - `+ ttl_in_days`
      - `+ tags`
      - `+ log_stream_name: enum value [lts-stream-13ci]`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowInstanceExtendProductInfo**
    - 响应参数变更
      - `+ monthly`
      - `+ hourly`
      - `- engine`
      - `- versions`
      - `- products`

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ValidateConsumedMessage**
    - 请求参数变更
      - `+ engine: enum value [reliability]`
  - **ListInstances**
    - 请求参数变更
      - `+ engine: enum value [reliability]`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowConfigSetting**
    - 响应参数变更
      - `* configurations: string -> list<ConfigBody>`

# 3.1.46 2023-07-20

### HuaweiCloud SDK LTS

- _新增特性_
  - 支持云日志服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DLI

- _新增特性_
  - 支持数据湖探索服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforopenGauss

- _新增特性_
  - 支持云数据库 GaussDB服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDB

- _新增特性_
  - 支持云数据库 GaussDB服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK GaussDBforNoSQL

- _新增特性_
  - 支持云数据库 GaussDB NoSQL服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RDS

- _新增特性_
  - 支持云数据库服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DDS

- _新增特性_
  - 支持文档数据库服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CloudRTC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateIndividualStreamJob**
    - 请求参数变更
      - `- publish_param`
  - **UpdateIndividualStreamJob**
    - 请求参数变更
      - `- publish_param`
  - **CreateMixJob**
    - 请求参数变更
      - `- publish_param`

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持以下接口：
    - `AttachShareBandwidth`
    - `AttachBatchPublicIp`
    - `DetachShareBandwidth`
    - `DetachBatchPublicIp`
    - `EnableNat64`
    - `DisableNat64`
    - `ListBandwidth`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ER

- _新增特性_
  - 支持以下接口：
    - `BatchCreateResourceTags`
    - `ShowQuotas`
    - `ListFlowLogs`
    - `CreateFlowLog`
    - `ShowFlowLog`
    - `UpdateFlowLog`
    - `DeleteFlowLog`
    - `EnableFlowLog`
    - `DisableFlowLog`
- _解决问题_
  - 无
- _特性变更_
  - **ListProjectTags**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
    - 响应参数变更
      - `+ tags`
  - **DeleteResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
  - **ShowResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
    - 响应参数变更
      - `+ tags`
  - **CreateResourceTag**
    - 请求参数变更
      - `+ resource_type: enum value [ecn-attachment,connect-attachment,cfw-attachment]`
  - **ListEnterpriseRouters**
    - 请求参数变更
      - `+ owned_by_self`
  - **ShowStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **UpdateStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **ListStaticRoutes**
    - 响应参数变更
      - `+ routes.attachments.priority`
  - **CreateStaticRoute**
    - 响应参数变更
      - `+ route.attachments.priority`
  - **ListEffectiveRoutes**
    - 响应参数变更
      - `+ routes.address_group_id`
      - `+ routes.next_hops.priority`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`DeleteBatchTask`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持接口`ListTopicPartitions`、`ListTopicProducers`
- _解决问题_
  - 无
- _特性变更_
  - **ListProducts**
    - 请求参数变更
      - `+ engine: enum value [kafka]`
  - **UpdateInstanceTopic**
    - 请求参数变更
      - `+ topics.topic_other_configs`
      - `+ topics.topic_desc`
  - **CreateInstanceTopic**
    - 请求参数变更
      - `+ topic_other_configs`
      - `+ topic_desc`
    - 响应参数变更
      - `+ id`
  - **ListInstanceTopics**
    - 请求参数变更
      - `- offset`
      - `- limit`
    - 响应参数变更
      - `+ topics.topic_other_configs`
      - `+ topics.topic_desc`
      - `+ topics.created_at`
  - **ListInstances**
    - 请求参数变更
      - `+ engine: enum value [kafka]`
  - **ResizeEngineInstance**
    - 请求参数变更
      - `+ engine: enum value [kafka]`

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowInstanceExtendProductInfo**
    - 请求参数变更
      - `+ engine: enum value [rabbitmq]`
    - 响应参数变更
      - `+ engine`
      - `+ versions`
      - `+ products`
      - `- monthly`
      - `- hourly`
  - **ListProducts**
    - 请求参数变更
      - `+ engine: enum value [rabbitmq]`
  - **ResizeEngineInstance**
    - 请求参数变更
      - `+ engine: enum value [rabbitmq]`
  - **ShowEngineInstanceExtendProductInfo**
    - 请求参数变更
      - `+ engine: enum value [rabbitmq]`

# 3.1.45 2023-07-13

### HuaweiCloud SDK Kafka

- _新增特性_
  - 支持分布式消息服务 Kafka
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RabbitMQ

- _新增特性_
  - 支持分布式消息服务 RabbitMQ
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RocketMQ

- _新增特性_
  - 支持分布式消息服务 RocketMQ
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AS

- _新增特性_
  - 支持接口`ListGroupScheduledTasks`、`CreateGroupScheduledTask`、`UpdateGroupScheduledTask`、`DeleteGroupScheduledTask`
- _解决问题_
  - 无
- _特性变更_
  - **CreateScalingPolicy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **UpdateScalingPolicy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **ShowScalingPolicy**
    - 响应参数变更
      - `+ scaling_policy.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scaling_policy.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **ListScalingPolicies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **CreateScalingV2Policy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **ListAllScalingV2Policies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **UpdateScalingV2Policy**
    - 请求参数变更
      - `+ scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **ShowScalingV2Policy**
    - 响应参数变更
      - `+ scaling_policy.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scaling_policy.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`
  - **ListScalingV2Policies**
    - 响应参数变更
      - `+ scaling_policies.scheduled_policy.recurrence_type: enum value [DAILY,WEEKLY,MONTHLY]`
      - `- scaling_policies.scheduled_policy.recurrence_type: enum value [Daily,Weekly,Monthly]`

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **PushTranscriberJobs**
    - 请求参数变更
      - `+ Enterprise-Project-Id`

### HuaweiCloud SDK VPC

- _新增特性_
  - 支持以下接口：
    - `ListApiVersion`
    - `NeutronListPorts`
    - `NeutronCreatePort`
    - `NeutronShowPort`
    - `NeutronUpdatePort`
    - `NeutronDeletePort`
    - `NeutronListNetworks`
    - `NeutronCreateNetwork`
    - `NeutronShowNetwork`
    - `NeutronUpdateNetwork`
    - `NeutronDeleteNetwork`
    - `NeutronListSubnets`
    - `NeutronCreateSubnet`
    - `NeutronShowSubnet`
    - `NeutronUpdateSubnet`
    - `NeutronDeleteSubnet`
    - `NeutronListRouters`
    - `NeutronCreateRouter`
    - `NeutronShowRouter`
    - `NeutronUpdateRouter`
    - `NeutronDeleteRouter`
    - `NeutronAddRouterInterface`
    - `NeutronRemoveRouterInterface`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.44 2023-07-06

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainDetailByName**
    - 响应参数变更
      - `+ domain.sources.weight`
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.business_type`
      - `+ configs.service_area`
      - `+ configs.sources.weight`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `+ configs.business_type`
      - `+ configs.service_area`
      - `+ configs.sources.weight`

### HuaweiCloud SDK EVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateVolume**
    - 请求参数变更
      - `+ volume.iops`
      - `+ volume.throughput`
      - `+ volume.volume_type: enum value [GPSSD2,ESSD2]`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RunCreateVideoModerationJob**
    - 请求参数变更
      - `+ data.language`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListSecurityGroupRules**
    - 请求参数变更
      - `+ remote_ip_prefix`

# 3.1.43 2023-06-29

### HuaweiCloud SDK IdentityCenter

- _新增特性_
  - 支持IAM 身份中心服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK WorkspaceApp

- _新增特性_
  - 支持云应用服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Config

- _新增特性_
  - 支持配置审计服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`ListTemplateVersions`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ExecuteClusterSwitchover`、`ShowJobInfo`
- _解决问题_
  - 无
- _特性变更_
  - **ListConfigTemplates**
    - 响应参数变更
      - `+ config_templates.created_at`
  - **CreateInstance**
    - 请求参数变更
      - `+ template_id`

### HuaweiCloud SDK GA

- _新增特性_
  - 支持以下接口：
    - `ListIpGroups`
    - `CreateIpGroup`
    - `ShowIpGroup`
    - `UpdateIpGroup`
    - `DeleteIpGroup`
    - `AddIpGroupIp`
    - `RemoveIpGroupIp`
    - `AssociateListener`
    - `DisassociateListener`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateCommand**
    - 响应参数变更
      - `+ error_msg`
      - `+ error_code`
  - **ListProperties**
    - 响应参数变更
      - `+ error_msg`
      - `+ error_code`
  - **UpdateProperties**
    - 响应参数变更
      - `+ error_msg`
      - `+ error_code`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAddressGroup**
    - 响应参数变更
      - `+ address_group.tags`
  - **UpdateAddressGroup**
    - 响应参数变更
      - `+ address_group.tags`
  - **ListAddressGroup**
    - 响应参数变更
      - `+ address_groups.tags`
  - **CreateAddressGroup**
    - 响应参数变更
      - `+ address_group.tags`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **AddOrRemoveServicePermissions**
    - 请求参数变更
      - `+ permission_type`
    - 响应参数变更
      - `+ permission_type`
  - **UpdateEndpointService**
    - 响应参数变更
      - `- cidr_type`
  - **ListServicePermissionsDetails**
    - 响应参数变更
      - `+ permissions.permission_type`
  - **BatchAddEndpointServicePermissions**
    - 请求参数变更
      - `+ permission_type`
    - 响应参数变更
      - `+ permissions.permission_type`
  - **BatchRemoveEndpointServicePermissions**
    - 响应参数变更
      - `+ permissions.permission_type`
  - **UpdateEndpointServicePermissionDesc**
    - 响应参数变更
      - `+ permissions.permission_type`
  - **CreateEndpointService**
    - 响应参数变更
      - `- cidr_type`

# 3.1.42 2023-06-21

### HuaweiCloud SDK CloudRTC

- _新增特性_
  - 支持华为云实时音视频服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DNS

- _新增特性_
  - 支持接口`ShowDomainQuota`
- _解决问题_
  - 无
- _特性变更_
  - **ShowRecordSetWithLine**
    - 响应参数变更
      - `+ bundle`
  - **SetRecordSetsStatus**
    - 响应参数变更
      - `+ bundle`
  - **BatchUpdateRecordSetWithLine**
    - 响应参数变更
      - `+ bundle`
      - `+ recordsets.bundle`
  - **BatchDeleteRecordSetWithLine**
    - 响应参数变更
      - `+ bundle`
      - `+ recordsets.bundle`
  - **CreateRecordSetWithBatchLines**
    - 响应参数变更
      - `+ bundle`
      - `+ recordsets.bundle`

### HuaweiCloud SDK DWS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListAvailableDisasterClusters**
    - 请求参数变更
      - `* primary_cluster_id: optional -> required`
      - `* standby_az_code: optional -> required`

# 3.1.41 2023-06-15

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持以下接口：
    - `ShowDatabaseAuthority`
    - `UpdateDatabaseAuthority`
    - `SyncIamUsers`
    - `ListDatabaseUsers`
    - `ShowDatabaseUser`
    - `UpdateDatabaseUserInfo`
    - `ShowDisasterProgress`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateAlarmSub**
    - 请求参数变更
      - `* enable: string -> int32`
    - 响应参数变更
      - `* enable: string -> int32`
  - **DeleteAlarmSub**
    - 响应参数变更
      - `* enable: string -> int32`
  - **ShowDisasterDetail**
    - 响应参数变更
      - `+ disaster_recovery`
      - `- start_time`
      - `- dr_type`
      - `- create_time`
      - `- name`
      - `- standby_cluster`
      - `- id`
      - `- dr_sync_period`
      - `- status`
      - `- primary_cluster`
  - **CreateAlarmSub**
    - 请求参数变更
      - `* enable: string -> int32`
    - 响应参数变更
      - `* enable: string -> int32`
  - **ListAlarmSubs**
    - 响应参数变更
      - `* alarm_subscriptions.enable: string -> int32`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateBatchTask**
    - 响应参数变更
      - `- task_progress.device_in_progress`
      - `- task_progress.rejected`
  - **ListBatchTasks**
    - 响应参数变更
      - `- batchtasks.task_progress.device_in_progress`
      - `- batchtasks.task_progress.rejected`
  - **ShowBatchTask**
    - 响应参数变更
      - `- batchtask.task_progress.device_in_progress`
      - `- batchtask.task_progress.rejected`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeGeneralText**
    - 请求参数变更
      - `+ single_orientation_mode`

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowVocabularies**
    - 请求参数变更
      - `+ offset`
      - `+ limit`

# 3.1.40 2023-06-08

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpdateIndirectPartnerAccount**
    - 请求参数变更
      - `* amount: double -> bigdecimal`
  - **ListCustomerBillsMonthlyBreakDown**
    - 响应参数变更
      - `* details.past_months_amortized_amount: double -> bigdecimal`
      - `* details.amortized_cash_amount: double -> bigdecimal`
  - **ListIssuedCouponQuotas**
    - 响应参数变更
      - `* quotas.balance: double -> bigdecimal`

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListRecordSetsByZone**
    - 请求参数变更
      - `+ search_mode`
  - **CreateRecordSet**
    - 请求参数变更
      - `* body: object<CreateRecordSetReq> -> object<CreateRecordSetRequestBody>`
  - **CreateRecordSetWithLine**
    - 请求参数变更
      - `* body: object<CreateRecordSetWithLineReq> -> object<CreateRecordSetWithLineRequestBody>`
  - **ListPublicZones**
    - 请求参数变更
      - `+ search_mode`
  - **ListPrivateZones**
    - 请求参数变更
      - `+ search_mode`
  - **ListRecordSets**
    - 请求参数变更
      - `+ search_mode`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`ChangeServerChargeMode`
- _解决问题_
  - 无
- _特性变更_
  - **CreateServers**
    - 请求参数变更
      - `+ server.nics.allowed_address_pairs`
  - **CreatePostPaidServers**
    - 请求参数变更
      - `+ server.nics.allowed_address_pairs`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`RetryBatchTask`、`StopBatchTask`
- _解决问题_
  - 无
- _特性变更_
  - **CreateBatchTask**
    - 响应参数变更
      - `+ task_progress.removed`
      - `+ task_progress.device_in_progress`
      - `+ task_progress.rejected`
  - **ListBatchTasks**
    - 响应参数变更
      - `+ batchtasks.task_progress.removed`
      - `+ batchtasks.task_progress.device_in_progress`
      - `+ batchtasks.task_progress.rejected`
  - **ShowBatchTask**
    - 请求参数变更
      - `+ task_detail_status`
      - `+ target`
    - 响应参数变更
      - `+ batchtask.task_progress.removed`
      - `+ batchtask.task_progress.device_in_progress`
      - `+ batchtask.task_progress.rejected`

### HuaweiCloud SDK TMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListResource**
    - 响应参数变更
      - `+ resources.tags`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowAddressGroup**
    - 响应参数变更
      - `+ address_group.enterprise_project_id`
  - **UpdateAddressGroup**
    - 响应参数变更
      - `+ address_group.enterprise_project_id`
  - **ListAddressGroup**
    - 请求参数变更
      - `+ enterprise_project_id`
    - 响应参数变更
      - `+ address_groups.enterprise_project_id`
  - **CreateAddressGroup**
    - 请求参数变更
      - `+ address_group.enterprise_project_id`
    - 响应参数变更
      - `+ address_group.enterprise_project_id`

# 3.1.39 2023-06-01

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListMultiAccountTransferCoupons`、`ListMultiAccountRetrieveCoupons`、`ClaimEnterpriseMultiAccountCoupon`、`ReclaimEnterpriseMultiAccountCoupon`
- _解决问题_
  - 无
- _特性变更_
  - **UpdateCustomerAccountAmount**
    - 请求参数变更
      - `* amount: double -> bigdecimal`
  - **ReclaimIndirectPartnerAccount**
    - 请求参数变更
      - `* amount: double -> bigdecimal`
  - **ReclaimToPartnerAccount**
    - 请求参数变更
      - `* amount: double -> bigdecimal`
  - **ListPartnerCouponsRecord**
    - 响应参数变更
      - `* records.operation_amount: double -> bigdecimal`
  - **ListCustomersBalancesDetail**
    - 响应参数变更
      - `* customer_balances.debt_amount: double -> bigdecimal`
      - `* customer_balances.amount: double -> bigdecimal`
  - **ShowCustomerMonthlySum**
    - 响应参数变更
      - `* consume_amount: double -> bigdecimal`
      - `* debt_amount: double -> bigdecimal`
      - `* coupon_amount: double -> bigdecimal`
      - `* flexipurchase_coupon_amount: double -> bigdecimal`
      - `* stored_value_card_amount: double -> bigdecimal`
      - `* cash_amount: double -> bigdecimal`
      - `* credit_amount: double -> bigdecimal`
      - `* writeoff_amount: double -> bigdecimal`
      - `* bill_sums.official_amount: double -> bigdecimal`
      - `* bill_sums.official_discount_amount: double -> bigdecimal`
      - `* bill_sums.truncated_amount: double -> bigdecimal`
      - `* bill_sums.consume_amount: double -> bigdecimal`
      - `* bill_sums.coupon_amount: double -> bigdecimal`
      - `* bill_sums.flexipurchase_coupon_amount: double -> bigdecimal`
      - `* bill_sums.stored_value_card_amount: double -> bigdecimal`
      - `* bill_sums.debt_amount: double -> bigdecimal`
      - `* bill_sums.writeoff_amount: double -> bigdecimal`
      - `* bill_sums.cash_amount: double -> bigdecimal`
      - `* bill_sums.credit_amount: double -> bigdecimal`
  - **UpdateCouponQuotas**
    - 请求参数变更
      - `* quota_amount: double -> bigdecimal`
  - **ListCouponQuotasRecords**
    - 响应参数变更
      - `* records.amount: double -> bigdecimal`
  - **ReclaimCouponQuotas**
    - 响应参数变更
      - `* simple_quota_infos.quota_balance: double -> bigdecimal`
  - **ShowCustomerAccountBalances**
    - 响应参数变更
      - `* debt_amount: double -> bigdecimal`
      - `* account_balances.amount: double -> bigdecimal`
      - `* account_balances.designated_amount: double -> bigdecimal`
      - `* account_balances.credit_amount: double -> bigdecimal`
  - **ListFreeResourceUsages**
    - 响应参数变更
      - `* free_resources.amount: double -> bigdecimal`
      - `* free_resources.original_amount: double -> bigdecimal`
  - **ListIssuedPartnerCoupons**
    - 响应参数变更
      - `* user_coupons.face_value: double -> bigdecimal`
      - `* user_coupons.balance: double -> bigdecimal`
  - **ListOnDemandResourceRatings**
    - 响应参数变更
      - `* amount: double -> bigdecimal`
      - `* discount_amount: double -> bigdecimal`
      - `* official_website_amount: double -> bigdecimal`
      - `* product_rating_results.amount: double -> bigdecimal`
      - `* product_rating_results.discount_amount: double -> bigdecimal`
      - `* product_rating_results.official_website_amount: double -> bigdecimal`
  - **ListSubcustomerMonthlyBills**
    - 响应参数变更
      - `* bill_sums.amount: double -> bigdecimal`
      - `* bill_sums.debt_amount: double -> bigdecimal`
      - `* bill_sums.adjustment_amount: double -> bigdecimal`
      - `* bill_sums.discount_amount: double -> bigdecimal`
      - `* bill_sums.account_details.amount: double -> bigdecimal`
  - **ListCustomerBillsMonthlyBreakDown**
    - 响应参数变更
      - `* details.usage: double -> bigdecimal`
      - `* details.free_resource_usage: double -> bigdecimal`
      - `* details.ri_usage: double -> bigdecimal`
      - `* details.consume_amount: double -> bigdecimal`
      - `* details.current_month_amortized_amount: double -> bigdecimal`
      - `* details.future_months_amortized_amount: double -> bigdecimal`
      - `* details.amortized_credit_amount: double -> bigdecimal`
      - `* details.amortized_coupon_amount: double -> bigdecimal`
      - `* details.amortized_flexipurchase_coupon_amount: double -> bigdecimal`
      - `* details.amortized_stored_value_card_amount: double -> bigdecimal`
      - `* details.amortized_bonus_amount: double -> bigdecimal`
  - **ListQuotaCoupons**
    - 响应参数变更
      - `* quotas.quota_value: double -> bigdecimal`
      - `* quotas.balance: double -> bigdecimal`
  - **ListIssuedCouponQuotas**
    - 响应参数变更
      - `* quotas.quota_value: double -> bigdecimal`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListFreeResourceUsages**
    - 响应参数变更
      - `* free_resources.amount: double -> bigdecimal`
      - `* free_resources.original_amount: double -> bigdecimal`
  - **ListOnDemandResourceRatings**
    - 响应参数变更
      - `* amount: double -> bigdecimal`
      - `* discount_amount: double -> bigdecimal`
      - `* official_website_amount: double -> bigdecimal`
      - `* product_rating_results.amount: double -> bigdecimal`
      - `* product_rating_results.discount_amount: double -> bigdecimal`
      - `* product_rating_results.official_website_amount: double -> bigdecimal`

### HuaweiCloud SDK CBR

- _新增特性_
  - 支持接口`ShowSummary`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowLogs**
    - 请求参数变更
      - `+ start_time`
      - `+ end_time`
      - `- query_date`
  - **ShowDomainFullConfig**
    - 请求参数变更
      - `+ show_special_configs`
    - 响应参数变更
      - `- configs.error_code_cache.code: enum value [400,403,404,405,414,500,501,502,503,504]`
      - `+ configs.flexible_origin.back_sources.http_port`
      - `+ configs.flexible_origin.back_sources.https_port`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `- configs.error_code_cache.code: enum value [400,403,404,405,414,500,501,502,503,504]`
      - `+ configs.flexible_origin.back_sources.http_port`
      - `+ configs.flexible_origin.back_sources.https_port`

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RestorePtrRecord**
    - 请求参数变更
      - `* ptrdname: string -> object`
  - **ShowRecordSet**
    - 响应参数变更
      - `+ bundle`
  - **CreateEipRecordSet**
    - 响应参数变更
      - `+ enterprise_project_id`
  - **ShowPtrRecordSet**
    - 响应参数变更
      - `+ enterprise_project_id`
  - **ShowResourceTag**
    - 响应参数变更
      - `+ enterpriseProjectOrDefault`
  - **ListPrivateZones**
    - 请求参数变更
      - `* type: required -> optional`

### HuaweiCloud SDK SMN

- _新增特性_
  - 支持以下接口：
    - `UpdateSubscription`
    - `ListLogtank`
    - `CreateLogtank`
    - `UpdateLogtank`
    - `DeleteLogtank`
- _解决问题_
  - 无
- _特性变更_
  - **ListTopicDetails**
    - 响应参数变更
      - `+ topic_id`
  - **ListTopics**
    - 请求参数变更
      - `+ topic_id`
    - 响应参数变更
      - `+ topics.topic_id`
  - **ListTopicAttributes**
    - 响应参数变更
      - `+ attributes.access_policy`
      - `+ attributes.introduction`
      - `- attributes.Version`
      - `- attributes.Id`
      - `- attributes.Statement`
  - **AddSubscription**
    - 请求参数变更
      - `+ extension`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateAssetByFileUpload**
    - 请求参数变更
      - `+ review.interval`
      - `+ review.politics`
      - `+ review.terrorism`
      - `+ review.porn`
  - **PublishAssetFromObs**
    - 请求参数变更
      - `+ review.interval`
      - `+ review.politics`
      - `+ review.terrorism`
      - `+ review.porn`
  - **CreateAssetReviewTask**
    - 请求参数变更
      - `+ review.interval`
      - `+ review.politics`
      - `+ review.terrorism`
      - `+ review.porn`
    - 响应参数变更
      - `+ review.interval`
      - `+ review.politics`
      - `+ review.terrorism`
      - `+ review.porn`
  - **UploadMetaDataByUrl**
    - 请求参数变更
      - `+ upload_metadatas.review.interval`
      - `+ upload_metadatas.review.politics`
      - `+ upload_metadatas.review.terrorism`
      - `+ upload_metadatas.review.porn`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateVpcPeering**
    - 请求参数变更
      - `+ peering.description`

# 3.1.38 2023-05-25

### HuaweiCloud SDK CBR

- _新增特性_
  - 支持以下接口：
    - `ImportCheckpoint`
    - `ListExternalVault`
    - `BatchUpdateVault`
    - `SetVaultResource`
    - `ShowMetadata`
    - `CheckAgent`
    - `ListProjects`
    - `ListDomainProjects`
    - `ShowDomain`
    - `ShowMigrateStatus`
    - `MigrateDomain`
    - `ShowStorageUsage`
    - `UpdateOrder`
    - `CreatePostPaidVault`
    - `UpdateBackup`
- _解决问题_
  - 无
- _特性变更_
  - **CreateVault**
    - 请求参数变更
      - `+ vault.threshold`
      - `+ vault.smn_notify`
      - `+ vault.backup_name_prefix`
      - `+ vault.demand_billing`
    - 响应参数变更
      - `+ vault.backup_name_prefix`
      - `+ vault.demand_billing`
      - `+ vault.cbc_delete_count`
      - `+ vault.frozen`

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainDetailByName**
    - 响应参数变更
      - `+ domain.domain_name`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListMigrationTask**
    - 响应参数变更
      - `- task_name`
      - `- target_instance_id`
      - `- target_instance_address`
      - `- target_instance_name`
      - `- migrate_type`
      - `- created_at`
      - `- source_instance_id`
      - `- task_id`
      - `- data_source`
      - `- migration_method`
      - `- source_instance_name`
      - `- status`
  - **ListConfigTemplates**
    - 响应参数变更
      - `* template_num: number -> integer`
  - **ListInstances**
    - 响应参数变更
      - `+ instances.updated_at`
  - **ListBackgroundTask**
    - 响应参数变更
      - `- updated_at`
      - `- created_at`
      - `- status`
  - **ListFlavors**
    - 响应参数变更
      - `+ flavors.flavors_available_zones.unit`
      - `+ flavors.flavors_available_zones.available_zones`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`ListFlavorSellPolicies`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListPublicipsByTags**
    - 响应参数变更
      - `+ resources.resource_detail`
      - `- resources.resouce_detail`
  - **AddPublicipsIntoSharedBandwidth**
    - 响应参数变更
      - `+ bandwidth.enable_bandwidth_rules`
      - `+ bandwidth.rule_quota`
      - `+ bandwidth.bandwidth_rules`

### HuaweiCloud SDK IAM

- _新增特性_
  - 支持接口`AssociateRoleToAgencyOnEnterpriseProject`、`RevokeRoleFromAgencyOnEnterpriseProject`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`BatchShowIpBelongs`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK RMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowPolicyAssignment**
    - 响应参数变更
      - `+ created_by`
  - **UpdatePolicyAssignment**
    - 响应参数变更
      - `+ created_by`
  - **ShowAggregatePolicyAssignmentDetail**
    - 响应参数变更
      - `+ created_by`
  - **CreatePolicyAssignments**
    - 响应参数变更
      - `+ created_by`
  - **ListPolicyAssignments**
    - 响应参数变更
      - `+ created_by`
      - `+ value.created_by`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateVpc**
    - 请求参数变更
      - `+ vpc.tags`
  - **CreateSubnet**
    - 请求参数变更
      - `+ subnet.tags`
    - **ShowAddressGroup**
    - 响应参数变更
      - `+ address_group.max_capacity`
      - `+ address_group.status`
      - `+ address_group.status_message`
  - **UpdateAddressGroup**
    - 请求参数变更
      - `+ address_group.max_capacity`
    - 响应参数变更
      - `+ address_group.max_capacity`
      - `+ address_group.status`
      - `+ address_group.status_message`
  - **ListAddressGroup**
    - 响应参数变更
      - `+ address_groups.max_capacity`
      - `+ address_groups.status`
      - `+ address_groups.status_message`
  - **CreateAddressGroup**
    - 请求参数变更
      - `+ address_group.max_capacity`
    - 响应参数变更
      - `+ address_group.max_capacity`
      - `+ address_group.status`
      - `+ address_group.status_message`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListServiceDescribeDetails**
    - 响应参数变更
      - `+ enable_policy`
  - **ListServiceDetails**
    - 响应参数变更
      - `- vip_port_id`
  - **UpdateEndpointService**
    - 请求参数变更
      - `- vip_port_id`
    - 响应参数变更
      - `- vip_port_id`
  - **ListServicePublicDetails**
    - 响应参数变更
      - `+ endpoint_services.enable_policy`
  - **CreateEndpointService**
    - 请求参数变更
      - `- vip_port_id`
    - 响应参数变更
      - `- vip_port_id`
  - **ListEndpointService**
    - 响应参数变更
      - `- endpoint_services.vip_port_id`

# 3.1.37 2023-05-18

### HuaweiCloud SDK CBR

- _新增特性_
  - 支持以下接口：
    - `AddAgentPath`
    - `ShowAgent`
    - `UpdateAgent`
    - `UnregisterAgent`
    - `ListAgent`
    - `RegisterAgent`
    - `RemoveAgentPath`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRefreshTasks**
    - 请求参数变更
      - `* refresh_task.mode: boolean -> string`
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.flexible_origin`
      - `+ configs.slice_etag_status`
      - `+ configs.origin_receive_timeout`
      - `+ configs.remote_auth`
      - `+ configs.websocket`
      - `+ configs.video_seek`
      - `+ configs.request_limit_rules`
      - `+ configs.url_auth.sign_method`
      - `+ configs.url_auth.match_type`
      - `+ configs.url_auth.key`
      - `+ configs.url_auth.backup_key`
      - `+ configs.url_auth.sign_arg`
      - `+ configs.https.expire_time`
      - `+ configs.https.certificate_type`
      - `+ configs.https.ocsp_stapling_status`
      - `+ configs.sources.obs_bucket_type`
      - `+ configs.compress.file_type`
      - `+ configs.user_agent_filter.ua_list`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `+ configs.flexible_origin`
      - `+ configs.slice_etag_status`
      - `+ configs.origin_receive_timeout`
      - `+ configs.remote_auth`
      - `+ configs.websocket`
      - `+ configs.video_seek`
      - `+ configs.request_limit_rules`
      - `+ configs.url_auth.sign_method`
      - `+ configs.url_auth.match_type`
      - `+ configs.url_auth.backup_key`
      - `+ configs.url_auth.sign_arg`
      - `+ configs.https.certificate_type`
      - `+ configs.https.ocsp_stapling_status`
      - `+ configs.sources.obs_bucket_type`
      - `+ configs.compress.file_type`
      - `+ configs.user_agent_filter.ua_list`
  - **ShowDomainDetailByName**
    - 响应参数变更
      - `+ domain.sources.obs_bucket_type`

### HuaweiCloud SDK CSE

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **UpgradeEngine**
    - 响应参数变更
      - `+ jobId`
      - `- job_id`
  - **RetryEngine**
    - 响应参数变更
      - `+ jobId`
      - `- job_id`
  - **DownloadKie**
    - 响应参数变更
      - `+ data.id`
  - **CreateEngine**
    - 响应参数变更
      - `+ jobId`
      - `- job_id`
  - **DeleteEngine**
    - 响应参数变更
      - `+ jobId`
      - `- job_id`

### HuaweiCloud SDK DWS

- _新增特性_
  - 支持接口`ListAvailableDisasterClusters`、`CheckDisasterName`、`ShowDisasterDetail`、`UpdateDisasterInfo`
- _解决问题_
  - 无
- _特性变更_
  - **CreateCluster**
    - 请求参数变更
      - `+ cluster.tags`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateServers**
    - 请求参数变更
      - `+ server.root_volume.metadata`
      - `- server.root_volume.extendparam.__system__encrypted`
      - `- server.root_volume.extendparam.__system__cmkid`
      - `+ server.data_volumes.delete_on_termination`
  - **CreatePostPaidServers**
    - 请求参数变更
      - `+ server.data_volumes.delete_on_termination`
      - `+ server.root_volume.metadata`
      - `- server.root_volume.extendparam.__system__encrypted`
      - `- server.root_volume.extendparam.__system__cmkid`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **BroadcastMessage**
    - 请求参数变更
      - `+ ttl`
      - `+ message_id`
  - **ShowDeviceGroup**
    - 响应参数变更
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **UpdateDeviceGroup**
    - 响应参数变更
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **SearchDevices**
    - 响应参数变更
      - `+ devices.groups`
  - **AddDeviceGroup**
    - 请求参数变更
      - `+ group_type`
      - `+ dynamic_group_rule`
    - 响应参数变更
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **ListDeviceGroups**
    - 请求参数变更
      - `+ group_type`
      - `+ name`
    - 响应参数变更
      - `+ device_groups.group_type`
      - `* device_groups: list<DeviceGroupResponsSummery> -> list<DeviceGroupResponseSummary>`

# 3.1.36 2023-05-11

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`ContinueDeployStack`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CBR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowVaultResourceInstances**
    - 响应参数变更
      - `* resources.resource_detail: list<Vault> -> object<InstancesResourceDetail>`
  - **ListPolicies**
    - 响应参数变更
      - `+ policies.operation_definition.full_backup_interval`
  - **CreatePolicy**
    - 请求参数变更
      - `+ policy.operation_definition.full_backup_interval`
    - 响应参数变更
      - `+ policy.operation_definition.full_backup_interval`
  - **ShowPolicy**
    - 响应参数变更
      - `+ policy.operation_definition.full_backup_interval`
  - **UpdatePolicy**
    - 请求参数变更
      - `+ policy.operation_definition.full_backup_interval`
    - 响应参数变更
      - `+ policy.operation_definition.full_backup_interval`
  - **CreateVault**
    - 请求参数变更
      - `- vault.billing.extra_info`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`NovaAttachInterface`
- _解决问题_
  - 无
- _特性变更_
  - **ReinstallServerWithoutCloudInit**
    - 请求参数变更
      - `+ os-reinstall.metadata`
  - **ChangeServerOsWithoutCloudInit**
    - 请求参数变更
      - `+ os-change.metadata`
  - **ReinstallServerWithCloudInit**
    - 请求参数变更
      - `+ os-reinstall.metadata.__system__encrypted`
      - `+ os-reinstall.metadata.__system__cmkid`
  - **ChangeServerOsWithCloudInit**
    - 请求参数变更
      - `+ os-change.metadata.__system__encrypted`
      - `+ os-change.metadata.__system__cmkid`
  - **CreateServers**
    - 请求参数变更
      - `+ server.root_volume.extendparam.__system__encrypted`
      - `+ server.root_volume.extendparam.__system__cmkid`
  - **CreatePostPaidServers**
    - 请求参数变更
      - `+ server.root_volume.extendparam.__system__encrypted`
      - `+ server.root_volume.extendparam.__system__cmkid`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListImages**
    - 请求参数变更
      - `+ __imagetype: enum value [market]`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRecordIndex**
    - 响应参数变更
      - `+ width`
      - `- weight`
  - **ListAreaDetail**
    - 请求参数变更
      - `* play_domains: required -> optional`

# 3.1.35 2023-04-27

### HuaweiCloud SDK CBR

- _新增特性_
    - 支持云备份服务
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK LTS

- _新增特性_
    - 支持云日志服务
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.ipv6_accelerate`
      - `+ configs.origin_range_status`

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListIpsProtectModeUsingPost**
    - 响应参数变更
      - `+ data`
      - `- object_id`
      - `- status`

### HuaweiCloud SDK CSMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListResourceInstances**
    - 响应参数变更
      - `+ resources.sys_tags`

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ResetPassword`、`UpdateInstanceBandwidth`、`ListConfigTemplates`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK KMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListKeys**
    - 响应参数变更
      - `+ key_details.partition_type`
  - **ListKeyDetail**
    - 响应参数变更
      - `+ key_info.partition_type`
  - **ListRetirableGrants**
    - 响应参数变更
      - `+ total`
  - **ListKmsByTags**
    - 响应参数变更
      - `+ resources.resource_detail.partition_type`

### HuaweiCloud SDK SMS

- _新增特性_
  - 支持以下接口：
    - `ListApiVersion`
    - `ShowApiVersion`
    - `ShowConfig`
    - `UpdateNetworkCheckInfo`
    - `ShowConfigSetting`
    - `UploadSpecialConfigurationSetting`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.34 2023-04-20

### HuaweiCloud SDK AOS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **GetStackTemplate**
    - 请求参数变更
      - `- executor`
  - **ListStackEvents**
    - 请求参数变更
      - `- executor`
  - **ListStackOutputs**
    - 请求参数变更
      - `- executor`
  - **DeleteStack**
    - 请求参数变更
      - `- executor`
  - **DeleteExecutionPlan**
    - 请求参数变更
      - `- executor`
  - **ApplyExecutionPlan**
    - 请求参数变更
      - `- executor`
  - **GetExecutionPlan**
    - 请求参数变更
      - `- executor`
  - **ListStackResources**
    - 请求参数变更
      - `- executor`
  - **ListExecutionPlans**
    - 请求参数变更
      - `- executor`
  - **CreateExecutionPlan**
    - 请求参数变更
      - `- executor`
  - **GetExecutionPlanMetadata**
    - 请求参数变更
      - `- executor`
  - **GetStackMetadata**
    - 请求参数变更
      - `- executor`
  - **ListStacks**
    - 请求参数变更
      - `- executor`
  - **CreateStack**
    - 请求参数变更
      - `- executor`
  - **DeployStack**
    - 请求参数变更
      - `- executor`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecordDetails**
    - 响应参数变更
      - `+ monthly_records.pre_order_id`
      - `+ monthly_records.az_code_infos`

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ShowDomainFullConfig`、`UpdateDomainFullConfig`
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainFullConfig**
    - 响应参数变更
      - `+ configs.origin_follow302_status`
      - `+ configs.cache_rules`
      - `+ configs.ip_filter`
      - `+ configs.referer`
      - `+ configs.force_redirect.redirect_code`
  - **UpdateDomainFullConfig**
    - 请求参数变更
      - `+ configs.origin_follow302_status`
      - `+ configs.cache_rules`
      - `+ configs.ip_filter`
      - `+ configs.referer`
      - `+ configs.force_redirect.redirect_code`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRedislogDownloadLink**
    - 响应参数变更
      - `+ backup_id`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`BroadcastMessage`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeDriverLicense**
    - 响应参数变更
      - `+ result.front`
      - `+ result.back`
  - **RecognizeThailandIdcard**
    - 响应参数变更
      - `+ result.type`
      - `+ result.name_en`
      - `+ result.ref_number`
      - `+ result.confidence.name_en`
      - `+ result.confidence.ref_number`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListVpcsByTags**
    - 响应参数变更
      - `+ resources.resource_detail`
      - `- resources.resouce_detail`
  - **ListSubnetsByTags**
    - 响应参数变更
      - `+ resources.resource_detail`
      - `- resources.resouce_detail`
  - **UpdateRouteTable**
    - 请求参数变更
      - `+ routetable.routes.add`
      - `+ routetable.routes.mod`
      - `+ routetable.routes.del`
      - `* routetable.routes: map<string, list<RouteTableRoute>> -> object<RouteTableRouteAction>`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListServiceDescribeDetails**
    - 响应参数变更
      - `+ public_border_group`
  - **ListServiceDetails**
    - 响应参数变更
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **UpdateEndpointService**
    - 请求参数变更
      - `+ tcp_proxy`
    - 响应参数变更
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **ListEndpointInfoDetails**
    - 响应参数变更
      - `+ endpoint_pool_id`
      - `+ public_border_group`
  - **CreateEndpointService**
    - 请求参数变更
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
    - 响应参数变更
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **ListEndpointService**
    - 响应参数变更
      - `+ endpoint_services.enable_policy`
      - `+ endpoint_services.tcp_proxy: enum value [proxy_vni]`
  - **CreateEndpoint**
    - 响应参数变更
      - `+ endpoint_pool_id`
      - `+ public_border_group`
      - `+ ip`

# 3.1.33 2023-04-13

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomerselfResourceRecordDetails**
    - 响应参数变更
      - `+ monthly_records.pre_order_id`
      - `+ monthly_records.az_code_infos`

### HuaweiCloud SDK EVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowVolume**
    - 响应参数变更
      - `+ volume.iops`
      - `+ volume.throughput`
  - **ListVolumes**
    - 响应参数变更
      - `+ volumes.iops`
      - `+ volumes.throughput`

### HuaweiCloud SDK Live

- _新增特性_
  - 支持以下接口：
    - `ListSnapshotConfigs`
    - `UpdateSnapshotConfig`
    - `CreateSnapshotConfig`
    - `DeleteSnapshotConfig`
    - `ShowDomainKeyChain`
    - `UpdateDomainKeyChain`
    - `DeleteDomainKeyChain`
    - `ShowDomainHttpsCert`
    - `UpdateDomainHttpsCert`
    - `DeleteDomainHttpsCert`
    - `UpdateObsBucketAuthorityPublic`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SIS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeShortAudio**
    - 请求参数变更
      - `+ config.property: enum value [english_8k_common,english_16k_common]`
  - **CollectTranscriberJob**
    - 响应参数变更
      - `+ job_id`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持接口`CreateCloudWafPostPaidResource`、`DeleteCloudWafPostPaidResource`
- _解决问题_
  - 无
- _特性变更_
  - **ListCustomRules**
    - 响应参数变更
      - `+ items.name`

# 3.1.32 2023-04-06

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateRefreshTasks**
    - 请求参数变更
      - `+ refresh_task.mode`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeFinancialStatement**
    - 请求参数变更
      - `+ return_rectification_matrix`
    - 响应参数变更
      - `+ result.rectification_matrix`

# 3.1.31 2023-03-30

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListRenewRateOnPeriod`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 支持接口`ListRenewRateOnPeriod`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListOtaPackageInfo**
    - 请求参数变更
      - `- Sp-Auth-Token`
  - **CreateOtaPackage**
    - 请求参数变更
      - `- Sp-Auth-Token`
  - **DeleteOtaPackage**
    - 请求参数变更
      - `- Sp-Auth-Token`
  - **ShowOtaPackage**
    - 请求参数变更
      - `- Sp-Auth-Token`
  - **ShowRuleAction**
    - 响应参数变更
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **UpdateRuleAction**
    - 请求参数变更
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
    - 响应参数变更
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **CreateRuleAction**
    - 请求参数变更
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
    - 响应参数变更
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **ListRuleActions**
    - 响应参数变更
      - `+ actions.channel_detail.http_forwarding.signature_enable`
      - `+ actions.channel_detail.http_forwarding.token`
  - **ShowRule**
    - 响应参数变更
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **UpdateRule**
    - 请求参数变更
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
    - 响应参数变更
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **CreateRule**
    - 请求参数变更
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
    - 响应参数变更
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **ListRules**
    - 响应参数变更
      - `+ rules.actions.device_alarm.dimension`
      - `+ rules.condition_group.conditions.device_linkage_status_condition`
      - `+ rules.condition_group.conditions.device_property_condition.filters.in_values`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **PublishAssetFromObs**
    - 请求参数变更
      - `+ video_type: enum value [RMVB,WEBM]`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持接口`ShowValueList`、`ShowPrivacyRule`、`ShowAntitamperRule`、`ShowWhiteBlackIpRule`
- _解决问题_
  - 无
- _特性变更_
  - **ShowCcRule**
    - 响应参数变更
      - `+ name`
      - `* mode: number -> int32`
  - **UpdateCcRule**
    - 请求参数变更
      - `+ name`
    - 响应参数变更
      - `+ name`
      - `* mode: number -> int32`
  - **DeleteCcRule**
    - 响应参数变更
      - `+ name`
      - `* mode: number -> int32`
  - **ShowCustomRule**
    - 响应参数变更
      - `+ time`
  - **UpdateCustomRule**
    - 响应参数变更
      - `+ time`
  - **DeleteCustomRule**
    - 响应参数变更
      - `+ time`
  - **ListAntileakageRules**
    - 响应参数变更
      - `+ items.description`
  - **CreateCcRule**
    - 请求参数变更
      - `+ name`
    - 响应参数变更
      - `+ name`
      - `* mode: number -> int32`
  - **ListCcRules**
    - 响应参数变更
      - `+ items.name`
  - **CreateCustomRule**
    - 响应参数变更
      - `+ time`
  - **ListCustomRules**
    - 响应参数变更
      - `+ items.time`

# 3.1.30 2023-03-23

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ShowDomainDetailByName**
    - 响应参数变更
      - `- domain.banned_reason`
      - `- domain.locked_reason`
      - `- domain.enterprise_project_id`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **CreateMigrationTask**
    - 请求参数变更
      - `+ backup_files.file_source: enum value [backup_record]`
  - **ShowMigrationTask**
    - 响应参数变更
      - `+ backup_files.file_source: enum value [backup_record]`
  - **StopMigrationTask**
    - 响应参数变更
      - `+ backup_files.file_source: enum value [backup_record]`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持以下接口：
    - `ListCcRules`
    - `CreateCcRule`
    - `ShowCcRule`
    - `UpdateCcRule`
    - `DeleteCcRule`
    - `ListCustomRules`
    - `CreateCustomRule`
    - `ShowCustomRule`
    - `UpdateCustomRule`
    - `DeleteCustomRule`
    - `ListAnticrawlerRules`
    - `UpdateAnticrawlerRuleType`
    - `CreateAnticrawlerRule`
    - `ShowAnticrawlerRule`
    - `UpdateAnticrawlerRule`
    - `DeleteAnticrawlerRule`
    - `ListPunishmentRules`
    - `CreatePunishmentRule`
    - `ShowPunishmentRule`
    - `UpdatePunishmentRule`
    - `DeletePunishmentRule`
    - `ListAntileakageRules`
    - `CreateAntileakageRule`
    - `ShowAntileakageRule`
    - `UpdateAntileakageRule`
    - `DeleteAntileakageRule`
    - `UpdateAntiTamperRuleRefresh`
    - `ShowGeoipRule`
    - `ShowIgnoreRule`
    - `UpdateIgnoreRule`
- _解决问题_
  - 无
- _特性变更_
  - **ListHost**
    - 响应参数变更
      - `- items.paid_type: enum value [prePaid]`
  - **DeleteHost**
    - 响应参数变更
      - `- paid_type: enum value [prePaid]`

# 3.1.29 2023-03-16

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ListDomains`、`ShowDomainDetailByName`
- _解决问题_
  - 无
- _特性变更_
  - **ListDomains**
    - 请求参数变更
      - `+ show_tags`
      - `+ exact_match`
    - 响应参数变更
      - `+ domains.tags`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **ListBandwidthPkg**
    - 请求参数变更
      - `+ limit`
      - `+ marker`
      - `+ offset`
  - **ListCommonPools**
    - 请求参数变更
      - `+ limit`
      - `+ offset`
  - **ListShareBandwidthTypes**
    - 请求参数变更
      - `+ marker`
      - `+ offset`

### HuaweiCloud SDK IAM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **KeystoneListMappings**
    - 响应参数变更
      - `* mappings.rules.local.groups: object -> string`
  - **KeystoneShowMapping**
    - 响应参数变更
      - `* mapping.rules.local.groups: object -> string`
  - **KeystoneCreateMapping**
    - 请求参数变更
      - `* mapping.rules.local.groups: object -> string`
    - 响应参数变更
      - `* mapping.rules.local.groups: object -> string`
  - **KeystoneUpdateMapping**
    - 请求参数变更
      - `* mapping.rules.local.groups: object -> string`
    - 响应参数变更
      - `* mapping.rules.local.groups: object -> string`

### HuaweiCloud SDK IVS

- _新增特性_
  - 支持接口`DetectStandardByVideoAndIdCardImage`、`DetectStandardByVideoAndNameAndId`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - **RecognizeMvsInvoice**
    - 请求参数变更
      - `+ return_text_location`
      - `+ return_confidence`
      - `+ type`
    - 响应参数变更
      - `+ result.buyer_address`
      - `+ result.buyer_phone`
      - `+ result.licence_plate_number`
      - `+ result.registration_number`
      - `+ result.dept_motor_vehicles`
      - `+ result.auction_org_name`
      - `+ result.auction_org_address`
      - `+ result.auction_org_id`
      - `+ result.auction_org_bank_account`
      - `+ result.auction_org_phone`
      - `+ result.used_vehicle_market_name`
      - `+ result.used_vehicle_market_id`
      - `+ result.used_vehicle_market_address`
      - `+ result.used_vehicle_market_bank_account`
      - `+ result.used_vehicle_market_phone`
      - `+ result.remark`
      - `+ result.drawer_name`
      - `+ result.type`
      - `+ result.text_location`
      - `+ result.confidence`

# 3.1.28 2023-03-09

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持以下接口：
    - `ListTemplates`
    - `DeleteTemplate`
    - `ShowTemplateMetadata`
    - `UpdateTemplateMetadata`
    - `ShowTemplateVersionContent`
    - `DeleteTemplateVersion`
    - `ShowTemplateVersionMetadata`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListExecutionPlans`:
    - 响应参数`status`新增枚举值`APPLY_IN_PROGRESS`
    - 响应参数`stack_name`、`execution_plan_name`改为必填
  - 接口`GetExecutionPlan`响应参数`action`移除枚举值`IN_PLACE_UPDATE`
  - 接口`GetExecutionPlanMetadata`响应参数`stack_name`、`execution_plan_name`改为必填
  - 接口`ListStackResources`新增响应参数 `resource_attributes`
  - 接口`EstimateExecutionPlanPrice`:
    - 新增响应参数 `unsupported_message`
    - 响应参数`sale_price`类型调整 `object` -> `double`
    - 响应参数`discount`类型调整 `object` -> `double`
    - 响应参数`original_price`类型调整 `object` -> `double`
    - 响应参数`period_type`移除枚举值`WEEK`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateDevice`新增响应参数 `connection_status_update_time`、`active_time`
  - 接口`ShowDevice`新增响应参数 `connection_status_update_time`、`active_time`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeAutoClassification`新增请求参数 `extended_parameters`

# 3.1.27 2023-03-07

### HuaweiCloud SDK VOD

- _新增特性_
  - 支持接口`ModifySubtitle`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.26 2023-03-02

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowDomainFullConfig`:
    - 响应参数`error_code`类型调整 `string` -> `int32`
    - 响应参数`target_code`类型调整 `string` -> `int32`
  - 接口`UpdateDomainFullConfig`:
    - 请求参数`error_code`类型调整 `string` -> `int32`
    - 请求参数`target_code`类型调整 `string` -> `int32`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`ListOtaPackageInfo`、`CreateOtaPackage`、`ShowOtaPackage`、`DeleteOtaPackage`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.25 2023-02-23

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListCustomerAccountChangeRecords`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListRoutingRules`新增请求参数 `active`
  - 接口`CreateRuleAction`新增请求参数 `mysql_forwarding`
  - 接口`ListRuleActions`新增响应参数 `mysql_forwarding`
  - 接口`UpdateRuleAction`:
    - 新增请求参数 `mysql_forwarding`
    - 新增响应参数 `mysql_forwarding`
  - 接口`ShowRuleAction`新增响应参数 `mysql_forwarding`

### HuaweiCloud SDK WAF

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdatePremiumHost`新增请求参数 `flag`

# 3.1.24 2023-02-16

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`CreateCustomTemplate`、`CreateAutoExpireScanTask`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DetectLiveByUrl`新增请求参数 `nod_threshold`
  - 接口`DetectLiveByUrlIntl`新增请求参数 `nod_threshold`
  - 接口`DetectLiveByFile`新增请求参数 `nod_threshold`
  - 接口`DetectLiveByFileIntl`新增请求参数 `nod_threshold`
  - 接口`DetectLiveByBase64`新增请求参数 `nod_threshold`
  - 接口`DetectLiveByBase64Intl`新增请求参数 `nod_threshold`

### HuaweiCloud SDK WAF

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateHost`:
    - 请求参数`tls`移除枚举值`TLS v1.3`
    - 响应参数`tls`移除枚举值`TLS v1.3`
  - 接口`ShowHost`响应参数`tls`移除枚举值`TLS v1.3`
  - 接口`CreatePremiumHost`响应参数`tls`移除枚举值`TLS v1.3`
  - 接口`ShowPremiumHost`响应参数`tls`移除枚举值`TLS v1.3`
  - 接口`UpdatePremiumHost`:
    - 请求参数`tls`移除枚举值`TLS v1.3`
    - 响应参数`tls`移除枚举值`TLS v1.3`

# 3.1.23 2023-02-09

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RenewalResources`新增响应参数 `fail_resource_infos`
  - 接口`CancelResourcesSubscription`新增响应参数 `fail_resource_infos`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListRuleActions`新增响应参数 `roma_forwarding`、`influxdb_forwarding`、`functiongraph_forwarding`、`mrs_kafka_forwarding`、`dms_rocketmq_forwarding`
  - 接口`CreateRuleAction`新增请求参数 `roma_forwarding`、`influxdb_forwarding`、`functiongraph_forwarding`、`mrs_kafka_forwarding`、`dms_rocketmq_forwarding`
  - 接口`UpdateRuleAction`:
    - 新增请求参数 `roma_forwarding`、`influxdb_forwarding`、`functiongraph_forwarding`、`mrs_kafka_forwarding`、`dms_rocketmq_forwarding`
    - 新增响应参数 `roma_forwarding`、`influxdb_forwarding`、`functiongraph_forwarding`、`mrs_kafka_forwarding`、`dms_rocketmq_forwarding`
  - 接口`ShowRuleAction`新增响应参数 `roma_forwarding`、`influxdb_forwarding`、`functiongraph_forwarding`、`mrs_kafka_forwarding`、`dms_rocketmq_forwarding`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeTollInvoice`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`

# 3.1.22 2023-02-02

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`UpdateStack`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ApplyExecutionPlan`新增请求参数 `executor`
  - 接口`ListStackEvents`:
    - 新增请求参数 `filter`、`field`
    - 移除响应参数 `resource_id_key`、`resource_id_value`、`resource_name`、`resource_type`、`time`、`event_type`、`event_message`、`elapsed_seconds`
  - 接口`GetStackMetadata`响应参数`stack_name`改为必填
  - 接口`CreateStack`新增请求参数 `executor`
  - 接口`ListStackResources`:
    - 新增响应参数 `index_key`
    - 响应参数`resource_status`移除枚举值`DELETION_SKIPPED`
  - 接口`DeployStack`新增请求参数 `executor`

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RenewalResources`新增响应参数 `fail_resource_infos`
  - 接口`CancelResourcesSubscription`新增响应参数 `fail_resource_infos`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateImage`请求参数`type`新增枚举值`IsoImage`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RunTextModeration`新增请求参数 `white_glossaries`

# 3.1.21 2023-01-12

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListFreeResourcesUsageRecords`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecordDetails`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`
  - 接口`ListCustomerselfResourceRecords`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`
  - 接口`ListCosts`请求参数`operator`改为必填

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 支持接口`ListFreeResourcesUsageRecords`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecordDetails`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`
  - 接口`ListCustomerselfResourceRecords`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`
  - 接口`ListCosts`请求参数`operator`改为必填

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DetectLiveByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveByUrlIntl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveFaceByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveByFileIntl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveFaceByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveByBase64Intl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectLiveFaceByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`SearchFaceByFaceId`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByFileIntl`新增请求参数 `Enterprise-Project-Id`
  - 接口`UpdateFace`新增请求参数 `Enterprise-Project-Id`
  - 接口`DeleteFaceByExternalImageId`新增请求参数 `Enterprise-Project-Id`
  - 接口`ShowFacesByLimit`新增请求参数 `Enterprise-Project-Id`
  - 接口`CompareFaceByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`DeleteFaceByFaceId`新增请求参数 `Enterprise-Project-Id`
  - 接口`ShowFacesByFaceId`新增请求参数 `Enterprise-Project-Id`
  - 接口`AddFacesByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByUrlIntl`新增请求参数 `Enterprise-Project-Id`
  - 接口`DeleteFaceSet`新增请求参数 `Enterprise-Project-Id`
  - 接口`ShowFaceSet`新增请求参数 `Enterprise-Project-Id`
  - 接口`CompareFaceByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectFaceByBase64Intl`新增请求参数 `Enterprise-Project-Id`
  - 接口`CreateFaceSet`新增请求参数 `Enterprise-Project-Id`
  - 接口`ShowAllFaceSets`新增请求参数 `Enterprise-Project-Id`
  - 接口`SearchFaceByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`AddFacesByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`AddFacesByFile`新增请求参数 `Enterprise-Project-Id`
  - 接口`SearchFaceByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`SearchFaceByBase64`新增请求参数 `Enterprise-Project-Id`
  - 接口`CompareFaceByUrl`新增请求参数 `Enterprise-Project-Id`
  - 接口`BatchDeleteFaces`新增请求参数 `Enterprise-Project-Id`

### HuaweiCloud SDK IVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DetectStandardByIdCardImage`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectStandardByNameAndId`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectExtentionByNameAndId`新增请求参数 `Enterprise-Project-Id`
  - 接口`DetectExtentionByIdCardImage`新增请求参数 `Enterprise-Project-Id`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeCustomTemplate`
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeGeneralTable`:
    - 新增请求参数 `return_char_location`、`return_rectification_matrix`
    - 新增响应参数 `char_list`
  - 接口`RecognizeGeneralText`新增请求参数 `language`
  - 接口`RecognizeWebImage`:
    - 新增响应参数 `extracted_data`
    - 移除响应参数 `extracted_data`、`contact_info`、`image_size`、`height`、`width`、`name`、`phone`、`province`、`city`、`district`、`detail_address`

# 3.1.20 2023-01-05

### HuaweiCloud SDK DCS

- _新增特性_
  - 支持接口`ListConfigHistories`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DNS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除以下接口：
    - `ListResoleRules`
    - `SetPrivateZoneProxyPattern`
    - `ShowDomainQuota`
    - `ShowRetrieval`
    - `CreateRetrieval`
    - `ShowRetrievalVerification`
    - `CreateRetrievalVerification`
    - `ListEndpoints`
    - `CreateEndpoint`
    - `ShowEndpoint`
    - `UpdateEndpoint`
    - `DeleteEndpoint`
    - `ListEndpointIpaddresses`
    - `AssociateEndpointIpaddress`
    - `DisassociateEndpointIpaddress`
    - `ListEndpointVpcs`
    - `CreateResolveRule`
    - `AssociateResolveRuleRouter`
    - `DisassociateResolveRuleRouter`
    - `ShowResoleRule`
    - `UpdateResolveRule`
    - `DeleteResolveRule`
    - `BatchDeleteZones`
    - `BatchDeletePtrRecords`
    - `BatchSetZonesStatus`
    - `BatchSetRecordSetsStatus`
    - `BatchDeleteRecordSets`
  - 接口`CreatePrivateZone`:
    - 新增请求参数 `proxy_pattern`
    - 新增响应参数 `proxy_pattern`
  - 接口`ListPrivateZones`新增响应参数 `proxy_pattern`

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`ListUpStreamDetail`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListBandwidthDetail`:
    - 新增请求参数 `service_type`
    - 请求参数`play_domains`改为必填
  - 接口`ListDomainTrafficDetail`:
    - 新增请求参数 `service_type`
    - 请求参数`play_domains`改为必填
  - 接口`ListDomainBandwidthPeak`:
    - 新增请求参数 `service_type`
    - 请求参数`play_domains`改为必填
  - 接口`ListDomainTrafficSummary`:
    - 新增请求参数 `service_type`
    - 请求参数`play_domains`改为必填
  - 接口`ListUsersOfStream`新增请求参数 `service_type`
  - 接口`ShowUpBandwidth`新增请求参数 `type`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RunTextModeration`新增请求参数 `white_glossary_names`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPorts`:
    - 新增请求参数 `security_groups`
    - 请求参数`fixed_ips`类型调整 `string` -> `array`

# 3.1.19 2022-12-29

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListDnsServers`新增请求参数 `fw_instance_id`、`enterprise_project_id`
  - 接口`UpdateDnsServers`新增请求参数 `fw_instance_id`、`enterprise_project_id`
  - 接口`ListVpcProtects`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListRuleHitCount`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteAclRuleCount`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ChangeIpsSwitchUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListIpsSwitchStatusUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListEastWestFirewall`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ChangeEwProtectStatus`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListFlowLogs`新增请求参数 `enterprise_project_id`
  - 接口`ListAccessControlLogs`新增请求参数 `enterprise_project_id`
  - 接口`ListAttackLogs`新增请求参数 `enterprise_project_id`
  - 接口`AddRuleAclUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteRuleAclUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`UpdateRuleAclUsingPut`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListRuleAclsUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListRuleAclUsingPut`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`AddBlackWhiteListUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteBlackWhiteListUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`UpdateBlackWhiteListUsingPut`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListBlackWhiteListsUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ChangeIpsProtectModeUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListIpsProtectModeUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListFirewallUsingGet`:
    - 新增请求参数 `enterprise_project_id`、`fw_instance_id`
    - 新增响应参数 `fw_instance_name`、`enterprise_project_id`
  - 接口`AddServiceSetUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteServiceSetUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListServiceSetDetails`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`UpdateServiceSetUsingPut`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`AddServiceItemsUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListServiceItemsDetails`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteServiceItemUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListParseDomainDetails`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`CountEips`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ChangeProtectEip`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListEipResources`:
    - 新增请求参数 `fw_instance_id`、`fw_key_word`、`eps_id`
    - 新增响应参数 `fw_instance_name`、`fw_instance_id`、`fw_enterprise_project_id`
  - 接口`DeleteAddressItemUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`AddAddressItemsUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListAddressItemsUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`AddAddressSetInfoUsingPost`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListAddressSetListUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`DeleteAddressSetInfoUsingDelete`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListAddressSetDetailUsingGet`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`UpdateAddressSetInfoUsingPut`新增请求参数 `enterprise_project_id`、`fw_instance_id`
  - 接口`ListServiceSet`新增请求参数 `enterprise_project_id`、`fw_instance_id`

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateBigkeyScanTask`响应参数`size`类型调整 `int32` -> `int64`
  - 接口`ShowBigkeyScanTaskDetails`响应参数`size`类型调整 `int32` -> `int64`
  - 接口`CreateHotkeyScanTask`响应参数`size`类型调整 `int32` -> `int64`
  - 接口`ShowHotkeyTaskDetails`响应参数`size`类型调整 `int32` -> `int64`

### HuaweiCloud SDK DNS

- _新增特性_
  - 支持接口`AssociateResolveRuleRouter`、`DisassociateResolveRuleRouter`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPublicZones`移除响应参数 `total_count`
  - 接口`ListPrivateZones`移除响应参数 `total_count`
  - 接口`ListRecordSetsByZone`移除响应参数 `total_count`
  - 接口`ListRecordSets`移除响应参数 `total_count`
  - 接口`BatchDeleteRecordSetWithLine`移除响应参数 `total_count`
  - 接口`BatchUpdateRecordSetWithLine`移除响应参数 `total_count`
  - 接口`ListRecordSetsWithLine`移除响应参数 `total_count`
  - 接口`CreateRecordSetWithBatchLines`移除响应参数 `total_count`
  - 接口`ShowRecordSetByZone`移除响应参数 `total_count`
  - 接口`ListPtrRecords`移除响应参数 `total_count`
  - 接口`ListCustomLine`移除响应参数 `total_count`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ChangeBandwidthToPeriod`新增请求参数 `extendParam`
  - 接口`ChangePublicipToPeriod`新增请求参数 `extendParam`
  - 接口`ListBandwidthPkg`:
    - 新增响应参数 `tenantId`
    - 移除响应参数 `tenant_id`
  - 接口`UpdateAssociatePublicip`请求参数`associate_instance_type`、`associate_instance_id`改为必填
  - 接口`AssociatePublicips`请求参数`associate_instance_type`、`associate_instance_id`改为必填

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowJob`新增响应参数 `sub_jobs_result`、`sub_jobs_list`
  - 接口`ShowJobProgress`新增响应参数 `sub_jobs_result`、`sub_jobs_list`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateTranscodeTemplate`请求参数`name`改为非必填
  - 接口`UpdateTemplateGroupCollection`:
    - 请求参数`collection_id`改为必填
    - 请求参数`name`、`template_group_list`改为非必填

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListVpcs`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`CreateVpc`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`ShowVpc`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`UpdateVpc`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`ListSubnets`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`CreateSubnet`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`ShowSubnet`新增响应参数 `tenant_id`、`created_at`、`updated_at`
  - 接口`ListRouteTables`新增响应参数 `created_at`、`updated_at`
  - 接口`CreateRouteTable`新增响应参数 `created_at`、`updated_at`
  - 接口`ShowRouteTable`新增响应参数 `created_at`、`updated_at`
  - 接口`UpdateRouteTable`新增响应参数 `created_at`、`updated_at`
  - 接口`AssociateRouteTable`新增响应参数 `created_at`、`updated_at`
  - 接口`DisassociateRouteTable`新增响应参数 `created_at`、`updated_at`

# 3.1.18 2022-12-26

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`UpdateDomainIp6Switch`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowDomain`:
    - 新增请求参数 `enterprise_project_id`
    - 新增响应参数 `enterprise_project_id`、`is_ipv6`
  - 接口`UpdateDomain`:
    - 新增请求参数 `enterprise_project_id`
    - 新增响应参数 `enterprise_project_id`
  - 接口`CreateDomain`新增请求参数 `enterprise_project_id`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateTranscodeTemplate`请求参数`group_id`、`name`、`bitrate`、`frame_rate`、`video_codec`、`format`、`hls_interval`改为必填
  - 接口`ListTranscodeTemplate`响应参数`bitrate`、`frame_rate`、`video_codec`、`format`、`hls_interval`改为必填
  - 接口`CreateTranscodeTemplate`请求参数`name`、`bitrate`、`frame_rate`、`video_codec`、`format`、`hls_interval`改为必填
  - 接口`UpdateTemplateGroupCollection`请求参数`name`、`template_group_list`改为必填
  - 接口`CreateTemplateGroupCollection`请求参数`name`、`template_group_list`改为必填

# 3.1.17 2022-12-22

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CopyImageCrossRegion`新增请求参数 `vault_id`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口`SearchDevices`
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRule`新增请求参数 `device_side`
  - 接口`ListRules`新增响应参数 `device_side`
  - 接口`ShowRule`新增响应参数 `device_side`
  - 接口`UpdateRule`:
    - 新增请求参数 `device_side`
    - 新增响应参数 `device_side`

# 3.1.16 2022-12-19

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListServersDetails`新增请求参数 `server_id`

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持接口`ShowResourcesJobDetail`、`ChangeBandwidthToPeriod`、`ChangePublicipToPeriod`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRecordCallbackConfig`新增请求参数 `key`
  - 接口`UpdateRecordCallbackConfig`:
    - 新增请求参数 `key`
    - 新增响应参数 `id`、`publish_domain`、`app`、`notify_callback_url`、`notify_event_subscription`、`sign_type`、`create_time`、`update_time`

# 3.1.15 2022-12-15

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListServersDetails`新增请求参数 `server_id`

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持接口`ShowResourcesJobDetail`、`ChangeBandwidthToPeriod`、`ChangePublicipToPeriod`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRecordCallbackConfig`新增请求参数 `key`
  - 接口`UpdateRecordCallbackConfig`:
    - 新增请求参数 `key`
    - 新增响应参数 `id`、`publish_domain`、`app`、`notify_callback_url`、`notify_event_subscription`、`sign_type`、`create_time`、`update_time`

# 3.1.14 2022-12-08

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`GetExecutionPlan`、`DeleteExecutionPlan`、`DescribeExecutionPlan`、`GetStackMetadata`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListExecutionPlans`移除请求参数 `executor`
  - 接口`CreateExecutionPlan`移除请求参数 `executor`
  - 接口`ApplyExecutionPlan`移除请求参数 `executor`
  - 接口`ListStackEvents`:
    - 移除请求参数 `limit`、`marker`、`executor`
    - 移除响应参数 `next_marker`
  - 接口`ListStacks`移除请求参数 `executor`
  - 接口`CreateStack`移除请求参数 `executor`
  - 接口`GetStackTemplate`移除请求参数 `executor`
  - 接口`ListStackResources`:
    - 移除请求参数 `executor`
    - 移除响应参数 `create_time`、`update_time`
  - 接口`ListStackOutputs`:
    - 移除请求参数 `executor`、`limit`、`marker`
    - 移除响应参数 `next_marker`
  - 接口`DeployStack`移除请求参数 `executor`
  - 接口`DeleteStack`移除请求参数 `executor`

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListIpsSwitchStatusUsingGet`:
    - 新增响应参数 `id`、`virtual_patches_status`
    - 移除响应参数 `object_id`、`virtual_patches_stauts`
  - 接口`ChangeIpsSwitchUsingPost`请求参数`ips_type`改为必填
  - 接口`ListFirewallUsingGet`移除响应参数 `fw_instance_id`、`resource_id`、`name`、`ha_type`、`charge_mode`、`service_type`、`engine_type`、`flavor`、`protect_objects`、`status`、`description`、`is_old_firewall_instance`、`support_ipv6`、`feature_toggle`

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持以下接口：
    - `ListBandwidthPkg`
    - `CountPublicIp`
    - `ShowPublicIpType`
    - `CountPublicIpInstance`
    - `BatchCreatePublicips`
    - `BatchDeletePublicIp`
    - `BatchDisassociatePublicips`
    - `CountEipAvailableResources`
- _解决问题_
  - 无
- _特性变更_
  - 接口`AssociatePublicips`请求参数`associate_instance_type`移除枚举值``
  - 接口`UpdateAssociatePublicip`请求参数`associate_instance_type`移除枚举值``

### HuaweiCloud SDK TMS

- _新增特性_
  - 支持以下接口：
    - `ListResource`
    - `CreateResourceTag`
    - `DeleteResourceTag`
    - `ListTagKeys`
    - `ListTagValues`
    - `ShowResourceTag`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.13 2022-12-01

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecords`新增响应参数 `formula`

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecords`新增响应参数 `formula`

### HuaweiCloud SDK CFW

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListIpsSwitchStatusUsingGet`:
    - 新增响应参数 `data`
    - 移除响应参数 `object_id`、`basic_defense_status`、`virtual_patches_stauts`
  - 接口`ListEastWestFirewall`:
    - 新增响应参数 `protect_infos`
    - 移除响应参数 `protected_infos`
  - 接口`ListAttackLogs`请求参数`fw_instance_id`改为非必填
  - 接口`UpdateRuleAclUsingPut`新增请求参数 `type`
  - 接口`UpdateBlackWhiteListUsingPut`新增请求参数 `list_type`、`object_id`
  - 接口`ListFirewallUsingGet`:
    - 新增响应参数 `data`
    - 移除响应参数 `fw_instance_id`、`resource_id`、`name`、`ha_type`、`charge_mode`、`service_type`、`engine_type`、`flavor`、`protect_objects`、`status`、`description`、`is_old_firewall_instance`、`support_ipv6`、`feature_toggle`
  - 接口`ListServiceSetDetails`:
    - 新增响应参数 `data`
    - 移除响应参数 `id`、`name`、`description`
  - 接口`CountEips`:
    - 新增响应参数 `data`
    - 移除响应参数 `object_id`、`eip_total`、`eip_protected`
  - 接口`ListEipResources`:
    - 新增响应参数 `data`
    - 移除响应参数 `id`、`public_ip`、`status`、`public_ipv6`、`enterprise_project_id`、`device_id`、`device_name`、`device_owner`、`associate_instance_type`
  - 接口`UpdateAddressSetInfoUsingPut`新增请求参数 `address_type`

# 3.1.12 2022-11-30

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持接口`DisassociatePublicips`、`AssociatePublicips`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.11 2022-11-24

### HuaweiCloud SDK AS

- _新增特性_
  - 支持弹性伸缩服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CFW

- _新增特性_
  - 支持云防火墙服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持接口`ListStackEvents`、`ListStackResources`、`DeleteStack`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListSubCustomerBillDetail`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`

### HuaweiCloud SDK CSE

- _新增特性_
  - 支持接口`UpgradeEngine`、`RetryEngine`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK DNS

- _新增特性_
  - 支持以下接口：
    - `SetPrivateZoneProxyPattern`
    - `AssociateHealthCheck`
    - `DisassociateHealthCheck`
    - `CreateRetrieval`
    - `ShowRetrieval`
    - `CreateRetrievalVerification`
    - `ShowRetrievalVerification`
    - `CreateEndpoint`
    - `ShowEndpoint`
    - `ListEndpoints`
    - `UpdateEndpoint`
    - `DeleteEndpoint`
    - `AssociateEndpointIpaddress`
    - `ListEndpointIpaddresses`
    - `DisassociateEndpointIpaddress`
    - `ListEndpointVpcs`
    - `CreateResolveRule`
    - `ShowResoleRule`
    - `ListResoleRules`
    - `UpdateResolveRule`
    - `DeleteResolveRule`
    - `CreateLineGroup`
    - `ListLineGroups`
    - `ShowLineGroup`
    - `UpdateLineGroups`
    - `DeleteLineGroup`
    - `BatchDeleteZones`
    - `BatchDeletePtrRecords`
    - `BatchSetZonesStatus`
    - `BatchSetRecordSetsStatus`
    - `BatchDeleteRecordSets`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeHealthCode`新增响应参数 `test_interval`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持接口`CreatePrepaidCloudWaf`、`ChangePrepaidCloudWaf`、`ShowSubscriptionInfo`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.10 2022-11-17

### HuaweiCloud SDK AOS

- _新增特性_
  - 支持应用编排服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CSE

- _新增特性_
  - 支持微服务引擎服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK SMN

- _新增特性_
  - 支持消息通知服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateSubEnterpriseAccount`请求参数`sub_customer_association_type`改为必填

### HuaweiCloud SDK DCS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ResizeInstance`请求参数`new_capacity`类型调整 `integer` -> `int32`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RegisterServerMonitor`请求参数`monitorMetrics`类型调整 `string` -> `enum`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DisassociatePublicips`请求参数`associate_instance_type`新增枚举值`VPN`
  - 接口`AssociatePublicips`请求参数`associate_instance_type`新增枚举值`VPN`

### HuaweiCloud SDK EPS

- _新增特性_
  - 支持接口`ListProviders`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateMessage`新增请求参数 `ttl`
  - 接口`ListCertificates`新增请求参数 `Sp-Auth-Token`、`Stage-Auth-Token`
  - 接口`AddCertificate`:
    - 新增请求参数 `Sp-Auth-Token`、`Stage-Auth-Token`、`addCertificateRequestBody`
    - 移除请求参数 `AddCertificateRequestBody`
  - 接口`DeleteCertificate`新增请求参数 `Sp-Auth-Token`、`Stage-Auth-Token`
  - 接口`CheckCertificate`:
    - 新增请求参数 `Sp-Auth-Token`、`Stage-Auth-Token`、`checkCertificateRequestBody`
    - 移除请求参数 `CheckCertificateRequestBody`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeGeneralTable`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeVatInvoice`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeInvoiceVerification`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeGeneralText`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeWebImage`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeHealthCode`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeQuotaInvoice`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeIdCard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeHandwriting`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeVehicleLicense`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeTransportationLicense`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeTaxiInvoice`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeAutoClassification`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeTollInvoice`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeMvsInvoice`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeLicensePlate`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeFlightItinerary`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeBusinessLicense`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeDriverLicense`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeBusinessCard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeTrainTicket`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeVin`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizePassport`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeBankcard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeInsurancePolicy`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeFinancialStatement`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeQualificationCertificate`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeThailandIdcard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeMyanmarIdcard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeMyanmarDriverLicense`:
    - 新增请求参数 `Enterprise-Project-Id`
    - 新增响应参数 `birth`、`birth`
    - 移除响应参数 `Birth`、`Birth`
  - 接口`RecognizeChileIdCard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeThailandLicensePlate`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeWaybillElectronic`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizePcrTestRecord`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeIdDocument`:
    - 新增请求参数 `Enterprise-Project-Id`
    - 响应参数`result`类型调整 `object` -> `object`
  - 接口`RecognizeHkIdCard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeCambodianIdCard`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeExitEntryPermit`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeMainlandTravelPermit`新增请求参数 `Enterprise-Project-Id`
  - 接口`RecognizeMacaoIdCard`新增请求参数 `Enterprise-Project-Id`

### HuaweiCloud SDK TMS

- _新增特性_
  - 支持接口`ListProviders`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateSubnet`:
    - 请求参数`opt_name`新增枚举值`addresstime`
    - 响应参数`opt_name`新增枚举值`addresstime`
  - 接口`ListSubnets`响应参数`opt_name`新增枚举值`addresstime`
  - 接口`ShowSubnet`响应参数`opt_name`新增枚举值`addresstime`
  - 接口`UpdateSubnet`请求参数`opt_name`新增枚举值`addresstime`

# 3.1.9 2022-11-14

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListStreamForbidden`移除请求参数 `specify_project`
  - 接口`DeleteStreamForbidden`移除请求参数 `specify_project`
  - 接口`UpdateStreamForbidden`移除请求参数 `specify_project`
  - 接口`CreateStreamForbidden`移除请求参数 `specify_project`
  - 接口`ShowDomain`响应参数`service_area`移除枚举值`global`
  - 接口`UpdateDomain`响应参数`service_area`移除枚举值`global`
  - 接口`CreateDomain`请求参数`service_area`移除枚举值`global`
  - 接口`DeleteDomainMapping`移除请求参数 `specify_project`
  - 接口`CreateDomainMapping`移除请求参数 `specify_project`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListEndpoints`响应参数`Action`类型调整 `string` -> `array`
  - 接口`DeleteEndpointPolicy`响应参数`Action`类型调整 `string` -> `array`
  - 接口`UpdateEndpointPolicy`:
    - 请求参数`Action`类型调整 `string` -> `array`
    - 响应参数`Action`类型调整 `string` -> `array`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持接口`MigrateCompositeHosts`、`ShowSourceIp`、`ListNoticeConfigs`、`UpdateAlertNoticeConfig`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListInstance`新增响应参数 `instance_name`
  - 接口`ShowLtsInfoConfig`新增响应参数 `enabled`、`ltsAttackStreamID`
  - 接口`UpdateLtsInfoConfig`:
    - 新增请求参数 `enabled`、`ltsAttackStreamID`
    - 新增响应参数 `enabled`、`ltsAttackStreamID`
    - 请求参数`enabale`改为非必填
  - 接口`ShowIpGroup`新增响应参数 `description`

# 3.1.8 2022-11-03

### HuaweiCloud SDK GA

- _新增特性_
  - 支持全球加速服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`NovaCreateServers`请求参数`destination_type`改为非必填

### HuaweiCloud SDK EPS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`MigrateResource`新增请求参数 `region_id`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeGeneralText`:
    - 新增请求参数 `character_mode`
    - 新增响应参数 `confidence`、`char_list`
  - 接口`RecognizeThailandIdcard`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`

### HuaweiCloud SDK WAF

- _新增特性_
  - 支持以下接口：
    - `ListInstance`
    - `CreateInstance`
    - `ShowInstance`
    - `RenameInstance`
    - `DeleteInstance`
    - `ShowLtsInfoConfig`
    - `UpdateLtsInfoConfig`
    - `ListIpGroup`
    - `CreateIpGroup`
    - `ShowIpGroup`
    - `UpdateIpGroup`
    - `DeleteIpGroup`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.7 2022-11-02

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowUrlTaskInfo`:
    - 响应参数`modify_time`类型调整 `int32` -> `int64`
    - 响应参数`create_time`类型调整 `int32` -> `int64`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`UpdateServerBlockDevice`、`RegisterServerMonitor`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.6 2022-10-27

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowUrlTaskInfo`响应参数`id`类型调整 `int32` -> `int64`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateServers`新增请求参数 `X-Client-Token`、`batch_create_in_multi_az`
  - 接口`CreatePostPaidServers`新增请求参数 `X-Client-Token`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListTags`请求参数`__imagetype`新增枚举值`market`
  - 接口`GlanceListImages`:
    - 请求参数`__imagetype`新增枚举值`market`
    - 响应参数`__imagetype`新增枚举值`market`
  - 接口`GlanceShowImage`响应参数`__imagetype`新增枚举值`market`
  - 接口`GlanceUpdateImage`响应参数`__imagetype`新增枚举值`market`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateMessage`新增请求参数 `properties`
  - 接口`ListDeviceMessages`新增响应参数 `properties`
  - 接口`ShowDeviceMessage`新增响应参数 `properties`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RunCreateVideoModerationJob`的请求参数`frame_interval`类型变更 `float` -> `integer`
  - 接口`RunQueryAudioModerationJob`的响应参数`start_time`、`end_time`类型变更 `integer` -> `float`
  - 接口`RunQueryVideoModerationJob`
    - 响应参数`time`类型变更 `integer` -> `float`
    - 响应参数`start_time`、`end_time`类型变更 `integer` -> `float`

# 3.1.5 2022-09-28

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListDomains`新增响应参数 `domain_id`
  - 接口`CreateDomain`:
    - 新增请求参数 `domain_id`
    - 新增响应参数 `domain_id`
  - 接口`ShowDomainDetail`新增响应参数 `domain_id`
  - 接口`DeleteDomain`新增响应参数 `domain_id`
  - 接口`EnableDomain`新增响应参数 `domain_id`
  - 接口`DisableDomain`新增响应参数 `domain_id`
  - 接口`UpdateDomainOrigin`:
    - 新增请求参数 `domain_id`
    - 新增响应参数 `domain_id`
  - 接口`ShowDomainFullConfig`新增响应参数 `origin_range_status`、`user_agent_filter`、`origin_request_url_rewrite`、`error_code_redirect_rules`
  - 接口`UpdateDomainFullConfig`新增请求参数 `origin_range_status`、`user_agent_filter`、`origin_request_url_rewrite`、`error_code_redirect_rules`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowTranscodingsTemplate`响应参数`width`、`height`改为非必填
  - 接口`UpdateTranscodingsTemplate`:
    - 新增请求参数 `trans_type`
    - 请求参数`width`、`height`改为非必填
  - 接口`CreateTranscodingsTemplate`:
    - 新增请求参数 `trans_type`
    - 请求参数`width`、`height`改为非必填

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeHealthCode`新增响应参数 `type`、`idcard_number`、`phone_number`、`province`、`city`、`vaccination_status`、`pcr_test_result`、`pcr_test_organization`、`pcr_test_time`、`pcr_sampling_time`、`reached_city`

### HuaweiCloud SDK VPCEP

- _新增特性_
  - 支持以下接口：
    - `UpdateEndpointServiceName`
    - `UpdateEndpointConnectionsDesc`
    - `BatchAddEndpointServicePermissions`
    - `BatchRemoveEndpointServicePermissions`
    - `UpdateEndpointServicePermissionDesc`
    - `UpdateEndpointPolicy`
    - `DeleteEndpointPolicy`
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateEndpointService`:
    - 新增请求参数 `description`
    - 新增响应参数 `description`
  - 接口`ListEndpointService`:
    - 新增请求参数 `public_border_group`
    - 新增响应参数 `description`、`public_border_group`
    - 响应参数`service_type`类型调整 `string` -> `enum`
    - 响应参数`server_type`类型调整 `enum` -> `string`
  - 接口`UpdateEndpointService`:
    - 新增请求参数 `description`
    - 新增响应参数 `description`
  - 接口`ListServiceDetails`:
    - 新增响应参数 `description`
    - 响应参数`service_type`类型调整 `string` -> `enum`
  - 接口`ListServiceConnections`移除响应参数 `id`、`marker_id`、`created_at`、`updated_at`、`domain_id`、`status`
  - 接口`AcceptOrRejectEndpoint`新增响应参数 `description`
  - 接口`ListServicePermissionsDetails`移除响应参数 `id`、`permission`、`created_at`
  - 接口`CreateEndpoint`:
    - 新增请求参数 `description`
    - 新增响应参数 `specification_name`、`description`、`policy_statement`、`enable_status`
  - 接口`ListEndpoints`:
    - 新增请求参数 `public_border_group`
    - 新增响应参数 `description`、`policy_statement`、`endpoint_pool_id`、`public_border_group`
  - 接口`ListEndpointInfoDetails`新增响应参数 `description`、`policy_statement`
  - 接口`ListVersionDetails`移除响应参数 `status`、`id`、`updated`、`version`、`min_version`、`links`
  - 接口`ListSpecifiedVersionDetails`移除响应参数 `status`、`id`、`updated`、`version`、`min_version`、`links`
  - 接口`ListResourceInstances`:
    - 新增请求参数 `sys_tags`、`without_any_tag`
    - 移除请求参数 `key`、`value`、`key`、`value`、`key`、`value`、`key`、`value`

# 3.1.4 2022-09-26

### HuaweiCloud SDK Moderation

- _新增特性_
  - 无
- _解决问题_
  - 修复接口`CheckImageModeration`响应参数类型错误的问题
- _特性变更_
  - 无

# 3.1.3 2022-09-22

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreatePublicip`新增请求参数 `port_id`
  - 接口`CreatePrePaidPublicip`新增请求参数 `port_id`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListDeviceMessages`新增响应参数 `error_info`
  - 接口`ShowDeviceMessage`新增响应参数 `error_info`

### HuaweiCloud SDK Moderation

- _新增特性_
  - 支持接口`CheckImageModeration`
- _解决问题_
  - 无
- _特性变更_
  - 接口`RunCreateAudioModerationJob`请求参数`url`、`categories`改为必填

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeIdCard`:
    - 新增请求参数 `detect_copy`
    - 新增响应参数 `detect_copy_result`

### HuaweiCloud SDK SMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListTemplates`移除响应参数 `disks`
  - 接口`ShowTemplate`移除响应参数 `disks`
  - 接口`UpdateMigproject`移除请求参数 `disks`
  - 接口`ShowMigproject`移除响应参数 `disks`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`PublishAssets`新增响应参数 `pack_type`、`pack_type`
  - 接口`UnpublishAssets`新增响应参数 `pack_type`、`pack_type`
  - 接口`ShowAssetMeta`新增响应参数 `pack_type`、`pack_type`
  - 接口`ShowAssetDetail`新增响应参数 `pack_type`、`pack_type`
  - 接口`ShowTakeOverTaskDetails`新增响应参数 `pack_type`、`pack_type`
  - 接口`ShowTakeOverAssetDetails`新增响应参数 `pack_type`、`pack_type`

# 3.1.2 2022-09-15

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecordDetails`新增响应参数 `root_resource_id`、`parent_resource_id`、`trade_id`、`product_spec_desc`

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ShowTags`、`CreateTags`、`BatchDeleteTags`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowUrlTaskInfo`:
    - 新增响应参数 `result`
    - 移除响应参数 `results`
  - 接口`ShowDomainFullConfig`新增响应参数 `error_code_cache`
  - 接口`UpdateDomainFullConfig`新增请求参数 `error_code_cache`

### HuaweiCloud SDK EVS

- _新增特性_
  - 支持以下接口：
    - `ShowVersion`
    - `ListVersions`
    - `CinderShowVolumeTransfer`
    - `CinderDeleteVolumeTransfer`
    - `CinderListVolumeTransfers`
    - `CinderCreateVolumeTransfer`
    - `CinderAcceptVolumeTransfer`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.1.1 2022-09-08

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerselfResourceRecordDetails`新增响应参数 `root_resource_id`、`parent_resource_id`、`trade_id`、`product_spec_desc`

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ShowTags`、`CreateTags`、`BatchDeleteTags`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowUrlTaskInfo`:
    - 新增响应参数 `result`
    - 移除响应参数 `results`
  - 接口`ShowDomainFullConfig`新增响应参数 `error_code_cache`
  - 接口`UpdateDomainFullConfig`新增请求参数 `error_code_cache`

### HuaweiCloud SDK EVS

- _新增特性_
  - 支持以下接口：
    - `ShowVersion`
    - `ListVersions`
    - `CinderShowVolumeTransfer`
    - `CinderDeleteVolumeTransfer`
    - `CinderListVolumeTransfers`
    - `CinderCreateVolumeTransfer`
    - `CinderAcceptVolumeTransfer`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.61 2022-09-01

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerOrders`新增请求参数 `indirect_partner_id`
  - 接口`ShowCustomerOrderDetails`新增请求参数 `indirect_partner_id`
  - 接口`ListCustomerOnDemandResources`新增请求参数 `indirect_partner_id`

### HuaweiCloud SDK IAM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateDomainProtectPolicy`:
    - 新增请求参数 `allow_user`、`mobile`、`admin_check`、`email`、`scene`
    - 移除响应参数 `operation_protection`
  - 接口`ShowDomainProtectPolicy`移除响应参数 `operation_protection`
  - 接口`UpdateDomainPasswordPolicy`请求参数`maximum_consecutive_identical_chars`、`minimum_password_age`、`minimum_password_length`、`number_of_recent_passwords_disallowed`、`password_not_username_or_invert`、`password_validity_period`、`password_char_combination`改为非必填
  - 接口`UpdateDomainLoginPolicy`请求参数`account_validity_period`、`custom_info_for_login`、`lockout_duration`、`login_failed_times`、`period_with_login_failures`、`session_timeout`、`show_recent_login_info`改为非必填
  - 接口`ShowDomainQuota`请求参数`type`新增枚举值`mapping`

# 3.0.60 2022-08-29

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreatePostPaidServers`新增请求参数 `batch_create_in_multi_az`

### HuaweiCloud SDK IMS

- _新增特性_
  - 支持接口`ShowJobProgress`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.59-rc 2022-08-25

### HuaweiCloud SDK Core

- _新增特性_
  - 无
- _解决问题_
  - 解决了部分错误码无法解析的问题
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeWebImage`:
    - 新增请求参数 `detect_font`
    - 新增响应参数 `font_list`、`font_scores`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CheckMd5Duplication`请求参数`size`类型调整 `int32` -> `int64`

# 3.0.58-rc 2022-08-22

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRecordIndex`请求参数`object`类型调整 `uri` -> `string`

# 3.0.57-rc 2022-08-18

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 支持接口`ListIndirectPartners`、`ListCosts`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListSubCustomers`新增请求参数 `indirect_partner_id`
  - 接口`CreateSubCustomer`新增请求参数 `indirect_partner_id`
  - 接口`ShowSubCustomerBudget`新增请求参数 `indirect_partner_id`
  - 接口`UpdateSubCustomerBudget`新增请求参数 `indirect_partner_id`
  - 接口`FreezeSubCustomers`新增请求参数 `indirect_partner_id`
  - 接口`UnfreezeSubCustomers`新增请求参数 `indirect_partner_id`

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持接口`ListServersByTag`
- _解决问题_
  - 无
- _特性变更_
  - 接口`NovaCreateServers`请求参数`destination_type`改为必填

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeIdCard`:
    - 新增请求参数 `detect_reproduce`
    - 新增响应参数 `detect_reproduce_result`

### HuaweiCloud SDK VOD

- _新增特性_
  - 支持以下接口：
    - `ListTranscodeTemplate`
    - `UpdateTranscodeTemplate`
    - `CreateTranscodeTemplate`
    - `DeleteTranscodeTemplate`
    - `ListTemplateGroupCollection`
    - `UpdateTemplateGroupCollection`
    - `CreateTemplateGroupCollection`
    - `DeleteTemplateGroupCollection`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.56-rc 2022-08-11

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListCosts`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持接口`ShowUrlTaskInfo`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowDomainFullConfig`新增响应参数 `ipv6_accelerate`
  - 接口`UpdateDomainFullConfig`新增请求参数 `ipv6_accelerate`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeMacaoIdCard`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.55-rc 2022-08-02

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`CreateRecordIndex`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.54-rc 2022-07-21

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`NeutronListSecurityGroupRules`新增响应参数 `security_group_rules_links`

# 3.0.53-rc 2022-07-14

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerBillsMonthlyBreakDown`新增响应参数 `effective_tag_pairs`、`cost_unit_pairs`

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateDomainFullConfig`新增请求参数 `tls_version`
  - 接口`ShowDomainFullConfig`新增响应参数 `tls_version`

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPublicips`响应参数`create_time`类型调整 `date-time` -> `string`
  - 接口`ShowPublicip`响应参数`create_time`类型调整 `date-time` -> `string`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPorts`新增响应参数 `port_filter`、`ovs_hybrid_plug`
  - 接口`UpdatePort`新增响应参数 `port_filter`、`ovs_hybrid_plug`
  - 接口`ShowPort`新增响应参数 `port_filter`、`ovs_hybrid_plug`
  - 接口`CreateSecurityGroup`新增响应参数 `remote_address_group_id`
  - 接口`ListSecurityGroups`新增响应参数 `remote_address_group_id`
  - 接口`ShowSecurityGroup`新增响应参数 `remote_address_group_id`
  - 接口`ListSecurityGroupRules`新增响应参数 `remote_address_group_id`
  - 接口`ShowSecurityGroupRule`新增响应参数 `remote_address_group_id`
  - 接口`NeutronListSecurityGroups`新增响应参数 `remote_address_group_id`
  - 接口`NeutronUpdateSecurityGroup`新增响应参数 `remote_address_group_id`
  - 接口`NeutronShowSecurityGroup`新增响应参数 `remote_address_group_id`
  - 接口`NeutronListSecurityGroupRules`新增响应参数 `remote_address_group_id`
  - 接口`NeutronShowSecurityGroupRule`新增响应参数 `remote_address_group_id`

# 3.0.52-rc 2022-07-07

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeVatInvoice`新增响应参数 `title`

# 3.0.51-rc 2022-06-30

### HuaweiCloud SDK DNS

- _新增特性_
  - 支持云解析服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK BSS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`SendVerificationMessageCode`请求参数`mobile_phone`改为必填

### HuaweiCloud SDK BSSINTL

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`SendVerificationMessageCode`请求参数`email`改为必填

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowDomainFullConfig`新增响应参数 `cache_url_parameter_filter`
  - 接口`UpdateDomainFullConfig`新增请求参数 `cache_url_parameter_filter`

### HuaweiCloud SDK DNS

- _新增特性_
  - 支持接口`CreateRecordSetWithBatchLines`、`BatchUpdateRecordSetWithLine`、`BatchDeleteRecordSetWithLine`
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRecordSetWithLine`请求参数`records`改为非必填

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeHkIdCard`、`RecognizeCambodianIdCard`、`RecognizeExitEntryPermit`、`RecognizeMainlandTravelPermit`
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeGeneralText`响应参数`direction`类型调整 `int32` -> `float`

# 3.0.50-rc 2022-06-19

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeIdDocument`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.49-rc 2022-06-02

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeHealthCode`新增响应参数 `words_block_count`、`words_block_list`
  - 接口`RecognizePcrTestRecord`响应参数`confidence`类型调整 `float` -> `object`

# 3.0.48-rc 2022-05-26

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`AttachServerVolume`新增请求参数 `volume_type`、`hw:passthrough`

# 3.0.47-rc 2022-05-19

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ResizeServer`新增请求参数 `dry_run`
  - 接口`ResizePostPaidServer`新增请求参数 `dry_run`
  - 接口`AttachServerVolume`新增请求参数 `dry_run`

### HuaweiCloud SDK VOD

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UploadMetaDataByUrl`请求参数`video_type`新增枚举值`M3U8`
  - 接口`PublishAssets`新增响应参数 `sign_url`
  - 接口`UnpublishAssets`新增响应参数 `sign_url`
  - 接口`ShowAssetMeta`新增响应参数 `sign_url`
  - 接口`ShowAssetDetail`新增响应参数 `sign_url`
  - 接口`ShowTakeOverTaskDetails`新增响应参数 `sign_url`
  - 接口`ShowTakeOverAssetDetails`新增响应参数 `sign_url`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPorts`响应参数`device_owner`新增枚举值`neutron:VIP_PORT`, 移除枚举值`network:VIP_PORT`
  - 接口`UpdatePort`响应参数`device_owner`新增枚举值`neutron:VIP_PORT`, 移除枚举值`network:VIP_PORT`
  - 接口`ShowPort`响应参数`device_owner`新增枚举值`neutron:VIP_PORT`, 移除枚举值`network:VIP_PORT`

# 3.0.46-rc 2022-05-12

### HuaweiCloud SDK FRS

- _新增特性_
  - 支持以下接口：
    - `DetectLiveByUrlIntl`
    - `DetectLiveByFileIntl`
    - `DetectLiveByBase64Intl`
    - `DetectFaceByFileIntl`
    - `DetectFaceByUrlIntl`
    - `DetectFaceByBase64Intl`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IAM

- _新增特性_
  - 支持接口`ShowDomainRoleAssignments`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeHealthCode`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.45-rc 2022-04-28

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 修复接口`RecognizeMyanmarDriverLicense`的响应体类型错误的问题
- _特性变更_
  - 无

# 3.0.44-rc 2022-04-21

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListConsumeSubCustomers`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListCustomerBillsMonthlyBreakDown`新增响应参数 `sub_service_type_code`、`sub_service_type_name`、`sub_resource_type_code`、`sub_resource_type_name`、`sub_resource_id`、`sub_resource_name`

# 3.0.43-rc 2022-04-14

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateDomainFullConfig`新增请求参数 `sources`、`origin_protocol`、`force_redirect`、`compress`
  - 接口`ShowDomainFullConfig`:
    - 新增响应参数 `sources`、`origin_protocol`、`force_redirect`、`compress`
    - 响应参数`certificate_source`类型调整 `string` -> `int32`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListServersDetails`新增请求参数 `ip_eq`

# 3.0.42-rc 2022-04-07

### HuaweiCloud SDK BSS

- _新增特性_
  - 支持接口`ListStoredValueCards`
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`ListSubCustomerDiscounts`、`BatchSetSubCustomerDiscount`
  - 接口`ShowRefundOrderDetails`新增响应参数 `resource_type_name`、`service_type_name`
  - 接口`ListCustomerOrders`新增响应参数 `service_type_name`
  - 接口`ShowCustomerOrderDetails`新增响应参数 `service_type_name`、`service_type_name`
  - 接口`ListPayPerUseCustomerResources`新增响应参数 `resource_type_name`、`service_type_name`
  - 接口`ListCustomerOnDemandResources`新增响应参数 `service_type_name`、`resource_type_name`
  - 接口`ListSubcustomerMonthlyBills`新增响应参数 `cloud_service_type_name`、`resource_type_name`
  - 接口`ListCustomerselfResourceRecordDetails`新增响应参数 `cloud_service_type_name`、`resource_type_name`、`period_type`
  - 接口`ListCustomerselfResourceRecords`新增响应参数 `cloud_service_type_name`、`resource_type_name`
  - 接口`ShowCustomerMonthlySum`新增响应参数 `service_type_name`、`resource_type_name`
  - 接口`ListCustomerBillsFeeRecords`:
    - 新增请求参数 `bill_date_begin`、`bill_date_end`
    - 新增响应参数 `service_type_name`、`resource_type_name`
  - 接口`ListUsageTypes`新增响应参数 `resource_type_name`、`service_type_name`
  - 接口`ListSubCustomerBillDetail`新增响应参数 `service_type_name`、`resource_type_name`
  - 接口`ListCustomerBillsMonthlyBreakDown`新增响应参数 `service_type_name`、`resource_type_name`
  - 接口`ListFreeResourceInfos`新增响应参数 `service_type_name`
  - 接口`ListIncentiveDiscountPolicies`新增响应参数 `service_type_name`

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持接口`RecognizeWaybillElectronic`
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeVatInvoice`新增响应参数 `print_code`
  - 接口`RecognizeVehicleLicense`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`
  - 接口`RecognizeTaxiInvoice`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`
  - 接口`RecognizeDriverLicense`新增响应参数 `type`、`accumulated_scores`、`status`、`generation_date`、`current_time`
  - 接口`RecognizeTrainTicket`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`
  - 接口`RecognizeBankcard`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`

# 3.0.41-rc 2022-03-25

### HuaweiCloud SDK CDN

- _新增特性_
  - 支持V2版本接口：
    - `ShowDomainLocationStats`
    - `ShowDomainStats`
    - `ShowTopUrl`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK IMS

- _新增特性_
  - 支持接口`ListVersions`、`ShowVersion`
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateDataImage`请求参数`os_type`改为非必填

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 支持接口 `ResetFingerprint`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeVatInvoice`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`
  - 接口`RecognizeIdCard`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`
  - 接口`RecognizeDriverLicense`:
    - 新增请求参数 `return_text_location`
    - 新增响应参数 `text_location`

# 3.0.40-rc 2022-03-10

### HuaweiCloud SDK CDN

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowTopUrl`移除请求参数 `X-Auth-Token`
  - 接口`ShowDomainLocationStats`移除请求参数 `X-Auth-Token`
  - 接口`ShowDomainItemDetails`移除请求参数 `X-Auth-Token`
  - 接口`ShowDomainStats`移除请求参数 `X-Auth-Token`
  - 接口`ShowDomainItemLocationDetails`移除请求参数 `X-Auth-Token`

# 3.0.39-rc 2022-03-07

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreatePrePaidPublicip`的请求参数`ip_version`类型变更： `integer` -> `enum`

# 3.0.38-rc 2022-02-25

### HuaweiCloud SDK CDN

- _新增特性_
    - 支持内容分发网络服务
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`ListSingleStreamDetail`
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK VOD

- _新增特性_
  - 支持接口`ListDomainLogs`
- _解决问题_
  - 无
- _特性变更_
  - 接口`DeleteAssets`新增请求参数 `delete_type`

### HuaweiCloud SDK VPC

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`NeutronListSubnets`新增响应参数`subnetpool_id`

# 3.0.37-rc 2022-02-10

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`ListTranscodeTaskCount`、`ListAreaDetail`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListRecordData`新增请求参数 `publish_domain`
  - 接口`CreateRecordRule`移除请求参数 `plan_record_time`
  - 接口`ListRecordRules`移除响应参数 `plan_record_time`
  - 接口`ShowRecordRule`移除响应参数 `plan_record_time`
  - 接口`UpdateRecordRule`:
    - 移除请求参数 `plan_record_time`
    - 移除响应参数 `plan_record_time`
  - 接口`CreateRecordCallbackConfig`移除请求参数 `on_demand_callback_url`
  - 接口`ListRecordCallbackConfigs`移除响应参数 `on_demand_callback_url`
  - 接口`ShowRecordCallbackConfig`移除响应参数 `on_demand_callback_url`
  - 接口`UpdateRecordCallbackConfig`移除请求参数 `on_demand_callback_url`

# 3.0.36-rc 2022-01-25

### HuaweiCloud SDK IAM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateLoginToken`新增响应参数`session_user_id`

# 3.0.35-beta 2022-01-10

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateServers`新增请求参数 `delete_on_termination`

### HuaweiCloud SDK FunctionGraph

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`UpdateFunctionConfig`:
    - 新增请求参数 `is_stateful_function`
    - 新增响应参数 `is_stateful_function`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`GlanceListImages`响应参数`active_at`改为非必填
  - 接口`GlanceShowImage`响应参数`active_at`改为非必填
  - 接口`GlanceUpdateImage`响应参数`active_at`改为非必填

# 3.0.34-beta 2021-12-25

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`NovaListServerActions`移除响应参数`updated_at`

# 3.0.33-beta 2021-12-17

### HuaweiCloud SDK OCR

- _新增特性_
  - 支持以下接口：
    - `RecognizeThailandIdcard`
    - `RecognizeMyanmarIdcard`
    - `RecognizeMyanmarDriverLicense`
    - `RecognizeChileIdCard`
    - `RecognizeThailandLicensePlate`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.32-beta 2021-12-10

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DetectFaceByFile`移除响应参数 `landmark`、`gender`、`yaw_angle`、`roll_angle`、`pitch_angle`、`headpose`、`smile`、`skin`、`ethnic`
  - 接口`DetectFaceByUrl`移除响应参数 `landmark`、`gender`、`yaw_angle`、`roll_angle`、`pitch_angle`、`headpose`、`smile`、`skin`、`ethnic`
  - 接口`DetectFaceByBase64`移除响应参数 `landmark`、`gender`、`yaw_angle`、`roll_angle`、`pitch_angle`、`headpose`、`smile`、`skin`、`ethnic`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateRecordRule`的请求参数`default_record_config`改为必填

# 3.0.31-beta 2021-11-29

### HuaweiCloud SDK EVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 移除接口`CinderExportToImage`

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`NovaShowServer`和`NovaListServersDetails`新增响应参数`os:scheduler_hints`

# 3.0.30-beta 2021-11-25

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreatePrePaidPublicip`、`CreatePublicip`新增请求和响应参数`alias`
  - 接口`ShowPublicip`、`UpdatePublicip`新增响应参数`alias`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeHandwriting`移除响应参数`extracted_data`

# 3.0.29-beta 2021-11-12

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowJob`新增响应参数`results`

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListBandwidthDetail`、`ListUsersOfStream`新增请求参数`country`和`protocol`
  - 接口`ListDomainTrafficDetail`、`ListDomainBandwidthPeak`、`ListDomainTrafficSummary`新增请求参数`protocol`
  - 接口`ListTranscodeData`新增请求参数`stream`
  - 接口`ListHistoryStreams`新增请求参数`stream`、`start_time`、`end_time`

### HuaweiCloud SDK OCR

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`RecognizeGeneralTable`新增响应参数`confidence`

### HuaweiCloud SDK VPC

- _新增特性_
  - 支持接口（V3）: `AddVpcExtendCidr`、`RemoveVpcExtendCidr`、`ListVpcs`、`ShowVpc`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.28-beta 2021-10-25

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateSharedBandwidth`新增请求参数`bandwidth_type`

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`AddFacesByFile`、`AddFacesByBase64`、`AddFacesByUrl`新增请求参数`single`

### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ShowJob`新增响应参数`current_task`、`image_name`、`process_percent`

### HuaweiCloud SDK IoTDA

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListDevices`新增请求参数`status`
  - 接口`CreateRuleAction`新增请求参数`file_path`

### HuaweiCloud SDK OCR

- _新增特性_
  - 新增接口`RecognizeInsurancePolicy`、`RecognizeFinancialStatement`、`RecognizeQualificationCertificate`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.27-beta 2021-10-19

### HuaweiCloud SDK EIP

- _新增特性_
  - 支持以下接口：
    - `ListCommonPools`
    - `ListPublicBorderGroups`
    - `ListPublicipPool`
    - `ShowPublicipPool`
    - `ListShareBandwidthTypes`
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListPublicips`新增请求参数`allow_share_bandwidth_type_any`
  - 接口`NeutronListFloatingIps`的请求参数`limit`的类型调整： `string` -> `integer`
  - 接口`NeutronUpdateFloatingIp`请求体的名称调整： `floatingip` -> `NeutronUpdateFloatingIpRequestBody`
  - 接口`ShowPublicip`新增响应参数`allow_share_bandwidth_types`

# 3.0.26-beta 2021-10-11

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DisassociateServerVirtualIp`的请求参数`reverse_binding`改为非必填

### HuaweiCloud SDK FRS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`DetectFaceByFile`、`DetectFaceByBase64`、`DetectFaceByUrl`的请求参数`attributes`可选值调整为`2,4,6,7,8,11,12,13,21`

# 3.0.25-beta 2021-09-29

### HuaweiCloud SDK ECS

- _新增特性_
  - 支持以下接口:
    - `ListServerTags`
    - `BatchAttachSharableVolumes`
    - `ShowServerAutoRecovery`
    - `BatchResetServersPassword`
    - `ReinstallServerWithoutCloudInit`
    - `ChangeServerOsWithoutCloudInit`
    - `BatchUpdateServersName`
    - `ShowServerPassword`
    - `AssociateServerVirtualIp`
    - `MigrateServer`
    - `ShowServerBlockDevice`
    - `DisassociateServerVirtualIp`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.24-beta 2021-09-26

### HuaweiCloud SDK Meeting

- _新增特性_
  - 支持接口`InviteOperateVideo`、`SetSsoConfig`、`ShowSsoConfig`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.23-beta 2021-09-24

### HuaweiCloud SDK Live

- _新增特性_
  - 无
- _解决问题_
  - 修复找不到接口`ListRecordContents`的问题
- _特性变更_
  - 无

# 3.0.22-beta 2021-09-24

### HuaweiCloud SDK IVS

- _新增特性_
  - 支持人证核身服务
- _解决问题_
  - 无
- _特性变更_
  - 无

### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`ListRecordContents`
- _解决问题_
  - 无
- _特性变更_
  - 无

# 3.0.21-beta 2021-09-16

### HuaweiCloud SDK OCR
- _新增特性_
  - 支持接口`RecognizeInvoiceVerification`
- _解决问题_
  - 无
- _特性变更_
  - 无 
  
# 3.0.20-beta 2021-09-10

### HuaweiCloud SDK VOD

- _新增特性_
    - 支持视频点播服务
- _解决问题_
    - 无
- _特性变更_
    - 无
    
### HuaweiCloud SDK OCR

- _新增特性_
    - 支持文字识别服务
- _解决问题_
    - 无
- _特性变更_
    - 无
    
### HuaweiCloud SDK EVS
- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateVolume`的请求参数`size`改为必填   


# 3.0.19-beta 2021-08-31

### HuaweiCloud SDK FRS
- _新增特性_
  - 支持以下接口:
    - `DetectLiveByUrl`
    - `DetectLiveFaceByUrl`
    - `DetectLiveByFile`
    - `DetectLiveFaceByFile`
    - `DetectLiveByBase64`
    - `DetectLiveFaceByBase64`
- _解决问题_
  - 无
- _特性变更_
  - 无
  
### HuaweiCloud SDK Live
- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListLiveStreamsOnline`新增响应参数`video_frame_rate`、`audio_frame_rate`、`audio_bitrate`、`resolution
  
# 3.0.18-beta 2021-08-25

### HuaweiCloud SDK FRS

- _新增特性_
    - 支持人脸识别服务
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK ECS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListServerInterfaces`新增以下响应参数:
    - `delete_on_termination`
    - `driver_mode`
    - `min_rate`
    - `multiqueue_num`
    - `pci_address`
  - 接口`ListServersDetails`新增响应参数`cpu_options`和`hypervisor`
  
### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`BatchCreateSharedBandwidths`新增请求参数和响应参数`public_border_group`
  - 接口`AddPublicipsIntoSharedBandwidth`新增响应参数`public_border_group`
  
### HuaweiCloud SDK Live

- _新增特性_
  - 支持接口`RunRecord`
- _解决问题_
  - 无
- _特性变更_
  - 无  

# 3.0.17-beta 2021-08-10

### HuaweiCloud SDK Core

- _Features_
    - 支持自定义认证
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK EIP

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListBandwidths`、`ShowPublicip`的响应参数名称调整：`publicip_border_group` -> `public_border_group`

### HuaweiCloud SDK EVS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`ListVolumes`新增请求参数`server_id`
  
### HuaweiCloud SDK IAM

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 接口`CreateDeployment`移除响应参数`order_id`
  
### HuaweiCloud SDK IMS

- _新增特性_
  - 无
- _解决问题_
  - 无
- _特性变更_
  - 修改接口`UpdateImage`的请求参数`value`为必填参数  
  
# 3.0.16-beta 2021-07-30

### HuaweiCloud SDK Live

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 接口`ShowDomain`移除响应参数`domain_source`

### HuaweiCloud SDK IMS

- _新增特性_
    - 无
- _解决问题_
    - [Issue 40](https://github.com/huaweicloud/huaweicloud-sdk-java-v3/issues/40): 修复响应参数`__lazyloading`类型定义错误的问题
- _特性变更_
    - 无
    
# 3.0.15-beta 2021-07-09

### HuaweiCloud SDK Core

- _新增特性_
    - 支持Region管理
- _解决问题_
    - 无
- _特性变更_
    - 无
    
### HuaweiCloud SDK Live

- _新增特性_
    - 无
- _解决问题_
    - 修复通过ip调用接口失败的问题
- _特性变更_
    - 无
      
### HuaweiCloud SDK EIP

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 接口`CreateSharedBandwidth`、`ListBandwidths`新增响应参数`publicip_border_group`

### HuaweiCloud SDK IMS

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 接口`GlanceCreateImageMetadata`新增响应参数`__root_origin`、`checksum`、`size`
    - 接口`GlanceAddImageMember`移除请求参数`deleted`、`deleted_at`,新增以下请求参数：
        - `__lazyloading`
        - `__os_feature_list`
        - `__root_origin`
        - `__sequence_num`
        - `__support_agent_list`
        - `__system__cmkid`
        - `active_at`
        - `hw_vif_multiqueue_enabled`
        - `max_ram`
        - `__image_location`
        - `__is_config_init`
        - `__account_code`
    
### HuaweiCloud SDK IoTDA

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 接口`ListRules`新增响应参数`edge_node_ids`、`last_update_time`

# 3.0.14-beta 2021-06-30

### HuaweiCloud SDK Live

- _新增特性_
    - 支持V2接口
- _解决问题_
    - 无
- _特性变更_
    - 无
# 3.0.13-beta 2021-06-25

### HuaweiCloud SDK Core

- _新增特性_
    - 支持multipart/form-data
- _解决问题_
    - 无
- _特性变更_
    - 无
# 3.0.12-beta 2021-06-01

### HuaweiCloud SDK LIVE

- _新增特性_
    - 支持视频直播服务
- _解决问题_
    - 无
- _特性变更_
    - 无
# 3.0.11-beta 2021-05-25

### HuaweiCloud SDK Core

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - client的方法中的request对象添加注释
    - Request对象的非body对象添加注释
    - DTO的get方法添加注释
# 3.0.10-beta 2021-03-19

### HuaweiCloud SDK ECS

- _新增特性_
    - 无
- _解决问题_
    - 解决 ListFlavors 接口响应体反序列化出错的问题
- _特性变更_
    - 无

# 3.0.9-beta 2021-03-15

### HuaweiCloud SDK ECS

- _新增特性_
    - 新增支持接口：查询云服务器组详情 `ShowServerGroup`
- _解决问题_
    - 无
- _特性变更_
    - 云服务器获取密码接口名调整：`ShowWindowsServerPasswordResponseBody` → `ShowServerPasswordResponseBody`
    - 云服务器清除密码接口名调整：`DeleteWindowsServerPassword` → `DeleteServerPassword`

### HuaweiCloud SDK IAM

- _新增特性_
    - 新增支持接口：
        - 查询身份提供商详情 `KeystoneShowIdentityProvider`
        - 注册身份提供商 `KeystoneCreateIdentityProvider`
        - 更新身份提供商 `KeystoneUpdateIdentityProvider`
        - 删除身份提供商 `KeystoneDeleteIdentityProvider`
        - 获取联邦认证token(OpenId Connect Id token方式) `CreateTokenWithIdToken`
- _解决问题_
    - 无
- _特性变更_
    - 下线接口：获取联邦认证unscoped token `CreateUnscopeTokenByIdpInitiated`

### HuaweiCloud SDK IMS

- _新增特性_
    - 新增支持接口：
        - 按标签查询镜像 `ListImageByTags`
        - 查询租户所有镜像标签 `ListImagesTags`
        - 查询镜像标签 `ListImageTags`
        - 添加镜像标签 `AddImageTag`
        - 删除镜像标签 `DeleteImageTag`
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK IoTDA

- _新增特性_
    - 支持设备接入服务
- _解决问题_
    - 无
- _特性变更_
    - 无

# 3.0.8-beta 2021-02-27

### HuaweiCloud SDK Core

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 优化 README 文档描述及 CHANGELOG 日志格式

### HuaweiCloud SDK IAM

- _新增特性_
    - 无
- _解决问题_
    - 修复 `KeystoneUserResult` 类中属性名的错误定义问题：`pwd_stength` → `pwd_strength`
- _特性变更_
    - 无

### HuaweiCloud SDK IMS

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 类 `ListImagesRequest` 中取消属性 `diskFormat` 的默认值 `vhd`
    - 类 `GlanceListImagesRequest` 中取消属性  `diskFormat` 的默认值 `vhd`

# 3.0.7-beta 2021-02-07

### HuaweiCloud SDK IMS

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 查询镜像支持的OS列表(ListOsVersions)接口返回体属性 `os_bit` 数据类型调整：string → int32

# 3.0.6-beta 2021-01-30

### HuaweiCloud SDK ECS

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 接口名称调整: UpdateAutoTerminateTimeServer → UpdateServerAutoTerminateTime

### HuaweiCloud SDK EVS

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 创建云硬盘接口支持指定专属存储池ID
    - 查询配额相关接口属性 `allocated` 类型调整: string → int

### HuaweiCloud SDK IAM

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 查询IAM用户详情接口响应体增加属性`access_mode`

# 3.0.5-beta 2021-01-25

### HuaweiCloud SDK Core

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 设置默认ConnectionTimeout为60秒
    - 设置默认ReadTimeout为120秒

### HuaweiCloud SDK ECS

- _新增特性_
    - 新增支持接口：修改云服务器云主机销毁时间
- _解决问题_
    - 无
- _特性变更_
    - 无

# 3.0.4-beta 2021-01-15

### HuaweiCloud SDK Core

- _新增特性_
    - 无
- _解决问题_
    - 无
- _特性变更_
    - 修改 `newBuilder` 函数

# 3.0.3-beta 2020-12-15

### HuaweiCloud SDK ECS

- _新增特性_
    - 新增支持弹性云服务器
- _解决问题_
    - 无
- _特性变更_
    - 无

### HuaweiCloud SDK VPC

- _新增特性_
    - 支持VPC v2版本的接口
- _解决问题_
    - 无
- _特性变更_
    - 无

## Huaweicloud SDK EIP

- _新增特性_
    - 支持弹性公网IP服务
- _解决问题_
    - 无
- _特性变更_
    - 无

# 3.0.2-beta 2020-12-04

### HuaweiCloud SDK Core

- _新增特性_
    - 无
- _解决问题_
    - 解决从环境变量获取Credentials 时 HUAWEICLOUD_SDK_TYPE 变量没设置导致的 Credentials 类型错误问题。
- _特性变更_
    - 增加侦听器功能来获取原始的为加密的Http请求和返回信息。

# 3.0.1-beta 2020-10-19

### 首次发布

- _已支持服务_
    - 统一身份认证服务（IAM）