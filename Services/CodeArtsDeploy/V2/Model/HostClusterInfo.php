<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主机集群id
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * permission  permission
    * nickName  创建人名称
    * envCount  环境数量
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostCount' => 'int',
            'name' => 'string',
            'projectId' => 'string',
            'os' => 'string',
            'slaveClusterId' => 'string',
            'description' => 'string',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionClusterDetail',
            'nickName' => 'string',
            'envCount' => 'int',
            'isProxyMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主机集群id
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * permission  permission
    * nickName  创建人名称
    * envCount  环境数量
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostCount' => 'int32',
        'name' => null,
        'projectId' => null,
        'os' => null,
        'slaveClusterId' => null,
        'description' => null,
        'permission' => null,
        'nickName' => null,
        'envCount' => null,
        'isProxyMode' => null
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
    * id  主机集群id
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * permission  permission
    * nickName  创建人名称
    * envCount  环境数量
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostCount' => 'host_count',
            'name' => 'name',
            'projectId' => 'project_id',
            'os' => 'os',
            'slaveClusterId' => 'slave_cluster_id',
            'description' => 'description',
            'permission' => 'permission',
            'nickName' => 'nick_name',
            'envCount' => 'env_count',
            'isProxyMode' => 'is_proxy_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主机集群id
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * permission  permission
    * nickName  创建人名称
    * envCount  环境数量
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostCount' => 'setHostCount',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'os' => 'setOs',
            'slaveClusterId' => 'setSlaveClusterId',
            'description' => 'setDescription',
            'permission' => 'setPermission',
            'nickName' => 'setNickName',
            'envCount' => 'setEnvCount',
            'isProxyMode' => 'setIsProxyMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主机集群id
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * permission  permission
    * nickName  创建人名称
    * envCount  环境数量
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostCount' => 'getHostCount',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'os' => 'getOs',
            'slaveClusterId' => 'getSlaveClusterId',
            'description' => 'getDescription',
            'permission' => 'getPermission',
            'nickName' => 'getNickName',
            'envCount' => 'getEnvCount',
            'isProxyMode' => 'getIsProxyMode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hostCount'] = isset($data['hostCount']) ? $data['hostCount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['envCount'] = isset($data['envCount']) ? $data['envCount'] : null;
        $this->container['isProxyMode'] = isset($data['isProxyMode']) ? $data['isProxyMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['id']) && !preg_match("/^[0-9A-Za-z]{32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9A-Za-z]{32}$/.";
            }
            if (!is_null($this->container['hostCount']) && ($this->container['hostCount'] > 200)) {
                $invalidProperties[] = "invalid value for 'hostCount', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['hostCount']) && ($this->container['hostCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  主机集群id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 主机集群id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets hostCount
    *  集群内主机数量，一个主机集群内最多可添加200台主机
    *
    * @return int|null
    */
    public function getHostCount()
    {
        return $this->container['hostCount'];
    }

    /**
    * Sets hostCount
    *
    * @param int|null $hostCount 集群内主机数量，一个主机集群内最多可添加200台主机
    *
    * @return $this
    */
    public function setHostCount($hostCount)
    {
        $this->container['hostCount'] = $hostCount;
        return $this;
    }

    /**
    * Gets name
    *  主机集群名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 主机集群名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionClusterDetail|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionClusterDetail|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets nickName
    *  创建人名称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 创建人名称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets envCount
    *  环境数量
    *
    * @return int|null
    */
    public function getEnvCount()
    {
        return $this->container['envCount'];
    }

    /**
    * Sets envCount
    *
    * @param int|null $envCount 环境数量
    *
    * @return $this
    */
    public function setEnvCount($envCount)
    {
        $this->container['envCount'] = $envCount;
        return $this;
    }

    /**
    * Gets isProxyMode
    *  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @return int|null
    */
    public function getIsProxyMode()
    {
        return $this->container['isProxyMode'];
    }

    /**
    * Sets isProxyMode
    *
    * @param int|null $isProxyMode 主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @return $this
    */
    public function setIsProxyMode($isProxyMode)
    {
        $this->container['isProxyMode'] = $isProxyMode;
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

