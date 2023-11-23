<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * precedence  优先级，数字越大，优先级越高。
    * match  match
    * route  路由规则列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'precedence' => 'int',
            'match' => '\HuaweiCloud\SDK\Cse\V1\Model\CreateMatch',
            'route' => '\HuaweiCloud\SDK\Cse\V1\Model\CreateRoute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * precedence  优先级，数字越大，优先级越高。
    * match  match
    * route  路由规则列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'precedence' => null,
        'match' => null,
        'route' => null
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
    * precedence  优先级，数字越大，优先级越高。
    * match  match
    * route  路由规则列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'precedence' => 'precedence',
            'match' => 'match',
            'route' => 'route'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * precedence  优先级，数字越大，优先级越高。
    * match  match
    * route  路由规则列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'precedence' => 'setPrecedence',
            'match' => 'setMatch',
            'route' => 'setRoute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * precedence  优先级，数字越大，优先级越高。
    * match  match
    * route  路由规则列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'precedence' => 'getPrecedence',
            'match' => 'getMatch',
            'route' => 'getRoute'
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
        $this->container['precedence'] = isset($data['precedence']) ? $data['precedence'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
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
    * Gets precedence
    *  优先级，数字越大，优先级越高。
    *
    * @return int|null
    */
    public function getPrecedence()
    {
        return $this->container['precedence'];
    }

    /**
    * Sets precedence
    *
    * @param int|null $precedence 优先级，数字越大，优先级越高。
    *
    * @return $this
    */
    public function setPrecedence($precedence)
    {
        $this->container['precedence'] = $precedence;
        return $this;
    }

    /**
    * Gets match
    *  match
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\CreateMatch|null
    */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
    * Sets match
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\CreateMatch|null $match match
    *
    * @return $this
    */
    public function setMatch($match)
    {
        $this->container['match'] = $match;
        return $this;
    }

    /**
    * Gets route
    *  路由规则列表。
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\CreateRoute[]|null
    */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
    * Sets route
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\CreateRoute[]|null $route 路由规则列表。
    *
    * @return $this
    */
    public function setRoute($route)
    {
        $this->container['route'] = $route;
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

