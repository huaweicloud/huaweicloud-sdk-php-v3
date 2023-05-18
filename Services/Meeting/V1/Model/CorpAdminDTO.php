<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CorpAdminDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CorpAdminDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * account  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'account' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * account  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'account' => null
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
    * account  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'account' => 'account'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * account  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @var string[]
    */
    protected static $setters = [
            'account' => 'setAccount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * account  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @var string[]
    */
    protected static $getters = [
            'account' => 'getAccount'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
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
    * Gets account
    *  企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @return string
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string $account 企业用户帐号。 * 如果是帐号/密码鉴权方式，是指华为云会议帐号 * 如果是App ID鉴权方式，是指第三方User ID
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
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

