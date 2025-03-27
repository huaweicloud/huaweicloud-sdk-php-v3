<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  从marker指定的事件的下一条数据开始查询。
    * id  事件ID
    * instanceId  实例ID
    * type  事件类型
    * state  事件状态
    * publishSince  事件发布开始时间
    * publishUntil  事件发布截至时间
    * limit  每页显示的条目数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'id' => 'string',
            'instanceId' => 'string[]',
            'type' => 'string[]',
            'state' => 'string[]',
            'publishSince' => 'string',
            'publishUntil' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  从marker指定的事件的下一条数据开始查询。
    * id  事件ID
    * instanceId  实例ID
    * type  事件类型
    * state  事件状态
    * publishSince  事件发布开始时间
    * publishUntil  事件发布截至时间
    * limit  每页显示的条目数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'id' => null,
        'instanceId' => null,
        'type' => null,
        'state' => null,
        'publishSince' => null,
        'publishUntil' => null,
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
    * marker  从marker指定的事件的下一条数据开始查询。
    * id  事件ID
    * instanceId  实例ID
    * type  事件类型
    * state  事件状态
    * publishSince  事件发布开始时间
    * publishUntil  事件发布截至时间
    * limit  每页显示的条目数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'id' => 'id',
            'instanceId' => 'instance_id',
            'type' => 'type',
            'state' => 'state',
            'publishSince' => 'publish_since',
            'publishUntil' => 'publish_until',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  从marker指定的事件的下一条数据开始查询。
    * id  事件ID
    * instanceId  实例ID
    * type  事件类型
    * state  事件状态
    * publishSince  事件发布开始时间
    * publishUntil  事件发布截至时间
    * limit  每页显示的条目数量
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'type' => 'setType',
            'state' => 'setState',
            'publishSince' => 'setPublishSince',
            'publishUntil' => 'setPublishUntil',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  从marker指定的事件的下一条数据开始查询。
    * id  事件ID
    * instanceId  实例ID
    * type  事件类型
    * state  事件状态
    * publishSince  事件发布开始时间
    * publishUntil  事件发布截至时间
    * limit  每页显示的条目数量
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'type' => 'getType',
            'state' => 'getState',
            'publishSince' => 'getPublishSince',
            'publishUntil' => 'getPublishUntil',
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['publishSince'] = isset($data['publishSince']) ? $data['publishSince'] : null;
        $this->container['publishUntil'] = isset($data['publishUntil']) ? $data['publishUntil'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets marker
    *  从marker指定的事件的下一条数据开始查询。
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
    * @param string|null $marker 从marker指定的事件的下一条数据开始查询。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  事件ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 事件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets type
    *  事件类型
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 事件类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  事件状态
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state 事件状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets publishSince
    *  事件发布开始时间
    *
    * @return string|null
    */
    public function getPublishSince()
    {
        return $this->container['publishSince'];
    }

    /**
    * Sets publishSince
    *
    * @param string|null $publishSince 事件发布开始时间
    *
    * @return $this
    */
    public function setPublishSince($publishSince)
    {
        $this->container['publishSince'] = $publishSince;
        return $this;
    }

    /**
    * Gets publishUntil
    *  事件发布截至时间
    *
    * @return string|null
    */
    public function getPublishUntil()
    {
        return $this->container['publishUntil'];
    }

    /**
    * Sets publishUntil
    *
    * @param string|null $publishUntil 事件发布截至时间
    *
    * @return $this
    */
    public function setPublishUntil($publishUntil)
    {
        $this->container['publishUntil'] = $publishUntil;
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

