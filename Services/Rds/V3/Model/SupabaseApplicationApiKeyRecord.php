<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseApplicationApiKeyRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseApplicationApiKeyRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * remark  remark
    * status  status
    * type  type
    * createdUser  createdUser
    * updatedUser  updatedUser
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'remark' => 'string',
            'status' => 'string',
            'type' => 'string',
            'createdUser' => 'string',
            'updatedUser' => 'string',
            'createdTime' => 'int',
            'updatedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * remark  remark
    * status  status
    * type  type
    * createdUser  createdUser
    * updatedUser  updatedUser
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'remark' => null,
        'status' => null,
        'type' => null,
        'createdUser' => null,
        'updatedUser' => null,
        'createdTime' => 'int64',
        'updatedTime' => 'int64'
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
    * id  id
    * name  name
    * remark  remark
    * status  status
    * type  type
    * createdUser  createdUser
    * updatedUser  updatedUser
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'remark' => 'remark',
            'status' => 'status',
            'type' => 'type',
            'createdUser' => 'created_user',
            'updatedUser' => 'updated_user',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * remark  remark
    * status  status
    * type  type
    * createdUser  createdUser
    * updatedUser  updatedUser
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'remark' => 'setRemark',
            'status' => 'setStatus',
            'type' => 'setType',
            'createdUser' => 'setCreatedUser',
            'updatedUser' => 'setUpdatedUser',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * remark  remark
    * status  status
    * type  type
    * createdUser  createdUser
    * updatedUser  updatedUser
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'remark' => 'getRemark',
            'status' => 'getStatus',
            'type' => 'getType',
            'createdUser' => 'getCreatedUser',
            'updatedUser' => 'getUpdatedUser',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime'
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
    const STATUS_NORMAL = 'normal';
    const STATUS_CREATING = 'creating';
    const STATUS_CREATEFAIL = 'createfail';
    const STATUS_DELETED = 'deleted';
    const TYPE_PUBLISHABLE = 'publishable';
    const TYPE_SECRET = 'secret';
    const TYPE_ANON = 'anon';
    const TYPE_SERVICE_ROLE = 'service_role';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_CREATING,
            self::STATUS_CREATEFAIL,
            self::STATUS_DELETED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PUBLISHABLE,
            self::TYPE_SECRET,
            self::TYPE_ANON,
            self::TYPE_SERVICE_ROLE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdUser'] = isset($data['createdUser']) ? $data['createdUser'] : null;
        $this->container['updatedUser'] = isset($data['updatedUser']) ? $data['updatedUser'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  id
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
    * @param string|null $id id
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
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets remark
    *  remark
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark remark
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets status
    *  status
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
    * @param string|null $status status
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
    *  type
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdUser
    *  createdUser
    *
    * @return string|null
    */
    public function getCreatedUser()
    {
        return $this->container['createdUser'];
    }

    /**
    * Sets createdUser
    *
    * @param string|null $createdUser createdUser
    *
    * @return $this
    */
    public function setCreatedUser($createdUser)
    {
        $this->container['createdUser'] = $createdUser;
        return $this;
    }

    /**
    * Gets updatedUser
    *  updatedUser
    *
    * @return string|null
    */
    public function getUpdatedUser()
    {
        return $this->container['updatedUser'];
    }

    /**
    * Sets updatedUser
    *
    * @param string|null $updatedUser updatedUser
    *
    * @return $this
    */
    public function setUpdatedUser($updatedUser)
    {
        $this->container['updatedUser'] = $updatedUser;
        return $this;
    }

    /**
    * Gets createdTime
    *  createdTime
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime createdTime
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  updatedTime
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime updatedTime
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

