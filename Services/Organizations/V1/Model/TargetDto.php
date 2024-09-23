<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  目标类型，account：账户id，name：账户名称。
    * entity  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'entity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  目标类型，account：账户id，name：账户名称。
    * entity  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'entity' => null
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
    * type  目标类型，account：账户id，name：账户名称。
    * entity  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'entity' => 'entity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  目标类型，account：账户id，name：账户名称。
    * entity  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'entity' => 'setEntity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  目标类型，account：账户id，name：账户名称。
    * entity  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'entity' => 'getEntity'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['entity'] === null) {
            $invalidProperties[] = "'entity' can't be null";
        }
            if ((mb_strlen($this->container['entity']) > 100)) {
                $invalidProperties[] = "invalid value for 'entity', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['entity']) < 1)) {
                $invalidProperties[] = "invalid value for 'entity', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  目标类型，account：账户id，name：账户名称。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 目标类型，account：账户id，name：账户名称。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets entity
    *  如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @return string
    */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
    * Sets entity
    *
    * @param string $entity 如果指定 'type:account'，则必须提供账号ID作为实体。如果指定 'type:name'，则必须指定账号名称作为实体。
    *
    * @return $this
    */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;
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

