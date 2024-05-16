<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SharedPrincipal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SharedPrincipal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceShareId  资源使用者绑定的资源共享实例的ID。
    * id  资源使用者的账号ID或URN。
    * createdAt  资源使用者与资源共享实例关联的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceShareId' => 'string',
            'id' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceShareId  资源使用者绑定的资源共享实例的ID。
    * id  资源使用者的账号ID或URN。
    * createdAt  资源使用者与资源共享实例关联的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceShareId' => null,
        'id' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * resourceShareId  资源使用者绑定的资源共享实例的ID。
    * id  资源使用者的账号ID或URN。
    * createdAt  资源使用者与资源共享实例关联的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceShareId' => 'resource_share_id',
            'id' => 'id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceShareId  资源使用者绑定的资源共享实例的ID。
    * id  资源使用者的账号ID或URN。
    * createdAt  资源使用者与资源共享实例关联的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceShareId' => 'setResourceShareId',
            'id' => 'setId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceShareId  资源使用者绑定的资源共享实例的ID。
    * id  资源使用者的账号ID或URN。
    * createdAt  资源使用者与资源共享实例关联的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceShareId' => 'getResourceShareId',
            'id' => 'getId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['resourceShareId'] = isset($data['resourceShareId']) ? $data['resourceShareId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceShareId']) && (mb_strlen($this->container['resourceShareId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceShareId']) && (mb_strlen($this->container['resourceShareId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 1500)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
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
    * Gets resourceShareId
    *  资源使用者绑定的资源共享实例的ID。
    *
    * @return string|null
    */
    public function getResourceShareId()
    {
        return $this->container['resourceShareId'];
    }

    /**
    * Sets resourceShareId
    *
    * @param string|null $resourceShareId 资源使用者绑定的资源共享实例的ID。
    *
    * @return $this
    */
    public function setResourceShareId($resourceShareId)
    {
        $this->container['resourceShareId'] = $resourceShareId;
        return $this;
    }

    /**
    * Gets id
    *  资源使用者的账号ID或URN。
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
    * @param string|null $id 资源使用者的账号ID或URN。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源使用者与资源共享实例关联的时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 资源使用者与资源共享实例关联的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  最后一次更新资源共享实例的时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 最后一次更新资源共享实例的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

