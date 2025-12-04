<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCloudPhoneServerDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCloudPhoneServerDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求的唯一标识ID。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * keypairName  连接云手机所使用的密钥对的名称，不超过64个字节。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * vpcId  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    * cidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * vpcCidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * subnetId  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    * subnetCidr  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    * resourceProjectId  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    * metadata  metadata
    * addresses  云手机服务器的IP相关信息。
    * bandWidths  云手机服务器带宽信息的结构体数组。
    * volumes  云手机服务器卷信息的结构体数组。
    * shareVolumeInfo  shareVolumeInfo
    * networkVersion  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    * enterpriseProjectId  云手机服务器所属企业项目ID。
    * securityGroups  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    * createTime  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'serverName' => 'string',
            'availabilityZone' => 'string',
            'serverId' => 'string',
            'serverModelName' => 'string',
            'phoneModelName' => 'string',
            'keypairName' => 'string',
            'status' => 'int',
            'vpcId' => 'string',
            'cidr' => 'string',
            'vpcCidr' => 'string',
            'subnetId' => 'string',
            'subnetCidr' => 'string',
            'resourceProjectId' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyMetadata',
            'addresses' => '\HuaweiCloud\SDK\Cph\V1\Model\Address[]',
            'bandWidths' => '\HuaweiCloud\SDK\Cph\V1\Model\Bandwidth[]',
            'volumes' => '\HuaweiCloud\SDK\Cph\V1\Model\Volume[]',
            'shareVolumeInfo' => '\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyShareVolumeInfo',
            'networkVersion' => 'string',
            'enterpriseProjectId' => 'string',
            'securityGroups' => 'string[]',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求的唯一标识ID。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * keypairName  连接云手机所使用的密钥对的名称，不超过64个字节。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * vpcId  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    * cidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * vpcCidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * subnetId  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    * subnetCidr  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    * resourceProjectId  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    * metadata  metadata
    * addresses  云手机服务器的IP相关信息。
    * bandWidths  云手机服务器带宽信息的结构体数组。
    * volumes  云手机服务器卷信息的结构体数组。
    * shareVolumeInfo  shareVolumeInfo
    * networkVersion  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    * enterpriseProjectId  云手机服务器所属企业项目ID。
    * securityGroups  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    * createTime  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'serverName' => null,
        'availabilityZone' => null,
        'serverId' => null,
        'serverModelName' => null,
        'phoneModelName' => null,
        'keypairName' => null,
        'status' => 'int32',
        'vpcId' => null,
        'cidr' => null,
        'vpcCidr' => null,
        'subnetId' => null,
        'subnetCidr' => null,
        'resourceProjectId' => null,
        'metadata' => null,
        'addresses' => null,
        'bandWidths' => null,
        'volumes' => null,
        'shareVolumeInfo' => null,
        'networkVersion' => null,
        'enterpriseProjectId' => null,
        'securityGroups' => null,
        'createTime' => null,
        'updateTime' => null
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
    * requestId  请求的唯一标识ID。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * keypairName  连接云手机所使用的密钥对的名称，不超过64个字节。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * vpcId  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    * cidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * vpcCidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * subnetId  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    * subnetCidr  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    * resourceProjectId  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    * metadata  metadata
    * addresses  云手机服务器的IP相关信息。
    * bandWidths  云手机服务器带宽信息的结构体数组。
    * volumes  云手机服务器卷信息的结构体数组。
    * shareVolumeInfo  shareVolumeInfo
    * networkVersion  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    * enterpriseProjectId  云手机服务器所属企业项目ID。
    * securityGroups  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    * createTime  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'serverName' => 'server_name',
            'availabilityZone' => 'availability_zone',
            'serverId' => 'server_id',
            'serverModelName' => 'server_model_name',
            'phoneModelName' => 'phone_model_name',
            'keypairName' => 'keypair_name',
            'status' => 'status',
            'vpcId' => 'vpc_id',
            'cidr' => 'cidr',
            'vpcCidr' => 'vpc_cidr',
            'subnetId' => 'subnet_id',
            'subnetCidr' => 'subnet_cidr',
            'resourceProjectId' => 'resource_project_id',
            'metadata' => 'metadata',
            'addresses' => 'addresses',
            'bandWidths' => 'band_widths',
            'volumes' => 'volumes',
            'shareVolumeInfo' => 'share_volume_info',
            'networkVersion' => 'network_version',
            'enterpriseProjectId' => 'enterprise_project_id',
            'securityGroups' => 'security_groups',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求的唯一标识ID。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * keypairName  连接云手机所使用的密钥对的名称，不超过64个字节。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * vpcId  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    * cidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * vpcCidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * subnetId  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    * subnetCidr  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    * resourceProjectId  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    * metadata  metadata
    * addresses  云手机服务器的IP相关信息。
    * bandWidths  云手机服务器带宽信息的结构体数组。
    * volumes  云手机服务器卷信息的结构体数组。
    * shareVolumeInfo  shareVolumeInfo
    * networkVersion  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    * enterpriseProjectId  云手机服务器所属企业项目ID。
    * securityGroups  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    * createTime  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'serverName' => 'setServerName',
            'availabilityZone' => 'setAvailabilityZone',
            'serverId' => 'setServerId',
            'serverModelName' => 'setServerModelName',
            'phoneModelName' => 'setPhoneModelName',
            'keypairName' => 'setKeypairName',
            'status' => 'setStatus',
            'vpcId' => 'setVpcId',
            'cidr' => 'setCidr',
            'vpcCidr' => 'setVpcCidr',
            'subnetId' => 'setSubnetId',
            'subnetCidr' => 'setSubnetCidr',
            'resourceProjectId' => 'setResourceProjectId',
            'metadata' => 'setMetadata',
            'addresses' => 'setAddresses',
            'bandWidths' => 'setBandWidths',
            'volumes' => 'setVolumes',
            'shareVolumeInfo' => 'setShareVolumeInfo',
            'networkVersion' => 'setNetworkVersion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'securityGroups' => 'setSecurityGroups',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求的唯一标识ID。
    * serverName  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * serverId  云手机服务器的唯一标识，不超过32个字节。
    * serverModelName  云手机服务器规格名称，不超过64个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * keypairName  连接云手机所使用的密钥对的名称，不超过64个字节。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    * vpcId  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    * cidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * vpcCidr  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    * subnetId  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    * subnetCidr  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    * resourceProjectId  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    * metadata  metadata
    * addresses  云手机服务器的IP相关信息。
    * bandWidths  云手机服务器带宽信息的结构体数组。
    * volumes  云手机服务器卷信息的结构体数组。
    * shareVolumeInfo  shareVolumeInfo
    * networkVersion  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    * enterpriseProjectId  云手机服务器所属企业项目ID。
    * securityGroups  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    * createTime  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'serverName' => 'getServerName',
            'availabilityZone' => 'getAvailabilityZone',
            'serverId' => 'getServerId',
            'serverModelName' => 'getServerModelName',
            'phoneModelName' => 'getPhoneModelName',
            'keypairName' => 'getKeypairName',
            'status' => 'getStatus',
            'vpcId' => 'getVpcId',
            'cidr' => 'getCidr',
            'vpcCidr' => 'getVpcCidr',
            'subnetId' => 'getSubnetId',
            'subnetCidr' => 'getSubnetCidr',
            'resourceProjectId' => 'getResourceProjectId',
            'metadata' => 'getMetadata',
            'addresses' => 'getAddresses',
            'bandWidths' => 'getBandWidths',
            'volumes' => 'getVolumes',
            'shareVolumeInfo' => 'getShareVolumeInfo',
            'networkVersion' => 'getNetworkVersion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'securityGroups' => 'getSecurityGroups',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['vpcCidr'] = isset($data['vpcCidr']) ? $data['vpcCidr'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['resourceProjectId'] = isset($data['resourceProjectId']) ? $data['resourceProjectId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['bandWidths'] = isset($data['bandWidths']) ? $data['bandWidths'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['shareVolumeInfo'] = isset($data['shareVolumeInfo']) ? $data['shareVolumeInfo'] : null;
        $this->container['networkVersion'] = isset($data['networkVersion']) ? $data['networkVersion'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) > 65)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 65.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcCidr']) && (mb_strlen($this->container['vpcCidr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'vpcCidr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['vpcCidr']) && (mb_strlen($this->container['vpcCidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcCidr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['subnetCidr']) && (mb_strlen($this->container['subnetCidr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'subnetCidr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['subnetCidr']) && (mb_strlen($this->container['subnetCidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetCidr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceProjectId']) && (mb_strlen($this->container['resourceProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceProjectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceProjectId']) && (mb_strlen($this->container['resourceProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'resourceProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['networkVersion']) && (mb_strlen($this->container['networkVersion']) > 1024)) {
                $invalidProperties[] = "invalid value for 'networkVersion', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['networkVersion']) && (mb_strlen($this->container['networkVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets requestId
    *  请求的唯一标识ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求的唯一标识ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets serverName
    *  云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName 云手机服务器名称， 不超过65字符，只支持英文字母、数字、汉字、下划线和中划线。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器的唯一标识，不超过32个字节。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器的唯一标识，不超过32个字节。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverModelName
    *  云手机服务器规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string|null $serverModelName 云手机服务器规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  云手机规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getPhoneModelName()
    {
        return $this->container['phoneModelName'];
    }

    /**
    * Sets phoneModelName
    *
    * @param string|null $phoneModelName 云手机规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets keypairName
    *  连接云手机所使用的密钥对的名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string|null $keypairName 连接云手机所使用的密钥对的名称，不超过64个字节。
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets status
    *  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vpcId
    *  云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
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
    * @param string|null $vpcId 云手机服务器所属虚拟私有云（简称VPC）的ID。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC ID；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets cidr
    *  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets vpcCidr
    *  云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    *
    * @return string|null
    */
    public function getVpcCidr()
    {
        return $this->container['vpcCidr'];
    }

    /**
    * Sets vpcCidr
    *
    * @param string|null $vpcCidr 云手机服务器所属虚拟私有云（简称VPC）的网段。网络版本 network_version 取值为“v1”时，表示云手机服务器所属资源租户的VPC CIDR；取值为“v2”时，表示租户创建服务器时指定 VPC 的 VPC CIDR。
    *
    * @return $this
    */
    public function setVpcCidr($vpcCidr)
    {
        $this->container['vpcCidr'] = $vpcCidr;
        return $this;
    }

    /**
    * Gets subnetId
    *  云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
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
    * @param string|null $subnetId 云手机服务器所属子网的ID。仅在网络版本 network_version 取值为“v2”时，该取值表示租户创建服务器时指定子网的 ID；网络版本取值为“v1”时，该字段表示云手机服务器所属资源租户的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    *
    * @return string|null
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string|null $subnetCidr 云手机服务器所属子网的网段。网络版本 network_version取值为“v2”时，表示租户创建服务器时指定子网的 CIDR；取值为“v1”时，表示云手机服务器所属资源租户的子网CIDR。
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets resourceProjectId
    *  云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    *
    * @return string|null
    */
    public function getResourceProjectId()
    {
        return $this->container['resourceProjectId'];
    }

    /**
    * Sets resourceProjectId
    *
    * @param string|null $resourceProjectId 云手机服务器的项目ID。用于对使用系统定义网络的服务器创建对等连接，并非租户的项目ID。
    *
    * @return $this
    */
    public function setResourceProjectId($resourceProjectId)
    {
        $this->container['resourceProjectId'] = $resourceProjectId;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets addresses
    *  云手机服务器的IP相关信息。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\Address[]|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\Address[]|null $addresses 云手机服务器的IP相关信息。
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets bandWidths
    *  云手机服务器带宽信息的结构体数组。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\Bandwidth[]|null
    */
    public function getBandWidths()
    {
        return $this->container['bandWidths'];
    }

    /**
    * Sets bandWidths
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\Bandwidth[]|null $bandWidths 云手机服务器带宽信息的结构体数组。
    *
    * @return $this
    */
    public function setBandWidths($bandWidths)
    {
        $this->container['bandWidths'] = $bandWidths;
        return $this;
    }

    /**
    * Gets volumes
    *  云手机服务器卷信息的结构体数组。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\Volume[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\Volume[]|null $volumes 云手机服务器卷信息的结构体数组。
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets shareVolumeInfo
    *  shareVolumeInfo
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyShareVolumeInfo|null
    */
    public function getShareVolumeInfo()
    {
        return $this->container['shareVolumeInfo'];
    }

    /**
    * Sets shareVolumeInfo
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponseBodyShareVolumeInfo|null $shareVolumeInfo shareVolumeInfo
    *
    * @return $this
    */
    public function setShareVolumeInfo($shareVolumeInfo)
    {
        $this->container['shareVolumeInfo'] = $shareVolumeInfo;
        return $this;
    }

    /**
    * Gets networkVersion
    *  是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    *
    * @return string|null
    */
    public function getNetworkVersion()
    {
        return $this->container['networkVersion'];
    }

    /**
    * Sets networkVersion
    *
    * @param string|null $networkVersion 是否为自定义网络的云手机服务器标识。\"v1\"，非自定义网络的云手机服务器。\"v2\"，自定义网络的云手机服务器。支持按照网络版本字段进行筛选。
    *
    * @return $this
    */
    public function setNetworkVersion($networkVersion)
    {
        $this->container['networkVersion'] = $networkVersion;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  云手机服务器所属企业项目ID。
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
    * @param string|null $enterpriseProjectId 云手机服务器所属企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets securityGroups
    *  服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups 服务器扩展网卡绑定的安全组信息。 系统定义网络的服务器，该字段返回为空列表。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
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
    *  更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间， 时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

