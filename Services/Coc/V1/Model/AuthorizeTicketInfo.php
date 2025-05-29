<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizeTicketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizeTicketInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  关联单号
    * targetId  目标 ID，一般为应用id
    * scopeId  scope ID，一般为region id
    * title  工单名称
    * ticketType  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    * owner  当前责任人
    * level  级别
    * status  状态，取值：open/close
    * beginTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'targetId' => 'string',
            'scopeId' => 'string',
            'title' => 'string',
            'ticketType' => 'string',
            'owner' => 'string[]',
            'level' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  关联单号
    * targetId  目标 ID，一般为应用id
    * scopeId  scope ID，一般为region id
    * title  工单名称
    * ticketType  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    * owner  当前责任人
    * level  级别
    * status  状态，取值：open/close
    * beginTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'targetId' => null,
        'scopeId' => null,
        'title' => null,
        'ticketType' => null,
        'owner' => null,
        'level' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null
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
    * ticketId  关联单号
    * targetId  目标 ID，一般为应用id
    * scopeId  scope ID，一般为region id
    * title  工单名称
    * ticketType  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    * owner  当前责任人
    * level  级别
    * status  状态，取值：open/close
    * beginTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'targetId' => 'target_id',
            'scopeId' => 'scope_id',
            'title' => 'title',
            'ticketType' => 'ticket_type',
            'owner' => 'owner',
            'level' => 'level',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  关联单号
    * targetId  目标 ID，一般为应用id
    * scopeId  scope ID，一般为region id
    * title  工单名称
    * ticketType  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    * owner  当前责任人
    * level  级别
    * status  状态，取值：open/close
    * beginTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'targetId' => 'setTargetId',
            'scopeId' => 'setScopeId',
            'title' => 'setTitle',
            'ticketType' => 'setTicketType',
            'owner' => 'setOwner',
            'level' => 'setLevel',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  关联单号
    * targetId  目标 ID，一般为应用id
    * scopeId  scope ID，一般为region id
    * title  工单名称
    * ticketType  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    * owner  当前责任人
    * level  级别
    * status  状态，取值：open/close
    * beginTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'targetId' => 'getTargetId',
            'scopeId' => 'getScopeId',
            'title' => 'getTitle',
            'ticketType' => 'getTicketType',
            'owner' => 'getOwner',
            'level' => 'getLevel',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
    const TICKET_TYPE_CHANGE = 'CHANGE';
    const TICKET_TYPE_INCIDENT = 'INCIDENT';
    const TICKET_TYPE_WAR_ROOM = 'WAR_ROOM';
    const TICKET_TYPE_ALARM = 'ALARM';
    const STATUS_OPEN = 'open';
    const STATUS_CLOSE = 'close';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTicketTypeAllowableValues()
    {
        return [
            self::TICKET_TYPE_CHANGE,
            self::TICKET_TYPE_INCIDENT,
            self::TICKET_TYPE_WAR_ROOM,
            self::TICKET_TYPE_ALARM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSE,
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
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) > 255)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTicketTypeAllowableValues();
                if (!is_null($this->container['ticketType']) && !in_array($this->container['ticketType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ticketType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 255)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 255)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 255)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
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
    * Gets ticketId
    *  关联单号
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 关联单号
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets targetId
    *  目标 ID，一般为应用id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 目标 ID，一般为应用id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets scopeId
    *  scope ID，一般为region id
    *
    * @return string|null
    */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
    * Sets scopeId
    *
    * @param string|null $scopeId scope ID，一般为region id
    *
    * @return $this
    */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;
        return $this;
    }

    /**
    * Gets title
    *  工单名称
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 工单名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets ticketType
    *  授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    *
    * @return string|null
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string|null $ticketType 授权单类型，取值：CHANGE/INCIDENT/WAR_ROOM/ALARM
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets owner
    *  当前责任人
    *
    * @return string[]|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string[]|null $owner 当前责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets level
    *  级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets status
    *  状态，取值：open/close
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态，取值：open/close
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  起始时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 起始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

