<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  镜像ID
    * imageName  镜像名称
    * serviceType  镜像所属的服务
    * archType  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    * specificationId  规格ID
    * createTime  镜像的录入时间，UNIX时间戳，单位毫秒
    * versionType  版本类型
    * trustDomain  domain白名单列表，多个之间用逗号分隔
    * vendorName  厂商名称
    * vendorImageVersion  厂商版本号
    * ccspVersionNeed  密码服务依赖的(厂商)平台版本号
    * hwImageVersion  华为版本号
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'imageName' => 'string',
            'serviceType' => 'string',
            'archType' => 'string',
            'specificationId' => 'string',
            'createTime' => 'string',
            'versionType' => 'string',
            'trustDomain' => 'string',
            'vendorName' => 'string',
            'vendorImageVersion' => 'string',
            'ccspVersionNeed' => 'string',
            'hwImageVersion' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  镜像ID
    * imageName  镜像名称
    * serviceType  镜像所属的服务
    * archType  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    * specificationId  规格ID
    * createTime  镜像的录入时间，UNIX时间戳，单位毫秒
    * versionType  版本类型
    * trustDomain  domain白名单列表，多个之间用逗号分隔
    * vendorName  厂商名称
    * vendorImageVersion  厂商版本号
    * ccspVersionNeed  密码服务依赖的(厂商)平台版本号
    * hwImageVersion  华为版本号
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'imageName' => null,
        'serviceType' => null,
        'archType' => null,
        'specificationId' => null,
        'createTime' => null,
        'versionType' => null,
        'trustDomain' => null,
        'vendorName' => null,
        'vendorImageVersion' => null,
        'ccspVersionNeed' => null,
        'hwImageVersion' => null,
        'description' => null
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
    * imageId  镜像ID
    * imageName  镜像名称
    * serviceType  镜像所属的服务
    * archType  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    * specificationId  规格ID
    * createTime  镜像的录入时间，UNIX时间戳，单位毫秒
    * versionType  版本类型
    * trustDomain  domain白名单列表，多个之间用逗号分隔
    * vendorName  厂商名称
    * vendorImageVersion  厂商版本号
    * ccspVersionNeed  密码服务依赖的(厂商)平台版本号
    * hwImageVersion  华为版本号
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'serviceType' => 'service_type',
            'archType' => 'arch_type',
            'specificationId' => 'specification_id',
            'createTime' => 'create_time',
            'versionType' => 'version_type',
            'trustDomain' => 'trust_domain',
            'vendorName' => 'vendor_name',
            'vendorImageVersion' => 'vendor_image_version',
            'ccspVersionNeed' => 'ccsp_version_need',
            'hwImageVersion' => 'hw_image_version',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  镜像ID
    * imageName  镜像名称
    * serviceType  镜像所属的服务
    * archType  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    * specificationId  规格ID
    * createTime  镜像的录入时间，UNIX时间戳，单位毫秒
    * versionType  版本类型
    * trustDomain  domain白名单列表，多个之间用逗号分隔
    * vendorName  厂商名称
    * vendorImageVersion  厂商版本号
    * ccspVersionNeed  密码服务依赖的(厂商)平台版本号
    * hwImageVersion  华为版本号
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'serviceType' => 'setServiceType',
            'archType' => 'setArchType',
            'specificationId' => 'setSpecificationId',
            'createTime' => 'setCreateTime',
            'versionType' => 'setVersionType',
            'trustDomain' => 'setTrustDomain',
            'vendorName' => 'setVendorName',
            'vendorImageVersion' => 'setVendorImageVersion',
            'ccspVersionNeed' => 'setCcspVersionNeed',
            'hwImageVersion' => 'setHwImageVersion',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  镜像ID
    * imageName  镜像名称
    * serviceType  镜像所属的服务
    * archType  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    * specificationId  规格ID
    * createTime  镜像的录入时间，UNIX时间戳，单位毫秒
    * versionType  版本类型
    * trustDomain  domain白名单列表，多个之间用逗号分隔
    * vendorName  厂商名称
    * vendorImageVersion  厂商版本号
    * ccspVersionNeed  密码服务依赖的(厂商)平台版本号
    * hwImageVersion  华为版本号
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'serviceType' => 'getServiceType',
            'archType' => 'getArchType',
            'specificationId' => 'getSpecificationId',
            'createTime' => 'getCreateTime',
            'versionType' => 'getVersionType',
            'trustDomain' => 'getTrustDomain',
            'vendorName' => 'getVendorName',
            'vendorImageVersion' => 'getVendorImageVersion',
            'ccspVersionNeed' => 'getCcspVersionNeed',
            'hwImageVersion' => 'getHwImageVersion',
            'description' => 'getDescription'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['archType'] = isset($data['archType']) ? $data['archType'] : null;
        $this->container['specificationId'] = isset($data['specificationId']) ? $data['specificationId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
        $this->container['trustDomain'] = isset($data['trustDomain']) ? $data['trustDomain'] : null;
        $this->container['vendorName'] = isset($data['vendorName']) ? $data['vendorName'] : null;
        $this->container['vendorImageVersion'] = isset($data['vendorImageVersion']) ? $data['vendorImageVersion'] : null;
        $this->container['ccspVersionNeed'] = isset($data['ccspVersionNeed']) ? $data['ccspVersionNeed'] : null;
        $this->container['hwImageVersion'] = isset($data['hwImageVersion']) ? $data['hwImageVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['archType'] === null) {
            $invalidProperties[] = "'archType' can't be null";
        }
        if ($this->container['specificationId'] === null) {
            $invalidProperties[] = "'specificationId' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['versionType'] === null) {
            $invalidProperties[] = "'versionType' can't be null";
        }
        if ($this->container['trustDomain'] === null) {
            $invalidProperties[] = "'trustDomain' can't be null";
        }
        if ($this->container['vendorName'] === null) {
            $invalidProperties[] = "'vendorName' can't be null";
        }
        if ($this->container['vendorImageVersion'] === null) {
            $invalidProperties[] = "'vendorImageVersion' can't be null";
        }
        if ($this->container['ccspVersionNeed'] === null) {
            $invalidProperties[] = "'ccspVersionNeed' can't be null";
        }
        if ($this->container['hwImageVersion'] === null) {
            $invalidProperties[] = "'hwImageVersion' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    * Gets imageId
    *  镜像ID
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets serviceType
    *  镜像所属的服务
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType 镜像所属的服务
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets archType
    *  镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    *
    * @return string
    */
    public function getArchType()
    {
        return $this->container['archType'];
    }

    /**
    * Sets archType
    *
    * @param string $archType 镜像的系统架构： - **X86_64** : X86 - **ARRCH** : ARM
    *
    * @return $this
    */
    public function setArchType($archType)
    {
        $this->container['archType'] = $archType;
        return $this;
    }

    /**
    * Gets specificationId
    *  规格ID
    *
    * @return string
    */
    public function getSpecificationId()
    {
        return $this->container['specificationId'];
    }

    /**
    * Sets specificationId
    *
    * @param string $specificationId 规格ID
    *
    * @return $this
    */
    public function setSpecificationId($specificationId)
    {
        $this->container['specificationId'] = $specificationId;
        return $this;
    }

    /**
    * Gets createTime
    *  镜像的录入时间，UNIX时间戳，单位毫秒
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 镜像的录入时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets versionType
    *  版本类型
    *
    * @return string
    */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
    * Sets versionType
    *
    * @param string $versionType 版本类型
    *
    * @return $this
    */
    public function setVersionType($versionType)
    {
        $this->container['versionType'] = $versionType;
        return $this;
    }

    /**
    * Gets trustDomain
    *  domain白名单列表，多个之间用逗号分隔
    *
    * @return string
    */
    public function getTrustDomain()
    {
        return $this->container['trustDomain'];
    }

    /**
    * Sets trustDomain
    *
    * @param string $trustDomain domain白名单列表，多个之间用逗号分隔
    *
    * @return $this
    */
    public function setTrustDomain($trustDomain)
    {
        $this->container['trustDomain'] = $trustDomain;
        return $this;
    }

    /**
    * Gets vendorName
    *  厂商名称
    *
    * @return string
    */
    public function getVendorName()
    {
        return $this->container['vendorName'];
    }

    /**
    * Sets vendorName
    *
    * @param string $vendorName 厂商名称
    *
    * @return $this
    */
    public function setVendorName($vendorName)
    {
        $this->container['vendorName'] = $vendorName;
        return $this;
    }

    /**
    * Gets vendorImageVersion
    *  厂商版本号
    *
    * @return string
    */
    public function getVendorImageVersion()
    {
        return $this->container['vendorImageVersion'];
    }

    /**
    * Sets vendorImageVersion
    *
    * @param string $vendorImageVersion 厂商版本号
    *
    * @return $this
    */
    public function setVendorImageVersion($vendorImageVersion)
    {
        $this->container['vendorImageVersion'] = $vendorImageVersion;
        return $this;
    }

    /**
    * Gets ccspVersionNeed
    *  密码服务依赖的(厂商)平台版本号
    *
    * @return string
    */
    public function getCcspVersionNeed()
    {
        return $this->container['ccspVersionNeed'];
    }

    /**
    * Sets ccspVersionNeed
    *
    * @param string $ccspVersionNeed 密码服务依赖的(厂商)平台版本号
    *
    * @return $this
    */
    public function setCcspVersionNeed($ccspVersionNeed)
    {
        $this->container['ccspVersionNeed'] = $ccspVersionNeed;
        return $this;
    }

    /**
    * Gets hwImageVersion
    *  华为版本号
    *
    * @return string
    */
    public function getHwImageVersion()
    {
        return $this->container['hwImageVersion'];
    }

    /**
    * Sets hwImageVersion
    *
    * @param string $hwImageVersion 华为版本号
    *
    * @return $this
    */
    public function setHwImageVersion($hwImageVersion)
    {
        $this->container['hwImageVersion'] = $hwImageVersion;
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

