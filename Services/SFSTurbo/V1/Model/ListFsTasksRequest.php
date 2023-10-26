<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFsTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFsTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * marker  marker，取值为task_id
    * limit  limit, 取值为正整数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareId' => 'string',
            'feature' => 'string',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * marker  marker，取值为task_id
    * limit  limit, 取值为正整数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareId' => null,
        'feature' => null,
        'marker' => null,
        'limit' => null
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
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * marker  marker，取值为task_id
    * limit  limit, 取值为正整数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareId' => 'share_id',
            'feature' => 'feature',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * marker  marker，取值为task_id
    * limit  limit, 取值为正整数
    *
    * @var string[]
    */
    protected static $setters = [
            'shareId' => 'setShareId',
            'feature' => 'setFeature',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * marker  marker，取值为task_id
    * limit  limit, 取值为正整数
    *
    * @var string[]
    */
    protected static $getters = [
            'shareId' => 'getShareId',
            'feature' => 'getFeature',
            'marker' => 'getMarker',
            'limit' => 'getLimit'
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
        $this->container['shareId'] = isset($data['shareId']) ? $data['shareId'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shareId'] === null) {
            $invalidProperties[] = "'shareId' can't be null";
        }
        if ($this->container['feature'] === null) {
            $invalidProperties[] = "'feature' can't be null";
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
    * Gets shareId
    *  文件系统id
    *
    * @return string
    */
    public function getShareId()
    {
        return $this->container['shareId'];
    }

    /**
    * Sets shareId
    *
    * @param string $shareId 文件系统id
    *
    * @return $this
    */
    public function setShareId($shareId)
    {
        $this->container['shareId'] = $shareId;
        return $this;
    }

    /**
    * Gets feature
    *  任务类型。例，DU任务取值为dir-usage
    *
    * @return string
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string $feature 任务类型。例，DU任务取值为dir-usage
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets marker
    *  marker，取值为task_id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker marker，取值为task_id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  limit, 取值为正整数
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
    * @param int|null $limit limit, 取值为正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

