<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResDetailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResDetailDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sumCount  总数。
    * trialCount  赠送数量。
    * expiredCount  到期数量。
    * expiringCount  即将到期数量，到期时间在30天内。
    * usedCount  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sumCount' => 'int',
            'trialCount' => 'int',
            'expiredCount' => 'int',
            'expiringCount' => 'int',
            'usedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sumCount  总数。
    * trialCount  赠送数量。
    * expiredCount  到期数量。
    * expiringCount  即将到期数量，到期时间在30天内。
    * usedCount  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sumCount' => null,
        'trialCount' => null,
        'expiredCount' => null,
        'expiringCount' => null,
        'usedCount' => null
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
    * sumCount  总数。
    * trialCount  赠送数量。
    * expiredCount  到期数量。
    * expiringCount  即将到期数量，到期时间在30天内。
    * usedCount  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sumCount' => 'sumCount',
            'trialCount' => 'trialCount',
            'expiredCount' => 'expiredCount',
            'expiringCount' => 'expiringCount',
            'usedCount' => 'usedCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sumCount  总数。
    * trialCount  赠送数量。
    * expiredCount  到期数量。
    * expiringCount  即将到期数量，到期时间在30天内。
    * usedCount  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @var string[]
    */
    protected static $setters = [
            'sumCount' => 'setSumCount',
            'trialCount' => 'setTrialCount',
            'expiredCount' => 'setExpiredCount',
            'expiringCount' => 'setExpiringCount',
            'usedCount' => 'setUsedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sumCount  总数。
    * trialCount  赠送数量。
    * expiredCount  到期数量。
    * expiringCount  即将到期数量，到期时间在30天内。
    * usedCount  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @var string[]
    */
    protected static $getters = [
            'sumCount' => 'getSumCount',
            'trialCount' => 'getTrialCount',
            'expiredCount' => 'getExpiredCount',
            'expiringCount' => 'getExpiringCount',
            'usedCount' => 'getUsedCount'
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
        $this->container['sumCount'] = isset($data['sumCount']) ? $data['sumCount'] : null;
        $this->container['trialCount'] = isset($data['trialCount']) ? $data['trialCount'] : null;
        $this->container['expiredCount'] = isset($data['expiredCount']) ? $data['expiredCount'] : null;
        $this->container['expiringCount'] = isset($data['expiringCount']) ? $data['expiringCount'] : null;
        $this->container['usedCount'] = isset($data['usedCount']) ? $data['usedCount'] : null;
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
    * Gets sumCount
    *  总数。
    *
    * @return int|null
    */
    public function getSumCount()
    {
        return $this->container['sumCount'];
    }

    /**
    * Sets sumCount
    *
    * @param int|null $sumCount 总数。
    *
    * @return $this
    */
    public function setSumCount($sumCount)
    {
        $this->container['sumCount'] = $sumCount;
        return $this;
    }

    /**
    * Gets trialCount
    *  赠送数量。
    *
    * @return int|null
    */
    public function getTrialCount()
    {
        return $this->container['trialCount'];
    }

    /**
    * Sets trialCount
    *
    * @param int|null $trialCount 赠送数量。
    *
    * @return $this
    */
    public function setTrialCount($trialCount)
    {
        $this->container['trialCount'] = $trialCount;
        return $this;
    }

    /**
    * Gets expiredCount
    *  到期数量。
    *
    * @return int|null
    */
    public function getExpiredCount()
    {
        return $this->container['expiredCount'];
    }

    /**
    * Sets expiredCount
    *
    * @param int|null $expiredCount 到期数量。
    *
    * @return $this
    */
    public function setExpiredCount($expiredCount)
    {
        $this->container['expiredCount'] = $expiredCount;
        return $this;
    }

    /**
    * Gets expiringCount
    *  即将到期数量，到期时间在30天内。
    *
    * @return int|null
    */
    public function getExpiringCount()
    {
        return $this->container['expiringCount'];
    }

    /**
    * Sets expiringCount
    *
    * @param int|null $expiringCount 即将到期数量，到期时间在30天内。
    *
    * @return $this
    */
    public function setExpiringCount($expiringCount)
    {
        $this->container['expiringCount'] = $expiringCount;
        return $this;
    }

    /**
    * Gets usedCount
    *  已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @return int|null
    */
    public function getUsedCount()
    {
        return $this->container['usedCount'];
    }

    /**
    * Sets usedCount
    *
    * @param int|null $usedCount 已使用数（录播存储空间、会议并发、推流并发方数暂无法查询）。
    *
    * @return $this
    */
    public function setUsedCount($usedCount)
    {
        $this->container['usedCount'] = $usedCount;
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

