<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnvironmentsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnvironmentsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * environments  环境分组列表
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量,最大支持200条
    * totalCount  环境分组总条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'environments' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Environment[]',
            'offset' => 'int',
            'limit' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * environments  环境分组列表
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量,最大支持200条
    * totalCount  环境分组总条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'environments' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'totalCount' => 'int64'
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
    * environments  环境分组列表
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量,最大支持200条
    * totalCount  环境分组总条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'environments' => 'environments',
            'offset' => 'offset',
            'limit' => 'limit',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * environments  环境分组列表
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量,最大支持200条
    * totalCount  环境分组总条数
    *
    * @var string[]
    */
    protected static $setters = [
            'environments' => 'setEnvironments',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * environments  环境分组列表
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量,最大支持200条
    * totalCount  环境分组总条数
    *
    * @var string[]
    */
    protected static $getters = [
            'environments' => 'getEnvironments',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
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
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
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
    * Gets environments
    *  环境分组列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Environment[]|null
    */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
    * Sets environments
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Environment[]|null $environments 环境分组列表
    *
    * @return $this
    */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，offset大于等于0
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，offset大于等于0
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
    *  每页显示的条目数量,最大支持200条
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
    * @param int|null $limit 每页显示的条目数量,最大支持200条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets totalCount
    *  环境分组总条数
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
    * @param int|null $totalCount 环境分组总条数
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

