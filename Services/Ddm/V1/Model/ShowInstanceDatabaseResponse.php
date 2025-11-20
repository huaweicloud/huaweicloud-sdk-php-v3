<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceDatabaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceDatabaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shards  逻辑库分片信息。
    * status  逻辑库状态。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * name  逻辑库名称。
    * shardMode  拆分模式。
    * shardNumber  逻辑库分片数。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shards' => '\HuaweiCloud\SDK\Ddm\V1\Model\Shards[]',
            'status' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'name' => 'string',
            'shardMode' => 'string',
            'shardNumber' => 'int',
            'dataNodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\DataNodes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shards  逻辑库分片信息。
    * status  逻辑库状态。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * name  逻辑库名称。
    * shardMode  拆分模式。
    * shardNumber  逻辑库分片数。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shards' => null,
        'status' => null,
        'created' => null,
        'updated' => null,
        'name' => null,
        'shardMode' => null,
        'shardNumber' => null,
        'dataNodes' => null
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
    * shards  逻辑库分片信息。
    * status  逻辑库状态。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * name  逻辑库名称。
    * shardMode  拆分模式。
    * shardNumber  逻辑库分片数。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shards' => 'shards',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'name' => 'name',
            'shardMode' => 'shard_mode',
            'shardNumber' => 'shard_number',
            'dataNodes' => 'data_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shards  逻辑库分片信息。
    * status  逻辑库状态。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * name  逻辑库名称。
    * shardMode  拆分模式。
    * shardNumber  逻辑库分片数。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'shards' => 'setShards',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'name' => 'setName',
            'shardMode' => 'setShardMode',
            'shardNumber' => 'setShardNumber',
            'dataNodes' => 'setDataNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shards  逻辑库分片信息。
    * status  逻辑库状态。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * name  逻辑库名称。
    * shardMode  拆分模式。
    * shardNumber  逻辑库分片数。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'shards' => 'getShards',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'name' => 'getName',
            'shardMode' => 'getShardMode',
            'shardNumber' => 'getShardNumber',
            'dataNodes' => 'getDataNodes'
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
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shardMode'] = isset($data['shardMode']) ? $data['shardMode'] : null;
        $this->container['shardNumber'] = isset($data['shardNumber']) ? $data['shardNumber'] : null;
        $this->container['dataNodes'] = isset($data['dataNodes']) ? $data['dataNodes'] : null;
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
    * Gets shards
    *  逻辑库分片信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\Shards[]|null
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\Shards[]|null $shards 逻辑库分片信息。
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets status
    *  逻辑库状态。
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
    * @param string|null $status 逻辑库状态。
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
    *  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets name
    *  逻辑库名称。
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
    * @param string|null $name 逻辑库名称。
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
    *  拆分模式。
    *
    * @return string|null
    */
    public function getShardMode()
    {
        return $this->container['shardMode'];
    }

    /**
    * Sets shardMode
    *
    * @param string|null $shardMode 拆分模式。
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
    *  逻辑库分片数。
    *
    * @return int|null
    */
    public function getShardNumber()
    {
        return $this->container['shardNumber'];
    }

    /**
    * Sets shardNumber
    *
    * @param int|null $shardNumber 逻辑库分片数。
    *
    * @return $this
    */
    public function setShardNumber($shardNumber)
    {
        $this->container['shardNumber'] = $shardNumber;
        return $this;
    }

    /**
    * Gets dataNodes
    *  关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DataNodes[]|null
    */
    public function getDataNodes()
    {
        return $this->container['dataNodes'];
    }

    /**
    * Sets dataNodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DataNodes[]|null $dataNodes 关联的后端DN信息。
    *
    * @return $this
    */
    public function setDataNodes($dataNodes)
    {
        $this->container['dataNodes'] = $dataNodes;
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

