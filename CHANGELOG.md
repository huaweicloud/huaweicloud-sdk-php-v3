# 3.1.37 2023-05-18

### HuaweiCloud SDK CBR

- _Features_
  - Support the following interfaces：
    - `AddAgentPath`
    - `ShowAgent`
    - `UpdateAgent`
    - `UnregisterAgent`
    - `ListAgent`
    - `RegisterAgent`
    - `RemoveAgentPath`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateRefreshTasks**
    - changes of request param
      - `* refresh_task.mode: boolean -> string`
  - **ShowDomainFullConfig**
    - changes of response param
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
    - changes of request param
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
    - changes of response param
      - `+ domain.sources.obs_bucket_type`

### HuaweiCloud SDK CSE

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **UpgradeEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`
  - **RetryEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`
  - **DownloadKie**
    - changes of response param
      - `+ data.id`
  - **CreateEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`
  - **DeleteEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`

### HuaweiCloud SDK DWS

- _Features_
  - Support the interfaces `ListAvailableDisasterClusters`, `CheckDisasterName`, `ShowDisasterDetail`, `UpdateDisasterInfo`
- _Bug Fix_
  - None
- _Change_
  - **CreateCluster**
    - changes of request param
      - `+ cluster.tags`

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateServers**
    - changes of request param
      - `+ server.root_volume.metadata`
      - `- server.root_volume.extendparam.__system__encrypted`
      - `- server.root_volume.extendparam.__system__cmkid`
      - `+ server.data_volumes.delete_on_termination`
  - **CreatePostPaidServers**
    - changes of request param
      - `+ server.data_volumes.delete_on_termination`
      - `+ server.root_volume.metadata`
      - `- server.root_volume.extendparam.__system__encrypted`
      - `- server.root_volume.extendparam.__system__cmkid`

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **BroadcastMessage**
    - changes of request param
      - `+ ttl`
      - `+ message_id`
  - **ShowDeviceGroup**
    - changes of response param
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **UpdateDeviceGroup**
    - changes of response param
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **SearchDevices**
    - changes of response param
      - `+ devices.groups`
  - **AddDeviceGroup**
    - changes of request param
      - `+ group_type`
      - `+ dynamic_group_rule`
    - changes of response param
      - `+ dynamic_group_rule`
      - `+ group_type`
  - **ListDeviceGroups**
    - changes of request param
      - `+ group_type`
      - `+ name`
    - changes of response param
      - `+ device_groups.group_type`
      - `* device_groups: list<DeviceGroupResponsSummery> -> list<DeviceGroupResponseSummary>`

# 3.1.36 2023-05-11

### HuaweiCloud SDK AOS

- _Features_
  - Support the interface `ContinueDeployStack`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK CBR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ShowVaultResourceInstances**
    - changes of response param
      - `* resources.resource_detail: list<Vault> -> object<InstancesResourceDetail>`
  - **ListPolicies**
    - changes of response param
      - `+ policies.operation_definition.full_backup_interval`
  - **CreatePolicy**
    - changes of request param
      - `+ policy.operation_definition.full_backup_interval`
    - changes of response param
      - `+ policy.operation_definition.full_backup_interval`
  - **ShowPolicy**
    - changes of response param
      - `+ policy.operation_definition.full_backup_interval`
  - **UpdatePolicy**
    - changes of request param
      - `+ policy.operation_definition.full_backup_interval`
    - changes of response param
      - `+ policy.operation_definition.full_backup_interval`
  - **CreateVault**
    - changes of request param
      - `- vault.billing.extra_info`

### HuaweiCloud SDK ECS

- _Features_
  - Support the interface `NovaAttachInterface`
- _Bug Fix_
  - None
- _Change_
  - **ReinstallServerWithoutCloudInit**
    - changes of request param
      - `+ os-reinstall.metadata`
  - **ChangeServerOsWithoutCloudInit**
    - changes of request param
      - `+ os-change.metadata`
  - **ReinstallServerWithCloudInit**
    - changes of request param
      - `+ os-reinstall.metadata.__system__encrypted`
      - `+ os-reinstall.metadata.__system__cmkid`
  - **ChangeServerOsWithCloudInit**
    - changes of request param
      - `+ os-change.metadata.__system__encrypted`
      - `+ os-change.metadata.__system__cmkid`
  - **CreateServers**
    - changes of request param
      - `+ server.root_volume.extendparam.__system__encrypted`
      - `+ server.root_volume.extendparam.__system__cmkid`
  - **CreatePostPaidServers**
    - changes of request param
      - `+ server.root_volume.extendparam.__system__encrypted`
      - `+ server.root_volume.extendparam.__system__cmkid`

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListImages**
    - changes of request param
      - `+ __imagetype: enum value [market]`

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateRecordIndex**
    - changes of response param
      - `+ width`
      - `- weight`
  - **ListAreaDetail**
    - changes of request param
      - `* play_domains: required -> optional`

# 3.1.35 2023-04-27

### HuaweiCloud SDK CBR

- _Features_
    - Support Cloud Backup and Recovery service.
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK LTS

- _Features_
    - Support `Log Tank Service`.
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ShowDomainFullConfig**
    - changes of response param
      - `+ configs.ipv6_accelerate`
      - `+ configs.origin_range_status`

### HuaweiCloud SDK CFW

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListIpsProtectModeUsingPost**
    - changes of response param
      - `+ data`
      - `- object_id`
      - `- status`

### HuaweiCloud SDK CSMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListResourceInstances**
    - changes of response param
      - `+ resources.sys_tags`

### HuaweiCloud SDK DCS

- _Features_
  - Support the interfaces `ResetPassword`, `UpdateInstanceBandwidth`, `ListConfigTemplates`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK KMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListKeys**
    - changes of response param
      - `+ key_details.partition_type`
  - **ListKeyDetail**
    - changes of response param
      - `+ key_info.partition_type`
  - **ListRetirableGrants**
    - changes of response param
      - `+ total`
  - **ListKmsByTags**
    - changes of response param
      - `+ resources.resource_detail.partition_type`

### HuaweiCloud SDK SMS

- _Features_
  - Support the following interfaces：
    - `ListApiVersion`
    - `ShowApiVersion`
    - `ShowConfig`
    - `UpdateNetworkCheckInfo`
    - `ShowConfigSetting`
    - `UploadSpecialConfigurationSetting`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.34 2023-04-20

### HuaweiCloud SDK AOS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **GetStackTemplate**
    - changes of request param
      - `- executor`
  - **ListStackEvents**
    - changes of request param
      - `- executor`
  - **ListStackOutputs**
    - changes of request param
      - `- executor`
  - **DeleteStack**
    - changes of request param
      - `- executor`
  - **DeleteExecutionPlan**
    - changes of request param
      - `- executor`
  - **ApplyExecutionPlan**
    - changes of request param
      - `- executor`
  - **GetExecutionPlan**
    - changes of request param
      - `- executor`
  - **ListStackResources**
    - changes of request param
      - `- executor`
  - **ListExecutionPlans**
    - changes of request param
      - `- executor`
  - **CreateExecutionPlan**
    - changes of request param
      - `- executor`
  - **GetExecutionPlanMetadata**
    - changes of request param
      - `- executor`
  - **GetStackMetadata**
    - changes of request param
      - `- executor`
  - **ListStacks**
    - changes of request param
      - `- executor`
  - **CreateStack**
    - changes of request param
      - `- executor`
  - **DeployStack**
    - changes of request param
      - `- executor`

### HuaweiCloud SDK BSSINTL

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListCustomerselfResourceRecordDetails**
    - changes of response param
      - `+ monthly_records.pre_order_id`
      - `+ monthly_records.az_code_infos`

### HuaweiCloud SDK CDN

- _Features_
  - Support the interfaces `ShowDomainFullConfig`, `UpdateDomainFullConfig`
- _Bug Fix_
  - None
- _Change_
  - **ShowDomainFullConfig**
    - changes of response param
      - `+ configs.origin_follow302_status`
      - `+ configs.cache_rules`
      - `+ configs.ip_filter`
      - `+ configs.referer`
      - `+ configs.force_redirect.redirect_code`
  - **UpdateDomainFullConfig**
    - changes of request param
      - `+ configs.origin_follow302_status`
      - `+ configs.cache_rules`
      - `+ configs.ip_filter`
      - `+ configs.referer`
      - `+ configs.force_redirect.redirect_code`

### HuaweiCloud SDK DCS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateRedislogDownloadLink**
    - changes of response param
      - `+ backup_id`

### HuaweiCloud SDK IoTDA

- _Features_
  - Support the interface `BroadcastMessage`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **RecognizeDriverLicense**
    - changes of response param
      - `+ result.front`
      - `+ result.back`
  - **RecognizeThailandIdcard**
    - changes of response param
      - `+ result.type`
      - `+ result.name_en`
      - `+ result.ref_number`
      - `+ result.confidence.name_en`
      - `+ result.confidence.ref_number`

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListVpcsByTags**
    - changes of response param
      - `+ resources.resource_detail`
      - `- resources.resouce_detail`
  - **ListSubnetsByTags**
    - changes of response param
      - `+ resources.resource_detail`
      - `- resources.resouce_detail`
  - **UpdateRouteTable**
    - changes of request param
      - `+ routetable.routes.add`
      - `+ routetable.routes.mod`
      - `+ routetable.routes.del`
      - `* routetable.routes: map<string, list<RouteTableRoute>> -> object<RouteTableRouteAction>`

### HuaweiCloud SDK VPCEP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListServiceDescribeDetails**
    - changes of response param
      - `+ public_border_group`
  - **ListServiceDetails**
    - changes of response param
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **UpdateEndpointService**
    - changes of request param
      - `+ tcp_proxy`
    - changes of response param
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **ListEndpointInfoDetails**
    - changes of response param
      - `+ endpoint_pool_id`
      - `+ public_border_group`
  - **CreateEndpointService**
    - changes of request param
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
    - changes of response param
      - `+ enable_policy`
      - `+ tcp_proxy: enum value [proxy_vni]`
  - **ListEndpointService**
    - changes of response param
      - `+ endpoint_services.enable_policy`
      - `+ endpoint_services.tcp_proxy: enum value [proxy_vni]`
  - **CreateEndpoint**
    - changes of response param
      - `+ endpoint_pool_id`
      - `+ public_border_group`
      - `+ ip`

# 3.1.33 2023-04-13

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListCustomerselfResourceRecordDetails**
    - changes of response param
      - `+ monthly_records.pre_order_id`
      - `+ monthly_records.az_code_infos`

### HuaweiCloud SDK EVS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ShowVolume**
    - changes of response param
      - `+ volume.iops`
      - `+ volume.throughput`
  - **ListVolumes**
    - changes of response param
      - `+ volumes.iops`
      - `+ volumes.throughput`

### HuaweiCloud SDK Live

- _Features_
  - Support the following interfaces：
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
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK SIS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **RecognizeShortAudio**
    - changes of request param
      - `+ config.property: enum value [english_8k_common,english_16k_common]`
  - **CollectTranscriberJob**
    - changes of response param
      - `+ job_id`

