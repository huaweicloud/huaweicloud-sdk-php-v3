<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmDataVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmDataVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  告警通知id。
    * gmtCreate  创建时间。
    * regionAlarmEventId  region中事件的id。
    * businessName  应用名称。
    * appName  组件名称。
    * versionNumber  版本。
    * alarmRuleType  告警规则类别。
    * gmtModify  修改时间。
    * processUnit  处理单元。
    * region  区域名称。
    * instanceId  实例id。
    * ipAddress  实例ip地址。
    * instanceName  实例名称。
    * envId  环境id。
    * businessId  应用id。
    * templateId  模板id。
    * alarmRuleId  告警规则id。
    * monitorItemId  监控项id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * alarmRuleName  告警规则名称。
    * alarmRuleExpression  告警表达式。
    * alarmFirstTime  开始报警时间。
    * alarmLastTime  最后一次报警时间。
    * alarmLevel  告警级别。
    * restrainKey  唯一告警标识符。
    * status  告警状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => 'string',
            'regionAlarmEventId' => 'int',
            'businessName' => 'string',
            'appName' => 'string',
            'versionNumber' => 'int',
            'alarmRuleType' => 'string',
            'gmtModify' => 'string',
            'processUnit' => 'string',
            'region' => 'string',
            'instanceId' => 'int',
            'ipAddress' => 'string',
            'instanceName' => 'string',
            'envId' => 'int',
            'businessId' => 'int',
            'templateId' => 'int',
            'alarmRuleId' => 'int',
            'monitorItemId' => 'int',
            'collectorId' => 'int',
            'collectorName' => 'string',
            'alarmRuleName' => 'string',
            'alarmRuleExpression' => 'string',
            'alarmFirstTime' => 'string',
            'alarmLastTime' => 'string',
            'alarmLevel' => 'string',
            'restrainKey' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  告警通知id。
    * gmtCreate  创建时间。
    * regionAlarmEventId  region中事件的id。
    * businessName  应用名称。
    * appName  组件名称。
    * versionNumber  版本。
    * alarmRuleType  告警规则类别。
    * gmtModify  修改时间。
    * processUnit  处理单元。
    * region  区域名称。
    * instanceId  实例id。
    * ipAddress  实例ip地址。
    * instanceName  实例名称。
    * envId  环境id。
    * businessId  应用id。
    * templateId  模板id。
    * alarmRuleId  告警规则id。
    * monitorItemId  监控项id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * alarmRuleName  告警规则名称。
    * alarmRuleExpression  告警表达式。
    * alarmFirstTime  开始报警时间。
    * alarmLastTime  最后一次报警时间。
    * alarmLevel  告警级别。
    * restrainKey  唯一告警标识符。
    * status  告警状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => null,
        'regionAlarmEventId' => 'int64',
        'businessName' => null,
        'appName' => null,
        'versionNumber' => 'int32',
        'alarmRuleType' => null,
        'gmtModify' => null,
        'processUnit' => null,
        'region' => null,
        'instanceId' => 'int64',
        'ipAddress' => null,
        'instanceName' => null,
        'envId' => 'int64',
        'businessId' => 'int64',
        'templateId' => 'int64',
        'alarmRuleId' => 'int64',
        'monitorItemId' => 'int64',
        'collectorId' => 'int32',
        'collectorName' => null,
        'alarmRuleName' => null,
        'alarmRuleExpression' => null,
        'alarmFirstTime' => null,
        'alarmLastTime' => null,
        'alarmLevel' => null,
        'restrainKey' => null,
        'status' => null
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
    * id  告警通知id。
    * gmtCreate  创建时间。
    * regionAlarmEventId  region中事件的id。
    * businessName  应用名称。
    * appName  组件名称。
    * versionNumber  版本。
    * alarmRuleType  告警规则类别。
    * gmtModify  修改时间。
    * processUnit  处理单元。
    * region  区域名称。
    * instanceId  实例id。
    * ipAddress  实例ip地址。
    * instanceName  实例名称。
    * envId  环境id。
    * businessId  应用id。
    * templateId  模板id。
    * alarmRuleId  告警规则id。
    * monitorItemId  监控项id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * alarmRuleName  告警规则名称。
    * alarmRuleExpression  告警表达式。
    * alarmFirstTime  开始报警时间。
    * alarmLastTime  最后一次报警时间。
    * alarmLevel  告警级别。
    * restrainKey  唯一告警标识符。
    * status  告警状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'regionAlarmEventId' => 'region_alarm_event_id',
            'businessName' => 'business_name',
            'appName' => 'app_name',
            'versionNumber' => 'version_number',
            'alarmRuleType' => 'alarm_rule_type',
            'gmtModify' => 'gmt_modify',
            'processUnit' => 'process_unit',
            'region' => 'region',
            'instanceId' => 'instance_id',
            'ipAddress' => 'ip_address',
            'instanceName' => 'instance_name',
            'envId' => 'env_id',
            'businessId' => 'business_id',
            'templateId' => 'template_id',
            'alarmRuleId' => 'alarm_rule_id',
            'monitorItemId' => 'monitor_item_id',
            'collectorId' => 'collector_id',
            'collectorName' => 'collector_name',
            'alarmRuleName' => 'alarm_rule_name',
            'alarmRuleExpression' => 'alarm_rule_expression',
            'alarmFirstTime' => 'alarm_first_time',
            'alarmLastTime' => 'alarm_last_time',
            'alarmLevel' => 'alarm_level',
            'restrainKey' => 'restrain_key',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  告警通知id。
    * gmtCreate  创建时间。
    * regionAlarmEventId  region中事件的id。
    * businessName  应用名称。
    * appName  组件名称。
    * versionNumber  版本。
    * alarmRuleType  告警规则类别。
    * gmtModify  修改时间。
    * processUnit  处理单元。
    * region  区域名称。
    * instanceId  实例id。
    * ipAddress  实例ip地址。
    * instanceName  实例名称。
    * envId  环境id。
    * businessId  应用id。
    * templateId  模板id。
    * alarmRuleId  告警规则id。
    * monitorItemId  监控项id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * alarmRuleName  告警规则名称。
    * alarmRuleExpression  告警表达式。
    * alarmFirstTime  开始报警时间。
    * alarmLastTime  最后一次报警时间。
    * alarmLevel  告警级别。
    * restrainKey  唯一告警标识符。
    * status  告警状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'regionAlarmEventId' => 'setRegionAlarmEventId',
            'businessName' => 'setBusinessName',
            'appName' => 'setAppName',
            'versionNumber' => 'setVersionNumber',
            'alarmRuleType' => 'setAlarmRuleType',
            'gmtModify' => 'setGmtModify',
            'processUnit' => 'setProcessUnit',
            'region' => 'setRegion',
            'instanceId' => 'setInstanceId',
            'ipAddress' => 'setIpAddress',
            'instanceName' => 'setInstanceName',
            'envId' => 'setEnvId',
            'businessId' => 'setBusinessId',
            'templateId' => 'setTemplateId',
            'alarmRuleId' => 'setAlarmRuleId',
            'monitorItemId' => 'setMonitorItemId',
            'collectorId' => 'setCollectorId',
            'collectorName' => 'setCollectorName',
            'alarmRuleName' => 'setAlarmRuleName',
            'alarmRuleExpression' => 'setAlarmRuleExpression',
            'alarmFirstTime' => 'setAlarmFirstTime',
            'alarmLastTime' => 'setAlarmLastTime',
            'alarmLevel' => 'setAlarmLevel',
            'restrainKey' => 'setRestrainKey',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  告警通知id。
    * gmtCreate  创建时间。
    * regionAlarmEventId  region中事件的id。
    * businessName  应用名称。
    * appName  组件名称。
    * versionNumber  版本。
    * alarmRuleType  告警规则类别。
    * gmtModify  修改时间。
    * processUnit  处理单元。
    * region  区域名称。
    * instanceId  实例id。
    * ipAddress  实例ip地址。
    * instanceName  实例名称。
    * envId  环境id。
    * businessId  应用id。
    * templateId  模板id。
    * alarmRuleId  告警规则id。
    * monitorItemId  监控项id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * alarmRuleName  告警规则名称。
    * alarmRuleExpression  告警表达式。
    * alarmFirstTime  开始报警时间。
    * alarmLastTime  最后一次报警时间。
    * alarmLevel  告警级别。
    * restrainKey  唯一告警标识符。
    * status  告警状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'regionAlarmEventId' => 'getRegionAlarmEventId',
            'businessName' => 'getBusinessName',
            'appName' => 'getAppName',
            'versionNumber' => 'getVersionNumber',
            'alarmRuleType' => 'getAlarmRuleType',
            'gmtModify' => 'getGmtModify',
            'processUnit' => 'getProcessUnit',
            'region' => 'getRegion',
            'instanceId' => 'getInstanceId',
            'ipAddress' => 'getIpAddress',
            'instanceName' => 'getInstanceName',
            'envId' => 'getEnvId',
            'businessId' => 'getBusinessId',
            'templateId' => 'getTemplateId',
            'alarmRuleId' => 'getAlarmRuleId',
            'monitorItemId' => 'getMonitorItemId',
            'collectorId' => 'getCollectorId',
            'collectorName' => 'getCollectorName',
            'alarmRuleName' => 'getAlarmRuleName',
            'alarmRuleExpression' => 'getAlarmRuleExpression',
            'alarmFirstTime' => 'getAlarmFirstTime',
            'alarmLastTime' => 'getAlarmLastTime',
            'alarmLevel' => 'getAlarmLevel',
            'restrainKey' => 'getRestrainKey',
            'status' => 'getStatus'
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
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['regionAlarmEventId'] = isset($data['regionAlarmEventId']) ? $data['regionAlarmEventId'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['processUnit'] = isset($data['processUnit']) ? $data['processUnit'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['alarmRuleId'] = isset($data['alarmRuleId']) ? $data['alarmRuleId'] : null;
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['collectorId'] = isset($data['collectorId']) ? $data['collectorId'] : null;
        $this->container['collectorName'] = isset($data['collectorName']) ? $data['collectorName'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['alarmRuleExpression'] = isset($data['alarmRuleExpression']) ? $data['alarmRuleExpression'] : null;
        $this->container['alarmFirstTime'] = isset($data['alarmFirstTime']) ? $data['alarmFirstTime'] : null;
        $this->container['alarmLastTime'] = isset($data['alarmLastTime']) ? $data['alarmLastTime'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['restrainKey'] = isset($data['restrainKey']) ? $data['restrainKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  告警通知id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 告警通知id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  创建时间。
    *
    * @return string|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param string|null $gmtCreate 创建时间。
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets regionAlarmEventId
    *  region中事件的id。
    *
    * @return int|null
    */
    public function getRegionAlarmEventId()
    {
        return $this->container['regionAlarmEventId'];
    }

    /**
    * Sets regionAlarmEventId
    *
    * @param int|null $regionAlarmEventId region中事件的id。
    *
    * @return $this
    */
    public function setRegionAlarmEventId($regionAlarmEventId)
    {
        $this->container['regionAlarmEventId'] = $regionAlarmEventId;
        return $this;
    }

    /**
    * Gets businessName
    *  应用名称。
    *
    * @return string|null
    */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
    * Sets businessName
    *
    * @param string|null $businessName 应用名称。
    *
    * @return $this
    */
    public function setBusinessName($businessName)
    {
        $this->container['businessName'] = $businessName;
        return $this;
    }

    /**
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets versionNumber
    *  版本。
    *
    * @return int|null
    */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
    * Sets versionNumber
    *
    * @param int|null $versionNumber 版本。
    *
    * @return $this
    */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;
        return $this;
    }

    /**
    * Gets alarmRuleType
    *  告警规则类别。
    *
    * @return string|null
    */
    public function getAlarmRuleType()
    {
        return $this->container['alarmRuleType'];
    }

    /**
    * Sets alarmRuleType
    *
    * @param string|null $alarmRuleType 告警规则类别。
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
        return $this;
    }

    /**
    * Gets gmtModify
    *  修改时间。
    *
    * @return string|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param string|null $gmtModify 修改时间。
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
        return $this;
    }

    /**
    * Gets processUnit
    *  处理单元。
    *
    * @return string|null
    */
    public function getProcessUnit()
    {
        return $this->container['processUnit'];
    }

    /**
    * Sets processUnit
    *
    * @param string|null $processUnit 处理单元。
    *
    * @return $this
    */
    public function setProcessUnit($processUnit)
    {
        $this->container['processUnit'] = $processUnit;
        return $this;
    }

    /**
    * Gets region
    *  区域名称。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  实例ip地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 实例ip地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id。
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 模板id。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets alarmRuleId
    *  告警规则id。
    *
    * @return int|null
    */
    public function getAlarmRuleId()
    {
        return $this->container['alarmRuleId'];
    }

    /**
    * Sets alarmRuleId
    *
    * @param int|null $alarmRuleId 告警规则id。
    *
    * @return $this
    */
    public function setAlarmRuleId($alarmRuleId)
    {
        $this->container['alarmRuleId'] = $alarmRuleId;
        return $this;
    }

    /**
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int|null
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int|null $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets collectorId
    *  采集器id。
    *
    * @return int|null
    */
    public function getCollectorId()
    {
        return $this->container['collectorId'];
    }

    /**
    * Sets collectorId
    *
    * @param int|null $collectorId 采集器id。
    *
    * @return $this
    */
    public function setCollectorId($collectorId)
    {
        $this->container['collectorId'] = $collectorId;
        return $this;
    }

    /**
    * Gets collectorName
    *  采集器名称。
    *
    * @return string|null
    */
    public function getCollectorName()
    {
        return $this->container['collectorName'];
    }

    /**
    * Sets collectorName
    *
    * @param string|null $collectorName 采集器名称。
    *
    * @return $this
    */
    public function setCollectorName($collectorName)
    {
        $this->container['collectorName'] = $collectorName;
        return $this;
    }

    /**
    * Gets alarmRuleName
    *  告警规则名称。
    *
    * @return string|null
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string|null $alarmRuleName 告警规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleExpression
    *  告警表达式。
    *
    * @return string|null
    */
    public function getAlarmRuleExpression()
    {
        return $this->container['alarmRuleExpression'];
    }

    /**
    * Sets alarmRuleExpression
    *
    * @param string|null $alarmRuleExpression 告警表达式。
    *
    * @return $this
    */
    public function setAlarmRuleExpression($alarmRuleExpression)
    {
        $this->container['alarmRuleExpression'] = $alarmRuleExpression;
        return $this;
    }

    /**
    * Gets alarmFirstTime
    *  开始报警时间。
    *
    * @return string|null
    */
    public function getAlarmFirstTime()
    {
        return $this->container['alarmFirstTime'];
    }

    /**
    * Sets alarmFirstTime
    *
    * @param string|null $alarmFirstTime 开始报警时间。
    *
    * @return $this
    */
    public function setAlarmFirstTime($alarmFirstTime)
    {
        $this->container['alarmFirstTime'] = $alarmFirstTime;
        return $this;
    }

    /**
    * Gets alarmLastTime
    *  最后一次报警时间。
    *
    * @return string|null
    */
    public function getAlarmLastTime()
    {
        return $this->container['alarmLastTime'];
    }

    /**
    * Sets alarmLastTime
    *
    * @param string|null $alarmLastTime 最后一次报警时间。
    *
    * @return $this
    */
    public function setAlarmLastTime($alarmLastTime)
    {
        $this->container['alarmLastTime'] = $alarmLastTime;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别。
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 告警级别。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets restrainKey
    *  唯一告警标识符。
    *
    * @return string|null
    */
    public function getRestrainKey()
    {
        return $this->container['restrainKey'];
    }

    /**
    * Sets restrainKey
    *
    * @param string|null $restrainKey 唯一告警标识符。
    *
    * @return $this
    */
    public function setRestrainKey($restrainKey)
    {
        $this->container['restrainKey'] = $restrainKey;
        return $this;
    }

    /**
    * Gets status
    *  告警状态。
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
    * @param string|null $status 告警状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

