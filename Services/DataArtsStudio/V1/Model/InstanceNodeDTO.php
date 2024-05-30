<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceNodeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceNodeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点ID。
    * name  节点名称。
    * privateIp  节点IP地址。
    * status  节点状态。
    * createUser  节点创建人。
    * createTime  节点创建时间。
    * gatewayVersion  节点版本号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'privateIp' => 'string',
            'status' => 'string',
            'createUser' => 'string',
            'createTime' => 'string',
            'gatewayVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点ID。
    * name  节点名称。
    * privateIp  节点IP地址。
    * status  节点状态。
    * createUser  节点创建人。
    * createTime  节点创建时间。
    * gatewayVersion  节点版本号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'privateIp' => null,
        'status' => null,
        'createUser' => null,
        'createTime' => null,
        'gatewayVersion' => null
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
    * id  节点ID。
    * name  节点名称。
    * privateIp  节点IP地址。
    * status  节点状态。
    * createUser  节点创建人。
    * createTime  节点创建时间。
    * gatewayVersion  节点版本号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'privateIp' => 'private_ip',
            'status' => 'status',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'gatewayVersion' => 'gateway_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点ID。
    * name  节点名称。
    * privateIp  节点IP地址。
    * status  节点状态。
    * createUser  节点创建人。
    * createTime  节点创建时间。
    * gatewayVersion  节点版本号。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'privateIp' => 'setPrivateIp',
            'status' => 'setStatus',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'gatewayVersion' => 'setGatewayVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点ID。
    * name  节点名称。
    * privateIp  节点IP地址。
    * status  节点状态。
    * createUser  节点创建人。
    * createTime  节点创建时间。
    * gatewayVersion  节点版本号。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'privateIp' => 'getPrivateIp',
            'status' => 'getStatus',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'gatewayVersion' => 'getGatewayVersion'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['gatewayVersion'] = isset($data['gatewayVersion']) ? $data['gatewayVersion'] : null;
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
    *  节点ID。
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
    * @param string|null $id 节点ID。
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
    *  节点名称。
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
    * @param string|null $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateIp
    *  节点IP地址。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 节点IP地址。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。
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
    * @param string|null $status 节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createUser
    *  节点创建人。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 节点创建人。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  节点创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 节点创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets gatewayVersion
    *  节点版本号。
    *
    * @return string|null
    */
    public function getGatewayVersion()
    {
        return $this->container['gatewayVersion'];
    }

    /**
    * Sets gatewayVersion
    *
    * @param string|null $gatewayVersion 节点版本号。
    *
    * @return $this
    */
    public function setGatewayVersion($gatewayVersion)
    {
        $this->container['gatewayVersion'] = $gatewayVersion;
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

