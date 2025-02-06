<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topics  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    * alarmRuleTemplateId  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promInstanceId  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promEnterpriseProjectId  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topics' => 'string[]',
            'alarmRuleTemplateId' => 'string',
            'promInstanceId' => 'string',
            'promEnterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topics  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    * alarmRuleTemplateId  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promInstanceId  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promEnterpriseProjectId  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topics' => null,
        'alarmRuleTemplateId' => null,
        'promInstanceId' => null,
        'promEnterpriseProjectId' => null
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
    * topics  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    * alarmRuleTemplateId  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promInstanceId  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promEnterpriseProjectId  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topics' => 'topics',
            'alarmRuleTemplateId' => 'alarmRuleTemplateId',
            'promInstanceId' => 'promInstanceID',
            'promEnterpriseProjectId' => 'promEnterpriseProjectID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topics  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    * alarmRuleTemplateId  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promInstanceId  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promEnterpriseProjectId  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'topics' => 'setTopics',
            'alarmRuleTemplateId' => 'setAlarmRuleTemplateId',
            'promInstanceId' => 'setPromInstanceId',
            'promEnterpriseProjectId' => 'setPromEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topics  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    * alarmRuleTemplateId  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promInstanceId  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * promEnterpriseProjectId  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'topics' => 'getTopics',
            'alarmRuleTemplateId' => 'getAlarmRuleTemplateId',
            'promInstanceId' => 'getPromInstanceId',
            'promEnterpriseProjectId' => 'getPromEnterpriseProjectId'
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
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['alarmRuleTemplateId'] = isset($data['alarmRuleTemplateId']) ? $data['alarmRuleTemplateId'] : null;
        $this->container['promInstanceId'] = isset($data['promInstanceId']) ? $data['promInstanceId'] : null;
        $this->container['promEnterpriseProjectId'] = isset($data['promEnterpriseProjectId']) ? $data['promEnterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topics'] === null) {
            $invalidProperties[] = "'topics' can't be null";
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
    * Gets topics
    *  **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    *
    * @return string[]
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string[] $topics **参数解释：** 联系组列表。填写SMN主题名称，通过配置告警联系组，分组管理订阅终端，接收告警信息。 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateId
    *  **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAlarmRuleTemplateId()
    {
        return $this->container['alarmRuleTemplateId'];
    }

    /**
    * Sets alarmRuleTemplateId
    *
    * @param string|null $alarmRuleTemplateId **参数解释：** 开启告警助手时传入告警模板ID。默认采用容器场景下的告警规则模板。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAlarmRuleTemplateId($alarmRuleTemplateId)
    {
        $this->container['alarmRuleTemplateId'] = $alarmRuleTemplateId;
        return $this;
    }

    /**
    * Gets promInstanceId
    *  **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPromInstanceId()
    {
        return $this->container['promInstanceId'];
    }

    /**
    * Sets promInstanceId
    *
    * @param string|null $promInstanceId **参数解释：** 开启告警助手时传入AOM普罗实例的id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPromInstanceId($promInstanceId)
    {
        $this->container['promInstanceId'] = $promInstanceId;
        return $this;
    }

    /**
    * Gets promEnterpriseProjectId
    *  **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPromEnterpriseProjectId()
    {
        return $this->container['promEnterpriseProjectId'];
    }

    /**
    * Sets promEnterpriseProjectId
    *
    * @param string|null $promEnterpriseProjectId **参数解释：** 开启告警助手时传入AOM普罗实例的企业项目id。若未安装普罗插件或者未对接AOM实例，此参数无需指定，告警中心将不会创建指标类告警规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPromEnterpriseProjectId($promEnterpriseProjectId)
    {
        $this->container['promEnterpriseProjectId'] = $promEnterpriseProjectId;
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

