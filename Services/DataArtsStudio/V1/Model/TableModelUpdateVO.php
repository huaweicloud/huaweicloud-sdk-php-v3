<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableModelUpdateVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableModelUpdateVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * modelId  所属关系建模的模型ID，ID字符串。
    * parentTableId  父表ID，ID字符串。
    * parentTableName  父表名称，只读。
    * parentTableCode  父表编码，只读。
    * model  model
    * dataFormat  数据格式。
    * obsBucket  obs桶。
    * obsLocation  obs路径。
    * configs  其他配置。
    * tableType  表类型，只读。
    * owner  责任人。
    * tbName  表名。
    * dwId  数据连接ID。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * extendInfo  扩展信息。
    * tbGuid  表物化后的guid，只读。
    * tbId  数据表ID，只读。
    * logicTbName  逻辑实体名。
    * logicTbGuid  逻辑实体的guid，只读。
    * description  描述。
    * status  status
    * logicTbId  逻辑实体的ID，ID字符串。
    * bizCatalogId  归属的业务分类的ID，ID字符串。
    * catalogPath  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * attributes  表属性信息。
    * mappings  表映射信息。
    * relations  关系。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，ID字符串。
    * partitionConf  分区表达式
    * dlfTaskId  DLF作业ID。
    * useRecentlyPartition  是否使用最新分区。
    * reversed  是否是逆向的。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * qualityOwner  质量责任人。
    * qualityId  质量ID，ID字符串。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * isPartition  是否分区表，只读。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * summaryStatus  summaryStatus
    * alias  别名。
    * selfDefinedFields  自定义项。
    * devVersion  开发环境版本，ID字符串。
    * prodVersion  生产环境版本，ID字符串。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    * hasRelatedPhysicalTable  是否关联了物理表
    * hasRelatedLogicTable  是否关联了逻辑实体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'modelId' => 'string',
            'parentTableId' => 'string',
            'parentTableName' => 'string',
            'parentTableCode' => 'string',
            'model' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO',
            'dataFormat' => 'string',
            'obsBucket' => 'string',
            'obsLocation' => 'string',
            'configs' => 'string',
            'tableType' => 'string',
            'owner' => 'string',
            'tbName' => 'string',
            'dwId' => 'string',
            'dbName' => 'string',
            'queueName' => 'string',
            'schema' => 'string',
            'extendInfo' => 'string',
            'tbGuid' => 'string',
            'tbId' => 'string',
            'logicTbName' => 'string',
            'logicTbGuid' => 'string',
            'description' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'logicTbId' => 'string',
            'bizCatalogId' => 'string',
            'catalogPath' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagVO[]',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'attributes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelAttributeVO[]',
            'mappings' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingVO[]',
            'relations' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]',
            'dwType' => 'string',
            'dwName' => 'string',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'partitionConf' => 'string',
            'dlfTaskId' => 'string',
            'useRecentlyPartition' => 'bool',
            'reversed' => 'bool',
            'dirtyOutSwitch' => 'bool',
            'dirtyOutDatabase' => 'string',
            'dirtyOutPrefix' => 'string',
            'dirtyOutSuffix' => 'string',
            'qualityOwner' => 'string',
            'qualityId' => 'string',
            'distribute' => 'string',
            'distributeColumn' => 'string',
            'isPartition' => 'bool',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'devPhysicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'devVersion' => 'string',
            'prodVersion' => 'string',
            'devVersionName' => 'string',
            'prodVersionName' => 'string',
            'envType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum',
            'hasRelatedPhysicalTable' => 'bool',
            'hasRelatedLogicTable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * modelId  所属关系建模的模型ID，ID字符串。
    * parentTableId  父表ID，ID字符串。
    * parentTableName  父表名称，只读。
    * parentTableCode  父表编码，只读。
    * model  model
    * dataFormat  数据格式。
    * obsBucket  obs桶。
    * obsLocation  obs路径。
    * configs  其他配置。
    * tableType  表类型，只读。
    * owner  责任人。
    * tbName  表名。
    * dwId  数据连接ID。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * extendInfo  扩展信息。
    * tbGuid  表物化后的guid，只读。
    * tbId  数据表ID，只读。
    * logicTbName  逻辑实体名。
    * logicTbGuid  逻辑实体的guid，只读。
    * description  描述。
    * status  status
    * logicTbId  逻辑实体的ID，ID字符串。
    * bizCatalogId  归属的业务分类的ID，ID字符串。
    * catalogPath  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * attributes  表属性信息。
    * mappings  表映射信息。
    * relations  关系。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，ID字符串。
    * partitionConf  分区表达式
    * dlfTaskId  DLF作业ID。
    * useRecentlyPartition  是否使用最新分区。
    * reversed  是否是逆向的。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * qualityOwner  质量责任人。
    * qualityId  质量ID，ID字符串。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * isPartition  是否分区表，只读。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * summaryStatus  summaryStatus
    * alias  别名。
    * selfDefinedFields  自定义项。
    * devVersion  开发环境版本，ID字符串。
    * prodVersion  生产环境版本，ID字符串。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    * hasRelatedPhysicalTable  是否关联了物理表
    * hasRelatedLogicTable  是否关联了逻辑实体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'modelId' => null,
        'parentTableId' => null,
        'parentTableName' => null,
        'parentTableCode' => null,
        'model' => null,
        'dataFormat' => null,
        'obsBucket' => null,
        'obsLocation' => null,
        'configs' => null,
        'tableType' => null,
        'owner' => null,
        'tbName' => null,
        'dwId' => null,
        'dbName' => null,
        'queueName' => null,
        'schema' => null,
        'extendInfo' => null,
        'tbGuid' => null,
        'tbId' => null,
        'logicTbName' => null,
        'logicTbGuid' => null,
        'description' => null,
        'status' => null,
        'logicTbId' => null,
        'bizCatalogId' => null,
        'catalogPath' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'tags' => null,
        'approvalInfo' => null,
        'newBiz' => null,
        'attributes' => null,
        'mappings' => null,
        'relations' => null,
        'dwType' => null,
        'dwName' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'partitionConf' => null,
        'dlfTaskId' => null,
        'useRecentlyPartition' => null,
        'reversed' => null,
        'dirtyOutSwitch' => null,
        'dirtyOutDatabase' => null,
        'dirtyOutPrefix' => null,
        'dirtyOutSuffix' => null,
        'qualityOwner' => null,
        'qualityId' => null,
        'distribute' => null,
        'distributeColumn' => null,
        'isPartition' => null,
        'physicalTable' => null,
        'devPhysicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null,
        'summaryStatus' => null,
        'alias' => null,
        'selfDefinedFields' => null,
        'devVersion' => null,
        'prodVersion' => null,
        'devVersionName' => null,
        'prodVersionName' => null,
        'envType' => null,
        'hasRelatedPhysicalTable' => null,
        'hasRelatedLogicTable' => null
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
    * id  编码，ID字符串。
    * modelId  所属关系建模的模型ID，ID字符串。
    * parentTableId  父表ID，ID字符串。
    * parentTableName  父表名称，只读。
    * parentTableCode  父表编码，只读。
    * model  model
    * dataFormat  数据格式。
    * obsBucket  obs桶。
    * obsLocation  obs路径。
    * configs  其他配置。
    * tableType  表类型，只读。
    * owner  责任人。
    * tbName  表名。
    * dwId  数据连接ID。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * extendInfo  扩展信息。
    * tbGuid  表物化后的guid，只读。
    * tbId  数据表ID，只读。
    * logicTbName  逻辑实体名。
    * logicTbGuid  逻辑实体的guid，只读。
    * description  描述。
    * status  status
    * logicTbId  逻辑实体的ID，ID字符串。
    * bizCatalogId  归属的业务分类的ID，ID字符串。
    * catalogPath  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * attributes  表属性信息。
    * mappings  表映射信息。
    * relations  关系。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，ID字符串。
    * partitionConf  分区表达式
    * dlfTaskId  DLF作业ID。
    * useRecentlyPartition  是否使用最新分区。
    * reversed  是否是逆向的。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * qualityOwner  质量责任人。
    * qualityId  质量ID，ID字符串。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * isPartition  是否分区表，只读。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * summaryStatus  summaryStatus
    * alias  别名。
    * selfDefinedFields  自定义项。
    * devVersion  开发环境版本，ID字符串。
    * prodVersion  生产环境版本，ID字符串。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    * hasRelatedPhysicalTable  是否关联了物理表
    * hasRelatedLogicTable  是否关联了逻辑实体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'modelId' => 'model_id',
            'parentTableId' => 'parent_table_id',
            'parentTableName' => 'parent_table_name',
            'parentTableCode' => 'parent_table_code',
            'model' => 'model',
            'dataFormat' => 'data_format',
            'obsBucket' => 'obs_bucket',
            'obsLocation' => 'obs_location',
            'configs' => 'configs',
            'tableType' => 'table_type',
            'owner' => 'owner',
            'tbName' => 'tb_name',
            'dwId' => 'dw_id',
            'dbName' => 'db_name',
            'queueName' => 'queue_name',
            'schema' => 'schema',
            'extendInfo' => 'extend_info',
            'tbGuid' => 'tb_guid',
            'tbId' => 'tb_id',
            'logicTbName' => 'logic_tb_name',
            'logicTbGuid' => 'logic_tb_guid',
            'description' => 'description',
            'status' => 'status',
            'logicTbId' => 'logic_tb_id',
            'bizCatalogId' => 'biz_catalog_id',
            'catalogPath' => 'catalog_path',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'tags' => 'tags',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'attributes' => 'attributes',
            'mappings' => 'mappings',
            'relations' => 'relations',
            'dwType' => 'dw_type',
            'dwName' => 'dw_name',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'partitionConf' => 'partition_conf',
            'dlfTaskId' => 'dlf_task_id',
            'useRecentlyPartition' => 'use_recently_partition',
            'reversed' => 'reversed',
            'dirtyOutSwitch' => 'dirty_out_switch',
            'dirtyOutDatabase' => 'dirty_out_database',
            'dirtyOutPrefix' => 'dirty_out_prefix',
            'dirtyOutSuffix' => 'dirty_out_suffix',
            'qualityOwner' => 'quality_owner',
            'qualityId' => 'quality_id',
            'distribute' => 'distribute',
            'distributeColumn' => 'distribute_column',
            'isPartition' => 'is_partition',
            'physicalTable' => 'physical_table',
            'devPhysicalTable' => 'dev_physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality',
            'summaryStatus' => 'summary_status',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields',
            'devVersion' => 'dev_version',
            'prodVersion' => 'prod_version',
            'devVersionName' => 'dev_version_name',
            'prodVersionName' => 'prod_version_name',
            'envType' => 'env_type',
            'hasRelatedPhysicalTable' => 'has_related_physical_table',
            'hasRelatedLogicTable' => 'has_related_logic_table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * modelId  所属关系建模的模型ID，ID字符串。
    * parentTableId  父表ID，ID字符串。
    * parentTableName  父表名称，只读。
    * parentTableCode  父表编码，只读。
    * model  model
    * dataFormat  数据格式。
    * obsBucket  obs桶。
    * obsLocation  obs路径。
    * configs  其他配置。
    * tableType  表类型，只读。
    * owner  责任人。
    * tbName  表名。
    * dwId  数据连接ID。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * extendInfo  扩展信息。
    * tbGuid  表物化后的guid，只读。
    * tbId  数据表ID，只读。
    * logicTbName  逻辑实体名。
    * logicTbGuid  逻辑实体的guid，只读。
    * description  描述。
    * status  status
    * logicTbId  逻辑实体的ID，ID字符串。
    * bizCatalogId  归属的业务分类的ID，ID字符串。
    * catalogPath  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * attributes  表属性信息。
    * mappings  表映射信息。
    * relations  关系。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，ID字符串。
    * partitionConf  分区表达式
    * dlfTaskId  DLF作业ID。
    * useRecentlyPartition  是否使用最新分区。
    * reversed  是否是逆向的。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * qualityOwner  质量责任人。
    * qualityId  质量ID，ID字符串。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * isPartition  是否分区表，只读。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * summaryStatus  summaryStatus
    * alias  别名。
    * selfDefinedFields  自定义项。
    * devVersion  开发环境版本，ID字符串。
    * prodVersion  生产环境版本，ID字符串。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    * hasRelatedPhysicalTable  是否关联了物理表
    * hasRelatedLogicTable  是否关联了逻辑实体
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'modelId' => 'setModelId',
            'parentTableId' => 'setParentTableId',
            'parentTableName' => 'setParentTableName',
            'parentTableCode' => 'setParentTableCode',
            'model' => 'setModel',
            'dataFormat' => 'setDataFormat',
            'obsBucket' => 'setObsBucket',
            'obsLocation' => 'setObsLocation',
            'configs' => 'setConfigs',
            'tableType' => 'setTableType',
            'owner' => 'setOwner',
            'tbName' => 'setTbName',
            'dwId' => 'setDwId',
            'dbName' => 'setDbName',
            'queueName' => 'setQueueName',
            'schema' => 'setSchema',
            'extendInfo' => 'setExtendInfo',
            'tbGuid' => 'setTbGuid',
            'tbId' => 'setTbId',
            'logicTbName' => 'setLogicTbName',
            'logicTbGuid' => 'setLogicTbGuid',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'logicTbId' => 'setLogicTbId',
            'bizCatalogId' => 'setBizCatalogId',
            'catalogPath' => 'setCatalogPath',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'tags' => 'setTags',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'attributes' => 'setAttributes',
            'mappings' => 'setMappings',
            'relations' => 'setRelations',
            'dwType' => 'setDwType',
            'dwName' => 'setDwName',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'partitionConf' => 'setPartitionConf',
            'dlfTaskId' => 'setDlfTaskId',
            'useRecentlyPartition' => 'setUseRecentlyPartition',
            'reversed' => 'setReversed',
            'dirtyOutSwitch' => 'setDirtyOutSwitch',
            'dirtyOutDatabase' => 'setDirtyOutDatabase',
            'dirtyOutPrefix' => 'setDirtyOutPrefix',
            'dirtyOutSuffix' => 'setDirtyOutSuffix',
            'qualityOwner' => 'setQualityOwner',
            'qualityId' => 'setQualityId',
            'distribute' => 'setDistribute',
            'distributeColumn' => 'setDistributeColumn',
            'isPartition' => 'setIsPartition',
            'physicalTable' => 'setPhysicalTable',
            'devPhysicalTable' => 'setDevPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality',
            'summaryStatus' => 'setSummaryStatus',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'devVersion' => 'setDevVersion',
            'prodVersion' => 'setProdVersion',
            'devVersionName' => 'setDevVersionName',
            'prodVersionName' => 'setProdVersionName',
            'envType' => 'setEnvType',
            'hasRelatedPhysicalTable' => 'setHasRelatedPhysicalTable',
            'hasRelatedLogicTable' => 'setHasRelatedLogicTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * modelId  所属关系建模的模型ID，ID字符串。
    * parentTableId  父表ID，ID字符串。
    * parentTableName  父表名称，只读。
    * parentTableCode  父表编码，只读。
    * model  model
    * dataFormat  数据格式。
    * obsBucket  obs桶。
    * obsLocation  obs路径。
    * configs  其他配置。
    * tableType  表类型，只读。
    * owner  责任人。
    * tbName  表名。
    * dwId  数据连接ID。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    * extendInfo  扩展信息。
    * tbGuid  表物化后的guid，只读。
    * tbId  数据表ID，只读。
    * logicTbName  逻辑实体名。
    * logicTbGuid  逻辑实体的guid，只读。
    * description  描述。
    * status  status
    * logicTbId  逻辑实体的ID，ID字符串。
    * bizCatalogId  归属的业务分类的ID，ID字符串。
    * catalogPath  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * attributes  表属性信息。
    * mappings  表映射信息。
    * relations  关系。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，只读，ID字符串。
    * partitionConf  分区表达式
    * dlfTaskId  DLF作业ID。
    * useRecentlyPartition  是否使用最新分区。
    * reversed  是否是逆向的。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * qualityOwner  质量责任人。
    * qualityId  质量ID，ID字符串。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * isPartition  是否分区表，只读。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * summaryStatus  summaryStatus
    * alias  别名。
    * selfDefinedFields  自定义项。
    * devVersion  开发环境版本，ID字符串。
    * prodVersion  生产环境版本，ID字符串。
    * devVersionName  开发环境版本名称
    * prodVersionName  生产环境版本名称
    * envType  envType
    * hasRelatedPhysicalTable  是否关联了物理表
    * hasRelatedLogicTable  是否关联了逻辑实体
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'modelId' => 'getModelId',
            'parentTableId' => 'getParentTableId',
            'parentTableName' => 'getParentTableName',
            'parentTableCode' => 'getParentTableCode',
            'model' => 'getModel',
            'dataFormat' => 'getDataFormat',
            'obsBucket' => 'getObsBucket',
            'obsLocation' => 'getObsLocation',
            'configs' => 'getConfigs',
            'tableType' => 'getTableType',
            'owner' => 'getOwner',
            'tbName' => 'getTbName',
            'dwId' => 'getDwId',
            'dbName' => 'getDbName',
            'queueName' => 'getQueueName',
            'schema' => 'getSchema',
            'extendInfo' => 'getExtendInfo',
            'tbGuid' => 'getTbGuid',
            'tbId' => 'getTbId',
            'logicTbName' => 'getLogicTbName',
            'logicTbGuid' => 'getLogicTbGuid',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'logicTbId' => 'getLogicTbId',
            'bizCatalogId' => 'getBizCatalogId',
            'catalogPath' => 'getCatalogPath',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'tags' => 'getTags',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'attributes' => 'getAttributes',
            'mappings' => 'getMappings',
            'relations' => 'getRelations',
            'dwType' => 'getDwType',
            'dwName' => 'getDwName',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'partitionConf' => 'getPartitionConf',
            'dlfTaskId' => 'getDlfTaskId',
            'useRecentlyPartition' => 'getUseRecentlyPartition',
            'reversed' => 'getReversed',
            'dirtyOutSwitch' => 'getDirtyOutSwitch',
            'dirtyOutDatabase' => 'getDirtyOutDatabase',
            'dirtyOutPrefix' => 'getDirtyOutPrefix',
            'dirtyOutSuffix' => 'getDirtyOutSuffix',
            'qualityOwner' => 'getQualityOwner',
            'qualityId' => 'getQualityId',
            'distribute' => 'getDistribute',
            'distributeColumn' => 'getDistributeColumn',
            'isPartition' => 'getIsPartition',
            'physicalTable' => 'getPhysicalTable',
            'devPhysicalTable' => 'getDevPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality',
            'summaryStatus' => 'getSummaryStatus',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields',
            'devVersion' => 'getDevVersion',
            'prodVersion' => 'getProdVersion',
            'devVersionName' => 'getDevVersionName',
            'prodVersionName' => 'getProdVersionName',
            'envType' => 'getEnvType',
            'hasRelatedPhysicalTable' => 'getHasRelatedPhysicalTable',
            'hasRelatedLogicTable' => 'getHasRelatedLogicTable'
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
    const DISTRIBUTE_HASH = 'HASH';
    const DISTRIBUTE_REPLICATION = 'REPLICATION';
    

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
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['parentTableId'] = isset($data['parentTableId']) ? $data['parentTableId'] : null;
        $this->container['parentTableName'] = isset($data['parentTableName']) ? $data['parentTableName'] : null;
        $this->container['parentTableCode'] = isset($data['parentTableCode']) ? $data['parentTableCode'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['dataFormat'] = isset($data['dataFormat']) ? $data['dataFormat'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['tbName'] = isset($data['tbName']) ? $data['tbName'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
        $this->container['tbGuid'] = isset($data['tbGuid']) ? $data['tbGuid'] : null;
        $this->container['tbId'] = isset($data['tbId']) ? $data['tbId'] : null;
        $this->container['logicTbName'] = isset($data['logicTbName']) ? $data['logicTbName'] : null;
        $this->container['logicTbGuid'] = isset($data['logicTbGuid']) ? $data['logicTbGuid'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['logicTbId'] = isset($data['logicTbId']) ? $data['logicTbId'] : null;
        $this->container['bizCatalogId'] = isset($data['bizCatalogId']) ? $data['bizCatalogId'] : null;
        $this->container['catalogPath'] = isset($data['catalogPath']) ? $data['catalogPath'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['partitionConf'] = isset($data['partitionConf']) ? $data['partitionConf'] : null;
        $this->container['dlfTaskId'] = isset($data['dlfTaskId']) ? $data['dlfTaskId'] : null;
        $this->container['useRecentlyPartition'] = isset($data['useRecentlyPartition']) ? $data['useRecentlyPartition'] : null;
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : null;
        $this->container['dirtyOutSwitch'] = isset($data['dirtyOutSwitch']) ? $data['dirtyOutSwitch'] : null;
        $this->container['dirtyOutDatabase'] = isset($data['dirtyOutDatabase']) ? $data['dirtyOutDatabase'] : null;
        $this->container['dirtyOutPrefix'] = isset($data['dirtyOutPrefix']) ? $data['dirtyOutPrefix'] : null;
        $this->container['dirtyOutSuffix'] = isset($data['dirtyOutSuffix']) ? $data['dirtyOutSuffix'] : null;
        $this->container['qualityOwner'] = isset($data['qualityOwner']) ? $data['qualityOwner'] : null;
        $this->container['qualityId'] = isset($data['qualityId']) ? $data['qualityId'] : null;
        $this->container['distribute'] = isset($data['distribute']) ? $data['distribute'] : null;
        $this->container['distributeColumn'] = isset($data['distributeColumn']) ? $data['distributeColumn'] : null;
        $this->container['isPartition'] = isset($data['isPartition']) ? $data['isPartition'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['devPhysicalTable'] = isset($data['devPhysicalTable']) ? $data['devPhysicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
        $this->container['devVersion'] = isset($data['devVersion']) ? $data['devVersion'] : null;
        $this->container['prodVersion'] = isset($data['prodVersion']) ? $data['prodVersion'] : null;
        $this->container['devVersionName'] = isset($data['devVersionName']) ? $data['devVersionName'] : null;
        $this->container['prodVersionName'] = isset($data['prodVersionName']) ? $data['prodVersionName'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['hasRelatedPhysicalTable'] = isset($data['hasRelatedPhysicalTable']) ? $data['hasRelatedPhysicalTable'] : null;
        $this->container['hasRelatedLogicTable'] = isset($data['hasRelatedLogicTable']) ? $data['hasRelatedLogicTable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['modelId'] === null) {
            $invalidProperties[] = "'modelId' can't be null";
        }
            if (!is_null($this->container['dataFormat']) && (mb_strlen($this->container['dataFormat']) > 100)) {
                $invalidProperties[] = "invalid value for 'dataFormat', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['obsBucket']) && (mb_strlen($this->container['obsBucket']) > 200)) {
                $invalidProperties[] = "invalid value for 'obsBucket', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['obsLocation']) && (mb_strlen($this->container['obsLocation']) > 2000)) {
                $invalidProperties[] = "invalid value for 'obsLocation', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['configs']) && (mb_strlen($this->container['configs']) > 1024)) {
                $invalidProperties[] = "invalid value for 'configs', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 100)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 100.";
            }
        if ($this->container['tbName'] === null) {
            $invalidProperties[] = "'tbName' can't be null";
        }
            if ((mb_strlen($this->container['tbName']) > 400)) {
                $invalidProperties[] = "invalid value for 'tbName', the character length must be smaller than or equal to 400.";
            }
        if ($this->container['logicTbName'] === null) {
            $invalidProperties[] = "'logicTbName' can't be null";
        }
            if ((mb_strlen($this->container['logicTbName']) > 200)) {
                $invalidProperties[] = "invalid value for 'logicTbName', the character length must be smaller than or equal to 200.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['dwType'] === null) {
            $invalidProperties[] = "'dwType' can't be null";
        }
            $allowedValues = $this->getDistributeAllowableValues();
                if (!is_null($this->container['distribute']) && !in_array($this->container['distribute'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'distribute', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  编码，ID字符串。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 编码，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets modelId
    *  所属关系建模的模型ID，ID字符串。
    *
    * @return string
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string $modelId 所属关系建模的模型ID，ID字符串。
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets parentTableId
    *  父表ID，ID字符串。
    *
    * @return string|null
    */
    public function getParentTableId()
    {
        return $this->container['parentTableId'];
    }

    /**
    * Sets parentTableId
    *
    * @param string|null $parentTableId 父表ID，ID字符串。
    *
    * @return $this
    */
    public function setParentTableId($parentTableId)
    {
        $this->container['parentTableId'] = $parentTableId;
        return $this;
    }

    /**
    * Gets parentTableName
    *  父表名称，只读。
    *
    * @return string|null
    */
    public function getParentTableName()
    {
        return $this->container['parentTableName'];
    }

    /**
    * Sets parentTableName
    *
    * @param string|null $parentTableName 父表名称，只读。
    *
    * @return $this
    */
    public function setParentTableName($parentTableName)
    {
        $this->container['parentTableName'] = $parentTableName;
        return $this;
    }

    /**
    * Gets parentTableCode
    *  父表编码，只读。
    *
    * @return string|null
    */
    public function getParentTableCode()
    {
        return $this->container['parentTableCode'];
    }

    /**
    * Sets parentTableCode
    *
    * @param string|null $parentTableCode 父表编码，只读。
    *
    * @return $this
    */
    public function setParentTableCode($parentTableCode)
    {
        $this->container['parentTableCode'] = $parentTableCode;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO|null $model model
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets dataFormat
    *  数据格式。
    *
    * @return string|null
    */
    public function getDataFormat()
    {
        return $this->container['dataFormat'];
    }

    /**
    * Sets dataFormat
    *
    * @param string|null $dataFormat 数据格式。
    *
    * @return $this
    */
    public function setDataFormat($dataFormat)
    {
        $this->container['dataFormat'] = $dataFormat;
        return $this;
    }

    /**
    * Gets obsBucket
    *  obs桶。
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket obs桶。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets obsLocation
    *  obs路径。
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
    * @param string|null $obsLocation obs路径。
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
    *  其他配置。
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
    * @param string|null $configs 其他配置。
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
        return $this;
    }

    /**
    * Gets tableType
    *  表类型，只读。
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
    * @param string|null $tableType 表类型，只读。
    *
    * @return $this
    */
    public function setTableType($tableType)
    {
        $this->container['tableType'] = $tableType;
        return $this;
    }

    /**
    * Gets owner
    *  责任人。
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
    * @param string|null $owner 责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets tbName
    *  表名。
    *
    * @return string
    */
    public function getTbName()
    {
        return $this->container['tbName'];
    }

    /**
    * Sets tbName
    *
    * @param string $tbName 表名。
    *
    * @return $this
    */
    public function setTbName($tbName)
    {
        $this->container['tbName'] = $tbName;
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
    * Gets extendInfo
    *  扩展信息。
    *
    * @return string|null
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param string|null $extendInfo 扩展信息。
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
        return $this;
    }

    /**
    * Gets tbGuid
    *  表物化后的guid，只读。
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
    * @param string|null $tbGuid 表物化后的guid，只读。
    *
    * @return $this
    */
    public function setTbGuid($tbGuid)
    {
        $this->container['tbGuid'] = $tbGuid;
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
    * Gets logicTbName
    *  逻辑实体名。
    *
    * @return string
    */
    public function getLogicTbName()
    {
        return $this->container['logicTbName'];
    }

    /**
    * Sets logicTbName
    *
    * @param string $logicTbName 逻辑实体名。
    *
    * @return $this
    */
    public function setLogicTbName($logicTbName)
    {
        $this->container['logicTbName'] = $logicTbName;
        return $this;
    }

    /**
    * Gets logicTbGuid
    *  逻辑实体的guid，只读。
    *
    * @return string|null
    */
    public function getLogicTbGuid()
    {
        return $this->container['logicTbGuid'];
    }

    /**
    * Sets logicTbGuid
    *
    * @param string|null $logicTbGuid 逻辑实体的guid，只读。
    *
    * @return $this
    */
    public function setLogicTbGuid($logicTbGuid)
    {
        $this->container['logicTbGuid'] = $logicTbGuid;
        return $this;
    }

    /**
    * Gets description
    *  描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述。
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
    * Gets logicTbId
    *  逻辑实体的ID，ID字符串。
    *
    * @return string|null
    */
    public function getLogicTbId()
    {
        return $this->container['logicTbId'];
    }

    /**
    * Sets logicTbId
    *
    * @param string|null $logicTbId 逻辑实体的ID，ID字符串。
    *
    * @return $this
    */
    public function setLogicTbId($logicTbId)
    {
        $this->container['logicTbId'] = $logicTbId;
        return $this;
    }

    /**
    * Gets bizCatalogId
    *  归属的业务分类的ID，ID字符串。
    *
    * @return string|null
    */
    public function getBizCatalogId()
    {
        return $this->container['bizCatalogId'];
    }

    /**
    * Sets bizCatalogId
    *
    * @param string|null $bizCatalogId 归属的业务分类的ID，ID字符串。
    *
    * @return $this
    */
    public function setBizCatalogId($bizCatalogId)
    {
        $this->container['bizCatalogId'] = $bizCatalogId;
        return $this;
    }

    /**
    * Gets catalogPath
    *  归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    *
    * @return string|null
    */
    public function getCatalogPath()
    {
        return $this->container['catalogPath'];
    }

    /**
    * Sets catalogPath
    *
    * @param string|null $catalogPath 归属的业务分类的路径，格式： {\"l1Id\":\"958408897973161984\",\"l2Id\":\"958408897973161985\",\"l3Id\":\"958408897973161986\"}。
    *
    * @return $this
    */
    public function setCatalogPath($catalogPath)
    {
        $this->container['catalogPath'] = $catalogPath;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，只读。
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
    * @param string|null $createBy 创建人，只读。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人，只读。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人，只读。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
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
    * Gets tags
    *  表标签，只读。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagVO[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagVO[]|null $tags 表标签，只读。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
    * Gets attributes
    *  表属性信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelAttributeVO[]
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelAttributeVO[] $attributes 表属性信息。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets mappings
    *  表映射信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingVO[]|null
    */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
    * Sets mappings
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingVO[]|null $mappings 表映射信息。
    *
    * @return $this
    */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;
        return $this;
    }

    /**
    * Gets relations
    *  关系。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]|null
    */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
    * Sets relations
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]|null $relations 关系。
    *
    * @return $this
    */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
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
    * Gets l1Id
    *  主题域分组ID，只读，ID字符串。
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
    * @param string|null $l1Id 主题域分组ID，只读，ID字符串。
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
    *  业务对象ID，只读，ID字符串。
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
    * @param string|null $l3Id 业务对象ID，只读，ID字符串。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets partitionConf
    *  分区表达式
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
    * @param string|null $partitionConf 分区表达式
    *
    * @return $this
    */
    public function setPartitionConf($partitionConf)
    {
        $this->container['partitionConf'] = $partitionConf;
        return $this;
    }

    /**
    * Gets dlfTaskId
    *  DLF作业ID。
    *
    * @return string|null
    */
    public function getDlfTaskId()
    {
        return $this->container['dlfTaskId'];
    }

    /**
    * Sets dlfTaskId
    *
    * @param string|null $dlfTaskId DLF作业ID。
    *
    * @return $this
    */
    public function setDlfTaskId($dlfTaskId)
    {
        $this->container['dlfTaskId'] = $dlfTaskId;
        return $this;
    }

    /**
    * Gets useRecentlyPartition
    *  是否使用最新分区。
    *
    * @return bool|null
    */
    public function getUseRecentlyPartition()
    {
        return $this->container['useRecentlyPartition'];
    }

    /**
    * Sets useRecentlyPartition
    *
    * @param bool|null $useRecentlyPartition 是否使用最新分区。
    *
    * @return $this
    */
    public function setUseRecentlyPartition($useRecentlyPartition)
    {
        $this->container['useRecentlyPartition'] = $useRecentlyPartition;
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
    * Gets qualityOwner
    *  质量责任人。
    *
    * @return string|null
    */
    public function getQualityOwner()
    {
        return $this->container['qualityOwner'];
    }

    /**
    * Sets qualityOwner
    *
    * @param string|null $qualityOwner 质量责任人。
    *
    * @return $this
    */
    public function setQualityOwner($qualityOwner)
    {
        $this->container['qualityOwner'] = $qualityOwner;
        return $this;
    }

    /**
    * Gets qualityId
    *  质量ID，ID字符串。
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
    * @param string|null $qualityId 质量ID，ID字符串。
    *
    * @return $this
    */
    public function setQualityId($qualityId)
    {
        $this->container['qualityId'] = $qualityId;
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
    * Gets isPartition
    *  是否分区表，只读。
    *
    * @return bool|null
    */
    public function getIsPartition()
    {
        return $this->container['isPartition'];
    }

    /**
    * Sets isPartition
    *
    * @param bool|null $isPartition 是否分区表，只读。
    *
    * @return $this
    */
    public function setIsPartition($isPartition)
    {
        $this->container['isPartition'] = $isPartition;
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
    * Gets devVersion
    *  开发环境版本，ID字符串。
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
    * @param string|null $devVersion 开发环境版本，ID字符串。
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
    *  生产环境版本，ID字符串。
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
    * @param string|null $prodVersion 生产环境版本，ID字符串。
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
    * Gets hasRelatedPhysicalTable
    *  是否关联了物理表
    *
    * @return bool|null
    */
    public function getHasRelatedPhysicalTable()
    {
        return $this->container['hasRelatedPhysicalTable'];
    }

    /**
    * Sets hasRelatedPhysicalTable
    *
    * @param bool|null $hasRelatedPhysicalTable 是否关联了物理表
    *
    * @return $this
    */
    public function setHasRelatedPhysicalTable($hasRelatedPhysicalTable)
    {
        $this->container['hasRelatedPhysicalTable'] = $hasRelatedPhysicalTable;
        return $this;
    }

    /**
    * Gets hasRelatedLogicTable
    *  是否关联了逻辑实体
    *
    * @return bool|null
    */
    public function getHasRelatedLogicTable()
    {
        return $this->container['hasRelatedLogicTable'];
    }

    /**
    * Sets hasRelatedLogicTable
    *
    * @param bool|null $hasRelatedLogicTable 是否关联了逻辑实体
    *
    * @return $this
    */
    public function setHasRelatedLogicTable($hasRelatedLogicTable)
    {
        $this->container['hasRelatedLogicTable'] = $hasRelatedLogicTable;
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

