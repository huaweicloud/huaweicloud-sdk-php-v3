<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResizeOrderRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResizeOrderRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoOpenSecurityGroupRule  自动开启安全组规则
    * executeImmediately  启动迅速
    * newCapacity  新的容量，单位是GB
    * password  密码
    * specCode  区域代码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoOpenSecurityGroupRule' => 'bool',
            'executeImmediately' => 'bool',
            'newCapacity' => 'float',
            'password' => 'string',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoOpenSecurityGroupRule  自动开启安全组规则
    * executeImmediately  启动迅速
    * newCapacity  新的容量，单位是GB
    * password  密码
    * specCode  区域代码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoOpenSecurityGroupRule' => null,
        'executeImmediately' => null,
        'newCapacity' => 'float',
        'password' => null,
        'specCode' => null
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
    * autoOpenSecurityGroupRule  自动开启安全组规则
    * executeImmediately  启动迅速
    * newCapacity  新的容量，单位是GB
    * password  密码
    * specCode  区域代码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoOpenSecurityGroupRule' => 'auto_open_security_group_rule',
            'executeImmediately' => 'execute_immediately',
            'newCapacity' => 'new_capacity',
            'password' => 'password',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoOpenSecurityGroupRule  自动开启安全组规则
    * executeImmediately  启动迅速
    * newCapacity  新的容量，单位是GB
    * password  密码
    * specCode  区域代码
    *
    * @var string[]
    */
    protected static $setters = [
            'autoOpenSecurityGroupRule' => 'setAutoOpenSecurityGroupRule',
            'executeImmediately' => 'setExecuteImmediately',
            'newCapacity' => 'setNewCapacity',
            'password' => 'setPassword',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoOpenSecurityGroupRule  自动开启安全组规则
    * executeImmediately  启动迅速
    * newCapacity  新的容量，单位是GB
    * password  密码
    * specCode  区域代码
    *
    * @var string[]
    */
    protected static $getters = [
            'autoOpenSecurityGroupRule' => 'getAutoOpenSecurityGroupRule',
            'executeImmediately' => 'getExecuteImmediately',
            'newCapacity' => 'getNewCapacity',
            'password' => 'getPassword',
            'specCode' => 'getSpecCode'
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
        $this->container['autoOpenSecurityGroupRule'] = isset($data['autoOpenSecurityGroupRule']) ? $data['autoOpenSecurityGroupRule'] : null;
        $this->container['executeImmediately'] = isset($data['executeImmediately']) ? $data['executeImmediately'] : null;
        $this->container['newCapacity'] = isset($data['newCapacity']) ? $data['newCapacity'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
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
    * Gets autoOpenSecurityGroupRule
    *  自动开启安全组规则
    *
    * @return bool|null
    */
    public function getAutoOpenSecurityGroupRule()
    {
        return $this->container['autoOpenSecurityGroupRule'];
    }

    /**
    * Sets autoOpenSecurityGroupRule
    *
    * @param bool|null $autoOpenSecurityGroupRule 自动开启安全组规则
    *
    * @return $this
    */
    public function setAutoOpenSecurityGroupRule($autoOpenSecurityGroupRule)
    {
        $this->container['autoOpenSecurityGroupRule'] = $autoOpenSecurityGroupRule;
        return $this;
    }

    /**
    * Gets executeImmediately
    *  启动迅速
    *
    * @return bool|null
    */
    public function getExecuteImmediately()
    {
        return $this->container['executeImmediately'];
    }

    /**
    * Sets executeImmediately
    *
    * @param bool|null $executeImmediately 启动迅速
    *
    * @return $this
    */
    public function setExecuteImmediately($executeImmediately)
    {
        $this->container['executeImmediately'] = $executeImmediately;
        return $this;
    }

    /**
    * Gets newCapacity
    *  新的容量，单位是GB
    *
    * @return float|null
    */
    public function getNewCapacity()
    {
        return $this->container['newCapacity'];
    }

    /**
    * Sets newCapacity
    *
    * @param float|null $newCapacity 新的容量，单位是GB
    *
    * @return $this
    */
    public function setNewCapacity($newCapacity)
    {
        $this->container['newCapacity'] = $newCapacity;
        return $this;
    }

    /**
    * Gets password
    *  密码
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets specCode
    *  区域代码
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 区域代码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

