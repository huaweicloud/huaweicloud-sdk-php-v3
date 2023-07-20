<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ADDomainInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ADDomainInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainAdminAccountName  域管理员账号名
    * domainAdminPwd  域管理员密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainAdminAccountName' => 'string',
            'domainAdminPwd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainAdminAccountName  域管理员账号名
    * domainAdminPwd  域管理员密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainAdminAccountName' => null,
        'domainAdminPwd' => null
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
    * domainAdminAccountName  域管理员账号名
    * domainAdminPwd  域管理员密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainAdminAccountName' => 'domain_admin_account_name',
            'domainAdminPwd' => 'domain_admin_pwd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainAdminAccountName  域管理员账号名
    * domainAdminPwd  域管理员密码
    *
    * @var string[]
    */
    protected static $setters = [
            'domainAdminAccountName' => 'setDomainAdminAccountName',
            'domainAdminPwd' => 'setDomainAdminPwd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainAdminAccountName  域管理员账号名
    * domainAdminPwd  域管理员密码
    *
    * @var string[]
    */
    protected static $getters = [
            'domainAdminAccountName' => 'getDomainAdminAccountName',
            'domainAdminPwd' => 'getDomainAdminPwd'
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
        $this->container['domainAdminAccountName'] = isset($data['domainAdminAccountName']) ? $data['domainAdminAccountName'] : null;
        $this->container['domainAdminPwd'] = isset($data['domainAdminPwd']) ? $data['domainAdminPwd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainAdminAccountName'] === null) {
            $invalidProperties[] = "'domainAdminAccountName' can't be null";
        }
        if ($this->container['domainAdminPwd'] === null) {
            $invalidProperties[] = "'domainAdminPwd' can't be null";
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
    * Gets domainAdminAccountName
    *  域管理员账号名
    *
    * @return string
    */
    public function getDomainAdminAccountName()
    {
        return $this->container['domainAdminAccountName'];
    }

    /**
    * Sets domainAdminAccountName
    *
    * @param string $domainAdminAccountName 域管理员账号名
    *
    * @return $this
    */
    public function setDomainAdminAccountName($domainAdminAccountName)
    {
        $this->container['domainAdminAccountName'] = $domainAdminAccountName;
        return $this;
    }

    /**
    * Gets domainAdminPwd
    *  域管理员密码
    *
    * @return string
    */
    public function getDomainAdminPwd()
    {
        return $this->container['domainAdminPwd'];
    }

    /**
    * Sets domainAdminPwd
    *
    * @param string $domainAdminPwd 域管理员密码
    *
    * @return $this
    */
    public function setDomainAdminPwd($domainAdminPwd)
    {
        $this->container['domainAdminPwd'] = $domainAdminPwd;
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

