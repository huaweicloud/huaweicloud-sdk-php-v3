<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicationTableFilterInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicationTableFilterInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relation  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    * column  筛选字段。
    * condition  筛选条件。
    * value  筛选值。
    * filters  下级筛选器。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relation' => 'string',
            'column' => 'string',
            'condition' => 'string',
            'value' => 'string',
            'filters' => '\HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relation  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    * column  筛选字段。
    * condition  筛选条件。
    * value  筛选值。
    * filters  下级筛选器。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relation' => null,
        'column' => null,
        'condition' => null,
        'value' => null,
        'filters' => null
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
    * relation  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    * column  筛选字段。
    * condition  筛选条件。
    * value  筛选值。
    * filters  下级筛选器。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relation' => 'relation',
            'column' => 'column',
            'condition' => 'condition',
            'value' => 'value',
            'filters' => 'filters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relation  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    * column  筛选字段。
    * condition  筛选条件。
    * value  筛选值。
    * filters  下级筛选器。
    *
    * @var string[]
    */
    protected static $setters = [
            'relation' => 'setRelation',
            'column' => 'setColumn',
            'condition' => 'setCondition',
            'value' => 'setValue',
            'filters' => 'setFilters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relation  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    * column  筛选字段。
    * condition  筛选条件。
    * value  筛选值。
    * filters  下级筛选器。
    *
    * @var string[]
    */
    protected static $getters = [
            'relation' => 'getRelation',
            'column' => 'getColumn',
            'condition' => 'getCondition',
            'value' => 'getValue',
            'filters' => 'getFilters'
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
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
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
    * Gets relation
    *  筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
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
    * @param string|null $relation 筛选关系。  为空时表示当前为最下级筛选器，不为空时表示当前项还有下级筛选器。
    *
    * @return $this
    */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;
        return $this;
    }

    /**
    * Gets column
    *  筛选字段。
    *
    * @return string|null
    */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
    * Sets column
    *
    * @param string|null $column 筛选字段。
    *
    * @return $this
    */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
    * Gets condition
    *  筛选条件。
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 筛选条件。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets value
    *  筛选值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 筛选值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets filters
    *  下级筛选器。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoResponse[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoResponse[]|null $filters 下级筛选器。
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
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

