<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enUs  英文名称。
    * zhCn  中文信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enUs' => 'string',
            'zhCn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enUs  英文名称。
    * zhCn  中文信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enUs' => null,
        'zhCn' => null
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
    * enUs  英文名称。
    * zhCn  中文信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enUs' => 'en_us',
            'zhCn' => 'zh_cn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enUs  英文名称。
    * zhCn  中文信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'enUs' => 'setEnUs',
            'zhCn' => 'setZhCn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enUs  英文名称。
    * zhCn  中文信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'enUs' => 'getEnUs',
            'zhCn' => 'getZhCn'
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
        $this->container['enUs'] = isset($data['enUs']) ? $data['enUs'] : null;
        $this->container['zhCn'] = isset($data['zhCn']) ? $data['zhCn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enUs']) && (mb_strlen($this->container['enUs']) > 255)) {
                $invalidProperties[] = "invalid value for 'enUs', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enUs']) && (mb_strlen($this->container['enUs']) < 0)) {
                $invalidProperties[] = "invalid value for 'enUs', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enUs']) && !preg_match("/^[^<>]*$/", $this->container['enUs'])) {
                $invalidProperties[] = "invalid value for 'enUs', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['zhCn']) && (mb_strlen($this->container['zhCn']) > 255)) {
                $invalidProperties[] = "invalid value for 'zhCn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['zhCn']) && (mb_strlen($this->container['zhCn']) < 0)) {
                $invalidProperties[] = "invalid value for 'zhCn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['zhCn']) && !preg_match("/^[^<>]*$/", $this->container['zhCn'])) {
                $invalidProperties[] = "invalid value for 'zhCn', must be conform to the pattern /^[^<>]*$/.";
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
    * Gets enUs
    *  英文名称。
    *
    * @return string|null
    */
    public function getEnUs()
    {
        return $this->container['enUs'];
    }

    /**
    * Sets enUs
    *
    * @param string|null $enUs 英文名称。
    *
    * @return $this
    */
    public function setEnUs($enUs)
    {
        $this->container['enUs'] = $enUs;
        return $this;
    }

    /**
    * Gets zhCn
    *  中文信息。
    *
    * @return string|null
    */
    public function getZhCn()
    {
        return $this->container['zhCn'];
    }

    /**
    * Sets zhCn
    *
    * @param string|null $zhCn 中文信息。
    *
    * @return $this
    */
    public function setZhCn($zhCn)
    {
        $this->container['zhCn'] = $zhCn;
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

