<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceConsumerGroupMessageOffsetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceConsumerGroupMessageOffsetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  消息引擎。
    * instanceId  实例ID。
    * group  消费组名称。
    * topic  topic名称。
    * partition  分区名称。
    * offset  偏移值。
    * limit  最大值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'instanceId' => 'string',
            'group' => 'string',
            'topic' => 'string',
            'partition' => 'string',
            'offset' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  消息引擎。
    * instanceId  实例ID。
    * group  消费组名称。
    * topic  topic名称。
    * partition  分区名称。
    * offset  偏移值。
    * limit  最大值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'instanceId' => null,
        'group' => null,
        'topic' => null,
        'partition' => null,
        'offset' => null,
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
    * engine  消息引擎。
    * instanceId  实例ID。
    * group  消费组名称。
    * topic  topic名称。
    * partition  分区名称。
    * offset  偏移值。
    * limit  最大值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'instanceId' => 'instance_id',
            'group' => 'group',
            'topic' => 'topic',
            'partition' => 'partition',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  消息引擎。
    * instanceId  实例ID。
    * group  消费组名称。
    * topic  topic名称。
    * partition  分区名称。
    * offset  偏移值。
    * limit  最大值。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'instanceId' => 'setInstanceId',
            'group' => 'setGroup',
            'topic' => 'setTopic',
            'partition' => 'setPartition',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  消息引擎。
    * instanceId  实例ID。
    * group  消费组名称。
    * topic  topic名称。
    * partition  分区名称。
    * offset  偏移值。
    * limit  最大值。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'instanceId' => 'getInstanceId',
            'group' => 'getGroup',
            'topic' => 'getTopic',
            'partition' => 'getPartition',
            'offset' => 'getOffset',
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    *  消息引擎。
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
    * @param string $engine 消息引擎。
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
    *  消费组名称。
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
    * @param string $group 消费组名称。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets topic
    *  topic名称。
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
    * @param string|null $topic topic名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets partition
    *  分区名称。
    *
    * @return string|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string|null $partition 分区名称。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移值。
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
    *  最大值。
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
    * @param string|null $limit 最大值。
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

