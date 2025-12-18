<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addonTemplateName  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetVersion  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    * type  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    * values  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addonTemplateName' => 'string',
            'addonInstanceId' => 'string',
            'targetVersion' => 'string',
            'type' => 'string',
            'values' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addonTemplateName  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetVersion  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    * type  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    * values  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addonTemplateName' => null,
        'addonInstanceId' => null,
        'targetVersion' => null,
        'type' => null,
        'values' => null
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
    * addonTemplateName  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetVersion  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    * type  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    * values  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addonTemplateName' => 'addonTemplateName',
            'addonInstanceId' => 'addonInstanceID',
            'targetVersion' => 'targetVersion',
            'type' => 'type',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addonTemplateName  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetVersion  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    * type  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    * values  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'addonTemplateName' => 'setAddonTemplateName',
            'addonInstanceId' => 'setAddonInstanceId',
            'targetVersion' => 'setTargetVersion',
            'type' => 'setType',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addonTemplateName  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetVersion  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    * type  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    * values  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'addonTemplateName' => 'getAddonTemplateName',
            'addonInstanceId' => 'getAddonInstanceId',
            'targetVersion' => 'getTargetVersion',
            'type' => 'getType',
            'values' => 'getValues'
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
    const TYPE_ADDON_STATIC = 'addonStatic';
    const TYPE_ADDON_UPGRADE = 'addonUpgrade';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ADDON_STATIC,
            self::TYPE_ADDON_UPGRADE,
        ];
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
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['addonInstanceId'] = isset($data['addonInstanceId']) ? $data['addonInstanceId'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addonTemplateName'] === null) {
            $invalidProperties[] = "'addonTemplateName' can't be null";
        }
        if ($this->container['addonInstanceId'] === null) {
            $invalidProperties[] = "'addonInstanceId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets addonTemplateName
    *  **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string $addonTemplateName **参数解释：** 插件模板名称 **约束限制：** 不涉及 **取值范围：** cce服务支持的插件模板 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets addonInstanceId
    *  **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getAddonInstanceId()
    {
        return $this->container['addonInstanceId'];
    }

    /**
    * Sets addonInstanceId
    *
    * @param string $addonInstanceId **参数解释：** 插件实例ID，可以通过[获取AddonInstance列表](cce_02_0326.xml)中的items[].metadata.uid字段获取 **约束限制：** 此参数必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAddonInstanceId($addonInstanceId)
    {
        $this->container['addonInstanceId'] = $addonInstanceId;
        return $this;
    }

    /**
    * Gets targetVersion
    *  **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion **参数解释：** 插件升级的目标版本 **约束限制：** 插件升级场景下，此参数必填。 **取值范围：** cce服务提供的插件版本，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].spec.versions.version字段获取 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
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
    * @param string $type **参数解释：** 插件检查类型 **约束限制：** 此参数必填。 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @return map[string,object]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param map[string,object]|null $values **参数解释：** 插件模板编辑/升级参数（各插件不同），请根据具体插件模板信息填写参数 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

