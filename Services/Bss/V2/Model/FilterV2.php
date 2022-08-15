<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FilterV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FilterV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operator  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    * filterFactor  filterFactor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operator' => 'int',
            'filterFactor' => '\HuaweiCloud\SDK\Bss\V2\Model\FilterFactor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operator  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    * filterFactor  filterFactor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operator' => 'int32',
        'filterFactor' => null
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
    * operator  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    * filterFactor  filterFactor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operator' => 'operator',
            'filterFactor' => 'filter_factor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operator  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    * filterFactor  filterFactor
    *
    * @var string[]
    */
    protected static $setters = [
            'operator' => 'setOperator',
            'filterFactor' => 'setFilterFactor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operator  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    * filterFactor  filterFactor
    *
    * @var string[]
    */
    protected static $getters = [
            'operator' => 'getOperator',
            'filterFactor' => 'getFilterFactor'
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['filterFactor'] = isset($data['filterFactor']) ? $data['filterFactor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operator']) && ($this->container['operator'] > 1)) {
                $invalidProperties[] = "invalid value for 'operator', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && ($this->container['operator'] < 0)) {
                $invalidProperties[] = "invalid value for 'operator', must be bigger than or equal to 0.";
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
    * Gets operator
    *  |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    *
    * @return int|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param int|null $operator |参数名称：运算符| |参数的约束及描述：0：仅包含1：仅排除 此参数不携带或携带值为null时，不作为筛选条件。|
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets filterFactor
    *  filterFactor
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\FilterFactor|null
    */
    public function getFilterFactor()
    {
        return $this->container['filterFactor'];
    }

    /**
    * Sets filterFactor
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\FilterFactor|null $filterFactor filterFactor
    *
    * @return $this
    */
    public function setFilterFactor($filterFactor)
    {
        $this->container['filterFactor'] = $filterFactor;
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

