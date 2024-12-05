<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionLogicTableAttributeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionLogicTableAttributeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  维度表ID，ID字符串。
    * dimensionLogicTableId  所属维表ID。
    * ordinal  序号
    * dimensionAttributeId  维度属性ID，ID字符串。
    * nameEn  字段名，只读。
    * nameCh  业务属性，只读。
    * description  描述，只读。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键，只读。
    * isBizPrimary  是否业务主键。
    * isPartitionKey  是否主键分区，只读。
    * notNull  是否不为空。
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * secrecyLevels  密级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dimensionLogicTableId' => 'string',
            'ordinal' => 'int',
            'dimensionAttributeId' => 'string',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'dataType' => 'string',
            'domainType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum',
            'dataTypeExtend' => 'string',
            'isPrimaryKey' => 'bool',
            'isBizPrimary' => 'bool',
            'isPartitionKey' => 'bool',
            'notNull' => 'bool',
            'standRowId' => 'string',
            'standRowName' => 'string',
            'qualityInfos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]',
            'alias' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]',
            'secrecyLevels' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  维度表ID，ID字符串。
    * dimensionLogicTableId  所属维表ID。
    * ordinal  序号
    * dimensionAttributeId  维度属性ID，ID字符串。
    * nameEn  字段名，只读。
    * nameCh  业务属性，只读。
    * description  描述，只读。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键，只读。
    * isBizPrimary  是否业务主键。
    * isPartitionKey  是否主键分区，只读。
    * notNull  是否不为空。
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * secrecyLevels  密级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dimensionLogicTableId' => null,
        'ordinal' => null,
        'dimensionAttributeId' => null,
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'dataType' => null,
        'domainType' => null,
        'dataTypeExtend' => null,
        'isPrimaryKey' => null,
        'isBizPrimary' => null,
        'isPartitionKey' => null,
        'notNull' => null,
        'standRowId' => null,
        'standRowName' => null,
        'qualityInfos' => null,
        'alias' => null,
        'selfDefinedFields' => null,
        'secrecyLevels' => null
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
    * id  维度表ID，ID字符串。
    * dimensionLogicTableId  所属维表ID。
    * ordinal  序号
    * dimensionAttributeId  维度属性ID，ID字符串。
    * nameEn  字段名，只读。
    * nameCh  业务属性，只读。
    * description  描述，只读。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键，只读。
    * isBizPrimary  是否业务主键。
    * isPartitionKey  是否主键分区，只读。
    * notNull  是否不为空。
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * secrecyLevels  密级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dimensionLogicTableId' => 'dimension_logic_table_id',
            'ordinal' => 'ordinal',
            'dimensionAttributeId' => 'dimension_attribute_id',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'dataType' => 'data_type',
            'domainType' => 'domain_type',
            'dataTypeExtend' => 'data_type_extend',
            'isPrimaryKey' => 'is_primary_key',
            'isBizPrimary' => 'is_biz_primary',
            'isPartitionKey' => 'is_partition_key',
            'notNull' => 'not_null',
            'standRowId' => 'stand_row_id',
            'standRowName' => 'stand_row_name',
            'qualityInfos' => 'quality_infos',
            'alias' => 'alias',
            'selfDefinedFields' => 'self_defined_fields',
            'secrecyLevels' => 'secrecy_levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  维度表ID，ID字符串。
    * dimensionLogicTableId  所属维表ID。
    * ordinal  序号
    * dimensionAttributeId  维度属性ID，ID字符串。
    * nameEn  字段名，只读。
    * nameCh  业务属性，只读。
    * description  描述，只读。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键，只读。
    * isBizPrimary  是否业务主键。
    * isPartitionKey  是否主键分区，只读。
    * notNull  是否不为空。
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * secrecyLevels  密级
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dimensionLogicTableId' => 'setDimensionLogicTableId',
            'ordinal' => 'setOrdinal',
            'dimensionAttributeId' => 'setDimensionAttributeId',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'dataType' => 'setDataType',
            'domainType' => 'setDomainType',
            'dataTypeExtend' => 'setDataTypeExtend',
            'isPrimaryKey' => 'setIsPrimaryKey',
            'isBizPrimary' => 'setIsBizPrimary',
            'isPartitionKey' => 'setIsPartitionKey',
            'notNull' => 'setNotNull',
            'standRowId' => 'setStandRowId',
            'standRowName' => 'setStandRowName',
            'qualityInfos' => 'setQualityInfos',
            'alias' => 'setAlias',
            'selfDefinedFields' => 'setSelfDefinedFields',
            'secrecyLevels' => 'setSecrecyLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  维度表ID，ID字符串。
    * dimensionLogicTableId  所属维表ID。
    * ordinal  序号
    * dimensionAttributeId  维度属性ID，ID字符串。
    * nameEn  字段名，只读。
    * nameCh  业务属性，只读。
    * description  描述，只读。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isPrimaryKey  是否主键，只读。
    * isBizPrimary  是否业务主键。
    * isPartitionKey  是否主键分区，只读。
    * notNull  是否不为空。
    * standRowId  关联的数据标准的ID，ID字符串。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    * selfDefinedFields  自定义项。
    * secrecyLevels  密级
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dimensionLogicTableId' => 'getDimensionLogicTableId',
            'ordinal' => 'getOrdinal',
            'dimensionAttributeId' => 'getDimensionAttributeId',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'dataType' => 'getDataType',
            'domainType' => 'getDomainType',
            'dataTypeExtend' => 'getDataTypeExtend',
            'isPrimaryKey' => 'getIsPrimaryKey',
            'isBizPrimary' => 'getIsBizPrimary',
            'isPartitionKey' => 'getIsPartitionKey',
            'notNull' => 'getNotNull',
            'standRowId' => 'getStandRowId',
            'standRowName' => 'getStandRowName',
            'qualityInfos' => 'getQualityInfos',
            'alias' => 'getAlias',
            'selfDefinedFields' => 'getSelfDefinedFields',
            'secrecyLevels' => 'getSecrecyLevels'
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
        $this->container['dimensionLogicTableId'] = isset($data['dimensionLogicTableId']) ? $data['dimensionLogicTableId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['dimensionAttributeId'] = isset($data['dimensionAttributeId']) ? $data['dimensionAttributeId'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['dataTypeExtend'] = isset($data['dataTypeExtend']) ? $data['dataTypeExtend'] : null;
        $this->container['isPrimaryKey'] = isset($data['isPrimaryKey']) ? $data['isPrimaryKey'] : null;
        $this->container['isBizPrimary'] = isset($data['isBizPrimary']) ? $data['isBizPrimary'] : null;
        $this->container['isPartitionKey'] = isset($data['isPartitionKey']) ? $data['isPartitionKey'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['standRowId'] = isset($data['standRowId']) ? $data['standRowId'] : null;
        $this->container['standRowName'] = isset($data['standRowName']) ? $data['standRowName'] : null;
        $this->container['qualityInfos'] = isset($data['qualityInfos']) ? $data['qualityInfos'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
        $this->container['secrecyLevels'] = isset($data['secrecyLevels']) ? $data['secrecyLevels'] : null;
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
        if ($this->container['dimensionAttributeId'] === null) {
            $invalidProperties[] = "'dimensionAttributeId' can't be null";
        }
            if (!is_null($this->container['dataTypeExtend']) && (mb_strlen($this->container['dataTypeExtend']) > 50)) {
                $invalidProperties[] = "invalid value for 'dataTypeExtend', the character length must be smaller than or equal to 50.";
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
    *  维度表ID，ID字符串。
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
    * @param string|null $id 维度表ID，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dimensionLogicTableId
    *  所属维表ID。
    *
    * @return string|null
    */
    public function getDimensionLogicTableId()
    {
        return $this->container['dimensionLogicTableId'];
    }

    /**
    * Sets dimensionLogicTableId
    *
    * @param string|null $dimensionLogicTableId 所属维表ID。
    *
    * @return $this
    */
    public function setDimensionLogicTableId($dimensionLogicTableId)
    {
        $this->container['dimensionLogicTableId'] = $dimensionLogicTableId;
        return $this;
    }

    /**
    * Gets ordinal
    *  序号
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
    * @param int $ordinal 序号
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets dimensionAttributeId
    *  维度属性ID，ID字符串。
    *
    * @return string
    */
    public function getDimensionAttributeId()
    {
        return $this->container['dimensionAttributeId'];
    }

    /**
    * Sets dimensionAttributeId
    *
    * @param string $dimensionAttributeId 维度属性ID，ID字符串。
    *
    * @return $this
    */
    public function setDimensionAttributeId($dimensionAttributeId)
    {
        $this->container['dimensionAttributeId'] = $dimensionAttributeId;
        return $this;
    }

    /**
    * Gets nameEn
    *  字段名，只读。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 字段名，只读。
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
    *  业务属性，只读。
    *
    * @return string|null
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string|null $nameCh 业务属性，只读。
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
    *  描述，只读。
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
    * @param string|null $description 描述，只读。
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
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 字段类型。
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
    *  是否主键，只读。
    *
    * @return bool|null
    */
    public function getIsPrimaryKey()
    {
        return $this->container['isPrimaryKey'];
    }

    /**
    * Sets isPrimaryKey
    *
    * @param bool|null $isPrimaryKey 是否主键，只读。
    *
    * @return $this
    */
    public function setIsPrimaryKey($isPrimaryKey)
    {
        $this->container['isPrimaryKey'] = $isPrimaryKey;
        return $this;
    }

    /**
    * Gets isBizPrimary
    *  是否业务主键。
    *
    * @return bool|null
    */
    public function getIsBizPrimary()
    {
        return $this->container['isBizPrimary'];
    }

    /**
    * Sets isBizPrimary
    *
    * @param bool|null $isBizPrimary 是否业务主键。
    *
    * @return $this
    */
    public function setIsBizPrimary($isBizPrimary)
    {
        $this->container['isBizPrimary'] = $isBizPrimary;
        return $this;
    }

    /**
    * Gets isPartitionKey
    *  是否主键分区，只读。
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
    * @param bool|null $isPartitionKey 是否主键分区，只读。
    *
    * @return $this
    */
    public function setIsPartitionKey($isPartitionKey)
    {
        $this->container['isPartitionKey'] = $isPartitionKey;
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

