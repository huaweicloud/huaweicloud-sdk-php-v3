<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertRuleTemplateMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertRuleTemplateMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activity  活动数量
    * category  类型
    * metric  指标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activity' => 'int',
            'category' => 'string',
            'metric' => 'map[string,float]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activity  活动数量
    * category  类型
    * metric  指标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activity' => 'int64',
        'category' => null,
        'metric' => null
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
    * activity  活动数量
    * category  类型
    * metric  指标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activity' => 'activity',
            'category' => 'category',
            'metric' => 'metric'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activity  活动数量
    * category  类型
    * metric  指标
    *
    * @var string[]
    */
    protected static $setters = [
            'activity' => 'setActivity',
            'category' => 'setCategory',
            'metric' => 'setMetric'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activity  活动数量
    * category  类型
    * metric  指标
    *
    * @var string[]
    */
    protected static $getters = [
            'activity' => 'getActivity',
            'category' => 'getCategory',
            'metric' => 'getMetric'
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
    const CATEGORY_GROUP_COUNT = 'GROUP_COUNT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_GROUP_COUNT,
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
            if (($this->container['activity'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'activity', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['activity'] < 0)) {
                $invalidProperties[] = "invalid value for 'activity', must be bigger than or equal to 0.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
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
    * Gets activity
    *  活动数量
    *
    * @return int
    */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
    * Sets activity
    *
    * @param int $activity 活动数量
    *
    * @return $this
    */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;
        return $this;
    }

    /**
    * Gets category
    *  类型
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets metric
    *  指标
    *
    * @return map[string,float]
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param map[string,float] $metric 指标
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
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

