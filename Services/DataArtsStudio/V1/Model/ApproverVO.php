<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproverVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproverVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  审批单ID，填写String类型替代Long类型。
    * approverName  审批人姓名。
    * userId  审批人ID。
    * userName  审批人名称。
    * email  email信息。
    * userType  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    * phoneNumber  电话号码。
    * createBy  创建人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * appName  业务系统名称。
    * topicUrn  smn主题urn。
    * projectId  项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'approverName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'email' => 'string',
            'userType' => 'string',
            'phoneNumber' => 'string',
            'createBy' => 'string',
            'createTime' => 'string',
            'appName' => 'string',
            'topicUrn' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  审批单ID，填写String类型替代Long类型。
    * approverName  审批人姓名。
    * userId  审批人ID。
    * userName  审批人名称。
    * email  email信息。
    * userType  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    * phoneNumber  电话号码。
    * createBy  创建人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * appName  业务系统名称。
    * topicUrn  smn主题urn。
    * projectId  项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'approverName' => null,
        'userId' => null,
        'userName' => null,
        'email' => null,
        'userType' => null,
        'phoneNumber' => null,
        'createBy' => null,
        'createTime' => null,
        'appName' => null,
        'topicUrn' => null,
        'projectId' => null
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
    * id  审批单ID，填写String类型替代Long类型。
    * approverName  审批人姓名。
    * userId  审批人ID。
    * userName  审批人名称。
    * email  email信息。
    * userType  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    * phoneNumber  电话号码。
    * createBy  创建人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * appName  业务系统名称。
    * topicUrn  smn主题urn。
    * projectId  项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'approverName' => 'approver_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'email' => 'email',
            'userType' => 'user_type',
            'phoneNumber' => 'phone_number',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'appName' => 'app_name',
            'topicUrn' => 'topic_urn',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  审批单ID，填写String类型替代Long类型。
    * approverName  审批人姓名。
    * userId  审批人ID。
    * userName  审批人名称。
    * email  email信息。
    * userType  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    * phoneNumber  电话号码。
    * createBy  创建人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * appName  业务系统名称。
    * topicUrn  smn主题urn。
    * projectId  项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'approverName' => 'setApproverName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'email' => 'setEmail',
            'userType' => 'setUserType',
            'phoneNumber' => 'setPhoneNumber',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'appName' => 'setAppName',
            'topicUrn' => 'setTopicUrn',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  审批单ID，填写String类型替代Long类型。
    * approverName  审批人姓名。
    * userId  审批人ID。
    * userName  审批人名称。
    * email  email信息。
    * userType  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    * phoneNumber  电话号码。
    * createBy  创建人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * appName  业务系统名称。
    * topicUrn  smn主题urn。
    * projectId  项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'approverName' => 'getApproverName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'email' => 'getEmail',
            'userType' => 'getUserType',
            'phoneNumber' => 'getPhoneNumber',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'appName' => 'getAppName',
            'topicUrn' => 'getTopicUrn',
            'projectId' => 'getProjectId'
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
    const USER_TYPE_BIZ_METRIC_OWNER = 'BIZ_METRIC_OWNER';
    const USER_TYPE_APPROVER = 'APPROVER';
    const USER_TYPE_BIZ_METRIC_OWNER_AND_APPROVER = 'BIZ_METRIC_OWNER_AND_APPROVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_BIZ_METRIC_OWNER,
            self::USER_TYPE_APPROVER,
            self::USER_TYPE_BIZ_METRIC_OWNER_AND_APPROVER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['approverName']) && (mb_strlen($this->container['approverName']) > 20)) {
                $invalidProperties[] = "invalid value for 'approverName', the character length must be smaller than or equal to 20.";
            }
            $allowedValues = $this->getUserTypeAllowableValues();
                if (!is_null($this->container['userType']) && !in_array($this->container['userType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'userType', must be one of '%s'",
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
    * Gets id
    *  审批单ID，填写String类型替代Long类型。
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
    * @param string|null $id 审批单ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets approverName
    *  审批人姓名。
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
    * @param string|null $approverName 审批人姓名。
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
    *  审批人ID。
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
    * @param string|null $userId 审批人ID。
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
    *  审批人名称。
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
    * @param string|null $userName 审批人名称。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets email
    *  email信息。
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
    * @param string|null $email email信息。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType 用户类型。 枚举值：   - BIZ_METRIC_OWNER: 业务指标责任人   - APPROVER: 审批人   - BIZ_METRIC_OWNER_AND_APPROVER: 业务指标责任人是审核人
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets phoneNumber
    *  电话号码。
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
    * @param string|null $phoneNumber 电话号码。
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
    *  创建人。
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
    * @param string|null $createBy 创建人。
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
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  业务系统名称。
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
    * @param string|null $appName 业务系统名称。
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
    *  smn主题urn。
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
    * @param string|null $topicUrn smn主题urn。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

