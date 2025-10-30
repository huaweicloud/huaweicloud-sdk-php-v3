<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subType  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    * content  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    * topic  邮件主题,只有sub_type=email时生效
    * sendType  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    * version  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subType' => 'string',
            'content' => 'string',
            'topic' => 'string',
            'sendType' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subType  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    * content  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    * topic  邮件主题,只有sub_type=email时生效
    * sendType  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    * version  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subType' => null,
        'content' => null,
        'topic' => null,
        'sendType' => null,
        'version' => null
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
    * subType  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    * content  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    * topic  邮件主题,只有sub_type=email时生效
    * sendType  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    * version  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subType' => 'sub_type',
            'content' => 'content',
            'topic' => 'topic',
            'sendType' => 'sendType',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subType  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    * content  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    * topic  邮件主题,只有sub_type=email时生效
    * sendType  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    * version  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @var string[]
    */
    protected static $setters = [
            'subType' => 'setSubType',
            'content' => 'setContent',
            'topic' => 'setTopic',
            'sendType' => 'setSendType',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subType  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    * content  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    * topic  邮件主题,只有sub_type=email时生效
    * sendType  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    * version  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @var string[]
    */
    protected static $getters = [
            'subType' => 'getSubType',
            'content' => 'getContent',
            'topic' => 'getTopic',
            'sendType' => 'getSendType',
            'version' => 'getVersion'
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
    const SUB_TYPE_SMS = 'sms';
    const SUB_TYPE_DINGDING = 'dingding';
    const SUB_TYPE_WECHAT = 'wechat';
    const SUB_TYPE_WEBHOOK = 'webhook';
    const SUB_TYPE_EMAIL = 'email';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubTypeAllowableValues()
    {
        return [
            self::SUB_TYPE_SMS,
            self::SUB_TYPE_DINGDING,
            self::SUB_TYPE_WECHAT,
            self::SUB_TYPE_WEBHOOK,
            self::SUB_TYPE_EMAIL,
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
        $this->container['subType'] = isset($data['subType']) ? $data['subType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['sendType'] = isset($data['sendType']) ? $data['sendType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subType'] === null) {
            $invalidProperties[] = "'subType' can't be null";
        }
            $allowedValues = $this->getSubTypeAllowableValues();
                if (!is_null($this->container['subType']) && !in_array($this->container['subType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 1024)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['content']) < 2)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 2.";
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
    * Gets subType
    *  模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    *
    * @return string
    */
    public function getSubType()
    {
        return $this->container['subType'];
    }

    /**
    * Sets subType
    *
    * @param string $subType 模板子类型，只支持以下5种类型：sms,dingding,wechat,webhook,email
    *
    * @return $this
    */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;
        return $this;
    }

    /**
    * Gets content
    *  子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 子模版正文，$符号后所跟变量仅支持以下变量，根据不同告警类型（关键词告警和sql告警），所支持的变量亦不相同。 目前两种告警类型有共同变量如下：告警级别：${event_severity};发生时间：${starts_at};告警源：$event.metadata.resource_provider;资源类型：$event.metadata.resource_type;资源标识：${resources};统计类型：关键词统计;表达式：$event.annotations.condition_expression;当前值: $event.annotations.current_value;统计周期：$event.annotations.frequency; 关键词告警特有变量：查询时间：$event.annotations.results[0].time;查询日志：$event.annotations.results[0].raw_results; sql告警特有变量：日志组/流名称：$event.annotations.results[0].resource_id;查询语句：$event.annotations.results[0].sql;查询时间：$event.annotations.results[0].time;查询URL：$event.annotations.results[0].url;查询日志：$event.annotations.results[0].raw_results; 变量后面的分号\";\"为英文符号，必须添加，否则模板会出现替换失败的情况
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets topic
    *  邮件主题,只有sub_type=email时生效
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 邮件主题,只有sub_type=email时生效
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets sendType
    *  **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    *
    * @return string|null
    */
    public function getSendType()
    {
        return $this->container['sendType'];
    }

    /**
    * Sets sendType
    *
    * @param string|null $sendType **参数解释：**  当消息模板类型为webhook时生效，决定该消息的渲染方式。 **取值范围：**  - HTML - JSON
    *
    * @return $this
    */
    public function setSendType($sendType)
    {
        $this->container['sendType'] = $sendType;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：**  消息模板的适用版本。 **取值范围：**   v1：标识为LTS的消息模板。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

