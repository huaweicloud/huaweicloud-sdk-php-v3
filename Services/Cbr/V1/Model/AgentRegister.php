<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentRegister implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentRegister';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  客户端ID
    * hostName  客户端所在的主机名
    * hostIp  客户端所在主机的IP
    * hostOs  客户端所在主机的操作系统
    * hostNickname  客户端所在主机的主机别名
    * agentVersion  客户端版本
    * agentType  客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'hostOs' => 'string',
            'hostNickname' => 'string',
            'agentVersion' => 'string',
            'agentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  客户端ID
    * hostName  客户端所在的主机名
    * hostIp  客户端所在主机的IP
    * hostOs  客户端所在主机的操作系统
    * hostNickname  客户端所在主机的主机别名
    * agentVersion  客户端版本
    * agentType  客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostName' => null,
        'hostIp' => null,
        'hostOs' => null,
        'hostNickname' => null,
        'agentVersion' => null,
        'agentType' => null
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
    * agentId  客户端ID
    * hostName  客户端所在的主机名
    * hostIp  客户端所在主机的IP
    * hostOs  客户端所在主机的操作系统
    * hostNickname  客户端所在主机的主机别名
    * agentVersion  客户端版本
    * agentType  客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'hostOs' => 'host_os',
            'hostNickname' => 'host_nickname',
            'agentVersion' => 'agent_version',
            'agentType' => 'agent_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  客户端ID
    * hostName  客户端所在的主机名
    * hostIp  客户端所在主机的IP
    * hostOs  客户端所在主机的操作系统
    * hostNickname  客户端所在主机的主机别名
    * agentVersion  客户端版本
    * agentType  客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'hostOs' => 'setHostOs',
            'hostNickname' => 'setHostNickname',
            'agentVersion' => 'setAgentVersion',
            'agentType' => 'setAgentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  客户端ID
    * hostName  客户端所在的主机名
    * hostIp  客户端所在主机的IP
    * hostOs  客户端所在主机的操作系统
    * hostNickname  客户端所在主机的主机别名
    * agentVersion  客户端版本
    * agentType  客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'hostOs' => 'getHostOs',
            'hostNickname' => 'getHostNickname',
            'agentVersion' => 'getAgentVersion',
            'agentType' => 'getAgentType'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostOs'] = isset($data['hostOs']) ? $data['hostOs'] : null;
        $this->container['hostNickname'] = isset($data['hostNickname']) ? $data['hostNickname'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
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
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
        if ($this->container['hostIp'] === null) {
            $invalidProperties[] = "'hostIp' can't be null";
        }
        if ($this->container['hostOs'] === null) {
            $invalidProperties[] = "'hostOs' can't be null";
        }
            if (!is_null($this->container['agentVersion']) && !preg_match("/((\\d){1,3}\\.){2}(\\d){1,3}$/", $this->container['agentVersion'])) {
                $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /((\\d){1,3}\\.){2}(\\d){1,3}$/.";
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
    * Gets hostName
    *  客户端所在的主机名
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 客户端所在的主机名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  客户端所在主机的IP
    *
    * @return string
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string $hostIp 客户端所在主机的IP
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
    *  客户端所在主机的操作系统
    *
    * @return string
    */
    public function getHostOs()
    {
        return $this->container['hostOs'];
    }

    /**
    * Sets hostOs
    *
    * @param string $hostOs 客户端所在主机的操作系统
    *
    * @return $this
    */
    public function setHostOs($hostOs)
    {
        $this->container['hostOs'] = $hostOs;
        return $this;
    }

    /**
    * Gets hostNickname
    *  客户端所在主机的主机别名
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
    * @param string|null $hostNickname 客户端所在主机的主机别名
    *
    * @return $this
    */
    public function setHostNickname($hostNickname)
    {
        $this->container['hostNickname'] = $hostNickname;
        return $this;
    }

    /**
    * Gets agentVersion
    *  客户端版本
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
    * @param string|null $agentVersion 客户端版本
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
    *  客户端类型，分本地客户端和云上客户端(cloud/native)
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
    * @param string|null $agentType 客户端类型，分本地客户端和云上客户端(cloud/native)
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
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

