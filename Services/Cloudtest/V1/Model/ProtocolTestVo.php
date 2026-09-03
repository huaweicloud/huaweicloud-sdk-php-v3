<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtocolTestVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtocolTestVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * http  http
    * ping  ping拨测任务信息
    * pointHost  ping/http节点地址
    * protocol  协议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'http' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\HttpVo',
            'ping' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\PingVo[]',
            'pointHost' => 'string[]',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * http  http
    * ping  ping拨测任务信息
    * pointHost  ping/http节点地址
    * protocol  协议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'http' => null,
        'ping' => null,
        'pointHost' => null,
        'protocol' => null
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
    * http  http
    * ping  ping拨测任务信息
    * pointHost  ping/http节点地址
    * protocol  协议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'http' => 'http',
            'ping' => 'ping',
            'pointHost' => 'point_host',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * http  http
    * ping  ping拨测任务信息
    * pointHost  ping/http节点地址
    * protocol  协议
    *
    * @var string[]
    */
    protected static $setters = [
            'http' => 'setHttp',
            'ping' => 'setPing',
            'pointHost' => 'setPointHost',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * http  http
    * ping  ping拨测任务信息
    * pointHost  ping/http节点地址
    * protocol  协议
    *
    * @var string[]
    */
    protected static $getters = [
            'http' => 'getHttp',
            'ping' => 'getPing',
            'pointHost' => 'getPointHost',
            'protocol' => 'getProtocol'
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
        $this->container['http'] = isset($data['http']) ? $data['http'] : null;
        $this->container['ping'] = isset($data['ping']) ? $data['ping'] : null;
        $this->container['pointHost'] = isset($data['pointHost']) ? $data['pointHost'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
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
    * Gets http
    *  http
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\HttpVo|null
    */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
    * Sets http
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\HttpVo|null $http http
    *
    * @return $this
    */
    public function setHttp($http)
    {
        $this->container['http'] = $http;
        return $this;
    }

    /**
    * Gets ping
    *  ping拨测任务信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\PingVo[]|null
    */
    public function getPing()
    {
        return $this->container['ping'];
    }

    /**
    * Sets ping
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\PingVo[]|null $ping ping拨测任务信息
    *
    * @return $this
    */
    public function setPing($ping)
    {
        $this->container['ping'] = $ping;
        return $this;
    }

    /**
    * Gets pointHost
    *  ping/http节点地址
    *
    * @return string[]|null
    */
    public function getPointHost()
    {
        return $this->container['pointHost'];
    }

    /**
    * Sets pointHost
    *
    * @param string[]|null $pointHost ping/http节点地址
    *
    * @return $this
    */
    public function setPointHost($pointHost)
    {
        $this->container['pointHost'] = $pointHost;
        return $this;
    }

    /**
    * Gets protocol
    *  协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

