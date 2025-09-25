<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateManualImageScanTaskReqInfoQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateManualImageScanTaskReqInfo_query_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localImageType  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * privateIp  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * podId  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    * podName  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localImageType' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'clusterId' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'podId' => 'string',
            'podName' => 'string',
            'appName' => 'string',
            'hasVul' => 'bool',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'scanStatus' => 'string',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localImageType  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * privateIp  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * podId  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    * podName  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localImageType' => null,
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'clusterId' => null,
        'containerId' => null,
        'containerName' => null,
        'podId' => null,
        'podName' => null,
        'appName' => null,
        'hasVul' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'scanStatus' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64'
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
    * localImageType  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * privateIp  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * podId  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    * podName  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localImageType' => 'local_image_type',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'clusterId' => 'cluster_id',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'podId' => 'pod_id',
            'podName' => 'pod_name',
            'appName' => 'app_name',
            'hasVul' => 'has_vul',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'scanStatus' => 'scan_status',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localImageType  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * privateIp  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * podId  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    * podName  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'localImageType' => 'setLocalImageType',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'clusterId' => 'setClusterId',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'podId' => 'setPodId',
            'podName' => 'setPodName',
            'appName' => 'setAppName',
            'hasVul' => 'setHasVul',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'scanStatus' => 'setScanStatus',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localImageType  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * privateIp  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerId  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    * podId  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    * podName  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'localImageType' => 'getLocalImageType',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'clusterId' => 'getClusterId',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'podId' => 'getPodId',
            'podName' => 'getPodName',
            'appName' => 'getAppName',
            'hasVul' => 'getHasVul',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'scanStatus' => 'getScanStatus',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime'
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
        $this->container['localImageType'] = isset($data['localImageType']) ? $data['localImageType'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localImageType']) && !preg_match("/^.*$/", $this->container['localImageType'])) {
                $invalidProperties[] = "invalid value for 'localImageType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 64)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 0)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 512)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
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
    * Gets localImageType
    *  **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLocalImageType()
    {
        return $this->container['localImageType'];
    }

    /**
    * Sets localImageType
    *
    * @param string|null $localImageType **参数解释**: 本地镜像类型 **约束限制**: 不涉及 **取值范围**: - swr_image：swr镜像。 - other_image：其他镜像。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLocalImageType($localImageType)
    {
        $this->container['localImageType'] = $localImageType;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 服务器公网IP **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
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
    * @param string|null $privateIp **参数解释**: 私有IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets podId
    *  **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId **参数解释**: pod id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释**: pod 名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets hasVul
    *  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasVul()
    {
        return $this->container['hasVul'];
    }

    /**
    * Sets hasVul
    *
    * @param bool|null $hasVul **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：存在软件漏洞。 - false：不存在软件漏洞。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像仓库。 - shared_image：SWR共享镜像仓库。 - instance_image：SWR企业仓库。 - harbor：harbor仓库。 - jfrog：jfrog仓库。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描 - success：扫描完成 - scanning：扫描中 - failed：扫描失败 - download_failed：下载失败 - image_oversized：镜像超大  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets startLatestUpdateTime
    *  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getStartLatestUpdateTime()
    {
        return $this->container['startLatestUpdateTime'];
    }

    /**
    * Sets startLatestUpdateTime
    *
    * @param int|null $startLatestUpdateTime **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStartLatestUpdateTime($startLatestUpdateTime)
    {
        $this->container['startLatestUpdateTime'] = $startLatestUpdateTime;
        return $this;
    }

    /**
    * Gets endLatestUpdateTime
    *  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getEndLatestUpdateTime()
    {
        return $this->container['endLatestUpdateTime'];
    }

    /**
    * Sets endLatestUpdateTime
    *
    * @param int|null $endLatestUpdateTime **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestUpdateTime($endLatestUpdateTime)
    {
        $this->container['endLatestUpdateTime'] = $endLatestUpdateTime;
        return $this;
    }

    /**
    * Gets startLatestScanTime
    *  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getStartLatestScanTime()
    {
        return $this->container['startLatestScanTime'];
    }

    /**
    * Sets startLatestScanTime
    *
    * @param int|null $startLatestScanTime **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStartLatestScanTime($startLatestScanTime)
    {
        $this->container['startLatestScanTime'] = $startLatestScanTime;
        return $this;
    }

    /**
    * Gets endLatestScanTime
    *  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getEndLatestScanTime()
    {
        return $this->container['endLatestScanTime'];
    }

    /**
    * Sets endLatestScanTime
    *
    * @param int|null $endLatestScanTime **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 0-9223372036854775807。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
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

