<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePipeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePipeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间id
    * dataspaceName  数据空间名称
    * description  描述信息
    * domainId  用户domainId
    * pipeId  管道ID
    * pipeName  管道名称
    * pipeType  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    * projectId  项目id
    * shards  索引分片数量
    * storagePeriod  索引存储天数
    * updateBy  更新者
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createBy' => 'string',
            'createTime' => 'int',
            'dataspaceId' => 'string',
            'dataspaceName' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'pipeType' => 'string',
            'projectId' => 'string',
            'shards' => 'int',
            'storagePeriod' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间id
    * dataspaceName  数据空间名称
    * description  描述信息
    * domainId  用户domainId
    * pipeId  管道ID
    * pipeName  管道名称
    * pipeType  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    * projectId  项目id
    * shards  索引分片数量
    * storagePeriod  索引存储天数
    * updateBy  更新者
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createBy' => null,
        'createTime' => 'int64',
        'dataspaceId' => null,
        'dataspaceName' => null,
        'description' => null,
        'domainId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'pipeType' => null,
        'projectId' => null,
        'shards' => 'int32',
        'storagePeriod' => 'int32',
        'updateBy' => null,
        'updateTime' => 'long'
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
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间id
    * dataspaceName  数据空间名称
    * description  描述信息
    * domainId  用户domainId
    * pipeId  管道ID
    * pipeName  管道名称
    * pipeType  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    * projectId  项目id
    * shards  索引分片数量
    * storagePeriod  索引存储天数
    * updateBy  更新者
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'dataspaceId' => 'dataspace_id',
            'dataspaceName' => 'dataspace_name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'pipeType' => 'pipe_type',
            'projectId' => 'project_id',
            'shards' => 'shards',
            'storagePeriod' => 'storage_period',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间id
    * dataspaceName  数据空间名称
    * description  描述信息
    * domainId  用户domainId
    * pipeId  管道ID
    * pipeName  管道名称
    * pipeType  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    * projectId  项目id
    * shards  索引分片数量
    * storagePeriod  索引存储天数
    * updateBy  更新者
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'dataspaceId' => 'setDataspaceId',
            'dataspaceName' => 'setDataspaceName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'pipeType' => 'setPipeType',
            'projectId' => 'setProjectId',
            'shards' => 'setShards',
            'storagePeriod' => 'setStoragePeriod',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间id
    * dataspaceName  数据空间名称
    * description  描述信息
    * domainId  用户domainId
    * pipeId  管道ID
    * pipeName  管道名称
    * pipeType  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    * projectId  项目id
    * shards  索引分片数量
    * storagePeriod  索引存储天数
    * updateBy  更新者
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'dataspaceId' => 'getDataspaceId',
            'dataspaceName' => 'getDataspaceName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'pipeType' => 'getPipeType',
            'projectId' => 'getProjectId',
            'shards' => 'getShards',
            'storagePeriod' => 'getStoragePeriod',
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
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['pipeType'] = isset($data['pipeType']) ? $data['pipeType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
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
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 5)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 1010000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 1010000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 5)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 32)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pipeType']) && (mb_strlen($this->container['pipeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeType']) && (mb_strlen($this->container['pipeType']) < 5)) {
                $invalidProperties[] = "invalid value for 'pipeType', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] > 128)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] < 1)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] > 100000)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] < 1)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 5)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 10000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 10000000000.";
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
    * Gets createBy
    *  创建者
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
    * @param string|null $createBy 创建者
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
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间id
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间id
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string|null
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string|null $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
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
    * Gets domainId
    *  用户domainId
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets pipeType
    *  管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    *
    * @return string|null
    */
    public function getPipeType()
    {
        return $this->container['pipeType'];
    }

    /**
    * Sets pipeType
    *
    * @param string|null $pipeType 管道类型(system-defined，系统预定义)、1(user-defined，用户自定义)
    *
    * @return $this
    */
    public function setPipeType($pipeType)
    {
        $this->container['pipeType'] = $pipeType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets shards
    *  索引分片数量
    *
    * @return int|null
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param int|null $shards 索引分片数量
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets storagePeriod
    *  索引存储天数
    *
    * @return int|null
    */
    public function getStoragePeriod()
    {
        return $this->container['storagePeriod'];
    }

    /**
    * Sets storagePeriod
    *
    * @param int|null $storagePeriod 索引存储天数
    *
    * @return $this
    */
    public function setStoragePeriod($storagePeriod)
    {
        $this->container['storagePeriod'] = $storagePeriod;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新者
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
    * @param string|null $updateBy 更新者
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
    *  更新时间
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
    * @param int|null $updateTime 更新时间
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

