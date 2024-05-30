<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionLogicTableVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionLogicTableVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  表ID
    * tbName  表名称。
    * tbLogicName  逻辑实体名。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * createBy  创建人。
    * description  描述。
    * dimensionId  所属维度ID，填写String类型替代Long类型。
    * owner  资产责任人。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * dwId  数据连接ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * dbName  库名。
    * tbId  数据表ID，只读。
    * schema  DWS类型需要。
    * tableType  表类型。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dimensionName  关联维度名称，只读。
    * attributes  字段属性。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * materialization  materialization
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * qualityId  质量ID，填写String类型替代Long类型。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * obsLocation  外表路径
    * configs  其他配置
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tbName' => 'string',
            'tbLogicName' => 'string',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'createBy' => 'string',
            'description' => 'string',
            'dimensionId' => 'string',
            'owner' => 'string',
            'dimensionType' => 'string',
            'codeTableId' => 'string',
            'codeTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableVO',
            'queueName' => 'string',
            'dwId' => 'string',
            'reversed' => 'bool',
            'partitionConf' => 'string',
            'dirtyOutSwitch' => 'bool',
            'dirtyOutDatabase' => 'string',
            'dirtyOutPrefix' => 'string',
            'dirtyOutSuffix' => 'string',
            'dbName' => 'string',
            'tbId' => 'string',
            'schema' => 'string',
            'tableType' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'tbGuid' => 'string',
            'tbLogicGuid' => 'string',
            'dimensionName' => 'string',
            'attributes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionLogicTableAttributeVO[]',
            'dwType' => 'string',
            'dwName' => 'string',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'devPhysicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'materialization' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'distribute' => 'string',
            'distributeColumn' => 'string',
            'qualityId' => 'string',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'obsLocation' => 'string',
            'configs' => 'string',
            'devVersion' => 'string',
            'prodVersion' => 'string',
            'devVersionName' => 'string',
            'prodVersionName' => 'string',
            'envType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  表ID
    * tbName  表名称。
    * tbLogicName  逻辑实体名。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * createBy  创建人。
    * description  描述。
    * dimensionId  所属维度ID，填写String类型替代Long类型。
    * owner  资产责任人。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * dwId  数据连接ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * dbName  库名。
    * tbId  数据表ID，只读。
    * schema  DWS类型需要。
    * tableType  表类型。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dimensionName  关联维度名称，只读。
    * attributes  字段属性。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * materialization  materialization
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * qualityId  质量ID，填写String类型替代Long类型。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * obsLocation  外表路径
    * configs  其他配置
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tbName' => null,
        'tbLogicName' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'createBy' => null,
        'description' => null,
        'dimensionId' => null,
        'owner' => null,
        'dimensionType' => null,
        'codeTableId' => null,
        'codeTable' => null,
        'queueName' => null,
        'dwId' => null,
        'reversed' => null,
        'partitionConf' => null,
        'dirtyOutSwitch' => null,
        'dirtyOutDatabase' => null,
        'dirtyOutPrefix' => null,
        'dirtyOutSuffix' => null,
        'dbName' => null,
        'tbId' => null,
        'schema' => null,
        'tableType' => null,
        'status' => null,
        'tbGuid' => null,
        'tbLogicGuid' => null,
        'dimensionName' => null,
        'attributes' => null,
        'dwType' => null,
        'dwName' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'approvalInfo' => null,
        'newBiz' => null,
        'physicalTable' => null,
        'devPhysicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null,
        'materialization' => null,
        'summaryStatus' => null,
        'distribute' => null,
        'distributeColumn' => null,
        'qualityId' => null,
        'alias' => null,
        'selfDefinedFields' => null,
        'obsLocation' => null,
        'configs' => null,
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
    * id  表ID
    * tbName  表名称。
    * tbLogicName  逻辑实体名。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * createBy  创建人。
    * description  描述。
    * dimensionId  所属维度ID，填写String类型替代Long类型。
    * owner  资产责任人。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * dwId  数据连接ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * dbName  库名。
    * tbId  数据表ID，只读。
    * schema  DWS类型需要。
    * tableType  表类型。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dimensionName  关联维度名称，只读。
    * attributes  字段属性。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * materialization  materialization
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * qualityId  质量ID，填写String类型替代Long类型。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * obsLocation  外表路径
    * configs  其他配置
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tbName' => 'tb_name',
            'tbLogicName' => 'tb_logic_name',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'createBy' => 'create_by',
            'description' => 'description',
            'dimensionId' => 'dimension_id',
            'owner' => 'owner',
            'dimensionType' => 'dimension_type',
            'codeTableId' => 'code_table_id',
            'codeTable' => 'code_table',
            'queueName' => 'queue_name',
            'dwId' => 'dw_id',
            'reversed' => 'reversed',
            'partitionConf' => 'partition_conf',
            'dirtyOutSwitch' => 'dirty_out_switch',
            'dirtyOutDatabase' => 'dirty_out_database',
            'dirtyOutPrefix' => 'dirty_out_prefix',
            'dirtyOutSuffix' => 'dirty_out_suffix',
            'dbName' => 'db_name',
            'tbId' => 'tb_id',
            'schema' => 'schema',
            'tableType' => 'table_type',
            'status' => 'status',
            'tbGuid' => 'tb_guid',
            'tbLogicGuid' => 'tb_logic_guid',
            'dimensionName' => 'dimension_name',
            'attributes' => 'attributes',
            'dwType' => 'dw_type',
            'dwName' => 'dw_name',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'physicalTable' => 'physical_table',
            'devPhysicalTable' => 'dev_physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality',
            'materialization' => 'materialization',
            'summaryStatus' => 'summary_status',
            'distribute' => 'distribute',
            'distributeColumn' => 'distribute_column',
            'qualityId' => 'quality_id',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields',
            'obsLocation' => 'obs_location',
            'configs' => 'configs',
            'devVersion' => 'dev_version',
            'prodVersion' => 'prod_version',
            'devVersionName' => 'dev_version_name',
            'prodVersionName' => 'prod_version_name',
            'envType' => 'env_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  表ID
    * tbName  表名称。
    * tbLogicName  逻辑实体名。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * createBy  创建人。
    * description  描述。
    * dimensionId  所属维度ID，填写String类型替代Long类型。
    * owner  资产责任人。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * dwId  数据连接ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * dbName  库名。
    * tbId  数据表ID，只读。
    * schema  DWS类型需要。
    * tableType  表类型。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dimensionName  关联维度名称，只读。
    * attributes  字段属性。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * materialization  materialization
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * qualityId  质量ID，填写String类型替代Long类型。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * obsLocation  外表路径
    * configs  其他配置
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tbName' => 'setTbName',
            'tbLogicName' => 'setTbLogicName',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'createBy' => 'setCreateBy',
            'description' => 'setDescription',
            'dimensionId' => 'setDimensionId',
            'owner' => 'setOwner',
            'dimensionType' => 'setDimensionType',
            'codeTableId' => 'setCodeTableId',
            'codeTable' => 'setCodeTable',
            'queueName' => 'setQueueName',
            'dwId' => 'setDwId',
            'reversed' => 'setReversed',
            'partitionConf' => 'setPartitionConf',
            'dirtyOutSwitch' => 'setDirtyOutSwitch',
            'dirtyOutDatabase' => 'setDirtyOutDatabase',
            'dirtyOutPrefix' => 'setDirtyOutPrefix',
            'dirtyOutSuffix' => 'setDirtyOutSuffix',
            'dbName' => 'setDbName',
            'tbId' => 'setTbId',
            'schema' => 'setSchema',
            'tableType' => 'setTableType',
            'status' => 'setStatus',
            'tbGuid' => 'setTbGuid',
            'tbLogicGuid' => 'setTbLogicGuid',
            'dimensionName' => 'setDimensionName',
            'attributes' => 'setAttributes',
            'dwType' => 'setDwType',
            'dwName' => 'setDwName',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'physicalTable' => 'setPhysicalTable',
            'devPhysicalTable' => 'setDevPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality',
            'materialization' => 'setMaterialization',
            'summaryStatus' => 'setSummaryStatus',
            'distribute' => 'setDistribute',
            'distributeColumn' => 'setDistributeColumn',
            'qualityId' => 'setQualityId',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'obsLocation' => 'setObsLocation',
            'configs' => 'setConfigs',
            'devVersion' => 'setDevVersion',
            'prodVersion' => 'setProdVersion',
            'devVersionName' => 'setDevVersionName',
            'prodVersionName' => 'setProdVersionName',
            'envType' => 'setEnvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  表ID
    * tbName  表名称。
    * tbLogicName  逻辑实体名。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * createBy  创建人。
    * description  描述。
    * dimensionId  所属维度ID，填写String类型替代Long类型。
    * owner  资产责任人。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * dwId  数据连接ID。
    * reversed  是否是逆向的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * dbName  库名。
    * tbId  数据表ID，只读。
    * schema  DWS类型需要。
    * tableType  表类型。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dimensionName  关联维度名称，只读。
    * attributes  字段属性。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * materialization  materialization
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * qualityId  质量ID，填写String类型替代Long类型。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * obsLocation  外表路径
    * configs  其他配置
    * devVersion  开发环境版本，填写String类型替代Long类型。
    * prodVersion  生产环境版本，填写String类型替代Long类型
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tbName' => 'getTbName',
            'tbLogicName' => 'getTbLogicName',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'createBy' => 'getCreateBy',
            'description' => 'getDescription',
            'dimensionId' => 'getDimensionId',
            'owner' => 'getOwner',
            'dimensionType' => 'getDimensionType',
            'codeTableId' => 'getCodeTableId',
            'codeTable' => 'getCodeTable',
            'queueName' => 'getQueueName',
            'dwId' => 'getDwId',
            'reversed' => 'getReversed',
            'partitionConf' => 'getPartitionConf',
            'dirtyOutSwitch' => 'getDirtyOutSwitch',
            'dirtyOutDatabase' => 'getDirtyOutDatabase',
            'dirtyOutPrefix' => 'getDirtyOutPrefix',
            'dirtyOutSuffix' => 'getDirtyOutSuffix',
            'dbName' => 'getDbName',
            'tbId' => 'getTbId',
            'schema' => 'getSchema',
            'tableType' => 'getTableType',
            'status' => 'getStatus',
            'tbGuid' => 'getTbGuid',
            'tbLogicGuid' => 'getTbLogicGuid',
            'dimensionName' => 'getDimensionName',
            'attributes' => 'getAttributes',
            'dwType' => 'getDwType',
            'dwName' => 'getDwName',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'physicalTable' => 'getPhysicalTable',
            'devPhysicalTable' => 'getDevPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality',
            'materialization' => 'getMaterialization',
            'summaryStatus' => 'getSummaryStatus',
            'distribute' => 'getDistribute',
            'distributeColumn' => 'getDistributeColumn',
            'qualityId' => 'getQualityId',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields',
            'obsLocation' => 'getObsLocation',
            'configs' => 'getConfigs',
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
    const DIMENSION_TYPE_COMMON = 'COMMON';
    const DIMENSION_TYPE_LOOKUP = 'LOOKUP';
    const DIMENSION_TYPE_HIERARCHIES = 'HIERARCHIES';
    const DISTRIBUTE_HASH = 'HASH';
    const DISTRIBUTE_REPLICATION = 'REPLICATION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimensionTypeAllowableValues()
    {
        return [
            self::DIMENSION_TYPE_COMMON,
            self::DIMENSION_TYPE_LOOKUP,
            self::DIMENSION_TYPE_HIERARCHIES,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDistributeAllowableValues()
    {
        return [
            self::DISTRIBUTE_HASH,
            self::DISTRIBUTE_REPLICATION,
        ];
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
        $this->container['tbName'] = isset($data['tbName']) ? $data['tbName'] : null;
        $this->container['tbLogicName'] = isset($data['tbLogicName']) ? $data['tbLogicName'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dimensionId'] = isset($data['dimensionId']) ? $data['dimensionId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['dimensionType'] = isset($data['dimensionType']) ? $data['dimensionType'] : null;
        $this->container['codeTableId'] = isset($data['codeTableId']) ? $data['codeTableId'] : null;
        $this->container['codeTable'] = isset($data['codeTable']) ? $data['codeTable'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : null;
        $this->container['partitionConf'] = isset($data['partitionConf']) ? $data['partitionConf'] : null;
        $this->container['dirtyOutSwitch'] = isset($data['dirtyOutSwitch']) ? $data['dirtyOutSwitch'] : null;
        $this->container['dirtyOutDatabase'] = isset($data['dirtyOutDatabase']) ? $data['dirtyOutDatabase'] : null;
        $this->container['dirtyOutPrefix'] = isset($data['dirtyOutPrefix']) ? $data['dirtyOutPrefix'] : null;
        $this->container['dirtyOutSuffix'] = isset($data['dirtyOutSuffix']) ? $data['dirtyOutSuffix'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tbId'] = isset($data['tbId']) ? $data['tbId'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tbGuid'] = isset($data['tbGuid']) ? $data['tbGuid'] : null;
        $this->container['tbLogicGuid'] = isset($data['tbLogicGuid']) ? $data['tbLogicGuid'] : null;
        $this->container['dimensionName'] = isset($data['dimensionName']) ? $data['dimensionName'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['devPhysicalTable'] = isset($data['devPhysicalTable']) ? $data['devPhysicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
        $this->container['materialization'] = isset($data['materialization']) ? $data['materialization'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['distribute'] = isset($data['distribute']) ? $data['distribute'] : null;
        $this->container['distributeColumn'] = isset($data['distributeColumn']) ? $data['distributeColumn'] : null;
        $this->container['qualityId'] = isset($data['qualityId']) ? $data['qualityId'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
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
            if (!is_null($this->container['tbName']) && (mb_strlen($this->container['tbName']) > 600)) {
                $invalidProperties[] = "invalid value for 'tbName', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['tbLogicName']) && (mb_strlen($this->container['tbLogicName']) > 200)) {
                $invalidProperties[] = "invalid value for 'tbLogicName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['tbLogicName']) && !preg_match("/^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/", $this->container['tbLogicName'])) {
                $invalidProperties[] = "invalid value for 'tbLogicName', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getDimensionTypeAllowableValues();
                if (!is_null($this->container['dimensionType']) && !in_array($this->container['dimensionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimensionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDistributeAllowableValues();
                if (!is_null($this->container['distribute']) && !in_array($this->container['distribute'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'distribute', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['obsLocation']) && (mb_strlen($this->container['obsLocation']) > 1024)) {
                $invalidProperties[] = "invalid value for 'obsLocation', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['obsLocation']) && !preg_match("/^[a-zA-Z0-9_\\-\\.\/:]*$/", $this->container['obsLocation'])) {
                $invalidProperties[] = "invalid value for 'obsLocation', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.\/:]*$/.";
            }
            if (!is_null($this->container['configs']) && (mb_strlen($this->container['configs']) > 1024)) {
                $invalidProperties[] = "invalid value for 'configs', the character length must be smaller than or equal to 1024.";
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
    *  表ID
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
    * @param string|null $id 表ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tbName
    *  表名称。
    *
    * @return string|null
    */
    public function getTbName()
    {
        return $this->container['tbName'];
    }

    /**
    * Sets tbName
    *
    * @param string|null $tbName 表名称。
    *
    * @return $this
    */
    public function setTbName($tbName)
    {
        $this->container['tbName'] = $tbName;
        return $this;
    }

    /**
    * Gets tbLogicName
    *  逻辑实体名。
    *
    * @return string|null
    */
    public function getTbLogicName()
    {
        return $this->container['tbLogicName'];
    }

    /**
    * Sets tbLogicName
    *
    * @param string|null $tbLogicName 逻辑实体名。
    *
    * @return $this
    */
    public function setTbLogicName($tbLogicName)
    {
        $this->container['tbLogicName'] = $tbLogicName;
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
    *  业务对象ID，填写String类型替代Long类型。
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
    * @param string|null $l3Id 业务对象ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
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
    * Gets dimensionId
    *  所属维度ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getDimensionId()
    {
        return $this->container['dimensionId'];
    }

    /**
    * Sets dimensionId
    *
    * @param string|null $dimensionId 所属维度ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setDimensionId($dimensionId)
    {
        $this->container['dimensionId'] = $dimensionId;
        return $this;
    }

    /**
    * Gets owner
    *  资产责任人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 资产责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets dimensionType
    *  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    *
    * @return string|null
    */
    public function getDimensionType()
    {
        return $this->container['dimensionType'];
    }

    /**
    * Sets dimensionType
    *
    * @param string|null $dimensionType 维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    *
    * @return $this
    */
    public function setDimensionType($dimensionType)
    {
        $this->container['dimensionType'] = $dimensionType;
        return $this;
    }

    /**
    * Gets codeTableId
    *  引用码表ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getCodeTableId()
    {
        return $this->container['codeTableId'];
    }

    /**
    * Sets codeTableId
    *
    * @param string|null $codeTableId 引用码表ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setCodeTableId($codeTableId)
    {
        $this->container['codeTableId'] = $codeTableId;
        return $this;
    }

    /**
    * Gets codeTable
    *  codeTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableVO|null
    */
    public function getCodeTable()
    {
        return $this->container['codeTable'];
    }

    /**
    * Sets codeTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableVO|null $codeTable codeTable
    *
    * @return $this
    */
    public function setCodeTable($codeTable)
    {
        $this->container['codeTable'] = $codeTable;
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
    * Gets dwId
    *  数据连接ID。
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接ID。
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
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
    * Gets dbName
    *  库名。
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
    * @param string|null $dbName 库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tbId
    *  数据表ID，只读。
    *
    * @return string|null
    */
    public function getTbId()
    {
        return $this->container['tbId'];
    }

    /**
    * Sets tbId
    *
    * @param string|null $tbId 数据表ID，只读。
    *
    * @return $this
    */
    public function setTbId($tbId)
    {
        $this->container['tbId'] = $tbId;
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
    * Gets tableType
    *  表类型。
    *
    * @return string|null
    */
    public function getTableType()
    {
        return $this->container['tableType'];
    }

    /**
    * Sets tableType
    *
    * @param string|null $tableType 表类型。
    *
    * @return $this
    */
    public function setTableType($tableType)
    {
        $this->container['tableType'] = $tableType;
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
    * Gets tbGuid
    *  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
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
    * @param string|null $tbGuid 表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setTbGuid($tbGuid)
    {
        $this->container['tbGuid'] = $tbGuid;
        return $this;
    }

    /**
    * Gets tbLogicGuid
    *  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
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
    * @param string|null $tbLogicGuid 表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setTbLogicGuid($tbLogicGuid)
    {
        $this->container['tbLogicGuid'] = $tbLogicGuid;
        return $this;
    }

    /**
    * Gets dimensionName
    *  关联维度名称，只读。
    *
    * @return string|null
    */
    public function getDimensionName()
    {
        return $this->container['dimensionName'];
    }

    /**
    * Sets dimensionName
    *
    * @param string|null $dimensionName 关联维度名称，只读。
    *
    * @return $this
    */
    public function setDimensionName($dimensionName)
    {
        $this->container['dimensionName'] = $dimensionName;
        return $this;
    }

    /**
    * Gets attributes
    *  字段属性。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionLogicTableAttributeVO[]|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionLogicTableAttributeVO[]|null $attributes 字段属性。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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
    * Gets dwName
    *  数据连接名称，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名称，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
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
    * Gets approvalInfo
    *  approvalInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null
    */
    public function getApprovalInfo()
    {
        return $this->container['approvalInfo'];
    }

    /**
    * Sets approvalInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null $approvalInfo approvalInfo
    *
    * @return $this
    */
    public function setApprovalInfo($approvalInfo)
    {
        $this->container['approvalInfo'] = $approvalInfo;
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
    * Gets distribute
    *  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    *
    * @return string|null
    */
    public function getDistribute()
    {
        return $this->container['distribute'];
    }

    /**
    * Sets distribute
    *
    * @param string|null $distribute DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    *
    * @return $this
    */
    public function setDistribute($distribute)
    {
        $this->container['distribute'] = $distribute;
        return $this;
    }

    /**
    * Gets distributeColumn
    *  DISTRIBUTE BY HASH column.
    *
    * @return string|null
    */
    public function getDistributeColumn()
    {
        return $this->container['distributeColumn'];
    }

    /**
    * Sets distributeColumn
    *
    * @param string|null $distributeColumn DISTRIBUTE BY HASH column.
    *
    * @return $this
    */
    public function setDistributeColumn($distributeColumn)
    {
        $this->container['distributeColumn'] = $distributeColumn;
        return $this;
    }

    /**
    * Gets qualityId
    *  质量ID，填写String类型替代Long类型。
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
    * @param string|null $qualityId 质量ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setQualityId($qualityId)
    {
        $this->container['qualityId'] = $qualityId;
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
    * Gets selfDefinedFields
    *  自定义项。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null
    */
    public function getSelfDefinedFields()
    {
        return $this->container['selfDefinedFields'];
    }

    /**
    * Sets selfDefinedFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null $selfDefinedFields 自定义项。
    *
    * @return $this
    */
    public function setSelfDefinedFields($selfDefinedFields)
    {
        $this->container['selfDefinedFields'] = $selfDefinedFields;
        return $this;
    }

    /**
    * Gets obsLocation
    *  外表路径
    *
    * @return string|null
    */
    public function getObsLocation()
    {
        return $this->container['obsLocation'];
    }

    /**
    * Sets obsLocation
    *
    * @param string|null $obsLocation 外表路径
    *
    * @return $this
    */
    public function setObsLocation($obsLocation)
    {
        $this->container['obsLocation'] = $obsLocation;
        return $this;
    }

    /**
    * Gets configs
    *  其他配置
    *
    * @return string|null
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param string|null $configs 其他配置
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
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
    *  生产环境版本，填写String类型替代Long类型
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
    * @param string|null $prodVersion 生产环境版本，填写String类型替代Long类型
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

