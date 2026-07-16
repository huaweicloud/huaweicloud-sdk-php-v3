<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoEncryptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoEncryptionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoId  **参数解释：** 代码仓id。
    * repoName  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerId  **参数解释：** 代码仓所有者id。
    * ownerIamId  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerTenantName  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerNickName  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerName  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoId' => 'int',
            'repoName' => 'string',
            'fullPath' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'ownerId' => 'int',
            'ownerIamId' => 'string',
            'ownerTenantName' => 'string',
            'ownerNickName' => 'string',
            'ownerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoId  **参数解释：** 代码仓id。
    * repoName  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerId  **参数解释：** 代码仓所有者id。
    * ownerIamId  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerTenantName  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerNickName  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerName  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoId' => 'int32',
        'repoName' => null,
        'fullPath' => null,
        'projectId' => null,
        'projectName' => null,
        'ownerId' => 'int32',
        'ownerIamId' => null,
        'ownerTenantName' => null,
        'ownerNickName' => null,
        'ownerName' => null
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
    * repoId  **参数解释：** 代码仓id。
    * repoName  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerId  **参数解释：** 代码仓所有者id。
    * ownerIamId  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerTenantName  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerNickName  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerName  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoId' => 'repo_id',
            'repoName' => 'repo_name',
            'fullPath' => 'full_path',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'ownerId' => 'owner_id',
            'ownerIamId' => 'owner_iam_id',
            'ownerTenantName' => 'owner_tenant_name',
            'ownerNickName' => 'owner_nick_name',
            'ownerName' => 'owner_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoId  **参数解释：** 代码仓id。
    * repoName  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerId  **参数解释：** 代码仓所有者id。
    * ownerIamId  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerTenantName  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerNickName  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerName  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'repoId' => 'setRepoId',
            'repoName' => 'setRepoName',
            'fullPath' => 'setFullPath',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'ownerId' => 'setOwnerId',
            'ownerIamId' => 'setOwnerIamId',
            'ownerTenantName' => 'setOwnerTenantName',
            'ownerNickName' => 'setOwnerNickName',
            'ownerName' => 'setOwnerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoId  **参数解释：** 代码仓id。
    * repoName  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerId  **参数解释：** 代码仓所有者id。
    * ownerIamId  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerTenantName  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerNickName  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ownerName  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'repoId' => 'getRepoId',
            'repoName' => 'getRepoName',
            'fullPath' => 'getFullPath',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'ownerId' => 'getOwnerId',
            'ownerIamId' => 'getOwnerIamId',
            'ownerTenantName' => 'getOwnerTenantName',
            'ownerNickName' => 'getOwnerNickName',
            'ownerName' => 'getOwnerName'
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
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerIamId'] = isset($data['ownerIamId']) ? $data['ownerIamId'] : null;
        $this->container['ownerTenantName'] = isset($data['ownerTenantName']) ? $data['ownerTenantName'] : null;
        $this->container['ownerNickName'] = isset($data['ownerNickName']) ? $data['ownerNickName'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repoId']) && ($this->container['repoId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repoId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repoId']) && ($this->container['repoId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repoId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoName']) && (mb_strlen($this->container['repoName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['repoName']) && (mb_strlen($this->container['repoName']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerId']) && ($this->container['ownerId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ownerId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ownerId']) && ($this->container['ownerId'] < 1)) {
                $invalidProperties[] = "invalid value for 'ownerId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerIamId']) && (mb_strlen($this->container['ownerIamId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ownerIamId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ownerIamId']) && (mb_strlen($this->container['ownerIamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerIamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerTenantName']) && (mb_strlen($this->container['ownerTenantName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ownerTenantName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ownerTenantName']) && (mb_strlen($this->container['ownerTenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerTenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerNickName']) && (mb_strlen($this->container['ownerNickName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ownerNickName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ownerNickName']) && (mb_strlen($this->container['ownerNickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerNickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
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
    * Gets repoId
    *  **参数解释：** 代码仓id。
    *
    * @return int|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int|null $repoId **参数解释：** 代码仓id。
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets repoName
    *  **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName **参数解释：** 代码仓名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets fullPath
    *  **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath **参数解释：** 代码仓全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $projectId **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets ownerId
    *  **参数解释：** 代码仓所有者id。
    *
    * @return int|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param int|null $ownerId **参数解释：** 代码仓所有者id。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets ownerIamId
    *  **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getOwnerIamId()
    {
        return $this->container['ownerIamId'];
    }

    /**
    * Sets ownerIamId
    *
    * @param string|null $ownerIamId **参数解释：** 代码仓所有者iamId。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setOwnerIamId($ownerIamId)
    {
        $this->container['ownerIamId'] = $ownerIamId;
        return $this;
    }

    /**
    * Gets ownerTenantName
    *  **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getOwnerTenantName()
    {
        return $this->container['ownerTenantName'];
    }

    /**
    * Sets ownerTenantName
    *
    * @param string|null $ownerTenantName **参数解释：** 代码仓所有者租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setOwnerTenantName($ownerTenantName)
    {
        $this->container['ownerTenantName'] = $ownerTenantName;
        return $this;
    }

    /**
    * Gets ownerNickName
    *  **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getOwnerNickName()
    {
        return $this->container['ownerNickName'];
    }

    /**
    * Sets ownerNickName
    *
    * @param string|null $ownerNickName **参数解释：** 代码仓所有者昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setOwnerNickName($ownerNickName)
    {
        $this->container['ownerNickName'] = $ownerNickName;
        return $this;
    }

    /**
    * Gets ownerName
    *  **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName **参数解释：** 代码仓所有者名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
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

