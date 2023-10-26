<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScanJobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScanJobRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetIds  资产ID列表
    * cycle  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    * name  扫描任务名
    * open  是否开启任务
    * ruleGroupIds  规则组ID列表
    * startTime  扫描任务开始时间
    * timeZone  时区
    * topicUrn  主题的唯一资源标识符
    * useNlp  是否用nlp
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetIds' => 'string[]',
            'cycle' => 'string',
            'name' => 'string',
            'open' => 'bool',
            'ruleGroupIds' => 'string[]',
            'startTime' => 'int',
            'timeZone' => 'string',
            'topicUrn' => 'string',
            'useNlp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetIds  资产ID列表
    * cycle  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    * name  扫描任务名
    * open  是否开启任务
    * ruleGroupIds  规则组ID列表
    * startTime  扫描任务开始时间
    * timeZone  时区
    * topicUrn  主题的唯一资源标识符
    * useNlp  是否用nlp
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetIds' => null,
        'cycle' => null,
        'name' => null,
        'open' => null,
        'ruleGroupIds' => null,
        'startTime' => 'int64',
        'timeZone' => null,
        'topicUrn' => null,
        'useNlp' => null
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
    * assetIds  资产ID列表
    * cycle  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    * name  扫描任务名
    * open  是否开启任务
    * ruleGroupIds  规则组ID列表
    * startTime  扫描任务开始时间
    * timeZone  时区
    * topicUrn  主题的唯一资源标识符
    * useNlp  是否用nlp
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetIds' => 'asset_ids',
            'cycle' => 'cycle',
            'name' => 'name',
            'open' => 'open',
            'ruleGroupIds' => 'rule_group_ids',
            'startTime' => 'start_time',
            'timeZone' => 'time_zone',
            'topicUrn' => 'topic_urn',
            'useNlp' => 'use_nlp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetIds  资产ID列表
    * cycle  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    * name  扫描任务名
    * open  是否开启任务
    * ruleGroupIds  规则组ID列表
    * startTime  扫描任务开始时间
    * timeZone  时区
    * topicUrn  主题的唯一资源标识符
    * useNlp  是否用nlp
    *
    * @var string[]
    */
    protected static $setters = [
            'assetIds' => 'setAssetIds',
            'cycle' => 'setCycle',
            'name' => 'setName',
            'open' => 'setOpen',
            'ruleGroupIds' => 'setRuleGroupIds',
            'startTime' => 'setStartTime',
            'timeZone' => 'setTimeZone',
            'topicUrn' => 'setTopicUrn',
            'useNlp' => 'setUseNlp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetIds  资产ID列表
    * cycle  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    * name  扫描任务名
    * open  是否开启任务
    * ruleGroupIds  规则组ID列表
    * startTime  扫描任务开始时间
    * timeZone  时区
    * topicUrn  主题的唯一资源标识符
    * useNlp  是否用nlp
    *
    * @var string[]
    */
    protected static $getters = [
            'assetIds' => 'getAssetIds',
            'cycle' => 'getCycle',
            'name' => 'getName',
            'open' => 'getOpen',
            'ruleGroupIds' => 'getRuleGroupIds',
            'startTime' => 'getStartTime',
            'timeZone' => 'getTimeZone',
            'topicUrn' => 'getTopicUrn',
            'useNlp' => 'getUseNlp'
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
    const CYCLE_ONCE = 'ONCE';
    const CYCLE_DAY = 'DAY';
    const CYCLE_WEEK = 'WEEK';
    const CYCLE_MONTH = 'MONTH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCycleAllowableValues()
    {
        return [
            self::CYCLE_ONCE,
            self::CYCLE_DAY,
            self::CYCLE_WEEK,
            self::CYCLE_MONTH,
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
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['ruleGroupIds'] = isset($data['ruleGroupIds']) ? $data['ruleGroupIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['useNlp'] = isset($data['useNlp']) ? $data['useNlp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCycleAllowableValues();
                if (!is_null($this->container['cycle']) && !in_array($this->container['cycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cycle', must be one of '%s'",
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
    * Gets assetIds
    *  资产ID列表
    *
    * @return string[]|null
    */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
    * Sets assetIds
    *
    * @param string[]|null $assetIds 资产ID列表
    *
    * @return $this
    */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;
        return $this;
    }

    /**
    * Gets cycle
    *  扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    *
    * @return string|null
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string|null $cycle 扫描周期，日(DAY)，周(WEEK)，月(MONTH)，单次扫描(ONCE)
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets name
    *  扫描任务名
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
    * @param string|null $name 扫描任务名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets open
    *  是否开启任务
    *
    * @return bool|null
    */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
    * Sets open
    *
    * @param bool|null $open 是否开启任务
    *
    * @return $this
    */
    public function setOpen($open)
    {
        $this->container['open'] = $open;
        return $this;
    }

    /**
    * Gets ruleGroupIds
    *  规则组ID列表
    *
    * @return string[]|null
    */
    public function getRuleGroupIds()
    {
        return $this->container['ruleGroupIds'];
    }

    /**
    * Sets ruleGroupIds
    *
    * @param string[]|null $ruleGroupIds 规则组ID列表
    *
    * @return $this
    */
    public function setRuleGroupIds($ruleGroupIds)
    {
        $this->container['ruleGroupIds'] = $ruleGroupIds;
        return $this;
    }

    /**
    * Gets startTime
    *  扫描任务开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 扫描任务开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题的唯一资源标识符
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题的唯一资源标识符
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets useNlp
    *  是否用nlp
    *
    * @return bool|null
    */
    public function getUseNlp()
    {
        return $this->container['useNlp'];
    }

    /**
    * Sets useNlp
    *
    * @param bool|null $useNlp 是否用nlp
    *
    * @return $this
    */
    public function setUseNlp($useNlp)
    {
        $this->container['useNlp'] = $useNlp;
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

