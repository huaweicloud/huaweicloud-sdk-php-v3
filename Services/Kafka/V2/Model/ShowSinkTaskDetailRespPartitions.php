<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSinkTaskDetailRespPartitions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSinkTaskDetailResp_partitions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partitionId  分区ID。
    * status  运行状态。
    * lastTransferOffset  已转储的消息偏移量。
    * logEndOffset  消息偏移量。
    * lag  积压的消息数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partitionId' => 'string',
            'status' => 'string',
            'lastTransferOffset' => 'string',
            'logEndOffset' => 'string',
            'lag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partitionId  分区ID。
    * status  运行状态。
    * lastTransferOffset  已转储的消息偏移量。
    * logEndOffset  消息偏移量。
    * lag  积压的消息数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partitionId' => null,
        'status' => null,
        'lastTransferOffset' => null,
        'logEndOffset' => null,
        'lag' => null
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
    * partitionId  分区ID。
    * status  运行状态。
    * lastTransferOffset  已转储的消息偏移量。
    * logEndOffset  消息偏移量。
    * lag  积压的消息数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partitionId' => 'partition_id',
            'status' => 'status',
            'lastTransferOffset' => 'last_transfer_offset',
            'logEndOffset' => 'log_end_offset',
            'lag' => 'lag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partitionId  分区ID。
    * status  运行状态。
    * lastTransferOffset  已转储的消息偏移量。
    * logEndOffset  消息偏移量。
    * lag  积压的消息数。
    *
    * @var string[]
    */
    protected static $setters = [
            'partitionId' => 'setPartitionId',
            'status' => 'setStatus',
            'lastTransferOffset' => 'setLastTransferOffset',
            'logEndOffset' => 'setLogEndOffset',
            'lag' => 'setLag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partitionId  分区ID。
    * status  运行状态。
    * lastTransferOffset  已转储的消息偏移量。
    * logEndOffset  消息偏移量。
    * lag  积压的消息数。
    *
    * @var string[]
    */
    protected static $getters = [
            'partitionId' => 'getPartitionId',
            'status' => 'getStatus',
            'lastTransferOffset' => 'getLastTransferOffset',
            'logEndOffset' => 'getLogEndOffset',
            'lag' => 'getLag'
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
        $this->container['partitionId'] = isset($data['partitionId']) ? $data['partitionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastTransferOffset'] = isset($data['lastTransferOffset']) ? $data['lastTransferOffset'] : null;
        $this->container['logEndOffset'] = isset($data['logEndOffset']) ? $data['logEndOffset'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
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
    * Gets partitionId
    *  分区ID。
    *
    * @return string|null
    */
    public function getPartitionId()
    {
        return $this->container['partitionId'];
    }

    /**
    * Sets partitionId
    *
    * @param string|null $partitionId 分区ID。
    *
    * @return $this
    */
    public function setPartitionId($partitionId)
    {
        $this->container['partitionId'] = $partitionId;
        return $this;
    }

    /**
    * Gets status
    *  运行状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 运行状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastTransferOffset
    *  已转储的消息偏移量。
    *
    * @return string|null
    */
    public function getLastTransferOffset()
    {
        return $this->container['lastTransferOffset'];
    }

    /**
    * Sets lastTransferOffset
    *
    * @param string|null $lastTransferOffset 已转储的消息偏移量。
    *
    * @return $this
    */
    public function setLastTransferOffset($lastTransferOffset)
    {
        $this->container['lastTransferOffset'] = $lastTransferOffset;
        return $this;
    }

    /**
    * Gets logEndOffset
    *  消息偏移量。
    *
    * @return string|null
    */
    public function getLogEndOffset()
    {
        return $this->container['logEndOffset'];
    }

    /**
    * Sets logEndOffset
    *
    * @param string|null $logEndOffset 消息偏移量。
    *
    * @return $this
    */
    public function setLogEndOffset($logEndOffset)
    {
        $this->container['logEndOffset'] = $logEndOffset;
        return $this;
    }

    /**
    * Gets lag
    *  积压的消息数。
    *
    * @return string|null
    */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
    * Sets lag
    *
    * @param string|null $lag 积压的消息数。
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
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

