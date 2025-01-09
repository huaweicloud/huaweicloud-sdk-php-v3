<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleCommand';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  直播间ID
    * jobId  直播任务ID。
    * commandId  命令ID。
    * commandTime  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * interactionRules  互动规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'jobId' => 'string',
            'commandId' => 'string',
            'commandTime' => 'string',
            'interactionRules' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  直播间ID
    * jobId  直播任务ID。
    * commandId  命令ID。
    * commandTime  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * interactionRules  互动规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'jobId' => null,
        'commandId' => null,
        'commandTime' => null,
        'interactionRules' => null
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
    * roomId  直播间ID
    * jobId  直播任务ID。
    * commandId  命令ID。
    * commandTime  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * interactionRules  互动规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'jobId' => 'job_id',
            'commandId' => 'command_id',
            'commandTime' => 'command_time',
            'interactionRules' => 'interaction_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  直播间ID
    * jobId  直播任务ID。
    * commandId  命令ID。
    * commandTime  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * interactionRules  互动规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'jobId' => 'setJobId',
            'commandId' => 'setCommandId',
            'commandTime' => 'setCommandTime',
            'interactionRules' => 'setInteractionRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  直播间ID
    * jobId  直播任务ID。
    * commandId  命令ID。
    * commandTime  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * interactionRules  互动规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'jobId' => 'getJobId',
            'commandId' => 'getCommandId',
            'commandTime' => 'getCommandTime',
            'interactionRules' => 'getInteractionRules'
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['commandId'] = isset($data['commandId']) ? $data['commandId'] : null;
        $this->container['commandTime'] = isset($data['commandTime']) ? $data['commandTime'] : null;
        $this->container['interactionRules'] = isset($data['interactionRules']) ? $data['interactionRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commandId']) && (mb_strlen($this->container['commandId']) > 64)) {
                $invalidProperties[] = "invalid value for 'commandId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commandId']) && (mb_strlen($this->container['commandId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commandId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commandTime']) && (mb_strlen($this->container['commandTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'commandTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['commandTime']) && (mb_strlen($this->container['commandTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'commandTime', the character length must be bigger than or equal to 20.";
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
    * Gets roomId
    *  直播间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 直播间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets jobId
    *  直播任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 直播任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets commandId
    *  命令ID。
    *
    * @return string|null
    */
    public function getCommandId()
    {
        return $this->container['commandId'];
    }

    /**
    * Sets commandId
    *
    * @param string|null $commandId 命令ID。
    *
    * @return $this
    */
    public function setCommandId($commandId)
    {
        $this->container['commandId'] = $commandId;
        return $this;
    }

    /**
    * Gets commandTime
    *  命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCommandTime()
    {
        return $this->container['commandTime'];
    }

    /**
    * Sets commandTime
    *
    * @param string|null $commandTime 命令时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCommandTime($commandTime)
    {
        $this->container['commandTime'] = $commandTime;
        return $this;
    }

    /**
    * Gets interactionRules
    *  互动规则列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]|null
    */
    public function getInteractionRules()
    {
        return $this->container['interactionRules'];
    }

    /**
    * Sets interactionRules
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]|null $interactionRules 互动规则列表
    *
    * @return $this
    */
    public function setInteractionRules($interactionRules)
    {
        $this->container['interactionRules'] = $interactionRules;
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

