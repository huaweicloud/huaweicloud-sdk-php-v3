<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CinderUpdateSnapshotOptionV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CinderUpdateSnapshotOptionV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'instantAccess' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'instantAccess' => null
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
    * name  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'instantAccess' => 'instant_access'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'instantAccess' => 'setInstantAccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'instantAccess' => 'getInstantAccess'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instantAccess'] = isset($data['instantAccess']) ? $data['instantAccess'] : null;
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
    * Gets name
    *  **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $name **参数解释** 云硬盘快照名称。最大支持64个字符。 **约束限制** 对云硬盘创建备份时，同时会创建以autobk_snapshot_为名称前缀的快照，云硬盘控制台对此类快照会有操作限制。因此建议不要创建以autobk_snapshot_为名称前缀的快照，避免影响快照的正常使用。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    *  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
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
    * @param string|null $description **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instantAccess
    *  **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @return bool|null
    */
    public function getInstantAccess()
    {
        return $this->container['instantAccess'];
    }

    /**
    * Sets instantAccess
    *
    * @param bool|null $instantAccess **参数解释** 云硬盘快照极速可用标识。 **约束限制** 不涉及。 **取值范围** - true：开启快照极速可用功能。 - false：关闭快照极速可用功能。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setInstantAccess($instantAccess)
    {
        $this->container['instantAccess'] = $instantAccess;
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

