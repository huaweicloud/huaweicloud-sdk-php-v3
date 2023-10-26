<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpExchangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpExchangeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exchangedIp  待交换的ip地址
    * isExchangeDomain  是否交换domain
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exchangedIp' => 'string[]',
            'isExchangeDomain' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exchangedIp  待交换的ip地址
    * isExchangeDomain  是否交换domain
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exchangedIp' => null,
        'isExchangeDomain' => null
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
    * exchangedIp  待交换的ip地址
    * isExchangeDomain  是否交换domain
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exchangedIp' => 'exchanged_ip',
            'isExchangeDomain' => 'is_exchange_domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exchangedIp  待交换的ip地址
    * isExchangeDomain  是否交换domain
    *
    * @var string[]
    */
    protected static $setters = [
            'exchangedIp' => 'setExchangedIp',
            'isExchangeDomain' => 'setIsExchangeDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exchangedIp  待交换的ip地址
    * isExchangeDomain  是否交换domain
    *
    * @var string[]
    */
    protected static $getters = [
            'exchangedIp' => 'getExchangedIp',
            'isExchangeDomain' => 'getIsExchangeDomain'
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
        $this->container['exchangedIp'] = isset($data['exchangedIp']) ? $data['exchangedIp'] : null;
        $this->container['isExchangeDomain'] = isset($data['isExchangeDomain']) ? $data['isExchangeDomain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['exchangedIp'] === null) {
            $invalidProperties[] = "'exchangedIp' can't be null";
        }
        if ($this->container['isExchangeDomain'] === null) {
            $invalidProperties[] = "'isExchangeDomain' can't be null";
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
    * Gets exchangedIp
    *  待交换的ip地址
    *
    * @return string[]
    */
    public function getExchangedIp()
    {
        return $this->container['exchangedIp'];
    }

    /**
    * Sets exchangedIp
    *
    * @param string[] $exchangedIp 待交换的ip地址
    *
    * @return $this
    */
    public function setExchangedIp($exchangedIp)
    {
        $this->container['exchangedIp'] = $exchangedIp;
        return $this;
    }

    /**
    * Gets isExchangeDomain
    *  是否交换domain
    *
    * @return bool
    */
    public function getIsExchangeDomain()
    {
        return $this->container['isExchangeDomain'];
    }

    /**
    * Sets isExchangeDomain
    *
    * @param bool $isExchangeDomain 是否交换domain
    *
    * @return $this
    */
    public function setIsExchangeDomain($isExchangeDomain)
    {
        $this->container['isExchangeDomain'] = $isExchangeDomain;
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

