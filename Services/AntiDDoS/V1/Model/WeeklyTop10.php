<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WeeklyTop10 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WeeklyTop10';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * floatingIpAddress  弹性IP地址
    * times  DDoS拦截次数，包括清洗和黑洞
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'floatingIpAddress' => 'string',
            'times' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * floatingIpAddress  弹性IP地址
    * times  DDoS拦截次数，包括清洗和黑洞
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'floatingIpAddress' => null,
        'times' => 'int32'
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
    * floatingIpAddress  弹性IP地址
    * times  DDoS拦截次数，包括清洗和黑洞
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'floatingIpAddress' => 'floating_ip_address',
            'times' => 'times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * floatingIpAddress  弹性IP地址
    * times  DDoS拦截次数，包括清洗和黑洞
    *
    * @var string[]
    */
    protected static $setters = [
            'floatingIpAddress' => 'setFloatingIpAddress',
            'times' => 'setTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * floatingIpAddress  弹性IP地址
    * times  DDoS拦截次数，包括清洗和黑洞
    *
    * @var string[]
    */
    protected static $getters = [
            'floatingIpAddress' => 'getFloatingIpAddress',
            'times' => 'getTimes'
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
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['floatingIpAddress'] === null) {
            $invalidProperties[] = "'floatingIpAddress' can't be null";
        }
            if ((mb_strlen($this->container['floatingIpAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['floatingIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['times'] === null) {
            $invalidProperties[] = "'times' can't be null";
        }
            if (($this->container['times'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'times', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['times'] < 0)) {
                $invalidProperties[] = "invalid value for 'times', must be bigger than or equal to 0.";
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
    * Gets floatingIpAddress
    *  弹性IP地址
    *
    * @return string
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string $floatingIpAddress 弹性IP地址
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets times
    *  DDoS拦截次数，包括清洗和黑洞
    *
    * @return int
    */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
    * Sets times
    *
    * @param int $times DDoS拦截次数，包括清洗和黑洞
    *
    * @return $this
    */
    public function setTimes($times)
    {
        $this->container['times'] = $times;
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

