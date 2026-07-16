<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncDevServersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncDevServersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * current  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    * data  **参数解释**：Lite Server实例列表。
    * pages  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    * size  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    * total  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'current' => 'int',
            'data' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]',
            'pages' => 'int',
            'size' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * current  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    * data  **参数解释**：Lite Server实例列表。
    * pages  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    * size  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    * total  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'current' => 'int32',
        'data' => null,
        'pages' => 'int32',
        'size' => 'int32',
        'total' => 'int64'
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
    * current  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    * data  **参数解释**：Lite Server实例列表。
    * pages  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    * size  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    * total  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'current' => 'current',
            'data' => 'data',
            'pages' => 'pages',
            'size' => 'size',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * current  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    * data  **参数解释**：Lite Server实例列表。
    * pages  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    * size  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    * total  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'current' => 'setCurrent',
            'data' => 'setData',
            'pages' => 'setPages',
            'size' => 'setSize',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * current  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    * data  **参数解释**：Lite Server实例列表。
    * pages  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    * size  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    * total  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'current' => 'getCurrent',
            'data' => 'getData',
            'pages' => 'getPages',
            'size' => 'getSize',
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
        $this->container['current'] = isset($data['current']) ? $data['current'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
            if (!is_null($this->container['current']) && ($this->container['current'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'current', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['current']) && ($this->container['current'] < 1)) {
                $invalidProperties[] = "invalid value for 'current', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pages']) && ($this->container['pages'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'pages', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['pages']) && ($this->container['pages'] < 1)) {
                $invalidProperties[] = "invalid value for 'pages', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 1024)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 1)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 1.";
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
    * Gets current
    *  **参数解释**：当前页数。 **取值范围**：1 - 2097152
    *
    * @return int|null
    */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
    * Sets current
    *
    * @param int|null $current **参数解释**：当前页数。 **取值范围**：1 - 2097152
    *
    * @return $this
    */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;
        return $this;
    }

    /**
    * Gets data
    *  **参数解释**：Lite Server实例列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]|null $data **参数解释**：Lite Server实例列表。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets pages
    *  **参数解释**：总的页数。 **取值范围**：1 - 2097152
    *
    * @return int|null
    */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
    * Sets pages
    *
    * @param int|null $pages **参数解释**：总的页数。 **取值范围**：1 - 2097152
    *
    * @return $this
    */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**：每一页的数量。设置查询时每页返回的最大实例数量，此值将直接影响到返回数据的量。调整此值可以优化查询性能或提高单次请求的信息量。 **取值范围**：1 - 1024
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
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
    * @param int|null $total **参数解释**：总的记录数量。表示当前查询条件下，满足条件的实例总数。此字段用于用户了解数据的整体规模。 **取值范围**：1 - 2147483647
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

