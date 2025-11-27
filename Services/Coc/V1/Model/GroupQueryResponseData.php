<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupQueryResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupQueryResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  component id。
    * applicationId  application id。
    * epId  企业项目id。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * ruleTags  关联标签。
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
            'epId' => 'string',
            'syncMode' => 'string',
            'ruleTags' => 'string',
            'relationConfigurations' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  component id。
    * applicationId  application id。
    * epId  企业项目id。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * ruleTags  关联标签。
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
        'epId' => null,
        'syncMode' => null,
        'ruleTags' => null,
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
    * code  code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  component id。
    * applicationId  application id。
    * epId  企业项目id。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * ruleTags  关联标签。
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
            'epId' => 'ep_id',
            'syncMode' => 'sync_mode',
            'ruleTags' => 'rule_tags',
            'relationConfigurations' => 'relation_configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  component id。
    * applicationId  application id。
    * epId  企业项目id。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * ruleTags  关联标签。
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
            'epId' => 'setEpId',
            'syncMode' => 'setSyncMode',
            'ruleTags' => 'setRuleTags',
            'relationConfigurations' => 'setRelationConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  CloudCMDB分配的uuid。
    * name  名称。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * code  code。
    * domainId  租户id。
    * regionId  region id。
    * componentId  component id。
    * applicationId  application id。
    * epId  企业项目id。
    * syncMode  资源关联模式，MANUAL表示手动关联，AUTO表示智能关联。
    * ruleTags  关联标签。
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
            'epId' => 'getEpId',
            'syncMode' => 'getSyncMode',
            'ruleTags' => 'getRuleTags',
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
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['ruleTags'] = isset($data['ruleTags']) ? $data['ruleTags'] : null;
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
        if ($this->container['epId'] === null) {
            $invalidProperties[] = "'epId' can't be null";
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
    *  code。
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
    * @param string|null $code code。
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
    *  component id。
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
    * @param string|null $componentId component id。
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
    *  application id。
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
    * @param string|null $applicationId application id。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets epId
    *  企业项目id。
    *
    * @return string
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string $epId 企业项目id。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
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
    * Gets ruleTags
    *  关联标签。
    *
    * @return string|null
    */
    public function getRuleTags()
    {
        return $this->container['ruleTags'];
    }

    /**
    * Sets ruleTags
    *
    * @param string|null $ruleTags 关联标签。
    *
    * @return $this
    */
    public function setRuleTags($ruleTags)
    {
        $this->container['ruleTags'] = $ruleTags;
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

