<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RejectManualReviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RejectManualReviewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobRunId  流水线任务ID
    * stepRunId  流水线步骤ID
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobRunId' => 'string',
            'stepRunId' => 'string',
            'pipelineId' => 'string',
            'pipelineRunId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobRunId  流水线任务ID
    * stepRunId  流水线步骤ID
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobRunId' => null,
        'stepRunId' => null,
        'pipelineId' => null,
        'pipelineRunId' => null
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
    * jobRunId  流水线任务ID
    * stepRunId  流水线步骤ID
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobRunId' => 'job_run_id',
            'stepRunId' => 'step_run_id',
            'pipelineId' => 'pipeline_id',
            'pipelineRunId' => 'pipeline_run_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobRunId  流水线任务ID
    * stepRunId  流水线步骤ID
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'jobRunId' => 'setJobRunId',
            'stepRunId' => 'setStepRunId',
            'pipelineId' => 'setPipelineId',
            'pipelineRunId' => 'setPipelineRunId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobRunId  流水线任务ID
    * stepRunId  流水线步骤ID
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'jobRunId' => 'getJobRunId',
            'stepRunId' => 'getStepRunId',
            'pipelineId' => 'getPipelineId',
            'pipelineRunId' => 'getPipelineRunId'
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
        $this->container['jobRunId'] = isset($data['jobRunId']) ? $data['jobRunId'] : null;
        $this->container['stepRunId'] = isset($data['stepRunId']) ? $data['stepRunId'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineRunId'] = isset($data['pipelineRunId']) ? $data['pipelineRunId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobRunId'] === null) {
            $invalidProperties[] = "'jobRunId' can't be null";
        }
            if ((mb_strlen($this->container['jobRunId']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobRunId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['jobRunId']) < 32)) {
                $invalidProperties[] = "invalid value for 'jobRunId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['stepRunId'] === null) {
            $invalidProperties[] = "'stepRunId' can't be null";
        }
            if ((mb_strlen($this->container['stepRunId']) > 32)) {
                $invalidProperties[] = "invalid value for 'stepRunId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['stepRunId']) < 32)) {
                $invalidProperties[] = "invalid value for 'stepRunId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['pipelineId'] === null) {
            $invalidProperties[] = "'pipelineId' can't be null";
        }
            if ((mb_strlen($this->container['pipelineId']) > 32)) {
                $invalidProperties[] = "invalid value for 'pipelineId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['pipelineId']) < 32)) {
                $invalidProperties[] = "invalid value for 'pipelineId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['pipelineRunId'] === null) {
            $invalidProperties[] = "'pipelineRunId' can't be null";
        }
            if ((mb_strlen($this->container['pipelineRunId']) > 32)) {
                $invalidProperties[] = "invalid value for 'pipelineRunId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['pipelineRunId']) < 32)) {
                $invalidProperties[] = "invalid value for 'pipelineRunId', the character length must be bigger than or equal to 32.";
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
    * Gets jobRunId
    *  流水线任务ID
    *
    * @return string
    */
    public function getJobRunId()
    {
        return $this->container['jobRunId'];
    }

    /**
    * Sets jobRunId
    *
    * @param string $jobRunId 流水线任务ID
    *
    * @return $this
    */
    public function setJobRunId($jobRunId)
    {
        $this->container['jobRunId'] = $jobRunId;
        return $this;
    }

    /**
    * Gets stepRunId
    *  流水线步骤ID
    *
    * @return string
    */
    public function getStepRunId()
    {
        return $this->container['stepRunId'];
    }

    /**
    * Sets stepRunId
    *
    * @param string $stepRunId 流水线步骤ID
    *
    * @return $this
    */
    public function setStepRunId($stepRunId)
    {
        $this->container['stepRunId'] = $stepRunId;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线ID
    *
    * @return string
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineRunId
    *  流水线运行实例ID
    *
    * @return string
    */
    public function getPipelineRunId()
    {
        return $this->container['pipelineRunId'];
    }

    /**
    * Sets pipelineRunId
    *
    * @param string $pipelineRunId 流水线运行实例ID
    *
    * @return $this
    */
    public function setPipelineRunId($pipelineRunId)
    {
        $this->container['pipelineRunId'] = $pipelineRunId;
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

