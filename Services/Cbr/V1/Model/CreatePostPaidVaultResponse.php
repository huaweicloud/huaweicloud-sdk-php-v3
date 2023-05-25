<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePostPaidVaultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePostPaidVaultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orders  订单详情
    * retCode  创建结果代码 0：成功
    * errText  创建结果信息
    * errorCode  操作错误码 0：无错误
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orders' => '\HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]',
            'retCode' => 'int',
            'errText' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orders  订单详情
    * retCode  创建结果代码 0：成功
    * errText  创建结果信息
    * errorCode  操作错误码 0：无错误
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orders' => null,
        'retCode' => 'int32',
        'errText' => null,
        'errorCode' => null
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
    * orders  订单详情
    * retCode  创建结果代码 0：成功
    * errText  创建结果信息
    * errorCode  操作错误码 0：无错误
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orders' => 'orders',
            'retCode' => 'retCode',
            'errText' => 'errText',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orders  订单详情
    * retCode  创建结果代码 0：成功
    * errText  创建结果信息
    * errorCode  操作错误码 0：无错误
    *
    * @var string[]
    */
    protected static $setters = [
            'orders' => 'setOrders',
            'retCode' => 'setRetCode',
            'errText' => 'setErrText',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orders  订单详情
    * retCode  创建结果代码 0：成功
    * errText  创建结果信息
    * errorCode  操作错误码 0：无错误
    *
    * @var string[]
    */
    protected static $getters = [
            'orders' => 'getOrders',
            'retCode' => 'getRetCode',
            'errText' => 'getErrText',
            'errorCode' => 'getErrorCode'
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
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['errText'] = isset($data['errText']) ? $data['errText'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
    * Gets orders
    *  订单详情
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]|null
    */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
    * Sets orders
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]|null $orders 订单详情
    *
    * @return $this
    */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;
        return $this;
    }

    /**
    * Gets retCode
    *  创建结果代码 0：成功
    *
    * @return int|null
    */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
    * Sets retCode
    *
    * @param int|null $retCode 创建结果代码 0：成功
    *
    * @return $this
    */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;
        return $this;
    }

    /**
    * Gets errText
    *  创建结果信息
    *
    * @return string|null
    */
    public function getErrText()
    {
        return $this->container['errText'];
    }

    /**
    * Sets errText
    *
    * @param string|null $errText 创建结果信息
    *
    * @return $this
    */
    public function setErrText($errText)
    {
        $this->container['errText'] = $errText;
        return $this;
    }

    /**
    * Gets errorCode
    *  操作错误码 0：无错误
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 操作错误码 0：无错误
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

