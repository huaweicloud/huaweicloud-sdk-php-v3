<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceTimeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceTimeDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuTime' => 'int',
            'dataIoTime' => 'int',
            'otherTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuTime' => 'int64',
        'dataIoTime' => 'int64',
        'otherTime' => 'int64'
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
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuTime' => 'cpu_time',
            'dataIoTime' => 'data_io_time',
            'otherTime' => 'other_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuTime' => 'setCpuTime',
            'dataIoTime' => 'setDataIoTime',
            'otherTime' => 'setOtherTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuTime' => 'getCpuTime',
            'dataIoTime' => 'getDataIoTime',
            'otherTime' => 'getOtherTime'
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
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['dataIoTime'] = isset($data['dataIoTime']) ? $data['dataIoTime'] : null;
        $this->container['otherTime'] = isset($data['otherTime']) ? $data['otherTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cpuTime'] === null) {
            $invalidProperties[] = "'cpuTime' can't be null";
        }
        if ($this->container['dataIoTime'] === null) {
            $invalidProperties[] = "'dataIoTime' can't be null";
        }
        if ($this->container['otherTime'] === null) {
            $invalidProperties[] = "'otherTime' can't be null";
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
    * Gets cpuTime
    *  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param int $cpuTime **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets dataIoTime
    *  **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getDataIoTime()
    {
        return $this->container['dataIoTime'];
    }

    /**
    * Sets dataIoTime
    *
    * @param int $dataIoTime **参数解释**: IO上的时间花费（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDataIoTime($dataIoTime)
    {
        $this->container['dataIoTime'] = $dataIoTime;
        return $this;
    }

    /**
    * Gets otherTime
    *  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getOtherTime()
    {
        return $this->container['otherTime'];
    }

    /**
    * Sets otherTime
    *
    * @param int $otherTime **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOtherTime($otherTime)
    {
        $this->container['otherTime'] = $otherTime;
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

