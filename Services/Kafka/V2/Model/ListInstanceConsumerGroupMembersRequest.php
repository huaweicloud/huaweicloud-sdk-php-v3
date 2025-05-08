<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceConsumerGroupMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceConsumerGroupMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * limit  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    * host  消费者地址。
    * memberId  消费者ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'instanceId' => 'string',
            'group' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'host' => 'string',
            'memberId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * limit  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    * host  消费者地址。
    * memberId  消费者ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'instanceId' => null,
        'group' => null,
        'offset' => null,
        'limit' => null,
        'host' => null,
        'memberId' => null
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
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * limit  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    * host  消费者地址。
    * memberId  消费者ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'instanceId' => 'instance_id',
            'group' => 'group',
            'offset' => 'offset',
            'limit' => 'limit',
            'host' => 'host',
            'memberId' => 'member_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * limit  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    * host  消费者地址。
    * memberId  消费者ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'instanceId' => 'setInstanceId',
            'group' => 'setGroup',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'host' => 'setHost',
            'memberId' => 'setMemberId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎。
    * instanceId  实例ID。
    * group  消费组ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * limit  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    * host  消费者地址。
    * memberId  消费者ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'instanceId' => 'getInstanceId',
            'group' => 'getGroup',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'host' => 'getHost',
            'memberId' => 'getMemberId'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
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
    *  偏移量，表示从此偏移量开始查询， offset大于等于0。
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0。
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
    *  当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
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
    * @param int|null $limit 当次查询返回的最大消费组成员个数，默认值为10，取值范围为1~50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets host
    *  消费者地址。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 消费者地址。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets memberId
    *  消费者ID。
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 消费者ID。
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
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

