<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Retry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Retry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  重试策略名称，在单个流程中，名称需要唯一
    * delay  重试间隔，单位：秒。若不传，默认为1
    * maxAttempts  最大重试次数，。若不传，默认为3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'delay' => 'int',
            'maxAttempts' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  重试策略名称，在单个流程中，名称需要唯一
    * delay  重试间隔，单位：秒。若不传，默认为1
    * maxAttempts  最大重试次数，。若不传，默认为3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'delay' => 'int64',
        'maxAttempts' => 'int64'
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
    * name  重试策略名称，在单个流程中，名称需要唯一
    * delay  重试间隔，单位：秒。若不传，默认为1
    * maxAttempts  最大重试次数，。若不传，默认为3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'delay' => 'delay',
            'maxAttempts' => 'max_attempts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  重试策略名称，在单个流程中，名称需要唯一
    * delay  重试间隔，单位：秒。若不传，默认为1
    * maxAttempts  最大重试次数，。若不传，默认为3
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'delay' => 'setDelay',
            'maxAttempts' => 'setMaxAttempts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  重试策略名称，在单个流程中，名称需要唯一
    * delay  重试间隔，单位：秒。若不传，默认为1
    * maxAttempts  最大重试次数，。若不传，默认为3
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'delay' => 'getDelay',
            'maxAttempts' => 'getMaxAttempts'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['maxAttempts'] = isset($data['maxAttempts']) ? $data['maxAttempts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,256}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,256}$/.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] > 30)) {
                $invalidProperties[] = "invalid value for 'delay', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] < 1)) {
                $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxAttempts']) && ($this->container['maxAttempts'] > 8)) {
                $invalidProperties[] = "invalid value for 'maxAttempts', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['maxAttempts']) && ($this->container['maxAttempts'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxAttempts', must be bigger than or equal to 1.";
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
    * Gets name
    *  重试策略名称，在单个流程中，名称需要唯一
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 重试策略名称，在单个流程中，名称需要唯一
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets delay
    *  重试间隔，单位：秒。若不传，默认为1
    *
    * @return int|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int|null $delay 重试间隔，单位：秒。若不传，默认为1
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets maxAttempts
    *  最大重试次数，。若不传，默认为3
    *
    * @return int|null
    */
    public function getMaxAttempts()
    {
        return $this->container['maxAttempts'];
    }

    /**
    * Sets maxAttempts
    *
    * @param int|null $maxAttempts 最大重试次数，。若不传，默认为3
    *
    * @return $this
    */
    public function setMaxAttempts($maxAttempts)
    {
        $this->container['maxAttempts'] = $maxAttempts;
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

