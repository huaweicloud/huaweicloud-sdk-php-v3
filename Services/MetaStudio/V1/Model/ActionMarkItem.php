<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionMarkItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionMarkItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * actionEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    * actionType  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionStartTime' => 'string',
            'actionEndTime' => 'string',
            'actionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * actionEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    * actionType  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionStartTime' => null,
        'actionEndTime' => null,
        'actionType' => null
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
    * actionStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * actionEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    * actionType  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionStartTime' => 'action_start_time',
            'actionEndTime' => 'action_end_time',
            'actionType' => 'action_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * actionEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    * actionType  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @var string[]
    */
    protected static $setters = [
            'actionStartTime' => 'setActionStartTime',
            'actionEndTime' => 'setActionEndTime',
            'actionType' => 'setActionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * actionEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    * actionType  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @var string[]
    */
    protected static $getters = [
            'actionStartTime' => 'getActionStartTime',
            'actionEndTime' => 'getActionEndTime',
            'actionType' => 'getActionType'
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
    const ACTION_TYPE_SILENCE = 'SILENCE';
    const ACTION_TYPE_ACTION = 'ACTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_SILENCE,
            self::ACTION_TYPE_ACTION,
        ];
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
        $this->container['actionStartTime'] = isset($data['actionStartTime']) ? $data['actionStartTime'] : null;
        $this->container['actionEndTime'] = isset($data['actionEndTime']) ? $data['actionEndTime'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionStartTime']) && (mb_strlen($this->container['actionStartTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionStartTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['actionStartTime']) && (mb_strlen($this->container['actionStartTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionStartTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionEndTime']) && (mb_strlen($this->container['actionEndTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionEndTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['actionEndTime']) && (mb_strlen($this->container['actionEndTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionEndTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets actionStartTime
    *  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getActionStartTime()
    {
        return $this->container['actionStartTime'];
    }

    /**
    * Sets actionStartTime
    *
    * @param string|null $actionStartTime 选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setActionStartTime($actionStartTime)
    {
        $this->container['actionStartTime'] = $actionStartTime;
        return $this;
    }

    /**
    * Gets actionEndTime
    *  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getActionEndTime()
    {
        return $this->container['actionEndTime'];
    }

    /**
    * Sets actionEndTime
    *
    * @param string|null $actionEndTime 选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setActionEndTime($actionEndTime)
    {
        $this->container['actionEndTime'] = $actionEndTime;
        return $this;
    }

    /**
    * Gets actionType
    *  动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType 动作类型。 * SILENCE: 静默 * ACTION：动作
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
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

