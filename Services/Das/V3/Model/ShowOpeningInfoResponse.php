<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOpeningInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOpeningInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * open  是否开通
    * isQuotaExceed  配额是否超过
    * quotaNum  开通配额总数
    * usedNum  已使用配额数量
    * isCharge  是否付费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'open' => 'bool',
            'isQuotaExceed' => 'bool',
            'quotaNum' => 'int',
            'usedNum' => 'int',
            'isCharge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * open  是否开通
    * isQuotaExceed  配额是否超过
    * quotaNum  开通配额总数
    * usedNum  已使用配额数量
    * isCharge  是否付费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'open' => null,
        'isQuotaExceed' => null,
        'quotaNum' => 'int32',
        'usedNum' => 'int32',
        'isCharge' => null
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
    * open  是否开通
    * isQuotaExceed  配额是否超过
    * quotaNum  开通配额总数
    * usedNum  已使用配额数量
    * isCharge  是否付费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'open' => 'open',
            'isQuotaExceed' => 'is_quota_exceed',
            'quotaNum' => 'quota_num',
            'usedNum' => 'used_num',
            'isCharge' => 'is_charge'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * open  是否开通
    * isQuotaExceed  配额是否超过
    * quotaNum  开通配额总数
    * usedNum  已使用配额数量
    * isCharge  是否付费
    *
    * @var string[]
    */
    protected static $setters = [
            'open' => 'setOpen',
            'isQuotaExceed' => 'setIsQuotaExceed',
            'quotaNum' => 'setQuotaNum',
            'usedNum' => 'setUsedNum',
            'isCharge' => 'setIsCharge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * open  是否开通
    * isQuotaExceed  配额是否超过
    * quotaNum  开通配额总数
    * usedNum  已使用配额数量
    * isCharge  是否付费
    *
    * @var string[]
    */
    protected static $getters = [
            'open' => 'getOpen',
            'isQuotaExceed' => 'getIsQuotaExceed',
            'quotaNum' => 'getQuotaNum',
            'usedNum' => 'getUsedNum',
            'isCharge' => 'getIsCharge'
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
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['isQuotaExceed'] = isset($data['isQuotaExceed']) ? $data['isQuotaExceed'] : null;
        $this->container['quotaNum'] = isset($data['quotaNum']) ? $data['quotaNum'] : null;
        $this->container['usedNum'] = isset($data['usedNum']) ? $data['usedNum'] : null;
        $this->container['isCharge'] = isset($data['isCharge']) ? $data['isCharge'] : null;
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
    * Gets open
    *  是否开通
    *
    * @return bool|null
    */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
    * Sets open
    *
    * @param bool|null $open 是否开通
    *
    * @return $this
    */
    public function setOpen($open)
    {
        $this->container['open'] = $open;
        return $this;
    }

    /**
    * Gets isQuotaExceed
    *  配额是否超过
    *
    * @return bool|null
    */
    public function getIsQuotaExceed()
    {
        return $this->container['isQuotaExceed'];
    }

    /**
    * Sets isQuotaExceed
    *
    * @param bool|null $isQuotaExceed 配额是否超过
    *
    * @return $this
    */
    public function setIsQuotaExceed($isQuotaExceed)
    {
        $this->container['isQuotaExceed'] = $isQuotaExceed;
        return $this;
    }

    /**
    * Gets quotaNum
    *  开通配额总数
    *
    * @return int|null
    */
    public function getQuotaNum()
    {
        return $this->container['quotaNum'];
    }

    /**
    * Sets quotaNum
    *
    * @param int|null $quotaNum 开通配额总数
    *
    * @return $this
    */
    public function setQuotaNum($quotaNum)
    {
        $this->container['quotaNum'] = $quotaNum;
        return $this;
    }

    /**
    * Gets usedNum
    *  已使用配额数量
    *
    * @return int|null
    */
    public function getUsedNum()
    {
        return $this->container['usedNum'];
    }

    /**
    * Sets usedNum
    *
    * @param int|null $usedNum 已使用配额数量
    *
    * @return $this
    */
    public function setUsedNum($usedNum)
    {
        $this->container['usedNum'] = $usedNum;
        return $this;
    }

    /**
    * Gets isCharge
    *  是否付费
    *
    * @return bool|null
    */
    public function getIsCharge()
    {
        return $this->container['isCharge'];
    }

    /**
    * Sets isCharge
    *
    * @param bool|null $isCharge 是否付费
    *
    * @return $this
    */
    public function setIsCharge($isCharge)
    {
        $this->container['isCharge'] = $isCharge;
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

