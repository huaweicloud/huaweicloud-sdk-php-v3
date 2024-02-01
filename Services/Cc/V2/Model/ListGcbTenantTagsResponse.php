<?php

namespace HuaweiCloud\SDK\Cc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGcbTenantTagsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGcbTenantTagsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  标签列表。
    * totalCount  总记录数。
    * requestId  请求ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Cc\V2\Model\TmsTagValues[]',
            'totalCount' => 'int',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  标签列表。
    * totalCount  总记录数。
    * requestId  请求ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'totalCount' => 'int32',
        'requestId' => null
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
    * tags  标签列表。
    * totalCount  总记录数。
    * requestId  请求ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'totalCount' => 'total_count',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  标签列表。
    * totalCount  总记录数。
    * requestId  请求ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'totalCount' => 'setTotalCount',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  标签列表。
    * totalCount  总记录数。
    * requestId  请求ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'totalCount' => 'getTotalCount',
            'requestId' => 'getRequestId'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
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
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
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
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V2\Model\TmsTagValues[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V2\Model\TmsTagValues[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets totalCount
    *  总记录数。
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
    * @param int|null $totalCount 总记录数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID。
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
    * @param string|null $requestId 请求ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

