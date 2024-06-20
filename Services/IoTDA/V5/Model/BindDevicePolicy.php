<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindDevicePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindDevicePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetType  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * targetIds  策略绑定的目标ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetType' => 'string',
            'targetIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetType  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * targetIds  策略绑定的目标ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetType' => null,
        'targetIds' => null
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
    * targetType  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * targetIds  策略绑定的目标ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetType' => 'target_type',
            'targetIds' => 'target_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetType  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * targetIds  策略绑定的目标ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'targetType' => 'setTargetType',
            'targetIds' => 'setTargetIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetType  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * targetIds  策略绑定的目标ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'targetType' => 'getTargetType',
            'targetIds' => 'getTargetIds'
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
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetIds'] = isset($data['targetIds']) ? $data['targetIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
        }
            if (!preg_match("/(device|product|app)/", $this->container['targetType'])) {
                $invalidProperties[] = "invalid value for 'targetType', must be conform to the pattern /(device|product|app)/.";
            }
        if ($this->container['targetIds'] === null) {
            $invalidProperties[] = "'targetIds' can't be null";
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
    * Gets targetType
    *  **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType **参数说明**：策略绑定的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetIds
    *  策略绑定的目标ID列表
    *
    * @return string[]
    */
    public function getTargetIds()
    {
        return $this->container['targetIds'];
    }

    /**
    * Sets targetIds
    *
    * @param string[] $targetIds 策略绑定的目标ID列表
    *
    * @return $this
    */
    public function setTargetIds($targetIds)
    {
        $this->container['targetIds'] = $targetIds;
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

