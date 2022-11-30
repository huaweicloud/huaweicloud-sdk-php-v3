<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddServiceItemsUsingPOSTRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddServiceItemsUsingPOSTRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  服务组id
    * serviceItems  添加服务组成员
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'string',
            'serviceItems' => '\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsUsingPOSTRequestBodyServiceItems[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  服务组id
    * serviceItems  添加服务组成员
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => null,
        'serviceItems' => null
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
    * serviceItems  添加服务组成员
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'set_id',
            'serviceItems' => 'service_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  服务组id
    * serviceItems  添加服务组成员
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'serviceItems' => 'setServiceItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  服务组id
    * serviceItems  添加服务组成员
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'serviceItems' => 'getServiceItems'
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
        $this->container['serviceItems'] = isset($data['serviceItems']) ? $data['serviceItems'] : null;
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
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['setId'])) {
                $invalidProperties[] = "invalid value for 'setId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['serviceItems'] === null) {
            $invalidProperties[] = "'serviceItems' can't be null";
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
    * Gets serviceItems
    *  添加服务组成员
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsUsingPOSTRequestBodyServiceItems[]
    */
    public function getServiceItems()
    {
        return $this->container['serviceItems'];
    }

    /**
    * Sets serviceItems
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsUsingPOSTRequestBodyServiceItems[] $serviceItems 添加服务组成员
    *
    * @return $this
    */
    public function setServiceItems($serviceItems)
    {
        $this->container['serviceItems'] = $serviceItems;
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

