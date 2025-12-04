<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImagesView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImagesView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  镜像所属租户
    * imageName  镜像名称
    * updateTime  镜像更新时间
    * createTime  镜像创建时间
    * imageSize  镜像大小，单位byte
    * projectId  project_id（当image_type为private时，才会返回此字段)
    * imageId  镜像ID
    * imageVersion  镜像AOSP版本
    * imageType  镜像类型 私有镜像：private 共享镜像：share
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * srcProjectId  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'imageName' => 'string',
            'updateTime' => 'string',
            'createTime' => 'string',
            'imageSize' => 'int',
            'projectId' => 'string',
            'imageId' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'status' => 'int',
            'srcProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  镜像所属租户
    * imageName  镜像名称
    * updateTime  镜像更新时间
    * createTime  镜像创建时间
    * imageSize  镜像大小，单位byte
    * projectId  project_id（当image_type为private时，才会返回此字段)
    * imageId  镜像ID
    * imageVersion  镜像AOSP版本
    * imageType  镜像类型 私有镜像：private 共享镜像：share
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * srcProjectId  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'imageName' => null,
        'updateTime' => null,
        'createTime' => null,
        'imageSize' => 'int64',
        'projectId' => null,
        'imageId' => null,
        'imageVersion' => null,
        'imageType' => null,
        'status' => null,
        'srcProjectId' => null
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
    * domainId  镜像所属租户
    * imageName  镜像名称
    * updateTime  镜像更新时间
    * createTime  镜像创建时间
    * imageSize  镜像大小，单位byte
    * projectId  project_id（当image_type为private时，才会返回此字段)
    * imageId  镜像ID
    * imageVersion  镜像AOSP版本
    * imageType  镜像类型 私有镜像：private 共享镜像：share
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * srcProjectId  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'imageName' => 'image_name',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'imageSize' => 'image_size',
            'projectId' => 'project_id',
            'imageId' => 'image_id',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'status' => 'status',
            'srcProjectId' => 'src_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  镜像所属租户
    * imageName  镜像名称
    * updateTime  镜像更新时间
    * createTime  镜像创建时间
    * imageSize  镜像大小，单位byte
    * projectId  project_id（当image_type为private时，才会返回此字段)
    * imageId  镜像ID
    * imageVersion  镜像AOSP版本
    * imageType  镜像类型 私有镜像：private 共享镜像：share
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * srcProjectId  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'imageName' => 'setImageName',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'imageSize' => 'setImageSize',
            'projectId' => 'setProjectId',
            'imageId' => 'setImageId',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'status' => 'setStatus',
            'srcProjectId' => 'setSrcProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  镜像所属租户
    * imageName  镜像名称
    * updateTime  镜像更新时间
    * createTime  镜像创建时间
    * imageSize  镜像大小，单位byte
    * projectId  project_id（当image_type为private时，才会返回此字段)
    * imageId  镜像ID
    * imageVersion  镜像AOSP版本
    * imageType  镜像类型 私有镜像：private 共享镜像：share
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * srcProjectId  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'imageName' => 'getImageName',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'imageSize' => 'getImageSize',
            'projectId' => 'getProjectId',
            'imageId' => 'getImageId',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'status' => 'getStatus',
            'srcProjectId' => 'getSrcProjectId'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['srcProjectId'] = isset($data['srcProjectId']) ? $data['srcProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 16)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 10000)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets domainId
    *  镜像所属租户
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
    * @param string|null $domainId 镜像所属租户
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets updateTime
    *  镜像更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 镜像更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  镜像创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 镜像创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像大小，单位byte
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize 镜像大小，单位byte
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets projectId
    *  project_id（当image_type为private时，才会返回此字段)
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
    * @param string|null $projectId project_id（当image_type为private时，才会返回此字段)
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageVersion
    *  镜像AOSP版本
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion 镜像AOSP版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageType
    *  镜像类型 私有镜像：private 共享镜像：share
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 镜像类型 私有镜像：private 共享镜像：share
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets srcProjectId
    *  共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @return string|null
    */
    public function getSrcProjectId()
    {
        return $this->container['srcProjectId'];
    }

    /**
    * Sets srcProjectId
    *
    * @param string|null $srcProjectId 共享镜像账号的projectId（当image_type为share时，才会返回此字段)
    *
    * @return $this
    */
    public function setSrcProjectId($srcProjectId)
    {
        $this->container['srcProjectId'] = $srcProjectId;
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

