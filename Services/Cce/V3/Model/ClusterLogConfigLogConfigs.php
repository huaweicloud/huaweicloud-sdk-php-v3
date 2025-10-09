<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterLogConfigLogConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterLogConfig_log_configs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    * enable  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    * type  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enable' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    * enable  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    * type  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enable' => null,
        'type' => null
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
    * name  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    * enable  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    * type  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enable' => 'enable',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    * enable  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    * type  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enable' => 'setEnable',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    * enable  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    * type  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enable' => 'getEnable',
            'type' => 'getType'
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
    const TYPE_CONTROL = 'control';
    const TYPE_AUDIT = 'audit';
    const TYPE_SYSTEM_ADDON = 'system-addon';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CONTROL,
            self::TYPE_AUDIT,
            self::TYPE_SYSTEM_ADDON,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 日志类型 **约束限制**： 必须为 **kube-apiserver**、**kube-controller-manager**、**kube-scheduler**、**audit** 或者系统插件名称 **取值范围**： - kube-apiserver：采集kube-apiserver组件日志 - kube-controller-manager：采集kube-controller-manager日志 - kube-scheduler：采集kube-scheduler日志 - audit：采集审计日志 - 系统插件名称：采集插件日志  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable **参数解释**： 是否采集 **取值范围**： - true：开启日志采集 - false：关闭日志采集
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
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
    * @param string|null $type **参数解释**： 组件类型 , 合法取值为control，audit，system-addon。 **约束限制**： - 仅查询集群日志配置信息接口响应中返回该参数 - 作为**配置集群日志**接口更新参数时不支持配置  **取值范围**： - control: 控制面组件日志。 - audit: 控制面审计日志。 - system-addon: 系统插件日志。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

