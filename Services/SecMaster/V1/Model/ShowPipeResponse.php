<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  资源类型，例如 STREAMING_TO_INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * ownerType  所有者类型，例如 USER
    * pipeAlias  管道别名
    * pipeId  管道ID
    * pipeName  管道名称
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * resources  资源列表
    * schema  schema
    * storageSetting  storageSetting
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'deleteTime' => 'int',
            'description' => 'string',
            'directory' => 'string',
            'ownerType' => 'string',
            'pipeAlias' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'processError' => 'string',
            'processStatus' => 'string',
            'projectId' => 'string',
            'resources' => '\HuaweiCloud\SDK\SecMaster\V1\Model\IsapResource[]',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Schema',
            'storageSetting' => '\HuaweiCloud\SDK\SecMaster\V1\Model\StorageSetting',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  资源类型，例如 STREAMING_TO_INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * ownerType  所有者类型，例如 USER
    * pipeAlias  管道别名
    * pipeId  管道ID
    * pipeName  管道名称
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * resources  资源列表
    * schema  schema
    * storageSetting  storageSetting
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'deleteTime' => null,
        'description' => null,
        'directory' => null,
        'ownerType' => null,
        'pipeAlias' => null,
        'pipeId' => null,
        'pipeName' => null,
        'processError' => null,
        'processStatus' => null,
        'projectId' => null,
        'resources' => null,
        'schema' => null,
        'storageSetting' => null,
        'updateBy' => null,
        'updateTime' => 'int64',
        'workspaceId' => null
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
    * category  资源类型，例如 STREAMING_TO_INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * ownerType  所有者类型，例如 USER
    * pipeAlias  管道别名
    * pipeId  管道ID
    * pipeName  管道名称
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * resources  资源列表
    * schema  schema
    * storageSetting  storageSetting
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'deleteTime' => 'delete_time',
            'description' => 'description',
            'directory' => 'directory',
            'ownerType' => 'owner_type',
            'pipeAlias' => 'pipe_alias',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'processError' => 'process_error',
            'processStatus' => 'process_status',
            'projectId' => 'project_id',
            'resources' => 'resources',
            'schema' => 'schema',
            'storageSetting' => 'storage_setting',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  资源类型，例如 STREAMING_TO_INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * ownerType  所有者类型，例如 USER
    * pipeAlias  管道别名
    * pipeId  管道ID
    * pipeName  管道名称
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * resources  资源列表
    * schema  schema
    * storageSetting  storageSetting
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'deleteTime' => 'setDeleteTime',
            'description' => 'setDescription',
            'directory' => 'setDirectory',
            'ownerType' => 'setOwnerType',
            'pipeAlias' => 'setPipeAlias',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'processError' => 'setProcessError',
            'processStatus' => 'setProcessStatus',
            'projectId' => 'setProjectId',
            'resources' => 'setResources',
            'schema' => 'setSchema',
            'storageSetting' => 'setStorageSetting',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  资源类型，例如 STREAMING_TO_INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * ownerType  所有者类型，例如 USER
    * pipeAlias  管道别名
    * pipeId  管道ID
    * pipeName  管道名称
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * resources  资源列表
    * schema  schema
    * storageSetting  storageSetting
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'deleteTime' => 'getDeleteTime',
            'description' => 'getDescription',
            'directory' => 'getDirectory',
            'ownerType' => 'getOwnerType',
            'pipeAlias' => 'getPipeAlias',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'processError' => 'getProcessError',
            'processStatus' => 'getProcessStatus',
            'projectId' => 'getProjectId',
            'resources' => 'getResources',
            'schema' => 'getSchema',
            'storageSetting' => 'getStorageSetting',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['ownerType'] = isset($data['ownerType']) ? $data['ownerType'] : null;
        $this->container['pipeAlias'] = isset($data['pipeAlias']) ? $data['pipeAlias'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['storageSetting'] = isset($data['storageSetting']) ? $data['storageSetting'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 128)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 128)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerType']) && (mb_strlen($this->container['ownerType']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerType']) && (mb_strlen($this->container['ownerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processError']) && (mb_strlen($this->container['processError']) > 128)) {
                $invalidProperties[] = "invalid value for 'processError', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processError']) && (mb_strlen($this->container['processError']) < 1)) {
                $invalidProperties[] = "invalid value for 'processError', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
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
    * Gets category
    *  资源类型，例如 STREAMING_TO_INDEX
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 资源类型，例如 STREAMING_TO_INDEX
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets createBy
    *  创建者信息
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建者信息
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳
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
    * @param int|null $createTime 创建时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  删除时间戳
    *
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime 删除时间戳
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
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
    * Gets directory
    *  目录路径
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 目录路径
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets ownerType
    *  所有者类型，例如 USER
    *
    * @return string|null
    */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
    * Sets ownerType
    *
    * @param string|null $ownerType 所有者类型，例如 USER
    *
    * @return $this
    */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;
        return $this;
    }

    /**
    * Gets pipeAlias
    *  管道别名
    *
    * @return string|null
    */
    public function getPipeAlias()
    {
        return $this->container['pipeAlias'];
    }

    /**
    * Sets pipeAlias
    *
    * @param string|null $pipeAlias 管道别名
    *
    * @return $this
    */
    public function setPipeAlias($pipeAlias)
    {
        $this->container['pipeAlias'] = $pipeAlias;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets processError
    *  处理错误状态，例如 NONE
    *
    * @return string|null
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param string|null $processError 处理错误状态，例如 NONE
    *
    * @return $this
    */
    public function setProcessError($processError)
    {
        $this->container['processError'] = $processError;
        return $this;
    }

    /**
    * Gets processStatus
    *  处理状态，例如 COMPLETED
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus 处理状态，例如 COMPLETED
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets resources
    *  资源列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\IsapResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\IsapResource[]|null $resources 资源列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets schema
    *  schema
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Schema|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Schema|null $schema schema
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets storageSetting
    *  storageSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\StorageSetting|null
    */
    public function getStorageSetting()
    {
        return $this->container['storageSetting'];
    }

    /**
    * Sets storageSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\StorageSetting|null $storageSetting storageSetting
    *
    * @return $this
    */
    public function setStorageSetting($storageSetting)
    {
        $this->container['storageSetting'] = $storageSetting;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新者信息
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新者信息
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间戳
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

