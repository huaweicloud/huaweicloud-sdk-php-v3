<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClouddcnSubnetsTagsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClouddcnSubnetsTagsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  本次请求的编号
    * totalCount  当前列表中资源数量。
    * tags  tag列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'totalCount' => 'int',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResourceTags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  本次请求的编号
    * totalCount  当前列表中资源数量。
    * tags  tag列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'totalCount' => 'int32',
        'tags' => null
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
    * requestId  本次请求的编号
    * totalCount  当前列表中资源数量。
    * tags  tag列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'totalCount' => 'total_count',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  本次请求的编号
    * totalCount  当前列表中资源数量。
    * tags  tag列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'totalCount' => 'setTotalCount',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  本次请求的编号
    * totalCount  当前列表中资源数量。
    * tags  tag列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'totalCount' => 'getTotalCount',
            'tags' => 'getTags'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 2000)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 2000.";
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
    * Gets requestId
    *  本次请求的编号
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 本次请求的编号
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets totalCount
    *  当前列表中资源数量。
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
    * @param int|null $totalCount 当前列表中资源数量。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets tags
    *  tag列表信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTags[]|null $tags tag列表信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

