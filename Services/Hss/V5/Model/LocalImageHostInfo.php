<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LocalImageHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LocalImageHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  Agent ID
    * agentStatus  agent_status
    * hostName  服务器名称
    * hostId  服务器ID
    * version  服务器开通的版本
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * dockerName  docker名称
    * dockerType  docker类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'agentStatus' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'version' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'dockerName' => 'string',
            'dockerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  Agent ID
    * agentStatus  agent_status
    * hostName  服务器名称
    * hostId  服务器ID
    * version  服务器开通的版本
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * dockerName  docker名称
    * dockerType  docker类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentStatus' => null,
        'hostName' => null,
        'hostId' => null,
        'version' => null,
        'privateIp' => null,
        'publicIp' => null,
        'dockerName' => null,
        'dockerType' => null
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
    * agentId  Agent ID
    * agentStatus  agent_status
    * hostName  服务器名称
    * hostId  服务器ID
    * version  服务器开通的版本
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * dockerName  docker名称
    * dockerType  docker类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'agentStatus' => 'agent_status',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'version' => 'version',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'dockerName' => 'docker_name',
            'dockerType' => 'docker_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  Agent ID
    * agentStatus  agent_status
    * hostName  服务器名称
    * hostId  服务器ID
    * version  服务器开通的版本
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * dockerName  docker名称
    * dockerType  docker类型
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'agentStatus' => 'setAgentStatus',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'version' => 'setVersion',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'dockerName' => 'setDockerName',
            'dockerType' => 'setDockerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  Agent ID
    * agentStatus  agent_status
    * hostName  服务器名称
    * hostId  服务器ID
    * version  服务器开通的版本
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * dockerName  docker名称
    * dockerType  docker类型
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'agentStatus' => 'getAgentStatus',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'version' => 'getVersion',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'dockerName' => 'getDockerName',
            'dockerType' => 'getDockerType'
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
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['dockerName'] = isset($data['dockerName']) ? $data['dockerName'] : null;
        $this->container['dockerType'] = isset($data['dockerType']) ? $data['dockerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dockerName']) && (mb_strlen($this->container['dockerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dockerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dockerName']) && (mb_strlen($this->container['dockerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dockerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dockerType']) && (mb_strlen($this->container['dockerType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dockerType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dockerType']) && (mb_strlen($this->container['dockerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'dockerType', the character length must be bigger than or equal to 0.";
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
    *  Agent ID
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId Agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentStatus
    *  agent_status
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus agent_status
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets version
    *  服务器开通的版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 服务器开通的版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有IP地址
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有IP地址
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP地址
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
    * @param string|null $publicIp 弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets dockerName
    *  docker名称
    *
    * @return string|null
    */
    public function getDockerName()
    {
        return $this->container['dockerName'];
    }

    /**
    * Sets dockerName
    *
    * @param string|null $dockerName docker名称
    *
    * @return $this
    */
    public function setDockerName($dockerName)
    {
        $this->container['dockerName'] = $dockerName;
        return $this;
    }

    /**
    * Gets dockerType
    *  docker类型
    *
    * @return string|null
    */
    public function getDockerType()
    {
        return $this->container['dockerType'];
    }

    /**
    * Sets dockerType
    *
    * @param string|null $dockerType docker类型
    *
    * @return $this
    */
    public function setDockerType($dockerType)
    {
        $this->container['dockerType'] = $dockerType;
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

