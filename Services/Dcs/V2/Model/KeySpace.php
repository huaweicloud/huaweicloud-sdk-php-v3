<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeySpace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeySpace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIdx  **参数解释**： db索引值。 **取值范围**： 不涉及。
    * keys  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    * expires  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    * avgTtl  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIdx' => 'string',
            'keys' => 'string',
            'expires' => 'string',
            'avgTtl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIdx  **参数解释**： db索引值。 **取值范围**： 不涉及。
    * keys  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    * expires  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    * avgTtl  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIdx' => null,
        'keys' => null,
        'expires' => null,
        'avgTtl' => null
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
    * dbIdx  **参数解释**： db索引值。 **取值范围**： 不涉及。
    * keys  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    * expires  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    * avgTtl  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIdx' => 'db_idx',
            'keys' => 'keys',
            'expires' => 'expires',
            'avgTtl' => 'avg_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIdx  **参数解释**： db索引值。 **取值范围**： 不涉及。
    * keys  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    * expires  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    * avgTtl  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIdx' => 'setDbIdx',
            'keys' => 'setKeys',
            'expires' => 'setExpires',
            'avgTtl' => 'setAvgTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIdx  **参数解释**： db索引值。 **取值范围**： 不涉及。
    * keys  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    * expires  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    * avgTtl  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIdx' => 'getDbIdx',
            'keys' => 'getKeys',
            'expires' => 'getExpires',
            'avgTtl' => 'getAvgTtl'
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
        $this->container['dbIdx'] = isset($data['dbIdx']) ? $data['dbIdx'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['avgTtl'] = isset($data['avgTtl']) ? $data['avgTtl'] : null;
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
    * Gets dbIdx
    *  **参数解释**： db索引值。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbIdx()
    {
        return $this->container['dbIdx'];
    }

    /**
    * Sets dbIdx
    *
    * @param string|null $dbIdx **参数解释**： db索引值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbIdx($dbIdx)
    {
        $this->container['dbIdx'] = $dbIdx;
        return $this;
    }

    /**
    * Gets keys
    *  **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param string|null $keys **参数解释**： 节点键数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets expires
    *  **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
    * Sets expires
    *
    * @param string|null $expires **参数解释**： 节点过期键数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;
        return $this;
    }

    /**
    * Gets avgTtl
    *  **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAvgTtl()
    {
        return $this->container['avgTtl'];
    }

    /**
    * Sets avgTtl
    *
    * @param string|null $avgTtl **参数解释**： 节点键的平均过期时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAvgTtl($avgTtl)
    {
        $this->container['avgTtl'] = $avgTtl;
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

