<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteClusterPortRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteClusterPortRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * id  端口的id
    * type  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'id' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * id  端口的id
    * type  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'id' => null,
        'type' => null
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
    * clusterId  集群ID
    * id  端口的id
    * type  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'id' => 'id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * id  端口的id
    * type  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'id' => 'setId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * id  端口的id
    * type  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'id' => 'getId',
            'type' => 'getType'
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
    const TYPE_DELETE_DB = 'DELETE_DB';
    const TYPE_TRY_DELETE = 'TRY_DELETE';
    const TYPE_FORCE_DELETE = 'FORCE_DELETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DELETE_DB,
            self::TYPE_TRY_DELETE,
            self::TYPE_FORCE_DELETE,
        ];
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['clusterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets clusterId
    *  集群ID
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
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets id
    *  端口的id
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
    * @param string $id 端口的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
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
    * @param string $type DELETE_DB 仅删除CPCS数据库中的记录，不删除elb资源。 TRY_DELETE 当被删除的端口的wrong字段为false时，删除elb资源。不为false时仅删除数据库。 FORCE_DELETE 删除cpcs数据库和elb资源
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

