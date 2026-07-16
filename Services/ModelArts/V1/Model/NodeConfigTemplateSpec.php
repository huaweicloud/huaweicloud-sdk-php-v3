<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeConfigTemplateSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeConfigTemplateSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    * dockerLvmConfig  dockerLvmConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dockerBaseSize' => 'int',
            'dockerLvmConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DockerLvmConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    * dockerLvmConfig  dockerLvmConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dockerBaseSize' => 'int32',
        'dockerLvmConfig' => null
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
    * dockerBaseSize  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    * dockerLvmConfig  dockerLvmConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dockerBaseSize' => 'dockerBaseSize',
            'dockerLvmConfig' => 'dockerLvmConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dockerBaseSize  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    * dockerLvmConfig  dockerLvmConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'dockerBaseSize' => 'setDockerBaseSize',
            'dockerLvmConfig' => 'setDockerLvmConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dockerBaseSize  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    * dockerLvmConfig  dockerLvmConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'dockerBaseSize' => 'getDockerBaseSize',
            'dockerLvmConfig' => 'getDockerLvmConfig'
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
        $this->container['dockerBaseSize'] = isset($data['dockerBaseSize']) ? $data['dockerBaseSize'] : null;
        $this->container['dockerLvmConfig'] = isset($data['dockerLvmConfig']) ? $data['dockerLvmConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dockerBaseSize'] === null) {
            $invalidProperties[] = "'dockerBaseSize' can't be null";
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
    * Gets dockerBaseSize
    *  **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getDockerBaseSize()
    {
        return $this->container['dockerBaseSize'];
    }

    /**
    * Sets dockerBaseSize
    *
    * @param int $dockerBaseSize **参数解释**： 资源池节点上单容器的可用磁盘空间大小，单位G。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDockerBaseSize($dockerBaseSize)
    {
        $this->container['dockerBaseSize'] = $dockerBaseSize;
        return $this;
    }

    /**
    * Gets dockerLvmConfig
    *  dockerLvmConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DockerLvmConfig|null
    */
    public function getDockerLvmConfig()
    {
        return $this->container['dockerLvmConfig'];
    }

    /**
    * Sets dockerLvmConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DockerLvmConfig|null $dockerLvmConfig dockerLvmConfig
    *
    * @return $this
    */
    public function setDockerLvmConfig($dockerLvmConfig)
    {
        $this->container['dockerLvmConfig'] = $dockerLvmConfig;
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

