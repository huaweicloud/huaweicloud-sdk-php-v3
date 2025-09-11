<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignSpecialAgreementResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignSpecialAgreementResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agreementType  当前服务协议类型
    * currentVersion  当前服务协议版本
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agreementType' => 'string',
            'currentVersion' => 'string',
            'signedVersion' => 'string',
            'signedTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agreementType  当前服务协议类型
    * currentVersion  当前服务协议版本
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agreementType' => null,
        'currentVersion' => null,
        'signedVersion' => null,
        'signedTime' => null,
        'xRequestId' => null
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
    * agreementType  当前服务协议类型
    * currentVersion  当前服务协议版本
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agreementType' => 'agreement_type',
            'currentVersion' => 'current_version',
            'signedVersion' => 'signed_version',
            'signedTime' => 'signed_time',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agreementType  当前服务协议类型
    * currentVersion  当前服务协议版本
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'agreementType' => 'setAgreementType',
            'currentVersion' => 'setCurrentVersion',
            'signedVersion' => 'setSignedVersion',
            'signedTime' => 'setSignedTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agreementType  当前服务协议类型
    * currentVersion  当前服务协议版本
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'agreementType' => 'getAgreementType',
            'currentVersion' => 'getCurrentVersion',
            'signedVersion' => 'getSignedVersion',
            'signedTime' => 'getSignedTime',
            'xRequestId' => 'getXRequestId'
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
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['signedVersion'] = isset($data['signedVersion']) ? $data['signedVersion'] : null;
        $this->container['signedTime'] = isset($data['signedTime']) ? $data['signedTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agreementType']) && (mb_strlen($this->container['agreementType']) > 64)) {
                $invalidProperties[] = "invalid value for 'agreementType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agreementType']) && (mb_strlen($this->container['agreementType']) < 0)) {
                $invalidProperties[] = "invalid value for 'agreementType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentVersion']) && (mb_strlen($this->container['currentVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentVersion']) && (mb_strlen($this->container['currentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signedVersion']) && (mb_strlen($this->container['signedVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'signedVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['signedVersion']) && (mb_strlen($this->container['signedVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'signedVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signedTime']) && (mb_strlen($this->container['signedTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'signedTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['signedTime']) && (mb_strlen($this->container['signedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'signedTime', the character length must be bigger than or equal to 0.";
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
    *  当前服务协议类型
    *
    * @return string|null
    */
    public function getAgreementType()
    {
        return $this->container['agreementType'];
    }

    /**
    * Sets agreementType
    *
    * @param string|null $agreementType 当前服务协议类型
    *
    * @return $this
    */
    public function setAgreementType($agreementType)
    {
        $this->container['agreementType'] = $agreementType;
        return $this;
    }

    /**
    * Gets currentVersion
    *  当前服务协议版本
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前服务协议版本
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets signedVersion
    *  签署服务协议版本
    *
    * @return string|null
    */
    public function getSignedVersion()
    {
        return $this->container['signedVersion'];
    }

    /**
    * Sets signedVersion
    *
    * @param string|null $signedVersion 签署服务协议版本
    *
    * @return $this
    */
    public function setSignedVersion($signedVersion)
    {
        $this->container['signedVersion'] = $signedVersion;
        return $this;
    }

    /**
    * Gets signedTime
    *  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return string|null
    */
    public function getSignedTime()
    {
        return $this->container['signedTime'];
    }

    /**
    * Sets signedTime
    *
    * @param string|null $signedTime 协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return $this
    */
    public function setSignedTime($signedTime)
    {
        $this->container['signedTime'] = $signedTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

