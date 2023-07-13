<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RabbitMQExtendProductPropertiesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RabbitMQExtendProductPropertiesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * minBroker  Broker的最小个数。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxConnectionPerBroker  最大连接数
    * stepLength  步长
    * productAlias  product_id的别名。
    * maxQueuePerBroker  最大队列
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxBroker' => 'string',
            'maxStoragePerNode' => 'string',
            'minBroker' => 'string',
            'minStoragePerNode' => 'string',
            'maxConnectionPerBroker' => 'string',
            'stepLength' => 'string',
            'productAlias' => 'string',
            'maxQueuePerBroker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * minBroker  Broker的最小个数。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxConnectionPerBroker  最大连接数
    * stepLength  步长
    * productAlias  product_id的别名。
    * maxQueuePerBroker  最大队列
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxBroker' => null,
        'maxStoragePerNode' => null,
        'minBroker' => null,
        'minStoragePerNode' => null,
        'maxConnectionPerBroker' => null,
        'stepLength' => null,
        'productAlias' => null,
        'maxQueuePerBroker' => null
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
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * minBroker  Broker的最小个数。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxConnectionPerBroker  最大连接数
    * stepLength  步长
    * productAlias  product_id的别名。
    * maxQueuePerBroker  最大队列
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxBroker' => 'max_broker',
            'maxStoragePerNode' => 'max_storage_per_node',
            'minBroker' => 'min_broker',
            'minStoragePerNode' => 'min_storage_per_node',
            'maxConnectionPerBroker' => 'max_connection_per_broker',
            'stepLength' => 'step_length',
            'productAlias' => 'product_alias',
            'maxQueuePerBroker' => 'max_queue_per_broker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * minBroker  Broker的最小个数。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxConnectionPerBroker  最大连接数
    * stepLength  步长
    * productAlias  product_id的别名。
    * maxQueuePerBroker  最大队列
    *
    * @var string[]
    */
    protected static $setters = [
            'maxBroker' => 'setMaxBroker',
            'maxStoragePerNode' => 'setMaxStoragePerNode',
            'minBroker' => 'setMinBroker',
            'minStoragePerNode' => 'setMinStoragePerNode',
            'maxConnectionPerBroker' => 'setMaxConnectionPerBroker',
            'stepLength' => 'setStepLength',
            'productAlias' => 'setProductAlias',
            'maxQueuePerBroker' => 'setMaxQueuePerBroker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * minBroker  Broker的最小个数。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxConnectionPerBroker  最大连接数
    * stepLength  步长
    * productAlias  product_id的别名。
    * maxQueuePerBroker  最大队列
    *
    * @var string[]
    */
    protected static $getters = [
            'maxBroker' => 'getMaxBroker',
            'maxStoragePerNode' => 'getMaxStoragePerNode',
            'minBroker' => 'getMinBroker',
            'minStoragePerNode' => 'getMinStoragePerNode',
            'maxConnectionPerBroker' => 'getMaxConnectionPerBroker',
            'stepLength' => 'getStepLength',
            'productAlias' => 'getProductAlias',
            'maxQueuePerBroker' => 'getMaxQueuePerBroker'
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
        $this->container['maxBroker'] = isset($data['maxBroker']) ? $data['maxBroker'] : null;
        $this->container['maxStoragePerNode'] = isset($data['maxStoragePerNode']) ? $data['maxStoragePerNode'] : null;
        $this->container['minBroker'] = isset($data['minBroker']) ? $data['minBroker'] : null;
        $this->container['minStoragePerNode'] = isset($data['minStoragePerNode']) ? $data['minStoragePerNode'] : null;
        $this->container['maxConnectionPerBroker'] = isset($data['maxConnectionPerBroker']) ? $data['maxConnectionPerBroker'] : null;
        $this->container['stepLength'] = isset($data['stepLength']) ? $data['stepLength'] : null;
        $this->container['productAlias'] = isset($data['productAlias']) ? $data['productAlias'] : null;
        $this->container['maxQueuePerBroker'] = isset($data['maxQueuePerBroker']) ? $data['maxQueuePerBroker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets maxBroker
    *  Broker的最大个数。
    *
    * @return string|null
    */
    public function getMaxBroker()
    {
        return $this->container['maxBroker'];
    }

    /**
    * Sets maxBroker
    *
    * @param string|null $maxBroker Broker的最大个数。
    *
    * @return $this
    */
    public function setMaxBroker($maxBroker)
    {
        $this->container['maxBroker'] = $maxBroker;
        return $this;
    }

    /**
    * Gets maxStoragePerNode
    *  每个节点的最大存储。单位为GB。
    *
    * @return string|null
    */
    public function getMaxStoragePerNode()
    {
        return $this->container['maxStoragePerNode'];
    }

    /**
    * Sets maxStoragePerNode
    *
    * @param string|null $maxStoragePerNode 每个节点的最大存储。单位为GB。
    *
    * @return $this
    */
    public function setMaxStoragePerNode($maxStoragePerNode)
    {
        $this->container['maxStoragePerNode'] = $maxStoragePerNode;
        return $this;
    }

    /**
    * Gets minBroker
    *  Broker的最小个数。
    *
    * @return string|null
    */
    public function getMinBroker()
    {
        return $this->container['minBroker'];
    }

    /**
    * Sets minBroker
    *
    * @param string|null $minBroker Broker的最小个数。
    *
    * @return $this
    */
    public function setMinBroker($minBroker)
    {
        $this->container['minBroker'] = $minBroker;
        return $this;
    }

    /**
    * Gets minStoragePerNode
    *  每个节点的最小存储。单位为GB。
    *
    * @return string|null
    */
    public function getMinStoragePerNode()
    {
        return $this->container['minStoragePerNode'];
    }

    /**
    * Sets minStoragePerNode
    *
    * @param string|null $minStoragePerNode 每个节点的最小存储。单位为GB。
    *
    * @return $this
    */
    public function setMinStoragePerNode($minStoragePerNode)
    {
        $this->container['minStoragePerNode'] = $minStoragePerNode;
        return $this;
    }

    /**
    * Gets maxConnectionPerBroker
    *  最大连接数
    *
    * @return string|null
    */
    public function getMaxConnectionPerBroker()
    {
        return $this->container['maxConnectionPerBroker'];
    }

    /**
    * Sets maxConnectionPerBroker
    *
    * @param string|null $maxConnectionPerBroker 最大连接数
    *
    * @return $this
    */
    public function setMaxConnectionPerBroker($maxConnectionPerBroker)
    {
        $this->container['maxConnectionPerBroker'] = $maxConnectionPerBroker;
        return $this;
    }

    /**
    * Gets stepLength
    *  步长
    *
    * @return string|null
    */
    public function getStepLength()
    {
        return $this->container['stepLength'];
    }

    /**
    * Sets stepLength
    *
    * @param string|null $stepLength 步长
    *
    * @return $this
    */
    public function setStepLength($stepLength)
    {
        $this->container['stepLength'] = $stepLength;
        return $this;
    }

    /**
    * Gets productAlias
    *  product_id的别名。
    *
    * @return string|null
    */
    public function getProductAlias()
    {
        return $this->container['productAlias'];
    }

    /**
    * Sets productAlias
    *
    * @param string|null $productAlias product_id的别名。
    *
    * @return $this
    */
    public function setProductAlias($productAlias)
    {
        $this->container['productAlias'] = $productAlias;
        return $this;
    }

    /**
    * Gets maxQueuePerBroker
    *  最大队列
    *
    * @return string|null
    */
    public function getMaxQueuePerBroker()
    {
        return $this->container['maxQueuePerBroker'];
    }

    /**
    * Sets maxQueuePerBroker
    *
    * @param string|null $maxQueuePerBroker 最大队列
    *
    * @return $this
    */
    public function setMaxQueuePerBroker($maxQueuePerBroker)
    {
        $this->container['maxQueuePerBroker'] = $maxQueuePerBroker;
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

