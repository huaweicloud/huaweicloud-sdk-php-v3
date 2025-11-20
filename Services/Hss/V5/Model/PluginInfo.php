<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  **参数解释**： 插件编码 **取值范围**: 不涉及
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * description  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    * tags  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    * installedAttachmentNum  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    * uninstallAttachmentNum  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    * maxCpuLimit  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    * maxMemoryLimit  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    * maxSize  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    * displayMode  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'installedAttachmentNum' => 'int',
            'uninstallAttachmentNum' => 'int',
            'maxCpuLimit' => 'int',
            'maxMemoryLimit' => 'int',
            'maxSize' => 'string',
            'displayMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  **参数解释**： 插件编码 **取值范围**: 不涉及
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * description  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    * tags  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    * installedAttachmentNum  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    * uninstallAttachmentNum  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    * maxCpuLimit  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    * maxMemoryLimit  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    * maxSize  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    * displayMode  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'description' => null,
        'tags' => null,
        'installedAttachmentNum' => 'int32',
        'uninstallAttachmentNum' => 'int32',
        'maxCpuLimit' => 'int32',
        'maxMemoryLimit' => 'int32',
        'maxSize' => null,
        'displayMode' => null
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
    * code  **参数解释**： 插件编码 **取值范围**: 不涉及
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * description  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    * tags  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    * installedAttachmentNum  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    * uninstallAttachmentNum  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    * maxCpuLimit  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    * maxMemoryLimit  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    * maxSize  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    * displayMode  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'installedAttachmentNum' => 'installed_attachment_num',
            'uninstallAttachmentNum' => 'uninstall_attachment_num',
            'maxCpuLimit' => 'max_cpu_limit',
            'maxMemoryLimit' => 'max_memory_limit',
            'maxSize' => 'max_size',
            'displayMode' => 'display_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  **参数解释**： 插件编码 **取值范围**: 不涉及
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * description  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    * tags  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    * installedAttachmentNum  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    * uninstallAttachmentNum  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    * maxCpuLimit  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    * maxMemoryLimit  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    * maxSize  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    * displayMode  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'installedAttachmentNum' => 'setInstalledAttachmentNum',
            'uninstallAttachmentNum' => 'setUninstallAttachmentNum',
            'maxCpuLimit' => 'setMaxCpuLimit',
            'maxMemoryLimit' => 'setMaxMemoryLimit',
            'maxSize' => 'setMaxSize',
            'displayMode' => 'setDisplayMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  **参数解释**： 插件编码 **取值范围**: 不涉及
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * description  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    * tags  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    * installedAttachmentNum  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    * uninstallAttachmentNum  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    * maxCpuLimit  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    * maxMemoryLimit  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    * maxSize  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    * displayMode  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'installedAttachmentNum' => 'getInstalledAttachmentNum',
            'uninstallAttachmentNum' => 'getUninstallAttachmentNum',
            'maxCpuLimit' => 'getMaxCpuLimit',
            'maxMemoryLimit' => 'getMaxMemoryLimit',
            'maxSize' => 'getMaxSize',
            'displayMode' => 'getDisplayMode'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['installedAttachmentNum'] = isset($data['installedAttachmentNum']) ? $data['installedAttachmentNum'] : null;
        $this->container['uninstallAttachmentNum'] = isset($data['uninstallAttachmentNum']) ? $data['uninstallAttachmentNum'] : null;
        $this->container['maxCpuLimit'] = isset($data['maxCpuLimit']) ? $data['maxCpuLimit'] : null;
        $this->container['maxMemoryLimit'] = isset($data['maxMemoryLimit']) ? $data['maxMemoryLimit'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['displayMode'] = isset($data['displayMode']) ? $data['displayMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 128)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installedAttachmentNum']) && ($this->container['installedAttachmentNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'installedAttachmentNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['installedAttachmentNum']) && ($this->container['installedAttachmentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'installedAttachmentNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uninstallAttachmentNum']) && ($this->container['uninstallAttachmentNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'uninstallAttachmentNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['uninstallAttachmentNum']) && ($this->container['uninstallAttachmentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'uninstallAttachmentNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxCpuLimit']) && ($this->container['maxCpuLimit'] > 100)) {
                $invalidProperties[] = "invalid value for 'maxCpuLimit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['maxCpuLimit']) && ($this->container['maxCpuLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxCpuLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxMemoryLimit']) && ($this->container['maxMemoryLimit'] > 200)) {
                $invalidProperties[] = "invalid value for 'maxMemoryLimit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['maxMemoryLimit']) && ($this->container['maxMemoryLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxMemoryLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxSize']) && (mb_strlen($this->container['maxSize']) > 200)) {
                $invalidProperties[] = "invalid value for 'maxSize', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['maxSize']) && (mb_strlen($this->container['maxSize']) < 0)) {
                $invalidProperties[] = "invalid value for 'maxSize', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayMode']) && ($this->container['displayMode'] > 100)) {
                $invalidProperties[] = "invalid value for 'displayMode', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['displayMode']) && ($this->container['displayMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'displayMode', must be bigger than or equal to 0.";
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
    * Gets code
    *  **参数解释**： 插件编码 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 插件编码 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 插件名称 **取值范围**: 不涉及
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
    * @param string|null $name **参数解释**： 插件名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 插件的描述信息 **取值范围**: 不涉及
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
    * @param string|null $description **参数解释**： 插件的描述信息 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 插件标签信息 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags **参数解释**： 插件标签信息 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets installedAttachmentNum
    *  **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getInstalledAttachmentNum()
    {
        return $this->container['installedAttachmentNum'];
    }

    /**
    * Sets installedAttachmentNum
    *
    * @param int|null $installedAttachmentNum **参数解释**： 已安装插件的主机数量 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setInstalledAttachmentNum($installedAttachmentNum)
    {
        $this->container['installedAttachmentNum'] = $installedAttachmentNum;
        return $this;
    }

    /**
    * Gets uninstallAttachmentNum
    *  **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getUninstallAttachmentNum()
    {
        return $this->container['uninstallAttachmentNum'];
    }

    /**
    * Sets uninstallAttachmentNum
    *
    * @param int|null $uninstallAttachmentNum **参数解释**： 未安装插件的主机数量，包括插件状态为未安装、安装中与安装失败的主机 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUninstallAttachmentNum($uninstallAttachmentNum)
    {
        $this->container['uninstallAttachmentNum'] = $uninstallAttachmentNum;
        return $this;
    }

    /**
    * Gets maxCpuLimit
    *  **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getMaxCpuLimit()
    {
        return $this->container['maxCpuLimit'];
    }

    /**
    * Sets maxCpuLimit
    *
    * @param int|null $maxCpuLimit **参数解释**： 此种类型的插件包中，运行插件所需单核CPU(0-100%)的最大值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMaxCpuLimit($maxCpuLimit)
    {
        $this->container['maxCpuLimit'] = $maxCpuLimit;
        return $this;
    }

    /**
    * Gets maxMemoryLimit
    *  **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getMaxMemoryLimit()
    {
        return $this->container['maxMemoryLimit'];
    }

    /**
    * Sets maxMemoryLimit
    *
    * @param int|null $maxMemoryLimit **参数解释**： 此种类型的插件包中，运行插件所需内存(MB)的最大值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMaxMemoryLimit($maxMemoryLimit)
    {
        $this->container['maxMemoryLimit'] = $maxMemoryLimit;
        return $this;
    }

    /**
    * Gets maxSize
    *  **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
    * Sets maxSize
    *
    * @param string|null $maxSize **参数解释**： 此种类型的插件包中，插件大小(MB)的最大值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;
        return $this;
    }

    /**
    * Gets displayMode
    *  **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @return int|null
    */
    public function getDisplayMode()
    {
        return $this->container['displayMode'];
    }

    /**
    * Sets displayMode
    *
    * @param int|null $displayMode **参数解释**： 插件展示模式 **取值范围**: - 0：插件所有操作功能均支持 - 1：不支持插件的安装、卸载操作 - 2：插件所有操作功能均不支持
    *
    * @return $this
    */
    public function setDisplayMode($displayMode)
    {
        $this->container['displayMode'] = $displayMode;
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

