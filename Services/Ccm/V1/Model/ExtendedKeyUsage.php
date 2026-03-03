<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendedKeyUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendedKeyUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverAuth  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    * clientAuth  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    * codeSigning  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    * emailProtection  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    * timeStamping  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    * smartCardLogon  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverAuth' => 'bool',
            'clientAuth' => 'bool',
            'codeSigning' => 'bool',
            'emailProtection' => 'bool',
            'timeStamping' => 'bool',
            'smartCardLogon' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverAuth  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    * clientAuth  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    * codeSigning  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    * emailProtection  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    * timeStamping  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    * smartCardLogon  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverAuth' => null,
        'clientAuth' => null,
        'codeSigning' => null,
        'emailProtection' => null,
        'timeStamping' => null,
        'smartCardLogon' => null
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
    * serverAuth  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    * clientAuth  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    * codeSigning  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    * emailProtection  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    * timeStamping  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    * smartCardLogon  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverAuth' => 'server_auth',
            'clientAuth' => 'client_auth',
            'codeSigning' => 'code_signing',
            'emailProtection' => 'email_protection',
            'timeStamping' => 'time_stamping',
            'smartCardLogon' => 'smart_card_logon'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverAuth  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    * clientAuth  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    * codeSigning  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    * emailProtection  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    * timeStamping  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    * smartCardLogon  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverAuth' => 'setServerAuth',
            'clientAuth' => 'setClientAuth',
            'codeSigning' => 'setCodeSigning',
            'emailProtection' => 'setEmailProtection',
            'timeStamping' => 'setTimeStamping',
            'smartCardLogon' => 'setSmartCardLogon'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverAuth  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    * clientAuth  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    * codeSigning  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    * emailProtection  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    * timeStamping  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    * smartCardLogon  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverAuth' => 'getServerAuth',
            'clientAuth' => 'getClientAuth',
            'codeSigning' => 'getCodeSigning',
            'emailProtection' => 'getEmailProtection',
            'timeStamping' => 'getTimeStamping',
            'smartCardLogon' => 'getSmartCardLogon'
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
        $this->container['serverAuth'] = isset($data['serverAuth']) ? $data['serverAuth'] : null;
        $this->container['clientAuth'] = isset($data['clientAuth']) ? $data['clientAuth'] : null;
        $this->container['codeSigning'] = isset($data['codeSigning']) ? $data['codeSigning'] : null;
        $this->container['emailProtection'] = isset($data['emailProtection']) ? $data['emailProtection'] : null;
        $this->container['timeStamping'] = isset($data['timeStamping']) ? $data['timeStamping'] : null;
        $this->container['smartCardLogon'] = isset($data['smartCardLogon']) ? $data['smartCardLogon'] : null;
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
    * Gets serverAuth
    *  服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    *
    * @return bool|null
    */
    public function getServerAuth()
    {
        return $this->container['serverAuth'];
    }

    /**
    * Sets serverAuth
    *
    * @param bool|null $serverAuth 服务器身份验证，OID为：1.3.6.1.5.5.7.3.1。 - **true** - **false** > 服务器证书请启用本增强型密钥用法，默认为false。
    *
    * @return $this
    */
    public function setServerAuth($serverAuth)
    {
        $this->container['serverAuth'] = $serverAuth;
        return $this;
    }

    /**
    * Gets clientAuth
    *  客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    *
    * @return bool|null
    */
    public function getClientAuth()
    {
        return $this->container['clientAuth'];
    }

    /**
    * Sets clientAuth
    *
    * @param bool|null $clientAuth 客户端身份验证，OID为：1.3.6.1.5.5.7.3.2。 - **true** - **false** > 客户端证书请启用本增强型密钥用法，默认为false。
    *
    * @return $this
    */
    public function setClientAuth($clientAuth)
    {
        $this->container['clientAuth'] = $clientAuth;
        return $this;
    }

    /**
    * Gets codeSigning
    *  代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    *
    * @return bool|null
    */
    public function getCodeSigning()
    {
        return $this->container['codeSigning'];
    }

    /**
    * Sets codeSigning
    *
    * @param bool|null $codeSigning 代码签名，OID为：1.3.6.1.5.5.7.3.3。 - **true** - **false** > 签署可下载的可执行代码客户端认证，默认为false。
    *
    * @return $this
    */
    public function setCodeSigning($codeSigning)
    {
        $this->container['codeSigning'] = $codeSigning;
        return $this;
    }

    /**
    * Gets emailProtection
    *  安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    *
    * @return bool|null
    */
    public function getEmailProtection()
    {
        return $this->container['emailProtection'];
    }

    /**
    * Sets emailProtection
    *
    * @param bool|null $emailProtection 安全电子邮件，OID为：1.3.6.1.5.5.7.3.4。 - **true** - **false** > 电子邮件保护，默认为false。
    *
    * @return $this
    */
    public function setEmailProtection($emailProtection)
    {
        $this->container['emailProtection'] = $emailProtection;
        return $this;
    }

    /**
    * Gets timeStamping
    *  时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    *
    * @return bool|null
    */
    public function getTimeStamping()
    {
        return $this->container['timeStamping'];
    }

    /**
    * Sets timeStamping
    *
    * @param bool|null $timeStamping 时间戳，OID为：1.3.6.1.5.5.7.3.8。 - **true** - **false** > 将一个对象的哈希绑定到一个时间，默认为false。
    *
    * @return $this
    */
    public function setTimeStamping($timeStamping)
    {
        $this->container['timeStamping'] = $timeStamping;
        return $this;
    }

    /**
    * Gets smartCardLogon
    *  智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @return bool|null
    */
    public function getSmartCardLogon()
    {
        return $this->container['smartCardLogon'];
    }

    /**
    * Sets smartCardLogon
    *
    * @param bool|null $smartCardLogon 智能卡登录，OID为：1.3.6.1.4.1.311.20.2.2。 - **true** - **false** > Active Directory登录，默认为false。
    *
    * @return $this
    */
    public function setSmartCardLogon($smartCardLogon)
    {
        $this->container['smartCardLogon'] = $smartCardLogon;
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

