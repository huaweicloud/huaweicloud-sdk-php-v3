<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserQuotaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserQuotaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  子账户（用户）ID。
    * quota  quota
    * usage  usage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'quota' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail',
            'usage' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  子账户（用户）ID。
    * quota  quota
    * usage  usage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'quota' => null,
        'usage' => null
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
    * userId  子账户（用户）ID。
    * quota  quota
    * usage  usage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'quota' => 'quota',
            'usage' => 'usage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  子账户（用户）ID。
    * quota  quota
    * usage  usage
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'quota' => 'setQuota',
            'usage' => 'setUsage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  子账户（用户）ID。
    * quota  quota
    * usage  usage
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'quota' => 'getQuota',
            'usage' => 'getUsage'
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
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
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
        if ($this->container['quota'] === null) {
            $invalidProperties[] = "'quota' can't be null";
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
    *  子账户（用户）ID。
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
    * @param string $userId 子账户（用户）ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets quota
    *  quota
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail $quota quota
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets usage
    *  usage
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ListUserQuotaDetail|null $usage usage
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
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

