<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LicenseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LicenseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * esn  esn码
    * expireTime  超期时间
    * graceTime  宽限期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'esn' => 'string',
            'expireTime' => 'string',
            'graceTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * esn  esn码
    * expireTime  超期时间
    * graceTime  宽限期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'esn' => null,
        'expireTime' => null,
        'graceTime' => null
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
    * esn  esn码
    * expireTime  超期时间
    * graceTime  宽限期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'esn' => 'esn',
            'expireTime' => 'expire_time',
            'graceTime' => 'grace_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * esn  esn码
    * expireTime  超期时间
    * graceTime  宽限期
    *
    * @var string[]
    */
    protected static $setters = [
            'esn' => 'setEsn',
            'expireTime' => 'setExpireTime',
            'graceTime' => 'setGraceTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * esn  esn码
    * expireTime  超期时间
    * graceTime  宽限期
    *
    * @var string[]
    */
    protected static $getters = [
            'esn' => 'getEsn',
            'expireTime' => 'getExpireTime',
            'graceTime' => 'getGraceTime'
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
        $this->container['esn'] = isset($data['esn']) ? $data['esn'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['graceTime'] = isset($data['graceTime']) ? $data['graceTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['esn'] === null) {
            $invalidProperties[] = "'esn' can't be null";
        }
            if ((mb_strlen($this->container['esn']) > 256)) {
                $invalidProperties[] = "invalid value for 'esn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['esn']) < 1)) {
                $invalidProperties[] = "invalid value for 'esn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
            if ((mb_strlen($this->container['expireTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['expireTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['graceTime']) && (mb_strlen($this->container['graceTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'graceTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['graceTime']) && (mb_strlen($this->container['graceTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'graceTime', the character length must be bigger than or equal to 0.";
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
    * Gets esn
    *  esn码
    *
    * @return string
    */
    public function getEsn()
    {
        return $this->container['esn'];
    }

    /**
    * Sets esn
    *
    * @param string $esn esn码
    *
    * @return $this
    */
    public function setEsn($esn)
    {
        $this->container['esn'] = $esn;
        return $this;
    }

    /**
    * Gets expireTime
    *  超期时间
    *
    * @return string
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string $expireTime 超期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets graceTime
    *  宽限期
    *
    * @return string|null
    */
    public function getGraceTime()
    {
        return $this->container['graceTime'];
    }

    /**
    * Sets graceTime
    *
    * @param string|null $graceTime 宽限期
    *
    * @return $this
    */
    public function setGraceTime($graceTime)
    {
        $this->container['graceTime'] = $graceTime;
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

