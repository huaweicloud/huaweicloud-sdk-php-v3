<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DynamicDataMask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DynamicDataMask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maskStrategies  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    * data  数据列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maskStrategies' => '\HuaweiCloud\SDK\Dsc\V1\Model\MaskStrategies[]',
            'data' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maskStrategies  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    * data  数据列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maskStrategies' => null,
        'data' => null
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
    * maskStrategies  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    * data  数据列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maskStrategies' => 'mask_strategies',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maskStrategies  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    * data  数据列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'maskStrategies' => 'setMaskStrategies',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maskStrategies  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    * data  数据列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'maskStrategies' => 'getMaskStrategies',
            'data' => 'getData'
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
        $this->container['maskStrategies'] = isset($data['maskStrategies']) ? $data['maskStrategies'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maskStrategies'] === null) {
            $invalidProperties[] = "'maskStrategies' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
    * Gets maskStrategies
    *  脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\MaskStrategies[]
    */
    public function getMaskStrategies()
    {
        return $this->container['maskStrategies'];
    }

    /**
    * Sets maskStrategies
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\MaskStrategies[] $maskStrategies 脱敏策略列表，每一个策略对应一个字段，脱敏策略数最多100个。
    *
    * @return $this
    */
    public function setMaskStrategies($maskStrategies)
    {
        $this->container['maskStrategies'] = $maskStrategies;
        return $this;
    }

    /**
    * Gets data
    *  数据列表。
    *
    * @return map[string,object][]
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param map[string,object][] $data 数据列表。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

