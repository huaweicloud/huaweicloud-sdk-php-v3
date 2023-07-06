<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KerberosVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KerberosVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * krb5ConfFile  krb5配置文件
    * keyTabFile  key文件
    * domainName  域名
    * userPrincipal  Kerberos用户对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'krb5ConfFile' => 'string',
            'keyTabFile' => 'string',
            'domainName' => 'string',
            'userPrincipal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * krb5ConfFile  krb5配置文件
    * keyTabFile  key文件
    * domainName  域名
    * userPrincipal  Kerberos用户对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'krb5ConfFile' => null,
        'keyTabFile' => null,
        'domainName' => null,
        'userPrincipal' => null
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
    * krb5ConfFile  krb5配置文件
    * keyTabFile  key文件
    * domainName  域名
    * userPrincipal  Kerberos用户对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'krb5ConfFile' => 'krb5_conf_file',
            'keyTabFile' => 'key_tab_file',
            'domainName' => 'domain_name',
            'userPrincipal' => 'user_principal'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * krb5ConfFile  krb5配置文件
    * keyTabFile  key文件
    * domainName  域名
    * userPrincipal  Kerberos用户对象
    *
    * @var string[]
    */
    protected static $setters = [
            'krb5ConfFile' => 'setKrb5ConfFile',
            'keyTabFile' => 'setKeyTabFile',
            'domainName' => 'setDomainName',
            'userPrincipal' => 'setUserPrincipal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * krb5ConfFile  krb5配置文件
    * keyTabFile  key文件
    * domainName  域名
    * userPrincipal  Kerberos用户对象
    *
    * @var string[]
    */
    protected static $getters = [
            'krb5ConfFile' => 'getKrb5ConfFile',
            'keyTabFile' => 'getKeyTabFile',
            'domainName' => 'getDomainName',
            'userPrincipal' => 'getUserPrincipal'
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
        $this->container['krb5ConfFile'] = isset($data['krb5ConfFile']) ? $data['krb5ConfFile'] : null;
        $this->container['keyTabFile'] = isset($data['keyTabFile']) ? $data['keyTabFile'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userPrincipal'] = isset($data['userPrincipal']) ? $data['userPrincipal'] : null;
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
    * Gets krb5ConfFile
    *  krb5配置文件
    *
    * @return string|null
    */
    public function getKrb5ConfFile()
    {
        return $this->container['krb5ConfFile'];
    }

    /**
    * Sets krb5ConfFile
    *
    * @param string|null $krb5ConfFile krb5配置文件
    *
    * @return $this
    */
    public function setKrb5ConfFile($krb5ConfFile)
    {
        $this->container['krb5ConfFile'] = $krb5ConfFile;
        return $this;
    }

    /**
    * Gets keyTabFile
    *  key文件
    *
    * @return string|null
    */
    public function getKeyTabFile()
    {
        return $this->container['keyTabFile'];
    }

    /**
    * Sets keyTabFile
    *
    * @param string|null $keyTabFile key文件
    *
    * @return $this
    */
    public function setKeyTabFile($keyTabFile)
    {
        $this->container['keyTabFile'] = $keyTabFile;
        return $this;
    }

    /**
    * Gets domainName
    *  域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userPrincipal
    *  Kerberos用户对象
    *
    * @return string|null
    */
    public function getUserPrincipal()
    {
        return $this->container['userPrincipal'];
    }

    /**
    * Sets userPrincipal
    *
    * @param string|null $userPrincipal Kerberos用户对象
    *
    * @return $this
    */
    public function setUserPrincipal($userPrincipal)
    {
        $this->container['userPrincipal'] = $userPrincipal;
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

