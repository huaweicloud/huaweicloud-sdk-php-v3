<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipId  参数解释：弹性IP的ID。
    * eipAddress  参数解释：弹性IP的IP地址。
    * ipVersion  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipId' => 'string',
            'eipAddress' => 'string',
            'ipVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipId  参数解释：弹性IP的ID。
    * eipAddress  参数解释：弹性IP的IP地址。
    * ipVersion  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipId' => null,
        'eipAddress' => null,
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
    * eipId  参数解释：弹性IP的ID。
    * eipAddress  参数解释：弹性IP的IP地址。
    * ipVersion  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipId' => 'eip_id',
            'eipAddress' => 'eip_address',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipId  参数解释：弹性IP的ID。
    * eipAddress  参数解释：弹性IP的IP地址。
    * ipVersion  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $setters = [
            'eipId' => 'setEipId',
            'eipAddress' => 'setEipAddress',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipId  参数解释：弹性IP的ID。
    * eipAddress  参数解释：弹性IP的IP地址。
    * ipVersion  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $getters = [
            'eipId' => 'getEipId',
            'eipAddress' => 'getEipAddress',
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
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
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
    * Gets eipId
    *  参数解释：弹性IP的ID。
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 参数解释：弹性IP的ID。
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets eipAddress
    *  参数解释：弹性IP的IP地址。
    *
    * @return string|null
    */
    public function getEipAddress()
    {
        return $this->container['eipAddress'];
    }

    /**
    * Sets eipAddress
    *
    * @param string|null $eipAddress 参数解释：弹性IP的IP地址。
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets ipVersion
    *  参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
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
    * @param int|null $ipVersion 参数解释：IP版本号。  取值范围： - 4表示IPv4。 - 6表示IPv6。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
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

