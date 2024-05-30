<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticSchema';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * increase  本月新增。
    * total  总量。
    * standardCoverage  标准覆盖率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'increase' => 'int',
            'total' => 'int',
            'standardCoverage' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * increase  本月新增。
    * total  总量。
    * standardCoverage  标准覆盖率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'increase' => null,
        'total' => null,
        'standardCoverage' => 'double'
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
    * increase  本月新增。
    * total  总量。
    * standardCoverage  标准覆盖率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'increase' => 'increase',
            'total' => 'total',
            'standardCoverage' => 'standard_coverage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * increase  本月新增。
    * total  总量。
    * standardCoverage  标准覆盖率。
    *
    * @var string[]
    */
    protected static $setters = [
            'increase' => 'setIncrease',
            'total' => 'setTotal',
            'standardCoverage' => 'setStandardCoverage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * increase  本月新增。
    * total  总量。
    * standardCoverage  标准覆盖率。
    *
    * @var string[]
    */
    protected static $getters = [
            'increase' => 'getIncrease',
            'total' => 'getTotal',
            'standardCoverage' => 'getStandardCoverage'
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
        $this->container['increase'] = isset($data['increase']) ? $data['increase'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['standardCoverage'] = isset($data['standardCoverage']) ? $data['standardCoverage'] : null;
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
    * Gets increase
    *  本月新增。
    *
    * @return int|null
    */
    public function getIncrease()
    {
        return $this->container['increase'];
    }

    /**
    * Sets increase
    *
    * @param int|null $increase 本月新增。
    *
    * @return $this
    */
    public function setIncrease($increase)
    {
        $this->container['increase'] = $increase;
        return $this;
    }

    /**
    * Gets total
    *  总量。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总量。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets standardCoverage
    *  标准覆盖率。
    *
    * @return double|null
    */
    public function getStandardCoverage()
    {
        return $this->container['standardCoverage'];
    }

    /**
    * Sets standardCoverage
    *
    * @param double|null $standardCoverage 标准覆盖率。
    *
    * @return $this
    */
    public function setStandardCoverage($standardCoverage)
    {
        $this->container['standardCoverage'] = $standardCoverage;
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

