<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyTypeSummaryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyTypeSummaryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    * type  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    * type  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null
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
    * status  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    * type  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    * type  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    * type  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'type' => 'getType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets status
    *  与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 与根关联的策略类型状态。要将指定类型的策略绑定到根或该根中的组织单元或账号，该策略必须在组织中可用，并在该根已启用。enabled：启用；pending_enable：启用中；disabled：禁用；pending_disable：禁用中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 策略类型的名称，service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

