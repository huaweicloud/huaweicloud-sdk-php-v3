<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllowUserBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllowUserBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manageAccesskey  是否允许子用户自行管理AK，取值范围true或false。
    * manageEmail  是否允许子用户自己修改邮箱，取值范围true或false。
    * manageMobile  是否允许子用户自己修改电话，取值范围true或false。
    * managePassword  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manageAccesskey' => 'bool',
            'manageEmail' => 'bool',
            'manageMobile' => 'bool',
            'managePassword' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manageAccesskey  是否允许子用户自行管理AK，取值范围true或false。
    * manageEmail  是否允许子用户自己修改邮箱，取值范围true或false。
    * manageMobile  是否允许子用户自己修改电话，取值范围true或false。
    * managePassword  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manageAccesskey' => null,
        'manageEmail' => null,
        'manageMobile' => null,
        'managePassword' => null
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
    * manageAccesskey  是否允许子用户自行管理AK，取值范围true或false。
    * manageEmail  是否允许子用户自己修改邮箱，取值范围true或false。
    * manageMobile  是否允许子用户自己修改电话，取值范围true或false。
    * managePassword  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manageAccesskey' => 'manage_accesskey',
            'manageEmail' => 'manage_email',
            'manageMobile' => 'manage_mobile',
            'managePassword' => 'manage_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manageAccesskey  是否允许子用户自行管理AK，取值范围true或false。
    * manageEmail  是否允许子用户自己修改邮箱，取值范围true或false。
    * manageMobile  是否允许子用户自己修改电话，取值范围true或false。
    * managePassword  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @var string[]
    */
    protected static $setters = [
            'manageAccesskey' => 'setManageAccesskey',
            'manageEmail' => 'setManageEmail',
            'manageMobile' => 'setManageMobile',
            'managePassword' => 'setManagePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manageAccesskey  是否允许子用户自行管理AK，取值范围true或false。
    * manageEmail  是否允许子用户自己修改邮箱，取值范围true或false。
    * manageMobile  是否允许子用户自己修改电话，取值范围true或false。
    * managePassword  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @var string[]
    */
    protected static $getters = [
            'manageAccesskey' => 'getManageAccesskey',
            'manageEmail' => 'getManageEmail',
            'manageMobile' => 'getManageMobile',
            'managePassword' => 'getManagePassword'
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
        $this->container['manageAccesskey'] = isset($data['manageAccesskey']) ? $data['manageAccesskey'] : null;
        $this->container['manageEmail'] = isset($data['manageEmail']) ? $data['manageEmail'] : null;
        $this->container['manageMobile'] = isset($data['manageMobile']) ? $data['manageMobile'] : null;
        $this->container['managePassword'] = isset($data['managePassword']) ? $data['managePassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets manageAccesskey
    *  是否允许子用户自行管理AK，取值范围true或false。
    *
    * @return bool|null
    */
    public function getManageAccesskey()
    {
        return $this->container['manageAccesskey'];
    }

    /**
    * Sets manageAccesskey
    *
    * @param bool|null $manageAccesskey 是否允许子用户自行管理AK，取值范围true或false。
    *
    * @return $this
    */
    public function setManageAccesskey($manageAccesskey)
    {
        $this->container['manageAccesskey'] = $manageAccesskey;
        return $this;
    }

    /**
    * Gets manageEmail
    *  是否允许子用户自己修改邮箱，取值范围true或false。
    *
    * @return bool|null
    */
    public function getManageEmail()
    {
        return $this->container['manageEmail'];
    }

    /**
    * Sets manageEmail
    *
    * @param bool|null $manageEmail 是否允许子用户自己修改邮箱，取值范围true或false。
    *
    * @return $this
    */
    public function setManageEmail($manageEmail)
    {
        $this->container['manageEmail'] = $manageEmail;
        return $this;
    }

    /**
    * Gets manageMobile
    *  是否允许子用户自己修改电话，取值范围true或false。
    *
    * @return bool|null
    */
    public function getManageMobile()
    {
        return $this->container['manageMobile'];
    }

    /**
    * Sets manageMobile
    *
    * @param bool|null $manageMobile 是否允许子用户自己修改电话，取值范围true或false。
    *
    * @return $this
    */
    public function setManageMobile($manageMobile)
    {
        $this->container['manageMobile'] = $manageMobile;
        return $this;
    }

    /**
    * Gets managePassword
    *  是否允许子用户自己修改密码，取值范围true或false。
    *
    * @return bool|null
    */
    public function getManagePassword()
    {
        return $this->container['managePassword'];
    }

    /**
    * Sets managePassword
    *
    * @param bool|null $managePassword 是否允许子用户自己修改密码，取值范围true或false。
    *
    * @return $this
    */
    public function setManagePassword($managePassword)
    {
        $this->container['managePassword'] = $managePassword;
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

