<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CodeTableFieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CodeTableFieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  码表字段ID，填写String类型替代Long类型。
    * codeTableId  所属码表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名，英文。
    * nameCh  字段名，中文。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isUniqueKey  是否唯一。
    * codeTableFieldValues  码表属性值。
    * countFieldValues  码表属性值总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'codeTableId' => 'string',
            'ordinal' => 'int',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'dataType' => 'string',
            'domainType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataTypeDomainEnum',
            'dataTypeExtend' => 'string',
            'isUniqueKey' => 'bool',
            'codeTableFieldValues' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldValueVO[]',
            'countFieldValues' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  码表字段ID，填写String类型替代Long类型。
    * codeTableId  所属码表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名，英文。
    * nameCh  字段名，中文。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isUniqueKey  是否唯一。
    * codeTableFieldValues  码表属性值。
    * countFieldValues  码表属性值总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'codeTableId' => null,
        'ordinal' => null,
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'dataType' => null,
        'domainType' => null,
        'dataTypeExtend' => null,
        'isUniqueKey' => null,
        'codeTableFieldValues' => null,
        'countFieldValues' => 'int32'
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
    * id  码表字段ID，填写String类型替代Long类型。
    * codeTableId  所属码表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名，英文。
    * nameCh  字段名，中文。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isUniqueKey  是否唯一。
    * codeTableFieldValues  码表属性值。
    * countFieldValues  码表属性值总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'codeTableId' => 'code_table_id',
            'ordinal' => 'ordinal',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'dataType' => 'data_type',
            'domainType' => 'domain_type',
            'dataTypeExtend' => 'data_type_extend',
            'isUniqueKey' => 'is_unique_key',
            'codeTableFieldValues' => 'code_table_field_values',
            'countFieldValues' => 'count_field_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  码表字段ID，填写String类型替代Long类型。
    * codeTableId  所属码表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名，英文。
    * nameCh  字段名，中文。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isUniqueKey  是否唯一。
    * codeTableFieldValues  码表属性值。
    * countFieldValues  码表属性值总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'codeTableId' => 'setCodeTableId',
            'ordinal' => 'setOrdinal',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'dataType' => 'setDataType',
            'domainType' => 'setDomainType',
            'dataTypeExtend' => 'setDataTypeExtend',
            'isUniqueKey' => 'setIsUniqueKey',
            'codeTableFieldValues' => 'setCodeTableFieldValues',
            'countFieldValues' => 'setCountFieldValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  码表字段ID，填写String类型替代Long类型。
    * codeTableId  所属码表ID，填写String类型替代Long类型。
    * ordinal  序号。
    * nameEn  字段名，英文。
    * nameCh  字段名，中文。
    * description  描述。
    * dataType  字段类型。
    * domainType  domainType
    * dataTypeExtend  数据类型扩展字段。
    * isUniqueKey  是否唯一。
    * codeTableFieldValues  码表属性值。
    * countFieldValues  码表属性值总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'codeTableId' => 'getCodeTableId',
            'ordinal' => 'getOrdinal',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'dataType' => 'getDataType',
            'domainType' => 'getDomainType',
            'dataTypeExtend' => 'getDataTypeExtend',
            'isUniqueKey' => 'getIsUniqueKey',
            'codeTableFieldValues' => 'getCodeTableFieldValues',
            'countFieldValues' => 'getCountFieldValues'
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
        $this->container['codeTableId'] = isset($data['codeTableId']) ? $data['codeTableId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['dataTypeExtend'] = isset($data['dataTypeExtend']) ? $data['dataTypeExtend'] : null;
        $this->container['isUniqueKey'] = isset($data['isUniqueKey']) ? $data['isUniqueKey'] : null;
        $this->container['codeTableFieldValues'] = isset($data['codeTableFieldValues']) ? $data['codeTableFieldValues'] : null;
        $this->container['countFieldValues'] = isset($data['countFieldValues']) ? $data['countFieldValues'] : null;
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
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 600)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 600.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            if (!is_null($this->container['dataTypeExtend']) && (mb_strlen($this->container['dataTypeExtend']) > 50)) {
                $invalidProperties[] = "invalid value for 'dataTypeExtend', the character length must be smaller than or equal to 50.";
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
    *  码表字段ID，填写String类型替代Long类型。
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
    * @param string|null $id 码表字段ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets codeTableId
    *  所属码表ID，填写String类型替代Long类型。
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
    * @param string|null $codeTableId 所属码表ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setCodeTableId($codeTableId)
    {
        $this->container['codeTableId'] = $codeTableId;
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
    * Gets nameEn
    *  字段名，英文。
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
    * @param string $nameEn 字段名，英文。
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
    *  字段名，中文。
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
    * @param string $nameCh 字段名，中文。
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
    * Gets isUniqueKey
    *  是否唯一。
    *
    * @return bool|null
    */
    public function getIsUniqueKey()
    {
        return $this->container['isUniqueKey'];
    }

    /**
    * Sets isUniqueKey
    *
    * @param bool|null $isUniqueKey 是否唯一。
    *
    * @return $this
    */
    public function setIsUniqueKey($isUniqueKey)
    {
        $this->container['isUniqueKey'] = $isUniqueKey;
        return $this;
    }

    /**
    * Gets codeTableFieldValues
    *  码表属性值。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldValueVO[]|null
    */
    public function getCodeTableFieldValues()
    {
        return $this->container['codeTableFieldValues'];
    }

    /**
    * Sets codeTableFieldValues
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldValueVO[]|null $codeTableFieldValues 码表属性值。
    *
    * @return $this
    */
    public function setCodeTableFieldValues($codeTableFieldValues)
    {
        $this->container['codeTableFieldValues'] = $codeTableFieldValues;
        return $this;
    }

    /**
    * Gets countFieldValues
    *  码表属性值总数。
    *
    * @return int|null
    */
    public function getCountFieldValues()
    {
        return $this->container['countFieldValues'];
    }

    /**
    * Sets countFieldValues
    *
    * @param int|null $countFieldValues 码表属性值总数。
    *
    * @return $this
    */
    public function setCountFieldValues($countFieldValues)
    {
        $this->container['countFieldValues'] = $countFieldValues;
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

