<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  url
    * ua  ua
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => '\HuaweiCloud\SDK\Cdn\V2\Model\TopUrl',
            'ua' => '\HuaweiCloud\SDK\Cdn\V2\Model\TopUa'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  url
    * ua  ua
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'ua' => null
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
    * url  url
    * ua  ua
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'ua' => 'ua'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  url
    * ua  ua
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'ua' => 'setUa'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  url
    * ua  ua
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'ua' => 'getUa'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['ua'] = isset($data['ua']) ? $data['ua'] : null;
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
    * Gets url
    *  url
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\TopUrl|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\TopUrl|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets ua
    *  ua
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\TopUa|null
    */
    public function getUa()
    {
        return $this->container['ua'];
    }

    /**
    * Sets ua
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\TopUa|null $ua ua
    *
    * @return $this
    */
    public function setUa($ua)
    {
        $this->container['ua'] = $ua;
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

