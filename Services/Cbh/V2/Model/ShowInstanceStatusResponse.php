<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  云堡垒机实例名称。
    * status  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    * serverId  云堡垒机实例ID，使用UUID格式表示。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  云堡垒机实例名称。
    * status  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    * serverId  云堡垒机实例ID，使用UUID格式表示。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'serverId' => null
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
    * name  云堡垒机实例名称。
    * status  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    * serverId  云堡垒机实例ID，使用UUID格式表示。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  云堡垒机实例名称。
    * status  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    * serverId  云堡垒机实例ID，使用UUID格式表示。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  云堡垒机实例名称。
    * status  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    * serverId  云堡垒机实例ID，使用UUID格式表示。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'serverId' => 'getServerId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
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
    *  云堡垒机实例名称。
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
    * @param string|null $name 云堡垒机实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 堡垒机实例状态。 - POWERING_ON：正在开启 - POWERING_OFF：正在关闭 - DELETE_WAITE：等待删除 - REBOOTING：重启中 - RESIZE：变更中 - UPGRADING：升级中 - FROZEN：冻结 - ACTIVE：运行
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets serverId
    *  云堡垒机实例ID，使用UUID格式表示。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云堡垒机实例ID，使用UUID格式表示。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

