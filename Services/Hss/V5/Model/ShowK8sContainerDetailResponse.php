<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowK8sContainerDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowK8sContainerDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  服务名称
    * serviceUsername  服务用户名
    * servicePassword  服务密码
    * servicePortList  容器各服务端口信息
    * enableSimulate  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    * hosts  沙箱域名，域名之间使用 ',' 隔开
    * extra  extra
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'serviceUsername' => 'string',
            'servicePassword' => 'string',
            'servicePortList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServicePortInfo[]',
            'enableSimulate' => 'string',
            'hosts' => 'string',
            'extra' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  服务名称
    * serviceUsername  服务用户名
    * servicePassword  服务密码
    * servicePortList  容器各服务端口信息
    * enableSimulate  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    * hosts  沙箱域名，域名之间使用 ',' 隔开
    * extra  extra
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'serviceUsername' => null,
        'servicePassword' => null,
        'servicePortList' => null,
        'enableSimulate' => null,
        'hosts' => null,
        'extra' => null
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
    * serviceName  服务名称
    * serviceUsername  服务用户名
    * servicePassword  服务密码
    * servicePortList  容器各服务端口信息
    * enableSimulate  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    * hosts  沙箱域名，域名之间使用 ',' 隔开
    * extra  extra
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'serviceUsername' => 'service_username',
            'servicePassword' => 'service_password',
            'servicePortList' => 'service_port_list',
            'enableSimulate' => 'enable_simulate',
            'hosts' => 'hosts',
            'extra' => 'extra'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  服务名称
    * serviceUsername  服务用户名
    * servicePassword  服务密码
    * servicePortList  容器各服务端口信息
    * enableSimulate  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    * hosts  沙箱域名，域名之间使用 ',' 隔开
    * extra  extra
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'serviceUsername' => 'setServiceUsername',
            'servicePassword' => 'setServicePassword',
            'servicePortList' => 'setServicePortList',
            'enableSimulate' => 'setEnableSimulate',
            'hosts' => 'setHosts',
            'extra' => 'setExtra'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  服务名称
    * serviceUsername  服务用户名
    * servicePassword  服务密码
    * servicePortList  容器各服务端口信息
    * enableSimulate  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    * hosts  沙箱域名，域名之间使用 ',' 隔开
    * extra  extra
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'serviceUsername' => 'getServiceUsername',
            'servicePassword' => 'getServicePassword',
            'servicePortList' => 'getServicePortList',
            'enableSimulate' => 'getEnableSimulate',
            'hosts' => 'getHosts',
            'extra' => 'getExtra'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serviceUsername'] = isset($data['serviceUsername']) ? $data['serviceUsername'] : null;
        $this->container['servicePassword'] = isset($data['servicePassword']) ? $data['servicePassword'] : null;
        $this->container['servicePortList'] = isset($data['servicePortList']) ? $data['servicePortList'] : null;
        $this->container['enableSimulate'] = isset($data['enableSimulate']) ? $data['enableSimulate'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && !preg_match("/^.*$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['serviceUsername']) && (mb_strlen($this->container['serviceUsername']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceUsername', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceUsername']) && (mb_strlen($this->container['serviceUsername']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceUsername', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceUsername']) && !preg_match("/^.*$/", $this->container['serviceUsername'])) {
                $invalidProperties[] = "invalid value for 'serviceUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['servicePassword']) && (mb_strlen($this->container['servicePassword']) > 128)) {
                $invalidProperties[] = "invalid value for 'servicePassword', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['servicePassword']) && (mb_strlen($this->container['servicePassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'servicePassword', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['servicePassword']) && !preg_match("/^.*$/", $this->container['servicePassword'])) {
                $invalidProperties[] = "invalid value for 'servicePassword', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enableSimulate']) && (mb_strlen($this->container['enableSimulate']) > 32)) {
                $invalidProperties[] = "invalid value for 'enableSimulate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['enableSimulate']) && (mb_strlen($this->container['enableSimulate']) < 0)) {
                $invalidProperties[] = "invalid value for 'enableSimulate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hosts']) && (mb_strlen($this->container['hosts']) > 256)) {
                $invalidProperties[] = "invalid value for 'hosts', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hosts']) && (mb_strlen($this->container['hosts']) < 1)) {
                $invalidProperties[] = "invalid value for 'hosts', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hosts']) && !preg_match("/^.*$/", $this->container['hosts'])) {
                $invalidProperties[] = "invalid value for 'hosts', must be conform to the pattern /^.*$/.";
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
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serviceUsername
    *  服务用户名
    *
    * @return string|null
    */
    public function getServiceUsername()
    {
        return $this->container['serviceUsername'];
    }

    /**
    * Sets serviceUsername
    *
    * @param string|null $serviceUsername 服务用户名
    *
    * @return $this
    */
    public function setServiceUsername($serviceUsername)
    {
        $this->container['serviceUsername'] = $serviceUsername;
        return $this;
    }

    /**
    * Gets servicePassword
    *  服务密码
    *
    * @return string|null
    */
    public function getServicePassword()
    {
        return $this->container['servicePassword'];
    }

    /**
    * Sets servicePassword
    *
    * @param string|null $servicePassword 服务密码
    *
    * @return $this
    */
    public function setServicePassword($servicePassword)
    {
        $this->container['servicePassword'] = $servicePassword;
        return $this;
    }

    /**
    * Gets servicePortList
    *  容器各服务端口信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServicePortInfo[]|null
    */
    public function getServicePortList()
    {
        return $this->container['servicePortList'];
    }

    /**
    * Sets servicePortList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServicePortInfo[]|null $servicePortList 容器各服务端口信息
    *
    * @return $this
    */
    public function setServicePortList($servicePortList)
    {
        $this->container['servicePortList'] = $servicePortList;
        return $this;
    }

    /**
    * Gets enableSimulate
    *  数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    *
    * @return string|null
    */
    public function getEnableSimulate()
    {
        return $this->container['enableSimulate'];
    }

    /**
    * Sets enableSimulate
    *
    * @param string|null $enableSimulate 数据仿真，默认关闭。开启后将在沙箱中注入仿真数据 - open : 开启 - close : 关闭
    *
    * @return $this
    */
    public function setEnableSimulate($enableSimulate)
    {
        $this->container['enableSimulate'] = $enableSimulate;
        return $this;
    }

    /**
    * Gets hosts
    *  沙箱域名，域名之间使用 ',' 隔开
    *
    * @return string|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string|null $hosts 沙箱域名，域名之间使用 ',' 隔开
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets extra
    *  extra
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraInfo|null
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraInfo|null $extra extra
    *
    * @return $this
    */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;
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

