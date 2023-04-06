<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Snapshots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Snapshots';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * finished  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    * type  快照创建类型
    * clusterId  快照对应的集群ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'started' => 'string',
            'finished' => 'string',
            'size' => 'double',
            'status' => 'string',
            'type' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * finished  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    * type  快照创建类型
    * clusterId  快照对应的集群ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'started' => null,
        'finished' => null,
        'size' => 'double',
        'status' => null,
        'type' => null,
        'clusterId' => null
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
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * finished  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    * type  快照创建类型
    * clusterId  快照对应的集群ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'started' => 'started',
            'finished' => 'finished',
            'size' => 'size',
            'status' => 'status',
            'type' => 'type',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * finished  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    * type  快照创建类型
    * clusterId  快照对应的集群ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'started' => 'setStarted',
            'finished' => 'setFinished',
            'size' => 'setSize',
            'status' => 'setStatus',
            'type' => 'setType',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * finished  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    * type  快照创建类型
    * clusterId  快照对应的集群ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'started' => 'getStarted',
            'finished' => 'getFinished',
            'size' => 'getSize',
            'status' => 'getStatus',
            'type' => 'getType',
            'clusterId' => 'getClusterId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['started'] === null) {
            $invalidProperties[] = "'started' can't be null";
        }
        if ($this->container['finished'] === null) {
            $invalidProperties[] = "'finished' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    *  快照ID。
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
    * @param string $id 快照ID。
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
    *  快照名称。
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
    * @param string $name 快照名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  快照描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 快照描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets started
    *  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string
    */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
    * Sets started
    *
    * @param string $started 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setStarted($started)
    {
        $this->container['started'] = $started;
        return $this;
    }

    /**
    * Gets finished
    *  快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string
    */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
    * Sets finished
    *
    * @param string $finished 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;
        return $this;
    }

    /**
    * Gets size
    *  快照大小，单位 GB。
    *
    * @return double
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double $size 快照大小，单位 GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
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
    * @param string $status 快照状态：  - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  快照创建类型
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
    * @param string $type 快照创建类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clusterId
    *  快照对应的集群ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 快照对应的集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

