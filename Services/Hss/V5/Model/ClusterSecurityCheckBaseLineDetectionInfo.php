<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckBaseLineDetectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckBaseLineDetectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkType  **参数解释**： 基线类型 **取值范围**： 不涉及
    * standard  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    * baselineItemList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'checkRuleNum' => 'int',
            'failedRuleNum' => 'int',
            'checkTypeDesc' => 'string',
            'baselineItemList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaselineItemInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkType  **参数解释**： 基线类型 **取值范围**： 不涉及
    * standard  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    * baselineItemList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkName' => null,
        'checkType' => null,
        'standard' => null,
        'checkRuleNum' => 'int32',
        'failedRuleNum' => 'int32',
        'checkTypeDesc' => null,
        'baselineItemList' => null
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
    * severity  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkType  **参数解释**： 基线类型 **取值范围**： 不涉及
    * standard  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    * baselineItemList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'checkRuleNum' => 'check_rule_num',
            'failedRuleNum' => 'failed_rule_num',
            'checkTypeDesc' => 'check_type_desc',
            'baselineItemList' => 'baseline_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkType  **参数解释**： 基线类型 **取值范围**： 不涉及
    * standard  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    * baselineItemList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'checkRuleNum' => 'setCheckRuleNum',
            'failedRuleNum' => 'setFailedRuleNum',
            'checkTypeDesc' => 'setCheckTypeDesc',
            'baselineItemList' => 'setBaselineItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkType  **参数解释**： 基线类型 **取值范围**： 不涉及
    * standard  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    * baselineItemList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'checkRuleNum' => 'getCheckRuleNum',
            'failedRuleNum' => 'getFailedRuleNum',
            'checkTypeDesc' => 'getCheckTypeDesc',
            'baselineItemList' => 'getBaselineItemList'
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
    const SEVERITY_HIGH = 'High';
    const SEVERITY_MEDIUM = 'Medium';
    const SEVERITY_LOW = 'Low';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_HIGH,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_LOW,
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['failedRuleNum'] = isset($data['failedRuleNum']) ? $data['failedRuleNum'] : null;
        $this->container['checkTypeDesc'] = isset($data['checkTypeDesc']) ? $data['checkTypeDesc'] : null;
        $this->container['baselineItemList'] = isset($data['baselineItemList']) ? $data['baselineItemList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 64)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 1)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 1.";
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
    * Gets severity
    *  **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
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
    * @param string|null $severity **参数解释**： 基线风险级别 **取值范围**： - High：高危基线 - Medium：中危基线 - Low：低危基线
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释**： 基线名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName **参数解释**： 基线名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释**： 基线类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释**： 基线类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard **参数解释**： 标准类型 **取值范围**： - hw_standard：云安全实践 - cn_standard：等保合规 - cis_standard：通用安全标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets checkRuleNum
    *  **参数解释**： 检查项数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCheckRuleNum()
    {
        return $this->container['checkRuleNum'];
    }

    /**
    * Sets checkRuleNum
    *
    * @param int|null $checkRuleNum **参数解释**： 检查项数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckRuleNum($checkRuleNum)
    {
        $this->container['checkRuleNum'] = $checkRuleNum;
        return $this;
    }

    /**
    * Gets failedRuleNum
    *  **参数解释**： 风险项数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getFailedRuleNum()
    {
        return $this->container['failedRuleNum'];
    }

    /**
    * Sets failedRuleNum
    *
    * @param int|null $failedRuleNum **参数解释**： 风险项数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFailedRuleNum($failedRuleNum)
    {
        $this->container['failedRuleNum'] = $failedRuleNum;
        return $this;
    }

    /**
    * Gets checkTypeDesc
    *  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckTypeDesc()
    {
        return $this->container['checkTypeDesc'];
    }

    /**
    * Sets checkTypeDesc
    *
    * @param string|null $checkTypeDesc **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckTypeDesc($checkTypeDesc)
    {
        $this->container['checkTypeDesc'] = $checkTypeDesc;
        return $this;
    }

    /**
    * Gets baselineItemList
    *  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaselineItemInfo[]|null
    */
    public function getBaselineItemList()
    {
        return $this->container['baselineItemList'];
    }

    /**
    * Sets baselineItemList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaselineItemInfo[]|null $baselineItemList **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBaselineItemList($baselineItemList)
    {
        $this->container['baselineItemList'] = $baselineItemList;
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

