<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOrganizationPolicyDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOrganizationPolicyDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policies  组织策略部署状态列表
    * count  组织策略状态成员数量
    * limit  每页显示的条目数量
    * offset  偏移量，表示从此偏移量开始查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policies' => '\HuaweiCloud\SDK\Cbr\V1\Model\OrganizationPolicyStatus[]',
            'count' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policies  组织策略部署状态列表
    * count  组织策略状态成员数量
    * limit  每页显示的条目数量
    * offset  偏移量，表示从此偏移量开始查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policies' => null,
        'count' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32'
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
    * policies  组织策略部署状态列表
    * count  组织策略状态成员数量
    * limit  每页显示的条目数量
    * offset  偏移量，表示从此偏移量开始查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policies' => 'policies',
            'count' => 'count',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policies  组织策略部署状态列表
    * count  组织策略状态成员数量
    * limit  每页显示的条目数量
    * offset  偏移量，表示从此偏移量开始查询
    *
    * @var string[]
    */
    protected static $setters = [
            'policies' => 'setPolicies',
            'count' => 'setCount',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policies  组织策略部署状态列表
    * count  组织策略状态成员数量
    * limit  每页显示的条目数量
    * offset  偏移量，表示从此偏移量开始查询
    *
    * @var string[]
    */
    protected static $getters = [
            'policies' => 'getPolicies',
            'count' => 'getCount',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets policies
    *  组织策略部署状态列表
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OrganizationPolicyStatus[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OrganizationPolicyStatus[]|null $policies 组织策略部署状态列表
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets count
    *  组织策略状态成员数量
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
    * @param int|null $count 组织策略状态成员数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量
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
    * @param int|null $limit 每页显示的条目数量
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
    *  偏移量，表示从此偏移量开始查询
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

