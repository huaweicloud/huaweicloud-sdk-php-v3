<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllTableVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllTableVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  l1的ID，填写String类型替代Long类型。
    * name  l1名称。
    * tbLogicGuid  表发布后对应的逻辑实体guid。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * tbGuid  表发布后对应的物理表guid。
    * code  编码。
    * createBy  创建人。
    * tenantId  租户ID。
    * description  描述。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * dbName  数据库名。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，填写String类型替代Long类型。
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * standardCount  标准数量，只读，填写String类型替代Long类型。
    * alias  别名。
    * apiId  汇总表API ID。
    * workspaceId  工作空间ID。
    * workspaceName  工作空间名称。
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'tbLogicGuid' => 'string',
            'qualityId' => 'string',
            'reversed' => 'bool',
            'partitionConf' => 'string',
            'dirtyOutSwitch' => 'bool',
            'dirtyOutDatabase' => 'string',
            'dirtyOutPrefix' => 'string',
            'dirtyOutSuffix' => 'string',
            'tbGuid' => 'string',
            'code' => 'string',
            'createBy' => 'string',
            'tenantId' => 'string',
            'description' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'dbName' => 'string',
            'dwType' => 'string',
            'queueName' => 'string',
            'schema' => 'string',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'devPhysicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dlfTask' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'materialization' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'publishToDlm' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'standardCount' => 'string',
            'alias' => 'string',
            'apiId' => 'string',
            'workspaceId' => 'string',
            'workspaceName' => 'string',
            'devVersion' => 'string',
            'prodVersion' => 'string',
            'devVersionName' => 'string',
            'prodVersionName' => 'string',
            'envType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  l1的ID，填写String类型替代Long类型。
    * name  l1名称。
    * tbLogicGuid  表发布后对应的逻辑实体guid。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * tbGuid  表发布后对应的物理表guid。
    * code  编码。
    * createBy  创建人。
    * tenantId  租户ID。
    * description  描述。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * dbName  数据库名。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，填写String类型替代Long类型。
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * standardCount  标准数量，只读，填写String类型替代Long类型。
    * alias  别名。
    * apiId  汇总表API ID。
    * workspaceId  工作空间ID。
    * workspaceName  工作空间名称。
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'tbLogicGuid' => null,
        'qualityId' => null,
        'reversed' => null,
        'partitionConf' => null,
        'dirtyOutSwitch' => null,
        'dirtyOutDatabase' => null,
        'dirtyOutPrefix' => null,
        'dirtyOutSuffix' => null,
        'tbGuid' => null,
        'code' => null,
        'createBy' => null,
        'tenantId' => null,
        'description' => null,
        'status' => null,
        'bizType' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'dbName' => null,
        'dwType' => null,
        'queueName' => null,
        'schema' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'newBiz' => null,
        'physicalTable' => null,
        'devPhysicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null,
        'dlfTask' => null,
        'materialization' => null,
        'publishToDlm' => null,
        'summaryStatus' => null,
        'standardCount' => null,
        'alias' => null,
        'apiId' => null,
        'workspaceId' => null,
        'workspaceName' => null,
        'devVersion' => null,
        'prodVersion' => null,
        'devVersionName' => null,
        'prodVersionName' => null,
        'envType' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * id  l1的ID，填写String类型替代Long类型。
    * name  l1名称。
    * tbLogicGuid  表发布后对应的逻辑实体guid。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * tbGuid  表发布后对应的物理表guid。
    * code  编码。
    * createBy  创建人。
    * tenantId  租户ID。
    * description  描述。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * dbName  数据库名。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，填写String类型替代Long类型。
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * standardCount  标准数量，只读，填写String类型替代Long类型。
    * alias  别名。
    * apiId  汇总表API ID。
    * workspaceId  工作空间ID。
    * workspaceName  工作空间名称。
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'tbLogicGuid' => 'tb_logic_guid',
            'qualityId' => 'quality_id',
            'reversed' => 'reversed',
            'partitionConf' => 'partition_conf',
            'dirtyOutSwitch' => 'dirty_out_switch',
            'dirtyOutDatabase' => 'dirty_out_database',
            'dirtyOutPrefix' => 'dirty_out_prefix',
            'dirtyOutSuffix' => 'dirty_out_suffix',
            'tbGuid' => 'tb_guid',
            'code' => 'code',
            'createBy' => 'create_by',
            'tenantId' => 'tenant_id',
            'description' => 'description',
            'status' => 'status',
            'bizType' => 'biz_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'dbName' => 'db_name',
            'dwType' => 'dw_type',
            'queueName' => 'queue_name',
            'schema' => 'schema',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'newBiz' => 'new_biz',
            'physicalTable' => 'physical_table',
            'devPhysicalTable' => 'dev_physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality',
            'dlfTask' => 'dlf_task',
            'materialization' => 'materialization',
            'publishToDlm' => 'publish_to_dlm',
            'summaryStatus' => 'summary_status',
            'standardCount' => 'standard_count',
            'alias' => 'alias',
            'apiId' => 'api_id',
            'workspaceId' => 'workspace_id',
            'workspaceName' => 'workspace_name',
            'devVersion' => 'dev_version',
            'prodVersion' => 'prod_version',
            'devVersionName' => 'dev_version_name',
            'prodVersionName' => 'prod_version_name',
            'envType' => 'env_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  l1的ID，填写String类型替代Long类型。
    * name  l1名称。
    * tbLogicGuid  表发布后对应的逻辑实体guid。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * tbGuid  表发布后对应的物理表guid。
    * code  编码。
    * createBy  创建人。
    * tenantId  租户ID。
    * description  描述。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * dbName  数据库名。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，填写String类型替代Long类型。
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * standardCount  标准数量，只读，填写String类型替代Long类型。
    * alias  别名。
    * apiId  汇总表API ID。
    * workspaceId  工作空间ID。
    * workspaceName  工作空间名称。
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'tbLogicGuid' => 'setTbLogicGuid',
            'qualityId' => 'setQualityId',
            'reversed' => 'setReversed',
            'partitionConf' => 'setPartitionConf',
            'dirtyOutSwitch' => 'setDirtyOutSwitch',
            'dirtyOutDatabase' => 'setDirtyOutDatabase',
            'dirtyOutPrefix' => 'setDirtyOutPrefix',
            'dirtyOutSuffix' => 'setDirtyOutSuffix',
            'tbGuid' => 'setTbGuid',
            'code' => 'setCode',
            'createBy' => 'setCreateBy',
            'tenantId' => 'setTenantId',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'bizType' => 'setBizType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'dbName' => 'setDbName',
            'dwType' => 'setDwType',
            'queueName' => 'setQueueName',
            'schema' => 'setSchema',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'newBiz' => 'setNewBiz',
            'physicalTable' => 'setPhysicalTable',
            'devPhysicalTable' => 'setDevPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality',
            'dlfTask' => 'setDlfTask',
            'materialization' => 'setMaterialization',
            'publishToDlm' => 'setPublishToDlm',
            'summaryStatus' => 'setSummaryStatus',
            'standardCount' => 'setStandardCount',
            'alias' => 'setAlias',
            'apiId' => 'setApiId',
            'workspaceId' => 'setWorkspaceId',
            'workspaceName' => 'setWorkspaceName',
            'devVersion' => 'setDevVersion',
            'prodVersion' => 'setProdVersion',
            'devVersionName' => 'setDevVersionName',
            'prodVersionName' => 'setProdVersionName',
            'envType' => 'setEnvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  l1的ID，填写String类型替代Long类型。
    * name  l1名称。
    * tbLogicGuid  表发布后对应的逻辑实体guid。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * tbGuid  表发布后对应的物理表guid。
    * code  编码。
    * createBy  创建人。
    * tenantId  租户ID。
    * description  描述。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * dbName  数据库名。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，填写String类型替代Long类型。
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * standardCount  标准数量，只读，填写String类型替代Long类型。
    * alias  别名。
    * apiId  汇总表API ID。
    * workspaceId  工作空间ID。
    * workspaceName  工作空间名称。
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'tbLogicGuid' => 'getTbLogicGuid',
            'qualityId' => 'getQualityId',
            'reversed' => 'getReversed',
            'partitionConf' => 'getPartitionConf',
            'dirtyOutSwitch' => 'getDirtyOutSwitch',
            'dirtyOutDatabase' => 'getDirtyOutDatabase',
            'dirtyOutPrefix' => 'getDirtyOutPrefix',
            'dirtyOutSuffix' => 'getDirtyOutSuffix',
            'tbGuid' => 'getTbGuid',
            'code' => 'getCode',
            'createBy' => 'getCreateBy',
            'tenantId' => 'getTenantId',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'bizType' => 'getBizType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'dbName' => 'getDbName',
            'dwType' => 'getDwType',
            'queueName' => 'getQueueName',
            'schema' => 'getSchema',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'newBiz' => 'getNewBiz',
            'physicalTable' => 'getPhysicalTable',
            'devPhysicalTable' => 'getDevPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality',
            'dlfTask' => 'getDlfTask',
            'materialization' => 'getMaterialization',
            'publishToDlm' => 'getPublishToDlm',
            'summaryStatus' => 'getSummaryStatus',
            'standardCount' => 'getStandardCount',
            'alias' => 'getAlias',
            'apiId' => 'getApiId',
            'workspaceId' => 'getWorkspaceId',
            'workspaceName' => 'getWorkspaceName',
            'devVersion' => 'getDevVersion',
            'prodVersion' => 'getProdVersion',
            'devVersionName' => 'getDevVersionName',
            'prodVersionName' => 'getProdVersionName',
            'envType' => 'getEnvType'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tbLogicGuid'] = isset($data['tbLogicGuid']) ? $data['tbLogicGuid'] : null;
        $this->container['qualityId'] = isset($data['qualityId']) ? $data['qualityId'] : null;
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : null;
        $this->container['partitionConf'] = isset($data['partitionConf']) ? $data['partitionConf'] : null;
        $this->container['dirtyOutSwitch'] = isset($data['dirtyOutSwitch']) ? $data['dirtyOutSwitch'] : null;
        $this->container['dirtyOutDatabase'] = isset($data['dirtyOutDatabase']) ? $data['dirtyOutDatabase'] : null;
        $this->container['dirtyOutPrefix'] = isset($data['dirtyOutPrefix']) ? $data['dirtyOutPrefix'] : null;
        $this->container['dirtyOutSuffix'] = isset($data['dirtyOutSuffix']) ? $data['dirtyOutSuffix'] : null;
        $this->container['tbGuid'] = isset($data['tbGuid']) ? $data['tbGuid'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['devPhysicalTable'] = isset($data['devPhysicalTable']) ? $data['devPhysicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
        $this->container['dlfTask'] = isset($data['dlfTask']) ? $data['dlfTask'] : null;
        $this->container['materialization'] = isset($data['materialization']) ? $data['materialization'] : null;
        $this->container['publishToDlm'] = isset($data['publishToDlm']) ? $data['publishToDlm'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['standardCount'] = isset($data['standardCount']) ? $data['standardCount'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['devVersion'] = isset($data['devVersion']) ? $data['devVersion'] : null;
        $this->container['prodVersion'] = isset($data['prodVersion']) ? $data['prodVersion'] : null;
        $this->container['devVersionName'] = isset($data['devVersionName']) ? $data['devVersionName'] : null;
        $this->container['prodVersionName'] = isset($data['prodVersionName']) ? $data['prodVersionName'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets id
    *  l1的ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id l1的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  l1名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name l1名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tbLogicGuid
    *  表发布后对应的逻辑实体guid。
    *
    * @return string|null
    */
    public function getTbLogicGuid()
    {
        return $this->container['tbLogicGuid'];
    }

    /**
    * Sets tbLogicGuid
    *
    * @param string|null $tbLogicGuid 表发布后对应的逻辑实体guid。
    *
    * @return $this
    */
    public function setTbLogicGuid($tbLogicGuid)
    {
        $this->container['tbLogicGuid'] = $tbLogicGuid;
        return $this;
    }

    /**
    * Gets qualityId
    *  质量ID。
    *
    * @return string|null
    */
    public function getQualityId()
    {
        return $this->container['qualityId'];
    }

    /**
    * Sets qualityId
    *
    * @param string|null $qualityId 质量ID。
    *
    * @return $this
    */
    public function setQualityId($qualityId)
    {
        $this->container['qualityId'] = $qualityId;
        return $this;
    }

    /**
    * Gets reversed
    *  是否是逆向的。
    *
    * @return bool|null
    */
    public function getReversed()
    {
        return $this->container['reversed'];
    }

    /**
    * Sets reversed
    *
    * @param bool|null $reversed 是否是逆向的。
    *
    * @return $this
    */
    public function setReversed($reversed)
    {
        $this->container['reversed'] = $reversed;
        return $this;
    }

    /**
    * Gets partitionConf
    *  分区表达式。
    *
    * @return string|null
    */
    public function getPartitionConf()
    {
        return $this->container['partitionConf'];
    }

    /**
    * Sets partitionConf
    *
    * @param string|null $partitionConf 分区表达式。
    *
    * @return $this
    */
    public function setPartitionConf($partitionConf)
    {
        $this->container['partitionConf'] = $partitionConf;
        return $this;
    }

    /**
    * Gets dirtyOutSwitch
    *  异常数据输出开关。
    *
    * @return bool|null
    */
    public function getDirtyOutSwitch()
    {
        return $this->container['dirtyOutSwitch'];
    }

    /**
    * Sets dirtyOutSwitch
    *
    * @param bool|null $dirtyOutSwitch 异常数据输出开关。
    *
    * @return $this
    */
    public function setDirtyOutSwitch($dirtyOutSwitch)
    {
        $this->container['dirtyOutSwitch'] = $dirtyOutSwitch;
        return $this;
    }

    /**
    * Gets dirtyOutDatabase
    *  异常数据输出库。
    *
    * @return string|null
    */
    public function getDirtyOutDatabase()
    {
        return $this->container['dirtyOutDatabase'];
    }

    /**
    * Sets dirtyOutDatabase
    *
    * @param string|null $dirtyOutDatabase 异常数据输出库。
    *
    * @return $this
    */
    public function setDirtyOutDatabase($dirtyOutDatabase)
    {
        $this->container['dirtyOutDatabase'] = $dirtyOutDatabase;
        return $this;
    }

    /**
    * Gets dirtyOutPrefix
    *  异常表前缀。
    *
    * @return string|null
    */
    public function getDirtyOutPrefix()
    {
        return $this->container['dirtyOutPrefix'];
    }

    /**
    * Sets dirtyOutPrefix
    *
    * @param string|null $dirtyOutPrefix 异常表前缀。
    *
    * @return $this
    */
    public function setDirtyOutPrefix($dirtyOutPrefix)
    {
        $this->container['dirtyOutPrefix'] = $dirtyOutPrefix;
        return $this;
    }

    /**
    * Gets dirtyOutSuffix
    *  异常表后缀。
    *
    * @return string|null
    */
    public function getDirtyOutSuffix()
    {
        return $this->container['dirtyOutSuffix'];
    }

    /**
    * Sets dirtyOutSuffix
    *
    * @param string|null $dirtyOutSuffix 异常表后缀。
    *
    * @return $this
    */
    public function setDirtyOutSuffix($dirtyOutSuffix)
    {
        $this->container['dirtyOutSuffix'] = $dirtyOutSuffix;
        return $this;
    }

    /**
    * Gets tbGuid
    *  表发布后对应的物理表guid。
    *
    * @return string|null
    */
    public function getTbGuid()
    {
        return $this->container['tbGuid'];
    }

    /**
    * Sets tbGuid
    *
    * @param string|null $tbGuid 表发布后对应的物理表guid。
    *
    * @return $this
    */
    public function setTbGuid($tbGuid)
    {
        $this->container['tbGuid'] = $tbGuid;
        return $this;
    }

    /**
    * Gets code
    *  编码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets description
    *  描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets queueName
    *  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets schema
    *  DWS类型需要。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema DWS类型需要。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets l1
    *  主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
    * Sets l1
    *
    * @param string|null $l1 主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;
        return $this;
    }

    /**
    * Gets l2
    *  主题域中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
    * Sets l2
    *
    * @param string|null $l2 主题域中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;
        return $this;
    }

    /**
    * Gets l3
    *  业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
    * Sets l3
    *
    * @param string|null $l3 业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;
        return $this;
    }

    /**
    * Gets l1Id
    *  主题域分组ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getL1Id()
    {
        return $this->container['l1Id'];
    }

    /**
    * Sets l1Id
    *
    * @param string|null $l1Id 主题域分组ID，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setL1Id($l1Id)
    {
        $this->container['l1Id'] = $l1Id;
        return $this;
    }

    /**
    * Gets l2Id
    *  主题域ID，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2Id()
    {
        return $this->container['l2Id'];
    }

    /**
    * Sets l2Id
    *
    * @param string|null $l2Id 主题域ID，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2Id($l2Id)
    {
        $this->container['l2Id'] = $l2Id;
        return $this;
    }

    /**
    * Gets l3Id
    *  业务对象ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param string|null $l3Id 业务对象ID，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets newBiz
    *  newBiz
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null
    */
    public function getNewBiz()
    {
        return $this->container['newBiz'];
    }

    /**
    * Sets newBiz
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null $newBiz newBiz
    *
    * @return $this
    */
    public function setNewBiz($newBiz)
    {
        $this->container['newBiz'] = $newBiz;
        return $this;
    }

    /**
    * Gets physicalTable
    *  physicalTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getPhysicalTable()
    {
        return $this->container['physicalTable'];
    }

    /**
    * Sets physicalTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $physicalTable physicalTable
    *
    * @return $this
    */
    public function setPhysicalTable($physicalTable)
    {
        $this->container['physicalTable'] = $physicalTable;
        return $this;
    }

    /**
    * Gets devPhysicalTable
    *  devPhysicalTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getDevPhysicalTable()
    {
        return $this->container['devPhysicalTable'];
    }

    /**
    * Sets devPhysicalTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $devPhysicalTable devPhysicalTable
    *
    * @return $this
    */
    public function setDevPhysicalTable($devPhysicalTable)
    {
        $this->container['devPhysicalTable'] = $devPhysicalTable;
        return $this;
    }

    /**
    * Gets technicalAsset
    *  technicalAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getTechnicalAsset()
    {
        return $this->container['technicalAsset'];
    }

    /**
    * Sets technicalAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $technicalAsset technicalAsset
    *
    * @return $this
    */
    public function setTechnicalAsset($technicalAsset)
    {
        $this->container['technicalAsset'] = $technicalAsset;
        return $this;
    }

    /**
    * Gets businessAsset
    *  businessAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getBusinessAsset()
    {
        return $this->container['businessAsset'];
    }

    /**
    * Sets businessAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $businessAsset businessAsset
    *
    * @return $this
    */
    public function setBusinessAsset($businessAsset)
    {
        $this->container['businessAsset'] = $businessAsset;
        return $this;
    }

    /**
    * Gets metaDataLink
    *  metaDataLink
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getMetaDataLink()
    {
        return $this->container['metaDataLink'];
    }

    /**
    * Sets metaDataLink
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $metaDataLink metaDataLink
    *
    * @return $this
    */
    public function setMetaDataLink($metaDataLink)
    {
        $this->container['metaDataLink'] = $metaDataLink;
        return $this;
    }

    /**
    * Gets dataQuality
    *  dataQuality
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getDataQuality()
    {
        return $this->container['dataQuality'];
    }

    /**
    * Sets dataQuality
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $dataQuality dataQuality
    *
    * @return $this
    */
    public function setDataQuality($dataQuality)
    {
        $this->container['dataQuality'] = $dataQuality;
        return $this;
    }

    /**
    * Gets dlfTask
    *  dlfTask
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getDlfTask()
    {
        return $this->container['dlfTask'];
    }

    /**
    * Sets dlfTask
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $dlfTask dlfTask
    *
    * @return $this
    */
    public function setDlfTask($dlfTask)
    {
        $this->container['dlfTask'] = $dlfTask;
        return $this;
    }

    /**
    * Gets materialization
    *  materialization
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getMaterialization()
    {
        return $this->container['materialization'];
    }

    /**
    * Sets materialization
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $materialization materialization
    *
    * @return $this
    */
    public function setMaterialization($materialization)
    {
        $this->container['materialization'] = $materialization;
        return $this;
    }

    /**
    * Gets publishToDlm
    *  publishToDlm
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getPublishToDlm()
    {
        return $this->container['publishToDlm'];
    }

    /**
    * Sets publishToDlm
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $publishToDlm publishToDlm
    *
    * @return $this
    */
    public function setPublishToDlm($publishToDlm)
    {
        $this->container['publishToDlm'] = $publishToDlm;
        return $this;
    }

    /**
    * Gets summaryStatus
    *  summaryStatus
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getSummaryStatus()
    {
        return $this->container['summaryStatus'];
    }

    /**
    * Sets summaryStatus
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $summaryStatus summaryStatus
    *
    * @return $this
    */
    public function setSummaryStatus($summaryStatus)
    {
        $this->container['summaryStatus'] = $summaryStatus;
        return $this;
    }

    /**
    * Gets standardCount
    *  标准数量，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getStandardCount()
    {
        return $this->container['standardCount'];
    }

    /**
    * Sets standardCount
    *
    * @param string|null $standardCount 标准数量，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setStandardCount($standardCount)
    {
        $this->container['standardCount'] = $standardCount;
        return $this;
    }

    /**
    * Gets alias
    *  别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets apiId
    *  汇总表API ID。
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId 汇总表API ID。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称。
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称。
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets devVersion
    *  开发环境版本，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getDevVersion()
    {
        return $this->container['devVersion'];
    }

    /**
    * Sets devVersion
    *
    * @param string|null $devVersion 开发环境版本，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setDevVersion($devVersion)
    {
        $this->container['devVersion'] = $devVersion;
        return $this;
    }

    /**
    * Gets prodVersion
    *  生产环境版本，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getProdVersion()
    {
        return $this->container['prodVersion'];
    }

    /**
    * Sets prodVersion
    *
    * @param string|null $prodVersion 生产环境版本，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setProdVersion($prodVersion)
    {
        $this->container['prodVersion'] = $prodVersion;
        return $this;
    }

    /**
    * Gets devVersionName
    *  开发环境版本名称
    *
    * @return string|null
    */
    public function getDevVersionName()
    {
        return $this->container['devVersionName'];
    }

    /**
    * Sets devVersionName
    *
    * @param string|null $devVersionName 开发环境版本名称
    *
    * @return $this
    */
    public function setDevVersionName($devVersionName)
    {
        $this->container['devVersionName'] = $devVersionName;
        return $this;
    }

    /**
    * Gets prodVersionName
    *  生产环境版本名称
    *
    * @return string|null
    */
    public function getProdVersionName()
    {
        return $this->container['prodVersionName'];
    }

    /**
    * Sets prodVersionName
    *
    * @param string|null $prodVersionName 生产环境版本名称
    *
    * @return $this
    */
    public function setProdVersionName($prodVersionName)
    {
        $this->container['prodVersionName'] = $prodVersionName;
        return $this;
    }

    /**
    * Gets envType
    *  envType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum|null $envType envType
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

