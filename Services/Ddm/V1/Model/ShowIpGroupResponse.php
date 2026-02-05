<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    * groupId  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    * enableIpgroup  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    * ipgroup  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'groupId' => 'string',
            'enableIpgroup' => 'bool',
            'type' => 'string',
            'ipgroup' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    * groupId  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    * enableIpgroup  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    * ipgroup  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'groupId' => null,
        'enableIpgroup' => null,
        'type' => null,
        'ipgroup' => null
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
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    * groupId  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    * enableIpgroup  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    * ipgroup  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'groupId' => 'group_id',
            'enableIpgroup' => 'enable_ipgroup',
            'type' => 'type',
            'ipgroup' => 'ipgroup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    * groupId  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    * enableIpgroup  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    * ipgroup  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'groupId' => 'setGroupId',
            'enableIpgroup' => 'setEnableIpgroup',
            'type' => 'setType',
            'ipgroup' => 'setIpgroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    * groupId  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    * enableIpgroup  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    * type  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    * ipgroup  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'groupId' => 'getGroupId',
            'enableIpgroup' => 'getEnableIpgroup',
            'type' => 'getType',
            'ipgroup' => 'getIpgroup'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['enableIpgroup'] = isset($data['enableIpgroup']) ? $data['enableIpgroup'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipgroup'] = isset($data['ipgroup']) ? $data['ipgroup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  **参数范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
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
    * @param string|null $groupId **参数解释**：  组ID。此参数是参数组的唯一标识。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets enableIpgroup
    *  **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return bool|null
    */
    public function getEnableIpgroup()
    {
        return $this->container['enableIpgroup'];
    }

    /**
    * Sets enableIpgroup
    *
    * @param bool|null $enableIpgroup **参数解释**：  是否开启弹性负载均衡ip组。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return $this
    */
    public function setEnableIpgroup($enableIpgroup)
    {
        $this->container['enableIpgroup'] = $enableIpgroup;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
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
    * @param string|null $type **参数解释**：  弹性负载均衡ip组类型。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipgroup
    *  **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return object|null
    */
    public function getIpgroup()
    {
        return $this->container['ipgroup'];
    }

    /**
    * Sets ipgroup
    *
    * @param object|null $ipgroup **参数解释**：  ip组信息。  **参数范围**：  只能由英文字母、数字组成。
    *
    * @return $this
    */
    public function setIpgroup($ipgroup)
    {
        $this->container['ipgroup'] = $ipgroup;
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

