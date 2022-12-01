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