<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckPolicyGroupHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckPolicyGroupHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentVersion  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    * version  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    * groupName  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'agentVersion' => 'string',
            'version' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentVersion  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    * version  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    * groupName  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'agentVersion' => null,
        'version' => null,
        'groupName' => null
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
    * agentId  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentVersion  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    * version  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    * groupName  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'agentVersion' => 'agent_version',
            'version' => 'version',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentVersion  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    * version  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    * groupName  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'agentVersion' => 'setAgentVersion',
            'version' => 'setVersion',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentVersion  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    * version  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    * groupName  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'agentVersion' => 'getAgentVersion',
            'version' => 'getVersion',
            'groupName' => 'getGroupName'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentVersion']) && !preg_match("/^.*$/", $this->container['agentVersion'])) {
                $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^.*$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
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
    * @param string|null $agentId **参数解释**: agent id **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机ID **取值范围**: 字符长度1-128
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
    * @param string|null $hostId **参数解释**: 主机ID **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
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
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
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
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**： agent版本 **取值范围**: 字符长度1-64位
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
    * @param string|null $agentVersion **参数解释**： agent版本 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
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
    * @param string|null $version **参数解释**： 防护版本 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $groupName **参数解释**： 服务器组名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

