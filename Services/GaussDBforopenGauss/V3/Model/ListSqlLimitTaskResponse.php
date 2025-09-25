<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlLimitTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlLimitTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limitTaskList  **参数解释**: 限流任务列表。
    * limit  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    * offset  **参数解释**: 索引位置。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limitTaskList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListSqlLimitTaskResponseResult[]',
            'limit' => 'int',
            'offset' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limitTaskList  **参数解释**: 限流任务列表。
    * limit  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    * offset  **参数解释**: 索引位置。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limitTaskList' => null,
        'limit' => null,
        'offset' => null,
        'totalCount' => null
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
    * limitTaskList  **参数解释**: 限流任务列表。
    * limit  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    * offset  **参数解释**: 索引位置。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limitTaskList' => 'limit_task_list',
            'limit' => 'limit',
            'offset' => 'offset',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limitTaskList  **参数解释**: 限流任务列表。
    * limit  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    * offset  **参数解释**: 索引位置。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'limitTaskList' => 'setLimitTaskList',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limitTaskList  **参数解释**: 限流任务列表。
    * limit  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    * offset  **参数解释**: 索引位置。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'limitTaskList' => 'getLimitTaskList',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'totalCount' => 'getTotalCount'
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
        $this->container['limitTaskList'] = isset($data['limitTaskList']) ? $data['limitTaskList'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets limitTaskList
    *  **参数解释**: 限流任务列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListSqlLimitTaskResponseResult[]|null
    */
    public function getLimitTaskList()
    {
        return $this->container['limitTaskList'];
    }

    /**
    * Sets limitTaskList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListSqlLimitTaskResponseResult[]|null $limitTaskList **参数解释**: 限流任务列表。
    *
    * @return $this
    */
    public function setLimitTaskList($limitTaskList)
    {
        $this->container['limitTaskList'] = $limitTaskList;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询记录数。 **取值范围**: 不涉及。
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
    * @param int|null $limit **参数解释**: 查询记录数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 索引位置。 **取值范围**: 不涉及。
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
    * @param int|null $offset **参数解释**: 索引位置。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

