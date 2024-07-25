<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrchestrationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrchestrationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orchestrationName  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    * orchestrationStrategy  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    * orchestrationMappedParam  orchestrationMappedParam
    * isPreprocessing  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    * orchestrationMap  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    * orchestrationId  编排规则编号。
    * orchestrationCreateTime  编排规则创建时间。
    * orchestrationUpdateTime  编排规则更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orchestrationName' => 'string',
            'orchestrationStrategy' => 'string',
            'orchestrationMappedParam' => '\HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMappedParam',
            'isPreprocessing' => 'bool',
            'orchestrationMap' => '\HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMap[]',
            'orchestrationId' => 'string',
            'orchestrationCreateTime' => '\DateTime',
            'orchestrationUpdateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orchestrationName  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    * orchestrationStrategy  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    * orchestrationMappedParam  orchestrationMappedParam
    * isPreprocessing  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    * orchestrationMap  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    * orchestrationId  编排规则编号。
    * orchestrationCreateTime  编排规则创建时间。
    * orchestrationUpdateTime  编排规则更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orchestrationName' => null,
        'orchestrationStrategy' => null,
        'orchestrationMappedParam' => null,
        'isPreprocessing' => null,
        'orchestrationMap' => null,
        'orchestrationId' => null,
        'orchestrationCreateTime' => 'date-time',
        'orchestrationUpdateTime' => 'date-time'
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
    * orchestrationName  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    * orchestrationStrategy  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    * orchestrationMappedParam  orchestrationMappedParam
    * isPreprocessing  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    * orchestrationMap  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    * orchestrationId  编排规则编号。
    * orchestrationCreateTime  编排规则创建时间。
    * orchestrationUpdateTime  编排规则更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orchestrationName' => 'orchestration_name',
            'orchestrationStrategy' => 'orchestration_strategy',
            'orchestrationMappedParam' => 'orchestration_mapped_param',
            'isPreprocessing' => 'is_preprocessing',
            'orchestrationMap' => 'orchestration_map',
            'orchestrationId' => 'orchestration_id',
            'orchestrationCreateTime' => 'orchestration_create_time',
            'orchestrationUpdateTime' => 'orchestration_update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orchestrationName  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    * orchestrationStrategy  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    * orchestrationMappedParam  orchestrationMappedParam
    * isPreprocessing  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    * orchestrationMap  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    * orchestrationId  编排规则编号。
    * orchestrationCreateTime  编排规则创建时间。
    * orchestrationUpdateTime  编排规则更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'orchestrationName' => 'setOrchestrationName',
            'orchestrationStrategy' => 'setOrchestrationStrategy',
            'orchestrationMappedParam' => 'setOrchestrationMappedParam',
            'isPreprocessing' => 'setIsPreprocessing',
            'orchestrationMap' => 'setOrchestrationMap',
            'orchestrationId' => 'setOrchestrationId',
            'orchestrationCreateTime' => 'setOrchestrationCreateTime',
            'orchestrationUpdateTime' => 'setOrchestrationUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orchestrationName  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    * orchestrationStrategy  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    * orchestrationMappedParam  orchestrationMappedParam
    * isPreprocessing  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    * orchestrationMap  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    * orchestrationId  编排规则编号。
    * orchestrationCreateTime  编排规则创建时间。
    * orchestrationUpdateTime  编排规则更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'orchestrationName' => 'getOrchestrationName',
            'orchestrationStrategy' => 'getOrchestrationStrategy',
            'orchestrationMappedParam' => 'getOrchestrationMappedParam',
            'isPreprocessing' => 'getIsPreprocessing',
            'orchestrationMap' => 'getOrchestrationMap',
            'orchestrationId' => 'getOrchestrationId',
            'orchestrationCreateTime' => 'getOrchestrationCreateTime',
            'orchestrationUpdateTime' => 'getOrchestrationUpdateTime'
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
    const ORCHESTRATION_STRATEGY__LIST = 'list';
    const ORCHESTRATION_STRATEGY_HASH = 'hash';
    const ORCHESTRATION_STRATEGY_RANGE = 'range';
    const ORCHESTRATION_STRATEGY_HASH_RANGE = 'hash_range';
    const ORCHESTRATION_STRATEGY_NONE_VALUE = 'none_value';
    const ORCHESTRATION_STRATEGY__DEFAULT = 'default';
    const ORCHESTRATION_STRATEGY_HEAD_N = 'head_n';
    const ORCHESTRATION_STRATEGY_TAIL_N = 'tail_n';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrchestrationStrategyAllowableValues()
    {
        return [
            self::ORCHESTRATION_STRATEGY__LIST,
            self::ORCHESTRATION_STRATEGY_HASH,
            self::ORCHESTRATION_STRATEGY_RANGE,
            self::ORCHESTRATION_STRATEGY_HASH_RANGE,
            self::ORCHESTRATION_STRATEGY_NONE_VALUE,
            self::ORCHESTRATION_STRATEGY__DEFAULT,
            self::ORCHESTRATION_STRATEGY_HEAD_N,
            self::ORCHESTRATION_STRATEGY_TAIL_N,
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
        $this->container['orchestrationName'] = isset($data['orchestrationName']) ? $data['orchestrationName'] : null;
        $this->container['orchestrationStrategy'] = isset($data['orchestrationStrategy']) ? $data['orchestrationStrategy'] : null;
        $this->container['orchestrationMappedParam'] = isset($data['orchestrationMappedParam']) ? $data['orchestrationMappedParam'] : null;
        $this->container['isPreprocessing'] = isset($data['isPreprocessing']) ? $data['isPreprocessing'] : null;
        $this->container['orchestrationMap'] = isset($data['orchestrationMap']) ? $data['orchestrationMap'] : null;
        $this->container['orchestrationId'] = isset($data['orchestrationId']) ? $data['orchestrationId'] : null;
        $this->container['orchestrationCreateTime'] = isset($data['orchestrationCreateTime']) ? $data['orchestrationCreateTime'] : null;
        $this->container['orchestrationUpdateTime'] = isset($data['orchestrationUpdateTime']) ? $data['orchestrationUpdateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['orchestrationName'] === null) {
            $invalidProperties[] = "'orchestrationName' can't be null";
        }
            if ((mb_strlen($this->container['orchestrationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'orchestrationName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['orchestrationName']) < 3)) {
                $invalidProperties[] = "invalid value for 'orchestrationName', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]{2,63}$/", $this->container['orchestrationName'])) {
                $invalidProperties[] = "invalid value for 'orchestrationName', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9_]{2,63}$/.";
            }
        if ($this->container['orchestrationStrategy'] === null) {
            $invalidProperties[] = "'orchestrationStrategy' can't be null";
        }
            $allowedValues = $this->getOrchestrationStrategyAllowableValues();
                if (!is_null($this->container['orchestrationStrategy']) && !in_array($this->container['orchestrationStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orchestrationStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets orchestrationName
    *  编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    *
    * @return string
    */
    public function getOrchestrationName()
    {
        return $this->container['orchestrationName'];
    }

    /**
    * Sets orchestrationName
    *
    * @param string $orchestrationName 编排映射规则名称。  支持英文，数字，下划线，且只能以英文开头，3-64个字符，同一实例下不允许重名。
    *
    * @return $this
    */
    public function setOrchestrationName($orchestrationName)
    {
        $this->container['orchestrationName'] = $orchestrationName;
        return $this;
    }

    /**
    * Gets orchestrationStrategy
    *  编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    *
    * @return string
    */
    public function getOrchestrationStrategy()
    {
        return $this->container['orchestrationStrategy'];
    }

    /**
    * Sets orchestrationStrategy
    *
    * @param string $orchestrationStrategy 编排策略，有以下几种策略类型： - list：列表； - hash：哈希； - range：区间； - hash_range: 哈希+区间； - none_value: 空值映射； - default: 默认值映射； - head_n: 截取前n项； - tail_n: 截取后n项； 当编排策略为list时，orchestration_map列表长度*map_param_list长度不超过3000。
    *
    * @return $this
    */
    public function setOrchestrationStrategy($orchestrationStrategy)
    {
        $this->container['orchestrationStrategy'] = $orchestrationStrategy;
        return $this;
    }

    /**
    * Gets orchestrationMappedParam
    *  orchestrationMappedParam
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMappedParam|null
    */
    public function getOrchestrationMappedParam()
    {
        return $this->container['orchestrationMappedParam'];
    }

    /**
    * Sets orchestrationMappedParam
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMappedParam|null $orchestrationMappedParam orchestrationMappedParam
    *
    * @return $this
    */
    public function setOrchestrationMappedParam($orchestrationMappedParam)
    {
        $this->container['orchestrationMappedParam'] = $orchestrationMappedParam;
        return $this;
    }

    /**
    * Gets isPreprocessing
    *  是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    *
    * @return bool|null
    */
    public function getIsPreprocessing()
    {
        return $this->container['isPreprocessing'];
    }

    /**
    * Sets isPreprocessing
    *
    * @param bool|null $isPreprocessing 是否为预处理策略，预处理策略只会生成临时参数作为后面参数编排规则的入参标记。当为预处理策略时，该编排规则不能作为除default之外的最后一个编排规则。
    *
    * @return $this
    */
    public function setIsPreprocessing($isPreprocessing)
    {
        $this->container['isPreprocessing'] = $isPreprocessing;
        return $this;
    }

    /**
    * Gets orchestrationMap
    *  编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMap[]|null
    */
    public function getOrchestrationMap()
    {
        return $this->container['orchestrationMap'];
    }

    /**
    * Sets orchestrationMap
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMap[]|null $orchestrationMap 编排映射规则列表，列表长度范围为1-300。 编排映射规则的生效优先级与列表顺序保持一致，列表中靠前的配置匹配优先级较高。 映射规则不能重复，当orchestration_strategy=list时，map_param_list的列表也不能包含重复元素。
    *
    * @return $this
    */
    public function setOrchestrationMap($orchestrationMap)
    {
        $this->container['orchestrationMap'] = $orchestrationMap;
        return $this;
    }

    /**
    * Gets orchestrationId
    *  编排规则编号。
    *
    * @return string|null
    */
    public function getOrchestrationId()
    {
        return $this->container['orchestrationId'];
    }

    /**
    * Sets orchestrationId
    *
    * @param string|null $orchestrationId 编排规则编号。
    *
    * @return $this
    */
    public function setOrchestrationId($orchestrationId)
    {
        $this->container['orchestrationId'] = $orchestrationId;
        return $this;
    }

    /**
    * Gets orchestrationCreateTime
    *  编排规则创建时间。
    *
    * @return \DateTime|null
    */
    public function getOrchestrationCreateTime()
    {
        return $this->container['orchestrationCreateTime'];
    }

    /**
    * Sets orchestrationCreateTime
    *
    * @param \DateTime|null $orchestrationCreateTime 编排规则创建时间。
    *
    * @return $this
    */
    public function setOrchestrationCreateTime($orchestrationCreateTime)
    {
        $this->container['orchestrationCreateTime'] = $orchestrationCreateTime;
        return $this;
    }

    /**
    * Gets orchestrationUpdateTime
    *  编排规则更新时间。
    *
    * @return \DateTime|null
    */
    public function getOrchestrationUpdateTime()
    {
        return $this->container['orchestrationUpdateTime'];
    }

    /**
    * Sets orchestrationUpdateTime
    *
    * @param \DateTime|null $orchestrationUpdateTime 编排规则更新时间。
    *
    * @return $this
    */
    public function setOrchestrationUpdateTime($orchestrationUpdateTime)
    {
        $this->container['orchestrationUpdateTime'] = $orchestrationUpdateTime;
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

