<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContinueTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContinueTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  断点ID
    * sourceModelId  续训任务模型ID
    * sourceModelName  续训任务模型名称
    * epoch  轮数。
    * steps  步数。
    * isBest  是否最优
    * skippedSteps  跳过步数，0表示不跳过。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'sourceModelId' => 'string',
            'sourceModelName' => 'string',
            'epoch' => 'int',
            'steps' => 'int',
            'isBest' => 'bool',
            'skippedSteps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  断点ID
    * sourceModelId  续训任务模型ID
    * sourceModelName  续训任务模型名称
    * epoch  轮数。
    * steps  步数。
    * isBest  是否最优
    * skippedSteps  跳过步数，0表示不跳过。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'sourceModelId' => null,
        'sourceModelName' => null,
        'epoch' => null,
        'steps' => 'int32',
        'isBest' => null,
        'skippedSteps' => 'int32'
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
    * checkpointId  断点ID
    * sourceModelId  续训任务模型ID
    * sourceModelName  续训任务模型名称
    * epoch  轮数。
    * steps  步数。
    * isBest  是否最优
    * skippedSteps  跳过步数，0表示不跳过。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'sourceModelId' => 'source_model_id',
            'sourceModelName' => 'source_model_name',
            'epoch' => 'epoch',
            'steps' => 'steps',
            'isBest' => 'is_best',
            'skippedSteps' => 'skipped_steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  断点ID
    * sourceModelId  续训任务模型ID
    * sourceModelName  续训任务模型名称
    * epoch  轮数。
    * steps  步数。
    * isBest  是否最优
    * skippedSteps  跳过步数，0表示不跳过。
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'sourceModelId' => 'setSourceModelId',
            'sourceModelName' => 'setSourceModelName',
            'epoch' => 'setEpoch',
            'steps' => 'setSteps',
            'isBest' => 'setIsBest',
            'skippedSteps' => 'setSkippedSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  断点ID
    * sourceModelId  续训任务模型ID
    * sourceModelName  续训任务模型名称
    * epoch  轮数。
    * steps  步数。
    * isBest  是否最优
    * skippedSteps  跳过步数，0表示不跳过。
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'sourceModelId' => 'getSourceModelId',
            'sourceModelName' => 'getSourceModelName',
            'epoch' => 'getEpoch',
            'steps' => 'getSteps',
            'isBest' => 'getIsBest',
            'skippedSteps' => 'getSkippedSteps'
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
        $this->container['sourceModelId'] = isset($data['sourceModelId']) ? $data['sourceModelId'] : null;
        $this->container['sourceModelName'] = isset($data['sourceModelName']) ? $data['sourceModelName'] : null;
        $this->container['epoch'] = isset($data['epoch']) ? $data['epoch'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['isBest'] = isset($data['isBest']) ? $data['isBest'] : null;
        $this->container['skippedSteps'] = isset($data['skippedSteps']) ? $data['skippedSteps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) > 100)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['checkpointId']) && (mb_strlen($this->container['checkpointId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceModelId']) && (mb_strlen($this->container['sourceModelId']) > 100)) {
                $invalidProperties[] = "invalid value for 'sourceModelId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sourceModelId']) && (mb_strlen($this->container['sourceModelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceModelId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceModelName']) && (mb_strlen($this->container['sourceModelName']) > 100)) {
                $invalidProperties[] = "invalid value for 'sourceModelName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sourceModelName']) && (mb_strlen($this->container['sourceModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'epoch', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] < 0)) {
                $invalidProperties[] = "invalid value for 'epoch', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['steps']) && ($this->container['steps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'steps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['steps']) && ($this->container['steps'] < 0)) {
                $invalidProperties[] = "invalid value for 'steps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] < 0)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be bigger than or equal to 0.";
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
    * Gets sourceModelId
    *  续训任务模型ID
    *
    * @return string|null
    */
    public function getSourceModelId()
    {
        return $this->container['sourceModelId'];
    }

    /**
    * Sets sourceModelId
    *
    * @param string|null $sourceModelId 续训任务模型ID
    *
    * @return $this
    */
    public function setSourceModelId($sourceModelId)
    {
        $this->container['sourceModelId'] = $sourceModelId;
        return $this;
    }

    /**
    * Gets sourceModelName
    *  续训任务模型名称
    *
    * @return string|null
    */
    public function getSourceModelName()
    {
        return $this->container['sourceModelName'];
    }

    /**
    * Sets sourceModelName
    *
    * @param string|null $sourceModelName 续训任务模型名称
    *
    * @return $this
    */
    public function setSourceModelName($sourceModelName)
    {
        $this->container['sourceModelName'] = $sourceModelName;
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
    * Gets isBest
    *  是否最优
    *
    * @return bool|null
    */
    public function getIsBest()
    {
        return $this->container['isBest'];
    }

    /**
    * Sets isBest
    *
    * @param bool|null $isBest 是否最优
    *
    * @return $this
    */
    public function setIsBest($isBest)
    {
        $this->container['isBest'] = $isBest;
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

