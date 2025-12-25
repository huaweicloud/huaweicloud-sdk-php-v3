<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlarmRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlarmRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * condition  condition
    * alarmActionEnabled  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
    * alarmLevel  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    * insufficientdataActions  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\Condition',
            'alarmActionEnabled' => 'bool',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[][]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[][]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\Notification[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * condition  condition
    * alarmActionEnabled  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
    * alarmLevel  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    * insufficientdataActions  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmName' => null,
        'alarmDescription' => null,
        'condition' => null,
        'alarmActionEnabled' => null,
        'alarmLevel' => 'int32',
        'alarmType' => null,
        'alarmActions' => null,
        'insufficientdataActions' => null,
        'okActions' => null
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
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * condition  condition
    * alarmActionEnabled  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
    * alarmLevel  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    * insufficientdataActions  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmName' => 'alarm_name',
            'alarmDescription' => 'alarm_description',
            'condition' => 'condition',
            'alarmActionEnabled' => 'alarm_action_enabled',
            'alarmLevel' => 'alarm_level',
            'alarmType' => 'alarm_type',
            'alarmActions' => 'alarm_actions',
            'insufficientdataActions' => 'insufficientdata_actions',
            'okActions' => 'ok_actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * condition  condition
    * alarmActionEnabled  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
    * alarmLevel  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    * insufficientdataActions  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmName' => 'setAlarmName',
            'alarmDescription' => 'setAlarmDescription',
            'condition' => 'setCondition',
            'alarmActionEnabled' => 'setAlarmActionEnabled',
            'alarmLevel' => 'setAlarmLevel',
            'alarmType' => 'setAlarmType',
            'alarmActions' => 'setAlarmActions',
            'insufficientdataActions' => 'setInsufficientdataActions',
            'okActions' => 'setOkActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmDescription  **参数解释**： 告警描述。 **约束限制**： 不涉及。 **取值范围**： 长度[0,256]个字符。 **默认取值**： 不涉及。
    * condition  condition
    * alarmActionEnabled  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
    * alarmLevel  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    * insufficientdataActions  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmName' => 'getAlarmName',
            'alarmDescription' => 'getAlarmDescription',
            'condition' => 'getCondition',
            'alarmActionEnabled' => 'getAlarmActionEnabled',
            'alarmLevel' => 'getAlarmLevel',
            'alarmType' => 'getAlarmType',
            'alarmActions' => 'getAlarmActions',
            'insufficientdataActions' => 'getInsufficientdataActions',
            'okActions' => 'getOkActions'
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
    const ALARM_TYPE_EVENT_SYS = 'EVENT.SYS';
    const ALARM_TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    const ALARM_TYPE_RESOURCE_GROUP = 'RESOURCE_GROUP';
    const ALARM_TYPE_MULTI_INSTANCE = 'MULTI_INSTANCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_EVENT_SYS,
            self::ALARM_TYPE_EVENT_CUSTOM,
            self::ALARM_TYPE_RESOURCE_GROUP,
            self::ALARM_TYPE_MULTI_INSTANCE,
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
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['alarmActionEnabled'] = isset($data['alarmActionEnabled']) ? $data['alarmActionEnabled'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['insufficientdataActions'] = isset($data['insufficientdataActions']) ? $data['insufficientdataActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) > 128)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['alarmName'])) {
                $invalidProperties[] = "invalid value for 'alarmName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['alarmDescription']) && (mb_strlen($this->container['alarmDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'alarmDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] > 4)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
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
    * Gets alarmName
    *  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
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
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Condition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Condition|null $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets alarmActionEnabled
    *  **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
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
    * @param bool|null $alarmActionEnabled **参数解释**： 是否开启告警通知 **约束限制**： 若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notificationList值保持一致。 **取值范围**： 只能为true、false - true: 开启告警通知 - false：关闭告警通知 **默认取值**: false。
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
    *  **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
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
    * @param int|null $alarmLevel **参数解释**： 告警级别 **约束限制**： 不涉及 **取值范围**： 级别为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**: 2
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
    *  **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
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
    * @param string|null $alarmType **参数解释**： 告警类型。 **约束限制**： 不涉及 **取值范围**： - EVENT.SYS：针对系统事件的告警规则。 - EVENT.CUSTOM：针对自定义事件的告警规则。 - RESOURCE_GROUP：针对资源分组的告警规则。 - MULTI_INSTANCE： 针对指定资源的告警规则。 **默认取值**： 不涉及。
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
    *  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null $alarmActions **参数解释**： 告警触发时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] } **约束限制**： 最多包含10个告警触发时的通知对象信息。
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
    *  **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null
    */
    public function getInsufficientdataActions()
    {
        return $this->container['insufficientdataActions'];
    }

    /**
    * Sets insufficientdataActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null $insufficientdataActions **参数解释**： 数据不足触发告警时，通知组/主题订阅的信息。（该参数已废弃，建议无需配置） **约束限制**： 最多包含10个告警动作。
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
    *  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Notification[][]|null $okActions **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构样例如下： { \"type\": \"notification\",\"notificationList\":[\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"] }  **约束限制**： 最多包含10个告警触发时的通知对象信息。
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
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

