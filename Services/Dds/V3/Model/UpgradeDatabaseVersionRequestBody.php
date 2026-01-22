<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeDatabaseVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeDatabaseVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeMode  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    * isDelayed  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeMode' => 'string',
            'isDelayed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeMode  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    * isDelayed  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeMode' => null,
        'isDelayed' => null
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
    * upgradeMode  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    * isDelayed  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeMode' => 'upgrade_mode',
            'isDelayed' => 'is_delayed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeMode  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    * isDelayed  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeMode' => 'setUpgradeMode',
            'isDelayed' => 'setIsDelayed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeMode  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    * isDelayed  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeMode' => 'getUpgradeMode',
            'isDelayed' => 'getIsDelayed'
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
        $this->container['upgradeMode'] = isset($data['upgradeMode']) ? $data['upgradeMode'] : null;
        $this->container['isDelayed'] = isset($data['isDelayed']) ? $data['isDelayed'] : null;
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
    * Gets upgradeMode
    *  **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    *
    * @return string|null
    */
    public function getUpgradeMode()
    {
        return $this->container['upgradeMode'];
    }

    /**
    * Sets upgradeMode
    *
    * @param string|null $upgradeMode **参数解释：** 升级模式。 **约束限制：** 不涉及。 **取值范围：** - minimized_interrupt_time：表示中断时间最短优先模式：升级过程对业务影响相对较小的升级方式。 - minimized_upgrade_time：表示升级时长最短优先模式：升级过程时长相对较快的升级方式。 **默认取值：** minimized_interrupt_time。
    *
    * @return $this
    */
    public function setUpgradeMode($upgradeMode)
    {
        $this->container['upgradeMode'] = $upgradeMode;
        return $this;
    }

    /**
    * Gets isDelayed
    *  **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getIsDelayed()
    {
        return $this->container['isDelayed'];
    }

    /**
    * Sets isDelayed
    *
    * @param bool|null $isDelayed **参数解释：** 实例是否在可维护时间窗内自动升级。 **约束限制：** 不涉及。 **取值范围：** - true：表示延迟升级，实例将在可维护时间窗内自动升级。 - false：表示立即升级。 **默认取值：** false。
    *
    * @return $this
    */
    public function setIsDelayed($isDelayed)
    {
        $this->container['isDelayed'] = $isDelayed;
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

