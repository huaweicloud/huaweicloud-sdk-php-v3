<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiOverview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API ID
    * name  API名称
    * groupId  API分组ID（共享版）
    * description  API描述
    * status  API状态（共享版）
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * type  API 类型
    * manager  API审核人
    * createUser  API创建者
    * createTime  API 创建时间
    * authorizationStatus  authorizationStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'groupId' => 'string',
            'description' => 'string',
            'status' => 'string',
            'debugStatus' => 'string',
            'publishMessages' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]',
            'type' => 'string',
            'manager' => 'string',
            'createUser' => 'string',
            'createTime' => 'int',
            'authorizationStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API ID
    * name  API名称
    * groupId  API分组ID（共享版）
    * description  API描述
    * status  API状态（共享版）
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * type  API 类型
    * manager  API审核人
    * createUser  API创建者
    * createTime  API 创建时间
    * authorizationStatus  authorizationStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'groupId' => null,
        'description' => null,
        'status' => null,
        'debugStatus' => null,
        'publishMessages' => null,
        'type' => null,
        'manager' => null,
        'createUser' => null,
        'createTime' => 'int64',
        'authorizationStatus' => null
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
    * id  API ID
    * name  API名称
    * groupId  API分组ID（共享版）
    * description  API描述
    * status  API状态（共享版）
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * type  API 类型
    * manager  API审核人
    * createUser  API创建者
    * createTime  API 创建时间
    * authorizationStatus  authorizationStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'groupId' => 'group_id',
            'description' => 'description',
            'status' => 'status',
            'debugStatus' => 'debug_status',
            'publishMessages' => 'publish_messages',
            'type' => 'type',
            'manager' => 'manager',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'authorizationStatus' => 'authorization_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API ID
    * name  API名称
    * groupId  API分组ID（共享版）
    * description  API描述
    * status  API状态（共享版）
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * type  API 类型
    * manager  API审核人
    * createUser  API创建者
    * createTime  API 创建时间
    * authorizationStatus  authorizationStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'groupId' => 'setGroupId',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'debugStatus' => 'setDebugStatus',
            'publishMessages' => 'setPublishMessages',
            'type' => 'setType',
            'manager' => 'setManager',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'authorizationStatus' => 'setAuthorizationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API ID
    * name  API名称
    * groupId  API分组ID（共享版）
    * description  API描述
    * status  API状态（共享版）
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * type  API 类型
    * manager  API审核人
    * createUser  API创建者
    * createTime  API 创建时间
    * authorizationStatus  authorizationStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'groupId' => 'getGroupId',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'debugStatus' => 'getDebugStatus',
            'publishMessages' => 'getPublishMessages',
            'type' => 'getType',
            'manager' => 'getManager',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'authorizationStatus' => 'getAuthorizationStatus'
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
    const STATUS_API_STATUS_CREATED = 'API_STATUS_CREATED';
    const STATUS_API_STATUS_PUBLISH_WAIT_REVIEW = 'API_STATUS_PUBLISH_WAIT_REVIEW';
    const STATUS_API_STATUS_PUBLISH_REJECT = 'API_STATUS_PUBLISH_REJECT';
    const STATUS_API_STATUS_PUBLISHED = 'API_STATUS_PUBLISHED';
    const STATUS_API_STATUS_WAITING_STOP = 'API_STATUS_WAITING_STOP';
    const STATUS_API_STATUS_STOPPED = 'API_STATUS_STOPPED';
    const STATUS_API_STATUS_RECOVER_WAIT_REVIEW = 'API_STATUS_RECOVER_WAIT_REVIEW';
    const STATUS_API_STATUS_WAITING_OFFLINE = 'API_STATUS_WAITING_OFFLINE';
    const STATUS_API_STATUS_OFFLINE = 'API_STATUS_OFFLINE';
    const STATUS_API_STATUS_OFFLINE_WAIT_REVIEW = 'API_STATUS_OFFLINE_WAIT_REVIEW';
    const DEBUG_STATUS_API_DEBUG_WAITING = 'API_DEBUG_WAITING';
    const DEBUG_STATUS_API_DEBUG_FAILED = 'API_DEBUG_FAILED';
    const DEBUG_STATUS_API_DEBUG_SUCCESS = 'API_DEBUG_SUCCESS';
    const TYPE_API_SPECIFIC_TYPE_CONFIGURATION = 'API_SPECIFIC_TYPE_CONFIGURATION';
    const TYPE_API_SPECIFIC_TYPE_SCRIPT = 'API_SPECIFIC_TYPE_SCRIPT';
    const TYPE_API_SPECIFIC_TYPE_REGISTER = 'API_SPECIFIC_TYPE_REGISTER';
    const AUTHORIZATION_STATUS_NO_AUTHORIZATION_REQUIRED = 'NO_AUTHORIZATION_REQUIRED';
    const AUTHORIZATION_STATUS_UNAUTHORIZED = 'UNAUTHORIZED';
    const AUTHORIZATION_STATUS_AUTHORIZED = 'AUTHORIZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_API_STATUS_CREATED,
            self::STATUS_API_STATUS_PUBLISH_WAIT_REVIEW,
            self::STATUS_API_STATUS_PUBLISH_REJECT,
            self::STATUS_API_STATUS_PUBLISHED,
            self::STATUS_API_STATUS_WAITING_STOP,
            self::STATUS_API_STATUS_STOPPED,
            self::STATUS_API_STATUS_RECOVER_WAIT_REVIEW,
            self::STATUS_API_STATUS_WAITING_OFFLINE,
            self::STATUS_API_STATUS_OFFLINE,
            self::STATUS_API_STATUS_OFFLINE_WAIT_REVIEW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDebugStatusAllowableValues()
    {
        return [
            self::DEBUG_STATUS_API_DEBUG_WAITING,
            self::DEBUG_STATUS_API_DEBUG_FAILED,
            self::DEBUG_STATUS_API_DEBUG_SUCCESS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_API_SPECIFIC_TYPE_CONFIGURATION,
            self::TYPE_API_SPECIFIC_TYPE_SCRIPT,
            self::TYPE_API_SPECIFIC_TYPE_REGISTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthorizationStatusAllowableValues()
    {
        return [
            self::AUTHORIZATION_STATUS_NO_AUTHORIZATION_REQUIRED,
            self::AUTHORIZATION_STATUS_UNAUTHORIZED,
            self::AUTHORIZATION_STATUS_AUTHORIZED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['debugStatus'] = isset($data['debugStatus']) ? $data['debugStatus'] : null;
        $this->container['publishMessages'] = isset($data['publishMessages']) ? $data['publishMessages'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['authorizationStatus'] = isset($data['authorizationStatus']) ? $data['authorizationStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDebugStatusAllowableValues();
                if (!is_null($this->container['debugStatus']) && !in_array($this->container['debugStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'debugStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthorizationStatusAllowableValues();
                if (!is_null($this->container['authorizationStatus']) && !in_array($this->container['authorizationStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authorizationStatus', must be one of '%s'",
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
    *  API ID
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
    * @param string|null $id API ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  API名称
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
    * @param string|null $name API名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组ID（共享版）
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API分组ID（共享版）
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets description
    *  API描述
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
    * @param string|null $description API描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  API状态（共享版）
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status API状态（共享版）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets debugStatus
    *  API调试状态（共享版）
    *
    * @return string|null
    */
    public function getDebugStatus()
    {
        return $this->container['debugStatus'];
    }

    /**
    * Sets debugStatus
    *
    * @param string|null $debugStatus API调试状态（共享版）
    *
    * @return $this
    */
    public function setDebugStatus($debugStatus)
    {
        $this->container['debugStatus'] = $debugStatus;
        return $this;
    }

    /**
    * Gets publishMessages
    *  发布信息列表（专享版）
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]|null
    */
    public function getPublishMessages()
    {
        return $this->container['publishMessages'];
    }

    /**
    * Sets publishMessages
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]|null $publishMessages 发布信息列表（专享版）
    *
    * @return $this
    */
    public function setPublishMessages($publishMessages)
    {
        $this->container['publishMessages'] = $publishMessages;
        return $this;
    }

    /**
    * Gets type
    *  API 类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type API 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets manager
    *  API审核人
    *
    * @return string|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param string|null $manager API审核人
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets createUser
    *  API创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser API创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  API 创建时间
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
    * @param int|null $createTime API 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets authorizationStatus
    *  authorizationStatus
    *
    * @return string|null
    */
    public function getAuthorizationStatus()
    {
        return $this->container['authorizationStatus'];
    }

    /**
    * Sets authorizationStatus
    *
    * @param string|null $authorizationStatus authorizationStatus
    *
    * @return $this
    */
    public function setAuthorizationStatus($authorizationStatus)
    {
        $this->container['authorizationStatus'] = $authorizationStatus;
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

