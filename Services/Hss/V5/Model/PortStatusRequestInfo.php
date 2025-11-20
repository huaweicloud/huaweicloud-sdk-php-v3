<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * port  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * portType  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'port' => 'int',
            'portType' => 'string',
            'containerId' => 'string',
            'hostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * port  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * portType  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'port' => 'int32',
        'portType' => null,
        'containerId' => null,
        'hostId' => null
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
    * agentId  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * port  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * portType  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'port' => 'port',
            'portType' => 'port_type',
            'containerId' => 'container_id',
            'hostId' => 'host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * port  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * portType  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'port' => 'setPort',
            'portType' => 'setPortType',
            'containerId' => 'setContainerId',
            'hostId' => 'setHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * port  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * portType  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'port' => 'getPort',
            'portType' => 'getPortType',
            'containerId' => 'getContainerId',
            'hostId' => 'getHostId'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['portType'] = isset($data['portType']) ? $data['portType'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
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
            if ((mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['portType'] === null) {
            $invalidProperties[] = "'portType' can't be null";
        }
            if (!preg_match("/^(TCP|UDP)$/", $this->container['portType'])) {
                $invalidProperties[] = "invalid value for 'portType', must be conform to the pattern /^(TCP|UDP)$/.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string $agentId **参数解释**: agent id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port **参数解释**: 本地端口号 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets portType
    *  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPortType()
    {
        return $this->container['portType'];
    }

    /**
    * Sets portType
    *
    * @param string $portType **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - TCP - UDP  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPortType($portType)
    {
        $this->container['portType'] = $portType;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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

