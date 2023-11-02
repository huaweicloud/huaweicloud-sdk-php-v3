<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogMetaDataEventRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogMetaDataEventRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎服务名称,DLI DWS MRS
    * engineVersion  引擎版本信息
    * instanceId  引擎的实例ID, MRS DWS必填
    * projectId  项目ID，DLI必填
    * events  资产信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'engineVersion' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'events' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogMetaDataEventInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎服务名称,DLI DWS MRS
    * engineVersion  引擎版本信息
    * instanceId  引擎的实例ID, MRS DWS必填
    * projectId  项目ID，DLI必填
    * events  资产信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'engineVersion' => null,
        'instanceId' => null,
        'projectId' => null,
        'events' => null
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
    * engine  引擎服务名称,DLI DWS MRS
    * engineVersion  引擎版本信息
    * instanceId  引擎的实例ID, MRS DWS必填
    * projectId  项目ID，DLI必填
    * events  资产信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎服务名称,DLI DWS MRS
    * engineVersion  引擎版本信息
    * instanceId  引擎的实例ID, MRS DWS必填
    * projectId  项目ID，DLI必填
    * events  资产信息
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎服务名称,DLI DWS MRS
    * engineVersion  引擎版本信息
    * instanceId  引擎的实例ID, MRS DWS必填
    * projectId  项目ID，DLI必填
    * events  资产信息
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'events' => 'getEvents'
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
    const ENGINE_DLI = 'DLI';
    const ENGINE_MRS = 'MRS';
    const ENGINE_DWS = 'DWS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_DLI,
            self::ENGINE_MRS,
            self::ENGINE_DWS,
        ];
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) > 30)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    * Gets engine
    *  引擎服务名称,DLI DWS MRS
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 引擎服务名称,DLI DWS MRS
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本信息
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本信息
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets instanceId
    *  引擎的实例ID, MRS DWS必填
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 引擎的实例ID, MRS DWS必填
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，DLI必填
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID，DLI必填
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets events
    *  资产信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogMetaDataEventInfo[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogMetaDataEventInfo[]|null $events 资产信息
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
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

