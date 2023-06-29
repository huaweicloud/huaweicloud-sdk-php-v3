<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExtractTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExtractTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * output  output
    * userData  用户自定义数据。
    * sync  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'userData' => 'string',
            'sync' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * output  output
    * userData  用户自定义数据。
    * sync  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'output' => null,
        'userData' => null,
        'sync' => 'int32'
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
    * input  input
    * output  output
    * userData  用户自定义数据。
    * sync  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'output' => 'output',
            'userData' => 'user_data',
            'sync' => 'sync'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * output  output
    * userData  用户自定义数据。
    * sync  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'output' => 'setOutput',
            'userData' => 'setUserData',
            'sync' => 'setSync'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * output  output
    * userData  用户自定义数据。
    * sync  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'output' => 'getOutput',
            'userData' => 'getUserData',
            'sync' => 'getSync'
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['sync'] = isset($data['sync']) ? $data['sync'] : 0;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sync']) && ($this->container['sync'] > 2)) {
                $invalidProperties[] = "invalid value for 'sync', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['sync']) && ($this->container['sync'] < 0)) {
                $invalidProperties[] = "invalid value for 'sync', must be bigger than or equal to 0.";
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
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户自定义数据。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets sync
    *  是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @return int|null
    */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
    * Sets sync
    *
    * @param int|null $sync 是否同步处理, - 0：排队处理 - 1：同步处理  默认值：0
    *
    * @return $this
    */
    public function setSync($sync)
    {
        $this->container['sync'] = $sync;
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

