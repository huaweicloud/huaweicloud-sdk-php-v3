<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndexUsagePercent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndexUsagePercent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * percentLe10Count  百分比小于等于10%的数量
    * percent10To50Count  百分比大于10%小于等于50%的数量
    * percent50To80Count  百分比大于50%小于等于80%的数量
    * percentGl80Count  百分比大于80%的数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'percentLe10Count' => 'int',
            'percent10To50Count' => 'int',
            'percent50To80Count' => 'int',
            'percentGl80Count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * percentLe10Count  百分比小于等于10%的数量
    * percent10To50Count  百分比大于10%小于等于50%的数量
    * percent50To80Count  百分比大于50%小于等于80%的数量
    * percentGl80Count  百分比大于80%的数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'percentLe10Count' => 'int64',
        'percent10To50Count' => 'int64',
        'percent50To80Count' => 'int64',
        'percentGl80Count' => 'int64'
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
    * percentLe10Count  百分比小于等于10%的数量
    * percent10To50Count  百分比大于10%小于等于50%的数量
    * percent50To80Count  百分比大于50%小于等于80%的数量
    * percentGl80Count  百分比大于80%的数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'percentLe10Count' => 'percent_le10_count',
            'percent10To50Count' => 'percent10_to50_count',
            'percent50To80Count' => 'percent50_to80_count',
            'percentGl80Count' => 'percent_gl80_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * percentLe10Count  百分比小于等于10%的数量
    * percent10To50Count  百分比大于10%小于等于50%的数量
    * percent50To80Count  百分比大于50%小于等于80%的数量
    * percentGl80Count  百分比大于80%的数量
    *
    * @var string[]
    */
    protected static $setters = [
            'percentLe10Count' => 'setPercentLe10Count',
            'percent10To50Count' => 'setPercent10To50Count',
            'percent50To80Count' => 'setPercent50To80Count',
            'percentGl80Count' => 'setPercentGl80Count'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * percentLe10Count  百分比小于等于10%的数量
    * percent10To50Count  百分比大于10%小于等于50%的数量
    * percent50To80Count  百分比大于50%小于等于80%的数量
    * percentGl80Count  百分比大于80%的数量
    *
    * @var string[]
    */
    protected static $getters = [
            'percentLe10Count' => 'getPercentLe10Count',
            'percent10To50Count' => 'getPercent10To50Count',
            'percent50To80Count' => 'getPercent50To80Count',
            'percentGl80Count' => 'getPercentGl80Count'
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
        $this->container['percentLe10Count'] = isset($data['percentLe10Count']) ? $data['percentLe10Count'] : null;
        $this->container['percent10To50Count'] = isset($data['percent10To50Count']) ? $data['percent10To50Count'] : null;
        $this->container['percent50To80Count'] = isset($data['percent50To80Count']) ? $data['percent50To80Count'] : null;
        $this->container['percentGl80Count'] = isset($data['percentGl80Count']) ? $data['percentGl80Count'] : null;
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
    * Gets percentLe10Count
    *  百分比小于等于10%的数量
    *
    * @return int|null
    */
    public function getPercentLe10Count()
    {
        return $this->container['percentLe10Count'];
    }

    /**
    * Sets percentLe10Count
    *
    * @param int|null $percentLe10Count 百分比小于等于10%的数量
    *
    * @return $this
    */
    public function setPercentLe10Count($percentLe10Count)
    {
        $this->container['percentLe10Count'] = $percentLe10Count;
        return $this;
    }

    /**
    * Gets percent10To50Count
    *  百分比大于10%小于等于50%的数量
    *
    * @return int|null
    */
    public function getPercent10To50Count()
    {
        return $this->container['percent10To50Count'];
    }

    /**
    * Sets percent10To50Count
    *
    * @param int|null $percent10To50Count 百分比大于10%小于等于50%的数量
    *
    * @return $this
    */
    public function setPercent10To50Count($percent10To50Count)
    {
        $this->container['percent10To50Count'] = $percent10To50Count;
        return $this;
    }

    /**
    * Gets percent50To80Count
    *  百分比大于50%小于等于80%的数量
    *
    * @return int|null
    */
    public function getPercent50To80Count()
    {
        return $this->container['percent50To80Count'];
    }

    /**
    * Sets percent50To80Count
    *
    * @param int|null $percent50To80Count 百分比大于50%小于等于80%的数量
    *
    * @return $this
    */
    public function setPercent50To80Count($percent50To80Count)
    {
        $this->container['percent50To80Count'] = $percent50To80Count;
        return $this;
    }

    /**
    * Gets percentGl80Count
    *  百分比大于80%的数量
    *
    * @return int|null
    */
    public function getPercentGl80Count()
    {
        return $this->container['percentGl80Count'];
    }

    /**
    * Sets percentGl80Count
    *
    * @param int|null $percentGl80Count 百分比大于80%的数量
    *
    * @return $this
    */
    public function setPercentGl80Count($percentGl80Count)
    {
        $this->container['percentGl80Count'] = $percentGl80Count;
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

