<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchSupabaseApplicationEipBindRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchSupabaseApplicationEipBindRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isBind  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    * publicIpAddress  弹性公网IP地址。
    * publicIpId  弹性公网IP ID（UUID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isBind' => 'bool',
            'publicIpAddress' => 'string',
            'publicIpId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isBind  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    * publicIpAddress  弹性公网IP地址。
    * publicIpId  弹性公网IP ID（UUID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isBind' => null,
        'publicIpAddress' => null,
        'publicIpId' => null
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
    * isBind  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    * publicIpAddress  弹性公网IP地址。
    * publicIpId  弹性公网IP ID（UUID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isBind' => 'is_bind',
            'publicIpAddress' => 'public_ip_address',
            'publicIpId' => 'public_ip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isBind  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    * publicIpAddress  弹性公网IP地址。
    * publicIpId  弹性公网IP ID（UUID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'isBind' => 'setIsBind',
            'publicIpAddress' => 'setPublicIpAddress',
            'publicIpId' => 'setPublicIpId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isBind  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    * publicIpAddress  弹性公网IP地址。
    * publicIpId  弹性公网IP ID（UUID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'isBind' => 'getIsBind',
            'publicIpAddress' => 'getPublicIpAddress',
            'publicIpId' => 'getPublicIpId'
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
        $this->container['isBind'] = isset($data['isBind']) ? $data['isBind'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
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
    * Gets isBind
    *  true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
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
    * @param bool $isBind true绑定，false解绑。is_bind=true时public_ip_id和public_ip_address必填。
    *
    * @return $this
    */
    public function setIsBind($isBind)
    {
        $this->container['isBind'] = $isBind;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  弹性公网IP地址。
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
    * @param string|null $publicIpAddress 弹性公网IP地址。
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets publicIpId
    *  弹性公网IP ID（UUID）。
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
    * @param string|null $publicIpId 弹性公网IP ID（UUID）。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
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

