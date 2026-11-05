<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAtlasesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAtlasesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  content-type
    * offset  分页偏移量，默认0
    * limit  每页条数，1~100，默认10
    * name  图库名称（模糊匹配）
    * type  图库类型 0=白库 / 1=黑库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  content-type
    * offset  分页偏移量，默认0
    * limit  每页条数，1~100，默认10
    * name  图库名称（模糊匹配）
    * type  图库类型 0=白库 / 1=黑库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'offset' => null,
        'limit' => null,
        'name' => null,
        'type' => null
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
    * contentType  content-type
    * offset  分页偏移量，默认0
    * limit  每页条数，1~100，默认10
    * name  图库名称（模糊匹配）
    * type  图库类型 0=白库 / 1=黑库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  content-type
    * offset  分页偏移量，默认0
    * limit  每页条数，1~100，默认10
    * name  图库名称（模糊匹配）
    * type  图库类型 0=白库 / 1=黑库
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  content-type
    * offset  分页偏移量，默认0
    * limit  每页条数，1~100，默认10
    * name  图库名称（模糊匹配）
    * type  图库类型 0=白库 / 1=黑库
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'type' => 'getType'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 1)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
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
    * Gets contentType
    *  content-type
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType content-type
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量，默认0
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
    * @param int|null $offset 分页偏移量，默认0
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
    *  每页条数，1~100，默认10
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
    * @param int|null $limit 每页条数，1~100，默认10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  图库名称（模糊匹配）
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 图库名称（模糊匹配）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  图库类型 0=白库 / 1=黑库
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 图库类型 0=白库 / 1=黑库
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

