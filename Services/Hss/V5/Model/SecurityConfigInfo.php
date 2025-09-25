<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkName' => 'string',
            'checkRuleNum' => 'int',
            'failedRuleNum' => 'int',
            'scanTime' => 'int',
            'checkTypeDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkName' => null,
        'checkRuleNum' => 'int32',
        'failedRuleNum' => 'int32',
        'scanTime' => 'int64',
        'checkTypeDesc' => null
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
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkName' => 'check_name',
            'checkRuleNum' => 'check_rule_num',
            'failedRuleNum' => 'failed_rule_num',
            'scanTime' => 'scan_time',
            'checkTypeDesc' => 'check_type_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkName' => 'setCheckName',
            'checkRuleNum' => 'setCheckRuleNum',
            'failedRuleNum' => 'setFailedRuleNum',
            'scanTime' => 'setScanTime',
            'checkTypeDesc' => 'setCheckTypeDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkRuleNum  **参数解释**： 检查项数量 **取值范围**： 不涉及
    * failedRuleNum  **参数解释**： 风险项数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * checkTypeDesc  **参数解释**： 基线描述信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkName' => 'getCheckName',
            'checkRuleNum' => 'getCheckRuleNum',
            'failedRuleNum' => 'getFailedRuleNum',
            'scanTime' => 'getScanTime',
            'checkTypeDesc' => 'getCheckTypeDesc'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['failedRuleNum'] = isset($data['failedRuleNum']) ? $data['failedRuleNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['checkTypeDesc'] = isset($data['checkTypeDesc']) ? $data['checkTypeDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
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
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
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
    * Gets scanTime
    *  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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

