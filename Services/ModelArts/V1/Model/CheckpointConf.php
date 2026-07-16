<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  断点ID
    * saveCheckpointsMax  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0：非续训,，1:续训。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'saveCheckpointsMax' => 'int',
            'skippedSteps' => 'int',
            'restoreTraining' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  断点ID
    * saveCheckpointsMax  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0：非续训,，1:续训。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'saveCheckpointsMax' => 'int32',
        'skippedSteps' => 'int32',
        'restoreTraining' => null
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
    * saveCheckpointsMax  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0：非续训,，1:续训。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'saveCheckpointsMax' => 'save_checkpoints_max',
            'skippedSteps' => 'skipped_steps',
            'restoreTraining' => 'restore_training'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  断点ID
    * saveCheckpointsMax  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0：非续训,，1:续训。
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'saveCheckpointsMax' => 'setSaveCheckpointsMax',
            'skippedSteps' => 'setSkippedSteps',
            'restoreTraining' => 'setRestoreTraining'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  断点ID
    * saveCheckpointsMax  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    * skippedSteps  跳过步数，0表示不跳过。
    * restoreTraining  是否续训任务。  0：非续训,，1:续训。
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'saveCheckpointsMax' => 'getSaveCheckpointsMax',
            'skippedSteps' => 'getSkippedSteps',
            'restoreTraining' => 'getRestoreTraining'
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
        $this->container['saveCheckpointsMax'] = isset($data['saveCheckpointsMax']) ? $data['saveCheckpointsMax'] : null;
        $this->container['skippedSteps'] = isset($data['skippedSteps']) ? $data['skippedSteps'] : null;
        $this->container['restoreTraining'] = isset($data['restoreTraining']) ? $data['restoreTraining'] : null;
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
            if (!is_null($this->container['saveCheckpointsMax']) && ($this->container['saveCheckpointsMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'saveCheckpointsMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['saveCheckpointsMax']) && ($this->container['saveCheckpointsMax'] < -1)) {
                $invalidProperties[] = "invalid value for 'saveCheckpointsMax', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['skippedSteps']) && ($this->container['skippedSteps'] < 0)) {
                $invalidProperties[] = "invalid value for 'skippedSteps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['restoreTraining']) && ($this->container['restoreTraining'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'restoreTraining', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['restoreTraining']) && ($this->container['restoreTraining'] < 0)) {
                $invalidProperties[] = "invalid value for 'restoreTraining', must be bigger than or equal to 0.";
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
    * Gets saveCheckpointsMax
    *  保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    *
    * @return int|null
    */
    public function getSaveCheckpointsMax()
    {
        return $this->container['saveCheckpointsMax'];
    }

    /**
    * Sets saveCheckpointsMax
    *
    * @param int|null $saveCheckpointsMax 保存续训任务的步数。 0：关闭不保，-1：自动无限制。
    *
    * @return $this
    */
    public function setSaveCheckpointsMax($saveCheckpointsMax)
    {
        $this->container['saveCheckpointsMax'] = $saveCheckpointsMax;
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
    *  是否续训任务。  0：非续训,，1:续训。
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
    * @param int|null $restoreTraining 是否续训任务。  0：非续训,，1:续训。
    *
    * @return $this
    */
    public function setRestoreTraining($restoreTraining)
    {
        $this->container['restoreTraining'] = $restoreTraining;
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

