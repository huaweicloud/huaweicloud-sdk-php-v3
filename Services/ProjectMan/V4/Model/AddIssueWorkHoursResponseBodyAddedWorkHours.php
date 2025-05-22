<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddIssueWorkHoursResponseBodyAddedWorkHours implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddIssueWorkHoursResponseBody_added_work_hours';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workHoursId  工时id
    * issueId  工作项id
    * userName  用户名
    * userNickName  用户昵称
    * workDate  工时日期
    * workHours  工时数
    * workHoursTypeName  工时类型名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workHoursId' => 'string',
            'issueId' => 'int',
            'userName' => 'string',
            'userNickName' => 'string',
            'workDate' => 'string',
            'workHours' => 'string',
            'workHoursTypeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workHoursId  工时id
    * issueId  工作项id
    * userName  用户名
    * userNickName  用户昵称
    * workDate  工时日期
    * workHours  工时数
    * workHoursTypeName  工时类型名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workHoursId' => null,
        'issueId' => 'int32',
        'userName' => null,
        'userNickName' => null,
        'workDate' => null,
        'workHours' => null,
        'workHoursTypeName' => null
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
    * workHoursId  工时id
    * issueId  工作项id
    * userName  用户名
    * userNickName  用户昵称
    * workDate  工时日期
    * workHours  工时数
    * workHoursTypeName  工时类型名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workHoursId' => 'work_hours_id',
            'issueId' => 'issue_id',
            'userName' => 'user_name',
            'userNickName' => 'user_nick_name',
            'workDate' => 'work_date',
            'workHours' => 'work_hours',
            'workHoursTypeName' => 'work_hours_type_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workHoursId  工时id
    * issueId  工作项id
    * userName  用户名
    * userNickName  用户昵称
    * workDate  工时日期
    * workHours  工时数
    * workHoursTypeName  工时类型名称
    *
    * @var string[]
    */
    protected static $setters = [
            'workHoursId' => 'setWorkHoursId',
            'issueId' => 'setIssueId',
            'userName' => 'setUserName',
            'userNickName' => 'setUserNickName',
            'workDate' => 'setWorkDate',
            'workHours' => 'setWorkHours',
            'workHoursTypeName' => 'setWorkHoursTypeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workHoursId  工时id
    * issueId  工作项id
    * userName  用户名
    * userNickName  用户昵称
    * workDate  工时日期
    * workHours  工时数
    * workHoursTypeName  工时类型名称
    *
    * @var string[]
    */
    protected static $getters = [
            'workHoursId' => 'getWorkHoursId',
            'issueId' => 'getIssueId',
            'userName' => 'getUserName',
            'userNickName' => 'getUserNickName',
            'workDate' => 'getWorkDate',
            'workHours' => 'getWorkHours',
            'workHoursTypeName' => 'getWorkHoursTypeName'
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
        $this->container['workHoursId'] = isset($data['workHoursId']) ? $data['workHoursId'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userNickName'] = isset($data['userNickName']) ? $data['userNickName'] : null;
        $this->container['workDate'] = isset($data['workDate']) ? $data['workDate'] : null;
        $this->container['workHours'] = isset($data['workHours']) ? $data['workHours'] : null;
        $this->container['workHoursTypeName'] = isset($data['workHoursTypeName']) ? $data['workHoursTypeName'] : null;
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
    * Gets workHoursId
    *  工时id
    *
    * @return string|null
    */
    public function getWorkHoursId()
    {
        return $this->container['workHoursId'];
    }

    /**
    * Sets workHoursId
    *
    * @param string|null $workHoursId 工时id
    *
    * @return $this
    */
    public function setWorkHoursId($workHoursId)
    {
        $this->container['workHoursId'] = $workHoursId;
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
    * Gets userNickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getUserNickName()
    {
        return $this->container['userNickName'];
    }

    /**
    * Sets userNickName
    *
    * @param string|null $userNickName 用户昵称
    *
    * @return $this
    */
    public function setUserNickName($userNickName)
    {
        $this->container['userNickName'] = $userNickName;
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
    * Gets workHours
    *  工时数
    *
    * @return string|null
    */
    public function getWorkHours()
    {
        return $this->container['workHours'];
    }

    /**
    * Sets workHours
    *
    * @param string|null $workHours 工时数
    *
    * @return $this
    */
    public function setWorkHours($workHours)
    {
        $this->container['workHours'] = $workHours;
        return $this;
    }

    /**
    * Gets workHoursTypeName
    *  工时类型名称
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
    * @param string|null $workHoursTypeName 工时类型名称
    *
    * @return $this
    */
    public function setWorkHoursTypeName($workHoursTypeName)
    {
        $this->container['workHoursTypeName'] = $workHoursTypeName;
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

