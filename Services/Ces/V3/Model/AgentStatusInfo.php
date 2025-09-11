<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentStatusInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentStatusInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * uniagentStatus  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    * extensions  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'uniagentStatus' => 'string',
            'extensions' => '\HuaweiCloud\SDK\Ces\V3\Model\ExtensionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * uniagentStatus  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    * extensions  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'uniagentStatus' => null,
        'extensions' => null
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
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * uniagentStatus  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    * extensions  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'uniagentStatus' => 'uniagent_status',
            'extensions' => 'extensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * uniagentStatus  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    * extensions  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'uniagentStatus' => 'setUniagentStatus',
            'extensions' => 'setExtensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * uniagentStatus  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    * extensions  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'uniagentStatus' => 'getUniagentStatus',
            'extensions' => 'getExtensions'
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
    const UNIAGENT_STATUS_NONE = 'none';
    const UNIAGENT_STATUS_RUNNING = 'running';
    const UNIAGENT_STATUS_SILENT = 'silent';
    const UNIAGENT_STATUS_UNKNOWN = 'unknown';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUniagentStatusAllowableValues()
    {
        return [
            self::UNIAGENT_STATUS_NONE,
            self::UNIAGENT_STATUS_RUNNING,
            self::UNIAGENT_STATUS_SILENT,
            self::UNIAGENT_STATUS_UNKNOWN,
        ];
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
        $this->container['uniagentStatus'] = isset($data['uniagentStatus']) ? $data['uniagentStatus'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            $allowedValues = $this->getUniagentStatusAllowableValues();
                if (!is_null($this->container['uniagentStatus']) && !in_array($this->container['uniagentStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'uniagentStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceId
    *  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets uniagentStatus
    *  **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    *
    * @return string|null
    */
    public function getUniagentStatus()
    {
        return $this->container['uniagentStatus'];
    }

    /**
    * Sets uniagentStatus
    *
    * @param string|null $uniagentStatus **参数解释**: uniagent运行状态 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障
    *
    * @return $this
    */
    public function setUniagentStatus($uniagentStatus)
    {
        $this->container['uniagentStatus'] = $uniagentStatus;
        return $this;
    }

    /**
    * Gets extensions
    *  **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @return \HuaweiCloud\SDK\Ces\V3\Model\ExtensionInfo[]|null
    */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
    * Sets extensions
    *
    * @param \HuaweiCloud\SDK\Ces\V3\Model\ExtensionInfo[]|null $extensions **参数解释**: 插件信息列表 **取值范围**: 数组长度为[1,10]
    *
    * @return $this
    */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;
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

