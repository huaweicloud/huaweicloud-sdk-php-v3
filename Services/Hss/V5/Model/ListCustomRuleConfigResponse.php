<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomRuleConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomRuleConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hostNum  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    * ruleName  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    * ruleStatus  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'hostNum' => 'int',
            'ruleName' => 'string',
            'ruleStatus' => 'int',
            'ruleType' => 'string',
            'autoBlock' => 'int',
            'hashType' => 'string',
            'isAllHost' => 'bool',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hostNum  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    * ruleName  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    * ruleStatus  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'hostNum' => 'int32',
        'ruleName' => null,
        'ruleStatus' => 'int32',
        'ruleType' => null,
        'autoBlock' => 'int8',
        'hashType' => null,
        'isAllHost' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hostNum  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    * ruleName  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    * ruleStatus  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'hostNum' => 'host_num',
            'ruleName' => 'rule_name',
            'ruleStatus' => 'rule_status',
            'ruleType' => 'rule_type',
            'autoBlock' => 'auto_block',
            'hashType' => 'hash_type',
            'isAllHost' => 'is_all_host',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hostNum  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    * ruleName  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    * ruleStatus  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'hostNum' => 'setHostNum',
            'ruleName' => 'setRuleName',
            'ruleStatus' => 'setRuleStatus',
            'ruleType' => 'setRuleType',
            'autoBlock' => 'setAutoBlock',
            'hashType' => 'setHashType',
            'isAllHost' => 'setIsAllHost',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hostNum  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    * ruleName  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    * ruleStatus  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'hostNum' => 'getHostNum',
            'ruleName' => 'getRuleName',
            'ruleStatus' => 'getRuleStatus',
            'ruleType' => 'getRuleType',
            'autoBlock' => 'getAutoBlock',
            'hashType' => 'getHashType',
            'isAllHost' => 'getIsAllHost',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleStatus'] = isset($data['ruleStatus']) ? $data['ruleStatus'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['autoBlock'] = isset($data['autoBlock']) ? $data['autoBlock'] : null;
        $this->container['hashType'] = isset($data['hashType']) ? $data['hashType'] : null;
        $this->container['isAllHost'] = isset($data['isAllHost']) ? $data['isAllHost'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hashType']) && (mb_strlen($this->container['hashType']) > 15)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['hashType']) && (mb_strlen($this->container['hashType']) < 1)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets ruleId
    *  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
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
    * @param int|null $hostNum **参数解释**: 防护主机数量。 **取值范围**: 最小值1，最大值2000000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets ruleName
    *  **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
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
    * @param string|null $ruleName **参数解释**： 规则名称 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleStatus
    *  **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    *
    * @return int|null
    */
    public function getRuleStatus()
    {
        return $this->container['ruleStatus'];
    }

    /**
    * Sets ruleStatus
    *
    * @param int|null $ruleStatus **参数解释**： 规则状态 **取值范围**: - 0：停用 - 1：启用
    *
    * @return $this
    */
    public function setRuleStatus($ruleStatus)
    {
        $this->container['ruleStatus'] = $ruleStatus;
        return $this;
    }

    /**
    * Gets ruleType
    *  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets autoBlock
    *  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    *
    * @return int|null
    */
    public function getAutoBlock()
    {
        return $this->container['autoBlock'];
    }

    /**
    * Sets autoBlock
    *
    * @param int|null $autoBlock **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    *
    * @return $this
    */
    public function setAutoBlock($autoBlock)
    {
        $this->container['autoBlock'] = $autoBlock;
        return $this;
    }

    /**
    * Gets hashType
    *  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    *
    * @return string|null
    */
    public function getHashType()
    {
        return $this->container['hashType'];
    }

    /**
    * Sets hashType
    *
    * @param string|null $hashType **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    *
    * @return $this
    */
    public function setHashType($hashType)
    {
        $this->container['hashType'] = $hashType;
        return $this;
    }

    /**
    * Gets isAllHost
    *  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsAllHost()
    {
        return $this->container['isAllHost'];
    }

    /**
    * Sets isAllHost
    *
    * @param bool|null $isAllHost **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setIsAllHost($isAllHost)
    {
        $this->container['isAllHost'] = $isAllHost;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
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
    * @param int|null $createTime **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
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
    * @param int|null $updateTime **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

