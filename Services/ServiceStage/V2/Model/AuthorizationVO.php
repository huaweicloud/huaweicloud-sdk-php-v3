<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizationVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizationVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  授权名称。
    * repoType  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    * repoHost  仓库地址。
    * repoHome  仓库主页。
    * repoUser  仓库用户名。
    * avartar  头像。
    * tokenType  授权方式。
    * createTime  创建时间。
    * updateTime  修改时间。
    * status  状态。
    * tag  授权局点的类型，默认为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'repoType' => 'string',
            'repoHost' => 'string',
            'repoHome' => 'string',
            'repoUser' => 'string',
            'avartar' => 'string',
            'tokenType' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'status' => 'int',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  授权名称。
    * repoType  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    * repoHost  仓库地址。
    * repoHome  仓库主页。
    * repoUser  仓库用户名。
    * avartar  头像。
    * tokenType  授权方式。
    * createTime  创建时间。
    * updateTime  修改时间。
    * status  状态。
    * tag  授权局点的类型，默认为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'repoType' => null,
        'repoHost' => null,
        'repoHome' => null,
        'repoUser' => null,
        'avartar' => null,
        'tokenType' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'status' => 'int32',
        'tag' => null
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
    * name  授权名称。
    * repoType  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    * repoHost  仓库地址。
    * repoHome  仓库主页。
    * repoUser  仓库用户名。
    * avartar  头像。
    * tokenType  授权方式。
    * createTime  创建时间。
    * updateTime  修改时间。
    * status  状态。
    * tag  授权局点的类型，默认为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'repoType' => 'repo_type',
            'repoHost' => 'repo_host',
            'repoHome' => 'repo_home',
            'repoUser' => 'repo_user',
            'avartar' => 'avartar',
            'tokenType' => 'token_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'status' => 'status',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  授权名称。
    * repoType  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    * repoHost  仓库地址。
    * repoHome  仓库主页。
    * repoUser  仓库用户名。
    * avartar  头像。
    * tokenType  授权方式。
    * createTime  创建时间。
    * updateTime  修改时间。
    * status  状态。
    * tag  授权局点的类型，默认为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'repoType' => 'setRepoType',
            'repoHost' => 'setRepoHost',
            'repoHome' => 'setRepoHome',
            'repoUser' => 'setRepoUser',
            'avartar' => 'setAvartar',
            'tokenType' => 'setTokenType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'status' => 'setStatus',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  授权名称。
    * repoType  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    * repoHost  仓库地址。
    * repoHome  仓库主页。
    * repoUser  仓库用户名。
    * avartar  头像。
    * tokenType  授权方式。
    * createTime  创建时间。
    * updateTime  修改时间。
    * status  状态。
    * tag  授权局点的类型，默认为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'repoType' => 'getRepoType',
            'repoHost' => 'getRepoHost',
            'repoHome' => 'getRepoHome',
            'repoUser' => 'getRepoUser',
            'avartar' => 'getAvartar',
            'tokenType' => 'getTokenType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'status' => 'getStatus',
            'tag' => 'getTag'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['repoHost'] = isset($data['repoHost']) ? $data['repoHost'] : null;
        $this->container['repoHome'] = isset($data['repoHome']) ? $data['repoHome'] : null;
        $this->container['repoUser'] = isset($data['repoUser']) ? $data['repoUser'] : null;
        $this->container['avartar'] = isset($data['avartar']) ? $data['avartar'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['repoType'] === null) {
            $invalidProperties[] = "'repoType' can't be null";
        }
        if ($this->container['repoHost'] === null) {
            $invalidProperties[] = "'repoHost' can't be null";
        }
        if ($this->container['repoHome'] === null) {
            $invalidProperties[] = "'repoHome' can't be null";
        }
        if ($this->container['repoUser'] === null) {
            $invalidProperties[] = "'repoUser' can't be null";
        }
        if ($this->container['avartar'] === null) {
            $invalidProperties[] = "'avartar' can't be null";
        }
        if ($this->container['tokenType'] === null) {
            $invalidProperties[] = "'tokenType' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
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
    * Gets name
    *  授权名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 授权名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets repoType
    *  仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    *
    * @return string
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string $repoType 仓库类型。 取值范围：github、gitlab、gitee、bitbucket、devcloud。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets repoHost
    *  仓库地址。
    *
    * @return string
    */
    public function getRepoHost()
    {
        return $this->container['repoHost'];
    }

    /**
    * Sets repoHost
    *
    * @param string $repoHost 仓库地址。
    *
    * @return $this
    */
    public function setRepoHost($repoHost)
    {
        $this->container['repoHost'] = $repoHost;
        return $this;
    }

    /**
    * Gets repoHome
    *  仓库主页。
    *
    * @return string
    */
    public function getRepoHome()
    {
        return $this->container['repoHome'];
    }

    /**
    * Sets repoHome
    *
    * @param string $repoHome 仓库主页。
    *
    * @return $this
    */
    public function setRepoHome($repoHome)
    {
        $this->container['repoHome'] = $repoHome;
        return $this;
    }

    /**
    * Gets repoUser
    *  仓库用户名。
    *
    * @return string
    */
    public function getRepoUser()
    {
        return $this->container['repoUser'];
    }

    /**
    * Sets repoUser
    *
    * @param string $repoUser 仓库用户名。
    *
    * @return $this
    */
    public function setRepoUser($repoUser)
    {
        $this->container['repoUser'] = $repoUser;
        return $this;
    }

    /**
    * Gets avartar
    *  头像。
    *
    * @return string
    */
    public function getAvartar()
    {
        return $this->container['avartar'];
    }

    /**
    * Sets avartar
    *
    * @param string $avartar 头像。
    *
    * @return $this
    */
    public function setAvartar($avartar)
    {
        $this->container['avartar'] = $avartar;
        return $this;
    }

    /**
    * Gets tokenType
    *  授权方式。
    *
    * @return string
    */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
    * Sets tokenType
    *
    * @param string $tokenType 授权方式。
    *
    * @return $this
    */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间。
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
    *  修改时间。
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets status
    *  状态。
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tag
    *  授权局点的类型，默认为null。
    *
    * @return string
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string $tag 授权局点的类型，默认为null。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

