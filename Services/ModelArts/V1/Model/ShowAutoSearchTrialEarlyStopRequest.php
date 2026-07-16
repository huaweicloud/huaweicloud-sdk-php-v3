<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoSearchTrialEarlyStopRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoSearchTrialEarlyStopRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * trialId  超参搜索的trial_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trainingJobId' => 'string',
            'trialId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * trialId  超参搜索的trial_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trainingJobId' => null,
        'trialId' => null
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
    * trialId  超参搜索的trial_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trainingJobId' => 'training_job_id',
            'trialId' => 'trial_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * trialId  超参搜索的trial_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'trainingJobId' => 'setTrainingJobId',
            'trialId' => 'setTrialId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * trialId  超参搜索的trial_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'trainingJobId' => 'getTrainingJobId',
            'trialId' => 'getTrialId'
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
        $this->container['trialId'] = isset($data['trialId']) ? $data['trialId'] : null;
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
        if ($this->container['trialId'] === null) {
            $invalidProperties[] = "'trialId' can't be null";
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
    * Gets trialId
    *  超参搜索的trial_id。
    *
    * @return string
    */
    public function getTrialId()
    {
        return $this->container['trialId'];
    }

    /**
    * Sets trialId
    *
    * @param string $trialId 超参搜索的trial_id。
    *
    * @return $this
    */
    public function setTrialId($trialId)
    {
        $this->container['trialId'] = $trialId;
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

