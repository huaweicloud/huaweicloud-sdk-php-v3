<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteStrategiesVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteStrategiesVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * advancedConfig  advancedConfig
    * dailyReportEnable  日报 0 关闭 1开启
    * executeModel  执行顺序 串行 1 并行 2
    * executePeriodBegin  执行区间，开始时间
    * executePeriodEnd  执行区间，开始时间
    * executeStartTime  执行模式 立即执行 0，延后执行: 延后执行时间
    * executionTime  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    * executorOption  目前无用字段
    * executorParameters  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    * failedRetryTimes  失败重试次数
    * intervalInSeconds  执行间隔
    * ipKey  deployTest使用
    * locationIds  执行区域
    * operateNotice  operateNotice
    * pbi  deployTest使用
    * protocolTest  protocolTest
    * repeatTimes  重试次数，冒烟测试使用
    * serviceNameCbg  deployTest使用
    * serviceScopeCbg  deployTest使用
    * serviceVersionCbg  deployTest使用
    * testNodeServer  不再使用
    * timeoutMilSec  超时时间
    * timerExpression  执行时间表达式
    * token  deployTest使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'advancedConfig' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AdvancedConfig',
            'dailyReportEnable' => 'string',
            'executeModel' => 'string',
            'executePeriodBegin' => 'string',
            'executePeriodEnd' => 'string',
            'executeStartTime' => 'int',
            'executionTime' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecutionTime[]',
            'executorOption' => 'map[string,object]',
            'executorParameters' => 'map[string,object]',
            'failedRetryTimes' => 'int',
            'intervalInSeconds' => 'int',
            'ipKey' => 'string',
            'locationIds' => 'string[]',
            'operateNotice' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\OperateNotice',
            'pbi' => 'string',
            'protocolTest' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ProtocolTestVo',
            'repeatTimes' => 'int',
            'serviceNameCbg' => 'string',
            'serviceScopeCbg' => 'string',
            'serviceVersionCbg' => 'string',
            'testNodeServer' => 'string',
            'timeoutMilSec' => 'int',
            'timerExpression' => 'string',
            'token' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * advancedConfig  advancedConfig
    * dailyReportEnable  日报 0 关闭 1开启
    * executeModel  执行顺序 串行 1 并行 2
    * executePeriodBegin  执行区间，开始时间
    * executePeriodEnd  执行区间，开始时间
    * executeStartTime  执行模式 立即执行 0，延后执行: 延后执行时间
    * executionTime  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    * executorOption  目前无用字段
    * executorParameters  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    * failedRetryTimes  失败重试次数
    * intervalInSeconds  执行间隔
    * ipKey  deployTest使用
    * locationIds  执行区域
    * operateNotice  operateNotice
    * pbi  deployTest使用
    * protocolTest  protocolTest
    * repeatTimes  重试次数，冒烟测试使用
    * serviceNameCbg  deployTest使用
    * serviceScopeCbg  deployTest使用
    * serviceVersionCbg  deployTest使用
    * testNodeServer  不再使用
    * timeoutMilSec  超时时间
    * timerExpression  执行时间表达式
    * token  deployTest使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'advancedConfig' => null,
        'dailyReportEnable' => null,
        'executeModel' => null,
        'executePeriodBegin' => null,
        'executePeriodEnd' => null,
        'executeStartTime' => 'int64',
        'executionTime' => null,
        'executorOption' => null,
        'executorParameters' => null,
        'failedRetryTimes' => 'int32',
        'intervalInSeconds' => 'int32',
        'ipKey' => null,
        'locationIds' => null,
        'operateNotice' => null,
        'pbi' => null,
        'protocolTest' => null,
        'repeatTimes' => 'int32',
        'serviceNameCbg' => null,
        'serviceScopeCbg' => null,
        'serviceVersionCbg' => null,
        'testNodeServer' => null,
        'timeoutMilSec' => 'int32',
        'timerExpression' => null,
        'token' => null
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
    * advancedConfig  advancedConfig
    * dailyReportEnable  日报 0 关闭 1开启
    * executeModel  执行顺序 串行 1 并行 2
    * executePeriodBegin  执行区间，开始时间
    * executePeriodEnd  执行区间，开始时间
    * executeStartTime  执行模式 立即执行 0，延后执行: 延后执行时间
    * executionTime  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    * executorOption  目前无用字段
    * executorParameters  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    * failedRetryTimes  失败重试次数
    * intervalInSeconds  执行间隔
    * ipKey  deployTest使用
    * locationIds  执行区域
    * operateNotice  operateNotice
    * pbi  deployTest使用
    * protocolTest  protocolTest
    * repeatTimes  重试次数，冒烟测试使用
    * serviceNameCbg  deployTest使用
    * serviceScopeCbg  deployTest使用
    * serviceVersionCbg  deployTest使用
    * testNodeServer  不再使用
    * timeoutMilSec  超时时间
    * timerExpression  执行时间表达式
    * token  deployTest使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'advancedConfig' => 'advancedConfig',
            'dailyReportEnable' => 'dailyReportEnable',
            'executeModel' => 'executeModel',
            'executePeriodBegin' => 'executePeriodBegin',
            'executePeriodEnd' => 'executePeriodEnd',
            'executeStartTime' => 'executeStartTime',
            'executionTime' => 'executionTime',
            'executorOption' => 'executorOption',
            'executorParameters' => 'executorParameters',
            'failedRetryTimes' => 'failedRetryTimes',
            'intervalInSeconds' => 'intervalInSeconds',
            'ipKey' => 'ipKey',
            'locationIds' => 'location_ids',
            'operateNotice' => 'operateNotice',
            'pbi' => 'pbi',
            'protocolTest' => 'protocol_test',
            'repeatTimes' => 'repeatTimes',
            'serviceNameCbg' => 'serviceNameCBG',
            'serviceScopeCbg' => 'serviceScopeCBG',
            'serviceVersionCbg' => 'serviceVersionCBG',
            'testNodeServer' => 'testNodeServer',
            'timeoutMilSec' => 'timeoutMilSec',
            'timerExpression' => 'timerExpression',
            'token' => 'token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * advancedConfig  advancedConfig
    * dailyReportEnable  日报 0 关闭 1开启
    * executeModel  执行顺序 串行 1 并行 2
    * executePeriodBegin  执行区间，开始时间
    * executePeriodEnd  执行区间，开始时间
    * executeStartTime  执行模式 立即执行 0，延后执行: 延后执行时间
    * executionTime  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    * executorOption  目前无用字段
    * executorParameters  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    * failedRetryTimes  失败重试次数
    * intervalInSeconds  执行间隔
    * ipKey  deployTest使用
    * locationIds  执行区域
    * operateNotice  operateNotice
    * pbi  deployTest使用
    * protocolTest  protocolTest
    * repeatTimes  重试次数，冒烟测试使用
    * serviceNameCbg  deployTest使用
    * serviceScopeCbg  deployTest使用
    * serviceVersionCbg  deployTest使用
    * testNodeServer  不再使用
    * timeoutMilSec  超时时间
    * timerExpression  执行时间表达式
    * token  deployTest使用
    *
    * @var string[]
    */
    protected static $setters = [
            'advancedConfig' => 'setAdvancedConfig',
            'dailyReportEnable' => 'setDailyReportEnable',
            'executeModel' => 'setExecuteModel',
            'executePeriodBegin' => 'setExecutePeriodBegin',
            'executePeriodEnd' => 'setExecutePeriodEnd',
            'executeStartTime' => 'setExecuteStartTime',
            'executionTime' => 'setExecutionTime',
            'executorOption' => 'setExecutorOption',
            'executorParameters' => 'setExecutorParameters',
            'failedRetryTimes' => 'setFailedRetryTimes',
            'intervalInSeconds' => 'setIntervalInSeconds',
            'ipKey' => 'setIpKey',
            'locationIds' => 'setLocationIds',
            'operateNotice' => 'setOperateNotice',
            'pbi' => 'setPbi',
            'protocolTest' => 'setProtocolTest',
            'repeatTimes' => 'setRepeatTimes',
            'serviceNameCbg' => 'setServiceNameCbg',
            'serviceScopeCbg' => 'setServiceScopeCbg',
            'serviceVersionCbg' => 'setServiceVersionCbg',
            'testNodeServer' => 'setTestNodeServer',
            'timeoutMilSec' => 'setTimeoutMilSec',
            'timerExpression' => 'setTimerExpression',
            'token' => 'setToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * advancedConfig  advancedConfig
    * dailyReportEnable  日报 0 关闭 1开启
    * executeModel  执行顺序 串行 1 并行 2
    * executePeriodBegin  执行区间，开始时间
    * executePeriodEnd  执行区间，开始时间
    * executeStartTime  执行模式 立即执行 0，延后执行: 延后执行时间
    * executionTime  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    * executorOption  目前无用字段
    * executorParameters  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    * failedRetryTimes  失败重试次数
    * intervalInSeconds  执行间隔
    * ipKey  deployTest使用
    * locationIds  执行区域
    * operateNotice  operateNotice
    * pbi  deployTest使用
    * protocolTest  protocolTest
    * repeatTimes  重试次数，冒烟测试使用
    * serviceNameCbg  deployTest使用
    * serviceScopeCbg  deployTest使用
    * serviceVersionCbg  deployTest使用
    * testNodeServer  不再使用
    * timeoutMilSec  超时时间
    * timerExpression  执行时间表达式
    * token  deployTest使用
    *
    * @var string[]
    */
    protected static $getters = [
            'advancedConfig' => 'getAdvancedConfig',
            'dailyReportEnable' => 'getDailyReportEnable',
            'executeModel' => 'getExecuteModel',
            'executePeriodBegin' => 'getExecutePeriodBegin',
            'executePeriodEnd' => 'getExecutePeriodEnd',
            'executeStartTime' => 'getExecuteStartTime',
            'executionTime' => 'getExecutionTime',
            'executorOption' => 'getExecutorOption',
            'executorParameters' => 'getExecutorParameters',
            'failedRetryTimes' => 'getFailedRetryTimes',
            'intervalInSeconds' => 'getIntervalInSeconds',
            'ipKey' => 'getIpKey',
            'locationIds' => 'getLocationIds',
            'operateNotice' => 'getOperateNotice',
            'pbi' => 'getPbi',
            'protocolTest' => 'getProtocolTest',
            'repeatTimes' => 'getRepeatTimes',
            'serviceNameCbg' => 'getServiceNameCbg',
            'serviceScopeCbg' => 'getServiceScopeCbg',
            'serviceVersionCbg' => 'getServiceVersionCbg',
            'testNodeServer' => 'getTestNodeServer',
            'timeoutMilSec' => 'getTimeoutMilSec',
            'timerExpression' => 'getTimerExpression',
            'token' => 'getToken'
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
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
        $this->container['dailyReportEnable'] = isset($data['dailyReportEnable']) ? $data['dailyReportEnable'] : null;
        $this->container['executeModel'] = isset($data['executeModel']) ? $data['executeModel'] : null;
        $this->container['executePeriodBegin'] = isset($data['executePeriodBegin']) ? $data['executePeriodBegin'] : null;
        $this->container['executePeriodEnd'] = isset($data['executePeriodEnd']) ? $data['executePeriodEnd'] : null;
        $this->container['executeStartTime'] = isset($data['executeStartTime']) ? $data['executeStartTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['executorOption'] = isset($data['executorOption']) ? $data['executorOption'] : null;
        $this->container['executorParameters'] = isset($data['executorParameters']) ? $data['executorParameters'] : null;
        $this->container['failedRetryTimes'] = isset($data['failedRetryTimes']) ? $data['failedRetryTimes'] : null;
        $this->container['intervalInSeconds'] = isset($data['intervalInSeconds']) ? $data['intervalInSeconds'] : null;
        $this->container['ipKey'] = isset($data['ipKey']) ? $data['ipKey'] : null;
        $this->container['locationIds'] = isset($data['locationIds']) ? $data['locationIds'] : null;
        $this->container['operateNotice'] = isset($data['operateNotice']) ? $data['operateNotice'] : null;
        $this->container['pbi'] = isset($data['pbi']) ? $data['pbi'] : null;
        $this->container['protocolTest'] = isset($data['protocolTest']) ? $data['protocolTest'] : null;
        $this->container['repeatTimes'] = isset($data['repeatTimes']) ? $data['repeatTimes'] : null;
        $this->container['serviceNameCbg'] = isset($data['serviceNameCbg']) ? $data['serviceNameCbg'] : null;
        $this->container['serviceScopeCbg'] = isset($data['serviceScopeCbg']) ? $data['serviceScopeCbg'] : null;
        $this->container['serviceVersionCbg'] = isset($data['serviceVersionCbg']) ? $data['serviceVersionCbg'] : null;
        $this->container['testNodeServer'] = isset($data['testNodeServer']) ? $data['testNodeServer'] : null;
        $this->container['timeoutMilSec'] = isset($data['timeoutMilSec']) ? $data['timeoutMilSec'] : null;
        $this->container['timerExpression'] = isset($data['timerExpression']) ? $data['timerExpression'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
    * Gets advancedConfig
    *  advancedConfig
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AdvancedConfig|null
    */
    public function getAdvancedConfig()
    {
        return $this->container['advancedConfig'];
    }

    /**
    * Sets advancedConfig
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AdvancedConfig|null $advancedConfig advancedConfig
    *
    * @return $this
    */
    public function setAdvancedConfig($advancedConfig)
    {
        $this->container['advancedConfig'] = $advancedConfig;
        return $this;
    }

    /**
    * Gets dailyReportEnable
    *  日报 0 关闭 1开启
    *
    * @return string|null
    */
    public function getDailyReportEnable()
    {
        return $this->container['dailyReportEnable'];
    }

    /**
    * Sets dailyReportEnable
    *
    * @param string|null $dailyReportEnable 日报 0 关闭 1开启
    *
    * @return $this
    */
    public function setDailyReportEnable($dailyReportEnable)
    {
        $this->container['dailyReportEnable'] = $dailyReportEnable;
        return $this;
    }

    /**
    * Gets executeModel
    *  执行顺序 串行 1 并行 2
    *
    * @return string|null
    */
    public function getExecuteModel()
    {
        return $this->container['executeModel'];
    }

    /**
    * Sets executeModel
    *
    * @param string|null $executeModel 执行顺序 串行 1 并行 2
    *
    * @return $this
    */
    public function setExecuteModel($executeModel)
    {
        $this->container['executeModel'] = $executeModel;
        return $this;
    }

    /**
    * Gets executePeriodBegin
    *  执行区间，开始时间
    *
    * @return string|null
    */
    public function getExecutePeriodBegin()
    {
        return $this->container['executePeriodBegin'];
    }

    /**
    * Sets executePeriodBegin
    *
    * @param string|null $executePeriodBegin 执行区间，开始时间
    *
    * @return $this
    */
    public function setExecutePeriodBegin($executePeriodBegin)
    {
        $this->container['executePeriodBegin'] = $executePeriodBegin;
        return $this;
    }

    /**
    * Gets executePeriodEnd
    *  执行区间，开始时间
    *
    * @return string|null
    */
    public function getExecutePeriodEnd()
    {
        return $this->container['executePeriodEnd'];
    }

    /**
    * Sets executePeriodEnd
    *
    * @param string|null $executePeriodEnd 执行区间，开始时间
    *
    * @return $this
    */
    public function setExecutePeriodEnd($executePeriodEnd)
    {
        $this->container['executePeriodEnd'] = $executePeriodEnd;
        return $this;
    }

    /**
    * Gets executeStartTime
    *  执行模式 立即执行 0，延后执行: 延后执行时间
    *
    * @return int|null
    */
    public function getExecuteStartTime()
    {
        return $this->container['executeStartTime'];
    }

    /**
    * Sets executeStartTime
    *
    * @param int|null $executeStartTime 执行模式 立即执行 0，延后执行: 延后执行时间
    *
    * @return $this
    */
    public function setExecuteStartTime($executeStartTime)
    {
        $this->container['executeStartTime'] = $executeStartTime;
        return $this;
    }

    /**
    * Gets executionTime
    *  任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecutionTime[]|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecutionTime[]|null $executionTime 任务执行时间段 -- 重新启用，任务采用多段时间区间执行，quartz需要用这个参数
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets executorOption
    *  目前无用字段
    *
    * @return map[string,object]|null
    */
    public function getExecutorOption()
    {
        return $this->container['executorOption'];
    }

    /**
    * Sets executorOption
    *
    * @param map[string,object]|null $executorOption 目前无用字段
    *
    * @return $this
    */
    public function setExecutorOption($executorOption)
    {
        $this->container['executorOption'] = $executorOption;
        return $this;
    }

    /**
    * Gets executorParameters
    *  deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    *
    * @return map[string,object]|null
    */
    public function getExecutorParameters()
    {
        return $this->container['executorParameters'];
    }

    /**
    * Sets executorParameters
    *
    * @param map[string,object]|null $executorParameters deployTest修改properties使用，字段不固定。小网拨测使用该字段修改properties中的ip
    *
    * @return $this
    */
    public function setExecutorParameters($executorParameters)
    {
        $this->container['executorParameters'] = $executorParameters;
        return $this;
    }

    /**
    * Gets failedRetryTimes
    *  失败重试次数
    *
    * @return int|null
    */
    public function getFailedRetryTimes()
    {
        return $this->container['failedRetryTimes'];
    }

    /**
    * Sets failedRetryTimes
    *
    * @param int|null $failedRetryTimes 失败重试次数
    *
    * @return $this
    */
    public function setFailedRetryTimes($failedRetryTimes)
    {
        $this->container['failedRetryTimes'] = $failedRetryTimes;
        return $this;
    }

    /**
    * Gets intervalInSeconds
    *  执行间隔
    *
    * @return int|null
    */
    public function getIntervalInSeconds()
    {
        return $this->container['intervalInSeconds'];
    }

    /**
    * Sets intervalInSeconds
    *
    * @param int|null $intervalInSeconds 执行间隔
    *
    * @return $this
    */
    public function setIntervalInSeconds($intervalInSeconds)
    {
        $this->container['intervalInSeconds'] = $intervalInSeconds;
        return $this;
    }

    /**
    * Gets ipKey
    *  deployTest使用
    *
    * @return string|null
    */
    public function getIpKey()
    {
        return $this->container['ipKey'];
    }

    /**
    * Sets ipKey
    *
    * @param string|null $ipKey deployTest使用
    *
    * @return $this
    */
    public function setIpKey($ipKey)
    {
        $this->container['ipKey'] = $ipKey;
        return $this;
    }

    /**
    * Gets locationIds
    *  执行区域
    *
    * @return string[]|null
    */
    public function getLocationIds()
    {
        return $this->container['locationIds'];
    }

    /**
    * Sets locationIds
    *
    * @param string[]|null $locationIds 执行区域
    *
    * @return $this
    */
    public function setLocationIds($locationIds)
    {
        $this->container['locationIds'] = $locationIds;
        return $this;
    }

    /**
    * Gets operateNotice
    *  operateNotice
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\OperateNotice|null
    */
    public function getOperateNotice()
    {
        return $this->container['operateNotice'];
    }

    /**
    * Sets operateNotice
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\OperateNotice|null $operateNotice operateNotice
    *
    * @return $this
    */
    public function setOperateNotice($operateNotice)
    {
        $this->container['operateNotice'] = $operateNotice;
        return $this;
    }

    /**
    * Gets pbi
    *  deployTest使用
    *
    * @return string|null
    */
    public function getPbi()
    {
        return $this->container['pbi'];
    }

    /**
    * Sets pbi
    *
    * @param string|null $pbi deployTest使用
    *
    * @return $this
    */
    public function setPbi($pbi)
    {
        $this->container['pbi'] = $pbi;
        return $this;
    }

    /**
    * Gets protocolTest
    *  protocolTest
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ProtocolTestVo|null
    */
    public function getProtocolTest()
    {
        return $this->container['protocolTest'];
    }

    /**
    * Sets protocolTest
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ProtocolTestVo|null $protocolTest protocolTest
    *
    * @return $this
    */
    public function setProtocolTest($protocolTest)
    {
        $this->container['protocolTest'] = $protocolTest;
        return $this;
    }

    /**
    * Gets repeatTimes
    *  重试次数，冒烟测试使用
    *
    * @return int|null
    */
    public function getRepeatTimes()
    {
        return $this->container['repeatTimes'];
    }

    /**
    * Sets repeatTimes
    *
    * @param int|null $repeatTimes 重试次数，冒烟测试使用
    *
    * @return $this
    */
    public function setRepeatTimes($repeatTimes)
    {
        $this->container['repeatTimes'] = $repeatTimes;
        return $this;
    }

    /**
    * Gets serviceNameCbg
    *  deployTest使用
    *
    * @return string|null
    */
    public function getServiceNameCbg()
    {
        return $this->container['serviceNameCbg'];
    }

    /**
    * Sets serviceNameCbg
    *
    * @param string|null $serviceNameCbg deployTest使用
    *
    * @return $this
    */
    public function setServiceNameCbg($serviceNameCbg)
    {
        $this->container['serviceNameCbg'] = $serviceNameCbg;
        return $this;
    }

    /**
    * Gets serviceScopeCbg
    *  deployTest使用
    *
    * @return string|null
    */
    public function getServiceScopeCbg()
    {
        return $this->container['serviceScopeCbg'];
    }

    /**
    * Sets serviceScopeCbg
    *
    * @param string|null $serviceScopeCbg deployTest使用
    *
    * @return $this
    */
    public function setServiceScopeCbg($serviceScopeCbg)
    {
        $this->container['serviceScopeCbg'] = $serviceScopeCbg;
        return $this;
    }

    /**
    * Gets serviceVersionCbg
    *  deployTest使用
    *
    * @return string|null
    */
    public function getServiceVersionCbg()
    {
        return $this->container['serviceVersionCbg'];
    }

    /**
    * Sets serviceVersionCbg
    *
    * @param string|null $serviceVersionCbg deployTest使用
    *
    * @return $this
    */
    public function setServiceVersionCbg($serviceVersionCbg)
    {
        $this->container['serviceVersionCbg'] = $serviceVersionCbg;
        return $this;
    }

    /**
    * Gets testNodeServer
    *  不再使用
    *
    * @return string|null
    */
    public function getTestNodeServer()
    {
        return $this->container['testNodeServer'];
    }

    /**
    * Sets testNodeServer
    *
    * @param string|null $testNodeServer 不再使用
    *
    * @return $this
    */
    public function setTestNodeServer($testNodeServer)
    {
        $this->container['testNodeServer'] = $testNodeServer;
        return $this;
    }

    /**
    * Gets timeoutMilSec
    *  超时时间
    *
    * @return int|null
    */
    public function getTimeoutMilSec()
    {
        return $this->container['timeoutMilSec'];
    }

    /**
    * Sets timeoutMilSec
    *
    * @param int|null $timeoutMilSec 超时时间
    *
    * @return $this
    */
    public function setTimeoutMilSec($timeoutMilSec)
    {
        $this->container['timeoutMilSec'] = $timeoutMilSec;
        return $this;
    }

    /**
    * Gets timerExpression
    *  执行时间表达式
    *
    * @return string|null
    */
    public function getTimerExpression()
    {
        return $this->container['timerExpression'];
    }

    /**
    * Sets timerExpression
    *
    * @param string|null $timerExpression 执行时间表达式
    *
    * @return $this
    */
    public function setTimerExpression($timerExpression)
    {
        $this->container['timerExpression'] = $timerExpression;
        return $this;
    }

    /**
    * Gets token
    *  deployTest使用
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token deployTest使用
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
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

