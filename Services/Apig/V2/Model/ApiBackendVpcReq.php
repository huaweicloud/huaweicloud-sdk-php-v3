<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiBackendVpcReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiBackendVpcReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcChannelProxyHost  代理主机
    * vpcChannelId  VPC通道编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcChannelProxyHost' => 'string',
            'vpcChannelId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcChannelProxyHost  代理主机
    * vpcChannelId  VPC通道编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcChannelProxyHost' => null,
        'vpcChannelId' => null
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
    * vpcChannelProxyHost  代理主机
    * vpcChannelId  VPC通道编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcChannelProxyHost' => 'vpc_channel_proxy_host',
            'vpcChannelId' => 'vpc_channel_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcChannelProxyHost  代理主机
    * vpcChannelId  VPC通道编号
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcChannelProxyHost' => 'setVpcChannelProxyHost',
            'vpcChannelId' => 'setVpcChannelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcChannelProxyHost  代理主机
    * vpcChannelId  VPC通道编号
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcChannelProxyHost' => 'getVpcChannelProxyHost',
            'vpcChannelId' => 'getVpcChannelId'
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
        $this->container['vpcChannelProxyHost'] = isset($data['vpcChannelProxyHost']) ? $data['vpcChannelProxyHost'] : null;
        $this->container['vpcChannelId'] = isset($data['vpcChannelId']) ? $data['vpcChannelId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcChannelId'] === null) {
            $invalidProperties[] = "'vpcChannelId' can't be null";
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
    * Gets vpcChannelProxyHost
    *  代理主机
    *
    * @return string|null
    */
    public function getVpcChannelProxyHost()
    {
        return $this->container['vpcChannelProxyHost'];
    }

    /**
    * Sets vpcChannelProxyHost
    *
    * @param string|null $vpcChannelProxyHost 代理主机
    *
    * @return $this
    */
    public function setVpcChannelProxyHost($vpcChannelProxyHost)
    {
        $this->container['vpcChannelProxyHost'] = $vpcChannelProxyHost;
        return $this;
    }

    /**
    * Gets vpcChannelId
    *  VPC通道编号
    *
    * @return string
    */
    public function getVpcChannelId()
    {
        return $this->container['vpcChannelId'];
    }

    /**
    * Sets vpcChannelId
    *
    * @param string $vpcChannelId VPC通道编号
    *
    * @return $this
    */
    public function setVpcChannelId($vpcChannelId)
    {
        $this->container['vpcChannelId'] = $vpcChannelId;
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

