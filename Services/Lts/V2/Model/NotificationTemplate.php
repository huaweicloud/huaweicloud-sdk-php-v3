<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotificationTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotificationTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    * type  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    * desc  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    * source  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    * templates  **参数解释：**  不同通知渠道下消息模板的详细信息。
    * locale  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    * createTime  创建时间，为毫秒时间戳
    * modifyTime  更新时间，为毫秒时间戳
    * projectId  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string[]',
            'desc' => 'string',
            'source' => 'string',
            'templates' => '\HuaweiCloud\SDK\Lts\V2\Model\SubTemplateResBody[]',
            'locale' => 'string',
            'createTime' => 'int',
            'modifyTime' => 'int',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    * type  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    * desc  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    * source  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    * templates  **参数解释：**  不同通知渠道下消息模板的详细信息。
    * locale  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    * createTime  创建时间，为毫秒时间戳
    * modifyTime  更新时间，为毫秒时间戳
    * projectId  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'desc' => null,
        'source' => null,
        'templates' => null,
        'locale' => null,
        'createTime' => 'int64',
        'modifyTime' => 'int64',
        'projectId' => null
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
    * name  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    * type  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    * desc  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    * source  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    * templates  **参数解释：**  不同通知渠道下消息模板的详细信息。
    * locale  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    * createTime  创建时间，为毫秒时间戳
    * modifyTime  更新时间，为毫秒时间戳
    * projectId  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'desc' => 'desc',
            'source' => 'source',
            'templates' => 'templates',
            'locale' => 'locale',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    * type  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    * desc  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    * source  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    * templates  **参数解释：**  不同通知渠道下消息模板的详细信息。
    * locale  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    * createTime  创建时间，为毫秒时间戳
    * modifyTime  更新时间，为毫秒时间戳
    * projectId  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'desc' => 'setDesc',
            'source' => 'setSource',
            'templates' => 'setTemplates',
            'locale' => 'setLocale',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    * type  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    * desc  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    * source  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    * templates  **参数解释：**  不同通知渠道下消息模板的详细信息。
    * locale  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    * createTime  创建时间，为毫秒时间戳
    * modifyTime  更新时间，为毫秒时间戳
    * projectId  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'desc' => 'getDesc',
            'source' => 'getSource',
            'templates' => 'getTemplates',
            'locale' => 'getLocale',
            'createTime' => 'getCreateTime',
            'modifyTime' => 'getModifyTime',
            'projectId' => 'getProjectId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifyTime'] = isset($data['modifyTime']) ? $data['modifyTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['templates'] === null) {
            $invalidProperties[] = "'templates' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 1700000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 1700000000000.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
        if ($this->container['modifyTime'] === null) {
            $invalidProperties[] = "'modifyTime' can't be null";
        }
            if (($this->container['modifyTime'] > 1700000000000)) {
                $invalidProperties[] = "invalid value for 'modifyTime', must be smaller than or equal to 1700000000000.";
            }
            if (($this->container['modifyTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'modifyTime', must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    * Gets name
    *  **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：**  消息模板名称。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释：**  消息通知方式。 **取值范围：**  - sms - dingding - wechat - webhook - email - voice - feishu - welink
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释：**  消息模板描述。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source **参数解释：**  消息模板来源。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets templates
    *  **参数解释：**  不同通知渠道下消息模板的详细信息。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\SubTemplateResBody[]
    */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
    * Sets templates
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\SubTemplateResBody[] $templates **参数解释：**  不同通知渠道下消息模板的详细信息。
    *
    * @return $this
    */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;
        return $this;
    }

    /**
    * Gets locale
    *  **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale **参数解释：**  消息头语言，系统在发送消息时会默认添加消息头，中文如：“尊敬的用户...”；英文如：“Dear User...”。 **取值范围：**  - zh-cn - en-us
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，为毫秒时间戳
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间，为毫秒时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets modifyTime
    *  更新时间，为毫秒时间戳
    *
    * @return int
    */
    public function getModifyTime()
    {
        return $this->container['modifyTime'];
    }

    /**
    * Sets modifyTime
    *
    * @param int $modifyTime 更新时间，为毫秒时间戳
    *
    * @return $this
    */
    public function setModifyTime($modifyTime)
    {
        $this->container['modifyTime'] = $modifyTime;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，获取方式请参见：获取账号ID、项目ID、日志组ID、日志流ID（https://support.huaweicloud.com/api-lts/lts_api_0006.html）。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

