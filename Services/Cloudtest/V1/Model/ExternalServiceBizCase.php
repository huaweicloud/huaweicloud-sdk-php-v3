<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalServiceBizCase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalServiceBizCase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  测试用例描述信息，长度为[0-500]位字符
    * preparation  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    * steps  测试步骤，数组长度小于10
    * labelList  标签名称列表，数组长度小于25
    * moduleId  模块号，长度为[0-32]位字符
    * testVersionId  测试版本号，长度为[0-10]位字符
    * fixVersionId  迭代号，长度为[0-32]位字符
    * assignedId  处理者id信息，固定长度32位字符
    * issueId  用例关联的需求id信息，长度为[0-32]位字符
    * statusId  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    * defectIdList  缺陷id信息，数组长度小于50个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'preparation' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]',
            'labelList' => 'string[]',
            'moduleId' => 'string',
            'testVersionId' => 'string',
            'fixVersionId' => 'string',
            'assignedId' => 'string',
            'issueId' => 'string',
            'statusId' => 'string',
            'defectIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  测试用例描述信息，长度为[0-500]位字符
    * preparation  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    * steps  测试步骤，数组长度小于10
    * labelList  标签名称列表，数组长度小于25
    * moduleId  模块号，长度为[0-32]位字符
    * testVersionId  测试版本号，长度为[0-10]位字符
    * fixVersionId  迭代号，长度为[0-32]位字符
    * assignedId  处理者id信息，固定长度32位字符
    * issueId  用例关联的需求id信息，长度为[0-32]位字符
    * statusId  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    * defectIdList  缺陷id信息，数组长度小于50个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'preparation' => null,
        'steps' => null,
        'labelList' => null,
        'moduleId' => null,
        'testVersionId' => null,
        'fixVersionId' => null,
        'assignedId' => null,
        'issueId' => null,
        'statusId' => null,
        'defectIdList' => null
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
    * description  测试用例描述信息，长度为[0-500]位字符
    * preparation  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    * steps  测试步骤，数组长度小于10
    * labelList  标签名称列表，数组长度小于25
    * moduleId  模块号，长度为[0-32]位字符
    * testVersionId  测试版本号，长度为[0-10]位字符
    * fixVersionId  迭代号，长度为[0-32]位字符
    * assignedId  处理者id信息，固定长度32位字符
    * issueId  用例关联的需求id信息，长度为[0-32]位字符
    * statusId  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    * defectIdList  缺陷id信息，数组长度小于50个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'preparation' => 'preparation',
            'steps' => 'steps',
            'labelList' => 'label_list',
            'moduleId' => 'module_id',
            'testVersionId' => 'test_version_id',
            'fixVersionId' => 'fix_version_id',
            'assignedId' => 'assigned_id',
            'issueId' => 'issue_id',
            'statusId' => 'status_id',
            'defectIdList' => 'defect_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  测试用例描述信息，长度为[0-500]位字符
    * preparation  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    * steps  测试步骤，数组长度小于10
    * labelList  标签名称列表，数组长度小于25
    * moduleId  模块号，长度为[0-32]位字符
    * testVersionId  测试版本号，长度为[0-10]位字符
    * fixVersionId  迭代号，长度为[0-32]位字符
    * assignedId  处理者id信息，固定长度32位字符
    * issueId  用例关联的需求id信息，长度为[0-32]位字符
    * statusId  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    * defectIdList  缺陷id信息，数组长度小于50个
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'preparation' => 'setPreparation',
            'steps' => 'setSteps',
            'labelList' => 'setLabelList',
            'moduleId' => 'setModuleId',
            'testVersionId' => 'setTestVersionId',
            'fixVersionId' => 'setFixVersionId',
            'assignedId' => 'setAssignedId',
            'issueId' => 'setIssueId',
            'statusId' => 'setStatusId',
            'defectIdList' => 'setDefectIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  测试用例描述信息，长度为[0-500]位字符
    * preparation  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    * steps  测试步骤，数组长度小于10
    * labelList  标签名称列表，数组长度小于25
    * moduleId  模块号，长度为[0-32]位字符
    * testVersionId  测试版本号，长度为[0-10]位字符
    * fixVersionId  迭代号，长度为[0-32]位字符
    * assignedId  处理者id信息，固定长度32位字符
    * issueId  用例关联的需求id信息，长度为[0-32]位字符
    * statusId  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    * defectIdList  缺陷id信息，数组长度小于50个
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'preparation' => 'getPreparation',
            'steps' => 'getSteps',
            'labelList' => 'getLabelList',
            'moduleId' => 'getModuleId',
            'testVersionId' => 'getTestVersionId',
            'fixVersionId' => 'getFixVersionId',
            'assignedId' => 'getAssignedId',
            'issueId' => 'getIssueId',
            'statusId' => 'getStatusId',
            'defectIdList' => 'getDefectIdList'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['testVersionId'] = isset($data['testVersionId']) ? $data['testVersionId'] : null;
        $this->container['fixVersionId'] = isset($data['fixVersionId']) ? $data['fixVersionId'] : null;
        $this->container['assignedId'] = isset($data['assignedId']) ? $data['assignedId'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['defectIdList'] = isset($data['defectIdList']) ? $data['defectIdList'] : null;
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
    * Gets description
    *  测试用例描述信息，长度为[0-500]位字符
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
    * @param string|null $description 测试用例描述信息，长度为[0-500]位字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets preparation
    *  执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    *
    * @return string|null
    */
    public function getPreparation()
    {
        return $this->container['preparation'];
    }

    /**
    * Sets preparation
    *
    * @param string|null $preparation 执行该测试用例时需要满足的前置条件，长度为[0-500]位字符
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets steps
    *  测试步骤，数组长度小于10
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]|null $steps 测试步骤，数组长度小于10
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets labelList
    *  标签名称列表，数组长度小于25
    *
    * @return string[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string[]|null $labelList 标签名称列表，数组长度小于25
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块号，长度为[0-32]位字符
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块号，长度为[0-32]位字符
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets testVersionId
    *  测试版本号，长度为[0-10]位字符
    *
    * @return string|null
    */
    public function getTestVersionId()
    {
        return $this->container['testVersionId'];
    }

    /**
    * Sets testVersionId
    *
    * @param string|null $testVersionId 测试版本号，长度为[0-10]位字符
    *
    * @return $this
    */
    public function setTestVersionId($testVersionId)
    {
        $this->container['testVersionId'] = $testVersionId;
        return $this;
    }

    /**
    * Gets fixVersionId
    *  迭代号，长度为[0-32]位字符
    *
    * @return string|null
    */
    public function getFixVersionId()
    {
        return $this->container['fixVersionId'];
    }

    /**
    * Sets fixVersionId
    *
    * @param string|null $fixVersionId 迭代号，长度为[0-32]位字符
    *
    * @return $this
    */
    public function setFixVersionId($fixVersionId)
    {
        $this->container['fixVersionId'] = $fixVersionId;
        return $this;
    }

    /**
    * Gets assignedId
    *  处理者id信息，固定长度32位字符
    *
    * @return string|null
    */
    public function getAssignedId()
    {
        return $this->container['assignedId'];
    }

    /**
    * Sets assignedId
    *
    * @param string|null $assignedId 处理者id信息，固定长度32位字符
    *
    * @return $this
    */
    public function setAssignedId($assignedId)
    {
        $this->container['assignedId'] = $assignedId;
        return $this;
    }

    /**
    * Gets issueId
    *  用例关联的需求id信息，长度为[0-32]位字符
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 用例关联的需求id信息，长度为[0-32]位字符
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets statusId
    *  测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 测试用例状态信息，（0-新建，5-设计中，6-测试中，7-完成）
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets defectIdList
    *  缺陷id信息，数组长度小于50个
    *
    * @return string[]|null
    */
    public function getDefectIdList()
    {
        return $this->container['defectIdList'];
    }

    /**
    * Sets defectIdList
    *
    * @param string[]|null $defectIdList 缺陷id信息，数组长度小于50个
    *
    * @return $this
    */
    public function setDefectIdList($defectIdList)
    {
        $this->container['defectIdList'] = $defectIdList;
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

