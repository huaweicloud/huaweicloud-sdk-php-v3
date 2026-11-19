<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAiOverviewStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAiOverviewStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * type  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    * beginTime  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endTime  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * type  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    * beginTime  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endTime  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'type' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64'
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * type  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    * beginTime  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endTime  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * type  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    * beginTime  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endTime  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * type  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    * beginTime  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endTime  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
    const TYPE_ALARM = 'alarm';
    const TYPE_RISK = 'risk';
    const TYPE_SOURCE = 'source';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALARM,
            self::TYPE_RISK,
            self::TYPE_SOURCE,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && !preg_match("/^(alarm|risk|source)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(alarm|risk|source)$/.";
            }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
            if (($this->container['beginTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['beginTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 查询类型（不传时返回全部数据） **约束限制**: 不涉及 **取值范围**: - alarm：告警数量统计 - risk：风险数量统计 - source：智能体防护信息  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int $beginTime **参数解释**: 开始时间，13位毫秒时间戳 **约束限制**: 需小于等于end_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime **参数解释**: 结束时间，13位毫秒时间戳 **约束限制**: 需大于等于begin_time **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

