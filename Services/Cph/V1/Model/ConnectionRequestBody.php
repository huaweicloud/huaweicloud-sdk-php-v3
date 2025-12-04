<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phoneIds  phone_id数组，单次请求最大限制10
    * clientType  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phoneIds' => 'string[]',
            'clientType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phoneIds  phone_id数组，单次请求最大限制10
    * clientType  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phoneIds' => null,
        'clientType' => null
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
    * phoneIds  phone_id数组，单次请求最大限制10
    * clientType  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phoneIds' => 'phone_ids',
            'clientType' => 'client_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phoneIds  phone_id数组，单次请求最大限制10
    * clientType  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @var string[]
    */
    protected static $setters = [
            'phoneIds' => 'setPhoneIds',
            'clientType' => 'setClientType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phoneIds  phone_id数组，单次请求最大限制10
    * clientType  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @var string[]
    */
    protected static $getters = [
            'phoneIds' => 'getPhoneIds',
            'clientType' => 'getClientType'
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
    const CLIENT_TYPE_ANDROID = 'ANDROID';
    const CLIENT_TYPE_WINDOWS = 'WINDOWS';
    const CLIENT_TYPE_H5_MOBILE = 'H5_MOBILE';
    const CLIENT_TYPE_H5_PC = 'H5_PC';
    const CLIENT_TYPE_IOS = 'IOS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClientTypeAllowableValues()
    {
        return [
            self::CLIENT_TYPE_ANDROID,
            self::CLIENT_TYPE_WINDOWS,
            self::CLIENT_TYPE_H5_MOBILE,
            self::CLIENT_TYPE_H5_PC,
            self::CLIENT_TYPE_IOS,
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
        $this->container['phoneIds'] = isset($data['phoneIds']) ? $data['phoneIds'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phoneIds'] === null) {
            $invalidProperties[] = "'phoneIds' can't be null";
        }
        if ($this->container['clientType'] === null) {
            $invalidProperties[] = "'clientType' can't be null";
        }
            $allowedValues = $this->getClientTypeAllowableValues();
                if (!is_null($this->container['clientType']) && !in_array($this->container['clientType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clientType', must be one of '%s'",
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
    * Gets phoneIds
    *  phone_id数组，单次请求最大限制10
    *
    * @return string[]
    */
    public function getPhoneIds()
    {
        return $this->container['phoneIds'];
    }

    /**
    * Sets phoneIds
    *
    * @param string[] $phoneIds phone_id数组，单次请求最大限制10
    *
    * @return $this
    */
    public function setPhoneIds($phoneIds)
    {
        $this->container['phoneIds'] = $phoneIds;
        return $this;
    }

    /**
    * Gets clientType
    *  申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @return string
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param string $clientType 申请接入的客户端类型 - ANDROID: 安卓平台SDK - WINDOWS: Windows平台SDK - H5_MOBILE: H5移动端SDK - H5_PC: H5 PC端SDK - IOS: iOS平台SDK
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
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

