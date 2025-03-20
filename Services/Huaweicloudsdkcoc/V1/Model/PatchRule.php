<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PatchRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PatchRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * patchFilters  批准规则过滤
    * ruleName  规则名称
    * complianceLevel  合规性报告级别
    * approveAfterDays  指定天数后批准补丁，指定的天数
    * approveUntilDate  批准指定日期之前发布的补丁,指定的日期时间戳
    * enableNonSecurity  是否包括非安全性更新
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'patchFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\PatchFilter[]',
            'ruleName' => 'string',
            'complianceLevel' => 'string',
            'approveAfterDays' => 'int',
            'approveUntilDate' => 'int',
            'enableNonSecurity' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * patchFilters  批准规则过滤
    * ruleName  规则名称
    * complianceLevel  合规性报告级别
    * approveAfterDays  指定天数后批准补丁，指定的天数
    * approveUntilDate  批准指定日期之前发布的补丁,指定的日期时间戳
    * enableNonSecurity  是否包括非安全性更新
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'patchFilters' => null,
        'ruleName' => null,
        'complianceLevel' => null,
        'approveAfterDays' => null,
        'approveUntilDate' => 'int64',
        'enableNonSecurity' => null
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
    * patchFilters  批准规则过滤
    * ruleName  规则名称
    * complianceLevel  合规性报告级别
    * approveAfterDays  指定天数后批准补丁，指定的天数
    * approveUntilDate  批准指定日期之前发布的补丁,指定的日期时间戳
    * enableNonSecurity  是否包括非安全性更新
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'patchFilters' => 'patch_filters',
            'ruleName' => 'rule_name',
            'complianceLevel' => 'compliance_level',
            'approveAfterDays' => 'approve_after_days',
            'approveUntilDate' => 'approve_until_date',
            'enableNonSecurity' => 'enable_non_security'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * patchFilters  批准规则过滤
    * ruleName  规则名称
    * complianceLevel  合规性报告级别
    * approveAfterDays  指定天数后批准补丁，指定的天数
    * approveUntilDate  批准指定日期之前发布的补丁,指定的日期时间戳
    * enableNonSecurity  是否包括非安全性更新
    *
    * @var string[]
    */
    protected static $setters = [
            'patchFilters' => 'setPatchFilters',
            'ruleName' => 'setRuleName',
            'complianceLevel' => 'setComplianceLevel',
            'approveAfterDays' => 'setApproveAfterDays',
            'approveUntilDate' => 'setApproveUntilDate',
            'enableNonSecurity' => 'setEnableNonSecurity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * patchFilters  批准规则过滤
    * ruleName  规则名称
    * complianceLevel  合规性报告级别
    * approveAfterDays  指定天数后批准补丁，指定的天数
    * approveUntilDate  批准指定日期之前发布的补丁,指定的日期时间戳
    * enableNonSecurity  是否包括非安全性更新
    *
    * @var string[]
    */
    protected static $getters = [
            'patchFilters' => 'getPatchFilters',
            'ruleName' => 'getRuleName',
            'complianceLevel' => 'getComplianceLevel',
            'approveAfterDays' => 'getApproveAfterDays',
            'approveUntilDate' => 'getApproveUntilDate',
            'enableNonSecurity' => 'getEnableNonSecurity'
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
        $this->container['patchFilters'] = isset($data['patchFilters']) ? $data['patchFilters'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['complianceLevel'] = isset($data['complianceLevel']) ? $data['complianceLevel'] : null;
        $this->container['approveAfterDays'] = isset($data['approveAfterDays']) ? $data['approveAfterDays'] : null;
        $this->container['approveUntilDate'] = isset($data['approveUntilDate']) ? $data['approveUntilDate'] : null;
        $this->container['enableNonSecurity'] = isset($data['enableNonSecurity']) ? $data['enableNonSecurity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['patchFilters'] === null) {
            $invalidProperties[] = "'patchFilters' can't be null";
        }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 200)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['complianceLevel'] === null) {
            $invalidProperties[] = "'complianceLevel' can't be null";
        }
            if ((mb_strlen($this->container['complianceLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'complianceLevel', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['complianceLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'complianceLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approveAfterDays']) && ($this->container['approveAfterDays'] > 365)) {
                $invalidProperties[] = "invalid value for 'approveAfterDays', must be smaller than or equal to 365.";
            }
            if (!is_null($this->container['approveAfterDays']) && ($this->container['approveAfterDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'approveAfterDays', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approveUntilDate']) && ($this->container['approveUntilDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'approveUntilDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['approveUntilDate']) && ($this->container['approveUntilDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'approveUntilDate', must be bigger than or equal to 0.";
            }
        if ($this->container['enableNonSecurity'] === null) {
            $invalidProperties[] = "'enableNonSecurity' can't be null";
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
    * Gets patchFilters
    *  批准规则过滤
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\PatchFilter[]
    */
    public function getPatchFilters()
    {
        return $this->container['patchFilters'];
    }

    /**
    * Sets patchFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\PatchFilter[] $patchFilters 批准规则过滤
    *
    * @return $this
    */
    public function setPatchFilters($patchFilters)
    {
        $this->container['patchFilters'] = $patchFilters;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets complianceLevel
    *  合规性报告级别
    *
    * @return string
    */
    public function getComplianceLevel()
    {
        return $this->container['complianceLevel'];
    }

    /**
    * Sets complianceLevel
    *
    * @param string $complianceLevel 合规性报告级别
    *
    * @return $this
    */
    public function setComplianceLevel($complianceLevel)
    {
        $this->container['complianceLevel'] = $complianceLevel;
        return $this;
    }

    /**
    * Gets approveAfterDays
    *  指定天数后批准补丁，指定的天数
    *
    * @return int|null
    */
    public function getApproveAfterDays()
    {
        return $this->container['approveAfterDays'];
    }

    /**
    * Sets approveAfterDays
    *
    * @param int|null $approveAfterDays 指定天数后批准补丁，指定的天数
    *
    * @return $this
    */
    public function setApproveAfterDays($approveAfterDays)
    {
        $this->container['approveAfterDays'] = $approveAfterDays;
        return $this;
    }

    /**
    * Gets approveUntilDate
    *  批准指定日期之前发布的补丁,指定的日期时间戳
    *
    * @return int|null
    */
    public function getApproveUntilDate()
    {
        return $this->container['approveUntilDate'];
    }

    /**
    * Sets approveUntilDate
    *
    * @param int|null $approveUntilDate 批准指定日期之前发布的补丁,指定的日期时间戳
    *
    * @return $this
    */
    public function setApproveUntilDate($approveUntilDate)
    {
        $this->container['approveUntilDate'] = $approveUntilDate;
        return $this;
    }

    /**
    * Gets enableNonSecurity
    *  是否包括非安全性更新
    *
    * @return bool
    */
    public function getEnableNonSecurity()
    {
        return $this->container['enableNonSecurity'];
    }

    /**
    * Sets enableNonSecurity
    *
    * @param bool $enableNonSecurity 是否包括非安全性更新
    *
    * @return $this
    */
    public function setEnableNonSecurity($enableNonSecurity)
    {
        $this->container['enableNonSecurity'] = $enableNonSecurity;
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

