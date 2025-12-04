<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceConsumerGroupTopicsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceConsumerGroupTopicsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0。
    * limit  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    * sortKey  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    * sortDir  排序方式。 - asc：升序。 - desc：降序，默认方式。
    * topic  Topic名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'instanceId' => 'string',
            'group' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'topic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0。
    * limit  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    * sortKey  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    * sortDir  排序方式。 - asc：升序。 - desc：降序，默认方式。
    * topic  Topic名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'instanceId' => null,
        'group' => null,
        'offset' => null,
        'limit' => null,
        'sortKey' => null,
        'sortDir' => null,
        'topic' => null
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
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0。
    * limit  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    * sortKey  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    * sortDir  排序方式。 - asc：升序。 - desc：降序，默认方式。
    * topic  Topic名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'instanceId' => 'instance_id',
            'group' => 'group',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'topic' => 'topic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0。
    * limit  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    * sortKey  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    * sortDir  排序方式。 - asc：升序。 - desc：降序，默认方式。
    * topic  Topic名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'instanceId' => 'setInstanceId',
            'group' => 'setGroup',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'topic' => 'setTopic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0。
    * limit  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    * sortKey  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    * sortDir  排序方式。 - asc：升序。 - desc：降序，默认方式。
    * topic  Topic名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'instanceId' => 'getInstanceId',
            'group' => 'getGroup',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'topic' => 'getTopic'
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
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
    * Gets engine
    *  引擎。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 引擎。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets group
    *  消费组ID。
    *
    * @return string
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string $group 消费组ID。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，offset大于等于0。
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，offset大于等于0。
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
    *  当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
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
    * @param int|null $limit 当次查询返回的最大Topic个数，默认值为10，取值范围为1~50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序规则： - topic：按Topic名称排序。 - partition：按分区数排序。 - messages：按消息数量排序，默认方式。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方式。 - asc：升序。 - desc：降序，默认方式。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方式。 - asc：升序。 - desc：降序，默认方式。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets topic
    *  Topic名称。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic Topic名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
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

