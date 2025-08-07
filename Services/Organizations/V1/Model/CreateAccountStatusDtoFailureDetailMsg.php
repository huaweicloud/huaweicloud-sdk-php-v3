<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccountStatusDtoFailureDetailMsg implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccountStatusDto_failure_detail_msg';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorMsg  透传错误码
    * encodedAuthorizationMessage  透传鉴权失败信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorMsg' => 'string',
            'encodedAuthorizationMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorMsg  透传错误码
    * encodedAuthorizationMessage  透传鉴权失败信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorMsg' => null,
        'encodedAuthorizationMessage' => null
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
    * errorMsg  透传错误码
    * encodedAuthorizationMessage  透传鉴权失败信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorMsg' => 'error_msg',
            'encodedAuthorizationMessage' => 'encoded_authorization_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorMsg  透传错误码
    * encodedAuthorizationMessage  透传鉴权失败信息
    *
    * @var string[]
    */
    protected static $setters = [
            'errorMsg' => 'setErrorMsg',
            'encodedAuthorizationMessage' => 'setEncodedAuthorizationMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorMsg  透传错误码
    * encodedAuthorizationMessage  透传鉴权失败信息
    *
    * @var string[]
    */
    protected static $getters = [
            'errorMsg' => 'getErrorMsg',
            'encodedAuthorizationMessage' => 'getEncodedAuthorizationMessage'
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
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['encodedAuthorizationMessage'] = isset($data['encodedAuthorizationMessage']) ? $data['encodedAuthorizationMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 128)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encodedAuthorizationMessage']) && (mb_strlen($this->container['encodedAuthorizationMessage']) > 20000)) {
                $invalidProperties[] = "invalid value for 'encodedAuthorizationMessage', the character length must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['encodedAuthorizationMessage']) && (mb_strlen($this->container['encodedAuthorizationMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'encodedAuthorizationMessage', the character length must be bigger than or equal to 0.";
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
    * Gets errorMsg
    *  透传错误码
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
    * @param string|null $errorMsg 透传错误码
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets encodedAuthorizationMessage
    *  透传鉴权失败信息
    *
    * @return string|null
    */
    public function getEncodedAuthorizationMessage()
    {
        return $this->container['encodedAuthorizationMessage'];
    }

    /**
    * Sets encodedAuthorizationMessage
    *
    * @param string|null $encodedAuthorizationMessage 透传鉴权失败信息
    *
    * @return $this
    */
    public function setEncodedAuthorizationMessage($encodedAuthorizationMessage)
    {
        $this->container['encodedAuthorizationMessage'] = $encodedAuthorizationMessage;
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

