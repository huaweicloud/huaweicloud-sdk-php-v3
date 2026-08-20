<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionModuleProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionModuleProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildManifestVersion  构建清单版本
    * name  名称
    * description  描述
    * uuid  任务uuid
    * operationSystem  操作系统
    * imageSource  镜像来源
    * image  镜像名
    * icon  图标路径
    * environmentVariables  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    * execution  execution
    * parameters  用户可配置参数列表。
    * tags  内部标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildManifestVersion' => 'string',
            'name' => 'string',
            'description' => 'string',
            'uuid' => 'string',
            'operationSystem' => 'string',
            'imageSource' => 'string',
            'image' => 'string',
            'icon' => 'string',
            'environmentVariables' => 'map[string,map[string,string]]',
            'execution' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExecution',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameter[]',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildManifestVersion  构建清单版本
    * name  名称
    * description  描述
    * uuid  任务uuid
    * operationSystem  操作系统
    * imageSource  镜像来源
    * image  镜像名
    * icon  图标路径
    * environmentVariables  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    * execution  execution
    * parameters  用户可配置参数列表。
    * tags  内部标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildManifestVersion' => null,
        'name' => null,
        'description' => null,
        'uuid' => null,
        'operationSystem' => null,
        'imageSource' => null,
        'image' => null,
        'icon' => null,
        'environmentVariables' => null,
        'execution' => null,
        'parameters' => null,
        'tags' => null
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
    * buildManifestVersion  构建清单版本
    * name  名称
    * description  描述
    * uuid  任务uuid
    * operationSystem  操作系统
    * imageSource  镜像来源
    * image  镜像名
    * icon  图标路径
    * environmentVariables  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    * execution  execution
    * parameters  用户可配置参数列表。
    * tags  内部标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildManifestVersion' => 'build_manifestVersion',
            'name' => 'name',
            'description' => 'description',
            'uuid' => 'uuid',
            'operationSystem' => 'operationSystem',
            'imageSource' => 'imageSource',
            'image' => 'image',
            'icon' => 'icon',
            'environmentVariables' => 'environmentVariables',
            'execution' => 'execution',
            'parameters' => 'parameters',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildManifestVersion  构建清单版本
    * name  名称
    * description  描述
    * uuid  任务uuid
    * operationSystem  操作系统
    * imageSource  镜像来源
    * image  镜像名
    * icon  图标路径
    * environmentVariables  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    * execution  execution
    * parameters  用户可配置参数列表。
    * tags  内部标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'buildManifestVersion' => 'setBuildManifestVersion',
            'name' => 'setName',
            'description' => 'setDescription',
            'uuid' => 'setUuid',
            'operationSystem' => 'setOperationSystem',
            'imageSource' => 'setImageSource',
            'image' => 'setImage',
            'icon' => 'setIcon',
            'environmentVariables' => 'setEnvironmentVariables',
            'execution' => 'setExecution',
            'parameters' => 'setParameters',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildManifestVersion  构建清单版本
    * name  名称
    * description  描述
    * uuid  任务uuid
    * operationSystem  操作系统
    * imageSource  镜像来源
    * image  镜像名
    * icon  图标路径
    * environmentVariables  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    * execution  execution
    * parameters  用户可配置参数列表。
    * tags  内部标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'buildManifestVersion' => 'getBuildManifestVersion',
            'name' => 'getName',
            'description' => 'getDescription',
            'uuid' => 'getUuid',
            'operationSystem' => 'getOperationSystem',
            'imageSource' => 'getImageSource',
            'image' => 'getImage',
            'icon' => 'getIcon',
            'environmentVariables' => 'getEnvironmentVariables',
            'execution' => 'getExecution',
            'parameters' => 'getParameters',
            'tags' => 'getTags'
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
        $this->container['buildManifestVersion'] = isset($data['buildManifestVersion']) ? $data['buildManifestVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['operationSystem'] = isset($data['operationSystem']) ? $data['operationSystem'] : null;
        $this->container['imageSource'] = isset($data['imageSource']) ? $data['imageSource'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['environmentVariables'] = isset($data['environmentVariables']) ? $data['environmentVariables'] : null;
        $this->container['execution'] = isset($data['execution']) ? $data['execution'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets buildManifestVersion
    *  构建清单版本
    *
    * @return string|null
    */
    public function getBuildManifestVersion()
    {
        return $this->container['buildManifestVersion'];
    }

    /**
    * Sets buildManifestVersion
    *
    * @param string|null $buildManifestVersion 构建清单版本
    *
    * @return $this
    */
    public function setBuildManifestVersion($buildManifestVersion)
    {
        $this->container['buildManifestVersion'] = $buildManifestVersion;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets uuid
    *  任务uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 任务uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets operationSystem
    *  操作系统
    *
    * @return string|null
    */
    public function getOperationSystem()
    {
        return $this->container['operationSystem'];
    }

    /**
    * Sets operationSystem
    *
    * @param string|null $operationSystem 操作系统
    *
    * @return $this
    */
    public function setOperationSystem($operationSystem)
    {
        $this->container['operationSystem'] = $operationSystem;
        return $this;
    }

    /**
    * Gets imageSource
    *  镜像来源
    *
    * @return string|null
    */
    public function getImageSource()
    {
        return $this->container['imageSource'];
    }

    /**
    * Sets imageSource
    *
    * @param string|null $imageSource 镜像来源
    *
    * @return $this
    */
    public function setImageSource($imageSource)
    {
        $this->container['imageSource'] = $imageSource;
        return $this;
    }

    /**
    * Gets image
    *  镜像名
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 镜像名
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets icon
    *  图标路径
    *
    * @return string|null
    */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
    * Sets icon
    *
    * @param string|null $icon 图标路径
    *
    * @return $this
    */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;
        return $this;
    }

    /**
    * Gets environmentVariables
    *  环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    *
    * @return map[string,map[string,string]]|null
    */
    public function getEnvironmentVariables()
    {
        return $this->container['environmentVariables'];
    }

    /**
    * Sets environmentVariables
    *
    * @param map[string,map[string,string]]|null $environmentVariables 环境变量，按region映射。键为变量类别(如registry/mirror)，值为region到配置命令的映射。
    *
    * @return $this
    */
    public function setEnvironmentVariables($environmentVariables)
    {
        $this->container['environmentVariables'] = $environmentVariables;
        return $this;
    }

    /**
    * Gets execution
    *  execution
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExecution|null
    */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
    * Sets execution
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExecution|null $execution execution
    *
    * @return $this
    */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;
        return $this;
    }

    /**
    * Gets parameters
    *  用户可配置参数列表。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameter[]|null $parameters 用户可配置参数列表。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets tags
    *  内部标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 内部标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

