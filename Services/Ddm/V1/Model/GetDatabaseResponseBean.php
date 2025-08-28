<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDatabaseResponseBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDatabaseResponseBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  逻辑库名称。
    * created  逻辑库的创建时间。
    * status  状态。
    * updated  DDM实例最后更新时间。
    * databases  逻辑库分片的详细信息。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * shardUnit  单个RDS上的逻辑库分片数。
    * dataVips  连接逻辑库使用的IP:端口。
    * usedRds  关联RDS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'created' => 'int',
            'status' => 'string',
            'updated' => 'int',
            'databases' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetDatabases[]',
            'shardMode' => 'string',
            'shardNumber' => 'int',
            'shardUnit' => 'int',
            'dataVips' => 'string[]',
            'usedRds' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetDatabaseUsedRds[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  逻辑库名称。
    * created  逻辑库的创建时间。
    * status  状态。
    * updated  DDM实例最后更新时间。
    * databases  逻辑库分片的详细信息。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * shardUnit  单个RDS上的逻辑库分片数。
    * dataVips  连接逻辑库使用的IP:端口。
    * usedRds  关联RDS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'created' => 'int64',
        'status' => null,
        'updated' => 'int64',
        'databases' => null,
        'shardMode' => null,
        'shardNumber' => null,
        'shardUnit' => null,
        'dataVips' => null,
        'usedRds' => null
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
    * created  逻辑库的创建时间。
    * status  状态。
    * updated  DDM实例最后更新时间。
    * databases  逻辑库分片的详细信息。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * shardUnit  单个RDS上的逻辑库分片数。
    * dataVips  连接逻辑库使用的IP:端口。
    * usedRds  关联RDS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'created' => 'created',
            'status' => 'status',
            'updated' => 'updated',
            'databases' => 'databases',
            'shardMode' => 'shard_mode',
            'shardNumber' => 'shard_number',
            'shardUnit' => 'shard_unit',
            'dataVips' => 'dataVips',
            'usedRds' => 'used_rds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  逻辑库名称。
    * created  逻辑库的创建时间。
    * status  状态。
    * updated  DDM实例最后更新时间。
    * databases  逻辑库分片的详细信息。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * shardUnit  单个RDS上的逻辑库分片数。
    * dataVips  连接逻辑库使用的IP:端口。
    * usedRds  关联RDS
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'created' => 'setCreated',
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'databases' => 'setDatabases',
            'shardMode' => 'setShardMode',
            'shardNumber' => 'setShardNumber',
            'shardUnit' => 'setShardUnit',
            'dataVips' => 'setDataVips',
            'usedRds' => 'setUsedRds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  逻辑库名称。
    * created  逻辑库的创建时间。
    * status  状态。
    * updated  DDM实例最后更新时间。
    * databases  逻辑库分片的详细信息。
    * shardMode  逻辑库的工作模式。  - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。
    * shardUnit  单个RDS上的逻辑库分片数。
    * dataVips  连接逻辑库使用的IP:端口。
    * usedRds  关联RDS
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'created' => 'getCreated',
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'databases' => 'getDatabases',
            'shardMode' => 'getShardMode',
            'shardNumber' => 'getShardNumber',
            'shardUnit' => 'getShardUnit',
            'dataVips' => 'getDataVips',
            'usedRds' => 'getUsedRds'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['shardMode'] = isset($data['shardMode']) ? $data['shardMode'] : null;
        $this->container['shardNumber'] = isset($data['shardNumber']) ? $data['shardNumber'] : null;
        $this->container['shardUnit'] = isset($data['shardUnit']) ? $data['shardUnit'] : null;
        $this->container['dataVips'] = isset($data['dataVips']) ? $data['dataVips'] : null;
        $this->container['usedRds'] = isset($data['usedRds']) ? $data['usedRds'] : null;
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
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['databases'] === null) {
            $invalidProperties[] = "'databases' can't be null";
        }
        if ($this->container['shardMode'] === null) {
            $invalidProperties[] = "'shardMode' can't be null";
        }
        if ($this->container['shardNumber'] === null) {
            $invalidProperties[] = "'shardNumber' can't be null";
        }
        if ($this->container['shardUnit'] === null) {
            $invalidProperties[] = "'shardUnit' can't be null";
        }
        if ($this->container['dataVips'] === null) {
            $invalidProperties[] = "'dataVips' can't be null";
        }
        if ($this->container['usedRds'] === null) {
            $invalidProperties[] = "'usedRds' can't be null";
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
    * Gets status
    *  状态。
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
    * @param string $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
    *  DDM实例最后更新时间。
    *
    * @return int
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param int $updated DDM实例最后更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets databases
    *  逻辑库分片的详细信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetDatabases[]
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetDatabases[] $databases 逻辑库分片的详细信息。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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
    * Gets dataVips
    *  连接逻辑库使用的IP:端口。
    *
    * @return string[]
    */
    public function getDataVips()
    {
        return $this->container['dataVips'];
    }

    /**
    * Sets dataVips
    *
    * @param string[] $dataVips 连接逻辑库使用的IP:端口。
    *
    * @return $this
    */
    public function setDataVips($dataVips)
    {
        $this->container['dataVips'] = $dataVips;
        return $this;
    }

    /**
    * Gets usedRds
    *  关联RDS
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
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetDatabaseUsedRds[] $usedRds 关联RDS
    *
    * @return $this
    */
    public function setUsedRds($usedRds)
    {
        $this->container['usedRds'] = $usedRds;
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

