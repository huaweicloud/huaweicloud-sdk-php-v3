<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProgressDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProgressDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskStatus  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    * progress  progress
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskStatus' => 'int',
            'progress' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProgressDetailV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskStatus  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    * progress  progress
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskStatus' => null,
        'progress' => null
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
    * taskStatus  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    * progress  progress
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskStatus' => 'task_status',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskStatus  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    * progress  progress
    *
    * @var string[]
    */
    protected static $setters = [
            'taskStatus' => 'setTaskStatus',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskStatus  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    * progress  progress
    *
    * @var string[]
    */
    protected static $getters = [
            'taskStatus' => 'getTaskStatus',
            'progress' => 'getProgress'
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
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets taskStatus
    *  **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    *
    * @return int|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param int|null $taskStatus **参数解释:** 检查任务的执行状态。 **取值范围:** - 0：检查中。 - 1：检查失败。 - 2：检查成功。 - 3：任务中止。 - null：未检查。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets progress
    *  progress
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProgressDetailV2|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProgressDetailV2|null $progress progress
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

