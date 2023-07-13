<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUsersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUsersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id
    * isGlobalPassword  是否使用全局密码
    * message  错误码
    * userList  用户列表数据
    * rolesList  角色列表数据
    * isSuccess  是否成功
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'isGlobalPassword' => 'string',
            'message' => 'string',
            'userList' => '\HuaweiCloud\SDK\Drs\V3\Model\QueryUserDetailResp[]',
            'rolesList' => '\HuaweiCloud\SDK\Drs\V3\Model\QueryRoleDetailResp[]',
            'isSuccess' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id
    * isGlobalPassword  是否使用全局密码
    * message  错误码
    * userList  用户列表数据
    * rolesList  角色列表数据
    * isSuccess  是否成功
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'isGlobalPassword' => null,
        'message' => null,
        'userList' => null,
        'rolesList' => null,
        'isSuccess' => null
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
    * jobId  任务id
    * isGlobalPassword  是否使用全局密码
    * message  错误码
    * userList  用户列表数据
    * rolesList  角色列表数据
    * isSuccess  是否成功
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'isGlobalPassword' => 'is_global_password',
            'message' => 'message',
            'userList' => 'user_list',
            'rolesList' => 'roles_list',
            'isSuccess' => 'is_success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id
    * isGlobalPassword  是否使用全局密码
    * message  错误码
    * userList  用户列表数据
    * rolesList  角色列表数据
    * isSuccess  是否成功
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'isGlobalPassword' => 'setIsGlobalPassword',
            'message' => 'setMessage',
            'userList' => 'setUserList',
            'rolesList' => 'setRolesList',
            'isSuccess' => 'setIsSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id
    * isGlobalPassword  是否使用全局密码
    * message  错误码
    * userList  用户列表数据
    * rolesList  角色列表数据
    * isSuccess  是否成功
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'isGlobalPassword' => 'getIsGlobalPassword',
            'message' => 'getMessage',
            'userList' => 'getUserList',
            'rolesList' => 'getRolesList',
            'isSuccess' => 'getIsSuccess'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['isGlobalPassword'] = isset($data['isGlobalPassword']) ? $data['isGlobalPassword'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['rolesList'] = isset($data['rolesList']) ? $data['rolesList'] : null;
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
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
    * Gets jobId
    *  任务id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets isGlobalPassword
    *  是否使用全局密码
    *
    * @return string|null
    */
    public function getIsGlobalPassword()
    {
        return $this->container['isGlobalPassword'];
    }

    /**
    * Sets isGlobalPassword
    *
    * @param string|null $isGlobalPassword 是否使用全局密码
    *
    * @return $this
    */
    public function setIsGlobalPassword($isGlobalPassword)
    {
        $this->container['isGlobalPassword'] = $isGlobalPassword;
        return $this;
    }

    /**
    * Gets message
    *  错误码
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 错误码
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets userList
    *  用户列表数据
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\QueryUserDetailResp[]|null
    */
    public function getUserList()
    {
        return $this->container['userList'];
    }

    /**
    * Sets userList
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\QueryUserDetailResp[]|null $userList 用户列表数据
    *
    * @return $this
    */
    public function setUserList($userList)
    {
        $this->container['userList'] = $userList;
        return $this;
    }

    /**
    * Gets rolesList
    *  角色列表数据
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\QueryRoleDetailResp[]|null
    */
    public function getRolesList()
    {
        return $this->container['rolesList'];
    }

    /**
    * Sets rolesList
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\QueryRoleDetailResp[]|null $rolesList 角色列表数据
    *
    * @return $this
    */
    public function setRolesList($rolesList)
    {
        $this->container['rolesList'] = $rolesList;
        return $this;
    }

    /**
    * Gets isSuccess
    *  是否成功
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 是否成功
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
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

