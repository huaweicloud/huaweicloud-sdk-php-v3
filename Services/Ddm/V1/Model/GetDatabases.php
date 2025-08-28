<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDatabases implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDatabases';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbslot  分片数。
    * name  分片名称。
    * status  状态。
    * created  创建时间。
    * updated  最近更新时间。
    * id  所在RDS的id。
    * idName  所在RDS的名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbslot' => 'int',
            'name' => 'string',
            'status' => 'string',
            'created' => 'int',
            'updated' => 'int',
            'id' => 'string',
            'idName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbslot  分片数。
    * name  分片名称。
    * status  状态。
    * created  创建时间。
    * updated  最近更新时间。
    * id  所在RDS的id。
    * idName  所在RDS的名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbslot' => null,
        'name' => null,
        'status' => null,
        'created' => 'int64',
        'updated' => 'int64',
        'id' => null,
        'idName' => null
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
    * dbslot  分片数。
    * name  分片名称。
    * status  状态。
    * created  创建时间。
    * updated  最近更新时间。
    * id  所在RDS的id。
    * idName  所在RDS的名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbslot' => 'dbslot',
            'name' => 'name',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'id' => 'id',
            'idName' => 'idName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbslot  分片数。
    * name  分片名称。
    * status  状态。
    * created  创建时间。
    * updated  最近更新时间。
    * id  所在RDS的id。
    * idName  所在RDS的名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbslot' => 'setDbslot',
            'name' => 'setName',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'id' => 'setId',
            'idName' => 'setIdName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbslot  分片数。
    * name  分片名称。
    * status  状态。
    * created  创建时间。
    * updated  最近更新时间。
    * id  所在RDS的id。
    * idName  所在RDS的名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbslot' => 'getDbslot',
            'name' => 'getName',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'id' => 'getId',
            'idName' => 'getIdName'
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
        $this->container['dbslot'] = isset($data['dbslot']) ? $data['dbslot'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['idName'] = isset($data['idName']) ? $data['idName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbslot'] === null) {
            $invalidProperties[] = "'dbslot' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['idName'] === null) {
            $invalidProperties[] = "'idName' can't be null";
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
    * Gets dbslot
    *  分片数。
    *
    * @return int
    */
    public function getDbslot()
    {
        return $this->container['dbslot'];
    }

    /**
    * Sets dbslot
    *
    * @param int $dbslot 分片数。
    *
    * @return $this
    */
    public function setDbslot($dbslot)
    {
        $this->container['dbslot'] = $dbslot;
        return $this;
    }

    /**
    * Gets name
    *  分片名称。
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
    * @param string $name 分片名称。
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
    * Gets created
    *  创建时间。
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
    * @param int $created 创建时间。
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
    *  最近更新时间。
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
    * @param int $updated 最近更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets id
    *  所在RDS的id。
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
    * @param string $id 所在RDS的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets idName
    *  所在RDS的名称。
    *
    * @return string
    */
    public function getIdName()
    {
        return $this->container['idName'];
    }

    /**
    * Sets idName
    *
    * @param string $idName 所在RDS的名称。
    *
    * @return $this
    */
    public function setIdName($idName)
    {
        $this->container['idName'] = $idName;
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

