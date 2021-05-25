<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindMfaDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindMfaDevice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  待绑定MFA设备的IAM用户ID。
    * serialNumber  MFA设备序列号。
    * authenticationCodeFirst  第一组验证码。
    * authenticationCodeSecond  第二组验证码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'serialNumber' => 'string',
            'authenticationCodeFirst' => 'string',
            'authenticationCodeSecond' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  待绑定MFA设备的IAM用户ID。
    * serialNumber  MFA设备序列号。
    * authenticationCodeFirst  第一组验证码。
    * authenticationCodeSecond  第二组验证码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'serialNumber' => null,
        'authenticationCodeFirst' => null,
        'authenticationCodeSecond' => null
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
    * userId  待绑定MFA设备的IAM用户ID。
    * serialNumber  MFA设备序列号。
    * authenticationCodeFirst  第一组验证码。
    * authenticationCodeSecond  第二组验证码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'serialNumber' => 'serial_number',
            'authenticationCodeFirst' => 'authentication_code_first',
            'authenticationCodeSecond' => 'authentication_code_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  待绑定MFA设备的IAM用户ID。
    * serialNumber  MFA设备序列号。
    * authenticationCodeFirst  第一组验证码。
    * authenticationCodeSecond  第二组验证码。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'serialNumber' => 'setSerialNumber',
            'authenticationCodeFirst' => 'setAuthenticationCodeFirst',
            'authenticationCodeSecond' => 'setAuthenticationCodeSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  待绑定MFA设备的IAM用户ID。
    * serialNumber  MFA设备序列号。
    * authenticationCodeFirst  第一组验证码。
    * authenticationCodeSecond  第二组验证码。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'serialNumber' => 'getSerialNumber',
            'authenticationCodeFirst' => 'getAuthenticationCodeFirst',
            'authenticationCodeSecond' => 'getAuthenticationCodeSecond'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['authenticationCodeFirst'] = isset($data['authenticationCodeFirst']) ? $data['authenticationCodeFirst'] : null;
        $this->container['authenticationCodeSecond'] = isset($data['authenticationCodeSecond']) ? $data['authenticationCodeSecond'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['serialNumber'] === null) {
            $invalidProperties[] = "'serialNumber' can't be null";
        }
        if ($this->container['authenticationCodeFirst'] === null) {
            $invalidProperties[] = "'authenticationCodeFirst' can't be null";
        }
        if ($this->container['authenticationCodeSecond'] === null) {
            $invalidProperties[] = "'authenticationCodeSecond' can't be null";
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
    * Gets userId
    *  待绑定MFA设备的IAM用户ID。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 待绑定MFA设备的IAM用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets serialNumber
    *  MFA设备序列号。
    *
    * @return string
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string $serialNumber MFA设备序列号。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets authenticationCodeFirst
    *  第一组验证码。
    *
    * @return string
    */
    public function getAuthenticationCodeFirst()
    {
        return $this->container['authenticationCodeFirst'];
    }

    /**
    * Sets authenticationCodeFirst
    *
    * @param string $authenticationCodeFirst 第一组验证码。
    *
    * @return $this
    */
    public function setAuthenticationCodeFirst($authenticationCodeFirst)
    {
        $this->container['authenticationCodeFirst'] = $authenticationCodeFirst;
        return $this;
    }

    /**
    * Gets authenticationCodeSecond
    *  第二组验证码。
    *
    * @return string
    */
    public function getAuthenticationCodeSecond()
    {
        return $this->container['authenticationCodeSecond'];
    }

    /**
    * Sets authenticationCodeSecond
    *
    * @param string $authenticationCodeSecond 第二组验证码。
    *
    * @return $this
    */
    public function setAuthenticationCodeSecond($authenticationCodeSecond)
    {
        $this->container['authenticationCodeSecond'] = $authenticationCodeSecond;
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

