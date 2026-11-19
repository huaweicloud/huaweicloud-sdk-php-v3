<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchColdTableStorageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchColdTableStorageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    * failedItems  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'failedItems' => '\HuaweiCloud\SDK\GaussDB\V3\Model\FailedItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    * failedItems  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'failedItems' => null
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
    * result  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    * failedItems  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'failedItems' => 'failed_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    * failedItems  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'failedItems' => 'setFailedItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    * failedItems  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'failedItems' => 'getFailedItems'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['failedItems'] = isset($data['failedItems']) ? $data['failedItems'] : null;
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
    * Gets result
    *  **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释**：  操作结果。  **取值范围**：  - SUCCESS：成功。 - FAILED：失败。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets failedItems
    *  **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\FailedItem[]|null
    */
    public function getFailedItems()
    {
        return $this->container['failedItems'];
    }

    /**
    * Sets failedItems
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\FailedItem[]|null $failedItems **参数解释**：  校验失败的表信息。  当result取值为FAILED时，返回此参数。
    *
    * @return $this
    */
    public function setFailedItems($failedItems)
    {
        $this->container['failedItems'] = $failedItems;
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

