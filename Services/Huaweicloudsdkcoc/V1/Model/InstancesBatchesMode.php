<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstancesBatchesMode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstancesBatchesMode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchStrategy  分批策略：只支持自动分批
    * targetInstances  目标主机实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchStrategy' => 'string',
            'targetInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchStrategy  分批策略：只支持自动分批
    * targetInstances  目标主机实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchStrategy' => null,
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
    * batchStrategy  分批策略：只支持自动分批
    * targetInstances  目标主机实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchStrategy' => 'batch_strategy',
            'targetInstances' => 'target_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchStrategy  分批策略：只支持自动分批
    * targetInstances  目标主机实例
    *
    * @var string[]
    */
    protected static $setters = [
            'batchStrategy' => 'setBatchStrategy',
            'targetInstances' => 'setTargetInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchStrategy  分批策略：只支持自动分批
    * targetInstances  目标主机实例
    *
    * @var string[]
    */
    protected static $getters = [
            'batchStrategy' => 'getBatchStrategy',
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
    const BATCH_STRATEGY_AUTO_BATCH = 'AUTO_BATCH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBatchStrategyAllowableValues()
    {
        return [
            self::BATCH_STRATEGY_AUTO_BATCH,
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
        $this->container['batchStrategy'] = isset($data['batchStrategy']) ? $data['batchStrategy'] : null;
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
        if ($this->container['batchStrategy'] === null) {
            $invalidProperties[] = "'batchStrategy' can't be null";
        }
            $allowedValues = $this->getBatchStrategyAllowableValues();
                if (!is_null($this->container['batchStrategy']) && !in_array($this->container['batchStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'batchStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets batchStrategy
    *  分批策略：只支持自动分批
    *
    * @return string
    */
    public function getBatchStrategy()
    {
        return $this->container['batchStrategy'];
    }

    /**
    * Sets batchStrategy
    *
    * @param string $batchStrategy 分批策略：只支持自动分批
    *
    * @return $this
    */
    public function setBatchStrategy($batchStrategy)
    {
        $this->container['batchStrategy'] = $batchStrategy;
        return $this;
    }

    /**
    * Gets targetInstances
    *  目标主机实例
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
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance[] $targetInstances 目标主机实例
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

