<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Event';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * lastObservedTime  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * arriveTime  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    * eventId  事件唯一标识，UUID格式。
    * title  事件标题，最大255字符。
    * description  事件描述信息，最大1024个字符
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    * count  事件发生次数，默认为1，必填。
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    * severity  severity
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    * type  type
    * compliance  compliance
    * network  network
    * vulnerabilityPatch  vulnerabilityPatch
    * malware  malware
    * threatIntel  threatIntel
    * resource  resource
    * remediation  remediation
    * dataSourceFields  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    * verificationState  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    * handleStatus  事件处理状态，New/Ignored/Resolved；默认New。
    * phase  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    * sla  约束闭环时间：单位：天。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Environment',
            'dataSource' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DataSource',
            'firstObservedTime' => '\DateTime',
            'lastObservedTime' => '\DateTime',
            'createTime' => '\DateTime',
            'arriveTime' => '\DateTime',
            'eventId' => 'string',
            'title' => 'string',
            'description' => 'string',
            'sourceUrl' => 'string',
            'count' => 'int',
            'confidence' => 'int',
            'severity' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Severity',
            'criticality' => 'int',
            'type' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Type',
            'compliance' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Compliance',
            'network' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Network',
            'vulnerabilityPatch' => '\HuaweiCloud\SDK\SecMaster\V1\Model\VulnerabilityPatch',
            'malware' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Malware',
            'threatIntel' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntel',
            'resource' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Resource',
            'remediation' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Remediation',
            'dataSourceFields' => 'object',
            'verificationState' => 'string',
            'handleStatus' => 'string',
            'phase' => 'string',
            'sla' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * lastObservedTime  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * arriveTime  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    * eventId  事件唯一标识，UUID格式。
    * title  事件标题，最大255字符。
    * description  事件描述信息，最大1024个字符
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    * count  事件发生次数，默认为1，必填。
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    * severity  severity
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    * type  type
    * compliance  compliance
    * network  network
    * vulnerabilityPatch  vulnerabilityPatch
    * malware  malware
    * threatIntel  threatIntel
    * resource  resource
    * remediation  remediation
    * dataSourceFields  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    * verificationState  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    * handleStatus  事件处理状态，New/Ignored/Resolved；默认New。
    * phase  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    * sla  约束闭环时间：单位：天。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'environment' => null,
        'dataSource' => null,
        'firstObservedTime' => 'date-time',
        'lastObservedTime' => 'date-time',
        'createTime' => 'date-time',
        'arriveTime' => 'date-time',
        'eventId' => 'uuid',
        'title' => null,
        'description' => null,
        'sourceUrl' => null,
        'count' => null,
        'confidence' => null,
        'severity' => null,
        'criticality' => null,
        'type' => null,
        'compliance' => null,
        'network' => null,
        'vulnerabilityPatch' => null,
        'malware' => null,
        'threatIntel' => null,
        'resource' => null,
        'remediation' => null,
        'dataSourceFields' => null,
        'verificationState' => null,
        'handleStatus' => null,
        'phase' => null,
        'sla' => null
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
    * version  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * lastObservedTime  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * arriveTime  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    * eventId  事件唯一标识，UUID格式。
    * title  事件标题，最大255字符。
    * description  事件描述信息，最大1024个字符
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    * count  事件发生次数，默认为1，必填。
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    * severity  severity
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    * type  type
    * compliance  compliance
    * network  network
    * vulnerabilityPatch  vulnerabilityPatch
    * malware  malware
    * threatIntel  threatIntel
    * resource  resource
    * remediation  remediation
    * dataSourceFields  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    * verificationState  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    * handleStatus  事件处理状态，New/Ignored/Resolved；默认New。
    * phase  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    * sla  约束闭环时间：单位：天。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'environment' => 'environment',
            'dataSource' => 'data_source',
            'firstObservedTime' => 'first_observed_time',
            'lastObservedTime' => 'last_observed_time',
            'createTime' => 'create_time',
            'arriveTime' => 'arrive_time',
            'eventId' => 'event_id',
            'title' => 'title',
            'description' => 'description',
            'sourceUrl' => 'source_url',
            'count' => 'count',
            'confidence' => 'confidence',
            'severity' => 'severity',
            'criticality' => 'criticality',
            'type' => 'type',
            'compliance' => 'compliance',
            'network' => 'network',
            'vulnerabilityPatch' => 'vulnerability_patch',
            'malware' => 'malware',
            'threatIntel' => 'threat_intel',
            'resource' => 'resource',
            'remediation' => 'remediation',
            'dataSourceFields' => 'data_source_fields',
            'verificationState' => 'verification_state',
            'handleStatus' => 'handle_status',
            'phase' => 'phase',
            'sla' => 'sla'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * lastObservedTime  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * arriveTime  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    * eventId  事件唯一标识，UUID格式。
    * title  事件标题，最大255字符。
    * description  事件描述信息，最大1024个字符
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    * count  事件发生次数，默认为1，必填。
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    * severity  severity
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    * type  type
    * compliance  compliance
    * network  network
    * vulnerabilityPatch  vulnerabilityPatch
    * malware  malware
    * threatIntel  threatIntel
    * resource  resource
    * remediation  remediation
    * dataSourceFields  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    * verificationState  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    * handleStatus  事件处理状态，New/Ignored/Resolved；默认New。
    * phase  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    * sla  约束闭环时间：单位：天。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'environment' => 'setEnvironment',
            'dataSource' => 'setDataSource',
            'firstObservedTime' => 'setFirstObservedTime',
            'lastObservedTime' => 'setLastObservedTime',
            'createTime' => 'setCreateTime',
            'arriveTime' => 'setArriveTime',
            'eventId' => 'setEventId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'sourceUrl' => 'setSourceUrl',
            'count' => 'setCount',
            'confidence' => 'setConfidence',
            'severity' => 'setSeverity',
            'criticality' => 'setCriticality',
            'type' => 'setType',
            'compliance' => 'setCompliance',
            'network' => 'setNetwork',
            'vulnerabilityPatch' => 'setVulnerabilityPatch',
            'malware' => 'setMalware',
            'threatIntel' => 'setThreatIntel',
            'resource' => 'setResource',
            'remediation' => 'setRemediation',
            'dataSourceFields' => 'setDataSourceFields',
            'verificationState' => 'setVerificationState',
            'handleStatus' => 'setHandleStatus',
            'phase' => 'setPhase',
            'sla' => 'setSla'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * lastObservedTime  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * arriveTime  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    * eventId  事件唯一标识，UUID格式。
    * title  事件标题，最大255字符。
    * description  事件描述信息，最大1024个字符
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    * count  事件发生次数，默认为1，必填。
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    * severity  severity
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    * type  type
    * compliance  compliance
    * network  network
    * vulnerabilityPatch  vulnerabilityPatch
    * malware  malware
    * threatIntel  threatIntel
    * resource  resource
    * remediation  remediation
    * dataSourceFields  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    * verificationState  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    * handleStatus  事件处理状态，New/Ignored/Resolved；默认New。
    * phase  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    * sla  约束闭环时间：单位：天。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'environment' => 'getEnvironment',
            'dataSource' => 'getDataSource',
            'firstObservedTime' => 'getFirstObservedTime',
            'lastObservedTime' => 'getLastObservedTime',
            'createTime' => 'getCreateTime',
            'arriveTime' => 'getArriveTime',
            'eventId' => 'getEventId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'sourceUrl' => 'getSourceUrl',
            'count' => 'getCount',
            'confidence' => 'getConfidence',
            'severity' => 'getSeverity',
            'criticality' => 'getCriticality',
            'type' => 'getType',
            'compliance' => 'getCompliance',
            'network' => 'getNetwork',
            'vulnerabilityPatch' => 'getVulnerabilityPatch',
            'malware' => 'getMalware',
            'threatIntel' => 'getThreatIntel',
            'resource' => 'getResource',
            'remediation' => 'getRemediation',
            'dataSourceFields' => 'getDataSourceFields',
            'verificationState' => 'getVerificationState',
            'handleStatus' => 'getHandleStatus',
            'phase' => 'getPhase',
            'sla' => 'getSla'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['firstObservedTime'] = isset($data['firstObservedTime']) ? $data['firstObservedTime'] : null;
        $this->container['lastObservedTime'] = isset($data['lastObservedTime']) ? $data['lastObservedTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['arriveTime'] = isset($data['arriveTime']) ? $data['arriveTime'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['criticality'] = isset($data['criticality']) ? $data['criticality'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['vulnerabilityPatch'] = isset($data['vulnerabilityPatch']) ? $data['vulnerabilityPatch'] : null;
        $this->container['malware'] = isset($data['malware']) ? $data['malware'] : null;
        $this->container['threatIntel'] = isset($data['threatIntel']) ? $data['threatIntel'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['dataSourceFields'] = isset($data['dataSourceFields']) ? $data['dataSourceFields'] : null;
        $this->container['verificationState'] = isset($data['verificationState']) ? $data['verificationState'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['sla'] = isset($data['sla']) ? $data['sla'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 5)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 5.";
            }
            if ((mb_strlen($this->container['version']) < 5)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 5.";
            }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
        if ($this->container['dataSource'] === null) {
            $invalidProperties[] = "'dataSource' can't be null";
        }
        if ($this->container['firstObservedTime'] === null) {
            $invalidProperties[] = "'firstObservedTime' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
        }
            if ((mb_strlen($this->container['eventId']) > 36)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['eventId']) < 32)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 100)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
            }
        if ($this->container['severity'] === null) {
            $invalidProperties[] = "'severity' can't be null";
        }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] > 100)) {
                $invalidProperties[] = "invalid value for 'criticality', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticality', must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
        }
            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) > 512)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) < 1)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['handleStatus'] === null) {
            $invalidProperties[] = "'handleStatus' can't be null";
        }
            if ((mb_strlen($this->container['handleStatus']) > 512)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) > 32)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) < 1)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] > 90)) {
                $invalidProperties[] = "invalid value for 'sla', must be smaller than or equal to 90.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] < 1)) {
                $invalidProperties[] = "invalid value for 'sla', must be bigger than or equal to 1.";
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
    * Gets version
    *  SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version SA数据对象版本号，数据接入时需携带版本号。版本号由SA服务团队负责更新，数据源只可填写SA给定的版本号。目前版本为1.0.0。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Environment
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Environment $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets dataSource
    *  dataSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DataSource
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DataSource $dataSource dataSource
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets firstObservedTime
    *  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return \DateTime
    */
    public function getFirstObservedTime()
    {
        return $this->container['firstObservedTime'];
    }

    /**
    * Sets firstObservedTime
    *
    * @param \DateTime $firstObservedTime 首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return $this
    */
    public function setFirstObservedTime($firstObservedTime)
    {
        $this->container['firstObservedTime'] = $firstObservedTime;
        return $this;
    }

    /**
    * Gets lastObservedTime
    *  最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return \DateTime|null
    */
    public function getLastObservedTime()
    {
        return $this->container['lastObservedTime'];
    }

    /**
    * Sets lastObservedTime
    *
    * @param \DateTime|null $lastObservedTime 最新发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return $this
    */
    public function setLastObservedTime($lastObservedTime)
    {
        $this->container['lastObservedTime'] = $lastObservedTime;
        return $this;
    }

    /**
    * Gets createTime
    *  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime 记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets arriveTime
    *  数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    *
    * @return \DateTime|null
    */
    public function getArriveTime()
    {
        return $this->container['arriveTime'];
    }

    /**
    * Sets arriveTime
    *
    * @param \DateTime|null $arriveTime 数据接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。  是指事件数据被SA侧接收的时间，由SA接收时填写，产品上报数据时不用填写。
    *
    * @return $this
    */
    public function setArriveTime($arriveTime)
    {
        $this->container['arriveTime'] = $arriveTime;
        return $this;
    }

    /**
    * Gets eventId
    *  事件唯一标识，UUID格式。
    *
    * @return string
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string $eventId 事件唯一标识，UUID格式。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets title
    *  事件标题，最大255字符。
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 事件标题，最大255字符。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  事件描述信息，最大1024个字符
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 事件描述信息，最大1024个字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  事件URL链接，指向数据源产品中有关当前事件说明的页面。
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 事件URL链接，指向数据源产品中有关当前事件说明的页面。
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets count
    *  事件发生次数，默认为1，必填。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count 事件发生次数，默认为1，必填。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets confidence
    *  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Severity
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Severity $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets criticality
    *  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    *
    * @return int|null
    */
    public function getCriticality()
    {
        return $this->container['criticality'];
    }

    /**
    * Sets criticality
    *
    * @param int|null $criticality 关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源。
    *
    * @return $this
    */
    public function setCriticality($criticality)
    {
        $this->container['criticality'] = $criticality;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Type
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Type $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets compliance
    *  compliance
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Compliance|null
    */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
    * Sets compliance
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Compliance|null $compliance compliance
    *
    * @return $this
    */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Network|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Network|null $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets vulnerabilityPatch
    *  vulnerabilityPatch
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\VulnerabilityPatch|null
    */
    public function getVulnerabilityPatch()
    {
        return $this->container['vulnerabilityPatch'];
    }

    /**
    * Sets vulnerabilityPatch
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\VulnerabilityPatch|null $vulnerabilityPatch vulnerabilityPatch
    *
    * @return $this
    */
    public function setVulnerabilityPatch($vulnerabilityPatch)
    {
        $this->container['vulnerabilityPatch'] = $vulnerabilityPatch;
        return $this;
    }

    /**
    * Gets malware
    *  malware
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Malware|null
    */
    public function getMalware()
    {
        return $this->container['malware'];
    }

    /**
    * Sets malware
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Malware|null $malware malware
    *
    * @return $this
    */
    public function setMalware($malware)
    {
        $this->container['malware'] = $malware;
        return $this;
    }

    /**
    * Gets threatIntel
    *  threatIntel
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntel|null
    */
    public function getThreatIntel()
    {
        return $this->container['threatIntel'];
    }

    /**
    * Sets threatIntel
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntel|null $threatIntel threatIntel
    *
    * @return $this
    */
    public function setThreatIntel($threatIntel)
    {
        $this->container['threatIntel'] = $threatIntel;
        return $this;
    }

    /**
    * Gets resource
    *  resource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Resource
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Resource $resource resource
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets remediation
    *  remediation
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Remediation|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Remediation|null $remediation remediation
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets dataSourceFields
    *  数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    *
    * @return object|null
    */
    public function getDataSourceFields()
    {
        return $this->container['dataSourceFields'];
    }

    /**
    * Sets dataSourceFields
    *
    * @param object|null $dataSourceFields 数据源自定义信息，最多支持50个key/value对，约束条件： 1、该对象不能包含冗余数据，并且不能与已定义的SSA事件格式字段冲突。 2、字段名称可以包含字母数字字符、空格和以下符号：_ . / = + \\ - @。 示例： \"data_source_fields\": {     \"key1\": \"value1\",     \"key2\", \"value2\",   }
    *
    * @return $this
    */
    public function setDataSourceFields($dataSourceFields)
    {
        $this->container['dataSourceFields'] = $dataSourceFields;
        return $this;
    }

    /**
    * Gets verificationState
    *  事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    *
    * @return string|null
    */
    public function getVerificationState()
    {
        return $this->container['verificationState'];
    }

    /**
    * Sets verificationState
    *
    * @param string|null $verificationState 事件验证状态，标识事件的准确性。 Unknown – 未知，默认 True_positive – 确认 False_positive – 误报。
    *
    * @return $this
    */
    public function setVerificationState($verificationState)
    {
        $this->container['verificationState'] = $verificationState;
        return $this;
    }

    /**
    * Gets handleStatus
    *  事件处理状态，New/Ignored/Resolved；默认New。
    *
    * @return string
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string $handleStatus 事件处理状态，New/Ignored/Resolved；默认New。
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets phase
    *  阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 阶段：Prepartion|Detection and Analysis|Containm，Eradication& Recovery| Post-Incident-Activity。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets sla
    *  约束闭环时间：单位：天。
    *
    * @return int|null
    */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
    * Sets sla
    *
    * @param int|null $sla 约束闭环时间：单位：天。
    *
    * @return $this
    */
    public function setSla($sla)
    {
        $this->container['sla'] = $sla;
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

