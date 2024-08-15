<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptOrderInfoProp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptOrderInfoProp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * scriptName  脚本名称
    * scriptVersionUuid  脚本版本uuid
    * scriptVersionName  脚本版本名
    * currentExecuteBatchIndex  当前执行批次index
    * executeParam  executeParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptUuid' => 'string',
            'scriptName' => 'string',
            'scriptVersionUuid' => 'int',
            'scriptVersionName' => 'string',
            'currentExecuteBatchIndex' => 'int',
            'executeParam' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * scriptName  脚本名称
    * scriptVersionUuid  脚本版本uuid
    * scriptVersionName  脚本版本名
    * currentExecuteBatchIndex  当前执行批次index
    * executeParam  executeParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptUuid' => null,
        'scriptName' => null,
        'scriptVersionUuid' => 'int64',
        'scriptVersionName' => null,
        'currentExecuteBatchIndex' => 'int32',
        'executeParam' => null
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
    * scriptUuid  脚本uuid
    * scriptName  脚本名称
    * scriptVersionUuid  脚本版本uuid
    * scriptVersionName  脚本版本名
    * currentExecuteBatchIndex  当前执行批次index
    * executeParam  executeParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptUuid' => 'script_uuid',
            'scriptName' => 'script_name',
            'scriptVersionUuid' => 'script_version_uuid',
            'scriptVersionName' => 'script_version_name',
            'currentExecuteBatchIndex' => 'current_execute_batch_index',
            'executeParam' => 'execute_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptUuid  脚本uuid
    * scriptName  脚本名称
    * scriptVersionUuid  脚本版本uuid
    * scriptVersionName  脚本版本名
    * currentExecuteBatchIndex  当前执行批次index
    * executeParam  executeParam
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptUuid' => 'setScriptUuid',
            'scriptName' => 'setScriptName',
            'scriptVersionUuid' => 'setScriptVersionUuid',
            'scriptVersionName' => 'setScriptVersionName',
            'currentExecuteBatchIndex' => 'setCurrentExecuteBatchIndex',
            'executeParam' => 'setExecuteParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptUuid  脚本uuid
    * scriptName  脚本名称
    * scriptVersionUuid  脚本版本uuid
    * scriptVersionName  脚本版本名
    * currentExecuteBatchIndex  当前执行批次index
    * executeParam  executeParam
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptUuid' => 'getScriptUuid',
            'scriptName' => 'getScriptName',
            'scriptVersionUuid' => 'getScriptVersionUuid',
            'scriptVersionName' => 'getScriptVersionName',
            'currentExecuteBatchIndex' => 'getCurrentExecuteBatchIndex',
            'executeParam' => 'getExecuteParam'
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
        $this->container['scriptUuid'] = isset($data['scriptUuid']) ? $data['scriptUuid'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['scriptVersionUuid'] = isset($data['scriptVersionUuid']) ? $data['scriptVersionUuid'] : null;
        $this->container['scriptVersionName'] = isset($data['scriptVersionName']) ? $data['scriptVersionName'] : null;
        $this->container['currentExecuteBatchIndex'] = isset($data['currentExecuteBatchIndex']) ? $data['currentExecuteBatchIndex'] : null;
        $this->container['executeParam'] = isset($data['executeParam']) ? $data['executeParam'] : null;
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
    * Gets scriptUuid
    *  脚本uuid
    *
    * @return string|null
    */
    public function getScriptUuid()
    {
        return $this->container['scriptUuid'];
    }

    /**
    * Sets scriptUuid
    *
    * @param string|null $scriptUuid 脚本uuid
    *
    * @return $this
    */
    public function setScriptUuid($scriptUuid)
    {
        $this->container['scriptUuid'] = $scriptUuid;
        return $this;
    }

    /**
    * Gets scriptName
    *  脚本名称
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 脚本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets scriptVersionUuid
    *  脚本版本uuid
    *
    * @return int|null
    */
    public function getScriptVersionUuid()
    {
        return $this->container['scriptVersionUuid'];
    }

    /**
    * Sets scriptVersionUuid
    *
    * @param int|null $scriptVersionUuid 脚本版本uuid
    *
    * @return $this
    */
    public function setScriptVersionUuid($scriptVersionUuid)
    {
        $this->container['scriptVersionUuid'] = $scriptVersionUuid;
        return $this;
    }

    /**
    * Gets scriptVersionName
    *  脚本版本名
    *
    * @return string|null
    */
    public function getScriptVersionName()
    {
        return $this->container['scriptVersionName'];
    }

    /**
    * Sets scriptVersionName
    *
    * @param string|null $scriptVersionName 脚本版本名
    *
    * @return $this
    */
    public function setScriptVersionName($scriptVersionName)
    {
        $this->container['scriptVersionName'] = $scriptVersionName;
        return $this;
    }

    /**
    * Gets currentExecuteBatchIndex
    *  当前执行批次index
    *
    * @return int|null
    */
    public function getCurrentExecuteBatchIndex()
    {
        return $this->container['currentExecuteBatchIndex'];
    }

    /**
    * Sets currentExecuteBatchIndex
    *
    * @param int|null $currentExecuteBatchIndex 当前执行批次index
    *
    * @return $this
    */
    public function setCurrentExecuteBatchIndex($currentExecuteBatchIndex)
    {
        $this->container['currentExecuteBatchIndex'] = $currentExecuteBatchIndex;
        return $this;
    }

    /**
    * Gets executeParam
    *  executeParam
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam|null
    */
    public function getExecuteParam()
    {
        return $this->container['executeParam'];
    }

    /**
    * Sets executeParam
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam|null $executeParam executeParam
    *
    * @return $this
    */
    public function setExecuteParam($executeParam)
    {
        $this->container['executeParam'] = $executeParam;
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

