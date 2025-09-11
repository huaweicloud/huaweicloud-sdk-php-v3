<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecialAgreementSignReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecialAgreementSignReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agreementType  当前服务协议类型: AUTO_PAY: 自动支付协议
    * toSign  是否为去签署,true:签署;false:取消签署
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agreementType' => 'string',
            'toSign' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agreementType  当前服务协议类型: AUTO_PAY: 自动支付协议
    * toSign  是否为去签署,true:签署;false:取消签署
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agreementType' => null,
        'toSign' => null
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
    * agreementType  当前服务协议类型: AUTO_PAY: 自动支付协议
    * toSign  是否为去签署,true:签署;false:取消签署
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agreementType' => 'agreement_type',
            'toSign' => 'to_sign'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agreementType  当前服务协议类型: AUTO_PAY: 自动支付协议
    * toSign  是否为去签署,true:签署;false:取消签署
    *
    * @var string[]
    */
    protected static $setters = [
            'agreementType' => 'setAgreementType',
            'toSign' => 'setToSign'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agreementType  当前服务协议类型: AUTO_PAY: 自动支付协议
    * toSign  是否为去签署,true:签署;false:取消签署
    *
    * @var string[]
    */
    protected static $getters = [
            'agreementType' => 'getAgreementType',
            'toSign' => 'getToSign'
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
        $this->container['agreementType'] = isset($data['agreementType']) ? $data['agreementType'] : null;
        $this->container['toSign'] = isset($data['toSign']) ? $data['toSign'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agreementType'] === null) {
            $invalidProperties[] = "'agreementType' can't be null";
        }
            if ((mb_strlen($this->container['agreementType']) > 64)) {
                $invalidProperties[] = "invalid value for 'agreementType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['agreementType']) < 0)) {
                $invalidProperties[] = "invalid value for 'agreementType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['toSign'] === null) {
            $invalidProperties[] = "'toSign' can't be null";
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
    * Gets agreementType
    *  当前服务协议类型: AUTO_PAY: 自动支付协议
    *
    * @return string
    */
    public function getAgreementType()
    {
        return $this->container['agreementType'];
    }

    /**
    * Sets agreementType
    *
    * @param string $agreementType 当前服务协议类型: AUTO_PAY: 自动支付协议
    *
    * @return $this
    */
    public function setAgreementType($agreementType)
    {
        $this->container['agreementType'] = $agreementType;
        return $this;
    }

    /**
    * Gets toSign
    *  是否为去签署,true:签署;false:取消签署
    *
    * @return bool
    */
    public function getToSign()
    {
        return $this->container['toSign'];
    }

    /**
    * Sets toSign
    *
    * @param bool $toSign 是否为去签署,true:签署;false:取消签署
    *
    * @return $this
    */
    public function setToSign($toSign)
    {
        $this->container['toSign'] = $toSign;
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

