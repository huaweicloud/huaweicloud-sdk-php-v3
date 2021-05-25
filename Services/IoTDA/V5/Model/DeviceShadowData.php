<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceShadowData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceShadowData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  设备的服务ID，在设备关联的产品模型中定义。
    * desired  desired
    * reported  reported
    * version  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'desired' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties',
            'reported' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties',
            'version' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  设备的服务ID，在设备关联的产品模型中定义。
    * desired  desired
    * reported  reported
    * version  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'desired' => null,
        'reported' => null,
        'version' => 'int64'
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
    * serviceId  设备的服务ID，在设备关联的产品模型中定义。
    * desired  desired
    * reported  reported
    * version  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'desired' => 'desired',
            'reported' => 'reported',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  设备的服务ID，在设备关联的产品模型中定义。
    * desired  desired
    * reported  reported
    * version  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'desired' => 'setDesired',
            'reported' => 'setReported',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  设备的服务ID，在设备关联的产品模型中定义。
    * desired  desired
    * reported  reported
    * version  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'desired' => 'getDesired',
            'reported' => 'getReported',
            'version' => 'getVersion'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['desired'] = isset($data['desired']) ? $data['desired'] : null;
        $this->container['reported'] = isset($data['reported']) ? $data['reported'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if ((mb_strlen($this->container['serviceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['serviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 1.";
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
    * Gets serviceId
    *  设备的服务ID，在设备关联的产品模型中定义。
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId 设备的服务ID，在设备关联的产品模型中定义。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets desired
    *  desired
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties|null
    */
    public function getDesired()
    {
        return $this->container['desired'];
    }

    /**
    * Sets desired
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties|null $desired desired
    *
    * @return $this
    */
    public function setDesired($desired)
    {
        $this->container['desired'] = $desired;
        return $this;
    }

    /**
    * Gets reported
    *  reported
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties|null
    */
    public function getReported()
    {
        return $this->container['reported'];
    }

    /**
    * Sets reported
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceShadowProperties|null $reported reported
    *
    * @return $this
    */
    public function setReported($reported)
    {
        $this->container['reported'] = $reported;
        return $this;
    }

    /**
    * Gets version
    *  设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 设备影子的版本，携带该参数时平台会校验值必须等于当前影子版本，初始从0开始。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

