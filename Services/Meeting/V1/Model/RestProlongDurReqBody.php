<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestProlongDurReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestProlongDurReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auto  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    * duration  延长时间，单位为分钟。 默认值：15
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auto' => 'int',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auto  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    * duration  延长时间，单位为分钟。 默认值：15
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auto' => 'int32',
        'duration' => 'int32'
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
    * auto  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    * duration  延长时间，单位为分钟。 默认值：15
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auto' => 'auto',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auto  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    * duration  延长时间，单位为分钟。 默认值：15
    *
    * @var string[]
    */
    protected static $setters = [
            'auto' => 'setAuto',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auto  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    * duration  延长时间，单位为分钟。 默认值：15
    *
    * @var string[]
    */
    protected static $getters = [
            'auto' => 'getAuto',
            'duration' => 'getDuration'
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
        $this->container['auto'] = isset($data['auto']) ? $data['auto'] : 1;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : 15;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto'] === null) {
            $invalidProperties[] = "'auto' can't be null";
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
    * Gets auto
    *  - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    *
    * @return int
    */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
    * Sets auto
    *
    * @param int $auto - 0: 手动延长 - 1: 自动延长（未携带延长时间时，默认每次延长15分钟）
    *
    * @return $this
    */
    public function setAuto($auto)
    {
        $this->container['auto'] = $auto;
        return $this;
    }

    /**
    * Gets duration
    *  延长时间，单位为分钟。 默认值：15
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 延长时间，单位为分钟。 默认值：15
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

