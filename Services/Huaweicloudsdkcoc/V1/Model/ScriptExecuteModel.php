<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptExecuteModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptExecuteModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeParam  executeParam
    * executeBatches  目标实例分批信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeParam' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam',
            'executeBatches' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecuteInstancesBatchInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeParam  executeParam
    * executeBatches  目标实例分批信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeParam' => null,
        'executeBatches' => null
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
    * executeParam  executeParam
    * executeBatches  目标实例分批信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeParam' => 'execute_param',
            'executeBatches' => 'execute_batches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeParam  executeParam
    * executeBatches  目标实例分批信息
    *
    * @var string[]
    */
    protected static $setters = [
            'executeParam' => 'setExecuteParam',
            'executeBatches' => 'setExecuteBatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeParam  executeParam
    * executeBatches  目标实例分批信息
    *
    * @var string[]
    */
    protected static $getters = [
            'executeParam' => 'getExecuteParam',
            'executeBatches' => 'getExecuteBatches'
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
        $this->container['executeParam'] = isset($data['executeParam']) ? $data['executeParam'] : null;
        $this->container['executeBatches'] = isset($data['executeBatches']) ? $data['executeBatches'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['executeParam'] === null) {
            $invalidProperties[] = "'executeParam' can't be null";
        }
        if ($this->container['executeBatches'] === null) {
            $invalidProperties[] = "'executeBatches' can't be null";
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
    * Gets executeParam
    *  executeParam
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam
    */
    public function getExecuteParam()
    {
        return $this->container['executeParam'];
    }

    /**
    * Sets executeParam
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteParam $executeParam executeParam
    *
    * @return $this
    */
    public function setExecuteParam($executeParam)
    {
        $this->container['executeParam'] = $executeParam;
        return $this;
    }

    /**
    * Gets executeBatches
    *  目标实例分批信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecuteInstancesBatchInfo[]
    */
    public function getExecuteBatches()
    {
        return $this->container['executeBatches'];
    }

    /**
    * Sets executeBatches
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecuteInstancesBatchInfo[] $executeBatches 目标实例分批信息
    *
    * @return $this
    */
    public function setExecuteBatches($executeBatches)
    {
        $this->container['executeBatches'] = $executeBatches;
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

