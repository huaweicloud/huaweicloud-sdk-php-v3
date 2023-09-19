<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Pipelines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'pipelines';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置文件名称。
    * status  pipeline状态。
    * keepAlive  是否开启常驻。
    * events  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'keepAlive' => 'bool',
            'events' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置文件名称。
    * status  pipeline状态。
    * keepAlive  是否开启常驻。
    * events  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'keepAlive' => null,
        'events' => null,
        'updateAt' => null
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
    * name  配置文件名称。
    * status  pipeline状态。
    * keepAlive  是否开启常驻。
    * events  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'keepAlive' => 'keepAlive',
            'events' => 'events',
            'updateAt' => 'updateAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置文件名称。
    * status  pipeline状态。
    * keepAlive  是否开启常驻。
    * events  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'keepAlive' => 'setKeepAlive',
            'events' => 'setEvents',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置文件名称。
    * status  pipeline状态。
    * keepAlive  是否开启常驻。
    * events  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'keepAlive' => 'getKeepAlive',
            'events' => 'getEvents',
            'updateAt' => 'getUpdateAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['keepAlive'] = isset($data['keepAlive']) ? $data['keepAlive'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    * Gets name
    *  配置文件名称。
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
    * @param string|null $name 配置文件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  pipeline状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status pipeline状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets keepAlive
    *  是否开启常驻。
    *
    * @return bool|null
    */
    public function getKeepAlive()
    {
        return $this->container['keepAlive'];
    }

    /**
    * Sets keepAlive
    *
    * @param bool|null $keepAlive 是否开启常驻。
    *
    * @return $this
    */
    public function setKeepAlive($keepAlive)
    {
        $this->container['keepAlive'] = $keepAlive;
        return $this;
    }

    /**
    * Gets events
    *  事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    *
    * @return string|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string|null $events 事件只有在“工作中”状态才可以实时查看（需要手动刷新），“已停止”状态请到output端查看迁移数据量。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

