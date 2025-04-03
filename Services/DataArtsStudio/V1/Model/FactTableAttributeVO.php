<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FactTableAttributeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FactTableAttributeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * factLogicTableId  所属事实表ID，只读，ID字符串。
    * ordinal  序号。
    * dimensionId  维度ID，ID字符串。
    * role  维度角色。
    * dimension  dimension
    * dimensionAttrId  维度属性ID，ID字符串。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键，只读。
    * secrecyLevels  密级
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * nameEn  英文名。
    * nameCh  中文名。
    * notNull  是否不为空。
    * attributeType  attributeType
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'factLogicTableId' => 'string',
            'ordinal' => 'int',
            'dimensionId' => 'string',
            'role' => 'string',
            'dimension' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionVO',
            'dimensionAttrId' => 'string',
            'isPrimaryKey' => 'bool',
            'isPartitionKey' => 'bool',
            'isForeignKey' => 'bool',
            'secrecyLevels' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelRecordVO[]',
            'description' => 'string',
            'dataType' => 'string',
            'domainType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum',
            'dataTypeExtend' => 'string',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'notNull' => 'bool',
            'attributeType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'standRowId' => 'string',
            'standRowName' => 'string',
            'qualityInfos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * factLogicTableId  所属事实表ID，只读，ID字符串。
    * ordinal  序号。
    * dimensionId  维度ID，ID字符串。
    * role  维度角色。
    * dimension  dimension
    * dimensionAttrId  维度属性ID，ID字符串。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键，只读。
    * secrecyLevels  密级
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * nameEn  英文名。
    * nameCh  中文名。
    * notNull  是否不为空。
    * attributeType  attributeType
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'factLogicTableId' => null,
        'ordinal' => null,
        'dimensionId' => null,
        'role' => null,
        'dimension' => null,
        'dimensionAttrId' => null,
        'isPrimaryKey' => null,
        'isPartitionKey' => null,
        'isForeignKey' => null,
        'secrecyLevels' => null,
        'description' => null,
        'dataType' => null,
        'domainType' => null,
        'dataTypeExtend' => null,
        'nameEn' => null,
        'nameCh' => null,
        'notNull' => null,
        'attributeType' => null,
        'standRowId' => null,
        'standRowName' => null,
        'qualityInfos' => null,
        'alias' => null,
        'selfDefinedFields' => null
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
    * factLogicTableId  所属事实表ID，只读，ID字符串。
    * ordinal  序号。
    * dimensionId  维度ID，ID字符串。
    * role  维度角色。
    * dimension  dimension
    * dimensionAttrId  维度属性ID，ID字符串。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键，只读。
    * secrecyLevels  密级
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * nameEn  英文名。
    * nameCh  中文名。
    * notNull  是否不为空。
    * attributeType  attributeType
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'factLogicTableId' => 'fact_logic_table_id',
            'ordinal' => 'ordinal',
            'dimensionId' => 'dimension_id',
            'role' => 'role',
            'dimension' => 'dimension',
            'dimensionAttrId' => 'dimension_attr_id',
            'isPrimaryKey' => 'is_primary_key',
            'isPartitionKey' => 'is_partition_key',
            'isForeignKey' => 'is_foreign_key',
            'secrecyLevels' => 'secrecy_levels',
            'description' => 'description',
            'dataType' => 'data_type',
            'domainType' => 'domain_type',
            'dataTypeExtend' => 'data_type_extend',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'notNull' => 'not_null',
            'attributeType' => 'attribute_type',
            'standRowId' => 'stand_row_id',
            'standRowName' => 'stand_row_name',
            'qualityInfos' => 'quality_infos',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * factLogicTableId  所属事实表ID，只读，ID字符串。
    * ordinal  序号。
    * dimensionId  维度ID，ID字符串。
    * role  维度角色。
    * dimension  dimension
    * dimensionAttrId  维度属性ID，ID字符串。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键，只读。
    * secrecyLevels  密级
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * nameEn  英文名。
    * nameCh  中文名。
    * notNull  是否不为空。
    * attributeType  attributeType
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'factLogicTableId' => 'setFactLogicTableId',
            'ordinal' => 'setOrdinal',
            'dimensionId' => 'setDimensionId',
            'role' => 'setRole',
            'dimension' => 'setDimension',
            'dimensionAttrId' => 'setDimensionAttrId',
            'isPrimaryKey' => 'setIsPrimaryKey',
            'isPartitionKey' => 'setIsPartitionKey',
            'isForeignKey' => 'setIsForeignKey',
            'secrecyLevels' => 'setSecrecyLevels',
            'description' => 'setDescription',
            'dataType' => 'setDataType',
            'domainType' => 'setDomainType',
            'dataTypeExtend' => 'setDataTypeExtend',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'notNull' => 'setNotNull',
            'attributeType' => 'setAttributeType',
            'standRowId' => 'setStandRowId',
            'standRowName' => 'setStandRowName',
            'qualityInfos' => 'setQualityInfos',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * factLogicTableId  所属事实表ID，只读，ID字符串。
    * ordinal  序号。
    * dimensionId  维度ID，ID字符串。
    * role  维度角色。
    * dimension  dimension
    * dimensionAttrId  维度属性ID，ID字符串。
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * isForeignKey  是否外键，只读。
    * secrecyLevels  密级
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * nameEn  英文名。
    * nameCh  中文名。
    * notNull  是否不为空。
    * attributeType  attributeType
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'factLogicTableId' => 'getFactLogicTableId',
            'ordinal' => 'getOrdinal',
            'dimensionId' => 'getDimensionId',
            'role' => 'getRole',
            'dimension' => 'getDimension',
            'dimensionAttrId' => 'getDimensionAttrId',
            'isPrimaryKey' => 'getIsPrimaryKey',
            'isPartitionKey' => 'getIsPartitionKey',
            'isForeignKey' => 'getIsForeignKey',
            'secrecyLevels' => 'getSecrecyLevels',
            'description' => 'getDescription',
            'dataType' => 'getDataType',
            'domainType' => 'getDomainType',
            'dataTypeExtend' => 'getDataTypeExtend',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'notNull' => 'getNotNull',
            'attributeType' => 'getAttributeType',
            'standRowId' => 'getStandRowId',
            'standRowName' => 'getStandRowName',
            'qualityInfos' => 'getQualityInfos',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields'
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
        $this->container['factLogicTableId'] = isset($data['factLogicTableId']) ? $data['factLogicTableId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['dimensionId'] = isset($data['dimensionId']) ? $data['dimensionId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['dimensionAttrId'] = isset($data['dimensionAttrId']) ? $data['dimensionAttrId'] : null;
        $this->container['isPrimaryKey'] = isset($data['isPrimaryKey']) ? $data['isPrimaryKey'] : null;
        $this->container['isPartitionKey'] = isset($data['isPartitionKey']) ? $data['isPartitionKey'] : null;
        $this->container['isForeignKey'] = isset($data['isForeignKey']) ? $data['isForeignKey'] : null;
        $this->container['secrecyLevels'] = isset($data['secrecyLevels']) ? $data['secrecyLevels'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['dataTypeExtend'] = isset($data['dataTypeExtend']) ? $data['dataTypeExtend'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['attributeType'] = isset($data['attributeType']) ? $data['attributeType'] : null;
        $this->container['standRowId'] = isset($data['standRowId']) ? $data['standRowId'] : null;
        $this->container['standRowName'] = isset($data['standRowName']) ? $data['standRowName'] : null;
        $this->container['qualityInfos'] = isset($data['qualityInfos']) ? $data['qualityInfos'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ordinal'] === null) {
            $invalidProperties[] = "'ordinal' can't be null";
        }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) > 200)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 200.";
            }
        if ($this->container['isPrimaryKey'] === null) {
            $invalidProperties[] = "'isPrimaryKey' can't be null";
        }
        if ($this->container['isPartitionKey'] === null) {
            $invalidProperties[] = "'isPartitionKey' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            if (!is_null($this->container['dataTypeExtend']) && (mb_strlen($this->container['dataTypeExtend']) > 50)) {
                $invalidProperties[] = "invalid value for 'dataTypeExtend', the character length must be smaller than or equal to 50.";
            }
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 600)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 600.";
            }
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9_]*$/.";
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
            if (!is_null($this->container['standRowName']) && (mb_strlen($this->container['standRowName']) > 600)) {
                $invalidProperties[] = "invalid value for 'standRowName', the character length must be smaller than or equal to 600.";
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
    * Gets factLogicTableId
    *  所属事实表ID，只读，ID字符串。
    *
    * @return string|null
    */
    public function getFactLogicTableId()
    {
        return $this->container['factLogicTableId'];
    }

    /**
    * Sets factLogicTableId
    *
    * @param string|null $factLogicTableId 所属事实表ID，只读，ID字符串。
    *
    * @return $this
    */
    public function setFactLogicTableId($factLogicTableId)
    {
        $this->container['factLogicTableId'] = $factLogicTableId;
        return $this;
    }

    /**
    * Gets ordinal
    *  序号。
    *
    * @return int
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int $ordinal 序号。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets dimensionId
    *  维度ID，ID字符串。
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
    * @param string|null $dimensionId 维度ID，ID字符串。
    *
    * @return $this
    */
    public function setDimensionId($dimensionId)
    {
        $this->container['dimensionId'] = $dimensionId;
        return $this;
    }

    /**
    * Gets role
    *  维度角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 维度角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets dimension
    *  dimension
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionVO|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionVO|null $dimension dimension
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets dimensionAttrId
    *  维度属性ID，ID字符串。
    *
    * @return string|null
    */
    public function getDimensionAttrId()
    {
        return $this->container['dimensionAttrId'];
    }

    /**
    * Sets dimensionAttrId
    *
    * @param string|null $dimensionAttrId 维度属性ID，ID字符串。
    *
    * @return $this
    */
    public function setDimensionAttrId($dimensionAttrId)
    {
        $this->container['dimensionAttrId'] = $dimensionAttrId;
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
    * @return bool
    */
    public function getIsPartitionKey()
    {
        return $this->container['isPartitionKey'];
    }

    /**
    * Sets isPartitionKey
    *
    * @param bool $isPartitionKey 是否分区键。
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
    *  是否外键，只读。
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
    * @param bool|null $isForeignKey 是否外键，只读。
    *
    * @return $this
    */
    public function setIsForeignKey($isForeignKey)
    {
        $this->container['isForeignKey'] = $isForeignKey;
        return $this;
    }

    /**
    * Gets secrecyLevels
    *  密级
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelRecordVO[]|null
    */
    public function getSecrecyLevels()
    {
        return $this->container['secrecyLevels'];
    }

    /**
    * Sets secrecyLevels
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelRecordVO[]|null $secrecyLevels 密级
    *
    * @return $this
    */
    public function setSecrecyLevels($secrecyLevels)
    {
        $this->container['secrecyLevels'] = $secrecyLevels;
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
    * Gets nameEn
    *  英文名。
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
    * @param string $nameEn 英文名。
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
    *  中文名。
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
    * @param string $nameCh 中文名。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
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
    * Gets attributeType
    *  attributeType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getAttributeType()
    {
        return $this->container['attributeType'];
    }

    /**
    * Sets attributeType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $attributeType attributeType
    *
    * @return $this
    */
    public function setAttributeType($attributeType)
    {
        $this->container['attributeType'] = $attributeType;
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

