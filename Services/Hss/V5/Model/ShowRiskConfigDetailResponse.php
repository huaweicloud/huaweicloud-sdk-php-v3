<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRiskConfigDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRiskConfigDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkType  基线类型
    * checkTypeDesc  基线描述
    * checkRuleNum  检查项总数量
    * failedRuleNum  未通过的检查项数量
    * passedRuleNum  已通过的检查项数量
    * ignoredRuleNum  已忽略的检查项数量
    * hostNum  受影响的服务器的数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkType' => 'string',
            'checkTypeDesc' => 'string',
            'checkRuleNum' => 'int',
            'failedRuleNum' => 'int',
            'passedRuleNum' => 'int',
            'ignoredRuleNum' => 'int',
            'hostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkType  基线类型
    * checkTypeDesc  基线描述
    * checkRuleNum  检查项总数量
    * failedRuleNum  未通过的检查项数量
    * passedRuleNum  已通过的检查项数量
    * ignoredRuleNum  已忽略的检查项数量
    * hostNum  受影响的服务器的数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkType' => null,
        'checkTypeDesc' => null,
        'checkRuleNum' => 'int32',
        'failedRuleNum' => 'int32',
        'passedRuleNum' => 'int32',
        'ignoredRuleNum' => 'int32',
        'hostNum' => 'int64'
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
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkType  基线类型
    * checkTypeDesc  基线描述
    * checkRuleNum  检查项总数量
    * failedRuleNum  未通过的检查项数量
    * passedRuleNum  已通过的检查项数量
    * ignoredRuleNum  已忽略的检查项数量
    * hostNum  受影响的服务器的数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkType' => 'check_type',
            'checkTypeDesc' => 'check_type_desc',
            'checkRuleNum' => 'check_rule_num',
            'failedRuleNum' => 'failed_rule_num',
            'passedRuleNum' => 'passed_rule_num',
            'ignoredRuleNum' => 'ignored_rule_num',
            'hostNum' => 'host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkType  基线类型
    * checkTypeDesc  基线描述
    * checkRuleNum  检查项总数量
    * failedRuleNum  未通过的检查项数量
    * passedRuleNum  已通过的检查项数量
    * ignoredRuleNum  已忽略的检查项数量
    * hostNum  受影响的服务器的数量
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkType' => 'setCheckType',
            'checkTypeDesc' => 'setCheckTypeDesc',
            'checkRuleNum' => 'setCheckRuleNum',
            'failedRuleNum' => 'setFailedRuleNum',
            'passedRuleNum' => 'setPassedRuleNum',
            'ignoredRuleNum' => 'setIgnoredRuleNum',
            'hostNum' => 'setHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkType  基线类型
    * checkTypeDesc  基线描述
    * checkRuleNum  检查项总数量
    * failedRuleNum  未通过的检查项数量
    * passedRuleNum  已通过的检查项数量
    * ignoredRuleNum  已忽略的检查项数量
    * hostNum  受影响的服务器的数量
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkType' => 'getCheckType',
            'checkTypeDesc' => 'getCheckTypeDesc',
            'checkRuleNum' => 'getCheckRuleNum',
            'failedRuleNum' => 'getFailedRuleNum',
            'passedRuleNum' => 'getPassedRuleNum',
            'ignoredRuleNum' => 'getIgnoredRuleNum',
            'hostNum' => 'getHostNum'
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
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['checkTypeDesc'] = isset($data['checkTypeDesc']) ? $data['checkTypeDesc'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['failedRuleNum'] = isset($data['failedRuleNum']) ? $data['failedRuleNum'] : null;
        $this->container['passedRuleNum'] = isset($data['passedRuleNum']) ? $data['passedRuleNum'] : null;
        $this->container['ignoredRuleNum'] = isset($data['ignoredRuleNum']) ? $data['ignoredRuleNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 65534)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedRuleNum']) && ($this->container['failedRuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedRuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedRuleNum']) && ($this->container['failedRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passedRuleNum']) && ($this->container['passedRuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'passedRuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['passedRuleNum']) && ($this->container['passedRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'passedRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ignoredRuleNum']) && ($this->container['ignoredRuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ignoredRuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ignoredRuleNum']) && ($this->container['ignoredRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ignoredRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
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
    *  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
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
    * @param string|null $severity 风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets checkType
    *  基线类型
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
    * @param string|null $checkType 基线类型
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets checkTypeDesc
    *  基线描述
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
    * @param string|null $checkTypeDesc 基线描述
    *
    * @return $this
    */
    public function setCheckTypeDesc($checkTypeDesc)
    {
        $this->container['checkTypeDesc'] = $checkTypeDesc;
        return $this;
    }

    /**
    * Gets checkRuleNum
    *  检查项总数量
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
    * @param int|null $checkRuleNum 检查项总数量
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
    *  未通过的检查项数量
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
    * @param int|null $failedRuleNum 未通过的检查项数量
    *
    * @return $this
    */
    public function setFailedRuleNum($failedRuleNum)
    {
        $this->container['failedRuleNum'] = $failedRuleNum;
        return $this;
    }

    /**
    * Gets passedRuleNum
    *  已通过的检查项数量
    *
    * @return int|null
    */
    public function getPassedRuleNum()
    {
        return $this->container['passedRuleNum'];
    }

    /**
    * Sets passedRuleNum
    *
    * @param int|null $passedRuleNum 已通过的检查项数量
    *
    * @return $this
    */
    public function setPassedRuleNum($passedRuleNum)
    {
        $this->container['passedRuleNum'] = $passedRuleNum;
        return $this;
    }

    /**
    * Gets ignoredRuleNum
    *  已忽略的检查项数量
    *
    * @return int|null
    */
    public function getIgnoredRuleNum()
    {
        return $this->container['ignoredRuleNum'];
    }

    /**
    * Sets ignoredRuleNum
    *
    * @param int|null $ignoredRuleNum 已忽略的检查项数量
    *
    * @return $this
    */
    public function setIgnoredRuleNum($ignoredRuleNum)
    {
        $this->container['ignoredRuleNum'] = $ignoredRuleNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  受影响的服务器的数量
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum 受影响的服务器的数量
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
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

