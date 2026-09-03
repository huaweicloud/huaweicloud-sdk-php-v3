<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateNotice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateNotice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertChannel  发送告警渠道
    * enable  操作通知 0 关闭 1开启
    * groups  通知组列表
    * operateTypes  通知类型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertChannel' => 'string',
            'enable' => 'string',
            'groups' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]',
            'operateTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertChannel  发送告警渠道
    * enable  操作通知 0 关闭 1开启
    * groups  通知组列表
    * operateTypes  通知类型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertChannel' => null,
        'enable' => null,
        'groups' => null,
        'operateTypes' => null
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
    * alertChannel  发送告警渠道
    * enable  操作通知 0 关闭 1开启
    * groups  通知组列表
    * operateTypes  通知类型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertChannel' => 'alert_channel',
            'enable' => 'enable',
            'groups' => 'groups',
            'operateTypes' => 'operateTypes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertChannel  发送告警渠道
    * enable  操作通知 0 关闭 1开启
    * groups  通知组列表
    * operateTypes  通知类型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'alertChannel' => 'setAlertChannel',
            'enable' => 'setEnable',
            'groups' => 'setGroups',
            'operateTypes' => 'setOperateTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertChannel  发送告警渠道
    * enable  操作通知 0 关闭 1开启
    * groups  通知组列表
    * operateTypes  通知类型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'alertChannel' => 'getAlertChannel',
            'enable' => 'getEnable',
            'groups' => 'getGroups',
            'operateTypes' => 'getOperateTypes'
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
        $this->container['alertChannel'] = isset($data['alertChannel']) ? $data['alertChannel'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['operateTypes'] = isset($data['operateTypes']) ? $data['operateTypes'] : null;
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
    * Gets alertChannel
    *  发送告警渠道
    *
    * @return string|null
    */
    public function getAlertChannel()
    {
        return $this->container['alertChannel'];
    }

    /**
    * Sets alertChannel
    *
    * @param string|null $alertChannel 发送告警渠道
    *
    * @return $this
    */
    public function setAlertChannel($alertChannel)
    {
        $this->container['alertChannel'] = $alertChannel;
        return $this;
    }

    /**
    * Gets enable
    *  操作通知 0 关闭 1开启
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 操作通知 0 关闭 1开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets groups
    *  通知组列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]|null $groups 通知组列表
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets operateTypes
    *  通知类型列表
    *
    * @return string[]|null
    */
    public function getOperateTypes()
    {
        return $this->container['operateTypes'];
    }

    /**
    * Sets operateTypes
    *
    * @param string[]|null $operateTypes 通知类型列表
    *
    * @return $this
    */
    public function setOperateTypes($operateTypes)
    {
        $this->container['operateTypes'] = $operateTypes;
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

