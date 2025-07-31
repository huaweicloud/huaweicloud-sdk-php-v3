<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiCloudClusterCreateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiCloudClusterCreateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  集群名称
    * provider  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * imageRepoUsername  镜像仓用户名
    * imageRepoPassword  镜像仓密码
    * organization  组织
    * imageRepoType  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    * kubeConfig  kubeconfig文件
    * imageArch  镜像架构类型： - x86 - arm
    * anpProxy  Anp代理地址
    * hostguardProxy  Hostguard代理地址
    * containerName  容器名称
    * dnsPolicy  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    * dnsConfig  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'provider' => 'string',
            'server' => 'string',
            'imageRepo' => 'string',
            'imageRepoUsername' => 'string',
            'imageRepoPassword' => 'string',
            'organization' => 'string',
            'imageRepoType' => 'string',
            'currentExpirationDate' => 'int',
            'certificateExpirationDate' => 'int',
            'kubeConfig' => 'string',
            'imageArch' => 'string',
            'anpProxy' => 'string',
            'hostguardProxy' => 'string',
            'containerName' => 'string',
            'dnsPolicy' => 'string',
            'dnsConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  集群名称
    * provider  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * imageRepoUsername  镜像仓用户名
    * imageRepoPassword  镜像仓密码
    * organization  组织
    * imageRepoType  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    * kubeConfig  kubeconfig文件
    * imageArch  镜像架构类型： - x86 - arm
    * anpProxy  Anp代理地址
    * hostguardProxy  Hostguard代理地址
    * containerName  容器名称
    * dnsPolicy  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    * dnsConfig  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'provider' => null,
        'server' => null,
        'imageRepo' => null,
        'imageRepoUsername' => null,
        'imageRepoPassword' => null,
        'organization' => null,
        'imageRepoType' => null,
        'currentExpirationDate' => 'int64',
        'certificateExpirationDate' => 'int64',
        'kubeConfig' => null,
        'imageArch' => null,
        'anpProxy' => null,
        'hostguardProxy' => null,
        'containerName' => null,
        'dnsPolicy' => null,
        'dnsConfig' => null
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
    * name  集群名称
    * provider  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * imageRepoUsername  镜像仓用户名
    * imageRepoPassword  镜像仓密码
    * organization  组织
    * imageRepoType  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    * kubeConfig  kubeconfig文件
    * imageArch  镜像架构类型： - x86 - arm
    * anpProxy  Anp代理地址
    * hostguardProxy  Hostguard代理地址
    * containerName  容器名称
    * dnsPolicy  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    * dnsConfig  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'provider' => 'provider',
            'server' => 'server',
            'imageRepo' => 'image_repo',
            'imageRepoUsername' => 'image_repo_username',
            'imageRepoPassword' => 'image_repo_password',
            'organization' => 'organization',
            'imageRepoType' => 'image_repo_type',
            'currentExpirationDate' => 'current_expiration_date',
            'certificateExpirationDate' => 'certificate_expiration_date',
            'kubeConfig' => 'kube_config',
            'imageArch' => 'image_arch',
            'anpProxy' => 'anp_proxy',
            'hostguardProxy' => 'hostguard_proxy',
            'containerName' => 'container_name',
            'dnsPolicy' => 'dns_policy',
            'dnsConfig' => 'dns_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  集群名称
    * provider  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * imageRepoUsername  镜像仓用户名
    * imageRepoPassword  镜像仓密码
    * organization  组织
    * imageRepoType  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    * kubeConfig  kubeconfig文件
    * imageArch  镜像架构类型： - x86 - arm
    * anpProxy  Anp代理地址
    * hostguardProxy  Hostguard代理地址
    * containerName  容器名称
    * dnsPolicy  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    * dnsConfig  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'provider' => 'setProvider',
            'server' => 'setServer',
            'imageRepo' => 'setImageRepo',
            'imageRepoUsername' => 'setImageRepoUsername',
            'imageRepoPassword' => 'setImageRepoPassword',
            'organization' => 'setOrganization',
            'imageRepoType' => 'setImageRepoType',
            'currentExpirationDate' => 'setCurrentExpirationDate',
            'certificateExpirationDate' => 'setCertificateExpirationDate',
            'kubeConfig' => 'setKubeConfig',
            'imageArch' => 'setImageArch',
            'anpProxy' => 'setAnpProxy',
            'hostguardProxy' => 'setHostguardProxy',
            'containerName' => 'setContainerName',
            'dnsPolicy' => 'setDnsPolicy',
            'dnsConfig' => 'setDnsConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  集群名称
    * provider  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * imageRepoUsername  镜像仓用户名
    * imageRepoPassword  镜像仓密码
    * organization  组织
    * imageRepoType  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    * kubeConfig  kubeconfig文件
    * imageArch  镜像架构类型： - x86 - arm
    * anpProxy  Anp代理地址
    * hostguardProxy  Hostguard代理地址
    * containerName  容器名称
    * dnsPolicy  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    * dnsConfig  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'provider' => 'getProvider',
            'server' => 'getServer',
            'imageRepo' => 'getImageRepo',
            'imageRepoUsername' => 'getImageRepoUsername',
            'imageRepoPassword' => 'getImageRepoPassword',
            'organization' => 'getOrganization',
            'imageRepoType' => 'getImageRepoType',
            'currentExpirationDate' => 'getCurrentExpirationDate',
            'certificateExpirationDate' => 'getCertificateExpirationDate',
            'kubeConfig' => 'getKubeConfig',
            'imageArch' => 'getImageArch',
            'anpProxy' => 'getAnpProxy',
            'hostguardProxy' => 'getHostguardProxy',
            'containerName' => 'getContainerName',
            'dnsPolicy' => 'getDnsPolicy',
            'dnsConfig' => 'getDnsConfig'
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['imageRepo'] = isset($data['imageRepo']) ? $data['imageRepo'] : null;
        $this->container['imageRepoUsername'] = isset($data['imageRepoUsername']) ? $data['imageRepoUsername'] : null;
        $this->container['imageRepoPassword'] = isset($data['imageRepoPassword']) ? $data['imageRepoPassword'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['imageRepoType'] = isset($data['imageRepoType']) ? $data['imageRepoType'] : null;
        $this->container['currentExpirationDate'] = isset($data['currentExpirationDate']) ? $data['currentExpirationDate'] : null;
        $this->container['certificateExpirationDate'] = isset($data['certificateExpirationDate']) ? $data['certificateExpirationDate'] : null;
        $this->container['kubeConfig'] = isset($data['kubeConfig']) ? $data['kubeConfig'] : null;
        $this->container['imageArch'] = isset($data['imageArch']) ? $data['imageArch'] : null;
        $this->container['anpProxy'] = isset($data['anpProxy']) ? $data['anpProxy'] : null;
        $this->container['hostguardProxy'] = isset($data['hostguardProxy']) ? $data['hostguardProxy'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['dnsPolicy'] = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->container['dnsConfig'] = isset($data['dnsConfig']) ? $data['dnsConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-z][a-z0-9-]*[a-z0-9]$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z][a-z0-9-]*[a-z0-9]$/.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 256)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 0)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['provider']) && !preg_match("/^ali|tencent|azure|aws|self_built_hw|self_built_idc$/", $this->container['provider'])) {
                $invalidProperties[] = "invalid value for 'provider', must be conform to the pattern /^ali|tencent|azure|aws|self_built_hw|self_built_idc$/.";
            }
            if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) > 128)) {
                $invalidProperties[] = "invalid value for 'server', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) < 0)) {
                $invalidProperties[] = "invalid value for 'server', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['server']) && !preg_match("/^https:\/\/.*$/", $this->container['server'])) {
                $invalidProperties[] = "invalid value for 'server', must be conform to the pattern /^https:\/\/.*$/.";
            }
            if (!is_null($this->container['imageRepo']) && (mb_strlen($this->container['imageRepo']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageRepo']) && (mb_strlen($this->container['imageRepo']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageRepo']) && !preg_match("/^.*$/", $this->container['imageRepo'])) {
                $invalidProperties[] = "invalid value for 'imageRepo', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageRepoUsername']) && (mb_strlen($this->container['imageRepoUsername']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageRepoUsername', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageRepoUsername']) && (mb_strlen($this->container['imageRepoUsername']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageRepoUsername', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageRepoUsername']) && !preg_match("/^.*$/", $this->container['imageRepoUsername'])) {
                $invalidProperties[] = "invalid value for 'imageRepoUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageRepoPassword']) && (mb_strlen($this->container['imageRepoPassword']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageRepoPassword', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageRepoPassword']) && (mb_strlen($this->container['imageRepoPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageRepoPassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageRepoPassword']) && !preg_match("/^.*$/", $this->container['imageRepoPassword'])) {
                $invalidProperties[] = "invalid value for 'imageRepoPassword', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 64)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 0)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['organization']) && !preg_match("/^.*$/", $this->container['organization'])) {
                $invalidProperties[] = "invalid value for 'organization', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageRepoType']) && (mb_strlen($this->container['imageRepoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageRepoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageRepoType']) && (mb_strlen($this->container['imageRepoType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageRepoType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageRepoType']) && !preg_match("/^harbor|quay|jfrog|other$/", $this->container['imageRepoType'])) {
                $invalidProperties[] = "invalid value for 'imageRepoType', must be conform to the pattern /^harbor|quay|jfrog|other$/.";
            }
            if (!is_null($this->container['currentExpirationDate']) && ($this->container['currentExpirationDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['currentExpirationDate']) && ($this->container['currentExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be bigger than or equal to 0.";
            }
        if ($this->container['kubeConfig'] === null) {
            $invalidProperties[] = "'kubeConfig' can't be null";
        }
            if ((mb_strlen($this->container['kubeConfig']) > 20480)) {
                $invalidProperties[] = "invalid value for 'kubeConfig', the character length must be smaller than or equal to 20480.";
            }
            if ((mb_strlen($this->container['kubeConfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'kubeConfig', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['kubeConfig'])) {
                $invalidProperties[] = "invalid value for 'kubeConfig', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageArch']) && !preg_match("/^x86|arm$/", $this->container['imageArch'])) {
                $invalidProperties[] = "invalid value for 'imageArch', must be conform to the pattern /^x86|arm$/.";
            }
            if (!is_null($this->container['anpProxy']) && (mb_strlen($this->container['anpProxy']) > 256)) {
                $invalidProperties[] = "invalid value for 'anpProxy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['anpProxy']) && (mb_strlen($this->container['anpProxy']) < 0)) {
                $invalidProperties[] = "invalid value for 'anpProxy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['anpProxy']) && !preg_match("/^.*$/", $this->container['anpProxy'])) {
                $invalidProperties[] = "invalid value for 'anpProxy', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostguardProxy']) && (mb_strlen($this->container['hostguardProxy']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostguardProxy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostguardProxy']) && (mb_strlen($this->container['hostguardProxy']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostguardProxy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostguardProxy']) && !preg_match("/^.*$/", $this->container['hostguardProxy'])) {
                $invalidProperties[] = "invalid value for 'hostguardProxy', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['dnsPolicy']) && !preg_match("/^default|clusterfirst|clusterfirstwithhostnet|none$/", $this->container['dnsPolicy'])) {
                $invalidProperties[] = "invalid value for 'dnsPolicy', must be conform to the pattern /^default|clusterfirst|clusterfirstwithhostnet|none$/.";
            }
            if (!is_null($this->container['dnsConfig']) && (mb_strlen($this->container['dnsConfig']) > 512)) {
                $invalidProperties[] = "invalid value for 'dnsConfig', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['dnsConfig']) && (mb_strlen($this->container['dnsConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dnsConfig']) && !preg_match("/^.*$/", $this->container['dnsConfig'])) {
                $invalidProperties[] = "invalid value for 'dnsConfig', must be conform to the pattern /^.*$/.";
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
    *  集群名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provider
    *  集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 集群服务商:   - ali：阿里   - tencent：腾讯   - azure：微软   - aws：亚马逊   - self_built_hw：华为自建   - self_built_idc：IDC自建
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets server
    *  集群apiserver地址
    *
    * @return string|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param string|null $server 集群apiserver地址
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets imageRepo
    *  镜像仓地址
    *
    * @return string|null
    */
    public function getImageRepo()
    {
        return $this->container['imageRepo'];
    }

    /**
    * Sets imageRepo
    *
    * @param string|null $imageRepo 镜像仓地址
    *
    * @return $this
    */
    public function setImageRepo($imageRepo)
    {
        $this->container['imageRepo'] = $imageRepo;
        return $this;
    }

    /**
    * Gets imageRepoUsername
    *  镜像仓用户名
    *
    * @return string|null
    */
    public function getImageRepoUsername()
    {
        return $this->container['imageRepoUsername'];
    }

    /**
    * Sets imageRepoUsername
    *
    * @param string|null $imageRepoUsername 镜像仓用户名
    *
    * @return $this
    */
    public function setImageRepoUsername($imageRepoUsername)
    {
        $this->container['imageRepoUsername'] = $imageRepoUsername;
        return $this;
    }

    /**
    * Gets imageRepoPassword
    *  镜像仓密码
    *
    * @return string|null
    */
    public function getImageRepoPassword()
    {
        return $this->container['imageRepoPassword'];
    }

    /**
    * Sets imageRepoPassword
    *
    * @param string|null $imageRepoPassword 镜像仓密码
    *
    * @return $this
    */
    public function setImageRepoPassword($imageRepoPassword)
    {
        $this->container['imageRepoPassword'] = $imageRepoPassword;
        return $this;
    }

    /**
    * Gets organization
    *  组织
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization 组织
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets imageRepoType
    *  镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    *
    * @return string|null
    */
    public function getImageRepoType()
    {
        return $this->container['imageRepoType'];
    }

    /**
    * Sets imageRepoType
    *
    * @param string|null $imageRepoType 镜像仓类型： - harbor Harbor镜像仓 - quay Quay镜像仓 - jfrog Jfrog镜像仓 - other 其他镜像仓
    *
    * @return $this
    */
    public function setImageRepoType($imageRepoType)
    {
        $this->container['imageRepoType'] = $imageRepoType;
        return $this;
    }

    /**
    * Gets currentExpirationDate
    *  当前有效期结束时间
    *
    * @return int|null
    */
    public function getCurrentExpirationDate()
    {
        return $this->container['currentExpirationDate'];
    }

    /**
    * Sets currentExpirationDate
    *
    * @param int|null $currentExpirationDate 当前有效期结束时间
    *
    * @return $this
    */
    public function setCurrentExpirationDate($currentExpirationDate)
    {
        $this->container['currentExpirationDate'] = $currentExpirationDate;
        return $this;
    }

    /**
    * Gets certificateExpirationDate
    *  证书有效期结束时间
    *
    * @return int|null
    */
    public function getCertificateExpirationDate()
    {
        return $this->container['certificateExpirationDate'];
    }

    /**
    * Sets certificateExpirationDate
    *
    * @param int|null $certificateExpirationDate 证书有效期结束时间
    *
    * @return $this
    */
    public function setCertificateExpirationDate($certificateExpirationDate)
    {
        $this->container['certificateExpirationDate'] = $certificateExpirationDate;
        return $this;
    }

    /**
    * Gets kubeConfig
    *  kubeconfig文件
    *
    * @return string
    */
    public function getKubeConfig()
    {
        return $this->container['kubeConfig'];
    }

    /**
    * Sets kubeConfig
    *
    * @param string $kubeConfig kubeconfig文件
    *
    * @return $this
    */
    public function setKubeConfig($kubeConfig)
    {
        $this->container['kubeConfig'] = $kubeConfig;
        return $this;
    }

    /**
    * Gets imageArch
    *  镜像架构类型： - x86 - arm
    *
    * @return string|null
    */
    public function getImageArch()
    {
        return $this->container['imageArch'];
    }

    /**
    * Sets imageArch
    *
    * @param string|null $imageArch 镜像架构类型： - x86 - arm
    *
    * @return $this
    */
    public function setImageArch($imageArch)
    {
        $this->container['imageArch'] = $imageArch;
        return $this;
    }

    /**
    * Gets anpProxy
    *  Anp代理地址
    *
    * @return string|null
    */
    public function getAnpProxy()
    {
        return $this->container['anpProxy'];
    }

    /**
    * Sets anpProxy
    *
    * @param string|null $anpProxy Anp代理地址
    *
    * @return $this
    */
    public function setAnpProxy($anpProxy)
    {
        $this->container['anpProxy'] = $anpProxy;
        return $this;
    }

    /**
    * Gets hostguardProxy
    *  Hostguard代理地址
    *
    * @return string|null
    */
    public function getHostguardProxy()
    {
        return $this->container['hostguardProxy'];
    }

    /**
    * Sets hostguardProxy
    *
    * @param string|null $hostguardProxy Hostguard代理地址
    *
    * @return $this
    */
    public function setHostguardProxy($hostguardProxy)
    {
        $this->container['hostguardProxy'] = $hostguardProxy;
        return $this;
    }

    /**
    * Gets containerName
    *  容器名称
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
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets dnsPolicy
    *  DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    *
    * @return string|null
    */
    public function getDnsPolicy()
    {
        return $this->container['dnsPolicy'];
    }

    /**
    * Sets dnsPolicy
    *
    * @param string|null $dnsPolicy DNS策略： - default：继承集群节点的域名解析配置 - clusterfirst：查询集群内部的CoreDNS服务 - clusterfirstwithhostnet：强制在hostNetwork网络模式下使用ClusterFirst策略 - none：忽略集群的DNS策略，使用自定义DNS配置
    *
    * @return $this
    */
    public function setDnsPolicy($dnsPolicy)
    {
        $this->container['dnsPolicy'] = $dnsPolicy;
        return $this;
    }

    /**
    * Gets dnsConfig
    *  自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @return string|null
    */
    public function getDnsConfig()
    {
        return $this->container['dnsConfig'];
    }

    /**
    * Sets dnsConfig
    *
    * @param string|null $dnsConfig 自定义DNS配置，一个或多个IP地址，以分号分隔
    *
    * @return $this
    */
    public function setDnsConfig($dnsConfig)
    {
        $this->container['dnsConfig'] = $dnsConfig;
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

