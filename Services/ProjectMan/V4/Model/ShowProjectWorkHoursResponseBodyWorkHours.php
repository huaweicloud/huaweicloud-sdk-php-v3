<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectWorkHoursResponseBodyWorkHours implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectWorkHoursResponseBody_work_hours';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectName  项目名称
    * nickName  用户昵称
    * userId  用户id
    * userName  用户名
    * workDate  工时日期
    * workHoursNum  工时花费
    * summary  工时内容
    * workHoursTypeName  工时类型
    * issueId  工作项id
    * issueType  工作项类型
    * subject  工作项标题
    * createdTime  工作项创建时间
    * closedTime  工作项结束时间
    * workHoursCreatedTime  工时创建时间
    * workHoursUpdatedTime  工时更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectName' => 'string',
            'nickName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'workDate' => 'string',
            'workHoursNum' => 'string',
            'summary' => 'string',
            'workHoursTypeName' => 'string',
            'issueId' => 'int',
            'issueType' => 'string',
            'subject' => 'string',
            'createdTime' => 'string',
            'closedTime' => 'string',
            'workHoursCreatedTime' => 'string',
            'workHoursUpdatedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectName  项目名称
    * nickName  用户昵称
    * userId  用户id
    * userName  用户名
    * workDate  工时日期
    * workHoursNum  工时花费
    * summary  工时内容
    * workHoursTypeName  工时类型
    * issueId  工作项id
    * issueType  工作项类型
    * subject  工作项标题
    * createdTime  工作项创建时间
    * closedTime  工作项结束时间
    * workHoursCreatedTime  工时创建时间
    * workHoursUpdatedTime  工时更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectName' => null,
        'nickName' => null,
        'userId' => null,
        'userName' => null,
        'workDate' => null,
        'workHoursNum' => null,
        'summary' => null,
        'workHoursTypeName' => null,
        'issueId' => 'int32',
        'issueType' => null,
        'subject' => null,
        'createdTime' => null,
        'closedTime' => null,
        'workHoursCreatedTime' => null,
        'workHoursUpdatedTime' => null
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
    * projectName  项目名称
    * nickName  用户昵称
    * userId  用户id
    * userName  用户名
    * workDate  工时日期
    * workHoursNum  工时花费
    * summary  工时内容
    * workHoursTypeName  工时类型
    * issueId  工作项id
    * issueType  工作项类型
    * subject  工作项标题
    * createdTime  工作项创建时间
    * closedTime  工作项结束时间
    * workHoursCreatedTime  工时创建时间
    * workHoursUpdatedTime  工时更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectName' => 'project_name',
            'nickName' => 'nick_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'workDate' => 'work_date',
            'workHoursNum' => 'work_hours_num',
            'summary' => 'summary',
            'workHoursTypeName' => 'work_hours_type_name',
            'issueId' => 'issue_id',
            'issueType' => 'issue_type',
            'subject' => 'subject',
            'createdTime' => 'created_time',
            'closedTime' => 'closed_time',
            'workHoursCreatedTime' => 'work_hours_created_time',
            'workHoursUpdatedTime' => 'work_hours_updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectName  项目名称
    * nickName  用户昵称
    * userId  用户id
    * userName  用户名
    * workDate  工时日期
    * workHoursNum  工时花费
    * summary  工时内容
    * workHoursTypeName  工时类型
    * issueId  工作项id
    * issueType  工作项类型
    * subject  工作项标题
    * createdTime  工作项创建时间
    * closedTime  工作项结束时间
    * workHoursCreatedTime  工时创建时间
    * workHoursUpdatedTime  工时更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'projectName' => 'setProjectName',
            'nickName' => 'setNickName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'workDate' => 'setWorkDate',
            'workHoursNum' => 'setWorkHoursNum',
            'summary' => 'setSummary',
            'workHoursTypeName' => 'setWorkHoursTypeName',
            'issueId' => 'setIssueId',
            'issueType' => 'setIssueType',
            'subject' => 'setSubject',
            'createdTime' => 'setCreatedTime',
            'closedTime' => 'setClosedTime',
            'workHoursCreatedTime' => 'setWorkHoursCreatedTime',
            'workHoursUpdatedTime' => 'setWorkHoursUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectName  项目名称
    * nickName  用户昵称
    * userId  用户id
    * userName  用户名
    * workDate  工时日期
    * workHoursNum  工时花费
    * summary  工时内容
    * workHoursTypeName  工时类型
    * issueId  工作项id
    * issueType  工作项类型
    * subject  工作项标题
    * createdTime  工作项创建时间
    * closedTime  工作项结束时间
    * workHoursCreatedTime  工时创建时间
    * workHoursUpdatedTime  工时更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'projectName' => 'getProjectName',
            'nickName' => 'getNickName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'workDate' => 'getWorkDate',
            'workHoursNum' => 'getWorkHoursNum',
            'summary' => 'getSummary',
            'workHoursTypeName' => 'getWorkHoursTypeName',
            'issueId' => 'getIssueId',
            'issueType' => 'getIssueType',
            'subject' => 'getSubject',
            'createdTime' => 'getCreatedTime',
            'closedTime' => 'getClosedTime',
            'workHoursCreatedTime' => 'getWorkHoursCreatedTime',
            'workHoursUpdatedTime' => 'getWorkHoursUpdatedTime'
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
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['workDate'] = isset($data['workDate']) ? $data['workDate'] : null;
        $this->container['workHoursNum'] = isset($data['workHoursNum']) ? $data['workHoursNum'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['workHoursTypeName'] = isset($data['workHoursTypeName']) ? $data['workHoursTypeName'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueType'] = isset($data['issueType']) ? $data['issueType'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['workHoursCreatedTime'] = isset($data['workHoursCreatedTime']) ? $data['workHoursCreatedTime'] : null;
        $this->container['workHoursUpdatedTime'] = isset($data['workHoursUpdatedTime']) ? $data['workHoursUpdatedTime'] : null;
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
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets workDate
    *  工时日期
    *
    * @return string|null
    */
    public function getWorkDate()
    {
        return $this->container['workDate'];
    }

    /**
    * Sets workDate
    *
    * @param string|null $workDate 工时日期
    *
    * @return $this
    */
    public function setWorkDate($workDate)
    {
        $this->container['workDate'] = $workDate;
        return $this;
    }

    /**
    * Gets workHoursNum
    *  工时花费
    *
    * @return string|null
    */
    public function getWorkHoursNum()
    {
        return $this->container['workHoursNum'];
    }

    /**
    * Sets workHoursNum
    *
    * @param string|null $workHoursNum 工时花费
    *
    * @return $this
    */
    public function setWorkHoursNum($workHoursNum)
    {
        $this->container['workHoursNum'] = $workHoursNum;
        return $this;
    }

    /**
    * Gets summary
    *  工时内容
    *
    * @return string|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param string|null $summary 工时内容
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets workHoursTypeName
    *  工时类型
    *
    * @return string|null
    */
    public function getWorkHoursTypeName()
    {
        return $this->container['workHoursTypeName'];
    }

    /**
    * Sets workHoursTypeName
    *
    * @param string|null $workHoursTypeName 工时类型
    *
    * @return $this
    */
    public function setWorkHoursTypeName($workHoursTypeName)
    {
        $this->container['workHoursTypeName'] = $workHoursTypeName;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项id
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作项id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets issueType
    *  工作项类型
    *
    * @return string|null
    */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
    * Sets issueType
    *
    * @param string|null $issueType 工作项类型
    *
    * @return $this
    */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;
        return $this;
    }

    /**
    * Gets subject
    *  工作项标题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 工作项标题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets createdTime
    *  工作项创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 工作项创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets closedTime
    *  工作项结束时间
    *
    * @return string|null
    */
    public function getClosedTime()
    {
        return $this->container['closedTime'];
    }

    /**
    * Sets closedTime
    *
    * @param string|null $closedTime 工作项结束时间
    *
    * @return $this
    */
    public function setClosedTime($closedTime)
    {
        $this->container['closedTime'] = $closedTime;
        return $this;
    }

    /**
    * Gets workHoursCreatedTime
    *  工时创建时间
    *
    * @return string|null
    */
    public function getWorkHoursCreatedTime()
    {
        return $this->container['workHoursCreatedTime'];
    }

    /**
    * Sets workHoursCreatedTime
    *
    * @param string|null $workHoursCreatedTime 工时创建时间
    *
    * @return $this
    */
    public function setWorkHoursCreatedTime($workHoursCreatedTime)
    {
        $this->container['workHoursCreatedTime'] = $workHoursCreatedTime;
        return $this;
    }

    /**
    * Gets workHoursUpdatedTime
    *  工时更新时间
    *
    * @return string|null
    */
    public function getWorkHoursUpdatedTime()
    {
        return $this->container['workHoursUpdatedTime'];
    }

    /**
    * Sets workHoursUpdatedTime
    *
    * @param string|null $workHoursUpdatedTime 工时更新时间
    *
    * @return $this
    */
    public function setWorkHoursUpdatedTime($workHoursUpdatedTime)
    {
        $this->container['workHoursUpdatedTime'] = $workHoursUpdatedTime;
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

