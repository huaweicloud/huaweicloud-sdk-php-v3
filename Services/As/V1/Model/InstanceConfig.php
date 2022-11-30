<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    * flavorRef  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    * imageRef  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    * disk  磁盘组信息，系统盘必选，数据盘可选。
    * keyName  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    * personality  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    * publicIp  publicIp
    * userData  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    * metadata  metadata
    * securityGroups  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。参数取值为dedicated。
    * dedicatedHostId  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'flavorRef' => 'string',
            'imageRef' => 'string',
            'disk' => '\HuaweiCloud\SDK\_As\V1\Model\DiskInfo[]',
            'keyName' => 'string',
            'personality' => '\HuaweiCloud\SDK\_As\V1\Model\PersonalityInfo[]',
            'publicIp' => '\HuaweiCloud\SDK\_As\V1\Model\PublicIp',
            'userData' => 'string',
            'metadata' => '\HuaweiCloud\SDK\_As\V1\Model\VmMetaData',
            'securityGroups' => '\HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]',
            'serverGroupId' => 'string',
            'tenancy' => 'string',
            'dedicatedHostId' => 'string',
            'multiFlavorPriorityPolicy' => 'string',
            'marketType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    * flavorRef  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    * imageRef  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    * disk  磁盘组信息，系统盘必选，数据盘可选。
    * keyName  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    * personality  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    * publicIp  publicIp
    * userData  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    * metadata  metadata
    * securityGroups  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。参数取值为dedicated。
    * dedicatedHostId  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'flavorRef' => null,
        'imageRef' => null,
        'disk' => null,
        'keyName' => null,
        'personality' => null,
        'publicIp' => null,
        'userData' => null,
        'metadata' => null,
        'securityGroups' => null,
        'serverGroupId' => null,
        'tenancy' => null,
        'dedicatedHostId' => null,
        'multiFlavorPriorityPolicy' => null,
        'marketType' => null
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
    * instanceId  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    * flavorRef  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    * imageRef  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    * disk  磁盘组信息，系统盘必选，数据盘可选。
    * keyName  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    * personality  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    * publicIp  publicIp
    * userData  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    * metadata  metadata
    * securityGroups  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。参数取值为dedicated。
    * dedicatedHostId  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'flavorRef' => 'flavorRef',
            'imageRef' => 'imageRef',
            'disk' => 'disk',
            'keyName' => 'key_name',
            'personality' => 'personality',
            'publicIp' => 'public_ip',
            'userData' => 'user_data',
            'metadata' => 'metadata',
            'securityGroups' => 'security_groups',
            'serverGroupId' => 'server_group_id',
            'tenancy' => 'tenancy',
            'dedicatedHostId' => 'dedicated_host_id',
            'multiFlavorPriorityPolicy' => 'multi_flavor_priority_policy',
            'marketType' => 'market_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    * flavorRef  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    * imageRef  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    * disk  磁盘组信息，系统盘必选，数据盘可选。
    * keyName  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    * personality  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    * publicIp  publicIp
    * userData  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    * metadata  metadata
    * securityGroups  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。参数取值为dedicated。
    * dedicatedHostId  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'flavorRef' => 'setFlavorRef',
            'imageRef' => 'setImageRef',
            'disk' => 'setDisk',
            'keyName' => 'setKeyName',
            'personality' => 'setPersonality',
            'publicIp' => 'setPublicIp',
            'userData' => 'setUserData',
            'metadata' => 'setMetadata',
            'securityGroups' => 'setSecurityGroups',
            'serverGroupId' => 'setServerGroupId',
            'tenancy' => 'setTenancy',
            'dedicatedHostId' => 'setDedicatedHostId',
            'multiFlavorPriorityPolicy' => 'setMultiFlavorPriorityPolicy',
            'marketType' => 'setMarketType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    * flavorRef  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    * imageRef  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    * disk  磁盘组信息，系统盘必选，数据盘可选。
    * keyName  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    * personality  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    * publicIp  publicIp
    * userData  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    * metadata  metadata
    * securityGroups  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。参数取值为dedicated。
    * dedicatedHostId  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'flavorRef' => 'getFlavorRef',
            'imageRef' => 'getImageRef',
            'disk' => 'getDisk',
            'keyName' => 'getKeyName',
            'personality' => 'getPersonality',
            'publicIp' => 'getPublicIp',
            'userData' => 'getUserData',
            'metadata' => 'getMetadata',
            'securityGroups' => 'getSecurityGroups',
            'serverGroupId' => 'getServerGroupId',
            'tenancy' => 'getTenancy',
            'dedicatedHostId' => 'getDedicatedHostId',
            'multiFlavorPriorityPolicy' => 'getMultiFlavorPriorityPolicy',
            'marketType' => 'getMarketType'
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
    const TENANCY_DEDICATED = 'dedicated';
    const MULTI_FLAVOR_PRIORITY_POLICY_PICK_FIRST = 'PICK_FIRST';
    const MULTI_FLAVOR_PRIORITY_POLICY_COST_FIRST = 'COST_FIRST';
    const MARKET_TYPE_SPOT = 'spot';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTenancyAllowableValues()
    {
        return [
            self::TENANCY_DEDICATED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMultiFlavorPriorityPolicyAllowableValues()
    {
        return [
            self::MULTI_FLAVOR_PRIORITY_POLICY_PICK_FIRST,
            self::MULTI_FLAVOR_PRIORITY_POLICY_COST_FIRST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMarketTypeAllowableValues()
    {
        return [
            self::MARKET_TYPE_SPOT,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['personality'] = isset($data['personality']) ? $data['personality'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['serverGroupId'] = isset($data['serverGroupId']) ? $data['serverGroupId'] : null;
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['multiFlavorPriorityPolicy'] = isset($data['multiFlavorPriorityPolicy']) ? $data['multiFlavorPriorityPolicy'] : null;
        $this->container['marketType'] = isset($data['marketType']) ? $data['marketType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['flavorRef']) && (mb_strlen($this->container['flavorRef']) > 36)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['flavorRef']) && (mb_strlen($this->container['flavorRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageRef']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['imageRef'])) {
                $invalidProperties[] = "invalid value for 'imageRef', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['serverGroupId'])) {
                $invalidProperties[] = "invalid value for 'serverGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getTenancyAllowableValues();
                if (!is_null($this->container['tenancy']) && !in_array($this->container['tenancy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tenancy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dedicatedHostId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dedicatedHostId'])) {
                $invalidProperties[] = "invalid value for 'dedicatedHostId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getMultiFlavorPriorityPolicyAllowableValues();
                if (!is_null($this->container['multiFlavorPriorityPolicy']) && !in_array($this->container['multiFlavorPriorityPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'multiFlavorPriorityPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMarketTypeAllowableValues();
                if (!is_null($this->container['marketType']) && !in_array($this->container['marketType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'marketType', must be one of '%s'",
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
    * Gets instanceId
    *  云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 云服务器ID，当使用已存在的云服务器的规格为模板创建弹性伸缩配置时传入该字段，此时flavorRef、imageRef、disk、security_groups、tenancy和dedicated_host_id字段不生效。当不传入instance_id字段时flavorRef、imageRef、disk字段为必选。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 云服务器的规格ID。最多支持选择10个规格，多个规格ID以逗号分隔。云服务器的ID通过查询弹性云服务器规格详情和扩展信息列表接口获取，详情请参考 [查询云服务器规格详情和扩展信息列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212656.html)。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets imageRef
    *  镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    *
    * @return string|null
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string|null $imageRef 镜像ID，同image_id，指定创建实例时选择的镜像资源。通过查询镜像服务镜像列表接口获取，请参考[查询镜像列表](https://support.huaweicloud.com/api-ims/ims_03_0602.html)。
    *
    * @return $this
    */
    public function setImageRef($imageRef)
    {
        $this->container['imageRef'] = $imageRef;
        return $this;
    }

    /**
    * Gets disk
    *  磁盘组信息，系统盘必选，数据盘可选。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\DiskInfo[]|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\DiskInfo[]|null $disk 磁盘组信息，系统盘必选，数据盘可选。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets keyName
    *  登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
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
    * @param string|null $keyName 登录云服务器的SSH密钥名称。  获取密钥对方式请参考[创建及导入SSH密钥对](https://support.huaweicloud.com/api-dew/CreateKeypair.html)。  说明： 当key_name与user_data同时指定时，user_data只做用户数据注入。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets personality
    *  注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\PersonalityInfo[]|null
    */
    public function getPersonality()
    {
        return $this->container['personality'];
    }

    /**
    * Sets personality
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\PersonalityInfo[]|null $personality 注入文件信息。仅支持注入文本文件，最大支持注入5个文件，每个文件最大1KB。
    *
    * @return $this
    */
    public function setPersonality($personality)
    {
        $this->container['personality'] = $personality;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\PublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\PublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets userData
    *  cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
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
    * @param string|null $userData cloud-init用户数据。支持注入文本、文本文件或gzip文件。文件内容需要进行base64格式编码，注入内容（编码之前的内容）最大为32KB。说明：当key_name没有指定时，user_data注入的数据默认为云服务器root账号的登录密码。创建密码方式鉴权的Linux弹性云服务器时为必填项，为root用户注入自定义初始化密码。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\VmMetaData|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\VmMetaData|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]|null $securityGroups 安全组信息。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets serverGroupId
    *  云服务器组ID。
    *
    * @return string|null
    */
    public function getServerGroupId()
    {
        return $this->container['serverGroupId'];
    }

    /**
    * Sets serverGroupId
    *
    * @param string|null $serverGroupId 云服务器组ID。
    *
    * @return $this
    */
    public function setServerGroupId($serverGroupId)
    {
        $this->container['serverGroupId'] = $serverGroupId;
        return $this;
    }

    /**
    * Gets tenancy
    *  在专属主机上创建弹性云服务器。参数取值为dedicated。
    *
    * @return string|null
    */
    public function getTenancy()
    {
        return $this->container['tenancy'];
    }

    /**
    * Sets tenancy
    *
    * @param string|null $tenancy 在专属主机上创建弹性云服务器。参数取值为dedicated。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    *
    * @return string|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string|null $dedicatedHostId 专属主机的ID。 说明：该字段仅在tenancy为dedicated时生效；如果指定该字段，云服务器将被创建到指定的专属主机上；如果不指定该字段，此时系统会将云服务器创建在符合规格的专属主机中剩余内存最大的那一台上，以使各专属主机尽量均衡负载。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets multiFlavorPriorityPolicy
    *  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @return string|null
    */
    public function getMultiFlavorPriorityPolicy()
    {
        return $this->container['multiFlavorPriorityPolicy'];
    }

    /**
    * Sets multiFlavorPriorityPolicy
    *
    * @param string|null $multiFlavorPriorityPolicy 使用伸缩配置创建云主机的时候，多规格使用的优先级策略。PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @return $this
    */
    public function setMultiFlavorPriorityPolicy($multiFlavorPriorityPolicy)
    {
        $this->container['multiFlavorPriorityPolicy'] = $multiFlavorPriorityPolicy;
        return $this;
    }

    /**
    * Gets marketType
    *  云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @return string|null
    */
    public function getMarketType()
    {
        return $this->container['marketType'];
    }

    /**
    * Sets marketType
    *
    * @param string|null $marketType 云服务器的计费模式，可以选择竞价计费或按需计费，取值如下：按需计费：不指定该字段。竞价计费：spot
    *
    * @return $this
    */
    public function setMarketType($marketType)
    {
        $this->container['marketType'] = $marketType;
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

