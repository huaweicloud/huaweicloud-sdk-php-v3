<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomRuleConfigDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomRuleConfigDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * ruleValues  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    * agentIds  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'hashType' => 'string',
            'autoBlock' => 'int',
            'isAllHost' => 'bool',
            'ruleType' => 'string',
            'ruleValues' => 'string[]',
            'agentIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * ruleValues  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    * agentIds  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'hashType' => null,
        'autoBlock' => 'int8',
        'isAllHost' => null,
        'ruleType' => null,
        'ruleValues' => null,
        'agentIds' => null
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
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * ruleValues  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    * agentIds  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'hashType' => 'hash_type',
            'autoBlock' => 'auto_block',
            'isAllHost' => 'is_all_host',
            'ruleType' => 'rule_type',
            'ruleValues' => 'rule_values',
            'agentIds' => 'agent_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * ruleValues  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    * agentIds  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'hashType' => 'setHashType',
            'autoBlock' => 'setAutoBlock',
            'isAllHost' => 'setIsAllHost',
            'ruleType' => 'setRuleType',
            'ruleValues' => 'setRuleValues',
            'agentIds' => 'setAgentIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  **参数解释**： 规则ID **取值范围**： 字符长度1-36位
    * hashType  **参数解释**： hash类型 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum
    * autoBlock  **参数解释**： 是否自动阻断告警 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警
    * isAllHost  **参数解释**: 是否选择所有主机 **取值范围**: - true：是 - false：否
    * ruleType  **参数解释**： 规则类型 **取值范围**： - black_hash：黑hash
    * ruleValues  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    * agentIds  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'hashType' => 'getHashType',
            'autoBlock' => 'getAutoBlock',
            'isAllHost' => 'getIsAllHost',
            'ruleType' => 'getRuleType',
            'ruleValues' => 'getRuleValues',
            'agentIds' => 'getAgentIds'
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
        $this->container['hashType'] = isset($data['hashType']) ? $data['hashType'] : null;
        $this->container['autoBlock'] = isset($data['autoBlock']) ? $data['autoBlock'] : null;
        $this->container['isAllHost'] = isset($data['isAllHost']) ? $data['isAllHost'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['ruleValues'] = isset($data['ruleValues']) ? $data['ruleValues'] : null;
        $this->container['agentIds'] = isset($data['agentIds']) ? $data['agentIds'] : null;
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
            if (!is_null($this->container['hashType']) && (mb_strlen($this->container['hashType']) > 15)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['hashType']) && (mb_strlen($this->container['hashType']) < 1)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 1.";
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
    * Gets ruleValues
    *  **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    *
    * @return string[]|null
    */
    public function getRuleValues()
    {
        return $this->container['ruleValues'];
    }

    /**
    * Sets ruleValues
    *
    * @param string[]|null $ruleValues **参数解释**： 规则集列表 **取值范围**: 1-1000个规则值
    *
    * @return $this
    */
    public function setRuleValues($ruleValues)
    {
        $this->container['ruleValues'] = $ruleValues;
        return $this;
    }

    /**
    * Gets agentIds
    *  **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @return string[]|null
    */
    public function getAgentIds()
    {
        return $this->container['agentIds'];
    }

    /**
    * Sets agentIds
    *
    * @param string[]|null $agentIds **参数解释**: agent列表 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentIds($agentIds)
    {
        $this->container['agentIds'] = $agentIds;
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

