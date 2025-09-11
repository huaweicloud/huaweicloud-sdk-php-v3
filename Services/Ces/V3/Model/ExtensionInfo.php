<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    * status  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    * version  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    * status  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    * version  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'version' => null
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
    * name  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    * status  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    * version  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    * status  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    * version  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    * status  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    * version  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'version' => 'getVersion'
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
    const STATUS_NONE = 'none';
    const STATUS_RUNNING = 'running';
    const STATUS_STOPPED = 'stopped';
    const STATUS_FAULT = 'fault';
    const STATUS_UNKNOWN = 'unknown';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NONE,
            self::STATUS_RUNNING,
            self::STATUS_STOPPED,
            self::STATUS_FAULT,
            self::STATUS_UNKNOWN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
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
    * @param string|null $name **参数解释**: 插件名称 **取值范围**: 数组长度为[1,64]
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
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
    * @param string|null $status **参数解释**:  插件状态 **取值范围**: - none: 未安装 - running: 运行中 - stopped: 已停止 - fault: 故障（进程异常） - unknown: 故障（连接异常）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
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
    * @param string|null $version **参数解释**: 插件版本 **取值范围**: 数组长度为[1,32]
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

