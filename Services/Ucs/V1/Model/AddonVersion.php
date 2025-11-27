<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  插件包版本id
    * version  插件版本信息
    * input  输入
    * stable  是否为稳定版本
    * translate  供界面使用的翻译信息
    * supportVersions  支持的集群类型和和支持的集群版本信息
    * creationTimestamp  记录创建时间
    * updateTimestamp  记录更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'version' => 'string',
            'input' => 'map[string,object]',
            'stable' => 'bool',
            'translate' => 'map[string,object]',
            'supportVersions' => '\HuaweiCloud\SDK\Ucs\V1\Model\SupportVersion[]',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  插件包版本id
    * version  插件版本信息
    * input  输入
    * stable  是否为稳定版本
    * translate  供界面使用的翻译信息
    * supportVersions  支持的集群类型和和支持的集群版本信息
    * creationTimestamp  记录创建时间
    * updateTimestamp  记录更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'version' => null,
        'input' => null,
        'stable' => null,
        'translate' => null,
        'supportVersions' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null
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
    * id  插件包版本id
    * version  插件版本信息
    * input  输入
    * stable  是否为稳定版本
    * translate  供界面使用的翻译信息
    * supportVersions  支持的集群类型和和支持的集群版本信息
    * creationTimestamp  记录创建时间
    * updateTimestamp  记录更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'version' => 'version',
            'input' => 'input',
            'stable' => 'stable',
            'translate' => 'translate',
            'supportVersions' => 'supportVersions',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  插件包版本id
    * version  插件版本信息
    * input  输入
    * stable  是否为稳定版本
    * translate  供界面使用的翻译信息
    * supportVersions  支持的集群类型和和支持的集群版本信息
    * creationTimestamp  记录创建时间
    * updateTimestamp  记录更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'version' => 'setVersion',
            'input' => 'setInput',
            'stable' => 'setStable',
            'translate' => 'setTranslate',
            'supportVersions' => 'setSupportVersions',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  插件包版本id
    * version  插件版本信息
    * input  输入
    * stable  是否为稳定版本
    * translate  供界面使用的翻译信息
    * supportVersions  支持的集群类型和和支持的集群版本信息
    * creationTimestamp  记录创建时间
    * updateTimestamp  记录更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'version' => 'getVersion',
            'input' => 'getInput',
            'stable' => 'getStable',
            'translate' => 'getTranslate',
            'supportVersions' => 'getSupportVersions',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['stable'] = isset($data['stable']) ? $data['stable'] : null;
        $this->container['translate'] = isset($data['translate']) ? $data['translate'] : null;
        $this->container['supportVersions'] = isset($data['supportVersions']) ? $data['supportVersions'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
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
    * Gets id
    *  插件包版本id
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
    * @param string|null $id 插件包版本id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets version
    *  插件版本信息
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
    * @param string|null $version 插件版本信息
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets input
    *  输入
    *
    * @return map[string,object]|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param map[string,object]|null $input 输入
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets stable
    *  是否为稳定版本
    *
    * @return bool|null
    */
    public function getStable()
    {
        return $this->container['stable'];
    }

    /**
    * Sets stable
    *
    * @param bool|null $stable 是否为稳定版本
    *
    * @return $this
    */
    public function setStable($stable)
    {
        $this->container['stable'] = $stable;
        return $this;
    }

    /**
    * Gets translate
    *  供界面使用的翻译信息
    *
    * @return map[string,object]|null
    */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
    * Sets translate
    *
    * @param map[string,object]|null $translate 供界面使用的翻译信息
    *
    * @return $this
    */
    public function setTranslate($translate)
    {
        $this->container['translate'] = $translate;
        return $this;
    }

    /**
    * Gets supportVersions
    *  支持的集群类型和和支持的集群版本信息
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\SupportVersion[]|null
    */
    public function getSupportVersions()
    {
        return $this->container['supportVersions'];
    }

    /**
    * Sets supportVersions
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\SupportVersion[]|null $supportVersions 支持的集群类型和和支持的集群版本信息
    *
    * @return $this
    */
    public function setSupportVersions($supportVersions)
    {
        $this->container['supportVersions'] = $supportVersions;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  记录创建时间
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp 记录创建时间
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  记录更新时间
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp 记录更新时间
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
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

