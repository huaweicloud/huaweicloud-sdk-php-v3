<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Dataspace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Dataspace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  工作空间ID
    * dataspaceName  工作空间名称
    * dataspaceType  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * description  描述
    * domainId  账号ID
    * projectId  项目ID
    * regionId  region ID
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
            'dataspaceType' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  工作空间ID
    * dataspaceName  工作空间名称
    * dataspaceType  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * description  描述
    * domainId  账号ID
    * projectId  项目ID
    * regionId  region ID
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
        'dataspaceType' => null,
        'description' => null,
        'domainId' => null,
        'projectId' => null,
        'regionId' => null,
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
    * dataspaceId  工作空间ID
    * dataspaceName  工作空间名称
    * dataspaceType  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * description  描述
    * domainId  账号ID
    * projectId  项目ID
    * regionId  region ID
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
            'dataspaceType' => 'dataspace_type',
            'description' => 'description',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  工作空间ID
    * dataspaceName  工作空间名称
    * dataspaceType  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * description  描述
    * domainId  账号ID
    * projectId  项目ID
    * regionId  region ID
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
            'dataspaceType' => 'setDataspaceType',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createBy  创建者
    * createTime  创建时间
    * dataspaceId  工作空间ID
    * dataspaceName  工作空间名称
    * dataspaceType  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * description  描述
    * domainId  账号ID
    * projectId  项目ID
    * regionId  region ID
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
            'dataspaceType' => 'getDataspaceType',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
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
    const DATASPACE_TYPE_SYSTEM_DEFINED = 'system-defined';
    const DATASPACE_TYPE_USER_DEFINED = 'user-defined';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataspaceTypeAllowableValues()
    {
        return [
            self::DATASPACE_TYPE_SYSTEM_DEFINED,
            self::DATASPACE_TYPE_USER_DEFINED,
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
        $this->container['dataspaceType'] = isset($data['dataspaceType']) ? $data['dataspaceType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
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
            $allowedValues = $this->getDataspaceTypeAllowableValues();
                if (!is_null($this->container['dataspaceType']) && !in_array($this->container['dataspaceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataspaceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionId']) < 10)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 10.";
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
    *  工作空间ID
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
    * @param string $dataspaceId 工作空间ID
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
    *  工作空间名称
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
    * @param string $dataspaceName 工作空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets dataspaceType
    *  数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    *
    * @return string|null
    */
    public function getDataspaceType()
    {
        return $this->container['dataspaceType'];
    }

    /**
    * Sets dataspaceType
    *
    * @param string|null $dataspaceType 数据空间类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    *
    * @return $this
    */
    public function setDataspaceType($dataspaceType)
    {
        $this->container['dataspaceType'] = $dataspaceType;
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
    * Gets regionId
    *  region ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId region ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

