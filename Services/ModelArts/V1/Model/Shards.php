<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Shards implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Shards';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectUrls  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    * count  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    * total  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectUrls' => 'string[]',
            'count' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectUrls  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    * count  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    * total  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectUrls' => null,
        'count' => 'int32',
        'total' => 'int32'
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
    * objectUrls  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    * count  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    * total  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectUrls' => 'object_urls',
            'count' => 'count',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectUrls  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    * count  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    * total  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'objectUrls' => 'setObjectUrls',
            'count' => 'setCount',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectUrls  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    * count  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    * total  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'objectUrls' => 'getObjectUrls',
            'count' => 'getCount',
            'total' => 'getTotal'
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
        $this->container['objectUrls'] = isset($data['objectUrls']) ? $data['objectUrls'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets objectUrls
    *  **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    *
    * @return string[]|null
    */
    public function getObjectUrls()
    {
        return $this->container['objectUrls'];
    }

    /**
    * Sets objectUrls
    *
    * @param string[]|null $objectUrls **参数解释**：日志分片的obs下载链接集。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setObjectUrls($objectUrls)
    {
        $this->container['objectUrls'] = $objectUrls;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**：本次请求返回的日志分片数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
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
    * @param int|null $total **参数解释**：本次请求命中的日志分片总数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

