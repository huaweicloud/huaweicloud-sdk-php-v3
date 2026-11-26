<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproverListApprovers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproverList_approvers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  审核人ID
    * email  邮箱
    * department  部门
    * description  描述信息
    * character  角色
    * approverName  审核人名字
    * userId  用户ID
    * userName  用户名
    * phoneNumber  电话号码
    * createBy  创建人
    * createTime  创建时间
    * appName  APP名称
    * topicUrn  主题URN
    * templateId  模板ID
    * projectId  项目ID
    * approverType  审核人类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'email' => 'string',
            'department' => 'string',
            'description' => 'string',
            'character' => 'string',
            'approverName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'phoneNumber' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'appName' => 'string',
            'topicUrn' => 'string',
            'templateId' => 'string',
            'projectId' => 'string',
            'approverType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  审核人ID
    * email  邮箱
    * department  部门
    * description  描述信息
    * character  角色
    * approverName  审核人名字
    * userId  用户ID
    * userName  用户名
    * phoneNumber  电话号码
    * createBy  创建人
    * createTime  创建时间
    * appName  APP名称
    * topicUrn  主题URN
    * templateId  模板ID
    * projectId  项目ID
    * approverType  审核人类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'email' => null,
        'department' => null,
        'description' => null,
        'character' => null,
        'approverName' => null,
        'userId' => null,
        'userName' => null,
        'phoneNumber' => null,
        'createBy' => null,
        'createTime' => 'int32',
        'appName' => null,
        'topicUrn' => null,
        'templateId' => null,
        'projectId' => null,
        'approverType' => 'int32'
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
    * id  审核人ID
    * email  邮箱
    * department  部门
    * description  描述信息
    * character  角色
    * approverName  审核人名字
    * userId  用户ID
    * userName  用户名
    * phoneNumber  电话号码
    * createBy  创建人
    * createTime  创建时间
    * appName  APP名称
    * topicUrn  主题URN
    * templateId  模板ID
    * projectId  项目ID
    * approverType  审核人类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'email' => 'email',
            'department' => 'department',
            'description' => 'description',
            'character' => 'character',
            'approverName' => 'approver_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'phoneNumber' => 'phone_number',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'appName' => 'app_name',
            'topicUrn' => 'topic_urn',
            'templateId' => 'template_id',
            'projectId' => 'project_id',
            'approverType' => 'approver_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  审核人ID
    * email  邮箱
    * department  部门
    * description  描述信息
    * character  角色
    * approverName  审核人名字
    * userId  用户ID
    * userName  用户名
    * phoneNumber  电话号码
    * createBy  创建人
    * createTime  创建时间
    * appName  APP名称
    * topicUrn  主题URN
    * templateId  模板ID
    * projectId  项目ID
    * approverType  审核人类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'email' => 'setEmail',
            'department' => 'setDepartment',
            'description' => 'setDescription',
            'character' => 'setCharacter',
            'approverName' => 'setApproverName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'phoneNumber' => 'setPhoneNumber',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'appName' => 'setAppName',
            'topicUrn' => 'setTopicUrn',
            'templateId' => 'setTemplateId',
            'projectId' => 'setProjectId',
            'approverType' => 'setApproverType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  审核人ID
    * email  邮箱
    * department  部门
    * description  描述信息
    * character  角色
    * approverName  审核人名字
    * userId  用户ID
    * userName  用户名
    * phoneNumber  电话号码
    * createBy  创建人
    * createTime  创建时间
    * appName  APP名称
    * topicUrn  主题URN
    * templateId  模板ID
    * projectId  项目ID
    * approverType  审核人类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'email' => 'getEmail',
            'department' => 'getDepartment',
            'description' => 'getDescription',
            'character' => 'getCharacter',
            'approverName' => 'getApproverName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'phoneNumber' => 'getPhoneNumber',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'appName' => 'getAppName',
            'topicUrn' => 'getTopicUrn',
            'templateId' => 'getTemplateId',
            'projectId' => 'getProjectId',
            'approverType' => 'getApproverType'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['approverType'] = isset($data['approverType']) ? $data['approverType'] : null;
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
    *  审核人ID
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
    * @param string|null $id 审核人ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets email
    *  邮箱
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets department
    *  部门
    *
    * @return string|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param string|null $department 部门
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets character
    *  角色
    *
    * @return string|null
    */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
    * Sets character
    *
    * @param string|null $character 角色
    *
    * @return $this
    */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;
        return $this;
    }

    /**
    * Gets approverName
    *  审核人名字
    *
    * @return string|null
    */
    public function getApproverName()
    {
        return $this->container['approverName'];
    }

    /**
    * Sets approverName
    *
    * @param string|null $approverName 审核人名字
    *
    * @return $this
    */
    public function setApproverName($approverName)
    {
        $this->container['approverName'] = $approverName;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
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
    * @param string|null $userId 用户ID
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
    * Gets phoneNumber
    *  电话号码
    *
    * @return string|null
    */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
    * Sets phoneNumber
    *
    * @param string|null $phoneNumber 电话号码
    *
    * @return $this
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets appName
    *  APP名称
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
    * @param string|null $appName APP名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题URN
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题URN
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets templateId
    *  模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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
    * Gets approverType
    *  审核人类型
    *
    * @return int|null
    */
    public function getApproverType()
    {
        return $this->container['approverType'];
    }

    /**
    * Sets approverType
    *
    * @param int|null $approverType 审核人类型
    *
    * @return $this
    */
    public function setApproverType($approverType)
    {
        $this->container['approverType'] = $approverType;
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

