<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ToPeriodReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ToPeriodReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodType  周期类型。MONTH：月；YEAR：年
    * periodNum  周期数。
    * autoPayPolicy  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    * autoRenewPolicy  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodType' => 'string',
            'periodNum' => 'int',
            'autoPayPolicy' => 'string',
            'autoRenewPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodType  周期类型。MONTH：月；YEAR：年
    * periodNum  周期数。
    * autoPayPolicy  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    * autoRenewPolicy  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodType' => null,
        'periodNum' => 'int32',
        'autoPayPolicy' => null,
        'autoRenewPolicy' => null
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
    * periodType  周期类型。MONTH：月；YEAR：年
    * periodNum  周期数。
    * autoPayPolicy  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    * autoRenewPolicy  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'autoPayPolicy' => 'auto_pay_policy',
            'autoRenewPolicy' => 'auto_renew_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodType  周期类型。MONTH：月；YEAR：年
    * periodNum  周期数。
    * autoPayPolicy  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    * autoRenewPolicy  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @var string[]
    */
    protected static $setters = [
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'autoPayPolicy' => 'setAutoPayPolicy',
            'autoRenewPolicy' => 'setAutoRenewPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodType  周期类型。MONTH：月；YEAR：年
    * periodNum  周期数。
    * autoPayPolicy  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    * autoRenewPolicy  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @var string[]
    */
    protected static $getters = [
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'autoPayPolicy' => 'getAutoPayPolicy',
            'autoRenewPolicy' => 'getAutoRenewPolicy'
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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['autoPayPolicy'] = isset($data['autoPayPolicy']) ? $data['autoPayPolicy'] : null;
        $this->container['autoRenewPolicy'] = isset($data['autoRenewPolicy']) ? $data['autoRenewPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
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
    * Gets periodType
    *  周期类型。MONTH：月；YEAR：年
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 周期类型。MONTH：月；YEAR：年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  周期数。
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 周期数。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets autoPayPolicy
    *  是否自动支付。YES：自动扣费；NO：手动支付（默认）
    *
    * @return string|null
    */
    public function getAutoPayPolicy()
    {
        return $this->container['autoPayPolicy'];
    }

    /**
    * Sets autoPayPolicy
    *
    * @param string|null $autoPayPolicy 是否自动支付。YES：自动扣费；NO：手动支付（默认）
    *
    * @return $this
    */
    public function setAutoPayPolicy($autoPayPolicy)
    {
        $this->container['autoPayPolicy'] = $autoPayPolicy;
        return $this;
    }

    /**
    * Gets autoRenewPolicy
    *  是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @return string|null
    */
    public function getAutoRenewPolicy()
    {
        return $this->container['autoRenewPolicy'];
    }

    /**
    * Sets autoRenewPolicy
    *
    * @param string|null $autoRenewPolicy 是否到期自动续期。YES：自动续费；NO：不自动续费（默认）
    *
    * @return $this
    */
    public function setAutoRenewPolicy($autoRenewPolicy)
    {
        $this->container['autoRenewPolicy'] = $autoRenewPolicy;
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

