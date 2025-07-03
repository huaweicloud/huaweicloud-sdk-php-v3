<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  规格ID
    * name  名称
    * description  描述
    * availabilityZoneId  AZ
    * enterpriseProjectId  企业项目ID
    * autoRecovery  开启自动恢复
    * osProfile  osProfile
    * securityGroupIds  安全组ID列表。全网卡生效。
    * networkInterfaces  networkInterfaces
    * blockDeviceMappings  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    * marketOptions  marketOptions
    * internetAccess  internetAccess
    * metadata  metadata
    * tagOptions  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'availabilityZoneId' => 'string',
            'enterpriseProjectId' => 'string',
            'autoRecovery' => 'bool',
            'osProfile' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateOsProfile',
            'securityGroupIds' => 'string[]',
            'networkInterfaces' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceOption[]',
            'blockDeviceMappings' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingOption[]',
            'marketOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateMarketOptions',
            'internetAccess' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateInternetAccessOption',
            'metadata' => 'map[string,string]',
            'tagOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateTagOptions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  规格ID
    * name  名称
    * description  描述
    * availabilityZoneId  AZ
    * enterpriseProjectId  企业项目ID
    * autoRecovery  开启自动恢复
    * osProfile  osProfile
    * securityGroupIds  安全组ID列表。全网卡生效。
    * networkInterfaces  networkInterfaces
    * blockDeviceMappings  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    * marketOptions  marketOptions
    * internetAccess  internetAccess
    * metadata  metadata
    * tagOptions  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'name' => null,
        'description' => null,
        'availabilityZoneId' => null,
        'enterpriseProjectId' => null,
        'autoRecovery' => null,
        'osProfile' => null,
        'securityGroupIds' => null,
        'networkInterfaces' => null,
        'blockDeviceMappings' => null,
        'marketOptions' => null,
        'internetAccess' => null,
        'metadata' => null,
        'tagOptions' => null
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
    * flavorId  规格ID
    * name  名称
    * description  描述
    * availabilityZoneId  AZ
    * enterpriseProjectId  企业项目ID
    * autoRecovery  开启自动恢复
    * osProfile  osProfile
    * securityGroupIds  安全组ID列表。全网卡生效。
    * networkInterfaces  networkInterfaces
    * blockDeviceMappings  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    * marketOptions  marketOptions
    * internetAccess  internetAccess
    * metadata  metadata
    * tagOptions  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'name' => 'name',
            'description' => 'description',
            'availabilityZoneId' => 'availability_zone_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'autoRecovery' => 'auto_recovery',
            'osProfile' => 'os_profile',
            'securityGroupIds' => 'security_group_ids',
            'networkInterfaces' => 'network_interfaces',
            'blockDeviceMappings' => 'block_device_mappings',
            'marketOptions' => 'market_options',
            'internetAccess' => 'internet_access',
            'metadata' => 'metadata',
            'tagOptions' => 'tag_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  规格ID
    * name  名称
    * description  描述
    * availabilityZoneId  AZ
    * enterpriseProjectId  企业项目ID
    * autoRecovery  开启自动恢复
    * osProfile  osProfile
    * securityGroupIds  安全组ID列表。全网卡生效。
    * networkInterfaces  networkInterfaces
    * blockDeviceMappings  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    * marketOptions  marketOptions
    * internetAccess  internetAccess
    * metadata  metadata
    * tagOptions  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'name' => 'setName',
            'description' => 'setDescription',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'autoRecovery' => 'setAutoRecovery',
            'osProfile' => 'setOsProfile',
            'securityGroupIds' => 'setSecurityGroupIds',
            'networkInterfaces' => 'setNetworkInterfaces',
            'blockDeviceMappings' => 'setBlockDeviceMappings',
            'marketOptions' => 'setMarketOptions',
            'internetAccess' => 'setInternetAccess',
            'metadata' => 'setMetadata',
            'tagOptions' => 'setTagOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  规格ID
    * name  名称
    * description  描述
    * availabilityZoneId  AZ
    * enterpriseProjectId  企业项目ID
    * autoRecovery  开启自动恢复
    * osProfile  osProfile
    * securityGroupIds  安全组ID列表。全网卡生效。
    * networkInterfaces  networkInterfaces
    * blockDeviceMappings  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    * marketOptions  marketOptions
    * internetAccess  internetAccess
    * metadata  metadata
    * tagOptions  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'name' => 'getName',
            'description' => 'getDescription',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'autoRecovery' => 'getAutoRecovery',
            'osProfile' => 'getOsProfile',
            'securityGroupIds' => 'getSecurityGroupIds',
            'networkInterfaces' => 'getNetworkInterfaces',
            'blockDeviceMappings' => 'getBlockDeviceMappings',
            'marketOptions' => 'getMarketOptions',
            'internetAccess' => 'getInternetAccess',
            'metadata' => 'getMetadata',
            'tagOptions' => 'getTagOptions'
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['autoRecovery'] = isset($data['autoRecovery']) ? $data['autoRecovery'] : null;
        $this->container['osProfile'] = isset($data['osProfile']) ? $data['osProfile'] : null;
        $this->container['securityGroupIds'] = isset($data['securityGroupIds']) ? $data['securityGroupIds'] : null;
        $this->container['networkInterfaces'] = isset($data['networkInterfaces']) ? $data['networkInterfaces'] : null;
        $this->container['blockDeviceMappings'] = isset($data['blockDeviceMappings']) ? $data['blockDeviceMappings'] : null;
        $this->container['marketOptions'] = isset($data['marketOptions']) ? $data['marketOptions'] : null;
        $this->container['internetAccess'] = isset($data['internetAccess']) ? $data['internetAccess'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['tagOptions'] = isset($data['tagOptions']) ? $data['tagOptions'] : null;
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
    * Gets flavorId
    *  规格ID
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 规格ID
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
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
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  AZ
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId AZ
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets autoRecovery
    *  开启自动恢复
    *
    * @return bool|null
    */
    public function getAutoRecovery()
    {
        return $this->container['autoRecovery'];
    }

    /**
    * Sets autoRecovery
    *
    * @param bool|null $autoRecovery 开启自动恢复
    *
    * @return $this
    */
    public function setAutoRecovery($autoRecovery)
    {
        $this->container['autoRecovery'] = $autoRecovery;
        return $this;
    }

    /**
    * Gets osProfile
    *  osProfile
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateOsProfile|null
    */
    public function getOsProfile()
    {
        return $this->container['osProfile'];
    }

    /**
    * Sets osProfile
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateOsProfile|null $osProfile osProfile
    *
    * @return $this
    */
    public function setOsProfile($osProfile)
    {
        $this->container['osProfile'] = $osProfile;
        return $this;
    }

    /**
    * Gets securityGroupIds
    *  安全组ID列表。全网卡生效。
    *
    * @return string[]|null
    */
    public function getSecurityGroupIds()
    {
        return $this->container['securityGroupIds'];
    }

    /**
    * Sets securityGroupIds
    *
    * @param string[]|null $securityGroupIds 安全组ID列表。全网卡生效。
    *
    * @return $this
    */
    public function setSecurityGroupIds($securityGroupIds)
    {
        $this->container['securityGroupIds'] = $securityGroupIds;
        return $this;
    }

    /**
    * Gets networkInterfaces
    *  networkInterfaces
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceOption[]|null
    */
    public function getNetworkInterfaces()
    {
        return $this->container['networkInterfaces'];
    }

    /**
    * Sets networkInterfaces
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceOption[]|null $networkInterfaces networkInterfaces
    *
    * @return $this
    */
    public function setNetworkInterfaces($networkInterfaces)
    {
        $this->container['networkInterfaces'] = $networkInterfaces;
        return $this;
    }

    /**
    * Gets blockDeviceMappings
    *  BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingOption[]|null
    */
    public function getBlockDeviceMappings()
    {
        return $this->container['blockDeviceMappings'];
    }

    /**
    * Sets blockDeviceMappings
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingOption[]|null $blockDeviceMappings BDM挂载信息。按flavor限制为准。 1. 整机镜像，不修改卷属性，按原镜像配置创建。 2. 整机镜像，修改卷属性，要用户解开填写BDM。 3. 提供解镜像为BDM接口。
    *
    * @return $this
    */
    public function setBlockDeviceMappings($blockDeviceMappings)
    {
        $this->container['blockDeviceMappings'] = $blockDeviceMappings;
        return $this;
    }

    /**
    * Gets marketOptions
    *  marketOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateMarketOptions|null
    */
    public function getMarketOptions()
    {
        return $this->container['marketOptions'];
    }

    /**
    * Sets marketOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateMarketOptions|null $marketOptions marketOptions
    *
    * @return $this
    */
    public function setMarketOptions($marketOptions)
    {
        $this->container['marketOptions'] = $marketOptions;
        return $this;
    }

    /**
    * Gets internetAccess
    *  internetAccess
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateInternetAccessOption|null
    */
    public function getInternetAccess()
    {
        return $this->container['internetAccess'];
    }

    /**
    * Sets internetAccess
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateInternetAccessOption|null $internetAccess internetAccess
    *
    * @return $this
    */
    public function setInternetAccess($internetAccess)
    {
        $this->container['internetAccess'] = $internetAccess;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return map[string,string]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string]|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets tagOptions
    *  创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateTagOptions[]|null
    */
    public function getTagOptions()
    {
        return $this->container['tagOptions'];
    }

    /**
    * Sets tagOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateTagOptions[]|null $tagOptions 创建虚拟机标签，目前仅支持给虚拟机打标签，后续会支持同时给相关资源如卷等打标签
    *
    * @return $this
    */
    public function setTagOptions($tagOptions)
    {
        $this->container['tagOptions'] = $tagOptions;
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

