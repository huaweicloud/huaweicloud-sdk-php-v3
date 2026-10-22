<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * snapshotGroups  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'snapshotGroups' => '\HuaweiCloud\SDK\Evs\V2\Model\SnapshotGroupDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * snapshotGroups  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'snapshotGroups' => null
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
    * snapshotGroups  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'snapshotGroups' => 'snapshot_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * snapshotGroups  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'snapshotGroups' => 'setSnapshotGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * snapshotGroups  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'snapshotGroups' => 'getSnapshotGroups'
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
        $this->container['snapshotGroups'] = isset($data['snapshotGroups']) ? $data['snapshotGroups'] : null;
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
    * Gets snapshotGroups
    *  **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\SnapshotGroupDetail[]|null
    */
    public function getSnapshotGroups()
    {
        return $this->container['snapshotGroups'];
    }

    /**
    * Sets snapshotGroups
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\SnapshotGroupDetail[]|null $snapshotGroups **参数解释** 快照一致性组列表信息。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotGroups($snapshotGroups)
    {
        $this->container['snapshotGroups'] = $snapshotGroups;
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

