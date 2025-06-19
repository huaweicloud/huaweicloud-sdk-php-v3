<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testcaseId  测试用例唯一标识
    * projectId  软开云项目唯一标识
    * serviceId  注册测试类型服务接口返回的服务id
    * name  测试用例名称
    * testcaseNumber  测试用例编号
    * rankId  测试用例等级
    * statusId  测试用例状态
    * assignedUser  assignedUser
    * executeCount  测试用例执行次数
    * resultId  测试用例执行结果
    * extendInfo  extendInfo
    * errorCode  接口调用失败错误码
    * errorMsg  接口调用失败错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testcaseId' => 'string',
            'projectId' => 'string',
            'serviceId' => 'int',
            'name' => 'string',
            'testcaseNumber' => 'string',
            'rankId' => 'int',
            'statusId' => 'string',
            'assignedUser' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo',
            'executeCount' => 'int',
            'resultId' => 'string',
            'extendInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendInfo',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testcaseId  测试用例唯一标识
    * projectId  软开云项目唯一标识
    * serviceId  注册测试类型服务接口返回的服务id
    * name  测试用例名称
    * testcaseNumber  测试用例编号
    * rankId  测试用例等级
    * statusId  测试用例状态
    * assignedUser  assignedUser
    * executeCount  测试用例执行次数
    * resultId  测试用例执行结果
    * extendInfo  extendInfo
    * errorCode  接口调用失败错误码
    * errorMsg  接口调用失败错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testcaseId' => null,
        'projectId' => null,
        'serviceId' => null,
        'name' => null,
        'testcaseNumber' => null,
        'rankId' => null,
        'statusId' => null,
        'assignedUser' => null,
        'executeCount' => null,
        'resultId' => null,
        'extendInfo' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * testcaseId  测试用例唯一标识
    * projectId  软开云项目唯一标识
    * serviceId  注册测试类型服务接口返回的服务id
    * name  测试用例名称
    * testcaseNumber  测试用例编号
    * rankId  测试用例等级
    * statusId  测试用例状态
    * assignedUser  assignedUser
    * executeCount  测试用例执行次数
    * resultId  测试用例执行结果
    * extendInfo  extendInfo
    * errorCode  接口调用失败错误码
    * errorMsg  接口调用失败错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testcaseId' => 'testcase_id',
            'projectId' => 'project_id',
            'serviceId' => 'service_id',
            'name' => 'name',
            'testcaseNumber' => 'testcase_number',
            'rankId' => 'rank_id',
            'statusId' => 'status_id',
            'assignedUser' => 'assigned_user',
            'executeCount' => 'execute_count',
            'resultId' => 'result_id',
            'extendInfo' => 'extend_info',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testcaseId  测试用例唯一标识
    * projectId  软开云项目唯一标识
    * serviceId  注册测试类型服务接口返回的服务id
    * name  测试用例名称
    * testcaseNumber  测试用例编号
    * rankId  测试用例等级
    * statusId  测试用例状态
    * assignedUser  assignedUser
    * executeCount  测试用例执行次数
    * resultId  测试用例执行结果
    * extendInfo  extendInfo
    * errorCode  接口调用失败错误码
    * errorMsg  接口调用失败错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'testcaseId' => 'setTestcaseId',
            'projectId' => 'setProjectId',
            'serviceId' => 'setServiceId',
            'name' => 'setName',
            'testcaseNumber' => 'setTestcaseNumber',
            'rankId' => 'setRankId',
            'statusId' => 'setStatusId',
            'assignedUser' => 'setAssignedUser',
            'executeCount' => 'setExecuteCount',
            'resultId' => 'setResultId',
            'extendInfo' => 'setExtendInfo',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testcaseId  测试用例唯一标识
    * projectId  软开云项目唯一标识
    * serviceId  注册测试类型服务接口返回的服务id
    * name  测试用例名称
    * testcaseNumber  测试用例编号
    * rankId  测试用例等级
    * statusId  测试用例状态
    * assignedUser  assignedUser
    * executeCount  测试用例执行次数
    * resultId  测试用例执行结果
    * extendInfo  extendInfo
    * errorCode  接口调用失败错误码
    * errorMsg  接口调用失败错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'testcaseId' => 'getTestcaseId',
            'projectId' => 'getProjectId',
            'serviceId' => 'getServiceId',
            'name' => 'getName',
            'testcaseNumber' => 'getTestcaseNumber',
            'rankId' => 'getRankId',
            'statusId' => 'getStatusId',
            'assignedUser' => 'getAssignedUser',
            'executeCount' => 'getExecuteCount',
            'resultId' => 'getResultId',
            'extendInfo' => 'getExtendInfo',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['testcaseNumber'] = isset($data['testcaseNumber']) ? $data['testcaseNumber'] : null;
        $this->container['rankId'] = isset($data['rankId']) ? $data['rankId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['assignedUser'] = isset($data['assignedUser']) ? $data['assignedUser'] : null;
        $this->container['executeCount'] = isset($data['executeCount']) ? $data['executeCount'] : null;
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets testcaseId
    *  测试用例唯一标识
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 测试用例唯一标识
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets projectId
    *  软开云项目唯一标识
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
    * @param string|null $projectId 软开云项目唯一标识
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets serviceId
    *  注册测试类型服务接口返回的服务id
    *
    * @return int|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param int|null $serviceId 注册测试类型服务接口返回的服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets name
    *  测试用例名称
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
    * @param string|null $name 测试用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets testcaseNumber
    *  测试用例编号
    *
    * @return string|null
    */
    public function getTestcaseNumber()
    {
        return $this->container['testcaseNumber'];
    }

    /**
    * Sets testcaseNumber
    *
    * @param string|null $testcaseNumber 测试用例编号
    *
    * @return $this
    */
    public function setTestcaseNumber($testcaseNumber)
    {
        $this->container['testcaseNumber'] = $testcaseNumber;
        return $this;
    }

    /**
    * Gets rankId
    *  测试用例等级
    *
    * @return int|null
    */
    public function getRankId()
    {
        return $this->container['rankId'];
    }

    /**
    * Sets rankId
    *
    * @param int|null $rankId 测试用例等级
    *
    * @return $this
    */
    public function setRankId($rankId)
    {
        $this->container['rankId'] = $rankId;
        return $this;
    }

    /**
    * Gets statusId
    *  测试用例状态
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
    * @param string|null $statusId 测试用例状态
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets assignedUser
    *  assignedUser
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null
    */
    public function getAssignedUser()
    {
        return $this->container['assignedUser'];
    }

    /**
    * Sets assignedUser
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null $assignedUser assignedUser
    *
    * @return $this
    */
    public function setAssignedUser($assignedUser)
    {
        $this->container['assignedUser'] = $assignedUser;
        return $this;
    }

    /**
    * Gets executeCount
    *  测试用例执行次数
    *
    * @return int|null
    */
    public function getExecuteCount()
    {
        return $this->container['executeCount'];
    }

    /**
    * Sets executeCount
    *
    * @param int|null $executeCount 测试用例执行次数
    *
    * @return $this
    */
    public function setExecuteCount($executeCount)
    {
        $this->container['executeCount'] = $executeCount;
        return $this;
    }

    /**
    * Gets resultId
    *  测试用例执行结果
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId 测试用例执行结果
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets extendInfo
    *  extendInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendInfo|null
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendInfo|null $extendInfo extendInfo
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
        return $this;
    }

    /**
    * Gets errorCode
    *  接口调用失败错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 接口调用失败错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  接口调用失败错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 接口调用失败错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

