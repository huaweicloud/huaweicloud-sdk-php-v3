<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCurUserInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCurUserInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户id
    * domainName  租户名
    * userNumId  用户数字id
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * createdTime  创建时间
    * updatedTime  更新时间
    * gender  性别
    * userType  用户类型, User 云用户, Federation 联邦账号,
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'userNumId' => 'int',
            'userId' => 'string',
            'userName' => 'string',
            'nickName' => 'string',
            'createdTime' => 'int',
            'updatedTime' => 'int',
            'gender' => 'string',
            'userType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户id
    * domainName  租户名
    * userNumId  用户数字id
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * createdTime  创建时间
    * updatedTime  更新时间
    * gender  性别
    * userType  用户类型, User 云用户, Federation 联邦账号,
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'userNumId' => 'int32',
        'userId' => null,
        'userName' => null,
        'nickName' => null,
        'createdTime' => 'int64',
        'updatedTime' => 'int64',
        'gender' => null,
        'userType' => null
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
    * domainId  租户id
    * domainName  租户名
    * userNumId  用户数字id
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * createdTime  创建时间
    * updatedTime  更新时间
    * gender  性别
    * userType  用户类型, User 云用户, Federation 联邦账号,
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'userNumId' => 'user_num_id',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'nickName' => 'nick_name',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'gender' => 'gender',
            'userType' => 'user_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户id
    * domainName  租户名
    * userNumId  用户数字id
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * createdTime  创建时间
    * updatedTime  更新时间
    * gender  性别
    * userType  用户类型, User 云用户, Federation 联邦账号,
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'userNumId' => 'setUserNumId',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'nickName' => 'setNickName',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'gender' => 'setGender',
            'userType' => 'setUserType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户id
    * domainName  租户名
    * userNumId  用户数字id
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * createdTime  创建时间
    * updatedTime  更新时间
    * gender  性别
    * userType  用户类型, User 云用户, Federation 联邦账号,
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'userNumId' => 'getUserNumId',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'nickName' => 'getNickName',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'gender' => 'getGender',
            'userType' => 'getUserType'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['gender']) && !preg_match("/male|female/", $this->container['gender'])) {
                $invalidProperties[] = "invalid value for 'gender', must be conform to the pattern /male|female/.";
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
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userNumId
    *  用户数字id
    *
    * @return int|null
    */
    public function getUserNumId()
    {
        return $this->container['userNumId'];
    }

    /**
    * Sets userNumId
    *
    * @param int|null $userNumId 用户数字id
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
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
    * Gets createdTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets gender
    *  性别
    *
    * @return string|null
    */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
    * Sets gender
    *
    * @param string|null $gender 性别
    *
    * @return $this
    */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型, User 云用户, Federation 联邦账号,
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
    * @param string|null $userType 用户类型, User 云用户, Federation 联邦账号,
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
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

