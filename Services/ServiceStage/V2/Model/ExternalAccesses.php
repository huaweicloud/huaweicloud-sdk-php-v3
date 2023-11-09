<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalAccesses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalAccesses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID。
    * protocol  protocol
    * address  访问地址。
    * forwardPort  应用组件进程监听端口
    * type  type
    * status  status
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'protocol' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessProtocol',
            'address' => 'string',
            'forwardPort' => 'int',
            'type' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessType',
            'status' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessStatus',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID。
    * protocol  protocol
    * address  访问地址。
    * forwardPort  应用组件进程监听端口
    * type  type
    * status  status
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'protocol' => null,
        'address' => null,
        'forwardPort' => null,
        'type' => null,
        'status' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  ID。
    * protocol  protocol
    * address  访问地址。
    * forwardPort  应用组件进程监听端口
    * type  type
    * status  status
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'protocol' => 'protocol',
            'address' => 'address',
            'forwardPort' => 'forward_port',
            'type' => 'type',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID。
    * protocol  protocol
    * address  访问地址。
    * forwardPort  应用组件进程监听端口
    * type  type
    * status  status
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'protocol' => 'setProtocol',
            'address' => 'setAddress',
            'forwardPort' => 'setForwardPort',
            'type' => 'setType',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID。
    * protocol  protocol
    * address  访问地址。
    * forwardPort  应用组件进程监听端口
    * type  type
    * status  status
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'protocol' => 'getProtocol',
            'address' => 'getAddress',
            'forwardPort' => 'getForwardPort',
            'type' => 'getType',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['forwardPort'] = isset($data['forwardPort']) ? $data['forwardPort'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['forwardPort'] === null) {
            $invalidProperties[] = "'forwardPort' can't be null";
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
    *  ID。
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
    * @param string|null $id ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets protocol
    *  protocol
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessProtocol
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessProtocol $protocol protocol
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets address
    *  访问地址。
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 访问地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets forwardPort
    *  应用组件进程监听端口
    *
    * @return int
    */
    public function getForwardPort()
    {
        return $this->container['forwardPort'];
    }

    /**
    * Sets forwardPort
    *
    * @param int $forwardPort 应用组件进程监听端口
    *
    * @return $this
    */
    public function setForwardPort($forwardPort)
    {
        $this->container['forwardPort'] = $forwardPort;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessType|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessType|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccessStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

