<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  私网IP地址。
    * slaveIp  备机私网IP地址。
    * floatingIp  浮动IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'slaveIp' => 'string',
            'floatingIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  私网IP地址。
    * slaveIp  备机私网IP地址。
    * floatingIp  浮动IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'slaveIp' => null,
        'floatingIp' => null
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
    * ip  私网IP地址。
    * slaveIp  备机私网IP地址。
    * floatingIp  浮动IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'slaveIp' => 'slave_ip',
            'floatingIp' => 'floating_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  私网IP地址。
    * slaveIp  备机私网IP地址。
    * floatingIp  浮动IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'slaveIp' => 'setSlaveIp',
            'floatingIp' => 'setFloatingIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  私网IP地址。
    * slaveIp  备机私网IP地址。
    * floatingIp  浮动IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'slaveIp' => 'getSlaveIp',
            'floatingIp' => 'getFloatingIp'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['slaveIp'] = isset($data['slaveIp']) ? $data['slaveIp'] : null;
        $this->container['floatingIp'] = isset($data['floatingIp']) ? $data['floatingIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 512)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveIp']) && (mb_strlen($this->container['slaveIp']) > 512)) {
                $invalidProperties[] = "invalid value for 'slaveIp', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['slaveIp']) && (mb_strlen($this->container['slaveIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingIp']) && (mb_strlen($this->container['floatingIp']) > 512)) {
                $invalidProperties[] = "invalid value for 'floatingIp', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['floatingIp']) && (mb_strlen($this->container['floatingIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatingIp', the character length must be bigger than or equal to 0.";
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
    * Gets ip
    *  私网IP地址。
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 私网IP地址。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets slaveIp
    *  备机私网IP地址。
    *
    * @return string|null
    */
    public function getSlaveIp()
    {
        return $this->container['slaveIp'];
    }

    /**
    * Sets slaveIp
    *
    * @param string|null $slaveIp 备机私网IP地址。
    *
    * @return $this
    */
    public function setSlaveIp($slaveIp)
    {
        $this->container['slaveIp'] = $slaveIp;
        return $this;
    }

    /**
    * Gets floatingIp
    *  浮动IP地址。
    *
    * @return string|null
    */
    public function getFloatingIp()
    {
        return $this->container['floatingIp'];
    }

    /**
    * Sets floatingIp
    *
    * @param string|null $floatingIp 浮动IP地址。
    *
    * @return $this
    */
    public function setFloatingIp($floatingIp)
    {
        $this->container['floatingIp'] = $floatingIp;
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

