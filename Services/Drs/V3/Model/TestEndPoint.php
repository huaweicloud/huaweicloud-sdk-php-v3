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
    * id  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * endPointType  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
    * region  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * id  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * endPointType  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
    * region  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * id  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * endPointType  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
    * region  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * id  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * endPointType  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
    * region  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * id  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * dbType  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
    * ip  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPort  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instId  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUser  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbPassword  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslLink  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
    * sslCertKey  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertName  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertCheckSum  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sslCertPassword  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * endPointType  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
    * region  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * projectId  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbName  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string $id **参数解释**：  DRS任务ID，用于唯一标识一个数据复制任务，可从任务列表或任务详情页面获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
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
    * @param string $netType **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
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
    * @param string $dbType **参数解释**：  数据库类型，标识源库或目标库的数据库引擎种类。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL - mongodb：MongoDB - gaussdbv5：GaussDB分布式版 - postgresql：PostgreSQL - kafka：Kafka - gaussdbv5ha：GaussDB集中式版 - taurus：TaurusDB  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string $ip **参数解释**：  数据库IP地址，用于指定连接数据库的服务器地址。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $dbPort **参数解释**：  数据库端口号，用于指定连接数据库的服务端口。  **约束限制**：  - db_type为MongoDB、DDS时端口必填取值为0。 - db_type为Oracle时为必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $instId **参数解释**：  RDS实例ID，用于标识华为云RDS数据库实例。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string $dbUser **参数解释**：  数据库帐号，用于连接数据库的用户名。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string $dbPassword **参数解释**：  数据库密码，用于连接数据库的认证密码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
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
    * @param bool|null $sslLink **参数解释**：  是否使用SSL安全连接，指定数据库连接是否启用SSL加密传输。  **约束限制**：  - 该参数为true时，需填写SSL证书相关信息参数。  **取值范围**：  - true：使用SSL安全连接 - false：不使用SSL安全连接  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertKey **参数解释**：  SSL证书内容，获取SSL证书后将内容通过BASE64加密后所得的字符串。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertName **参数解释**：  SSL证书名字。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertCheckSum **参数解释**：  SSL证书内容checksum值，获取SSL证书后将内容经过SHA256加密后的值，后端校验用。  **约束限制**：  - ssl_link为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $sslCertPassword **参数解释**：  SSL证书密码。  **约束限制**：  - 证书文件后缀为.p12时需要填写密码。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $vpcId **参数解释**：  虚拟私有云ID，用于标识数据库所在的VPC。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $subnetId **参数解释**：  子网ID，用于标识数据库所在的子网。  **约束限制**：  - 网络类型为VPC时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
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
    * @param string $endPointType **参数解释**：  数据库端点类型，标识该数据库在数据复制任务中是源端还是目标端。  **约束限制**：  不涉及。  **取值范围**：  - so：源库 - ta：目标库  **默认取值**：  so
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
    *  **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $region **参数解释**：  RDS实例所在区域，用于标识数据库实例的地理区域。  **约束限制**：  - 数据库为RDS实例时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $projectId **参数解释**：  数据库实例所在Region的项目ID，数据库为云上实例时填写数据库实例所在Region下的项目ID，否则填写当前任务所在Region下的项目ID。获取方法请参见获取项目ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $dbName **参数解释**：  数据库名称，Oracle场景下为serviceName。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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

