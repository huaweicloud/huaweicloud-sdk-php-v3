<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Agent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Agent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  客户端创建时间
    * updatedAt  客户端更新时间
    * agentId  客户端ID
    * agentVersion  客户端版本号
    * agentType  客户端类型
    * hostName  客户端所在的主机名
    * hostNickname  客户端所在的主机昵称
    * hostIp  客户端所在主机的IP
    * hostOs  客户端主机所在的操作系统
    * status  客户端状态
    * lastActiveTime  客户端上次激活时间
    * paths  客户端的备份路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'agentId' => 'string',
            'agentVersion' => 'string',
            'agentType' => 'string',
            'hostName' => 'string',
            'hostNickname' => 'string',
            'hostIp' => 'string',
            'hostOs' => 'string',
            'status' => 'string',
            'lastActiveTime' => '\DateTime',
            'paths' => '\HuaweiCloud\SDK\Cbr\V1\Model\Path[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  客户端创建时间
    * updatedAt  客户端更新时间
    * agentId  客户端ID
    * agentVersion  客户端版本号
    * agentType  客户端类型
    * hostName  客户端所在的主机名
    * hostNickname  客户端所在的主机昵称
    * hostIp  客户端所在主机的IP
    * hostOs  客户端主机所在的操作系统
    * status  客户端状态
    * lastActiveTime  客户端上次激活时间
    * paths  客户端的备份路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'agentId' => null,
        'agentVersion' => null,
        'agentType' => null,
        'hostName' => null,
        'hostNickname' => null,
        'hostIp' => null,
        'hostOs' => null,
        'status' => null,
        'lastActiveTime' => 'date-time',
        'paths' => null
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
    * createdAt  客户端创建时间
    * updatedAt  客户端更新时间
    * agentId  客户端ID
    * agentVersion  客户端版本号
    * agentType  客户端类型
    * hostName  客户端所在的主机名
    * hostNickname  客户端所在的主机昵称
    * hostIp  客户端所在主机的IP
    * hostOs  客户端主机所在的操作系统
    * status  客户端状态
    * lastActiveTime  客户端上次激活时间
    * paths  客户端的备份路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'agentId' => 'agent_id',
            'agentVersion' => 'agent_version',
            'agentType' => 'agent_type',
            'hostName' => 'host_name',
            'hostNickname' => 'host_nickname',
            'hostIp' => 'host_ip',
            'hostOs' => 'host_os',
            'status' => 'status',
            'lastActiveTime' => 'last_active_time',
            'paths' => 'paths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  客户端创建时间
    * updatedAt  客户端更新时间
    * agentId  客户端ID
    * agentVersion  客户端版本号
    * agentType  客户端类型
    * hostName  客户端所在的主机名
    * hostNickname  客户端所在的主机昵称
    * hostIp  客户端所在主机的IP
    * hostOs  客户端主机所在的操作系统
    * status  客户端状态
    * lastActiveTime  客户端上次激活时间
    * paths  客户端的备份路径
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'agentId' => 'setAgentId',
            'agentVersion' => 'setAgentVersion',
            'agentType' => 'setAgentType',
            'hostName' => 'setHostName',
            'hostNickname' => 'setHostNickname',
            'hostIp' => 'setHostIp',
            'hostOs' => 'setHostOs',
            'status' => 'setStatus',
            'lastActiveTime' => 'setLastActiveTime',
            'paths' => 'setPaths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  客户端创建时间
    * updatedAt  客户端更新时间
    * agentId  客户端ID
    * agentVersion  客户端版本号
    * agentType  客户端类型
    * hostName  客户端所在的主机名
    * hostNickname  客户端所在的主机昵称
    * hostIp  客户端所在主机的IP
    * hostOs  客户端主机所在的操作系统
    * status  客户端状态
    * lastActiveTime  客户端上次激活时间
    * paths  客户端的备份路径
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'agentId' => 'getAgentId',
            'agentVersion' => 'getAgentVersion',
            'agentType' => 'getAgentType',
            'hostName' => 'getHostName',
            'hostNickname' => 'getHostNickname',
            'hostIp' => 'getHostIp',
            'hostOs' => 'getHostOs',
            'status' => 'getStatus',
            'lastActiveTime' => 'getLastActiveTime',
            'paths' => 'getPaths'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostNickname'] = isset($data['hostNickname']) ? $data['hostNickname'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostOs'] = isset($data['hostOs']) ? $data['hostOs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastActiveTime'] = isset($data['lastActiveTime']) ? $data['lastActiveTime'] : null;
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
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
    * Gets createdAt
    *  客户端创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 客户端创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  客户端更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 客户端更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets agentId
    *  客户端ID
    *
    * @return string
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string $agentId 客户端ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentVersion
    *  客户端版本号
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
    * @param string|null $agentVersion 客户端版本号
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets agentType
    *  客户端类型
    *
    * @return string|null
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string|null $agentType 客户端类型
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
        return $this;
    }

    /**
    * Gets hostName
    *  客户端所在的主机名
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
    * @param string|null $hostName 客户端所在的主机名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostNickname
    *  客户端所在的主机昵称
    *
    * @return string|null
    */
    public function getHostNickname()
    {
        return $this->container['hostNickname'];
    }

    /**
    * Sets hostNickname
    *
    * @param string|null $hostNickname 客户端所在的主机昵称
    *
    * @return $this
    */
    public function setHostNickname($hostNickname)
    {
        $this->container['hostNickname'] = $hostNickname;
        return $this;
    }

    /**
    * Gets hostIp
    *  客户端所在主机的IP
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 客户端所在主机的IP
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets hostOs
    *  客户端主机所在的操作系统
    *
    * @return string|null
    */
    public function getHostOs()
    {
        return $this->container['hostOs'];
    }

    /**
    * Sets hostOs
    *
    * @param string|null $hostOs 客户端主机所在的操作系统
    *
    * @return $this
    */
    public function setHostOs($hostOs)
    {
        $this->container['hostOs'] = $hostOs;
        return $this;
    }

    /**
    * Gets status
    *  客户端状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 客户端状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastActiveTime
    *  客户端上次激活时间
    *
    * @return \DateTime|null
    */
    public function getLastActiveTime()
    {
        return $this->container['lastActiveTime'];
    }

    /**
    * Sets lastActiveTime
    *
    * @param \DateTime|null $lastActiveTime 客户端上次激活时间
    *
    * @return $this
    */
    public function setLastActiveTime($lastActiveTime)
    {
        $this->container['lastActiveTime'] = $lastActiveTime;
        return $this;
    }

    /**
    * Gets paths
    *  客户端的备份路径
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Path[]|null
    */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
    * Sets paths
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Path[]|null $paths 客户端的备份路径
    *
    * @return $this
    */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;
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

