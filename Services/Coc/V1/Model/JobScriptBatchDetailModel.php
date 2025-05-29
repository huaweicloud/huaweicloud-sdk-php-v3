<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptBatchDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptBatchDetailModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内执行实例数量
    * executeInstances  执行实例列表，分页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchIndex' => 'int',
            'totalInstances' => 'int',
            'executeInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\ExectionInstanceModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内执行实例数量
    * executeInstances  执行实例列表，分页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchIndex' => 'int32',
        'totalInstances' => 'int32',
        'executeInstances' => null
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
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内执行实例数量
    * executeInstances  执行实例列表，分页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchIndex' => 'batch_index',
            'totalInstances' => 'total_instances',
            'executeInstances' => 'execute_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内执行实例数量
    * executeInstances  执行实例列表，分页
    *
    * @var string[]
    */
    protected static $setters = [
            'batchIndex' => 'setBatchIndex',
            'totalInstances' => 'setTotalInstances',
            'executeInstances' => 'setExecuteInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内执行实例数量
    * executeInstances  执行实例列表，分页
    *
    * @var string[]
    */
    protected static $getters = [
            'batchIndex' => 'getBatchIndex',
            'totalInstances' => 'getTotalInstances',
            'executeInstances' => 'getExecuteInstances'
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
        $this->container['batchIndex'] = isset($data['batchIndex']) ? $data['batchIndex'] : null;
        $this->container['totalInstances'] = isset($data['totalInstances']) ? $data['totalInstances'] : null;
        $this->container['executeInstances'] = isset($data['executeInstances']) ? $data['executeInstances'] : null;
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
    * Gets batchIndex
    *  批次索引，从1开始
    *
    * @return int|null
    */
    public function getBatchIndex()
    {
        return $this->container['batchIndex'];
    }

    /**
    * Sets batchIndex
    *
    * @param int|null $batchIndex 批次索引，从1开始
    *
    * @return $this
    */
    public function setBatchIndex($batchIndex)
    {
        $this->container['batchIndex'] = $batchIndex;
        return $this;
    }

    /**
    * Gets totalInstances
    *  批次内执行实例数量
    *
    * @return int|null
    */
    public function getTotalInstances()
    {
        return $this->container['totalInstances'];
    }

    /**
    * Sets totalInstances
    *
    * @param int|null $totalInstances 批次内执行实例数量
    *
    * @return $this
    */
    public function setTotalInstances($totalInstances)
    {
        $this->container['totalInstances'] = $totalInstances;
        return $this;
    }

    /**
    * Gets executeInstances
    *  执行实例列表，分页
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExectionInstanceModel[]|null
    */
    public function getExecuteInstances()
    {
        return $this->container['executeInstances'];
    }

    /**
    * Sets executeInstances
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExectionInstanceModel[]|null $executeInstances 执行实例列表，分页
    *
    * @return $this
    */
    public function setExecuteInstances($executeInstances)
    {
        $this->container['executeInstances'] = $executeInstances;
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

