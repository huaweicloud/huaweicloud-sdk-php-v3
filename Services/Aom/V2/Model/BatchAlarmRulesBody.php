<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAlarmRulesBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAlarmRulesBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleEnable  当前状态是否启用。
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - metric：Prometheus指标 - event： 事件
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleEnable' => 'bool',
            'alarmRuleId' => 'int',
            'alarmRuleName' => 'string',
            'alarmRuleType' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleEnable  当前状态是否启用。
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - metric：Prometheus指标 - event： 事件
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleEnable' => null,
        'alarmRuleId' => 'int64',
        'alarmRuleName' => null,
        'alarmRuleType' => null,
        'enterpriseProjectId' => null
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
    * alarmRuleEnable  当前状态是否启用。
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - metric：Prometheus指标 - event： 事件
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleEnable' => 'alarm_rule_enable',
            'alarmRuleId' => 'alarm_rule_id',
            'alarmRuleName' => 'alarm_rule_name',
            'alarmRuleType' => 'alarm_rule_type',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleEnable  当前状态是否启用。
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - metric：Prometheus指标 - event： 事件
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleEnable' => 'setAlarmRuleEnable',
            'alarmRuleId' => 'setAlarmRuleId',
            'alarmRuleName' => 'setAlarmRuleName',
            'alarmRuleType' => 'setAlarmRuleType',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleEnable  当前状态是否启用。
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - metric：Prometheus指标 - event： 事件
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleEnable' => 'getAlarmRuleEnable',
            'alarmRuleId' => 'getAlarmRuleId',
            'alarmRuleName' => 'getAlarmRuleName',
            'alarmRuleType' => 'getAlarmRuleType',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['alarmRuleEnable'] = isset($data['alarmRuleEnable']) ? $data['alarmRuleEnable'] : null;
        $this->container['alarmRuleId'] = isset($data['alarmRuleId']) ? $data['alarmRuleId'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleEnable'] === null) {
            $invalidProperties[] = "'alarmRuleEnable' can't be null";
        }
        if ($this->container['alarmRuleId'] === null) {
            $invalidProperties[] = "'alarmRuleId' can't be null";
        }
        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
        if ($this->container['alarmRuleType'] === null) {
            $invalidProperties[] = "'alarmRuleType' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    * Gets alarmRuleEnable
    *  当前状态是否启用。
    *
    * @return bool
    */
    public function getAlarmRuleEnable()
    {
        return $this->container['alarmRuleEnable'];
    }

    /**
    * Sets alarmRuleEnable
    *
    * @param bool $alarmRuleEnable 当前状态是否启用。
    *
    * @return $this
    */
    public function setAlarmRuleEnable($alarmRuleEnable)
    {
        $this->container['alarmRuleEnable'] = $alarmRuleEnable;
        return $this;
    }

    /**
    * Gets alarmRuleId
    *  告警规则id。
    *
    * @return int
    */
    public function getAlarmRuleId()
    {
        return $this->container['alarmRuleId'];
    }

    /**
    * Sets alarmRuleId
    *
    * @param int $alarmRuleId 告警规则id。
    *
    * @return $this
    */
    public function setAlarmRuleId($alarmRuleId)
    {
        $this->container['alarmRuleId'] = $alarmRuleId;
        return $this;
    }

    /**
    * Gets alarmRuleName
    *  告警规则名称。
    *
    * @return string
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string $alarmRuleName 告警规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleType
    *  告警规则类型。 - metric：Prometheus指标 - event： 事件
    *
    * @return string
    */
    public function getAlarmRuleType()
    {
        return $this->container['alarmRuleType'];
    }

    /**
    * Sets alarmRuleType
    *
    * @param string $alarmRuleType 告警规则类型。 - metric：Prometheus指标 - event： 事件
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。  批量启停或批量修改单个企业项目下实例，填写企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

