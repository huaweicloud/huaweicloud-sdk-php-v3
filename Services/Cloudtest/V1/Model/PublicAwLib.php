<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicAwLib implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicAwLib';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * documentLink  文档链接
    * id  id
    * name  名称
    * netArea  蓝区:Blue,绿区:Green,黄区:Yellow
    * obsTempUrl  obs临时url
    * productLine  产品线
    * repoBranch  仓库分支
    * repoLibPath  存公共aw依赖jar包的目录
    * repoPassword  仓库密码
    * repoPrivateKey  仓库秘钥
    * repoUrl  仓库地址
    * repoUsername  仓库用户名
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => '\DateTime',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'documentLink' => 'string',
            'id' => 'string',
            'name' => 'string',
            'netArea' => 'string[]',
            'obsTempUrl' => 'string',
            'productLine' => 'string',
            'repoBranch' => 'string',
            'repoLibPath' => 'string',
            'repoPassword' => 'string',
            'repoPrivateKey' => 'string',
            'repoUrl' => 'string',
            'repoUsername' => 'string',
            'updateTime' => '\DateTime',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * documentLink  文档链接
    * id  id
    * name  名称
    * netArea  蓝区:Blue,绿区:Green,黄区:Yellow
    * obsTempUrl  obs临时url
    * productLine  产品线
    * repoBranch  仓库分支
    * repoLibPath  存公共aw依赖jar包的目录
    * repoPassword  仓库密码
    * repoPrivateKey  仓库秘钥
    * repoUrl  仓库地址
    * repoUsername  仓库用户名
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'date-time',
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'documentLink' => null,
        'id' => null,
        'name' => null,
        'netArea' => null,
        'obsTempUrl' => null,
        'productLine' => null,
        'repoBranch' => null,
        'repoLibPath' => null,
        'repoPassword' => null,
        'repoPrivateKey' => null,
        'repoUrl' => null,
        'repoUsername' => null,
        'updateTime' => 'date-time',
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
        'updateUser' => null
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
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * documentLink  文档链接
    * id  id
    * name  名称
    * netArea  蓝区:Blue,绿区:Green,黄区:Yellow
    * obsTempUrl  obs临时url
    * productLine  产品线
    * repoBranch  仓库分支
    * repoLibPath  存公共aw依赖jar包的目录
    * repoPassword  仓库密码
    * repoPrivateKey  仓库秘钥
    * repoUrl  仓库地址
    * repoUsername  仓库用户名
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'documentLink' => 'document_link',
            'id' => 'id',
            'name' => 'name',
            'netArea' => 'net_area',
            'obsTempUrl' => 'obs_temp_url',
            'productLine' => 'product_line',
            'repoBranch' => 'repo_branch',
            'repoLibPath' => 'repo_lib_path',
            'repoPassword' => 'repo_password',
            'repoPrivateKey' => 'repo_private_key',
            'repoUrl' => 'repo_url',
            'repoUsername' => 'repo_username',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * documentLink  文档链接
    * id  id
    * name  名称
    * netArea  蓝区:Blue,绿区:Green,黄区:Yellow
    * obsTempUrl  obs临时url
    * productLine  产品线
    * repoBranch  仓库分支
    * repoLibPath  存公共aw依赖jar包的目录
    * repoPassword  仓库密码
    * repoPrivateKey  仓库秘钥
    * repoUrl  仓库地址
    * repoUsername  仓库用户名
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'documentLink' => 'setDocumentLink',
            'id' => 'setId',
            'name' => 'setName',
            'netArea' => 'setNetArea',
            'obsTempUrl' => 'setObsTempUrl',
            'productLine' => 'setProductLine',
            'repoBranch' => 'setRepoBranch',
            'repoLibPath' => 'setRepoLibPath',
            'repoPassword' => 'setRepoPassword',
            'repoPrivateKey' => 'setRepoPrivateKey',
            'repoUrl' => 'setRepoUrl',
            'repoUsername' => 'setRepoUsername',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * documentLink  文档链接
    * id  id
    * name  名称
    * netArea  蓝区:Blue,绿区:Green,黄区:Yellow
    * obsTempUrl  obs临时url
    * productLine  产品线
    * repoBranch  仓库分支
    * repoLibPath  存公共aw依赖jar包的目录
    * repoPassword  仓库密码
    * repoPrivateKey  仓库秘钥
    * repoUrl  仓库地址
    * repoUsername  仓库用户名
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'documentLink' => 'getDocumentLink',
            'id' => 'getId',
            'name' => 'getName',
            'netArea' => 'getNetArea',
            'obsTempUrl' => 'getObsTempUrl',
            'productLine' => 'getProductLine',
            'repoBranch' => 'getRepoBranch',
            'repoLibPath' => 'getRepoLibPath',
            'repoPassword' => 'getRepoPassword',
            'repoPrivateKey' => 'getRepoPrivateKey',
            'repoUrl' => 'getRepoUrl',
            'repoUsername' => 'getRepoUsername',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
            'updateUser' => 'getUpdateUser'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['documentLink'] = isset($data['documentLink']) ? $data['documentLink'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['netArea'] = isset($data['netArea']) ? $data['netArea'] : null;
        $this->container['obsTempUrl'] = isset($data['obsTempUrl']) ? $data['obsTempUrl'] : null;
        $this->container['productLine'] = isset($data['productLine']) ? $data['productLine'] : null;
        $this->container['repoBranch'] = isset($data['repoBranch']) ? $data['repoBranch'] : null;
        $this->container['repoLibPath'] = isset($data['repoLibPath']) ? $data['repoLibPath'] : null;
        $this->container['repoPassword'] = isset($data['repoPassword']) ? $data['repoPassword'] : null;
        $this->container['repoPrivateKey'] = isset($data['repoPrivateKey']) ? $data['repoPrivateKey'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['repoUsername'] = isset($data['repoUsername']) ? $data['repoUsername'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
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
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets createTimeString
    *  创建时间字符串
    *
    * @return string|null
    */
    public function getCreateTimeString()
    {
        return $this->container['createTimeString'];
    }

    /**
    * Sets createTimeString
    *
    * @param string|null $createTimeString 创建时间字符串
    *
    * @return $this
    */
    public function setCreateTimeString($createTimeString)
    {
        $this->container['createTimeString'] = $createTimeString;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
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
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets documentLink
    *  文档链接
    *
    * @return string|null
    */
    public function getDocumentLink()
    {
        return $this->container['documentLink'];
    }

    /**
    * Sets documentLink
    *
    * @param string|null $documentLink 文档链接
    *
    * @return $this
    */
    public function setDocumentLink($documentLink)
    {
        $this->container['documentLink'] = $documentLink;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
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
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets netArea
    *  蓝区:Blue,绿区:Green,黄区:Yellow
    *
    * @return string[]|null
    */
    public function getNetArea()
    {
        return $this->container['netArea'];
    }

    /**
    * Sets netArea
    *
    * @param string[]|null $netArea 蓝区:Blue,绿区:Green,黄区:Yellow
    *
    * @return $this
    */
    public function setNetArea($netArea)
    {
        $this->container['netArea'] = $netArea;
        return $this;
    }

    /**
    * Gets obsTempUrl
    *  obs临时url
    *
    * @return string|null
    */
    public function getObsTempUrl()
    {
        return $this->container['obsTempUrl'];
    }

    /**
    * Sets obsTempUrl
    *
    * @param string|null $obsTempUrl obs临时url
    *
    * @return $this
    */
    public function setObsTempUrl($obsTempUrl)
    {
        $this->container['obsTempUrl'] = $obsTempUrl;
        return $this;
    }

    /**
    * Gets productLine
    *  产品线
    *
    * @return string|null
    */
    public function getProductLine()
    {
        return $this->container['productLine'];
    }

    /**
    * Sets productLine
    *
    * @param string|null $productLine 产品线
    *
    * @return $this
    */
    public function setProductLine($productLine)
    {
        $this->container['productLine'] = $productLine;
        return $this;
    }

    /**
    * Gets repoBranch
    *  仓库分支
    *
    * @return string|null
    */
    public function getRepoBranch()
    {
        return $this->container['repoBranch'];
    }

    /**
    * Sets repoBranch
    *
    * @param string|null $repoBranch 仓库分支
    *
    * @return $this
    */
    public function setRepoBranch($repoBranch)
    {
        $this->container['repoBranch'] = $repoBranch;
        return $this;
    }

    /**
    * Gets repoLibPath
    *  存公共aw依赖jar包的目录
    *
    * @return string|null
    */
    public function getRepoLibPath()
    {
        return $this->container['repoLibPath'];
    }

    /**
    * Sets repoLibPath
    *
    * @param string|null $repoLibPath 存公共aw依赖jar包的目录
    *
    * @return $this
    */
    public function setRepoLibPath($repoLibPath)
    {
        $this->container['repoLibPath'] = $repoLibPath;
        return $this;
    }

    /**
    * Gets repoPassword
    *  仓库密码
    *
    * @return string|null
    */
    public function getRepoPassword()
    {
        return $this->container['repoPassword'];
    }

    /**
    * Sets repoPassword
    *
    * @param string|null $repoPassword 仓库密码
    *
    * @return $this
    */
    public function setRepoPassword($repoPassword)
    {
        $this->container['repoPassword'] = $repoPassword;
        return $this;
    }

    /**
    * Gets repoPrivateKey
    *  仓库秘钥
    *
    * @return string|null
    */
    public function getRepoPrivateKey()
    {
        return $this->container['repoPrivateKey'];
    }

    /**
    * Sets repoPrivateKey
    *
    * @param string|null $repoPrivateKey 仓库秘钥
    *
    * @return $this
    */
    public function setRepoPrivateKey($repoPrivateKey)
    {
        $this->container['repoPrivateKey'] = $repoPrivateKey;
        return $this;
    }

    /**
    * Gets repoUrl
    *  仓库地址
    *
    * @return string|null
    */
    public function getRepoUrl()
    {
        return $this->container['repoUrl'];
    }

    /**
    * Sets repoUrl
    *
    * @param string|null $repoUrl 仓库地址
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
        return $this;
    }

    /**
    * Gets repoUsername
    *  仓库用户名
    *
    * @return string|null
    */
    public function getRepoUsername()
    {
        return $this->container['repoUsername'];
    }

    /**
    * Sets repoUsername
    *
    * @param string|null $repoUsername 仓库用户名
    *
    * @return $this
    */
    public function setRepoUsername($repoUsername)
    {
        $this->container['repoUsername'] = $repoUsername;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  更新时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeString
    *  更新时间字符串
    *
    * @return string|null
    */
    public function getUpdateTimeString()
    {
        return $this->container['updateTimeString'];
    }

    /**
    * Sets updateTimeString
    *
    * @param string|null $updateTimeString 更新时间字符串
    *
    * @return $this
    */
    public function setUpdateTimeString($updateTimeString)
    {
        $this->container['updateTimeString'] = $updateTimeString;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