### HuaweiCloud SDK WAF

- _Features_
  - Support the interfaces `CreateCloudWafPostPaidResource`, `DeleteCloudWafPostPaidResource`
- _Bug Fix_
  - None
- _Change_
  - **ListCustomRules**
    - changes of response param
      - `+ items.name`

# 3.1.32 2023-04-06

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateRefreshTasks**
    - changes of request param
      - `+ refresh_task.mode`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **RecognizeFinancialStatement**
    - changes of request param
      - `+ return_rectification_matrix`
    - changes of response param
      - `+ result.rectification_matrix`

# 3.1.31 2023-03-30

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListRenewRateOnPeriod`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK BSSINTL

- _Features_
  - Support the interface `ListRenewRateOnPeriod`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListOtaPackageInfo**
    - changes of request param
      - `- Sp-Auth-Token`
  - **CreateOtaPackage**
    - changes of request param
      - `- Sp-Auth-Token`
  - **DeleteOtaPackage**
    - changes of request param
      - `- Sp-Auth-Token`
  - **ShowOtaPackage**
    - changes of request param
      - `- Sp-Auth-Token`
  - **ShowRuleAction**
    - changes of response param
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **UpdateRuleAction**
    - changes of request param
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
    - changes of response param
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **CreateRuleAction**
    - changes of request param
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
    - changes of response param
      - `+ channel_detail.http_forwarding.signature_enable`
      - `+ channel_detail.http_forwarding.token`
  - **ListRuleActions**
    - changes of response param
      - `+ actions.channel_detail.http_forwarding.signature_enable`
      - `+ actions.channel_detail.http_forwarding.token`
  - **ShowRule**
    - changes of response param
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **UpdateRule**
    - changes of request param
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
    - changes of response param
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **CreateRule**
    - changes of request param
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
    - changes of response param
      - `+ actions.device_alarm.dimension`
      - `+ condition_group.conditions.device_linkage_status_condition`
      - `+ condition_group.conditions.device_property_condition.filters.in_values`
  - **ListRules**
    - changes of response param
      - `+ rules.actions.device_alarm.dimension`
      - `+ rules.condition_group.conditions.device_linkage_status_condition`
      - `+ rules.condition_group.conditions.device_property_condition.filters.in_values`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **PublishAssetFromObs**
    - changes of request param
      - `+ video_type: enum value [RMVB,WEBM]`

### HuaweiCloud SDK WAF

- _Features_
  - Support the interfaces `ShowValueList`, `ShowPrivacyRule`, `ShowAntitamperRule`, `ShowWhiteBlackIpRule`
- _Bug Fix_
  - None
- _Change_
  - **ShowCcRule**
    - changes of response param
      - `+ name`
      - `* mode: number -> int32`
  - **UpdateCcRule**
    - changes of request param
      - `+ name`
    - changes of response param
      - `+ name`
      - `* mode: number -> int32`
  - **DeleteCcRule**
    - changes of response param
      - `+ name`
      - `* mode: number -> int32`
  - **ShowCustomRule**
    - changes of response param
      - `+ time`
  - **UpdateCustomRule**
    - changes of response param
      - `+ time`
  - **DeleteCustomRule**
    - changes of response param
      - `+ time`
  - **ListAntileakageRules**
    - changes of response param
      - `+ items.description`
  - **CreateCcRule**
    - changes of request param
      - `+ name`
    - changes of response param
      - `+ name`
      - `* mode: number -> int32`
  - **ListCcRules**
    - changes of response param
      - `+ items.name`
  - **CreateCustomRule**
    - changes of response param
      - `+ time`
  - **ListCustomRules**
    - changes of response param
      - `+ items.time`

# 3.1.30 2023-03-23

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ShowDomainDetailByName**
    - changes of response param
      - `- domain.banned_reason`
      - `- domain.locked_reason`
      - `- domain.enterprise_project_id`

### HuaweiCloud SDK DCS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateMigrationTask**
    - changes of request param
      - `+ backup_files.file_source: enum value [backup_record]`
  - **ShowMigrationTask**
    - changes of response param
      - `+ backup_files.file_source: enum value [backup_record]`
  - **StopMigrationTask**
    - changes of response param
      - `+ backup_files.file_source: enum value [backup_record]`

### HuaweiCloud SDK WAF

- _Features_
  - Support the following interfaces：
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
- _Bug Fix_
  - None
- _Change_
  - **ListHost**
    - changes of response param
      - `- items.paid_type: enum value [prePaid]`
  - **DeleteHost**
    - changes of response param
      - `- paid_type: enum value [prePaid]`

# 3.1.29 2023-03-16

### HuaweiCloud SDK CDN

- _Features_
  - Support the interfaces `ListDomains`, `ShowDomainDetailByName`
- _Bug Fix_
  - None
- _Change_
  - **ListDomains**
    - changes of request param
      - `+ show_tags`
      - `+ exact_match`
    - changes of response param
      - `+ domains.tags`

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListBandwidthPkg**
    - changes of request param
      - `+ limit`
      - `+ marker`
      - `+ offset`
  - **ListCommonPools**
    - changes of request param
      - `+ limit`
      - `+ offset`
  - **ListShareBandwidthTypes**
    - changes of request param
      - `+ marker`
      - `+ offset`

### HuaweiCloud SDK IAM

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **KeystoneListMappings**
    - changes of response param
      - `* mappings.rules.local.groups: object -> string`
  - **KeystoneShowMapping**
    - changes of response param
      - `* mapping.rules.local.groups: object -> string`
  - **KeystoneCreateMapping**
    - changes of request param
      - `* mapping.rules.local.groups: object -> string`
    - changes of response param
      - `* mapping.rules.local.groups: object -> string`
  - **KeystoneUpdateMapping**
    - changes of request param
      - `* mapping.rules.local.groups: object -> string`
    - changes of response param
      - `* mapping.rules.local.groups: object -> string`

### HuaweiCloud SDK IVS

- _Features_
  - Support the interfaces `DetectStandardByVideoAndIdCardImage`, `DetectStandardByVideoAndNameAndId`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **RecognizeMvsInvoice**
    - changes of request param
      - `+ return_text_location`
      - `+ return_confidence`
      - `+ type`
    - changes of response param
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

- _Features_
  - Support the following interfaces：
    - `ListTemplates`
    - `DeleteTemplate`
    - `ShowTemplateMetadata`
    - `UpdateTemplateMetadata`
    - `ShowTemplateVersionContent`
    - `DeleteTemplateVersion`
    - `ShowTemplateVersionMetadata`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ListExecutionPlans`:
    - Add the enum values `APPLY_IN_PROGRESS` to the response parameter `status`
    - The response parameter `stack_name`, `execution_plan_name` changed to required
  - Remove the enum values `IN_PLACE_UPDATE` from the response parameter `action` from the interface `GetExecutionPlan`
  - The response parameter `stack_name`, `execution_plan_name` changed to required of the interface `GetExecutionPlanMetadata`
  - Add the response parameter `resource_attributes` to the interface `ListStackResources`
  - Changes of the interface `EstimateExecutionPlanPrice`:
    - Add the response parameter `unsupported_message`
    - Modify the type `object` -> `double` of the response parameter `sale_price`
    - Modify the type `object` -> `double` of the response parameter `discount`
    - Modify the type `object` -> `double` of the response parameter `original_price`
    - Remove the enum values `WEEK` from the response parameter `period_type`

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `connection_status_update_time`, `active_time` to the interface `UpdateDevice`
  - Add the response parameters `connection_status_update_time`, `active_time` to the interface `ShowDevice`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `extended_parameters` to the interface `RecognizeAutoClassification`

# 3.1.27 2023-03-07

### HuaweiCloud SDK VOD

- _Features_
  - Support the interface `ModifySubtitle`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.26 2023-03-02

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ShowDomainFullConfig`:
    - Modify the type `string` -> `int32` of the response parameter `error_code`
    - Modify the type `string` -> `int32` of the response parameter `target_code`
  - Changes of the interface `UpdateDomainFullConfig`:
    - Modify the type `string` -> `int32` of the request parameter `error_code`
    - Modify the type `string` -> `int32` of the request parameter `target_code`

### HuaweiCloud SDK IoTDA

- _Features_
  - Support the interfaces `ListOtaPackageInfo`, `CreateOtaPackage`, `ShowOtaPackage`, `DeleteOtaPackage`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.25 2023-02-23

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListCustomerAccountChangeRecords`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `active` to the interface `ListRoutingRules`
  - Add the request parameter `mysql_forwarding` to the interface `CreateRuleAction`
  - Add the response parameter `mysql_forwarding` to the interface `ListRuleActions`
  - Changes of the interface `UpdateRuleAction`:
    - Add the request parameter `mysql_forwarding`
    - Add the response parameter `mysql_forwarding`
  - Add the response parameter `mysql_forwarding` to the interface `ShowRuleAction`

### HuaweiCloud SDK WAF

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `flag` to the interface `UpdatePremiumHost`

# 3.1.24 2023-02-16

### HuaweiCloud SDK DCS

- _Features_
  - Support the interfaces `CreateCustomTemplate`, `CreateAutoExpireScanTask`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK FRS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByUrl`
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByUrlIntl`
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByFile`
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByFileIntl`
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByBase64`
  - Add the request parameter `nod_threshold` to the interface `DetectLiveByBase64Intl`

### HuaweiCloud SDK WAF

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `UpdateHost`:
    - Remove the enum values `TLS v1.3` from the request parameter `tls`
    - Remove the enum values `TLS v1.3` from the response parameter `tls`
  - Remove the enum values `TLS v1.3` from the response parameter `tls` from the interface `ShowHost`
  - Remove the enum values `TLS v1.3` from the response parameter `tls` from the interface `CreatePremiumHost`
  - Remove the enum values `TLS v1.3` from the response parameter `tls` from the interface `ShowPremiumHost`
  - Changes of the interface `UpdatePremiumHost`:
    - Remove the enum values `TLS v1.3` from the request parameter `tls`
    - Remove the enum values `TLS v1.3` from the response parameter `tls`

# 3.1.23 2023-02-09

### HuaweiCloud SDK BSSINTL

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `fail_resource_infos` to the interface `RenewalResources`
  - Add the response parameter `fail_resource_infos` to the interface `CancelResourcesSubscription`

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `roma_forwarding`, `influxdb_forwarding`, `functiongraph_forwarding`, `mrs_kafka_forwarding`, `dms_rocketmq_forwarding` to the interface `ListRuleActions`
  - Add the request parameters `roma_forwarding`, `influxdb_forwarding`, `functiongraph_forwarding`, `mrs_kafka_forwarding`, `dms_rocketmq_forwarding` to the interface `CreateRuleAction`
  - Changes of the interface `UpdateRuleAction`:
    - Add the request parameters `roma_forwarding`, `influxdb_forwarding`, `functiongraph_forwarding`, `mrs_kafka_forwarding`, `dms_rocketmq_forwarding`
    - Add the response parameters `roma_forwarding`, `influxdb_forwarding`, `functiongraph_forwarding`, `mrs_kafka_forwarding`, `dms_rocketmq_forwarding`
  - Add the response parameters `roma_forwarding`, `influxdb_forwarding`, `functiongraph_forwarding`, `mrs_kafka_forwarding`, `dms_rocketmq_forwarding` to the interface `ShowRuleAction`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeTollInvoice`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`

# 3.1.22 2023-02-02

### HuaweiCloud SDK AOS

- _Features_
  - Support the interface `UpdateStack`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `executor` to the interface `ApplyExecutionPlan`
  - Changes of the interface `ListStackEvents`:
    - Add the request parameters `filter`, `field`
    - Remove the response parameters `resource_id_key`, `resource_id_value`, `resource_name`, `resource_type`, `time`, `event_type`, `event_message`, `elapsed_seconds`
  - The response parameter `stack_name` changed to required of the interface `GetStackMetadata`
  - Add the request parameter `executor` to the interface `CreateStack`
  - Changes of the interface `ListStackResources`:
    - Add the response parameter `index_key`
    - Remove the enum values `DELETION_SKIPPED` from the response parameter `resource_status`
  - Add the request parameter `executor` to the interface `DeployStack`

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `fail_resource_infos` to the interface `RenewalResources`
  - Add the response parameter `fail_resource_infos` to the interface `CancelResourcesSubscription`

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `IsoImage` to the request parameter `type` to the interface `CreateImage`

### HuaweiCloud SDK Moderation

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `white_glossaries` to the interface `RunTextModeration`

# 3.1.21 2023-01-12

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListFreeResourcesUsageRecords`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListCustomerselfResourceRecordDetails`
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListCustomerselfResourceRecords`
  - The request parameter `operator` changed to required of the interface `ListCosts`

