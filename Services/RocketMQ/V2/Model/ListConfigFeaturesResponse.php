<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigFeaturesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigFeaturesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * features  **参数解释**： 特性列表。
    * totalRecord  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'features' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ListConfigFeatures[]',
            'totalRecord' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * features  **参数解释**： 特性列表。
    * totalRecord  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'features' => null,
        'totalRecord' => null
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
    * features  **参数解释**： 特性列表。
    * totalRecord  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'features' => 'features',
            'totalRecord' => 'totalRecord'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * features  **参数解释**： 特性列表。
    * totalRecord  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'features' => 'setFeatures',
            'totalRecord' => 'setTotalRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * features  **参数解释**： 特性列表。
    * totalRecord  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'features' => 'getFeatures',
            'totalRecord' => 'getTotalRecord'
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
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['totalRecord'] = isset($data['totalRecord']) ? $data['totalRecord'] : null;
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
    * Gets features
    *  **参数解释**： 特性列表。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ListConfigFeatures[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ListConfigFeatures[]|null $features **参数解释**： 特性列表。
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets totalRecord
    *  **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalRecord()
    {
        return $this->container['totalRecord'];
    }

    /**
    * Sets totalRecord
    *
    * @param int|null $totalRecord **参数解释**： 总特性数量。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalRecord($totalRecord)
    {
        $this->container['totalRecord'] = $totalRecord;
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

