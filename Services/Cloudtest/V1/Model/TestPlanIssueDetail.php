<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanIssueDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanIssueDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * workitemId  工作项id
    * parentIssue  父工作项
    * startDate  预计开始日期
    * endDate  预计结束日期
    * name  工作项名称
    * regionId  region信息
    * owner  owner
    * severity  severity
    * status  status
    * tracker  tracker
    * iteration  iteration
    * module  module
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'planId' => 'string',
            'workitemId' => 'string',
            'parentIssue' => 'string',
            'startDate' => 'string',
            'endDate' => 'string',
            'name' => 'string',
            'regionId' => 'string',
            'owner' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'severity' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'status' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'tracker' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'iteration' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'module' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * workitemId  工作项id
    * parentIssue  父工作项
    * startDate  预计开始日期
    * endDate  预计结束日期
    * name  工作项名称
    * regionId  region信息
    * owner  owner
    * severity  severity
    * status  status
    * tracker  tracker
    * iteration  iteration
    * module  module
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'planId' => null,
        'workitemId' => null,
        'parentIssue' => null,
        'startDate' => null,
        'endDate' => null,
        'name' => null,
        'regionId' => null,
        'owner' => null,
        'severity' => null,
        'status' => null,
        'tracker' => null,
        'iteration' => null,
        'module' => null
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
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * workitemId  工作项id
    * parentIssue  父工作项
    * startDate  预计开始日期
    * endDate  预计结束日期
    * name  工作项名称
    * regionId  region信息
    * owner  owner
    * severity  severity
    * status  status
    * tracker  tracker
    * iteration  iteration
    * module  module
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'planId' => 'plan_id',
            'workitemId' => 'workitem_id',
            'parentIssue' => 'parent_issue',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'name' => 'name',
            'regionId' => 'region_id',
            'owner' => 'owner',
            'severity' => 'severity',
            'status' => 'status',
            'tracker' => 'tracker',
            'iteration' => 'iteration',
            'module' => 'module'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * workitemId  工作项id
    * parentIssue  父工作项
    * startDate  预计开始日期
    * endDate  预计结束日期
    * name  工作项名称
    * regionId  region信息
    * owner  owner
    * severity  severity
    * status  status
    * tracker  tracker
    * iteration  iteration
    * module  module
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'planId' => 'setPlanId',
            'workitemId' => 'setWorkitemId',
            'parentIssue' => 'setParentIssue',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'owner' => 'setOwner',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'tracker' => 'setTracker',
            'iteration' => 'setIteration',
            'module' => 'setModule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * workitemId  工作项id
    * parentIssue  父工作项
    * startDate  预计开始日期
    * endDate  预计结束日期
    * name  工作项名称
    * regionId  region信息
    * owner  owner
    * severity  severity
    * status  status
    * tracker  tracker
    * iteration  iteration
    * module  module
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'planId' => 'getPlanId',
            'workitemId' => 'getWorkitemId',
            'parentIssue' => 'getParentIssue',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'owner' => 'getOwner',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'tracker' => 'getTracker',
            'iteration' => 'getIteration',
            'module' => 'getModule'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['workitemId'] = isset($data['workitemId']) ? $data['workitemId'] : null;
        $this->container['parentIssue'] = isset($data['parentIssue']) ? $data['parentIssue'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
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
    * Gets projectId
    *  项目id，项目唯一标识，固定长度32位字符
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id，项目唯一标识，固定长度32位字符
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划id
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 测试计划id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets workitemId
    *  工作项id
    *
    * @return string|null
    */
    public function getWorkitemId()
    {
        return $this->container['workitemId'];
    }

    /**
    * Sets workitemId
    *
    * @param string|null $workitemId 工作项id
    *
    * @return $this
    */
    public function setWorkitemId($workitemId)
    {
        $this->container['workitemId'] = $workitemId;
        return $this;
    }

    /**
    * Gets parentIssue
    *  父工作项
    *
    * @return string|null
    */
    public function getParentIssue()
    {
        return $this->container['parentIssue'];
    }

    /**
    * Sets parentIssue
    *
    * @param string|null $parentIssue 父工作项
    *
    * @return $this
    */
    public function setParentIssue($parentIssue)
    {
        $this->container['parentIssue'] = $parentIssue;
        return $this;
    }

    /**
    * Gets startDate
    *  预计开始日期
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 预计开始日期
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  预计结束日期
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 预计结束日期
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets name
    *  工作项名称
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
    * @param string|null $name 工作项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  region信息
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region信息
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tracker
    *  tracker
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets iteration
    *  iteration
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $iteration iteration
    *
    * @return $this
    */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
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

