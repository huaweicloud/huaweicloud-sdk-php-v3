<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultCurrOwner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_curr_owner';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * watcher  观察者
    * userId  用户ID
    * userNumId  用户数字id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * nickName  昵称
    * roleId  角色id
    * roleName  角色名
    * imageId  用户头像
    * region  区域
    * opinion  意见
    * description  描述
    * owner  责任人
    * ccbId  评审id
    * hasRemoved  是否已移出项目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'watcher' => 'string',
            'userId' => 'string',
            'userNumId' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'nickName' => 'string',
            'roleId' => 'string',
            'roleName' => 'string',
            'imageId' => 'string',
            'region' => 'string',
            'opinion' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'ccbId' => 'string',
            'hasRemoved' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * watcher  观察者
    * userId  用户ID
    * userNumId  用户数字id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * nickName  昵称
    * roleId  角色id
    * roleName  角色名
    * imageId  用户头像
    * region  区域
    * opinion  意见
    * description  描述
    * owner  责任人
    * ccbId  评审id
    * hasRemoved  是否已移出项目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'watcher' => null,
        'userId' => null,
        'userNumId' => null,
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'nickName' => null,
        'roleId' => null,
        'roleName' => null,
        'imageId' => null,
        'region' => null,
        'opinion' => null,
        'description' => null,
        'owner' => null,
        'ccbId' => null,
        'hasRemoved' => null
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
    * watcher  观察者
    * userId  用户ID
    * userNumId  用户数字id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * nickName  昵称
    * roleId  角色id
    * roleName  角色名
    * imageId  用户头像
    * region  区域
    * opinion  意见
    * description  描述
    * owner  责任人
    * ccbId  评审id
    * hasRemoved  是否已移出项目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'watcher' => 'watcher',
            'userId' => 'user_id',
            'userNumId' => 'user_num_id',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'nickName' => 'nick_name',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'imageId' => 'image_id',
            'region' => 'region',
            'opinion' => 'opinion',
            'description' => 'description',
            'owner' => 'owner',
            'ccbId' => 'ccbId',
            'hasRemoved' => 'has_removed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * watcher  观察者
    * userId  用户ID
    * userNumId  用户数字id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * nickName  昵称
    * roleId  角色id
    * roleName  角色名
    * imageId  用户头像
    * region  区域
    * opinion  意见
    * description  描述
    * owner  责任人
    * ccbId  评审id
    * hasRemoved  是否已移出项目
    *
    * @var string[]
    */
    protected static $setters = [
            'watcher' => 'setWatcher',
            'userId' => 'setUserId',
            'userNumId' => 'setUserNumId',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'nickName' => 'setNickName',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'imageId' => 'setImageId',
            'region' => 'setRegion',
            'opinion' => 'setOpinion',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'ccbId' => 'setCcbId',
            'hasRemoved' => 'setHasRemoved'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * watcher  观察者
    * userId  用户ID
    * userNumId  用户数字id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * nickName  昵称
    * roleId  角色id
    * roleName  角色名
    * imageId  用户头像
    * region  区域
    * opinion  意见
    * description  描述
    * owner  责任人
    * ccbId  评审id
    * hasRemoved  是否已移出项目
    *
    * @var string[]
    */
    protected static $getters = [
            'watcher' => 'getWatcher',
            'userId' => 'getUserId',
            'userNumId' => 'getUserNumId',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'nickName' => 'getNickName',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'imageId' => 'getImageId',
            'region' => 'getRegion',
            'opinion' => 'getOpinion',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'ccbId' => 'getCcbId',
            'hasRemoved' => 'getHasRemoved'
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
        $this->container['watcher'] = isset($data['watcher']) ? $data['watcher'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['opinion'] = isset($data['opinion']) ? $data['opinion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ccbId'] = isset($data['ccbId']) ? $data['ccbId'] : null;
        $this->container['hasRemoved'] = isset($data['hasRemoved']) ? $data['hasRemoved'] : null;
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
    * Gets watcher
    *  观察者
    *
    * @return string|null
    */
    public function getWatcher()
    {
        return $this->container['watcher'];
    }

    /**
    * Sets watcher
    *
    * @param string|null $watcher 观察者
    *
    * @return $this
    */
    public function setWatcher($watcher)
    {
        $this->container['watcher'] = $watcher;
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
    * Gets userNumId
    *  用户数字id
    *
    * @return string|null
    */
    public function getUserNumId()
    {
        return $this->container['userNumId'];
    }

    /**
    * Sets userNumId
    *
    * @param string|null $userNumId 用户数字id
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
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
    * Gets nickName
    *  昵称
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
    * @param string|null $nickName 昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets roleId
    *  角色id
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 角色id
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets roleName
    *  角色名
    *
    * @return string|null
    */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
    * Sets roleName
    *
    * @param string|null $roleName 角色名
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets imageId
    *  用户头像
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 用户头像
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets opinion
    *  意见
    *
    * @return string|null
    */
    public function getOpinion()
    {
        return $this->container['opinion'];
    }

    /**
    * Sets opinion
    *
    * @param string|null $opinion 意见
    *
    * @return $this
    */
    public function setOpinion($opinion)
    {
        $this->container['opinion'] = $opinion;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets ccbId
    *  评审id
    *
    * @return string|null
    */
    public function getCcbId()
    {
        return $this->container['ccbId'];
    }

    /**
    * Sets ccbId
    *
    * @param string|null $ccbId 评审id
    *
    * @return $this
    */
    public function setCcbId($ccbId)
    {
        $this->container['ccbId'] = $ccbId;
        return $this;
    }

    /**
    * Gets hasRemoved
    *  是否已移出项目
    *
    * @return string|null
    */
    public function getHasRemoved()
    {
        return $this->container['hasRemoved'];
    }

    /**
    * Sets hasRemoved
    *
    * @param string|null $hasRemoved 是否已移出项目
    *
    * @return $this
    */
    public function setHasRemoved($hasRemoved)
    {
        $this->container['hasRemoved'] = $hasRemoved;
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

