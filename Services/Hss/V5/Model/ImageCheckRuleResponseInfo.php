<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageCheckRuleResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageCheckRuleResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * checkName  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
    * checkType  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    * checkTypeDesc  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    * checkRuleName  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    * checkRuleId  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    * scanResult  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'checkTypeDesc' => 'string',
            'checkRuleName' => 'string',
            'checkRuleId' => 'string',
            'scanResult' => 'string',
            'latestScanTime' => 'int',
            'imageNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * checkName  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
    * checkType  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    * checkTypeDesc  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    * checkRuleName  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    * checkRuleId  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    * scanResult  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkName' => null,
        'checkType' => null,
        'standard' => null,
        'checkTypeDesc' => null,
        'checkRuleName' => null,
        'checkRuleId' => null,
        'scanResult' => null,
        'latestScanTime' => 'int64',
        'imageNum' => 'int32'
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
    * severity  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * checkName  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
    * checkType  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    * checkTypeDesc  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    * checkRuleName  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    * checkRuleId  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    * scanResult  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'checkTypeDesc' => 'check_type_desc',
            'checkRuleName' => 'check_rule_name',
            'checkRuleId' => 'check_rule_id',
            'scanResult' => 'scan_result',
            'latestScanTime' => 'latest_scan_time',
            'imageNum' => 'image_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * checkName  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
    * checkType  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    * checkTypeDesc  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    * checkRuleName  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    * checkRuleId  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    * scanResult  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'checkTypeDesc' => 'setCheckTypeDesc',
            'checkRuleName' => 'setCheckRuleName',
            'checkRuleId' => 'setCheckRuleId',
            'scanResult' => 'setScanResult',
            'latestScanTime' => 'setLatestScanTime',
            'imageNum' => 'setImageNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * checkName  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
    * checkType  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    * checkTypeDesc  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    * checkRuleName  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    * checkRuleId  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    * scanResult  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'checkTypeDesc' => 'getCheckTypeDesc',
            'checkRuleName' => 'getCheckRuleName',
            'checkRuleId' => 'getCheckRuleId',
            'scanResult' => 'getScanResult',
            'latestScanTime' => 'getLatestScanTime',
            'imageNum' => 'getImageNum'
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
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['checkTypeDesc'] = isset($data['checkTypeDesc']) ? $data['checkTypeDesc'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['scanResult'] = isset($data['scanResult']) ? $data['scanResult'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
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
    *  **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
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
    * @param string|null $severity **参数解释**： 风险等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危
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
    *  **参数解释**: 基线名称 **取值范围**: 字符长度0-256
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
    * @param string|null $checkName **参数解释**: 基线名称 **取值范围**: 字符长度0-256
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
    *  **参数解释**: 基线类型 **取值范围**: 字符长度0-256
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
    * @param string|null $checkType **参数解释**: 基线类型 **取值范围**: 字符长度0-256
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
    *  **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
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
    * @param string|null $standard **参数解释**: 标准类型 **取值范围**: - cn_standard：等保合规标准 - hw_standard：华为标准 - qt_standard：青腾标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets checkTypeDesc
    *  **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
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
    * @param string|null $checkTypeDesc **参数解释**: 基线描述信息 **取值范围**: 字符长度0-65534
    *
    * @return $this
    */
    public function setCheckTypeDesc($checkTypeDesc)
    {
        $this->container['checkTypeDesc'] = $checkTypeDesc;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    *
    * @return string|null
    */
    public function getCheckRuleName()
    {
        return $this->container['checkRuleName'];
    }

    /**
    * Sets checkRuleName
    *
    * @param string|null $checkRuleName **参数解释**: 检查项 **取值范围**: 字符长度0-2048
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets checkRuleId
    *  **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string|null $checkRuleId **参数解释**: 检查项ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets scanResult
    *  **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    *
    * @return string|null
    */
    public function getScanResult()
    {
        return $this->container['scanResult'];
    }

    /**
    * Sets scanResult
    *
    * @param string|null $scanResult **参数解释**: 检测结果 **取值范围**: - pass：通过 - failed：未通过
    *
    * @return $this
    */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位：毫秒（ms） **取值范围**: 大小0-9223372036854775807
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets imageNum
    *  **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum **参数解释**: 受影响的镜像的数量，进行了当前基线检测的镜像数量 **取值范围**: 大小0-2097152
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
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

