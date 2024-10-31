<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAutoPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAutoPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  设置磁盘自动扩容的实例组ID。
    * switchOption  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    * policy  磁盘自动扩容策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'switchOption' => 'string',
            'policy' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DiskAutoExpansionPolicy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  设置磁盘自动扩容的实例组ID。
    * switchOption  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    * policy  磁盘自动扩容策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'switchOption' => null,
        'policy' => null
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
    * instanceIds  设置磁盘自动扩容的实例组ID。
    * switchOption  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    * policy  磁盘自动扩容策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'switchOption' => 'switch_option',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  设置磁盘自动扩容的实例组ID。
    * switchOption  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    * policy  磁盘自动扩容策略
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'switchOption' => 'setSwitchOption',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  设置磁盘自动扩容的实例组ID。
    * switchOption  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    * policy  磁盘自动扩容策略
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'switchOption' => 'getSwitchOption',
            'policy' => 'getPolicy'
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
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
    * Gets instanceIds
    *  设置磁盘自动扩容的实例组ID。
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds 设置磁盘自动扩容的实例组ID。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets switchOption
    *  自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    *
    * @return string|null
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param string|null $switchOption 自动扩容开关。  “on”，表示开启磁盘自动扩容策略。  “off”，表示关闭磁盘自动扩容策略。 默认值为“on”。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets policy
    *  磁盘自动扩容策略
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DiskAutoExpansionPolicy[]
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DiskAutoExpansionPolicy[] $policy 磁盘自动扩容策略
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

