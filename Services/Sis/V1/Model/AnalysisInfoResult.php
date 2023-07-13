<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnalysisInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnalysisInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * role  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    * emotion  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    * speed  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'role' => 'string',
            'emotion' => 'string',
            'speed' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * role  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    * emotion  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    * speed  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'role' => null,
        'emotion' => null,
        'speed' => 'float'
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
    * role  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    * emotion  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    * speed  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'role' => 'role',
            'emotion' => 'emotion',
            'speed' => 'speed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * role  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    * emotion  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    * speed  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'role' => 'setRole',
            'emotion' => 'setEmotion',
            'speed' => 'setSpeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * role  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    * emotion  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    * speed  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'role' => 'getRole',
            'emotion' => 'getEmotion',
            'speed' => 'getSpeed'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
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
    * Gets role
    *  角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色类型, 目前仅支持 AGENT(座席), USER(用户)。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets emotion
    *  情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    *
    * @return string|null
    */
    public function getEmotion()
    {
        return $this->container['emotion'];
    }

    /**
    * Sets emotion
    *
    * @param string|null $emotion 情绪类型，目前支持NORMAL(正常)，ANGRY(愤怒)，UNKNOWN(未知)。 在识别配置中emotion为true时存在。
    *
    * @return $this
    */
    public function setEmotion($emotion)
    {
        $this->container['emotion'] = $emotion;
        return $this;
    }

    /**
    * Gets speed
    *  语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @return float|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param float|null $speed 语速信息，单位是\"每秒字数\"。 在识别配置中speed为true时存在。
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
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

