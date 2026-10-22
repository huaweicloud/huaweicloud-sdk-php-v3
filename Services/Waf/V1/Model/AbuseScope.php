<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AbuseScope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AbuseScope';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  统计范围类型。all_users: 所有用户, single_user: 单个用户
    * userIdentifier  用户标识字段名，当前支持extra.end_user
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'userIdentifier' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  统计范围类型。all_users: 所有用户, single_user: 单个用户
    * userIdentifier  用户标识字段名，当前支持extra.end_user
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'userIdentifier' => null
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
    * type  统计范围类型。all_users: 所有用户, single_user: 单个用户
    * userIdentifier  用户标识字段名，当前支持extra.end_user
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'userIdentifier' => 'user_identifier'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  统计范围类型。all_users: 所有用户, single_user: 单个用户
    * userIdentifier  用户标识字段名，当前支持extra.end_user
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'userIdentifier' => 'setUserIdentifier'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  统计范围类型。all_users: 所有用户, single_user: 单个用户
    * userIdentifier  用户标识字段名，当前支持extra.end_user
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'userIdentifier' => 'getUserIdentifier'
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
    const TYPE_ALL_USERS = 'all_users';
    const TYPE_SINGLE_USER = 'single_user';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALL_USERS,
            self::TYPE_SINGLE_USER,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userIdentifier'] = isset($data['userIdentifier']) ? $data['userIdentifier'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['userIdentifier']) && (mb_strlen($this->container['userIdentifier']) > 64)) {
                $invalidProperties[] = "invalid value for 'userIdentifier', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userIdentifier']) && (mb_strlen($this->container['userIdentifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'userIdentifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userIdentifier']) && !preg_match("/^[\\w.]+$/", $this->container['userIdentifier'])) {
                $invalidProperties[] = "invalid value for 'userIdentifier', must be conform to the pattern /^[\\w.]+$/.";
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
    * Gets type
    *  统计范围类型。all_users: 所有用户, single_user: 单个用户
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 统计范围类型。all_users: 所有用户, single_user: 单个用户
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets userIdentifier
    *  用户标识字段名，当前支持extra.end_user
    *
    * @return string|null
    */
    public function getUserIdentifier()
    {
        return $this->container['userIdentifier'];
    }

    /**
    * Sets userIdentifier
    *
    * @param string|null $userIdentifier 用户标识字段名，当前支持extra.end_user
    *
    * @return $this
    */
    public function setUserIdentifier($userIdentifier)
    {
        $this->container['userIdentifier'] = $userIdentifier;
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

