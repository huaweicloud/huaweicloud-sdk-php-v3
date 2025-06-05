<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFactoryFullTextResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFactoryFullTextResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页大小限制。 取值范围[1,100]。
    * offset  当前所在分页。
    * searchDetails  查询成功，返回搜索结果。
    * totalHits  成功命中数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'searchDetails' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDetailV2[]',
            'totalHits' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页大小限制。 取值范围[1,100]。
    * offset  当前所在分页。
    * searchDetails  查询成功，返回搜索结果。
    * totalHits  成功命中数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'searchDetails' => null,
        'totalHits' => 'int64'
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
    * limit  分页大小限制。 取值范围[1,100]。
    * offset  当前所在分页。
    * searchDetails  查询成功，返回搜索结果。
    * totalHits  成功命中数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'searchDetails' => 'search_details',
            'totalHits' => 'total_hits'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页大小限制。 取值范围[1,100]。
    * offset  当前所在分页。
    * searchDetails  查询成功，返回搜索结果。
    * totalHits  成功命中数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'searchDetails' => 'setSearchDetails',
            'totalHits' => 'setTotalHits'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页大小限制。 取值范围[1,100]。
    * offset  当前所在分页。
    * searchDetails  查询成功，返回搜索结果。
    * totalHits  成功命中数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'searchDetails' => 'getSearchDetails',
            'totalHits' => 'getTotalHits'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['searchDetails'] = isset($data['searchDetails']) ? $data['searchDetails'] : null;
        $this->container['totalHits'] = isset($data['totalHits']) ? $data['totalHits'] : null;
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
    * Gets limit
    *  分页大小限制。 取值范围[1,100]。
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
    * @param int|null $limit 分页大小限制。 取值范围[1,100]。
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
    *  当前所在分页。
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
    * @param int|null $offset 当前所在分页。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets searchDetails
    *  查询成功，返回搜索结果。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDetailV2[]|null
    */
    public function getSearchDetails()
    {
        return $this->container['searchDetails'];
    }

    /**
    * Sets searchDetails
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDetailV2[]|null $searchDetails 查询成功，返回搜索结果。
    *
    * @return $this
    */
    public function setSearchDetails($searchDetails)
    {
        $this->container['searchDetails'] = $searchDetails;
        return $this;
    }

    /**
    * Gets totalHits
    *  成功命中数量。
    *
    * @return int|null
    */
    public function getTotalHits()
    {
        return $this->container['totalHits'];
    }

    /**
    * Sets totalHits
    *
    * @param int|null $totalHits 成功命中数量。
    *
    * @return $this
    */
    public function setTotalHits($totalHits)
    {
        $this->container['totalHits'] = $totalHits;
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

