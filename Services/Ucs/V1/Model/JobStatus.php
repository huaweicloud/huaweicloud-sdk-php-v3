<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  Job phase
    * reason  Job reason
    * completionTime  Job完成时间
    * startTime  Job开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'reason' => 'string',
            'completionTime' => 'string',
            'startTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  Job phase
    * reason  Job reason
    * completionTime  Job完成时间
    * startTime  Job开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'reason' => null,
        'completionTime' => null,
        'startTime' => null
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
    * phase  Job phase
    * reason  Job reason
    * completionTime  Job完成时间
    * startTime  Job开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'reason' => 'reason',
            'completionTime' => 'completionTime',
            'startTime' => 'startTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  Job phase
    * reason  Job reason
    * completionTime  Job完成时间
    * startTime  Job开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'reason' => 'setReason',
            'completionTime' => 'setCompletionTime',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  Job phase
    * reason  Job reason
    * completionTime  Job完成时间
    * startTime  Job开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'reason' => 'getReason',
            'completionTime' => 'getCompletionTime',
            'startTime' => 'getStartTime'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    *  Job phase
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
    * @param string|null $phase Job phase
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets reason
    *  Job reason
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason Job reason
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets completionTime
    *  Job完成时间
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
    * @param string|null $completionTime Job完成时间
    *
    * @return $this
    */
    public function setCompletionTime($completionTime)
    {
        $this->container['completionTime'] = $completionTime;
        return $this;
    }

    /**
    * Gets startTime
    *  Job开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime Job开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

