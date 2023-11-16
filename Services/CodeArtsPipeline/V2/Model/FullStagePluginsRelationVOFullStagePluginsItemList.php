<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullStagePluginsRelationVOFullStagePluginsItemList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullStagePluginsRelationVO_full_stage_plugins_item_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginsList  插件列表
    * displayName  展示名
    * businessType  业务类型
    * uniqueId  唯一ID
    * conditions  条件
    * addables  额外属性
    * editable  是否可编辑
    * removable  是否可移除
    * cloneable  是否可复制
    * disabled  禁用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginsList' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOPluginsList[]',
            'displayName' => 'string',
            'businessType' => 'string',
            'uniqueId' => 'string',
            'conditions' => 'string[]',
            'addables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAddables[]',
            'editable' => 'bool',
            'removable' => 'bool',
            'cloneable' => 'bool',
            'disabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginsList  插件列表
    * displayName  展示名
    * businessType  业务类型
    * uniqueId  唯一ID
    * conditions  条件
    * addables  额外属性
    * editable  是否可编辑
    * removable  是否可移除
    * cloneable  是否可复制
    * disabled  禁用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginsList' => null,
        'displayName' => null,
        'businessType' => null,
        'uniqueId' => null,
        'conditions' => null,
        'addables' => null,
        'editable' => null,
        'removable' => null,
        'cloneable' => null,
        'disabled' => null
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
    * pluginsList  插件列表
    * displayName  展示名
    * businessType  业务类型
    * uniqueId  唯一ID
    * conditions  条件
    * addables  额外属性
    * editable  是否可编辑
    * removable  是否可移除
    * cloneable  是否可复制
    * disabled  禁用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginsList' => 'plugins_list',
            'displayName' => 'display_name',
            'businessType' => 'business_type',
            'uniqueId' => 'unique_id',
            'conditions' => 'conditions',
            'addables' => 'addables',
            'editable' => 'editable',
            'removable' => 'removable',
            'cloneable' => 'cloneable',
            'disabled' => 'disabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginsList  插件列表
    * displayName  展示名
    * businessType  业务类型
    * uniqueId  唯一ID
    * conditions  条件
    * addables  额外属性
    * editable  是否可编辑
    * removable  是否可移除
    * cloneable  是否可复制
    * disabled  禁用
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginsList' => 'setPluginsList',
            'displayName' => 'setDisplayName',
            'businessType' => 'setBusinessType',
            'uniqueId' => 'setUniqueId',
            'conditions' => 'setConditions',
            'addables' => 'setAddables',
            'editable' => 'setEditable',
            'removable' => 'setRemovable',
            'cloneable' => 'setCloneable',
            'disabled' => 'setDisabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginsList  插件列表
    * displayName  展示名
    * businessType  业务类型
    * uniqueId  唯一ID
    * conditions  条件
    * addables  额外属性
    * editable  是否可编辑
    * removable  是否可移除
    * cloneable  是否可复制
    * disabled  禁用
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginsList' => 'getPluginsList',
            'displayName' => 'getDisplayName',
            'businessType' => 'getBusinessType',
            'uniqueId' => 'getUniqueId',
            'conditions' => 'getConditions',
            'addables' => 'getAddables',
            'editable' => 'getEditable',
            'removable' => 'getRemovable',
            'cloneable' => 'getCloneable',
            'disabled' => 'getDisabled'
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
        $this->container['pluginsList'] = isset($data['pluginsList']) ? $data['pluginsList'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['addables'] = isset($data['addables']) ? $data['addables'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['removable'] = isset($data['removable']) ? $data['removable'] : null;
        $this->container['cloneable'] = isset($data['cloneable']) ? $data['cloneable'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
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
    * Gets pluginsList
    *  插件列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOPluginsList[]|null
    */
    public function getPluginsList()
    {
        return $this->container['pluginsList'];
    }

    /**
    * Sets pluginsList
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOPluginsList[]|null $pluginsList 插件列表
    *
    * @return $this
    */
    public function setPluginsList($pluginsList)
    {
        $this->container['pluginsList'] = $pluginsList;
        return $this;
    }

    /**
    * Gets displayName
    *  展示名
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 展示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets businessType
    *  业务类型
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 业务类型
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets uniqueId
    *  唯一ID
    *
    * @return string|null
    */
    public function getUniqueId()
    {
        return $this->container['uniqueId'];
    }

    /**
    * Sets uniqueId
    *
    * @param string|null $uniqueId 唯一ID
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets conditions
    *  条件
    *
    * @return string[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param string[]|null $conditions 条件
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets addables
    *  额外属性
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAddables[]|null
    */
    public function getAddables()
    {
        return $this->container['addables'];
    }

    /**
    * Sets addables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAddables[]|null $addables 额外属性
    *
    * @return $this
    */
    public function setAddables($addables)
    {
        $this->container['addables'] = $addables;
        return $this;
    }

    /**
    * Gets editable
    *  是否可编辑
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
    * @param bool|null $editable 是否可编辑
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets removable
    *  是否可移除
    *
    * @return bool|null
    */
    public function getRemovable()
    {
        return $this->container['removable'];
    }

    /**
    * Sets removable
    *
    * @param bool|null $removable 是否可移除
    *
    * @return $this
    */
    public function setRemovable($removable)
    {
        $this->container['removable'] = $removable;
        return $this;
    }

    /**
    * Gets cloneable
    *  是否可复制
    *
    * @return bool|null
    */
    public function getCloneable()
    {
        return $this->container['cloneable'];
    }

    /**
    * Sets cloneable
    *
    * @param bool|null $cloneable 是否可复制
    *
    * @return $this
    */
    public function setCloneable($cloneable)
    {
        $this->container['cloneable'] = $cloneable;
        return $this;
    }

    /**
    * Gets disabled
    *  禁用
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 禁用
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
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

