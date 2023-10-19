<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteServiceItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteServiceItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  服务组id
    * serviceItemIds  服务组成员id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'string',
            'serviceItemIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  服务组id
    * serviceItemIds  服务组成员id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => null,
        'serviceItemIds' => null
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
    * setId  服务组id
    * serviceItemIds  服务组成员id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'set_id',
            'serviceItemIds' => 'service_item_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  服务组id
    * serviceItemIds  服务组成员id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'serviceItemIds' => 'setServiceItemIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  服务组id
    * serviceItemIds  服务组成员id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'serviceItemIds' => 'getServiceItemIds'
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
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['serviceItemIds'] = isset($data['serviceItemIds']) ? $data['serviceItemIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['setId'] === null) {
            $invalidProperties[] = "'setId' can't be null";
        }
        if ($this->container['serviceItemIds'] === null) {
            $invalidProperties[] = "'serviceItemIds' can't be null";
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
    * Gets setId
    *  服务组id
    *
    * @return string
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string $setId 服务组id
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
        return $this;
    }

    /**
    * Gets serviceItemIds
    *  服务组成员id列表
    *
    * @return string[]
    */
    public function getServiceItemIds()
    {
        return $this->container['serviceItemIds'];
    }

    /**
    * Sets serviceItemIds
    *
    * @param string[] $serviceItemIds 服务组成员id列表
    *
    * @return $this
    */
    public function setServiceItemIds($serviceItemIds)
    {
        $this->container['serviceItemIds'] = $serviceItemIds;
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

