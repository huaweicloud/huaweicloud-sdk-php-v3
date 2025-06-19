<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * planId  测试计划id
    * name  测试计划名称
    * startDate  测试计划开始时间
    * endDate  测试计划截止时间
    * finishDate  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    * projectId  项目id
    * currentStage  当前测试计划所处的阶段
    * expireDay  获取超期时间,正值表示已超期
    * creator  creator
    * owner  owner
    * designStage  designStage
    * executeStage  executeStage
    * reportStage  reportStage
    * iteration  iteration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'planId' => 'string',
            'name' => 'string',
            'startDate' => '\DateTime',
            'endDate' => '\DateTime',
            'finishDate' => '\DateTime',
            'projectId' => 'string',
            'currentStage' => 'string',
            'expireDay' => 'int',
            'creator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailCreator',
            'owner' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailOwner',
            'designStage' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailDesignStage',
            'executeStage' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailExecuteStage',
            'reportStage' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailReportStage',
            'iteration' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * planId  测试计划id
    * name  测试计划名称
    * startDate  测试计划开始时间
    * endDate  测试计划截止时间
    * finishDate  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    * projectId  项目id
    * currentStage  当前测试计划所处的阶段
    * expireDay  获取超期时间,正值表示已超期
    * creator  creator
    * owner  owner
    * designStage  designStage
    * executeStage  executeStage
    * reportStage  reportStage
    * iteration  iteration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'planId' => null,
        'name' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'finishDate' => 'date',
        'projectId' => null,
        'currentStage' => null,
        'expireDay' => null,
        'creator' => null,
        'owner' => null,
        'designStage' => null,
        'executeStage' => null,
        'reportStage' => null,
        'iteration' => null
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
    * planId  测试计划id
    * name  测试计划名称
    * startDate  测试计划开始时间
    * endDate  测试计划截止时间
    * finishDate  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    * projectId  项目id
    * currentStage  当前测试计划所处的阶段
    * expireDay  获取超期时间,正值表示已超期
    * creator  creator
    * owner  owner
    * designStage  designStage
    * executeStage  executeStage
    * reportStage  reportStage
    * iteration  iteration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'planId' => 'plan_id',
            'name' => 'name',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'finishDate' => 'finish_date',
            'projectId' => 'project_id',
            'currentStage' => 'current_stage',
            'expireDay' => 'expire_day',
            'creator' => 'creator',
            'owner' => 'owner',
            'designStage' => 'design_stage',
            'executeStage' => 'execute_stage',
            'reportStage' => 'report_stage',
            'iteration' => 'iteration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * planId  测试计划id
    * name  测试计划名称
    * startDate  测试计划开始时间
    * endDate  测试计划截止时间
    * finishDate  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    * projectId  项目id
    * currentStage  当前测试计划所处的阶段
    * expireDay  获取超期时间,正值表示已超期
    * creator  creator
    * owner  owner
    * designStage  designStage
    * executeStage  executeStage
    * reportStage  reportStage
    * iteration  iteration
    *
    * @var string[]
    */
    protected static $setters = [
            'planId' => 'setPlanId',
            'name' => 'setName',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'finishDate' => 'setFinishDate',
            'projectId' => 'setProjectId',
            'currentStage' => 'setCurrentStage',
            'expireDay' => 'setExpireDay',
            'creator' => 'setCreator',
            'owner' => 'setOwner',
            'designStage' => 'setDesignStage',
            'executeStage' => 'setExecuteStage',
            'reportStage' => 'setReportStage',
            'iteration' => 'setIteration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * planId  测试计划id
    * name  测试计划名称
    * startDate  测试计划开始时间
    * endDate  测试计划截止时间
    * finishDate  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    * projectId  项目id
    * currentStage  当前测试计划所处的阶段
    * expireDay  获取超期时间,正值表示已超期
    * creator  creator
    * owner  owner
    * designStage  designStage
    * executeStage  executeStage
    * reportStage  reportStage
    * iteration  iteration
    *
    * @var string[]
    */
    protected static $getters = [
            'planId' => 'getPlanId',
            'name' => 'getName',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'finishDate' => 'getFinishDate',
            'projectId' => 'getProjectId',
            'currentStage' => 'getCurrentStage',
            'expireDay' => 'getExpireDay',
            'creator' => 'getCreator',
            'owner' => 'getOwner',
            'designStage' => 'getDesignStage',
            'executeStage' => 'getExecuteStage',
            'reportStage' => 'getReportStage',
            'iteration' => 'getIteration'
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
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['finishDate'] = isset($data['finishDate']) ? $data['finishDate'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
        $this->container['expireDay'] = isset($data['expireDay']) ? $data['expireDay'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['designStage'] = isset($data['designStage']) ? $data['designStage'] : null;
        $this->container['executeStage'] = isset($data['executeStage']) ? $data['executeStage'] : null;
        $this->container['reportStage'] = isset($data['reportStage']) ? $data['reportStage'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
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
    * Gets name
    *  测试计划名称
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
    * @param string|null $name 测试计划名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets startDate
    *  测试计划开始时间
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate 测试计划开始时间
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
    *  测试计划截止时间
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate 测试计划截止时间
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets finishDate
    *  测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    *
    * @return \DateTime|null
    */
    public function getFinishDate()
    {
        return $this->container['finishDate'];
    }

    /**
    * Sets finishDate
    *
    * @param \DateTime|null $finishDate 测试计划实际完成时间（测试计划实际完成指测试计划下所有测试用例处于完成状态）
    *
    * @return $this
    */
    public function setFinishDate($finishDate)
    {
        $this->container['finishDate'] = $finishDate;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets currentStage
    *  当前测试计划所处的阶段
    *
    * @return string|null
    */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
    * Sets currentStage
    *
    * @param string|null $currentStage 当前测试计划所处的阶段
    *
    * @return $this
    */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;
        return $this;
    }

    /**
    * Gets expireDay
    *  获取超期时间,正值表示已超期
    *
    * @return int|null
    */
    public function getExpireDay()
    {
        return $this->container['expireDay'];
    }

    /**
    * Sets expireDay
    *
    * @param int|null $expireDay 获取超期时间,正值表示已超期
    *
    * @return $this
    */
    public function setExpireDay($expireDay)
    {
        $this->container['expireDay'] = $expireDay;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailCreator|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailCreator|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailOwner|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailOwner|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets designStage
    *  designStage
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailDesignStage|null
    */
    public function getDesignStage()
    {
        return $this->container['designStage'];
    }

    /**
    * Sets designStage
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailDesignStage|null $designStage designStage
    *
    * @return $this
    */
    public function setDesignStage($designStage)
    {
        $this->container['designStage'] = $designStage;
        return $this;
    }

    /**
    * Gets executeStage
    *  executeStage
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailExecuteStage|null
    */
    public function getExecuteStage()
    {
        return $this->container['executeStage'];
    }

    /**
    * Sets executeStage
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailExecuteStage|null $executeStage executeStage
    *
    * @return $this
    */
    public function setExecuteStage($executeStage)
    {
        $this->container['executeStage'] = $executeStage;
        return $this;
    }

    /**
    * Gets reportStage
    *  reportStage
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailReportStage|null
    */
    public function getReportStage()
    {
        return $this->container['reportStage'];
    }

    /**
    * Sets reportStage
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanDetailReportStage|null $reportStage reportStage
    *
    * @return $this
    */
    public function setReportStage($reportStage)
    {
        $this->container['reportStage'] = $reportStage;
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

