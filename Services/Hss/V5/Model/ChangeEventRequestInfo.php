<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeEventRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeEventRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    * handler  备注信息，已处理的告警才有
    * operateEventList  操作的事件列表
    * eventWhiteRuleList  用户自定义告警白名单规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'handler' => 'string',
            'operateEventList' => '\HuaweiCloud\SDK\Hss\V5\Model\OperateEventRequestInfo[]',
            'eventWhiteRuleList' => '\HuaweiCloud\SDK\Hss\V5\Model\EventWhiteRuleListRequestInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    * handler  备注信息，已处理的告警才有
    * operateEventList  操作的事件列表
    * eventWhiteRuleList  用户自定义告警白名单规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'handler' => null,
        'operateEventList' => null,
        'eventWhiteRuleList' => null
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
    * operateType  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    * handler  备注信息，已处理的告警才有
    * operateEventList  操作的事件列表
    * eventWhiteRuleList  用户自定义告警白名单规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'handler' => 'handler',
            'operateEventList' => 'operate_event_list',
            'eventWhiteRuleList' => 'event_white_rule_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    * handler  备注信息，已处理的告警才有
    * operateEventList  操作的事件列表
    * eventWhiteRuleList  用户自定义告警白名单规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'handler' => 'setHandler',
            'operateEventList' => 'setOperateEventList',
            'eventWhiteRuleList' => 'setEventWhiteRuleList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    * handler  备注信息，已处理的告警才有
    * operateEventList  操作的事件列表
    * eventWhiteRuleList  用户自定义告警白名单规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'handler' => 'getHandler',
            'operateEventList' => 'getOperateEventList',
            'eventWhiteRuleList' => 'getEventWhiteRuleList'
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
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['operateEventList'] = isset($data['operateEventList']) ? $data['operateEventList'] : null;
        $this->container['eventWhiteRuleList'] = isset($data['eventWhiteRuleList']) ? $data['eventWhiteRuleList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            if (!is_null($this->container['handler']) && !preg_match("/^.*$/", $this->container['handler'])) {
                $invalidProperties[] = "invalid value for 'handler', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['operateEventList'] === null) {
            $invalidProperties[] = "'operateEventList' can't be null";
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
    * Gets operateType
    *  处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 处理方式，包含如下:   - mark_as_handled : 手动处理   - ignore : 忽略   - add_to_alarm_whitelist : 加入告警白名单   - add_to_login_whitelist : 加入登录白名单   - isolate_and_kill : 隔离查杀   - unhandle : 取消手动处理   - do_not_ignore : 取消忽略   - remove_from_alarm_whitelist : 删除告警白名单   - remove_from_login_whitelist : 删除登录白名单   - do_not_isolate_or_kill : 取消隔离查杀
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets handler
    *  备注信息，已处理的告警才有
    *
    * @return string|null
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string|null $handler 备注信息，已处理的告警才有
    *
    * @return $this
    */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;
        return $this;
    }

    /**
    * Gets operateEventList
    *  操作的事件列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OperateEventRequestInfo[]
    */
    public function getOperateEventList()
    {
        return $this->container['operateEventList'];
    }

    /**
    * Sets operateEventList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OperateEventRequestInfo[] $operateEventList 操作的事件列表
    *
    * @return $this
    */
    public function setOperateEventList($operateEventList)
    {
        $this->container['operateEventList'] = $operateEventList;
        return $this;
    }

    /**
    * Gets eventWhiteRuleList
    *  用户自定义告警白名单规则列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventWhiteRuleListRequestInfo[]|null
    */
    public function getEventWhiteRuleList()
    {
        return $this->container['eventWhiteRuleList'];
    }

    /**
    * Sets eventWhiteRuleList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventWhiteRuleListRequestInfo[]|null $eventWhiteRuleList 用户自定义告警白名单规则列表
    *
    * @return $this
    */
    public function setEventWhiteRuleList($eventWhiteRuleList)
    {
        $this->container['eventWhiteRuleList'] = $eventWhiteRuleList;
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

