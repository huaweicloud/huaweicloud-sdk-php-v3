<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TerminationGrace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TerminationGrace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * preStopCmd  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * terminationGracePeriodSeconds  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'preStopCmd' => 'string',
            'terminationGracePeriodSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * preStopCmd  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * terminationGracePeriodSeconds  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'preStopCmd' => null,
        'terminationGracePeriodSeconds' => 'int32'
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
    * preStopCmd  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * terminationGracePeriodSeconds  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'preStopCmd' => 'pre_stop_cmd',
            'terminationGracePeriodSeconds' => 'termination_grace_period_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * preStopCmd  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * terminationGracePeriodSeconds  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'preStopCmd' => 'setPreStopCmd',
            'terminationGracePeriodSeconds' => 'setTerminationGracePeriodSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * preStopCmd  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * terminationGracePeriodSeconds  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'preStopCmd' => 'getPreStopCmd',
            'terminationGracePeriodSeconds' => 'getTerminationGracePeriodSeconds'
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
        $this->container['preStopCmd'] = isset($data['preStopCmd']) ? $data['preStopCmd'] : null;
        $this->container['terminationGracePeriodSeconds'] = isset($data['terminationGracePeriodSeconds']) ? $data['terminationGracePeriodSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['preStopCmd']) && !preg_match("/^(?!(.*\\\\b(sudo|su\\\\s+root|chmod\\\\s+777|chown\\\\s+root:root|rm|mount\\\\s+\/dev\/sd[a-z]+|nsenter\\\\s+--all|(curl|wget)\\\\s+\\\\S+\\\\s*\\\\|\\\\s*(sh|bash|python)|(nc|ncat|telnet)\\\\s+.*\\\\d+\\\\.\\\\d+\\\\.\\\\d+\\\\.\\\\d+|\\\\$\\$\\\\{\\\\b)))[\\\\x20-\\\\x7E]{0,255}$/", $this->container['preStopCmd'])) {
                $invalidProperties[] = "invalid value for 'preStopCmd', must be conform to the pattern /^(?!(.*\\\\b(sudo|su\\\\s+root|chmod\\\\s+777|chown\\\\s+root:root|rm|mount\\\\s+\/dev\/sd[a-z]+|nsenter\\\\s+--all|(curl|wget)\\\\s+\\\\S+\\\\s*\\\\|\\\\s*(sh|bash|python)|(nc|ncat|telnet)\\\\s+.*\\\\d+\\\\.\\\\d+\\\\.\\\\d+\\\\.\\\\d+|\\\\$\\$\\\\{\\\\b)))[\\\\x20-\\\\x7E]{0,255}$/.";
            }
            if (!is_null($this->container['terminationGracePeriodSeconds']) && ($this->container['terminationGracePeriodSeconds'] > 3600)) {
                $invalidProperties[] = "invalid value for 'terminationGracePeriodSeconds', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['terminationGracePeriodSeconds']) && ($this->container['terminationGracePeriodSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'terminationGracePeriodSeconds', must be bigger than or equal to 0.";
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
    * Gets preStopCmd
    *  **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPreStopCmd()
    {
        return $this->container['preStopCmd'];
    }

    /**
    * Sets preStopCmd
    *
    * @param string|null $preStopCmd **参数解释：** 停机命令在容器收到停止信号时触发，但必须在停机时间的宽限期内完成，否则容器会被强制停止。您可以通过该命令精细化操作，如关闭数据库连接、释放文件句柄、停止子进程等。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPreStopCmd($preStopCmd)
    {
        $this->container['preStopCmd'] = $preStopCmd;
        return $this;
    }

    /**
    * Gets terminationGracePeriodSeconds
    *  **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getTerminationGracePeriodSeconds()
    {
        return $this->container['terminationGracePeriodSeconds'];
    }

    /**
    * Sets terminationGracePeriodSeconds
    *
    * @param int|null $terminationGracePeriodSeconds **参数解释：** 该参数表示 Pod 收到停止信号到强制停止的最大时间窗口，用于 Pod 执行清理操作（如关闭连接、释放资源、保存状态等）。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTerminationGracePeriodSeconds($terminationGracePeriodSeconds)
    {
        $this->container['terminationGracePeriodSeconds'] = $terminationGracePeriodSeconds;
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

