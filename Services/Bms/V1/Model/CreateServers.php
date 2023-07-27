<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageRef  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * flavorRef  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    * name  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    * metadata  metadata
    * userData  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    * adminPass  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * keyName  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    * securityGroups  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    * nics  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    * availabilityZone  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    * vpcid  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    * publicip  publicip
    * count  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    * rootVolume  rootVolume
    * dataVolumes  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    * extendparam  extendparam
    * schedulerHints  schedulerHints
    * serverTags  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageRef' => 'string',
            'flavorRef' => 'string',
            'name' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Bms\V1\Model\MetaDataInfo',
            'userData' => 'string',
            'adminPass' => 'string',
            'keyName' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsInfo[]',
            'nics' => '\HuaweiCloud\SDK\Bms\V1\Model\Nics[]',
            'availabilityZone' => 'string',
            'vpcid' => 'string',
            'publicip' => '\HuaweiCloud\SDK\Bms\V1\Model\PublicIp',
            'count' => 'int',
            'rootVolume' => '\HuaweiCloud\SDK\Bms\V1\Model\RootVolume',
            'dataVolumes' => '\HuaweiCloud\SDK\Bms\V1\Model\DataVolumes[]',
            'extendparam' => '\HuaweiCloud\SDK\Bms\V1\Model\ExtendParam',
            'schedulerHints' => '\HuaweiCloud\SDK\Bms\V1\Model\CreateSchedulerHints',
            'serverTags' => '\HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageRef  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * flavorRef  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    * name  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    * metadata  metadata
    * userData  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    * adminPass  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * keyName  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    * securityGroups  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    * nics  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    * availabilityZone  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    * vpcid  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    * publicip  publicip
    * count  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    * rootVolume  rootVolume
    * dataVolumes  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    * extendparam  extendparam
    * schedulerHints  schedulerHints
    * serverTags  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageRef' => 'uuid',
        'flavorRef' => null,
        'name' => null,
        'metadata' => null,
        'userData' => null,
        'adminPass' => 'password',
        'keyName' => null,
        'securityGroups' => null,
        'nics' => null,
        'availabilityZone' => null,
        'vpcid' => 'uuid',
        'publicip' => null,
        'count' => 'int32',
        'rootVolume' => null,
        'dataVolumes' => null,
        'extendparam' => null,
        'schedulerHints' => null,
        'serverTags' => null
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
    * imageRef  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * flavorRef  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    * name  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    * metadata  metadata
    * userData  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    * adminPass  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * keyName  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    * securityGroups  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    * nics  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    * availabilityZone  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    * vpcid  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    * publicip  publicip
    * count  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    * rootVolume  rootVolume
    * dataVolumes  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    * extendparam  extendparam
    * schedulerHints  schedulerHints
    * serverTags  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageRef' => 'imageRef',
            'flavorRef' => 'flavorRef',
            'name' => 'name',
            'metadata' => 'metadata',
            'userData' => 'user_data',
            'adminPass' => 'adminPass',
            'keyName' => 'key_name',
            'securityGroups' => 'security_groups',
            'nics' => 'nics',
            'availabilityZone' => 'availability_zone',
            'vpcid' => 'vpcid',
            'publicip' => 'publicip',
            'count' => 'count',
            'rootVolume' => 'root_volume',
            'dataVolumes' => 'data_volumes',
            'extendparam' => 'extendparam',
            'schedulerHints' => 'schedulerHints',
            'serverTags' => 'server_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageRef  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * flavorRef  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    * name  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    * metadata  metadata
    * userData  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    * adminPass  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * keyName  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    * securityGroups  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    * nics  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    * availabilityZone  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    * vpcid  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    * publicip  publicip
    * count  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    * rootVolume  rootVolume
    * dataVolumes  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    * extendparam  extendparam
    * schedulerHints  schedulerHints
    * serverTags  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageRef' => 'setImageRef',
            'flavorRef' => 'setFlavorRef',
            'name' => 'setName',
            'metadata' => 'setMetadata',
            'userData' => 'setUserData',
            'adminPass' => 'setAdminPass',
            'keyName' => 'setKeyName',
            'securityGroups' => 'setSecurityGroups',
            'nics' => 'setNics',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcid' => 'setVpcid',
            'publicip' => 'setPublicip',
            'count' => 'setCount',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'extendparam' => 'setExtendparam',
            'schedulerHints' => 'setSchedulerHints',
            'serverTags' => 'setServerTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageRef  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * flavorRef  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    * name  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    * metadata  metadata
    * userData  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    * adminPass  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * keyName  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    * securityGroups  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    * nics  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    * availabilityZone  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    * vpcid  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    * publicip  publicip
    * count  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    * rootVolume  rootVolume
    * dataVolumes  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    * extendparam  extendparam
    * schedulerHints  schedulerHints
    * serverTags  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageRef' => 'getImageRef',
            'flavorRef' => 'getFlavorRef',
            'name' => 'getName',
            'metadata' => 'getMetadata',
            'userData' => 'getUserData',
            'adminPass' => 'getAdminPass',
            'keyName' => 'getKeyName',
            'securityGroups' => 'getSecurityGroups',
            'nics' => 'getNics',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcid' => 'getVpcid',
            'publicip' => 'getPublicip',
            'count' => 'getCount',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
            'extendparam' => 'getExtendparam',
            'schedulerHints' => 'getSchedulerHints',
            'serverTags' => 'getServerTags'
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
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcid'] = isset($data['vpcid']) ? $data['vpcid'] : null;
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : 1;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['extendparam'] = isset($data['extendparam']) ? $data['extendparam'] : null;
        $this->container['schedulerHints'] = isset($data['schedulerHints']) ? $data['schedulerHints'] : null;
        $this->container['serverTags'] = isset($data['serverTags']) ? $data['serverTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageRef'] === null) {
            $invalidProperties[] = "'imageRef' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/[\\\\u4e00-\\\\u9fa5a-zA-Z0-9-_\\\\.]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\\\u4e00-\\\\u9fa5a-zA-Z0-9-_\\\\.]+$/.";
            }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
            if (!is_null($this->container['adminPass']) && !preg_match("/[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/", $this->container['adminPass'])) {
                $invalidProperties[] = "invalid value for 'adminPass', must be conform to the pattern /[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/.";
            }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vpcid'] === null) {
            $invalidProperties[] = "'vpcid' can't be null";
        }
        if ($this->container['extendparam'] === null) {
            $invalidProperties[] = "'extendparam' can't be null";
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
    * Gets imageRef
    *  裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    *
    * @return string
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string $imageRef 裸金属服务器使用的镜像ID或者镜像资源的URL。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    *
    * @return $this
    */
    public function setImageRef($imageRef)
    {
        $this->container['imageRef'] = $imageRef;
        return $this;
    }

    /**
    * Gets flavorRef
    *  裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
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
    * @param string $flavorRef 裸金属服务器使用的规格ID，格式为physical.x.x。规格ID可以从裸金属服务器控制台获取，也可以通过查询规格详情和规格扩展信息列表API查询。 说明：裸金属服务器规格与镜像间的约束关系请参见裸金属服务器类型与支持的操作系统版本。对于physical.x.x.hba类型的规格，申请的租户只能是DeC租户，且只能挂载DESS卷。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets name
    *  裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
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
    * @param string $name 裸金属服务器名称。取值范围：只能由中文字符、英文字母（a~z，A~Z）、数字（0~9）、下划线（_）、中划线（-）、点（.）组成，且长度为[1-63]个字符。创建的裸金属服务器数量大于1时，为区分不同裸金属服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-58]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\MetaDataInfo
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\MetaDataInfo $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets userData
    *  创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 创建裸金属服务器过程中待注入的用户数据。支持注入文本、文本文件或gzip文件。约束：注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。当key_name没有指定时，user_data注入的数据默认为裸金属服务器root帐户的登录密码。创建密码方式鉴权的Linux裸金属服务器时为必填项，为root用户注入自定义初始化密码。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。示例：使用明文密码（存在安全风险），以密码cloud.1234为例：#!/bin/bash echo 'root:Cloud.1234' | chpasswd ;使用密码：#!/bin/bash echo 'root:$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig' | chpasswd -e其中，$6$V6azyeLwcD3CHlpY$BN3VVq18fmCkj66B4zdHLWevqcxlig为密文密码
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets adminPass
    *  如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass 如果需要使用密码方式登录裸金属服务器，可使用adminPass字段指定裸金属服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。Linux系统密码不能包含用户名或用户名的逆序。Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets keyName
    *  扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 扩展属性，指定密钥的名称。如果需要使用SSH密钥方式登录裸金属服务器，请指定已有密钥的名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。约束：当key_name和user_data同时指定时，user_data只能用做用户数据注入。Windows裸金属服务器登录时，首先需要将密钥解析为密码，然后通过远程登录工具进行登录。具体请参见“MSTSC密码方式登录”“MSTSC密码方式登录”。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets securityGroups
    *  指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsInfo[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsInfo[]|null $securityGroups 指定裸金属服务器的安全组。详情请参见表 security_groups字段数据结构说明。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets nics
    *  指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Nics[] $nics 指定裸金属服务器的网卡信息。详情请参见表 nics字段数据结构说明。约束：一个裸金属服务器最多挂载2个网卡，参数中第一个网卡会作为裸金属服务器的主网卡。若用户指定了多组网卡参数，需保证各组参数都属于同一VPC。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
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
    * @param string $availabilityZone 裸金属服务器对应可用区信息，需要指定可用区（AZ）的名称。请参考地区和终端节点获取。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcid
    *  创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    *
    * @return string
    */
    public function getVpcid()
    {
        return $this->container['vpcid'];
    }

    /**
    * Sets vpcid
    *
    * @param string $vpcid 创建裸金属服务器所属虚拟私有云（VPC），需要指定已有VPC的ID，UUID格式。VPC的ID可以从网络控制台或者参考《虚拟私有云API参考》的“查询VPC”。
    *
    * @return $this
    */
    public function setVpcid($vpcid)
    {
        $this->container['vpcid'] = $vpcid;
        return $this;
    }

    /**
    * Gets publicip
    *  publicip
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\PublicIp|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\PublicIp|null $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets count
    *  创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
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
    * @param int|null $count 创建裸金属服务器的数量。约束：不传该字段时默认取值为1。租户的配额足够时，最大值为100。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\RootVolume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\RootVolume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\DataVolumes[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\DataVolumes[]|null $dataVolumes 裸金属服务器对应数据盘相关配置。每一个数据结构代表一个待创建的数据盘。详情请参见表 data_volumes字段数据结构说明。约束：目前裸金属服务器最多可挂载60块云硬盘（包括系统盘和数据盘）。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets extendparam
    *  extendparam
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ExtendParam
    */
    public function getExtendparam()
    {
        return $this->container['extendparam'];
    }

    /**
    * Sets extendparam
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ExtendParam $extendparam extendparam
    *
    * @return $this
    */
    public function setExtendparam($extendparam)
    {
        $this->container['extendparam'] = $extendparam;
        return $this;
    }

    /**
    * Gets schedulerHints
    *  schedulerHints
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\CreateSchedulerHints|null
    */
    public function getSchedulerHints()
    {
        return $this->container['schedulerHints'];
    }

    /**
    * Sets schedulerHints
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\CreateSchedulerHints|null $schedulerHints schedulerHints
    *
    * @return $this
    */
    public function setSchedulerHints($schedulerHints)
    {
        $this->container['schedulerHints'] = $schedulerHints;
        return $this;
    }

    /**
    * Gets serverTags
    *  裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]|null
    */
    public function getServerTags()
    {
        return $this->container['serverTags'];
    }

    /**
    * Sets serverTags
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]|null $serverTags 裸金属服务器的标签。详情请参见表 server_tags字段数据结构说明。 说明：创建裸金属服务器时，一台裸金属服务器最多可以添加10个标签。其中，__type_baremetal为系统内部标签，因此实际能添加的标签为9个。
    *
    * @return $this
    */
    public function setServerTags($serverTags)
    {
        $this->container['serverTags'] = $serverTags;
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

