<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealTimeLogCollect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'realTimeLogCollect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志采集ID，通过系统UUID生成。
    * clusterId  集群ID。
    * indexPrefix  日志保存索引的前缀。
    * keepDays  日志保存时间。
    * targetClusterId  保存日志的目标集群ID。
    * status  日志实时采集任务状态。
    * createAt  日志实时采集任务开启时间。
    * updateAt  日志实时采集任务更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'indexPrefix' => 'string',
            'keepDays' => 'int',
            'targetClusterId' => 'string',
            'status' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志采集ID，通过系统UUID生成。
    * clusterId  集群ID。
    * indexPrefix  日志保存索引的前缀。
    * keepDays  日志保存时间。
    * targetClusterId  保存日志的目标集群ID。
    * status  日志实时采集任务状态。
    * createAt  日志实时采集任务开启时间。
    * updateAt  日志实时采集任务更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'indexPrefix' => null,
        'keepDays' => 'int32',
        'targetClusterId' => null,
        'status' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64'
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
    * id  日志采集ID，通过系统UUID生成。
    * clusterId  集群ID。
    * indexPrefix  日志保存索引的前缀。
    * keepDays  日志保存时间。
    * targetClusterId  保存日志的目标集群ID。
    * status  日志实时采集任务状态。
    * createAt  日志实时采集任务开启时间。
    * updateAt  日志实时采集任务更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'clusterId',
            'indexPrefix' => 'indexPrefix',
            'keepDays' => 'keepDays',
            'targetClusterId' => 'targetClusterId',
            'status' => 'status',
            'createAt' => 'createAt',
            'updateAt' => 'updateAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志采集ID，通过系统UUID生成。
    * clusterId  集群ID。
    * indexPrefix  日志保存索引的前缀。
    * keepDays  日志保存时间。
    * targetClusterId  保存日志的目标集群ID。
    * status  日志实时采集任务状态。
    * createAt  日志实时采集任务开启时间。
    * updateAt  日志实时采集任务更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'indexPrefix' => 'setIndexPrefix',
            'keepDays' => 'setKeepDays',
            'targetClusterId' => 'setTargetClusterId',
            'status' => 'setStatus',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志采集ID，通过系统UUID生成。
    * clusterId  集群ID。
    * indexPrefix  日志保存索引的前缀。
    * keepDays  日志保存时间。
    * targetClusterId  保存日志的目标集群ID。
    * status  日志实时采集任务状态。
    * createAt  日志实时采集任务开启时间。
    * updateAt  日志实时采集任务更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'indexPrefix' => 'getIndexPrefix',
            'keepDays' => 'getKeepDays',
            'targetClusterId' => 'getTargetClusterId',
            'status' => 'getStatus',
            'createAt' => 'getCreateAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['indexPrefix'] = isset($data['indexPrefix']) ? $data['indexPrefix'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['targetClusterId'] = isset($data['targetClusterId']) ? $data['targetClusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
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
        if ($this->container['indexPrefix'] === null) {
            $invalidProperties[] = "'indexPrefix' can't be null";
        }
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
        }
            if (($this->container['keepDays'] > 3650)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be smaller than or equal to 3650.";
            }
            if (($this->container['keepDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be bigger than or equal to 1.";
            }
        if ($this->container['targetClusterId'] === null) {
            $invalidProperties[] = "'targetClusterId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
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
    * Gets id
    *  日志采集ID，通过系统UUID生成。
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
    * @param string|null $id 日志采集ID，通过系统UUID生成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets indexPrefix
    *  日志保存索引的前缀。
    *
    * @return string
    */
    public function getIndexPrefix()
    {
        return $this->container['indexPrefix'];
    }

    /**
    * Sets indexPrefix
    *
    * @param string $indexPrefix 日志保存索引的前缀。
    *
    * @return $this
    */
    public function setIndexPrefix($indexPrefix)
    {
        $this->container['indexPrefix'] = $indexPrefix;
        return $this;
    }

    /**
    * Gets keepDays
    *  日志保存时间。
    *
    * @return int
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int $keepDays 日志保存时间。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets targetClusterId
    *  保存日志的目标集群ID。
    *
    * @return string
    */
    public function getTargetClusterId()
    {
        return $this->container['targetClusterId'];
    }

    /**
    * Sets targetClusterId
    *
    * @param string $targetClusterId 保存日志的目标集群ID。
    *
    * @return $this
    */
    public function setTargetClusterId($targetClusterId)
    {
        $this->container['targetClusterId'] = $targetClusterId;
        return $this;
    }

    /**
    * Gets status
    *  日志实时采集任务状态。
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
    * @param string $status 日志实时采集任务状态。
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
    *  日志实时采集任务开启时间。
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 日志实时采集任务开启时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  日志实时采集任务更新时间。
    *
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 日志实时采集任务更新时间。
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

