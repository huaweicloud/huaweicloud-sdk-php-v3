<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailabilityZones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailabilityZones';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primary  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    * standby  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primary' => 'string',
            'standby' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primary  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    * standby  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primary' => null,
        'standby' => null
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
    * primary  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    * standby  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primary' => 'primary',
            'standby' => 'standby'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primary  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    * standby  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'primary' => 'setPrimary',
            'standby' => 'setStandby'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primary  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    * standby  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'primary' => 'getPrimary',
            'standby' => 'getStandby'
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
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['standby'] = isset($data['standby']) ? $data['standby'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['primary'] === null) {
            $invalidProperties[] = "'primary' can't be null";
        }
        if ($this->container['standby'] === null) {
            $invalidProperties[] = "'standby' can't be null";
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
    * Gets primary
    *  - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param string $primary - 参数解释：ESW实例默认主节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
        return $this;
    }

    /**
    * Gets standby
    *  - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getStandby()
    {
        return $this->container['standby'];
    }

    /**
    * Sets standby
    *
    * @param string $standby - 参数解释：ESW实例默认备节点所在的可用区。 - 约束限制：1-128字符。 - 取值范围：当前区域可用区id。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setStandby($standby)
    {
        $this->container['standby'] = $standby;
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