### HuaweiCloud SDK BSSINTL

- _Features_
  - Support the interface `ListFreeResourcesUsageRecords`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListCustomerselfResourceRecordDetails`
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListCustomerselfResourceRecords`
  - The request parameter `operator` changed to required of the interface `ListCosts`

### HuaweiCloud SDK FRS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByUrlIntl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveFaceByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByFileIntl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveFaceByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveByBase64Intl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectLiveFaceByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `SearchFaceByFaceId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByFileIntl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `UpdateFace`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DeleteFaceByExternalImageId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `ShowFacesByLimit`
  - Add the request parameter `Enterprise-Project-Id` to the interface `CompareFaceByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DeleteFaceByFaceId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `ShowFacesByFaceId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `AddFacesByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByUrlIntl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DeleteFaceSet`
  - Add the request parameter `Enterprise-Project-Id` to the interface `ShowFaceSet`
  - Add the request parameter `Enterprise-Project-Id` to the interface `CompareFaceByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectFaceByBase64Intl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `CreateFaceSet`
  - Add the request parameter `Enterprise-Project-Id` to the interface `ShowAllFaceSets`
  - Add the request parameter `Enterprise-Project-Id` to the interface `SearchFaceByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `AddFacesByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `AddFacesByFile`
  - Add the request parameter `Enterprise-Project-Id` to the interface `SearchFaceByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `SearchFaceByBase64`
  - Add the request parameter `Enterprise-Project-Id` to the interface `CompareFaceByUrl`
  - Add the request parameter `Enterprise-Project-Id` to the interface `BatchDeleteFaces`

### HuaweiCloud SDK IVS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectStandardByIdCardImage`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectStandardByNameAndId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectExtentionByNameAndId`
  - Add the request parameter `Enterprise-Project-Id` to the interface `DetectExtentionByIdCardImage`

### HuaweiCloud SDK OCR

- _Features_
  - Support the interface `RecognizeCustomTemplate`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeGeneralTable`:
    - Add the request parameters `return_char_location`, `return_rectification_matrix`
    - Add the response parameter `char_list`
  - Add the request parameter `language` to the interface `RecognizeGeneralText`
  - Changes of the interface `RecognizeWebImage`:
    - Add the response parameter `extracted_data`
    - Remove the response parameters `extracted_data`, `contact_info`, `image_size`, `height`, `width`, `name`, `phone`, `province`, `city`, `district`, `detail_address`

# 3.1.20 2023-01-05

### HuaweiCloud SDK DCS

- _Features_
  - Support the interface `ListConfigHistories`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK DNS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the following interfaces：
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
  - Changes of the interface `CreatePrivateZone`:
    - Add the request parameter `proxy_pattern`
    - Add the response parameter `proxy_pattern`
  - Add the response parameter `proxy_pattern` to the interface `ListPrivateZones`

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `ListUpStreamDetail`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ListBandwidthDetail`:
    - Add the request parameter `service_type`
    - The request parameter `play_domains` changed to required
  - Changes of the interface `ListDomainTrafficDetail`:
    - Add the request parameter `service_type`
    - The request parameter `play_domains` changed to required
  - Changes of the interface `ListDomainBandwidthPeak`:
    - Add the request parameter `service_type`
    - The request parameter `play_domains` changed to required
  - Changes of the interface `ListDomainTrafficSummary`:
    - Add the request parameter `service_type`
    - The request parameter `play_domains` changed to required
  - Add the request parameter `service_type` to the interface `ListUsersOfStream`
  - Add the request parameter `type` to the interface `ShowUpBandwidth`

### HuaweiCloud SDK Moderation

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `white_glossary_names` to the interface `RunTextModeration`

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ListPorts`:
    - Add the request parameter `security_groups`
    - Modify the type `string` -> `array` of the request parameter `fixed_ips`

# 3.1.19 2022-12-29

### HuaweiCloud SDK CFW

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameters `fw_instance_id`, `enterprise_project_id` to the interface `ListDnsServers`
  - Add the request parameters `fw_instance_id`, `enterprise_project_id` to the interface `UpdateDnsServers`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListVpcProtects`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListRuleHitCount`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteAclRuleCount`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ChangeIpsSwitchUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListIpsSwitchStatusUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListEastWestFirewall`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ChangeEwProtectStatus`
  - Add the request parameter `enterprise_project_id` to the interface `ListFlowLogs`
  - Add the request parameter `enterprise_project_id` to the interface `ListAccessControlLogs`
  - Add the request parameter `enterprise_project_id` to the interface `ListAttackLogs`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddRuleAclUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteRuleAclUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `UpdateRuleAclUsingPut`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListRuleAclsUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListRuleAclUsingPut`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddBlackWhiteListUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteBlackWhiteListUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `UpdateBlackWhiteListUsingPut`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListBlackWhiteListsUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ChangeIpsProtectModeUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListIpsProtectModeUsingPost`
  - Changes of the interface `ListFirewallUsingGet`:
    - Add the request parameters `enterprise_project_id`, `fw_instance_id`
    - Add the response parameters `fw_instance_name`, `enterprise_project_id`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddServiceSetUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteServiceSetUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListServiceSetDetails`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `UpdateServiceSetUsingPut`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddServiceItemsUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListServiceItemsDetails`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteServiceItemUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListParseDomainDetails`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `CountEips`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ChangeProtectEip`
  - Changes of the interface `ListEipResources`:
    - Add the request parameters `fw_instance_id`, `fw_key_word`, `eps_id`
    - Add the response parameters `fw_instance_name`, `fw_instance_id`, `fw_enterprise_project_id`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteAddressItemUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddAddressItemsUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListAddressItemsUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `AddAddressSetInfoUsingPost`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListAddressSetListUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `DeleteAddressSetInfoUsingDelete`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListAddressSetDetailUsingGet`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `UpdateAddressSetInfoUsingPut`
  - Add the request parameters `enterprise_project_id`, `fw_instance_id` to the interface `ListServiceSet`

### HuaweiCloud SDK DCS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `int32` -> `int64` of the response parameter `size` of the interface `CreateBigkeyScanTask`
  - Modify the type `int32` -> `int64` of the response parameter `size` of the interface `ShowBigkeyScanTaskDetails`
  - Modify the type `int32` -> `int64` of the response parameter `size` of the interface `CreateHotkeyScanTask`
  - Modify the type `int32` -> `int64` of the response parameter `size` of the interface `ShowHotkeyTaskDetails`

### HuaweiCloud SDK DNS

- _Features_
  - Support the interfaces `AssociateResolveRuleRouter`, `DisassociateResolveRuleRouter`
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameter `total_count` from the interface `ListPublicZones`
  - Remove the response parameter `total_count` from the interface `ListPrivateZones`
  - Remove the response parameter `total_count` from the interface `ListRecordSetsByZone`
  - Remove the response parameter `total_count` from the interface `ListRecordSets`
  - Remove the response parameter `total_count` from the interface `BatchDeleteRecordSetWithLine`
  - Remove the response parameter `total_count` from the interface `BatchUpdateRecordSetWithLine`
  - Remove the response parameter `total_count` from the interface `ListRecordSetsWithLine`
  - Remove the response parameter `total_count` from the interface `CreateRecordSetWithBatchLines`
  - Remove the response parameter `total_count` from the interface `ShowRecordSetByZone`
  - Remove the response parameter `total_count` from the interface `ListPtrRecords`
  - Remove the response parameter `total_count` from the interface `ListCustomLine`

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `extendParam` to the interface `ChangeBandwidthToPeriod`
  - Add the request parameter `extendParam` to the interface `ChangePublicipToPeriod`
  - Changes of the interface `ListBandwidthPkg`:
    - Add the response parameter `tenantId`
    - Remove the response parameter `tenant_id`
  - The request parameter `associate_instance_type`, `associate_instance_id` changed to required of the interface `UpdateAssociatePublicip`
  - The request parameter `associate_instance_type`, `associate_instance_id` changed to required of the interface `AssociatePublicips`

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `sub_jobs_result`, `sub_jobs_list` to the interface `ShowJob`
  - Add the response parameters `sub_jobs_result`, `sub_jobs_list` to the interface `ShowJobProgress`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `name` changed to not required of the interface `UpdateTranscodeTemplate`
  - Changes of the interface `UpdateTemplateGroupCollection`:
    - The request parameter `collection_id` changed to required
    - The request parameter `name`, `template_group_list` changed to not required

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `ListVpcs`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `CreateVpc`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `ShowVpc`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `UpdateVpc`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `ListSubnets`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `CreateSubnet`
  - Add the response parameters `tenant_id`, `created_at`, `updated_at` to the interface `ShowSubnet`
  - Add the response parameters `created_at`, `updated_at` to the interface `ListRouteTables`
  - Add the response parameters `created_at`, `updated_at` to the interface `CreateRouteTable`
  - Add the response parameters `created_at`, `updated_at` to the interface `ShowRouteTable`
  - Add the response parameters `created_at`, `updated_at` to the interface `UpdateRouteTable`
  - Add the response parameters `created_at`, `updated_at` to the interface `AssociateRouteTable`
  - Add the response parameters `created_at`, `updated_at` to the interface `DisassociateRouteTable`

# 3.1.18 2022-12-26

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `UpdateDomainIp6Switch`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ShowDomain`:
    - Add the request parameter `enterprise_project_id`
    - Add the response parameters `enterprise_project_id`, `is_ipv6`
  - Changes of the interface `UpdateDomain`:
    - Add the request parameter `enterprise_project_id`
    - Add the response parameter `enterprise_project_id`
  - Add the request parameter `enterprise_project_id` to the interface `CreateDomain`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `group_id`, `name`, `bitrate`, `frame_rate`, `video_codec`, `format`, `hls_interval` changed to required of the interface `UpdateTranscodeTemplate`
  - The response parameter `bitrate`, `frame_rate`, `video_codec`, `format`, `hls_interval` changed to required of the interface `ListTranscodeTemplate`
  - The request parameter `name`, `bitrate`, `frame_rate`, `video_codec`, `format`, `hls_interval` changed to required of the interface `CreateTranscodeTemplate`
  - The request parameter `name`, `template_group_list` changed to required of the interface `UpdateTemplateGroupCollection`
  - The request parameter `name`, `template_group_list` changed to required of the interface `CreateTemplateGroupCollection`

