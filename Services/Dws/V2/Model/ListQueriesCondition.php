<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueriesCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueriesCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * field  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    * value  **参数解释**： 字段值。 **取值范围**： 不涉及。
    * operator  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'field' => 'string',
            'value' => 'string',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * field  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    * value  **参数解释**： 字段值。 **取值范围**： 不涉及。
    * operator  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'field' => null,
        'value' => null,
        'operator' => null
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
    * field  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    * value  **参数解释**： 字段值。 **取值范围**： 不涉及。
    * operator  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'field' => 'field',
            'value' => 'value',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * field  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    * value  **参数解释**： 字段值。 **取值范围**： 不涉及。
    * operator  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $setters = [
            'field' => 'setField',
            'value' => 'setValue',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * field  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    * value  **参数解释**： 字段值。 **取值范围**： 不涉及。
    * operator  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $getters = [
            'field' => 'getField',
            'value' => 'getValue',
            'operator' => 'getOperator'
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
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
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
    * Gets field
    *  **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    *
    * @return string
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string $field **参数解释**： 字段名称。 **取值范围**： systemQuery：是否隐藏系统查询。 userName：用户名称。 applicationName：应用名称。 dbName：数据库名称。 resourcePool：资源池。 queryStatus：查询状态。 enqueue：排队状态。
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 字段值。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value **参数解释**： 字段值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator **参数解释**： 比较方式。 **取值范围**： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

