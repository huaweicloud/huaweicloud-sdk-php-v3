<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipOperateProtectReqIpInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipOperateProtectReq_ip_infos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性公网IP数据ID
    * publicIp  弹性公网IP地址
    * publicIpv6  弹性公网IP地址IPV6
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'publicIp' => 'string',
            'publicIpv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性公网IP数据ID
    * publicIp  弹性公网IP地址
    * publicIpv6  弹性公网IP地址IPV6
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'publicIp' => null,
        'publicIpv6' => null
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
    * id  弹性公网IP数据ID
    * publicIp  弹性公网IP地址
    * publicIpv6  弹性公网IP地址IPV6
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'publicIp' => 'public_ip',
            'publicIpv6' => 'public_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性公网IP数据ID
    * publicIp  弹性公网IP地址
    * publicIpv6  弹性公网IP地址IPV6
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'publicIp' => 'setPublicIp',
            'publicIpv6' => 'setPublicIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性公网IP数据ID
    * publicIp  弹性公网IP地址
    * publicIpv6  弹性公网IP地址IPV6
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'publicIp' => 'getPublicIp',
            'publicIpv6' => 'getPublicIpv6'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['publicIpv6'] = isset($data['publicIpv6']) ? $data['publicIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  弹性公网IP数据ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 弹性公网IP数据ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP地址
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
    * @param string|null $publicIp 弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets publicIpv6
    *  弹性公网IP地址IPV6
    *
    * @return string|null
    */
    public function getPublicIpv6()
    {
        return $this->container['publicIpv6'];
    }

    /**
    * Sets publicIpv6
    *
    * @param string|null $publicIpv6 弹性公网IP地址IPV6
    *
    * @return $this
    */
    public function setPublicIpv6($publicIpv6)
    {
        $this->container['publicIpv6'] = $publicIpv6;
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

