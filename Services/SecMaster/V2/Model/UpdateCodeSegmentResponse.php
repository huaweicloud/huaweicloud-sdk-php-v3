<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCodeSegmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCodeSegmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeSegmentId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeSegmentId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'codeSegmentName' => 'string',
            'description' => 'string',
            'code' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeSegmentId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeSegmentId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'codeSegmentName' => null,
        'description' => null,
        'code' => null,
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
    * codeSegmentId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeSegmentId' => 'code_segment_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'codeSegmentName' => 'code_segment_name',
            'description' => 'description',
            'code' => 'code',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeSegmentId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'codeSegmentId' => 'setCodeSegmentId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'codeSegmentName' => 'setCodeSegmentName',
            'description' => 'setDescription',
            'code' => 'setCode',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeSegmentId  UUID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'codeSegmentId' => 'getCodeSegmentId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'codeSegmentName' => 'getCodeSegmentName',
            'description' => 'getDescription',
            'code' => 'getCode',
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
        $this->container['codeSegmentId'] = isset($data['codeSegmentId']) ? $data['codeSegmentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['codeSegmentName'] = isset($data['codeSegmentName']) ? $data['codeSegmentName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
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
            if (!is_null($this->container['codeSegmentId']) && (mb_strlen($this->container['codeSegmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'codeSegmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['codeSegmentId']) && (mb_strlen($this->container['codeSegmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'codeSegmentId', the character length must be bigger than or equal to 36.";
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
            if (!is_null($this->container['codeSegmentName']) && (mb_strlen($this->container['codeSegmentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'codeSegmentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['codeSegmentName']) && (mb_strlen($this->container['codeSegmentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'codeSegmentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 10240)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
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
    * Gets codeSegmentId
    *  UUID
    *
    * @return string|null
    */
    public function getCodeSegmentId()
    {
        return $this->container['codeSegmentId'];
    }

    /**
    * Sets codeSegmentId
    *
    * @param string|null $codeSegmentId UUID
    *
    * @return $this
    */
    public function setCodeSegmentId($codeSegmentId)
    {
        $this->container['codeSegmentId'] = $codeSegmentId;
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
    * Gets codeSegmentName
    *  代码段名称
    *
    * @return string|null
    */
    public function getCodeSegmentName()
    {
        return $this->container['codeSegmentName'];
    }

    /**
    * Sets codeSegmentName
    *
    * @param string|null $codeSegmentName 代码段名称
    *
    * @return $this
    */
    public function setCodeSegmentName($codeSegmentName)
    {
        $this->container['codeSegmentName'] = $codeSegmentName;
        return $this;
    }

    /**
    * Gets description
    *  代码段描述信息
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
    * @param string|null $description 代码段描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets code
    *  代码片段
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 代码片段
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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

