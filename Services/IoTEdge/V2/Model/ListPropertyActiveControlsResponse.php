<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPropertyActiveControlsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPropertyActiveControlsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  设备id
    * serviceId  设备的服务id
    * property  设备的属性
    * activeControls  正在执行中的控制列表
    * resultCode  结果响应码，大于等于400表示失败，小于400表示成功
    * resultDesc  结果描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'serviceId' => 'string',
            'property' => 'string',
            'activeControls' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveControlRspDTO[]',
            'resultCode' => 'int',
            'resultDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  设备id
    * serviceId  设备的服务id
    * property  设备的属性
    * activeControls  正在执行中的控制列表
    * resultCode  结果响应码，大于等于400表示失败，小于400表示成功
    * resultDesc  结果描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'serviceId' => null,
        'property' => null,
        'activeControls' => null,
        'resultCode' => 'int32',
        'resultDesc' => null
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
    * deviceId  设备id
    * serviceId  设备的服务id
    * property  设备的属性
    * activeControls  正在执行中的控制列表
    * resultCode  结果响应码，大于等于400表示失败，小于400表示成功
    * resultDesc  结果描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'serviceId' => 'service_id',
            'property' => 'property',
            'activeControls' => 'active_controls',
            'resultCode' => 'result_code',
            'resultDesc' => 'result_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  设备id
    * serviceId  设备的服务id
    * property  设备的属性
    * activeControls  正在执行中的控制列表
    * resultCode  结果响应码，大于等于400表示失败，小于400表示成功
    * resultDesc  结果描述
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'serviceId' => 'setServiceId',
            'property' => 'setProperty',
            'activeControls' => 'setActiveControls',
            'resultCode' => 'setResultCode',
            'resultDesc' => 'setResultDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  设备id
    * serviceId  设备的服务id
    * property  设备的属性
    * activeControls  正在执行中的控制列表
    * resultCode  结果响应码，大于等于400表示失败，小于400表示成功
    * resultDesc  结果描述
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'serviceId' => 'getServiceId',
            'property' => 'getProperty',
            'activeControls' => 'getActiveControls',
            'resultCode' => 'getResultCode',
            'resultDesc' => 'getResultDesc'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['activeControls'] = isset($data['activeControls']) ? $data['activeControls'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultDesc'] = isset($data['resultDesc']) ? $data['resultDesc'] : null;
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
    * Gets deviceId
    *  设备id
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets serviceId
    *  设备的服务id
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 设备的服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets property
    *  设备的属性
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 设备的属性
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets activeControls
    *  正在执行中的控制列表
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveControlRspDTO[]|null
    */
    public function getActiveControls()
    {
        return $this->container['activeControls'];
    }

    /**
    * Sets activeControls
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveControlRspDTO[]|null $activeControls 正在执行中的控制列表
    *
    * @return $this
    */
    public function setActiveControls($activeControls)
    {
        $this->container['activeControls'] = $activeControls;
        return $this;
    }

    /**
    * Gets resultCode
    *  结果响应码，大于等于400表示失败，小于400表示成功
    *
    * @return int|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param int|null $resultCode 结果响应码，大于等于400表示失败，小于400表示成功
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets resultDesc
    *  结果描述
    *
    * @return string|null
    */
    public function getResultDesc()
    {
        return $this->container['resultDesc'];
    }

    /**
    * Sets resultDesc
    *
    * @param string|null $resultDesc 结果描述
    *
    * @return $this
    */
    public function setResultDesc($resultDesc)
    {
        $this->container['resultDesc'] = $resultDesc;
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