# 3.1.17 2022-12-22

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `vault_id` to the interface `CopyImageCrossRegion`

### HuaweiCloud SDK IoTDA

- _Features_
  - Support the interface `SearchDevices`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `device_side` to the interface `CreateRule`
  - Add the response parameter `device_side` to the interface `ListRules`
  - Add the response parameter `device_side` to the interface `ShowRule`
  - Changes of the interface `UpdateRule`:
    - Add the request parameter `device_side`
    - Add the response parameter `device_side`

# 3.1.16 2022-12-19

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `server_id` to the interface `ListServersDetails`

### HuaweiCloud SDK EIP

- _Features_
  - Support the interfaces `ShowResourcesJobDetail`, `ChangeBandwidthToPeriod`, `ChangePublicipToPeriod`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `key` to the interface `CreateRecordCallbackConfig`
  - Changes of the interface `UpdateRecordCallbackConfig`:
    - Add the request parameter `key`
    - Add the response parameters `id`, `publish_domain`, `app`, `notify_callback_url`, `notify_event_subscription`, `sign_type`, `create_time`, `update_time`

# 3.1.15 2022-12-15

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `server_id` to the interface `ListServersDetails`

### HuaweiCloud SDK EIP

- _Features_
  - Support the interfaces `ShowResourcesJobDetail`, `ChangeBandwidthToPeriod`, `ChangePublicipToPeriod`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `key` to the interface `CreateRecordCallbackConfig`
  - Changes of the interface `UpdateRecordCallbackConfig`:
    - Add the request parameter `key`
    - Add the response parameters `id`, `publish_domain`, `app`, `notify_callback_url`, `notify_event_subscription`, `sign_type`, `create_time`, `update_time`

# 3.1.14 2022-12-08

### HuaweiCloud SDK AOS

- _Features_
  - Support the interfaces `GetExecutionPlan`, `DeleteExecutionPlan`, `DescribeExecutionPlan`, `GetStackMetadata`
- _Bug Fix_
  - None
- _Change_
  - Remove the request parameter `executor` from the interface `ListExecutionPlans`
  - Remove the request parameter `executor` from the interface `CreateExecutionPlan`
  - Remove the request parameter `executor` from the interface `ApplyExecutionPlan`
  - Changes of the interface `ListStackEvents`:
    - Remove the request parameters `limit`, `marker`, `executor`
    - Remove the response parameter `next_marker`
  - Remove the request parameter `executor` from the interface `ListStacks`
  - Remove the request parameter `executor` from the interface `CreateStack`
  - Remove the request parameter `executor` from the interface `GetStackTemplate`
  - Changes of the interface `ListStackResources`:
    - Remove the request parameter `executor`
    - Remove the response parameters `create_time`, `update_time`
  - Changes of the interface `ListStackOutputs`:
    - Remove the request parameters `executor`, `limit`, `marker`
    - Remove the response parameter `next_marker`
  - Remove the request parameter `executor` from the interface `DeployStack`
  - Remove the request parameter `executor` from the interface `DeleteStack`

### HuaweiCloud SDK CFW

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ListIpsSwitchStatusUsingGet`:
    - Add the response parameters `id`, `virtual_patches_status`
    - Remove the response parameters `object_id`, `virtual_patches_stauts`
  - The request parameter `ips_type` changed to required of the interface `ChangeIpsSwitchUsingPost`
  - Remove the response parameters `fw_instance_id`, `resource_id`, `name`, `ha_type`, `charge_mode`, `service_type`, `engine_type`, `flavor`, `protect_objects`, `status`, `description`, `is_old_firewall_instance`, `support_ipv6`, `feature_toggle` from the interface `ListFirewallUsingGet`

### HuaweiCloud SDK EIP

- _Features_
  - Support the following interfaces：
    - `ListBandwidthPkg`
    - `CountPublicIp`
    - `ShowPublicIpType`
    - `CountPublicIpInstance`
    - `BatchCreatePublicips`
    - `BatchDeletePublicIp`
    - `BatchDisassociatePublicips`
    - `CountEipAvailableResources`
- _Bug Fix_
  - None
- _Change_
  - Remove the enum values `` from the request parameter `associate_instance_type` from the interface `AssociatePublicips`
  - Remove the enum values `` from the request parameter `associate_instance_type` from the interface `UpdateAssociatePublicip`

### HuaweiCloud SDK TMS

- _Features_
  - Support the following interfaces：
    - `ListResource`
    - `CreateResourceTag`
    - `DeleteResourceTag`
    - `ListTagKeys`
    - `ListTagValues`
    - `ShowResourceTag`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.13 2022-12-01

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `formula` to the interface `ListCustomerselfResourceRecords`

### HuaweiCloud SDK BSSINTL

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `formula` to the interface `ListCustomerselfResourceRecords`

### HuaweiCloud SDK CFW

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ListIpsSwitchStatusUsingGet`:
    - Add the response parameter `data`
    - Remove the response parameters `object_id`, `basic_defense_status`, `virtual_patches_stauts`
  - Changes of the interface `ListEastWestFirewall`:
    - Add the response parameter `protect_infos`
    - Remove the response parameter `protected_infos`
  - The request parameter `fw_instance_id` changed to not required of the interface `ListAttackLogs`
  - Add the request parameter `type` to the interface `UpdateRuleAclUsingPut`
  - Add the request parameters `list_type`, `object_id` to the interface `UpdateBlackWhiteListUsingPut`
  - Changes of the interface `ListFirewallUsingGet`:
    - Add the response parameter `data`
    - Remove the response parameters `fw_instance_id`, `resource_id`, `name`, `ha_type`, `charge_mode`, `service_type`, `engine_type`, `flavor`, `protect_objects`, `status`, `description`, `is_old_firewall_instance`, `support_ipv6`, `feature_toggle`
  - Changes of the interface `ListServiceSetDetails`:
    - Add the response parameter `data`
    - Remove the response parameters `id`, `name`, `description`
  - Changes of the interface `CountEips`:
    - Add the response parameter `data`
    - Remove the response parameters `object_id`, `eip_total`, `eip_protected`
  - Changes of the interface `ListEipResources`:
    - Add the response parameter `data`
    - Remove the response parameters `id`, `public_ip`, `status`, `public_ipv6`, `enterprise_project_id`, `device_id`, `device_name`, `device_owner`, `associate_instance_type`
  - Add the request parameter `address_type` to the interface `UpdateAddressSetInfoUsingPut`

# 3.1.12 2022-11-30

### HuaweiCloud SDK EIP

- _Features_
  - Support the interfaces `DisassociatePublicips`, `AssociatePublicips`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.11 2022-11-24

### HuaweiCloud SDK AS

- _Features_
  - Support the service `Auto Scaling`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK CFW

- _Features_
  - Support the service `Cloud Firewall`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK AOS

- _Features_
  - Support the interfaces `ListStackEvents`, `ListStackResources`, `DeleteStack`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListSubCustomerBillDetail`

### HuaweiCloud SDK CSE

- _Features_
  - Support the interfaces `UpgradeEngine`, `RetryEngine`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK DNS

- _Features_
  - Support the following interfaces：
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
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `test_interval` to the interface `RecognizeHealthCode`

### HuaweiCloud SDK WAF

- _Features_
  - Support the interfaces `CreatePrepaidCloudWaf`, `ChangePrepaidCloudWaf`, `ShowSubscriptionInfo`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.10 2022-11-17

### HuaweiCloud SDK AOS

- _Features_
  - Support the `Application Orchestration Service`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK CSE

- _Features_
  - Support the service `Cloud Service Engine`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK SMN

- _Features_
  - Support the service `Simple Message Notification`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `sub_customer_association_type` changed to required of the interface `CreateSubEnterpriseAccount`

### HuaweiCloud SDK DCS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `integer` -> `int32` of the request parameter `new_capacity` of the interface `ResizeInstance`

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `string` -> `enum` of the request parameter `monitorMetrics` of the interface `RegisterServerMonitor`

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `VPN` to the request parameter `associate_instance_type` to the interface `DisassociatePublicips`
  - Add the enum values `VPN` to the request parameter `associate_instance_type` to the interface `AssociatePublicips`

### HuaweiCloud SDK EPS

- _Features_
  - Support the interface `ListProviders`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `ttl` to the interface `CreateMessage`
  - Add the request parameters `Sp-Auth-Token`, `Stage-Auth-Token` to the interface `ListCertificates`
  - Changes of the interface `AddCertificate`:
    - Add the request parameters `Sp-Auth-Token`, `Stage-Auth-Token`, `addCertificateRequestBody`
    - Remove the request parameter `AddCertificateRequestBody`
  - Add the request parameters `Sp-Auth-Token`, `Stage-Auth-Token` to the interface `DeleteCertificate`
  - Changes of the interface `CheckCertificate`:
    - Add the request parameters `Sp-Auth-Token`, `Stage-Auth-Token`, `checkCertificateRequestBody`
    - Remove the request parameter `CheckCertificateRequestBody`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeGeneralTable`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeVatInvoice`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeInvoiceVerification`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeGeneralText`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeWebImage`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeHealthCode`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeQuotaInvoice`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeIdCard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeHandwriting`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeVehicleLicense`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeTransportationLicense`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeTaxiInvoice`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeAutoClassification`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeTollInvoice`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeMvsInvoice`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeLicensePlate`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeFlightItinerary`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeBusinessLicense`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeDriverLicense`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeBusinessCard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeTrainTicket`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeVin`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizePassport`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeBankcard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeInsurancePolicy`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeFinancialStatement`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeQualificationCertificate`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeThailandIdcard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeMyanmarIdcard`
  - Changes of the interface `RecognizeMyanmarDriverLicense`:
    - Add the request parameter `Enterprise-Project-Id`
    - Add the response parameters `birth`, `birth`
    - Remove the response parameters `Birth`, `Birth`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeChileIdCard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeThailandLicensePlate`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeWaybillElectronic`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizePcrTestRecord`
  - Changes of the interface `RecognizeIdDocument`:
    - Add the request parameter `Enterprise-Project-Id`
    - Modify the type `object` -> `object` of the response parameter `result`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeHkIdCard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeCambodianIdCard`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeExitEntryPermit`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeMainlandTravelPermit`
  - Add the request parameter `Enterprise-Project-Id` to the interface `RecognizeMacaoIdCard`

