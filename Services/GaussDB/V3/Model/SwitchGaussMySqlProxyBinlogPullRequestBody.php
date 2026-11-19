<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchGaussMySqlProxyBinlogPullRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchGaussMySqlProxyBinlogPullRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    * supportBinlogPull  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    * binlogRouteMaster  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'supportBinlogPull' => 'bool',
            'binlogRouteMaster' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    * supportBinlogPull  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    * binlogRouteMaster  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'supportBinlogPull' => null,
        'binlogRouteMaster' => null
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
    * type  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    * supportBinlogPull  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    * binlogRouteMaster  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'supportBinlogPull' => 'support_binlog_pull',
            'binlogRouteMaster' => 'binlog_route_master'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    * supportBinlogPull  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    * binlogRouteMaster  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'supportBinlogPull' => 'setSupportBinlogPull',
            'binlogRouteMaster' => 'setBinlogRouteMaster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    * supportBinlogPull  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    * binlogRouteMaster  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'supportBinlogPull' => 'getSupportBinlogPull',
            'binlogRouteMaster' => 'getBinlogRouteMaster'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['supportBinlogPull'] = isset($data['supportBinlogPull']) ? $data['supportBinlogPull'] : null;
        $this->container['binlogRouteMaster'] = isset($data['binlogRouteMaster']) ? $data['binlogRouteMaster'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['supportBinlogPull'] === null) {
            $invalidProperties[] = "'supportBinlogPull' can't be null";
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
    * Gets type
    *  **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
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
    * @param string $type **参数解释**：  数据库代理模式。  **约束限制**：  不涉及。  **取值范围**： - readwrite：读写模式。 - readonly：TP只读模式。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets supportBinlogPull
    *  **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    *
    * @return bool
    */
    public function getSupportBinlogPull()
    {
        return $this->container['supportBinlogPull'];
    }

    /**
    * Sets supportBinlogPull
    *
    * @param bool $supportBinlogPull **参数解释**：  数据库代理拉取Binlog开关。  **约束限制**：  不涉及。  **取值范围**： - true：开启。 - false：关闭。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSupportBinlogPull($supportBinlogPull)
    {
        $this->container['supportBinlogPull'] = $supportBinlogPull;
        return $this;
    }

    /**
    * Gets binlogRouteMaster
    *  **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getBinlogRouteMaster()
    {
        return $this->container['binlogRouteMaster'];
    }

    /**
    * Sets binlogRouteMaster
    *
    * @param bool|null $binlogRouteMaster **参数解释**： 数据库代理是否从数据库主节点拉取Binlog。  **约束限制**：  - 读写代理可以设置从数据库主节点或者只读节点拉取Binlog，TP只读代理只支持从只读节点拉取Binlog。 - binlog_route_master参数仅在support_binlog_pull为true时生效。  **取值范围**： - true：从主节点拉取。 - false：从只读节点拉取。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setBinlogRouteMaster($binlogRouteMaster)
    {
        $this->container['binlogRouteMaster'] = $binlogRouteMaster;
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

