<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MfaDeviceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MfaDeviceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  MFA设备唯一标识符（ID）
    * deviceName  MFA设备名称
    * displayName  MFA设备显示名称
    * mfaType  MFA类型
    * registeredDate  注册时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'deviceName' => 'string',
            'displayName' => 'string',
            'mfaType' => 'string',
            'registeredDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  MFA设备唯一标识符（ID）
    * deviceName  MFA设备名称
    * displayName  MFA设备显示名称
    * mfaType  MFA类型
    * registeredDate  注册时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'deviceName' => null,
        'displayName' => null,
        'mfaType' => null,
        'registeredDate' => 'int64'
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
    * deviceId  MFA设备唯一标识符（ID）
    * deviceName  MFA设备名称
    * displayName  MFA设备显示名称
    * mfaType  MFA类型
    * registeredDate  注册时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'deviceName' => 'device_name',
            'displayName' => 'display_name',
            'mfaType' => 'mfa_type',
            'registeredDate' => 'registered_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  MFA设备唯一标识符（ID）
    * deviceName  MFA设备名称
    * displayName  MFA设备显示名称
    * mfaType  MFA类型
    * registeredDate  注册时间
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'deviceName' => 'setDeviceName',
            'displayName' => 'setDisplayName',
            'mfaType' => 'setMfaType',
            'registeredDate' => 'setRegisteredDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  MFA设备唯一标识符（ID）
    * deviceName  MFA设备名称
    * displayName  MFA设备显示名称
    * mfaType  MFA类型
    * registeredDate  注册时间
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'deviceName' => 'getDeviceName',
            'displayName' => 'getDisplayName',
            'mfaType' => 'getMfaType',
            'registeredDate' => 'getRegisteredDate'
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
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['mfaType'] = isset($data['mfaType']) ? $data['mfaType'] : null;
        $this->container['registeredDate'] = isset($data['registeredDate']) ? $data['registeredDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if ($this->container['deviceName'] === null) {
            $invalidProperties[] = "'deviceName' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['mfaType'] === null) {
            $invalidProperties[] = "'mfaType' can't be null";
        }
        if ($this->container['registeredDate'] === null) {
            $invalidProperties[] = "'registeredDate' can't be null";
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
    * Gets deviceId
    *  MFA设备唯一标识符（ID）
    *
    * @return string
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string $deviceId MFA设备唯一标识符（ID）
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceName
    *  MFA设备名称
    *
    * @return string
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string $deviceName MFA设备名称
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets displayName
    *  MFA设备显示名称
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName MFA设备显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets mfaType
    *  MFA类型
    *
    * @return string
    */
    public function getMfaType()
    {
        return $this->container['mfaType'];
    }

    /**
    * Sets mfaType
    *
    * @param string $mfaType MFA类型
    *
    * @return $this
    */
    public function setMfaType($mfaType)
    {
        $this->container['mfaType'] = $mfaType;
        return $this;
    }

    /**
    * Gets registeredDate
    *  注册时间
    *
    * @return int
    */
    public function getRegisteredDate()
    {
        return $this->container['registeredDate'];
    }

    /**
    * Sets registeredDate
    *
    * @param int $registeredDate 注册时间
    *
    * @return $this
    */
    public function setRegisteredDate($registeredDate)
    {
        $this->container['registeredDate'] = $registeredDate;
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

