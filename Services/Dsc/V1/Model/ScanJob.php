<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScanJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScanJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * ruleGroups  任务使用的规则组
    * cycle  任务执行方式
    * status  任务当前状态
    * lastRunTime  任务上一次执行时间
    * createTime  任务创建时间
    * lastScanRisk  任务上一次扫描风险等级结果
    * useNlp  是否使用了NLP进行扫描
    * open  任务开启状态
    * topicUrn  SMN服务通知主题
    * startTime  任务启动时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ruleGroups' => 'string[]',
            'cycle' => 'string',
            'status' => 'string',
            'lastRunTime' => 'int',
            'createTime' => 'int',
            'lastScanRisk' => 'string',
            'useNlp' => 'bool',
            'open' => 'bool',
            'topicUrn' => 'string',
            'startTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * ruleGroups  任务使用的规则组
    * cycle  任务执行方式
    * status  任务当前状态
    * lastRunTime  任务上一次执行时间
    * createTime  任务创建时间
    * lastScanRisk  任务上一次扫描风险等级结果
    * useNlp  是否使用了NLP进行扫描
    * open  任务开启状态
    * topicUrn  SMN服务通知主题
    * startTime  任务启动时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ruleGroups' => null,
        'cycle' => null,
        'status' => null,
        'lastRunTime' => 'int64',
        'createTime' => 'int64',
        'lastScanRisk' => null,
        'useNlp' => null,
        'open' => null,
        'topicUrn' => null,
        'startTime' => 'int64'
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
    * id  任务ID
    * name  任务名称
    * ruleGroups  任务使用的规则组
    * cycle  任务执行方式
    * status  任务当前状态
    * lastRunTime  任务上一次执行时间
    * createTime  任务创建时间
    * lastScanRisk  任务上一次扫描风险等级结果
    * useNlp  是否使用了NLP进行扫描
    * open  任务开启状态
    * topicUrn  SMN服务通知主题
    * startTime  任务启动时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ruleGroups' => 'rule_groups',
            'cycle' => 'cycle',
            'status' => 'status',
            'lastRunTime' => 'last_run_time',
            'createTime' => 'create_time',
            'lastScanRisk' => 'last_scan_risk',
            'useNlp' => 'use_nlp',
            'open' => 'open',
            'topicUrn' => 'topic_urn',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * name  任务名称
    * ruleGroups  任务使用的规则组
    * cycle  任务执行方式
    * status  任务当前状态
    * lastRunTime  任务上一次执行时间
    * createTime  任务创建时间
    * lastScanRisk  任务上一次扫描风险等级结果
    * useNlp  是否使用了NLP进行扫描
    * open  任务开启状态
    * topicUrn  SMN服务通知主题
    * startTime  任务启动时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ruleGroups' => 'setRuleGroups',
            'cycle' => 'setCycle',
            'status' => 'setStatus',
            'lastRunTime' => 'setLastRunTime',
            'createTime' => 'setCreateTime',
            'lastScanRisk' => 'setLastScanRisk',
            'useNlp' => 'setUseNlp',
            'open' => 'setOpen',
            'topicUrn' => 'setTopicUrn',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * name  任务名称
    * ruleGroups  任务使用的规则组
    * cycle  任务执行方式
    * status  任务当前状态
    * lastRunTime  任务上一次执行时间
    * createTime  任务创建时间
    * lastScanRisk  任务上一次扫描风险等级结果
    * useNlp  是否使用了NLP进行扫描
    * open  任务开启状态
    * topicUrn  SMN服务通知主题
    * startTime  任务启动时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ruleGroups' => 'getRuleGroups',
            'cycle' => 'getCycle',
            'status' => 'getStatus',
            'lastRunTime' => 'getLastRunTime',
            'createTime' => 'getCreateTime',
            'lastScanRisk' => 'getLastScanRisk',
            'useNlp' => 'getUseNlp',
            'open' => 'getOpen',
            'topicUrn' => 'getTopicUrn',
            'startTime' => 'getStartTime'
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
    const STATUS_INIT = 'INIT';
    const STATUS_WAITING = 'WAITING';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FAILED = 'FAILED';
    const STATUS_STOPPED = 'STOPPED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_TERMINATED = 'TERMINATED';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_WAITING,
            self::STATUS_RUNNING,
            self::STATUS_FAILED,
            self::STATUS_STOPPED,
            self::STATUS_FINISHED,
            self::STATUS_TERMINATED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ruleGroups'] = isset($data['ruleGroups']) ? $data['ruleGroups'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastRunTime'] = isset($data['lastRunTime']) ? $data['lastRunTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastScanRisk'] = isset($data['lastScanRisk']) ? $data['lastScanRisk'] : null;
        $this->container['useNlp'] = isset($data['useNlp']) ? $data['useNlp'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  任务ID
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
    * @param string|null $id 任务ID
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
    *  任务名称
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
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ruleGroups
    *  任务使用的规则组
    *
    * @return string[]|null
    */
    public function getRuleGroups()
    {
        return $this->container['ruleGroups'];
    }

    /**
    * Sets ruleGroups
    *
    * @param string[]|null $ruleGroups 任务使用的规则组
    *
    * @return $this
    */
    public function setRuleGroups($ruleGroups)
    {
        $this->container['ruleGroups'] = $ruleGroups;
        return $this;
    }

    /**
    * Gets cycle
    *  任务执行方式
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
    * @param string|null $cycle 任务执行方式
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets status
    *  任务当前状态
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
    * @param string|null $status 任务当前状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastRunTime
    *  任务上一次执行时间
    *
    * @return int|null
    */
    public function getLastRunTime()
    {
        return $this->container['lastRunTime'];
    }

    /**
    * Sets lastRunTime
    *
    * @param int|null $lastRunTime 任务上一次执行时间
    *
    * @return $this
    */
    public function setLastRunTime($lastRunTime)
    {
        $this->container['lastRunTime'] = $lastRunTime;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间
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
    * @param int|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastScanRisk
    *  任务上一次扫描风险等级结果
    *
    * @return string|null
    */
    public function getLastScanRisk()
    {
        return $this->container['lastScanRisk'];
    }

    /**
    * Sets lastScanRisk
    *
    * @param string|null $lastScanRisk 任务上一次扫描风险等级结果
    *
    * @return $this
    */
    public function setLastScanRisk($lastScanRisk)
    {
        $this->container['lastScanRisk'] = $lastScanRisk;
        return $this;
    }

    /**
    * Gets useNlp
    *  是否使用了NLP进行扫描
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
    * @param bool|null $useNlp 是否使用了NLP进行扫描
    *
    * @return $this
    */
    public function setUseNlp($useNlp)
    {
        $this->container['useNlp'] = $useNlp;
        return $this;
    }

    /**
    * Gets open
    *  任务开启状态
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
    * @param bool|null $open 任务开启状态
    *
    * @return $this
    */
    public function setOpen($open)
    {
        $this->container['open'] = $open;
        return $this;
    }

    /**
    * Gets topicUrn
    *  SMN服务通知主题
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
    * @param string|null $topicUrn SMN服务通知主题
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets startTime
    *  任务启动时间
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
    * @param int|null $startTime 任务启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

