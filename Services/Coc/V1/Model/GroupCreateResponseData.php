<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupCreateResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupCreateResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  分组code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  组件id。
    * applicationId  应用id。
    * path  分组路径。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * createTime  创建时间。
    * updateTime  更新时间。
    * syncRules  智能关联规则。
    * relatedDomainId  跨帐号资源所属的domainId。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vendor' => 'string',
            'code' => 'string',
            'domainId' => 'string',
            'regionId' => 'string',
            'componentId' => 'string',
            'applicationId' => 'string',
            'path' => 'string',
            'syncMode' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'syncRules' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]',
            'relatedDomainId' => 'string',
            'relationConfigurations' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  分组code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  组件id。
    * applicationId  应用id。
    * path  分组路径。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * createTime  创建时间。
    * updateTime  更新时间。
    * syncRules  智能关联规则。
    * relatedDomainId  跨帐号资源所属的domainId。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vendor' => null,
        'code' => null,
        'domainId' => null,
        'regionId' => null,
        'componentId' => null,
        'applicationId' => null,
        'path' => null,
        'syncMode' => null,
        'createTime' => null,
        'updateTime' => null,
        'syncRules' => null,
        'relatedDomainId' => null,
        'relationConfigurations' => null
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
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  分组code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  组件id。
    * applicationId  应用id。
    * path  分组路径。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * createTime  创建时间。
    * updateTime  更新时间。
    * syncRules  智能关联规则。
    * relatedDomainId  跨帐号资源所属的domainId。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'vendor' => 'vendor',
            'code' => 'code',
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'componentId' => 'component_id',
            'applicationId' => 'application_id',
            'path' => 'path',
            'syncMode' => 'sync_mode',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'syncRules' => 'sync_rules',
            'relatedDomainId' => 'related_domain_id',
            'relationConfigurations' => 'relation_configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  分组code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  组件id。
    * applicationId  应用id。
    * path  分组路径。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * createTime  创建时间。
    * updateTime  更新时间。
    * syncRules  智能关联规则。
    * relatedDomainId  跨帐号资源所属的domainId。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vendor' => 'setVendor',
            'code' => 'setCode',
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'componentId' => 'setComponentId',
            'applicationId' => 'setApplicationId',
            'path' => 'setPath',
            'syncMode' => 'setSyncMode',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'syncRules' => 'setSyncRules',
            'relatedDomainId' => 'setRelatedDomainId',
            'relationConfigurations' => 'setRelationConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  分组code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  组件id。
    * applicationId  应用id。
    * path  分组路径。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * createTime  创建时间。
    * updateTime  更新时间。
    * syncRules  智能关联规则。
    * relatedDomainId  跨帐号资源所属的domainId。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vendor' => 'getVendor',
            'code' => 'getCode',
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'componentId' => 'getComponentId',
            'applicationId' => 'getApplicationId',
            'path' => 'getPath',
            'syncMode' => 'getSyncMode',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'syncRules' => 'getSyncRules',
            'relatedDomainId' => 'getRelatedDomainId',
            'relationConfigurations' => 'getRelationConfigurations'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['syncRules'] = isset($data['syncRules']) ? $data['syncRules'] : null;
        $this->container['relatedDomainId'] = isset($data['relatedDomainId']) ? $data['relatedDomainId'] : null;
        $this->container['relationConfigurations'] = isset($data['relationConfigurations']) ? $data['relationConfigurations'] : null;
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
    * Gets id
    *  CloudCMDB分配的uuid。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id CloudCMDB分配的uuid。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称。
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
    * @param string|null $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vendor
    *  厂商（默认RMS，可填RMS/ALI/OTHER）。
    *
    * @return string|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string|null $vendor 厂商（默认RMS，可填RMS/ALI/OTHER）。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets code
    *  分组code。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 分组code。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id。
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
    * @param string|null $domainId 租户id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets regionId
    *  region id。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region id。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets componentId
    *  组件id。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用id。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用id。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets path
    *  分组路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 分组路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets syncMode
    *  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode 资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
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
    * @param string|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets syncRules
    *  智能关联规则。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]|null
    */
    public function getSyncRules()
    {
        return $this->container['syncRules'];
    }

    /**
    * Sets syncRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]|null $syncRules 智能关联规则。
    *
    * @return $this
    */
    public function setSyncRules($syncRules)
    {
        $this->container['syncRules'] = $syncRules;
        return $this;
    }

    /**
    * Gets relatedDomainId
    *  跨帐号资源所属的domainId。
    *
    * @return string|null
    */
    public function getRelatedDomainId()
    {
        return $this->container['relatedDomainId'];
    }

    /**
    * Sets relatedDomainId
    *
    * @param string|null $relatedDomainId 跨帐号资源所属的domainId。
    *
    * @return $this
    */
    public function setRelatedDomainId($relatedDomainId)
    {
        $this->container['relatedDomainId'] = $relatedDomainId;
        return $this;
    }

    /**
    * Gets relationConfigurations
    *  分组配置信息。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null
    */
    public function getRelationConfigurations()
    {
        return $this->container['relationConfigurations'];
    }

    /**
    * Sets relationConfigurations
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null $relationConfigurations 分组配置信息。
    *
    * @return $this
    */
    public function setRelationConfigurations($relationConfigurations)
    {
        $this->container['relationConfigurations'] = $relationConfigurations;
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

