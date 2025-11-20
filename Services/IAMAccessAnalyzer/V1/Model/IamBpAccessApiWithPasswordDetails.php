<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IamBpAccessApiWithPasswordDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IamBpAccessApiWithPasswordDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户的唯一标识符（ID）。
    * lastAccessApiWithPwdAt  用户使用密码访问API的最后时间。
    * userCreatedAt  用户的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'lastAccessApiWithPwdAt' => '\DateTime',
            'userCreatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户的唯一标识符（ID）。
    * lastAccessApiWithPwdAt  用户使用密码访问API的最后时间。
    * userCreatedAt  用户的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'lastAccessApiWithPwdAt' => 'date-time',
        'userCreatedAt' => 'date-time'
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
    * userId  用户的唯一标识符（ID）。
    * lastAccessApiWithPwdAt  用户使用密码访问API的最后时间。
    * userCreatedAt  用户的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'lastAccessApiWithPwdAt' => 'last_access_api_with_pwd_at',
            'userCreatedAt' => 'user_created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户的唯一标识符（ID）。
    * lastAccessApiWithPwdAt  用户使用密码访问API的最后时间。
    * userCreatedAt  用户的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'lastAccessApiWithPwdAt' => 'setLastAccessApiWithPwdAt',
            'userCreatedAt' => 'setUserCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户的唯一标识符（ID）。
    * lastAccessApiWithPwdAt  用户使用密码访问API的最后时间。
    * userCreatedAt  用户的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'lastAccessApiWithPwdAt' => 'getLastAccessApiWithPwdAt',
            'userCreatedAt' => 'getUserCreatedAt'
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
        $this->container['lastAccessApiWithPwdAt'] = isset($data['lastAccessApiWithPwdAt']) ? $data['lastAccessApiWithPwdAt'] : null;
        $this->container['userCreatedAt'] = isset($data['userCreatedAt']) ? $data['userCreatedAt'] : null;
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
            if ((mb_strlen($this->container['userId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['lastAccessApiWithPwdAt'] === null) {
            $invalidProperties[] = "'lastAccessApiWithPwdAt' can't be null";
        }
        if ($this->container['userCreatedAt'] === null) {
            $invalidProperties[] = "'userCreatedAt' can't be null";
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
    *  用户的唯一标识符（ID）。
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
    * @param string $userId 用户的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets lastAccessApiWithPwdAt
    *  用户使用密码访问API的最后时间。
    *
    * @return \DateTime
    */
    public function getLastAccessApiWithPwdAt()
    {
        return $this->container['lastAccessApiWithPwdAt'];
    }

    /**
    * Sets lastAccessApiWithPwdAt
    *
    * @param \DateTime $lastAccessApiWithPwdAt 用户使用密码访问API的最后时间。
    *
    * @return $this
    */
    public function setLastAccessApiWithPwdAt($lastAccessApiWithPwdAt)
    {
        $this->container['lastAccessApiWithPwdAt'] = $lastAccessApiWithPwdAt;
        return $this;
    }

    /**
    * Gets userCreatedAt
    *  用户的创建时间。
    *
    * @return \DateTime
    */
    public function getUserCreatedAt()
    {
        return $this->container['userCreatedAt'];
    }

    /**
    * Sets userCreatedAt
    *
    * @param \DateTime $userCreatedAt 用户的创建时间。
    *
    * @return $this
    */
    public function setUserCreatedAt($userCreatedAt)
    {
        $this->container['userCreatedAt'] = $userCreatedAt;
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

