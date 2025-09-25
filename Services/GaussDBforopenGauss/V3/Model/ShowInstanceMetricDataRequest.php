<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceMetricDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceMetricDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * startTime  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * metric  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    * componentId  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'metric' => 'string',
            'nodeId' => 'string',
            'componentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * startTime  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * metric  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    * componentId  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'startTime' => null,
        'endTime' => null,
        'metric' => null,
        'nodeId' => null,
        'componentId' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * startTime  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * metric  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    * componentId  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'metric' => 'metric',
            'nodeId' => 'node_id',
            'componentId' => 'component_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * startTime  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * metric  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    * componentId  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'metric' => 'setMetric',
            'nodeId' => 'setNodeId',
            'componentId' => 'setComponentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * startTime  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * metric  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    * componentId  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'metric' => 'getMetric',
            'nodeId' => 'getNodeId',
            'componentId' => 'getComponentId'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
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
    * Gets xLanguage
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime **参数解释**: 开始时间，时间戳格式，例如：1756971683303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释**: 结束时间，时间戳格式，例如：1756975283303。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets metric
    *  **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric **参数解释**: 指标ID，可通过“查询指标分组的指标名称”接口获取，例如查询CPU使用率，传值 rds001_cpu_util。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **约束限制**: 不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**: 节点ID。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释**: 组件ID，例如dn_6001。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
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

