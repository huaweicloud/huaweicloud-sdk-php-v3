<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMissingIndexTrendResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMissingIndexTrendResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trendList  趋势数量列表
    * userCostTrend  userCostTrend
    * userImpactTrend  userImpactTrend
    * userSeekTrend  userSeekTrend
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trendList' => '\HuaweiCloud\SDK\Das\V3\Model\MissingIndexTrendPoint[]',
            'userCostTrend' => '\HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent',
            'userImpactTrend' => '\HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent',
            'userSeekTrend' => '\HuaweiCloud\SDK\Das\V3\Model\UserSeekTrend'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trendList  趋势数量列表
    * userCostTrend  userCostTrend
    * userImpactTrend  userImpactTrend
    * userSeekTrend  userSeekTrend
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trendList' => null,
        'userCostTrend' => null,
        'userImpactTrend' => null,
        'userSeekTrend' => null
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
    * trendList  趋势数量列表
    * userCostTrend  userCostTrend
    * userImpactTrend  userImpactTrend
    * userSeekTrend  userSeekTrend
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trendList' => 'trend_list',
            'userCostTrend' => 'user_cost_trend',
            'userImpactTrend' => 'user_impact_trend',
            'userSeekTrend' => 'user_seek_trend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trendList  趋势数量列表
    * userCostTrend  userCostTrend
    * userImpactTrend  userImpactTrend
    * userSeekTrend  userSeekTrend
    *
    * @var string[]
    */
    protected static $setters = [
            'trendList' => 'setTrendList',
            'userCostTrend' => 'setUserCostTrend',
            'userImpactTrend' => 'setUserImpactTrend',
            'userSeekTrend' => 'setUserSeekTrend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trendList  趋势数量列表
    * userCostTrend  userCostTrend
    * userImpactTrend  userImpactTrend
    * userSeekTrend  userSeekTrend
    *
    * @var string[]
    */
    protected static $getters = [
            'trendList' => 'getTrendList',
            'userCostTrend' => 'getUserCostTrend',
            'userImpactTrend' => 'getUserImpactTrend',
            'userSeekTrend' => 'getUserSeekTrend'
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
        $this->container['trendList'] = isset($data['trendList']) ? $data['trendList'] : null;
        $this->container['userCostTrend'] = isset($data['userCostTrend']) ? $data['userCostTrend'] : null;
        $this->container['userImpactTrend'] = isset($data['userImpactTrend']) ? $data['userImpactTrend'] : null;
        $this->container['userSeekTrend'] = isset($data['userSeekTrend']) ? $data['userSeekTrend'] : null;
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
    * Gets trendList
    *  趋势数量列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\MissingIndexTrendPoint[]|null
    */
    public function getTrendList()
    {
        return $this->container['trendList'];
    }

    /**
    * Sets trendList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\MissingIndexTrendPoint[]|null $trendList 趋势数量列表
    *
    * @return $this
    */
    public function setTrendList($trendList)
    {
        $this->container['trendList'] = $trendList;
        return $this;
    }

    /**
    * Gets userCostTrend
    *  userCostTrend
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent|null
    */
    public function getUserCostTrend()
    {
        return $this->container['userCostTrend'];
    }

    /**
    * Sets userCostTrend
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent|null $userCostTrend userCostTrend
    *
    * @return $this
    */
    public function setUserCostTrend($userCostTrend)
    {
        $this->container['userCostTrend'] = $userCostTrend;
        return $this;
    }

    /**
    * Gets userImpactTrend
    *  userImpactTrend
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent|null
    */
    public function getUserImpactTrend()
    {
        return $this->container['userImpactTrend'];
    }

    /**
    * Sets userImpactTrend
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\UserTrendPercent|null $userImpactTrend userImpactTrend
    *
    * @return $this
    */
    public function setUserImpactTrend($userImpactTrend)
    {
        $this->container['userImpactTrend'] = $userImpactTrend;
        return $this;
    }

    /**
    * Gets userSeekTrend
    *  userSeekTrend
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\UserSeekTrend|null
    */
    public function getUserSeekTrend()
    {
        return $this->container['userSeekTrend'];
    }

    /**
    * Sets userSeekTrend
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\UserSeekTrend|null $userSeekTrend userSeekTrend
    *
    * @return $this
    */
    public function setUserSeekTrend($userSeekTrend)
    {
        $this->container['userSeekTrend'] = $userSeekTrend;
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

