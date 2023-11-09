<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    * errorMsg  授权失败错误信息
    * errorCode  授权失败错误码
    * apiName  授权失败的API名称
    * appName  授权失败的APP名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'errorMsg' => 'string',
            'errorCode' => 'string',
            'apiName' => 'string',
            'appName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    * errorMsg  授权失败错误信息
    * errorCode  授权失败错误码
    * apiName  授权失败的API名称
    * appName  授权失败的APP名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'errorMsg' => null,
        'errorCode' => null,
        'apiName' => null,
        'appName' => null
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
    * status  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    * errorMsg  授权失败错误信息
    * errorCode  授权失败错误码
    * apiName  授权失败的API名称
    * appName  授权失败的APP名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code',
            'apiName' => 'api_name',
            'appName' => 'app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    * errorMsg  授权失败错误信息
    * errorCode  授权失败错误码
    * apiName  授权失败的API名称
    * appName  授权失败的APP名称
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode',
            'apiName' => 'setApiName',
            'appName' => 'setAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    * errorMsg  授权失败错误信息
    * errorCode  授权失败错误码
    * apiName  授权失败的API名称
    * appName  授权失败的APP名称
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode',
            'apiName' => 'getApiName',
            'appName' => 'getAppName'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_SKIPPED = 'SKIPPED';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_SKIPPED,
            self::STATUS_FAILED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets status
    *  授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 授权结果 - SUCCESS：授权成功 - SKIPPED：跳过 - FAILED：授权失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorMsg
    *  授权失败错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 授权失败错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  授权失败错误码
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
    * @param string|null $errorCode 授权失败错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets apiName
    *  授权失败的API名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName 授权失败的API名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets appName
    *  授权失败的APP名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 授权失败的APP名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
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

