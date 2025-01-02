<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNodeLimitSqlModelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNodeLimitSqlModelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeLimitSqlModelList  限流SQL模板匹配信息
    * limit  查询记录数。
    * offset  索引位置。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeLimitSqlModelList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListNodeLimitSqlModelResponseResult[]',
            'limit' => 'int',
            'offset' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeLimitSqlModelList  限流SQL模板匹配信息
    * limit  查询记录数。
    * offset  索引位置。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeLimitSqlModelList' => null,
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
    * nodeLimitSqlModelList  限流SQL模板匹配信息
    * limit  查询记录数。
    * offset  索引位置。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeLimitSqlModelList' => 'node_limit_sql_model_list',
            'limit' => 'limit',
            'offset' => 'offset',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeLimitSqlModelList  限流SQL模板匹配信息
    * limit  查询记录数。
    * offset  索引位置。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeLimitSqlModelList' => 'setNodeLimitSqlModelList',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeLimitSqlModelList  限流SQL模板匹配信息
    * limit  查询记录数。
    * offset  索引位置。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeLimitSqlModelList' => 'getNodeLimitSqlModelList',
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
        $this->container['nodeLimitSqlModelList'] = isset($data['nodeLimitSqlModelList']) ? $data['nodeLimitSqlModelList'] : null;
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
    * Gets nodeLimitSqlModelList
    *  限流SQL模板匹配信息
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListNodeLimitSqlModelResponseResult[]|null
    */
    public function getNodeLimitSqlModelList()
    {
        return $this->container['nodeLimitSqlModelList'];
    }

    /**
    * Sets nodeLimitSqlModelList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListNodeLimitSqlModelResponseResult[]|null $nodeLimitSqlModelList 限流SQL模板匹配信息
    *
    * @return $this
    */
    public function setNodeLimitSqlModelList($nodeLimitSqlModelList)
    {
        $this->container['nodeLimitSqlModelList'] = $nodeLimitSqlModelList;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。
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
    * @param int|null $limit 查询记录数。
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
    *  索引位置。
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
    * @param int|null $offset 索引位置。
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
    *  总数。
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
    * @param int|null $totalCount 总数。
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
