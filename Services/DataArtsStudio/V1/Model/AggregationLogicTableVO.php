<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregationLogicTableVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregationLogicTableVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  汇总表的唯一系统ID，更新时必填，创建时不须填写。
    * tbName  汇总表英文名称，对应实际的物理表名。
    * tbLogicName  汇总表的中文名，用于展示使用。
    * l1Id  主题域分组ID，只读，创建和更新时无需填写。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  汇总表所属主题的ID，必填。
    * description  汇总表描述信息。
    * owner  汇总表的资产责任人。
    * createBy  汇总表的创建人，只读，创建和更新时无需填写。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
    * dwId  汇总表所在的数据连接ID，为32位十六进制数字。
    * dbName  汇总表所在的数据库名。
    * tbId  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
    * schema  汇总表所在的Schema名，DWS类型必须填写。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，创建和更新时无需填写。
    * updateTime  更新时间，只读，创建和更新时无需填写。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * timePeriod  timePeriod
    * tableAttributes  汇总表属性信息，依据attribute_type判断类型。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
    * distributeColumn  DISTRIBUTE BY HASH column.
    * compression  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    * obsLocation  外表路径。
    * preCombineField  版本字段。
    * tableType  表类型。
    * dlfTaskId  DLF作业ID。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * tableVersion  为2时，表示汇总表是汇总生成的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * alias  别名。
    * configs  其他配置。
    * selfDefinedFields  自定义项。
    * apiId  API ID。
    * sql  汇总表绑定的SQL。
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
            'description' => 'string',
            'owner' => 'string',
            'createBy' => 'string',
            'queueName' => 'string',
            'dwId' => 'string',
            'dbName' => 'string',
            'tbId' => 'string',
            'schema' => 'string',
            'dwName' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'tbGuid' => 'string',
            'tbLogicGuid' => 'string',
            'dwType' => 'string',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'dimensionGroup' => 'string',
            'groupName' => 'string',
            'groupCode' => 'string',
            'timePeriod' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO',
            'tableAttributes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO[]',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'devPhysicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dlfTask' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'publishToDlm' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'distribute' => 'string',
            'distributeColumn' => 'string',
            'compression' => 'string',
            'obsLocation' => 'string',
            'preCombineField' => 'string',
            'tableType' => 'string',
            'dlfTaskId' => 'string',
            'qualityId' => 'string',
            'reversed' => 'bool',
            'tableVersion' => 'int',
            'partitionConf' => 'string',
            'dirtyOutSwitch' => 'bool',
            'dirtyOutDatabase' => 'string',
            'dirtyOutPrefix' => 'string',
            'dirtyOutSuffix' => 'string',
            'alias' => 'string',
            'configs' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'apiId' => 'string',
            'sql' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  汇总表的唯一系统ID，更新时必填，创建时不须填写。
    * tbName  汇总表英文名称，对应实际的物理表名。
    * tbLogicName  汇总表的中文名，用于展示使用。
    * l1Id  主题域分组ID，只读，创建和更新时无需填写。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  汇总表所属主题的ID，必填。
    * description  汇总表描述信息。
    * owner  汇总表的资产责任人。
    * createBy  汇总表的创建人，只读，创建和更新时无需填写。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
    * dwId  汇总表所在的数据连接ID，为32位十六进制数字。
    * dbName  汇总表所在的数据库名。
    * tbId  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
    * schema  汇总表所在的Schema名，DWS类型必须填写。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，创建和更新时无需填写。
    * updateTime  更新时间，只读，创建和更新时无需填写。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * timePeriod  timePeriod
    * tableAttributes  汇总表属性信息，依据attribute_type判断类型。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
    * distributeColumn  DISTRIBUTE BY HASH column.
    * compression  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    * obsLocation  外表路径。
    * preCombineField  版本字段。
    * tableType  表类型。
    * dlfTaskId  DLF作业ID。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * tableVersion  为2时，表示汇总表是汇总生成的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * alias  别名。
    * configs  其他配置。
    * selfDefinedFields  自定义项。
    * apiId  API ID。
    * sql  汇总表绑定的SQL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'tbName' => null,
        'tbLogicName' => null,
        'l1Id' => 'int64',
        'l2Id' => null,
        'l3Id' => 'int64',
        'description' => null,
        'owner' => null,
        'createBy' => null,
        'queueName' => null,
        'dwId' => null,
        'dbName' => null,
        'tbId' => null,
        'schema' => null,
        'dwName' => null,
        'status' => null,
        'tbGuid' => null,
        'tbLogicGuid' => null,
        'dwType' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'approvalInfo' => null,
        'newBiz' => null,
        'dimensionGroup' => null,
        'groupName' => null,
        'groupCode' => null,
        'timePeriod' => null,
        'tableAttributes' => null,
        'physicalTable' => null,
        'devPhysicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null,
        'dlfTask' => null,
        'publishToDlm' => null,
        'summaryStatus' => null,
        'distribute' => null,
        'distributeColumn' => null,
        'compression' => null,
        'obsLocation' => null,
        'preCombineField' => null,
        'tableType' => null,
        'dlfTaskId' => null,
        'qualityId' => 'int64',
        'reversed' => null,
        'tableVersion' => null,
        'partitionConf' => null,
        'dirtyOutSwitch' => null,
        'dirtyOutDatabase' => null,
        'dirtyOutPrefix' => null,
        'dirtyOutSuffix' => null,
        'alias' => null,
        'configs' => null,
        'selfDefinedFields' => null,
        'apiId' => null,
        'sql' => null
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
    * id  汇总表的唯一系统ID，更新时必填，创建时不须填写。
    * tbName  汇总表英文名称，对应实际的物理表名。
    * tbLogicName  汇总表的中文名，用于展示使用。
    * l1Id  主题域分组ID，只读，创建和更新时无需填写。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  汇总表所属主题的ID，必填。
    * description  汇总表描述信息。
    * owner  汇总表的资产责任人。
    * createBy  汇总表的创建人，只读，创建和更新时无需填写。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
    * dwId  汇总表所在的数据连接ID，为32位十六进制数字。
    * dbName  汇总表所在的数据库名。
    * tbId  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
    * schema  汇总表所在的Schema名，DWS类型必须填写。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，创建和更新时无需填写。
    * updateTime  更新时间，只读，创建和更新时无需填写。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * timePeriod  timePeriod
    * tableAttributes  汇总表属性信息，依据attribute_type判断类型。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
    * distributeColumn  DISTRIBUTE BY HASH column.
    * compression  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    * obsLocation  外表路径。
    * preCombineField  版本字段。
    * tableType  表类型。
    * dlfTaskId  DLF作业ID。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * tableVersion  为2时，表示汇总表是汇总生成的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * alias  别名。
    * configs  其他配置。
    * selfDefinedFields  自定义项。
    * apiId  API ID。
    * sql  汇总表绑定的SQL。
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
            'description' => 'description',
            'owner' => 'owner',
            'createBy' => 'create_by',
            'queueName' => 'queue_name',
            'dwId' => 'dw_id',
            'dbName' => 'db_name',
            'tbId' => 'tb_id',
            'schema' => 'schema',
            'dwName' => 'dw_name',
            'status' => 'status',
            'tbGuid' => 'tb_guid',
            'tbLogicGuid' => 'tb_logic_guid',
            'dwType' => 'dw_type',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'dimensionGroup' => 'dimension_group',
            'groupName' => 'group_name',
            'groupCode' => 'group_code',
            'timePeriod' => 'time_period',
            'tableAttributes' => 'table_attributes',
            'physicalTable' => 'physical_table',
            'devPhysicalTable' => 'dev_physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality',
            'dlfTask' => 'dlf_task',
            'publishToDlm' => 'publish_to_dlm',
            'summaryStatus' => 'summary_status',
            'distribute' => 'distribute',
            'distributeColumn' => 'distribute_column',
            'compression' => 'compression',
            'obsLocation' => 'obs_location',
            'preCombineField' => 'pre_combine_field',
            'tableType' => 'table_type',
            'dlfTaskId' => 'dlf_task_id',
            'qualityId' => 'quality_id',
            'reversed' => 'reversed',
            'tableVersion' => 'table_version',
            'partitionConf' => 'partition_conf',
            'dirtyOutSwitch' => 'dirty_out_switch',
            'dirtyOutDatabase' => 'dirty_out_database',
            'dirtyOutPrefix' => 'dirty_out_prefix',
            'dirtyOutSuffix' => 'dirty_out_suffix',
            'alias' => 'alias',
            'configs' => 'configs',
            'selfDefinedFields' => 'self_defined_fields',
            'apiId' => 'api_id',
            'sql' => 'sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  汇总表的唯一系统ID，更新时必填，创建时不须填写。
    * tbName  汇总表英文名称，对应实际的物理表名。
    * tbLogicName  汇总表的中文名，用于展示使用。
    * l1Id  主题域分组ID，只读，创建和更新时无需填写。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  汇总表所属主题的ID，必填。
    * description  汇总表描述信息。
    * owner  汇总表的资产责任人。
    * createBy  汇总表的创建人，只读，创建和更新时无需填写。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
    * dwId  汇总表所在的数据连接ID，为32位十六进制数字。
    * dbName  汇总表所在的数据库名。
    * tbId  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
    * schema  汇总表所在的Schema名，DWS类型必须填写。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，创建和更新时无需填写。
    * updateTime  更新时间，只读，创建和更新时无需填写。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * timePeriod  timePeriod
    * tableAttributes  汇总表属性信息，依据attribute_type判断类型。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
    * distributeColumn  DISTRIBUTE BY HASH column.
    * compression  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    * obsLocation  外表路径。
    * preCombineField  版本字段。
    * tableType  表类型。
    * dlfTaskId  DLF作业ID。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * tableVersion  为2时，表示汇总表是汇总生成的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * alias  别名。
    * configs  其他配置。
    * selfDefinedFields  自定义项。
    * apiId  API ID。
    * sql  汇总表绑定的SQL。
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
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'createBy' => 'setCreateBy',
            'queueName' => 'setQueueName',
            'dwId' => 'setDwId',
            'dbName' => 'setDbName',
            'tbId' => 'setTbId',
            'schema' => 'setSchema',
            'dwName' => 'setDwName',
            'status' => 'setStatus',
            'tbGuid' => 'setTbGuid',
            'tbLogicGuid' => 'setTbLogicGuid',
            'dwType' => 'setDwType',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'dimensionGroup' => 'setDimensionGroup',
            'groupName' => 'setGroupName',
            'groupCode' => 'setGroupCode',
            'timePeriod' => 'setTimePeriod',
            'tableAttributes' => 'setTableAttributes',
            'physicalTable' => 'setPhysicalTable',
            'devPhysicalTable' => 'setDevPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality',
            'dlfTask' => 'setDlfTask',
            'publishToDlm' => 'setPublishToDlm',
            'summaryStatus' => 'setSummaryStatus',
            'distribute' => 'setDistribute',
            'distributeColumn' => 'setDistributeColumn',
            'compression' => 'setCompression',
            'obsLocation' => 'setObsLocation',
            'preCombineField' => 'setPreCombineField',
            'tableType' => 'setTableType',
            'dlfTaskId' => 'setDlfTaskId',
            'qualityId' => 'setQualityId',
            'reversed' => 'setReversed',
            'tableVersion' => 'setTableVersion',
            'partitionConf' => 'setPartitionConf',
            'dirtyOutSwitch' => 'setDirtyOutSwitch',
            'dirtyOutDatabase' => 'setDirtyOutDatabase',
            'dirtyOutPrefix' => 'setDirtyOutPrefix',
            'dirtyOutSuffix' => 'setDirtyOutSuffix',
            'alias' => 'setAlias',
            'configs' => 'setConfigs',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'apiId' => 'setApiId',
            'sql' => 'setSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  汇总表的唯一系统ID，更新时必填，创建时不须填写。
    * tbName  汇总表英文名称，对应实际的物理表名。
    * tbLogicName  汇总表的中文名，用于展示使用。
    * l1Id  主题域分组ID，只读，创建和更新时无需填写。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  汇总表所属主题的ID，必填。
    * description  汇总表描述信息。
    * owner  汇总表的资产责任人。
    * createBy  汇总表的创建人，只读，创建和更新时无需填写。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
    * dwId  汇总表所在的数据连接ID，为32位十六进制数字。
    * dbName  汇总表所在的数据库名。
    * tbId  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
    * schema  汇总表所在的Schema名，DWS类型必须填写。
    * dwName  数据连接名称，只读，创建和更新时无需填写。
    * status  status
    * tbGuid  表发布后，创建的数据目录技术资产guid，只读，创建和更新时无需填写。
    * tbLogicGuid  表发布后，创建的数据目录业务资产guid，只读，创建和更新时无需填写。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * createTime  创建时间，只读，创建和更新时无需填写。
    * updateTime  更新时间，只读，创建和更新时无需填写。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * timePeriod  timePeriod
    * tableAttributes  汇总表属性信息，依据attribute_type判断类型。
    * physicalTable  physicalTable
    * devPhysicalTable  devPhysicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * publishToDlm  publishToDlm
    * summaryStatus  summaryStatus
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
    * distributeColumn  DISTRIBUTE BY HASH column.
    * compression  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    * obsLocation  外表路径。
    * preCombineField  版本字段。
    * tableType  表类型。
    * dlfTaskId  DLF作业ID。
    * qualityId  质量ID。
    * reversed  是否是逆向的。
    * tableVersion  为2时，表示汇总表是汇总生成的。
    * partitionConf  分区表达式。
    * dirtyOutSwitch  异常数据输出开关。
    * dirtyOutDatabase  异常数据输出库。
    * dirtyOutPrefix  异常表前缀。
    * dirtyOutSuffix  异常表后缀。
    * alias  别名。
    * configs  其他配置。
    * selfDefinedFields  自定义项。
    * apiId  API ID。
    * sql  汇总表绑定的SQL。
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
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'createBy' => 'getCreateBy',
            'queueName' => 'getQueueName',
            'dwId' => 'getDwId',
            'dbName' => 'getDbName',
            'tbId' => 'getTbId',
            'schema' => 'getSchema',
            'dwName' => 'getDwName',
            'status' => 'getStatus',
            'tbGuid' => 'getTbGuid',
            'tbLogicGuid' => 'getTbLogicGuid',
            'dwType' => 'getDwType',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'dimensionGroup' => 'getDimensionGroup',
            'groupName' => 'getGroupName',
            'groupCode' => 'getGroupCode',
            'timePeriod' => 'getTimePeriod',
            'tableAttributes' => 'getTableAttributes',
            'physicalTable' => 'getPhysicalTable',
            'devPhysicalTable' => 'getDevPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality',
            'dlfTask' => 'getDlfTask',
            'publishToDlm' => 'getPublishToDlm',
            'summaryStatus' => 'getSummaryStatus',
            'distribute' => 'getDistribute',
            'distributeColumn' => 'getDistributeColumn',
            'compression' => 'getCompression',
            'obsLocation' => 'getObsLocation',
            'preCombineField' => 'getPreCombineField',
            'tableType' => 'getTableType',
            'dlfTaskId' => 'getDlfTaskId',
            'qualityId' => 'getQualityId',
            'reversed' => 'getReversed',
            'tableVersion' => 'getTableVersion',
            'partitionConf' => 'getPartitionConf',
            'dirtyOutSwitch' => 'getDirtyOutSwitch',
            'dirtyOutDatabase' => 'getDirtyOutDatabase',
            'dirtyOutPrefix' => 'getDirtyOutPrefix',
            'dirtyOutSuffix' => 'getDirtyOutSuffix',
            'alias' => 'getAlias',
            'configs' => 'getConfigs',
            'selfDefinedFields' => 'getSelfDefinedFields',
            'apiId' => 'getApiId',
            'sql' => 'getSql'
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
    const COMPRESSION_NO = 'NO';
    const COMPRESSION_YES = 'YES';
    const COMPRESSION_LOW = 'LOW';
    const COMPRESSION_MIDDLE = 'MIDDLE';
    const COMPRESSION_HIGH = 'HIGH';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompressionAllowableValues()
    {
        return [
            self::COMPRESSION_NO,
            self::COMPRESSION_YES,
            self::COMPRESSION_LOW,
            self::COMPRESSION_MIDDLE,
            self::COMPRESSION_HIGH,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tbId'] = isset($data['tbId']) ? $data['tbId'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tbGuid'] = isset($data['tbGuid']) ? $data['tbGuid'] : null;
        $this->container['tbLogicGuid'] = isset($data['tbLogicGuid']) ? $data['tbLogicGuid'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['dimensionGroup'] = isset($data['dimensionGroup']) ? $data['dimensionGroup'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupCode'] = isset($data['groupCode']) ? $data['groupCode'] : null;
        $this->container['timePeriod'] = isset($data['timePeriod']) ? $data['timePeriod'] : null;
        $this->container['tableAttributes'] = isset($data['tableAttributes']) ? $data['tableAttributes'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['devPhysicalTable'] = isset($data['devPhysicalTable']) ? $data['devPhysicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
        $this->container['dlfTask'] = isset($data['dlfTask']) ? $data['dlfTask'] : null;
        $this->container['publishToDlm'] = isset($data['publishToDlm']) ? $data['publishToDlm'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['distribute'] = isset($data['distribute']) ? $data['distribute'] : null;
        $this->container['distributeColumn'] = isset($data['distributeColumn']) ? $data['distributeColumn'] : null;
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['preCombineField'] = isset($data['preCombineField']) ? $data['preCombineField'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['dlfTaskId'] = isset($data['dlfTaskId']) ? $data['dlfTaskId'] : null;
        $this->container['qualityId'] = isset($data['qualityId']) ? $data['qualityId'] : null;
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : null;
        $this->container['tableVersion'] = isset($data['tableVersion']) ? $data['tableVersion'] : null;
        $this->container['partitionConf'] = isset($data['partitionConf']) ? $data['partitionConf'] : null;
        $this->container['dirtyOutSwitch'] = isset($data['dirtyOutSwitch']) ? $data['dirtyOutSwitch'] : null;
        $this->container['dirtyOutDatabase'] = isset($data['dirtyOutDatabase']) ? $data['dirtyOutDatabase'] : null;
        $this->container['dirtyOutPrefix'] = isset($data['dirtyOutPrefix']) ? $data['dirtyOutPrefix'] : null;
        $this->container['dirtyOutSuffix'] = isset($data['dirtyOutSuffix']) ? $data['dirtyOutSuffix'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tbName'] === null) {
            $invalidProperties[] = "'tbName' can't be null";
        }
            if ((mb_strlen($this->container['tbName']) > 600)) {
                $invalidProperties[] = "invalid value for 'tbName', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['tbLogicName'] === null) {
            $invalidProperties[] = "'tbLogicName' can't be null";
        }
            if ((mb_strlen($this->container['tbLogicName']) > 200)) {
                $invalidProperties[] = "invalid value for 'tbLogicName', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/", $this->container['tbLogicName'])) {
                $invalidProperties[] = "invalid value for 'tbLogicName', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/.";
            }
        if ($this->container['l3Id'] === null) {
            $invalidProperties[] = "'l3Id' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['dwId'] === null) {
            $invalidProperties[] = "'dwId' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
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

            $allowedValues = $this->getCompressionAllowableValues();
                if (!is_null($this->container['compression']) && !in_array($this->container['compression'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compression', must be one of '%s'",
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
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) > 2000)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 2000.";
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
    *  汇总表的唯一系统ID，更新时必填，创建时不须填写。
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
    * @param string|null $id 汇总表的唯一系统ID，更新时必填，创建时不须填写。
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
    *  汇总表英文名称，对应实际的物理表名。
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
    * @param string $tbName 汇总表英文名称，对应实际的物理表名。
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
    *  汇总表的中文名，用于展示使用。
    *
    * @return string
    */
    public function getTbLogicName()
    {
        return $this->container['tbLogicName'];
    }

    /**
    * Sets tbLogicName
    *
    * @param string $tbLogicName 汇总表的中文名，用于展示使用。
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
    *  主题域分组ID，只读，创建和更新时无需填写。
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
    * @param string|null $l1Id 主题域分组ID，只读，创建和更新时无需填写。
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
    *  汇总表所属主题的ID，必填。
    *
    * @return string
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param string $l3Id 汇总表所属主题的ID，必填。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets description
    *  汇总表描述信息。
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
    * @param string|null $description 汇总表描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  汇总表的资产责任人。
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner 汇总表的资产责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createBy
    *  汇总表的创建人，只读，创建和更新时无需填写。
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
    * @param string|null $createBy 汇总表的创建人，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets queueName
    *  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
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
    * @param string|null $queueName dli数据连接执行sql所需的队列，数据连接类型为DLI时必须填写。
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
    *  汇总表所在的数据连接ID，为32位十六进制数字。
    *
    * @return string
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string $dwId 汇总表所在的数据连接ID，为32位十六进制数字。
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
    *  汇总表所在的数据库名。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 汇总表所在的数据库名。
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
    *  汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
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
    * @param string|null $tbId 汇总表创建的表ID，是服务内部ID，只读，创建和更新时无需填写
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
    *  汇总表所在的Schema名，DWS类型必须填写。
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
    * @param string|null $schema 汇总表所在的Schema名，DWS类型必须填写。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
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
    *  创建时间，只读，创建和更新时无需填写。
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
    * @param \DateTime|null $createTime 创建时间，只读，创建和更新时无需填写。
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
    *  更新时间，只读，创建和更新时无需填写。
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
    * @param \DateTime|null $updateTime 更新时间，只读，创建和更新时无需填写。
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
    * Gets dimensionGroup
    *  颗粒度ID。
    *
    * @return string|null
    */
    public function getDimensionGroup()
    {
        return $this->container['dimensionGroup'];
    }

    /**
    * Sets dimensionGroup
    *
    * @param string|null $dimensionGroup 颗粒度ID。
    *
    * @return $this
    */
    public function setDimensionGroup($dimensionGroup)
    {
        $this->container['dimensionGroup'] = $dimensionGroup;
        return $this;
    }

    /**
    * Gets groupName
    *  颗粒度名称。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 颗粒度名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupCode
    *  颗粒度编码。
    *
    * @return string|null
    */
    public function getGroupCode()
    {
        return $this->container['groupCode'];
    }

    /**
    * Sets groupCode
    *
    * @param string|null $groupCode 颗粒度编码。
    *
    * @return $this
    */
    public function setGroupCode($groupCode)
    {
        $this->container['groupCode'] = $groupCode;
        return $this;
    }

    /**
    * Gets timePeriod
    *  timePeriod
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO|null
    */
    public function getTimePeriod()
    {
        return $this->container['timePeriod'];
    }

    /**
    * Sets timePeriod
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO|null $timePeriod timePeriod
    *
    * @return $this
    */
    public function setTimePeriod($timePeriod)
    {
        $this->container['timePeriod'] = $timePeriod;
        return $this;
    }

    /**
    * Gets tableAttributes
    *  汇总表属性信息，依据attribute_type判断类型。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO[]|null
    */
    public function getTableAttributes()
    {
        return $this->container['tableAttributes'];
    }

    /**
    * Sets tableAttributes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AggregationLogicTableAttributeVO[]|null $tableAttributes 汇总表属性信息，依据attribute_type判断类型。
    *
    * @return $this
    */
    public function setTableAttributes($tableAttributes)
    {
        $this->container['tableAttributes'] = $tableAttributes;
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
    * Gets distribute
    *  DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
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
    * @param string|null $distribute DISTRIBUTE BY [HASH(column)|REPLICATION]。HASH(对指定的列进行Hash，通过映射，把数据分布到指定DN)、REPLICATION(表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据)。
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
    * Gets compression
    *  DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    *
    * @return string|null
    */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
    * Sets compression
    *
    * @param string|null $compression DWS数据压缩等级，列压缩等级为no/low/middle/high，行压缩等级为no/yes。
    *
    * @return $this
    */
    public function setCompression($compression)
    {
        $this->container['compression'] = $compression;
        return $this;
    }

    /**
    * Gets obsLocation
    *  外表路径。
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
    * @param string|null $obsLocation 外表路径。
    *
    * @return $this
    */
    public function setObsLocation($obsLocation)
    {
        $this->container['obsLocation'] = $obsLocation;
        return $this;
    }

    /**
    * Gets preCombineField
    *  版本字段。
    *
    * @return string|null
    */
    public function getPreCombineField()
    {
        return $this->container['preCombineField'];
    }

    /**
    * Sets preCombineField
    *
    * @param string|null $preCombineField 版本字段。
    *
    * @return $this
    */
    public function setPreCombineField($preCombineField)
    {
        $this->container['preCombineField'] = $preCombineField;
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
    * Gets tableVersion
    *  为2时，表示汇总表是汇总生成的。
    *
    * @return int|null
    */
    public function getTableVersion()
    {
        return $this->container['tableVersion'];
    }

    /**
    * Sets tableVersion
    *
    * @param int|null $tableVersion 为2时，表示汇总表是汇总生成的。
    *
    * @return $this
    */
    public function setTableVersion($tableVersion)
    {
        $this->container['tableVersion'] = $tableVersion;
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
    * Gets apiId
    *  API ID。
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
    * @param string|null $apiId API ID。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets sql
    *  汇总表绑定的SQL。
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql 汇总表绑定的SQL。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
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

