<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  状态uuid
    * statusId  状态数字id
    * name  状态名称
    * trackerIds  关联的工作项类型列表
    * statusAttribute  statusAttribute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'statusId' => 'int',
            'name' => 'string',
            'trackerIds' => 'int[]',
            'statusAttribute' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttribute'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  状态uuid
    * statusId  状态数字id
    * name  状态名称
    * trackerIds  关联的工作项类型列表
    * statusAttribute  statusAttribute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'statusId' => 'int32',
        'name' => null,
        'trackerIds' => 'int32',
        'statusAttribute' => null
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
    * id  状态uuid
    * statusId  状态数字id
    * name  状态名称
    * trackerIds  关联的工作项类型列表
    * statusAttribute  statusAttribute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'statusId' => 'status_id',
            'name' => 'name',
            'trackerIds' => 'tracker_ids',
            'statusAttribute' => 'status_attribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  状态uuid
    * statusId  状态数字id
    * name  状态名称
    * trackerIds  关联的工作项类型列表
    * statusAttribute  statusAttribute
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'statusId' => 'setStatusId',
            'name' => 'setName',
            'trackerIds' => 'setTrackerIds',
            'statusAttribute' => 'setStatusAttribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  状态uuid
    * statusId  状态数字id
    * name  状态名称
    * trackerIds  关联的工作项类型列表
    * statusAttribute  statusAttribute
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'statusId' => 'getStatusId',
            'name' => 'getName',
            'trackerIds' => 'getTrackerIds',
            'statusAttribute' => 'getStatusAttribute'
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
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['trackerIds'] = isset($data['trackerIds']) ? $data['trackerIds'] : null;
        $this->container['statusAttribute'] = isset($data['statusAttribute']) ? $data['statusAttribute'] : null;
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
    *  状态uuid
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
    * @param string|null $id 状态uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets statusId
    *  状态数字id
    *
    * @return int|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param int|null $statusId 状态数字id
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets name
    *  状态名称
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
    * @param string|null $name 状态名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets trackerIds
    *  关联的工作项类型列表
    *
    * @return int[]|null
    */
    public function getTrackerIds()
    {
        return $this->container['trackerIds'];
    }

    /**
    * Sets trackerIds
    *
    * @param int[]|null $trackerIds 关联的工作项类型列表
    *
    * @return $this
    */
    public function setTrackerIds($trackerIds)
    {
        $this->container['trackerIds'] = $trackerIds;
        return $this;
    }

    /**
    * Gets statusAttribute
    *  statusAttribute
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttribute|null
    */
    public function getStatusAttribute()
    {
        return $this->container['statusAttribute'];
    }

    /**
    * Sets statusAttribute
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttribute|null $statusAttribute statusAttribute
    *
    * @return $this
    */
    public function setStatusAttribute($statusAttribute)
    {
        $this->container['statusAttribute'] = $statusAttribute;
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

