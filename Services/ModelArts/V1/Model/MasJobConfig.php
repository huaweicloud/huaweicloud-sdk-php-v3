<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasJobConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasJobConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ftJobUuid  模型ID
    * ftTrainType  模型训练类型
    * modelType  模型类型
    * trainOutputPath  训练作业输出路径
    * trainProcess  训练作业进度
    * checkpointId  断点ID
    * taskEnv  taskEnv
    * checkpointConfig  checkpointConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ftJobUuid' => 'string',
            'ftTrainType' => 'string',
            'modelType' => 'string',
            'trainOutputPath' => 'string',
            'trainProcess' => 'double',
            'checkpointId' => 'string',
            'taskEnv' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskEnv',
            'checkpointConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CheckpointConf'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ftJobUuid  模型ID
    * ftTrainType  模型训练类型
    * modelType  模型类型
    * trainOutputPath  训练作业输出路径
    * trainProcess  训练作业进度
    * checkpointId  断点ID
    * taskEnv  taskEnv
    * checkpointConfig  checkpointConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ftJobUuid' => null,
        'ftTrainType' => null,
        'modelType' => null,
        'trainOutputPath' => null,
        'trainProcess' => 'double',
        'checkpointId' => null,
        'taskEnv' => null,
        'checkpointConfig' => null
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
    * ftJobUuid  模型ID
    * ftTrainType  模型训练类型
    * modelType  模型类型
    * trainOutputPath  训练作业输出路径
    * trainProcess  训练作业进度
    * checkpointId  断点ID
    * taskEnv  taskEnv
    * checkpointConfig  checkpointConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ftJobUuid' => 'ft_job_uuid',
            'ftTrainType' => 'ft_train_type',
            'modelType' => 'model_type',
            'trainOutputPath' => 'train_output_path',
            'trainProcess' => 'train_process',
            'checkpointId' => 'checkpoint_id',
            'taskEnv' => 'task_env',
            'checkpointConfig' => 'checkpoint_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ftJobUuid  模型ID
    * ftTrainType  模型训练类型
    * modelType  模型类型
    * trainOutputPath  训练作业输出路径
    * trainProcess  训练作业进度
    * checkpointId  断点ID
    * taskEnv  taskEnv
    * checkpointConfig  checkpointConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'ftJobUuid' => 'setFtJobUuid',
            'ftTrainType' => 'setFtTrainType',
            'modelType' => 'setModelType',
            'trainOutputPath' => 'setTrainOutputPath',
            'trainProcess' => 'setTrainProcess',
            'checkpointId' => 'setCheckpointId',
            'taskEnv' => 'setTaskEnv',
            'checkpointConfig' => 'setCheckpointConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ftJobUuid  模型ID
    * ftTrainType  模型训练类型
    * modelType  模型类型
    * trainOutputPath  训练作业输出路径
    * trainProcess  训练作业进度
    * checkpointId  断点ID
    * taskEnv  taskEnv
    * checkpointConfig  checkpointConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'ftJobUuid' => 'getFtJobUuid',
            'ftTrainType' => 'getFtTrainType',
            'modelType' => 'getModelType',
            'trainOutputPath' => 'getTrainOutputPath',
            'trainProcess' => 'getTrainProcess',
            'checkpointId' => 'getCheckpointId',
            'taskEnv' => 'getTaskEnv',
            'checkpointConfig' => 'getCheckpointConfig'
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
        $this->container['ftJobUuid'] = isset($data['ftJobUuid']) ? $data['ftJobUuid'] : null;
        $this->container['ftTrainType'] = isset($data['ftTrainType']) ? $data['ftTrainType'] : null;
        $this->container['modelType'] = isset($data['modelType']) ? $data['modelType'] : null;
        $this->container['trainOutputPath'] = isset($data['trainOutputPath']) ? $data['trainOutputPath'] : null;
        $this->container['trainProcess'] = isset($data['trainProcess']) ? $data['trainProcess'] : null;
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['taskEnv'] = isset($data['taskEnv']) ? $data['taskEnv'] : null;
        $this->container['checkpointConfig'] = isset($data['checkpointConfig']) ? $data['checkpointConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ftJobUuid']) && (mb_strlen($this->container['ftJobUuid']) > 100)) {
                $invalidProperties[] = "invalid value for 'ftJobUuid', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ftJobUuid']) && (mb_strlen($this->container['ftJobUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'ftJobUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ftTrainType']) && (mb_strlen($this->container['ftTrainType']) > 100)) {
                $invalidProperties[] = "invalid value for 'ftTrainType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ftTrainType']) && (mb_strlen($this->container['ftTrainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ftTrainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) > 100)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainOutputPath']) && (mb_strlen($this->container['trainOutputPath']) > 36)) {
                $invalidProperties[] = "invalid value for 'trainOutputPath', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['trainOutputPath']) && (mb_strlen($this->container['trainOutputPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'trainOutputPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] > 1)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] < 0)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) > 100)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be bigger than or equal to 0.";
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
    * Gets ftJobUuid
    *  模型ID
    *
    * @return string|null
    */
    public function getFtJobUuid()
    {
        return $this->container['ftJobUuid'];
    }

    /**
    * Sets ftJobUuid
    *
    * @param string|null $ftJobUuid 模型ID
    *
    * @return $this
    */
    public function setFtJobUuid($ftJobUuid)
    {
        $this->container['ftJobUuid'] = $ftJobUuid;
        return $this;
    }

    /**
    * Gets ftTrainType
    *  模型训练类型
    *
    * @return string|null
    */
    public function getFtTrainType()
    {
        return $this->container['ftTrainType'];
    }

    /**
    * Sets ftTrainType
    *
    * @param string|null $ftTrainType 模型训练类型
    *
    * @return $this
    */
    public function setFtTrainType($ftTrainType)
    {
        $this->container['ftTrainType'] = $ftTrainType;
        return $this;
    }

    /**
    * Gets modelType
    *  模型类型
    *
    * @return string|null
    */
    public function getModelType()
    {
        return $this->container['modelType'];
    }

    /**
    * Sets modelType
    *
    * @param string|null $modelType 模型类型
    *
    * @return $this
    */
    public function setModelType($modelType)
    {
        $this->container['modelType'] = $modelType;
        return $this;
    }

    /**
    * Gets trainOutputPath
    *  训练作业输出路径
    *
    * @return string|null
    */
    public function getTrainOutputPath()
    {
        return $this->container['trainOutputPath'];
    }

    /**
    * Sets trainOutputPath
    *
    * @param string|null $trainOutputPath 训练作业输出路径
    *
    * @return $this
    */
    public function setTrainOutputPath($trainOutputPath)
    {
        $this->container['trainOutputPath'] = $trainOutputPath;
        return $this;
    }

    /**
    * Gets trainProcess
    *  训练作业进度
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
    * @param double|null $trainProcess 训练作业进度
    *
    * @return $this
    */
    public function setTrainProcess($trainProcess)
    {
        $this->container['trainProcess'] = $trainProcess;
        return $this;
    }

    /**
    * Gets checkpointId
    *  断点ID
    *
    * @return string|null
    */
    public function getCheckpointId()
    {
        return $this->container['checkpointId'];
    }

    /**
    * Sets checkpointId
    *
    * @param string|null $checkpointId 断点ID
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets taskEnv
    *  taskEnv
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskEnv|null
    */
    public function getTaskEnv()
    {
        return $this->container['taskEnv'];
    }

    /**
    * Sets taskEnv
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskEnv|null $taskEnv taskEnv
    *
    * @return $this
    */
    public function setTaskEnv($taskEnv)
    {
        $this->container['taskEnv'] = $taskEnv;
        return $this;
    }

    /**
    * Gets checkpointConfig
    *  checkpointConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CheckpointConf|null
    */
    public function getCheckpointConfig()
    {
        return $this->container['checkpointConfig'];
    }

    /**
    * Sets checkpointConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CheckpointConf|null $checkpointConfig checkpointConfig
    *
    * @return $this
    */
    public function setCheckpointConfig($checkpointConfig)
    {
        $this->container['checkpointConfig'] = $checkpointConfig;
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

