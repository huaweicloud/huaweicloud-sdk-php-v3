<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployStrategyGrayRelease implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployStrategy_gray_release';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  type
    * firstBatchWeight  only used for weight type
    * firstBatchReplica  firstBatchReplica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'firstBatchWeight' => 'int',
            'firstBatchReplica' => 'int',
            'remainingBatch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  type
    * firstBatchWeight  only used for weight type
    * firstBatchReplica  firstBatchReplica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'firstBatchWeight' => null,
        'firstBatchReplica' => null,
        'remainingBatch' => null
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
    * type  type
    * firstBatchWeight  only used for weight type
    * firstBatchReplica  firstBatchReplica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'firstBatchWeight' => 'first_batch_weight',
            'firstBatchReplica' => 'first_batch_replica',
            'remainingBatch' => 'remaining_batch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  type
    * firstBatchWeight  only used for weight type
    * firstBatchReplica  firstBatchReplica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'firstBatchWeight' => 'setFirstBatchWeight',
            'firstBatchReplica' => 'setFirstBatchReplica',
            'remainingBatch' => 'setRemainingBatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  type
    * firstBatchWeight  only used for weight type
    * firstBatchReplica  firstBatchReplica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'firstBatchWeight' => 'getFirstBatchWeight',
            'firstBatchReplica' => 'getFirstBatchReplica',
            'remainingBatch' => 'getRemainingBatch'
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
    const TYPE_WEIGHT = 'weight';
    const TYPE_CONTENT = 'content';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WEIGHT,
            self::TYPE_CONTENT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['firstBatchWeight'] = isset($data['firstBatchWeight']) ? $data['firstBatchWeight'] : null;
        $this->container['firstBatchReplica'] = isset($data['firstBatchReplica']) ? $data['firstBatchReplica'] : null;
        $this->container['remainingBatch'] = isset($data['remainingBatch']) ? $data['remainingBatch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['firstBatchWeight'] === null) {
            $invalidProperties[] = "'firstBatchWeight' can't be null";
        }
        if ($this->container['firstBatchReplica'] === null) {
            $invalidProperties[] = "'firstBatchReplica' can't be null";
        }
        if ($this->container['remainingBatch'] === null) {
            $invalidProperties[] = "'remainingBatch' can't be null";
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
    * Gets type
    *  type
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets firstBatchWeight
    *  only used for weight type
    *
    * @return int
    */
    public function getFirstBatchWeight()
    {
        return $this->container['firstBatchWeight'];
    }

    /**
    * Sets firstBatchWeight
    *
    * @param int $firstBatchWeight only used for weight type
    *
    * @return $this
    */
    public function setFirstBatchWeight($firstBatchWeight)
    {
        $this->container['firstBatchWeight'] = $firstBatchWeight;
        return $this;
    }

    /**
    * Gets firstBatchReplica
    *  firstBatchReplica
    *
    * @return int
    */
    public function getFirstBatchReplica()
    {
        return $this->container['firstBatchReplica'];
    }

    /**
    * Sets firstBatchReplica
    *
    * @param int $firstBatchReplica firstBatchReplica
    *
    * @return $this
    */
    public function setFirstBatchReplica($firstBatchReplica)
    {
        $this->container['firstBatchReplica'] = $firstBatchReplica;
        return $this;
    }

    /**
    * Gets remainingBatch
    *  remainingBatch
    *
    * @return int
    */
    public function getRemainingBatch()
    {
        return $this->container['remainingBatch'];
    }

    /**
    * Sets remainingBatch
    *
    * @param int $remainingBatch remainingBatch
    *
    * @return $this
    */
    public function setRemainingBatch($remainingBatch)
    {
        $this->container['remainingBatch'] = $remainingBatch;
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

