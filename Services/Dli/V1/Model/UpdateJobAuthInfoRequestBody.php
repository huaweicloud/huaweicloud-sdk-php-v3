<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateJobAuthInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateJobAuthInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authInfoName  证书名
    * userName  用户安全集群的新登录用户名
    * password  用户安全集群的新登录密码
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * truststorePassword  truststore配置文件密码
    * keystoreLocation  keystore配置文件obs路径
    * keystorePassword  keystore配置文件密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authInfoName' => 'string',
            'userName' => 'string',
            'password' => 'string',
            'krb5Conf' => 'string',
            'keytab' => 'string',
            'truststoreLocation' => 'string',
            'truststorePassword' => 'string',
            'keystoreLocation' => 'string',
            'keystorePassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authInfoName  证书名
    * userName  用户安全集群的新登录用户名
    * password  用户安全集群的新登录密码
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * truststorePassword  truststore配置文件密码
    * keystoreLocation  keystore配置文件obs路径
    * keystorePassword  keystore配置文件密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authInfoName' => null,
        'userName' => null,
        'password' => null,
        'krb5Conf' => null,
        'keytab' => null,
        'truststoreLocation' => null,
        'truststorePassword' => null,
        'keystoreLocation' => null,
        'keystorePassword' => null
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
    * authInfoName  证书名
    * userName  用户安全集群的新登录用户名
    * password  用户安全集群的新登录密码
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * truststorePassword  truststore配置文件密码
    * keystoreLocation  keystore配置文件obs路径
    * keystorePassword  keystore配置文件密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authInfoName' => 'auth_info_name',
            'userName' => 'user_name',
            'password' => 'password',
            'krb5Conf' => 'krb5_conf',
            'keytab' => 'keytab',
            'truststoreLocation' => 'truststore_location',
            'truststorePassword' => 'truststore_password',
            'keystoreLocation' => 'keystore_location',
            'keystorePassword' => 'keystore_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authInfoName  证书名
    * userName  用户安全集群的新登录用户名
    * password  用户安全集群的新登录密码
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * truststorePassword  truststore配置文件密码
    * keystoreLocation  keystore配置文件obs路径
    * keystorePassword  keystore配置文件密码
    *
    * @var string[]
    */
    protected static $setters = [
            'authInfoName' => 'setAuthInfoName',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'krb5Conf' => 'setKrb5Conf',
            'keytab' => 'setKeytab',
            'truststoreLocation' => 'setTruststoreLocation',
            'truststorePassword' => 'setTruststorePassword',
            'keystoreLocation' => 'setKeystoreLocation',
            'keystorePassword' => 'setKeystorePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authInfoName  证书名
    * userName  用户安全集群的新登录用户名
    * password  用户安全集群的新登录密码
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * truststorePassword  truststore配置文件密码
    * keystoreLocation  keystore配置文件obs路径
    * keystorePassword  keystore配置文件密码
    *
    * @var string[]
    */
    protected static $getters = [
            'authInfoName' => 'getAuthInfoName',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'krb5Conf' => 'getKrb5Conf',
            'keytab' => 'getKeytab',
            'truststoreLocation' => 'getTruststoreLocation',
            'truststorePassword' => 'getTruststorePassword',
            'keystoreLocation' => 'getKeystoreLocation',
            'keystorePassword' => 'getKeystorePassword'
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
        $this->container['authInfoName'] = isset($data['authInfoName']) ? $data['authInfoName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['krb5Conf'] = isset($data['krb5Conf']) ? $data['krb5Conf'] : null;
        $this->container['keytab'] = isset($data['keytab']) ? $data['keytab'] : null;
        $this->container['truststoreLocation'] = isset($data['truststoreLocation']) ? $data['truststoreLocation'] : null;
        $this->container['truststorePassword'] = isset($data['truststorePassword']) ? $data['truststorePassword'] : null;
        $this->container['keystoreLocation'] = isset($data['keystoreLocation']) ? $data['keystoreLocation'] : null;
        $this->container['keystorePassword'] = isset($data['keystorePassword']) ? $data['keystorePassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authInfoName'] === null) {
            $invalidProperties[] = "'authInfoName' can't be null";
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
    * Gets authInfoName
    *  证书名
    *
    * @return string
    */
    public function getAuthInfoName()
    {
        return $this->container['authInfoName'];
    }

    /**
    * Sets authInfoName
    *
    * @param string $authInfoName 证书名
    *
    * @return $this
    */
    public function setAuthInfoName($authInfoName)
    {
        $this->container['authInfoName'] = $authInfoName;
        return $this;
    }

    /**
    * Gets userName
    *  用户安全集群的新登录用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户安全集群的新登录用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  用户安全集群的新登录密码
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 用户安全集群的新登录密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets krb5Conf
    *  krb5配置文件obs路径
    *
    * @return string|null
    */
    public function getKrb5Conf()
    {
        return $this->container['krb5Conf'];
    }

    /**
    * Sets krb5Conf
    *
    * @param string|null $krb5Conf krb5配置文件obs路径
    *
    * @return $this
    */
    public function setKrb5Conf($krb5Conf)
    {
        $this->container['krb5Conf'] = $krb5Conf;
        return $this;
    }

    /**
    * Gets keytab
    *  keytab配置文件obs路径
    *
    * @return string|null
    */
    public function getKeytab()
    {
        return $this->container['keytab'];
    }

    /**
    * Sets keytab
    *
    * @param string|null $keytab keytab配置文件obs路径
    *
    * @return $this
    */
    public function setKeytab($keytab)
    {
        $this->container['keytab'] = $keytab;
        return $this;
    }

    /**
    * Gets truststoreLocation
    *  truststore配置文件obs路径
    *
    * @return string|null
    */
    public function getTruststoreLocation()
    {
        return $this->container['truststoreLocation'];
    }

    /**
    * Sets truststoreLocation
    *
    * @param string|null $truststoreLocation truststore配置文件obs路径
    *
    * @return $this
    */
    public function setTruststoreLocation($truststoreLocation)
    {
        $this->container['truststoreLocation'] = $truststoreLocation;
        return $this;
    }

    /**
    * Gets truststorePassword
    *  truststore配置文件密码
    *
    * @return string|null
    */
    public function getTruststorePassword()
    {
        return $this->container['truststorePassword'];
    }

    /**
    * Sets truststorePassword
    *
    * @param string|null $truststorePassword truststore配置文件密码
    *
    * @return $this
    */
    public function setTruststorePassword($truststorePassword)
    {
        $this->container['truststorePassword'] = $truststorePassword;
        return $this;
    }

    /**
    * Gets keystoreLocation
    *  keystore配置文件obs路径
    *
    * @return string|null
    */
    public function getKeystoreLocation()
    {
        return $this->container['keystoreLocation'];
    }

    /**
    * Sets keystoreLocation
    *
    * @param string|null $keystoreLocation keystore配置文件obs路径
    *
    * @return $this
    */
    public function setKeystoreLocation($keystoreLocation)
    {
        $this->container['keystoreLocation'] = $keystoreLocation;
        return $this;
    }

    /**
    * Gets keystorePassword
    *  keystore配置文件密码
    *
    * @return string|null
    */
    public function getKeystorePassword()
    {
        return $this->container['keystorePassword'];
    }

    /**
    * Sets keystorePassword
    *
    * @param string|null $keystorePassword keystore配置文件密码
    *
    * @return $this
    */
    public function setKeystorePassword($keystorePassword)
    {
        $this->container['keystorePassword'] = $keystorePassword;
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

