<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIfUserNameRepeatRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIfUserNameRepeatRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  服务id
    * userId  用户ID
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'userId' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  服务id
    * userId  用户ID
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'userId' => null,
        'userName' => null
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
    * serviceId  服务id
    * userId  用户ID
    * userName  用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'userId' => 'userId',
            'userName' => 'userName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  服务id
    * userId  用户ID
    * userName  用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'userId' => 'setUserId',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  服务id
    * userId  用户ID
    * userName  用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'userId' => 'getUserId',
            'userName' => 'getUserName'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
            if ((mb_strlen($this->container['serviceId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['serviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 200)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
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
    *  服务id
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
    * @param string $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

