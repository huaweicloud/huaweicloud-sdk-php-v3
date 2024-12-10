<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  资源ID
    * userName  名称
    * createTime  创建时间
    * validityTime  有效时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userName' => 'string',
            'createTime' => 'int',
            'validityTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  资源ID
    * userName  名称
    * createTime  创建时间
    * validityTime  有效时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userName' => null,
        'createTime' => 'int64',
        'validityTime' => 'int64'
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
    * userId  资源ID
    * userName  名称
    * createTime  创建时间
    * validityTime  有效时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userName' => 'user_name',
            'createTime' => 'create_time',
            'validityTime' => 'validity_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  资源ID
    * userName  名称
    * createTime  创建时间
    * validityTime  有效时间
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'createTime' => 'setCreateTime',
            'validityTime' => 'setValidityTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  资源ID
    * userName  名称
    * createTime  创建时间
    * validityTime  有效时间
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'createTime' => 'getCreateTime',
            'validityTime' => 'getValidityTime'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['validityTime'] = isset($data['validityTime']) ? $data['validityTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 64)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    * Gets userId
    *  资源ID
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 资源ID
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
    *  名称
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets validityTime
    *  有效时间
    *
    * @return int|null
    */
    public function getValidityTime()
    {
        return $this->container['validityTime'];
    }

    /**
    * Sets validityTime
    *
    * @param int|null $validityTime 有效时间
    *
    * @return $this
    */
    public function setValidityTime($validityTime)
    {
        $this->container['validityTime'] = $validityTime;
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

