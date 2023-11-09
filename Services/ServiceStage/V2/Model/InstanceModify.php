<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceModify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  应用组件版本号，满足版本语义，如1.0.1。
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * configuration  应用配置，如环境变量。
    * description  描述。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'flavorId' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId',
            'artifacts' => 'map[string,object]',
            'configuration' => 'map[string,object]',
            'description' => 'string',
            'externalAccesses' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]',
            'referResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  应用组件版本号，满足版本语义，如1.0.1。
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * configuration  应用配置，如环境变量。
    * description  描述。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'flavorId' => null,
        'artifacts' => null,
        'configuration' => null,
        'description' => null,
        'externalAccesses' => null,
        'referResources' => null
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
    * version  应用组件版本号，满足版本语义，如1.0.1。
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * configuration  应用配置，如环境变量。
    * description  描述。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'flavorId' => 'flavor_id',
            'artifacts' => 'artifacts',
            'configuration' => 'configuration',
            'description' => 'description',
            'externalAccesses' => 'external_accesses',
            'referResources' => 'refer_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  应用组件版本号，满足版本语义，如1.0.1。
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * configuration  应用配置，如环境变量。
    * description  描述。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'flavorId' => 'setFlavorId',
            'artifacts' => 'setArtifacts',
            'configuration' => 'setConfiguration',
            'description' => 'setDescription',
            'externalAccesses' => 'setExternalAccesses',
            'referResources' => 'setReferResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  应用组件版本号，满足版本语义，如1.0.1。
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * configuration  应用配置，如环境变量。
    * description  描述。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'flavorId' => 'getFlavorId',
            'artifacts' => 'getArtifacts',
            'configuration' => 'getConfiguration',
            'description' => 'getDescription',
            'externalAccesses' => 'getExternalAccesses',
            'referResources' => 'getReferResources'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['externalAccesses'] = isset($data['externalAccesses']) ? $data['externalAccesses'] : null;
        $this->container['referResources'] = isset($data['referResources']) ? $data['referResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^([0-9]+)(.[0-9]+){2,3}$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^([0-9]+)(.[0-9]+){2,3}$/.";
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
    * Gets version
    *  应用组件版本号，满足版本语义，如1.0.1。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 应用组件版本号，满足版本语义，如1.0.1。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets flavorId
    *  flavorId
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets artifacts
    *  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return map[string,object]|null
    */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
    * Sets artifacts
    *
    * @param map[string,object]|null $artifacts 组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return $this
    */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;
        return $this;
    }

    /**
    * Gets configuration
    *  应用配置，如环境变量。
    *
    * @return map[string,object]|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param map[string,object]|null $configuration 应用配置，如环境变量。
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets externalAccesses
    *  访问方式列表。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]|null
    */
    public function getExternalAccesses()
    {
        return $this->container['externalAccesses'];
    }

    /**
    * Sets externalAccesses
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]|null $externalAccesses 访问方式列表。
    *
    * @return $this
    */
    public function setExternalAccesses($externalAccesses)
    {
        $this->container['externalAccesses'] = $externalAccesses;
        return $this;
    }

    /**
    * Gets referResources
    *  部署资源列表。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[]|null
    */
    public function getReferResources()
    {
        return $this->container['referResources'];
    }

    /**
    * Sets referResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[]|null $referResources 部署资源列表。
    *
    * @return $this
    */
    public function setReferResources($referResources)
    {
        $this->container['referResources'] = $referResources;
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

