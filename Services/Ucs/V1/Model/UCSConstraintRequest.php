<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSConstraintRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSConstraintRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * constraintTemplateId  策略模板的ID
    * enforcementAction  策略执行方式，当前支持warn和deny
    * namespaces  生效的命名空间
    * parameters  策略实例的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'constraintTemplateId' => 'string',
            'enforcementAction' => 'string',
            'namespaces' => 'string[]',
            'parameters' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * constraintTemplateId  策略模板的ID
    * enforcementAction  策略执行方式，当前支持warn和deny
    * namespaces  生效的命名空间
    * parameters  策略实例的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'constraintTemplateId' => null,
        'enforcementAction' => null,
        'namespaces' => null,
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
    * constraintTemplateId  策略模板的ID
    * enforcementAction  策略执行方式，当前支持warn和deny
    * namespaces  生效的命名空间
    * parameters  策略实例的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'constraintTemplateId' => 'constraintTemplateID',
            'enforcementAction' => 'enforcementAction',
            'namespaces' => 'namespaces',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * constraintTemplateId  策略模板的ID
    * enforcementAction  策略执行方式，当前支持warn和deny
    * namespaces  生效的命名空间
    * parameters  策略实例的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'constraintTemplateId' => 'setConstraintTemplateId',
            'enforcementAction' => 'setEnforcementAction',
            'namespaces' => 'setNamespaces',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * constraintTemplateId  策略模板的ID
    * enforcementAction  策略执行方式，当前支持warn和deny
    * namespaces  生效的命名空间
    * parameters  策略实例的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'constraintTemplateId' => 'getConstraintTemplateId',
            'enforcementAction' => 'getEnforcementAction',
            'namespaces' => 'getNamespaces',
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
        $this->container['constraintTemplateId'] = isset($data['constraintTemplateId']) ? $data['constraintTemplateId'] : null;
        $this->container['enforcementAction'] = isset($data['enforcementAction']) ? $data['enforcementAction'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
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
    * Gets constraintTemplateId
    *  策略模板的ID
    *
    * @return string|null
    */
    public function getConstraintTemplateId()
    {
        return $this->container['constraintTemplateId'];
    }

    /**
    * Sets constraintTemplateId
    *
    * @param string|null $constraintTemplateId 策略模板的ID
    *
    * @return $this
    */
    public function setConstraintTemplateId($constraintTemplateId)
    {
        $this->container['constraintTemplateId'] = $constraintTemplateId;
        return $this;
    }

    /**
    * Gets enforcementAction
    *  策略执行方式，当前支持warn和deny
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
    * @param string|null $enforcementAction 策略执行方式，当前支持warn和deny
    *
    * @return $this
    */
    public function setEnforcementAction($enforcementAction)
    {
        $this->container['enforcementAction'] = $enforcementAction;
        return $this;
    }

    /**
    * Gets namespaces
    *  生效的命名空间
    *
    * @return string[]|null
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param string[]|null $namespaces 生效的命名空间
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
        return $this;
    }

    /**
    * Gets parameters
    *  策略实例的参数
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
    * @param object|null $parameters 策略实例的参数
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

