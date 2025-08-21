<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Control implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Control';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  控制策略ID。
    * name  控制策略名称。
    * description  控制策略描述。
    * guidance  控制策略必须性。
    * resource  治理资源。
    * framework  治理策略来自的框架。
    * service  控制策略所属服务。
    * implementation  策略类别。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  控制策略来源。
    * severity  控制策略严重性。
    * controlObjective  控制策略目标。
    * version  控制策略版本。
    * releaseDate  控制策略发布时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'name' => 'string',
            'description' => 'string',
            'guidance' => 'string',
            'resource' => 'string[]',
            'framework' => 'string[]',
            'service' => 'string',
            'implementation' => 'string',
            'behavior' => 'string',
            'owner' => 'string',
            'severity' => 'string',
            'controlObjective' => 'string',
            'version' => 'string',
            'releaseDate' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  控制策略ID。
    * name  控制策略名称。
    * description  控制策略描述。
    * guidance  控制策略必须性。
    * resource  治理资源。
    * framework  治理策略来自的框架。
    * service  控制策略所属服务。
    * implementation  策略类别。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  控制策略来源。
    * severity  控制策略严重性。
    * controlObjective  控制策略目标。
    * version  控制策略版本。
    * releaseDate  控制策略发布时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'name' => null,
        'description' => null,
        'guidance' => null,
        'resource' => null,
        'framework' => null,
        'service' => null,
        'implementation' => null,
        'behavior' => null,
        'owner' => null,
        'severity' => null,
        'controlObjective' => null,
        'version' => null,
        'releaseDate' => 'date-time'
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
    * identifier  控制策略ID。
    * name  控制策略名称。
    * description  控制策略描述。
    * guidance  控制策略必须性。
    * resource  治理资源。
    * framework  治理策略来自的框架。
    * service  控制策略所属服务。
    * implementation  策略类别。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  控制策略来源。
    * severity  控制策略严重性。
    * controlObjective  控制策略目标。
    * version  控制策略版本。
    * releaseDate  控制策略发布时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'name' => 'name',
            'description' => 'description',
            'guidance' => 'guidance',
            'resource' => 'resource',
            'framework' => 'framework',
            'service' => 'service',
            'implementation' => 'implementation',
            'behavior' => 'behavior',
            'owner' => 'owner',
            'severity' => 'severity',
            'controlObjective' => 'control_objective',
            'version' => 'version',
            'releaseDate' => 'release_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  控制策略ID。
    * name  控制策略名称。
    * description  控制策略描述。
    * guidance  控制策略必须性。
    * resource  治理资源。
    * framework  治理策略来自的框架。
    * service  控制策略所属服务。
    * implementation  策略类别。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  控制策略来源。
    * severity  控制策略严重性。
    * controlObjective  控制策略目标。
    * version  控制策略版本。
    * releaseDate  控制策略发布时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'name' => 'setName',
            'description' => 'setDescription',
            'guidance' => 'setGuidance',
            'resource' => 'setResource',
            'framework' => 'setFramework',
            'service' => 'setService',
            'implementation' => 'setImplementation',
            'behavior' => 'setBehavior',
            'owner' => 'setOwner',
            'severity' => 'setSeverity',
            'controlObjective' => 'setControlObjective',
            'version' => 'setVersion',
            'releaseDate' => 'setReleaseDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  控制策略ID。
    * name  控制策略名称。
    * description  控制策略描述。
    * guidance  控制策略必须性。
    * resource  治理资源。
    * framework  治理策略来自的框架。
    * service  控制策略所属服务。
    * implementation  策略类别。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  控制策略来源。
    * severity  控制策略严重性。
    * controlObjective  控制策略目标。
    * version  控制策略版本。
    * releaseDate  控制策略发布时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'name' => 'getName',
            'description' => 'getDescription',
            'guidance' => 'getGuidance',
            'resource' => 'getResource',
            'framework' => 'getFramework',
            'service' => 'getService',
            'implementation' => 'getImplementation',
            'behavior' => 'getBehavior',
            'owner' => 'getOwner',
            'severity' => 'getSeverity',
            'controlObjective' => 'getControlObjective',
            'version' => 'getVersion',
            'releaseDate' => 'getReleaseDate'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['guidance'] = isset($data['guidance']) ? $data['guidance'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['implementation'] = isset($data['implementation']) ? $data['implementation'] : null;
        $this->container['behavior'] = isset($data['behavior']) ? $data['behavior'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['controlObjective'] = isset($data['controlObjective']) ? $data['controlObjective'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 128)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) > 64)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) < 1)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) > 64)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) < 1)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['implementation']) && (mb_strlen($this->container['implementation']) > 64)) {
                $invalidProperties[] = "invalid value for 'implementation', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['implementation']) && (mb_strlen($this->container['implementation']) < 1)) {
                $invalidProperties[] = "invalid value for 'implementation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['behavior']) && (mb_strlen($this->container['behavior']) > 64)) {
                $invalidProperties[] = "invalid value for 'behavior', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['behavior']) && (mb_strlen($this->container['behavior']) < 1)) {
                $invalidProperties[] = "invalid value for 'behavior', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 128)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 1)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['controlObjective']) && (mb_strlen($this->container['controlObjective']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlObjective', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlObjective']) && (mb_strlen($this->container['controlObjective']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlObjective', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets identifier
    *  控制策略ID。
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier 控制策略ID。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets name
    *  控制策略名称。
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
    * @param string|null $name 控制策略名称。
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
    *  控制策略描述。
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
    * @param string|null $description 控制策略描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets guidance
    *  控制策略必须性。
    *
    * @return string|null
    */
    public function getGuidance()
    {
        return $this->container['guidance'];
    }

    /**
    * Sets guidance
    *
    * @param string|null $guidance 控制策略必须性。
    *
    * @return $this
    */
    public function setGuidance($guidance)
    {
        $this->container['guidance'] = $guidance;
        return $this;
    }

    /**
    * Gets resource
    *  治理资源。
    *
    * @return string[]|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string[]|null $resource 治理资源。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets framework
    *  治理策略来自的框架。
    *
    * @return string[]|null
    */
    public function getFramework()
    {
        return $this->container['framework'];
    }

    /**
    * Sets framework
    *
    * @param string[]|null $framework 治理策略来自的框架。
    *
    * @return $this
    */
    public function setFramework($framework)
    {
        $this->container['framework'] = $framework;
        return $this;
    }

    /**
    * Gets service
    *  控制策略所属服务。
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 控制策略所属服务。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets implementation
    *  策略类别。
    *
    * @return string|null
    */
    public function getImplementation()
    {
        return $this->container['implementation'];
    }

    /**
    * Sets implementation
    *
    * @param string|null $implementation 策略类别。
    *
    * @return $this
    */
    public function setImplementation($implementation)
    {
        $this->container['implementation'] = $implementation;
        return $this;
    }

    /**
    * Gets behavior
    *  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    *
    * @return string|null
    */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
    * Sets behavior
    *
    * @param string|null $behavior 控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    *
    * @return $this
    */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;
        return $this;
    }

    /**
    * Gets owner
    *  控制策略来源。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 控制策略来源。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets severity
    *  控制策略严重性。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 控制策略严重性。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets controlObjective
    *  控制策略目标。
    *
    * @return string|null
    */
    public function getControlObjective()
    {
        return $this->container['controlObjective'];
    }

    /**
    * Sets controlObjective
    *
    * @param string|null $controlObjective 控制策略目标。
    *
    * @return $this
    */
    public function setControlObjective($controlObjective)
    {
        $this->container['controlObjective'] = $controlObjective;
        return $this;
    }

    /**
    * Gets version
    *  控制策略版本。
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
    * @param string|null $version 控制策略版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets releaseDate
    *  控制策略发布时间。
    *
    * @return \DateTime|null
    */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
    * Sets releaseDate
    *
    * @param \DateTime|null $releaseDate 控制策略发布时间。
    *
    * @return $this
    */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;
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

