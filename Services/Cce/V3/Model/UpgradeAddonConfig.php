<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeAddonConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeAddonConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addonTemplateName  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    * operation  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    * version  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addonTemplateName' => 'string',
            'operation' => 'string',
            'version' => 'string',
            'values' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addonTemplateName  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    * operation  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    * version  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addonTemplateName' => null,
        'operation' => null,
        'version' => null,
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
    * addonTemplateName  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    * operation  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    * version  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addonTemplateName' => 'addonTemplateName',
            'operation' => 'operation',
            'version' => 'version',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addonTemplateName  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    * operation  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    * version  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'addonTemplateName' => 'setAddonTemplateName',
            'operation' => 'setOperation',
            'version' => 'setVersion',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addonTemplateName  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    * operation  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    * version  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'addonTemplateName' => 'getAddonTemplateName',
            'operation' => 'getOperation',
            'version' => 'getVersion',
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    *  **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
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
    * @param string $addonTemplateName **参数解释：** CCE插件名称 **约束限制：** 不涉及 **取值范围：** 集群中已安装的插件名称。[集群中已安装插件详情见[获取AddonInstance列表](https://support.huaweicloud.com/api-cce/cce_02_0326.html)](tag:hws) **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets operation
    *  **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation **参数解释：** 升级插件的执行动作 **约束限制：** 不涉及 **取值范围：** - patch：表示升级插件版本  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $version **参数解释：** 目标插件版本号 **约束限制：** 目标插件版本必须与目标集群版本配套。[集群版本配套关系见[查询AddonTemplates列表](https://support.huaweicloud.com/api-cce/cce_02_0321.html)](tag:hws) **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return object|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param object|null $values **参数解释：** 插件参数列表，Key:Value格式。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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

