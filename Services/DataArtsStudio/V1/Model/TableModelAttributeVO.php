<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableModelAttributeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableModelAttributeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述。
    * obsLocation  obs路径，子路径。
    * createBy  创建人。
    * updateBy  更新人。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键。
    * extendField  是否继承的属性。
    * notNull  是否不为空。
    * ordinal  序号。
    * tableModelId  所属关系建模的模型ID，ID字符串。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * secrecyLevels  密级
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * code  逻辑属性编码
    * relatedLogicAttrId  关联逻辑属性ID，ID字符串。
    * relatedLogicAttrName  关联逻辑实体属性中文名称
    * relatedLogicAttrNameEn  关联逻辑实体属性英文名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'obsLocation' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'dataType' => 'string',
            'domainType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum',
            'dataTypeExtend' => 'string',
            'isPrimaryKey' => 'bool',
            'isPartitionKey' => 'bool',
            'isForeignKey' => 'bool',
            'extendField' => 'bool',
            'notNull' => 'bool',
            'ordinal' => 'int',
            'tableModelId' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagVO[]',
            'secrecyLevels' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelVO[]',
            'standRowId' => 'string',
            'standRowName' => 'string',
            'qualityInfos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'code' => 'string',
            'relatedLogicAttrId' => 'string',
            'relatedLogicAttrName' => 'string',
            'relatedLogicAttrNameEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述。
    * obsLocation  obs路径，子路径。
    * createBy  创建人。
    * updateBy  更新人。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键。
    * extendField  是否继承的属性。
    * notNull  是否不为空。
    * ordinal  序号。
    * tableModelId  所属关系建模的模型ID，ID字符串。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * secrecyLevels  密级
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * code  逻辑属性编码
    * relatedLogicAttrId  关联逻辑属性ID，ID字符串。
    * relatedLogicAttrName  关联逻辑实体属性中文名称
    * relatedLogicAttrNameEn  关联逻辑实体属性英文名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'obsLocation' => null,
        'createBy' => null,
        'updateBy' => null,
        'dataType' => null,
        'domainType' => null,
        'dataTypeExtend' => null,
        'isPrimaryKey' => null,
        'isPartitionKey' => null,
        'isForeignKey' => null,
        'extendField' => null,
        'notNull' => null,
        'ordinal' => null,
        'tableModelId' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'tags' => null,
        'secrecyLevels' => null,
        'standRowId' => null,
        'standRowName' => null,
        'qualityInfos' => null,
        'alias' => null,
        'selfDefinedFields' => null,
        'code' => null,
        'relatedLogicAttrId' => null,
        'relatedLogicAttrName' => null,
        'relatedLogicAttrNameEn' => null
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
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述。
    * obsLocation  obs路径，子路径。
    * createBy  创建人。
    * updateBy  更新人。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键。
    * extendField  是否继承的属性。
    * notNull  是否不为空。
    * ordinal  序号。
    * tableModelId  所属关系建模的模型ID，ID字符串。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * secrecyLevels  密级
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * code  逻辑属性编码
    * relatedLogicAttrId  关联逻辑属性ID，ID字符串。
    * relatedLogicAttrName  关联逻辑实体属性中文名称
    * relatedLogicAttrNameEn  关联逻辑实体属性英文名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'obsLocation' => 'obs_location',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'dataType' => 'data_type',
            'domainType' => 'domain_type',
            'dataTypeExtend' => 'data_type_extend',
            'isPrimaryKey' => 'is_primary_key',
            'isPartitionKey' => 'is_partition_key',
            'isForeignKey' => 'is_foreign_key',
            'extendField' => 'extend_field',
            'notNull' => 'not_null',
            'ordinal' => 'ordinal',
            'tableModelId' => 'table_model_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'tags' => 'tags',
            'secrecyLevels' => 'secrecy_levels',
            'standRowId' => 'stand_row_id',
            'standRowName' => 'stand_row_name',
            'qualityInfos' => 'quality_infos',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields',
            'code' => 'code',
            'relatedLogicAttrId' => 'related_logic_attr_id',
            'relatedLogicAttrName' => 'related_logic_attr_name',
            'relatedLogicAttrNameEn' => 'related_logic_attr_name_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述。
    * obsLocation  obs路径，子路径。
    * createBy  创建人。
    * updateBy  更新人。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键。
    * extendField  是否继承的属性。
    * notNull  是否不为空。
    * ordinal  序号。
    * tableModelId  所属关系建模的模型ID，ID字符串。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * secrecyLevels  密级
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * code  逻辑属性编码
    * relatedLogicAttrId  关联逻辑属性ID，ID字符串。
    * relatedLogicAttrName  关联逻辑实体属性中文名称
    * relatedLogicAttrNameEn  关联逻辑实体属性英文名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'obsLocation' => 'setObsLocation',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'dataType' => 'setDataType',
            'domainType' => 'setDomainType',
            'dataTypeExtend' => 'setDataTypeExtend',
            'isPrimaryKey' => 'setIsPrimaryKey',
            'isPartitionKey' => 'setIsPartitionKey',
            'isForeignKey' => 'setIsForeignKey',
            'extendField' => 'setExtendField',
            'notNull' => 'setNotNull',
            'ordinal' => 'setOrdinal',
            'tableModelId' => 'setTableModelId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'tags' => 'setTags',
            'secrecyLevels' => 'setSecrecyLevels',
            'standRowId' => 'setStandRowId',
            'standRowName' => 'setStandRowName',
            'qualityInfos' => 'setQualityInfos',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'code' => 'setCode',
            'relatedLogicAttrId' => 'setRelatedLogicAttrId',
            'relatedLogicAttrName' => 'setRelatedLogicAttrName',
            'relatedLogicAttrNameEn' => 'setRelatedLogicAttrNameEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述。
    * obsLocation  obs路径，子路径。
    * createBy  创建人。
    * updateBy  更新人。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键。
    * extendField  是否继承的属性。
    * notNull  是否不为空。
    * ordinal  序号。
    * tableModelId  所属关系建模的模型ID，ID字符串。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * tags  表标签，只读。
    * secrecyLevels  密级
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * code  逻辑属性编码
    * relatedLogicAttrId  关联逻辑属性ID，ID字符串。
    * relatedLogicAttrName  关联逻辑实体属性中文名称
    * relatedLogicAttrNameEn  关联逻辑实体属性英文名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'obsLocation' => 'getObsLocation',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'dataType' => 'getDataType',
            'domainType' => 'getDomainType',
            'dataTypeExtend' => 'getDataTypeExtend',
            'isPrimaryKey' => 'getIsPrimaryKey',
            'isPartitionKey' => 'getIsPartitionKey',
            'isForeignKey' => 'getIsForeignKey',
            'extendField' => 'getExtendField',
            'notNull' => 'getNotNull',
            'ordinal' => 'getOrdinal',
            'tableModelId' => 'getTableModelId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'tags' => 'getTags',
            'secrecyLevels' => 'getSecrecyLevels',
            'standRowId' => 'getStandRowId',
            'standRowName' => 'getStandRowName',
            'qualityInfos' => 'getQualityInfos',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields',
            'code' => 'getCode',
            'relatedLogicAttrId' => 'getRelatedLogicAttrId',
            'relatedLogicAttrName' => 'getRelatedLogicAttrName',
            'relatedLogicAttrNameEn' => 'getRelatedLogicAttrNameEn'
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
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['dataTypeExtend'] = isset($data['dataTypeExtend']) ? $data['dataTypeExtend'] : null;
        $this->container['isPrimaryKey'] = isset($data['isPrimaryKey']) ? $data['isPrimaryKey'] : null;
        $this->container['isPartitionKey'] = isset($data['isPartitionKey']) ? $data['isPartitionKey'] : null;
        $this->container['isForeignKey'] = isset($data['isForeignKey']) ? $data['isForeignKey'] : null;
        $this->container['extendField'] = isset($data['extendField']) ? $data['extendField'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['tableModelId'] = isset($data['tableModelId']) ? $data['tableModelId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['secrecyLevels'] = isset($data['secrecyLevels']) ? $data['secrecyLevels'] : null;
        $this->container['standRowId'] = isset($data['standRowId']) ? $data['standRowId'] : null;
        $this->container['standRowName'] = isset($data['standRowName']) ? $data['standRowName'] : null;
        $this->container['qualityInfos'] = isset($data['qualityInfos']) ? $data['qualityInfos'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['relatedLogicAttrId'] = isset($data['relatedLogicAttrId']) ? $data['relatedLogicAttrId'] : null;
        $this->container['relatedLogicAttrName'] = isset($data['relatedLogicAttrName']) ? $data['relatedLogicAttrName'] : null;
        $this->container['relatedLogicAttrNameEn'] = isset($data['relatedLogicAttrNameEn']) ? $data['relatedLogicAttrNameEn'] : null;
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
            if ((mb_strlen($this->container['nameEn']) > 600)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 600.";
            }
            if (!preg_match("/^[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['obsLocation']) && (mb_strlen($this->container['obsLocation']) > 600)) {
                $invalidProperties[] = "invalid value for 'obsLocation', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            if (!is_null($this->container['dataTypeExtend']) && (mb_strlen($this->container['dataTypeExtend']) > 50)) {
                $invalidProperties[] = "invalid value for 'dataTypeExtend', the character length must be smaller than or equal to 50.";
            }
        if ($this->container['isPrimaryKey'] === null) {
            $invalidProperties[] = "'isPrimaryKey' can't be null";
        }
            if (!is_null($this->container['standRowName']) && (mb_strlen($this->container['standRowName']) > 600)) {
                $invalidProperties[] = "invalid value for 'standRowName', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 128)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['code']) && !preg_match("/^(?![0-9_])[a-zA-Z0-9_]*$/", $this->container['code'])) {
                $invalidProperties[] = "invalid value for 'code', must be conform to the pattern /^(?![0-9_])[a-zA-Z0-9_]*$/.";
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编码，ID字符串。
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
    * Gets obsLocation
    *  obs路径，子路径。
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
    * @param string|null $obsLocation obs路径，子路径。
    *
    * @return $this
    */
    public function setObsLocation($obsLocation)
    {
        $this->container['obsLocation'] = $obsLocation;
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
    * Gets dataType
    *  字段类型。
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 字段类型。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets domainType
    *  domainType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum|null
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum|null $domainType domainType
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets dataTypeExtend
    *  数据类型扩展字段。
    *
    * @return string|null
    */
    public function getDataTypeExtend()
    {
        return $this->container['dataTypeExtend'];
    }

    /**
    * Sets dataTypeExtend
    *
    * @param string|null $dataTypeExtend 数据类型扩展字段。
    *
    * @return $this
    */
    public function setDataTypeExtend($dataTypeExtend)
    {
        $this->container['dataTypeExtend'] = $dataTypeExtend;
        return $this;
    }

    /**
    * Gets isPrimaryKey
    *  是否主键。
    *
    * @return bool
    */
    public function getIsPrimaryKey()
    {
        return $this->container['isPrimaryKey'];
    }

    /**
    * Sets isPrimaryKey
    *
    * @param bool $isPrimaryKey 是否主键。
    *
    * @return $this
    */
    public function setIsPrimaryKey($isPrimaryKey)
    {
        $this->container['isPrimaryKey'] = $isPrimaryKey;
        return $this;
    }

    /**
    * Gets isPartitionKey
    *  是否分区键。
    *
    * @return bool|null
    */
    public function getIsPartitionKey()
    {
        return $this->container['isPartitionKey'];
    }

    /**
    * Sets isPartitionKey
    *
    * @param bool|null $isPartitionKey 是否分区键。
    *
    * @return $this
    */
    public function setIsPartitionKey($isPartitionKey)
    {
        $this->container['isPartitionKey'] = $isPartitionKey;
        return $this;
    }

    /**
    * Gets isForeignKey
    *  是否外键。
    *
    * @return bool|null
    */
    public function getIsForeignKey()
    {
        return $this->container['isForeignKey'];
    }

    /**
    * Sets isForeignKey
    *
    * @param bool|null $isForeignKey 是否外键。
    *
    * @return $this
    */
    public function setIsForeignKey($isForeignKey)
    {
        $this->container['isForeignKey'] = $isForeignKey;
        return $this;
    }

    /**
    * Gets extendField
    *  是否继承的属性。
    *
    * @return bool|null
    */
    public function getExtendField()
    {
        return $this->container['extendField'];
    }

    /**
    * Sets extendField
    *
    * @param bool|null $extendField 是否继承的属性。
    *
    * @return $this
    */
    public function setExtendField($extendField)
    {
        $this->container['extendField'] = $extendField;
        return $this;
    }

    /**
    * Gets notNull
    *  是否不为空。
    *
    * @return bool|null
    */
    public function getNotNull()
    {
        return $this->container['notNull'];
    }

    /**
    * Sets notNull
    *
    * @param bool|null $notNull 是否不为空。
    *
    * @return $this
    */
    public function setNotNull($notNull)
    {
        $this->container['notNull'] = $notNull;
        return $this;
    }

    /**
    * Gets ordinal
    *  序号。
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 序号。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets tableModelId
    *  所属关系建模的模型ID，ID字符串。
    *
    * @return string|null
    */
    public function getTableModelId()
    {
        return $this->container['tableModelId'];
    }

    /**
    * Sets tableModelId
    *
    * @param string|null $tableModelId 所属关系建模的模型ID，ID字符串。
    *
    * @return $this
    */
    public function setTableModelId($tableModelId)
    {
        $this->container['tableModelId'] = $tableModelId;
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
    * Gets secrecyLevels
    *  密级
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelVO[]|null
    */
    public function getSecrecyLevels()
    {
        return $this->container['secrecyLevels'];
    }

    /**
    * Sets secrecyLevels
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelVO[]|null $secrecyLevels 密级
    *
    * @return $this
    */
    public function setSecrecyLevels($secrecyLevels)
    {
        $this->container['secrecyLevels'] = $secrecyLevels;
        return $this;
    }

    /**
    * Gets standRowId
    *  关联的数据标准的ID，ID字符串。
    *
    * @return string|null
    */
    public function getStandRowId()
    {
        return $this->container['standRowId'];
    }

    /**
    * Sets standRowId
    *
    * @param string|null $standRowId 关联的数据标准的ID，ID字符串。
    *
    * @return $this
    */
    public function setStandRowId($standRowId)
    {
        $this->container['standRowId'] = $standRowId;
        return $this;
    }

    /**
    * Gets standRowName
    *  关联的数据标准名称，只读。
    *
    * @return string|null
    */
    public function getStandRowName()
    {
        return $this->container['standRowName'];
    }

    /**
    * Sets standRowName
    *
    * @param string|null $standRowName 关联的数据标准名称，只读。
    *
    * @return $this
    */
    public function setStandRowName($standRowName)
    {
        $this->container['standRowName'] = $standRowName;
        return $this;
    }

    /**
    * Gets qualityInfos
    *  质量信息，只读。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]|null
    */
    public function getQualityInfos()
    {
        return $this->container['qualityInfos'];
    }

    /**
    * Sets qualityInfos
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]|null $qualityInfos 质量信息，只读。
    *
    * @return $this
    */
    public function setQualityInfos($qualityInfos)
    {
        $this->container['qualityInfos'] = $qualityInfos;
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
    * Gets code
    *  逻辑属性编码
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
    * @param string|null $code 逻辑属性编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets relatedLogicAttrId
    *  关联逻辑属性ID，ID字符串。
    *
    * @return string|null
    */
    public function getRelatedLogicAttrId()
    {
        return $this->container['relatedLogicAttrId'];
    }

    /**
    * Sets relatedLogicAttrId
    *
    * @param string|null $relatedLogicAttrId 关联逻辑属性ID，ID字符串。
    *
    * @return $this
    */
    public function setRelatedLogicAttrId($relatedLogicAttrId)
    {
        $this->container['relatedLogicAttrId'] = $relatedLogicAttrId;
        return $this;
    }

    /**
    * Gets relatedLogicAttrName
    *  关联逻辑实体属性中文名称
    *
    * @return string|null
    */
    public function getRelatedLogicAttrName()
    {
        return $this->container['relatedLogicAttrName'];
    }

    /**
    * Sets relatedLogicAttrName
    *
    * @param string|null $relatedLogicAttrName 关联逻辑实体属性中文名称
    *
    * @return $this
    */
    public function setRelatedLogicAttrName($relatedLogicAttrName)
    {
        $this->container['relatedLogicAttrName'] = $relatedLogicAttrName;
        return $this;
    }

    /**
    * Gets relatedLogicAttrNameEn
    *  关联逻辑实体属性英文名称
    *
    * @return string|null
    */
    public function getRelatedLogicAttrNameEn()
    {
        return $this->container['relatedLogicAttrNameEn'];
    }

    /**
    * Sets relatedLogicAttrNameEn
    *
    * @param string|null $relatedLogicAttrNameEn 关联逻辑实体属性英文名称
    *
    * @return $this
    */
    public function setRelatedLogicAttrNameEn($relatedLogicAttrNameEn)
    {
        $this->container['relatedLogicAttrNameEn'] = $relatedLogicAttrNameEn;
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

