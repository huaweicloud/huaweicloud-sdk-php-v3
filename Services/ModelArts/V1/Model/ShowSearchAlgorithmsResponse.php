<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSearchAlgorithmsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSearchAlgorithmsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * searchAlgoCount  超参搜索算法的个数。
    * searchAlgoList  所有超参搜索算法的列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'searchAlgoCount' => 'int',
            'searchAlgoList' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ListSearchAlgorithmsSearchAlgoList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * searchAlgoCount  超参搜索算法的个数。
    * searchAlgoList  所有超参搜索算法的列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'searchAlgoCount' => 'int32',
        'searchAlgoList' => null
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
    * searchAlgoCount  超参搜索算法的个数。
    * searchAlgoList  所有超参搜索算法的列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'searchAlgoCount' => 'search_algo_count',
            'searchAlgoList' => 'search_algo_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * searchAlgoCount  超参搜索算法的个数。
    * searchAlgoList  所有超参搜索算法的列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'searchAlgoCount' => 'setSearchAlgoCount',
            'searchAlgoList' => 'setSearchAlgoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * searchAlgoCount  超参搜索算法的个数。
    * searchAlgoList  所有超参搜索算法的列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'searchAlgoCount' => 'getSearchAlgoCount',
            'searchAlgoList' => 'getSearchAlgoList'
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
        $this->container['searchAlgoCount'] = isset($data['searchAlgoCount']) ? $data['searchAlgoCount'] : null;
        $this->container['searchAlgoList'] = isset($data['searchAlgoList']) ? $data['searchAlgoList'] : null;
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
    * Gets searchAlgoCount
    *  超参搜索算法的个数。
    *
    * @return int|null
    */
    public function getSearchAlgoCount()
    {
        return $this->container['searchAlgoCount'];
    }

    /**
    * Sets searchAlgoCount
    *
    * @param int|null $searchAlgoCount 超参搜索算法的个数。
    *
    * @return $this
    */
    public function setSearchAlgoCount($searchAlgoCount)
    {
        $this->container['searchAlgoCount'] = $searchAlgoCount;
        return $this;
    }

    /**
    * Gets searchAlgoList
    *  所有超参搜索算法的列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ListSearchAlgorithmsSearchAlgoList[]|null
    */
    public function getSearchAlgoList()
    {
        return $this->container['searchAlgoList'];
    }

    /**
    * Sets searchAlgoList
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ListSearchAlgorithmsSearchAlgoList[]|null $searchAlgoList 所有超参搜索算法的列表。
    *
    * @return $this
    */
    public function setSearchAlgoList($searchAlgoList)
    {
        $this->container['searchAlgoList'] = $searchAlgoList;
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

