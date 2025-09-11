<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectWdrSnapshotRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectWdrSnapshotRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * wdrType  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'wdrType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * wdrType  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'wdrType' => null
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
    * startTime  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * wdrType  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'wdrType' => 'wdr_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * wdrType  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'wdrType' => 'setWdrType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * wdrType  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'wdrType' => 'getWdrType'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['wdrType'] = isset($data['wdrType']) ? $data['wdrType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['wdrType'] === null) {
            $invalidProperties[] = "'wdrType' can't be null";
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
    * Gets startTime
    *  **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $startTime **参数解释**： 快照开始时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $endTime **参数解释**： 快照结束时间。 **约束限制**： 格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets wdrType
    *  **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @return string[]
    */
    public function getWdrType()
    {
        return $this->container['wdrType'];
    }

    /**
    * Sets wdrType
    *
    * @param string[] $wdrType **参数解释**： 采集类型，包括实例级和组件级。 **约束限制**： 实例级则需要输入\"cluster\",组件级则需要输入组件ID。实例级和组件级无法同时输入。
    *
    * @return $this
    */
    public function setWdrType($wdrType)
    {
        $this->container['wdrType'] = $wdrType;
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

