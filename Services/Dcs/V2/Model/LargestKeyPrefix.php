<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LargestKeyPrefix implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LargestKeyPrefix';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyPrefix  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * num  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyPrefix' => 'string',
            'type' => 'string',
            'bytes' => 'int',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyPrefix  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * num  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyPrefix' => null,
        'type' => null,
        'bytes' => null,
        'num' => null
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
    * keyPrefix  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * num  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyPrefix' => 'key_prefix',
            'type' => 'type',
            'bytes' => 'bytes',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyPrefix  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * num  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyPrefix' => 'setKeyPrefix',
            'type' => 'setType',
            'bytes' => 'setBytes',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyPrefix  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    * type  **参数解释**： Key的数据类型。 **取值范围**： string list set zset hash
    * bytes  **参数解释**： Key的大小，单位：Bytes。 **取值范围**： 不涉及。
    * num  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyPrefix' => 'getKeyPrefix',
            'type' => 'getType',
            'bytes' => 'getBytes',
            'num' => 'getNum'
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
        $this->container['keyPrefix'] = isset($data['keyPrefix']) ? $data['keyPrefix'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
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
    * Gets keyPrefix
    *  **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getKeyPrefix()
    {
        return $this->container['keyPrefix'];
    }

    /**
    * Sets keyPrefix
    *
    * @param string|null $keyPrefix **参数解释**： 前缀名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKeyPrefix($keyPrefix)
    {
        $this->container['keyPrefix'] = $keyPrefix;
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
    * Gets num
    *  **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释**： 相同前缀key的数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
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

