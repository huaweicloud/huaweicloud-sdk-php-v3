<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBatchLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBatchLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchId  批处理作业的ID。
    * from  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    * index  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    * size  查询日志的数量。
    * type  当type填写driver时，输出Spark Driver日志。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchId' => 'string',
            'from' => 'int',
            'index' => 'int',
            'size' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchId  批处理作业的ID。
    * from  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    * index  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    * size  查询日志的数量。
    * type  当type填写driver时，输出Spark Driver日志。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchId' => null,
        'from' => 'int32',
        'index' => 'int32',
        'size' => 'int32',
        'type' => null
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
    * batchId  批处理作业的ID。
    * from  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    * index  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    * size  查询日志的数量。
    * type  当type填写driver时，输出Spark Driver日志。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchId' => 'batch_id',
            'from' => 'from',
            'index' => 'index',
            'size' => 'size',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchId  批处理作业的ID。
    * from  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    * index  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    * size  查询日志的数量。
    * type  当type填写driver时，输出Spark Driver日志。
    *
    * @var string[]
    */
    protected static $setters = [
            'batchId' => 'setBatchId',
            'from' => 'setFrom',
            'index' => 'setIndex',
            'size' => 'setSize',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchId  批处理作业的ID。
    * from  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    * index  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    * size  查询日志的数量。
    * type  当type填写driver时，输出Spark Driver日志。
    *
    * @var string[]
    */
    protected static $getters = [
            'batchId' => 'getBatchId',
            'from' => 'getFrom',
            'index' => 'getIndex',
            'size' => 'getSize',
            'type' => 'getType'
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
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['batchId'] === null) {
            $invalidProperties[] = "'batchId' can't be null";
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
    * Gets batchId
    *  批处理作业的ID。
    *
    * @return string
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param string $batchId 批处理作业的ID。
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
        return $this;
    }

    /**
    * Gets from
    *  起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 起始日志的行号，默认显示最后100行日志。如果日志不足100行，从0行开始显示。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets index
    *  当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 当提交的作业进行重试时，会有多个driver日志。index用于指定driver日志的索引号，默认为0。需与type参数一起使用。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets size
    *  查询日志的数量。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 查询日志的数量。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets type
    *  当type填写driver时，输出Spark Driver日志。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 当type填写driver时，输出Spark Driver日志。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

