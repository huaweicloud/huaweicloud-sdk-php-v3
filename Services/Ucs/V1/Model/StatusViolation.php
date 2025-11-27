<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusViolation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusViolation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  违规资源类型
    * name  违规资源名称
    * namespace  违规资源所在命名空间
    * message  详细违规信息
    * enforcementAction  审计行为
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'message' => 'string',
            'enforcementAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  违规资源类型
    * name  违规资源名称
    * namespace  违规资源所在命名空间
    * message  详细违规信息
    * enforcementAction  审计行为
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'name' => null,
        'namespace' => null,
        'message' => null,
        'enforcementAction' => null
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
    * kind  违规资源类型
    * name  违规资源名称
    * namespace  违规资源所在命名空间
    * message  详细违规信息
    * enforcementAction  审计行为
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'name' => 'name',
            'namespace' => 'namespace',
            'message' => 'message',
            'enforcementAction' => 'enforcementAction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  违规资源类型
    * name  违规资源名称
    * namespace  违规资源所在命名空间
    * message  详细违规信息
    * enforcementAction  审计行为
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'message' => 'setMessage',
            'enforcementAction' => 'setEnforcementAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  违规资源类型
    * name  违规资源名称
    * namespace  违规资源所在命名空间
    * message  详细违规信息
    * enforcementAction  审计行为
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'message' => 'getMessage',
            'enforcementAction' => 'getEnforcementAction'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['enforcementAction'] = isset($data['enforcementAction']) ? $data['enforcementAction'] : null;
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
    * Gets kind
    *  违规资源类型
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind 违规资源类型
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets name
    *  违规资源名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 违规资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  违规资源所在命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 违规资源所在命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets message
    *  详细违规信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 详细违规信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets enforcementAction
    *  审计行为
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
    * @param string|null $enforcementAction 审计行为
    *
    * @return $this
    */
    public function setEnforcementAction($enforcementAction)
    {
        $this->container['enforcementAction'] = $enforcementAction;
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

