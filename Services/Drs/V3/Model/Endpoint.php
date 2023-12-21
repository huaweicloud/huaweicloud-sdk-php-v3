<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Endpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Endpoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbType  数据库类型，测试连接之后修改调用时必填。
    * azCode  数据库所在可用区azCode
    * region  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * instId  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * vpcId  数据库所在的虚拟私有云id
    * subnetId  数据库所在的子网id
    * securityGroupId  数据库所在的安全组id。
    * projectId  RDS实例projectId
    * dbName  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    * dbPassword  数据库密码。
    * dbPort  数据库端口。约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户。
    * instName  RDS实例名称。
    * ip  数据库ip
    * mongoHaMode  mongo ha模式。
    * safeMode  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertKey  SSL证书内容，用base64加密
    * sslCertName  SSL证书名字
    * sslLink  是否SSL安全连接。
    * topic  kafka topic名称
    * clusterMode  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbType' => 'string',
            'azCode' => 'string',
            'region' => 'string',
            'instId' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'projectId' => 'string',
            'dbName' => 'string',
            'dbPassword' => 'string',
            'dbPort' => 'int',
            'dbUser' => 'string',
            'instName' => 'string',
            'ip' => 'string',
            'mongoHaMode' => 'string',
            'safeMode' => 'int',
            'sslCertPassword' => 'string',
            'sslCertCheckSum' => 'string',
            'sslCertKey' => 'string',
            'sslCertName' => 'string',
            'sslLink' => 'bool',
            'topic' => 'string',
            'clusterMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  数据库类型，测试连接之后修改调用时必填。
    * azCode  数据库所在可用区azCode
    * region  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * instId  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * vpcId  数据库所在的虚拟私有云id
    * subnetId  数据库所在的子网id
    * securityGroupId  数据库所在的安全组id。
    * projectId  RDS实例projectId
    * dbName  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    * dbPassword  数据库密码。
    * dbPort  数据库端口。约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户。
    * instName  RDS实例名称。
    * ip  数据库ip
    * mongoHaMode  mongo ha模式。
    * safeMode  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertKey  SSL证书内容，用base64加密
    * sslCertName  SSL证书名字
    * sslLink  是否SSL安全连接。
    * topic  kafka topic名称
    * clusterMode  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbType' => null,
        'azCode' => null,
        'region' => null,
        'instId' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'projectId' => null,
        'dbName' => null,
        'dbPassword' => null,
        'dbPort' => 'int32',
        'dbUser' => null,
        'instName' => null,
        'ip' => null,
        'mongoHaMode' => null,
        'safeMode' => 'int32',
        'sslCertPassword' => null,
        'sslCertCheckSum' => null,
        'sslCertKey' => null,
        'sslCertName' => null,
        'sslLink' => null,
        'topic' => null,
        'clusterMode' => null
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
    * dbType  数据库类型，测试连接之后修改调用时必填。
    * azCode  数据库所在可用区azCode
    * region  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * instId  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * vpcId  数据库所在的虚拟私有云id
    * subnetId  数据库所在的子网id
    * securityGroupId  数据库所在的安全组id。
    * projectId  RDS实例projectId
    * dbName  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    * dbPassword  数据库密码。
    * dbPort  数据库端口。约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户。
    * instName  RDS实例名称。
    * ip  数据库ip
    * mongoHaMode  mongo ha模式。
    * safeMode  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertKey  SSL证书内容，用base64加密
    * sslCertName  SSL证书名字
    * sslLink  是否SSL安全连接。
    * topic  kafka topic名称
    * clusterMode  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbType' => 'db_type',
            'azCode' => 'az_code',
            'region' => 'region',
            'instId' => 'inst_id',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'projectId' => 'project_id',
            'dbName' => 'db_name',
            'dbPassword' => 'db_password',
            'dbPort' => 'db_port',
            'dbUser' => 'db_user',
            'instName' => 'inst_name',
            'ip' => 'ip',
            'mongoHaMode' => 'mongo_ha_mode',
            'safeMode' => 'safe_mode',
            'sslCertPassword' => 'ssl_cert_password',
            'sslCertCheckSum' => 'ssl_cert_check_sum',
            'sslCertKey' => 'ssl_cert_key',
            'sslCertName' => 'ssl_cert_name',
            'sslLink' => 'ssl_link',
            'topic' => 'topic',
            'clusterMode' => 'cluster_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  数据库类型，测试连接之后修改调用时必填。
    * azCode  数据库所在可用区azCode
    * region  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * instId  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * vpcId  数据库所在的虚拟私有云id
    * subnetId  数据库所在的子网id
    * securityGroupId  数据库所在的安全组id。
    * projectId  RDS实例projectId
    * dbName  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    * dbPassword  数据库密码。
    * dbPort  数据库端口。约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户。
    * instName  RDS实例名称。
    * ip  数据库ip
    * mongoHaMode  mongo ha模式。
    * safeMode  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertKey  SSL证书内容，用base64加密
    * sslCertName  SSL证书名字
    * sslLink  是否SSL安全连接。
    * topic  kafka topic名称
    * clusterMode  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbType' => 'setDbType',
            'azCode' => 'setAzCode',
            'region' => 'setRegion',
            'instId' => 'setInstId',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'projectId' => 'setProjectId',
            'dbName' => 'setDbName',
            'dbPassword' => 'setDbPassword',
            'dbPort' => 'setDbPort',
            'dbUser' => 'setDbUser',
            'instName' => 'setInstName',
            'ip' => 'setIp',
            'mongoHaMode' => 'setMongoHaMode',
            'safeMode' => 'setSafeMode',
            'sslCertPassword' => 'setSslCertPassword',
            'sslCertCheckSum' => 'setSslCertCheckSum',
            'sslCertKey' => 'setSslCertKey',
            'sslCertName' => 'setSslCertName',
            'sslLink' => 'setSslLink',
            'topic' => 'setTopic',
            'clusterMode' => 'setClusterMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  数据库类型，测试连接之后修改调用时必填。
    * azCode  数据库所在可用区azCode
    * region  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * instId  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    * vpcId  数据库所在的虚拟私有云id
    * subnetId  数据库所在的子网id
    * securityGroupId  数据库所在的安全组id。
    * projectId  RDS实例projectId
    * dbName  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    * dbPassword  数据库密码。
    * dbPort  数据库端口。约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户。
    * instName  RDS实例名称。
    * ip  数据库ip
    * mongoHaMode  mongo ha模式。
    * safeMode  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertKey  SSL证书内容，用base64加密
    * sslCertName  SSL证书名字
    * sslLink  是否SSL安全连接。
    * topic  kafka topic名称
    * clusterMode  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbType' => 'getDbType',
            'azCode' => 'getAzCode',
            'region' => 'getRegion',
            'instId' => 'getInstId',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'projectId' => 'getProjectId',
            'dbName' => 'getDbName',
            'dbPassword' => 'getDbPassword',
            'dbPort' => 'getDbPort',
            'dbUser' => 'getDbUser',
            'instName' => 'getInstName',
            'ip' => 'getIp',
            'mongoHaMode' => 'getMongoHaMode',
            'safeMode' => 'getSafeMode',
            'sslCertPassword' => 'getSslCertPassword',
            'sslCertCheckSum' => 'getSslCertCheckSum',
            'sslCertKey' => 'getSslCertKey',
            'sslCertName' => 'getSslCertName',
            'sslLink' => 'getSslLink',
            'topic' => 'getTopic',
            'clusterMode' => 'getClusterMode'
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
    const DB_TYPE_MYSQL = 'mysql';
    const DB_TYPE_MONGODB = 'mongodb';
    const DB_TYPE_GAUSSDBV5 = 'gaussdbv5';
    const DB_TYPE_POSTGRESQL = 'postgresql';
    const DB_TYPE_KAFKA = 'kafka';
    const DB_TYPE_GAUSSDBV5HA = 'gaussdbv5ha';
    const DB_TYPE_TAURUS = 'taurus';
    const CLUSTER_MODE_SHARDING4_0 = 'Sharding4.0+';
    

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
    public function getClusterModeAllowableValues()
    {
        return [
            self::CLUSTER_MODE_SHARDING4_0,
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
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['instId'] = isset($data['instId']) ? $data['instId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['instName'] = isset($data['instName']) ? $data['instName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['mongoHaMode'] = isset($data['mongoHaMode']) ? $data['mongoHaMode'] : null;
        $this->container['safeMode'] = isset($data['safeMode']) ? $data['safeMode'] : null;
        $this->container['sslCertPassword'] = isset($data['sslCertPassword']) ? $data['sslCertPassword'] : null;
        $this->container['sslCertCheckSum'] = isset($data['sslCertCheckSum']) ? $data['sslCertCheckSum'] : null;
        $this->container['sslCertKey'] = isset($data['sslCertKey']) ? $data['sslCertKey'] : null;
        $this->container['sslCertName'] = isset($data['sslCertName']) ? $data['sslCertName'] : null;
        $this->container['sslLink'] = isset($data['sslLink']) ? $data['sslLink'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getClusterModeAllowableValues();
                if (!is_null($this->container['clusterMode']) && !in_array($this->container['clusterMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterMode', must be one of '%s'",
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
    * Gets dbType
    *  数据库类型，测试连接之后修改调用时必填。
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据库类型，测试连接之后修改调用时必填。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets azCode
    *  数据库所在可用区azCode
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 数据库所在可用区azCode
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets region
    *  RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
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
    * @param string|null $region RDS实例所在Region，数据库为RDS实例时必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets instId
    *  RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
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
    * @param string|null $instId RDS实例ID，数据库为RDS实例必填（灾备场景下job_direction为down时source_endpoint中该值为必填，job_direction为up时target_endpoint中该值为必填）。
    *
    * @return $this
    */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;
        return $this;
    }

    /**
    * Gets vpcId
    *  数据库所在的虚拟私有云id
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
    * @param string|null $vpcId 数据库所在的虚拟私有云id
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
    *  数据库所在的子网id
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
    * @param string|null $subnetId 数据库所在的子网id
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  数据库所在的安全组id。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 数据库所在的安全组id。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets projectId
    *  RDS实例projectId
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
    * @param string|null $projectId RDS实例projectId
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
    *  服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
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
    * @param string|null $dbName 服务名serviceName，源库为oracle场景时必填。约束：不能超过128位，不能包含!<>&'\"\\特殊字符。待还原数据库名称是指备份文件中包含的数据库名称，当您选择部分数据库恢复时，需要选择恢复一个或者多个数据库。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbPassword
    *  数据库密码。
    *
    * @return string|null
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string|null $dbPassword 数据库密码。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口。约束：输入范围为1-65535之间的整数。
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
    * @param int|null $dbPort 数据库端口。约束：输入范围为1-65535之间的整数。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户。
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 数据库用户。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets instName
    *  RDS实例名称。
    *
    * @return string|null
    */
    public function getInstName()
    {
        return $this->container['instName'];
    }

    /**
    * Sets instName
    *
    * @param string|null $instName RDS实例名称。
    *
    * @return $this
    */
    public function setInstName($instName)
    {
        $this->container['instName'] = $instName;
        return $this;
    }

    /**
    * Gets ip
    *  数据库ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 数据库ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets mongoHaMode
    *  mongo ha模式。
    *
    * @return string|null
    */
    public function getMongoHaMode()
    {
        return $this->container['mongoHaMode'];
    }

    /**
    * Sets mongoHaMode
    *
    * @param string|null $mongoHaMode mongo ha模式。
    *
    * @return $this
    */
    public function setMongoHaMode($mongoHaMode)
    {
        $this->container['mongoHaMode'] = $mongoHaMode;
        return $this;
    }

    /**
    * Gets safeMode
    *  MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    *
    * @return int|null
    */
    public function getSafeMode()
    {
        return $this->container['safeMode'];
    }

    /**
    * Sets safeMode
    *
    * @param int|null $safeMode MRS集群运行模式，取值： - 0普通集群 - 1安全集群
    *
    * @return $this
    */
    public function setSafeMode($safeMode)
    {
        $this->container['safeMode'] = $safeMode;
        return $this;
    }

    /**
    * Gets sslCertPassword
    *  SSL证书密码，证书文件后缀为.p12
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
    * @param string|null $sslCertPassword SSL证书密码，证书文件后缀为.p12
    *
    * @return $this
    */
    public function setSslCertPassword($sslCertPassword)
    {
        $this->container['sslCertPassword'] = $sslCertPassword;
        return $this;
    }

    /**
    * Gets sslCertCheckSum
    *  SSL证书内容checksum值，后端校验，源库安全连接必选。
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
    * @param string|null $sslCertCheckSum SSL证书内容checksum值，后端校验，源库安全连接必选。
    *
    * @return $this
    */
    public function setSslCertCheckSum($sslCertCheckSum)
    {
        $this->container['sslCertCheckSum'] = $sslCertCheckSum;
        return $this;
    }

    /**
    * Gets sslCertKey
    *  SSL证书内容，用base64加密
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
    * @param string|null $sslCertKey SSL证书内容，用base64加密
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
    *  SSL证书名字
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
    * @param string|null $sslCertName SSL证书名字
    *
    * @return $this
    */
    public function setSslCertName($sslCertName)
    {
        $this->container['sslCertName'] = $sslCertName;
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
    * Gets topic
    *  kafka topic名称
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic kafka topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets clusterMode
    *  MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode MongDB集群4.0及以上版本，当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写，值为：Sharding4.0+。
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
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

