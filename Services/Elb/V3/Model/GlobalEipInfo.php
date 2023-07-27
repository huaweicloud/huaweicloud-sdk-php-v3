<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalEipInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalEipInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalEipId  global eip的id
    * globalEipAddress  global eip的ip地址
    * ipVersion  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalEipId' => 'string',
            'globalEipAddress' => 'string',
            'ipVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalEipId  global eip的id
    * globalEipAddress  global eip的ip地址
    * ipVersion  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalEipId' => null,
        'globalEipAddress' => null,
        'ipVersion' => 'int32'
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
    * globalEipId  global eip的id
    * globalEipAddress  global eip的ip地址
    * ipVersion  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalEipId' => 'global_eip_id',
            'globalEipAddress' => 'global_eip_address',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalEipId  global eip的id
    * globalEipAddress  global eip的ip地址
    * ipVersion  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @var string[]
    */
    protected static $setters = [
            'globalEipId' => 'setGlobalEipId',
            'globalEipAddress' => 'setGlobalEipAddress',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalEipId  global eip的id
    * globalEipAddress  global eip的ip地址
    * ipVersion  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @var string[]
    */
    protected static $getters = [
            'globalEipId' => 'getGlobalEipId',
            'globalEipAddress' => 'getGlobalEipAddress',
            'ipVersion' => 'getIpVersion'
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
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['globalEipAddress'] = isset($data['globalEipAddress']) ? $data['globalEipAddress'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
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
    * Gets globalEipId
    *  global eip的id
    *
    * @return string|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string|null $globalEipId global eip的id
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets globalEipAddress
    *  global eip的ip地址
    *
    * @return string|null
    */
    public function getGlobalEipAddress()
    {
        return $this->container['globalEipAddress'];
    }

    /**
    * Sets globalEipAddress
    *
    * @param string|null $globalEipAddress global eip的ip地址
    *
    * @return $this
    */
    public function setGlobalEipAddress($globalEipAddress)
    {
        $this->container['globalEipAddress'] = $globalEipAddress;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion IP版本信息。 取值范围：4和6 4：IPv4 6：IPv6 [不支持IPv6，请勿设置为6。]
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
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

