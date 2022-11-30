<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRetrievalResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRetrievalResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  找回请求ID。
    * zoneName  域名名称。
    * record  record
    * status  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'zoneName' => 'string',
            'record' => '\HuaweiCloud\SDK\Dns\V2\Model\CreatePublicZoneFindRespRecord',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  找回请求ID。
    * zoneName  域名名称。
    * record  record
    * status  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'zoneName' => null,
        'record' => null,
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  找回请求ID。
    * zoneName  域名名称。
    * record  record
    * status  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'zoneName' => 'zone_name',
            'record' => 'record',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  找回请求ID。
    * zoneName  域名名称。
    * record  record
    * status  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'zoneName' => 'setZoneName',
            'record' => 'setRecord',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  找回请求ID。
    * zoneName  域名名称。
    * record  record
    * status  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'zoneName' => 'getZoneName',
            'record' => 'getRecord',
            'status' => 'getStatus',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  找回请求ID。
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
    * @param string|null $id 找回请求ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets zoneName
    *  域名名称。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName 域名名称。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets record
    *  record
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\CreatePublicZoneFindRespRecord|null
    */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
    * Sets record
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\CreatePublicZoneFindRespRecord|null $record record
    *
    * @return $this
    */
    public function setRecord($record)
    {
        $this->container['record'] = $record;
        return $this;
    }

    /**
    * Gets status
    *  状态，(PENDING,VERIFIED,CREATED,EXPIRED)
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
    * @param string|null $status 状态，(PENDING,VERIFIED,CREATED,EXPIRED)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
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
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。
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

