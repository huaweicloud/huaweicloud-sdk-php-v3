<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  开通该子服务时间。
    * subscribeStatus  是否开通该子服务。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'subscribeStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  开通该子服务时间。
    * subscribeStatus  是否开通该子服务。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'subscribeStatus' => null
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
    * createTime  开通该子服务时间。
    * subscribeStatus  是否开通该子服务。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'subscribeStatus' => 'subscribe_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  开通该子服务时间。
    * subscribeStatus  是否开通该子服务。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'subscribeStatus' => 'setSubscribeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  开通该子服务时间。
    * subscribeStatus  是否开通该子服务。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'subscribeStatus' => 'getSubscribeStatus'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['subscribeStatus'] = isset($data['subscribeStatus']) ? $data['subscribeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['subscribeStatus'] === null) {
            $invalidProperties[] = "'subscribeStatus' can't be null";
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
    * Gets createTime
    *  开通该子服务时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 开通该子服务时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets subscribeStatus
    *  是否开通该子服务。
    *
    * @return bool
    */
    public function getSubscribeStatus()
    {
        return $this->container['subscribeStatus'];
    }

    /**
    * Sets subscribeStatus
    *
    * @param bool $subscribeStatus 是否开通该子服务。
    *
    * @return $this
    */
    public function setSubscribeStatus($subscribeStatus)
    {
        $this->container['subscribeStatus'] = $subscribeStatus;
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

