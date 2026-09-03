<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContinueTrainTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContinueTrainTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  中间产物id。
    * continueTaskId  续训任务id。
    * continueTaskName  续训任务名称。
    * continueTrainType  续训训练类型。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0: 非续训, 1:续训。
    * createTime  创建时间。
    * checkpointConfig  中间产物配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'continueTaskId' => 'string',
            'continueTaskName' => 'string',
            'continueTrainType' => 'string',
            'skippedSteps' => 'int',
            'restoreTraining' => 'int',
            'createTime' => 'string',
            'checkpointConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  中间产物id。
    * continueTaskId  续训任务id。
    * continueTaskName  续训任务名称。
    * continueTrainType  续训训练类型。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0: 非续训, 1:续训。
    * createTime  创建时间。
    * checkpointConfig  中间产物配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'continueTaskId' => null,
        'continueTaskName' => null,
        'continueTrainType' => null,
        'skippedSteps' => 'int32',
        'restoreTraining' => 'int32',
        'createTime' => null,
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
    * checkpointId  中间产物id。
    * continueTaskId  续训任务id。
    * continueTaskName  续训任务名称。
    * continueTrainType  续训训练类型。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0: 非续训, 1:续训。
    * createTime  创建时间。
    * checkpointConfig  中间产物配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'continueTaskId' => 'continue_task_id',
            'continueTaskName' => 'continue_task_name',
            'continueTrainType' => 'continue_train_type',
            'skippedSteps' => 'skipped_steps',
            'restoreTraining' => 'restore_training',
            'createTime' => 'create_time',
            'checkpointConfig' => 'checkpoint_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  中间产物id。
    * continueTaskId  续训任务id。
    * continueTaskName  续训任务名称。
    * continueTrainType  续训训练类型。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0: 非续训, 1:续训。
    * createTime  创建时间。
    * checkpointConfig  中间产物配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'continueTaskId' => 'setContinueTaskId',
            'continueTaskName' => 'setContinueTaskName',
            'continueTrainType' => 'setContinueTrainType',
            'skippedSteps' => 'setSkippedSteps',
            'restoreTraining' => 'setRestoreTraining',
            'createTime' => 'setCreateTime',
            'checkpointConfig' => 'setCheckpointConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  中间产物id。
    * continueTaskId  续训任务id。
    * continueTaskName  续训任务名称。
    * continueTrainType  续训训练类型。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0: 非续训, 1:续训。
    * createTime  创建时间。
    * checkpointConfig  中间产物配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'continueTaskId' => 'getContinueTaskId',
            'continueTaskName' => 'getContinueTaskName',
            'continueTrainType' => 'getContinueTrainType',
            'skippedSteps' => 'getSkippedSteps',
            'restoreTraining' => 'getRestoreTraining',
            'createTime' => 'getCreateTime',
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
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['continueTaskId'] = isset($data['continueTaskId']) ? $data['continueTaskId'] : null;
        $this->container['continueTaskName'] = isset($data['continueTaskName']) ? $data['continueTaskName'] : null;
        $this->container['continueTrainType'] = isset($data['continueTrainType']) ? $data['continueTrainType'] : null;
        $this->container['skippedSteps'] = isset($data['skippedSteps']) ? $data['skippedSteps'] : null;
        $this->container['restoreTraining'] = isset($data['restoreTraining']) ? $data['restoreTraining'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['continueTaskId']) && (mb_strlen($this->container['continueTaskId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'continueTaskId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['continueTaskId']) && (mb_strlen($this->container['continueTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'continueTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['continueTaskName']) && (mb_strlen($this->container['continueTaskName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'continueTaskName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['continueTaskName']) && (mb_strlen($this->container['continueTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'continueTaskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['continueTrainType']) && (mb_strlen($this->container['continueTrainType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'continueTrainType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['continueTrainType']) && (mb_strlen($this->container['continueTrainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'continueTrainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] < 0)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['restoreTraining']) && ($this->container['restoreTraining'] > 1)) {
                $invalidProperties[] = "invalid value for 'restoreTraining', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['restoreTraining']) && ($this->container['restoreTraining'] < 0)) {
                $invalidProperties[] = "invalid value for 'restoreTraining', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkpointConfig']) && (mb_strlen($this->container['checkpointConfig']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkpointConfig', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkpointConfig']) && (mb_strlen($this->container['checkpointConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkpointConfig', the character length must be bigger than or equal to 0.";
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
    * Gets checkpointId
    *  中间产物id。
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
    * @param string|null $checkpointId 中间产物id。
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets continueTaskId
    *  续训任务id。
    *
    * @return string|null
    */
    public function getContinueTaskId()
    {
        return $this->container['continueTaskId'];
    }

    /**
    * Sets continueTaskId
    *
    * @param string|null $continueTaskId 续训任务id。
    *
    * @return $this
    */
    public function setContinueTaskId($continueTaskId)
    {
        $this->container['continueTaskId'] = $continueTaskId;
        return $this;
    }

    /**
    * Gets continueTaskName
    *  续训任务名称。
    *
    * @return string|null
    */
    public function getContinueTaskName()
    {
        return $this->container['continueTaskName'];
    }

    /**
    * Sets continueTaskName
    *
    * @param string|null $continueTaskName 续训任务名称。
    *
    * @return $this
    */
    public function setContinueTaskName($continueTaskName)
    {
        $this->container['continueTaskName'] = $continueTaskName;
        return $this;
    }

    /**
    * Gets continueTrainType
    *  续训训练类型。
    *
    * @return string|null
    */
    public function getContinueTrainType()
    {
        return $this->container['continueTrainType'];
    }

    /**
    * Sets continueTrainType
    *
    * @param string|null $continueTrainType 续训训练类型。
    *
    * @return $this
    */
    public function setContinueTrainType($continueTrainType)
    {
        $this->container['continueTrainType'] = $continueTrainType;
        return $this;
    }

    /**
    * Gets skippedSteps
    *  跳过步数，0表示不跳过。
    *
    * @return int|null
    */
    public function getSkippedSteps()
    {
        return $this->container['skippedSteps'];
    }

    /**
    * Sets skippedSteps
    *
    * @param int|null $skippedSteps 跳过步数，0表示不跳过。
    *
    * @return $this
    */
    public function setSkippedSteps($skippedSteps)
    {
        $this->container['skippedSteps'] = $skippedSteps;
        return $this;
    }

    /**
    * Gets restoreTraining
    *  是否续训任务。  0: 非续训, 1:续训。
    *
    * @return int|null
    */
    public function getRestoreTraining()
    {
        return $this->container['restoreTraining'];
    }

    /**
    * Sets restoreTraining
    *
    * @param int|null $restoreTraining 是否续训任务。  0: 非续训, 1:续训。
    *
    * @return $this
    */
    public function setRestoreTraining($restoreTraining)
    {
        $this->container['restoreTraining'] = $restoreTraining;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets checkpointConfig
    *  中间产物配置信息。
    *
    * @return string|null
    */
    public function getCheckpointConfig()
    {
        return $this->container['checkpointConfig'];
    }

    /**
    * Sets checkpointConfig
    *
    * @param string|null $checkpointConfig 中间产物配置信息。
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

