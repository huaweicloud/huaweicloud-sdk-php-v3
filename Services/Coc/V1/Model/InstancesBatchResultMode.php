<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstancesBatchResultMode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstancesBatchResultMode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchIndex  批次Id
    * targetInstances  当前批次内机器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchIndex' => 'int',
            'targetInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchIndex  批次Id
    * targetInstances  当前批次内机器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchIndex' => 'int32',
        'targetInstances' => null
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
    * batchIndex  批次Id
    * targetInstances  当前批次内机器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchIndex' => 'batch_index',
            'targetInstances' => 'target_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchIndex  批次Id
    * targetInstances  当前批次内机器
    *
    * @var string[]
    */
    protected static $setters = [
            'batchIndex' => 'setBatchIndex',
            'targetInstances' => 'setTargetInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchIndex  批次Id
    * targetInstances  当前批次内机器
    *
    * @var string[]
    */
    protected static $getters = [
            'batchIndex' => 'getBatchIndex',
            'targetInstances' => 'getTargetInstances'
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
        $this->container['targetInstances'] = isset($data['targetInstances']) ? $data['targetInstances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['batchIndex'] === null) {
            $invalidProperties[] = "'batchIndex' can't be null";
        }
            if (($this->container['batchIndex'] > 20)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be smaller than or equal to 20.";
            }
            if (($this->container['batchIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be bigger than or equal to 1.";
            }
        if ($this->container['targetInstances'] === null) {
            $invalidProperties[] = "'targetInstances' can't be null";
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
    *  批次Id
    *
    * @return int
    */
    public function getBatchIndex()
    {
        return $this->container['batchIndex'];
    }

    /**
    * Sets batchIndex
    *
    * @param int $batchIndex 批次Id
    *
    * @return $this
    */
    public function setBatchIndex($batchIndex)
    {
        $this->container['batchIndex'] = $batchIndex;
        return $this;
    }

    /**
    * Gets targetInstances
    *  当前批次内机器
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance[]
    */
    public function getTargetInstances()
    {
        return $this->container['targetInstances'];
    }

    /**
    * Sets targetInstances
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance[] $targetInstances 当前批次内机器
    *
    * @return $this
    */
    public function setTargetInstances($targetInstances)
    {
        $this->container['targetInstances'] = $targetInstances;
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

