<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * properties  额外添加的属性映射配置
    * subject  subject
    * relayState  中继状态
    * ttl  会话过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'properties' => 'map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto]',
            'subject' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto',
            'relayState' => 'string',
            'ttl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * properties  额外添加的属性映射配置
    * subject  subject
    * relayState  中继状态
    * ttl  会话过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'properties' => null,
        'subject' => null,
        'relayState' => null,
        'ttl' => null
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
    * properties  额外添加的属性映射配置
    * subject  subject
    * relayState  中继状态
    * ttl  会话过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'properties' => 'properties',
            'subject' => 'subject',
            'relayState' => 'relay_state',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * properties  额外添加的属性映射配置
    * subject  subject
    * relayState  中继状态
    * ttl  会话过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'properties' => 'setProperties',
            'subject' => 'setSubject',
            'relayState' => 'setRelayState',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * properties  额外添加的属性映射配置
    * subject  subject
    * relayState  中继状态
    * ttl  会话过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'properties' => 'getProperties',
            'subject' => 'getSubject',
            'relayState' => 'getRelayState',
            'ttl' => 'getTtl'
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
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['relayState'] = isset($data['relayState']) ? $data['relayState'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['relayState']) && (mb_strlen($this->container['relayState']) > 320)) {
                $invalidProperties[] = "invalid value for 'relayState', the character length must be smaller than or equal to 320.";
            }
            if (!is_null($this->container['relayState']) && (mb_strlen($this->container['relayState']) < 1)) {
                $invalidProperties[] = "invalid value for 'relayState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relayState']) && !preg_match("/[a-zA-Z0-9&$@#\\\\\/%?=~\\-_'\"|!:,.;*+\\[\\]\\ \\(\\)\\{\\}]+/", $this->container['relayState'])) {
                $invalidProperties[] = "invalid value for 'relayState', must be conform to the pattern /[a-zA-Z0-9&$@#\\\\\/%?=~\\-_'\"|!:,.;*+\\[\\]\\ \\(\\)\\{\\}]+/.";
            }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
            if (!preg_match("/^PT(1|2|4|8|12)H$/", $this->container['ttl'])) {
                $invalidProperties[] = "invalid value for 'ttl', must be conform to the pattern /^PT(1|2|4|8|12)H$/.";
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
    * Gets properties
    *  额外添加的属性映射配置
    *
    * @return map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto]|null $properties 额外添加的属性映射配置
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets subject
    *  subject
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSourceDetailsDto|null $subject subject
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets relayState
    *  中继状态
    *
    * @return string|null
    */
    public function getRelayState()
    {
        return $this->container['relayState'];
    }

    /**
    * Sets relayState
    *
    * @param string|null $relayState 中继状态
    *
    * @return $this
    */
    public function setRelayState($relayState)
    {
        $this->container['relayState'] = $relayState;
        return $this;
    }

    /**
    * Gets ttl
    *  会话过期时间
    *
    * @return string
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param string $ttl 会话过期时间
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

