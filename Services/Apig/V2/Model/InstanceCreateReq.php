<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * instanceId  实例编号，不填写自动生成
    * specId  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * eipId  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    * enterpriseProjectId  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    * availableZoneIds  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    * bandwidthSize  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    * bandwidthChargingMode  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    * ipv6Enable  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * tags  标签列表。  一个实例默认最多支持创建20个标签
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    * ingressBandwidthSize  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    * ingressBandwidthChargingMode  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'specId' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'eipId' => 'string',
            'enterpriseProjectId' => 'string',
            'availableZoneIds' => 'string[]',
            'bandwidthSize' => 'int',
            'bandwidthChargingMode' => 'string',
            'ipv6Enable' => 'bool',
            'loadbalancerProvider' => 'string',
            'tags' => '\HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValue[]',
            'vpcepServiceName' => 'string',
            'ingressBandwidthSize' => 'int',
            'ingressBandwidthChargingMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * instanceId  实例编号，不填写自动生成
    * specId  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * eipId  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    * enterpriseProjectId  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    * availableZoneIds  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    * bandwidthSize  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    * bandwidthChargingMode  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    * ipv6Enable  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * tags  标签列表。  一个实例默认最多支持创建20个标签
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    * ingressBandwidthSize  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    * ingressBandwidthChargingMode  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'instanceName' => null,
        'instanceId' => null,
        'specId' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'eipId' => null,
        'enterpriseProjectId' => null,
        'availableZoneIds' => null,
        'bandwidthSize' => 'int32',
        'bandwidthChargingMode' => null,
        'ipv6Enable' => null,
        'loadbalancerProvider' => null,
        'tags' => null,
        'vpcepServiceName' => null,
        'ingressBandwidthSize' => 'int32',
        'ingressBandwidthChargingMode' => null
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
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * instanceId  实例编号，不填写自动生成
    * specId  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * eipId  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    * enterpriseProjectId  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    * availableZoneIds  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    * bandwidthSize  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    * bandwidthChargingMode  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    * ipv6Enable  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * tags  标签列表。  一个实例默认最多支持创建20个标签
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    * ingressBandwidthSize  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    * ingressBandwidthChargingMode  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'specId' => 'spec_id',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'eipId' => 'eip_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'availableZoneIds' => 'available_zone_ids',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthChargingMode' => 'bandwidth_charging_mode',
            'ipv6Enable' => 'ipv6_enable',
            'loadbalancerProvider' => 'loadbalancer_provider',
            'tags' => 'tags',
            'vpcepServiceName' => 'vpcep_service_name',
            'ingressBandwidthSize' => 'ingress_bandwidth_size',
            'ingressBandwidthChargingMode' => 'ingress_bandwidth_charging_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * instanceId  实例编号，不填写自动生成
    * specId  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * eipId  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    * enterpriseProjectId  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    * availableZoneIds  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    * bandwidthSize  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    * bandwidthChargingMode  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    * ipv6Enable  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * tags  标签列表。  一个实例默认最多支持创建20个标签
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    * ingressBandwidthSize  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    * ingressBandwidthChargingMode  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'specId' => 'setSpecId',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'eipId' => 'setEipId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'availableZoneIds' => 'setAvailableZoneIds',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthChargingMode' => 'setBandwidthChargingMode',
            'ipv6Enable' => 'setIpv6Enable',
            'loadbalancerProvider' => 'setLoadbalancerProvider',
            'tags' => 'setTags',
            'vpcepServiceName' => 'setVpcepServiceName',
            'ingressBandwidthSize' => 'setIngressBandwidthSize',
            'ingressBandwidthChargingMode' => 'setIngressBandwidthChargingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * instanceId  实例编号，不填写自动生成
    * specId  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * eipId  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    * enterpriseProjectId  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    * availableZoneIds  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    * bandwidthSize  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    * bandwidthChargingMode  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    * ipv6Enable  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * tags  标签列表。  一个实例默认最多支持创建20个标签
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    * ingressBandwidthSize  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    * ingressBandwidthChargingMode  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'specId' => 'getSpecId',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'eipId' => 'getEipId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'availableZoneIds' => 'getAvailableZoneIds',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthChargingMode' => 'getBandwidthChargingMode',
            'ipv6Enable' => 'getIpv6Enable',
            'loadbalancerProvider' => 'getLoadbalancerProvider',
            'tags' => 'getTags',
            'vpcepServiceName' => 'getVpcepServiceName',
            'ingressBandwidthSize' => 'getIngressBandwidthSize',
            'ingressBandwidthChargingMode' => 'getIngressBandwidthChargingMode'
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
    const SPEC_ID_BASIC = 'BASIC';
    const SPEC_ID_PROFESSIONAL = 'PROFESSIONAL';
    const SPEC_ID_ENTERPRISE = 'ENTERPRISE';
    const SPEC_ID_PLATINUM = 'PLATINUM';
    const SPEC_ID_BASIC_IPV6 = 'BASIC_IPV6';
    const SPEC_ID_PROFESSIONAL_IPV6 = 'PROFESSIONAL_IPV6';
    const SPEC_ID_ENTERPRISE_IPV6 = 'ENTERPRISE_IPV6';
    const SPEC_ID_PLATINUM_IPV6 = 'PLATINUM_IPV6';
    const SPEC_ID_PLATINUM_X2 = 'PLATINUM_X2';
    const SPEC_ID_PLATINUM_X3 = 'PLATINUM_X3';
    const SPEC_ID_PLATINUM_X4 = 'PLATINUM_X4';
    const SPEC_ID_PLATINUM_X5 = 'PLATINUM_X5';
    const SPEC_ID_PLATINUM_X6 = 'PLATINUM_X6';
    const SPEC_ID_PLATINUM_X7 = 'PLATINUM_X7';
    const SPEC_ID_PLATINUM_X8 = 'PLATINUM_X8';
    const BANDWIDTH_CHARGING_MODE_BANDWIDTH = 'bandwidth';
    const BANDWIDTH_CHARGING_MODE_TRAFFIC = 'traffic';
    const LOADBALANCER_PROVIDER_LVS = 'lvs';
    const LOADBALANCER_PROVIDER_ELB = 'elb';
    const INGRESS_BANDWIDTH_CHARGING_MODE_BANDWIDTH = 'bandwidth';
    const INGRESS_BANDWIDTH_CHARGING_MODE_TRAFFIC = 'traffic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecIdAllowableValues()
    {
        return [
            self::SPEC_ID_BASIC,
            self::SPEC_ID_PROFESSIONAL,
            self::SPEC_ID_ENTERPRISE,
            self::SPEC_ID_PLATINUM,
            self::SPEC_ID_BASIC_IPV6,
            self::SPEC_ID_PROFESSIONAL_IPV6,
            self::SPEC_ID_ENTERPRISE_IPV6,
            self::SPEC_ID_PLATINUM_IPV6,
            self::SPEC_ID_PLATINUM_X2,
            self::SPEC_ID_PLATINUM_X3,
            self::SPEC_ID_PLATINUM_X4,
            self::SPEC_ID_PLATINUM_X5,
            self::SPEC_ID_PLATINUM_X6,
            self::SPEC_ID_PLATINUM_X7,
            self::SPEC_ID_PLATINUM_X8,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthChargingModeAllowableValues()
    {
        return [
            self::BANDWIDTH_CHARGING_MODE_BANDWIDTH,
            self::BANDWIDTH_CHARGING_MODE_TRAFFIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLoadbalancerProviderAllowableValues()
    {
        return [
            self::LOADBALANCER_PROVIDER_LVS,
            self::LOADBALANCER_PROVIDER_ELB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIngressBandwidthChargingModeAllowableValues()
    {
        return [
            self::INGRESS_BANDWIDTH_CHARGING_MODE_BANDWIDTH,
            self::INGRESS_BANDWIDTH_CHARGING_MODE_TRAFFIC,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['specId'] = isset($data['specId']) ? $data['specId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['availableZoneIds'] = isset($data['availableZoneIds']) ? $data['availableZoneIds'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthChargingMode'] = isset($data['bandwidthChargingMode']) ? $data['bandwidthChargingMode'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['loadbalancerProvider'] = isset($data['loadbalancerProvider']) ? $data['loadbalancerProvider'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['vpcepServiceName'] = isset($data['vpcepServiceName']) ? $data['vpcepServiceName'] : null;
        $this->container['ingressBandwidthSize'] = isset($data['ingressBandwidthSize']) ? $data['ingressBandwidthSize'] : null;
        $this->container['ingressBandwidthChargingMode'] = isset($data['ingressBandwidthChargingMode']) ? $data['ingressBandwidthChargingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && !preg_match("/^[^><]{0,255}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^><]{0,255}$/.";
            }
            if (!is_null($this->container['maintainBegin']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainBegin'])) {
                $invalidProperties[] = "invalid value for 'maintainBegin', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
            }
            if (!is_null($this->container['maintainEnd']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainEnd'])) {
                $invalidProperties[] = "invalid value for 'maintainEnd', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 3)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['instanceName']) && !preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['instanceName'])) {
                $invalidProperties[] = "invalid value for 'instanceName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/.";
            }
            $allowedValues = $this->getSpecIdAllowableValues();
                if (!is_null($this->container['specId']) && !in_array($this->container['specId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['securityGroupId']) && !preg_match("/^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/", $this->container['securityGroupId'])) {
                $invalidProperties[] = "invalid value for 'securityGroupId', must be conform to the pattern /^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/.";
            }
            $allowedValues = $this->getBandwidthChargingModeAllowableValues();
                if (!is_null($this->container['bandwidthChargingMode']) && !in_array($this->container['bandwidthChargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthChargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLoadbalancerProviderAllowableValues();
                if (!is_null($this->container['loadbalancerProvider']) && !in_array($this->container['loadbalancerProvider'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'loadbalancerProvider', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vpcepServiceName']) && !preg_match("/^[a-zA-Z0-9_-]{0,16}$/", $this->container['vpcepServiceName'])) {
                $invalidProperties[] = "invalid value for 'vpcepServiceName', must be conform to the pattern /^[a-zA-Z0-9_-]{0,16}$/.";
            }
            $allowedValues = $this->getIngressBandwidthChargingModeAllowableValues();
                if (!is_null($this->container['ingressBandwidthChargingMode']) && !in_array($this->container['ingressBandwidthChargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ingressBandwidthChargingMode', must be one of '%s'",
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
    * Gets description
    *  实例描述。支持除>和<以外的字符，长度为0~255。
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
    * @param string|null $description 实例描述。支持除>和<以外的字符，长度为0~255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
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
    * @param string|null $maintainBegin 维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
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
    *  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
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
    * @param string|null $maintainEnd 维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例编号，不填写自动生成
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
    * @param string|null $instanceId 实例编号，不填写自动生成
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets specId
    *  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    *
    * @return string|null
    */
    public function getSpecId()
    {
        return $this->container['specId'];
    }

    /**
    * Sets specId
    *
    * @param string|null $specId 实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例 - PLATINUM_X2：铂金版 x2实例 - PLATINUM_X3：铂金版 x3实例 - PLATINUM_X4：铂金版 x4实例 - PLATINUM_X5：铂金版 x5实例 - PLATINUM_X6：铂金版 x6实例 - PLATINUM_X7：铂金版 x7实例 - PLATINUM_X8：铂金版 x8实例  当前仅部分region支持铂金版 x2、铂金版 x3、铂金版 x4、铂金版 x5、铂金版 x6、铂金版 x7、铂金版 x8
    *
    * @return $this
    */
    public function setSpecId($specId)
    {
        $this->container['specId'] = $specId;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
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
    * @param string|null $vpcId 虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
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
    *  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
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
    * @param string|null $subnetId 子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
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
    *  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
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
    * @param string|null $securityGroupId 指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets eipId
    *  弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 弹性公网IP ID。  实例需要开启公网访问，且loadbalancer_provider为lvs时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源  获取方法：登录虚拟私有云服务的控制台界面，在弹性公网IP的详情页面查找弹性公网IP ID。
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
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
    * @param string|null $enterpriseProjectId 企业项目ID，企业账号必填。  获取方法如下： - 方法1：登录企业项目管理界面，在项目管理详情页面查找项目ID。 - 方法2：通过企业项目管理的API接口查询，具体方法请参见《企业管理API参考》的“查询企业项目列表”章节。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets availableZoneIds
    *  可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    *
    * @return string[]|null
    */
    public function getAvailableZoneIds()
    {
        return $this->container['availableZoneIds'];
    }

    /**
    * Sets availableZoneIds
    *
    * @param string[]|null $availableZoneIds 可用区列表。  可用区指在同一地域下，电力、网络隔离的物理区域，可用区之内内网互通，不同可用区之间物理隔离。选择多个AZ部署可以有效提升可靠性。  获取方法：通过文档中实例管理的可用区列表接口查询。
    *
    * @return $this
    */
    public function setAvailableZoneIds($availableZoneIds)
    {
        $this->container['availableZoneIds'] = $availableZoneIds;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 出公网带宽  实例需要开启出公网功能时需要填写，绑定后使用者可以利用该出口访问公网上的互联网资源
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthChargingMode
    *  出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return string|null
    */
    public function getBandwidthChargingMode()
    {
        return $this->container['bandwidthChargingMode'];
    }

    /**
    * Sets bandwidthChargingMode
    *
    * @param string|null $bandwidthChargingMode 出公网带宽计费类型，实例需要开启出公网功能时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return $this
    */
    public function setBandwidthChargingMode($bandwidthChargingMode)
    {
        $this->container['bandwidthChargingMode'] = $bandwidthChargingMode;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 公网访问是否支持IPv6。  当前仅部分region部分可用区支持IPv6
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets loadbalancerProvider
    *  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return string|null
    */
    public function getLoadbalancerProvider()
    {
        return $this->container['loadbalancerProvider'];
    }

    /**
    * Sets loadbalancerProvider
    *
    * @param string|null $loadbalancerProvider 实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return $this
    */
    public function setLoadbalancerProvider($loadbalancerProvider)
    {
        $this->container['loadbalancerProvider'] = $loadbalancerProvider;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。  一个实例默认最多支持创建20个标签
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValue[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValue[]|null $tags 标签列表。  一个实例默认最多支持创建20个标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets vpcepServiceName
    *  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    *
    * @return string|null
    */
    public function getVpcepServiceName()
    {
        return $this->container['vpcepServiceName'];
    }

    /**
    * Sets vpcepServiceName
    *
    * @param string|null $vpcepServiceName 终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您不填写该参数，系统生成的终端节点服务的名称为{region}.apig.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。 实例创建完成后，可以在实例管理->终端节点管理页面修改该名称。
    *
    * @return $this
    */
    public function setVpcepServiceName($vpcepServiceName)
    {
        $this->container['vpcepServiceName'] = $vpcepServiceName;
        return $this;
    }

    /**
    * Gets ingressBandwidthSize
    *  入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    *
    * @return int|null
    */
    public function getIngressBandwidthSize()
    {
        return $this->container['ingressBandwidthSize'];
    }

    /**
    * Sets ingressBandwidthSize
    *
    * @param int|null $ingressBandwidthSize 入公网带宽  实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写，绑定后使用者可以通过该入口从公网访问APIG实例中的API等资源
    *
    * @return $this
    */
    public function setIngressBandwidthSize($ingressBandwidthSize)
    {
        $this->container['ingressBandwidthSize'] = $ingressBandwidthSize;
        return $this;
    }

    /**
    * Gets ingressBandwidthChargingMode
    *  入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return string|null
    */
    public function getIngressBandwidthChargingMode()
    {
        return $this->container['ingressBandwidthChargingMode'];
    }

    /**
    * Sets ingressBandwidthChargingMode
    *
    * @param string|null $ingressBandwidthChargingMode 入公网带宽计费类型，实例需要开启入公网功能，且loadbalancer_provider为elb时需要填写： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return $this
    */
    public function setIngressBandwidthChargingMode($ingressBandwidthChargingMode)
    {
        $this->container['ingressBandwidthChargingMode'] = $ingressBandwidthChargingMode;
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

