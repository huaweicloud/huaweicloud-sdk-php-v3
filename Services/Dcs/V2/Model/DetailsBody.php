<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetailsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetailsBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldCapacity  变更前的容量，仅在变更规格时有值
    * newCapacity  变更后的容量，仅在变更规格时有值
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值
    * publicIpId  公网IP的ID，仅在开启公网访问时有值
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值
    * enableSsl  是否开启ssl，仅在开启ssl时有值
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldCapacity' => 'string',
            'newCapacity' => 'string',
            'enablePublicIp' => 'bool',
            'publicIpId' => 'string',
            'publicIpAddress' => 'string',
            'enableSsl' => 'bool',
            'oldCacheMode' => 'string',
            'newCacheMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldCapacity  变更前的容量，仅在变更规格时有值
    * newCapacity  变更后的容量，仅在变更规格时有值
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值
    * publicIpId  公网IP的ID，仅在开启公网访问时有值
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值
    * enableSsl  是否开启ssl，仅在开启ssl时有值
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldCapacity' => null,
        'newCapacity' => null,
        'enablePublicIp' => null,
        'publicIpId' => null,
        'publicIpAddress' => null,
        'enableSsl' => null,
        'oldCacheMode' => null,
        'newCacheMode' => null
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
    * oldCapacity  变更前的容量，仅在变更规格时有值
    * newCapacity  变更后的容量，仅在变更规格时有值
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值
    * publicIpId  公网IP的ID，仅在开启公网访问时有值
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值
    * enableSsl  是否开启ssl，仅在开启ssl时有值
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldCapacity' => 'old_capacity',
            'newCapacity' => 'new_capacity',
            'enablePublicIp' => 'enable_public_ip',
            'publicIpId' => 'public_ip_id',
            'publicIpAddress' => 'public_ip_address',
            'enableSsl' => 'enable_ssl',
            'oldCacheMode' => 'old_cache_mode',
            'newCacheMode' => 'new_cache_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldCapacity  变更前的容量，仅在变更规格时有值
    * newCapacity  变更后的容量，仅在变更规格时有值
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值
    * publicIpId  公网IP的ID，仅在开启公网访问时有值
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值
    * enableSsl  是否开启ssl，仅在开启ssl时有值
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值
    *
    * @var string[]
    */
    protected static $setters = [
            'oldCapacity' => 'setOldCapacity',
            'newCapacity' => 'setNewCapacity',
            'enablePublicIp' => 'setEnablePublicIp',
            'publicIpId' => 'setPublicIpId',
            'publicIpAddress' => 'setPublicIpAddress',
            'enableSsl' => 'setEnableSsl',
            'oldCacheMode' => 'setOldCacheMode',
            'newCacheMode' => 'setNewCacheMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldCapacity  变更前的容量，仅在变更规格时有值
    * newCapacity  变更后的容量，仅在变更规格时有值
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值
    * publicIpId  公网IP的ID，仅在开启公网访问时有值
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值
    * enableSsl  是否开启ssl，仅在开启ssl时有值
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值
    *
    * @var string[]
    */
    protected static $getters = [
            'oldCapacity' => 'getOldCapacity',
            'newCapacity' => 'getNewCapacity',
            'enablePublicIp' => 'getEnablePublicIp',
            'publicIpId' => 'getPublicIpId',
            'publicIpAddress' => 'getPublicIpAddress',
            'enableSsl' => 'getEnableSsl',
            'oldCacheMode' => 'getOldCacheMode',
            'newCacheMode' => 'getNewCacheMode'
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
        $this->container['oldCapacity'] = isset($data['oldCapacity']) ? $data['oldCapacity'] : null;
        $this->container['newCapacity'] = isset($data['newCapacity']) ? $data['newCapacity'] : null;
        $this->container['enablePublicIp'] = isset($data['enablePublicIp']) ? $data['enablePublicIp'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['oldCacheMode'] = isset($data['oldCacheMode']) ? $data['oldCacheMode'] : null;
        $this->container['newCacheMode'] = isset($data['newCacheMode']) ? $data['newCacheMode'] : null;
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
    * Gets oldCapacity
    *  变更前的容量，仅在变更规格时有值
    *
    * @return string|null
    */
    public function getOldCapacity()
    {
        return $this->container['oldCapacity'];
    }

    /**
    * Sets oldCapacity
    *
    * @param string|null $oldCapacity 变更前的容量，仅在变更规格时有值
    *
    * @return $this
    */
    public function setOldCapacity($oldCapacity)
    {
        $this->container['oldCapacity'] = $oldCapacity;
        return $this;
    }

    /**
    * Gets newCapacity
    *  变更后的容量，仅在变更规格时有值
    *
    * @return string|null
    */
    public function getNewCapacity()
    {
        return $this->container['newCapacity'];
    }

    /**
    * Sets newCapacity
    *
    * @param string|null $newCapacity 变更后的容量，仅在变更规格时有值
    *
    * @return $this
    */
    public function setNewCapacity($newCapacity)
    {
        $this->container['newCapacity'] = $newCapacity;
        return $this;
    }

    /**
    * Gets enablePublicIp
    *  是否开启公网访问，仅在开启公网访问时有值
    *
    * @return bool|null
    */
    public function getEnablePublicIp()
    {
        return $this->container['enablePublicIp'];
    }

    /**
    * Sets enablePublicIp
    *
    * @param bool|null $enablePublicIp 是否开启公网访问，仅在开启公网访问时有值
    *
    * @return $this
    */
    public function setEnablePublicIp($enablePublicIp)
    {
        $this->container['enablePublicIp'] = $enablePublicIp;
        return $this;
    }

    /**
    * Gets publicIpId
    *  公网IP的ID，仅在开启公网访问时有值
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId 公网IP的ID，仅在开启公网访问时有值
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  公网IP地址，仅在开启公网访问时有值
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress 公网IP地址，仅在开启公网访问时有值
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否开启ssl，仅在开启ssl时有值
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl 是否开启ssl，仅在开启ssl时有值
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets oldCacheMode
    *  变更前的缓存类型，仅在变更规格时有值
    *
    * @return string|null
    */
    public function getOldCacheMode()
    {
        return $this->container['oldCacheMode'];
    }

    /**
    * Sets oldCacheMode
    *
    * @param string|null $oldCacheMode 变更前的缓存类型，仅在变更规格时有值
    *
    * @return $this
    */
    public function setOldCacheMode($oldCacheMode)
    {
        $this->container['oldCacheMode'] = $oldCacheMode;
        return $this;
    }

    /**
    * Gets newCacheMode
    *  变更后的缓存类型，仅在变更规格时有值
    *
    * @return string|null
    */
    public function getNewCacheMode()
    {
        return $this->container['newCacheMode'];
    }

    /**
    * Sets newCacheMode
    *
    * @param string|null $newCacheMode 变更后的缓存类型，仅在变更规格时有值
    *
    * @return $this
    */
    public function setNewCacheMode($newCacheMode)
    {
        $this->container['newCacheMode'] = $newCacheMode;
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

