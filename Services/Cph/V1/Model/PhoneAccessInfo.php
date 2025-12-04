<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhoneAccessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhoneAccessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  自定义端口类型，不超过16个字节。
    * deviceIp  云手机IP（过期）。
    * phoneIp  云手机IP。
    * listenPort  服务监听端口。
    * accessIp  云手机服务器的访问IP（过期）。
    * publicIp  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    * intranetIp  云手机服务器的内网IP（过期）。
    * serverIp  云手机服务器的内网IP。
    * accessPort  服务映射到公网的访问端口。
    * phoneIpv6  云手机IPv6 IP，新增字段。
    * serverIpv6  云手机服务器IPv6 IP，新增字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'deviceIp' => 'string',
            'phoneIp' => 'string',
            'listenPort' => 'int',
            'accessIp' => 'string',
            'publicIp' => 'string',
            'intranetIp' => 'string',
            'serverIp' => 'string',
            'accessPort' => 'int',
            'phoneIpv6' => 'string',
            'serverIpv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  自定义端口类型，不超过16个字节。
    * deviceIp  云手机IP（过期）。
    * phoneIp  云手机IP。
    * listenPort  服务监听端口。
    * accessIp  云手机服务器的访问IP（过期）。
    * publicIp  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    * intranetIp  云手机服务器的内网IP（过期）。
    * serverIp  云手机服务器的内网IP。
    * accessPort  服务映射到公网的访问端口。
    * phoneIpv6  云手机IPv6 IP，新增字段。
    * serverIpv6  云手机服务器IPv6 IP，新增字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'deviceIp' => null,
        'phoneIp' => null,
        'listenPort' => 'int32',
        'accessIp' => null,
        'publicIp' => null,
        'intranetIp' => null,
        'serverIp' => null,
        'accessPort' => 'int32',
        'phoneIpv6' => null,
        'serverIpv6' => null
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
    * type  自定义端口类型，不超过16个字节。
    * deviceIp  云手机IP（过期）。
    * phoneIp  云手机IP。
    * listenPort  服务监听端口。
    * accessIp  云手机服务器的访问IP（过期）。
    * publicIp  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    * intranetIp  云手机服务器的内网IP（过期）。
    * serverIp  云手机服务器的内网IP。
    * accessPort  服务映射到公网的访问端口。
    * phoneIpv6  云手机IPv6 IP，新增字段。
    * serverIpv6  云手机服务器IPv6 IP，新增字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'deviceIp' => 'device_ip',
            'phoneIp' => 'phone_ip',
            'listenPort' => 'listen_port',
            'accessIp' => 'access_ip',
            'publicIp' => 'public_ip',
            'intranetIp' => 'intranet_ip',
            'serverIp' => 'server_ip',
            'accessPort' => 'access_port',
            'phoneIpv6' => 'phone_ipv6',
            'serverIpv6' => 'server_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  自定义端口类型，不超过16个字节。
    * deviceIp  云手机IP（过期）。
    * phoneIp  云手机IP。
    * listenPort  服务监听端口。
    * accessIp  云手机服务器的访问IP（过期）。
    * publicIp  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    * intranetIp  云手机服务器的内网IP（过期）。
    * serverIp  云手机服务器的内网IP。
    * accessPort  服务映射到公网的访问端口。
    * phoneIpv6  云手机IPv6 IP，新增字段。
    * serverIpv6  云手机服务器IPv6 IP，新增字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'deviceIp' => 'setDeviceIp',
            'phoneIp' => 'setPhoneIp',
            'listenPort' => 'setListenPort',
            'accessIp' => 'setAccessIp',
            'publicIp' => 'setPublicIp',
            'intranetIp' => 'setIntranetIp',
            'serverIp' => 'setServerIp',
            'accessPort' => 'setAccessPort',
            'phoneIpv6' => 'setPhoneIpv6',
            'serverIpv6' => 'setServerIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  自定义端口类型，不超过16个字节。
    * deviceIp  云手机IP（过期）。
    * phoneIp  云手机IP。
    * listenPort  服务监听端口。
    * accessIp  云手机服务器的访问IP（过期）。
    * publicIp  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    * intranetIp  云手机服务器的内网IP（过期）。
    * serverIp  云手机服务器的内网IP。
    * accessPort  服务映射到公网的访问端口。
    * phoneIpv6  云手机IPv6 IP，新增字段。
    * serverIpv6  云手机服务器IPv6 IP，新增字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'deviceIp' => 'getDeviceIp',
            'phoneIp' => 'getPhoneIp',
            'listenPort' => 'getListenPort',
            'accessIp' => 'getAccessIp',
            'publicIp' => 'getPublicIp',
            'intranetIp' => 'getIntranetIp',
            'serverIp' => 'getServerIp',
            'accessPort' => 'getAccessPort',
            'phoneIpv6' => 'getPhoneIpv6',
            'serverIpv6' => 'getServerIpv6'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deviceIp'] = isset($data['deviceIp']) ? $data['deviceIp'] : null;
        $this->container['phoneIp'] = isset($data['phoneIp']) ? $data['phoneIp'] : null;
        $this->container['listenPort'] = isset($data['listenPort']) ? $data['listenPort'] : null;
        $this->container['accessIp'] = isset($data['accessIp']) ? $data['accessIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['intranetIp'] = isset($data['intranetIp']) ? $data['intranetIp'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['accessPort'] = isset($data['accessPort']) ? $data['accessPort'] : null;
        $this->container['phoneIpv6'] = isset($data['phoneIpv6']) ? $data['phoneIpv6'] : null;
        $this->container['serverIpv6'] = isset($data['serverIpv6']) ? $data['serverIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceIp']) && (mb_strlen($this->container['deviceIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'deviceIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['deviceIp']) && (mb_strlen($this->container['deviceIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneIp']) && (mb_strlen($this->container['phoneIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'phoneIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['phoneIp']) && (mb_strlen($this->container['phoneIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['listenPort']) && ($this->container['listenPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['listenPort']) && ($this->container['listenPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneIpv6']) && (mb_strlen($this->container['phoneIpv6']) > 1024)) {
                $invalidProperties[] = "invalid value for 'phoneIpv6', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['phoneIpv6']) && (mb_strlen($this->container['phoneIpv6']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneIpv6', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverIpv6']) && (mb_strlen($this->container['serverIpv6']) > 1024)) {
                $invalidProperties[] = "invalid value for 'serverIpv6', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['serverIpv6']) && (mb_strlen($this->container['serverIpv6']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverIpv6', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  自定义端口类型，不超过16个字节。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 自定义端口类型，不超过16个字节。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets deviceIp
    *  云手机IP（过期）。
    *
    * @return string|null
    */
    public function getDeviceIp()
    {
        return $this->container['deviceIp'];
    }

    /**
    * Sets deviceIp
    *
    * @param string|null $deviceIp 云手机IP（过期）。
    *
    * @return $this
    */
    public function setDeviceIp($deviceIp)
    {
        $this->container['deviceIp'] = $deviceIp;
        return $this;
    }

    /**
    * Gets phoneIp
    *  云手机IP。
    *
    * @return string|null
    */
    public function getPhoneIp()
    {
        return $this->container['phoneIp'];
    }

    /**
    * Sets phoneIp
    *
    * @param string|null $phoneIp 云手机IP。
    *
    * @return $this
    */
    public function setPhoneIp($phoneIp)
    {
        $this->container['phoneIp'] = $phoneIp;
        return $this;
    }

    /**
    * Gets listenPort
    *  服务监听端口。
    *
    * @return int|null
    */
    public function getListenPort()
    {
        return $this->container['listenPort'];
    }

    /**
    * Sets listenPort
    *
    * @param int|null $listenPort 服务监听端口。
    *
    * @return $this
    */
    public function setListenPort($listenPort)
    {
        $this->container['listenPort'] = $listenPort;
        return $this;
    }

    /**
    * Gets accessIp
    *  云手机服务器的访问IP（过期）。
    *
    * @return string|null
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string|null $accessIp 云手机服务器的访问IP（过期）。
    *
    * @return $this
    */
    public function setAccessIp($accessIp)
    {
        $this->container['accessIp'] = $accessIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 云手机服务器的公网IP，如果端口设置了非公网访问，该字段返回空字符串。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets intranetIp
    *  云手机服务器的内网IP（过期）。
    *
    * @return string|null
    */
    public function getIntranetIp()
    {
        return $this->container['intranetIp'];
    }

    /**
    * Sets intranetIp
    *
    * @param string|null $intranetIp 云手机服务器的内网IP（过期）。
    *
    * @return $this
    */
    public function setIntranetIp($intranetIp)
    {
        $this->container['intranetIp'] = $intranetIp;
        return $this;
    }

    /**
    * Gets serverIp
    *  云手机服务器的内网IP。
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp 云手机服务器的内网IP。
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets accessPort
    *  服务映射到公网的访问端口。
    *
    * @return int|null
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param int|null $accessPort 服务映射到公网的访问端口。
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets phoneIpv6
    *  云手机IPv6 IP，新增字段。
    *
    * @return string|null
    */
    public function getPhoneIpv6()
    {
        return $this->container['phoneIpv6'];
    }

    /**
    * Sets phoneIpv6
    *
    * @param string|null $phoneIpv6 云手机IPv6 IP，新增字段。
    *
    * @return $this
    */
    public function setPhoneIpv6($phoneIpv6)
    {
        $this->container['phoneIpv6'] = $phoneIpv6;
        return $this;
    }

    /**
    * Gets serverIpv6
    *  云手机服务器IPv6 IP，新增字段。
    *
    * @return string|null
    */
    public function getServerIpv6()
    {
        return $this->container['serverIpv6'];
    }

    /**
    * Sets serverIpv6
    *
    * @param string|null $serverIpv6 云手机服务器IPv6 IP，新增字段。
    *
    * @return $this
    */
    public function setServerIpv6($serverIpv6)
    {
        $this->container['serverIpv6'] = $serverIpv6;
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