### HuaweiCloud SDK TMS

- _Features_
  - Support the interface `ListProviders`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `CreateSubnet`:
    - Add the enum values `addresstime` to the request parameter `opt_name`
    - Add the enum values `addresstime` to the response parameter `opt_name`
  - Add the enum values `addresstime` to the response parameter `opt_name` to the interface `ListSubnets`
  - Add the enum values `addresstime` to the response parameter `opt_name` to the interface `ShowSubnet`
  - Add the enum values `addresstime` to the request parameter `opt_name` to the interface `UpdateSubnet`

# 3.1.9 2022-11-14

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the request parameter `specify_project` from the interface `ListStreamForbidden`
  - Remove the request parameter `specify_project` from the interface `DeleteStreamForbidden`
  - Remove the request parameter `specify_project` from the interface `UpdateStreamForbidden`
  - Remove the request parameter `specify_project` from the interface `CreateStreamForbidden`
  - Remove the enum values `global` from the response parameter `service_area` from the interface `ShowDomain`
  - Remove the enum values `global` from the response parameter `service_area` from the interface `UpdateDomain`
  - Remove the enum values `global` from the request parameter `service_area` from the interface `CreateDomain`
  - Remove the request parameter `specify_project` from the interface `DeleteDomainMapping`
  - Remove the request parameter `specify_project` from the interface `CreateDomainMapping`

### HuaweiCloud SDK VPCEP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `string` -> `array` of the response parameter `Action` of the interface `ListEndpoints`
  - Modify the type `string` -> `array` of the response parameter `Action` of the interface `DeleteEndpointPolicy`
  - Changes of the interface `UpdateEndpointPolicy`:
    - Modify the type `string` -> `array` of the request parameter `Action`
    - Modify the type `string` -> `array` of the response parameter `Action`

### HuaweiCloud SDK WAF

- _Features_
  - Support the interfaces `MigrateCompositeHosts`, `ShowSourceIp`, `ListNoticeConfigs`, `UpdateAlertNoticeConfig`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `instance_name` to the interface `ListInstance`
  - Add the response parameters `enabled`, `ltsAttackStreamID` to the interface `ShowLtsInfoConfig`
  - Changes of the interface `UpdateLtsInfoConfig`:
    - Add the request parameters `enabled`, `ltsAttackStreamID`
    - Add the response parameters `enabled`, `ltsAttackStreamID`
    - The request parameter `enabale` changed to not required
  - Add the response parameter `description` to the interface `ShowIpGroup`

# 3.1.8 2022-11-03

### HuaweiCloud SDK GA

- _Features_
  - Support the service `Global accelerator`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `destination_type` changed to not required of the interface `NovaCreateServers`

### HuaweiCloud SDK EPS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `region_id` to the interface `MigrateResource`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeGeneralText`:
    - Add the request parameter `character_mode`
    - Add the response parameters `confidence`, `char_list`
  - Changes of the interface `RecognizeThailandIdcard`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`

### HuaweiCloud SDK WAF

- _Features_
  - Support the following interfaces：
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
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.7 2022-11-02

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ShowUrlTaskInfo`:
    - Modify the type `int32` -> `int64` of the response parameter `modify_time`
    - Modify the type `int32` -> `int64` of the response parameter `create_time`

### HuaweiCloud SDK ECS

- _Features_
  - Support the interfaces `UpdateServerBlockDevice`, `RegisterServerMonitor`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.6 2022-10-27

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `int32` -> `int64` of the response parameter `id` of the interface `ShowUrlTaskInfo`

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameters `X-Client-Token`, `batch_create_in_multi_az` to the interface `CreateServers`
  - Add the request parameter `X-Client-Token` to the interface `CreatePostPaidServers`

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `market` to the request parameter `__imagetype` to the interface `ListTags`
  - Changes of the interface `GlanceListImages`:
    - Add the enum values `market` to the request parameter `__imagetype`
    - Add the enum values `market` to the response parameter `__imagetype`
  - Add the enum values `market` to the response parameter `__imagetype` to the interface `GlanceShowImage`
  - Add the enum values `market` to the response parameter `__imagetype` to the interface `GlanceUpdateImage`

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `properties` to the interface `CreateMessage`
  - Add the response parameter `properties` to the interface `ListDeviceMessages`
  - Add the response parameter `properties` to the interface `ShowDeviceMessage`

### HuaweiCloud SDK Moderation

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `float` -> `integer` of the request parameter `frame_interval` of the interface `RunCreateVideoModerationJob`
  - Modify the type `float` -> `integer` of the response parameters `start_time`, `end_time` of the interface `RunQueryAudioModerationJob`
  - Changes of the interface `RunQueryVideoModerationJob`:
    - Modify the type `integer` -> `float` of the response parameter `time`
    - Modify the type `integer` -> `float` of the response parameters `start_time`, `end_time`

# 3.1.5 2022-09-28

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `domain_id` to the interface `ListDomains`
  - Changes of the interface `CreateDomain`:
    - Add the request parameter `domain_id`
    - Add the response parameter `domain_id`
  - Add the response parameter `domain_id` to the interface `ShowDomainDetail`
  - Add the response parameter `domain_id` to the interface `DeleteDomain`
  - Add the response parameter `domain_id` to the interface `EnableDomain`
  - Add the response parameter `domain_id` to the interface `DisableDomain`
  - Changes of the interface `UpdateDomainOrigin`:
    - Add the request parameter `domain_id`
    - Add the response parameter `domain_id`
  - Add the response parameters `origin_range_status`, `user_agent_filter`, `origin_request_url_rewrite`, `error_code_redirect_rules` to the interface `ShowDomainFullConfig`
  - Add the request parameters `origin_range_status`, `user_agent_filter`, `origin_request_url_rewrite`, `error_code_redirect_rules` to the interface `UpdateDomainFullConfig`

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The response parameter `width`, `height` changed to not required of the interface `ShowTranscodingsTemplate`
  - Changes of the interface `UpdateTranscodingsTemplate`:
    - Add the request parameter `trans_type`
    - The request parameter `width`, `height` changed to not required
  - Changes of the interface `CreateTranscodingsTemplate`:
    - Add the request parameter `trans_type`
    - The request parameter `width`, `height` changed to not required

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `type`, `idcard_number`, `phone_number`, `province`, `city`, `vaccination_status`, `pcr_test_result`, `pcr_test_organization`, `pcr_test_time`, `pcr_sampling_time`, `reached_city` to the interface `RecognizeHealthCode`

### HuaweiCloud SDK VPCEP

- _Features_
  - Support the following interfaces：
    - `UpdateEndpointServiceName`
    - `UpdateEndpointConnectionsDesc`
    - `BatchAddEndpointServicePermissions`
    - `BatchRemoveEndpointServicePermissions`
    - `UpdateEndpointServicePermissionDesc`
    - `UpdateEndpointPolicy`
    - `DeleteEndpointPolicy`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `CreateEndpointService`:
    - Add the request parameter `description`
    - Add the response parameter `description`
  - Changes of the interface `ListEndpointService`:
    - Add the request parameter `public_border_group`
    - Add the response parameters `description`, `public_border_group`
    - Modify the type `string` -> `enum` of the response parameter `service_type`
    - Modify the type `enum` -> `string` of the response parameter `server_type`
  - Changes of the interface `UpdateEndpointService`:
    - Add the request parameter `description`
    - Add the response parameter `description`
  - Changes of the interface `ListServiceDetails`:
    - Add the response parameter `description`
    - Modify the type `string` -> `enum` of the response parameter `service_type`
  - Remove the response parameters `id`, `marker_id`, `created_at`, `updated_at`, `domain_id`, `status` from the interface `ListServiceConnections`
  - Add the response parameter `description` to the interface `AcceptOrRejectEndpoint`
  - Remove the response parameters `id`, `permission`, `created_at` from the interface `ListServicePermissionsDetails`
  - Changes of the interface `CreateEndpoint`:
    - Add the request parameter `description`
    - Add the response parameters `specification_name`, `description`, `policy_statement`, `enable_status`
  - Changes of the interface `ListEndpoints`:
    - Add the request parameter `public_border_group`
    - Add the response parameters `description`, `policy_statement`, `endpoint_pool_id`, `public_border_group`
  - Add the response parameters `description`, `policy_statement` to the interface `ListEndpointInfoDetails`
  - Remove the response parameters `status`, `id`, `updated`, `version`, `min_version`, `links` from the interface `ListVersionDetails`
  - Remove the response parameters `status`, `id`, `updated`, `version`, `min_version`, `links` from the interface `ListSpecifiedVersionDetails`
  - Changes of the interface `ListResourceInstances`:
    - Add the request parameters `sys_tags`, `without_any_tag`
    - Remove the request parameters `key`, `value`, `key`, `value`, `key`, `value`, `key`, `value`

# 3.1.4 2022-09-26

### HuaweiCloud SDK Moderation

- _Features_
  - None
- _Bug Fix_
  - Fix the problem that the response parameters' type of the interface `CheckImageModeration` is incorrect
- _Change_
  - None

# 3.1.3 2022-09-22

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `port_id` to the interface `CreatePublicip`
  - Add the request parameter `port_id` to the interface `CreatePrePaidPublicip`

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `error_info` to the interface `ListDeviceMessages`
  - Add the response parameter `error_info` to the interface `ShowDeviceMessage`

### HuaweiCloud SDK Moderation

- _Features_
  - Support the interface `CheckImageModeration`
- _Bug Fix_
  - None
- _Change_
  - The request parameter `url`, `categories` changed to required of the interface `RunCreateAudioModerationJob`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeIdCard`:
    - Add the request parameter `detect_copy`
    - Add the response parameter `detect_copy_result`

### HuaweiCloud SDK SMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameter `disks` from the interface `ListTemplates`
  - Remove the response parameter `disks` from the interface `ShowTemplate`
  - Remove the request parameter `disks` from the interface `UpdateMigproject`
  - Remove the response parameter `disks` from the interface `ShowMigproject`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `pack_type`, `pack_type` to the interface `PublishAssets`
  - Add the response parameters `pack_type`, `pack_type` to the interface `UnpublishAssets`
  - Add the response parameters `pack_type`, `pack_type` to the interface `ShowAssetMeta`
  - Add the response parameters `pack_type`, `pack_type` to the interface `ShowAssetDetail`
  - Add the response parameters `pack_type`, `pack_type` to the interface `ShowTakeOverTaskDetails`
  - Add the response parameters `pack_type`, `pack_type` to the interface `ShowTakeOverAssetDetails`

# 3.1.2 2022-09-15

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `root_resource_id`, `parent_resource_id`, `trade_id`, `product_spec_desc` to the interface `ListCustomerselfResourceRecordDetails`

### HuaweiCloud SDK CDN

- _Features_
  - Support the interfaces `ShowTags`, `CreateTags`, `BatchDeleteTags`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ShowUrlTaskInfo`:
    - Add the response parameter `result`
    - Remove the response parameter `results`
  - Add the response parameter `error_code_cache` to the interface `ShowDomainFullConfig`
  - Add the request parameter `error_code_cache` to the interface `UpdateDomainFullConfig`

