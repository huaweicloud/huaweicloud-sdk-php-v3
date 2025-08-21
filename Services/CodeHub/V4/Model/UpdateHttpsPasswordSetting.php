<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHttpsPasswordSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHttpsPasswordSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpsCloneIamAuth  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpsCloneIamAuth' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpsCloneIamAuth  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpsCloneIamAuth' => null
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
    * httpsCloneIamAuth  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpsCloneIamAuth' => 'https_clone_iam_auth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpsCloneIamAuth  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'httpsCloneIamAuth' => 'setHttpsCloneIamAuth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpsCloneIamAuth  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'httpsCloneIamAuth' => 'getHttpsCloneIamAuth'
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
        $this->container['httpsCloneIamAuth'] = isset($data['httpsCloneIamAuth']) ? $data['httpsCloneIamAuth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['httpsCloneIamAuth']) && (mb_strlen($this->container['httpsCloneIamAuth']) > 1000)) {
                $invalidProperties[] = "invalid value for 'httpsCloneIamAuth', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['httpsCloneIamAuth']) && (mb_strlen($this->container['httpsCloneIamAuth']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpsCloneIamAuth', the character length must be bigger than or equal to 1.";
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
    * Gets httpsCloneIamAuth
    *  **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getHttpsCloneIamAuth()
    {
        return $this->container['httpsCloneIamAuth'];
    }

    /**
    * Sets httpsCloneIamAuth
    *
    * @param string|null $httpsCloneIamAuth **参数解释：** 是否用https的认证方式 true,false。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setHttpsCloneIamAuth($httpsCloneIamAuth)
    {
        $this->container['httpsCloneIamAuth'] = $httpsCloneIamAuth;
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

