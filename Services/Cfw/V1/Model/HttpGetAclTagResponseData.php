<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpGetAclTagResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpGetAclTagResponseData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 规则标签总数 **取值范围**： 大于0
    * records  **参数解释**： 规则标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'total' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\TagsVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 规则标签总数 **取值范围**： 大于0
    * records  **参数解释**： 规则标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'total' => 'int32',
        'records' => null
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
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 规则标签总数 **取值范围**： 大于0
    * records  **参数解释**： 规则标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'total' => 'total',
            'records' => 'records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 规则标签总数 **取值范围**： 大于0
    * records  **参数解释**： 规则标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'total' => 'setTotal',
            'records' => 'setRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 规则标签总数 **取值范围**： 大于0
    * records  **参数解释**： 规则标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'total' => 'getTotal',
            'records' => 'getRecords'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
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
    * Gets offset
    *  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 每页显示个数 **取值范围**： 1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 规则标签总数 **取值范围**： 大于0
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
    * @param int|null $total **参数解释**： 规则标签总数 **取值范围**： 大于0
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： 规则标签列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO[]|null $records **参数解释**： 规则标签列表
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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

