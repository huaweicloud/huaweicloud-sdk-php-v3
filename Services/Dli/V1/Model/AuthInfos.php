<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authInfoName  用户安全集群的登录用户名
    * userName  用户安全集群的登录密码
    * certificateLocation  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    * datasourceType  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    * createTime  创建时间戳
    * updateTime  更新时间戳
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * keystoreLocation  keystore配置文件obs路径
    * owner  所属用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authInfoName' => 'string',
            'userName' => 'string',
            'certificateLocation' => 'string',
            'datasourceType' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'krb5Conf' => 'string',
            'keytab' => 'string',
            'truststoreLocation' => 'string',
            'keystoreLocation' => 'string',
            'owner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authInfoName  用户安全集群的登录用户名
    * userName  用户安全集群的登录密码
    * certificateLocation  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    * datasourceType  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    * createTime  创建时间戳
    * updateTime  更新时间戳
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * keystoreLocation  keystore配置文件obs路径
    * owner  所属用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authInfoName' => null,
        'userName' => null,
        'certificateLocation' => null,
        'datasourceType' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'krb5Conf' => null,
        'keytab' => null,
        'truststoreLocation' => null,
        'keystoreLocation' => null,
        'owner' => null
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
    * authInfoName  用户安全集群的登录用户名
    * userName  用户安全集群的登录密码
    * certificateLocation  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    * datasourceType  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    * createTime  创建时间戳
    * updateTime  更新时间戳
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * keystoreLocation  keystore配置文件obs路径
    * owner  所属用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authInfoName' => 'auth_info_name',
            'userName' => 'user_name',
            'certificateLocation' => 'certificate_location',
            'datasourceType' => 'datasource_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'krb5Conf' => 'krb5_conf',
            'keytab' => 'keytab',
            'truststoreLocation' => 'truststore_location',
            'keystoreLocation' => 'keystore_location',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authInfoName  用户安全集群的登录用户名
    * userName  用户安全集群的登录密码
    * certificateLocation  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    * datasourceType  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    * createTime  创建时间戳
    * updateTime  更新时间戳
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * keystoreLocation  keystore配置文件obs路径
    * owner  所属用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'authInfoName' => 'setAuthInfoName',
            'userName' => 'setUserName',
            'certificateLocation' => 'setCertificateLocation',
            'datasourceType' => 'setDatasourceType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'krb5Conf' => 'setKrb5Conf',
            'keytab' => 'setKeytab',
            'truststoreLocation' => 'setTruststoreLocation',
            'keystoreLocation' => 'setKeystoreLocation',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authInfoName  用户安全集群的登录用户名
    * userName  用户安全集群的登录密码
    * certificateLocation  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    * datasourceType  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    * createTime  创建时间戳
    * updateTime  更新时间戳
    * krb5Conf  krb5配置文件obs路径
    * keytab  keytab配置文件obs路径
    * truststoreLocation  truststore配置文件obs路径
    * keystoreLocation  keystore配置文件obs路径
    * owner  所属用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'authInfoName' => 'getAuthInfoName',
            'userName' => 'getUserName',
            'certificateLocation' => 'getCertificateLocation',
            'datasourceType' => 'getDatasourceType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'krb5Conf' => 'getKrb5Conf',
            'keytab' => 'getKeytab',
            'truststoreLocation' => 'getTruststoreLocation',
            'keystoreLocation' => 'getKeystoreLocation',
            'owner' => 'getOwner'
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
        $this->container['certificateLocation'] = isset($data['certificateLocation']) ? $data['certificateLocation'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['krb5Conf'] = isset($data['krb5Conf']) ? $data['krb5Conf'] : null;
        $this->container['keytab'] = isset($data['keytab']) ? $data['keytab'] : null;
        $this->container['truststoreLocation'] = isset($data['truststoreLocation']) ? $data['truststoreLocation'] : null;
        $this->container['keystoreLocation'] = isset($data['keystoreLocation']) ? $data['keystoreLocation'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
    * Gets authInfoName
    *  用户安全集群的登录用户名
    *
    * @return string|null
    */
    public function getAuthInfoName()
    {
        return $this->container['authInfoName'];
    }

    /**
    * Sets authInfoName
    *
    * @param string|null $authInfoName 用户安全集群的登录用户名
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
    *  用户安全集群的登录密码
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
    * @param string|null $userName 用户安全集群的登录密码
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets certificateLocation
    *  用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    *
    * @return string|null
    */
    public function getCertificateLocation()
    {
        return $this->container['certificateLocation'];
    }

    /**
    * Sets certificateLocation
    *
    * @param string|null $certificateLocation 用户安全集群的证书路径，目前只支持OBS路径，cer类型文件
    *
    * @return $this
    */
    public function setCertificateLocation($certificateLocation)
    {
        $this->container['certificateLocation'] = $certificateLocation;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型，目前支持CSS,KRB,passwd,Kafka_SSL
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间戳
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets owner
    *  所属用户名
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 所属用户名
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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

