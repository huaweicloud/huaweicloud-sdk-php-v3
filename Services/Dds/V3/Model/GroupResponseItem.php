<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupResponseItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupResponseItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  节点类型。 取值： - shard - config - mongos - replica - single
    * id  组ID。节点类型为shard和config时，该参数有效。
    * name  组名称。节点类型为shard和config时，该参数有效。
    * status  组状态。节点类型为shard和config时，该参数有效。
    * volume  volume
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'volume' => '\HuaweiCloud\SDK\Dds\V3\Model\Volume',
            'nodes' => '\HuaweiCloud\SDK\Dds\V3\Model\NodeItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  节点类型。 取值： - shard - config - mongos - replica - single
    * id  组ID。节点类型为shard和config时，该参数有效。
    * name  组名称。节点类型为shard和config时，该参数有效。
    * status  组状态。节点类型为shard和config时，该参数有效。
    * volume  volume
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'volume' => null,
        'nodes' => null
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
    * type  节点类型。 取值： - shard - config - mongos - replica - single
    * id  组ID。节点类型为shard和config时，该参数有效。
    * name  组名称。节点类型为shard和config时，该参数有效。
    * status  组状态。节点类型为shard和config时，该参数有效。
    * volume  volume
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'volume' => 'volume',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  节点类型。 取值： - shard - config - mongos - replica - single
    * id  组ID。节点类型为shard和config时，该参数有效。
    * name  组名称。节点类型为shard和config时，该参数有效。
    * status  组状态。节点类型为shard和config时，该参数有效。
    * volume  volume
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'volume' => 'setVolume',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  节点类型。 取值： - shard - config - mongos - replica - single
    * id  组ID。节点类型为shard和config时，该参数有效。
    * name  组名称。节点类型为shard和config时，该参数有效。
    * status  组状态。节点类型为shard和config时，该参数有效。
    * volume  volume
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'volume' => 'getVolume',
            'nodes' => 'getNodes'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
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
    * Gets type
    *  节点类型。 取值： - shard - config - mongos - replica - single
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 节点类型。 取值： - shard - config - mongos - replica - single
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  组ID。节点类型为shard和config时，该参数有效。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 组ID。节点类型为shard和config时，该参数有效。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  组名称。节点类型为shard和config时，该参数有效。
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
    * @param string $name 组名称。节点类型为shard和config时，该参数有效。
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
    *  组状态。节点类型为shard和config时，该参数有效。
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
    * @param string $status 组状态。节点类型为shard和config时，该参数有效。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\Volume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\Volume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets nodes
    *  节点信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\NodeItem[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\NodeItem[] $nodes 节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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

