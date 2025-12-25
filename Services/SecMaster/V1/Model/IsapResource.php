<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  资源类型，例如 STREAMING 或 INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * dataClassification  数据分类，例如 FACTUAL_DATA
    * dataLayering  数据分层，例如 ODS
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * displaySetting  displaySetting
    * format  数据格式，例如 JSON
    * lockStatus  锁定状态，例如 UNLOCKED
    * ownerType  所有者类型，例如 USER
    * pipeId  管道ID
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * rwType  读写类型，例如 READ_WRITE
    * schema  schema
    * storageSetting  storageSetting
    * storeSizeInBytes  存储大小（字节）
    * tableAlias  表别名
    * tableId  表ID
    * tableName  表名称
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
            'dataClassification' => 'string',
            'dataLayering' => 'string',
            'deleteTime' => 'int',
            'description' => 'string',
            'directory' => 'string',
            'displaySetting' => '\HuaweiCloud\SDK\SecMaster\V1\Model\IsapResourceDisplaySetting',
            'format' => 'string',
            'lockStatus' => 'string',
            'ownerType' => 'string',
            'pipeId' => 'string',
            'processError' => 'string',
            'processStatus' => 'string',
            'projectId' => 'string',
            'rwType' => 'string',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Schema',
            'storageSetting' => '\HuaweiCloud\SDK\SecMaster\V1\Model\StorageSetting',
            'storeSizeInBytes' => 'int',
            'tableAlias' => 'string',
            'tableId' => 'string',
            'tableName' => 'string',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  资源类型，例如 STREAMING 或 INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * dataClassification  数据分类，例如 FACTUAL_DATA
    * dataLayering  数据分层，例如 ODS
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * displaySetting  displaySetting
    * format  数据格式，例如 JSON
    * lockStatus  锁定状态，例如 UNLOCKED
    * ownerType  所有者类型，例如 USER
    * pipeId  管道ID
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * rwType  读写类型，例如 READ_WRITE
    * schema  schema
    * storageSetting  storageSetting
    * storeSizeInBytes  存储大小（字节）
    * tableAlias  表别名
    * tableId  表ID
    * tableName  表名称
    * updateBy  更新者信息
    * updateTime  更新时间戳
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'createBy' => null,
        'createTime' => null,
        'dataClassification' => null,
        'dataLayering' => null,
        'deleteTime' => null,
        'description' => null,
        'directory' => null,
        'displaySetting' => null,
        'format' => null,
        'lockStatus' => null,
        'ownerType' => null,
        'pipeId' => null,
        'processError' => null,
        'processStatus' => null,
        'projectId' => null,
        'rwType' => null,
        'schema' => null,
        'storageSetting' => null,
        'storeSizeInBytes' => null,
        'tableAlias' => null,
        'tableId' => null,
        'tableName' => null,
        'updateBy' => null,
        'updateTime' => null,
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
    * category  资源类型，例如 STREAMING 或 INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * dataClassification  数据分类，例如 FACTUAL_DATA
    * dataLayering  数据分层，例如 ODS
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * displaySetting  displaySetting
    * format  数据格式，例如 JSON
    * lockStatus  锁定状态，例如 UNLOCKED
    * ownerType  所有者类型，例如 USER
    * pipeId  管道ID
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * rwType  读写类型，例如 READ_WRITE
    * schema  schema
    * storageSetting  storageSetting
    * storeSizeInBytes  存储大小（字节）
    * tableAlias  表别名
    * tableId  表ID
    * tableName  表名称
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
            'dataClassification' => 'data_classification',
            'dataLayering' => 'data_layering',
            'deleteTime' => 'delete_time',
            'description' => 'description',
            'directory' => 'directory',
            'displaySetting' => 'display_setting',
            'format' => 'format',
            'lockStatus' => 'lock_status',
            'ownerType' => 'owner_type',
            'pipeId' => 'pipe_id',
            'processError' => 'process_error',
            'processStatus' => 'process_status',
            'projectId' => 'project_id',
            'rwType' => 'rw_type',
            'schema' => 'schema',
            'storageSetting' => 'storage_setting',
            'storeSizeInBytes' => 'store_size_in_bytes',
            'tableAlias' => 'table_alias',
            'tableId' => 'table_id',
            'tableName' => 'table_name',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  资源类型，例如 STREAMING 或 INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * dataClassification  数据分类，例如 FACTUAL_DATA
    * dataLayering  数据分层，例如 ODS
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * displaySetting  displaySetting
    * format  数据格式，例如 JSON
    * lockStatus  锁定状态，例如 UNLOCKED
    * ownerType  所有者类型，例如 USER
    * pipeId  管道ID
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * rwType  读写类型，例如 READ_WRITE
    * schema  schema
    * storageSetting  storageSetting
    * storeSizeInBytes  存储大小（字节）
    * tableAlias  表别名
    * tableId  表ID
    * tableName  表名称
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
            'dataClassification' => 'setDataClassification',
            'dataLayering' => 'setDataLayering',
            'deleteTime' => 'setDeleteTime',
            'description' => 'setDescription',
            'directory' => 'setDirectory',
            'displaySetting' => 'setDisplaySetting',
            'format' => 'setFormat',
            'lockStatus' => 'setLockStatus',
            'ownerType' => 'setOwnerType',
            'pipeId' => 'setPipeId',
            'processError' => 'setProcessError',
            'processStatus' => 'setProcessStatus',
            'projectId' => 'setProjectId',
            'rwType' => 'setRwType',
            'schema' => 'setSchema',
            'storageSetting' => 'setStorageSetting',
            'storeSizeInBytes' => 'setStoreSizeInBytes',
            'tableAlias' => 'setTableAlias',
            'tableId' => 'setTableId',
            'tableName' => 'setTableName',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  资源类型，例如 STREAMING 或 INDEX
    * createBy  创建者信息
    * createTime  创建时间戳
    * dataClassification  数据分类，例如 FACTUAL_DATA
    * dataLayering  数据分层，例如 ODS
    * deleteTime  删除时间戳
    * description  描述信息
    * directory  目录路径
    * displaySetting  displaySetting
    * format  数据格式，例如 JSON
    * lockStatus  锁定状态，例如 UNLOCKED
    * ownerType  所有者类型，例如 USER
    * pipeId  管道ID
    * processError  处理错误状态，例如 NONE
    * processStatus  处理状态，例如 COMPLETED
    * projectId  项目ID
    * rwType  读写类型，例如 READ_WRITE
    * schema  schema
    * storageSetting  storageSetting
    * storeSizeInBytes  存储大小（字节）
    * tableAlias  表别名
    * tableId  表ID
    * tableName  表名称
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
            'dataClassification' => 'getDataClassification',
            'dataLayering' => 'getDataLayering',
            'deleteTime' => 'getDeleteTime',
            'description' => 'getDescription',
            'directory' => 'getDirectory',
            'displaySetting' => 'getDisplaySetting',
            'format' => 'getFormat',
            'lockStatus' => 'getLockStatus',
            'ownerType' => 'getOwnerType',
            'pipeId' => 'getPipeId',
            'processError' => 'getProcessError',
            'processStatus' => 'getProcessStatus',
            'projectId' => 'getProjectId',
            'rwType' => 'getRwType',
            'schema' => 'getSchema',
            'storageSetting' => 'getStorageSetting',
            'storeSizeInBytes' => 'getStoreSizeInBytes',
            'tableAlias' => 'getTableAlias',
            'tableId' => 'getTableId',
            'tableName' => 'getTableName',
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
        $this->container['dataClassification'] = isset($data['dataClassification']) ? $data['dataClassification'] : null;
        $this->container['dataLayering'] = isset($data['dataLayering']) ? $data['dataLayering'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['displaySetting'] = isset($data['displaySetting']) ? $data['displaySetting'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['ownerType'] = isset($data['ownerType']) ? $data['ownerType'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['rwType'] = isset($data['rwType']) ? $data['rwType'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['storageSetting'] = isset($data['storageSetting']) ? $data['storageSetting'] : null;
        $this->container['storeSizeInBytes'] = isset($data['storeSizeInBytes']) ? $data['storeSizeInBytes'] : null;
        $this->container['tableAlias'] = isset($data['tableAlias']) ? $data['tableAlias'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
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
            if (!is_null($this->container['dataClassification']) && (mb_strlen($this->container['dataClassification']) > 128)) {
                $invalidProperties[] = "invalid value for 'dataClassification', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dataClassification']) && (mb_strlen($this->container['dataClassification']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataClassification', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataLayering']) && (mb_strlen($this->container['dataLayering']) > 128)) {
                $invalidProperties[] = "invalid value for 'dataLayering', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dataLayering']) && (mb_strlen($this->container['dataLayering']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataLayering', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 128)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 1)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerType']) && (mb_strlen($this->container['ownerType']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerType']) && (mb_strlen($this->container['ownerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
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
            if (!is_null($this->container['rwType']) && (mb_strlen($this->container['rwType']) > 128)) {
                $invalidProperties[] = "invalid value for 'rwType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['rwType']) && (mb_strlen($this->container['rwType']) < 1)) {
                $invalidProperties[] = "invalid value for 'rwType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
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
    *  资源类型，例如 STREAMING 或 INDEX
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
    * @param string|null $category 资源类型，例如 STREAMING 或 INDEX
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
    * Gets dataClassification
    *  数据分类，例如 FACTUAL_DATA
    *
    * @return string|null
    */
    public function getDataClassification()
    {
        return $this->container['dataClassification'];
    }

    /**
    * Sets dataClassification
    *
    * @param string|null $dataClassification 数据分类，例如 FACTUAL_DATA
    *
    * @return $this
    */
    public function setDataClassification($dataClassification)
    {
        $this->container['dataClassification'] = $dataClassification;
        return $this;
    }

    /**
    * Gets dataLayering
    *  数据分层，例如 ODS
    *
    * @return string|null
    */
    public function getDataLayering()
    {
        return $this->container['dataLayering'];
    }

    /**
    * Sets dataLayering
    *
    * @param string|null $dataLayering 数据分层，例如 ODS
    *
    * @return $this
    */
    public function setDataLayering($dataLayering)
    {
        $this->container['dataLayering'] = $dataLayering;
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
    * Gets displaySetting
    *  displaySetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\IsapResourceDisplaySetting|null
    */
    public function getDisplaySetting()
    {
        return $this->container['displaySetting'];
    }

    /**
    * Sets displaySetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\IsapResourceDisplaySetting|null $displaySetting displaySetting
    *
    * @return $this
    */
    public function setDisplaySetting($displaySetting)
    {
        $this->container['displaySetting'] = $displaySetting;
        return $this;
    }

    /**
    * Gets format
    *  数据格式，例如 JSON
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 数据格式，例如 JSON
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets lockStatus
    *  锁定状态，例如 UNLOCKED
    *
    * @return string|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string|null $lockStatus 锁定状态，例如 UNLOCKED
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
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
    * Gets rwType
    *  读写类型，例如 READ_WRITE
    *
    * @return string|null
    */
    public function getRwType()
    {
        return $this->container['rwType'];
    }

    /**
    * Sets rwType
    *
    * @param string|null $rwType 读写类型，例如 READ_WRITE
    *
    * @return $this
    */
    public function setRwType($rwType)
    {
        $this->container['rwType'] = $rwType;
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
    * Gets storeSizeInBytes
    *  存储大小（字节）
    *
    * @return int|null
    */
    public function getStoreSizeInBytes()
    {
        return $this->container['storeSizeInBytes'];
    }

    /**
    * Sets storeSizeInBytes
    *
    * @param int|null $storeSizeInBytes 存储大小（字节）
    *
    * @return $this
    */
    public function setStoreSizeInBytes($storeSizeInBytes)
    {
        $this->container['storeSizeInBytes'] = $storeSizeInBytes;
        return $this;
    }

    /**
    * Gets tableAlias
    *  表别名
    *
    * @return string|null
    */
    public function getTableAlias()
    {
        return $this->container['tableAlias'];
    }

    /**
    * Sets tableAlias
    *
    * @param string|null $tableAlias 表别名
    *
    * @return $this
    */
    public function setTableAlias($tableAlias)
    {
        $this->container['tableAlias'] = $tableAlias;
        return $this;
    }

    /**
    * Gets tableId
    *  表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

