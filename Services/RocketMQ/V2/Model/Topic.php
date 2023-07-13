<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Topic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Topic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  topic名称。
    * totalReadQueueNum  总读队列个数。
    * totalWriteQueueNum  总写队列个数。
    * permission  权限。
    * brokers  关联的代理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'totalReadQueueNum' => 'float',
            'totalWriteQueueNum' => 'float',
            'permission' => 'string',
            'brokers' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\TopicBrokers[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  topic名称。
    * totalReadQueueNum  总读队列个数。
    * totalWriteQueueNum  总写队列个数。
    * permission  权限。
    * brokers  关联的代理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'totalReadQueueNum' => null,
        'totalWriteQueueNum' => null,
        'permission' => null,
        'brokers' => null
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
    * name  topic名称。
    * totalReadQueueNum  总读队列个数。
    * totalWriteQueueNum  总写队列个数。
    * permission  权限。
    * brokers  关联的代理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'totalReadQueueNum' => 'total_read_queue_num',
            'totalWriteQueueNum' => 'total_write_queue_num',
            'permission' => 'permission',
            'brokers' => 'brokers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  topic名称。
    * totalReadQueueNum  总读队列个数。
    * totalWriteQueueNum  总写队列个数。
    * permission  权限。
    * brokers  关联的代理。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'totalReadQueueNum' => 'setTotalReadQueueNum',
            'totalWriteQueueNum' => 'setTotalWriteQueueNum',
            'permission' => 'setPermission',
            'brokers' => 'setBrokers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  topic名称。
    * totalReadQueueNum  总读队列个数。
    * totalWriteQueueNum  总写队列个数。
    * permission  权限。
    * brokers  关联的代理。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'totalReadQueueNum' => 'getTotalReadQueueNum',
            'totalWriteQueueNum' => 'getTotalWriteQueueNum',
            'permission' => 'getPermission',
            'brokers' => 'getBrokers'
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
    const PERMISSION_SUB = 'sub';
    const PERMISSION_PUB = 'pub';
    const PERMISSION_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionAllowableValues()
    {
        return [
            self::PERMISSION_SUB,
            self::PERMISSION_PUB,
            self::PERMISSION_ALL,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['totalReadQueueNum'] = isset($data['totalReadQueueNum']) ? $data['totalReadQueueNum'] : null;
        $this->container['totalWriteQueueNum'] = isset($data['totalWriteQueueNum']) ? $data['totalWriteQueueNum'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPermissionAllowableValues();
                if (!is_null($this->container['permission']) && !in_array($this->container['permission'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permission', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  topic名称。
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
    * @param string|null $name topic名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets totalReadQueueNum
    *  总读队列个数。
    *
    * @return float|null
    */
    public function getTotalReadQueueNum()
    {
        return $this->container['totalReadQueueNum'];
    }

    /**
    * Sets totalReadQueueNum
    *
    * @param float|null $totalReadQueueNum 总读队列个数。
    *
    * @return $this
    */
    public function setTotalReadQueueNum($totalReadQueueNum)
    {
        $this->container['totalReadQueueNum'] = $totalReadQueueNum;
        return $this;
    }

    /**
    * Gets totalWriteQueueNum
    *  总写队列个数。
    *
    * @return float|null
    */
    public function getTotalWriteQueueNum()
    {
        return $this->container['totalWriteQueueNum'];
    }

    /**
    * Sets totalWriteQueueNum
    *
    * @param float|null $totalWriteQueueNum 总写队列个数。
    *
    * @return $this
    */
    public function setTotalWriteQueueNum($totalWriteQueueNum)
    {
        $this->container['totalWriteQueueNum'] = $totalWriteQueueNum;
        return $this;
    }

    /**
    * Gets permission
    *  权限。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets brokers
    *  关联的代理。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\TopicBrokers[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\TopicBrokers[]|null $brokers 关联的代理。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
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

