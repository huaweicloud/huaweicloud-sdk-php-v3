<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioDriveActionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioDriveActionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionTag  动作标签
    * actionName  动作名称
    * actionStartTime  动作开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionTag' => 'string',
            'actionName' => 'string',
            'actionStartTime' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionTag  动作标签
    * actionName  动作名称
    * actionStartTime  动作开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionTag' => null,
        'actionName' => null,
        'actionStartTime' => 'float'
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
    * actionTag  动作标签
    * actionName  动作名称
    * actionStartTime  动作开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionTag' => 'action_tag',
            'actionName' => 'action_name',
            'actionStartTime' => 'action_start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionTag  动作标签
    * actionName  动作名称
    * actionStartTime  动作开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'actionTag' => 'setActionTag',
            'actionName' => 'setActionName',
            'actionStartTime' => 'setActionStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionTag  动作标签
    * actionName  动作名称
    * actionStartTime  动作开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'actionTag' => 'getActionTag',
            'actionName' => 'getActionName',
            'actionStartTime' => 'getActionStartTime'
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
        $this->container['actionTag'] = isset($data['actionTag']) ? $data['actionTag'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['actionStartTime'] = isset($data['actionStartTime']) ? $data['actionStartTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actionTag'] === null) {
            $invalidProperties[] = "'actionTag' can't be null";
        }
            if ((mb_strlen($this->container['actionTag']) > 256)) {
                $invalidProperties[] = "invalid value for 'actionTag', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['actionTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['actionStartTime'] === null) {
            $invalidProperties[] = "'actionStartTime' can't be null";
        }
            if (($this->container['actionStartTime'] > 2.592E+6)) {
                $invalidProperties[] = "invalid value for 'actionStartTime', must be smaller than or equal to 2.592E+6.";
            }
            if (($this->container['actionStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'actionStartTime', must be bigger than or equal to 0.";
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
    * Gets actionTag
    *  动作标签
    *
    * @return string
    */
    public function getActionTag()
    {
        return $this->container['actionTag'];
    }

    /**
    * Sets actionTag
    *
    * @param string $actionTag 动作标签
    *
    * @return $this
    */
    public function setActionTag($actionTag)
    {
        $this->container['actionTag'] = $actionTag;
        return $this;
    }

    /**
    * Gets actionName
    *  动作名称
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName 动作名称
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets actionStartTime
    *  动作开始时间
    *
    * @return float
    */
    public function getActionStartTime()
    {
        return $this->container['actionStartTime'];
    }

    /**
    * Sets actionStartTime
    *
    * @param float $actionStartTime 动作开始时间
    *
    * @return $this
    */
    public function setActionStartTime($actionStartTime)
    {
        $this->container['actionStartTime'] = $actionStartTime;
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

