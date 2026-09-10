<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizeScheduledEventRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizeScheduledEventRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizationType  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    * notBefore  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizationType' => 'string',
            'notBefore' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizationType  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    * notBefore  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizationType' => null,
        'notBefore' => null
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
    * authorizationType  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    * notBefore  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizationType' => 'authorization_type',
            'notBefore' => 'not_before'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizationType  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    * notBefore  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizationType' => 'setAuthorizationType',
            'notBefore' => 'setNotBefore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizationType  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    * notBefore  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizationType' => 'getAuthorizationType',
            'notBefore' => 'getNotBefore'
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
        $this->container['authorizationType'] = isset($data['authorizationType']) ? $data['authorizationType'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authorizationType'] === null) {
            $invalidProperties[] = "'authorizationType' can't be null";
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
    * Gets authorizationType
    *  授权类型。取值范围： maintenance：维护、 redeploy：重部署
    *
    * @return string
    */
    public function getAuthorizationType()
    {
        return $this->container['authorizationType'];
    }

    /**
    * Sets authorizationType
    *
    * @param string $authorizationType 授权类型。取值范围： maintenance：维护、 redeploy：重部署
    *
    * @return $this
    */
    public function setAuthorizationType($authorizationType)
    {
        $this->container['authorizationType'] = $authorizationType;
        return $this;
    }

    /**
    * Gets notBefore
    *  计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @return string|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string|null $notBefore 计划执行开始时间。仅maintenance类型的事件支持，预约的时间需要比当前时间多5分钟以上，传空字符串表示立即执行。
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
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

