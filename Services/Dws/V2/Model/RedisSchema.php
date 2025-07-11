<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisSchema';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaName  **参数解释**： schema名称。 **取值范围**： 不涉及。
    * redisOrder  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaName' => 'string',
            'redisOrder' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaName  **参数解释**： schema名称。 **取值范围**： 不涉及。
    * redisOrder  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaName' => null,
        'redisOrder' => 'int32'
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
    * schemaName  **参数解释**： schema名称。 **取值范围**： 不涉及。
    * redisOrder  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaName' => 'schema_name',
            'redisOrder' => 'redis_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaName  **参数解释**： schema名称。 **取值范围**： 不涉及。
    * redisOrder  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaName' => 'setSchemaName',
            'redisOrder' => 'setRedisOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaName  **参数解释**： schema名称。 **取值范围**： 不涉及。
    * redisOrder  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaName' => 'getSchemaName',
            'redisOrder' => 'getRedisOrder'
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
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['redisOrder'] = isset($data['redisOrder']) ? $data['redisOrder'] : null;
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
    * Gets schemaName
    *  **参数解释**： schema名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释**： schema名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets redisOrder
    *  **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @return int|null
    */
    public function getRedisOrder()
    {
        return $this->container['redisOrder'];
    }

    /**
    * Sets redisOrder
    *
    * @param int|null $redisOrder **参数解释**： 优先级序号。 **取值范围**： 大于0的整数
    *
    * @return $this
    */
    public function setRedisOrder($redisOrder)
    {
        $this->container['redisOrder'] = $redisOrder;
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

