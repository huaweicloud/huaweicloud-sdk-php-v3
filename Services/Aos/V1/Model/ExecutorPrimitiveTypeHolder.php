<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutorPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutorPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executor  执行操作者的名字，将用做未来的审计工作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executor  执行操作者的名字，将用做未来的审计工作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executor' => null
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
    * executor  执行操作者的名字，将用做未来的审计工作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executor' => 'executor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executor  执行操作者的名字，将用做未来的审计工作
    *
    * @var string[]
    */
    protected static $setters = [
            'executor' => 'setExecutor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executor  执行操作者的名字，将用做未来的审计工作
    *
    * @var string[]
    */
    protected static $getters = [
            'executor' => 'getExecutor'
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
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) > 32)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) < 1)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executor']) && !preg_match("/^[A-Za-z0-9]+$/", $this->container['executor'])) {
                $invalidProperties[] = "invalid value for 'executor', must be conform to the pattern /^[A-Za-z0-9]+$/.";
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
    * Gets executor
    *  执行操作者的名字，将用做未来的审计工作
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行操作者的名字，将用做未来的审计工作
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
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

