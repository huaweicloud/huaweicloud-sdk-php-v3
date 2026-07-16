<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUnbindInferApiKeysResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUnbindInferApiKeysResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    * successItems  **参数解释：** 解绑成功的apikey列表。
    * failureCount  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    * failureItems  **参数解释：** 解绑失败的apikey列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'successCount' => 'int',
            'successItems' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyResponseV2[]',
            'failureCount' => 'int',
            'failureItems' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyFailureResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    * successItems  **参数解释：** 解绑成功的apikey列表。
    * failureCount  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    * failureItems  **参数解释：** 解绑失败的apikey列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'successCount' => 'int32',
        'successItems' => null,
        'failureCount' => 'int32',
        'failureItems' => null
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
    * total  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    * successItems  **参数解释：** 解绑成功的apikey列表。
    * failureCount  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    * failureItems  **参数解释：** 解绑失败的apikey列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'successCount' => 'success_count',
            'successItems' => 'success_items',
            'failureCount' => 'failure_count',
            'failureItems' => 'failure_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    * successItems  **参数解释：** 解绑成功的apikey列表。
    * failureCount  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    * failureItems  **参数解释：** 解绑失败的apikey列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'successCount' => 'setSuccessCount',
            'successItems' => 'setSuccessItems',
            'failureCount' => 'setFailureCount',
            'failureItems' => 'setFailureItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    * successItems  **参数解释：** 解绑成功的apikey列表。
    * failureCount  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    * failureItems  **参数解释：** 解绑失败的apikey列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'successCount' => 'getSuccessCount',
            'successItems' => 'getSuccessItems',
            'failureCount' => 'getFailureCount',
            'failureItems' => 'getFailureItems'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['successItems'] = isset($data['successItems']) ? $data['successItems'] : null;
        $this->container['failureCount'] = isset($data['failureCount']) ? $data['failureCount'] : null;
        $this->container['failureItems'] = isset($data['failureItems']) ? $data['failureItems'] : null;
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
    * Gets total
    *  **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释：** 请求解绑apikey总个数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets successCount
    *  **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount **参数解释：** 解绑apikey成功个数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets successItems
    *  **参数解释：** 解绑成功的apikey列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyResponseV2[]|null
    */
    public function getSuccessItems()
    {
        return $this->container['successItems'];
    }

    /**
    * Sets successItems
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyResponseV2[]|null $successItems **参数解释：** 解绑成功的apikey列表。
    *
    * @return $this
    */
    public function setSuccessItems($successItems)
    {
        $this->container['successItems'] = $successItems;
        return $this;
    }

    /**
    * Gets failureCount
    *  **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
    * Sets failureCount
    *
    * @param int|null $failureCount **参数解释：** 解绑apikey失败个数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFailureCount($failureCount)
    {
        $this->container['failureCount'] = $failureCount;
        return $this;
    }

    /**
    * Gets failureItems
    *  **参数解释：** 解绑失败的apikey列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyFailureResponse[]|null
    */
    public function getFailureItems()
    {
        return $this->container['failureItems'];
    }

    /**
    * Sets failureItems
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ApiKeyFailureResponse[]|null $failureItems **参数解释：** 解绑失败的apikey列表。
    *
    * @return $this
    */
    public function setFailureItems($failureItems)
    {
        $this->container['failureItems'] = $failureItems;
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

