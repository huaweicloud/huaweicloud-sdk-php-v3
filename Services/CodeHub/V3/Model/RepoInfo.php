<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  创建时间
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    * httpUrl  https url
    * id  仓库uuid(由CreateRepository接口返回)
    * name  仓库名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * projectIsDelete  项目是否被删除
    * repoId  仓库主键id
    * sshUrl  ssh url
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 访问路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'string',
            'groupName' => 'string',
            'httpUrl' => 'string',
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'projectIsDelete' => 'string',
            'repoId' => 'string',
            'sshUrl' => 'string',
            'visibilityLevel' => 'int',
            'webUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  创建时间
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    * httpUrl  https url
    * id  仓库uuid(由CreateRepository接口返回)
    * name  仓库名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * projectIsDelete  项目是否被删除
    * repoId  仓库主键id
    * sshUrl  ssh url
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 访问路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => null,
        'groupName' => null,
        'httpUrl' => null,
        'id' => null,
        'name' => null,
        'projectId' => null,
        'projectIsDelete' => null,
        'repoId' => null,
        'sshUrl' => null,
        'visibilityLevel' => 'int32',
        'webUrl' => null
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
    * createAt  创建时间
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    * httpUrl  https url
    * id  仓库uuid(由CreateRepository接口返回)
    * name  仓库名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * projectIsDelete  项目是否被删除
    * repoId  仓库主键id
    * sshUrl  ssh url
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 访问路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'createAt',
            'groupName' => 'groupName',
            'httpUrl' => 'httpUrl',
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'projectId',
            'projectIsDelete' => 'projectIsDelete',
            'repoId' => 'repoId',
            'sshUrl' => 'sshUrl',
            'visibilityLevel' => 'visibilityLevel',
            'webUrl' => 'webUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  创建时间
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    * httpUrl  https url
    * id  仓库uuid(由CreateRepository接口返回)
    * name  仓库名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * projectIsDelete  项目是否被删除
    * repoId  仓库主键id
    * sshUrl  ssh url
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 访问路径
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'groupName' => 'setGroupName',
            'httpUrl' => 'setHttpUrl',
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'projectIsDelete' => 'setProjectIsDelete',
            'repoId' => 'setRepoId',
            'sshUrl' => 'setSshUrl',
            'visibilityLevel' => 'setVisibilityLevel',
            'webUrl' => 'setWebUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  创建时间
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    * httpUrl  https url
    * id  仓库uuid(由CreateRepository接口返回)
    * name  仓库名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * projectIsDelete  项目是否被删除
    * repoId  仓库主键id
    * sshUrl  ssh url
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 访问路径
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'groupName' => 'getGroupName',
            'httpUrl' => 'getHttpUrl',
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'projectIsDelete' => 'getProjectIsDelete',
            'repoId' => 'getRepoId',
            'sshUrl' => 'getSshUrl',
            'visibilityLevel' => 'getVisibilityLevel',
            'webUrl' => 'getWebUrl'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['httpUrl'] = isset($data['httpUrl']) ? $data['httpUrl'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectIsDelete'] = isset($data['projectIsDelete']) ? $data['projectIsDelete'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['sshUrl'] = isset($data['sshUrl']) ? $data['sshUrl'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createAt']) && !preg_match("/yyyy-MM-dd HH:mm:ss/", $this->container['createAt'])) {
                $invalidProperties[] = "invalid value for 'createAt', must be conform to the pattern /yyyy-MM-dd HH:mm:ss/.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['repoId']) && (mb_strlen($this->container['repoId']) > 40)) {
                $invalidProperties[] = "invalid value for 'repoId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['repoId']) && (mb_strlen($this->container['repoId']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoId', the character length must be bigger than or equal to 1.";
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
    * Gets createAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets groupName
    *  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228)
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets httpUrl
    *  https url
    *
    * @return string|null
    */
    public function getHttpUrl()
    {
        return $this->container['httpUrl'];
    }

    /**
    * Sets httpUrl
    *
    * @param string|null $httpUrl https url
    *
    * @return $this
    */
    public function setHttpUrl($httpUrl)
    {
        $this->container['httpUrl'] = $httpUrl;
        return $this;
    }

    /**
    * Gets id
    *  仓库uuid(由CreateRepository接口返回)
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
    * @param string|null $id 仓库uuid(由CreateRepository接口返回)
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
    *  仓库名
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
    * @param string|null $name 仓库名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
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
    * @param string|null $projectId 项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectIsDelete
    *  项目是否被删除
    *
    * @return string|null
    */
    public function getProjectIsDelete()
    {
        return $this->container['projectIsDelete'];
    }

    /**
    * Sets projectIsDelete
    *
    * @param string|null $projectIsDelete 项目是否被删除
    *
    * @return $this
    */
    public function setProjectIsDelete($projectIsDelete)
    {
        $this->container['projectIsDelete'] = $projectIsDelete;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库主键id
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId 仓库主键id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets sshUrl
    *  ssh url
    *
    * @return string|null
    */
    public function getSshUrl()
    {
        return $this->container['sshUrl'];
    }

    /**
    * Sets sshUrl
    *
    * @param string|null $sshUrl ssh url
    *
    * @return $this
    */
    public function setSshUrl($sshUrl)
    {
        $this->container['sshUrl'] = $sshUrl;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  是否可见：0私有仓库，20公有仓库
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel 是否可见：0私有仓库，20公有仓库
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets webUrl
    *  web url 访问路径
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl web url 访问路径
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
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

