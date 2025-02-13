<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopicAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopicAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessPolicy  topic的访问策略
    * introduction  topic的简介
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessPolicy' => 'string',
            'introduction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessPolicy  topic的访问策略
    * introduction  topic的简介
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessPolicy' => null,
        'introduction' => null
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
    * accessPolicy  topic的访问策略
    * introduction  topic的简介
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessPolicy' => 'access_policy',
            'introduction' => 'introduction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessPolicy  topic的访问策略
    * introduction  topic的简介
    *
    * @var string[]
    */
    protected static $setters = [
            'accessPolicy' => 'setAccessPolicy',
            'introduction' => 'setIntroduction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessPolicy  topic的访问策略
    * introduction  topic的简介
    *
    * @var string[]
    */
    protected static $getters = [
            'accessPolicy' => 'getAccessPolicy',
            'introduction' => 'getIntroduction'
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
        $this->container['accessPolicy'] = isset($data['accessPolicy']) ? $data['accessPolicy'] : null;
        $this->container['introduction'] = isset($data['introduction']) ? $data['introduction'] : null;
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
    * Gets accessPolicy
    *  topic的访问策略
    *
    * @return string|null
    */
    public function getAccessPolicy()
    {
        return $this->container['accessPolicy'];
    }

    /**
    * Sets accessPolicy
    *
    * @param string|null $accessPolicy topic的访问策略
    *
    * @return $this
    */
    public function setAccessPolicy($accessPolicy)
    {
        $this->container['accessPolicy'] = $accessPolicy;
        return $this;
    }

    /**
    * Gets introduction
    *  topic的简介
    *
    * @return string|null
    */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
    * Sets introduction
    *
    * @param string|null $introduction topic的简介
    *
    * @return $this
    */
    public function setIntroduction($introduction)
    {
        $this->container['introduction'] = $introduction;
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

