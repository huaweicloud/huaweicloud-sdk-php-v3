<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OnPremisesVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OnPremisesVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kubernetesVersion  Kubernetes集群版本
    * releaseVersion  发布版本
    * ucsctlDownloadUrl  ucs-ctl工具下载链接
    * arch  兼容CPU架构
    * obsEndpoint  对象存储服务访问端点
    * packagePath  软件包存储路径
    * imagesPackagePath  镜像包存储路径
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kubernetesVersion' => 'string',
            'releaseVersion' => 'string',
            'ucsctlDownloadUrl' => 'string',
            'arch' => 'string',
            'obsEndpoint' => 'string',
            'packagePath' => 'string',
            'imagesPackagePath' => 'string',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kubernetesVersion  Kubernetes集群版本
    * releaseVersion  发布版本
    * ucsctlDownloadUrl  ucs-ctl工具下载链接
    * arch  兼容CPU架构
    * obsEndpoint  对象存储服务访问端点
    * packagePath  软件包存储路径
    * imagesPackagePath  镜像包存储路径
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kubernetesVersion' => null,
        'releaseVersion' => null,
        'ucsctlDownloadUrl' => null,
        'arch' => null,
        'obsEndpoint' => null,
        'packagePath' => null,
        'imagesPackagePath' => null,
        'targetVersion' => null
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
    * kubernetesVersion  Kubernetes集群版本
    * releaseVersion  发布版本
    * ucsctlDownloadUrl  ucs-ctl工具下载链接
    * arch  兼容CPU架构
    * obsEndpoint  对象存储服务访问端点
    * packagePath  软件包存储路径
    * imagesPackagePath  镜像包存储路径
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kubernetesVersion' => 'kubernetesVersion',
            'releaseVersion' => 'releaseVersion',
            'ucsctlDownloadUrl' => 'ucsctlDownloadURL',
            'arch' => 'arch',
            'obsEndpoint' => 'obsEndpoint',
            'packagePath' => 'packagePath',
            'imagesPackagePath' => 'imagesPackagePath',
            'targetVersion' => 'targetVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kubernetesVersion  Kubernetes集群版本
    * releaseVersion  发布版本
    * ucsctlDownloadUrl  ucs-ctl工具下载链接
    * arch  兼容CPU架构
    * obsEndpoint  对象存储服务访问端点
    * packagePath  软件包存储路径
    * imagesPackagePath  镜像包存储路径
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $setters = [
            'kubernetesVersion' => 'setKubernetesVersion',
            'releaseVersion' => 'setReleaseVersion',
            'ucsctlDownloadUrl' => 'setUcsctlDownloadUrl',
            'arch' => 'setArch',
            'obsEndpoint' => 'setObsEndpoint',
            'packagePath' => 'setPackagePath',
            'imagesPackagePath' => 'setImagesPackagePath',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kubernetesVersion  Kubernetes集群版本
    * releaseVersion  发布版本
    * ucsctlDownloadUrl  ucs-ctl工具下载链接
    * arch  兼容CPU架构
    * obsEndpoint  对象存储服务访问端点
    * packagePath  软件包存储路径
    * imagesPackagePath  镜像包存储路径
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $getters = [
            'kubernetesVersion' => 'getKubernetesVersion',
            'releaseVersion' => 'getReleaseVersion',
            'ucsctlDownloadUrl' => 'getUcsctlDownloadUrl',
            'arch' => 'getArch',
            'obsEndpoint' => 'getObsEndpoint',
            'packagePath' => 'getPackagePath',
            'imagesPackagePath' => 'getImagesPackagePath',
            'targetVersion' => 'getTargetVersion'
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
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['releaseVersion'] = isset($data['releaseVersion']) ? $data['releaseVersion'] : null;
        $this->container['ucsctlDownloadUrl'] = isset($data['ucsctlDownloadUrl']) ? $data['ucsctlDownloadUrl'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['obsEndpoint'] = isset($data['obsEndpoint']) ? $data['obsEndpoint'] : null;
        $this->container['packagePath'] = isset($data['packagePath']) ? $data['packagePath'] : null;
        $this->container['imagesPackagePath'] = isset($data['imagesPackagePath']) ? $data['imagesPackagePath'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
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
    * Gets kubernetesVersion
    *  Kubernetes集群版本
    *
    * @return string|null
    */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
    * Sets kubernetesVersion
    *
    * @param string|null $kubernetesVersion Kubernetes集群版本
    *
    * @return $this
    */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;
        return $this;
    }

    /**
    * Gets releaseVersion
    *  发布版本
    *
    * @return string|null
    */
    public function getReleaseVersion()
    {
        return $this->container['releaseVersion'];
    }

    /**
    * Sets releaseVersion
    *
    * @param string|null $releaseVersion 发布版本
    *
    * @return $this
    */
    public function setReleaseVersion($releaseVersion)
    {
        $this->container['releaseVersion'] = $releaseVersion;
        return $this;
    }

    /**
    * Gets ucsctlDownloadUrl
    *  ucs-ctl工具下载链接
    *
    * @return string|null
    */
    public function getUcsctlDownloadUrl()
    {
        return $this->container['ucsctlDownloadUrl'];
    }

    /**
    * Sets ucsctlDownloadUrl
    *
    * @param string|null $ucsctlDownloadUrl ucs-ctl工具下载链接
    *
    * @return $this
    */
    public function setUcsctlDownloadUrl($ucsctlDownloadUrl)
    {
        $this->container['ucsctlDownloadUrl'] = $ucsctlDownloadUrl;
        return $this;
    }

    /**
    * Gets arch
    *  兼容CPU架构
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 兼容CPU架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets obsEndpoint
    *  对象存储服务访问端点
    *
    * @return string|null
    */
    public function getObsEndpoint()
    {
        return $this->container['obsEndpoint'];
    }

    /**
    * Sets obsEndpoint
    *
    * @param string|null $obsEndpoint 对象存储服务访问端点
    *
    * @return $this
    */
    public function setObsEndpoint($obsEndpoint)
    {
        $this->container['obsEndpoint'] = $obsEndpoint;
        return $this;
    }

    /**
    * Gets packagePath
    *  软件包存储路径
    *
    * @return string|null
    */
    public function getPackagePath()
    {
        return $this->container['packagePath'];
    }

    /**
    * Sets packagePath
    *
    * @param string|null $packagePath 软件包存储路径
    *
    * @return $this
    */
    public function setPackagePath($packagePath)
    {
        $this->container['packagePath'] = $packagePath;
        return $this;
    }

    /**
    * Gets imagesPackagePath
    *  镜像包存储路径
    *
    * @return string|null
    */
    public function getImagesPackagePath()
    {
        return $this->container['imagesPackagePath'];
    }

    /**
    * Sets imagesPackagePath
    *
    * @param string|null $imagesPackagePath 镜像包存储路径
    *
    * @return $this
    */
    public function setImagesPackagePath($imagesPackagePath)
    {
        $this->container['imagesPackagePath'] = $imagesPackagePath;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标版本
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 目标版本
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

