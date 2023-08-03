<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseResourceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseResourceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * withoutAnyTag  是否通过标签过滤
    * limit  每页显示条数
    * offset  查询偏移量
    * action  查询指定action
    * matches  查询指定键值对
    * sysTags  查询指定系统标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'withoutAnyTag' => 'bool',
            'limit' => 'string',
            'offset' => 'string',
            'action' => 'string',
            'matches' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\KvItem[]',
            'sysTags' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TagItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * withoutAnyTag  是否通过标签过滤
    * limit  每页显示条数
    * offset  查询偏移量
    * action  查询指定action
    * matches  查询指定键值对
    * sysTags  查询指定系统标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'withoutAnyTag' => null,
        'limit' => null,
        'offset' => null,
        'action' => null,
        'matches' => null,
        'sysTags' => null
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
    * withoutAnyTag  是否通过标签过滤
    * limit  每页显示条数
    * offset  查询偏移量
    * action  查询指定action
    * matches  查询指定键值对
    * sysTags  查询指定系统标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'withoutAnyTag' => 'without_any_tag',
            'limit' => 'limit',
            'offset' => 'offset',
            'action' => 'action',
            'matches' => 'matches',
            'sysTags' => 'sys_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * withoutAnyTag  是否通过标签过滤
    * limit  每页显示条数
    * offset  查询偏移量
    * action  查询指定action
    * matches  查询指定键值对
    * sysTags  查询指定系统标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'withoutAnyTag' => 'setWithoutAnyTag',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'action' => 'setAction',
            'matches' => 'setMatches',
            'sysTags' => 'setSysTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * withoutAnyTag  是否通过标签过滤
    * limit  每页显示条数
    * offset  查询偏移量
    * action  查询指定action
    * matches  查询指定键值对
    * sysTags  查询指定系统标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'withoutAnyTag' => 'getWithoutAnyTag',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'action' => 'getAction',
            'matches' => 'getMatches',
            'sysTags' => 'getSysTags'
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
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
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
    * Gets withoutAnyTag
    *  是否通过标签过滤
    *
    * @return bool|null
    */
    public function getWithoutAnyTag()
    {
        return $this->container['withoutAnyTag'];
    }

    /**
    * Sets withoutAnyTag
    *
    * @param bool|null $withoutAnyTag 是否通过标签过滤
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示条数
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 每页显示条数
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
    *  查询偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 查询偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets action
    *  查询指定action
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 查询指定action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets matches
    *  查询指定键值对
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\KvItem[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\KvItem[]|null $matches 查询指定键值对
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets sysTags
    *  查询指定系统标签列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TagItem[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TagItem[]|null $sysTags 查询指定系统标签列表
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
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

