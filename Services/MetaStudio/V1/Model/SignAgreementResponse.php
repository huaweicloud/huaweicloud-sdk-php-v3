<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignAgreementResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignAgreementResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentVersion  当前服务协议版本
    * needToSign  是否需要签署
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resignDeadline  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    * resignExpireProcessMode  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentVersion' => 'string',
            'needToSign' => 'bool',
            'signedVersion' => 'string',
            'signedTime' => 'string',
            'resignDeadline' => 'string',
            'resignExpireProcessMode' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentVersion  当前服务协议版本
    * needToSign  是否需要签署
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resignDeadline  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    * resignExpireProcessMode  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentVersion' => null,
        'needToSign' => null,
        'signedVersion' => null,
        'signedTime' => null,
        'resignDeadline' => null,
        'resignExpireProcessMode' => null,
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
    * currentVersion  当前服务协议版本
    * needToSign  是否需要签署
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resignDeadline  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    * resignExpireProcessMode  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentVersion' => 'current_version',
            'needToSign' => 'need_to_sign',
            'signedVersion' => 'signed_version',
            'signedTime' => 'signed_time',
            'resignDeadline' => 'resign_deadline',
            'resignExpireProcessMode' => 'resign_expire_process_mode',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentVersion  当前服务协议版本
    * needToSign  是否需要签署
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resignDeadline  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    * resignExpireProcessMode  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'currentVersion' => 'setCurrentVersion',
            'needToSign' => 'setNeedToSign',
            'signedVersion' => 'setSignedVersion',
            'signedTime' => 'setSignedTime',
            'resignDeadline' => 'setResignDeadline',
            'resignExpireProcessMode' => 'setResignExpireProcessMode',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentVersion  当前服务协议版本
    * needToSign  是否需要签署
    * signedVersion  签署服务协议版本
    * signedTime  协议签署时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resignDeadline  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    * resignExpireProcessMode  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'currentVersion' => 'getCurrentVersion',
            'needToSign' => 'getNeedToSign',
            'signedVersion' => 'getSignedVersion',
            'signedTime' => 'getSignedTime',
            'resignDeadline' => 'getResignDeadline',
            'resignExpireProcessMode' => 'getResignExpireProcessMode',
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
    const RESIGN_EXPIRE_PROCESS_MODE_EXPIRE_AUTO_AGREE = 'EXPIRE_AUTO_AGREE';
    const RESIGN_EXPIRE_PROCESS_MODE_EXPIRE_STOP_SERVICE = 'EXPIRE_STOP_SERVICE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResignExpireProcessModeAllowableValues()
    {
        return [
            self::RESIGN_EXPIRE_PROCESS_MODE_EXPIRE_AUTO_AGREE,
            self::RESIGN_EXPIRE_PROCESS_MODE_EXPIRE_STOP_SERVICE,
        ];
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
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['needToSign'] = isset($data['needToSign']) ? $data['needToSign'] : null;
        $this->container['signedVersion'] = isset($data['signedVersion']) ? $data['signedVersion'] : null;
        $this->container['signedTime'] = isset($data['signedTime']) ? $data['signedTime'] : null;
        $this->container['resignDeadline'] = isset($data['resignDeadline']) ? $data['resignDeadline'] : null;
        $this->container['resignExpireProcessMode'] = isset($data['resignExpireProcessMode']) ? $data['resignExpireProcessMode'] : null;
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
            if (!is_null($this->container['resignDeadline']) && (mb_strlen($this->container['resignDeadline']) > 20)) {
                $invalidProperties[] = "invalid value for 'resignDeadline', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['resignDeadline']) && (mb_strlen($this->container['resignDeadline']) < 0)) {
                $invalidProperties[] = "invalid value for 'resignDeadline', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResignExpireProcessModeAllowableValues();
                if (!is_null($this->container['resignExpireProcessMode']) && !in_array($this->container['resignExpireProcessMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resignExpireProcessMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resignExpireProcessMode']) && (mb_strlen($this->container['resignExpireProcessMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resignExpireProcessMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resignExpireProcessMode']) && (mb_strlen($this->container['resignExpireProcessMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resignExpireProcessMode', the character length must be bigger than or equal to 0.";
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
    * Gets needToSign
    *  是否需要签署
    *
    * @return bool|null
    */
    public function getNeedToSign()
    {
        return $this->container['needToSign'];
    }

    /**
    * Sets needToSign
    *
    * @param bool|null $needToSign 是否需要签署
    *
    * @return $this
    */
    public function setNeedToSign($needToSign)
    {
        $this->container['needToSign'] = $needToSign;
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
    * Gets resignDeadline
    *  签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    *
    * @return string|null
    */
    public function getResignDeadline()
    {
        return $this->container['resignDeadline'];
    }

    /**
    * Sets resignDeadline
    *
    * @param string|null $resignDeadline 签署最后期限。格式遵循：RFC 3339 如\"2024-10-10T15:59:59Z\"
    *
    * @return $this
    */
    public function setResignDeadline($resignDeadline)
    {
        $this->container['resignDeadline'] = $resignDeadline;
        return $this;
    }

    /**
    * Gets resignExpireProcessMode
    *  重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    *
    * @return string|null
    */
    public function getResignExpireProcessMode()
    {
        return $this->container['resignExpireProcessMode'];
    }

    /**
    * Sets resignExpireProcessMode
    *
    * @param string|null $resignExpireProcessMode 重新签署过期处理方式:EXPIRE_AUTO_AGREE 自动签署协议,EXPIRE_STOP_SERVICE 强制签署协议
    *
    * @return $this
    */
    public function setResignExpireProcessMode($resignExpireProcessMode)
    {
        $this->container['resignExpireProcessMode'] = $resignExpireProcessMode;
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

