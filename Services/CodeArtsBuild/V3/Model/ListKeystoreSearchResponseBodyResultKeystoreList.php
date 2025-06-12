<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListKeystoreSearchResponseBodyResultKeystoreList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListKeystoreSearchResponseBody_result_keystore_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  文件ID
    * permission  permission
    * createTimeStamp  创建时间戳
    * updateTimeStamp  修改时间戳
    * domainId  租户ID
    * domainName  租户名
    * keystoreName  文件名
    * createUserId  文件创建者用户ID
    * createUserName  文件创建者用户名
    * updateUserId  文件修改者用户ID
    * updateUserName  文件修改者用户名
    * share  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    * createTime  更新时间
    * updateTime  更新时间
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'permission' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchResponseBodyResultPermission',
            'createTimeStamp' => 'string',
            'updateTimeStamp' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'keystoreName' => 'string',
            'createUserId' => 'string',
            'createUserName' => 'string',
            'updateUserId' => 'string',
            'updateUserName' => 'string',
            'share' => 'float',
            'createTime' => 'string',
            'updateTime' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  文件ID
    * permission  permission
    * createTimeStamp  创建时间戳
    * updateTimeStamp  修改时间戳
    * domainId  租户ID
    * domainName  租户名
    * keystoreName  文件名
    * createUserId  文件创建者用户ID
    * createUserName  文件创建者用户名
    * updateUserId  文件修改者用户ID
    * updateUserName  文件修改者用户名
    * share  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    * createTime  更新时间
    * updateTime  更新时间
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'permission' => null,
        'createTimeStamp' => null,
        'updateTimeStamp' => null,
        'domainId' => null,
        'domainName' => null,
        'keystoreName' => null,
        'createUserId' => null,
        'createUserName' => null,
        'updateUserId' => null,
        'updateUserName' => null,
        'share' => null,
        'createTime' => null,
        'updateTime' => null,
        'description' => null
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
    * id  文件ID
    * permission  permission
    * createTimeStamp  创建时间戳
    * updateTimeStamp  修改时间戳
    * domainId  租户ID
    * domainName  租户名
    * keystoreName  文件名
    * createUserId  文件创建者用户ID
    * createUserName  文件创建者用户名
    * updateUserId  文件修改者用户ID
    * updateUserName  文件修改者用户名
    * share  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    * createTime  更新时间
    * updateTime  更新时间
    * description  描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'permission' => 'permission',
            'createTimeStamp' => 'create_time_stamp',
            'updateTimeStamp' => 'update_time_stamp',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'keystoreName' => 'keystore_name',
            'createUserId' => 'create_user_id',
            'createUserName' => 'create_user_name',
            'updateUserId' => 'update_user_id',
            'updateUserName' => 'update_user_name',
            'share' => 'share',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  文件ID
    * permission  permission
    * createTimeStamp  创建时间戳
    * updateTimeStamp  修改时间戳
    * domainId  租户ID
    * domainName  租户名
    * keystoreName  文件名
    * createUserId  文件创建者用户ID
    * createUserName  文件创建者用户名
    * updateUserId  文件修改者用户ID
    * updateUserName  文件修改者用户名
    * share  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    * createTime  更新时间
    * updateTime  更新时间
    * description  描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'permission' => 'setPermission',
            'createTimeStamp' => 'setCreateTimeStamp',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'keystoreName' => 'setKeystoreName',
            'createUserId' => 'setCreateUserId',
            'createUserName' => 'setCreateUserName',
            'updateUserId' => 'setUpdateUserId',
            'updateUserName' => 'setUpdateUserName',
            'share' => 'setShare',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  文件ID
    * permission  permission
    * createTimeStamp  创建时间戳
    * updateTimeStamp  修改时间戳
    * domainId  租户ID
    * domainName  租户名
    * keystoreName  文件名
    * createUserId  文件创建者用户ID
    * createUserName  文件创建者用户名
    * updateUserId  文件修改者用户ID
    * updateUserName  文件修改者用户名
    * share  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    * createTime  更新时间
    * updateTime  更新时间
    * description  描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'permission' => 'getPermission',
            'createTimeStamp' => 'getCreateTimeStamp',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'keystoreName' => 'getKeystoreName',
            'createUserId' => 'getCreateUserId',
            'createUserName' => 'getCreateUserName',
            'updateUserId' => 'getUpdateUserId',
            'updateUserName' => 'getUpdateUserName',
            'share' => 'getShare',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'description' => 'getDescription'
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
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['keystoreName'] = isset($data['keystoreName']) ? $data['keystoreName'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['createUserName'] = isset($data['createUserName']) ? $data['createUserName'] : null;
        $this->container['updateUserId'] = isset($data['updateUserId']) ? $data['updateUserId'] : null;
        $this->container['updateUserName'] = isset($data['updateUserName']) ? $data['updateUserName'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    *  文件ID
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
    * @param string|null $id 文件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchResponseBodyResultPermission|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchResponseBodyResultPermission|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间戳
    *
    * @return string|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param string|null $createTimeStamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  修改时间戳
    *
    * @return string|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param string|null $updateTimeStamp 修改时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
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
    * @param string|null $domainId 租户ID
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
    * Gets keystoreName
    *  文件名
    *
    * @return string|null
    */
    public function getKeystoreName()
    {
        return $this->container['keystoreName'];
    }

    /**
    * Sets keystoreName
    *
    * @param string|null $keystoreName 文件名
    *
    * @return $this
    */
    public function setKeystoreName($keystoreName)
    {
        $this->container['keystoreName'] = $keystoreName;
        return $this;
    }

    /**
    * Gets createUserId
    *  文件创建者用户ID
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId 文件创建者用户ID
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets createUserName
    *  文件创建者用户名
    *
    * @return string|null
    */
    public function getCreateUserName()
    {
        return $this->container['createUserName'];
    }

    /**
    * Sets createUserName
    *
    * @param string|null $createUserName 文件创建者用户名
    *
    * @return $this
    */
    public function setCreateUserName($createUserName)
    {
        $this->container['createUserName'] = $createUserName;
        return $this;
    }

    /**
    * Gets updateUserId
    *  文件修改者用户ID
    *
    * @return string|null
    */
    public function getUpdateUserId()
    {
        return $this->container['updateUserId'];
    }

    /**
    * Sets updateUserId
    *
    * @param string|null $updateUserId 文件修改者用户ID
    *
    * @return $this
    */
    public function setUpdateUserId($updateUserId)
    {
        $this->container['updateUserId'] = $updateUserId;
        return $this;
    }

    /**
    * Gets updateUserName
    *  文件修改者用户名
    *
    * @return string|null
    */
    public function getUpdateUserName()
    {
        return $this->container['updateUserName'];
    }

    /**
    * Sets updateUserName
    *
    * @param string|null $updateUserName 文件修改者用户名
    *
    * @return $this
    */
    public function setUpdateUserName($updateUserName)
    {
        $this->container['updateUserName'] = $updateUserName;
        return $this;
    }

    /**
    * Gets share
    *  是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    *
    * @return float|null
    */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
    * Sets share
    *
    * @param float|null $share 是否共享，开启后允许租户内所有成员在编译构建中使用该文件
    *
    * @return $this
    */
    public function setShare($share)
    {
        $this->container['share'] = $share;
        return $this;
    }

    /**
    * Gets createTime
    *  更新时间
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
    * @param string|null $createTime 更新时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

