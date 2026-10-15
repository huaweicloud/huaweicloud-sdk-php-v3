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
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * azCode  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * region  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instName  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * mongoHaMode  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * safeMode  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * topic  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    * kafkaSecurityConfig  kafkaSecurityConfig
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
            'clusterMode' => 'string',
            'kafkaSecurityConfig' => '\HuaweiCloud\SDK\Drs\V3\Model\KafkaSecurity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * azCode  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * region  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instName  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * mongoHaMode  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * safeMode  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * topic  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    * kafkaSecurityConfig  kafkaSecurityConfig
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
        'clusterMode' => null,
        'kafkaSecurityConfig' => null
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
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * azCode  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * region  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instName  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * mongoHaMode  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * safeMode  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * topic  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    * kafkaSecurityConfig  kafkaSecurityConfig
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
            'clusterMode' => 'cluster_mode',
            'kafkaSecurityConfig' => 'kafka_security_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * azCode  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * region  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instName  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * mongoHaMode  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * safeMode  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * topic  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    * kafkaSecurityConfig  kafkaSecurityConfig
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
            'clusterMode' => 'setClusterMode',
            'kafkaSecurityConfig' => 'setKafkaSecurityConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * azCode  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * region  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instName  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * mongoHaMode  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * safeMode  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * topic  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    * kafkaSecurityConfig  kafkaSecurityConfig
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
            'clusterMode' => 'getClusterMode',
            'kafkaSecurityConfig' => 'getKafkaSecurityConfig'
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
        $this->container['kafkaSecurityConfig'] = isset($data['kafkaSecurityConfig']) ? $data['kafkaSecurityConfig'] : null;
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
    *  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
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
    * @param string|null $dbType **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  测试连接之后修改调用时必填。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $azCode **参数解释**：  数据库所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $region **参数解释**：  数据库实例所在区域。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $instId **参数解释**：  数据库实例ID，用于标识华为云RDS数据库实例。数据库为云上实例时，比如RDS实例时必填。  **约束限制**：  - 灾备场景下job_direction为down时source_endpoint中该值为必填。 - 灾备场景下job_direction为up时target_endpoint中该值为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $vpcId **参数解释**：  数据库所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $subnetId **参数解释**：  数据库所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $securityGroupId **参数解释**：  数据库所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $projectId **参数解释**：  数据库实例所在Region下的项目ID。如果数据库为云上实例时，填写数据库实例所在Region下的Project ID；否则，填写当前任务所在Region下的Project ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $dbName **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  - 不能超过128位。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $dbPassword **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  除不需要密码的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $dbPort **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  输入范围为1-65535之间的整数。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $dbUser **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  除不需要用户名的引擎，其他引擎测试连接之后修改调用时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $instName **参数解释**：  RDS实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $ip **参数解释**：  数据库IP地址。测试连接之后修改调用时必填。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $mongoHaMode **参数解释**：  MongoDB高可用模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
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
    * @param int|null $safeMode **参数解释**：  MRS集群运行模式。  **约束限制**：  不涉及。  **取值范围**：  - 0：普通集群 - 1：安全集群  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertPassword **参数解释**：  SSL证书密码，证书文件后缀为.p12。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertCheckSum **参数解释**：  SSL证书内容checksum值，后端校验，源库安全连接必选。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertKey **参数解释**：  SSL证书内容，用base64加密。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertName **参数解释**：  SSL证书名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
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
    * @param bool|null $sslLink **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  不涉及。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
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
    *  **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $topic **参数解释**：  Kafka Topic名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
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
    * @param string|null $clusterMode **参数解释**：  MongoDB集群模式。当集群实例无法获取到分片节点的IP时，source_endpoint中需要填写。  **约束限制**：  不涉及。  **取值范围**：  - Sharding4.0+：MongoDB集群4.0及以上版本  **默认取值**：  Sharding4.0+
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
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

