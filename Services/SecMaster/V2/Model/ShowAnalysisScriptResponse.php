<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAnalysisScriptResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAnalysisScriptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  Iam用户ID
    * scriptParams  分析脚本参数列表
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'scriptName' => 'string',
            'category' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory',
            'directory' => 'string',
            'description' => 'string',
            'scriptType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType',
            'retrieveTableId' => 'string',
            'script' => 'string',
            'owner' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]',
            'createBy' => 'string',
            'createTime' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  Iam用户ID
    * scriptParams  分析脚本参数列表
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'scriptName' => null,
        'category' => null,
        'directory' => null,
        'description' => null,
        'scriptType' => null,
        'retrieveTableId' => null,
        'script' => null,
        'owner' => null,
        'scriptParams' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'updateBy' => null,
        'updateTime' => 'int64'
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
    * scriptId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  Iam用户ID
    * scriptParams  分析脚本参数列表
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptId' => 'script_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'scriptName' => 'script_name',
            'category' => 'category',
            'directory' => 'directory',
            'description' => 'description',
            'scriptType' => 'script_type',
            'retrieveTableId' => 'retrieve_table_id',
            'script' => 'script',
            'owner' => 'owner',
            'scriptParams' => 'script_params',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  Iam用户ID
    * scriptParams  分析脚本参数列表
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptId' => 'setScriptId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'scriptName' => 'setScriptName',
            'category' => 'setCategory',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'scriptType' => 'setScriptType',
            'retrieveTableId' => 'setRetrieveTableId',
            'script' => 'setScript',
            'owner' => 'setOwner',
            'scriptParams' => 'setScriptParams',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  Iam用户ID
    * scriptParams  分析脚本参数列表
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptId' => 'getScriptId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'scriptName' => 'getScriptName',
            'category' => 'getCategory',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'scriptType' => 'getScriptType',
            'retrieveTableId' => 'getRetrieveTableId',
            'script' => 'getScript',
            'owner' => 'getOwner',
            'scriptParams' => 'getScriptParams',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime'
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
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['retrieveTableId'] = isset($data['retrieveTableId']) ? $data['retrieveTableId'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 36)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 36)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 36.";
            }
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
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['retrieveTableId']) && (mb_strlen($this->container['retrieveTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'retrieveTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['retrieveTableId']) && (mb_strlen($this->container['retrieveTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'retrieveTableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 32)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 32)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets scriptId
    *  UUID
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId UUID
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
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
    * Gets scriptName
    *  脚本名称
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 脚本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory|null $category category
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
    *  脚本目录分组名称，长度在1到256个字符之间。
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
    * @param string|null $directory 脚本目录分组名称，长度在1到256个字符之间。
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
    *  脚本的相关描述信息，长度在1到1024个字符之间。
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
    * @param string|null $description 脚本的相关描述信息，长度在1到1024个字符之间。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets scriptType
    *  scriptType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType|null
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType|null $scriptType scriptType
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets retrieveTableId
    *  UUID
    *
    * @return string|null
    */
    public function getRetrieveTableId()
    {
        return $this->container['retrieveTableId'];
    }

    /**
    * Sets retrieveTableId
    *
    * @param string|null $retrieveTableId UUID
    *
    * @return $this
    */
    public function setRetrieveTableId($retrieveTableId)
    {
        $this->container['retrieveTableId'] = $retrieveTableId;
        return $this;
    }

    /**
    * Gets script
    *  脚本内容，长度在1到10240个字符之间。
    *
    * @return string|null
    */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
    * Sets script
    *
    * @param string|null $script 脚本内容，长度在1到10240个字符之间。
    *
    * @return $this
    */
    public function setScript($script)
    {
        $this->container['script'] = $script;
        return $this;
    }

    /**
    * Gets owner
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner Iam用户ID
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets scriptParams
    *  分析脚本参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]|null $scriptParams 分析脚本参数列表
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
        return $this;
    }

    /**
    * Gets createBy
    *  Iam用户ID
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
    * @param string|null $createBy Iam用户ID
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
    * Gets updateBy
    *  Iam用户ID
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
    * @param string|null $updateBy Iam用户ID
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

