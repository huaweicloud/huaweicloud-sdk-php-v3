<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则ID
    * type  规则类型
    * name  规则名称
    * version  规则版本
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'name' => 'string',
            'version' => 'string',
            'layoutContent' => 'string',
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginVersion' => 'string',
            'creator' => 'string',
            'createTime' => 'string',
            'updater' => 'string',
            'updateTime' => 'string',
            'content' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则ID
    * type  规则类型
    * name  规则名称
    * version  规则版本
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'version' => null,
        'layoutContent' => null,
        'pluginId' => null,
        'pluginName' => null,
        'pluginVersion' => null,
        'creator' => null,
        'createTime' => null,
        'updater' => null,
        'updateTime' => null,
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
    * id  规则ID
    * type  规则类型
    * name  规则名称
    * version  规则版本
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'name' => 'name',
            'version' => 'version',
            'layoutContent' => 'layout_content',
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginVersion' => 'plugin_version',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updater' => 'updater',
            'updateTime' => 'update_time',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则ID
    * type  规则类型
    * name  规则名称
    * version  规则版本
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'name' => 'setName',
            'version' => 'setVersion',
            'layoutContent' => 'setLayoutContent',
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginVersion' => 'setPluginVersion',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updater' => 'setUpdater',
            'updateTime' => 'setUpdateTime',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则ID
    * type  规则类型
    * name  规则名称
    * version  规则版本
    * layoutContent  布局内容
    * pluginId  插件ID
    * pluginName  插件名称
    * pluginVersion  插件版本号
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  规则属性列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'name' => 'getName',
            'version' => 'getVersion',
            'layoutContent' => 'getLayoutContent',
            'pluginId' => 'getPluginId',
            'pluginName' => 'getPluginName',
            'pluginVersion' => 'getPluginVersion',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updater' => 'getUpdater',
            'updateTime' => 'getUpdateTime',
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['layoutContent'] = isset($data['layoutContent']) ? $data['layoutContent'] : null;
        $this->container['pluginId'] = isset($data['pluginId']) ? $data['pluginId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 85)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 85.";
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
    *  规则ID
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
    * @param string|null $id 规则ID
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
    *  规则类型
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
    * @param string|null $type 规则类型
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名称
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
    *  规则版本
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
    * @param string|null $version 规则版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets layoutContent
    *  布局内容
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
    * @param string|null $layoutContent 布局内容
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
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updater
    *  更新人
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater 更新人
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets content
    *  规则属性列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]|null $content 规则属性列表
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

