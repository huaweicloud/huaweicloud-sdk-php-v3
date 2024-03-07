<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Artifact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Artifact';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * name  名称
    * artifactVersion  版本
    * uploadTarget  存放平台类型
    * artifactPackageType  产物包类型
    * artifactUri  制品仓路径
    * artifactDownloadUrlWithId  制品仓下载链接
    * artifactType  产物类型
    * hashCode  哈希码
    * jobId  构建任务ID
    * buildNo  构建任务编号
    * dailyBuildNumber  构建任务序号
    * fileSize  产物大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'artifactVersion' => 'string',
            'uploadTarget' => 'string',
            'artifactPackageType' => 'string',
            'artifactUri' => 'string',
            'artifactDownloadUrlWithId' => 'string',
            'artifactType' => 'string',
            'hashCode' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ArtifactHashCode[]',
            'jobId' => 'string',
            'buildNo' => 'int',
            'dailyBuildNumber' => 'string',
            'fileSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * name  名称
    * artifactVersion  版本
    * uploadTarget  存放平台类型
    * artifactPackageType  产物包类型
    * artifactUri  制品仓路径
    * artifactDownloadUrlWithId  制品仓下载链接
    * artifactType  产物类型
    * hashCode  哈希码
    * jobId  构建任务ID
    * buildNo  构建任务编号
    * dailyBuildNumber  构建任务序号
    * fileSize  产物大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'artifactVersion' => null,
        'uploadTarget' => null,
        'artifactPackageType' => null,
        'artifactUri' => null,
        'artifactDownloadUrlWithId' => null,
        'artifactType' => null,
        'hashCode' => null,
        'jobId' => null,
        'buildNo' => 'int32',
        'dailyBuildNumber' => null,
        'fileSize' => null
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
    * name  名称
    * artifactVersion  版本
    * uploadTarget  存放平台类型
    * artifactPackageType  产物包类型
    * artifactUri  制品仓路径
    * artifactDownloadUrlWithId  制品仓下载链接
    * artifactType  产物类型
    * hashCode  哈希码
    * jobId  构建任务ID
    * buildNo  构建任务编号
    * dailyBuildNumber  构建任务序号
    * fileSize  产物大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'artifactVersion' => 'artifact_version',
            'uploadTarget' => 'upload_target',
            'artifactPackageType' => 'artifact_package_type',
            'artifactUri' => 'artifact_uri',
            'artifactDownloadUrlWithId' => 'artifact_download_url_with_id',
            'artifactType' => 'artifact_type',
            'hashCode' => 'hash_code',
            'jobId' => 'job_id',
            'buildNo' => 'build_no',
            'dailyBuildNumber' => 'daily_build_number',
            'fileSize' => 'file_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * name  名称
    * artifactVersion  版本
    * uploadTarget  存放平台类型
    * artifactPackageType  产物包类型
    * artifactUri  制品仓路径
    * artifactDownloadUrlWithId  制品仓下载链接
    * artifactType  产物类型
    * hashCode  哈希码
    * jobId  构建任务ID
    * buildNo  构建任务编号
    * dailyBuildNumber  构建任务序号
    * fileSize  产物大小
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'artifactVersion' => 'setArtifactVersion',
            'uploadTarget' => 'setUploadTarget',
            'artifactPackageType' => 'setArtifactPackageType',
            'artifactUri' => 'setArtifactUri',
            'artifactDownloadUrlWithId' => 'setArtifactDownloadUrlWithId',
            'artifactType' => 'setArtifactType',
            'hashCode' => 'setHashCode',
            'jobId' => 'setJobId',
            'buildNo' => 'setBuildNo',
            'dailyBuildNumber' => 'setDailyBuildNumber',
            'fileSize' => 'setFileSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * name  名称
    * artifactVersion  版本
    * uploadTarget  存放平台类型
    * artifactPackageType  产物包类型
    * artifactUri  制品仓路径
    * artifactDownloadUrlWithId  制品仓下载链接
    * artifactType  产物类型
    * hashCode  哈希码
    * jobId  构建任务ID
    * buildNo  构建任务编号
    * dailyBuildNumber  构建任务序号
    * fileSize  产物大小
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'artifactVersion' => 'getArtifactVersion',
            'uploadTarget' => 'getUploadTarget',
            'artifactPackageType' => 'getArtifactPackageType',
            'artifactUri' => 'getArtifactUri',
            'artifactDownloadUrlWithId' => 'getArtifactDownloadUrlWithId',
            'artifactType' => 'getArtifactType',
            'hashCode' => 'getHashCode',
            'jobId' => 'getJobId',
            'buildNo' => 'getBuildNo',
            'dailyBuildNumber' => 'getDailyBuildNumber',
            'fileSize' => 'getFileSize'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['artifactVersion'] = isset($data['artifactVersion']) ? $data['artifactVersion'] : null;
        $this->container['uploadTarget'] = isset($data['uploadTarget']) ? $data['uploadTarget'] : null;
        $this->container['artifactPackageType'] = isset($data['artifactPackageType']) ? $data['artifactPackageType'] : null;
        $this->container['artifactUri'] = isset($data['artifactUri']) ? $data['artifactUri'] : null;
        $this->container['artifactDownloadUrlWithId'] = isset($data['artifactDownloadUrlWithId']) ? $data['artifactDownloadUrlWithId'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['hashCode'] = isset($data['hashCode']) ? $data['hashCode'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets artifactVersion
    *  版本
    *
    * @return string|null
    */
    public function getArtifactVersion()
    {
        return $this->container['artifactVersion'];
    }

    /**
    * Sets artifactVersion
    *
    * @param string|null $artifactVersion 版本
    *
    * @return $this
    */
    public function setArtifactVersion($artifactVersion)
    {
        $this->container['artifactVersion'] = $artifactVersion;
        return $this;
    }

    /**
    * Gets uploadTarget
    *  存放平台类型
    *
    * @return string|null
    */
    public function getUploadTarget()
    {
        return $this->container['uploadTarget'];
    }

    /**
    * Sets uploadTarget
    *
    * @param string|null $uploadTarget 存放平台类型
    *
    * @return $this
    */
    public function setUploadTarget($uploadTarget)
    {
        $this->container['uploadTarget'] = $uploadTarget;
        return $this;
    }

    /**
    * Gets artifactPackageType
    *  产物包类型
    *
    * @return string|null
    */
    public function getArtifactPackageType()
    {
        return $this->container['artifactPackageType'];
    }

    /**
    * Sets artifactPackageType
    *
    * @param string|null $artifactPackageType 产物包类型
    *
    * @return $this
    */
    public function setArtifactPackageType($artifactPackageType)
    {
        $this->container['artifactPackageType'] = $artifactPackageType;
        return $this;
    }

    /**
    * Gets artifactUri
    *  制品仓路径
    *
    * @return string|null
    */
    public function getArtifactUri()
    {
        return $this->container['artifactUri'];
    }

    /**
    * Sets artifactUri
    *
    * @param string|null $artifactUri 制品仓路径
    *
    * @return $this
    */
    public function setArtifactUri($artifactUri)
    {
        $this->container['artifactUri'] = $artifactUri;
        return $this;
    }

    /**
    * Gets artifactDownloadUrlWithId
    *  制品仓下载链接
    *
    * @return string|null
    */
    public function getArtifactDownloadUrlWithId()
    {
        return $this->container['artifactDownloadUrlWithId'];
    }

    /**
    * Sets artifactDownloadUrlWithId
    *
    * @param string|null $artifactDownloadUrlWithId 制品仓下载链接
    *
    * @return $this
    */
    public function setArtifactDownloadUrlWithId($artifactDownloadUrlWithId)
    {
        $this->container['artifactDownloadUrlWithId'] = $artifactDownloadUrlWithId;
        return $this;
    }

    /**
    * Gets artifactType
    *  产物类型
    *
    * @return string|null
    */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
    * Sets artifactType
    *
    * @param string|null $artifactType 产物类型
    *
    * @return $this
    */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;
        return $this;
    }

    /**
    * Gets hashCode
    *  哈希码
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ArtifactHashCode[]|null
    */
    public function getHashCode()
    {
        return $this->container['hashCode'];
    }

    /**
    * Sets hashCode
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ArtifactHashCode[]|null $hashCode 哈希码
    *
    * @return $this
    */
    public function setHashCode($hashCode)
    {
        $this->container['hashCode'] = $hashCode;
        return $this;
    }

    /**
    * Gets jobId
    *  构建任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 构建任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建任务编号
    *
    * @return int|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int|null $buildNo 构建任务编号
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建任务序号
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建任务序号
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
        return $this;
    }

    /**
    * Gets fileSize
    *  产物大小
    *
    * @return string|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string|null $fileSize 产物大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
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

