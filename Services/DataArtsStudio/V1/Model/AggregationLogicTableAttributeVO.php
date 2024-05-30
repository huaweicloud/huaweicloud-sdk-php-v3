<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregationLogicTableAttributeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregationLogicTableAttributeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * aggregationLogicTableId  所属汇总表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名。
    * nameCh  业务属性。
    * attributeType  attributeType
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * secrecyLevels  密级
    * notNull  是否不为空。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * refId  属性关联对象的id
    * refNameCh  属性关联对象的中文名
    * refNameEn  属性关联对象的英文名
    * standRowId  关联的数据标准的ID，填写String类型替代Long类型。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'aggregationLogicTableId' => 'string',
            'ordinal' => 'int',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'attributeType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'isPrimaryKey' => 'bool',
            'isPartitionKey' => 'bool',
            'secrecyLevels' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecrecyLevelVO[]',
            'notNull' => 'bool',
            'description' => 'string',
            'dataType' => 'string',
            'domainType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum',
            'dataTypeExtend' => 'string',
            'refId' => 'string',
            'refNameCh' => 'string',
            'refNameEn' => 'string',
            'standRowId' => 'string',
            'standRowName' => 'string',
            'qualityInfos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityInfoVO[]',
            'alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * aggregationLogicTableId  所属汇总表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名。
    * nameCh  业务属性。
    * attributeType  attributeType
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * secrecyLevels  密级
    * notNull  是否不为空。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * refId  属性关联对象的id
    * refNameCh  属性关联对象的中文名
    * refNameEn  属性关联对象的英文名
    * standRowId  关联的数据标准的ID，填写String类型替代Long类型。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'aggregationLogicTableId' => null,
        'ordinal' => null,
        'nameEn' => null,
        'nameCh' => null,
        'attributeType' => null,
        'isPrimaryKey' => null,
        'isPartitionKey' => null,
        'secrecyLevels' => null,
        'notNull' => null,
        'description' => null,
        'dataType' => null,
        'domainType' => null,
        'dataTypeExtend' => null,
        'refId' => null,
        'refNameCh' => null,
        'refNameEn' => null,
        'standRowId' => null,
        'standRowName' => null,
        'qualityInfos' => null,
        'alias' => null
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
    * aggregationLogicTableId  所属汇总表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名。
    * nameCh  业务属性。
    * attributeType  attributeType
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * secrecyLevels  密级
    * notNull  是否不为空。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * refId  属性关联对象的id
    * refNameCh  属性关联对象的中文名
    * refNameEn  属性关联对象的英文名
    * standRowId  关联的数据标准的ID，填写String类型替代Long类型。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'aggregationLogicTableId' => 'aggregation_logic_table_id',
            'ordinal' => 'ordinal',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'attributeType' => 'attribute_type',
            'isPrimaryKey' => 'is_primary_key',
            'isPartitionKey' => 'is_partition_key',
            'secrecyLevels' => 'secrecy_levels',
            'notNull' => 'not_null',
            'description' => 'description',
            'dataType' => 'data_type',
            'domainType' => 'domain_type',
            'dataTypeExtend' => 'data_type_extend',
            'refId' => 'ref_id',
            'refNameCh' => 'ref_name_ch',
            'refNameEn' => 'ref_name_en',
            'standRowId' => 'stand_row_id',
            'standRowName' => 'stand_row_name',
            'qualityInfos' => 'quality_infos',
            'alias' => 'alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * aggregationLogicTableId  所属汇总表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名。
    * nameCh  业务属性。
    * attributeType  attributeType
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * secrecyLevels  密级
    * notNull  是否不为空。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * refId  属性关联对象的id
    * refNameCh  属性关联对象的中文名
    * refNameEn  属性关联对象的英文名
    * standRowId  关联的数据标准的ID，填写String类型替代Long类型。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'aggregationLogicTableId' => 'setAggregationLogicTableId',
            'ordinal' => 'setOrdinal',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'attributeType' => 'setAttributeType',
            'isPrimaryKey' => 'setIsPrimaryKey',
            'isPartitionKey' => 'setIsPartitionKey',
            'secrecyLevels' => 'setSecrecyLevels',
            'notNull' => 'setNotNull',
            'description' => 'setDescription',
            'dataType' => 'setDataType',
            'domainType' => 'setDomainType',
            'dataTypeExtend' => 'setDataTypeExtend',
            'refId' => 'setRefId',
            'refNameCh' => 'setRefNameCh',
            'refNameEn' => 'setRefNameEn',
            'standRowId' => 'setStandRowId',
            'standRowName' => 'setStandRowName',
            'qualityInfos' => 'setQualityInfos',
            'alias' => 'setAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * aggregationLogicTableId  所属汇总表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名。
    * nameCh  业务属性。
    * attributeType  attributeType
    * isPrimaryKey  是否主键。
    * isPartitionKey  是否分区键。
    * secrecyLevels  密级
    * notNull  是否不为空。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * refId  属性关联对象的id
    * refNameCh  属性关联对象的中文名
    * refNameEn  属性关联对象的英文名
    * standRowId  关联的数据标准的ID，填写String类型替代Long类型。
    * standRowName  关联的数据标准名称，只读。
    * qualityInfos  质量信息，只读。
    * alias  别名。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'aggregationLogicTableId' => 'getAggregationLogicTableId',
            'ordinal' => 'getOrdinal',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'attributeType' => 'getAttributeType',
            'isPrimaryKey' => 'getIsPrimaryKey',
            'isPartitionKey' => 'getIsPartitionKey',
            'secrecyLevels' => 'getSecrecyLevels',
            'notNull' => 'getNotNull',
            'description' => 'getDescription',
            'dataType' => 'getDataType',
            'domainType' => 'getDomainType',
            'dataTypeExtend' => 'getDataTypeExtend',
            'refId' => 'getRefId',
            'refNameCh' => 'getRefNameCh',
            'refNameEn' => 'getRefNameEn',
            'standRowId' => 'getStandRowId',
            'standRowName' => 'getStandRowName',
            'qualityInfos' => 'getQualityInfos',
            'alias' => 'getAlias'
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
        $this->container['aggregationLogicTableId'] = isset($data['aggregationLogicTableId']) ? $data['aggregationLogicTableId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['attributeType'] = isset($data['attributeType']) ? $data['attributeType'] : null;
        $this->container['isPrimaryKey'] = isset($data['isPrimaryKey']) ? $data['isPrimaryKey'] : null;
        $this->container['isPartitionKey'] = isset($data['isPartitionKey']) ? $data['isPartitionKey'] : null;
        $this->container['secrecyLevels'] = isset($data['secrecyLevels']) ? $data['secrecyLevels'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['dataTypeExtend'] = isset($data['dataTypeExtend']) ? $data['dataTypeExtend'] : null;
        $this->container['refId'] = isset($data['refId']) ? $data['refId'] : null;
        $this->container['refNameCh'] = isset($data['refNameCh']) ? $data['refNameCh'] : null;
        $this->container['refNameEn'] = isset($data['refNameEn']) ? $data['refNameEn'] : null;
        $this->container['standRowId'] = isset($data['standRowId']) ? $data['standRowId'] : null;
        $this->container['standRowName'] = isset($data['standRowName']) ? $data['standRowName'] : null;
        $this->container['qualityInfos'] = isset($data['qualityInfos']) ? $data['qualityInfos'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
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
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\,\\.]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z0-9\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\,\\.]*$/.";
            }
        if ($this->container['isPrimaryKey'] === null) {
            $invalidProperties[] = "'isPrimaryKey' can't be null";
        }
        if ($this->container['isPartitionKey'] === null) {
            $invalidProperties[] = "'isPartitionKey' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
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
    * Gets aggregationLogicTableId
    *  所属汇总表ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getAggregationLogicTableId()
    {
        return $this->container['aggregationLogicTableId'];
    }

    /**
    * Sets aggregationLogicTableId
    *
    * @param string|null $aggregationLogicTableId 所属汇总表ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setAggregationLogicTableId($aggregationLogicTableId)
    {
        $this->container['aggregationLogicTableId'] = $aggregationLogicTableId;
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
    * Gets refId
    *  属性关联对象的id
    *
    * @return string|null
    */
    public function getRefId()
    {
        return $this->container['refId'];
    }

    /**
    * Sets refId
    *
    * @param string|null $refId 属性关联对象的id
    *
    * @return $this
    */
    public function setRefId($refId)
    {
        $this->container['refId'] = $refId;
        return $this;
    }

    /**
    * Gets refNameCh
    *  属性关联对象的中文名
    *
    * @return string|null
    */
    public function getRefNameCh()
    {
        return $this->container['refNameCh'];
    }

    /**
    * Sets refNameCh
    *
    * @param string|null $refNameCh 属性关联对象的中文名
    *
    * @return $this
    */
    public function setRefNameCh($refNameCh)
    {
        $this->container['refNameCh'] = $refNameCh;
        return $this;
    }

    /**
    * Gets refNameEn
    *  属性关联对象的英文名
    *
    * @return string|null
    */
    public function getRefNameEn()
    {
        return $this->container['refNameEn'];
    }

    /**
    * Sets refNameEn
    *
    * @param string|null $refNameEn 属性关联对象的英文名
    *
    * @return $this
    */
    public function setRefNameEn($refNameEn)
    {
        $this->container['refNameEn'] = $refNameEn;
        return $this;
    }

    /**
    * Gets standRowId
    *  关联的数据标准的ID，填写String类型替代Long类型。
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
    * @param string|null $standRowId 关联的数据标准的ID，填写String类型替代Long类型。
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

