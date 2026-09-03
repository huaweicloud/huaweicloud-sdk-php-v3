<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFtMetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFtMetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loss  训练loss信息
    * evalLoss  评测loss信息
    * trainingInfo  训练预估时长信息
    * trainProcess  训练进度信息
    * data  data
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loss' => 'object',
            'evalLoss' => 'object',
            'trainingInfo' => 'object',
            'trainProcess' => 'double',
            'data' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FtMetricData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loss  训练loss信息
    * evalLoss  评测loss信息
    * trainingInfo  训练预估时长信息
    * trainProcess  训练进度信息
    * data  data
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loss' => null,
        'evalLoss' => null,
        'trainingInfo' => null,
        'trainProcess' => 'double',
        'data' => null
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
    * loss  训练loss信息
    * evalLoss  评测loss信息
    * trainingInfo  训练预估时长信息
    * trainProcess  训练进度信息
    * data  data
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loss' => 'loss',
            'evalLoss' => 'eval_loss',
            'trainingInfo' => 'training_info',
            'trainProcess' => 'train_process',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loss  训练loss信息
    * evalLoss  评测loss信息
    * trainingInfo  训练预估时长信息
    * trainProcess  训练进度信息
    * data  data
    *
    * @var string[]
    */
    protected static $setters = [
            'loss' => 'setLoss',
            'evalLoss' => 'setEvalLoss',
            'trainingInfo' => 'setTrainingInfo',
            'trainProcess' => 'setTrainProcess',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loss  训练loss信息
    * evalLoss  评测loss信息
    * trainingInfo  训练预估时长信息
    * trainProcess  训练进度信息
    * data  data
    *
    * @var string[]
    */
    protected static $getters = [
            'loss' => 'getLoss',
            'evalLoss' => 'getEvalLoss',
            'trainingInfo' => 'getTrainingInfo',
            'trainProcess' => 'getTrainProcess',
            'data' => 'getData'
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
        $this->container['loss'] = isset($data['loss']) ? $data['loss'] : null;
        $this->container['evalLoss'] = isset($data['evalLoss']) ? $data['evalLoss'] : null;
        $this->container['trainingInfo'] = isset($data['trainingInfo']) ? $data['trainingInfo'] : null;
        $this->container['trainProcess'] = isset($data['trainProcess']) ? $data['trainProcess'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] > 1)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] < 0)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be bigger than or equal to 0.";
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
    * Gets loss
    *  训练loss信息
    *
    * @return object|null
    */
    public function getLoss()
    {
        return $this->container['loss'];
    }

    /**
    * Sets loss
    *
    * @param object|null $loss 训练loss信息
    *
    * @return $this
    */
    public function setLoss($loss)
    {
        $this->container['loss'] = $loss;
        return $this;
    }

    /**
    * Gets evalLoss
    *  评测loss信息
    *
    * @return object|null
    */
    public function getEvalLoss()
    {
        return $this->container['evalLoss'];
    }

    /**
    * Sets evalLoss
    *
    * @param object|null $evalLoss 评测loss信息
    *
    * @return $this
    */
    public function setEvalLoss($evalLoss)
    {
        $this->container['evalLoss'] = $evalLoss;
        return $this;
    }

    /**
    * Gets trainingInfo
    *  训练预估时长信息
    *
    * @return object|null
    */
    public function getTrainingInfo()
    {
        return $this->container['trainingInfo'];
    }

    /**
    * Sets trainingInfo
    *
    * @param object|null $trainingInfo 训练预估时长信息
    *
    * @return $this
    */
    public function setTrainingInfo($trainingInfo)
    {
        $this->container['trainingInfo'] = $trainingInfo;
        return $this;
    }

    /**
    * Gets trainProcess
    *  训练进度信息
    *
    * @return double|null
    */
    public function getTrainProcess()
    {
        return $this->container['trainProcess'];
    }

    /**
    * Sets trainProcess
    *
    * @param double|null $trainProcess 训练进度信息
    *
    * @return $this
    */
    public function setTrainProcess($trainProcess)
    {
        $this->container['trainProcess'] = $trainProcess;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FtMetricData|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FtMetricData|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

