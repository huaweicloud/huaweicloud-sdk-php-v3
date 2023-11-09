<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用组件实例名称。
    * environmentId  环境ID。
    * flavorId  flavorId
    * replica  实例副本数。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号，满足版本语义，如1.0.0。。
    * configuration  configuration
    * description  描述。
    * externalAccesses  访问方式。
    * referResources  部署资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'environmentId' => 'string',
            'flavorId' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId',
            'replica' => 'int',
            'artifacts' => 'map[string,object]',
            'version' => 'string',
            'configuration' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceConfiguration',
            'description' => 'string',
            'externalAccesses' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessesCreate[]',
            'referResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用组件实例名称。
    * environmentId  环境ID。
    * flavorId  flavorId
    * replica  实例副本数。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号，满足版本语义，如1.0.0。。
    * configuration  configuration
    * description  描述。
    * externalAccesses  访问方式。
    * referResources  部署资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'environmentId' => null,
        'flavorId' => null,
        'replica' => null,
        'artifacts' => null,
        'version' => null,
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
    * name  应用组件实例名称。
    * environmentId  环境ID。
    * flavorId  flavorId
    * replica  实例副本数。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号，满足版本语义，如1.0.0。。
    * configuration  configuration
    * description  描述。
    * externalAccesses  访问方式。
    * referResources  部署资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'environmentId' => 'environment_id',
            'flavorId' => 'flavor_id',
            'replica' => 'replica',
            'artifacts' => 'artifacts',
            'version' => 'version',
            'configuration' => 'configuration',
            'description' => 'description',
            'externalAccesses' => 'external_accesses',
            'referResources' => 'refer_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用组件实例名称。
    * environmentId  环境ID。
    * flavorId  flavorId
    * replica  实例副本数。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号，满足版本语义，如1.0.0。。
    * configuration  configuration
    * description  描述。
    * externalAccesses  访问方式。
    * referResources  部署资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'environmentId' => 'setEnvironmentId',
            'flavorId' => 'setFlavorId',
            'replica' => 'setReplica',
            'artifacts' => 'setArtifacts',
            'version' => 'setVersion',
            'configuration' => 'setConfiguration',
            'description' => 'setDescription',
            'externalAccesses' => 'setExternalAccesses',
            'referResources' => 'setReferResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用组件实例名称。
    * environmentId  环境ID。
    * flavorId  flavorId
    * replica  实例副本数。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号，满足版本语义，如1.0.0。。
    * configuration  configuration
    * description  描述。
    * externalAccesses  访问方式。
    * referResources  部署资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'environmentId' => 'getEnvironmentId',
            'flavorId' => 'getFlavorId',
            'replica' => 'getReplica',
            'artifacts' => 'getArtifacts',
            'version' => 'getVersion',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-z0-9-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9-]+$/.";
            }
        if ($this->container['environmentId'] === null) {
            $invalidProperties[] = "'environmentId' can't be null";
        }
            if ((mb_strlen($this->container['environmentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['replica'] === null) {
            $invalidProperties[] = "'replica' can't be null";
        }
        if ($this->container['artifacts'] === null) {
            $invalidProperties[] = "'artifacts' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^([0-9]+)(.[0-9]+){2,3}$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^([0-9]+)(.[0-9]+){2,3}$/.";
            }
        if ($this->container['referResources'] === null) {
            $invalidProperties[] = "'referResources' can't be null";
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
    *  应用组件实例名称。
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
    * @param string $name 应用组件实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets environmentId
    *  环境ID。
    *
    * @return string
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string $environmentId 环境ID。
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets flavorId
    *  flavorId
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets replica
    *  实例副本数。
    *
    * @return int
    */
    public function getReplica()
    {
        return $this->container['replica'];
    }

    /**
    * Sets replica
    *
    * @param int $replica 实例副本数。
    *
    * @return $this
    */
    public function setReplica($replica)
    {
        $this->container['replica'] = $replica;
        return $this;
    }

    /**
    * Gets artifacts
    *  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return map[string,object]
    */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
    * Sets artifacts
    *
    * @param map[string,object] $artifacts 组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return $this
    */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;
        return $this;
    }

    /**
    * Gets version
    *  应用组件版本号，满足版本语义，如1.0.0。。
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
    * @param string $version 应用组件版本号，满足版本语义，如1.0.0。。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceConfiguration|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceConfiguration|null $configuration configuration
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
    *  访问方式。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessesCreate[]|null
    */
    public function getExternalAccesses()
    {
        return $this->container['externalAccesses'];
    }

    /**
    * Sets externalAccesses
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessesCreate[]|null $externalAccesses 访问方式。
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
    *  部署资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[]
    */
    public function getReferResources()
    {
        return $this->container['referResources'];
    }

    /**
    * Sets referResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResourceCreate[] $referResources 部署资源。
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

