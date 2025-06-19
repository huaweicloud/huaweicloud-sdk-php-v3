<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalTestCaseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalTestCaseVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * id  用例ID
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * projectId  项目ID
    * executionType  executionType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'owner' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'status' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'module' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'iteration' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'id' => 'string',
            'number' => 'string',
            'description' => 'string',
            'rankId' => 'string',
            'projectId' => 'string',
            'executionType' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'testType' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo',
            'createInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo',
            'executeInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo',
            'associateIssueInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo',
            'associateDefectInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * id  用例ID
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * projectId  项目ID
    * executionType  executionType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'owner' => null,
        'status' => null,
        'result' => null,
        'module' => null,
        'iteration' => null,
        'id' => null,
        'number' => null,
        'description' => null,
        'rankId' => null,
        'projectId' => null,
        'executionType' => null,
        'testType' => null,
        'createInfo' => null,
        'executeInfo' => null,
        'associateIssueInfo' => null,
        'associateDefectInfo' => null
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
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * id  用例ID
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * projectId  项目ID
    * executionType  executionType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'owner' => 'owner',
            'status' => 'status',
            'result' => 'result',
            'module' => 'module',
            'iteration' => 'iteration',
            'id' => 'id',
            'number' => 'number',
            'description' => 'description',
            'rankId' => 'rank_id',
            'projectId' => 'project_id',
            'executionType' => 'execution_type',
            'testType' => 'test_type',
            'createInfo' => 'create_info',
            'executeInfo' => 'execute_info',
            'associateIssueInfo' => 'associate_issue_info',
            'associateDefectInfo' => 'associate_defect_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * id  用例ID
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * projectId  项目ID
    * executionType  executionType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'owner' => 'setOwner',
            'status' => 'setStatus',
            'result' => 'setResult',
            'module' => 'setModule',
            'iteration' => 'setIteration',
            'id' => 'setId',
            'number' => 'setNumber',
            'description' => 'setDescription',
            'rankId' => 'setRankId',
            'projectId' => 'setProjectId',
            'executionType' => 'setExecutionType',
            'testType' => 'setTestType',
            'createInfo' => 'setCreateInfo',
            'executeInfo' => 'setExecuteInfo',
            'associateIssueInfo' => 'setAssociateIssueInfo',
            'associateDefectInfo' => 'setAssociateDefectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * id  用例ID
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * projectId  项目ID
    * executionType  executionType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'owner' => 'getOwner',
            'status' => 'getStatus',
            'result' => 'getResult',
            'module' => 'getModule',
            'iteration' => 'getIteration',
            'id' => 'getId',
            'number' => 'getNumber',
            'description' => 'getDescription',
            'rankId' => 'getRankId',
            'projectId' => 'getProjectId',
            'executionType' => 'getExecutionType',
            'testType' => 'getTestType',
            'createInfo' => 'getCreateInfo',
            'executeInfo' => 'getExecuteInfo',
            'associateIssueInfo' => 'getAssociateIssueInfo',
            'associateDefectInfo' => 'getAssociateDefectInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['rankId'] = isset($data['rankId']) ? $data['rankId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['executionType'] = isset($data['executionType']) ? $data['executionType'] : null;
        $this->container['testType'] = isset($data['testType']) ? $data['testType'] : null;
        $this->container['createInfo'] = isset($data['createInfo']) ? $data['createInfo'] : null;
        $this->container['executeInfo'] = isset($data['executeInfo']) ? $data['executeInfo'] : null;
        $this->container['associateIssueInfo'] = isset($data['associateIssueInfo']) ? $data['associateIssueInfo'] : null;
        $this->container['associateDefectInfo'] = isset($data['associateDefectInfo']) ? $data['associateDefectInfo'] : null;
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
    * Gets name
    *  用例名称
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
    * @param string|null $name 用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets iteration
    *  iteration
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $iteration iteration
    *
    * @return $this
    */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
        return $this;
    }

    /**
    * Gets id
    *  用例ID
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
    * @param string|null $id 用例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets description
    *  用例描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 用例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets rankId
    *  用例等级
    *
    * @return string|null
    */
    public function getRankId()
    {
        return $this->container['rankId'];
    }

    /**
    * Sets rankId
    *
    * @param string|null $rankId 用例等级
    *
    * @return $this
    */
    public function setRankId($rankId)
    {
        $this->container['rankId'] = $rankId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets executionType
    *  executionType
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getExecutionType()
    {
        return $this->container['executionType'];
    }

    /**
    * Sets executionType
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $executionType executionType
    *
    * @return $this
    */
    public function setExecutionType($executionType)
    {
        $this->container['executionType'] = $executionType;
        return $this;
    }

    /**
    * Gets testType
    *  testType
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo|null
    */
    public function getTestType()
    {
        return $this->container['testType'];
    }

    /**
    * Sets testType
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo|null $testType testType
    *
    * @return $this
    */
    public function setTestType($testType)
    {
        $this->container['testType'] = $testType;
        return $this;
    }

    /**
    * Gets createInfo
    *  createInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo|null
    */
    public function getCreateInfo()
    {
        return $this->container['createInfo'];
    }

    /**
    * Sets createInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo|null $createInfo createInfo
    *
    * @return $this
    */
    public function setCreateInfo($createInfo)
    {
        $this->container['createInfo'] = $createInfo;
        return $this;
    }

    /**
    * Gets executeInfo
    *  executeInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo|null
    */
    public function getExecuteInfo()
    {
        return $this->container['executeInfo'];
    }

    /**
    * Sets executeInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo|null $executeInfo executeInfo
    *
    * @return $this
    */
    public function setExecuteInfo($executeInfo)
    {
        $this->container['executeInfo'] = $executeInfo;
        return $this;
    }

    /**
    * Gets associateIssueInfo
    *  associateIssueInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo|null
    */
    public function getAssociateIssueInfo()
    {
        return $this->container['associateIssueInfo'];
    }

    /**
    * Sets associateIssueInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo|null $associateIssueInfo associateIssueInfo
    *
    * @return $this
    */
    public function setAssociateIssueInfo($associateIssueInfo)
    {
        $this->container['associateIssueInfo'] = $associateIssueInfo;
        return $this;
    }

    /**
    * Gets associateDefectInfo
    *  associateDefectInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo|null
    */
    public function getAssociateDefectInfo()
    {
        return $this->container['associateDefectInfo'];
    }

    /**
    * Sets associateDefectInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo|null $associateDefectInfo associateDefectInfo
    *
    * @return $this
    */
    public function setAssociateDefectInfo($associateDefectInfo)
    {
        $this->container['associateDefectInfo'] = $associateDefectInfo;
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

