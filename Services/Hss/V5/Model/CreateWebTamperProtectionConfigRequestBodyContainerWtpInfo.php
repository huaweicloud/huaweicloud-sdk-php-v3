<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWebTamperProtectionConfigRequestBodyContainerWtpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWebTamperProtectionConfigRequestBody_container_wtp_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectType  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    * webAppName  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterLabelList  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * protectImageList  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectType' => 'string',
            'webAppName' => 'string',
            'clusterId' => 'string',
            'hostId' => 'string',
            'clusterLabelList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterLabelInfo[]',
            'protectImageList' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectImageInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectType  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    * webAppName  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterLabelList  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * protectImageList  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectType' => null,
        'webAppName' => null,
        'clusterId' => null,
        'hostId' => null,
        'clusterLabelList' => null,
        'protectImageList' => null
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
    * protectType  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    * webAppName  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterLabelList  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * protectImageList  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectType' => 'protect_type',
            'webAppName' => 'web_app_name',
            'clusterId' => 'cluster_id',
            'hostId' => 'host_id',
            'clusterLabelList' => 'cluster_label_list',
            'protectImageList' => 'protect_image_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectType  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    * webAppName  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterLabelList  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * protectImageList  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'protectType' => 'setProtectType',
            'webAppName' => 'setWebAppName',
            'clusterId' => 'setClusterId',
            'hostId' => 'setHostId',
            'clusterLabelList' => 'setClusterLabelList',
            'protectImageList' => 'setProtectImageList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectType  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    * webAppName  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterLabelList  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * protectImageList  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'protectType' => 'getProtectType',
            'webAppName' => 'getWebAppName',
            'clusterId' => 'getClusterId',
            'hostId' => 'getHostId',
            'clusterLabelList' => 'getClusterLabelList',
            'protectImageList' => 'getProtectImageList'
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
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['webAppName'] = isset($data['webAppName']) ? $data['webAppName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['clusterLabelList'] = isset($data['clusterLabelList']) ? $data['clusterLabelList'] : null;
        $this->container['protectImageList'] = isset($data['protectImageList']) ? $data['protectImageList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protectType'] === null) {
            $invalidProperties[] = "'protectType' can't be null";
        }
            if (!preg_match("/^cluster|host$/", $this->container['protectType'])) {
                $invalidProperties[] = "invalid value for 'protectType', must be conform to the pattern /^cluster|host$/.";
            }
        if ($this->container['webAppName'] === null) {
            $invalidProperties[] = "'webAppName' can't be null";
        }
            if ((mb_strlen($this->container['webAppName']) > 128)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['webAppName']) < 1)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['protectImageList'] === null) {
            $invalidProperties[] = "'protectImageList' can't be null";
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
    * Gets protectType
    *  **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string $protectType **参数解释**: 防护类型 **约束限制**: 不涉及 **取值范围**: - cluster：对集群下的容器进行网页防篡改防护 - host：对主机下的容器进行网页防篡改防护  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets webAppName
    *  **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getWebAppName()
    {
        return $this->container['webAppName'];
    }

    /**
    * Sets webAppName
    *
    * @param string $webAppName **参数解释**: 网站应用的名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setWebAppName($webAppName)
    {
        $this->container['webAppName'] = $webAppName;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: protect_type值为“cluster”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机id **约束限制**: protect_type值为“host”时有效 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets clusterLabelList
    *  **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterLabelInfo[]|null
    */
    public function getClusterLabelList()
    {
        return $this->container['clusterLabelList'];
    }

    /**
    * Sets clusterLabelList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterLabelInfo[]|null $clusterLabelList **参数解释**: 集群标签列表 **约束限制**: protect_type值为“cluster”时生效 **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterLabelList($clusterLabelList)
    {
        $this->container['clusterLabelList'] = $clusterLabelList;
        return $this;
    }

    /**
    * Gets protectImageList
    *  **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectImageInfo[]
    */
    public function getProtectImageList()
    {
        return $this->container['protectImageList'];
    }

    /**
    * Sets protectImageList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectImageInfo[] $protectImageList **参数解释**: 防护的镜像列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多10条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectImageList($protectImageList)
    {
        $this->container['protectImageList'] = $protectImageList;
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

