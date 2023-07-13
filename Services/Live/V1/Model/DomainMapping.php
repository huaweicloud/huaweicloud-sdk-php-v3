<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainMapping';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pullDomain  直播播放域名
    * pushDomain  直播播放域名关联的推流域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pullDomain' => 'string',
            'pushDomain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pullDomain  直播播放域名
    * pushDomain  直播播放域名关联的推流域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pullDomain' => null,
        'pushDomain' => null
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
    * pullDomain  直播播放域名
    * pushDomain  直播播放域名关联的推流域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pullDomain' => 'pull_domain',
            'pushDomain' => 'push_domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pullDomain  直播播放域名
    * pushDomain  直播播放域名关联的推流域名
    *
    * @var string[]
    */
    protected static $setters = [
            'pullDomain' => 'setPullDomain',
            'pushDomain' => 'setPushDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pullDomain  直播播放域名
    * pushDomain  直播播放域名关联的推流域名
    *
    * @var string[]
    */
    protected static $getters = [
            'pullDomain' => 'getPullDomain',
            'pushDomain' => 'getPushDomain'
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
        $this->container['pullDomain'] = isset($data['pullDomain']) ? $data['pullDomain'] : null;
        $this->container['pushDomain'] = isset($data['pushDomain']) ? $data['pushDomain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pullDomain'] === null) {
            $invalidProperties[] = "'pullDomain' can't be null";
        }
            if ((mb_strlen($this->container['pullDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'pullDomain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['pullDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'pullDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pushDomain'] === null) {
            $invalidProperties[] = "'pushDomain' can't be null";
        }
            if ((mb_strlen($this->container['pushDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'pushDomain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['pushDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'pushDomain', the character length must be bigger than or equal to 1.";
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
    * Gets pullDomain
    *  直播播放域名
    *
    * @return string
    */
    public function getPullDomain()
    {
        return $this->container['pullDomain'];
    }

    /**
    * Sets pullDomain
    *
    * @param string $pullDomain 直播播放域名
    *
    * @return $this
    */
    public function setPullDomain($pullDomain)
    {
        $this->container['pullDomain'] = $pullDomain;
        return $this;
    }

    /**
    * Gets pushDomain
    *  直播播放域名关联的推流域名
    *
    * @return string
    */
    public function getPushDomain()
    {
        return $this->container['pushDomain'];
    }

    /**
    * Sets pushDomain
    *
    * @param string $pushDomain 直播播放域名关联的推流域名
    *
    * @return $this
    */
    public function setPushDomain($pushDomain)
    {
        $this->container['pushDomain'] = $pushDomain;
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

