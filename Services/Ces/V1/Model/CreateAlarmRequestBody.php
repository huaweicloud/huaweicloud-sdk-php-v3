<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlarmRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlarmRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    * alarmLevel  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * insufficientdataActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * okActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * enterpriseProjectId  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    * alarmActionBeginTime  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * alarmActionEndTime  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmMetric',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\Condition',
            'alarmEnabled' => 'bool',
            'alarmActionEnabled' => 'bool',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[]',
            'enterpriseProjectId' => 'string',
            'alarmActionBeginTime' => 'string',
            'alarmActionEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    * alarmLevel  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * insufficientdataActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * okActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * enterpriseProjectId  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    * alarmActionBeginTime  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * alarmActionEndTime  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmName' => null,
        'alarmDescription' => null,
        'metric' => null,
        'condition' => null,
        'alarmEnabled' => null,
        'alarmActionEnabled' => null,
        'alarmLevel' => 'int32',
        'alarmType' => null,
        'alarmActions' => null,
        'insufficientdataActions' => null,
        'okActions' => null,
        'enterpriseProjectId' => null,
        'alarmActionBeginTime' => null,
        'alarmActionEndTime' => null
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
    * alarmName  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    * alarmLevel  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * insufficientdataActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * okActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * enterpriseProjectId  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    * alarmActionBeginTime  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * alarmActionEndTime  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmName' => 'alarm_name',
            'alarmDescription' => 'alarm_description',
            'metric' => 'metric',
            'condition' => 'condition',
            'alarmEnabled' => 'alarm_enabled',
            'alarmActionEnabled' => 'alarm_action_enabled',
            'alarmLevel' => 'alarm_level',
            'alarmType' => 'alarm_type',
            'alarmActions' => 'alarm_actions',
            'insufficientdataActions' => 'insufficientdata_actions',
            'okActions' => 'ok_actions',
            'enterpriseProjectId' => 'enterprise_project_id',
            'alarmActionBeginTime' => 'alarm_action_begin_time',
            'alarmActionEndTime' => 'alarm_action_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmName  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    * alarmLevel  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * insufficientdataActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * okActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * enterpriseProjectId  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    * alarmActionBeginTime  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * alarmActionEndTime  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmName' => 'setAlarmName',
            'alarmDescription' => 'setAlarmDescription',
            'metric' => 'setMetric',
            'condition' => 'setCondition',
            'alarmEnabled' => 'setAlarmEnabled',
            'alarmActionEnabled' => 'setAlarmActionEnabled',
            'alarmLevel' => 'setAlarmLevel',
            'alarmType' => 'setAlarmType',
            'alarmActions' => 'setAlarmActions',
            'insufficientdataActions' => 'setInsufficientdataActions',
            'okActions' => 'setOkActions',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'alarmActionBeginTime' => 'setAlarmActionBeginTime',
            'alarmActionEndTime' => 'setAlarmActionEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmName  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    * alarmLevel  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * insufficientdataActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * okActions  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    * enterpriseProjectId  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    * alarmActionBeginTime  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * alarmActionEndTime  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmName' => 'getAlarmName',
            'alarmDescription' => 'getAlarmDescription',
            'metric' => 'getMetric',
            'condition' => 'getCondition',
            'alarmEnabled' => 'getAlarmEnabled',
            'alarmActionEnabled' => 'getAlarmActionEnabled',
            'alarmLevel' => 'getAlarmLevel',
            'alarmType' => 'getAlarmType',
            'alarmActions' => 'getAlarmActions',
            'insufficientdataActions' => 'getInsufficientdataActions',
            'okActions' => 'getOkActions',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'alarmActionBeginTime' => 'getAlarmActionBeginTime',
            'alarmActionEndTime' => 'getAlarmActionEndTime'
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
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['alarmEnabled'] = isset($data['alarmEnabled']) ? $data['alarmEnabled'] : null;
        $this->container['alarmActionEnabled'] = isset($data['alarmActionEnabled']) ? $data['alarmActionEnabled'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['insufficientdataActions'] = isset($data['insufficientdataActions']) ? $data['insufficientdataActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['alarmActionBeginTime'] = isset($data['alarmActionBeginTime']) ? $data['alarmActionBeginTime'] : null;
        $this->container['alarmActionEndTime'] = isset($data['alarmActionEndTime']) ? $data['alarmActionEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmName'] === null) {
            $invalidProperties[] = "'alarmName' can't be null";
        }
            if ((mb_strlen($this->container['alarmName']) > 128)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['alarmName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['alarmName'])) {
                $invalidProperties[] = "invalid value for 'alarmName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['alarmDescription']) && (mb_strlen($this->container['alarmDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'alarmDescription', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] > 4)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmType']) && !preg_match("/^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE)$/", $this->container['alarmType'])) {
                $invalidProperties[] = "invalid value for 'alarmType', must be conform to the pattern /^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE)$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && (mb_strlen($this->container['alarmActionBeginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && (mb_strlen($this->container['alarmActionBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['alarmActionBeginTime'])) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && (mb_strlen($this->container['alarmActionEndTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && (mb_strlen($this->container['alarmActionEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['alarmActionEndTime'])) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
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
    * Gets alarmName
    *  **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string $alarmName **参数解释**： 告警名称。 **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmDescription
    *  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmDescription()
    {
        return $this->container['alarmDescription'];
    }

    /**
    * Sets alarmDescription
    *
    * @param string|null $alarmDescription **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmDescription($alarmDescription)
    {
        $this->container['alarmDescription'] = $alarmDescription;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmMetric
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmMetric $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Condition
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Condition $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets alarmEnabled
    *  **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getAlarmEnabled()
    {
        return $this->container['alarmEnabled'];
    }

    /**
    * Sets alarmEnabled
    *
    * @param bool|null $alarmEnabled **参数解释**： 是否启用该条告警。 **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true：开启告警。 - false：不开启告警。 **默认取值**： true
    *
    * @return $this
    */
    public function setAlarmEnabled($alarmEnabled)
    {
        $this->container['alarmEnabled'] = $alarmEnabled;
        return $this;
    }

    /**
    * Gets alarmActionEnabled
    *  **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getAlarmActionEnabled()
    {
        return $this->container['alarmActionEnabled'];
    }

    /**
    * Sets alarmActionEnabled
    *
    * @param bool|null $alarmActionEnabled **参数解释**： 该条告警触发时，是否启用告警通知。 **约束限制**： 不填默认为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，alarm_actions和ok_actions中的notification_list值保持一致。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。 **默认取值**： true
    *
    * @return $this
    */
    public function setAlarmActionEnabled($alarmActionEnabled)
    {
        $this->container['alarmActionEnabled'] = $alarmActionEnabled;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    *
    * @return int|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param int|null $alarmLevel **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。分别对应紧急、重要、次要、提示。 **默认取值**： 2
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets alarmType
    *  **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType **参数解释**： 告警类型。 **约束限制**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets alarmActions
    *  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null $alarmActions **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return $this
    */
    public function setAlarmActions($alarmActions)
    {
        $this->container['alarmActions'] = $alarmActions;
        return $this;
    }

    /**
    * Gets insufficientdataActions
    *  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null
    */
    public function getInsufficientdataActions()
    {
        return $this->container['insufficientdataActions'];
    }

    /**
    * Sets insufficientdataActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null $insufficientdataActions **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return $this
    */
    public function setInsufficientdataActions($insufficientdataActions)
    {
        $this->container['insufficientdataActions'] = $insufficientdataActions;
        return $this;
    }

    /**
    * Gets okActions
    *  **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[]|null $okActions **参数解释**： 通知组/主题订阅的信息。 **约束限制**： 最多包含20个动作。
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID。如何查询企业项目ID，请参考“[获取企业项目ID](ces_03_0061.xml)”。 **约束限制**： 不涉及。 **取值范围**： 长度为0或者32个字符。 **默认取值**： 0，表示默认的企业项目default。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets alarmActionBeginTime
    *  **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmActionBeginTime()
    {
        return $this->container['alarmActionBeginTime'];
    }

    /**
    * Sets alarmActionBeginTime
    *
    * @param string|null $alarmActionBeginTime **参数解释**： 告警通知开启时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmActionBeginTime($alarmActionBeginTime)
    {
        $this->container['alarmActionBeginTime'] = $alarmActionBeginTime;
        return $this;
    }

    /**
    * Gets alarmActionEndTime
    *  **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmActionEndTime()
    {
        return $this->container['alarmActionEndTime'];
    }

    /**
    * Sets alarmActionEndTime
    *
    * @param string|null $alarmActionEndTime **参数解释**： 告警通知关闭时间。 **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmActionEndTime($alarmActionEndTime)
    {
        $this->container['alarmActionEndTime'] = $alarmActionEndTime;
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

