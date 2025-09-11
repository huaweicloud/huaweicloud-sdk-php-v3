<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleRiskResponseRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleRiskResponse_rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  风险规则ID
    * name  风险规则名称
    * type  风险规则类型
    * feature  风险规则特征
    * status  风险规则状态。 - ON: 开启 - OFF: 关闭
    * rank  风险规则优先级。数字越小优先级越高。
    * riskLevel  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    * ruleType  规则类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'feature' => 'string',
            'status' => 'string',
            'rank' => 'int',
            'riskLevel' => 'string',
            'ruleType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  风险规则ID
    * name  风险规则名称
    * type  风险规则类型
    * feature  风险规则特征
    * status  风险规则状态。 - ON: 开启 - OFF: 关闭
    * rank  风险规则优先级。数字越小优先级越高。
    * riskLevel  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    * ruleType  规则类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'feature' => null,
        'status' => null,
        'rank' => 'int32',
        'riskLevel' => null,
        'ruleType' => null
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
    * id  风险规则ID
    * name  风险规则名称
    * type  风险规则类型
    * feature  风险规则特征
    * status  风险规则状态。 - ON: 开启 - OFF: 关闭
    * rank  风险规则优先级。数字越小优先级越高。
    * riskLevel  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    * ruleType  规则类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'feature' => 'feature',
            'status' => 'status',
            'rank' => 'rank',
            'riskLevel' => 'risk_level',
            'ruleType' => 'rule_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  风险规则ID
    * name  风险规则名称
    * type  风险规则类型
    * feature  风险规则特征
    * status  风险规则状态。 - ON: 开启 - OFF: 关闭
    * rank  风险规则优先级。数字越小优先级越高。
    * riskLevel  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    * ruleType  规则类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'feature' => 'setFeature',
            'status' => 'setStatus',
            'rank' => 'setRank',
            'riskLevel' => 'setRiskLevel',
            'ruleType' => 'setRuleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  风险规则ID
    * name  风险规则名称
    * type  风险规则类型
    * feature  风险规则特征
    * status  风险规则状态。 - ON: 开启 - OFF: 关闭
    * rank  风险规则优先级。数字越小优先级越高。
    * riskLevel  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    * ruleType  规则类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'feature' => 'getFeature',
            'status' => 'getStatus',
            'rank' => 'getRank',
            'riskLevel' => 'getRiskLevel',
            'ruleType' => 'getRuleType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets id
    *  风险规则ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 风险规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  风险规则名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 风险规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  风险规则类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 风险规则类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets feature
    *  风险规则特征
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature 风险规则特征
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets status
    *  风险规则状态。 - ON: 开启 - OFF: 关闭
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 风险规则状态。 - ON: 开启 - OFF: 关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets rank
    *  风险规则优先级。数字越小优先级越高。
    *
    * @return int|null
    */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
    * Sets rank
    *
    * @param int|null $rank 风险规则优先级。数字越小优先级越高。
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险级别 - LOW - MEDIUM - HIGH - NO_RISK
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets ruleType
    *  规则类型
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
    * @param string|null $ruleType 规则类型
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
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

