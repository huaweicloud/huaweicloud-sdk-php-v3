<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsertHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsertHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xForwardedElbIp  负载均衡器弹性公网IP透传开关。
    * xForwardedHost  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xForwardedElbIp' => 'bool',
            'xForwardedHost' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xForwardedElbIp  负载均衡器弹性公网IP透传开关。
    * xForwardedHost  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xForwardedElbIp' => null,
        'xForwardedHost' => null
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
    * xForwardedElbIp  负载均衡器弹性公网IP透传开关。
    * xForwardedHost  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xForwardedElbIp' => 'X-Forwarded-ELB-IP',
            'xForwardedHost' => 'X-Forwarded-Host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xForwardedElbIp  负载均衡器弹性公网IP透传开关。
    * xForwardedHost  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @var string[]
    */
    protected static $setters = [
            'xForwardedElbIp' => 'setXForwardedElbIp',
            'xForwardedHost' => 'setXForwardedHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xForwardedElbIp  负载均衡器弹性公网IP透传开关。
    * xForwardedHost  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @var string[]
    */
    protected static $getters = [
            'xForwardedElbIp' => 'getXForwardedElbIp',
            'xForwardedHost' => 'getXForwardedHost'
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
        $this->container['xForwardedElbIp'] = isset($data['xForwardedElbIp']) ? $data['xForwardedElbIp'] : null;
        $this->container['xForwardedHost'] = isset($data['xForwardedHost']) ? $data['xForwardedHost'] : null;
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
    * Gets xForwardedElbIp
    *  负载均衡器弹性公网IP透传开关。
    *
    * @return bool|null
    */
    public function getXForwardedElbIp()
    {
        return $this->container['xForwardedElbIp'];
    }

    /**
    * Sets xForwardedElbIp
    *
    * @param bool|null $xForwardedElbIp 负载均衡器弹性公网IP透传开关。
    *
    * @return $this
    */
    public function setXForwardedElbIp($xForwardedElbIp)
    {
        $this->container['xForwardedElbIp'] = $xForwardedElbIp;
        return $this;
    }

    /**
    * Gets xForwardedHost
    *  X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @return bool|null
    */
    public function getXForwardedHost()
    {
        return $this->container['xForwardedHost'];
    }

    /**
    * Sets xForwardedHost
    *
    * @param bool|null $xForwardedHost X-Forwarded-Host设为true可以将客户请求头的第一个X-Forwarded-Host设置为请求头的Host带到后端云服务器。
    *
    * @return $this
    */
    public function setXForwardedHost($xForwardedHost)
    {
        $this->container['xForwardedHost'] = $xForwardedHost;
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

