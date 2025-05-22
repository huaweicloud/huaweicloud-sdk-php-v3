<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecResizeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecResizeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetFlavorId  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    * forceBackup  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetFlavorId' => 'string',
            'forceBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetFlavorId  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    * forceBackup  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetFlavorId' => null,
        'forceBackup' => null
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
    * targetFlavorId  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    * forceBackup  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetFlavorId' => 'target_flavor_id',
            'forceBackup' => 'force_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetFlavorId  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    * forceBackup  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetFlavorId' => 'setTargetFlavorId',
            'forceBackup' => 'setForceBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetFlavorId  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    * forceBackup  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetFlavorId' => 'getTargetFlavorId',
            'forceBackup' => 'getForceBackup'
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
        $this->container['targetFlavorId'] = isset($data['targetFlavorId']) ? $data['targetFlavorId'] : null;
        $this->container['forceBackup'] = isset($data['forceBackup']) ? $data['forceBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetFlavorId'] === null) {
            $invalidProperties[] = "'targetFlavorId' can't be null";
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
    * Gets targetFlavorId
    *  **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getTargetFlavorId()
    {
        return $this->container['targetFlavorId'];
    }

    /**
    * Sets targetFlavorId
    *
    * @param string $targetFlavorId **参数解释**： 目标规格ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTargetFlavorId($targetFlavorId)
    {
        $this->container['targetFlavorId'] = $targetFlavorId;
        return $this;
    }

    /**
    * Gets forceBackup
    *  **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getForceBackup()
    {
        return $this->container['forceBackup'];
    }

    /**
    * Sets forceBackup
    *
    * @param bool|null $forceBackup **参数解释**： 强制备份。字段已废弃，不再生效。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setForceBackup($forceBackup)
    {
        $this->container['forceBackup'] = $forceBackup;
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

