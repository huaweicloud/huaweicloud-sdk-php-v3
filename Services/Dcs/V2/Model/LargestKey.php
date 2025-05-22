<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LargestKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LargestKey';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**： Key名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * numOfElem  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'type' => 'string',
            'bytes' => 'int',
            'numOfElem' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**： Key名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * numOfElem  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'type' => null,
        'bytes' => null,
        'numOfElem' => null
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
    * key  **参数解释**： Key名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * numOfElem  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'type' => 'type',
            'bytes' => 'bytes',
            'numOfElem' => 'num_of_elem'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**： Key名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * numOfElem  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'type' => 'setType',
            'bytes' => 'setBytes',
            'numOfElem' => 'setNumOfElem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**： Key名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * numOfElem  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'type' => 'getType',
            'bytes' => 'getBytes',
            'numOfElem' => 'getNumOfElem'
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
    const TYPE_STRING = 'string';
    const TYPE__LIST = 'list';
    const TYPE_SET = 'set';
    const TYPE_ZSET = 'zset';
    const TYPE_HASH = 'hash';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE__LIST,
            self::TYPE_SET,
            self::TYPE_ZSET,
            self::TYPE_HASH,
        ];
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['numOfElem'] = isset($data['numOfElem']) ? $data['numOfElem'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets key
    *  **参数解释**： Key名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释**： Key名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bytes
    *  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
    * Sets bytes
    *
    * @param int|null $bytes **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBytes($bytes)
    {
        $this->container['bytes'] = $bytes;
        return $this;
    }

    /**
    * Gets numOfElem
    *  **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNumOfElem()
    {
        return $this->container['numOfElem'];
    }

    /**
    * Sets numOfElem
    *
    * @param int|null $numOfElem **参数解释**： 元素数量或元素大小（String类型为元素大小，单位：Bytes。非String类型为元素数量）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumOfElem($numOfElem)
    {
        $this->container['numOfElem'] = $numOfElem;
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

