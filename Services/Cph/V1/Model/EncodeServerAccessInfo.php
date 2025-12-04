<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncodeServerAccessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncodeServerAccessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listenPort  编码服务监听端口。
    * accessIp  编码服务访问的公网IP（过期）。
    * intranetIp  编码服务访问的内网IP（过期）。
    * publicIp  编码服务访问的公网IP（新增）。
    * serverIp  编码服务访问的内网IP（新增）。
    * accessPort  编码服务公网的访问端口。
    * type  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    * serverIpv6  编码服务访问的内网IPv6 IP（新增）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listenPort' => 'int',
            'accessIp' => 'string',
            'intranetIp' => 'string',
            'publicIp' => 'string',
            'serverIp' => 'string',
            'accessPort' => 'int',
            'type' => 'string',
            'serverIpv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listenPort  编码服务监听端口。
    * accessIp  编码服务访问的公网IP（过期）。
    * intranetIp  编码服务访问的内网IP（过期）。
    * publicIp  编码服务访问的公网IP（新增）。
    * serverIp  编码服务访问的内网IP（新增）。
    * accessPort  编码服务公网的访问端口。
    * type  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    * serverIpv6  编码服务访问的内网IPv6 IP（新增）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listenPort' => 'int32',
        'accessIp' => null,
        'intranetIp' => null,
        'publicIp' => null,
        'serverIp' => null,
        'accessPort' => 'int32',
        'type' => null,
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
    * listenPort  编码服务监听端口。
    * accessIp  编码服务访问的公网IP（过期）。
    * intranetIp  编码服务访问的内网IP（过期）。
    * publicIp  编码服务访问的公网IP（新增）。
    * serverIp  编码服务访问的内网IP（新增）。
    * accessPort  编码服务公网的访问端口。
    * type  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    * serverIpv6  编码服务访问的内网IPv6 IP（新增）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listenPort' => 'listen_port',
            'accessIp' => 'access_ip',
            'intranetIp' => 'intranet_ip',
            'publicIp' => 'public_ip',
            'serverIp' => 'server_ip',
            'accessPort' => 'access_port',
            'type' => 'type',
            'serverIpv6' => 'server_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listenPort  编码服务监听端口。
    * accessIp  编码服务访问的公网IP（过期）。
    * intranetIp  编码服务访问的内网IP（过期）。
    * publicIp  编码服务访问的公网IP（新增）。
    * serverIp  编码服务访问的内网IP（新增）。
    * accessPort  编码服务公网的访问端口。
    * type  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    * serverIpv6  编码服务访问的内网IPv6 IP（新增）。
    *
    * @var string[]
    */
    protected static $setters = [
            'listenPort' => 'setListenPort',
            'accessIp' => 'setAccessIp',
            'intranetIp' => 'setIntranetIp',
            'publicIp' => 'setPublicIp',
            'serverIp' => 'setServerIp',
            'accessPort' => 'setAccessPort',
            'type' => 'setType',
            'serverIpv6' => 'setServerIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listenPort  编码服务监听端口。
    * accessIp  编码服务访问的公网IP（过期）。
    * intranetIp  编码服务访问的内网IP（过期）。
    * publicIp  编码服务访问的公网IP（新增）。
    * serverIp  编码服务访问的内网IP（新增）。
    * accessPort  编码服务公网的访问端口。
    * type  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    * serverIpv6  编码服务访问的内网IPv6 IP（新增）。
    *
    * @var string[]
    */
    protected static $getters = [
            'listenPort' => 'getListenPort',
            'accessIp' => 'getAccessIp',
            'intranetIp' => 'getIntranetIp',
            'publicIp' => 'getPublicIp',
            'serverIp' => 'getServerIp',
            'accessPort' => 'getAccessPort',
            'type' => 'getType',
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
        $this->container['listenPort'] = isset($data['listenPort']) ? $data['listenPort'] : null;
        $this->container['accessIp'] = isset($data['accessIp']) ? $data['accessIp'] : null;
        $this->container['intranetIp'] = isset($data['intranetIp']) ? $data['intranetIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['accessPort'] = isset($data['accessPort']) ? $data['accessPort'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 1024)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets listenPort
    *  编码服务监听端口。
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
    * @param int|null $listenPort 编码服务监听端口。
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
    *  编码服务访问的公网IP（过期）。
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
    * @param string|null $accessIp 编码服务访问的公网IP（过期）。
    *
    * @return $this
    */
    public function setAccessIp($accessIp)
    {
        $this->container['accessIp'] = $accessIp;
        return $this;
    }

    /**
    * Gets intranetIp
    *  编码服务访问的内网IP（过期）。
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
    * @param string|null $intranetIp 编码服务访问的内网IP（过期）。
    *
    * @return $this
    */
    public function setIntranetIp($intranetIp)
    {
        $this->container['intranetIp'] = $intranetIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  编码服务访问的公网IP（新增）。
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
    * @param string|null $publicIp 编码服务访问的公网IP（新增）。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets serverIp
    *  编码服务访问的内网IP（新增）。
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
    * @param string|null $serverIp 编码服务访问的内网IP（新增）。
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
    *  编码服务公网的访问端口。
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
    * @param int|null $accessPort 编码服务公网的访问端口。
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets type
    *  编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
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
    * @param string|null $type 编码服务的端口类型，取值如下： - adb：云手机的ADB端口 - vnc：云手机的VNC端口 - cph_app_server：云游戏客户端接入端 - cph_h5_server：云游戏H5 web网页接入端口 - 其他值：用户自定义端口
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets serverIpv6
    *  编码服务访问的内网IPv6 IP（新增）。
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
    * @param string|null $serverIpv6 编码服务访问的内网IPv6 IP（新增）。
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