### HuaweiCloud SDK EVS

- _Features_
  - Support the following interfaces：
    - `ShowVersion`
    - `ListVersions`
    - `CinderShowVolumeTransfer`
    - `CinderDeleteVolumeTransfer`
    - `CinderListVolumeTransfers`
    - `CinderCreateVolumeTransfer`
    - `CinderAcceptVolumeTransfer`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.1.1 2022-09-08

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `root_resource_id`, `parent_resource_id`, `trade_id`, `product_spec_desc` to the interface `ListCustomerselfResourceRecordDetails`

### HuaweiCloud SDK CDN

- _Features_
  - Support the interfaces `ShowTags`, `CreateTags`, `BatchDeleteTags`
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `ShowUrlTaskInfo`:
    - Add the response parameter `result`
    - Remove the response parameter `results`
  - Add the response parameter `error_code_cache` to the interface `ShowDomainFullConfig`
  - Add the request parameter `error_code_cache` to the interface `UpdateDomainFullConfig`

### HuaweiCloud SDK EVS

- _Features_
  - Support the following interfaces：
    - `ShowVersion`
    - `ListVersions`
    - `CinderShowVolumeTransfer`
    - `CinderDeleteVolumeTransfer`
    - `CinderListVolumeTransfers`
    - `CinderCreateVolumeTransfer`
    - `CinderAcceptVolumeTransfer`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.61 2022-09-01

### HuaweiCloud SDK BSSINTL

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `indirect_partner_id` to the interface `ListCustomerOrders`
  - Add the request parameter `indirect_partner_id` to the interface `ShowCustomerOrderDetails`
  - Add the request parameter `indirect_partner_id` to the interface `ListCustomerOnDemandResources`

### HuaweiCloud SDK IAM

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `UpdateDomainProtectPolicy`:
    - Add the request parameters `allow_user`, `mobile`, `admin_check`, `email`, `scene`
    - Remove the response parameter `operation_protection`
  - Remove the response parameter `operation_protection` from the interface `ShowDomainProtectPolicy`
  - The request parameter `maximum_consecutive_identical_chars`, `minimum_password_age`, `minimum_password_length`, `number_of_recent_passwords_disallowed`, `password_not_username_or_invert`, `password_validity_period`, `password_char_combination` changed to not required of the interface `UpdateDomainPasswordPolicy`
  - The request parameter `account_validity_period`, `custom_info_for_login`, `lockout_duration`, `login_failed_times`, `period_with_login_failures`, `session_timeout`, `show_recent_login_info` changed to not required of the interface `UpdateDomainLoginPolicy`
  - Add the enum values `mapping` to the request parameter `type` to the interface `ShowDomainQuota`

# 3.0.60 2022-08-29

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `batch_create_in_multi_az` to the interface `CreatePostPaidServers`

### HuaweiCloud SDK IMS

- _Features_
  - Support the interface `ShowJobProgress`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.59-rc 2022-08-25

### HuaweiCloud SDK Core

- _Features_
  - None
- _Bug Fix_
  - Fix the problem that some error codes could not be parsed
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeWebImage`:
    - Add the request parameter `detect_font`
    - Add the response parameters `font_list`, `font_scores`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `int32` -> `int64` of the request parameter `size` of the interface `CheckMd5Duplication`

# 3.0.58-rc 2022-08-22

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `uri` -> `string` of the request parameter `object` of the interface `CreateRecordIndex`

# 3.0.57-rc 2022-08-18

### HuaweiCloud SDK BSSINTL

- _Features_
  - Support the interfaces `ListIndirectPartners`, `ListCosts`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `indirect_partner_id` to the interface `ListSubCustomers`
  - Add the request parameter `indirect_partner_id` to the interface `CreateSubCustomer`
  - Add the request parameter `indirect_partner_id` to the interface `ShowSubCustomerBudget`
  - Add the request parameter `indirect_partner_id` to the interface `UpdateSubCustomerBudget`
  - Add the request parameter `indirect_partner_id` to the interface `FreezeSubCustomers`
  - Add the request parameter `indirect_partner_id` to the interface `UnfreezeSubCustomers`

### HuaweiCloud SDK ECS

- _Features_
  - Support the interface `ListServersByTag`
- _Bug Fix_
  - None
- _Change_
  - The request parameter `destination_type` changed to required of the interface `NovaCreateServers`

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeIdCard`:
    - Add the request parameter `detect_reproduce`
    - Add the response parameter `detect_reproduce_result`

### HuaweiCloud SDK VOD

- _Features_
  - Support the following interfaces：
    - `ListTranscodeTemplate`
    - `UpdateTranscodeTemplate`
    - `CreateTranscodeTemplate`
    - `DeleteTranscodeTemplate`
    - `ListTemplateGroupCollection`
    - `UpdateTemplateGroupCollection`
    - `CreateTemplateGroupCollection`
    - `DeleteTemplateGroupCollection`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.56-rc 2022-08-11

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListCosts`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK CDN

- _Features_
  - Support the interface `ShowUrlTaskInfo`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `ipv6_accelerate` to the interface `ShowDomainFullConfig`
  - Add the request parameter `ipv6_accelerate` to the interface `UpdateDomainFullConfig`

### HuaweiCloud SDK OCR

- _Features_
  - Support the interface `RecognizeMacaoIdCard`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.55-rc 2022-08-02

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `CreateRecordIndex`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.54-rc 2022-07-21

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `security_group_rules_links` to the interface `NeutronListSecurityGroupRules`

# 3.0.53-rc 2022-07-14

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `effective_tag_pairs`, `cost_unit_pairs` to the interface `ListCustomerBillsMonthlyBreakDown`

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `tls_version` to the interface `UpdateDomainFullConfig`
  - Add the response parameter `tls_version` to the interface `ShowDomainFullConfig`

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type `date-time` -> `string` of the response parameter `create_time` of the interface `ListPublicips`
  - Modify the type `date-time` -> `string` of the response parameter `create_time` of the interface `ShowPublicip`

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `port_filter`, `ovs_hybrid_plug` to the interface `ListPorts`
  - Add the response parameters `port_filter`, `ovs_hybrid_plug` to the interface `UpdatePort`
  - Add the response parameters `port_filter`, `ovs_hybrid_plug` to the interface `ShowPort`
  - Add the response parameter `remote_address_group_id` to the interface `CreateSecurityGroup`
  - Add the response parameter `remote_address_group_id` to the interface `ListSecurityGroups`
  - Add the response parameter `remote_address_group_id` to the interface `ShowSecurityGroup`
  - Add the response parameter `remote_address_group_id` to the interface `ListSecurityGroupRules`
  - Add the response parameter `remote_address_group_id` to the interface `ShowSecurityGroupRule`
  - Add the response parameter `remote_address_group_id` to the interface `NeutronListSecurityGroups`
  - Add the response parameter `remote_address_group_id` to the interface `NeutronUpdateSecurityGroup`
  - Add the response parameter `remote_address_group_id` to the interface `NeutronShowSecurityGroup`
  - Add the response parameter `remote_address_group_id` to the interface `NeutronListSecurityGroupRules`
  - Add the response parameter `remote_address_group_id` to the interface `NeutronShowSecurityGroupRule`

# 3.0.52-rc 2022-07-07

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `title` to the interface `RecognizeVatInvoice`

# 3.0.51-rc 2022-06-30

### HuaweiCloud SDK DNS

- _Features_
  - Support `Domain Name Service`.
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK BSS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `mobile_phone` changed to required of the interface `SendVerificationMessageCode`

### HuaweiCloud SDK BSSINTL

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `email` changed to required of the interface `SendVerificationMessageCode`

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `cache_url_parameter_filter` to the interface `ShowDomainFullConfig`
  - Add the request parameter `cache_url_parameter_filter` to the interface `UpdateDomainFullConfig`

### HuaweiCloud SDK DNS

- _Features_
  - Support the interfaces `CreateRecordSetWithBatchLines`, `BatchUpdateRecordSetWithLine`, `BatchDeleteRecordSetWithLine`
- _Bug Fix_
  - None
- _Change_
  - The request parameter `records` changed to not required of the interface `CreateRecordSetWithLine`

### HuaweiCloud SDK OCR

- _Features_
  - Support the interfaces `RecognizeHkIdCard`, `RecognizeCambodianIdCard`, `RecognizeExitEntryPermit`, `RecognizeMainlandTravelPermit`
- _Bug Fix_
  - None
- _Change_
  - Modify the type `int32` -> `float` of the response parameter `direction` of the interface `RecognizeGeneralText`

# 3.0.50-rc 2022-06-19

### HuaweiCloud SDK OCR

- _Features_
  - Support the interface `RecognizeIdDocument`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.49-rc 2022-06-02

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `words_block_count`, `words_block_list` to the interface `RecognizeHealthCode`
  - Modify the type `float` -> `object` of the response parameter `confidence` of the interface `RecognizePcrTestRecord`

# 3.0.48-rc 2022-05-26

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameters `volume_type`, `hw:passthrough` to the interface `AttachServerVolume`

# 3.0.47-rc 2022-05-19

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `dry_run` to the interface `ResizeServer`
  - Add the request parameter `dry_run` to the interface `ResizePostPaidServer`
  - Add the request parameter `dry_run` to the interface `AttachServerVolume`

### HuaweiCloud SDK VOD

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `M3U8` to the request parameter `video_type` to the interface `UploadMetaDataByUrl`
  - Add the response parameter `sign_url` to the interface `PublishAssets`
  - Add the response parameter `sign_url` to the interface `UnpublishAssets`
  - Add the response parameter `sign_url` to the interface `ShowAssetMeta`
  - Add the response parameter `sign_url` to the interface `ShowAssetDetail`
  - Add the response parameter `sign_url` to the interface `ShowTakeOverTaskDetails`
  - Add the response parameter `sign_url` to the interface `ShowTakeOverAssetDetails`

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `neutron:VIP_PORT`, Remove the enum values `network:VIP_PORT` from the response parameter `device_owner` to the interface `ListPorts`
  - Add the enum values `neutron:VIP_PORT`, Remove the enum values `network:VIP_PORT` from the response parameter `device_owner` to the interface `UpdatePort`
  - Add the enum values `neutron:VIP_PORT`, Remove the enum values `network:VIP_PORT` from the response parameter `device_owner` to the interface `ShowPort`

# 3.0.46-rc 2022-05-12

### HuaweiCloud SDK FRS

- _Features_
  - Support the following interfaces:
    - `DetectLiveByUrlIntl`
    - `DetectLiveByFileIntl`
    - `DetectLiveByBase64Intl`
    - `DetectFaceByFileIntl`
    - `DetectFaceByUrlIntl`
    - `DetectFaceByBase64Intl`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK IAM

- _Features_
  - Support the interface `ShowDomainRoleAssignments`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - Support the interface `RecognizeHealthCode`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.45-rc 2022-04-28

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - Fix the problem that the response body's type of the interface `RecognizeMyanmarDriverLicense` is incorrect.
- _Change_
  - None

# 3.0.44-rc 2022-04-21

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListConsumeSubCustomers`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `sub_service_type_code`, `sub_service_type_name`, `sub_resource_type_code`, `sub_resource_type_name`, `sub_resource_id`, `sub_resource_name` to the interface `ListCustomerBillsMonthlyBreakDown`

