<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordingRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordingRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordingRule  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordingRule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordingRule  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordingRule' => null
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
    * recordingRule  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordingRule' => 'recording_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordingRule  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @var string[]
    */
    protected static $setters = [
            'recordingRule' => 'setRecordingRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordingRule  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @var string[]
    */
    protected static $getters = [
            'recordingRule' => 'getRecordingRule'
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
        $this->container['recordingRule'] = isset($data['recordingRule']) ? $data['recordingRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recordingRule'] === null) {
            $invalidProperties[] = "'recordingRule' can't be null";
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
    * Gets recordingRule
    *  预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @return string
    */
    public function getRecordingRule()
    {
        return $this->container['recordingRule'];
    }

    /**
    * Sets recordingRule
    *
    * @param string $recordingRule 预聚合规则。 待创建的预聚合规则详细信息。支持如下子参数： - groups：规则组。一份RecordingRule.yaml可以配置多组规则组。 - name：规则组名称。规则组名称必须唯一。 - interval：规则组的执行周期。默认60s。（可选） - rules：规则。一个规则组可以包含多条规则。 - record：规则的名称。聚合规则的名称必须符合  [Prometheus指标名称规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。  - expr：计算表达式。Prometheus监控将通过该表达式计算得出预聚合指标。计算表达式必须符合[PromQL](https://prometheus.io/docs/prometheus/latest/querying/basics/)。 - labels：指标的标签。标签必须符合[Prometheus指标标签规范](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels)。（可选）
    *
    * @return $this
    */
    public function setRecordingRule($recordingRule)
    {
        $this->container['recordingRule'] = $recordingRule;
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

