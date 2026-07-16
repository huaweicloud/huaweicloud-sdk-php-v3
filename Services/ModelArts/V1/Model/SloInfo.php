<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SloInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SloInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sloObjectives  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    * predictWindowSeconds  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sloObjectives' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SloObjectives[]',
            'predictWindowSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sloObjectives  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    * predictWindowSeconds  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sloObjectives' => null,
        'predictWindowSeconds' => 'int32'
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
    * sloObjectives  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    * predictWindowSeconds  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sloObjectives' => 'slo_objectives',
            'predictWindowSeconds' => 'predict_window_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sloObjectives  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    * predictWindowSeconds  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @var string[]
    */
    protected static $setters = [
            'sloObjectives' => 'setSloObjectives',
            'predictWindowSeconds' => 'setPredictWindowSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sloObjectives  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    * predictWindowSeconds  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @var string[]
    */
    protected static $getters = [
            'sloObjectives' => 'getSloObjectives',
            'predictWindowSeconds' => 'getPredictWindowSeconds'
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
        $this->container['sloObjectives'] = isset($data['sloObjectives']) ? $data['sloObjectives'] : null;
        $this->container['predictWindowSeconds'] = isset($data['predictWindowSeconds']) ? $data['predictWindowSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sloObjectives'] === null) {
            $invalidProperties[] = "'sloObjectives' can't be null";
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
    * Gets sloObjectives
    *  **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SloObjectives[]
    */
    public function getSloObjectives()
    {
        return $this->container['sloObjectives'];
    }

    /**
    * Sets sloObjectives
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SloObjectives[] $sloObjectives **参数解释：** 仿真期望指标。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSloObjectives($sloObjectives)
    {
        $this->container['sloObjectives'] = $sloObjectives;
        return $this;
    }

    /**
    * Gets predictWindowSeconds
    *  **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @return int|null
    */
    public function getPredictWindowSeconds()
    {
        return $this->container['predictWindowSeconds'];
    }

    /**
    * Sets predictWindowSeconds
    *
    * @param int|null $predictWindowSeconds **参数解释：** 预测时间窗口。 **约束限制：** 60~600。 **取值范围：** 不涉及。 **默认取值：** 60。
    *
    * @return $this
    */
    public function setPredictWindowSeconds($predictWindowSeconds)
    {
        $this->container['predictWindowSeconds'] = $predictWindowSeconds;
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

