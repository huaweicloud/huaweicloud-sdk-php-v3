<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    * editable  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    * content  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * parent  parent
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'name' => 'string',
            'version' => 'string',
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginVersion' => 'string',
            'isValid' => 'bool',
            'editable' => 'bool',
            'content' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceContent[]',
            'parent' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleSet'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    * editable  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    * content  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * parent  parent
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'version' => null,
        'pluginId' => null,
        'pluginName' => null,
        'pluginVersion' => null,
        'isValid' => null,
        'editable' => null,
        'content' => null,
        'parent' => null
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
    * id  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    * editable  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    * content  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * parent  parent
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'name' => 'name',
            'version' => 'version',
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginVersion' => 'plugin_version',
            'isValid' => 'is_valid',
            'editable' => 'editable',
            'content' => 'content',
            'parent' => 'parent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    * editable  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    * content  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * parent  parent
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'name' => 'setName',
            'version' => 'setVersion',
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginVersion' => 'setPluginVersion',
            'isValid' => 'setIsValid',
            'editable' => 'setEditable',
            'content' => 'setContent',
            'parent' => 'setParent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    * editable  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    * content  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * parent  parent
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'name' => 'getName',
            'version' => 'getVersion',
            'pluginId' => 'getPluginId',
            'pluginName' => 'getPluginName',
            'pluginVersion' => 'getPluginVersion',
            'isValid' => 'getIsValid',
            'editable' => 'getEditable',
            'content' => 'getContent',
            'parent' => 'getParent'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['pluginId'] = isset($data['pluginId']) ? $data['pluginId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['isValid'] === null) {
            $invalidProperties[] = "'isValid' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
    * Gets id
    *  **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 规则实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 规则类型。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 规则类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 规则名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**： 规则版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets pluginId
    *  **参数解释**： 插件ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPluginId()
    {
        return $this->container['pluginId'];
    }

    /**
    * Sets pluginId
    *
    * @param string|null $pluginId **参数解释**： 插件ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginId($pluginId)
    {
        $this->container['pluginId'] = $pluginId;
        return $this;
    }

    /**
    * Gets pluginName
    *  **参数解释**： 插件名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName **参数解释**： 插件名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
    * Sets pluginVersion
    *
    * @param string|null $pluginVersion **参数解释**： 插件版本号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets isValid
    *  **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    *
    * @return bool
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool $isValid **参数解释**： 规则是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets editable
    *  **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable **参数解释**： 规则是否可编辑。 **取值范围**： - true：规则可编辑。 - false：规则不可编辑。
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceContent[]
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceContent[] $content **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets parent
    *  parent
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleSet|null
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleSet|null $parent parent
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
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

