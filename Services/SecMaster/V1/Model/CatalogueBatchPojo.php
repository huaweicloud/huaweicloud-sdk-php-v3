<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogueBatchPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogueBatchPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDisplay  是否显示
    * id  目录编码
    * secondAliasZh  二级目录中文别名
    * secondAliasEn  二级目录中文别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDisplay' => 'bool',
            'id' => 'string',
            'secondAliasZh' => 'string',
            'secondAliasEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDisplay  是否显示
    * id  目录编码
    * secondAliasZh  二级目录中文别名
    * secondAliasEn  二级目录中文别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDisplay' => null,
        'id' => null,
        'secondAliasZh' => null,
        'secondAliasEn' => null
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
    * isDisplay  是否显示
    * id  目录编码
    * secondAliasZh  二级目录中文别名
    * secondAliasEn  二级目录中文别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDisplay' => 'is_display',
            'id' => 'id',
            'secondAliasZh' => 'second_alias_zh',
            'secondAliasEn' => 'second_alias_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDisplay  是否显示
    * id  目录编码
    * secondAliasZh  二级目录中文别名
    * secondAliasEn  二级目录中文别名
    *
    * @var string[]
    */
    protected static $setters = [
            'isDisplay' => 'setIsDisplay',
            'id' => 'setId',
            'secondAliasZh' => 'setSecondAliasZh',
            'secondAliasEn' => 'setSecondAliasEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDisplay  是否显示
    * id  目录编码
    * secondAliasZh  二级目录中文别名
    * secondAliasEn  二级目录中文别名
    *
    * @var string[]
    */
    protected static $getters = [
            'isDisplay' => 'getIsDisplay',
            'id' => 'getId',
            'secondAliasZh' => 'getSecondAliasZh',
            'secondAliasEn' => 'getSecondAliasEn'
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
        $this->container['isDisplay'] = isset($data['isDisplay']) ? $data['isDisplay'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['secondAliasZh'] = isset($data['secondAliasZh']) ? $data['secondAliasZh'] : null;
        $this->container['secondAliasEn'] = isset($data['secondAliasEn']) ? $data['secondAliasEn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secondAliasZh']) && (mb_strlen($this->container['secondAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondAliasZh']) && (mb_strlen($this->container['secondAliasZh']) < 1)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secondAliasEn']) && (mb_strlen($this->container['secondAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondAliasEn']) && (mb_strlen($this->container['secondAliasEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be bigger than or equal to 1.";
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
    * Gets isDisplay
    *  是否显示
    *
    * @return bool|null
    */
    public function getIsDisplay()
    {
        return $this->container['isDisplay'];
    }

    /**
    * Sets isDisplay
    *
    * @param bool|null $isDisplay 是否显示
    *
    * @return $this
    */
    public function setIsDisplay($isDisplay)
    {
        $this->container['isDisplay'] = $isDisplay;
        return $this;
    }

    /**
    * Gets id
    *  目录编码
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
    * @param string|null $id 目录编码
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets secondAliasZh
    *  二级目录中文别名
    *
    * @return string|null
    */
    public function getSecondAliasZh()
    {
        return $this->container['secondAliasZh'];
    }

    /**
    * Sets secondAliasZh
    *
    * @param string|null $secondAliasZh 二级目录中文别名
    *
    * @return $this
    */
    public function setSecondAliasZh($secondAliasZh)
    {
        $this->container['secondAliasZh'] = $secondAliasZh;
        return $this;
    }

    /**
    * Gets secondAliasEn
    *  二级目录中文别名
    *
    * @return string|null
    */
    public function getSecondAliasEn()
    {
        return $this->container['secondAliasEn'];
    }

    /**
    * Sets secondAliasEn
    *
    * @param string|null $secondAliasEn 二级目录中文别名
    *
    * @return $this
    */
    public function setSecondAliasEn($secondAliasEn)
    {
        $this->container['secondAliasEn'] = $secondAliasEn;
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

