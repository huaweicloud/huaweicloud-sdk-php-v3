<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllScalingV2PoliciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllScalingV2PoliciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingResourceId  伸缩组ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * sortBy  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    * order  排序顺序ASC：升序；DESC：降序
    * enterpriseProjectId  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    * alarmId  告警ID，即告警规则的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingResourceId' => 'string',
            'scalingResourceType' => 'string',
            'scalingPolicyName' => 'string',
            'scalingPolicyType' => 'string',
            'scalingPolicyId' => 'string',
            'startNumber' => 'int',
            'limit' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'enterpriseProjectId' => 'string',
            'alarmId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingResourceId  伸缩组ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * sortBy  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    * order  排序顺序ASC：升序；DESC：降序
    * enterpriseProjectId  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    * alarmId  告警ID，即告警规则的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingResourceId' => null,
        'scalingResourceType' => null,
        'scalingPolicyName' => null,
        'scalingPolicyType' => null,
        'scalingPolicyId' => null,
        'startNumber' => 'int32',
        'limit' => 'int32',
        'sortBy' => null,
        'order' => null,
        'enterpriseProjectId' => null,
        'alarmId' => null
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
    * scalingResourceId  伸缩组ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * sortBy  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    * order  排序顺序ASC：升序；DESC：降序
    * enterpriseProjectId  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    * alarmId  告警ID，即告警规则的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingResourceId' => 'scaling_resource_id',
            'scalingResourceType' => 'scaling_resource_type',
            'scalingPolicyName' => 'scaling_policy_name',
            'scalingPolicyType' => 'scaling_policy_type',
            'scalingPolicyId' => 'scaling_policy_id',
            'startNumber' => 'start_number',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'enterpriseProjectId' => 'enterprise_project_id',
            'alarmId' => 'alarm_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingResourceId  伸缩组ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * sortBy  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    * order  排序顺序ASC：升序；DESC：降序
    * enterpriseProjectId  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    * alarmId  告警ID，即告警规则的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingResourceId' => 'setScalingResourceId',
            'scalingResourceType' => 'setScalingResourceType',
            'scalingPolicyName' => 'setScalingPolicyName',
            'scalingPolicyType' => 'setScalingPolicyType',
            'scalingPolicyId' => 'setScalingPolicyId',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'alarmId' => 'setAlarmId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingResourceId  伸缩组ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * sortBy  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    * order  排序顺序ASC：升序；DESC：降序
    * enterpriseProjectId  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    * alarmId  告警ID，即告警规则的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingResourceId' => 'getScalingResourceId',
            'scalingResourceType' => 'getScalingResourceType',
            'scalingPolicyName' => 'getScalingPolicyName',
            'scalingPolicyType' => 'getScalingPolicyType',
            'scalingPolicyId' => 'getScalingPolicyId',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'alarmId' => 'getAlarmId'
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
    const SCALING_RESOURCE_TYPE_SCALING_GROUP = 'SCALING_GROUP';
    const SCALING_RESOURCE_TYPE_BANDWIDTH = 'BANDWIDTH';
    const SCALING_POLICY_TYPE_ALARM = 'ALARM';
    const SCALING_POLICY_TYPE_SCHEDULED = 'SCHEDULED';
    const SCALING_POLICY_TYPE_RECURRENCE = 'RECURRENCE';
    const SORT_BY_POLICY_NAME = 'POLICY_NAME';
    const SORT_BY_TRIGGER_CONDITION = 'TRIGGER_CONDITION';
    const SORT_BY_CREATE_TIME = 'CREATE_TIME';
    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingResourceTypeAllowableValues()
    {
        return [
            self::SCALING_RESOURCE_TYPE_SCALING_GROUP,
            self::SCALING_RESOURCE_TYPE_BANDWIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingPolicyTypeAllowableValues()
    {
        return [
            self::SCALING_POLICY_TYPE_ALARM,
            self::SCALING_POLICY_TYPE_SCHEDULED,
            self::SCALING_POLICY_TYPE_RECURRENCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_POLICY_NAME,
            self::SORT_BY_TRIGGER_CONDITION,
            self::SORT_BY_CREATE_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['scalingResourceType'] = isset($data['scalingResourceType']) ? $data['scalingResourceType'] : null;
        $this->container['scalingPolicyName'] = isset($data['scalingPolicyName']) ? $data['scalingPolicyName'] : null;
        $this->container['scalingPolicyType'] = isset($data['scalingPolicyType']) ? $data['scalingPolicyType'] : null;
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingResourceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingResourceId'])) {
                $invalidProperties[] = "invalid value for 'scalingResourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingResourceTypeAllowableValues();
                if (!is_null($this->container['scalingResourceType']) && !in_array($this->container['scalingResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getScalingPolicyTypeAllowableValues();
                if (!is_null($this->container['scalingPolicyType']) && !in_array($this->container['scalingPolicyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingPolicyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scalingPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingPolicyId'])) {
                $invalidProperties[] = "invalid value for 'scalingPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getSortByAllowableValues();
                if (!is_null($this->container['sortBy']) && !in_array($this->container['sortBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets scalingResourceId
    *  伸缩组ID。
    *
    * @return string|null
    */
    public function getScalingResourceId()
    {
        return $this->container['scalingResourceId'];
    }

    /**
    * Sets scalingResourceId
    *
    * @param string|null $scalingResourceId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingResourceId($scalingResourceId)
    {
        $this->container['scalingResourceId'] = $scalingResourceId;
        return $this;
    }

    /**
    * Gets scalingResourceType
    *  伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    *
    * @return string|null
    */
    public function getScalingResourceType()
    {
        return $this->container['scalingResourceType'];
    }

    /**
    * Sets scalingResourceType
    *
    * @param string|null $scalingResourceType 伸缩资源类型：伸缩组：SCALING_GROUP；带宽：BANDWIDTH
    *
    * @return $this
    */
    public function setScalingResourceType($scalingResourceType)
    {
        $this->container['scalingResourceType'] = $scalingResourceType;
        return $this;
    }

    /**
    * Gets scalingPolicyName
    *  伸缩策略名称。
    *
    * @return string|null
    */
    public function getScalingPolicyName()
    {
        return $this->container['scalingPolicyName'];
    }

    /**
    * Sets scalingPolicyName
    *
    * @param string|null $scalingPolicyName 伸缩策略名称。
    *
    * @return $this
    */
    public function setScalingPolicyName($scalingPolicyName)
    {
        $this->container['scalingPolicyName'] = $scalingPolicyName;
        return $this;
    }

    /**
    * Gets scalingPolicyType
    *  策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    *
    * @return string|null
    */
    public function getScalingPolicyType()
    {
        return $this->container['scalingPolicyType'];
    }

    /**
    * Sets scalingPolicyType
    *
    * @param string|null $scalingPolicyType 策略类型。  告警策略：ALARM ,定时策略：SCHEDULED, 周期策略：RECURRENCE
    *
    * @return $this
    */
    public function setScalingPolicyType($scalingPolicyType)
    {
        $this->container['scalingPolicyType'] = $scalingPolicyType;
        return $this;
    }

    /**
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string|null
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string|null $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号，默认为0。
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 查询的起始行号，默认为0。
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数，默认20，最大100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数，默认20，最大100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序方法POLICY_NAME：根据策略名称排序;TRIGGER_CONDITION：根据触发条件排序，如升序下，告警策略最先，其余根据最近一次触发时间升序排列;CREATE_TIME：根据策略的创建时间排序。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  排序顺序ASC：升序；DESC：降序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序顺序ASC：升序；DESC：降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。当scaling_resource_type指定为：SCALING_GROUP传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表。当scaling_resource_type指定为：BANDWIDTH传入all_granted_eps时:华为云帐号和拥有全局权限的IAM用户可以查询该用户所有带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的带宽对应的伸缩策略，带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。不指定scaling_resource_type当传入all_granted_eps时：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有的伸缩组和带宽对应的伸缩策略。授予部分企业项目的IAM用户，可以查询该用户所有授权企业项目下的伸缩组和带宽对应的伸缩策略。说明：如果授予部分企业项目的IAM用户拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应伸缩组的伸缩策略列表；带宽在all_granted_eps场景下返回策略请参见[《EIP接口参口》查询带宽列表](https://support.huaweicloud.com/api-eip/eip_apiBandwidth_0002.html)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警ID，即告警规则的ID。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警ID，即告警规则的ID。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
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

