<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phoneId  云手机的唯一标识。
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phoneId' => 'string',
            'accessInfo' => '\HuaweiCloud\SDK\Cph\V1\Model\ConnectInfoAccessInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phoneId  云手机的唯一标识。
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phoneId' => null,
        'accessInfo' => null
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
    * phoneId  云手机的唯一标识。
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phoneId' => 'phone_id',
            'accessInfo' => 'access_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phoneId  云手机的唯一标识。
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'phoneId' => 'setPhoneId',
            'accessInfo' => 'setAccessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phoneId  云手机的唯一标识。
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'phoneId' => 'getPhoneId',
            'accessInfo' => 'getAccessInfo'
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
        $this->container['phoneId'] = isset($data['phoneId']) ? $data['phoneId'] : null;
        $this->container['accessInfo'] = isset($data['accessInfo']) ? $data['accessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be bigger than or equal to 32.";
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
    * Gets phoneId
    *  云手机的唯一标识。
    *
    * @return string|null
    */
    public function getPhoneId()
    {
        return $this->container['phoneId'];
    }

    /**
    * Sets phoneId
    *
    * @param string|null $phoneId 云手机的唯一标识。
    *
    * @return $this
    */
    public function setPhoneId($phoneId)
    {
        $this->container['phoneId'] = $phoneId;
        return $this;
    }

    /**
    * Gets accessInfo
    *  accessInfo
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ConnectInfoAccessInfo|null
    */
    public function getAccessInfo()
    {
        return $this->container['accessInfo'];
    }

    /**
    * Sets accessInfo
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ConnectInfoAccessInfo|null $accessInfo accessInfo
    *
    * @return $this
    */
    public function setAccessInfo($accessInfo)
    {
        $this->container['accessInfo'] = $accessInfo;
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

