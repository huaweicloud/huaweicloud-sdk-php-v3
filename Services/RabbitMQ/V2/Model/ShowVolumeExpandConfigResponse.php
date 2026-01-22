<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVolumeExpandConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVolumeExpandConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoVolumeExpandEnable  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    * expandThreshold  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    * maxVolumeSize  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    * expandIncrement  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoVolumeExpandEnable' => 'bool',
            'expandThreshold' => 'int',
            'maxVolumeSize' => 'int',
            'expandIncrement' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoVolumeExpandEnable  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    * expandThreshold  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    * maxVolumeSize  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    * expandIncrement  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoVolumeExpandEnable' => null,
        'expandThreshold' => null,
        'maxVolumeSize' => null,
        'expandIncrement' => null
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
    * autoVolumeExpandEnable  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    * expandThreshold  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    * maxVolumeSize  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    * expandIncrement  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoVolumeExpandEnable' => 'auto_volume_expand_enable',
            'expandThreshold' => 'expand_threshold',
            'maxVolumeSize' => 'max_volume_size',
            'expandIncrement' => 'expand_increment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoVolumeExpandEnable  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    * expandThreshold  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    * maxVolumeSize  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    * expandIncrement  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoVolumeExpandEnable' => 'setAutoVolumeExpandEnable',
            'expandThreshold' => 'setExpandThreshold',
            'maxVolumeSize' => 'setMaxVolumeSize',
            'expandIncrement' => 'setExpandIncrement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoVolumeExpandEnable  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    * expandThreshold  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    * maxVolumeSize  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    * expandIncrement  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoVolumeExpandEnable' => 'getAutoVolumeExpandEnable',
            'expandThreshold' => 'getExpandThreshold',
            'maxVolumeSize' => 'getMaxVolumeSize',
            'expandIncrement' => 'getExpandIncrement'
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
        $this->container['autoVolumeExpandEnable'] = isset($data['autoVolumeExpandEnable']) ? $data['autoVolumeExpandEnable'] : null;
        $this->container['expandThreshold'] = isset($data['expandThreshold']) ? $data['expandThreshold'] : null;
        $this->container['maxVolumeSize'] = isset($data['maxVolumeSize']) ? $data['maxVolumeSize'] : null;
        $this->container['expandIncrement'] = isset($data['expandIncrement']) ? $data['expandIncrement'] : null;
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
    * Gets autoVolumeExpandEnable
    *  **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    *
    * @return bool|null
    */
    public function getAutoVolumeExpandEnable()
    {
        return $this->container['autoVolumeExpandEnable'];
    }

    /**
    * Sets autoVolumeExpandEnable
    *
    * @param bool|null $autoVolumeExpandEnable **参数解释**： 是否开启磁盘自动扩容。 **取值范围**： - true：开启。 - false：关闭。
    *
    * @return $this
    */
    public function setAutoVolumeExpandEnable($autoVolumeExpandEnable)
    {
        $this->container['autoVolumeExpandEnable'] = $autoVolumeExpandEnable;
        return $this;
    }

    /**
    * Gets expandThreshold
    *  **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    *
    * @return int|null
    */
    public function getExpandThreshold()
    {
        return $this->container['expandThreshold'];
    }

    /**
    * Sets expandThreshold
    *
    * @param int|null $expandThreshold **参数解释**： 触发磁盘自动扩容的阈值。 **取值范围**： 20%-80%。
    *
    * @return $this
    */
    public function setExpandThreshold($expandThreshold)
    {
        $this->container['expandThreshold'] = $expandThreshold;
        return $this;
    }

    /**
    * Gets maxVolumeSize
    *  **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxVolumeSize()
    {
        return $this->container['maxVolumeSize'];
    }

    /**
    * Sets maxVolumeSize
    *
    * @param int|null $maxVolumeSize **参数解释**： 磁盘自动扩容的上限值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxVolumeSize($maxVolumeSize)
    {
        $this->container['maxVolumeSize'] = $maxVolumeSize;
        return $this;
    }

    /**
    * Gets expandIncrement
    *  **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @return int|null
    */
    public function getExpandIncrement()
    {
        return $this->container['expandIncrement'];
    }

    /**
    * Sets expandIncrement
    *
    * @param int|null $expandIncrement **参数解释**： 每次磁盘自动扩容的比例。 **取值范围**： 10%-100%。
    *
    * @return $this
    */
    public function setExpandIncrement($expandIncrement)
    {
        $this->container['expandIncrement'] = $expandIncrement;
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

