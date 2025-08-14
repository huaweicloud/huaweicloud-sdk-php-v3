<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    * laddr  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    * status  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    * port  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    * type  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    * pid  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    * path  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'laddr' => 'string',
            'status' => 'string',
            'port' => 'int',
            'type' => 'string',
            'pid' => 'int',
            'path' => 'string',
            'agentId' => 'string',
            'containerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    * laddr  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    * status  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    * port  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    * type  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    * pid  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    * path  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'laddr' => null,
        'status' => null,
        'port' => null,
        'type' => null,
        'pid' => null,
        'path' => null,
        'agentId' => null,
        'containerId' => null
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
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    * laddr  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    * status  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    * port  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    * type  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    * pid  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    * path  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'laddr' => 'laddr',
            'status' => 'status',
            'port' => 'port',
            'type' => 'type',
            'pid' => 'pid',
            'path' => 'path',
            'agentId' => 'agent_id',
            'containerId' => 'container_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    * laddr  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    * status  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    * port  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    * type  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    * pid  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    * path  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'laddr' => 'setLaddr',
            'status' => 'setStatus',
            'port' => 'setPort',
            'type' => 'setType',
            'pid' => 'setPid',
            'path' => 'setPath',
            'agentId' => 'setAgentId',
            'containerId' => 'setContainerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    * laddr  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    * status  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    * port  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    * type  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    * pid  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    * path  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'laddr' => 'getLaddr',
            'status' => 'getStatus',
            'port' => 'getPort',
            'type' => 'getType',
            'pid' => 'getPid',
            'path' => 'getPath',
            'agentId' => 'getAgentId',
            'containerId' => 'getContainerId'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['laddr'] = isset($data['laddr']) ? $data['laddr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 10)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'pid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] < 1)) {
                $invalidProperties[] = "invalid value for 'pid', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  **参数解释**: 主机ID **取值范围**: 字符长度1-128位
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
    * @param string|null $hostId **参数解释**: 主机ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets laddr
    *  **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getLaddr()
    {
        return $this->container['laddr'];
    }

    /**
    * Sets laddr
    *
    * @param string|null $laddr **参数解释**: 监听ip **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setLaddr($laddr)
    {
        $this->container['laddr'] = $laddr;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
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
    * @param string|null $status **参数解释**: 端口状态 **取值范围**: - normal: 正常 - danger: 危险 - unknown: 未知
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**: 端口号 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
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
    * @param string|null $type **参数解释**: 端口类型：目前包括TCP，UDP两种 **取值范围**: - TCP: TCP类型的端口 - UDP: UDP类型的端口
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid **参数解释**: 进程ID **取值范围**: 最小值1，最大值65535
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 进程可执行文件路径 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
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
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度0-128位
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
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
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

