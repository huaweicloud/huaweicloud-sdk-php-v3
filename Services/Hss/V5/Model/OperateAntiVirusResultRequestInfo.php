<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateAntiVirusResultRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateAntiVirusResultRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateResults  处置的结果列表
    * eventWhiteRules  新增告警白名单规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'memo' => 'string',
            'operateResults' => '\HuaweiCloud\SDK\Hss\V5\Model\OperateResultRequestInfo[]',
            'eventWhiteRules' => '\HuaweiCloud\SDK\Hss\V5\Model\AntiVirusEventWhiteRuleListRequestInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateResults  处置的结果列表
    * eventWhiteRules  新增告警白名单规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'memo' => null,
        'operateResults' => null,
        'eventWhiteRules' => null
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
    * operateType  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateResults  处置的结果列表
    * eventWhiteRules  新增告警白名单规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'memo' => 'memo',
            'operateResults' => 'operate_results',
            'eventWhiteRules' => 'event_white_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateResults  处置的结果列表
    * eventWhiteRules  新增告警白名单规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'memo' => 'setMemo',
            'operateResults' => 'setOperateResults',
            'eventWhiteRules' => 'setEventWhiteRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateResults  处置的结果列表
    * eventWhiteRules  新增告警白名单规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'memo' => 'getMemo',
            'operateResults' => 'getOperateResults',
            'eventWhiteRules' => 'getEventWhiteRules'
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
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['operateResults'] = isset($data['operateResults']) ? $data['operateResults'] : null;
        $this->container['eventWhiteRules'] = isset($data['eventWhiteRules']) ? $data['eventWhiteRules'] : null;
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
            if ((mb_strlen($this->container['operateType']) > 128)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['operateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memo']) && !preg_match("/^.*$/", $this->container['memo'])) {
                $invalidProperties[] = "invalid value for 'memo', must be conform to the pattern /^.*$/.";
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
    *  处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
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
    * @param string $operateType 处理方式，包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - manual_isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets memo
    *  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo **参数解释** 备注信息 **取值范围** 字符长度0-512位
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets operateResults
    *  处置的结果列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OperateResultRequestInfo[]|null
    */
    public function getOperateResults()
    {
        return $this->container['operateResults'];
    }

    /**
    * Sets operateResults
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OperateResultRequestInfo[]|null $operateResults 处置的结果列表
    *
    * @return $this
    */
    public function setOperateResults($operateResults)
    {
        $this->container['operateResults'] = $operateResults;
        return $this;
    }

    /**
    * Gets eventWhiteRules
    *  新增告警白名单规则列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AntiVirusEventWhiteRuleListRequestInfo[]|null
    */
    public function getEventWhiteRules()
    {
        return $this->container['eventWhiteRules'];
    }

    /**
    * Sets eventWhiteRules
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AntiVirusEventWhiteRuleListRequestInfo[]|null $eventWhiteRules 新增告警白名单规则列表
    *
    * @return $this
    */
    public function setEventWhiteRules($eventWhiteRules)
    {
        $this->container['eventWhiteRules'] = $eventWhiteRules;
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

