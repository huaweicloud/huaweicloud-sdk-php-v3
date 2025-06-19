<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServiceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServiceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  接口调用成功返回的服务名
    * serviceId  接口调用成功返回的服务id
    * errorCode  接口调用成功不返回，调用失败错误码
    * errorMsg  接口调用成功不返回，调用失败错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'serviceId' => 'int',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  接口调用成功返回的服务名
    * serviceId  接口调用成功返回的服务id
    * errorCode  接口调用成功不返回，调用失败错误码
    * errorMsg  接口调用成功不返回，调用失败错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'serviceId' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * serviceName  接口调用成功返回的服务名
    * serviceId  接口调用成功返回的服务id
    * errorCode  接口调用成功不返回，调用失败错误码
    * errorMsg  接口调用成功不返回，调用失败错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'serviceId' => 'service_id',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  接口调用成功返回的服务名
    * serviceId  接口调用成功返回的服务id
    * errorCode  接口调用成功不返回，调用失败错误码
    * errorMsg  接口调用成功不返回，调用失败错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'serviceId' => 'setServiceId',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  接口调用成功返回的服务名
    * serviceId  接口调用成功返回的服务id
    * errorCode  接口调用成功不返回，调用失败错误码
    * errorMsg  接口调用成功不返回，调用失败错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'serviceId' => 'getServiceId',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets serviceName
    *  接口调用成功返回的服务名
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 接口调用成功返回的服务名
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serviceId
    *  接口调用成功返回的服务id
    *
    * @return int|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param int|null $serviceId 接口调用成功返回的服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets errorCode
    *  接口调用成功不返回，调用失败错误码
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
    * @param string|null $errorCode 接口调用成功不返回，调用失败错误码
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
    *  接口调用成功不返回，调用失败错误信息
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
    * @param string|null $errorMsg 接口调用成功不返回，调用失败错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

