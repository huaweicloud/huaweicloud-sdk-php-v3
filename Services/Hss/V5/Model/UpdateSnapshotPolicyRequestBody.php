<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSnapshotPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSnapshotPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  服务器id
    * scheduledTaskStatus  是否开启定时快照 |-closed：关闭， -opened：开启
    * scheduledTaskTime  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'scheduledTaskStatus' => 'string',
            'scheduledTaskTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  服务器id
    * scheduledTaskStatus  是否开启定时快照 |-closed：关闭， -opened：开启
    * scheduledTaskTime  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'scheduledTaskStatus' => null,
        'scheduledTaskTime' => 'int32'
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
    * hostId  服务器id
    * scheduledTaskStatus  是否开启定时快照 |-closed：关闭， -opened：开启
    * scheduledTaskTime  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'scheduledTaskStatus' => 'scheduled_task_status',
            'scheduledTaskTime' => 'scheduled_task_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  服务器id
    * scheduledTaskStatus  是否开启定时快照 |-closed：关闭， -opened：开启
    * scheduledTaskTime  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'scheduledTaskStatus' => 'setScheduledTaskStatus',
            'scheduledTaskTime' => 'setScheduledTaskTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  服务器id
    * scheduledTaskStatus  是否开启定时快照 |-closed：关闭， -opened：开启
    * scheduledTaskTime  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'scheduledTaskStatus' => 'getScheduledTaskStatus',
            'scheduledTaskTime' => 'getScheduledTaskTime'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['scheduledTaskStatus'] = isset($data['scheduledTaskStatus']) ? $data['scheduledTaskStatus'] : null;
        $this->container['scheduledTaskTime'] = isset($data['scheduledTaskTime']) ? $data['scheduledTaskTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[\\w-]*$/.";
            }
        if ($this->container['scheduledTaskStatus'] === null) {
            $invalidProperties[] = "'scheduledTaskStatus' can't be null";
        }
            if (!preg_match("/^closed|opened$/", $this->container['scheduledTaskStatus'])) {
                $invalidProperties[] = "invalid value for 'scheduledTaskStatus', must be conform to the pattern /^closed|opened$/.";
            }
            if (!is_null($this->container['scheduledTaskTime']) && ($this->container['scheduledTaskTime'] > 23)) {
                $invalidProperties[] = "invalid value for 'scheduledTaskTime', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['scheduledTaskTime']) && ($this->container['scheduledTaskTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledTaskTime', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  服务器id
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId 服务器id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets scheduledTaskStatus
    *  是否开启定时快照 |-closed：关闭， -opened：开启
    *
    * @return string
    */
    public function getScheduledTaskStatus()
    {
        return $this->container['scheduledTaskStatus'];
    }

    /**
    * Sets scheduledTaskStatus
    *
    * @param string $scheduledTaskStatus 是否开启定时快照 |-closed：关闭， -opened：开启
    *
    * @return $this
    */
    public function setScheduledTaskStatus($scheduledTaskStatus)
    {
        $this->container['scheduledTaskStatus'] = $scheduledTaskStatus;
        return $this;
    }

    /**
    * Gets scheduledTaskTime
    *  主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @return int|null
    */
    public function getScheduledTaskTime()
    {
        return $this->container['scheduledTaskTime'];
    }

    /**
    * Sets scheduledTaskTime
    *
    * @param int|null $scheduledTaskTime 主机每天定时快照的时间，支持整点，0-23, 默认时间为零点。
    *
    * @return $this
    */
    public function setScheduledTaskTime($scheduledTaskTime)
    {
        $this->container['scheduledTaskTime'] = $scheduledTaskTime;
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

