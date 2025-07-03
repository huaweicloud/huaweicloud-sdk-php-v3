<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyStatement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * effect  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    * action  obs访问权限
    * resource  obs对象
    * condition  statement生效的条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'effect' => 'string',
            'action' => 'string[]',
            'resource' => 'string[]',
            'condition' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * effect  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    * action  obs访问权限
    * resource  obs对象
    * condition  statement生效的条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'effect' => null,
        'action' => null,
        'resource' => null,
        'condition' => null
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
    * effect  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    * action  obs访问权限
    * resource  obs对象
    * condition  statement生效的条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'effect' => 'Effect',
            'action' => 'Action',
            'resource' => 'Resource',
            'condition' => 'Condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * effect  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    * action  obs访问权限
    * resource  obs对象
    * condition  statement生效的条件
    *
    * @var string[]
    */
    protected static $setters = [
            'effect' => 'setEffect',
            'action' => 'setAction',
            'resource' => 'setResource',
            'condition' => 'setCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * effect  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    * action  obs访问权限
    * resource  obs对象
    * condition  statement生效的条件
    *
    * @var string[]
    */
    protected static $getters = [
            'effect' => 'getEffect',
            'action' => 'getAction',
            'resource' => 'getResource',
            'condition' => 'getCondition'
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
    const EFFECT_ALLOW = 'Allow';
    const EFFECT_DENY = 'Deny';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectAllowableValues()
    {
        return [
            self::EFFECT_ALLOW,
            self::EFFECT_DENY,
        ];
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
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
        }
            $allowedValues = $this->getEffectAllowableValues();
                if (!is_null($this->container['effect']) && !in_array($this->container['effect'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effect', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
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
    * Gets effect
    *  - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    *
    * @return string
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string $effect - Allow，允许控制访问权限 - Deny，拒绝控制访问权限
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets action
    *  obs访问权限
    *
    * @return string[]
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string[] $action obs访问权限
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets resource
    *  obs对象
    *
    * @return string[]
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string[] $resource obs对象
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets condition
    *  statement生效的条件
    *
    * @return object|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param object|null $condition statement生效的条件
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
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

