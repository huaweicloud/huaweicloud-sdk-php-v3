<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requireEip  支持EIP的实例版本。
    * iamLogin  支持IAM登录的实例版本。
    * adminLogin  支持管理员登录的实例版本。
    * floatIpv6  支持浮动IPv6的实例版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requireEip' => 'string',
            'iamLogin' => 'string',
            'adminLogin' => 'string',
            'floatIpv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requireEip  支持EIP的实例版本。
    * iamLogin  支持IAM登录的实例版本。
    * adminLogin  支持管理员登录的实例版本。
    * floatIpv6  支持浮动IPv6的实例版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requireEip' => null,
        'iamLogin' => null,
        'adminLogin' => null,
        'floatIpv6' => null
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
    * requireEip  支持EIP的实例版本。
    * iamLogin  支持IAM登录的实例版本。
    * adminLogin  支持管理员登录的实例版本。
    * floatIpv6  支持浮动IPv6的实例版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requireEip' => 'require_eip',
            'iamLogin' => 'iam_login',
            'adminLogin' => 'admin_login',
            'floatIpv6' => 'float_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requireEip  支持EIP的实例版本。
    * iamLogin  支持IAM登录的实例版本。
    * adminLogin  支持管理员登录的实例版本。
    * floatIpv6  支持浮动IPv6的实例版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'requireEip' => 'setRequireEip',
            'iamLogin' => 'setIamLogin',
            'adminLogin' => 'setAdminLogin',
            'floatIpv6' => 'setFloatIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requireEip  支持EIP的实例版本。
    * iamLogin  支持IAM登录的实例版本。
    * adminLogin  支持管理员登录的实例版本。
    * floatIpv6  支持浮动IPv6的实例版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'requireEip' => 'getRequireEip',
            'iamLogin' => 'getIamLogin',
            'adminLogin' => 'getAdminLogin',
            'floatIpv6' => 'getFloatIpv6'
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
        $this->container['requireEip'] = isset($data['requireEip']) ? $data['requireEip'] : null;
        $this->container['iamLogin'] = isset($data['iamLogin']) ? $data['iamLogin'] : null;
        $this->container['adminLogin'] = isset($data['adminLogin']) ? $data['adminLogin'] : null;
        $this->container['floatIpv6'] = isset($data['floatIpv6']) ? $data['floatIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requireEip']) && (mb_strlen($this->container['requireEip']) > 255)) {
                $invalidProperties[] = "invalid value for 'requireEip', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['requireEip']) && (mb_strlen($this->container['requireEip']) < 0)) {
                $invalidProperties[] = "invalid value for 'requireEip', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['iamLogin']) && (mb_strlen($this->container['iamLogin']) > 255)) {
                $invalidProperties[] = "invalid value for 'iamLogin', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['iamLogin']) && (mb_strlen($this->container['iamLogin']) < 0)) {
                $invalidProperties[] = "invalid value for 'iamLogin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminLogin']) && (mb_strlen($this->container['adminLogin']) > 255)) {
                $invalidProperties[] = "invalid value for 'adminLogin', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['adminLogin']) && (mb_strlen($this->container['adminLogin']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminLogin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatIpv6']) && (mb_strlen($this->container['floatIpv6']) > 255)) {
                $invalidProperties[] = "invalid value for 'floatIpv6', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['floatIpv6']) && (mb_strlen($this->container['floatIpv6']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatIpv6', the character length must be bigger than or equal to 0.";
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
    * Gets requireEip
    *  支持EIP的实例版本。
    *
    * @return string|null
    */
    public function getRequireEip()
    {
        return $this->container['requireEip'];
    }

    /**
    * Sets requireEip
    *
    * @param string|null $requireEip 支持EIP的实例版本。
    *
    * @return $this
    */
    public function setRequireEip($requireEip)
    {
        $this->container['requireEip'] = $requireEip;
        return $this;
    }

    /**
    * Gets iamLogin
    *  支持IAM登录的实例版本。
    *
    * @return string|null
    */
    public function getIamLogin()
    {
        return $this->container['iamLogin'];
    }

    /**
    * Sets iamLogin
    *
    * @param string|null $iamLogin 支持IAM登录的实例版本。
    *
    * @return $this
    */
    public function setIamLogin($iamLogin)
    {
        $this->container['iamLogin'] = $iamLogin;
        return $this;
    }

    /**
    * Gets adminLogin
    *  支持管理员登录的实例版本。
    *
    * @return string|null
    */
    public function getAdminLogin()
    {
        return $this->container['adminLogin'];
    }

    /**
    * Sets adminLogin
    *
    * @param string|null $adminLogin 支持管理员登录的实例版本。
    *
    * @return $this
    */
    public function setAdminLogin($adminLogin)
    {
        $this->container['adminLogin'] = $adminLogin;
        return $this;
    }

    /**
    * Gets floatIpv6
    *  支持浮动IPv6的实例版本。
    *
    * @return string|null
    */
    public function getFloatIpv6()
    {
        return $this->container['floatIpv6'];
    }

    /**
    * Sets floatIpv6
    *
    * @param string|null $floatIpv6 支持浮动IPv6的实例版本。
    *
    * @return $this
    */
    public function setFloatIpv6($floatIpv6)
    {
        $this->container['floatIpv6'] = $floatIpv6;
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

