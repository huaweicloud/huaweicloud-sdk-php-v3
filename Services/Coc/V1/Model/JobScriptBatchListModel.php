<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptBatchListModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptBatchListModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内实例节点数量
    * rotationStrategy  暂停继续策略
    * properties  批次标签：
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchIndex' => 'int',
            'totalInstances' => 'int',
            'rotationStrategy' => 'string',
            'properties' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内实例节点数量
    * rotationStrategy  暂停继续策略
    * properties  批次标签：
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchIndex' => 'int32',
        'totalInstances' => 'int32',
        'rotationStrategy' => null,
        'properties' => null
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
    * totalInstances  批次内实例节点数量
    * rotationStrategy  暂停继续策略
    * properties  批次标签：
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchIndex' => 'batch_index',
            'totalInstances' => 'total_instances',
            'rotationStrategy' => 'rotation_strategy',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内实例节点数量
    * rotationStrategy  暂停继续策略
    * properties  批次标签：
    *
    * @var string[]
    */
    protected static $setters = [
            'batchIndex' => 'setBatchIndex',
            'totalInstances' => 'setTotalInstances',
            'rotationStrategy' => 'setRotationStrategy',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchIndex  批次索引，从1开始
    * totalInstances  批次内实例节点数量
    * rotationStrategy  暂停继续策略
    * properties  批次标签：
    *
    * @var string[]
    */
    protected static $getters = [
            'batchIndex' => 'getBatchIndex',
            'totalInstances' => 'getTotalInstances',
            'rotationStrategy' => 'getRotationStrategy',
            'properties' => 'getProperties'
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
    const ROTATION_STRATEGY__CONTINUE = 'CONTINUE';
    const ROTATION_STRATEGY_PAUSE = 'PAUSE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRotationStrategyAllowableValues()
    {
        return [
            self::ROTATION_STRATEGY__CONTINUE,
            self::ROTATION_STRATEGY_PAUSE,
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
        $this->container['batchIndex'] = isset($data['batchIndex']) ? $data['batchIndex'] : null;
        $this->container['totalInstances'] = isset($data['totalInstances']) ? $data['totalInstances'] : null;
        $this->container['rotationStrategy'] = isset($data['rotationStrategy']) ? $data['rotationStrategy'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRotationStrategyAllowableValues();
                if (!is_null($this->container['rotationStrategy']) && !in_array($this->container['rotationStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'rotationStrategy', must be one of '%s'",
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
    *  批次内实例节点数量
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
    * @param int|null $totalInstances 批次内实例节点数量
    *
    * @return $this
    */
    public function setTotalInstances($totalInstances)
    {
        $this->container['totalInstances'] = $totalInstances;
        return $this;
    }

    /**
    * Gets rotationStrategy
    *  暂停继续策略
    *
    * @return string|null
    */
    public function getRotationStrategy()
    {
        return $this->container['rotationStrategy'];
    }

    /**
    * Sets rotationStrategy
    *
    * @param string|null $rotationStrategy 暂停继续策略
    *
    * @return $this
    */
    public function setRotationStrategy($rotationStrategy)
    {
        $this->container['rotationStrategy'] = $rotationStrategy;
        return $this;
    }

    /**
    * Gets properties
    *  批次标签：
    *
    * @return string|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param string|null $properties 批次标签：
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

