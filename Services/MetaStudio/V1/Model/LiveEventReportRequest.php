<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveEventReportRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveEventReportRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  直播间ID。
    * jobId  任务ID。
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * authKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * expiresTime  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * xMssAuthKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * xMssExpiresTime  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * refreshUrl  是否刷新URL
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'jobId' => 'string',
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'xAppUserId' => 'string',
            'authKey' => 'string',
            'expiresTime' => 'int',
            'xMssAuthKey' => 'string',
            'xMssExpiresTime' => 'int',
            'refreshUrl' => 'bool',
            'body' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReportLiveEventReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  直播间ID。
    * jobId  任务ID。
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * authKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * expiresTime  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * xMssAuthKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * xMssExpiresTime  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * refreshUrl  是否刷新URL
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'jobId' => null,
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'xAppUserId' => null,
        'authKey' => null,
        'expiresTime' => 'int64',
        'xMssAuthKey' => null,
        'xMssExpiresTime' => 'int64',
        'refreshUrl' => null,
        'body' => null
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
    * roomId  直播间ID。
    * jobId  任务ID。
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * authKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * expiresTime  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * xMssAuthKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * xMssExpiresTime  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * refreshUrl  是否刷新URL
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'jobId' => 'job_id',
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'xAppUserId' => 'X-App-UserId',
            'authKey' => 'auth_key',
            'expiresTime' => 'expires_time',
            'xMssAuthKey' => 'x-mss-auth-key',
            'xMssExpiresTime' => 'x-mss-expires-time',
            'refreshUrl' => 'refresh_url',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  直播间ID。
    * jobId  任务ID。
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * authKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * expiresTime  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * xMssAuthKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * xMssExpiresTime  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * refreshUrl  是否刷新URL
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'jobId' => 'setJobId',
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'xAppUserId' => 'setXAppUserId',
            'authKey' => 'setAuthKey',
            'expiresTime' => 'setExpiresTime',
            'xMssAuthKey' => 'setXMssAuthKey',
            'xMssExpiresTime' => 'setXMssExpiresTime',
            'refreshUrl' => 'setRefreshUrl',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  直播间ID。
    * jobId  任务ID。
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * authKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * expiresTime  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * xMssAuthKey  鉴权Key。通过HmacSHA256生成的鉴权key
    * xMssExpiresTime  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    * refreshUrl  是否刷新URL
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'jobId' => 'getJobId',
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'xAppUserId' => 'getXAppUserId',
            'authKey' => 'getAuthKey',
            'expiresTime' => 'getExpiresTime',
            'xMssAuthKey' => 'getXMssAuthKey',
            'xMssExpiresTime' => 'getXMssExpiresTime',
            'refreshUrl' => 'getRefreshUrl',
            'body' => 'getBody'
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xAppUserId'] = isset($data['xAppUserId']) ? $data['xAppUserId'] : null;
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : null;
        $this->container['expiresTime'] = isset($data['expiresTime']) ? $data['expiresTime'] : null;
        $this->container['xMssAuthKey'] = isset($data['xMssAuthKey']) ? $data['xMssAuthKey'] : null;
        $this->container['xMssExpiresTime'] = isset($data['xMssExpiresTime']) ? $data['xMssExpiresTime'] : null;
        $this->container['refreshUrl'] = isset($data['refreshUrl']) ? $data['refreshUrl'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expiresTime']) && ($this->container['expiresTime'] > 4102415999000)) {
                $invalidProperties[] = "invalid value for 'expiresTime', must be smaller than or equal to 4102415999000.";
            }
            if (!is_null($this->container['expiresTime']) && ($this->container['expiresTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expiresTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['xMssAuthKey']) && (mb_strlen($this->container['xMssAuthKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'xMssAuthKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xMssAuthKey']) && (mb_strlen($this->container['xMssAuthKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'xMssAuthKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['xMssExpiresTime']) && ($this->container['xMssExpiresTime'] > 4102415999000)) {
                $invalidProperties[] = "invalid value for 'xMssExpiresTime', must be smaller than or equal to 4102415999000.";
            }
            if (!is_null($this->container['xMssExpiresTime']) && ($this->container['xMssExpiresTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'xMssExpiresTime', must be bigger than or equal to 0.";
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
    * Gets roomId
    *  直播间ID。
    *
    * @return string
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string $roomId 直播间ID。
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xAppUserId
    *  第三方用户ID。不允许输入中文。
    *
    * @return string|null
    */
    public function getXAppUserId()
    {
        return $this->container['xAppUserId'];
    }

    /**
    * Sets xAppUserId
    *
    * @param string|null $xAppUserId 第三方用户ID。不允许输入中文。
    *
    * @return $this
    */
    public function setXAppUserId($xAppUserId)
    {
        $this->container['xAppUserId'] = $xAppUserId;
        return $this;
    }

    /**
    * Gets authKey
    *  鉴权Key。通过HmacSHA256生成的鉴权key
    *
    * @return string|null
    */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
    * Sets authKey
    *
    * @param string|null $authKey 鉴权Key。通过HmacSHA256生成的鉴权key
    *
    * @return $this
    */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;
        return $this;
    }

    /**
    * Gets expiresTime
    *  鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    *
    * @return int|null
    */
    public function getExpiresTime()
    {
        return $this->container['expiresTime'];
    }

    /**
    * Sets expiresTime
    *
    * @param int|null $expiresTime 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    *
    * @return $this
    */
    public function setExpiresTime($expiresTime)
    {
        $this->container['expiresTime'] = $expiresTime;
        return $this;
    }

    /**
    * Gets xMssAuthKey
    *  鉴权Key。通过HmacSHA256生成的鉴权key
    *
    * @return string|null
    */
    public function getXMssAuthKey()
    {
        return $this->container['xMssAuthKey'];
    }

    /**
    * Sets xMssAuthKey
    *
    * @param string|null $xMssAuthKey 鉴权Key。通过HmacSHA256生成的鉴权key
    *
    * @return $this
    */
    public function setXMssAuthKey($xMssAuthKey)
    {
        $this->container['xMssAuthKey'] = $xMssAuthKey;
        return $this;
    }

    /**
    * Gets xMssExpiresTime
    *  **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    *
    * @return int|null
    */
    public function getXMssExpiresTime()
    {
        return $this->container['xMssExpiresTime'];
    }

    /**
    * Sets xMssExpiresTime
    *
    * @param int|null $xMssExpiresTime **参数解释**： 鉴权key过期时间。从1970年1月1日（UTC/GMT的午夜）开始所经过的毫秒数。
    *
    * @return $this
    */
    public function setXMssExpiresTime($xMssExpiresTime)
    {
        $this->container['xMssExpiresTime'] = $xMssExpiresTime;
        return $this;
    }

    /**
    * Gets refreshUrl
    *  是否刷新URL
    *
    * @return bool|null
    */
    public function getRefreshUrl()
    {
        return $this->container['refreshUrl'];
    }

    /**
    * Sets refreshUrl
    *
    * @param bool|null $refreshUrl 是否刷新URL
    *
    * @return $this
    */
    public function setRefreshUrl($refreshUrl)
    {
        $this->container['refreshUrl'] = $refreshUrl;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReportLiveEventReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReportLiveEventReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

