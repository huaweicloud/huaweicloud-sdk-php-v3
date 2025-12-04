<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Address';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intranetIp  云手机服务器的内网IP，过期字段。
    * accessIp  云手机服务器的公网IP，过期字段。
    * serverIp  云手机服务器的内网IP，新增字段。
    * publicIp  云手机服务器的公网IP，新增字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intranetIp' => 'string',
            'accessIp' => 'string',
            'serverIp' => 'string',
            'publicIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intranetIp  云手机服务器的内网IP，过期字段。
    * accessIp  云手机服务器的公网IP，过期字段。
    * serverIp  云手机服务器的内网IP，新增字段。
    * publicIp  云手机服务器的公网IP，新增字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intranetIp' => null,
        'accessIp' => null,
        'serverIp' => null,
        'publicIp' => null
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
    * intranetIp  云手机服务器的内网IP，过期字段。
    * accessIp  云手机服务器的公网IP，过期字段。
    * serverIp  云手机服务器的内网IP，新增字段。
    * publicIp  云手机服务器的公网IP，新增字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intranetIp' => 'intranet_ip',
            'accessIp' => 'access_ip',
            'serverIp' => 'server_ip',
            'publicIp' => 'public_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intranetIp  云手机服务器的内网IP，过期字段。
    * accessIp  云手机服务器的公网IP，过期字段。
    * serverIp  云手机服务器的内网IP，新增字段。
    * publicIp  云手机服务器的公网IP，新增字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'intranetIp' => 'setIntranetIp',
            'accessIp' => 'setAccessIp',
            'serverIp' => 'setServerIp',
            'publicIp' => 'setPublicIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intranetIp  云手机服务器的内网IP，过期字段。
    * accessIp  云手机服务器的公网IP，过期字段。
    * serverIp  云手机服务器的内网IP，新增字段。
    * publicIp  云手机服务器的公网IP，新增字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'intranetIp' => 'getIntranetIp',
            'accessIp' => 'getAccessIp',
            'serverIp' => 'getServerIp',
            'publicIp' => 'getPublicIp'
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
        $this->container['intranetIp'] = isset($data['intranetIp']) ? $data['intranetIp'] : null;
        $this->container['accessIp'] = isset($data['accessIp']) ? $data['accessIp'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 1024.";
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
    * Gets intranetIp
    *  云手机服务器的内网IP，过期字段。
    *
    * @return string|null
    */
    public function getIntranetIp()
    {
        return $this->container['intranetIp'];
    }

    /**
    * Sets intranetIp
    *
    * @param string|null $intranetIp 云手机服务器的内网IP，过期字段。
    *
    * @return $this
    */
    public function setIntranetIp($intranetIp)
    {
        $this->container['intranetIp'] = $intranetIp;
        return $this;
    }

    /**
    * Gets accessIp
    *  云手机服务器的公网IP，过期字段。
    *
    * @return string|null
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string|null $accessIp 云手机服务器的公网IP，过期字段。
    *
    * @return $this
    */
    public function setAccessIp($accessIp)
    {
        $this->container['accessIp'] = $accessIp;
        return $this;
    }

    /**
    * Gets serverIp
    *  云手机服务器的内网IP，新增字段。
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp 云手机服务器的内网IP，新增字段。
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  云手机服务器的公网IP，新增字段。
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
    * @param string|null $publicIp 云手机服务器的公网IP，新增字段。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
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

