<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IncentiveAndDiscountPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IncentiveAndDiscountPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceTypeCode  云服务类型列表。
    * incentivePolicy  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    * allowDiscount  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceTypeCode' => 'string',
            'incentivePolicy' => 'string',
            'allowDiscount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceTypeCode  云服务类型列表。
    * incentivePolicy  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    * allowDiscount  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceTypeCode' => null,
        'incentivePolicy' => null,
        'allowDiscount' => null
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
    * serviceTypeCode  云服务类型列表。
    * incentivePolicy  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    * allowDiscount  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceTypeCode' => 'service_type_code',
            'incentivePolicy' => 'incentive_policy',
            'allowDiscount' => 'allow_discount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceTypeCode  云服务类型列表。
    * incentivePolicy  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    * allowDiscount  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceTypeCode' => 'setServiceTypeCode',
            'incentivePolicy' => 'setIncentivePolicy',
            'allowDiscount' => 'setAllowDiscount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceTypeCode  云服务类型列表。
    * incentivePolicy  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    * allowDiscount  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceTypeCode' => 'getServiceTypeCode',
            'incentivePolicy' => 'getIncentivePolicy',
            'allowDiscount' => 'getAllowDiscount'
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
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['incentivePolicy'] = isset($data['incentivePolicy']) ? $data['incentivePolicy'] : null;
        $this->container['allowDiscount'] = isset($data['allowDiscount']) ? $data['allowDiscount'] : null;
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
    * Gets serviceTypeCode
    *  云服务类型列表。
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode 云服务类型列表。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets incentivePolicy
    *  激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    *
    * @return string|null
    */
    public function getIncentivePolicy()
    {
        return $this->container['incentivePolicy'];
    }

    /**
    * Sets incentivePolicy
    *
    * @param string|null $incentivePolicy 激励策略。 0：非特定产品1：特定产品2：无业绩无返点13：有业绩无返点
    *
    * @return $this
    */
    public function setIncentivePolicy($incentivePolicy)
    {
        $this->container['incentivePolicy'] = $incentivePolicy;
        return $this;
    }

    /**
    * Gets allowDiscount
    *  是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @return string|null
    */
    public function getAllowDiscount()
    {
        return $this->container['allowDiscount'];
    }

    /**
    * Sets allowDiscount
    *
    * @param string|null $allowDiscount 是否允许应用伙伴授予折扣。 YES：允许应用NO：不许应用
    *
    * @return $this
    */
    public function setAllowDiscount($allowDiscount)
    {
        $this->container['allowDiscount'] = $allowDiscount;
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

