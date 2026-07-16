<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StageRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StageRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordOrder  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    * stages  **参数解释**：主阶段信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordOrder' => 'int',
            'stages' => '\HuaweiCloud\SDK\ModelArts\V1\Model\StageInfoWithSub[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordOrder  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    * stages  **参数解释**：主阶段信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordOrder' => 'int32',
        'stages' => null
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
    * recordOrder  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    * stages  **参数解释**：主阶段信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordOrder' => 'record_order',
            'stages' => 'stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordOrder  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    * stages  **参数解释**：主阶段信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordOrder' => 'setRecordOrder',
            'stages' => 'setStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordOrder  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    * stages  **参数解释**：主阶段信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordOrder' => 'getRecordOrder',
            'stages' => 'getStages'
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
        $this->container['recordOrder'] = isset($data['recordOrder']) ? $data['recordOrder'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
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
    * Gets recordOrder
    *  **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getRecordOrder()
    {
        return $this->container['recordOrder'];
    }

    /**
    * Sets recordOrder
    *
    * @param int|null $recordOrder **参数解释**：阶段记录序号，顺序递增，最大序号记录为当前最新记录。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRecordOrder($recordOrder)
    {
        $this->container['recordOrder'] = $recordOrder;
        return $this;
    }

    /**
    * Gets stages
    *  **参数解释**：主阶段信息列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\StageInfoWithSub[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\StageInfoWithSub[]|null $stages **参数解释**：主阶段信息列表。
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
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

