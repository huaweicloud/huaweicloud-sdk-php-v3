<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SloObjectives implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SloObjectives';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricTtft  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    * metricTpot  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    * percental  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricTtft' => 'int',
            'metricTpot' => 'int',
            'percental' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricTtft  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    * metricTpot  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    * percental  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricTtft' => 'int32',
        'metricTpot' => 'int32',
        'percental' => 'int32'
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
    * metricTtft  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    * metricTpot  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    * percental  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricTtft' => 'metric_ttft',
            'metricTpot' => 'metric_tpot',
            'percental' => 'percental'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricTtft  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    * metricTpot  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    * percental  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @var string[]
    */
    protected static $setters = [
            'metricTtft' => 'setMetricTtft',
            'metricTpot' => 'setMetricTpot',
            'percental' => 'setPercental'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricTtft  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    * metricTpot  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    * percental  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @var string[]
    */
    protected static $getters = [
            'metricTtft' => 'getMetricTtft',
            'metricTpot' => 'getMetricTpot',
            'percental' => 'getPercental'
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
        $this->container['metricTtft'] = isset($data['metricTtft']) ? $data['metricTtft'] : null;
        $this->container['metricTpot'] = isset($data['metricTpot']) ? $data['metricTpot'] : null;
        $this->container['percental'] = isset($data['percental']) ? $data['percental'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets metricTtft
    *  **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    *
    * @return int|null
    */
    public function getMetricTtft()
    {
        return $this->container['metricTtft'];
    }

    /**
    * Sets metricTtft
    *
    * @param int|null $metricTtft **参数解释：** TTFT指标，单位毫秒。 **取值范围：** 0~10000。 **约束限制：** 不涉及。 **默认取值：** 100。
    *
    * @return $this
    */
    public function setMetricTtft($metricTtft)
    {
        $this->container['metricTtft'] = $metricTtft;
        return $this;
    }

    /**
    * Gets metricTpot
    *  **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    *
    * @return int|null
    */
    public function getMetricTpot()
    {
        return $this->container['metricTpot'];
    }

    /**
    * Sets metricTpot
    *
    * @param int|null $metricTpot **参数解释：** TPOT指标，单位毫秒。 **取值范围：** 0~1000。 **约束限制：** 不涉及。 **默认取值：** 50。
    *
    * @return $this
    */
    public function setMetricTpot($metricTpot)
    {
        $this->container['metricTpot'] = $metricTpot;
        return $this;
    }

    /**
    * Gets percental
    *  **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @return int|null
    */
    public function getPercental()
    {
        return $this->container['percental'];
    }

    /**
    * Sets percental
    *
    * @param int|null $percental **参数解释：** SLO满足百分比。 **取值范围：** 0~100。
    *
    * @return $this
    */
    public function setPercental($percental)
    {
        $this->container['percental'] = $percental;
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

