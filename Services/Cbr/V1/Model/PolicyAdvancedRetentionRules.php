<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyAdvancedRetentionRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyAdvancedRetentionRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * weeklyRetentionRules  weeklyRetentionRules
    * monthlyRetentionRules  monthlyRetentionRules
    * yearlyRetentionRules  yearlyRetentionRules
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'weeklyRetentionRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyWeeklyRetentionRules',
            'monthlyRetentionRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyMonthlyRetentionRules',
            'yearlyRetentionRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyYearlyRetentionRules'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * weeklyRetentionRules  weeklyRetentionRules
    * monthlyRetentionRules  monthlyRetentionRules
    * yearlyRetentionRules  yearlyRetentionRules
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'weeklyRetentionRules' => null,
        'monthlyRetentionRules' => null,
        'yearlyRetentionRules' => null
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
    * weeklyRetentionRules  weeklyRetentionRules
    * monthlyRetentionRules  monthlyRetentionRules
    * yearlyRetentionRules  yearlyRetentionRules
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'weeklyRetentionRules' => 'weekly_retention_rules',
            'monthlyRetentionRules' => 'monthly_retention_rules',
            'yearlyRetentionRules' => 'yearly_retention_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * weeklyRetentionRules  weeklyRetentionRules
    * monthlyRetentionRules  monthlyRetentionRules
    * yearlyRetentionRules  yearlyRetentionRules
    *
    * @var string[]
    */
    protected static $setters = [
            'weeklyRetentionRules' => 'setWeeklyRetentionRules',
            'monthlyRetentionRules' => 'setMonthlyRetentionRules',
            'yearlyRetentionRules' => 'setYearlyRetentionRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * weeklyRetentionRules  weeklyRetentionRules
    * monthlyRetentionRules  monthlyRetentionRules
    * yearlyRetentionRules  yearlyRetentionRules
    *
    * @var string[]
    */
    protected static $getters = [
            'weeklyRetentionRules' => 'getWeeklyRetentionRules',
            'monthlyRetentionRules' => 'getMonthlyRetentionRules',
            'yearlyRetentionRules' => 'getYearlyRetentionRules'
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
        $this->container['weeklyRetentionRules'] = isset($data['weeklyRetentionRules']) ? $data['weeklyRetentionRules'] : null;
        $this->container['monthlyRetentionRules'] = isset($data['monthlyRetentionRules']) ? $data['monthlyRetentionRules'] : null;
        $this->container['yearlyRetentionRules'] = isset($data['yearlyRetentionRules']) ? $data['yearlyRetentionRules'] : null;
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
    * Gets weeklyRetentionRules
    *  weeklyRetentionRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyWeeklyRetentionRules|null
    */
    public function getWeeklyRetentionRules()
    {
        return $this->container['weeklyRetentionRules'];
    }

    /**
    * Sets weeklyRetentionRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyWeeklyRetentionRules|null $weeklyRetentionRules weeklyRetentionRules
    *
    * @return $this
    */
    public function setWeeklyRetentionRules($weeklyRetentionRules)
    {
        $this->container['weeklyRetentionRules'] = $weeklyRetentionRules;
        return $this;
    }

    /**
    * Gets monthlyRetentionRules
    *  monthlyRetentionRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyMonthlyRetentionRules|null
    */
    public function getMonthlyRetentionRules()
    {
        return $this->container['monthlyRetentionRules'];
    }

    /**
    * Sets monthlyRetentionRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyMonthlyRetentionRules|null $monthlyRetentionRules monthlyRetentionRules
    *
    * @return $this
    */
    public function setMonthlyRetentionRules($monthlyRetentionRules)
    {
        $this->container['monthlyRetentionRules'] = $monthlyRetentionRules;
        return $this;
    }

    /**
    * Gets yearlyRetentionRules
    *  yearlyRetentionRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyYearlyRetentionRules|null
    */
    public function getYearlyRetentionRules()
    {
        return $this->container['yearlyRetentionRules'];
    }

    /**
    * Sets yearlyRetentionRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyYearlyRetentionRules|null $yearlyRetentionRules yearlyRetentionRules
    *
    * @return $this
    */
    public function setYearlyRetentionRules($yearlyRetentionRules)
    {
        $this->container['yearlyRetentionRules'] = $yearlyRetentionRules;
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

