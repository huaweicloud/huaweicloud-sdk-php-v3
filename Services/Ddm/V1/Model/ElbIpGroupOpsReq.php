<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElbIpGroupOpsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElbIpGroupOpsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enableIpGroup  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * groupId  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * ipList  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'enableIpGroup' => 'bool',
            'groupId' => 'string',
            'ipList' => '\HuaweiCloud\SDK\Ddm\V1\Model\IpGroupItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enableIpGroup  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * groupId  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * ipList  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'enableIpGroup' => null,
        'groupId' => null,
        'ipList' => null
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
    * name  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enableIpGroup  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * groupId  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * ipList  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'enableIpGroup' => 'enable_ip_group',
            'groupId' => 'group_id',
            'ipList' => 'ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enableIpGroup  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * groupId  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * ipList  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'enableIpGroup' => 'setEnableIpGroup',
            'groupId' => 'setGroupId',
            'ipList' => 'setIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enableIpGroup  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * groupId  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * ipList  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'enableIpGroup' => 'getEnableIpGroup',
            'groupId' => 'getGroupId',
            'ipList' => 'getIpList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enableIpGroup'] = isset($data['enableIpGroup']) ? $data['enableIpGroup'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $name **参数解释**：  弹性负载均衡ip组名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $type **参数解释**：  弹性负载均衡ip组类型。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enableIpGroup
    *  **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return bool|null
    */
    public function getEnableIpGroup()
    {
        return $this->container['enableIpGroup'];
    }

    /**
    * Sets enableIpGroup
    *
    * @param bool|null $enableIpGroup **参数解释**：  是否开启弹性负载均衡ip组。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEnableIpGroup($enableIpGroup)
    {
        $this->container['enableIpGroup'] = $enableIpGroup;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $groupId **参数解释**：  弹性负载均衡ip组id。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets ipList
    *  **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\IpGroupItem[]|null
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\IpGroupItem[]|null $ipList **参数解释**：  ip列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
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

