<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceInfoNacosBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceInfoNacosBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * clusterName  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * groupName  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    * serviceName  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    * serverConfig  nacos服务端配置信息。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'clusterName' => 'string',
            'groupName' => 'string',
            'serviceName' => 'string',
            'serverConfig' => '\HuaweiCloud\SDK\Apig\V2\Model\NacosServerConfig[]',
            'userInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\NacosUserInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * clusterName  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * groupName  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    * serviceName  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    * serverConfig  nacos服务端配置信息。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'clusterName' => null,
        'groupName' => null,
        'serviceName' => null,
        'serverConfig' => null,
        'userInfo' => null
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
    * namespace  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * clusterName  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * groupName  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    * serviceName  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    * serverConfig  nacos服务端配置信息。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'clusterName' => 'cluster_name',
            'groupName' => 'group_name',
            'serviceName' => 'service_name',
            'serverConfig' => 'server_config',
            'userInfo' => 'user_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * clusterName  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * groupName  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    * serviceName  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    * serverConfig  nacos服务端配置信息。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'clusterName' => 'setClusterName',
            'groupName' => 'setGroupName',
            'serviceName' => 'setServiceName',
            'serverConfig' => 'setServerConfig',
            'userInfo' => 'setUserInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * clusterName  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    * groupName  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    * serviceName  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    * serverConfig  nacos服务端配置信息。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'clusterName' => 'getClusterName',
            'groupName' => 'getGroupName',
            'serviceName' => 'getServiceName',
            'serverConfig' => 'getServerConfig',
            'userInfo' => 'getUserInfo'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serverConfig'] = isset($data['serverConfig']) ? $data['serverConfig'] : null;
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^[\\w-]+$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^[0-9a-zA-Z-_]+$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^[0-9a-zA-Z-_]+$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^[a-zA-Z0-9-_:\\.]*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^[a-zA-Z0-9-_:\\.]*$/.";
            }
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
            if ((mb_strlen($this->container['serviceName']) > 512)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!@).((?!@@)[^\\u4E00-\\u9FA5])*$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^(?!@).((?!@@)[^\\u4E00-\\u9FA5])*$/.";
            }
        if ($this->container['serverConfig'] === null) {
            $invalidProperties[] = "'serverConfig' can't be null";
        }
        if ($this->container['userInfo'] === null) {
            $invalidProperties[] = "'userInfo' can't be null";
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
    * Gets namespace
    *  命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间ID，当选择默认命名空间public时，此项为空。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称，默认为DEFAULT。由字母、数字、连接符('-')、下划线('_')组成且64个字符之内。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets groupName
    *  分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分组名称，默认为DEFAULT_GROUP。由字母、数字、连接符('-')、下划线('_')、点号('.')、冒号(':')组成且128个字符之内。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets serviceName
    *  微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName 微服务名称。不包含中文和@@，不得以@开头，512个字符以内。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serverConfig
    *  nacos服务端配置信息。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\NacosServerConfig[]
    */
    public function getServerConfig()
    {
        return $this->container['serverConfig'];
    }

    /**
    * Sets serverConfig
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\NacosServerConfig[] $serverConfig nacos服务端配置信息。
    *
    * @return $this
    */
    public function setServerConfig($serverConfig)
    {
        $this->container['serverConfig'] = $serverConfig;
        return $this;
    }

    /**
    * Gets userInfo
    *  userInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\NacosUserInfo
    */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
    * Sets userInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\NacosUserInfo $userInfo userInfo
    *
    * @return $this
    */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;
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

