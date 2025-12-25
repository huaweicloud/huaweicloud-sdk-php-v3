<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipeItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipeItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * workspaceId  UUID
    * pipeId  UUID
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * processStatus  processStatus
    * processError  processError
    * ownerType  ownerType
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'workspaceId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'pipeAlias' => 'string',
            'category' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory',
            'directory' => 'string',
            'description' => 'string',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessStatus',
            'processError' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessError',
            'ownerType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeOwnerType',
            'createTime' => 'int',
            'updateTime' => 'int',
            'deleteTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * workspaceId  UUID
    * pipeId  UUID
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * processStatus  processStatus
    * processError  processError
    * ownerType  ownerType
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'workspaceId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'pipeAlias' => null,
        'category' => null,
        'directory' => null,
        'description' => null,
        'processStatus' => null,
        'processError' => null,
        'ownerType' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'deleteTime' => 'int64'
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
    * workspaceId  UUID
    * pipeId  UUID
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * processStatus  processStatus
    * processError  processError
    * ownerType  ownerType
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'pipeAlias' => 'pipe_alias',
            'category' => 'category',
            'directory' => 'directory',
            'description' => 'description',
            'processStatus' => 'process_status',
            'processError' => 'process_error',
            'ownerType' => 'owner_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'deleteTime' => 'delete_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * workspaceId  UUID
    * pipeId  UUID
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * processStatus  processStatus
    * processError  processError
    * ownerType  ownerType
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'pipeAlias' => 'setPipeAlias',
            'category' => 'setCategory',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'processStatus' => 'setProcessStatus',
            'processError' => 'setProcessError',
            'ownerType' => 'setOwnerType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'deleteTime' => 'setDeleteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * workspaceId  UUID
    * pipeId  UUID
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * processStatus  processStatus
    * processError  processError
    * ownerType  ownerType
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'pipeAlias' => 'getPipeAlias',
            'category' => 'getCategory',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'processStatus' => 'getProcessStatus',
            'processError' => 'getProcessError',
            'ownerType' => 'getOwnerType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'deleteTime' => 'getDeleteTime'
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
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['pipeAlias'] = isset($data['pipeAlias']) ? $data['pipeAlias'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['ownerType'] = isset($data['ownerType']) ? $data['ownerType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['pipeId'] === null) {
            $invalidProperties[] = "'pipeId' can't be null";
        }
            if ((mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['pipeName'] === null) {
            $invalidProperties[] = "'pipeName' can't be null";
        }
            if ((mb_strlen($this->container['pipeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pipeAlias'] === null) {
            $invalidProperties[] = "'pipeAlias' can't be null";
        }
            if ((mb_strlen($this->container['pipeAlias']) > 256)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['pipeAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['directory'] === null) {
            $invalidProperties[] = "'directory' can't be null";
        }
            if ((mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['processStatus'] === null) {
            $invalidProperties[] = "'processStatus' can't be null";
        }
        if ($this->container['processError'] === null) {
            $invalidProperties[] = "'processError' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
            if (($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
        if ($this->container['deleteTime'] === null) {
            $invalidProperties[] = "'deleteTime' can't be null";
        }
            if (($this->container['deleteTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 2366841600000.";
            }
            if (($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
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
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
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
    *  UUID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId UUID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  UUID
    *
    * @return string
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string $pipeId UUID
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
    * @return string
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets pipeAlias
    *  管道别名
    *
    * @return string
    */
    public function getPipeAlias()
    {
        return $this->container['pipeAlias'];
    }

    /**
    * Sets pipeAlias
    *
    * @param string $pipeAlias 管道别名
    *
    * @return $this
    */
    public function setPipeAlias($pipeAlias)
    {
        $this->container['pipeAlias'] = $pipeAlias;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets directory
    *  directory 目录分组
    *
    * @return string
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string $directory directory 目录分组
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
    *  管道描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 管道描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessStatus
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessStatus $processStatus processStatus
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessError
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeProcessError $processError processError
    *
    * @return $this
    */
    public function setProcessError($processError)
    {
        $this->container['processError'] = $processError;
        return $this;
    }

    /**
    * Gets ownerType
    *  ownerType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeOwnerType|null
    */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
    * Sets ownerType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeOwnerType|null $ownerType ownerType
    *
    * @return $this
    */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
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
    * @param int $createTime 毫秒时间戳
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
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 毫秒时间戳
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
    * @return int
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int $deleteTime 毫秒时间戳
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
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

