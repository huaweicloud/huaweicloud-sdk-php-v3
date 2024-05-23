<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCreateAccountStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCreateAccountStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAccountStatusId  指定唯一标识CreateAccount请求的ID值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAccountStatusId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAccountStatusId  指定唯一标识CreateAccount请求的ID值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAccountStatusId' => null
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
    * createAccountStatusId  指定唯一标识CreateAccount请求的ID值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAccountStatusId' => 'create_account_status_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAccountStatusId  指定唯一标识CreateAccount请求的ID值。
    *
    * @var string[]
    */
    protected static $setters = [
            'createAccountStatusId' => 'setCreateAccountStatusId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAccountStatusId  指定唯一标识CreateAccount请求的ID值。
    *
    * @var string[]
    */
    protected static $getters = [
            'createAccountStatusId' => 'getCreateAccountStatusId'
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
        $this->container['createAccountStatusId'] = isset($data['createAccountStatusId']) ? $data['createAccountStatusId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createAccountStatusId'] === null) {
            $invalidProperties[] = "'createAccountStatusId' can't be null";
        }
            if ((mb_strlen($this->container['createAccountStatusId']) > 36)) {
                $invalidProperties[] = "invalid value for 'createAccountStatusId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/^car-[0-9a-z]{8,32}$/", $this->container['createAccountStatusId'])) {
                $invalidProperties[] = "invalid value for 'createAccountStatusId', must be conform to the pattern /^car-[0-9a-z]{8,32}$/.";
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
    * Gets createAccountStatusId
    *  指定唯一标识CreateAccount请求的ID值。
    *
    * @return string
    */
    public function getCreateAccountStatusId()
    {
        return $this->container['createAccountStatusId'];
    }

    /**
    * Sets createAccountStatusId
    *
    * @param string $createAccountStatusId 指定唯一标识CreateAccount请求的ID值。
    *
    * @return $this
    */
    public function setCreateAccountStatusId($createAccountStatusId)
    {
        $this->container['createAccountStatusId'] = $createAccountStatusId;
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

