<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScalingGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScalingGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * scalingGroupName  伸缩组名称
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    * scalingGroupStatus  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    * startNumber  查询的起始行号，默认为0。最小值为0，最大值没有限制。
    * limit  查询的记录条数，默认为20。取值范围为：0~100。
    * enterpriseProjectId  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'scalingGroupName' => 'string',
            'scalingConfigurationId' => 'string',
            'scalingGroupStatus' => 'string',
            'startNumber' => 'int',
            'limit' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * scalingGroupName  伸缩组名称
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    * scalingGroupStatus  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    * startNumber  查询的起始行号，默认为0。最小值为0，最大值没有限制。
    * limit  查询的记录条数，默认为20。取值范围为：0~100。
    * enterpriseProjectId  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'scalingGroupName' => null,
        'scalingConfigurationId' => null,
        'scalingGroupStatus' => null,
        'startNumber' => null,
        'limit' => null,
        'enterpriseProjectId' => null
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
    * projectId  项目ID
    * scalingGroupName  伸缩组名称
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    * scalingGroupStatus  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    * startNumber  查询的起始行号，默认为0。最小值为0，最大值没有限制。
    * limit  查询的记录条数，默认为20。取值范围为：0~100。
    * enterpriseProjectId  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'scalingGroupName' => 'scaling_group_name',
            'scalingConfigurationId' => 'scaling_configuration_id',
            'scalingGroupStatus' => 'scaling_group_status',
            'startNumber' => 'start_number',
            'limit' => 'limit',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * scalingGroupName  伸缩组名称
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    * scalingGroupStatus  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    * startNumber  查询的起始行号，默认为0。最小值为0，最大值没有限制。
    * limit  查询的记录条数，默认为20。取值范围为：0~100。
    * enterpriseProjectId  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'scalingGroupName' => 'setScalingGroupName',
            'scalingConfigurationId' => 'setScalingConfigurationId',
            'scalingGroupStatus' => 'setScalingGroupStatus',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * scalingGroupName  伸缩组名称
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    * scalingGroupStatus  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    * startNumber  查询的起始行号，默认为0。最小值为0，最大值没有限制。
    * limit  查询的记录条数，默认为20。取值范围为：0~100。
    * enterpriseProjectId  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'scalingGroupName' => 'getScalingGroupName',
            'scalingConfigurationId' => 'getScalingConfigurationId',
            'scalingGroupStatus' => 'getScalingGroupStatus',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const SCALING_GROUP_STATUS_INSERVICE = 'INSERVICE';
    const SCALING_GROUP_STATUS_PAUSED = 'PAUSED';
    const SCALING_GROUP_STATUS_ERROR = 'ERROR';
    const SCALING_GROUP_STATUS_DELETING = 'DELETING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingGroupStatusAllowableValues()
    {
        return [
            self::SCALING_GROUP_STATUS_INSERVICE,
            self::SCALING_GROUP_STATUS_PAUSED,
            self::SCALING_GROUP_STATUS_ERROR,
            self::SCALING_GROUP_STATUS_DELETING,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['scalingGroupName'] = isset($data['scalingGroupName']) ? $data['scalingGroupName'] : null;
        $this->container['scalingConfigurationId'] = isset($data['scalingConfigurationId']) ? $data['scalingConfigurationId'] : null;
        $this->container['scalingGroupStatus'] = isset($data['scalingGroupStatus']) ? $data['scalingGroupStatus'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!is_null($this->container['scalingConfigurationId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingGroupStatusAllowableValues();
                if (!is_null($this->container['scalingGroupStatus']) && !in_array($this->container['scalingGroupStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingGroupStatus', must be one of '%s'",
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets scalingGroupName
    *  伸缩组名称
    *
    * @return string|null
    */
    public function getScalingGroupName()
    {
        return $this->container['scalingGroupName'];
    }

    /**
    * Sets scalingGroupName
    *
    * @param string|null $scalingGroupName 伸缩组名称
    *
    * @return $this
    */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->container['scalingGroupName'] = $scalingGroupName;
        return $this;
    }

    /**
    * Gets scalingConfigurationId
    *  伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    *
    * @return string|null
    */
    public function getScalingConfigurationId()
    {
        return $this->container['scalingConfigurationId'];
    }

    /**
    * Sets scalingConfigurationId
    *
    * @param string|null $scalingConfigurationId 伸缩配置ID，通过查询弹性伸缩配置列表接口获取，详见[查询弹性伸缩配置列表](https://support.huaweicloud.com/api-as/as_06_0202.html)。
    *
    * @return $this
    */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->container['scalingConfigurationId'] = $scalingConfigurationId;
        return $this;
    }

    /**
    * Gets scalingGroupStatus
    *  伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    *
    * @return string|null
    */
    public function getScalingGroupStatus()
    {
        return $this->container['scalingGroupStatus'];
    }

    /**
    * Sets scalingGroupStatus
    *
    * @param string|null $scalingGroupStatus 伸缩组状态，取值如下：  - INSERVICE：正常状态 - PAUSED：停用状态 - ERROR：异常状态 - DELETING：删除中 - FREEZED：已冻结
    *
    * @return $this
    */
    public function setScalingGroupStatus($scalingGroupStatus)
    {
        $this->container['scalingGroupStatus'] = $scalingGroupStatus;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号，默认为0。最小值为0，最大值没有限制。
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
    * @param int|null $startNumber 查询的起始行号，默认为0。最小值为0，最大值没有限制。
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
    *  查询的记录条数，默认为20。取值范围为：0~100。
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
    * @param int|null $limit 查询的记录条数，默认为20。取值范围为：0~100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
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
    * @param string|null $enterpriseProjectId 企业项目ID，当传入all_granted_eps时表示查询该用户所有授权的企业项目下的伸缩组列表，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。说明：华为云帐号和拥有全局权限的IAM用户可以查询该用户所有伸缩组列表。授予部分企业项目的IAM用户，如果拥有超过100个企业项目，则只能返回有权限的前100个企业项目对应的伸缩组列表。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

