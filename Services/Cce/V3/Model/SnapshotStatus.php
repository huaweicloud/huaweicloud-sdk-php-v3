<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  任务状态
    * progress  任务进度
    * completionTime  完成时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'progress' => 'string',
            'completionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  任务状态
    * progress  任务进度
    * completionTime  完成时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'progress' => null,
        'completionTime' => null
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
    * phase  任务状态
    * progress  任务进度
    * completionTime  完成时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'progress' => 'progress',
            'completionTime' => 'completionTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  任务状态
    * progress  任务进度
    * completionTime  完成时间
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'progress' => 'setProgress',
            'completionTime' => 'setCompletionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  任务状态
    * progress  任务进度
    * completionTime  完成时间
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'progress' => 'getProgress',
            'completionTime' => 'getCompletionTime'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
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
    * Gets phase
    *  任务状态
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 任务状态
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets progress
    *  任务进度
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 任务进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets completionTime
    *  完成时间
    *
    * @return string|null
    */
    public function getCompletionTime()
    {
        return $this->container['completionTime'];
    }

    /**
    * Sets completionTime
    *
    * @param string|null $completionTime 完成时间
    *
    * @return $this
    */
    public function setCompletionTime($completionTime)
    {
        $this->container['completionTime'] = $completionTime;
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

