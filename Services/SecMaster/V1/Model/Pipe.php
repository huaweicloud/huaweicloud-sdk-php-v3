<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Pipe implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Pipe';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * description  描述
    * domainId  账号ID
    * pipeId  数据管道ID
    * pipeName  数据管道名称
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * projectId  项目ID
    * shards  分区个数；默认创建1个，最大支持创建64个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * description  描述
    * domainId  账号ID
    * pipeId  数据管道ID
    * pipeName  数据管道名称
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * projectId  项目ID
    * shards  分区个数；默认创建1个，最大支持创建64个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
        'shards' => null,
        'storagePeriod' => null,
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
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * description  描述
    * domainId  账号ID
    * pipeId  数据管道ID
    * pipeName  数据管道名称
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * projectId  项目ID
    * shards  分区个数；默认创建1个，最大支持创建64个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * description  描述
    * domainId  账号ID
    * pipeId  数据管道ID
    * pipeName  数据管道名称
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * projectId  项目ID
    * shards  分区个数；默认创建1个，最大支持创建64个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * description  描述
    * domainId  账号ID
    * pipeId  数据管道ID
    * pipeName  数据管道名称
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * projectId  项目ID
    * shards  分区个数；默认创建1个，最大支持创建64个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
    const PIPE_TYPE_SYSTEM_DEFINED = 'system-defined';
    const PIPE_TYPE_USER_DEFINED = 'user-defined';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPipeTypeAllowableValues()
    {
        return [
            self::PIPE_TYPE_SYSTEM_DEFINED,
            self::PIPE_TYPE_USER_DEFINED,
        ];
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
        if ($this->container['createBy'] === null) {
            $invalidProperties[] = "'createBy' can't be null";
        }
            if ((mb_strlen($this->container['createBy']) > 36)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['dataspaceName'] === null) {
            $invalidProperties[] = "'dataspaceName' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceName']) > 63)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['dataspaceName']) < 5)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 5.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['domainId']) < 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 36.";
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
            if ((mb_strlen($this->container['pipeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['pipeName']) < 5)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 5.";
            }
            $allowedValues = $this->getPipeTypeAllowableValues();
                if (!is_null($this->container['pipeType']) && !in_array($this->container['pipeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pipeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['shards'] === null) {
            $invalidProperties[] = "'shards' can't be null";
        }
            if (($this->container['shards'] > 64)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 64.";
            }
            if (($this->container['shards'] < 1)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 1.";
            }
        if ($this->container['storagePeriod'] === null) {
            $invalidProperties[] = "'storagePeriod' can't be null";
        }
            if (($this->container['storagePeriod'] > 3600)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be smaller than or equal to 3600.";
            }
            if (($this->container['storagePeriod'] < 1)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be bigger than or equal to 1.";
            }
        if ($this->container['updateBy'] === null) {
            $invalidProperties[] = "'updateBy' can't be null";
        }
            if ((mb_strlen($this->container['updateBy']) > 36)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['updateBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
            if (($this->container['updateTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['updateTime'] < 0)) {
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
    * @return string
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string $createBy 创建者
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
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间
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
    *  数据空间ID
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 数据空间ID
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
    * @return string
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string $dataspaceName 数据空间名称
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
    *  描述
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
    * @param string $description 描述
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
    *  账号ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 账号ID
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
    *  数据管道ID
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
    * @param string $pipeId 数据管道ID
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
    *  数据管道名称
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
    * @param string $pipeName 数据管道名称
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
    *  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
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
    * @param string|null $pipeType 数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
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
    * Gets shards
    *  分区个数；默认创建1个，最大支持创建64个分区
    *
    * @return int
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param int $shards 分区个数；默认创建1个，最大支持创建64个分区
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
    *  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @return int
    */
    public function getStoragePeriod()
    {
        return $this->container['storagePeriod'];
    }

    /**
    * Sets storagePeriod
    *
    * @param int $storagePeriod 数据的保存时间，单位为天；默认30天，取值范围为1~3600
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
    * @return string
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string $updateBy 更新者
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
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间
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

