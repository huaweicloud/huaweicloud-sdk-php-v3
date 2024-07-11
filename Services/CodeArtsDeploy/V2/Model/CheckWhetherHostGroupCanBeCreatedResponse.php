<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckWhetherHostGroupCanBeCreatedResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckWhetherHostGroupCanBeCreatedResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canCreated  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canCreated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canCreated  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canCreated' => null
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
    * canCreated  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canCreated' => 'can_created'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canCreated  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @var string[]
    */
    protected static $setters = [
            'canCreated' => 'setCanCreated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canCreated  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @var string[]
    */
    protected static $getters = [
            'canCreated' => 'getCanCreated'
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
        $this->container['canCreated'] = isset($data['canCreated']) ? $data['canCreated'] : null;
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
    * Gets canCreated
    *  是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @return bool|null
    */
    public function getCanCreated()
    {
        return $this->container['canCreated'];
    }

    /**
    * Sets canCreated
    *
    * @param bool|null $canCreated 是否有创建主机集群权限，true 有权限 false 无权限
    *
    * @return $this
    */
    public function setCanCreated($canCreated)
    {
        $this->container['canCreated'] = $canCreated;
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

