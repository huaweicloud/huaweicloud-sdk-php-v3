<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelationModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    * value  查询条件中指定key的值。
    * relation  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string[]',
            'relation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    * value  查询条件中指定key的值。
    * relation  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'relation' => null
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
    * key  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    * value  查询条件中指定key的值。
    * relation  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'relation' => 'relation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    * value  查询条件中指定key的值。
    * relation  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'relation' => 'setRelation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    * value  查询条件中指定key的值。
    * relation  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'relation' => 'getRelation'
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
    const RELATION__AND = 'AND';
    const RELATION__OR = 'OR';
    const RELATION_NOT = 'NOT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRelationAllowableValues()
    {
        return [
            self::RELATION__AND,
            self::RELATION__OR,
            self::RELATION_NOT,
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            $allowedValues = $this->getRelationAllowableValues();
                if (!is_null($this->container['relation']) && !in_array($this->container['relation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'relation', must be one of '%s'",
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
    *  指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 指定查询字段的key，对应metadata里面的key 。当metadata_relation参数不为空时 key参数必填。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  查询条件中指定key的值。
    *
    * @return string[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[]|null $value 查询条件中指定key的值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets relation
    *  该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @return string|null
    */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
    * Sets relation
    *
    * @param string|null $relation 该条件与其他条件的组合方式。  - AND：必须满足所有条件。 -  OR：可以满足其中一个条件。 -  NOT：必须不满足所有条件。
    *
    * @return $this
    */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;
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

