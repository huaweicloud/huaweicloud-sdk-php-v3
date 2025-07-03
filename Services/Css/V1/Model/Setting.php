<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Setting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'setting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workers  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    * batchSize  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    * batchDelayMs  每个event被pipeline调度等待的最小时间。 单位毫秒。
    * queueType  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    * queueCheckPointWrites  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    * queueMaxBytesMb  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workers' => 'int',
            'batchSize' => 'int',
            'batchDelayMs' => 'int',
            'queueType' => 'string',
            'queueCheckPointWrites' => 'int',
            'queueMaxBytesMb' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workers  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    * batchSize  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    * batchDelayMs  每个event被pipeline调度等待的最小时间。 单位毫秒。
    * queueType  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    * queueCheckPointWrites  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    * queueMaxBytesMb  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workers' => null,
        'batchSize' => null,
        'batchDelayMs' => null,
        'queueType' => null,
        'queueCheckPointWrites' => null,
        'queueMaxBytesMb' => null
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
    * workers  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    * batchSize  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    * batchDelayMs  每个event被pipeline调度等待的最小时间。 单位毫秒。
    * queueType  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    * queueCheckPointWrites  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    * queueMaxBytesMb  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workers' => 'workers',
            'batchSize' => 'batch_size',
            'batchDelayMs' => 'batch_delay_ms',
            'queueType' => 'queue_type',
            'queueCheckPointWrites' => 'queue_check_point_writes',
            'queueMaxBytesMb' => 'queue_max_bytes_mb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workers  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    * batchSize  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    * batchDelayMs  每个event被pipeline调度等待的最小时间。 单位毫秒。
    * queueType  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    * queueCheckPointWrites  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    * queueMaxBytesMb  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @var string[]
    */
    protected static $setters = [
            'workers' => 'setWorkers',
            'batchSize' => 'setBatchSize',
            'batchDelayMs' => 'setBatchDelayMs',
            'queueType' => 'setQueueType',
            'queueCheckPointWrites' => 'setQueueCheckPointWrites',
            'queueMaxBytesMb' => 'setQueueMaxBytesMb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workers  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    * batchSize  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    * batchDelayMs  每个event被pipeline调度等待的最小时间。 单位毫秒。
    * queueType  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    * queueCheckPointWrites  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    * queueMaxBytesMb  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @var string[]
    */
    protected static $getters = [
            'workers' => 'getWorkers',
            'batchSize' => 'getBatchSize',
            'batchDelayMs' => 'getBatchDelayMs',
            'queueType' => 'getQueueType',
            'queueCheckPointWrites' => 'getQueueCheckPointWrites',
            'queueMaxBytesMb' => 'getQueueMaxBytesMb'
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
        $this->container['workers'] = isset($data['workers']) ? $data['workers'] : null;
        $this->container['batchSize'] = isset($data['batchSize']) ? $data['batchSize'] : null;
        $this->container['batchDelayMs'] = isset($data['batchDelayMs']) ? $data['batchDelayMs'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['queueCheckPointWrites'] = isset($data['queueCheckPointWrites']) ? $data['queueCheckPointWrites'] : null;
        $this->container['queueMaxBytesMb'] = isset($data['queueMaxBytesMb']) ? $data['queueMaxBytesMb'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queueType'] === null) {
            $invalidProperties[] = "'queueType' can't be null";
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
    * Gets workers
    *  并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    *
    * @return int|null
    */
    public function getWorkers()
    {
        return $this->container['workers'];
    }

    /**
    * Sets workers
    *
    * @param int|null $workers 并行执行管道的Filters+Outputs阶段的工作线程数，默认值为CPU核数。
    *
    * @return $this
    */
    public function setWorkers($workers)
    {
        $this->container['workers'] = $workers;
        return $this;
    }

    /**
    * Gets batchSize
    *  单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    *
    * @return int|null
    */
    public function getBatchSize()
    {
        return $this->container['batchSize'];
    }

    /**
    * Sets batchSize
    *
    * @param int|null $batchSize 单个工作线程在尝试执行其Filters和Outputs之前将从inputs收集的最大事件数，该值较大通常更有效，但会增加内存开销，默认为125。
    *
    * @return $this
    */
    public function setBatchSize($batchSize)
    {
        $this->container['batchSize'] = $batchSize;
        return $this;
    }

    /**
    * Gets batchDelayMs
    *  每个event被pipeline调度等待的最小时间。 单位毫秒。
    *
    * @return int|null
    */
    public function getBatchDelayMs()
    {
        return $this->container['batchDelayMs'];
    }

    /**
    * Sets batchDelayMs
    *
    * @param int|null $batchDelayMs 每个event被pipeline调度等待的最小时间。 单位毫秒。
    *
    * @return $this
    */
    public function setBatchDelayMs($batchDelayMs)
    {
        $this->container['batchDelayMs'] = $batchDelayMs;
        return $this;
    }

    /**
    * Gets queueType
    *  用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    *
    * @return string
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string $queueType 用于事件缓冲的内部队列模型。memory 为基于内存的传统队列，persisted为基于磁盘的ACKed持久化队列，默认值为memory。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets queueCheckPointWrites
    *  如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    *
    * @return int|null
    */
    public function getQueueCheckPointWrites()
    {
        return $this->container['queueCheckPointWrites'];
    }

    /**
    * Sets queueCheckPointWrites
    *
    * @param int|null $queueCheckPointWrites 如果使用持久化队列，则表示强制执行检查点之前写入的最大事件数，默认值为1024。
    *
    * @return $this
    */
    public function setQueueCheckPointWrites($queueCheckPointWrites)
    {
        $this->container['queueCheckPointWrites'] = $queueCheckPointWrites;
        return $this;
    }

    /**
    * Gets queueMaxBytesMb
    *  如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @return int|null
    */
    public function getQueueMaxBytesMb()
    {
        return $this->container['queueMaxBytesMb'];
    }

    /**
    * Sets queueMaxBytesMb
    *
    * @param int|null $queueMaxBytesMb 如果使用持久化队列，则表示持久化队列的总容量（以兆字节MB为单位），确保磁盘的容量大于该值，默认值为1024。
    *
    * @return $this
    */
    public function setQueueMaxBytesMb($queueMaxBytesMb)
    {
        $this->container['queueMaxBytesMb'] = $queueMaxBytesMb;
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

