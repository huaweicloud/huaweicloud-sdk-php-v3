<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricItemsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricItemsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  指标查询方式。
    * limit  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    * start  分页查询起始位置，为非负整数。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'limit' => 'string',
            'start' => 'string',
            'body' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricAPIQueryItemParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  指标查询方式。
    * limit  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    * start  分页查询起始位置，为非负整数。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'limit' => null,
        'start' => null,
        'body' => null
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
    * type  指标查询方式。
    * limit  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    * start  分页查询起始位置，为非负整数。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'limit' => 'limit',
            'start' => 'start',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  指标查询方式。
    * limit  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    * start  分页查询起始位置，为非负整数。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'limit' => 'setLimit',
            'start' => 'setStart',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  指标查询方式。
    * limit  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    * start  分页查询起始位置，为非负整数。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'limit' => 'getLimit',
            'start' => 'getStart',
            'body' => 'getBody'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 4)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 0)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  指标查询方式。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 指标查询方式。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
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
    * @param string|null $limit 用于限制本次返回的结果数据条数。 取值范围(0,1000]，默认值为1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets start
    *  分页查询起始位置，为非负整数。
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start 分页查询起始位置，为非负整数。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricAPIQueryItemParam|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricAPIQueryItemParam|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

