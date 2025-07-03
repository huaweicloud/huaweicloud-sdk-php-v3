<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * businessName  应用名称。
    * businessId  应用id。
    * appName  组件名称。
    * hostName  主机名称。
    * instanceName  实例名称。
    * ipAddress  主机ip地址。
    * envId  环境ID。
    * agentVersion  Javaagent版本。
    * lastHeartbeat  最后心跳时间。
    * registerTime  注册时间。
    * lastModifyUserId  最后修改用户id。
    * instanceStatus  实例状态。
    * lastModifyUserName  最后修改用户名称。
    * lastModifyTime  最后修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'int',
            'businessName' => 'string',
            'businessId' => 'int',
            'appName' => 'string',
            'hostName' => 'string',
            'instanceName' => 'string',
            'ipAddress' => 'string',
            'envId' => 'int',
            'agentVersion' => 'string',
            'lastHeartbeat' => 'int',
            'registerTime' => 'int',
            'lastModifyUserId' => 'string',
            'instanceStatus' => 'int',
            'lastModifyUserName' => 'string',
            'lastModifyTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id。
    * businessName  应用名称。
    * businessId  应用id。
    * appName  组件名称。
    * hostName  主机名称。
    * instanceName  实例名称。
    * ipAddress  主机ip地址。
    * envId  环境ID。
    * agentVersion  Javaagent版本。
    * lastHeartbeat  最后心跳时间。
    * registerTime  注册时间。
    * lastModifyUserId  最后修改用户id。
    * instanceStatus  实例状态。
    * lastModifyUserName  最后修改用户名称。
    * lastModifyTime  最后修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => 'int64',
        'businessName' => null,
        'businessId' => 'int64',
        'appName' => null,
        'hostName' => null,
        'instanceName' => null,
        'ipAddress' => null,
        'envId' => 'int64',
        'agentVersion' => null,
        'lastHeartbeat' => 'int64',
        'registerTime' => 'int64',
        'lastModifyUserId' => null,
        'instanceStatus' => 'int32',
        'lastModifyUserName' => null,
        'lastModifyTime' => 'int64'
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
    * instanceId  实例id。
    * businessName  应用名称。
    * businessId  应用id。
    * appName  组件名称。
    * hostName  主机名称。
    * instanceName  实例名称。
    * ipAddress  主机ip地址。
    * envId  环境ID。
    * agentVersion  Javaagent版本。
    * lastHeartbeat  最后心跳时间。
    * registerTime  注册时间。
    * lastModifyUserId  最后修改用户id。
    * instanceStatus  实例状态。
    * lastModifyUserName  最后修改用户名称。
    * lastModifyTime  最后修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'businessName' => 'business_name',
            'businessId' => 'business_id',
            'appName' => 'app_name',
            'hostName' => 'host_name',
            'instanceName' => 'instance_name',
            'ipAddress' => 'ip_address',
            'envId' => 'env_id',
            'agentVersion' => 'agent_version',
            'lastHeartbeat' => 'last_heartbeat',
            'registerTime' => 'register_time',
            'lastModifyUserId' => 'last_modify_user_id',
            'instanceStatus' => 'instance_status',
            'lastModifyUserName' => 'last_modify_user_name',
            'lastModifyTime' => 'last_modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id。
    * businessName  应用名称。
    * businessId  应用id。
    * appName  组件名称。
    * hostName  主机名称。
    * instanceName  实例名称。
    * ipAddress  主机ip地址。
    * envId  环境ID。
    * agentVersion  Javaagent版本。
    * lastHeartbeat  最后心跳时间。
    * registerTime  注册时间。
    * lastModifyUserId  最后修改用户id。
    * instanceStatus  实例状态。
    * lastModifyUserName  最后修改用户名称。
    * lastModifyTime  最后修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'businessName' => 'setBusinessName',
            'businessId' => 'setBusinessId',
            'appName' => 'setAppName',
            'hostName' => 'setHostName',
            'instanceName' => 'setInstanceName',
            'ipAddress' => 'setIpAddress',
            'envId' => 'setEnvId',
            'agentVersion' => 'setAgentVersion',
            'lastHeartbeat' => 'setLastHeartbeat',
            'registerTime' => 'setRegisterTime',
            'lastModifyUserId' => 'setLastModifyUserId',
            'instanceStatus' => 'setInstanceStatus',
            'lastModifyUserName' => 'setLastModifyUserName',
            'lastModifyTime' => 'setLastModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id。
    * businessName  应用名称。
    * businessId  应用id。
    * appName  组件名称。
    * hostName  主机名称。
    * instanceName  实例名称。
    * ipAddress  主机ip地址。
    * envId  环境ID。
    * agentVersion  Javaagent版本。
    * lastHeartbeat  最后心跳时间。
    * registerTime  注册时间。
    * lastModifyUserId  最后修改用户id。
    * instanceStatus  实例状态。
    * lastModifyUserName  最后修改用户名称。
    * lastModifyTime  最后修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'businessName' => 'getBusinessName',
            'businessId' => 'getBusinessId',
            'appName' => 'getAppName',
            'hostName' => 'getHostName',
            'instanceName' => 'getInstanceName',
            'ipAddress' => 'getIpAddress',
            'envId' => 'getEnvId',
            'agentVersion' => 'getAgentVersion',
            'lastHeartbeat' => 'getLastHeartbeat',
            'registerTime' => 'getRegisterTime',
            'lastModifyUserId' => 'getLastModifyUserId',
            'instanceStatus' => 'getInstanceStatus',
            'lastModifyUserName' => 'getLastModifyUserName',
            'lastModifyTime' => 'getLastModifyTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['lastHeartbeat'] = isset($data['lastHeartbeat']) ? $data['lastHeartbeat'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['lastModifyUserId'] = isset($data['lastModifyUserId']) ? $data['lastModifyUserId'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['lastModifyUserName'] = isset($data['lastModifyUserName']) ? $data['lastModifyUserName'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
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
    * Gets instanceId
    *  实例id。
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets businessName
    *  应用名称。
    *
    * @return string|null
    */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
    * Sets businessName
    *
    * @param string|null $businessName 应用名称。
    *
    * @return $this
    */
    public function setBusinessName($businessName)
    {
        $this->container['businessName'] = $businessName;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称。
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets ipAddress
    *  主机ip地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 主机ip地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets envId
    *  环境ID。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境ID。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets agentVersion
    *  Javaagent版本。
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion Javaagent版本。
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets lastHeartbeat
    *  最后心跳时间。
    *
    * @return int|null
    */
    public function getLastHeartbeat()
    {
        return $this->container['lastHeartbeat'];
    }

    /**
    * Sets lastHeartbeat
    *
    * @param int|null $lastHeartbeat 最后心跳时间。
    *
    * @return $this
    */
    public function setLastHeartbeat($lastHeartbeat)
    {
        $this->container['lastHeartbeat'] = $lastHeartbeat;
        return $this;
    }

    /**
    * Gets registerTime
    *  注册时间。
    *
    * @return int|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param int|null $registerTime 注册时间。
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets lastModifyUserId
    *  最后修改用户id。
    *
    * @return string|null
    */
    public function getLastModifyUserId()
    {
        return $this->container['lastModifyUserId'];
    }

    /**
    * Sets lastModifyUserId
    *
    * @param string|null $lastModifyUserId 最后修改用户id。
    *
    * @return $this
    */
    public function setLastModifyUserId($lastModifyUserId)
    {
        $this->container['lastModifyUserId'] = $lastModifyUserId;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态。
    *
    * @return int|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param int|null $instanceStatus 实例状态。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets lastModifyUserName
    *  最后修改用户名称。
    *
    * @return string|null
    */
    public function getLastModifyUserName()
    {
        return $this->container['lastModifyUserName'];
    }

    /**
    * Sets lastModifyUserName
    *
    * @param string|null $lastModifyUserName 最后修改用户名称。
    *
    * @return $this
    */
    public function setLastModifyUserName($lastModifyUserName)
    {
        $this->container['lastModifyUserName'] = $lastModifyUserName;
        return $this;
    }

    /**
    * Gets lastModifyTime
    *  最后修改时间。
    *
    * @return int|null
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param int|null $lastModifyTime 最后修改时间。
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
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

