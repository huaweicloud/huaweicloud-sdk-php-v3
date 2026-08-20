<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionModule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseUrl  基础url
    * description  描述
    * id  id
    * location  扩展点
    * moduleId  模块id
    * name  名称
    * properties  properties
    * publisher  发布商
    * type  类型
    * version  版本
    * tags  标签。
    * urlRelative  插件链接地址
    * propertiesList  多版本属性列表
    * manifestVersion  摘要版本号
    * categories  分类。
    * target  目标。预留字段，通常为空。
    * productLine  产品线。预留字段，通常为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseUrl' => 'string',
            'description' => 'string',
            'id' => 'int',
            'location' => 'string',
            'moduleId' => 'string',
            'name' => 'string',
            'properties' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionModuleProperties',
            'publisher' => 'string',
            'type' => 'string',
            'version' => 'string',
            'tags' => 'string[]',
            'urlRelative' => 'string',
            'propertiesList' => 'object[]',
            'manifestVersion' => 'string',
            'categories' => 'string[]',
            'target' => 'string',
            'productLine' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseUrl  基础url
    * description  描述
    * id  id
    * location  扩展点
    * moduleId  模块id
    * name  名称
    * properties  properties
    * publisher  发布商
    * type  类型
    * version  版本
    * tags  标签。
    * urlRelative  插件链接地址
    * propertiesList  多版本属性列表
    * manifestVersion  摘要版本号
    * categories  分类。
    * target  目标。预留字段，通常为空。
    * productLine  产品线。预留字段，通常为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseUrl' => null,
        'description' => null,
        'id' => 'int32',
        'location' => null,
        'moduleId' => null,
        'name' => null,
        'properties' => null,
        'publisher' => null,
        'type' => null,
        'version' => null,
        'tags' => null,
        'urlRelative' => null,
        'propertiesList' => null,
        'manifestVersion' => null,
        'categories' => null,
        'target' => null,
        'productLine' => null
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
    * baseUrl  基础url
    * description  描述
    * id  id
    * location  扩展点
    * moduleId  模块id
    * name  名称
    * properties  properties
    * publisher  发布商
    * type  类型
    * version  版本
    * tags  标签。
    * urlRelative  插件链接地址
    * propertiesList  多版本属性列表
    * manifestVersion  摘要版本号
    * categories  分类。
    * target  目标。预留字段，通常为空。
    * productLine  产品线。预留字段，通常为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseUrl' => 'base_url',
            'description' => 'description',
            'id' => 'id',
            'location' => 'location',
            'moduleId' => 'module_id',
            'name' => 'name',
            'properties' => 'properties',
            'publisher' => 'publisher',
            'type' => 'type',
            'version' => 'version',
            'tags' => 'tags',
            'urlRelative' => 'url_relative',
            'propertiesList' => 'properties_list',
            'manifestVersion' => 'manifest_version',
            'categories' => 'categories',
            'target' => 'target',
            'productLine' => 'product_line'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseUrl  基础url
    * description  描述
    * id  id
    * location  扩展点
    * moduleId  模块id
    * name  名称
    * properties  properties
    * publisher  发布商
    * type  类型
    * version  版本
    * tags  标签。
    * urlRelative  插件链接地址
    * propertiesList  多版本属性列表
    * manifestVersion  摘要版本号
    * categories  分类。
    * target  目标。预留字段，通常为空。
    * productLine  产品线。预留字段，通常为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'baseUrl' => 'setBaseUrl',
            'description' => 'setDescription',
            'id' => 'setId',
            'location' => 'setLocation',
            'moduleId' => 'setModuleId',
            'name' => 'setName',
            'properties' => 'setProperties',
            'publisher' => 'setPublisher',
            'type' => 'setType',
            'version' => 'setVersion',
            'tags' => 'setTags',
            'urlRelative' => 'setUrlRelative',
            'propertiesList' => 'setPropertiesList',
            'manifestVersion' => 'setManifestVersion',
            'categories' => 'setCategories',
            'target' => 'setTarget',
            'productLine' => 'setProductLine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseUrl  基础url
    * description  描述
    * id  id
    * location  扩展点
    * moduleId  模块id
    * name  名称
    * properties  properties
    * publisher  发布商
    * type  类型
    * version  版本
    * tags  标签。
    * urlRelative  插件链接地址
    * propertiesList  多版本属性列表
    * manifestVersion  摘要版本号
    * categories  分类。
    * target  目标。预留字段，通常为空。
    * productLine  产品线。预留字段，通常为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'baseUrl' => 'getBaseUrl',
            'description' => 'getDescription',
            'id' => 'getId',
            'location' => 'getLocation',
            'moduleId' => 'getModuleId',
            'name' => 'getName',
            'properties' => 'getProperties',
            'publisher' => 'getPublisher',
            'type' => 'getType',
            'version' => 'getVersion',
            'tags' => 'getTags',
            'urlRelative' => 'getUrlRelative',
            'propertiesList' => 'getPropertiesList',
            'manifestVersion' => 'getManifestVersion',
            'categories' => 'getCategories',
            'target' => 'getTarget',
            'productLine' => 'getProductLine'
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
        $this->container['baseUrl'] = isset($data['baseUrl']) ? $data['baseUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['urlRelative'] = isset($data['urlRelative']) ? $data['urlRelative'] : null;
        $this->container['propertiesList'] = isset($data['propertiesList']) ? $data['propertiesList'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['productLine'] = isset($data['productLine']) ? $data['productLine'] : null;
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
    * Gets baseUrl
    *  基础url
    *
    * @return string|null
    */
    public function getBaseUrl()
    {
        return $this->container['baseUrl'];
    }

    /**
    * Sets baseUrl
    *
    * @param string|null $baseUrl 基础url
    *
    * @return $this
    */
    public function setBaseUrl($baseUrl)
    {
        $this->container['baseUrl'] = $baseUrl;
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets location
    *  扩展点
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 扩展点
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
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
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionModuleProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionModuleProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets publisher
    *  发布商
    *
    * @return string|null
    */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
    * Sets publisher
    *
    * @param string|null $publisher 发布商
    *
    * @return $this
    */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  版本
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
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets tags
    *  标签。
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
    * @param string[]|null $tags 标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets urlRelative
    *  插件链接地址
    *
    * @return string|null
    */
    public function getUrlRelative()
    {
        return $this->container['urlRelative'];
    }

    /**
    * Sets urlRelative
    *
    * @param string|null $urlRelative 插件链接地址
    *
    * @return $this
    */
    public function setUrlRelative($urlRelative)
    {
        $this->container['urlRelative'] = $urlRelative;
        return $this;
    }

    /**
    * Gets propertiesList
    *  多版本属性列表
    *
    * @return object[]|null
    */
    public function getPropertiesList()
    {
        return $this->container['propertiesList'];
    }

    /**
    * Sets propertiesList
    *
    * @param object[]|null $propertiesList 多版本属性列表
    *
    * @return $this
    */
    public function setPropertiesList($propertiesList)
    {
        $this->container['propertiesList'] = $propertiesList;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  摘要版本号
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion 摘要版本号
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets categories
    *  分类。
    *
    * @return string[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[]|null $categories 分类。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets target
    *  目标。预留字段，通常为空。
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target 目标。预留字段，通常为空。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets productLine
    *  产品线。预留字段，通常为空。
    *
    * @return string|null
    */
    public function getProductLine()
    {
        return $this->container['productLine'];
    }

    /**
    * Sets productLine
    *
    * @param string|null $productLine 产品线。预留字段，通常为空。
    *
    * @return $this
    */
    public function setProductLine($productLine)
    {
        $this->container['productLine'] = $productLine;
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

