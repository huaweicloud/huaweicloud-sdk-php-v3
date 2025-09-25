<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAppWhitelistPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAppWhitelistPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * updateTime  更新时间，毫秒
    * totalNum  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    * unconfirmedNum  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * autoApply  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'policyType' => 'string',
            'intercept' => 'bool',
            'updateTime' => 'int',
            'totalNum' => 'int',
            'unconfirmedNum' => 'int',
            'trustNum' => 'int',
            'suspiciousNum' => 'int',
            'maliciousNum' => 'int',
            'unknownNum' => 'int',
            'autoApply' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * updateTime  更新时间，毫秒
    * totalNum  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    * unconfirmedNum  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * autoApply  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'policyType' => null,
        'intercept' => null,
        'updateTime' => 'int64',
        'totalNum' => 'int32',
        'unconfirmedNum' => 'int32',
        'trustNum' => 'int32',
        'suspiciousNum' => 'int32',
        'maliciousNum' => 'int32',
        'unknownNum' => 'int32',
        'autoApply' => null
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
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * updateTime  更新时间，毫秒
    * totalNum  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    * unconfirmedNum  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * autoApply  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'policyType' => 'policy_type',
            'intercept' => 'intercept',
            'updateTime' => 'update_time',
            'totalNum' => 'total_num',
            'unconfirmedNum' => 'unconfirmed_num',
            'trustNum' => 'trust_num',
            'suspiciousNum' => 'suspicious_num',
            'maliciousNum' => 'malicious_num',
            'unknownNum' => 'unknown_num',
            'autoApply' => 'auto_apply'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * updateTime  更新时间，毫秒
    * totalNum  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    * unconfirmedNum  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * autoApply  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'policyType' => 'setPolicyType',
            'intercept' => 'setIntercept',
            'updateTime' => 'setUpdateTime',
            'totalNum' => 'setTotalNum',
            'unconfirmedNum' => 'setUnconfirmedNum',
            'trustNum' => 'setTrustNum',
            'suspiciousNum' => 'setSuspiciousNum',
            'maliciousNum' => 'setMaliciousNum',
            'unknownNum' => 'setUnknownNum',
            'autoApply' => 'setAutoApply'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * updateTime  更新时间，毫秒
    * totalNum  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    * unconfirmedNum  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * autoApply  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'policyType' => 'getPolicyType',
            'intercept' => 'getIntercept',
            'updateTime' => 'getUpdateTime',
            'totalNum' => 'getTotalNum',
            'unconfirmedNum' => 'getUnconfirmedNum',
            'trustNum' => 'getTrustNum',
            'suspiciousNum' => 'getSuspiciousNum',
            'maliciousNum' => 'getMaliciousNum',
            'unknownNum' => 'getUnknownNum',
            'autoApply' => 'getAutoApply'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['unconfirmedNum'] = isset($data['unconfirmedNum']) ? $data['unconfirmedNum'] : null;
        $this->container['trustNum'] = isset($data['trustNum']) ? $data['trustNum'] : null;
        $this->container['suspiciousNum'] = isset($data['suspiciousNum']) ? $data['suspiciousNum'] : null;
        $this->container['maliciousNum'] = isset($data['maliciousNum']) ? $data['maliciousNum'] : null;
        $this->container['unknownNum'] = isset($data['unknownNum']) ? $data['unknownNum'] : null;
        $this->container['autoApply'] = isset($data['autoApply']) ? $data['autoApply'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) > 10)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unconfirmedNum']) && ($this->container['unconfirmedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unconfirmedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unconfirmedNum']) && ($this->container['unconfirmedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unconfirmedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suspiciousNum']) && ($this->container['suspiciousNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'suspiciousNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['suspiciousNum']) && ($this->container['suspiciousNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'suspiciousNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousNum']) && ($this->container['maliciousNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maliciousNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maliciousNum']) && ($this->container['maliciousNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyType
    *  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return string|null
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string|null $policyType **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets intercept
    *  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
    * Sets intercept
    *
    * @param bool|null $intercept **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，毫秒
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**: 进程总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets unconfirmedNum
    *  **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnconfirmedNum()
    {
        return $this->container['unconfirmedNum'];
    }

    /**
    * Sets unconfirmedNum
    *
    * @param int|null $unconfirmedNum **参数解释**: 待确认进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnconfirmedNum($unconfirmedNum)
    {
        $this->container['unconfirmedNum'] = $unconfirmedNum;
        return $this;
    }

    /**
    * Gets trustNum
    *  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTrustNum()
    {
        return $this->container['trustNum'];
    }

    /**
    * Sets trustNum
    *
    * @param int|null $trustNum **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTrustNum($trustNum)
    {
        $this->container['trustNum'] = $trustNum;
        return $this;
    }

    /**
    * Gets suspiciousNum
    *  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSuspiciousNum()
    {
        return $this->container['suspiciousNum'];
    }

    /**
    * Sets suspiciousNum
    *
    * @param int|null $suspiciousNum **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSuspiciousNum($suspiciousNum)
    {
        $this->container['suspiciousNum'] = $suspiciousNum;
        return $this;
    }

    /**
    * Gets maliciousNum
    *  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMaliciousNum()
    {
        return $this->container['maliciousNum'];
    }

    /**
    * Sets maliciousNum
    *
    * @param int|null $maliciousNum **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMaliciousNum($maliciousNum)
    {
        $this->container['maliciousNum'] = $maliciousNum;
        return $this;
    }

    /**
    * Gets unknownNum
    *  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnknownNum()
    {
        return $this->container['unknownNum'];
    }

    /**
    * Sets unknownNum
    *
    * @param int|null $unknownNum **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnknownNum($unknownNum)
    {
        $this->container['unknownNum'] = $unknownNum;
        return $this;
    }

    /**
    * Gets autoApply
    *  **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getAutoApply()
    {
        return $this->container['autoApply'];
    }

    /**
    * Sets autoApply
    *
    * @param bool|null $autoApply **参数解释**： 是否自动应用策略 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAutoApply($autoApply)
    {
        $this->container['autoApply'] = $autoApply;
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

