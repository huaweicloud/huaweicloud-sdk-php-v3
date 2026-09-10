<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledEventsResponseBodyScheduledEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledEventsResponseBody_scheduled_events';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  计划事件唯一标识，不超过36个字节
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * serverState  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * type  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    * authorizationType  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    * state  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  计划执行开始时间
    * notAfter  计划执行完成时间
    * notBeforeDeadline  计划执行开始时间deadline
    * description  计划事件描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'string',
            'serverId' => 'string',
            'serverName' => 'string',
            'serverModelName' => 'string',
            'serverState' => 'int',
            'type' => 'string',
            'authorizationType' => 'string',
            'state' => 'string',
            'publishTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'notBefore' => 'string',
            'notAfter' => 'string',
            'notBeforeDeadline' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  计划事件唯一标识，不超过36个字节
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * serverState  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * type  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    * authorizationType  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    * state  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  计划执行开始时间
    * notAfter  计划执行完成时间
    * notBeforeDeadline  计划执行开始时间deadline
    * description  计划事件描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => null,
        'serverId' => null,
        'serverName' => null,
        'serverModelName' => null,
        'serverState' => 'int32',
        'type' => null,
        'authorizationType' => null,
        'state' => null,
        'publishTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'notBefore' => null,
        'notAfter' => null,
        'notBeforeDeadline' => null,
        'description' => null
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
    * eventId  计划事件唯一标识，不超过36个字节
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * serverState  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * type  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    * authorizationType  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    * state  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  计划执行开始时间
    * notAfter  计划执行完成时间
    * notBeforeDeadline  计划执行开始时间deadline
    * description  计划事件描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'event_id',
            'serverId' => 'server_id',
            'serverName' => 'server_name',
            'serverModelName' => 'server_model_name',
            'serverState' => 'server_state',
            'type' => 'type',
            'authorizationType' => 'authorization_type',
            'state' => 'state',
            'publishTime' => 'publish_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'notBefore' => 'not_before',
            'notAfter' => 'not_after',
            'notBeforeDeadline' => 'not_before_deadline',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  计划事件唯一标识，不超过36个字节
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * serverState  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * type  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    * authorizationType  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    * state  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  计划执行开始时间
    * notAfter  计划执行完成时间
    * notBeforeDeadline  计划执行开始时间deadline
    * description  计划事件描述
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'serverId' => 'setServerId',
            'serverName' => 'setServerName',
            'serverModelName' => 'setServerModelName',
            'serverState' => 'setServerState',
            'type' => 'setType',
            'authorizationType' => 'setAuthorizationType',
            'state' => 'setState',
            'publishTime' => 'setPublishTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'notBefore' => 'setNotBefore',
            'notAfter' => 'setNotAfter',
            'notBeforeDeadline' => 'setNotBeforeDeadline',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  计划事件唯一标识，不超过36个字节
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * serverState  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * type  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    * authorizationType  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    * state  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  计划执行开始时间
    * notAfter  计划执行完成时间
    * notBeforeDeadline  计划执行开始时间deadline
    * description  计划事件描述
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'serverId' => 'getServerId',
            'serverName' => 'getServerName',
            'serverModelName' => 'getServerModelName',
            'serverState' => 'getServerState',
            'type' => 'getType',
            'authorizationType' => 'getAuthorizationType',
            'state' => 'getState',
            'publishTime' => 'getPublishTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'notBefore' => 'getNotBefore',
            'notAfter' => 'getNotAfter',
            'notBeforeDeadline' => 'getNotBeforeDeadline',
            'description' => 'getDescription'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['serverState'] = isset($data['serverState']) ? $data['serverState'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['authorizationType'] = isset($data['authorizationType']) ? $data['authorizationType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['notBeforeDeadline'] = isset($data['notBeforeDeadline']) ? $data['notBeforeDeadline'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets eventId
    *  计划事件唯一标识，不超过36个字节
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId 计划事件唯一标识，不超过36个字节
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器的唯一标识，不超过32个字节。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器的唯一标识，不超过32个字节。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverName
    *  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName 云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverModelName
    *  云手机服务器规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string|null $serverModelName 云手机服务器规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets serverState
    *  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @return int|null
    */
    public function getServerState()
    {
        return $this->container['serverState'];
    }

    /**
    * Sets serverState
    *
    * @param int|null $serverState 服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @return $this
    */
    public function setServerState($serverState)
    {
        $this->container['serverState'] = $serverState;
        return $this;
    }

    /**
    * Gets type
    *  计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 计划事件类型，取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets authorizationType
    *  授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    *
    * @return string|null
    */
    public function getAuthorizationType()
    {
        return $this->container['authorizationType'];
    }

    /**
    * Sets authorizationType
    *
    * @param string|null $authorizationType 授权类型，取值范围：maintenance：授权维修、redeploy：授权重部署
    *
    * @return $this
    */
    public function setAuthorizationType($authorizationType)
    {
        $this->container['authorizationType'] = $authorizationType;
        return $this;
    }

    /**
    * Gets state
    *  计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 计划事件状态， 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets publishTime
    *  事件发布时间
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime 事件发布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets startTime
    *  事件开始时间
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
    * @param string|null $startTime 事件开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  事件完成时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 事件完成时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets notBefore
    *  计划执行开始时间
    *
    * @return string|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string|null $notBefore 计划执行开始时间
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets notAfter
    *  计划执行完成时间
    *
    * @return string|null
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param string|null $notAfter 计划执行完成时间
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets notBeforeDeadline
    *  计划执行开始时间deadline
    *
    * @return string|null
    */
    public function getNotBeforeDeadline()
    {
        return $this->container['notBeforeDeadline'];
    }

    /**
    * Sets notBeforeDeadline
    *
    * @param string|null $notBeforeDeadline 计划执行开始时间deadline
    *
    * @return $this
    */
    public function setNotBeforeDeadline($notBeforeDeadline)
    {
        $this->container['notBeforeDeadline'] = $notBeforeDeadline;
        return $this;
    }

    /**
    * Gets description
    *  计划事件描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 计划事件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

