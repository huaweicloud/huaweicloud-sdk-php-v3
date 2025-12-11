<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntiVirusResultResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntiVirusResultResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * malwareType  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    * malwareName  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * fileInfo  fileInfo
    * resourceInfo  resourceInfo
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateAcceptList  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    * operateDetailList  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    * isolateTag  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultId' => 'string',
            'malwareType' => 'string',
            'malwareName' => 'string',
            'severity' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'fileInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ResultFileResponseInfo',
            'resourceInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ResultResourceResponseInfo',
            'eventType' => 'int',
            'occurTime' => 'int',
            'handleStatus' => 'string',
            'handleMethod' => 'string',
            'memo' => 'string',
            'operateAcceptList' => 'string[]',
            'operateDetailList' => '\HuaweiCloud\SDK\Hss\V5\Model\ResultDetailResponseInfo[]',
            'isolateTag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * malwareType  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    * malwareName  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * fileInfo  fileInfo
    * resourceInfo  resourceInfo
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateAcceptList  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    * operateDetailList  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    * isolateTag  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultId' => null,
        'malwareType' => null,
        'malwareName' => null,
        'severity' => null,
        'taskId' => null,
        'taskName' => null,
        'fileInfo' => null,
        'resourceInfo' => null,
        'eventType' => 'int32',
        'occurTime' => 'int64',
        'handleStatus' => null,
        'handleMethod' => null,
        'memo' => null,
        'operateAcceptList' => null,
        'operateDetailList' => null,
        'isolateTag' => null
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
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * malwareType  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    * malwareName  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * fileInfo  fileInfo
    * resourceInfo  resourceInfo
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateAcceptList  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    * operateDetailList  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    * isolateTag  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultId' => 'result_id',
            'malwareType' => 'malware_type',
            'malwareName' => 'malware_name',
            'severity' => 'severity',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'fileInfo' => 'file_info',
            'resourceInfo' => 'resource_info',
            'eventType' => 'event_type',
            'occurTime' => 'occur_time',
            'handleStatus' => 'handle_status',
            'handleMethod' => 'handle_method',
            'memo' => 'memo',
            'operateAcceptList' => 'operate_accept_list',
            'operateDetailList' => 'operate_detail_list',
            'isolateTag' => 'isolate_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * malwareType  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    * malwareName  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * fileInfo  fileInfo
    * resourceInfo  resourceInfo
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateAcceptList  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    * operateDetailList  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    * isolateTag  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @var string[]
    */
    protected static $setters = [
            'resultId' => 'setResultId',
            'malwareType' => 'setMalwareType',
            'malwareName' => 'setMalwareName',
            'severity' => 'setSeverity',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'fileInfo' => 'setFileInfo',
            'resourceInfo' => 'setResourceInfo',
            'eventType' => 'setEventType',
            'occurTime' => 'setOccurTime',
            'handleStatus' => 'setHandleStatus',
            'handleMethod' => 'setHandleMethod',
            'memo' => 'setMemo',
            'operateAcceptList' => 'setOperateAcceptList',
            'operateDetailList' => 'setOperateDetailList',
            'isolateTag' => 'setIsolateTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * malwareType  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    * malwareName  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * fileInfo  fileInfo
    * resourceInfo  resourceInfo
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    * memo  **参数解释** 备注信息 **取值范围** 字符长度0-512位
    * operateAcceptList  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    * operateDetailList  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    * isolateTag  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @var string[]
    */
    protected static $getters = [
            'resultId' => 'getResultId',
            'malwareType' => 'getMalwareType',
            'malwareName' => 'getMalwareName',
            'severity' => 'getSeverity',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'fileInfo' => 'getFileInfo',
            'resourceInfo' => 'getResourceInfo',
            'eventType' => 'getEventType',
            'occurTime' => 'getOccurTime',
            'handleStatus' => 'getHandleStatus',
            'handleMethod' => 'getHandleMethod',
            'memo' => 'getMemo',
            'operateAcceptList' => 'getOperateAcceptList',
            'operateDetailList' => 'getOperateDetailList',
            'isolateTag' => 'getIsolateTag'
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
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['malwareType'] = isset($data['malwareType']) ? $data['malwareType'] : null;
        $this->container['malwareName'] = isset($data['malwareName']) ? $data['malwareName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['resourceInfo'] = isset($data['resourceInfo']) ? $data['resourceInfo'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['handleMethod'] = isset($data['handleMethod']) ? $data['handleMethod'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['operateAcceptList'] = isset($data['operateAcceptList']) ? $data['operateAcceptList'] : null;
        $this->container['operateDetailList'] = isset($data['operateDetailList']) ? $data['operateDetailList'] : null;
        $this->container['isolateTag'] = isset($data['isolateTag']) ? $data['isolateTag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultId']) && !preg_match("/^.*$/", $this->container['resultId'])) {
                $invalidProperties[] = "invalid value for 'resultId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['malwareType']) && !preg_match("/^.*$/", $this->container['malwareType'])) {
                $invalidProperties[] = "invalid value for 'malwareType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['malwareName']) && !preg_match("/^.*$/", $this->container['malwareName'])) {
                $invalidProperties[] = "invalid value for 'malwareName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && !preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 6000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 6000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memo']) && !preg_match("/^.*$/", $this->container['memo'])) {
                $invalidProperties[] = "invalid value for 'memo', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['isolateTag']) && (mb_strlen($this->container['isolateTag']) > 128)) {
                $invalidProperties[] = "invalid value for 'isolateTag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['isolateTag']) && (mb_strlen($this->container['isolateTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'isolateTag', the character length must be bigger than or equal to 1.";
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
    * Gets resultId
    *  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets malwareType
    *  **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    *
    * @return string|null
    */
    public function getMalwareType()
    {
        return $this->container['malwareType'];
    }

    /**
    * Sets malwareType
    *
    * @param string|null $malwareType **参数解释**： 病毒类型 **取值范围**： Trojan（木马）、Virus（病毒）、Worm（蠕虫）等
    *
    * @return $this
    */
    public function setMalwareType($malwareType)
    {
        $this->container['malwareType'] = $malwareType;
        return $this;
    }

    /**
    * Gets malwareName
    *  **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getMalwareName()
    {
        return $this->container['malwareName'];
    }

    /**
    * Sets malwareName
    *
    * @param string|null $malwareName **参数解释**： 病毒名称 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setMalwareName($malwareName)
    {
        $this->container['malwareName'] = $malwareName;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**: 威胁等级 **取值范围**: 包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets fileInfo
    *  fileInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ResultFileResponseInfo|null
    */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /**
    * Sets fileInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ResultFileResponseInfo|null $fileInfo fileInfo
    *
    * @return $this
    */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;
        return $this;
    }

    /**
    * Gets resourceInfo
    *  resourceInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ResultResourceResponseInfo|null
    */
    public function getResourceInfo()
    {
        return $this->container['resourceInfo'];
    }

    /**
    * Sets resourceInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ResultResourceResponseInfo|null $resourceInfo resourceInfo
    *
    * @return $this
    */
    public function setResourceInfo($resourceInfo)
    {
        $this->container['resourceInfo'] = $resourceInfo;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets handleMethod
    *  **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    *
    * @return string|null
    */
    public function getHandleMethod()
    {
        return $this->container['handleMethod'];
    }

    /**
    * Sets handleMethod
    *
    * @param string|null $handleMethod **参数解释**: 处理方式 **取值范围**: 包含如下:   - mark_as_handled：手动处理   - ignore：忽略   - add_to_alarm_whitelist：加入告警白名单   - isolate_and_kill：隔离文件   - unhandle：取消手动处理   - do_not_ignore：取消忽略   - remove_from_alarm_whitelist：删除告警白名单   - do_not_isolate_or_kill：取消隔离文件
    *
    * @return $this
    */
    public function setHandleMethod($handleMethod)
    {
        $this->container['handleMethod'] = $handleMethod;
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
    * Gets operateAcceptList
    *  **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    *
    * @return string[]|null
    */
    public function getOperateAcceptList()
    {
        return $this->container['operateAcceptList'];
    }

    /**
    * Sets operateAcceptList
    *
    * @param string[]|null $operateAcceptList **参数解释**: 后续处置操作列表 **取值范围**: 数组元素为处置操作枚举字符串（如“isolate_and_kill”“ignore”等），数组长度0-4（具体支持操作因结果状态而异）
    *
    * @return $this
    */
    public function setOperateAcceptList($operateAcceptList)
    {
        $this->container['operateAcceptList'] = $operateAcceptList;
        return $this;
    }

    /**
    * Gets operateDetailList
    *  **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ResultDetailResponseInfo[]|null
    */
    public function getOperateDetailList()
    {
        return $this->container['operateDetailList'];
    }

    /**
    * Sets operateDetailList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ResultDetailResponseInfo[]|null $operateDetailList **参数解释**: 操作详情信息列表（页面不展示） **取值范围**: 数组长度0-100
    *
    * @return $this
    */
    public function setOperateDetailList($operateDetailList)
    {
        $this->container['operateDetailList'] = $operateDetailList;
        return $this;
    }

    /**
    * Gets isolateTag
    *  **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @return string|null
    */
    public function getIsolateTag()
    {
        return $this->container['isolateTag'];
    }

    /**
    * Sets isolateTag
    *
    * @param string|null $isolateTag **参数解释**: 自动隔离查杀标识 **取值范围**: 字符长度1-16位，枚举值为“auto_isolate”（自动隔离）、“manual”（手动操作）、“none”（未隔离）
    *
    * @return $this
    */
    public function setIsolateTag($isolateTag)
    {
        $this->container['isolateTag'] = $isolateTag;
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

