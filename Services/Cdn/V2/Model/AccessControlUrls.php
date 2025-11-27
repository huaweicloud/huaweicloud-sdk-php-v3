<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessControlUrls implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessControlUrls';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * urls  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    * banDuration  URL封禁天数，默认7天，取值范围1-30。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'urls' => 'string[]',
            'banDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * urls  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    * banDuration  URL封禁天数，默认7天，取值范围1-30。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'urls' => null,
        'banDuration' => null
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
    * urls  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    * banDuration  URL封禁天数，默认7天，取值范围1-30。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'urls' => 'urls',
            'banDuration' => 'ban_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * urls  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    * banDuration  URL封禁天数，默认7天，取值范围1-30。
    *
    * @var string[]
    */
    protected static $setters = [
            'urls' => 'setUrls',
            'banDuration' => 'setBanDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * urls  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    * banDuration  URL封禁天数，默认7天，取值范围1-30。
    *
    * @var string[]
    */
    protected static $getters = [
            'urls' => 'getUrls',
            'banDuration' => 'getBanDuration'
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
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['banDuration'] = isset($data['banDuration']) ? $data['banDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
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
    * Gets urls
    *  URL必须带有“http://”或“https://”，单次最多输入1000个url。
    *
    * @return string[]
    */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
    * Sets urls
    *
    * @param string[] $urls URL必须带有“http://”或“https://”，单次最多输入1000个url。
    *
    * @return $this
    */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
        return $this;
    }

    /**
    * Gets banDuration
    *  URL封禁天数，默认7天，取值范围1-30。
    *
    * @return int|null
    */
    public function getBanDuration()
    {
        return $this->container['banDuration'];
    }

    /**
    * Sets banDuration
    *
    * @param int|null $banDuration URL封禁天数，默认7天，取值范围1-30。
    *
    * @return $this
    */
    public function setBanDuration($banDuration)
    {
        $this->container['banDuration'] = $banDuration;
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

