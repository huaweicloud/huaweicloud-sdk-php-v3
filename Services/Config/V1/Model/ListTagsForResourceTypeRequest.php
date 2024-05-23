<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagsForResourceTypeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagsForResourceTypeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型
    * limit  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
    * offset  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型
    * limit  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
    * offset  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
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
    * resourceType  资源类型
    * limit  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
    * offset  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型
    * limit  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
    * offset  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型
    * limit  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
    * offset  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
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
    const RESOURCE_TYPE_CONFIGPOLICY_ASSIGNMENTS = 'config:policyAssignments';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CONFIGPOLICY_ASSIGNMENTS,
        ];
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
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
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets resourceType
    *  资源类型
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
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
    * @param int|null $limit 查询记录数默认为1000，limit最多为1000,不能为负数，最小值为1
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
    *  索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
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
    * @param int|null $offset 索引位置，从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）,必须为数字，不能为负数
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

