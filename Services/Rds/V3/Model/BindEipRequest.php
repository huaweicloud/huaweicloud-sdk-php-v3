<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindEipRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindEipRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicIp  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    * publicIpId  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    * isBind  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicIp' => 'string',
            'publicIpId' => 'string',
            'isBind' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicIp  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    * publicIpId  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    * isBind  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicIp' => null,
        'publicIpId' => null,
        'isBind' => null
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
    * publicIp  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    * publicIpId  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    * isBind  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicIp' => 'public_ip',
            'publicIpId' => 'public_ip_id',
            'isBind' => 'is_bind'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicIp  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    * publicIpId  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    * isBind  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicIp' => 'setPublicIp',
            'publicIpId' => 'setPublicIpId',
            'isBind' => 'setIsBind'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicIp  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    * publicIpId  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    * isBind  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicIp' => 'getPublicIp',
            'publicIpId' => 'getPublicIpId',
            'isBind' => 'getIsBind'
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
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['isBind'] = isset($data['isBind']) ? $data['isBind'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isBind'] === null) {
            $invalidProperties[] = "'isBind' can't be null";
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
    * Gets publicIp
    *  待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 待绑定的弹性公网IP地址，仅允许使用标准的IP地址格式。is_bind为true时必选
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets publicIpId
    *  弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
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
    * @param string|null $publicIpId 弹性公网IP对应的ID，仅允许使用标准的UUID格式。is_bind为true时必选
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets isBind
    *  - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @return bool
    */
    public function getIsBind()
    {
        return $this->container['isBind'];
    }

    /**
    * Sets isBind
    *
    * @param bool $isBind - true，绑定弹性公网IP。 - false，解绑弹性公网IP。
    *
    * @return $this
    */
    public function setIsBind($isBind)
    {
        $this->container['isBind'] = $isBind;
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

