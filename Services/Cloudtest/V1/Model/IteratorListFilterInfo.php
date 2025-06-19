<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IteratorListFilterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IteratorListFilterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * piSprints  pi过滤条件
    * planEndDateStart  计划结束间过滤开始时间点
    * planEndDateEnd  计划结束时间过滤结束时间点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'piSprints' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]',
            'planEndDateStart' => '\DateTime',
            'planEndDateEnd' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * piSprints  pi过滤条件
    * planEndDateStart  计划结束间过滤开始时间点
    * planEndDateEnd  计划结束时间过滤结束时间点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'piSprints' => null,
        'planEndDateStart' => 'date-time',
        'planEndDateEnd' => 'date-time'
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
    * piSprints  pi过滤条件
    * planEndDateStart  计划结束间过滤开始时间点
    * planEndDateEnd  计划结束时间过滤结束时间点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'piSprints' => 'pi_sprints',
            'planEndDateStart' => 'plan_end_date_start',
            'planEndDateEnd' => 'plan_end_date_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * piSprints  pi过滤条件
    * planEndDateStart  计划结束间过滤开始时间点
    * planEndDateEnd  计划结束时间过滤结束时间点
    *
    * @var string[]
    */
    protected static $setters = [
            'piSprints' => 'setPiSprints',
            'planEndDateStart' => 'setPlanEndDateStart',
            'planEndDateEnd' => 'setPlanEndDateEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * piSprints  pi过滤条件
    * planEndDateStart  计划结束间过滤开始时间点
    * planEndDateEnd  计划结束时间过滤结束时间点
    *
    * @var string[]
    */
    protected static $getters = [
            'piSprints' => 'getPiSprints',
            'planEndDateStart' => 'getPlanEndDateStart',
            'planEndDateEnd' => 'getPlanEndDateEnd'
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
        $this->container['piSprints'] = isset($data['piSprints']) ? $data['piSprints'] : null;
        $this->container['planEndDateStart'] = isset($data['planEndDateStart']) ? $data['planEndDateStart'] : null;
        $this->container['planEndDateEnd'] = isset($data['planEndDateEnd']) ? $data['planEndDateEnd'] : null;
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
    * Gets piSprints
    *  pi过滤条件
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null
    */
    public function getPiSprints()
    {
        return $this->container['piSprints'];
    }

    /**
    * Sets piSprints
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null $piSprints pi过滤条件
    *
    * @return $this
    */
    public function setPiSprints($piSprints)
    {
        $this->container['piSprints'] = $piSprints;
        return $this;
    }

    /**
    * Gets planEndDateStart
    *  计划结束间过滤开始时间点
    *
    * @return \DateTime|null
    */
    public function getPlanEndDateStart()
    {
        return $this->container['planEndDateStart'];
    }

    /**
    * Sets planEndDateStart
    *
    * @param \DateTime|null $planEndDateStart 计划结束间过滤开始时间点
    *
    * @return $this
    */
    public function setPlanEndDateStart($planEndDateStart)
    {
        $this->container['planEndDateStart'] = $planEndDateStart;
        return $this;
    }

    /**
    * Gets planEndDateEnd
    *  计划结束时间过滤结束时间点
    *
    * @return \DateTime|null
    */
    public function getPlanEndDateEnd()
    {
        return $this->container['planEndDateEnd'];
    }

    /**
    * Sets planEndDateEnd
    *
    * @param \DateTime|null $planEndDateEnd 计划结束时间过滤结束时间点
    *
    * @return $this
    */
    public function setPlanEndDateEnd($planEndDateEnd)
    {
        $this->container['planEndDateEnd'] = $planEndDateEnd;
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

