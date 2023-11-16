<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型：Build,Gate,Deploy,Test,Normal
    * name  规则名称
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * content  规则属性分组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'name' => 'string',
            'layoutContent' => 'string',
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginVersion' => 'string',
            'content' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型：Build,Gate,Deploy,Test,Normal
    * name  规则名称
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * content  规则属性分组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
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
    * type  类型：Build,Gate,Deploy,Test,Normal
    * name  规则名称
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * content  规则属性分组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'layoutContent' => 'layout_content',
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginVersion' => 'plugin_version',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型：Build,Gate,Deploy,Test,Normal
    * name  规则名称
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * content  规则属性分组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'layoutContent' => 'setLayoutContent',
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginVersion' => 'setPluginVersion',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型：Build,Gate,Deploy,Test,Normal
    * name  规则名称
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * content  规则属性分组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['layoutContent'] === null) {
            $invalidProperties[] = "'layoutContent' can't be null";
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
    * Gets type
    *  类型：Build,Gate,Deploy,Test,Normal
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
    * @param string $type 类型：Build,Gate,Deploy,Test,Normal
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
    * Gets layoutContent
    *  布局内容
    *
    * @return string
    */
    public function getLayoutContent()
    {
        return $this->container['layoutContent'];
    }

    /**
    * Sets layoutContent
    *
    * @param string $layoutContent 布局内容
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
    *  插件ID
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
    * @param string|null $pluginId 插件ID
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
    *  插件名称
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
    * @param string|null $pluginName 插件名称
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
    *  插件版本号
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
    * @param string|null $pluginVersion 插件版本号
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
    *  规则属性分组列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[] $content 规则属性分组列表
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

