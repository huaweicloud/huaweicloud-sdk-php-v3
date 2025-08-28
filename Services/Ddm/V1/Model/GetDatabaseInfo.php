<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDatabaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDatabaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  逻辑库名称。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * status  逻辑库状态。
    * created  逻辑库的创建时间。
    * usedRds  逻辑库关联的RDS实例信息。
    * shardUnit  单个RDS上的逻辑库分片数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'shardMode' => 'string',
            'shardNumber' => 'int',
            'status' => 'string',
            'created' => 'int',
            'usedRds' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetDatabaseUsedRds[]',
            'shardUnit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  逻辑库名称。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * status  逻辑库状态。
    * created  逻辑库的创建时间。
    * usedRds  逻辑库关联的RDS实例信息。
    * shardUnit  单个RDS上的逻辑库分片数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'shardMode' => null,
        'shardNumber' => null,
        'status' => null,
        'created' => 'int64',
        'usedRds' => null,
        'shardUnit' => null
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
    * name  逻辑库名称。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * status  逻辑库状态。
    * created  逻辑库的创建时间。
    * usedRds  逻辑库关联的RDS实例信息。
    * shardUnit  单个RDS上的逻辑库分片数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'shardMode' => 'shard_mode',
            'shardNumber' => 'shard_number',
            'status' => 'status',
            'created' => 'created',
            'usedRds' => 'used_rds',
            'shardUnit' => 'shard_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  逻辑库名称。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * status  逻辑库状态。
    * created  逻辑库的创建时间。
    * usedRds  逻辑库关联的RDS实例信息。
    * shardUnit  单个RDS上的逻辑库分片数。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'shardMode' => 'setShardMode',
            'shardNumber' => 'setShardNumber',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'usedRds' => 'setUsedRds',
            'shardUnit' => 'setShardUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  逻辑库名称。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * status  逻辑库状态。
    * created  逻辑库的创建时间。
    * usedRds  逻辑库关联的RDS实例信息。
    * shardUnit  单个RDS上的逻辑库分片数。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'shardMode' => 'getShardMode',
            'shardNumber' => 'getShardNumber',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'usedRds' => 'getUsedRds',
            'shardUnit' => 'getShardUnit'
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
        $this->container['shardMode'] = isset($data['shardMode']) ? $data['shardMode'] : null;
        $this->container['shardNumber'] = isset($data['shardNumber']) ? $data['shardNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['usedRds'] = isset($data['usedRds']) ? $data['usedRds'] : null;
        $this->container['shardUnit'] = isset($data['shardUnit']) ? $data['shardUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['shardMode'] === null) {
            $invalidProperties[] = "'shardMode' can't be null";
        }
        if ($this->container['shardNumber'] === null) {
            $invalidProperties[] = "'shardNumber' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['usedRds'] === null) {
            $invalidProperties[] = "'usedRds' can't be null";
        }
        if ($this->container['shardUnit'] === null) {
            $invalidProperties[] = "'shardUnit' can't be null";
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
    *  逻辑库名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 逻辑库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets shardMode
    *  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    *
    * @return string
    */
    public function getShardMode()
    {
        return $this->container['shardMode'];
    }

    /**
    * Sets shardMode
    *
    * @param string $shardMode 逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    *
    * @return $this
    */
    public function setShardMode($shardMode)
    {
        $this->container['shardMode'] = $shardMode;
        return $this;
    }

    /**
    * Gets shardNumber
    *  同一种工作模式下逻辑库分片的数量。
    *
    * @return int
    */
    public function getShardNumber()
    {
        return $this->container['shardNumber'];
    }

    /**
    * Sets shardNumber
    *
    * @param int $shardNumber 同一种工作模式下逻辑库分片的数量。
    *
    * @return $this
    */
    public function setShardNumber($shardNumber)
    {
        $this->container['shardNumber'] = $shardNumber;
        return $this;
    }

    /**
    * Gets status
    *  逻辑库状态。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 逻辑库状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets created
    *  逻辑库的创建时间。
    *
    * @return int
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int $created 逻辑库的创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets usedRds
    *  逻辑库关联的RDS实例信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetDatabaseUsedRds[]
    */
    public function getUsedRds()
    {
        return $this->container['usedRds'];
    }

    /**
    * Sets usedRds
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetDatabaseUsedRds[] $usedRds 逻辑库关联的RDS实例信息。
    *
    * @return $this
    */
    public function setUsedRds($usedRds)
    {
        $this->container['usedRds'] = $usedRds;
        return $this;
    }

    /**
    * Gets shardUnit
    *  单个RDS上的逻辑库分片数。
    *
    * @return int
    */
    public function getShardUnit()
    {
        return $this->container['shardUnit'];
    }

    /**
    * Sets shardUnit
    *
    * @param int $shardUnit 单个RDS上的逻辑库分片数。
    *
    * @return $this
    */
    public function setShardUnit($shardUnit)
    {
        $this->container['shardUnit'] = $shardUnit;
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

