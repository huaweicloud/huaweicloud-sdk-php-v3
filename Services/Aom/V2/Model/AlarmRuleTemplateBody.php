<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmRuleTemplateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmRuleTemplateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleTemplateName  告警模板名称。
    * alarmRuleTemplateNameEn  告警模板英文名称。
    * alarmRuleTemplateDescription  告警模板描述。
    * alarmRuleTemplateId  告警模板id。
    * alarmRuleTemplateProjectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * alarmRuleTemplateType  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    * alarmRuleTemplateSource  告警模板来源。
    * alarmRuleTemplateBinding  告警模板所绑定的告警规则。
    * alarmTemplateSpecList  告警模板列表。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * createTime  创建时间。
    * modifyTime  更新时间。
    * templating  templating
    * templateVersion  告警模板版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleTemplateName' => 'string',
            'alarmRuleTemplateNameEn' => 'string',
            'alarmRuleTemplateDescription' => 'string',
            'alarmRuleTemplateId' => 'string',
            'alarmRuleTemplateProjectId' => 'string',
            'alarmRuleTemplateType' => 'string',
            'alarmRuleTemplateSource' => 'string',
            'alarmRuleTemplateBinding' => 'map[string,string]',
            'alarmTemplateSpecList' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateSpecWithCloudService[]',
            'enterpriseProjectId' => 'string',
            'createTime' => 'int',
            'modifyTime' => 'int',
            'templating' => '\HuaweiCloud\SDK\Aom\V2\Model\Templating',
            'templateVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleTemplateName  告警模板名称。
    * alarmRuleTemplateNameEn  告警模板英文名称。
    * alarmRuleTemplateDescription  告警模板描述。
    * alarmRuleTemplateId  告警模板id。
    * alarmRuleTemplateProjectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * alarmRuleTemplateType  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    * alarmRuleTemplateSource  告警模板来源。
    * alarmRuleTemplateBinding  告警模板所绑定的告警规则。
    * alarmTemplateSpecList  告警模板列表。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * createTime  创建时间。
    * modifyTime  更新时间。
    * templating  templating
    * templateVersion  告警模板版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleTemplateName' => null,
        'alarmRuleTemplateNameEn' => null,
        'alarmRuleTemplateDescription' => null,
        'alarmRuleTemplateId' => null,
        'alarmRuleTemplateProjectId' => null,
        'alarmRuleTemplateType' => null,
        'alarmRuleTemplateSource' => null,
        'alarmRuleTemplateBinding' => null,
        'alarmTemplateSpecList' => null,
        'enterpriseProjectId' => null,
        'createTime' => 'int64',
        'modifyTime' => 'int64',
        'templating' => null,
        'templateVersion' => null
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
    * alarmRuleTemplateName  告警模板名称。
    * alarmRuleTemplateNameEn  告警模板英文名称。
    * alarmRuleTemplateDescription  告警模板描述。
    * alarmRuleTemplateId  告警模板id。
    * alarmRuleTemplateProjectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * alarmRuleTemplateType  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    * alarmRuleTemplateSource  告警模板来源。
    * alarmRuleTemplateBinding  告警模板所绑定的告警规则。
    * alarmTemplateSpecList  告警模板列表。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * createTime  创建时间。
    * modifyTime  更新时间。
    * templating  templating
    * templateVersion  告警模板版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleTemplateName' => 'alarm_rule_template_name',
            'alarmRuleTemplateNameEn' => 'alarm_rule_template_name_en',
            'alarmRuleTemplateDescription' => 'alarm_rule_template_description',
            'alarmRuleTemplateId' => 'alarm_rule_template_id',
            'alarmRuleTemplateProjectId' => 'alarm_rule_template_project_id',
            'alarmRuleTemplateType' => 'alarm_rule_template_type',
            'alarmRuleTemplateSource' => 'alarm_rule_template_source',
            'alarmRuleTemplateBinding' => 'alarm_rule_template_binding',
            'alarmTemplateSpecList' => 'alarm_template_spec_list',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time',
            'templating' => 'templating',
            'templateVersion' => 'template_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleTemplateName  告警模板名称。
    * alarmRuleTemplateNameEn  告警模板英文名称。
    * alarmRuleTemplateDescription  告警模板描述。
    * alarmRuleTemplateId  告警模板id。
    * alarmRuleTemplateProjectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * alarmRuleTemplateType  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    * alarmRuleTemplateSource  告警模板来源。
    * alarmRuleTemplateBinding  告警模板所绑定的告警规则。
    * alarmTemplateSpecList  告警模板列表。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * createTime  创建时间。
    * modifyTime  更新时间。
    * templating  templating
    * templateVersion  告警模板版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleTemplateName' => 'setAlarmRuleTemplateName',
            'alarmRuleTemplateNameEn' => 'setAlarmRuleTemplateNameEn',
            'alarmRuleTemplateDescription' => 'setAlarmRuleTemplateDescription',
            'alarmRuleTemplateId' => 'setAlarmRuleTemplateId',
            'alarmRuleTemplateProjectId' => 'setAlarmRuleTemplateProjectId',
            'alarmRuleTemplateType' => 'setAlarmRuleTemplateType',
            'alarmRuleTemplateSource' => 'setAlarmRuleTemplateSource',
            'alarmRuleTemplateBinding' => 'setAlarmRuleTemplateBinding',
            'alarmTemplateSpecList' => 'setAlarmTemplateSpecList',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime',
            'templating' => 'setTemplating',
            'templateVersion' => 'setTemplateVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleTemplateName  告警模板名称。
    * alarmRuleTemplateNameEn  告警模板英文名称。
    * alarmRuleTemplateDescription  告警模板描述。
    * alarmRuleTemplateId  告警模板id。
    * alarmRuleTemplateProjectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * alarmRuleTemplateType  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    * alarmRuleTemplateSource  告警模板来源。
    * alarmRuleTemplateBinding  告警模板所绑定的告警规则。
    * alarmTemplateSpecList  告警模板列表。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * createTime  创建时间。
    * modifyTime  更新时间。
    * templating  templating
    * templateVersion  告警模板版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleTemplateName' => 'getAlarmRuleTemplateName',
            'alarmRuleTemplateNameEn' => 'getAlarmRuleTemplateNameEn',
            'alarmRuleTemplateDescription' => 'getAlarmRuleTemplateDescription',
            'alarmRuleTemplateId' => 'getAlarmRuleTemplateId',
            'alarmRuleTemplateProjectId' => 'getAlarmRuleTemplateProjectId',
            'alarmRuleTemplateType' => 'getAlarmRuleTemplateType',
            'alarmRuleTemplateSource' => 'getAlarmRuleTemplateSource',
            'alarmRuleTemplateBinding' => 'getAlarmRuleTemplateBinding',
            'alarmTemplateSpecList' => 'getAlarmTemplateSpecList',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createTime' => 'getCreateTime',
            'modifyTime' => 'getModifyTime',
            'templating' => 'getTemplating',
            'templateVersion' => 'getTemplateVersion'
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
        $this->container['alarmRuleTemplateName'] = isset($data['alarmRuleTemplateName']) ? $data['alarmRuleTemplateName'] : null;
        $this->container['alarmRuleTemplateNameEn'] = isset($data['alarmRuleTemplateNameEn']) ? $data['alarmRuleTemplateNameEn'] : null;
        $this->container['alarmRuleTemplateDescription'] = isset($data['alarmRuleTemplateDescription']) ? $data['alarmRuleTemplateDescription'] : null;
        $this->container['alarmRuleTemplateId'] = isset($data['alarmRuleTemplateId']) ? $data['alarmRuleTemplateId'] : null;
        $this->container['alarmRuleTemplateProjectId'] = isset($data['alarmRuleTemplateProjectId']) ? $data['alarmRuleTemplateProjectId'] : null;
        $this->container['alarmRuleTemplateType'] = isset($data['alarmRuleTemplateType']) ? $data['alarmRuleTemplateType'] : null;
        $this->container['alarmRuleTemplateSource'] = isset($data['alarmRuleTemplateSource']) ? $data['alarmRuleTemplateSource'] : null;
        $this->container['alarmRuleTemplateBinding'] = isset($data['alarmRuleTemplateBinding']) ? $data['alarmRuleTemplateBinding'] : null;
        $this->container['alarmTemplateSpecList'] = isset($data['alarmTemplateSpecList']) ? $data['alarmTemplateSpecList'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifyTime'] = isset($data['modifyTime']) ? $data['modifyTime'] : null;
        $this->container['templating'] = isset($data['templating']) ? $data['templating'] : null;
        $this->container['templateVersion'] = isset($data['templateVersion']) ? $data['templateVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleTemplateName'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateName' can't be null";
        }
        if ($this->container['alarmRuleTemplateDescription'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateDescription' can't be null";
        }
        if ($this->container['alarmRuleTemplateId'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateId' can't be null";
        }
        if ($this->container['alarmRuleTemplateType'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateType' can't be null";
        }
        if ($this->container['alarmRuleTemplateBinding'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateBinding' can't be null";
        }
        if ($this->container['alarmTemplateSpecList'] === null) {
            $invalidProperties[] = "'alarmTemplateSpecList' can't be null";
        }
        if ($this->container['templating'] === null) {
            $invalidProperties[] = "'templating' can't be null";
        }
        if ($this->container['templateVersion'] === null) {
            $invalidProperties[] = "'templateVersion' can't be null";
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
    * Gets alarmRuleTemplateName
    *  告警模板名称。
    *
    * @return string
    */
    public function getAlarmRuleTemplateName()
    {
        return $this->container['alarmRuleTemplateName'];
    }

    /**
    * Sets alarmRuleTemplateName
    *
    * @param string $alarmRuleTemplateName 告警模板名称。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateName($alarmRuleTemplateName)
    {
        $this->container['alarmRuleTemplateName'] = $alarmRuleTemplateName;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateNameEn
    *  告警模板英文名称。
    *
    * @return string|null
    */
    public function getAlarmRuleTemplateNameEn()
    {
        return $this->container['alarmRuleTemplateNameEn'];
    }

    /**
    * Sets alarmRuleTemplateNameEn
    *
    * @param string|null $alarmRuleTemplateNameEn 告警模板英文名称。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateNameEn($alarmRuleTemplateNameEn)
    {
        $this->container['alarmRuleTemplateNameEn'] = $alarmRuleTemplateNameEn;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateDescription
    *  告警模板描述。
    *
    * @return string
    */
    public function getAlarmRuleTemplateDescription()
    {
        return $this->container['alarmRuleTemplateDescription'];
    }

    /**
    * Sets alarmRuleTemplateDescription
    *
    * @param string $alarmRuleTemplateDescription 告警模板描述。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateDescription($alarmRuleTemplateDescription)
    {
        $this->container['alarmRuleTemplateDescription'] = $alarmRuleTemplateDescription;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateId
    *  告警模板id。
    *
    * @return string
    */
    public function getAlarmRuleTemplateId()
    {
        return $this->container['alarmRuleTemplateId'];
    }

    /**
    * Sets alarmRuleTemplateId
    *
    * @param string $alarmRuleTemplateId 告警模板id。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateId($alarmRuleTemplateId)
    {
        $this->container['alarmRuleTemplateId'] = $alarmRuleTemplateId;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateProjectId
    *  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    *
    * @return string|null
    */
    public function getAlarmRuleTemplateProjectId()
    {
        return $this->container['alarmRuleTemplateProjectId'];
    }

    /**
    * Sets alarmRuleTemplateProjectId
    *
    * @param string|null $alarmRuleTemplateProjectId 项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateProjectId($alarmRuleTemplateProjectId)
    {
        $this->container['alarmRuleTemplateProjectId'] = $alarmRuleTemplateProjectId;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateType
    *  告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    *
    * @return string
    */
    public function getAlarmRuleTemplateType()
    {
        return $this->container['alarmRuleTemplateType'];
    }

    /**
    * Sets alarmRuleTemplateType
    *
    * @param string $alarmRuleTemplateType 告警模板类型 - “statics”：静态告警模板 - “dynamic”：动态告警模板
    *
    * @return $this
    */
    public function setAlarmRuleTemplateType($alarmRuleTemplateType)
    {
        $this->container['alarmRuleTemplateType'] = $alarmRuleTemplateType;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateSource
    *  告警模板来源。
    *
    * @return string|null
    */
    public function getAlarmRuleTemplateSource()
    {
        return $this->container['alarmRuleTemplateSource'];
    }

    /**
    * Sets alarmRuleTemplateSource
    *
    * @param string|null $alarmRuleTemplateSource 告警模板来源。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateSource($alarmRuleTemplateSource)
    {
        $this->container['alarmRuleTemplateSource'] = $alarmRuleTemplateSource;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateBinding
    *  告警模板所绑定的告警规则。
    *
    * @return map[string,string]
    */
    public function getAlarmRuleTemplateBinding()
    {
        return $this->container['alarmRuleTemplateBinding'];
    }

    /**
    * Sets alarmRuleTemplateBinding
    *
    * @param map[string,string] $alarmRuleTemplateBinding 告警模板所绑定的告警规则。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateBinding($alarmRuleTemplateBinding)
    {
        $this->container['alarmRuleTemplateBinding'] = $alarmRuleTemplateBinding;
        return $this;
    }

    /**
    * Gets alarmTemplateSpecList
    *  告警模板列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateSpecWithCloudService[]
    */
    public function getAlarmTemplateSpecList()
    {
        return $this->container['alarmTemplateSpecList'];
    }

    /**
    * Sets alarmTemplateSpecList
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateSpecWithCloudService[] $alarmTemplateSpecList 告警模板列表。
    *
    * @return $this
    */
    public function setAlarmTemplateSpecList($alarmTemplateSpecList)
    {
        $this->container['alarmTemplateSpecList'] = $alarmTemplateSpecList;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
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
    * @param string|null $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
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
    *  更新时间。
    *
    * @return int|null
    */
    public function getModifyTime()
    {
        return $this->container['modifyTime'];
    }

    /**
    * Sets modifyTime
    *
    * @param int|null $modifyTime 更新时间。
    *
    * @return $this
    */
    public function setModifyTime($modifyTime)
    {
        $this->container['modifyTime'] = $modifyTime;
        return $this;
    }

    /**
    * Gets templating
    *  templating
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Templating
    */
    public function getTemplating()
    {
        return $this->container['templating'];
    }

    /**
    * Sets templating
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Templating $templating templating
    *
    * @return $this
    */
    public function setTemplating($templating)
    {
        $this->container['templating'] = $templating;
        return $this;
    }

    /**
    * Gets templateVersion
    *  告警模板版本。
    *
    * @return string
    */
    public function getTemplateVersion()
    {
        return $this->container['templateVersion'];
    }

    /**
    * Sets templateVersion
    *
    * @param string $templateVersion 告警模板版本。
    *
    * @return $this
    */
    public function setTemplateVersion($templateVersion)
    {
        $this->container['templateVersion'] = $templateVersion;
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

