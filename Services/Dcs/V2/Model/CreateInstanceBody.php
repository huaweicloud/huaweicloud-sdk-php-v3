<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * engine  缓存引擎：Redis和Memcached。
    * engineVersion  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    * capacity  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * azCodes  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroupId  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * description  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * privateIp  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    * instanceNum  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    * password  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    * bssParam  bssParam
    * instanceBackupPolicy  instanceBackupPolicy
    * tags  实例标签键值。
    * accessUser  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    * renameCommands  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    * templateId  参数模板ID
    * specParam  specParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'capacity' => 'float',
            'specCode' => 'string',
            'azCodes' => 'string[]',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'publicipId' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'description' => 'string',
            'enableSsl' => 'bool',
            'privateIp' => 'string',
            'instanceNum' => 'int',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'password' => 'string',
            'noPasswordAccess' => 'bool',
            'bssParam' => '\HuaweiCloud\SDK\Dcs\V2\Model\BssParam',
            'instanceBackupPolicy' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy',
            'tags' => '\HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]',
            'accessUser' => 'string',
            'enablePublicip' => 'bool',
            'port' => 'int',
            'renameCommands' => 'object',
            'templateId' => 'string',
            'specParam' => '\HuaweiCloud\SDK\Dcs\V2\Model\SpecParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * engine  缓存引擎：Redis和Memcached。
    * engineVersion  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    * capacity  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * azCodes  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroupId  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * description  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * privateIp  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    * instanceNum  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    * password  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    * bssParam  bssParam
    * instanceBackupPolicy  instanceBackupPolicy
    * tags  实例标签键值。
    * accessUser  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    * renameCommands  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    * templateId  参数模板ID
    * specParam  specParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engine' => null,
        'engineVersion' => null,
        'capacity' => 'float',
        'specCode' => null,
        'azCodes' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'publicipId' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'description' => null,
        'enableSsl' => null,
        'privateIp' => null,
        'instanceNum' => 'int32',
        'maintainBegin' => null,
        'maintainEnd' => null,
        'password' => null,
        'noPasswordAccess' => null,
        'bssParam' => null,
        'instanceBackupPolicy' => null,
        'tags' => null,
        'accessUser' => null,
        'enablePublicip' => null,
        'port' => null,
        'renameCommands' => null,
        'templateId' => null,
        'specParam' => null
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * engine  缓存引擎：Redis和Memcached。
    * engineVersion  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    * capacity  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * azCodes  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroupId  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * description  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * privateIp  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    * instanceNum  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    * password  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    * bssParam  bssParam
    * instanceBackupPolicy  instanceBackupPolicy
    * tags  实例标签键值。
    * accessUser  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    * renameCommands  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    * templateId  参数模板ID
    * specParam  specParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'capacity' => 'capacity',
            'specCode' => 'spec_code',
            'azCodes' => 'az_codes',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'publicipId' => 'publicip_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'description' => 'description',
            'enableSsl' => 'enable_ssl',
            'privateIp' => 'private_ip',
            'instanceNum' => 'instance_num',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'password' => 'password',
            'noPasswordAccess' => 'no_password_access',
            'bssParam' => 'bss_param',
            'instanceBackupPolicy' => 'instance_backup_policy',
            'tags' => 'tags',
            'accessUser' => 'access_user',
            'enablePublicip' => 'enable_publicip',
            'port' => 'port',
            'renameCommands' => 'rename_commands',
            'templateId' => 'template_id',
            'specParam' => 'spec_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * engine  缓存引擎：Redis和Memcached。
    * engineVersion  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    * capacity  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * azCodes  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroupId  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * description  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * privateIp  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    * instanceNum  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    * password  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    * bssParam  bssParam
    * instanceBackupPolicy  instanceBackupPolicy
    * tags  实例标签键值。
    * accessUser  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    * renameCommands  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    * templateId  参数模板ID
    * specParam  specParam
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'capacity' => 'setCapacity',
            'specCode' => 'setSpecCode',
            'azCodes' => 'setAzCodes',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'publicipId' => 'setPublicipId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'description' => 'setDescription',
            'enableSsl' => 'setEnableSsl',
            'privateIp' => 'setPrivateIp',
            'instanceNum' => 'setInstanceNum',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'password' => 'setPassword',
            'noPasswordAccess' => 'setNoPasswordAccess',
            'bssParam' => 'setBssParam',
            'instanceBackupPolicy' => 'setInstanceBackupPolicy',
            'tags' => 'setTags',
            'accessUser' => 'setAccessUser',
            'enablePublicip' => 'setEnablePublicip',
            'port' => 'setPort',
            'renameCommands' => 'setRenameCommands',
            'templateId' => 'setTemplateId',
            'specParam' => 'setSpecParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * engine  缓存引擎：Redis和Memcached。
    * engineVersion  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    * capacity  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * azCodes  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroupId  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * description  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * privateIp  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    * instanceNum  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    * password  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    * bssParam  bssParam
    * instanceBackupPolicy  instanceBackupPolicy
    * tags  实例标签键值。
    * accessUser  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    * renameCommands  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    * templateId  参数模板ID
    * specParam  specParam
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'capacity' => 'getCapacity',
            'specCode' => 'getSpecCode',
            'azCodes' => 'getAzCodes',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'publicipId' => 'getPublicipId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'description' => 'getDescription',
            'enableSsl' => 'getEnableSsl',
            'privateIp' => 'getPrivateIp',
            'instanceNum' => 'getInstanceNum',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'password' => 'getPassword',
            'noPasswordAccess' => 'getNoPasswordAccess',
            'bssParam' => 'getBssParam',
            'instanceBackupPolicy' => 'getInstanceBackupPolicy',
            'tags' => 'getTags',
            'accessUser' => 'getAccessUser',
            'enablePublicip' => 'getEnablePublicip',
            'port' => 'getPort',
            'renameCommands' => 'getRenameCommands',
            'templateId' => 'getTemplateId',
            'specParam' => 'getSpecParam'
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azCodes'] = isset($data['azCodes']) ? $data['azCodes'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['noPasswordAccess'] = isset($data['noPasswordAccess']) ? $data['noPasswordAccess'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
        $this->container['instanceBackupPolicy'] = isset($data['instanceBackupPolicy']) ? $data['instanceBackupPolicy'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['renameCommands'] = isset($data['renameCommands']) ? $data['renameCommands'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['specParam'] = isset($data['specParam']) ? $data['specParam'] : null;
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
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['azCodes'] === null) {
            $invalidProperties[] = "'azCodes' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    *  实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
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
    * @param string $name 实例名称。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engine
    *  缓存引擎：Redis和Memcached。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 缓存引擎：Redis和Memcached。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 缓存版本。 当缓存引擎为Redis时，取值为4.0及以上。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets capacity
    *  缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @return float
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param float $capacity 缓存容量（G Byte） - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets specCode
    *  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azCodes
    *  创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    *
    * @return string[]
    */
    public function getAzCodes()
    {
        return $this->container['azCodes'];
    }

    /**
    * Sets azCodes
    *
    * @param string[] $azCodes 创建缓存节点到指定且有资源的可用区Code。创建缓存节点到指定且有资源的可用区Code。具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)，在查询时，请注意查看该可用区是否有资源。  如果是创建主备、Proxy集群、Cluster集群实例，支持跨可用区部署，可以为备节点指定备可用区。在为节点指定可用区时，用逗号分隔开，具体请查看示例。
    *
    * @return $this
    */
    public function setAzCodes($azCodes)
    {
        $this->container['azCodes'] = $azCodes;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
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
    * @param string $vpcId 虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询VPC列表](https://support.huaweicloud.com/api-vpc/vpc_api01_0003.html)。
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
    *  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
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
    * @param string $subnetId 子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
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
    *  指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
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
    * @param string|null $securityGroupId 指定实例所属的安全组。  当engine为Redis且engine_version为3.0时，或engine为Memcached时，该参数为必选。Redis3.0和Memcached实例支持安全组访问控制。  当engine为Redis且engine_version为4.0和5.0时，该参数为可选。Redis4.0和Redis5.0版本实例不支持安全组控制访问，只支持白名单控制。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考[查询安全组列表](https://support.huaweicloud.com/api-vpc/vpc_sg01_0002.html)。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets publicipId
    *  Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId Redis缓存实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets description
    *  实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例的描述信息。  长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enableSsl
    *  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets privateIp
    *  创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 创建缓存实例手动指定的IP地址,支持Redis和Memcached。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets instanceNum
    *  表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum 表示批量创建缓存实例时，购买的实例个数。仅Redis和Memcached实例支持批量创建。  默认值：1  取值范围：1-100
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin 维护时间窗开始时间，为UTC时间，格式为HH:mm:ss - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd 维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。 - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00:00。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets password
    *  缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
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
    * @param string|null $password 缓存实例的认证信息 > 当“no_password_access”配置为“false”或未配置时，请求消息中须包含password参数。 Redis类型的缓存实例密码复杂度要求： - 输入长度为8到32位的字符串。 - 新密码不能与旧密码相同。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$^&*()-_=+\\|{}:'\",<.>/?）
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets noPasswordAccess
    *  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    *
    * @return bool|null
    */
    public function getNoPasswordAccess()
    {
        return $this->container['noPasswordAccess'];
    }

    /**
    * Sets noPasswordAccess
    *
    * @param bool|null $noPasswordAccess 是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。 若未配置该参数则默认值为“false”。
    *
    * @return $this
    */
    public function setNoPasswordAccess($noPasswordAccess)
    {
        $this->container['noPasswordAccess'] = $noPasswordAccess;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BssParam|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BssParam|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
        return $this;
    }

    /**
    * Gets instanceBackupPolicy
    *  instanceBackupPolicy
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null
    */
    public function getInstanceBackupPolicy()
    {
        return $this->container['instanceBackupPolicy'];
    }

    /**
    * Sets instanceBackupPolicy
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null $instanceBackupPolicy instanceBackupPolicy
    *
    * @return $this
    */
    public function setInstanceBackupPolicy($instanceBackupPolicy)
    {
        $this->container['instanceBackupPolicy'] = $instanceBackupPolicy;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签键值。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null $tags 实例标签键值。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets accessUser
    *  当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    *
    * @return string|null
    */
    public function getAccessUser()
    {
        return $this->container['accessUser'];
    }

    /**
    * Sets accessUser
    *
    * @param string|null $accessUser 当缓存类型为Redis时，则不需要设置，保持为空即可。  当缓存引擎为Memcached，且“no_password_access”为“false”时才需要设置，表示通过密码认证访问缓存实例的认证用户名。  由英文字符开头，只能由英文字母、数字、中划线和下划线组成，长度为1~64的字符。 >   - 当缓存引擎为Memcached时，该参数为可选项。   - 当缓存引擎为Redis时，该参数不需要设置。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnablePublicip()
    {
        return $this->container['enablePublicip'];
    }

    /**
    * Sets enablePublicip
    *
    * @param bool|null $enablePublicip Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets port
    *  实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 实例自定义端口。只有创建Redis4.0和Redis5.0实例才支持自定义端口，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示实例使用默认端口6379。如果自定义端口，端口范围为1~65535的任意数字。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets renameCommands
    *  支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    *
    * @return object|null
    */
    public function getRenameCommands()
    {
        return $this->container['renameCommands'];
    }

    /**
    * Sets renameCommands
    *
    * @param object|null $renameCommands 支持自定义重命名高危命令。只有创建Redis4.0和Redis5.0实例才支持重命名高危命令，Redis3.0和Memcached实例不支持。  创建Redis4.0和Redis5.0实例，如果没发送该参数或该参数为空，表示没有需要重命名的命令。当前支持重命名的高危命令有command、keys、flushdb、flushall和hgetall，其他命令暂不支持重命名。
    *
    * @return $this
    */
    public function setRenameCommands($renameCommands)
    {
        $this->container['renameCommands'] = $renameCommands;
        return $this;
    }

    /**
    * Gets templateId
    *  参数模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 参数模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets specParam
    *  specParam
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\SpecParam|null
    */
    public function getSpecParam()
    {
        return $this->container['specParam'];
    }

    /**
    * Sets specParam
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\SpecParam|null $specParam specParam
    *
    * @return $this
    */
    public function setSpecParam($specParam)
    {
        $this->container['specParam'] = $specParam;
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

