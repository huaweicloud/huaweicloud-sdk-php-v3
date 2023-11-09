<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsLeagueAuditLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsLeagueAuditLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createUserDomainId  创建者账户id
    * createUserProjectId  创建者项目id
    * creatorAliasName  创建者别名
    * eventEndTime  事件结束时间
    * eventInfo  事件信息
    * eventStartTime  事件开始时间
    * eventStatus  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    * id  日志记录id
    * leagueId  联盟id
    * sponsorAgentName  作业发起节点名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createUserDomainId' => 'string',
            'createUserProjectId' => 'string',
            'creatorAliasName' => 'string',
            'eventEndTime' => '\DateTime',
            'eventInfo' => 'string',
            'eventStartTime' => '\DateTime',
            'eventStatus' => 'string',
            'id' => 'int',
            'leagueId' => 'string',
            'sponsorAgentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createUserDomainId  创建者账户id
    * createUserProjectId  创建者项目id
    * creatorAliasName  创建者别名
    * eventEndTime  事件结束时间
    * eventInfo  事件信息
    * eventStartTime  事件开始时间
    * eventStatus  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    * id  日志记录id
    * leagueId  联盟id
    * sponsorAgentName  作业发起节点名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createUserDomainId' => null,
        'createUserProjectId' => null,
        'creatorAliasName' => null,
        'eventEndTime' => 'date-time',
        'eventInfo' => null,
        'eventStartTime' => 'date-time',
        'eventStatus' => null,
        'id' => 'int64',
        'leagueId' => null,
        'sponsorAgentName' => null
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
    * createUserDomainId  创建者账户id
    * createUserProjectId  创建者项目id
    * creatorAliasName  创建者别名
    * eventEndTime  事件结束时间
    * eventInfo  事件信息
    * eventStartTime  事件开始时间
    * eventStatus  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    * id  日志记录id
    * leagueId  联盟id
    * sponsorAgentName  作业发起节点名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createUserDomainId' => 'create_user_domain_id',
            'createUserProjectId' => 'create_user_project_id',
            'creatorAliasName' => 'creator_alias_name',
            'eventEndTime' => 'event_end_time',
            'eventInfo' => 'event_info',
            'eventStartTime' => 'event_start_time',
            'eventStatus' => 'event_status',
            'id' => 'id',
            'leagueId' => 'league_id',
            'sponsorAgentName' => 'sponsor_agent_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createUserDomainId  创建者账户id
    * createUserProjectId  创建者项目id
    * creatorAliasName  创建者别名
    * eventEndTime  事件结束时间
    * eventInfo  事件信息
    * eventStartTime  事件开始时间
    * eventStatus  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    * id  日志记录id
    * leagueId  联盟id
    * sponsorAgentName  作业发起节点名称
    *
    * @var string[]
    */
    protected static $setters = [
            'createUserDomainId' => 'setCreateUserDomainId',
            'createUserProjectId' => 'setCreateUserProjectId',
            'creatorAliasName' => 'setCreatorAliasName',
            'eventEndTime' => 'setEventEndTime',
            'eventInfo' => 'setEventInfo',
            'eventStartTime' => 'setEventStartTime',
            'eventStatus' => 'setEventStatus',
            'id' => 'setId',
            'leagueId' => 'setLeagueId',
            'sponsorAgentName' => 'setSponsorAgentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createUserDomainId  创建者账户id
    * createUserProjectId  创建者项目id
    * creatorAliasName  创建者别名
    * eventEndTime  事件结束时间
    * eventInfo  事件信息
    * eventStartTime  事件开始时间
    * eventStatus  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    * id  日志记录id
    * leagueId  联盟id
    * sponsorAgentName  作业发起节点名称
    *
    * @var string[]
    */
    protected static $getters = [
            'createUserDomainId' => 'getCreateUserDomainId',
            'createUserProjectId' => 'getCreateUserProjectId',
            'creatorAliasName' => 'getCreatorAliasName',
            'eventEndTime' => 'getEventEndTime',
            'eventInfo' => 'getEventInfo',
            'eventStartTime' => 'getEventStartTime',
            'eventStatus' => 'getEventStatus',
            'id' => 'getId',
            'leagueId' => 'getLeagueId',
            'sponsorAgentName' => 'getSponsorAgentName'
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
    const EVENT_STATUS_ACCEPTED = 'ACCEPTED';
    const EVENT_STATUS_DEPLOYING = 'DEPLOYING';
    const EVENT_STATUS_FAILED = 'FAILED';
    const EVENT_STATUS__NEW = 'NEW';
    const EVENT_STATUS_PENDING = 'PENDING';
    const EVENT_STATUS_RUNNING = 'RUNNING';
    const EVENT_STATUS_SUBMITING = 'SUBMITING';
    const EVENT_STATUS_SUCCEEDED = 'SUCCEEDED';
    const EVENT_STATUS_TERMINATED = 'TERMINATED';
    const EVENT_STATUS_TERMINATING = 'TERMINATING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStatusAllowableValues()
    {
        return [
            self::EVENT_STATUS_ACCEPTED,
            self::EVENT_STATUS_DEPLOYING,
            self::EVENT_STATUS_FAILED,
            self::EVENT_STATUS__NEW,
            self::EVENT_STATUS_PENDING,
            self::EVENT_STATUS_RUNNING,
            self::EVENT_STATUS_SUBMITING,
            self::EVENT_STATUS_SUCCEEDED,
            self::EVENT_STATUS_TERMINATED,
            self::EVENT_STATUS_TERMINATING,
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
        $this->container['createUserDomainId'] = isset($data['createUserDomainId']) ? $data['createUserDomainId'] : null;
        $this->container['createUserProjectId'] = isset($data['createUserProjectId']) ? $data['createUserProjectId'] : null;
        $this->container['creatorAliasName'] = isset($data['creatorAliasName']) ? $data['creatorAliasName'] : null;
        $this->container['eventEndTime'] = isset($data['eventEndTime']) ? $data['eventEndTime'] : null;
        $this->container['eventInfo'] = isset($data['eventInfo']) ? $data['eventInfo'] : null;
        $this->container['eventStartTime'] = isset($data['eventStartTime']) ? $data['eventStartTime'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['sponsorAgentName'] = isset($data['sponsorAgentName']) ? $data['sponsorAgentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventStatusAllowableValues();
                if (!is_null($this->container['eventStatus']) && !in_array($this->container['eventStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventStatus', must be one of '%s'",
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
    * Gets createUserDomainId
    *  创建者账户id
    *
    * @return string|null
    */
    public function getCreateUserDomainId()
    {
        return $this->container['createUserDomainId'];
    }

    /**
    * Sets createUserDomainId
    *
    * @param string|null $createUserDomainId 创建者账户id
    *
    * @return $this
    */
    public function setCreateUserDomainId($createUserDomainId)
    {
        $this->container['createUserDomainId'] = $createUserDomainId;
        return $this;
    }

    /**
    * Gets createUserProjectId
    *  创建者项目id
    *
    * @return string|null
    */
    public function getCreateUserProjectId()
    {
        return $this->container['createUserProjectId'];
    }

    /**
    * Sets createUserProjectId
    *
    * @param string|null $createUserProjectId 创建者项目id
    *
    * @return $this
    */
    public function setCreateUserProjectId($createUserProjectId)
    {
        $this->container['createUserProjectId'] = $createUserProjectId;
        return $this;
    }

    /**
    * Gets creatorAliasName
    *  创建者别名
    *
    * @return string|null
    */
    public function getCreatorAliasName()
    {
        return $this->container['creatorAliasName'];
    }

    /**
    * Sets creatorAliasName
    *
    * @param string|null $creatorAliasName 创建者别名
    *
    * @return $this
    */
    public function setCreatorAliasName($creatorAliasName)
    {
        $this->container['creatorAliasName'] = $creatorAliasName;
        return $this;
    }

    /**
    * Gets eventEndTime
    *  事件结束时间
    *
    * @return \DateTime|null
    */
    public function getEventEndTime()
    {
        return $this->container['eventEndTime'];
    }

    /**
    * Sets eventEndTime
    *
    * @param \DateTime|null $eventEndTime 事件结束时间
    *
    * @return $this
    */
    public function setEventEndTime($eventEndTime)
    {
        $this->container['eventEndTime'] = $eventEndTime;
        return $this;
    }

    /**
    * Gets eventInfo
    *  事件信息
    *
    * @return string|null
    */
    public function getEventInfo()
    {
        return $this->container['eventInfo'];
    }

    /**
    * Sets eventInfo
    *
    * @param string|null $eventInfo 事件信息
    *
    * @return $this
    */
    public function setEventInfo($eventInfo)
    {
        $this->container['eventInfo'] = $eventInfo;
        return $this;
    }

    /**
    * Gets eventStartTime
    *  事件开始时间
    *
    * @return \DateTime|null
    */
    public function getEventStartTime()
    {
        return $this->container['eventStartTime'];
    }

    /**
    * Sets eventStartTime
    *
    * @param \DateTime|null $eventStartTime 事件开始时间
    *
    * @return $this
    */
    public function setEventStartTime($eventStartTime)
    {
        $this->container['eventStartTime'] = $eventStartTime;
        return $this;
    }

    /**
    * Gets eventStatus
    *  事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @return string|null
    */
    public function getEventStatus()
    {
        return $this->container['eventStatus'];
    }

    /**
    * Sets eventStatus
    *
    * @param string|null $eventStatus 事件状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @return $this
    */
    public function setEventStatus($eventStatus)
    {
        $this->container['eventStatus'] = $eventStatus;
        return $this;
    }

    /**
    * Gets id
    *  日志记录id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 日志记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟id
    *
    * @return string|null
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string|null $leagueId 联盟id
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets sponsorAgentName
    *  作业发起节点名称
    *
    * @return string|null
    */
    public function getSponsorAgentName()
    {
        return $this->container['sponsorAgentName'];
    }

    /**
    * Sets sponsorAgentName
    *
    * @param string|null $sponsorAgentName 作业发起节点名称
    *
    * @return $this
    */
    public function setSponsorAgentName($sponsorAgentName)
    {
        $this->container['sponsorAgentName'] = $sponsorAgentName;
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

