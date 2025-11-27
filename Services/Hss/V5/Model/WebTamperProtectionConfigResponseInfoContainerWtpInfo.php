<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperProtectionConfigResponseInfoContainerWtpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperProtectionConfigResponseInfo_container_wtp_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * webAppName  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    * protectType  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    * clusterInfo  clusterInfo
    * clusterLabelList  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    * hostInfo  hostInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'webAppName' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'protectType' => 'string',
            'clusterInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterInfo',
            'clusterLabelList' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterLabelList[]',
            'hostInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoHostInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * webAppName  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    * protectType  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    * clusterInfo  clusterInfo
    * clusterLabelList  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    * hostInfo  hostInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'webAppName' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'protectType' => null,
        'clusterInfo' => null,
        'clusterLabelList' => null,
        'hostInfo' => null
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
    * webAppName  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    * protectType  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    * clusterInfo  clusterInfo
    * clusterLabelList  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    * hostInfo  hostInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'webAppName' => 'web_app_name',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'protectType' => 'protect_type',
            'clusterInfo' => 'cluster_info',
            'clusterLabelList' => 'cluster_label_list',
            'hostInfo' => 'host_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * webAppName  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    * protectType  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    * clusterInfo  clusterInfo
    * clusterLabelList  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    * hostInfo  hostInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'webAppName' => 'setWebAppName',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'protectType' => 'setProtectType',
            'clusterInfo' => 'setClusterInfo',
            'clusterLabelList' => 'setClusterLabelList',
            'hostInfo' => 'setHostInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * webAppName  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    * protectType  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    * clusterInfo  clusterInfo
    * clusterLabelList  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    * hostInfo  hostInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'webAppName' => 'getWebAppName',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'protectType' => 'getProtectType',
            'clusterInfo' => 'getClusterInfo',
            'clusterLabelList' => 'getClusterLabelList',
            'hostInfo' => 'getHostInfo'
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
        $this->container['webAppName'] = isset($data['webAppName']) ? $data['webAppName'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
        $this->container['clusterLabelList'] = isset($data['clusterLabelList']) ? $data['clusterLabelList'] : null;
        $this->container['hostInfo'] = isset($data['hostInfo']) ? $data['hostInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['webAppName']) && (mb_strlen($this->container['webAppName']) > 128)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['webAppName']) && (mb_strlen($this->container['webAppName']) < 1)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^registry|local|custom$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^registry|local|custom$/.";
            }
            if (!is_null($this->container['protectType']) && !preg_match("/^cluster|host$/", $this->container['protectType'])) {
                $invalidProperties[] = "invalid value for 'protectType', must be conform to the pattern /^cluster|host$/.";
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
    * Gets webAppName
    *  **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getWebAppName()
    {
        return $this->container['webAppName'];
    }

    /**
    * Sets webAppName
    *
    * @param string|null $webAppName **参数解释**： 网站应用名称 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setWebAppName($webAppName)
    {
        $this->container['webAppName'] = $webAppName;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
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
    * @param string|null $imageName **参数解释**： 镜像名称 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
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
    * @param string|null $imageVersion **参数解释**： 镜像版本 **取值范围**： 字符长度1-64位
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
    *  **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
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
    * @param string|null $imageType **参数解释**： 镜像类型 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets protectType
    *  **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    *
    * @return string|null
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string|null $protectType **参数解释**: 防护类型 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets clusterInfo
    *  clusterInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterInfo|null
    */
    public function getClusterInfo()
    {
        return $this->container['clusterInfo'];
    }

    /**
    * Sets clusterInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterInfo|null $clusterInfo clusterInfo
    *
    * @return $this
    */
    public function setClusterInfo($clusterInfo)
    {
        $this->container['clusterInfo'] = $clusterInfo;
        return $this;
    }

    /**
    * Gets clusterLabelList
    *  **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterLabelList[]|null
    */
    public function getClusterLabelList()
    {
        return $this->container['clusterLabelList'];
    }

    /**
    * Sets clusterLabelList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoClusterLabelList[]|null $clusterLabelList **参数解释**: 集群标签列表 **取值范围**: 最少0条，最多10条
    *
    * @return $this
    */
    public function setClusterLabelList($clusterLabelList)
    {
        $this->container['clusterLabelList'] = $clusterLabelList;
        return $this;
    }

    /**
    * Gets hostInfo
    *  hostInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoHostInfo|null
    */
    public function getHostInfo()
    {
        return $this->container['hostInfo'];
    }

    /**
    * Sets hostInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfoHostInfo|null $hostInfo hostInfo
    *
    * @return $this
    */
    public function setHostInfo($hostInfo)
    {
        $this->container['hostInfo'] = $hostInfo;
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

