<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Build_parameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * artifactNamespace  artifactNamespace
    * buildCmd  buildCmd
    * clusterId  clusterId
    * dockerfilePath  dockerfilePath
    * environmentId  构建环境，选择其中的k8s集群进行构建
    * nodeLabelSelector  nodeLabelSelector
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'artifactNamespace' => 'string',
            'buildCmd' => 'string',
            'clusterId' => 'string',
            'dockerfilePath' => 'string',
            'environmentId' => 'string',
            'nodeLabelSelector' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * artifactNamespace  artifactNamespace
    * buildCmd  buildCmd
    * clusterId  clusterId
    * dockerfilePath  dockerfilePath
    * environmentId  构建环境，选择其中的k8s集群进行构建
    * nodeLabelSelector  nodeLabelSelector
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'artifactNamespace' => null,
        'buildCmd' => null,
        'clusterId' => null,
        'dockerfilePath' => null,
        'environmentId' => null,
        'nodeLabelSelector' => null
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
    * artifactNamespace  artifactNamespace
    * buildCmd  buildCmd
    * clusterId  clusterId
    * dockerfilePath  dockerfilePath
    * environmentId  构建环境，选择其中的k8s集群进行构建
    * nodeLabelSelector  nodeLabelSelector
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'artifactNamespace' => 'artifact_namespace',
            'buildCmd' => 'build_cmd',
            'clusterId' => 'cluster_id',
            'dockerfilePath' => 'dockerfile_path',
            'environmentId' => 'environment_id',
            'nodeLabelSelector' => 'node_label_selector'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * artifactNamespace  artifactNamespace
    * buildCmd  buildCmd
    * clusterId  clusterId
    * dockerfilePath  dockerfilePath
    * environmentId  构建环境，选择其中的k8s集群进行构建
    * nodeLabelSelector  nodeLabelSelector
    *
    * @var string[]
    */
    protected static $setters = [
            'artifactNamespace' => 'setArtifactNamespace',
            'buildCmd' => 'setBuildCmd',
            'clusterId' => 'setClusterId',
            'dockerfilePath' => 'setDockerfilePath',
            'environmentId' => 'setEnvironmentId',
            'nodeLabelSelector' => 'setNodeLabelSelector'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * artifactNamespace  artifactNamespace
    * buildCmd  buildCmd
    * clusterId  clusterId
    * dockerfilePath  dockerfilePath
    * environmentId  构建环境，选择其中的k8s集群进行构建
    * nodeLabelSelector  nodeLabelSelector
    *
    * @var string[]
    */
    protected static $getters = [
            'artifactNamespace' => 'getArtifactNamespace',
            'buildCmd' => 'getBuildCmd',
            'clusterId' => 'getClusterId',
            'dockerfilePath' => 'getDockerfilePath',
            'environmentId' => 'getEnvironmentId',
            'nodeLabelSelector' => 'getNodeLabelSelector'
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
        $this->container['artifactNamespace'] = isset($data['artifactNamespace']) ? $data['artifactNamespace'] : null;
        $this->container['buildCmd'] = isset($data['buildCmd']) ? $data['buildCmd'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['dockerfilePath'] = isset($data['dockerfilePath']) ? $data['dockerfilePath'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['nodeLabelSelector'] = isset($data['nodeLabelSelector']) ? $data['nodeLabelSelector'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['artifactNamespace']) && (mb_strlen($this->container['artifactNamespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'artifactNamespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['buildCmd']) && (mb_strlen($this->container['buildCmd']) > 512)) {
                $invalidProperties[] = "invalid value for 'buildCmd', the character length must be smaller than or equal to 512.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if (!is_null($this->container['dockerfilePath']) && (mb_strlen($this->container['dockerfilePath']) > 128)) {
                $invalidProperties[] = "invalid value for 'dockerfilePath', the character length must be smaller than or equal to 128.";
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
    * Gets artifactNamespace
    *  artifactNamespace
    *
    * @return string|null
    */
    public function getArtifactNamespace()
    {
        return $this->container['artifactNamespace'];
    }

    /**
    * Sets artifactNamespace
    *
    * @param string|null $artifactNamespace artifactNamespace
    *
    * @return $this
    */
    public function setArtifactNamespace($artifactNamespace)
    {
        $this->container['artifactNamespace'] = $artifactNamespace;
        return $this;
    }

    /**
    * Gets buildCmd
    *  buildCmd
    *
    * @return string|null
    */
    public function getBuildCmd()
    {
        return $this->container['buildCmd'];
    }

    /**
    * Sets buildCmd
    *
    * @param string|null $buildCmd buildCmd
    *
    * @return $this
    */
    public function setBuildCmd($buildCmd)
    {
        $this->container['buildCmd'] = $buildCmd;
        return $this;
    }

    /**
    * Gets clusterId
    *  clusterId
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId clusterId
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets dockerfilePath
    *  dockerfilePath
    *
    * @return string|null
    */
    public function getDockerfilePath()
    {
        return $this->container['dockerfilePath'];
    }

    /**
    * Sets dockerfilePath
    *
    * @param string|null $dockerfilePath dockerfilePath
    *
    * @return $this
    */
    public function setDockerfilePath($dockerfilePath)
    {
        $this->container['dockerfilePath'] = $dockerfilePath;
        return $this;
    }

    /**
    * Gets environmentId
    *  构建环境，选择其中的k8s集群进行构建
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
    * @param string|null $environmentId 构建环境，选择其中的k8s集群进行构建
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets nodeLabelSelector
    *  nodeLabelSelector
    *
    * @return map[string,string]|null
    */
    public function getNodeLabelSelector()
    {
        return $this->container['nodeLabelSelector'];
    }

    /**
    * Sets nodeLabelSelector
    *
    * @param map[string,string]|null $nodeLabelSelector nodeLabelSelector
    *
    * @return $this
    */
    public function setNodeLabelSelector($nodeLabelSelector)
    {
        $this->container['nodeLabelSelector'] = $nodeLabelSelector;
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

