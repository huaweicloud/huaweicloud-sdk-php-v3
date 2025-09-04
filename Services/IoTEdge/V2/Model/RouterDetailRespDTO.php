<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouterDetailRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouterDetailRespDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routeId  路由ID，节点下唯一
    * inputModuleId  输入点所在模块的模块ID
    * outputModuleId  输出点所在模块的模块ID
    * input  输入点名称
    * output  输出点名称
    * sql  sql參數
    * available  是否可用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routeId' => 'string',
            'inputModuleId' => 'string',
            'outputModuleId' => 'string',
            'input' => 'string',
            'output' => 'string',
            'sql' => 'string',
            'available' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routeId  路由ID，节点下唯一
    * inputModuleId  输入点所在模块的模块ID
    * outputModuleId  输出点所在模块的模块ID
    * input  输入点名称
    * output  输出点名称
    * sql  sql參數
    * available  是否可用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routeId' => null,
        'inputModuleId' => null,
        'outputModuleId' => null,
        'input' => null,
        'output' => null,
        'sql' => null,
        'available' => null
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
    * routeId  路由ID，节点下唯一
    * inputModuleId  输入点所在模块的模块ID
    * outputModuleId  输出点所在模块的模块ID
    * input  输入点名称
    * output  输出点名称
    * sql  sql參數
    * available  是否可用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routeId' => 'route_id',
            'inputModuleId' => 'input_module_id',
            'outputModuleId' => 'output_module_id',
            'input' => 'input',
            'output' => 'output',
            'sql' => 'sql',
            'available' => 'available'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routeId  路由ID，节点下唯一
    * inputModuleId  输入点所在模块的模块ID
    * outputModuleId  输出点所在模块的模块ID
    * input  输入点名称
    * output  输出点名称
    * sql  sql參數
    * available  是否可用
    *
    * @var string[]
    */
    protected static $setters = [
            'routeId' => 'setRouteId',
            'inputModuleId' => 'setInputModuleId',
            'outputModuleId' => 'setOutputModuleId',
            'input' => 'setInput',
            'output' => 'setOutput',
            'sql' => 'setSql',
            'available' => 'setAvailable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routeId  路由ID，节点下唯一
    * inputModuleId  输入点所在模块的模块ID
    * outputModuleId  输出点所在模块的模块ID
    * input  输入点名称
    * output  输出点名称
    * sql  sql參數
    * available  是否可用
    *
    * @var string[]
    */
    protected static $getters = [
            'routeId' => 'getRouteId',
            'inputModuleId' => 'getInputModuleId',
            'outputModuleId' => 'getOutputModuleId',
            'input' => 'getInput',
            'output' => 'getOutput',
            'sql' => 'getSql',
            'available' => 'getAvailable'
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
        $this->container['routeId'] = isset($data['routeId']) ? $data['routeId'] : null;
        $this->container['inputModuleId'] = isset($data['inputModuleId']) ? $data['inputModuleId'] : null;
        $this->container['outputModuleId'] = isset($data['outputModuleId']) ? $data['outputModuleId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['routeId'] === null) {
            $invalidProperties[] = "'routeId' can't be null";
        }
            if ((mb_strlen($this->container['routeId']) > 32)) {
                $invalidProperties[] = "invalid value for 'routeId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['routeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'routeId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['routeId'])) {
                $invalidProperties[] = "invalid value for 'routeId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['inputModuleId']) && (mb_strlen($this->container['inputModuleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'inputModuleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['inputModuleId']) && (mb_strlen($this->container['inputModuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'inputModuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inputModuleId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['inputModuleId'])) {
                $invalidProperties[] = "invalid value for 'inputModuleId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['outputModuleId']) && (mb_strlen($this->container['outputModuleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'outputModuleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['outputModuleId']) && (mb_strlen($this->container['outputModuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputModuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputModuleId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['outputModuleId'])) {
                $invalidProperties[] = "invalid value for 'outputModuleId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 64)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['input']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['input'])) {
                $invalidProperties[] = "invalid value for 'input', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 64)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['output'])) {
                $invalidProperties[] = "invalid value for 'output', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) > 64)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) < 0)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 0.";
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
    * Gets routeId
    *  路由ID，节点下唯一
    *
    * @return string
    */
    public function getRouteId()
    {
        return $this->container['routeId'];
    }

    /**
    * Sets routeId
    *
    * @param string $routeId 路由ID，节点下唯一
    *
    * @return $this
    */
    public function setRouteId($routeId)
    {
        $this->container['routeId'] = $routeId;
        return $this;
    }

    /**
    * Gets inputModuleId
    *  输入点所在模块的模块ID
    *
    * @return string|null
    */
    public function getInputModuleId()
    {
        return $this->container['inputModuleId'];
    }

    /**
    * Sets inputModuleId
    *
    * @param string|null $inputModuleId 输入点所在模块的模块ID
    *
    * @return $this
    */
    public function setInputModuleId($inputModuleId)
    {
        $this->container['inputModuleId'] = $inputModuleId;
        return $this;
    }

    /**
    * Gets outputModuleId
    *  输出点所在模块的模块ID
    *
    * @return string|null
    */
    public function getOutputModuleId()
    {
        return $this->container['outputModuleId'];
    }

    /**
    * Sets outputModuleId
    *
    * @param string|null $outputModuleId 输出点所在模块的模块ID
    *
    * @return $this
    */
    public function setOutputModuleId($outputModuleId)
    {
        $this->container['outputModuleId'] = $outputModuleId;
        return $this;
    }

    /**
    * Gets input
    *  输入点名称
    *
    * @return string|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string|null $input 输入点名称
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
    *  输出点名称
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output 输出点名称
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets sql
    *  sql參數
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql sql參數
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets available
    *  是否可用
    *
    * @return bool|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param bool|null $available 是否可用
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
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

