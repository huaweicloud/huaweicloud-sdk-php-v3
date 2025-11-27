<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConstraintSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConstraintSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enforcementAction  策略执行行为，当前支持warn和deny
    * match  match
    * parameters  可变参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enforcementAction' => 'string',
            'match' => '\HuaweiCloud\SDK\Ucs\V1\Model\Match',
            'parameters' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enforcementAction  策略执行行为，当前支持warn和deny
    * match  match
    * parameters  可变参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enforcementAction' => null,
        'match' => null,
        'parameters' => null
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
    * enforcementAction  策略执行行为，当前支持warn和deny
    * match  match
    * parameters  可变参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enforcementAction' => 'enforcementAction',
            'match' => 'match',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enforcementAction  策略执行行为，当前支持warn和deny
    * match  match
    * parameters  可变参数
    *
    * @var string[]
    */
    protected static $setters = [
            'enforcementAction' => 'setEnforcementAction',
            'match' => 'setMatch',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enforcementAction  策略执行行为，当前支持warn和deny
    * match  match
    * parameters  可变参数
    *
    * @var string[]
    */
    protected static $getters = [
            'enforcementAction' => 'getEnforcementAction',
            'match' => 'getMatch',
            'parameters' => 'getParameters'
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
        $this->container['enforcementAction'] = isset($data['enforcementAction']) ? $data['enforcementAction'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
    * Gets enforcementAction
    *  策略执行行为，当前支持warn和deny
    *
    * @return string|null
    */
    public function getEnforcementAction()
    {
        return $this->container['enforcementAction'];
    }

    /**
    * Sets enforcementAction
    *
    * @param string|null $enforcementAction 策略执行行为，当前支持warn和deny
    *
    * @return $this
    */
    public function setEnforcementAction($enforcementAction)
    {
        $this->container['enforcementAction'] = $enforcementAction;
        return $this;
    }

    /**
    * Gets match
    *  match
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Match|null
    */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
    * Sets match
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Match|null $match match
    *
    * @return $this
    */
    public function setMatch($match)
    {
        $this->container['match'] = $match;
        return $this;
    }

    /**
    * Gets parameters
    *  可变参数
    *
    * @return object|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param object|null $parameters 可变参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

