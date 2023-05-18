<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDeviceGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDeviceGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    * name  设备组名称，单个资源空间下不可重复。
    * description  设备组描述。
    * superGroupId  父设备组ID，该设备组的父设备组ID。
    * groupType  设备组类型，分为动态设备组和静态设备组两种
    * dynamicGroupRule  动态设备组规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'superGroupId' => 'string',
            'groupType' => 'string',
            'dynamicGroupRule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    * name  设备组名称，单个资源空间下不可重复。
    * description  设备组描述。
    * superGroupId  父设备组ID，该设备组的父设备组ID。
    * groupType  设备组类型，分为动态设备组和静态设备组两种
    * dynamicGroupRule  动态设备组规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'name' => null,
        'description' => null,
        'superGroupId' => null,
        'groupType' => null,
        'dynamicGroupRule' => null
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
    * groupId  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    * name  设备组名称，单个资源空间下不可重复。
    * description  设备组描述。
    * superGroupId  父设备组ID，该设备组的父设备组ID。
    * groupType  设备组类型，分为动态设备组和静态设备组两种
    * dynamicGroupRule  动态设备组规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'name' => 'name',
            'description' => 'description',
            'superGroupId' => 'super_group_id',
            'groupType' => 'group_type',
            'dynamicGroupRule' => 'dynamic_group_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    * name  设备组名称，单个资源空间下不可重复。
    * description  设备组描述。
    * superGroupId  父设备组ID，该设备组的父设备组ID。
    * groupType  设备组类型，分为动态设备组和静态设备组两种
    * dynamicGroupRule  动态设备组规则
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'name' => 'setName',
            'description' => 'setDescription',
            'superGroupId' => 'setSuperGroupId',
            'groupType' => 'setGroupType',
            'dynamicGroupRule' => 'setDynamicGroupRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    * name  设备组名称，单个资源空间下不可重复。
    * description  设备组描述。
    * superGroupId  父设备组ID，该设备组的父设备组ID。
    * groupType  设备组类型，分为动态设备组和静态设备组两种
    * dynamicGroupRule  动态设备组规则
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'name' => 'getName',
            'description' => 'getDescription',
            'superGroupId' => 'getSuperGroupId',
            'groupType' => 'getGroupType',
            'dynamicGroupRule' => 'getDynamicGroupRule'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['superGroupId'] = isset($data['superGroupId']) ? $data['superGroupId'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['dynamicGroupRule'] = isset($data['dynamicGroupRule']) ? $data['dynamicGroupRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupType']) && !preg_match("/DYNAMIC|STATIC/", $this->container['groupType'])) {
                $invalidProperties[] = "invalid value for 'groupType', must be conform to the pattern /DYNAMIC|STATIC/.";
            }
            if (!is_null($this->container['dynamicGroupRule']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,200}$/", $this->container['dynamicGroupRule'])) {
                $invalidProperties[] = "invalid value for 'dynamicGroupRule', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,200}$/.";
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
    * Gets groupId
    *  设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 设备组ID，用于唯一标识一个设备组，在创建设备组时由物联网平台分配。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets name
    *  设备组名称，单个资源空间下不可重复。
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
    * @param string|null $name 设备组名称，单个资源空间下不可重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  设备组描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 设备组描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets superGroupId
    *  父设备组ID，该设备组的父设备组ID。
    *
    * @return string|null
    */
    public function getSuperGroupId()
    {
        return $this->container['superGroupId'];
    }

    /**
    * Sets superGroupId
    *
    * @param string|null $superGroupId 父设备组ID，该设备组的父设备组ID。
    *
    * @return $this
    */
    public function setSuperGroupId($superGroupId)
    {
        $this->container['superGroupId'] = $superGroupId;
        return $this;
    }

    /**
    * Gets groupType
    *  设备组类型，分为动态设备组和静态设备组两种
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 设备组类型，分为动态设备组和静态设备组两种
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets dynamicGroupRule
    *  动态设备组规则
    *
    * @return string|null
    */
    public function getDynamicGroupRule()
    {
        return $this->container['dynamicGroupRule'];
    }

    /**
    * Sets dynamicGroupRule
    *
    * @param string|null $dynamicGroupRule 动态设备组规则
    *
    * @return $this
    */
    public function setDynamicGroupRule($dynamicGroupRule)
    {
        $this->container['dynamicGroupRule'] = $dynamicGroupRule;
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

