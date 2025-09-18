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
    * id  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * creator  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
    * content  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'name' => 'string',
            'isValid' => 'bool',
            'version' => 'string',
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
    * id  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * creator  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
    * content  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'isValid' => null,
        'version' => null,
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
    * id  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * creator  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
    * content  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'name' => 'name',
            'isValid' => 'is_valid',
            'version' => 'version',
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
    * id  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * creator  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
    * content  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'name' => 'setName',
            'isValid' => 'setIsValid',
            'version' => 'setVersion',
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
    * id  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
    * type  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    * version  **参数解释**： 规则版本。 **取值范围**： 不涉及。
    * pluginId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * pluginVersion  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * creator  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
    * content  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'name' => 'getName',
            'isValid' => 'getIsValid',
            'version' => 'getVersion',
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
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    *  **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $id **参数解释**： 规则ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    *  **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
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
    * @param string|null $type **参数解释**： 规则类型。 **取值范围**： - Build：构建。 - Gate：代码检查。 - Test：测试。
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 规则名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
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
    * @param bool|null $isValid **参数解释**： 规则是否有效。 **取值范围**： true:有效，false:无效
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 规则版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 规则版本。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
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
    * @param string|null $pluginId **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
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
    * @param string|null $pluginName **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
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
    * @param string|null $pluginVersion **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则创建人。 **取值范围**： 不涉及。
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
    * @param string|null $creator **参数解释**： 规则创建人。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
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
    * @param string|null $createTime **参数解释**： 规则创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
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
    * @param string|null $updater **参数解释**： 规则最后更新人。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
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
    * @param string|null $updateTime **参数解释**： 规则最后更新时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleContent[]|null $content **参数解释**： 规则详细属性。 **取值范围**： 不涉及。
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

