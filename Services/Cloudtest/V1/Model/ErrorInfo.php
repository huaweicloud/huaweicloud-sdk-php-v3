<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorContent  错误内容的描述
    * errorIndex  错误索引的描述
    * errorPoint  错误点的描述
    * highLight  是否高亮标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorContent' => 'string',
            'errorIndex' => 'string',
            'errorPoint' => 'string',
            'highLight' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorContent  错误内容的描述
    * errorIndex  错误索引的描述
    * errorPoint  错误点的描述
    * highLight  是否高亮标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorContent' => null,
        'errorIndex' => null,
        'errorPoint' => null,
        'highLight' => null
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
    * errorContent  错误内容的描述
    * errorIndex  错误索引的描述
    * errorPoint  错误点的描述
    * highLight  是否高亮标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorContent' => 'error_content',
            'errorIndex' => 'error_index',
            'errorPoint' => 'error_point',
            'highLight' => 'high_light'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorContent  错误内容的描述
    * errorIndex  错误索引的描述
    * errorPoint  错误点的描述
    * highLight  是否高亮标识
    *
    * @var string[]
    */
    protected static $setters = [
            'errorContent' => 'setErrorContent',
            'errorIndex' => 'setErrorIndex',
            'errorPoint' => 'setErrorPoint',
            'highLight' => 'setHighLight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorContent  错误内容的描述
    * errorIndex  错误索引的描述
    * errorPoint  错误点的描述
    * highLight  是否高亮标识
    *
    * @var string[]
    */
    protected static $getters = [
            'errorContent' => 'getErrorContent',
            'errorIndex' => 'getErrorIndex',
            'errorPoint' => 'getErrorPoint',
            'highLight' => 'getHighLight'
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
        $this->container['errorContent'] = isset($data['errorContent']) ? $data['errorContent'] : null;
        $this->container['errorIndex'] = isset($data['errorIndex']) ? $data['errorIndex'] : null;
        $this->container['errorPoint'] = isset($data['errorPoint']) ? $data['errorPoint'] : null;
        $this->container['highLight'] = isset($data['highLight']) ? $data['highLight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets errorContent
    *  错误内容的描述
    *
    * @return string|null
    */
    public function getErrorContent()
    {
        return $this->container['errorContent'];
    }

    /**
    * Sets errorContent
    *
    * @param string|null $errorContent 错误内容的描述
    *
    * @return $this
    */
    public function setErrorContent($errorContent)
    {
        $this->container['errorContent'] = $errorContent;
        return $this;
    }

    /**
    * Gets errorIndex
    *  错误索引的描述
    *
    * @return string|null
    */
    public function getErrorIndex()
    {
        return $this->container['errorIndex'];
    }

    /**
    * Sets errorIndex
    *
    * @param string|null $errorIndex 错误索引的描述
    *
    * @return $this
    */
    public function setErrorIndex($errorIndex)
    {
        $this->container['errorIndex'] = $errorIndex;
        return $this;
    }

    /**
    * Gets errorPoint
    *  错误点的描述
    *
    * @return string|null
    */
    public function getErrorPoint()
    {
        return $this->container['errorPoint'];
    }

    /**
    * Sets errorPoint
    *
    * @param string|null $errorPoint 错误点的描述
    *
    * @return $this
    */
    public function setErrorPoint($errorPoint)
    {
        $this->container['errorPoint'] = $errorPoint;
        return $this;
    }

    /**
    * Gets highLight
    *  是否高亮标识
    *
    * @return bool|null
    */
    public function getHighLight()
    {
        return $this->container['highLight'];
    }

    /**
    * Sets highLight
    *
    * @param bool|null $highLight 是否高亮标识
    *
    * @return $this
    */
    public function setHighLight($highLight)
    {
        $this->container['highLight'] = $highLight;
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

