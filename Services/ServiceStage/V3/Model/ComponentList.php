<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  name
    * labels  labels
    * runtimeStack  runtimeStack
    * status  status
    * environmentName  environmentName
    * applicationName  applicationName
    * environmentId  environmentId
    * applicationId  applicationId
    * id  id
    * creator  creator
    * source  source
    * version  version
    * platformType  platformType
    * externalAccesses  externalAccesses
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'labels' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]',
            'runtimeStack' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack',
            'status' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView',
            'environmentName' => 'string',
            'applicationName' => 'string',
            'environmentId' => 'string',
            'applicationId' => 'string',
            'id' => 'string',
            'creator' => 'string',
            'source' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject',
            'version' => 'string',
            'platformType' => 'string',
            'externalAccesses' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ExternalAccesses[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  name
    * labels  labels
    * runtimeStack  runtimeStack
    * status  status
    * environmentName  environmentName
    * applicationName  applicationName
    * environmentId  environmentId
    * applicationId  applicationId
    * id  id
    * creator  creator
    * source  source
    * version  version
    * platformType  platformType
    * externalAccesses  externalAccesses
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'labels' => null,
        'runtimeStack' => null,
        'status' => null,
        'environmentName' => null,
        'applicationName' => null,
        'environmentId' => null,
        'applicationId' => null,
        'id' => null,
        'creator' => null,
        'source' => null,
        'version' => null,
        'platformType' => null,
        'externalAccesses' => null
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
    * name  name
    * labels  labels
    * runtimeStack  runtimeStack
    * status  status
    * environmentName  environmentName
    * applicationName  applicationName
    * environmentId  environmentId
    * applicationId  applicationId
    * id  id
    * creator  creator
    * source  source
    * version  version
    * platformType  platformType
    * externalAccesses  externalAccesses
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'labels' => 'labels',
            'runtimeStack' => 'runtime_stack',
            'status' => 'status',
            'environmentName' => 'environment_name',
            'applicationName' => 'application_name',
            'environmentId' => 'environment_id',
            'applicationId' => 'application_id',
            'id' => 'id',
            'creator' => 'creator',
            'source' => 'source',
            'version' => 'version',
            'platformType' => 'platform_type',
            'externalAccesses' => 'external_accesses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  name
    * labels  labels
    * runtimeStack  runtimeStack
    * status  status
    * environmentName  environmentName
    * applicationName  applicationName
    * environmentId  environmentId
    * applicationId  applicationId
    * id  id
    * creator  creator
    * source  source
    * version  version
    * platformType  platformType
    * externalAccesses  externalAccesses
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'labels' => 'setLabels',
            'runtimeStack' => 'setRuntimeStack',
            'status' => 'setStatus',
            'environmentName' => 'setEnvironmentName',
            'applicationName' => 'setApplicationName',
            'environmentId' => 'setEnvironmentId',
            'applicationId' => 'setApplicationId',
            'id' => 'setId',
            'creator' => 'setCreator',
            'source' => 'setSource',
            'version' => 'setVersion',
            'platformType' => 'setPlatformType',
            'externalAccesses' => 'setExternalAccesses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  name
    * labels  labels
    * runtimeStack  runtimeStack
    * status  status
    * environmentName  environmentName
    * applicationName  applicationName
    * environmentId  environmentId
    * applicationId  applicationId
    * id  id
    * creator  creator
    * source  source
    * version  version
    * platformType  platformType
    * externalAccesses  externalAccesses
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'labels' => 'getLabels',
            'runtimeStack' => 'getRuntimeStack',
            'status' => 'getStatus',
            'environmentName' => 'getEnvironmentName',
            'applicationName' => 'getApplicationName',
            'environmentId' => 'getEnvironmentId',
            'applicationId' => 'getApplicationId',
            'id' => 'getId',
            'creator' => 'getCreator',
            'source' => 'getSource',
            'version' => 'getVersion',
            'platformType' => 'getPlatformType',
            'externalAccesses' => 'getExternalAccesses'
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['runtimeStack'] = isset($data['runtimeStack']) ? $data['runtimeStack'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['environmentName'] = isset($data['environmentName']) ? $data['environmentName'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['platformType'] = isset($data['platformType']) ? $data['platformType'] : null;
        $this->container['externalAccesses'] = isset($data['externalAccesses']) ? $data['externalAccesses'] : null;
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
            if (!preg_match("/^[a-z0-9_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9_-]+$/.";
            }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
    *  name
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
    * @param string $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets labels
    *  labels
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]|null $labels labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets runtimeStack
    *  runtimeStack
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack|null
    */
    public function getRuntimeStack()
    {
        return $this->container['runtimeStack'];
    }

    /**
    * Sets runtimeStack
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack|null $runtimeStack runtimeStack
    *
    * @return $this
    */
    public function setRuntimeStack($runtimeStack)
    {
        $this->container['runtimeStack'] = $runtimeStack;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets environmentName
    *  environmentName
    *
    * @return string|null
    */
    public function getEnvironmentName()
    {
        return $this->container['environmentName'];
    }

    /**
    * Sets environmentName
    *
    * @param string|null $environmentName environmentName
    *
    * @return $this
    */
    public function setEnvironmentName($environmentName)
    {
        $this->container['environmentName'] = $environmentName;
        return $this;
    }

    /**
    * Gets applicationName
    *  applicationName
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName applicationName
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets environmentId
    *  environmentId
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId environmentId
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  applicationId
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
    * @param string|null $applicationId applicationId
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets platformType
    *  platformType
    *
    * @return string|null
    */
    public function getPlatformType()
    {
        return $this->container['platformType'];
    }

    /**
    * Sets platformType
    *
    * @param string|null $platformType platformType
    *
    * @return $this
    */
    public function setPlatformType($platformType)
    {
        $this->container['platformType'] = $platformType;
        return $this;
    }

    /**
    * Gets externalAccesses
    *  externalAccesses
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ExternalAccesses[]|null
    */
    public function getExternalAccesses()
    {
        return $this->container['externalAccesses'];
    }

    /**
    * Sets externalAccesses
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ExternalAccesses[]|null $externalAccesses externalAccesses
    *
    * @return $this
    */
    public function setExternalAccesses($externalAccesses)
    {
        $this->container['externalAccesses'] = $externalAccesses;
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

