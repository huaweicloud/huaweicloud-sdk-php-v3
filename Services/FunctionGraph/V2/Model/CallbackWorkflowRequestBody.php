<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CallbackWorkflowRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CallbackWorkflowRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  执行结果
    * error  错误信息
    * output  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'error' => 'string',
            'output' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  执行结果
    * error  错误信息
    * output  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'error' => null,
        'output' => null
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
    * result  执行结果
    * error  错误信息
    * output  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'error' => 'error',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  执行结果
    * error  错误信息
    * output  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'error' => 'setError',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  执行结果
    * error  错误信息
    * output  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'error' => 'getError',
            'output' => 'getOutput'
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
    const RESULT_SUCCESS = 'success';
    const RESULT_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_FAIL,
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['result']) > 64)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['result']) < 1)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 64)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) < 1)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
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
    * Gets result
    *  执行结果
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 执行结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets error
    *  错误信息
    *
    * @return string|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param string|null $error 错误信息
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets output
    *  工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @return object
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param object $output 工作流的执行结果，JSON格式，仅在status为success时有值
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

