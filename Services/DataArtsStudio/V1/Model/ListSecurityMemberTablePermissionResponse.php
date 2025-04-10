<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityMemberTablePermissionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityMemberTablePermissionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  权限总数
    * memberPermissionList  成员权限列表（包含权限集的和权限审批）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'memberPermissionList' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPermission[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  权限总数
    * memberPermissionList  成员权限列表（包含权限集的和权限审批）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'memberPermissionList' => null
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
    * total  权限总数
    * memberPermissionList  成员权限列表（包含权限集的和权限审批）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'memberPermissionList' => 'member_permission_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  权限总数
    * memberPermissionList  成员权限列表（包含权限集的和权限审批）
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'memberPermissionList' => 'setMemberPermissionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  权限总数
    * memberPermissionList  成员权限列表（包含权限集的和权限审批）
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'memberPermissionList' => 'getMemberPermissionList'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['memberPermissionList'] = isset($data['memberPermissionList']) ? $data['memberPermissionList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 65535)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets total
    *  权限总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 权限总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets memberPermissionList
    *  成员权限列表（包含权限集的和权限审批）
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPermission[]|null
    */
    public function getMemberPermissionList()
    {
        return $this->container['memberPermissionList'];
    }

    /**
    * Sets memberPermissionList
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPermission[]|null $memberPermissionList 成员权限列表（包含权限集的和权限审批）
    *
    * @return $this
    */
    public function setMemberPermissionList($memberPermissionList)
    {
        $this->container['memberPermissionList'] = $memberPermissionList;
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

