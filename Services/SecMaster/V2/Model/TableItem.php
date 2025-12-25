<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * workspaceId  工作空间ID
    * tableId  UUID
    * tableName  Table name 表名
    * tableAlias  表别名
    * directory  directory 目录分组
    * description  表描述
    * category  category
    * lockStatus  lockStatus
    * processStatus  processStatus
    * processError  processError
    * editType  editType
    * format  format
    * rwType  rwType
    * ownerType  ownerType
    * dataLayering  dataLayering
    * dataClassification  dataClassification
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    * storeSizeInBytes  已使用存储容量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'workspaceId' => 'string',
            'tableId' => 'string',
            'tableName' => 'string',
            'tableAlias' => 'string',
            'directory' => 'string',
            'description' => 'string',
            'category' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableCategory',
            'lockStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableLockStatus',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessStatus',
            'processError' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessError',
            'editType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableEditType',
            'format' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableFormat',
            'rwType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableRWType',
            'ownerType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableOwnerType',
            'dataLayering' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataLayering',
            'dataClassification' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification',
            'createTime' => 'int',
            'updateTime' => 'int',
            'deleteTime' => 'int',
            'storeSizeInBytes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * workspaceId  工作空间ID
    * tableId  UUID
    * tableName  Table name 表名
    * tableAlias  表别名
    * directory  directory 目录分组
    * description  表描述
    * category  category
    * lockStatus  lockStatus
    * processStatus  processStatus
    * processError  processError
    * editType  editType
    * format  format
    * rwType  rwType
    * ownerType  ownerType
    * dataLayering  dataLayering
    * dataClassification  dataClassification
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    * storeSizeInBytes  已使用存储容量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'workspaceId' => null,
        'tableId' => null,
        'tableName' => null,
        'tableAlias' => null,
        'directory' => null,
        'description' => null,
        'category' => null,
        'lockStatus' => null,
        'processStatus' => null,
        'processError' => null,
        'editType' => null,
        'format' => null,
        'rwType' => null,
        'ownerType' => null,
        'dataLayering' => null,
        'dataClassification' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'deleteTime' => 'int64',
        'storeSizeInBytes' => 'int64'
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
    * projectId  项目ID
    * workspaceId  工作空间ID
    * tableId  UUID
    * tableName  Table name 表名
    * tableAlias  表别名
    * directory  directory 目录分组
    * description  表描述
    * category  category
    * lockStatus  lockStatus
    * processStatus  processStatus
    * processError  processError
    * editType  editType
    * format  format
    * rwType  rwType
    * ownerType  ownerType
    * dataLayering  dataLayering
    * dataClassification  dataClassification
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    * storeSizeInBytes  已使用存储容量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'tableId' => 'table_id',
            'tableName' => 'table_name',
            'tableAlias' => 'table_alias',
            'directory' => 'directory',
            'description' => 'description',
            'category' => 'category',
            'lockStatus' => 'lock_status',
            'processStatus' => 'process_status',
            'processError' => 'process_error',
            'editType' => 'edit_type',
            'format' => 'format',
            'rwType' => 'rw_type',
            'ownerType' => 'owner_type',
            'dataLayering' => 'data_layering',
            'dataClassification' => 'data_classification',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'deleteTime' => 'delete_time',
            'storeSizeInBytes' => 'store_size_in_bytes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * workspaceId  工作空间ID
    * tableId  UUID
    * tableName  Table name 表名
    * tableAlias  表别名
    * directory  directory 目录分组
    * description  表描述
    * category  category
    * lockStatus  lockStatus
    * processStatus  processStatus
    * processError  processError
    * editType  editType
    * format  format
    * rwType  rwType
    * ownerType  ownerType
    * dataLayering  dataLayering
    * dataClassification  dataClassification
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    * storeSizeInBytes  已使用存储容量
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'tableId' => 'setTableId',
            'tableName' => 'setTableName',
            'tableAlias' => 'setTableAlias',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'category' => 'setCategory',
            'lockStatus' => 'setLockStatus',
            'processStatus' => 'setProcessStatus',
            'processError' => 'setProcessError',
            'editType' => 'setEditType',
            'format' => 'setFormat',
            'rwType' => 'setRwType',
            'ownerType' => 'setOwnerType',
            'dataLayering' => 'setDataLayering',
            'dataClassification' => 'setDataClassification',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'deleteTime' => 'setDeleteTime',
            'storeSizeInBytes' => 'setStoreSizeInBytes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * workspaceId  工作空间ID
    * tableId  UUID
    * tableName  Table name 表名
    * tableAlias  表别名
    * directory  directory 目录分组
    * description  表描述
    * category  category
    * lockStatus  lockStatus
    * processStatus  processStatus
    * processError  processError
    * editType  editType
    * format  format
    * rwType  rwType
    * ownerType  ownerType
    * dataLayering  dataLayering
    * dataClassification  dataClassification
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    * storeSizeInBytes  已使用存储容量
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'tableId' => 'getTableId',
            'tableName' => 'getTableName',
            'tableAlias' => 'getTableAlias',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'category' => 'getCategory',
            'lockStatus' => 'getLockStatus',
            'processStatus' => 'getProcessStatus',
            'processError' => 'getProcessError',
            'editType' => 'getEditType',
            'format' => 'getFormat',
            'rwType' => 'getRwType',
            'ownerType' => 'getOwnerType',
            'dataLayering' => 'getDataLayering',
            'dataClassification' => 'getDataClassification',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'deleteTime' => 'getDeleteTime',
            'storeSizeInBytes' => 'getStoreSizeInBytes'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableAlias'] = isset($data['tableAlias']) ? $data['tableAlias'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['editType'] = isset($data['editType']) ? $data['editType'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['rwType'] = isset($data['rwType']) ? $data['rwType'] : null;
        $this->container['ownerType'] = isset($data['ownerType']) ? $data['ownerType'] : null;
        $this->container['dataLayering'] = isset($data['dataLayering']) ? $data['dataLayering'] : null;
        $this->container['dataClassification'] = isset($data['dataClassification']) ? $data['dataClassification'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['storeSizeInBytes'] = isset($data['storeSizeInBytes']) ? $data['storeSizeInBytes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storeSizeInBytes']) && ($this->container['storeSizeInBytes'] > 4)) {
                $invalidProperties[] = "invalid value for 'storeSizeInBytes', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['storeSizeInBytes']) && ($this->container['storeSizeInBytes'] < 0)) {
                $invalidProperties[] = "invalid value for 'storeSizeInBytes', must be bigger than or equal to 0.";
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
    * Gets tableId
    *  UUID
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
    * @param string|null $tableId UUID
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
    *  Table name 表名
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
    * @param string|null $tableName Table name 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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
    * Gets directory
    *  directory 目录分组
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
    * @param string|null $directory directory 目录分组
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets description
    *  表描述
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
    * @param string|null $description 表描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableCategory|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableCategory|null $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets lockStatus
    *  lockStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableLockStatus|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableLockStatus|null $lockStatus lockStatus
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessStatus|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessStatus|null $processStatus processStatus
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets processError
    *  processError
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessError|null
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableProcessError|null $processError processError
    *
    * @return $this
    */
    public function setProcessError($processError)
    {
        $this->container['processError'] = $processError;
        return $this;
    }

    /**
    * Gets editType
    *  editType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableEditType|null
    */
    public function getEditType()
    {
        return $this->container['editType'];
    }

    /**
    * Sets editType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableEditType|null $editType editType
    *
    * @return $this
    */
    public function setEditType($editType)
    {
        $this->container['editType'] = $editType;
        return $this;
    }

    /**
    * Gets format
    *  format
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableFormat|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableFormat|null $format format
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets rwType
    *  rwType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableRWType|null
    */
    public function getRwType()
    {
        return $this->container['rwType'];
    }

    /**
    * Sets rwType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableRWType|null $rwType rwType
    *
    * @return $this
    */
    public function setRwType($rwType)
    {
        $this->container['rwType'] = $rwType;
        return $this;
    }

    /**
    * Gets ownerType
    *  ownerType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableOwnerType|null
    */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
    * Sets ownerType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableOwnerType|null $ownerType ownerType
    *
    * @return $this
    */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;
        return $this;
    }

    /**
    * Gets dataLayering
    *  dataLayering
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataLayering|null
    */
    public function getDataLayering()
    {
        return $this->container['dataLayering'];
    }

    /**
    * Sets dataLayering
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataLayering|null $dataLayering dataLayering
    *
    * @return $this
    */
    public function setDataLayering($dataLayering)
    {
        $this->container['dataLayering'] = $dataLayering;
        return $this;
    }

    /**
    * Gets dataClassification
    *  dataClassification
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification|null
    */
    public function getDataClassification()
    {
        return $this->container['dataClassification'];
    }

    /**
    * Sets dataClassification
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification|null $dataClassification dataClassification
    *
    * @return $this
    */
    public function setDataClassification($dataClassification)
    {
        $this->container['dataClassification'] = $dataClassification;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
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
    * @param int|null $createTime 毫秒时间戳
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
    *  毫秒时间戳
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
    * @param int|null $updateTime 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  毫秒时间戳
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
    * @param int|null $deleteTime 毫秒时间戳
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets storeSizeInBytes
    *  已使用存储容量
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
    * @param int|null $storeSizeInBytes 已使用存储容量
    *
    * @return $this
    */
    public function setStoreSizeInBytes($storeSizeInBytes)
    {
        $this->container['storeSizeInBytes'] = $storeSizeInBytes;
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

