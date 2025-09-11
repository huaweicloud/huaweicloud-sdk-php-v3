<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Audit log ID
    * operation  操作(e.g., create, update, delete)
    * resourceType  资源类型
    * resource  资源名称
    * username  用户ID
    * opTime  操作时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'operation' => 'string',
            'resourceType' => 'string',
            'resource' => 'string',
            'username' => 'string',
            'opTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Audit log ID
    * operation  操作(e.g., create, update, delete)
    * resourceType  资源类型
    * resource  资源名称
    * username  用户ID
    * opTime  操作时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'operation' => null,
        'resourceType' => null,
        'resource' => null,
        'username' => null,
        'opTime' => null
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
    * id  Audit log ID
    * operation  操作(e.g., create, update, delete)
    * resourceType  资源类型
    * resource  资源名称
    * username  用户ID
    * opTime  操作时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operation' => 'operation',
            'resourceType' => 'resource_type',
            'resource' => 'resource',
            'username' => 'username',
            'opTime' => 'op_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Audit log ID
    * operation  操作(e.g., create, update, delete)
    * resourceType  资源类型
    * resource  资源名称
    * username  用户ID
    * opTime  操作时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operation' => 'setOperation',
            'resourceType' => 'setResourceType',
            'resource' => 'setResource',
            'username' => 'setUsername',
            'opTime' => 'setOpTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Audit log ID
    * operation  操作(e.g., create, update, delete)
    * resourceType  资源类型
    * resource  资源名称
    * username  用户ID
    * opTime  操作时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operation' => 'getOperation',
            'resourceType' => 'getResourceType',
            'resource' => 'getResource',
            'username' => 'getUsername',
            'opTime' => 'getOpTime'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['opTime'] = isset($data['opTime']) ? $data['opTime'] : null;
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
    *  Audit log ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id Audit log ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operation
    *  操作(e.g., create, update, delete)
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作(e.g., create, update, delete)
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resource
    *  资源名称
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 资源名称
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets username
    *  用户ID
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 用户ID
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets opTime
    *  操作时间
    *
    * @return string|null
    */
    public function getOpTime()
    {
        return $this->container['opTime'];
    }

    /**
    * Sets opTime
    *
    * @param string|null $opTime 操作时间
    *
    * @return $this
    */
    public function setOpTime($opTime)
    {
        $this->container['opTime'] = $opTime;
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

