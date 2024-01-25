<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * ha  ha
    * configurationId  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * password  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    * diskEncryptionId  用于磁盘加密的密钥ID，默认为空。
    * flavorRef  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    * volume  volume
    * region  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * availabilityZone  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * dataVip  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    * securityGroupId  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    * chargeInfo  chargeInfo
    * timeZone  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    * replicaOfId  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    * restorePoint  restorePoint
    * collation  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    * tags  标签列表。单个实例总标签数上限20个。
    * unchangeableParam  unchangeableParam
    * dryRun  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    * count  批量创建实例的数量，取值范围为1~50。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Rds\V3\Model\Datastore',
            'ha' => '\HuaweiCloud\SDK\Rds\V3\Model\Ha',
            'configurationId' => 'string',
            'port' => 'string',
            'password' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\Rds\V3\Model\BackupStrategy',
            'enterpriseProjectId' => 'string',
            'diskEncryptionId' => 'string',
            'flavorRef' => 'string',
            'volume' => '\HuaweiCloud\SDK\Rds\V3\Model\Volume',
            'region' => 'string',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'dataVip' => 'string',
            'securityGroupId' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo',
            'timeZone' => 'string',
            'dsspoolId' => 'string',
            'replicaOfId' => 'string',
            'restorePoint' => '\HuaweiCloud\SDK\Rds\V3\Model\RestorePoint',
            'collation' => 'string',
            'tags' => '\HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]',
            'unchangeableParam' => '\HuaweiCloud\SDK\Rds\V3\Model\UnchangeableParam',
            'dryRun' => 'bool',
            'count' => 'int',
            'serverlessInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * ha  ha
    * configurationId  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * password  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    * diskEncryptionId  用于磁盘加密的密钥ID，默认为空。
    * flavorRef  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    * volume  volume
    * region  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * availabilityZone  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * dataVip  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    * securityGroupId  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    * chargeInfo  chargeInfo
    * timeZone  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    * replicaOfId  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    * restorePoint  restorePoint
    * collation  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    * tags  标签列表。单个实例总标签数上限20个。
    * unchangeableParam  unchangeableParam
    * dryRun  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    * count  批量创建实例的数量，取值范围为1~50。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'datastore' => null,
        'ha' => null,
        'configurationId' => null,
        'port' => null,
        'password' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'diskEncryptionId' => null,
        'flavorRef' => null,
        'volume' => null,
        'region' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'dataVip' => null,
        'securityGroupId' => null,
        'chargeInfo' => null,
        'timeZone' => null,
        'dsspoolId' => null,
        'replicaOfId' => null,
        'restorePoint' => null,
        'collation' => null,
        'tags' => null,
        'unchangeableParam' => null,
        'dryRun' => null,
        'count' => 'int32',
        'serverlessInfo' => null
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
    * name  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * ha  ha
    * configurationId  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * password  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    * diskEncryptionId  用于磁盘加密的密钥ID，默认为空。
    * flavorRef  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    * volume  volume
    * region  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * availabilityZone  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * dataVip  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    * securityGroupId  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    * chargeInfo  chargeInfo
    * timeZone  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    * replicaOfId  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    * restorePoint  restorePoint
    * collation  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    * tags  标签列表。单个实例总标签数上限20个。
    * unchangeableParam  unchangeableParam
    * dryRun  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    * count  批量创建实例的数量，取值范围为1~50。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'datastore' => 'datastore',
            'ha' => 'ha',
            'configurationId' => 'configuration_id',
            'port' => 'port',
            'password' => 'password',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'diskEncryptionId' => 'disk_encryption_id',
            'flavorRef' => 'flavor_ref',
            'volume' => 'volume',
            'region' => 'region',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'dataVip' => 'data_vip',
            'securityGroupId' => 'security_group_id',
            'chargeInfo' => 'charge_info',
            'timeZone' => 'time_zone',
            'dsspoolId' => 'dsspool_id',
            'replicaOfId' => 'replica_of_id',
            'restorePoint' => 'restore_point',
            'collation' => 'collation',
            'tags' => 'tags',
            'unchangeableParam' => 'unchangeable_param',
            'dryRun' => 'dry_run',
            'count' => 'count',
            'serverlessInfo' => 'serverless_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * ha  ha
    * configurationId  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * password  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    * diskEncryptionId  用于磁盘加密的密钥ID，默认为空。
    * flavorRef  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    * volume  volume
    * region  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * availabilityZone  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * dataVip  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    * securityGroupId  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    * chargeInfo  chargeInfo
    * timeZone  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    * replicaOfId  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    * restorePoint  restorePoint
    * collation  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    * tags  标签列表。单个实例总标签数上限20个。
    * unchangeableParam  unchangeableParam
    * dryRun  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    * count  批量创建实例的数量，取值范围为1~50。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'datastore' => 'setDatastore',
            'ha' => 'setHa',
            'configurationId' => 'setConfigurationId',
            'port' => 'setPort',
            'password' => 'setPassword',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'flavorRef' => 'setFlavorRef',
            'volume' => 'setVolume',
            'region' => 'setRegion',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'dataVip' => 'setDataVip',
            'securityGroupId' => 'setSecurityGroupId',
            'chargeInfo' => 'setChargeInfo',
            'timeZone' => 'setTimeZone',
            'dsspoolId' => 'setDsspoolId',
            'replicaOfId' => 'setReplicaOfId',
            'restorePoint' => 'setRestorePoint',
            'collation' => 'setCollation',
            'tags' => 'setTags',
            'unchangeableParam' => 'setUnchangeableParam',
            'dryRun' => 'setDryRun',
            'count' => 'setCount',
            'serverlessInfo' => 'setServerlessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * ha  ha
    * configurationId  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * password  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    * diskEncryptionId  用于磁盘加密的密钥ID，默认为空。
    * flavorRef  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    * volume  volume
    * region  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * availabilityZone  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * dataVip  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    * securityGroupId  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    * chargeInfo  chargeInfo
    * timeZone  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    * replicaOfId  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    * restorePoint  restorePoint
    * collation  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    * tags  标签列表。单个实例总标签数上限20个。
    * unchangeableParam  unchangeableParam
    * dryRun  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    * count  批量创建实例的数量，取值范围为1~50。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'datastore' => 'getDatastore',
            'ha' => 'getHa',
            'configurationId' => 'getConfigurationId',
            'port' => 'getPort',
            'password' => 'getPassword',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'flavorRef' => 'getFlavorRef',
            'volume' => 'getVolume',
            'region' => 'getRegion',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'dataVip' => 'getDataVip',
            'securityGroupId' => 'getSecurityGroupId',
            'chargeInfo' => 'getChargeInfo',
            'timeZone' => 'getTimeZone',
            'dsspoolId' => 'getDsspoolId',
            'replicaOfId' => 'getReplicaOfId',
            'restorePoint' => 'getRestorePoint',
            'collation' => 'getCollation',
            'tags' => 'getTags',
            'unchangeableParam' => 'getUnchangeableParam',
            'dryRun' => 'getDryRun',
            'count' => 'getCount',
            'serverlessInfo' => 'getServerlessInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['dsspoolId'] = isset($data['dsspoolId']) ? $data['dsspoolId'] : null;
        $this->container['replicaOfId'] = isset($data['replicaOfId']) ? $data['replicaOfId'] : null;
        $this->container['restorePoint'] = isset($data['restorePoint']) ? $data['restorePoint'] : null;
        $this->container['collation'] = isset($data['collation']) ? $data['collation'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['unchangeableParam'] = isset($data['unchangeableParam']) ? $data['unchangeableParam'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['serverlessInfo'] = isset($data['serverlessInfo']) ? $data['serverlessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
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
    * Gets name
    *  实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。 用于表示实例的名称，同一租户下，同类型的实例名可重名。取值范围如下： - MySQL数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中文字符、中划线或者下划线，不能包含其他的特殊字符。 - PostgreSQL和SQL Server数据库支持的字符长度是4~64个字符，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Datastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Datastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Ha|null
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Ha|null $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets configurationId
    *  参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 参数模板ID。可调用[获取参数模板列表](https://support.huaweicloud.com/api-rds/rds_09_0301.html)接口返回的ID获取。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets password
    *  数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
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
    * @param string|null $password 数据库密码。创建只读实例时不可选，其它场景必选。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#%^*-_=+?组成，长度8~32个字符。  其中允许的特殊字符如下： - MySQL数据库允许输入~!@#$%^*-_=+?,特殊字符。 - SQL Server数据库允许输入~!@#$%^*-_+?,特殊字符。 - PostgreSQL数据库允许输入~!@#%^*-_=+?,特殊字符。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\BackupStrategy|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\BackupStrategy|null $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。 使用请参考《企业管理 API参考》的[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  用于磁盘加密的密钥ID，默认为空。
    *
    * @return string|null
    */
    public function getDiskEncryptionId()
    {
        return $this->container['diskEncryptionId'];
    }

    /**
    * Sets diskEncryptionId
    *
    * @param string|null $diskEncryptionId 用于磁盘加密的密钥ID，默认为空。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码,取值范围：非空。 使用[查询数据库规格](https://support.huaweicloud.com/api-rds/rds_06_0002.html)接口响应消息中的 flavors字段中“spec_code”获取且对应az_status为“在售”状态。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Volume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Volume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets region
    *  区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域ID。创建主实例时必选，其它场景不可选。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区ID。对于数据库实例类型不是单机的实例，需要分别为实例所有节点指定可用区，并用逗号隔开。 取值参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
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
    *  子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网的网络ID信息。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets dataVip
    *  指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip 指定实例的内网IP,目前仅支持设置IPv4地址。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询私有IP列表](https://support.huaweicloud.com/api-vpc/vpc_privateip_0003.html),选择“device_owner”为空的私有IP。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID。创建只读实例时不可选（只读实例的网络属性默认和主实例相同），其它场景必选。 获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0003.html)。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。  - 不选择时，各个引擎时区如下：   - MySQL国内站、国际站默认为UTC时间。   - PostgreSQL国内站、国际站默认为UTC时间。   - Microsoft SQL Server国内站默认为China Standard Time，国际站默认为UTC时间。 - MySQL和PostgreSQL引擎选择填写时，取值范围为UTC-12:00~UTC+12:00，且只支持整段时间，如UTC+08:00，不支持UTC+08:30。 - Microsoft SQL Server引擎选择填写时，请参见“创建数据库实例”接口[表10](https://support.huaweicloud.com/api-rds/rds_01_0002.html#rds_01_0002__table613473883617) 时区与UTC偏移量对照表，填写时区列字符串，如：China Standard Time。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets dsspoolId
    *  Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    *
    * @return string|null
    */
    public function getDsspoolId()
    {
        return $this->container['dsspoolId'];
    }

    /**
    * Sets dsspoolId
    *
    * @param string|null $dsspoolId Dec用户专属存储ID，每个az配置的专属存储不同，Dec用户创建实例时，对于数据库实例类型不是单机或只读的实例，需要分别为实例所有节点指定dsspoolId，并用逗号隔开。 获取方法如下： - 方法1：登录专属分布式存储服务DSS的控制台界面，查看专属存储列表，选择符合条件的az下的专属dss的ID。 - 方法2：通过专属分布式存储服务DSS的API接口查询，具体操作可参考[获取专属存储详情列表](https://support.huaweicloud.com/api-dss/dss_02_1002.html)。
    *
    * @return $this
    */
    public function setDsspoolId($dsspoolId)
    {
        $this->container['dsspoolId'] = $dsspoolId;
        return $this;
    }

    /**
    * Gets replicaOfId
    *  只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    *
    * @return string|null
    */
    public function getReplicaOfId()
    {
        return $this->container['replicaOfId'];
    }

    /**
    * Sets replicaOfId
    *
    * @param string|null $replicaOfId 只读实例的主实例ID。创建只读实例时必选，其它场景不可选。
    *
    * @return $this
    */
    public function setReplicaOfId($replicaOfId)
    {
        $this->container['replicaOfId'] = $replicaOfId;
        return $this;
    }

    /**
    * Gets restorePoint
    *  restorePoint
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\RestorePoint|null
    */
    public function getRestorePoint()
    {
        return $this->container['restorePoint'];
    }

    /**
    * Sets restorePoint
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\RestorePoint|null $restorePoint restorePoint
    *
    * @return $this
    */
    public function setRestorePoint($restorePoint)
    {
        $this->container['restorePoint'] = $restorePoint;
        return $this;
    }

    /**
    * Gets collation
    *  仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    *
    * @return string|null
    */
    public function getCollation()
    {
        return $this->container['collation'];
    }

    /**
    * Sets collation
    *
    * @param string|null $collation 仅限Microsoft SQL Server实例创建使用。对于MySQL和PostgreSQL实例，该参数无意义。取值范围：根据查询SQL Server可用字符集的字符集查询列表查询可设置的字符集。 取值范围：根据[查询SQL Server可用字符集](https://support.huaweicloud.com/api-rds/rds_05_0010.html)查询可设置的字符集。
    *
    * @return $this
    */
    public function setCollation($collation)
    {
        $this->container['collation'] = $collation;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。单个实例总标签数上限20个。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]|null $tags 标签列表。单个实例总标签数上限20个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets unchangeableParam
    *  unchangeableParam
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\UnchangeableParam|null
    */
    public function getUnchangeableParam()
    {
        return $this->container['unchangeableParam'];
    }

    /**
    * Sets unchangeableParam
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\UnchangeableParam|null $unchangeableParam unchangeableParam
    *
    * @return $this
    */
    public function setUnchangeableParam($unchangeableParam)
    {
        $this->container['unchangeableParam'] = $unchangeableParam;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 是否只预检此次请求，仅支持MySQL。 - true：发送参数检查请求，不会创建实例。   - 检查通过：返回202状态码。   - 检查不通过：返回对应错误码，详情请参考错误码。 - false：发送正常请求，通过检查后，并且执行创建实例的请求。
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets count
    *  批量创建实例的数量，取值范围为1~50。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 批量创建实例的数量，取值范围为1~50。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets serverlessInfo
    *  serverlessInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfo|null
    */
    public function getServerlessInfo()
    {
        return $this->container['serverlessInfo'];
    }

    /**
    * Sets serverlessInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfo|null $serverlessInfo serverlessInfo
    *
    * @return $this
    */
    public function setServerlessInfo($serverlessInfo)
    {
        $this->container['serverlessInfo'] = $serverlessInfo;
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

