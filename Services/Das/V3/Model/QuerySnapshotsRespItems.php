<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySnapshotsRespItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySnapshotsResp_items';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  snapshot编号
    * status  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    * createAt  创建时间
    * findLock  是否发现锁，1表示发现了锁，0表示没有
    * happenAt  发生锁的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'status' => 'int',
            'createAt' => 'int',
            'findLock' => 'int',
            'happenAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  snapshot编号
    * status  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    * createAt  创建时间
    * findLock  是否发现锁，1表示发现了锁，0表示没有
    * happenAt  发生锁的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'status' => 'int32',
        'createAt' => 'int32',
        'findLock' => 'int32',
        'happenAt' => 'int32'
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
    * id  snapshot编号
    * status  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    * createAt  创建时间
    * findLock  是否发现锁，1表示发现了锁，0表示没有
    * happenAt  发生锁的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'createAt' => 'create_at',
            'findLock' => 'find_lock',
            'happenAt' => 'happen_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  snapshot编号
    * status  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    * createAt  创建时间
    * findLock  是否发现锁，1表示发现了锁，0表示没有
    * happenAt  发生锁的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'createAt' => 'setCreateAt',
            'findLock' => 'setFindLock',
            'happenAt' => 'setHappenAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  snapshot编号
    * status  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    * createAt  创建时间
    * findLock  是否发现锁，1表示发现了锁，0表示没有
    * happenAt  发生锁的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'createAt' => 'getCreateAt',
            'findLock' => 'getFindLock',
            'happenAt' => 'getHappenAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['findLock'] = isset($data['findLock']) ? $data['findLock'] : null;
        $this->container['happenAt'] = isset($data['happenAt']) ? $data['happenAt'] : null;
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
    * Gets id
    *  snapshot编号
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id snapshot编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 表示状态，0表示等待，1表示正在运行，2表示失败，3表示成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets findLock
    *  是否发现锁，1表示发现了锁，0表示没有
    *
    * @return int|null
    */
    public function getFindLock()
    {
        return $this->container['findLock'];
    }

    /**
    * Sets findLock
    *
    * @param int|null $findLock 是否发现锁，1表示发现了锁，0表示没有
    *
    * @return $this
    */
    public function setFindLock($findLock)
    {
        $this->container['findLock'] = $findLock;
        return $this;
    }

    /**
    * Gets happenAt
    *  发生锁的时间
    *
    * @return int|null
    */
    public function getHappenAt()
    {
        return $this->container['happenAt'];
    }

    /**
    * Sets happenAt
    *
    * @param int|null $happenAt 发生锁的时间
    *
    * @return $this
    */
    public function setHappenAt($happenAt)
    {
        $this->container['happenAt'] = $happenAt;
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

