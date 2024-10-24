<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountTenantResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountTenantResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * business  业务类型。
    * resourceExpireStartTime  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resourceExpireEndTime  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'business' => 'string',
            'resourceExpireStartTime' => 'string',
            'resourceExpireEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * business  业务类型。
    * resourceExpireStartTime  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resourceExpireEndTime  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'business' => null,
        'resourceExpireStartTime' => null,
        'resourceExpireEndTime' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * business  业务类型。
    * resourceExpireStartTime  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resourceExpireEndTime  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'business' => 'business',
            'resourceExpireStartTime' => 'resource_expire_start_time',
            'resourceExpireEndTime' => 'resource_expire_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * business  业务类型。
    * resourceExpireStartTime  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resourceExpireEndTime  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'business' => 'setBusiness',
            'resourceExpireStartTime' => 'setResourceExpireStartTime',
            'resourceExpireEndTime' => 'setResourceExpireEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * business  业务类型。
    * resourceExpireStartTime  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * resourceExpireEndTime  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'business' => 'getBusiness',
            'resourceExpireStartTime' => 'getResourceExpireStartTime',
            'resourceExpireEndTime' => 'getResourceExpireEndTime'
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['resourceExpireStartTime'] = isset($data['resourceExpireStartTime']) ? $data['resourceExpireStartTime'] : null;
        $this->container['resourceExpireEndTime'] = isset($data['resourceExpireEndTime']) ? $data['resourceExpireEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['business']) && (mb_strlen($this->container['business']) > 128)) {
                $invalidProperties[] = "invalid value for 'business', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['business']) && (mb_strlen($this->container['business']) < 1)) {
                $invalidProperties[] = "invalid value for 'business', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceExpireStartTime']) && (mb_strlen($this->container['resourceExpireStartTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'resourceExpireStartTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['resourceExpireStartTime']) && (mb_strlen($this->container['resourceExpireStartTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceExpireStartTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceExpireEndTime']) && (mb_strlen($this->container['resourceExpireEndTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'resourceExpireEndTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['resourceExpireEndTime']) && (mb_strlen($this->container['resourceExpireEndTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceExpireEndTime', the character length must be bigger than or equal to 0.";
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
    * Gets business
    *  业务类型。
    *
    * @return string|null
    */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
    * Sets business
    *
    * @param string|null $business 业务类型。
    *
    * @return $this
    */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;
        return $this;
    }

    /**
    * Gets resourceExpireStartTime
    *  资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return string|null
    */
    public function getResourceExpireStartTime()
    {
        return $this->container['resourceExpireStartTime'];
    }

    /**
    * Sets resourceExpireStartTime
    *
    * @param string|null $resourceExpireStartTime 资源过期时间段 开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return $this
    */
    public function setResourceExpireStartTime($resourceExpireStartTime)
    {
        $this->container['resourceExpireStartTime'] = $resourceExpireStartTime;
        return $this;
    }

    /**
    * Gets resourceExpireEndTime
    *  资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return string|null
    */
    public function getResourceExpireEndTime()
    {
        return $this->container['resourceExpireEndTime'];
    }

    /**
    * Sets resourceExpireEndTime
    *
    * @param string|null $resourceExpireEndTime 资源过期时间段 结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return $this
    */
    public function setResourceExpireEndTime($resourceExpireEndTime)
    {
        $this->container['resourceExpireEndTime'] = $resourceExpireEndTime;
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

