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
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * friendlyName  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
    * category  **参数解释**： 业务类型。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * version  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
    * inputs  **参数解释**： 输入信息。 **取值范围**： 不涉及。
    * dataSourceBindings  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    * outputs  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
            'dataSourceBindings' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionDataSourceBindings[]',
            'outputs' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionOutputs[]',
            'execution' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionExecution'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * friendlyName  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
    * category  **参数解释**： 业务类型。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * version  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
    * inputs  **参数解释**： 输入信息。 **取值范围**： 不涉及。
    * dataSourceBindings  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    * outputs  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
        'dataSourceBindings' => null,
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
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * friendlyName  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
    * category  **参数解释**： 业务类型。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * version  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
    * inputs  **参数解释**： 输入信息。 **取值范围**： 不涉及。
    * dataSourceBindings  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    * outputs  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
            'dataSourceBindings' => 'data_source_bindings',
            'outputs' => 'outputs',
            'execution' => 'execution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * friendlyName  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
    * category  **参数解释**： 业务类型。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * version  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
    * inputs  **参数解释**： 输入信息。 **取值范围**： 不涉及。
    * dataSourceBindings  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    * outputs  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
            'dataSourceBindings' => 'setDataSourceBindings',
            'outputs' => 'setOutputs',
            'execution' => 'setExecution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * friendlyName  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
    * category  **参数解释**： 业务类型。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * version  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
    * inputs  **参数解释**： 输入信息。 **取值范围**： 不涉及。
    * dataSourceBindings  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    * outputs  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
            'dataSourceBindings' => 'getDataSourceBindings',
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
        $this->container['dataSourceBindings'] = isset($data['dataSourceBindings']) ? $data['dataSourceBindings'] : null;
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
    *  **参数解释**： 插件类型。 **取值范围**： 不涉及。
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
    * @param string|null $type **参数解释**： 插件类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 插件名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件展示名。 **取值范围**： 不涉及。
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
    * @param string|null $friendlyName **参数解释**： 插件展示名。 **取值范围**： 不涉及。
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
    *  **参数解释**： 业务类型。 **取值范围**： 不涉及。
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
    * @param string|null $category **参数解释**： 业务类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 插件描述。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 插件版本。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
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
    * @param string|null $versionDescription **参数解释**： 插件版本说明。 **取值范围**： 不涉及。
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
    *  **参数解释**： 输入信息。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionInputs[]|null $inputs **参数解释**： 输入信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets dataSourceBindings
    *  **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionDataSourceBindings[]|null
    */
    public function getDataSourceBindings()
    {
        return $this->container['dataSourceBindings'];
    }

    /**
    * Sets dataSourceBindings
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionDataSourceBindings[]|null $dataSourceBindings **参数解释**： 数据源绑定信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDataSourceBindings($dataSourceBindings)
    {
        $this->container['dataSourceBindings'] = $dataSourceBindings;
        return $this;
    }

    /**
    * Gets outputs
    *  **参数解释**： 输出信息。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\NewExtensionOutputs[]|null $outputs **参数解释**： 输出信息。 **取值范围**： 不涉及。
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

