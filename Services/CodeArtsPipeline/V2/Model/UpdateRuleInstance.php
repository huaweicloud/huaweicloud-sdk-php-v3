<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRuleInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRuleInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则实例ID
    * type  规则类型ID
    * name  规则名称
    * isValid  规则实例状态
    * layoutContent  规则布局
    * pluginId  插件Id
    * pluginName  规则名称
    * pluginVersion  规则版本
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'name' => 'string',
            'isValid' => 'bool',
            'layoutContent' => 'string',
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginVersion' => 'string',
            'content' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceContent[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则实例ID
    * type  规则类型ID
    * name  规则名称
    * isValid  规则实例状态
    * layoutContent  规则布局
    * pluginId  插件Id
    * pluginName  规则名称
    * pluginVersion  规则版本
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'isValid' => null,
        'layoutContent' => null,
        'pluginId' => null,
        'pluginName' => null,
        'pluginVersion' => null,
        'content' => null
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
    * id  规则实例ID
    * type  规则类型ID
    * name  规则名称
    * isValid  规则实例状态
    * layoutContent  规则布局
    * pluginId  插件Id
    * pluginName  规则名称
    * pluginVersion  规则版本
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'name' => 'name',
            'isValid' => 'is_valid',
            'layoutContent' => 'layout_content',
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginVersion' => 'plugin_version',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则实例ID
    * type  规则类型ID
    * name  规则名称
    * isValid  规则实例状态
    * layoutContent  规则布局
    * pluginId  插件Id
    * pluginName  规则名称
    * pluginVersion  规则版本
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'name' => 'setName',
            'isValid' => 'setIsValid',
            'layoutContent' => 'setLayoutContent',
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginVersion' => 'setPluginVersion',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则实例ID
    * type  规则类型ID
    * name  规则名称
    * isValid  规则实例状态
    * layoutContent  规则布局
    * pluginId  插件Id
    * pluginName  规则名称
    * pluginVersion  规则版本
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'name' => 'getName',
            'isValid' => 'getIsValid',
            'layoutContent' => 'getLayoutContent',
            'pluginId' => 'getPluginId',
            'pluginName' => 'getPluginName',
            'pluginVersion' => 'getPluginVersion',
            'content' => 'getContent'
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
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['layoutContent'] = isset($data['layoutContent']) ? $data['layoutContent'] : null;
        $this->container['pluginId'] = isset($data['pluginId']) ? $data['pluginId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
    *  规则实例ID
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
    * @param string $id 规则实例ID
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
    *  规则类型ID
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
    * @param string $type 规则类型ID
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
    *  规则名称
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
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isValid
    *  规则实例状态
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid 规则实例状态
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets layoutContent
    *  规则布局
    *
    * @return string|null
    */
    public function getLayoutContent()
    {
        return $this->container['layoutContent'];
    }

    /**
    * Sets layoutContent
    *
    * @param string|null $layoutContent 规则布局
    *
    * @return $this
    */
    public function setLayoutContent($layoutContent)
    {
        $this->container['layoutContent'] = $layoutContent;
        return $this;
    }

    /**
    * Gets pluginId
    *  插件Id
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
    * @param string|null $pluginId 插件Id
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
    *  规则名称
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
    * @param string|null $pluginName 规则名称
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
    *  规则版本
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
    * @param string|null $pluginVersion 规则版本
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets content
    *  规则属性列表
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceContent[] $content 规则属性列表
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

