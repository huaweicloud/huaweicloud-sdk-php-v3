<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskTriggerVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskTriggerVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerSource  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    * artifactSourceSystem  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    * artifactType  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerSource' => 'string',
            'artifactSourceSystem' => 'string',
            'artifactType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerSource  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    * artifactSourceSystem  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    * artifactType  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerSource' => null,
        'artifactSourceSystem' => null,
        'artifactType' => null
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
    * triggerSource  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    * artifactSourceSystem  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    * artifactType  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerSource' => 'trigger_source',
            'artifactSourceSystem' => 'artifact_source_system',
            'artifactType' => 'artifact_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerSource  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    * artifactSourceSystem  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    * artifactType  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerSource' => 'setTriggerSource',
            'artifactSourceSystem' => 'setArtifactSourceSystem',
            'artifactType' => 'setArtifactType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerSource  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    * artifactSourceSystem  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    * artifactType  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerSource' => 'getTriggerSource',
            'artifactSourceSystem' => 'getArtifactSourceSystem',
            'artifactType' => 'getArtifactType'
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
        $this->container['triggerSource'] = isset($data['triggerSource']) ? $data['triggerSource'] : null;
        $this->container['artifactSourceSystem'] = isset($data['artifactSourceSystem']) ? $data['artifactSourceSystem'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
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
    * Gets triggerSource
    *  部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    *
    * @return string|null
    */
    public function getTriggerSource()
    {
        return $this->container['triggerSource'];
    }

    /**
    * Sets triggerSource
    *
    * @param string|null $triggerSource 部署任务允许执行的场景。其中0：所有执行请求均可，1：只允许流水线触发
    *
    * @return $this
    */
    public function setTriggerSource($triggerSource)
    {
        $this->container['triggerSource'] = $triggerSource;
        return $this;
    }

    /**
    * Gets artifactSourceSystem
    *  当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    *
    * @return string|null
    */
    public function getArtifactSourceSystem()
    {
        return $this->container['artifactSourceSystem'];
    }

    /**
    * Sets artifactSourceSystem
    *
    * @param string|null $artifactSourceSystem 当任务只允许流水线触发执行时，流水线传递的来源信息，当前只有CloudArtifact
    *
    * @return $this
    */
    public function setArtifactSourceSystem($artifactSourceSystem)
    {
        $this->container['artifactSourceSystem'] = $artifactSourceSystem;
        return $this;
    }

    /**
    * Gets artifactType
    *  当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @return string|null
    */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
    * Sets artifactType
    *
    * @param string|null $artifactType 当任务只允许流水线触发执行时，对应流水线源的制品仓库类型（generic、docker）
    *
    * @return $this
    */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;
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

