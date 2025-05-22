<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusFlowDirectToVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusFlowDirectToVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * enabled  是否已开启状态流转， true： 开启, false 没开启
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentName' => 'string',
            'parentType' => 'string',
            'statusId' => 'string',
            'name' => 'string',
            'statusType' => 'string',
            'enabled' => 'bool',
            'parentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * enabled  是否已开启状态流转， true： 开启, false 没开启
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentName' => null,
        'parentType' => null,
        'statusId' => null,
        'name' => null,
        'statusType' => null,
        'enabled' => null,
        'parentId' => null
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
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * enabled  是否已开启状态流转， true： 开启, false 没开启
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentName' => 'parent_name',
            'parentType' => 'parent_type',
            'statusId' => 'status_id',
            'name' => 'name',
            'statusType' => 'status_type',
            'enabled' => 'enabled',
            'parentId' => 'parent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * enabled  是否已开启状态流转， true： 开启, false 没开启
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $setters = [
            'parentName' => 'setParentName',
            'parentType' => 'setParentType',
            'statusId' => 'setStatusId',
            'name' => 'setName',
            'statusType' => 'setStatusType',
            'enabled' => 'setEnabled',
            'parentId' => 'setParentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * enabled  是否已开启状态流转， true： 开启, false 没开启
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $getters = [
            'parentName' => 'getParentName',
            'parentType' => 'getParentType',
            'statusId' => 'getStatusId',
            'name' => 'getName',
            'statusType' => 'getStatusType',
            'enabled' => 'getEnabled',
            'parentId' => 'getParentId'
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
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['parentType'] = isset($data['parentType']) ? $data['parentType'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statusType'] = isset($data['statusType']) ? $data['statusType'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
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
    * Gets parentName
    *  父状态的名称
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName 父状态的名称
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets parentType
    *  父状态的类型
    *
    * @return string|null
    */
    public function getParentType()
    {
        return $this->container['parentType'];
    }

    /**
    * Sets parentType
    *
    * @param string|null $parentType 父状态的类型
    *
    * @return $this
    */
    public function setParentType($parentType)
    {
        $this->container['parentType'] = $parentType;
        return $this;
    }

    /**
    * Gets statusId
    *  状态id
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 状态id
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
    * Gets statusType
    *  状态类型
    *
    * @return string|null
    */
    public function getStatusType()
    {
        return $this->container['statusType'];
    }

    /**
    * Sets statusType
    *
    * @param string|null $statusType 状态类型
    *
    * @return $this
    */
    public function setStatusType($statusType)
    {
        $this->container['statusType'] = $statusType;
        return $this;
    }

    /**
    * Gets enabled
    *  是否已开启状态流转， true： 开启, false 没开启
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否已开启状态流转， true： 开启, false 没开启
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets parentId
    *  父状态的uuid
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父状态的uuid
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
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

