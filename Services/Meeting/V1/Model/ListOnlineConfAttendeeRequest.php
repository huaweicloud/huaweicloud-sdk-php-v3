<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOnlineConfAttendeeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOnlineConfAttendeeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confId  会议ID
    * offset  记录数偏移
    * limit  返回的与会者记录数，最大500条
    * searchKey  查询条件,支持third-account查询返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confId  会议ID
    * offset  记录数偏移
    * limit  返回的与会者记录数，最大500条
    * searchKey  查询条件,支持third-account查询返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'searchKey' => null
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
    * confId  会议ID
    * offset  记录数偏移
    * limit  返回的与会者记录数，最大500条
    * searchKey  查询条件,支持third-account查询返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confId' => 'conf_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'search_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confId  会议ID
    * offset  记录数偏移
    * limit  返回的与会者记录数，最大500条
    * searchKey  查询条件,支持third-account查询返回
    *
    * @var string[]
    */
    protected static $setters = [
            'confId' => 'setConfId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confId  会议ID
    * offset  记录数偏移
    * limit  返回的与会者记录数，最大500条
    * searchKey  查询条件,支持third-account查询返回
    *
    * @var string[]
    */
    protected static $getters = [
            'confId' => 'getConfId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey'
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
        $this->container['confId'] = isset($data['confId']) ? $data['confId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['confId'] === null) {
            $invalidProperties[] = "'confId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchKey']) && (mb_strlen($this->container['searchKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'searchKey', the character length must be smaller than or equal to 128.";
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
    * Gets confId
    *  会议ID
    *
    * @return string
    */
    public function getConfId()
    {
        return $this->container['confId'];
    }

    /**
    * Sets confId
    *
    * @param string $confId 会议ID
    *
    * @return $this
    */
    public function setConfId($confId)
    {
        $this->container['confId'] = $confId;
        return $this;
    }

    /**
    * Gets offset
    *  记录数偏移
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
    * @param int|null $offset 记录数偏移
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
    *  返回的与会者记录数，最大500条
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
    * @param int|null $limit 返回的与会者记录数，最大500条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets searchKey
    *  查询条件,支持third-account查询返回
    *
    * @return string|null
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param string|null $searchKey 查询条件,支持third-account查询返回
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
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