# 3.0.43-rc 2022-04-14

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameters `sources`, `origin_protocol`, `force_redirect`, `compress` to the interface `UpdateDomainFullConfig`
  - Changes of the interface `ShowDomainFullConfig`:
    - Add the response parameters `sources`, `origin_protocol`, `force_redirect`, `compress`
    - Modify the type `string` -> `int32` of the response parameter `certificate_source`

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `ip_eq` to the interface `ListServersDetails`

# 3.0.42-rc 2022-04-07

### HuaweiCloud SDK BSS

- _Features_
  - Support the interface `ListStoredValueCards`
- _Bug Fix_
  - None
- _Change_
  - Remove the interfaces `ListSubCustomerDiscounts`, `BatchSetSubCustomerDiscount`
  - Add the response parameters `resource_type_name`, `service_type_name` to the interface `ShowRefundOrderDetails`
  - Add the response parameter `service_type_name` to the interface `ListCustomerOrders`
  - Add the response parameters `service_type_name`, `service_type_name` to the interface `ShowCustomerOrderDetails`
  - Add the response parameters `resource_type_name`, `service_type_name` to the interface `ListPayPerUseCustomerResources`
  - Add the response parameters `service_type_name`, `resource_type_name` to the interface `ListCustomerOnDemandResources`
  - Add the response parameters `cloud_service_type_name`, `resource_type_name` to the interface `ListSubcustomerMonthlyBills`
  - Add the response parameters `cloud_service_type_name`, `resource_type_name`, `period_type` to the interface `ListCustomerselfResourceRecordDetails`
  - Add the response parameters `cloud_service_type_name`, `resource_type_name` to the interface `ListCustomerselfResourceRecords`
  - Add the response parameters `service_type_name`, `resource_type_name` to the interface `ShowCustomerMonthlySum`
  - Changes of the interface `ListCustomerBillsFeeRecords`:
    - Add the request parameters `bill_date_begin`, `bill_date_end`
    - Add the response parameters `service_type_name`, `resource_type_name`
  - Add the response parameters `resource_type_name`, `service_type_name` to the interface `ListUsageTypes`
  - Add the response parameters `service_type_name`, `resource_type_name` to the interface `ListSubCustomerBillDetail`
  - Add the response parameters `service_type_name`, `resource_type_name` to the interface `ListCustomerBillsMonthlyBreakDown`
  - Add the response parameter `service_type_name` to the interface `ListFreeResourceInfos`
  - Add the response parameter `service_type_name` to the interface `ListIncentiveDiscountPolicies`

### HuaweiCloud SDK OCR

- _Features_
  - Support the interface `RecognizeWaybillElectronic`
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `print_code` to the interface `RecognizeVatInvoice`
  - Changes of the interface `RecognizeVehicleLicense`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`
  - Changes of the interface `RecognizeTaxiInvoice`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`
  - Add the response parameters `type`, `accumulated_scores`, `status`, `generation_date`, `current_time` to the interface `RecognizeDriverLicense`
  - Changes of the interface `RecognizeTrainTicket`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`
  - Changes of the interface `RecognizeBankcard`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`

# 3.0.41-rc 2022-03-25

### HuaweiCloud SDK CDN

- _Features_
  - Support the interfaces(v2):
    - `ShowDomainLocationStats`
    - `ShowDomainStats`
    - `ShowTopUrl`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK IMS

- _Features_
  - Support the interfaces `ListVersions`, `ShowVersion`
- _Bug Fix_
  - None
- _Change_
  - The request parameter `os_type` changed to not required of the interface `CreateDataImage`

### HuaweiCloud SDK IoTDA

- _Features_
  - Support the interface `ResetFingerprint`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `RecognizeVatInvoice`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`
  - Changes of the interface `RecognizeIdCard`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`
  - Changes of the interface `RecognizeDriverLicense`:
    - Add the request parameter `return_text_location`
    - Add the response parameter `text_location`

# 3.0.40-rc 2022-03-10

### HuaweiCloud SDK CDN

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the request parameter `X-Auth-Token` from the interface `ShowTopUrl`
  - Remove the request parameter `X-Auth-Token` from the interface `ShowDomainLocationStats`
  - Remove the request parameter `X-Auth-Token` from the interface `ShowDomainItemDetails`
  - Remove the request parameter `X-Auth-Token` from the interface `ShowDomainStats`
  - Remove the request parameter `X-Auth-Token` from the interface `ShowDomainItemLocationDetails`

# 3.0.39-rc 2022-03-07

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the type of the request parameter `ip_version` of the interface `CreatePrePaidPublicip`: `integer` -> `enum`

# 3.0.38-rc 2022-02-25

### HuaweiCloud SDK CDN

- _Features_
    - Support `Content Delivery Network` service.
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `ListSingleStreamDetail`
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK VOD

- _Features_
  - Support the interface `ListDomainLogs`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `delete_type` to the interface `DeleteAssets`

### HuaweiCloud SDK VPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `subnetpool_id` to the interface `NeutronListSubnets`

# 3.0.37-rc 2022-02-10

### HuaweiCloud SDK Live

- _Features_
  - Support the interfaces `ListTranscodeTaskCount`, `ListAreaDetail`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `publish_domain` to the interface `ListRecordData`
  - Remove the request parameter `plan_record_time` from the interface `CreateRecordRule`
  - Remove the response parameter `plan_record_time` from the interface `ListRecordRules`
  - Remove the response parameter `plan_record_time` from the interface `ShowRecordRule`
  - Changes of the interface `UpdateRecordRule`:
    - Remove the request parameter `plan_record_time`
    - Remove the response parameter `plan_record_time`
  - Remove the request parameter `on_demand_callback_url` from the interface `CreateRecordCallbackConfig`
  - Remove the response parameter `on_demand_callback_url` from the interface `ListRecordCallbackConfigs`
  - Remove the response parameter `on_demand_callback_url` from the interface `ShowRecordCallbackConfig`
  - Remove the request parameter `on_demand_callback_url` from the interface `UpdateRecordCallbackConfig`

# 3.0.36-rc 2022-01-25

### HuaweiCloud SDK IAM

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `session_user_id` to the interface `CreateLoginToken`

# 3.0.35-beta 2022-01-10

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `delete_on_termination` to the interface `CreateServers`

### HuaweiCloud SDK FunctionGraph

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Changes of the interface `UpdateFunctionConfig`:
    - Add the request parameter `is_stateful_function`
    - Add the response parameter `is_stateful_function`

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The response parameter `active_at` changed to not required of the interface `GlanceListImages`
  - The response parameter `active_at` changed to not required of the interface `GlanceShowImage`
  - The response parameter `active_at` changed to not required of the interface `GlanceUpdateImage`

# 3.0.34-beta 2021-12-25

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameter `updated_at` from the interface `NovaListServerActions`

# 3.0.33-beta 2021-12-17

### HuaweiCloud SDK OCR

- _Features_
  - Support the following interfaces:
    - `RecognizeThailandIdcard`
    - `RecognizeMyanmarIdcard`
    - `RecognizeMyanmarDriverLicense`
    - `RecognizeChileIdCard`
    - `RecognizeThailandLicensePlate`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.32-beta 2021-12-10

### HuaweiCloud SDK FRS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameters `landmark`, `gender`, `yaw_angle`, `roll_angle`, `pitch_angle`, `headpose`, `smile`, `skin`, `ethnic` from the interface `DetectFaceByFile`
  - Remove the response parameters `landmark`, `gender`, `yaw_angle`, `roll_angle`, `pitch_angle`, `headpose`, `smile`, `skin`, `ethnic` from the interface `DetectFaceByUrl`
  - Remove the response parameters `landmark`, `gender`, `yaw_angle`, `roll_angle`, `pitch_angle`, `headpose`, `smile`, `skin`, `ethnic` from the interface `DetectFaceByBase64`

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - The request parameter `default_record_config` changed to required of the interface `CreateRecordRule`

# 3.0.31-beta 2021-11-29

### HuaweiCloud SDK EVS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the interface `CinderExportToImage`.

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `os:scheduler_hints` to the interfaces `NovaShowServer` and `NovaListServersDetails`.

# 3.0.30-beta 2021-11-25

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request and response parameter `alias` to the interfaces `CreatePrePaidPublicip` and `CreatePublicip`.
  - Add the response parameter `alias` to the interfaces `ShowPublicip` and `UpdatePublicip`.

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameter `extracted_data` of the interface `RecognizeHandwriting`.

# 3.0.29-beta 2021-11-12

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `results` to the interface `ShowJob`.

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameters `country` and `protocol` to the interface `ListBandwidthDetail` and `ListUsersOfStream`.
  - Add the request parameter `protocol` to the interface `ListDomainTrafficDetail`, `ListDomainBandwidthPeak` and `ListDomainTrafficSummary`.
  - Add the request parameter `stream` to the interface `ListTranscodeData`.
  - Add the request parameters `stream`, `start_time` and `end_time` to the interface `ListHistoryStreams`.

### HuaweiCloud SDK OCR

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameter `confidence` to the interface `RecognizeGeneralTable`.

### HuaweiCloud SDK VPC

- _Features_
  - Support interfaces(V3): `AddVpcExtendCidr`,`RemoveVpcExtendCidr`,`ListVpcs`,`ShowVpc`
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.28-beta 2021-10-25

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `bandwidth_type` to the interface `CreateSharedBandwidth`.

### HuaweiCloud SDK FRS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `single` to the interfaces `AddFacesByFile`, `AddFacesByBase64` and `AddFacesByUrl`.

### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `current_task`, `image_name` and `process_percent` to the interface `ShowJob`.

### HuaweiCloud SDK IoTDA

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `status` to the interface `ListDevices`.
  - Add the request parameter `file_path` to the interface `CreateRuleAction`.

### HuaweiCloud SDK OCR

- _Features_
  - Support the interfaces `RecognizeInsurancePolicy`, `RecognizeFinancialStatement` and `RecognizeQualificationCertificate`.
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.27-beta 2021-10-19

### HuaweiCloud SDK EIP

