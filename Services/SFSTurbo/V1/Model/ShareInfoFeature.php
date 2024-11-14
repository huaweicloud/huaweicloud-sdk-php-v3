<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareInfoFeature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareInfoFeature';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSupport  文件系统是否支持该特性
    * message  文件系统是否支持该特性的详细信息
    * msgCode  文件系统是否支持该特性的详细信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSupport' => 'bool',
            'message' => 'string',
            'msgCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSupport  文件系统是否支持该特性
    * message  文件系统是否支持该特性的详细信息
    * msgCode  文件系统是否支持该特性的详细信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSupport' => null,
        'message' => null,
        'msgCode' => null
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
    * isSupport  文件系统是否支持该特性
    * message  文件系统是否支持该特性的详细信息
    * msgCode  文件系统是否支持该特性的详细信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSupport' => 'is_support',
            'message' => 'message',
            'msgCode' => 'msg_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSupport  文件系统是否支持该特性
    * message  文件系统是否支持该特性的详细信息
    * msgCode  文件系统是否支持该特性的详细信息
    *
    * @var string[]
    */
    protected static $setters = [
            'isSupport' => 'setIsSupport',
            'message' => 'setMessage',
            'msgCode' => 'setMsgCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSupport  文件系统是否支持该特性
    * message  文件系统是否支持该特性的详细信息
    * msgCode  文件系统是否支持该特性的详细信息
    *
    * @var string[]
    */
    protected static $getters = [
            'isSupport' => 'getIsSupport',
            'message' => 'getMessage',
            'msgCode' => 'getMsgCode'
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
        $this->container['isSupport'] = isset($data['isSupport']) ? $data['isSupport'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['msgCode'] = isset($data['msgCode']) ? $data['msgCode'] : null;
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
    * Gets isSupport
    *  文件系统是否支持该特性
    *
    * @return bool|null
    */
    public function getIsSupport()
    {
        return $this->container['isSupport'];
    }

    /**
    * Sets isSupport
    *
    * @param bool|null $isSupport 文件系统是否支持该特性
    *
    * @return $this
    */
    public function setIsSupport($isSupport)
    {
        $this->container['isSupport'] = $isSupport;
        return $this;
    }

    /**
    * Gets message
    *  文件系统是否支持该特性的详细信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 文件系统是否支持该特性的详细信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets msgCode
    *  文件系统是否支持该特性的详细信息
    *
    * @return string|null
    */
    public function getMsgCode()
    {
        return $this->container['msgCode'];
    }

    /**
    * Sets msgCode
    *
    * @param string|null $msgCode 文件系统是否支持该特性的详细信息
    *
    * @return $this
    */
    public function setMsgCode($msgCode)
    {
        $this->container['msgCode'] = $msgCode;
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

