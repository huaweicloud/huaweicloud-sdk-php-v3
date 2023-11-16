<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBasicPluginResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBasicPluginResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型
    * name  名称
    * friendlyName  展示名
    * category  业务类型
    * description  描述
    * version  版本
    * versionDescription  版本说明
    * inputs  输入信息
    * outputs  输出信息
    * execution  execution
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'name' => 'string',
            'friendlyName' => 'string',
            'category' => 'string',
            'description' => 'string',
            'version' => 'string',
            'versionDescription' => 'string',
            'inputs' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionInputs[]',
            'outputs' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionOutputs[]',
            'execution' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionExecution'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型
    * name  名称
    * friendlyName  展示名
    * category  业务类型
    * description  描述
    * version  版本
    * versionDescription  版本说明
    * inputs  输入信息
    * outputs  输出信息
    * execution  execution
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'friendlyName' => null,
        'category' => null,
        'description' => null,
        'version' => null,
        'versionDescription' => null,
        'inputs' => null,
        'outputs' => null,
        'execution' => null
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
    * type  类型
    * name  名称
    * friendlyName  展示名
    * category  业务类型
    * description  描述
    * version  版本
    * versionDescription  版本说明
    * inputs  输入信息
    * outputs  输出信息
    * execution  execution
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'friendlyName' => 'friendly_name',
            'category' => 'category',
            'description' => 'description',
            'version' => 'version',
            'versionDescription' => 'version_description',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'execution' => 'execution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型
    * name  名称
    * friendlyName  展示名
    * category  业务类型
    * description  描述
    * version  版本
    * versionDescription  版本说明
    * inputs  输入信息
    * outputs  输出信息
    * execution  execution
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'friendlyName' => 'setFriendlyName',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'version' => 'setVersion',
            'versionDescription' => 'setVersionDescription',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'execution' => 'setExecution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型
    * name  名称
    * friendlyName  展示名
    * category  业务类型
    * description  描述
    * version  版本
    * versionDescription  版本说明
    * inputs  输入信息
    * outputs  输出信息
    * execution  execution
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
            'friendlyName' => 'getFriendlyName',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'version' => 'getVersion',
            'versionDescription' => 'getVersionDescription',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'execution' => 'getExecution'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['friendlyName'] = isset($data['friendlyName']) ? $data['friendlyName'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['execution'] = isset($data['execution']) ? $data['execution'] : null;
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
    * Gets friendlyName
    *  展示名
    *
    * @return string|null
    */
    public function getFriendlyName()
    {
        return $this->container['friendlyName'];
    }

    /**
    * Sets friendlyName
    *
    * @param string|null $friendlyName 展示名
    *
    * @return $this
    */
    public function setFriendlyName($friendlyName)
    {
        $this->container['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
    * Gets category
    *  业务类型
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 业务类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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
    * Gets versionDescription
    *  版本说明
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 版本说明
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets inputs
    *  输入信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionInputs[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionInputs[]|null $inputs 输入信息
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  输出信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionOutputs[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionOutputs[]|null $outputs 输出信息
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets execution
    *  execution
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionExecution|null
    */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
    * Sets execution
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionExecution|null $execution execution
    *
    * @return $this
    */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;
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

