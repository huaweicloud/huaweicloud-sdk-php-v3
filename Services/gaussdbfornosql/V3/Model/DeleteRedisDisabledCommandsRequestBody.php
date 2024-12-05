<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteRedisDisabledCommandsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteRedisDisabledCommandsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disabledType  禁用类型。
    * commands  disabled_type为command时传入该参数。
    * keys  disabled_type为key时传入该参数，最多20个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disabledType' => 'string',
            'commands' => 'string[]',
            'keys' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RedisDisabledCommandsDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disabledType  禁用类型。
    * commands  disabled_type为command时传入该参数。
    * keys  disabled_type为key时传入该参数，最多20个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disabledType' => null,
        'commands' => null,
        'keys' => null
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
    * disabledType  禁用类型。
    * commands  disabled_type为command时传入该参数。
    * keys  disabled_type为key时传入该参数，最多20个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disabledType' => 'disabled_type',
            'commands' => 'commands',
            'keys' => 'keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disabledType  禁用类型。
    * commands  disabled_type为command时传入该参数。
    * keys  disabled_type为key时传入该参数，最多20个。
    *
    * @var string[]
    */
    protected static $setters = [
            'disabledType' => 'setDisabledType',
            'commands' => 'setCommands',
            'keys' => 'setKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disabledType  禁用类型。
    * commands  disabled_type为command时传入该参数。
    * keys  disabled_type为key时传入该参数，最多20个。
    *
    * @var string[]
    */
    protected static $getters = [
            'disabledType' => 'getDisabledType',
            'commands' => 'getCommands',
            'keys' => 'getKeys'
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
    const DISABLED_TYPE_COMMAND = 'command';
    const DISABLED_TYPE_KEY = 'key';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisabledTypeAllowableValues()
    {
        return [
            self::DISABLED_TYPE_COMMAND,
            self::DISABLED_TYPE_KEY,
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
        $this->container['disabledType'] = isset($data['disabledType']) ? $data['disabledType'] : null;
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disabledType'] === null) {
            $invalidProperties[] = "'disabledType' can't be null";
        }
            $allowedValues = $this->getDisabledTypeAllowableValues();
                if (!is_null($this->container['disabledType']) && !in_array($this->container['disabledType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disabledType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets disabledType
    *  禁用类型。
    *
    * @return string
    */
    public function getDisabledType()
    {
        return $this->container['disabledType'];
    }

    /**
    * Sets disabledType
    *
    * @param string $disabledType 禁用类型。
    *
    * @return $this
    */
    public function setDisabledType($disabledType)
    {
        $this->container['disabledType'] = $disabledType;
        return $this;
    }

    /**
    * Gets commands
    *  disabled_type为command时传入该参数。
    *
    * @return string[]|null
    */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
    * Sets commands
    *
    * @param string[]|null $commands disabled_type为command时传入该参数。
    *
    * @return $this
    */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;
        return $this;
    }

    /**
    * Gets keys
    *  disabled_type为key时传入该参数，最多20个。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RedisDisabledCommandsDetail[]|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RedisDisabledCommandsDetail[]|null $keys disabled_type为key时传入该参数，最多20个。
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
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

