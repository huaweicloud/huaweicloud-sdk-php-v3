<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * updateBy  更新人。
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * hierarchies  层级属性。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * attributes  维度属性信息。
    * mappings  表映射信息。
    * datasource  datasource
    * owner  资产责任人。
    * obsLocation  外表路径
    * tableType  表类型。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * alias  别名。
    * selfDefinedFields  自定义项。
    * configs  其他配置
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
            'nameEn' => 'string',
            'dimensionType' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'codeTableId' => 'string',
            'codeTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableVO',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'hierarchies' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'attributes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[]',
            'mappings' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingVO[]',
            'datasource' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizDatasourceRelationVO',
            'owner' => 'string',
            'obsLocation' => 'string',
            'tableType' => 'string',
            'distribute' => 'string',
            'distributeColumn' => 'string',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'configs' => 'string',
            'devVersion' => 'string',
            'prodVersion' => 'string',
            'devVersionName' => 'string',
            'prodVersionName' => 'string',
            'envType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * updateBy  更新人。
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * hierarchies  层级属性。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * attributes  维度属性信息。
    * mappings  表映射信息。
    * datasource  datasource
    * owner  资产责任人。
    * obsLocation  外表路径
    * tableType  表类型。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * alias  别名。
    * selfDefinedFields  自定义项。
    * configs  其他配置
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
        'nameEn' => null,
        'dimensionType' => null,
        'nameCh' => null,
        'description' => null,
        'createBy' => null,
        'updateBy' => null,
        'codeTableId' => null,
        'codeTable' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'hierarchies' => null,
        'status' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'approvalInfo' => null,
        'newBiz' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'attributes' => null,
        'mappings' => null,
        'datasource' => null,
        'owner' => null,
        'obsLocation' => null,
        'tableType' => null,
        'distribute' => null,
        'distributeColumn' => null,
        'alias' => null,
        'selfDefinedFields' => null,
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
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * updateBy  更新人。
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * hierarchies  层级属性。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * attributes  维度属性信息。
    * mappings  表映射信息。
    * datasource  datasource
    * owner  资产责任人。
    * obsLocation  外表路径
    * tableType  表类型。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * alias  别名。
    * selfDefinedFields  自定义项。
    * configs  其他配置
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
            'nameEn' => 'name_en',
            'dimensionType' => 'dimension_type',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'codeTableId' => 'code_table_id',
            'codeTable' => 'code_table',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'hierarchies' => 'hierarchies',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'attributes' => 'attributes',
            'mappings' => 'mappings',
            'datasource' => 'datasource',
            'owner' => 'owner',
            'obsLocation' => 'obs_location',
            'tableType' => 'table_type',
            'distribute' => 'distribute',
            'distributeColumn' => 'distribute_column',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields',
            'configs' => 'configs',
            'devVersion' => 'dev_version',
            'prodVersion' => 'prod_version',
            'devVersionName' => 'dev_version_name',
            'prodVersionName' => 'prod_version_name',
            'envType' => 'env_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * updateBy  更新人。
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * hierarchies  层级属性。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * attributes  维度属性信息。
    * mappings  表映射信息。
    * datasource  datasource
    * owner  资产责任人。
    * obsLocation  外表路径
    * tableType  表类型。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * alias  别名。
    * selfDefinedFields  自定义项。
    * configs  其他配置
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
            'nameEn' => 'setNameEn',
            'dimensionType' => 'setDimensionType',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'codeTableId' => 'setCodeTableId',
            'codeTable' => 'setCodeTable',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'hierarchies' => 'setHierarchies',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'attributes' => 'setAttributes',
            'mappings' => 'setMappings',
            'datasource' => 'setDatasource',
            'owner' => 'setOwner',
            'obsLocation' => 'setObsLocation',
            'tableType' => 'setTableType',
            'distribute' => 'setDistribute',
            'distributeColumn' => 'setDistributeColumn',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'configs' => 'setConfigs',
            'devVersion' => 'setDevVersion',
            'prodVersion' => 'setProdVersion',
            'devVersionName' => 'setDevVersionName',
            'prodVersionName' => 'setProdVersionName',
            'envType' => 'setEnvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * dimensionType  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * updateBy  更新人。
    * codeTableId  引用码表ID，填写String类型替代Long类型。
    * codeTable  codeTable
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID，填写String类型替代Long类型。
    * hierarchies  层级属性。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * attributes  维度属性信息。
    * mappings  表映射信息。
    * datasource  datasource
    * owner  资产责任人。
    * obsLocation  外表路径
    * tableType  表类型。
    * distribute  DISTRIBUTE BY [HASH(column)|REPLICATION]。 枚举值：   - HASH: 对指定的列进行Hash，通过映射，把数据分布到指定DN   - REPLICATION: 表的每一行存在所有数据节点（DN）中，即每个数据节点都有完整的表数据
    * distributeColumn  DISTRIBUTE BY HASH column.
    * alias  别名。
    * selfDefinedFields  自定义项。
    * configs  其他配置
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
            'nameEn' => 'getNameEn',
            'dimensionType' => 'getDimensionType',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'codeTableId' => 'getCodeTableId',
            'codeTable' => 'getCodeTable',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'hierarchies' => 'getHierarchies',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'attributes' => 'getAttributes',
            'mappings' => 'getMappings',
            'datasource' => 'getDatasource',
            'owner' => 'getOwner',
            'obsLocation' => 'getObsLocation',
            'tableType' => 'getTableType',
            'distribute' => 'getDistribute',
            'distributeColumn' => 'getDistributeColumn',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields',
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
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['dimensionType'] = isset($data['dimensionType']) ? $data['dimensionType'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['codeTableId'] = isset($data['codeTableId']) ? $data['codeTableId'] : null;
        $this->container['codeTable'] = isset($data['codeTable']) ? $data['codeTable'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['hierarchies'] = isset($data['hierarchies']) ? $data['hierarchies'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['distribute'] = isset($data['distribute']) ? $data['distribute'] : null;
        $this->container['distributeColumn'] = isset($data['distributeColumn']) ? $data['distributeColumn'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
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
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9_]*$/.";
            }
        if ($this->container['dimensionType'] === null) {
            $invalidProperties[] = "'dimensionType' can't be null";
        }
            $allowedValues = $this->getDimensionTypeAllowableValues();
                if (!is_null($this->container['dimensionType']) && !in_array($this->container['dimensionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimensionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
        if ($this->container['l3Id'] === null) {
            $invalidProperties[] = "'l3Id' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
            if (!is_null($this->container['obsLocation']) && (mb_strlen($this->container['obsLocation']) > 1024)) {
                $invalidProperties[] = "invalid value for 'obsLocation', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['obsLocation']) && !preg_match("/^[a-zA-Z0-9_\\-\\.\/:]*$/", $this->container['obsLocation'])) {
                $invalidProperties[] = "invalid value for 'obsLocation', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.\/:]*$/.";
            }
            $allowedValues = $this->getDistributeAllowableValues();
                if (!is_null($this->container['distribute']) && !in_array($this->container['distribute'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'distribute', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  编码，填写String类型替代Long类型。
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
    * @param string|null $id 编码，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameEn
    *  字段名。
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 字段名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets dimensionType
    *  维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    *
    * @return string
    */
    public function getDimensionType()
    {
        return $this->container['dimensionType'];
    }

    /**
    * Sets dimensionType
    *
    * @param string $dimensionType 维度类型。 枚举值：   - COMMON: 普通维度   - LOOKUP: 码表维度   - HIERARCHIES: 层级维度
    *
    * @return $this
    */
    public function setDimensionType($dimensionType)
    {
        $this->container['dimensionType'] = $dimensionType;
        return $this;
    }

    /**
    * Gets nameCh
    *  业务属性。
    *
    * @return string
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string $nameCh 业务属性。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
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
    * Gets updateBy
    *  更新人。
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
    * @param string|null $updateBy 更新人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
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
    * @return string
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param string $l3Id 业务对象ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets hierarchies
    *  层级属性。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]|null
    */
    public function getHierarchies()
    {
        return $this->container['hierarchies'];
    }

    /**
    * Sets hierarchies
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]|null $hierarchies 层级属性。
    *
    * @return $this
    */
    public function setHierarchies($hierarchies)
    {
        $this->container['hierarchies'] = $hierarchies;
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
    * Gets attributes
    *  维度属性信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[]
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[] $attributes 维度属性信息。
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
    * Gets datasource
    *  datasource
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizDatasourceRelationVO|null
    */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
    * Sets datasource
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizDatasourceRelationVO|null $datasource datasource
    *
    * @return $this
    */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;
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

