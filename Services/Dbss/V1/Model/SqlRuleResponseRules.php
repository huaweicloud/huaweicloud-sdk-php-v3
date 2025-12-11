<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlRuleResponseRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlRuleResponse_rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SQL规则ID
    * name  SQL规则名称
    * status  规则的状态： - ON： 启用 - OFF： 禁用
    * riskLevel  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    * type  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    * rank  优先级。数字越小优先级越高。
    * feature  SQL命令特征
    * regex  正则表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'riskLevel' => 'string',
            'type' => 'string',
            'rank' => 'int',
            'feature' => 'string',
            'regex' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SQL规则ID
    * name  SQL规则名称
    * status  规则的状态： - ON： 启用 - OFF： 禁用
    * riskLevel  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    * type  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    * rank  优先级。数字越小优先级越高。
    * feature  SQL命令特征
    * regex  正则表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'riskLevel' => null,
        'type' => null,
        'rank' => 'int32',
        'feature' => null,
        'regex' => null
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
    * id  SQL规则ID
    * name  SQL规则名称
    * status  规则的状态： - ON： 启用 - OFF： 禁用
    * riskLevel  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    * type  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    * rank  优先级。数字越小优先级越高。
    * feature  SQL命令特征
    * regex  正则表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'riskLevel' => 'risk_level',
            'type' => 'type',
            'rank' => 'rank',
            'feature' => 'feature',
            'regex' => 'regex'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SQL规则ID
    * name  SQL规则名称
    * status  规则的状态： - ON： 启用 - OFF： 禁用
    * riskLevel  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    * type  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    * rank  优先级。数字越小优先级越高。
    * feature  SQL命令特征
    * regex  正则表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'riskLevel' => 'setRiskLevel',
            'type' => 'setType',
            'rank' => 'setRank',
            'feature' => 'setFeature',
            'regex' => 'setRegex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SQL规则ID
    * name  SQL规则名称
    * status  规则的状态： - ON： 启用 - OFF： 禁用
    * riskLevel  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    * type  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    * rank  优先级。数字越小优先级越高。
    * feature  SQL命令特征
    * regex  正则表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'riskLevel' => 'getRiskLevel',
            'type' => 'getType',
            'rank' => 'getRank',
            'feature' => 'getFeature',
            'regex' => 'getRegex'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
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
    * Gets id
    *  SQL规则ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id SQL规则ID
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
    *  SQL规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name SQL规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  规则的状态： - ON： 启用 - OFF： 禁用
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 规则的状态： - ON： 启用 - OFF： 禁用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
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
    * @param string|null $riskLevel 风险级别 - HIGH： 高 - MEDIUM：中 - LOW：低
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets type
    *  风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
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
    * @param string|null $type 风险类型 - SYSTEM: 系统  - CUSTOMIZE：自定义
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets rank
    *  优先级。数字越小优先级越高。
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
    * @param int|null $rank 优先级。数字越小优先级越高。
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
        return $this;
    }

    /**
    * Gets feature
    *  SQL命令特征
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
    * @param string|null $feature SQL命令特征
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets regex
    *  正则表达式
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 正则表达式
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
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

