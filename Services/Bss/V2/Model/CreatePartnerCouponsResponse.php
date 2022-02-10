<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePartnerCouponsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePartnerCouponsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorDetails  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    * couponInfos  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorDetails' => '\HuaweiCloud\SDK\Bss\V2\Model\ErrorDetail[]',
            'couponInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\CouponSimpleInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorDetails  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    * couponInfos  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorDetails' => null,
        'couponInfos' => null
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
    * errorDetails  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    * couponInfos  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorDetails' => 'error_details',
            'couponInfos' => 'coupon_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorDetails  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    * couponInfos  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorDetails' => 'setErrorDetails',
            'couponInfos' => 'setCouponInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorDetails  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    * couponInfos  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorDetails' => 'getErrorDetails',
            'couponInfos' => 'getCouponInfos'
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
        $this->container['errorDetails'] = isset($data['errorDetails']) ? $data['errorDetails'] : null;
        $this->container['couponInfos'] = isset($data['couponInfos']) ? $data['couponInfos'] : null;
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
    * Gets errorDetails
    *  错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\ErrorDetail[]|null
    */
    public function getErrorDetails()
    {
        return $this->container['errorDetails'];
    }

    /**
    * Sets errorDetails
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ErrorDetail[]|null $errorDetails 错误的客户列表和错误信息，只有HTTP 200的时候才会返回这个结构体，具体参见表1。
    *
    * @return $this
    */
    public function setErrorDetails($errorDetails)
    {
        $this->container['errorDetails'] = $errorDetails;
        return $this;
    }

    /**
    * Gets couponInfos
    *  成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CouponSimpleInfo[]|null
    */
    public function getCouponInfos()
    {
        return $this->container['couponInfos'];
    }

    /**
    * Sets couponInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CouponSimpleInfo[]|null $couponInfos 成功的客户ID和对应的券ID列表，只有HTTP 200的时候才会返回这个结构体，具体参见表2。
    *
    * @return $this
    */
    public function setCouponInfos($couponInfos)
    {
        $this->container['couponInfos'] = $couponInfos;
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

