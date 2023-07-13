<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGraphsRespVertexIdType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGraphsResp_vertex_id_type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idType  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    * idLength  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idType' => 'string',
            'idLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idType  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    * idLength  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idType' => null,
        'idLength' => 'int32'
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
    * idType  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    * idLength  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idType' => 'id_type',
            'idLength' => 'id_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idType  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    * idLength  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @var string[]
    */
    protected static $setters = [
            'idType' => 'setIdType',
            'idLength' => 'setIdLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idType  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    * idLength  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @var string[]
    */
    protected static $getters = [
            'idType' => 'getIdType',
            'idLength' => 'getIdLength'
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
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['idLength'] = isset($data['idLength']) ? $data['idLength'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['idType'] === null) {
            $invalidProperties[] = "'idType' can't be null";
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
    * Gets idType
    *  id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    *
    * @return string
    */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
    * Sets idType
    *
    * @param string $idType id类型，目前支持固定长度fixedLengthString和hash两种点ID类型。  - fixedLengthString：固定长度String格式下，实际点ID直接用于内部存储与计算，用户需指定一长度，实际点ID不可超过此长度。长度过大，可能影响查询性能，建议用户根据数据集状态进行设置。  - hash：哈希格式下，内部计算时将实际点ID转换成哈希码进行存储与计算，对实际点ID长度无限制，但是存在极低的概率(约10^(-43))出现点ID碰撞。若用户无法确定点ID的最大长度，建议选择哈希类型。
    *
    * @return $this
    */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;
        return $this;
    }

    /**
    * Gets idLength
    *  当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @return int|null
    */
    public function getIdLength()
    {
        return $this->container['idLength'];
    }

    /**
    * Sets idLength
    *
    * @param int|null $idLength 当id_type取值为fixedLengthString时必填，取值范围：1-128。
    *
    * @return $this
    */
    public function setIdLength($idLength)
    {
        $this->container['idLength'] = $idLength;
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

