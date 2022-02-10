<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReclaimCouponQuotasResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReclaimCouponQuotasResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorDetails  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    * simpleQuotaInfos  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorDetails' => '\HuaweiCloud\SDK\Bss\V2\Model\ErrorDetail[]',
            'simpleQuotaInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\QuotaReclaim[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorDetails  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    * simpleQuotaInfos  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorDetails' => null,
        'simpleQuotaInfos' => null
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
    * errorDetails  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    * simpleQuotaInfos  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorDetails' => 'error_details',
            'simpleQuotaInfos' => 'simple_quota_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorDetails  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    * simpleQuotaInfos  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorDetails' => 'setErrorDetails',
            'simpleQuotaInfos' => 'setSimpleQuotaInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorDetails  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    * simpleQuotaInfos  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorDetails' => 'getErrorDetails',
            'simpleQuotaInfos' => 'getSimpleQuotaInfos'
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
        $this->container['simpleQuotaInfos'] = isset($data['simpleQuotaInfos']) ? $data['simpleQuotaInfos'] : null;
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
    *  回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
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
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ErrorDetail[]|null $errorDetails 回收失败的精英服务商额度信息，具体参见表1，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @return $this
    */
    public function setErrorDetails($errorDetails)
    {
        $this->container['errorDetails'] = $errorDetails;
        return $this;
    }

    /**
    * Gets simpleQuotaInfos
    *  回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\QuotaReclaim[]|null
    */
    public function getSimpleQuotaInfos()
    {
        return $this->container['simpleQuotaInfos'];
    }

    /**
    * Sets simpleQuotaInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\QuotaReclaim[]|null $simpleQuotaInfos 回收成功的精英服务商额度信息，具体参见表2，只有HTTP STATUS 200的时候才有这个结构体。
    *
    * @return $this
    */
    public function setSimpleQuotaInfos($simpleQuotaInfos)
    {
        $this->container['simpleQuotaInfos'] = $simpleQuotaInfos;
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

