<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuntimeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuntimeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * runtimeName  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    * runtimePath  运行时路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'runtimeName' => 'string',
            'runtimePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * runtimeName  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    * runtimePath  运行时路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'runtimeName' => null,
        'runtimePath' => null
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
    * runtimeName  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    * runtimePath  运行时路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'runtimeName' => 'runtime_name',
            'runtimePath' => 'runtime_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * runtimeName  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    * runtimePath  运行时路径
    *
    * @var string[]
    */
    protected static $setters = [
            'runtimeName' => 'setRuntimeName',
            'runtimePath' => 'setRuntimePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * runtimeName  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    * runtimePath  运行时路径
    *
    * @var string[]
    */
    protected static $getters = [
            'runtimeName' => 'getRuntimeName',
            'runtimePath' => 'getRuntimePath'
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
    const RUNTIME_NAME_CRIO_ENDPOINT = 'crio_endpoint';
    const RUNTIME_NAME_CONTAINERD_ENDPOINT = 'containerd_endpoint';
    const RUNTIME_NAME_DOCKER_ENDPOINT = 'docker_endpoint';
    const RUNTIME_NAME_ISULAD_ENDPOINT = 'isulad_endpoint';
    const RUNTIME_NAME_PODMAN_ENDPOINT = 'podman_endpoint';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeNameAllowableValues()
    {
        return [
            self::RUNTIME_NAME_CRIO_ENDPOINT,
            self::RUNTIME_NAME_CONTAINERD_ENDPOINT,
            self::RUNTIME_NAME_DOCKER_ENDPOINT,
            self::RUNTIME_NAME_ISULAD_ENDPOINT,
            self::RUNTIME_NAME_PODMAN_ENDPOINT,
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
        $this->container['runtimeName'] = isset($data['runtimeName']) ? $data['runtimeName'] : null;
        $this->container['runtimePath'] = isset($data['runtimePath']) ? $data['runtimePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuntimeNameAllowableValues();
                if (!is_null($this->container['runtimeName']) && !in_array($this->container['runtimeName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtimeName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['runtimeName']) && !preg_match("/^.*$/", $this->container['runtimeName'])) {
                $invalidProperties[] = "invalid value for 'runtimeName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['runtimePath']) && !preg_match("/^.*$/", $this->container['runtimePath'])) {
                $invalidProperties[] = "invalid value for 'runtimePath', must be conform to the pattern /^.*$/.";
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
    * Gets runtimeName
    *  运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    *
    * @return string|null
    */
    public function getRuntimeName()
    {
        return $this->container['runtimeName'];
    }

    /**
    * Sets runtimeName
    *
    * @param string|null $runtimeName 运行时名称：   - crio_endpoint：CRIO   - containerd_endpoint：Containerd   - docker_endpoint：Docker   - isulad_endpoint：Isulad   - podman_endpoint：Podman
    *
    * @return $this
    */
    public function setRuntimeName($runtimeName)
    {
        $this->container['runtimeName'] = $runtimeName;
        return $this;
    }

    /**
    * Gets runtimePath
    *  运行时路径
    *
    * @return string|null
    */
    public function getRuntimePath()
    {
        return $this->container['runtimePath'];
    }

    /**
    * Sets runtimePath
    *
    * @param string|null $runtimePath 运行时路径
    *
    * @return $this
    */
    public function setRuntimePath($runtimePath)
    {
        $this->container['runtimePath'] = $runtimePath;
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

