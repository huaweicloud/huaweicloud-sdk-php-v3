<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分组名称。
    * componentId  组件id。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * regionId  region id。
    * applicationId  应用id。
    * syncMode  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'componentId' => 'string',
            'vendor' => 'string',
            'regionId' => 'string',
            'applicationId' => 'string',
            'syncMode' => 'string',
            'syncRules' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]',
            'relationConfigurations' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分组名称。
    * componentId  组件id。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * regionId  region id。
    * applicationId  应用id。
    * syncMode  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'componentId' => null,
        'vendor' => null,
        'regionId' => null,
        'applicationId' => null,
        'syncMode' => null,
        'syncRules' => null,
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
    * name  分组名称。
    * componentId  组件id。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * regionId  region id。
    * applicationId  应用id。
    * syncMode  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'componentId' => 'component_id',
            'vendor' => 'vendor',
            'regionId' => 'region_id',
            'applicationId' => 'application_id',
            'syncMode' => 'sync_mode',
            'syncRules' => 'sync_rules',
            'relationConfigurations' => 'relation_configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分组名称。
    * componentId  组件id。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * regionId  region id。
    * applicationId  应用id。
    * syncMode  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'componentId' => 'setComponentId',
            'vendor' => 'setVendor',
            'regionId' => 'setRegionId',
            'applicationId' => 'setApplicationId',
            'syncMode' => 'setSyncMode',
            'syncRules' => 'setSyncRules',
            'relationConfigurations' => 'setRelationConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分组名称。
    * componentId  组件id。
    * vendor  厂商（默认RMS，可填RMS/ALI/OTHER）。
    * regionId  region id。
    * applicationId  应用id。
    * syncMode  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'componentId' => 'getComponentId',
            'vendor' => 'getVendor',
            'regionId' => 'getRegionId',
            'applicationId' => 'getApplicationId',
            'syncMode' => 'getSyncMode',
            'syncRules' => 'getSyncRules',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['syncRules'] = isset($data['syncRules']) ? $data['syncRules'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
            if ((mb_strlen($this->container['componentId']) > 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['componentId']) < 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) < 1)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['syncMode'] === null) {
            $invalidProperties[] = "'syncMode' can't be null";
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
    * Gets name
    *  分组名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分组名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets componentId
    *  组件id。
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId 组件id。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
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
    * Gets regionId
    *  region id。
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
    * @param string $regionId region id。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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
    * Gets syncMode
    *  资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    *
    * @return string
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string $syncMode 资源同步方式，MANUAL表示手动，AUTO表示智能关联。
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
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

