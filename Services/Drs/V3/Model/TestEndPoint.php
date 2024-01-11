<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestEndPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestEndPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * netType  网络类型
    * dbType  数据库类型
    * ip  数据库IP
    * dbPort  数据库端口，Mongo、DDS必填为0。
    * instId  RDS实例id，RDS实例必填。
    * dbUser  数据库帐号。
    * dbPassword  数据库密码。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容，base64加密后的值，源库安全连接必选。
    * sslCertName  SSL证书名字，源库安全连接必选。
    * sslCertCheckSum  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12，需要密码。
    * vpcId  vpcid，数据库为RDS时必选。
    * subnetId  subnetid，数据库为RDS必选。
    * endPointType  源库：so,目标库：ta
    * region  rds实例region，数据库为RDS时必填。
    * projectId  用户所处region的projectId。
    * dbName  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    * kafkaSecurityConfig  kafkaSecurityConfig
    * customizedDns  customizedDns
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'netType' => 'string',
            'dbType' => 'string',
            'ip' => 'string',
            'dbPort' => 'int',
            'instId' => 'string',
            'dbUser' => 'string',
            'dbPassword' => 'string',
            'sslLink' => 'bool',
            'sslCertKey' => 'string',
            'sslCertName' => 'string',
            'sslCertCheckSum' => 'string',
            'sslCertPassword' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'endPointType' => 'string',
            'region' => 'string',
            'projectId' => 'string',
            'dbName' => 'string',
            'kafkaSecurityConfig' => '\HuaweiCloud\SDK\Drs\V3\Model\KafkaSecurity',
            'customizedDns' => '\HuaweiCloud\SDK\Drs\V3\Model\CustomizedDns'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * netType  网络类型
    * dbType  数据库类型
    * ip  数据库IP
    * dbPort  数据库端口，Mongo、DDS必填为0。
    * instId  RDS实例id，RDS实例必填。
    * dbUser  数据库帐号。
    * dbPassword  数据库密码。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容，base64加密后的值，源库安全连接必选。
    * sslCertName  SSL证书名字，源库安全连接必选。
    * sslCertCheckSum  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12，需要密码。
    * vpcId  vpcid，数据库为RDS时必选。
    * subnetId  subnetid，数据库为RDS必选。
    * endPointType  源库：so,目标库：ta
    * region  rds实例region，数据库为RDS时必填。
    * projectId  用户所处region的projectId。
    * dbName  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    * kafkaSecurityConfig  kafkaSecurityConfig
    * customizedDns  customizedDns
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'netType' => null,
        'dbType' => null,
        'ip' => null,
        'dbPort' => 'int32',
        'instId' => null,
        'dbUser' => null,
        'dbPassword' => null,
        'sslLink' => null,
        'sslCertKey' => null,
        'sslCertName' => null,
        'sslCertCheckSum' => null,
        'sslCertPassword' => null,
        'vpcId' => null,
        'subnetId' => null,
        'endPointType' => null,
        'region' => null,
        'projectId' => null,
        'dbName' => null,
        'kafkaSecurityConfig' => null,
        'customizedDns' => null
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
    * id  任务ID
    * netType  网络类型
    * dbType  数据库类型
    * ip  数据库IP
    * dbPort  数据库端口，Mongo、DDS必填为0。
    * instId  RDS实例id，RDS实例必填。
    * dbUser  数据库帐号。
    * dbPassword  数据库密码。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容，base64加密后的值，源库安全连接必选。
    * sslCertName  SSL证书名字，源库安全连接必选。
    * sslCertCheckSum  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12，需要密码。
    * vpcId  vpcid，数据库为RDS时必选。
    * subnetId  subnetid，数据库为RDS必选。
    * endPointType  源库：so,目标库：ta
    * region  rds实例region，数据库为RDS时必填。
    * projectId  用户所处region的projectId。
    * dbName  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    * kafkaSecurityConfig  kafkaSecurityConfig
    * customizedDns  customizedDns
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'netType' => 'net_type',
            'dbType' => 'db_type',
            'ip' => 'ip',
            'dbPort' => 'db_port',
            'instId' => 'inst_id',
            'dbUser' => 'db_user',
            'dbPassword' => 'db_password',
            'sslLink' => 'ssl_link',
            'sslCertKey' => 'ssl_cert_key',
            'sslCertName' => 'ssl_cert_name',
            'sslCertCheckSum' => 'ssl_cert_check_sum',
            'sslCertPassword' => 'ssl_cert_password',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'endPointType' => 'end_point_type',
            'region' => 'region',
            'projectId' => 'project_id',
            'dbName' => 'db_name',
            'kafkaSecurityConfig' => 'kafka_security_config',
            'customizedDns' => 'customized_dns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * netType  网络类型
    * dbType  数据库类型
    * ip  数据库IP
    * dbPort  数据库端口，Mongo、DDS必填为0。
    * instId  RDS实例id，RDS实例必填。
    * dbUser  数据库帐号。
    * dbPassword  数据库密码。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容，base64加密后的值，源库安全连接必选。
    * sslCertName  SSL证书名字，源库安全连接必选。
    * sslCertCheckSum  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12，需要密码。
    * vpcId  vpcid，数据库为RDS时必选。
    * subnetId  subnetid，数据库为RDS必选。
    * endPointType  源库：so,目标库：ta
    * region  rds实例region，数据库为RDS时必填。
    * projectId  用户所处region的projectId。
    * dbName  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    * kafkaSecurityConfig  kafkaSecurityConfig
    * customizedDns  customizedDns
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'netType' => 'setNetType',
            'dbType' => 'setDbType',
            'ip' => 'setIp',
            'dbPort' => 'setDbPort',
            'instId' => 'setInstId',
            'dbUser' => 'setDbUser',
            'dbPassword' => 'setDbPassword',
            'sslLink' => 'setSslLink',
            'sslCertKey' => 'setSslCertKey',
            'sslCertName' => 'setSslCertName',
            'sslCertCheckSum' => 'setSslCertCheckSum',
            'sslCertPassword' => 'setSslCertPassword',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'endPointType' => 'setEndPointType',
            'region' => 'setRegion',
            'projectId' => 'setProjectId',
            'dbName' => 'setDbName',
            'kafkaSecurityConfig' => 'setKafkaSecurityConfig',
            'customizedDns' => 'setCustomizedDns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * netType  网络类型
    * dbType  数据库类型
    * ip  数据库IP
    * dbPort  数据库端口，Mongo、DDS必填为0。
    * instId  RDS实例id，RDS实例必填。
    * dbUser  数据库帐号。
    * dbPassword  数据库密码。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容，base64加密后的值，源库安全连接必选。
    * sslCertName  SSL证书名字，源库安全连接必选。
    * sslCertCheckSum  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12，需要密码。
    * vpcId  vpcid，数据库为RDS时必选。
    * subnetId  subnetid，数据库为RDS必选。
    * endPointType  源库：so,目标库：ta
    * region  rds实例region，数据库为RDS时必填。
    * projectId  用户所处region的projectId。
    * dbName  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    * kafkaSecurityConfig  kafkaSecurityConfig
    * customizedDns  customizedDns
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'netType' => 'getNetType',
            'dbType' => 'getDbType',
            'ip' => 'getIp',
            'dbPort' => 'getDbPort',
            'instId' => 'getInstId',
            'dbUser' => 'getDbUser',
            'dbPassword' => 'getDbPassword',
            'sslLink' => 'getSslLink',
            'sslCertKey' => 'getSslCertKey',
            'sslCertName' => 'getSslCertName',
            'sslCertCheckSum' => 'getSslCertCheckSum',
            'sslCertPassword' => 'getSslCertPassword',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'endPointType' => 'getEndPointType',
            'region' => 'getRegion',
            'projectId' => 'getProjectId',
            'dbName' => 'getDbName',
            'kafkaSecurityConfig' => 'getKafkaSecurityConfig',
            'customizedDns' => 'getCustomizedDns'
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
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_EIP = 'eip';
    const DB_TYPE_MYSQL = 'mysql';
    const DB_TYPE_MONGODB = 'mongodb';
    const DB_TYPE_GAUSSDBV5 = 'gaussdbv5';
    const DB_TYPE_POSTGRESQL = 'postgresql';
    const DB_TYPE_KAFKA = 'kafka';
    const DB_TYPE_GAUSSDBV5HA = 'gaussdbv5ha';
    const DB_TYPE_TAURUS = 'taurus';
    const END_POINT_TYPE_SO = 'so';
    const END_POINT_TYPE_TA = 'ta';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VPN,
            self::NET_TYPE_VPC,
            self::NET_TYPE_EIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_MYSQL,
            self::DB_TYPE_MONGODB,
            self::DB_TYPE_GAUSSDBV5,
            self::DB_TYPE_POSTGRESQL,
            self::DB_TYPE_KAFKA,
            self::DB_TYPE_GAUSSDBV5HA,
            self::DB_TYPE_TAURUS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEndPointTypeAllowableValues()
    {
        return [
            self::END_POINT_TYPE_SO,
            self::END_POINT_TYPE_TA,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['instId'] = isset($data['instId']) ? $data['instId'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['sslLink'] = isset($data['sslLink']) ? $data['sslLink'] : null;
        $this->container['sslCertKey'] = isset($data['sslCertKey']) ? $data['sslCertKey'] : null;
        $this->container['sslCertName'] = isset($data['sslCertName']) ? $data['sslCertName'] : null;
        $this->container['sslCertCheckSum'] = isset($data['sslCertCheckSum']) ? $data['sslCertCheckSum'] : null;
        $this->container['sslCertPassword'] = isset($data['sslCertPassword']) ? $data['sslCertPassword'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['endPointType'] = isset($data['endPointType']) ? $data['endPointType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['kafkaSecurityConfig'] = isset($data['kafkaSecurityConfig']) ? $data['kafkaSecurityConfig'] : null;
        $this->container['customizedDns'] = isset($data['customizedDns']) ? $data['customizedDns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['netType'] === null) {
            $invalidProperties[] = "'netType' can't be null";
        }
            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['dbUser'] === null) {
            $invalidProperties[] = "'dbUser' can't be null";
        }
        if ($this->container['dbPassword'] === null) {
            $invalidProperties[] = "'dbPassword' can't be null";
        }
        if ($this->container['endPointType'] === null) {
            $invalidProperties[] = "'endPointType' can't be null";
        }
            $allowedValues = $this->getEndPointTypeAllowableValues();
                if (!is_null($this->container['endPointType']) && !in_array($this->container['endPointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'endPointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  任务ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型
    *
    * @return string
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string $netType 网络类型
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType 数据库类型
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets ip
    *  数据库IP
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 数据库IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口，Mongo、DDS必填为0。
    *
    * @return int|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int|null $dbPort 数据库端口，Mongo、DDS必填为0。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets instId
    *  RDS实例id，RDS实例必填。
    *
    * @return string|null
    */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
    * Sets instId
    *
    * @param string|null $instId RDS实例id，RDS实例必填。
    *
    * @return $this
    */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库帐号。
    *
    * @return string
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string $dbUser 数据库帐号。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets dbPassword
    *  数据库密码。
    *
    * @return string
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string $dbPassword 数据库密码。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets sslLink
    *  是否SSL安全连接。
    *
    * @return bool|null
    */
    public function getSslLink()
    {
        return $this->container['sslLink'];
    }

    /**
    * Sets sslLink
    *
    * @param bool|null $sslLink 是否SSL安全连接。
    *
    * @return $this
    */
    public function setSslLink($sslLink)
    {
        $this->container['sslLink'] = $sslLink;
        return $this;
    }

    /**
    * Gets sslCertKey
    *  SSL证书内容，base64加密后的值，源库安全连接必选。
    *
    * @return string|null
    */
    public function getSslCertKey()
    {
        return $this->container['sslCertKey'];
    }

    /**
    * Sets sslCertKey
    *
    * @param string|null $sslCertKey SSL证书内容，base64加密后的值，源库安全连接必选。
    *
    * @return $this
    */
    public function setSslCertKey($sslCertKey)
    {
        $this->container['sslCertKey'] = $sslCertKey;
        return $this;
    }

    /**
    * Gets sslCertName
    *  SSL证书名字，源库安全连接必选。
    *
    * @return string|null
    */
    public function getSslCertName()
    {
        return $this->container['sslCertName'];
    }

    /**
    * Sets sslCertName
    *
    * @param string|null $sslCertName SSL证书名字，源库安全连接必选。
    *
    * @return $this
    */
    public function setSslCertName($sslCertName)
    {
        $this->container['sslCertName'] = $sslCertName;
        return $this;
    }

    /**
    * Gets sslCertCheckSum
    *  SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    *
    * @return string|null
    */
    public function getSslCertCheckSum()
    {
        return $this->container['sslCertCheckSum'];
    }

    /**
    * Sets sslCertCheckSum
    *
    * @param string|null $sslCertCheckSum SSL证书内容checksum值，证书经过sha256加密后的值，后端校验，源库安全连接必选。
    *
    * @return $this
    */
    public function setSslCertCheckSum($sslCertCheckSum)
    {
        $this->container['sslCertCheckSum'] = $sslCertCheckSum;
        return $this;
    }

    /**
    * Gets sslCertPassword
    *  SSL证书密码，证书文件后缀为.p12，需要密码。
    *
    * @return string|null
    */
    public function getSslCertPassword()
    {
        return $this->container['sslCertPassword'];
    }

    /**
    * Sets sslCertPassword
    *
    * @param string|null $sslCertPassword SSL证书密码，证书文件后缀为.p12，需要密码。
    *
    * @return $this
    */
    public function setSslCertPassword($sslCertPassword)
    {
        $this->container['sslCertPassword'] = $sslCertPassword;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpcid，数据库为RDS时必选。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId vpcid，数据库为RDS时必选。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  subnetid，数据库为RDS必选。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId subnetid，数据库为RDS必选。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets endPointType
    *  源库：so,目标库：ta
    *
    * @return string
    */
    public function getEndPointType()
    {
        return $this->container['endPointType'];
    }

    /**
    * Sets endPointType
    *
    * @param string $endPointType 源库：so,目标库：ta
    *
    * @return $this
    */
    public function setEndPointType($endPointType)
    {
        $this->container['endPointType'] = $endPointType;
        return $this;
    }

    /**
    * Gets region
    *  rds实例region，数据库为RDS时必填。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region rds实例region，数据库为RDS时必填。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets projectId
    *  用户所处region的projectId。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 用户所处region的projectId。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库用户名，DDS的账号认证数据库，Oracle的serviceName。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets kafkaSecurityConfig
    *  kafkaSecurityConfig
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\KafkaSecurity|null
    */
    public function getKafkaSecurityConfig()
    {
        return $this->container['kafkaSecurityConfig'];
    }

    /**
    * Sets kafkaSecurityConfig
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\KafkaSecurity|null $kafkaSecurityConfig kafkaSecurityConfig
    *
    * @return $this
    */
    public function setKafkaSecurityConfig($kafkaSecurityConfig)
    {
        $this->container['kafkaSecurityConfig'] = $kafkaSecurityConfig;
        return $this;
    }

    /**
    * Gets customizedDns
    *  customizedDns
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CustomizedDns|null
    */
    public function getCustomizedDns()
    {
        return $this->container['customizedDns'];
    }

    /**
    * Sets customizedDns
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CustomizedDns|null $customizedDns customizedDns
    *
    * @return $this
    */
    public function setCustomizedDns($customizedDns)
    {
        $this->container['customizedDns'] = $customizedDns;
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

