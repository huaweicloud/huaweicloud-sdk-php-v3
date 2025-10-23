<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogTreeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogTreeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 文件名
    * path  **参数解释：** 路径
    * type  **参数解释：** 文件类型
    * commit  **参数解释：** 最近提交信息
    * blobId  **参数解释：** 文件id
    * submoduleUrl  **参数解释：** 子模块url地址
    * isLimited  **参数解释：** 文件是否受限
    * submoduleLink  **参数解释：** 子模块链接
    * md5  **参数解释：** 文件md5
    * nickName  **参数解释：** 最近提交作者昵称
    * tenantName  **参数解释：** 租户名称
    * userName  **参数解释：** 用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'path' => 'string',
            'type' => 'string',
            'commit' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto',
            'blobId' => 'string',
            'submoduleUrl' => 'string',
            'isLimited' => 'bool',
            'submoduleLink' => 'string',
            'md5' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 文件名
    * path  **参数解释：** 路径
    * type  **参数解释：** 文件类型
    * commit  **参数解释：** 最近提交信息
    * blobId  **参数解释：** 文件id
    * submoduleUrl  **参数解释：** 子模块url地址
    * isLimited  **参数解释：** 文件是否受限
    * submoduleLink  **参数解释：** 子模块链接
    * md5  **参数解释：** 文件md5
    * nickName  **参数解释：** 最近提交作者昵称
    * tenantName  **参数解释：** 租户名称
    * userName  **参数解释：** 用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'path' => null,
        'type' => null,
        'commit' => null,
        'blobId' => null,
        'submoduleUrl' => null,
        'isLimited' => null,
        'submoduleLink' => null,
        'md5' => null,
        'nickName' => null,
        'tenantName' => null,
        'userName' => null
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
    * name  **参数解释：** 文件名
    * path  **参数解释：** 路径
    * type  **参数解释：** 文件类型
    * commit  **参数解释：** 最近提交信息
    * blobId  **参数解释：** 文件id
    * submoduleUrl  **参数解释：** 子模块url地址
    * isLimited  **参数解释：** 文件是否受限
    * submoduleLink  **参数解释：** 子模块链接
    * md5  **参数解释：** 文件md5
    * nickName  **参数解释：** 最近提交作者昵称
    * tenantName  **参数解释：** 租户名称
    * userName  **参数解释：** 用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'path' => 'path',
            'type' => 'type',
            'commit' => 'commit',
            'blobId' => 'blob_id',
            'submoduleUrl' => 'submodule_url',
            'isLimited' => 'is_limited',
            'submoduleLink' => 'submodule_link',
            'md5' => 'md5',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 文件名
    * path  **参数解释：** 路径
    * type  **参数解释：** 文件类型
    * commit  **参数解释：** 最近提交信息
    * blobId  **参数解释：** 文件id
    * submoduleUrl  **参数解释：** 子模块url地址
    * isLimited  **参数解释：** 文件是否受限
    * submoduleLink  **参数解释：** 子模块链接
    * md5  **参数解释：** 文件md5
    * nickName  **参数解释：** 最近提交作者昵称
    * tenantName  **参数解释：** 租户名称
    * userName  **参数解释：** 用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'path' => 'setPath',
            'type' => 'setType',
            'commit' => 'setCommit',
            'blobId' => 'setBlobId',
            'submoduleUrl' => 'setSubmoduleUrl',
            'isLimited' => 'setIsLimited',
            'submoduleLink' => 'setSubmoduleLink',
            'md5' => 'setMd5',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 文件名
    * path  **参数解释：** 路径
    * type  **参数解释：** 文件类型
    * commit  **参数解释：** 最近提交信息
    * blobId  **参数解释：** 文件id
    * submoduleUrl  **参数解释：** 子模块url地址
    * isLimited  **参数解释：** 文件是否受限
    * submoduleLink  **参数解释：** 子模块链接
    * md5  **参数解释：** 文件md5
    * nickName  **参数解释：** 最近提交作者昵称
    * tenantName  **参数解释：** 租户名称
    * userName  **参数解释：** 用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'path' => 'getPath',
            'type' => 'getType',
            'commit' => 'getCommit',
            'blobId' => 'getBlobId',
            'submoduleUrl' => 'getSubmoduleUrl',
            'isLimited' => 'getIsLimited',
            'submoduleLink' => 'getSubmoduleLink',
            'md5' => 'getMd5',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'userName' => 'getUserName'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['submoduleUrl'] = isset($data['submoduleUrl']) ? $data['submoduleUrl'] : null;
        $this->container['isLimited'] = isset($data['isLimited']) ? $data['isLimited'] : null;
        $this->container['submoduleLink'] = isset($data['submoduleLink']) ? $data['submoduleLink'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 1000)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blobId']) && (mb_strlen($this->container['blobId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'blobId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['blobId']) && (mb_strlen($this->container['blobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'blobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['submoduleUrl']) && (mb_strlen($this->container['submoduleUrl']) > 1000)) {
                $invalidProperties[] = "invalid value for 'submoduleUrl', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['submoduleUrl']) && (mb_strlen($this->container['submoduleUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'submoduleUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['submoduleLink']) && (mb_strlen($this->container['submoduleLink']) > 1000)) {
                $invalidProperties[] = "invalid value for 'submoduleLink', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['submoduleLink']) && (mb_strlen($this->container['submoduleLink']) < 1)) {
                $invalidProperties[] = "invalid value for 'submoduleLink', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['md5']) && (mb_strlen($this->container['md5']) > 1000)) {
                $invalidProperties[] = "invalid value for 'md5', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['md5']) && (mb_strlen($this->container['md5']) < 1)) {
                $invalidProperties[] = "invalid value for 'md5', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 文件名
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
    * @param string|null $name **参数解释：** 文件名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 文件类型
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
    * @param string|null $type **参数解释：** 文件类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets commit
    *  **参数解释：** 最近提交信息
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryCommitDto|null $commit **参数解释：** 最近提交信息
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets blobId
    *  **参数解释：** 文件id
    *
    * @return string|null
    */
    public function getBlobId()
    {
        return $this->container['blobId'];
    }

    /**
    * Sets blobId
    *
    * @param string|null $blobId **参数解释：** 文件id
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
        return $this;
    }

    /**
    * Gets submoduleUrl
    *  **参数解释：** 子模块url地址
    *
    * @return string|null
    */
    public function getSubmoduleUrl()
    {
        return $this->container['submoduleUrl'];
    }

    /**
    * Sets submoduleUrl
    *
    * @param string|null $submoduleUrl **参数解释：** 子模块url地址
    *
    * @return $this
    */
    public function setSubmoduleUrl($submoduleUrl)
    {
        $this->container['submoduleUrl'] = $submoduleUrl;
        return $this;
    }

    /**
    * Gets isLimited
    *  **参数解释：** 文件是否受限
    *
    * @return bool|null
    */
    public function getIsLimited()
    {
        return $this->container['isLimited'];
    }

    /**
    * Sets isLimited
    *
    * @param bool|null $isLimited **参数解释：** 文件是否受限
    *
    * @return $this
    */
    public function setIsLimited($isLimited)
    {
        $this->container['isLimited'] = $isLimited;
        return $this;
    }

    /**
    * Gets submoduleLink
    *  **参数解释：** 子模块链接
    *
    * @return string|null
    */
    public function getSubmoduleLink()
    {
        return $this->container['submoduleLink'];
    }

    /**
    * Sets submoduleLink
    *
    * @param string|null $submoduleLink **参数解释：** 子模块链接
    *
    * @return $this
    */
    public function setSubmoduleLink($submoduleLink)
    {
        $this->container['submoduleLink'] = $submoduleLink;
        return $this;
    }

    /**
    * Gets md5
    *  **参数解释：** 文件md5
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 **参数解释：** 文件md5
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 最近提交作者昵称
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
    * @param string|null $nickName **参数解释：** 最近提交作者昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名称
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名称
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名
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
    * @param string|null $userName **参数解释：** 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

