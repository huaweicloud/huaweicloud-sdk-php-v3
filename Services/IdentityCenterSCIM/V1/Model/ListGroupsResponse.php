<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalResults  总结果数
    * itemsPerPage  每页的元素个数
    * startIndex  起始索引
    * schemas  概要
    * resources  包含用户组信息的列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalResults' => 'int',
            'itemsPerPage' => 'int',
            'startIndex' => 'string',
            'schemas' => 'string[]',
            'resources' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetGroupResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalResults  总结果数
    * itemsPerPage  每页的元素个数
    * startIndex  起始索引
    * schemas  概要
    * resources  包含用户组信息的列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalResults' => 'int32',
        'itemsPerPage' => 'int32',
        'startIndex' => null,
        'schemas' => null,
        'resources' => null
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
    * totalResults  总结果数
    * itemsPerPage  每页的元素个数
    * startIndex  起始索引
    * schemas  概要
    * resources  包含用户组信息的列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalResults' => 'totalResults',
            'itemsPerPage' => 'itemsPerPage',
            'startIndex' => 'startIndex',
            'schemas' => 'schemas',
            'resources' => 'Resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalResults  总结果数
    * itemsPerPage  每页的元素个数
    * startIndex  起始索引
    * schemas  概要
    * resources  包含用户组信息的列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalResults' => 'setTotalResults',
            'itemsPerPage' => 'setItemsPerPage',
            'startIndex' => 'setStartIndex',
            'schemas' => 'setSchemas',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalResults  总结果数
    * itemsPerPage  每页的元素个数
    * startIndex  起始索引
    * schemas  概要
    * resources  包含用户组信息的列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalResults' => 'getTotalResults',
            'itemsPerPage' => 'getItemsPerPage',
            'startIndex' => 'getStartIndex',
            'schemas' => 'getSchemas',
            'resources' => 'getResources'
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
        $this->container['totalResults'] = isset($data['totalResults']) ? $data['totalResults'] : null;
        $this->container['itemsPerPage'] = isset($data['itemsPerPage']) ? $data['itemsPerPage'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
    * Gets totalResults
    *  总结果数
    *
    * @return int|null
    */
    public function getTotalResults()
    {
        return $this->container['totalResults'];
    }

    /**
    * Sets totalResults
    *
    * @param int|null $totalResults 总结果数
    *
    * @return $this
    */
    public function setTotalResults($totalResults)
    {
        $this->container['totalResults'] = $totalResults;
        return $this;
    }

    /**
    * Gets itemsPerPage
    *  每页的元素个数
    *
    * @return int|null
    */
    public function getItemsPerPage()
    {
        return $this->container['itemsPerPage'];
    }

    /**
    * Sets itemsPerPage
    *
    * @param int|null $itemsPerPage 每页的元素个数
    *
    * @return $this
    */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->container['itemsPerPage'] = $itemsPerPage;
        return $this;
    }

    /**
    * Gets startIndex
    *  起始索引
    *
    * @return string|null
    */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
    * Sets startIndex
    *
    * @param string|null $startIndex 起始索引
    *
    * @return $this
    */
    public function setStartIndex($startIndex)
    {
        $this->container['startIndex'] = $startIndex;
        return $this;
    }

    /**
    * Gets schemas
    *  概要
    *
    * @return string[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[]|null $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets resources
    *  包含用户组信息的列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetGroupResp[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetGroupResp[]|null $resources 包含用户组信息的列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

