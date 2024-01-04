<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppRulesSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppRulesSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appType  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    * attrList  属性列表(暂不使用,可不传)。 cmdLine、env
    * detectLog  是否开启日志采集。 true、false
    * discoveryRule  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    * isDefaultRule  是否为默认规则。 true、false
    * isDetect  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    * logFileFix  日志文件的后缀。 log、trace、out
    * logPathRule  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    * nameRule  nameRule
    * priority  规则优先级。1~9999的整数字符串，默认取值为9999
    * dataSource  数据源
    * editable  是否支持编辑 true、false
    * aomMetricRelabelConfigs  指标配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appType' => 'string',
            'attrList' => 'string[]',
            'detectLog' => 'string',
            'discoveryRule' => '\HuaweiCloud\SDK\Aom\V2\Model\DiscoveryRule[]',
            'isDefaultRule' => 'string',
            'isDetect' => 'string',
            'logFileFix' => 'string[]',
            'logPathRule' => '\HuaweiCloud\SDK\Aom\V2\Model\LogPathRule[]',
            'nameRule' => '\HuaweiCloud\SDK\Aom\V2\Model\NameRule',
            'priority' => 'int',
            'dataSource' => 'string',
            'editable' => 'string',
            'aomMetricRelabelConfigs' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appType  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    * attrList  属性列表(暂不使用,可不传)。 cmdLine、env
    * detectLog  是否开启日志采集。 true、false
    * discoveryRule  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    * isDefaultRule  是否为默认规则。 true、false
    * isDetect  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    * logFileFix  日志文件的后缀。 log、trace、out
    * logPathRule  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    * nameRule  nameRule
    * priority  规则优先级。1~9999的整数字符串，默认取值为9999
    * dataSource  数据源
    * editable  是否支持编辑 true、false
    * aomMetricRelabelConfigs  指标配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appType' => null,
        'attrList' => null,
        'detectLog' => null,
        'discoveryRule' => null,
        'isDefaultRule' => null,
        'isDetect' => null,
        'logFileFix' => null,
        'logPathRule' => null,
        'nameRule' => null,
        'priority' => 'int32',
        'dataSource' => null,
        'editable' => null,
        'aomMetricRelabelConfigs' => null
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
    * appType  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    * attrList  属性列表(暂不使用,可不传)。 cmdLine、env
    * detectLog  是否开启日志采集。 true、false
    * discoveryRule  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    * isDefaultRule  是否为默认规则。 true、false
    * isDetect  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    * logFileFix  日志文件的后缀。 log、trace、out
    * logPathRule  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    * nameRule  nameRule
    * priority  规则优先级。1~9999的整数字符串，默认取值为9999
    * dataSource  数据源
    * editable  是否支持编辑 true、false
    * aomMetricRelabelConfigs  指标配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appType' => 'appType',
            'attrList' => 'attrList',
            'detectLog' => 'detectLog',
            'discoveryRule' => 'discoveryRule',
            'isDefaultRule' => 'isDefaultRule',
            'isDetect' => 'isDetect',
            'logFileFix' => 'logFileFix',
            'logPathRule' => 'logPathRule',
            'nameRule' => 'nameRule',
            'priority' => 'priority',
            'dataSource' => 'dataSource',
            'editable' => 'editable',
            'aomMetricRelabelConfigs' => 'aom_metric_relabel_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appType  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    * attrList  属性列表(暂不使用,可不传)。 cmdLine、env
    * detectLog  是否开启日志采集。 true、false
    * discoveryRule  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    * isDefaultRule  是否为默认规则。 true、false
    * isDetect  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    * logFileFix  日志文件的后缀。 log、trace、out
    * logPathRule  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    * nameRule  nameRule
    * priority  规则优先级。1~9999的整数字符串，默认取值为9999
    * dataSource  数据源
    * editable  是否支持编辑 true、false
    * aomMetricRelabelConfigs  指标配置
    *
    * @var string[]
    */
    protected static $setters = [
            'appType' => 'setAppType',
            'attrList' => 'setAttrList',
            'detectLog' => 'setDetectLog',
            'discoveryRule' => 'setDiscoveryRule',
            'isDefaultRule' => 'setIsDefaultRule',
            'isDetect' => 'setIsDetect',
            'logFileFix' => 'setLogFileFix',
            'logPathRule' => 'setLogPathRule',
            'nameRule' => 'setNameRule',
            'priority' => 'setPriority',
            'dataSource' => 'setDataSource',
            'editable' => 'setEditable',
            'aomMetricRelabelConfigs' => 'setAomMetricRelabelConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appType  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    * attrList  属性列表(暂不使用,可不传)。 cmdLine、env
    * detectLog  是否开启日志采集。 true、false
    * discoveryRule  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    * isDefaultRule  是否为默认规则。 true、false
    * isDetect  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    * logFileFix  日志文件的后缀。 log、trace、out
    * logPathRule  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    * nameRule  nameRule
    * priority  规则优先级。1~9999的整数字符串，默认取值为9999
    * dataSource  数据源
    * editable  是否支持编辑 true、false
    * aomMetricRelabelConfigs  指标配置
    *
    * @var string[]
    */
    protected static $getters = [
            'appType' => 'getAppType',
            'attrList' => 'getAttrList',
            'detectLog' => 'getDetectLog',
            'discoveryRule' => 'getDiscoveryRule',
            'isDefaultRule' => 'getIsDefaultRule',
            'isDetect' => 'getIsDetect',
            'logFileFix' => 'getLogFileFix',
            'logPathRule' => 'getLogPathRule',
            'nameRule' => 'getNameRule',
            'priority' => 'getPriority',
            'dataSource' => 'getDataSource',
            'editable' => 'getEditable',
            'aomMetricRelabelConfigs' => 'getAomMetricRelabelConfigs'
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
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['attrList'] = isset($data['attrList']) ? $data['attrList'] : null;
        $this->container['detectLog'] = isset($data['detectLog']) ? $data['detectLog'] : null;
        $this->container['discoveryRule'] = isset($data['discoveryRule']) ? $data['discoveryRule'] : null;
        $this->container['isDefaultRule'] = isset($data['isDefaultRule']) ? $data['isDefaultRule'] : null;
        $this->container['isDetect'] = isset($data['isDetect']) ? $data['isDetect'] : null;
        $this->container['logFileFix'] = isset($data['logFileFix']) ? $data['logFileFix'] : null;
        $this->container['logPathRule'] = isset($data['logPathRule']) ? $data['logPathRule'] : null;
        $this->container['nameRule'] = isset($data['nameRule']) ? $data['nameRule'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['aomMetricRelabelConfigs'] = isset($data['aomMetricRelabelConfigs']) ? $data['aomMetricRelabelConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appType'] === null) {
            $invalidProperties[] = "'appType' can't be null";
        }
        if ($this->container['detectLog'] === null) {
            $invalidProperties[] = "'detectLog' can't be null";
        }
        if ($this->container['discoveryRule'] === null) {
            $invalidProperties[] = "'discoveryRule' can't be null";
        }
        if ($this->container['isDefaultRule'] === null) {
            $invalidProperties[] = "'isDefaultRule' can't be null";
        }
        if ($this->container['isDetect'] === null) {
            $invalidProperties[] = "'isDetect' can't be null";
        }
        if ($this->container['logFileFix'] === null) {
            $invalidProperties[] = "'logFileFix' can't be null";
        }
        if ($this->container['nameRule'] === null) {
            $invalidProperties[] = "'nameRule' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets appType
    *  服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    *
    * @return string
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string $appType 服务类型，用于标记服务的分类，仅用于规则分类和界面展示。可以填写任意字段,如按技术栈分类可填写Java，Python。按作用分类可填写collector(采集)，database(数据库)等。
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets attrList
    *  属性列表(暂不使用,可不传)。 cmdLine、env
    *
    * @return string[]|null
    */
    public function getAttrList()
    {
        return $this->container['attrList'];
    }

    /**
    * Sets attrList
    *
    * @param string[]|null $attrList 属性列表(暂不使用,可不传)。 cmdLine、env
    *
    * @return $this
    */
    public function setAttrList($attrList)
    {
        $this->container['attrList'] = $attrList;
        return $this;
    }

    /**
    * Gets detectLog
    *  是否开启日志采集。 true、false
    *
    * @return string
    */
    public function getDetectLog()
    {
        return $this->container['detectLog'];
    }

    /**
    * Sets detectLog
    *
    * @param string $detectLog 是否开启日志采集。 true、false
    *
    * @return $this
    */
    public function setDetectLog($detectLog)
    {
        $this->container['detectLog'] = $detectLog;
        return $this;
    }

    /**
    * Gets discoveryRule
    *  规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\DiscoveryRule[]
    */
    public function getDiscoveryRule()
    {
        return $this->container['discoveryRule'];
    }

    /**
    * Sets discoveryRule
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\DiscoveryRule[] $discoveryRule 规则发现部分，数组中有多个对象时表示需要同时满足所有条件的进程才会被匹配到。 checkType为cmdLine时checkMode填contain，checkContent格式为[\"xxx\"]表示进程命令行参数中需要包含xxx。checkType为env时checkMode填contain，checkContent格式为 [\"k1\",\"v1\"]表示进程环境变量中需要包含名为k1值为v1的环境变量。checkType为scope时checkMode填equals，checkContent格式为节点ID数组[\"hostId1\",\"hostId2\"]，表示规则仅会在这些节点上生效(如果不指定节点范围，规则将下发到该项目所有的节点)。
    *
    * @return $this
    */
    public function setDiscoveryRule($discoveryRule)
    {
        $this->container['discoveryRule'] = $discoveryRule;
        return $this;
    }

    /**
    * Gets isDefaultRule
    *  是否为默认规则。 true、false
    *
    * @return string
    */
    public function getIsDefaultRule()
    {
        return $this->container['isDefaultRule'];
    }

    /**
    * Sets isDefaultRule
    *
    * @param string $isDefaultRule 是否为默认规则。 true、false
    *
    * @return $this
    */
    public function setIsDefaultRule($isDefaultRule)
    {
        $this->container['isDefaultRule'] = $isDefaultRule;
        return $this;
    }

    /**
    * Gets isDetect
    *  是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    *
    * @return string
    */
    public function getIsDetect()
    {
        return $this->container['isDetect'];
    }

    /**
    * Sets isDetect
    *
    * @param string $isDetect 是否为规则预探测场景（预探测场景不会保存规则,仅用于规则下发之前验证该规则能否有效发现节点上的进程）。true、false
    *
    * @return $this
    */
    public function setIsDetect($isDetect)
    {
        $this->container['isDetect'] = $isDetect;
        return $this;
    }

    /**
    * Gets logFileFix
    *  日志文件的后缀。 log、trace、out
    *
    * @return string[]
    */
    public function getLogFileFix()
    {
        return $this->container['logFileFix'];
    }

    /**
    * Sets logFileFix
    *
    * @param string[] $logFileFix 日志文件的后缀。 log、trace、out
    *
    * @return $this
    */
    public function setLogFileFix($logFileFix)
    {
        $this->container['logFileFix'] = $logFileFix;
        return $this;
    }

    /**
    * Gets logPathRule
    *  日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\LogPathRule[]|null
    */
    public function getLogPathRule()
    {
        return $this->container['logPathRule'];
    }

    /**
    * Sets logPathRule
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\LogPathRule[]|null $logPathRule 日志路径配置规则。 当cmdLineHash为固定字符串时,指定日志路径或者日志文件。否则只采集进程当前打开的以.log和.trace结尾的文件。nameType取值cmdLineHash时，args格式为[\"00001\"]，value格式为[\"/xxx/xx.log\"]，表示当启动命令是00001时,日志路径为/xxx/xx.log。
    *
    * @return $this
    */
    public function setLogPathRule($logPathRule)
    {
        $this->container['logPathRule'] = $logPathRule;
        return $this;
    }

    /**
    * Gets nameRule
    *  nameRule
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\NameRule
    */
    public function getNameRule()
    {
        return $this->container['nameRule'];
    }

    /**
    * Sets nameRule
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\NameRule $nameRule nameRule
    *
    * @return $this
    */
    public function setNameRule($nameRule)
    {
        $this->container['nameRule'] = $nameRule;
        return $this;
    }

    /**
    * Gets priority
    *  规则优先级。1~9999的整数字符串，默认取值为9999
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 规则优先级。1~9999的整数字符串，默认取值为9999
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets dataSource
    *  数据源
    *
    * @return string|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param string|null $dataSource 数据源
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets editable
    *  是否支持编辑 true、false
    *
    * @return string|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param string|null $editable 是否支持编辑 true、false
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets aomMetricRelabelConfigs
    *  指标配置
    *
    * @return object|null
    */
    public function getAomMetricRelabelConfigs()
    {
        return $this->container['aomMetricRelabelConfigs'];
    }

    /**
    * Sets aomMetricRelabelConfigs
    *
    * @param object|null $aomMetricRelabelConfigs 指标配置
    *
    * @return $this
    */
    public function setAomMetricRelabelConfigs($aomMetricRelabelConfigs)
    {
        $this->container['aomMetricRelabelConfigs'] = $aomMetricRelabelConfigs;
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

