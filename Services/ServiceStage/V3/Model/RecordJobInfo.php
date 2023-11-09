<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordJobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordJobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deployType  deployType
    * sourceUrl  组件来源的url
    * firstBatchWeight  firstBatchWeight
    * firstBatchReplica  firstBatchReplica
    * replica  replica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deployType' => 'string',
            'sourceUrl' => 'string',
            'firstBatchWeight' => 'int',
            'firstBatchReplica' => 'int',
            'replica' => 'int',
            'remainingBatch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deployType  deployType
    * sourceUrl  组件来源的url
    * firstBatchWeight  firstBatchWeight
    * firstBatchReplica  firstBatchReplica
    * replica  replica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deployType' => null,
        'sourceUrl' => null,
        'firstBatchWeight' => null,
        'firstBatchReplica' => null,
        'replica' => null,
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
    * deployType  deployType
    * sourceUrl  组件来源的url
    * firstBatchWeight  firstBatchWeight
    * firstBatchReplica  firstBatchReplica
    * replica  replica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deployType' => 'deploy_type',
            'sourceUrl' => 'source_url',
            'firstBatchWeight' => 'first_batch_weight',
            'firstBatchReplica' => 'first_batch_replica',
            'replica' => 'replica',
            'remainingBatch' => 'remaining_batch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deployType  deployType
    * sourceUrl  组件来源的url
    * firstBatchWeight  firstBatchWeight
    * firstBatchReplica  firstBatchReplica
    * replica  replica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $setters = [
            'deployType' => 'setDeployType',
            'sourceUrl' => 'setSourceUrl',
            'firstBatchWeight' => 'setFirstBatchWeight',
            'firstBatchReplica' => 'setFirstBatchReplica',
            'replica' => 'setReplica',
            'remainingBatch' => 'setRemainingBatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deployType  deployType
    * sourceUrl  组件来源的url
    * firstBatchWeight  firstBatchWeight
    * firstBatchReplica  firstBatchReplica
    * replica  replica
    * remainingBatch  remainingBatch
    *
    * @var string[]
    */
    protected static $getters = [
            'deployType' => 'getDeployType',
            'sourceUrl' => 'getSourceUrl',
            'firstBatchWeight' => 'getFirstBatchWeight',
            'firstBatchReplica' => 'getFirstBatchReplica',
            'replica' => 'getReplica',
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
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['firstBatchWeight'] = isset($data['firstBatchWeight']) ? $data['firstBatchWeight'] : null;
        $this->container['firstBatchReplica'] = isset($data['firstBatchReplica']) ? $data['firstBatchReplica'] : null;
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
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
    * Gets deployType
    *  deployType
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType deployType
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  组件来源的url
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 组件来源的url
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets firstBatchWeight
    *  firstBatchWeight
    *
    * @return int|null
    */
    public function getFirstBatchWeight()
    {
        return $this->container['firstBatchWeight'];
    }

    /**
    * Sets firstBatchWeight
    *
    * @param int|null $firstBatchWeight firstBatchWeight
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
    * @return int|null
    */
    public function getFirstBatchReplica()
    {
        return $this->container['firstBatchReplica'];
    }

    /**
    * Sets firstBatchReplica
    *
    * @param int|null $firstBatchReplica firstBatchReplica
    *
    * @return $this
    */
    public function setFirstBatchReplica($firstBatchReplica)
    {
        $this->container['firstBatchReplica'] = $firstBatchReplica;
        return $this;
    }

    /**
    * Gets replica
    *  replica
    *
    * @return int|null
    */
    public function getReplica()
    {
        return $this->container['replica'];
    }

    /**
    * Sets replica
    *
    * @param int|null $replica replica
    *
    * @return $this
    */
    public function setReplica($replica)
    {
        $this->container['replica'] = $replica;
        return $this;
    }

    /**
    * Gets remainingBatch
    *  remainingBatch
    *
    * @return int|null
    */
    public function getRemainingBatch()
    {
        return $this->container['remainingBatch'];
    }

    /**
    * Sets remainingBatch
    *
    * @param int|null $remainingBatch remainingBatch
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

