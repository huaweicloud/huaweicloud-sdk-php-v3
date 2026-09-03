<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockRelationshipResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockRelationshipResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processList  会话列表
    * resourceList  资源列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processList' => '\HuaweiCloud\SDK\Das\V3\Model\DeadLockProcess[]',
            'resourceList' => '\HuaweiCloud\SDK\Das\V3\Model\DeadLockResource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processList  会话列表
    * resourceList  资源列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processList' => null,
        'resourceList' => null
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
    * processList  会话列表
    * resourceList  资源列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processList' => 'process_list',
            'resourceList' => 'resource_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processList  会话列表
    * resourceList  资源列表
    *
    * @var string[]
    */
    protected static $setters = [
            'processList' => 'setProcessList',
            'resourceList' => 'setResourceList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processList  会话列表
    * resourceList  资源列表
    *
    * @var string[]
    */
    protected static $getters = [
            'processList' => 'getProcessList',
            'resourceList' => 'getResourceList'
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
        $this->container['processList'] = isset($data['processList']) ? $data['processList'] : null;
        $this->container['resourceList'] = isset($data['resourceList']) ? $data['resourceList'] : null;
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
    * Gets processList
    *  会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DeadLockProcess[]|null
    */
    public function getProcessList()
    {
        return $this->container['processList'];
    }

    /**
    * Sets processList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DeadLockProcess[]|null $processList 会话列表
    *
    * @return $this
    */
    public function setProcessList($processList)
    {
        $this->container['processList'] = $processList;
        return $this;
    }

    /**
    * Gets resourceList
    *  资源列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DeadLockResource[]|null
    */
    public function getResourceList()
    {
        return $this->container['resourceList'];
    }

    /**
    * Sets resourceList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DeadLockResource[]|null $resourceList 资源列表
    *
    * @return $this
    */
    public function setResourceList($resourceList)
    {
        $this->container['resourceList'] = $resourceList;
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

