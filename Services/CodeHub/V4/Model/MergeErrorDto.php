<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeErrorDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeErrorDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mergeUserName  合并人名字
    * mergeStartTime  合入时间
    * errorTitle  错误标题
    * httpCodeStatus  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mergeUserName' => 'string',
            'mergeStartTime' => 'string',
            'errorTitle' => 'string',
            'httpCodeStatus' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mergeUserName  合并人名字
    * mergeStartTime  合入时间
    * errorTitle  错误标题
    * httpCodeStatus  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mergeUserName' => null,
        'mergeStartTime' => null,
        'errorTitle' => null,
        'httpCodeStatus' => null,
        'errorCode' => null,
        'errorMessage' => null
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
    * mergeUserName  合并人名字
    * mergeStartTime  合入时间
    * errorTitle  错误标题
    * httpCodeStatus  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mergeUserName' => 'merge_user_name',
            'mergeStartTime' => 'merge_start_time',
            'errorTitle' => 'error_title',
            'httpCodeStatus' => 'http_code_status',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mergeUserName  合并人名字
    * mergeStartTime  合入时间
    * errorTitle  错误标题
    * httpCodeStatus  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'mergeUserName' => 'setMergeUserName',
            'mergeStartTime' => 'setMergeStartTime',
            'errorTitle' => 'setErrorTitle',
            'httpCodeStatus' => 'setHttpCodeStatus',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mergeUserName  合并人名字
    * mergeStartTime  合入时间
    * errorTitle  错误标题
    * httpCodeStatus  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'mergeUserName' => 'getMergeUserName',
            'mergeStartTime' => 'getMergeStartTime',
            'errorTitle' => 'getErrorTitle',
            'httpCodeStatus' => 'getHttpCodeStatus',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['mergeUserName'] = isset($data['mergeUserName']) ? $data['mergeUserName'] : null;
        $this->container['mergeStartTime'] = isset($data['mergeStartTime']) ? $data['mergeStartTime'] : null;
        $this->container['errorTitle'] = isset($data['errorTitle']) ? $data['errorTitle'] : null;
        $this->container['httpCodeStatus'] = isset($data['httpCodeStatus']) ? $data['httpCodeStatus'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets mergeUserName
    *  合并人名字
    *
    * @return string|null
    */
    public function getMergeUserName()
    {
        return $this->container['mergeUserName'];
    }

    /**
    * Sets mergeUserName
    *
    * @param string|null $mergeUserName 合并人名字
    *
    * @return $this
    */
    public function setMergeUserName($mergeUserName)
    {
        $this->container['mergeUserName'] = $mergeUserName;
        return $this;
    }

    /**
    * Gets mergeStartTime
    *  合入时间
    *
    * @return string|null
    */
    public function getMergeStartTime()
    {
        return $this->container['mergeStartTime'];
    }

    /**
    * Sets mergeStartTime
    *
    * @param string|null $mergeStartTime 合入时间
    *
    * @return $this
    */
    public function setMergeStartTime($mergeStartTime)
    {
        $this->container['mergeStartTime'] = $mergeStartTime;
        return $this;
    }

    /**
    * Gets errorTitle
    *  错误标题
    *
    * @return string|null
    */
    public function getErrorTitle()
    {
        return $this->container['errorTitle'];
    }

    /**
    * Sets errorTitle
    *
    * @param string|null $errorTitle 错误标题
    *
    * @return $this
    */
    public function setErrorTitle($errorTitle)
    {
        $this->container['errorTitle'] = $errorTitle;
        return $this;
    }

    /**
    * Gets httpCodeStatus
    *  状态码
    *
    * @return string|null
    */
    public function getHttpCodeStatus()
    {
        return $this->container['httpCodeStatus'];
    }

    /**
    * Sets httpCodeStatus
    *
    * @param string|null $httpCodeStatus 状态码
    *
    * @return $this
    */
    public function setHttpCodeStatus($httpCodeStatus)
    {
        $this->container['httpCodeStatus'] = $httpCodeStatus;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
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
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

