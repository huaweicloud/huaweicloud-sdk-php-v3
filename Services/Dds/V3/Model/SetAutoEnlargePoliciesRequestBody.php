<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAutoEnlargePoliciesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAutoEnlargePoliciesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    * policies  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'string',
            'policies' => '\HuaweiCloud\SDK\Dds\V3\Model\DiskSetAutoExpansionPolicy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    * policies  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'policies' => null
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
    * switchOption  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    * policies  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    * policies  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    * policies  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'policies' => 'getPolicies'
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
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policies'] === null) {
            $invalidProperties[] = "'policies' can't be null";
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
    * Gets switchOption
    *  **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    *
    * @return string|null
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param string|null $switchOption **参数解释：** 自动扩容开关。 **约束限制：** 不涉及。 **取值范围：** - on:开启磁盘自动扩容策略。 - off: 关闭磁盘自动扩容策略。 **默认取值：** on。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets policies
    *  **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\DiskSetAutoExpansionPolicy[]
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\DiskSetAutoExpansionPolicy[] $policies **参数解释：** 磁盘自动扩容策略。 **约束限制：** 最大支持设置10个实例的策略。 **取值范围：** 不涉及。 **默认取值：** 不涉及。 **参数解释：** 不涉及。
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

