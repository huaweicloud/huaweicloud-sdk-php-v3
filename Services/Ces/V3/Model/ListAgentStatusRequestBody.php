<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    * uniagentStatus  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    * extensionName  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    * extensionStatus  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'uniagentStatus' => 'string',
            'extensionName' => 'string',
            'extensionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    * uniagentStatus  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    * extensionName  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    * extensionStatus  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'uniagentStatus' => null,
        'extensionName' => null,
        'extensionStatus' => null
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
    * instanceIds  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    * uniagentStatus  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    * extensionName  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    * extensionStatus  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'uniagentStatus' => 'uniagent_status',
            'extensionName' => 'extension_name',
            'extensionStatus' => 'extension_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    * uniagentStatus  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    * extensionName  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    * extensionStatus  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'uniagentStatus' => 'setUniagentStatus',
            'extensionName' => 'setExtensionName',
            'extensionStatus' => 'setExtensionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    * uniagentStatus  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    * extensionName  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    * extensionStatus  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'uniagentStatus' => 'getUniagentStatus',
            'extensionName' => 'getExtensionName',
            'extensionStatus' => 'getExtensionStatus'
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
    const EXTENSION_NAME_TELESCOPE = 'telescope';
    const EXTENSION_STATUS_NONE = 'none';
    const EXTENSION_STATUS_RUNNING = 'running';
    const EXTENSION_STATUS_STOPPED = 'stopped';
    const EXTENSION_STATUS_FAULT = 'fault';
    const EXTENSION_STATUS_UNKNOWN = 'unknown';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExtensionNameAllowableValues()
    {
        return [
            self::EXTENSION_NAME_TELESCOPE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExtensionStatusAllowableValues()
    {
        return [
            self::EXTENSION_STATUS_NONE,
            self::EXTENSION_STATUS_RUNNING,
            self::EXTENSION_STATUS_STOPPED,
            self::EXTENSION_STATUS_FAULT,
            self::EXTENSION_STATUS_UNKNOWN,
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['uniagentStatus'] = isset($data['uniagentStatus']) ? $data['uniagentStatus'] : null;
        $this->container['extensionName'] = isset($data['extensionName']) ? $data['extensionName'] : null;
        $this->container['extensionStatus'] = isset($data['extensionStatus']) ? $data['extensionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
            $allowedValues = $this->getUniagentStatusAllowableValues();
                if (!is_null($this->container['uniagentStatus']) && !in_array($this->container['uniagentStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'uniagentStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getExtensionNameAllowableValues();
                if (!is_null($this->container['extensionName']) && !in_array($this->container['extensionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'extensionName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getExtensionStatusAllowableValues();
                if (!is_null($this->container['extensionStatus']) && !in_array($this->container['extensionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'extensionStatus', must be one of '%s'",
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
    * Gets instanceIds
    *  **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds **参数解释**: 机器实例id列表 **约束限制**: 包含的机器实例id最多为2000个，最少为1个
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets uniagentStatus
    *  **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
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
    * @param string|null $uniagentStatus **参数解释**: uniagent运行状态，不传值则查出所有状态 **约束限制**: 不涉及。 **取值范围**: - none: 未安装 - running: 运行中 - silent: 静默状态，用于大规模插件异常时，紧急规避的一种措施，现象是kill掉telescope，只保留uniagent的心跳功能 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setUniagentStatus($uniagentStatus)
    {
        $this->container['uniagentStatus'] = $uniagentStatus;
        return $this;
    }

    /**
    * Gets extensionName
    *  **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    *
    * @return string|null
    */
    public function getExtensionName()
    {
        return $this->container['extensionName'];
    }

    /**
    * Sets extensionName
    *
    * @param string|null $extensionName **参数解释**: 插件名称，不传查所有插件 **约束限制**: 当前仅支持查询telescope插件 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope
    *
    * @return $this
    */
    public function setExtensionName($extensionName)
    {
        $this->container['extensionName'] = $extensionName;
        return $this;
    }

    /**
    * Gets extensionStatus
    *  **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getExtensionStatus()
    {
        return $this->container['extensionStatus'];
    }

    /**
    * Sets extensionStatus
    *
    * @param string|null $extensionStatus **参数解释**: 插件状态，不传查所有状态  **约束限制**: 不涉及 **取值范围**: - none: 未安装 - running: 运行中 - stopped：已停止 - fault: 进程故障，应该运行的插件，没运行，属于客户端故障 - unknown: 心跳故障，不上报心跳数据，属于连接丢失故障 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExtensionStatus($extensionStatus)
    {
        $this->container['extensionStatus'] = $extensionStatus;
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

