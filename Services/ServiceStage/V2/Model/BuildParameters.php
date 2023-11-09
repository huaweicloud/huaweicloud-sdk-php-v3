<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

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
    * buildCmd  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    * dockerfilePath  dockerfile地址。默认是根目录./。
    * artifactNamespace  构建归档组织，默认cas_{project_id}。
    * clusterId  指定构建集群的id。
    * nodeLabelSelector  指定构建集群的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildCmd' => 'string',
            'dockerfilePath' => 'string',
            'artifactNamespace' => 'string',
            'clusterId' => 'string',
            'nodeLabelSelector' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildCmd  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    * dockerfilePath  dockerfile地址。默认是根目录./。
    * artifactNamespace  构建归档组织，默认cas_{project_id}。
    * clusterId  指定构建集群的id。
    * nodeLabelSelector  指定构建集群的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildCmd' => null,
        'dockerfilePath' => null,
        'artifactNamespace' => null,
        'clusterId' => null,
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
    * buildCmd  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    * dockerfilePath  dockerfile地址。默认是根目录./。
    * artifactNamespace  构建归档组织，默认cas_{project_id}。
    * clusterId  指定构建集群的id。
    * nodeLabelSelector  指定构建集群的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildCmd' => 'build_cmd',
            'dockerfilePath' => 'dockerfile_path',
            'artifactNamespace' => 'artifact_namespace',
            'clusterId' => 'cluster_id',
            'nodeLabelSelector' => 'node_label_selector'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildCmd  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    * dockerfilePath  dockerfile地址。默认是根目录./。
    * artifactNamespace  构建归档组织，默认cas_{project_id}。
    * clusterId  指定构建集群的id。
    * nodeLabelSelector  指定构建集群的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'buildCmd' => 'setBuildCmd',
            'dockerfilePath' => 'setDockerfilePath',
            'artifactNamespace' => 'setArtifactNamespace',
            'clusterId' => 'setClusterId',
            'nodeLabelSelector' => 'setNodeLabelSelector'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildCmd  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    * dockerfilePath  dockerfile地址。默认是根目录./。
    * artifactNamespace  构建归档组织，默认cas_{project_id}。
    * clusterId  指定构建集群的id。
    * nodeLabelSelector  指定构建集群的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'buildCmd' => 'getBuildCmd',
            'dockerfilePath' => 'getDockerfilePath',
            'artifactNamespace' => 'getArtifactNamespace',
            'clusterId' => 'getClusterId',
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
        $this->container['buildCmd'] = isset($data['buildCmd']) ? $data['buildCmd'] : null;
        $this->container['dockerfilePath'] = isset($data['dockerfilePath']) ? $data['dockerfilePath'] : null;
        $this->container['artifactNamespace'] = isset($data['artifactNamespace']) ? $data['artifactNamespace'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
    * Gets buildCmd
    *  编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
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
    * @param string|null $buildCmd 编译命令。默认：  1、根目录存在build.sh：./build.sh  2、根据运行系统，示例如下：  Java和Tomcat：mvn clean package  Nodejs: npm build
    *
    * @return $this
    */
    public function setBuildCmd($buildCmd)
    {
        $this->container['buildCmd'] = $buildCmd;
        return $this;
    }

    /**
    * Gets dockerfilePath
    *  dockerfile地址。默认是根目录./。
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
    * @param string|null $dockerfilePath dockerfile地址。默认是根目录./。
    *
    * @return $this
    */
    public function setDockerfilePath($dockerfilePath)
    {
        $this->container['dockerfilePath'] = $dockerfilePath;
        return $this;
    }

    /**
    * Gets artifactNamespace
    *  构建归档组织，默认cas_{project_id}。
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
    * @param string|null $artifactNamespace 构建归档组织，默认cas_{project_id}。
    *
    * @return $this
    */
    public function setArtifactNamespace($artifactNamespace)
    {
        $this->container['artifactNamespace'] = $artifactNamespace;
        return $this;
    }

    /**
    * Gets clusterId
    *  指定构建集群的id。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 指定构建集群的id。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets nodeLabelSelector
    *  指定构建集群的id。
    *
    * @return object|null
    */
    public function getNodeLabelSelector()
    {
        return $this->container['nodeLabelSelector'];
    }

    /**
    * Sets nodeLabelSelector
    *
    * @param object|null $nodeLabelSelector 指定构建集群的id。
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

