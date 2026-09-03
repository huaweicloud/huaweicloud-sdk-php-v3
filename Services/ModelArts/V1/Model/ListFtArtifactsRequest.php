<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFtArtifactsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFtArtifactsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * steps  步数。
    * epoch  轮数。
    * loss  loss值。
    * status  状态。
    * orderByCreateTimeAsc  是否按照创建时间排序。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trainingJobId' => 'string',
            'steps' => 'int',
            'epoch' => 'int',
            'loss' => 'double',
            'status' => 'string',
            'orderByCreateTimeAsc' => 'bool',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * steps  步数。
    * epoch  轮数。
    * loss  loss值。
    * status  状态。
    * orderByCreateTimeAsc  是否按照创建时间排序。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trainingJobId' => null,
        'steps' => null,
        'epoch' => null,
        'loss' => 'double',
        'status' => null,
        'orderByCreateTimeAsc' => null,
        'limit' => null,
        'offset' => null
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
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * steps  步数。
    * epoch  轮数。
    * loss  loss值。
    * status  状态。
    * orderByCreateTimeAsc  是否按照创建时间排序。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trainingJobId' => 'training_job_id',
            'steps' => 'steps',
            'epoch' => 'epoch',
            'loss' => 'loss',
            'status' => 'status',
            'orderByCreateTimeAsc' => 'order_by_create_time_asc',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * steps  步数。
    * epoch  轮数。
    * loss  loss值。
    * status  状态。
    * orderByCreateTimeAsc  是否按照创建时间排序。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    *
    * @var string[]
    */
    protected static $setters = [
            'trainingJobId' => 'setTrainingJobId',
            'steps' => 'setSteps',
            'epoch' => 'setEpoch',
            'loss' => 'setLoss',
            'status' => 'setStatus',
            'orderByCreateTimeAsc' => 'setOrderByCreateTimeAsc',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * steps  步数。
    * epoch  轮数。
    * loss  loss值。
    * status  状态。
    * orderByCreateTimeAsc  是否按照创建时间排序。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    *
    * @var string[]
    */
    protected static $getters = [
            'trainingJobId' => 'getTrainingJobId',
            'steps' => 'getSteps',
            'epoch' => 'getEpoch',
            'loss' => 'getLoss',
            'status' => 'getStatus',
            'orderByCreateTimeAsc' => 'getOrderByCreateTimeAsc',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['trainingJobId'] = isset($data['trainingJobId']) ? $data['trainingJobId'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['epoch'] = isset($data['epoch']) ? $data['epoch'] : null;
        $this->container['loss'] = isset($data['loss']) ? $data['loss'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderByCreateTimeAsc'] = isset($data['orderByCreateTimeAsc']) ? $data['orderByCreateTimeAsc'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trainingJobId'] === null) {
            $invalidProperties[] = "'trainingJobId' can't be null";
        }
            if (!is_null($this->container['steps']) && ($this->container['steps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'steps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['steps']) && ($this->container['steps'] < 1)) {
                $invalidProperties[] = "invalid value for 'steps', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'epoch', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] < 1)) {
                $invalidProperties[] = "invalid value for 'epoch', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loss']) && ($this->container['loss'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'loss', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['loss']) && ($this->container['loss'] < 0.0)) {
                $invalidProperties[] = "invalid value for 'loss', must be bigger than or equal to 0.0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/published|publishing|publish_failed|not_publish/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /published|publishing|publish_failed|not_publish/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets trainingJobId
    *  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    *
    * @return string
    */
    public function getTrainingJobId()
    {
        return $this->container['trainingJobId'];
    }

    /**
    * Sets trainingJobId
    *
    * @param string $trainingJobId 训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    *
    * @return $this
    */
    public function setTrainingJobId($trainingJobId)
    {
        $this->container['trainingJobId'] = $trainingJobId;
        return $this;
    }

    /**
    * Gets steps
    *  步数。
    *
    * @return int|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param int|null $steps 步数。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets epoch
    *  轮数。
    *
    * @return int|null
    */
    public function getEpoch()
    {
        return $this->container['epoch'];
    }

    /**
    * Sets epoch
    *
    * @param int|null $epoch 轮数。
    *
    * @return $this
    */
    public function setEpoch($epoch)
    {
        $this->container['epoch'] = $epoch;
        return $this;
    }

    /**
    * Gets loss
    *  loss值。
    *
    * @return double|null
    */
    public function getLoss()
    {
        return $this->container['loss'];
    }

    /**
    * Sets loss
    *
    * @param double|null $loss loss值。
    *
    * @return $this
    */
    public function setLoss($loss)
    {
        $this->container['loss'] = $loss;
        return $this;
    }

    /**
    * Gets status
    *  状态。
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
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderByCreateTimeAsc
    *  是否按照创建时间排序。
    *
    * @return bool|null
    */
    public function getOrderByCreateTimeAsc()
    {
        return $this->container['orderByCreateTimeAsc'];
    }

    /**
    * Sets orderByCreateTimeAsc
    *
    * @param bool|null $orderByCreateTimeAsc 是否按照创建时间排序。
    *
    * @return $this
    */
    public function setOrderByCreateTimeAsc($orderByCreateTimeAsc)
    {
        $this->container['orderByCreateTimeAsc'] = $orderByCreateTimeAsc;
        return $this;
    }

    /**
    * Gets limit
    *  返回的数据条目数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回的数据条目数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  数据条目偏移量。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 数据条目偏移量。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

