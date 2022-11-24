<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHookInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHookInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceHangingInfo  伸缩实例生命周期挂钩列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceHangingInfo' => '\HuaweiCloud\SDK\_As\V1\Model\InstanceHangingInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceHangingInfo  伸缩实例生命周期挂钩列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceHangingInfo' => null
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
    * instanceHangingInfo  伸缩实例生命周期挂钩列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceHangingInfo' => 'instance_hanging_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceHangingInfo  伸缩实例生命周期挂钩列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceHangingInfo' => 'setInstanceHangingInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceHangingInfo  伸缩实例生命周期挂钩列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceHangingInfo' => 'getInstanceHangingInfo'
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
        $this->container['instanceHangingInfo'] = isset($data['instanceHangingInfo']) ? $data['instanceHangingInfo'] : null;
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
    * Gets instanceHangingInfo
    *  伸缩实例生命周期挂钩列表。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\InstanceHangingInfos[]|null
    */
    public function getInstanceHangingInfo()
    {
        return $this->container['instanceHangingInfo'];
    }

    /**
    * Sets instanceHangingInfo
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\InstanceHangingInfos[]|null $instanceHangingInfo 伸缩实例生命周期挂钩列表。
    *
    * @return $this
    */
    public function setInstanceHangingInfo($instanceHangingInfo)
    {
        $this->container['instanceHangingInfo'] = $instanceHangingInfo;
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