- _Features_
  - Support the following interfaces:
    - `ListCommonPools`
    - `ListPublicBorderGroups`
    - `ListPublicipPool`
    - `ShowPublicipPool`
    - `ListShareBandwidthTypes`
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `allow_share_bandwidth_type_any` to the interface `ListPublicips`.
  - Modify the type of the request parameter `limit` of the interface `NeutronListFloatingIps`.
  - Modify the name of the request body of the interface `NeutronUpdateFloatingIp`: `floatingip` -> `NeutronUpdateFloatingIpRequestBody`
  - Add the response parameter `allow_share_bandwidth_types` to the interface `ShowPublicip`.

# 3.0.26-beta 2021-10-11

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Set the request parameter `reverse_binding` to `optional` of the interface `DisassociateServerVirtualIp`.

### HuaweiCloud SDK FRS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the optional value to `2,4,6,7,8,11,12,13,21` of the request parameter `attributes` of the interfaces `DetectFaceByFile`,`DetectFaceByBase64` and `DetectFaceByUrl`.

# 3.0.25-beta 2021-09-29

### HuaweiCloud SDK ECS

- _Features_
  - Support the following interfaces:
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
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.24-beta 2021-09-26

### HuaweiCloud SDK Meeting

- _Features_
  - Support the interfaces `InviteOperateVideo`,`SetSsoConfig` and `ShowSsoConfig`.
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.23-beta 2021-09-24

### HuaweiCloud SDK Live

- _Features_
  - None
- _Bug Fix_
  - Fix the issue that the interface `ListRecordContents` cannot be found.
- _Change_
  - None

# 3.0.22-beta 2021-09-24

### HuaweiCloud SDK IVS

- _Features_
  - Support the service `Identity Verification Solution`.
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `ListRecordContents`.
- _Bug Fix_
  - None
- _Change_
  - None

# 3.0.21-beta 2021-09-16

### HuaweiCloud SDK OCR
- _Features_
  - Support the interface `RecognizeInvoiceVerification`.
- _Bug Fix_
  - None
- _Change_
  - None
  
# 3.0.20-beta 2021-09-10

### HuaweiCloud SDK OCR

- _Features_
    - Support `Optical Character Recognition` service.
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK VOD

- _Features_
    - Support `Video on Demand` service.
- _Bug Fix_
    - None
- _Change_
    - None  
    
### HuaweiCloud SDK EVS
- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Set the request parameter `size` of the interface `CreateVolume` to `required`.    
        
    

# 3.0.19-beta 2021-08-31

### HuaweiCloud SDK FRS
- _Features_
  - Support the following interfaces:
    - `DetectLiveByUrl`
    - `DetectLiveFaceByUrl`
    - `DetectLiveByFile`
    - `DetectLiveFaceByFile`
    - `DetectLiveByBase64`
    - `DetectLiveFaceByBase64`
- _Bug Fix_
  - None
- _Change_
  - None
  
### HuaweiCloud SDK Live
- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the response parameters `video_frame_rate`,`audio_frame_rate`,`audio_bitrate` and `resolution`.

# 3.0.18-beta 2021-08-25

### HuaweiCloud SDK FRS

- _Features_
  - Support the `Face Recognition Service`.
- _Bug Fix_
  - None
- _Change_
  - None

### HuaweiCloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the following response parameters to the interface `ListServerInterfaces`:
    - `delete_on_termination`
    - `driver_mode`
    - `min_rate`
    - `multiqueue_num`
    - `pci_address`
  - Add the response parameters `cpu_options` and `hypervisor` to the interface `ListServersDetails`.

### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request and response parameter `public_border_group` to the interface `BatchCreateSharedBandwidths`.
  - Add the response parameter `public_border_group` to the interface `AddPublicipsIntoSharedBandwidth`.

### HuaweiCloud SDK Live

- _Features_
  - Support the interface `RunRecord`.
- _Bug Fix_
  - None
- _Change_
  - None
  
# 3.0.17-beta 2021-08-10

### HuaweiCloud SDK Core

- _Features_
    - Support User-defined authentication
- _Bug Fix_
    - None
- _Change_
    - None
    
### HuaweiCloud SDK EIP

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the name of the response parameter of the interfaces `ListBandwidths` and `ShowPublicip`: `publicip_border_group` -> `public_border_group`
  
### HuaweiCloud SDK EVS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the request parameter `server_id` to the interface `ListVolumes`.
  
### HuaweiCloud SDK IAM

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Remove the response parameter `order_id` from the interface `CreateDeployment`.
  
### HuaweiCloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Modify the request parameter `value` of the interface `UpdateImage` as a required parameter.     

# 3.0.16-beta 2021-07-30

### HuaweiCloud SDK Live

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Remove the response parameter `domain_source` of the interface `ShowDomain`.

### HuaweiCloud SDK IMS

- _Features_
    - None
- _Bug Fix_
    - [Issue 40](https://github.com/huaweicloud/huaweicloud-sdk-java-v3/issues/40): Fix the issue that the type of the response parameter `__lazyloading` is incorrectly defined.
- _Change_
    - None

# 3.0.15-beta 2021-07-09

### HuaweiCloud SDK Core

- _Features_
    - Support Region Management
- _Bug Fix_
    - None
- _Change_
    - None
    
### HuaweiCloud SDK Live

- _Features_
    - None
- _Bug Fix_
    - Fixed the issue where the interface fails to be invoked using the IP address.
- _Change_
    - None 
    
### HuaweiCloud SDK EIP

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Add the response parameter `publicip_border_group` to the interfaces `CreateSharedBandwidth`,`ListBandwidths`.

### HuaweiCloud SDK IMS

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Add the response parameters `__root_origin`,`checksum`,`size` to the interfaces `GlanceCreateImageMetadata`.
    - Remove the request parameters `deleted`, `deleted_at` of the interface `GlanceAddImageMember`, and add the following request parameters:
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

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Add the response parameters `edge_node_ids`, `last_update_time` to the interface `ListRules`.
    
# 3.0.14-beta 2021-06-30

### HuaweiCloud SDK Live

- _Features_
    - Support interfaces of version v2.
- _Bug Fix_
    - None
- _Change_
    - None
# 3.0.13-beta 2021-06-25

### HuaweiCloud SDK Core

- _Features_
    - Support multipart/form-data
- _Bug Fix_
    - None
- _Change_
    - None
# 3.0.12-beta 2021-06-01

### HuaweiCloud SDK LIVE

- _Features_
    - Support `Live` service.
- _Bug Fix_
    - None
- _Change_
    - None
# 3.0.11-beta 2021-05-25

### HuaweiCloud SDK Core

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Add comments to the request object in the client method.
    - Add comments to a non-body object of the Request object.
    - Add comments to the get method of the DTO.
    
# 3.0.10-beta 2021-03-19

### HuaweiCloud SDK ECS

- _Features_
    - None
- _Bug Fix_
    - Fix the problem of deserialization failure of response body of interface `ListFlavors`.
- _Change_
    - None

# 3.0.9-beta 2021-03-15

### HuaweiCloud SDK ECS

- _Features_
    - Support more interface: `ShowServerGroup`.
- _Bug Fix_
    - None
- _Change_
    - Change the interface name from `ShowWindowsServerPassword` to `ShowServerPassword`.
    - Change the interface name from `DeleteWindowsServerPassword` to `DeleteServerPassword`.

### HuaweiCloud SDK IAM

- _Features_
    - Support more interfaces:
        - `KeystoneShowIdentityProvider`
        - `KeystoneCreateIdentityProvider`
        - `KeystoneUpdateIdentityProvider`
        - `KeystoneDeleteIdentityProvider`
        - `CreateTokenWithIdToken`
- _Bug Fix_
    - None
- _Change_
    - Do not support interface `CreateUnscopeTokenByIdpInitiated` anymore.

### HuaweiCloud SDK IMS

- _Features_
    - Support more interfaces:
        - `ListImageByTags` which mead list images queried by tags.
        - `ListImagesTags` which means list all tags of all images in current account.
        - `ListImageTags` which means list all tags of specified image.
        - `AddImageTag`
        - `DeleteImageTag`
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK IoTDA

- _Features_
    - Support `IoT Device Access` service.
- _Bug Fix_
    - None
- _Change_
    - None

# 3.0.8-beta 2021-02-27

### HuaweiCloud SDK Core

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Optimize the description of `README` and the format of `CHANGELOG`.

### HuaweiCloud SDK IAM

- _Features_
    - None
- _Bug Fix_
    - Correct property from `pwd_stength` to `pwd_strength` in class `KeystoneUserResult`.
- _Change_
    - None

### HuaweiCloud SDK IMS

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Delete the default value `vhd` of property `diskFormat` in the class `ListImagesRequest`.
    - Delete the default value `vhd` of property `diskFormat` in the class `GlanceListImagesRequest`.

# 3.0.7-beta 2021-02-07

### HuaweiCloud SDK IMS

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Interface `ListOsVersions` adjustment: change the data type of `os_bit` which is the property of response of the
      interface from string to integer.

# 3.0.6-beta 2021-01-30

### HuaweiCloud SDK ECS

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Change interface name from `UpdateAutoTerminateTimeServer` to `UpdateServerAutoTerminateTime`.

### HuaweiCloud SDK EVS

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Interface `CinderCreateVolume` is supported to specify the id of dedicated storage pool using
      property `OS-SCH-HNT:scheduler_hints`.
    - Modify property type of `allocated` of class `QuotaDetails` from `String` to `Integer`.

### HuaweiCloud SDK IAM

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Increases the property `access_mode` of response class of interface `ShowUser`.

# 3.0.5-beta 2021-01-25

### HuaweiCloud SDK Core

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - The default value of `ConnectionTimeout` is set to 60 seconds.
    - The default value of `ReadTimeout` is set to 120 seconds.

### HuaweiCloud SDK ECS

- _Features_
    - Support more interface: UpdateAutoTerminateTimeServer.
- _Bug Fix_
    - None
- _Change_
    - The default value of `ConnectionTimeout` is set to 60 seconds.
    - The default value of `ReadTimeout` is set to 60 seconds.

# 3.0.4-beta 2021-01-15

### HuaweiCloud SDK Core

- _Features_
    - None
- _Bug Fix_
    - None
- _Change_
    - Modify function of `newBuilder`.

# 3.0.3-beta 2020-12-15

### HuaweiCloud SDK ECS

- _Features_
    - Support interfaces of ECS.
- _Bug Fix_
    - None
- _Change_
    - None

### HuaweiCloud SDK VPC

- _Features_
    - Support interfaces of version v2.
- _Bug Fix_
    - None
- _Change_
    - None

## Huaweicloud SDK EIP

- _Features_
    - Support Elastic IP service.
- _Bug Fix_
    - None
- _Change_
    - None

# 3.0.2-beta 2020-12-04

### HuaweiCloud SDK Core

- _Features_
    - None
- _Bug Fix_
    - Fix the problem that the Credentials type is incorrect because the HUAWEICLOUD_SDK_TYPE variable is not set when
      credentials are obtained from environment variables.
- _Change_
    - A listener is added to obtain the original encrypted HTTP request and return information.

# 3.0.1-beta 2020-10-19

### First Release

- _Supported Services_
    - Identity and Access Management(IAM)