<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThrottleBindingBatchFailure implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThrottleBindingBatchFailure';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bindId  解除绑定失败的API和流控策略绑定关系ID
    * errorCode  解除绑定失败的错误码
    * errorMsg  解除绑定失败的错误信息
    * apiId  解除绑定失败的API的ID
    * apiName  解除绑定失败的API的名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bindId' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'apiId' => 'string',
            'apiName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bindId  解除绑定失败的API和流控策略绑定关系ID
    * errorCode  解除绑定失败的错误码
    * errorMsg  解除绑定失败的错误信息
    * apiId  解除绑定失败的API的ID
    * apiName  解除绑定失败的API的名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bindId' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'apiId' => null,
        'apiName' => null
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
    * bindId  解除绑定失败的API和流控策略绑定关系ID
    * errorCode  解除绑定失败的错误码
    * errorMsg  解除绑定失败的错误信息
    * apiId  解除绑定失败的API的ID
    * apiName  解除绑定失败的API的名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bindId' => 'bind_id',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'apiId' => 'api_id',
            'apiName' => 'api_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bindId  解除绑定失败的API和流控策略绑定关系ID
    * errorCode  解除绑定失败的错误码
    * errorMsg  解除绑定失败的错误信息
    * apiId  解除绑定失败的API的ID
    * apiName  解除绑定失败的API的名称
    *
    * @var string[]
    */
    protected static $setters = [
            'bindId' => 'setBindId',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bindId  解除绑定失败的API和流控策略绑定关系ID
    * errorCode  解除绑定失败的错误码
    * errorMsg  解除绑定失败的错误信息
    * apiId  解除绑定失败的API的ID
    * apiName  解除绑定失败的API的名称
    *
    * @var string[]
    */
    protected static $getters = [
            'bindId' => 'getBindId',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName'
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
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
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
    * Gets bindId
    *  解除绑定失败的API和流控策略绑定关系ID
    *
    * @return string|null
    */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
    * Sets bindId
    *
    * @param string|null $bindId 解除绑定失败的API和流控策略绑定关系ID
    *
    * @return $this
    */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;
        return $this;
    }

    /**
    * Gets errorCode
    *  解除绑定失败的错误码
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
    * @param string|null $errorCode 解除绑定失败的错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  解除绑定失败的错误信息
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
    * @param string|null $errorMsg 解除绑定失败的错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets apiId
    *  解除绑定失败的API的ID
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId 解除绑定失败的API的ID
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  解除绑定失败的API的名称
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
    * @param string|null $apiName 解除绑定失败的API的名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
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

