<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storageUsed  已用存储空间
    * totalNamespaceCount  命名空间的总数
    * totalImageCount  镜像的总数
    * namespaceQuota  命名空间的配额
    * imageRepoQuota  镜像的配额
    * replicaPolicyQuota  镜像同步策略的配额
    * retentionPolicyQuota  镜像老化策略的配额
    * notifyPolicyQuota  触发器的配额
    * replicaRegistryQuota  镜像同步的目标仓库配额
    * signPolicyQuota  镜像签名策略的配额
    * replicaPolicyCount  镜像同步策略总数
    * retentionPolicyCount  镜像老化策略的总数
    * notifyPolicyCount  触发器的总数
    * replicaRegistryCount  镜像同步策略的目标仓库总数
    * intranetEndpointQuota  内网访问控制的配额
    * intranetEndpointCount  内网访问控制的总数
    * longTermQuota  长期登录指令的配额
    * signPolicyCount  镜像签名策略的总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storageUsed' => 'int',
            'totalNamespaceCount' => 'int',
            'totalImageCount' => 'int',
            'namespaceQuota' => 'int',
            'imageRepoQuota' => 'int',
            'replicaPolicyQuota' => 'int',
            'retentionPolicyQuota' => 'int',
            'notifyPolicyQuota' => 'int',
            'replicaRegistryQuota' => 'int',
            'signPolicyQuota' => 'int',
            'replicaPolicyCount' => 'int',
            'retentionPolicyCount' => 'int',
            'notifyPolicyCount' => 'int',
            'replicaRegistryCount' => 'int',
            'intranetEndpointQuota' => 'int',
            'intranetEndpointCount' => 'int',
            'longTermQuota' => 'int',
            'signPolicyCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storageUsed  已用存储空间
    * totalNamespaceCount  命名空间的总数
    * totalImageCount  镜像的总数
    * namespaceQuota  命名空间的配额
    * imageRepoQuota  镜像的配额
    * replicaPolicyQuota  镜像同步策略的配额
    * retentionPolicyQuota  镜像老化策略的配额
    * notifyPolicyQuota  触发器的配额
    * replicaRegistryQuota  镜像同步的目标仓库配额
    * signPolicyQuota  镜像签名策略的配额
    * replicaPolicyCount  镜像同步策略总数
    * retentionPolicyCount  镜像老化策略的总数
    * notifyPolicyCount  触发器的总数
    * replicaRegistryCount  镜像同步策略的目标仓库总数
    * intranetEndpointQuota  内网访问控制的配额
    * intranetEndpointCount  内网访问控制的总数
    * longTermQuota  长期登录指令的配额
    * signPolicyCount  镜像签名策略的总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storageUsed' => 'int64',
        'totalNamespaceCount' => 'int64',
        'totalImageCount' => 'int64',
        'namespaceQuota' => 'int64',
        'imageRepoQuota' => 'int64',
        'replicaPolicyQuota' => 'int64',
        'retentionPolicyQuota' => 'int64',
        'notifyPolicyQuota' => 'int64',
        'replicaRegistryQuota' => 'int64',
        'signPolicyQuota' => 'int64',
        'replicaPolicyCount' => 'int64',
        'retentionPolicyCount' => 'int64',
        'notifyPolicyCount' => 'int64',
        'replicaRegistryCount' => 'int64',
        'intranetEndpointQuota' => null,
        'intranetEndpointCount' => null,
        'longTermQuota' => null,
        'signPolicyCount' => 'int64'
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
    * storageUsed  已用存储空间
    * totalNamespaceCount  命名空间的总数
    * totalImageCount  镜像的总数
    * namespaceQuota  命名空间的配额
    * imageRepoQuota  镜像的配额
    * replicaPolicyQuota  镜像同步策略的配额
    * retentionPolicyQuota  镜像老化策略的配额
    * notifyPolicyQuota  触发器的配额
    * replicaRegistryQuota  镜像同步的目标仓库配额
    * signPolicyQuota  镜像签名策略的配额
    * replicaPolicyCount  镜像同步策略总数
    * retentionPolicyCount  镜像老化策略的总数
    * notifyPolicyCount  触发器的总数
    * replicaRegistryCount  镜像同步策略的目标仓库总数
    * intranetEndpointQuota  内网访问控制的配额
    * intranetEndpointCount  内网访问控制的总数
    * longTermQuota  长期登录指令的配额
    * signPolicyCount  镜像签名策略的总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storageUsed' => 'storage_used',
            'totalNamespaceCount' => 'total_namespace_count',
            'totalImageCount' => 'total_image_count',
            'namespaceQuota' => 'namespace_quota',
            'imageRepoQuota' => 'image_repo_quota',
            'replicaPolicyQuota' => 'replica_policy_quota',
            'retentionPolicyQuota' => 'retention_policy_quota',
            'notifyPolicyQuota' => 'notify_policy_quota',
            'replicaRegistryQuota' => 'replica_registry_quota',
            'signPolicyQuota' => 'sign_policy_quota',
            'replicaPolicyCount' => 'replica_policy_count',
            'retentionPolicyCount' => 'retention_policy_count',
            'notifyPolicyCount' => 'notify_policy_count',
            'replicaRegistryCount' => 'replica_registry_count',
            'intranetEndpointQuota' => 'intranet_endpoint_quota',
            'intranetEndpointCount' => 'intranet_endpoint_count',
            'longTermQuota' => 'long_term_quota',
            'signPolicyCount' => 'sign_policy_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storageUsed  已用存储空间
    * totalNamespaceCount  命名空间的总数
    * totalImageCount  镜像的总数
    * namespaceQuota  命名空间的配额
    * imageRepoQuota  镜像的配额
    * replicaPolicyQuota  镜像同步策略的配额
    * retentionPolicyQuota  镜像老化策略的配额
    * notifyPolicyQuota  触发器的配额
    * replicaRegistryQuota  镜像同步的目标仓库配额
    * signPolicyQuota  镜像签名策略的配额
    * replicaPolicyCount  镜像同步策略总数
    * retentionPolicyCount  镜像老化策略的总数
    * notifyPolicyCount  触发器的总数
    * replicaRegistryCount  镜像同步策略的目标仓库总数
    * intranetEndpointQuota  内网访问控制的配额
    * intranetEndpointCount  内网访问控制的总数
    * longTermQuota  长期登录指令的配额
    * signPolicyCount  镜像签名策略的总数
    *
    * @var string[]
    */
    protected static $setters = [
            'storageUsed' => 'setStorageUsed',
            'totalNamespaceCount' => 'setTotalNamespaceCount',
            'totalImageCount' => 'setTotalImageCount',
            'namespaceQuota' => 'setNamespaceQuota',
            'imageRepoQuota' => 'setImageRepoQuota',
            'replicaPolicyQuota' => 'setReplicaPolicyQuota',
            'retentionPolicyQuota' => 'setRetentionPolicyQuota',
            'notifyPolicyQuota' => 'setNotifyPolicyQuota',
            'replicaRegistryQuota' => 'setReplicaRegistryQuota',
            'signPolicyQuota' => 'setSignPolicyQuota',
            'replicaPolicyCount' => 'setReplicaPolicyCount',
            'retentionPolicyCount' => 'setRetentionPolicyCount',
            'notifyPolicyCount' => 'setNotifyPolicyCount',
            'replicaRegistryCount' => 'setReplicaRegistryCount',
            'intranetEndpointQuota' => 'setIntranetEndpointQuota',
            'intranetEndpointCount' => 'setIntranetEndpointCount',
            'longTermQuota' => 'setLongTermQuota',
            'signPolicyCount' => 'setSignPolicyCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storageUsed  已用存储空间
    * totalNamespaceCount  命名空间的总数
    * totalImageCount  镜像的总数
    * namespaceQuota  命名空间的配额
    * imageRepoQuota  镜像的配额
    * replicaPolicyQuota  镜像同步策略的配额
    * retentionPolicyQuota  镜像老化策略的配额
    * notifyPolicyQuota  触发器的配额
    * replicaRegistryQuota  镜像同步的目标仓库配额
    * signPolicyQuota  镜像签名策略的配额
    * replicaPolicyCount  镜像同步策略总数
    * retentionPolicyCount  镜像老化策略的总数
    * notifyPolicyCount  触发器的总数
    * replicaRegistryCount  镜像同步策略的目标仓库总数
    * intranetEndpointQuota  内网访问控制的配额
    * intranetEndpointCount  内网访问控制的总数
    * longTermQuota  长期登录指令的配额
    * signPolicyCount  镜像签名策略的总数
    *
    * @var string[]
    */
    protected static $getters = [
            'storageUsed' => 'getStorageUsed',
            'totalNamespaceCount' => 'getTotalNamespaceCount',
            'totalImageCount' => 'getTotalImageCount',
            'namespaceQuota' => 'getNamespaceQuota',
            'imageRepoQuota' => 'getImageRepoQuota',
            'replicaPolicyQuota' => 'getReplicaPolicyQuota',
            'retentionPolicyQuota' => 'getRetentionPolicyQuota',
            'notifyPolicyQuota' => 'getNotifyPolicyQuota',
            'replicaRegistryQuota' => 'getReplicaRegistryQuota',
            'signPolicyQuota' => 'getSignPolicyQuota',
            'replicaPolicyCount' => 'getReplicaPolicyCount',
            'retentionPolicyCount' => 'getRetentionPolicyCount',
            'notifyPolicyCount' => 'getNotifyPolicyCount',
            'replicaRegistryCount' => 'getReplicaRegistryCount',
            'intranetEndpointQuota' => 'getIntranetEndpointQuota',
            'intranetEndpointCount' => 'getIntranetEndpointCount',
            'longTermQuota' => 'getLongTermQuota',
            'signPolicyCount' => 'getSignPolicyCount'
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
        $this->container['storageUsed'] = isset($data['storageUsed']) ? $data['storageUsed'] : null;
        $this->container['totalNamespaceCount'] = isset($data['totalNamespaceCount']) ? $data['totalNamespaceCount'] : null;
        $this->container['totalImageCount'] = isset($data['totalImageCount']) ? $data['totalImageCount'] : null;
        $this->container['namespaceQuota'] = isset($data['namespaceQuota']) ? $data['namespaceQuota'] : null;
        $this->container['imageRepoQuota'] = isset($data['imageRepoQuota']) ? $data['imageRepoQuota'] : null;
        $this->container['replicaPolicyQuota'] = isset($data['replicaPolicyQuota']) ? $data['replicaPolicyQuota'] : null;
        $this->container['retentionPolicyQuota'] = isset($data['retentionPolicyQuota']) ? $data['retentionPolicyQuota'] : null;
        $this->container['notifyPolicyQuota'] = isset($data['notifyPolicyQuota']) ? $data['notifyPolicyQuota'] : null;
        $this->container['replicaRegistryQuota'] = isset($data['replicaRegistryQuota']) ? $data['replicaRegistryQuota'] : null;
        $this->container['signPolicyQuota'] = isset($data['signPolicyQuota']) ? $data['signPolicyQuota'] : null;
        $this->container['replicaPolicyCount'] = isset($data['replicaPolicyCount']) ? $data['replicaPolicyCount'] : null;
        $this->container['retentionPolicyCount'] = isset($data['retentionPolicyCount']) ? $data['retentionPolicyCount'] : null;
        $this->container['notifyPolicyCount'] = isset($data['notifyPolicyCount']) ? $data['notifyPolicyCount'] : null;
        $this->container['replicaRegistryCount'] = isset($data['replicaRegistryCount']) ? $data['replicaRegistryCount'] : null;
        $this->container['intranetEndpointQuota'] = isset($data['intranetEndpointQuota']) ? $data['intranetEndpointQuota'] : null;
        $this->container['intranetEndpointCount'] = isset($data['intranetEndpointCount']) ? $data['intranetEndpointCount'] : null;
        $this->container['longTermQuota'] = isset($data['longTermQuota']) ? $data['longTermQuota'] : null;
        $this->container['signPolicyCount'] = isset($data['signPolicyCount']) ? $data['signPolicyCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets storageUsed
    *  已用存储空间
    *
    * @return int|null
    */
    public function getStorageUsed()
    {
        return $this->container['storageUsed'];
    }

    /**
    * Sets storageUsed
    *
    * @param int|null $storageUsed 已用存储空间
    *
    * @return $this
    */
    public function setStorageUsed($storageUsed)
    {
        $this->container['storageUsed'] = $storageUsed;
        return $this;
    }

    /**
    * Gets totalNamespaceCount
    *  命名空间的总数
    *
    * @return int|null
    */
    public function getTotalNamespaceCount()
    {
        return $this->container['totalNamespaceCount'];
    }

    /**
    * Sets totalNamespaceCount
    *
    * @param int|null $totalNamespaceCount 命名空间的总数
    *
    * @return $this
    */
    public function setTotalNamespaceCount($totalNamespaceCount)
    {
        $this->container['totalNamespaceCount'] = $totalNamespaceCount;
        return $this;
    }

    /**
    * Gets totalImageCount
    *  镜像的总数
    *
    * @return int|null
    */
    public function getTotalImageCount()
    {
        return $this->container['totalImageCount'];
    }

    /**
    * Sets totalImageCount
    *
    * @param int|null $totalImageCount 镜像的总数
    *
    * @return $this
    */
    public function setTotalImageCount($totalImageCount)
    {
        $this->container['totalImageCount'] = $totalImageCount;
        return $this;
    }

    /**
    * Gets namespaceQuota
    *  命名空间的配额
    *
    * @return int|null
    */
    public function getNamespaceQuota()
    {
        return $this->container['namespaceQuota'];
    }

    /**
    * Sets namespaceQuota
    *
    * @param int|null $namespaceQuota 命名空间的配额
    *
    * @return $this
    */
    public function setNamespaceQuota($namespaceQuota)
    {
        $this->container['namespaceQuota'] = $namespaceQuota;
        return $this;
    }

    /**
    * Gets imageRepoQuota
    *  镜像的配额
    *
    * @return int|null
    */
    public function getImageRepoQuota()
    {
        return $this->container['imageRepoQuota'];
    }

    /**
    * Sets imageRepoQuota
    *
    * @param int|null $imageRepoQuota 镜像的配额
    *
    * @return $this
    */
    public function setImageRepoQuota($imageRepoQuota)
    {
        $this->container['imageRepoQuota'] = $imageRepoQuota;
        return $this;
    }

    /**
    * Gets replicaPolicyQuota
    *  镜像同步策略的配额
    *
    * @return int|null
    */
    public function getReplicaPolicyQuota()
    {
        return $this->container['replicaPolicyQuota'];
    }

    /**
    * Sets replicaPolicyQuota
    *
    * @param int|null $replicaPolicyQuota 镜像同步策略的配额
    *
    * @return $this
    */
    public function setReplicaPolicyQuota($replicaPolicyQuota)
    {
        $this->container['replicaPolicyQuota'] = $replicaPolicyQuota;
        return $this;
    }

    /**
    * Gets retentionPolicyQuota
    *  镜像老化策略的配额
    *
    * @return int|null
    */
    public function getRetentionPolicyQuota()
    {
        return $this->container['retentionPolicyQuota'];
    }

    /**
    * Sets retentionPolicyQuota
    *
    * @param int|null $retentionPolicyQuota 镜像老化策略的配额
    *
    * @return $this
    */
    public function setRetentionPolicyQuota($retentionPolicyQuota)
    {
        $this->container['retentionPolicyQuota'] = $retentionPolicyQuota;
        return $this;
    }

    /**
    * Gets notifyPolicyQuota
    *  触发器的配额
    *
    * @return int|null
    */
    public function getNotifyPolicyQuota()
    {
        return $this->container['notifyPolicyQuota'];
    }

    /**
    * Sets notifyPolicyQuota
    *
    * @param int|null $notifyPolicyQuota 触发器的配额
    *
    * @return $this
    */
    public function setNotifyPolicyQuota($notifyPolicyQuota)
    {
        $this->container['notifyPolicyQuota'] = $notifyPolicyQuota;
        return $this;
    }

    /**
    * Gets replicaRegistryQuota
    *  镜像同步的目标仓库配额
    *
    * @return int|null
    */
    public function getReplicaRegistryQuota()
    {
        return $this->container['replicaRegistryQuota'];
    }

    /**
    * Sets replicaRegistryQuota
    *
    * @param int|null $replicaRegistryQuota 镜像同步的目标仓库配额
    *
    * @return $this
    */
    public function setReplicaRegistryQuota($replicaRegistryQuota)
    {
        $this->container['replicaRegistryQuota'] = $replicaRegistryQuota;
        return $this;
    }

    /**
    * Gets signPolicyQuota
    *  镜像签名策略的配额
    *
    * @return int|null
    */
    public function getSignPolicyQuota()
    {
        return $this->container['signPolicyQuota'];
    }

    /**
    * Sets signPolicyQuota
    *
    * @param int|null $signPolicyQuota 镜像签名策略的配额
    *
    * @return $this
    */
    public function setSignPolicyQuota($signPolicyQuota)
    {
        $this->container['signPolicyQuota'] = $signPolicyQuota;
        return $this;
    }

    /**
    * Gets replicaPolicyCount
    *  镜像同步策略总数
    *
    * @return int|null
    */
    public function getReplicaPolicyCount()
    {
        return $this->container['replicaPolicyCount'];
    }

    /**
    * Sets replicaPolicyCount
    *
    * @param int|null $replicaPolicyCount 镜像同步策略总数
    *
    * @return $this
    */
    public function setReplicaPolicyCount($replicaPolicyCount)
    {
        $this->container['replicaPolicyCount'] = $replicaPolicyCount;
        return $this;
    }

    /**
    * Gets retentionPolicyCount
    *  镜像老化策略的总数
    *
    * @return int|null
    */
    public function getRetentionPolicyCount()
    {
        return $this->container['retentionPolicyCount'];
    }

    /**
    * Sets retentionPolicyCount
    *
    * @param int|null $retentionPolicyCount 镜像老化策略的总数
    *
    * @return $this
    */
    public function setRetentionPolicyCount($retentionPolicyCount)
    {
        $this->container['retentionPolicyCount'] = $retentionPolicyCount;
        return $this;
    }

    /**
    * Gets notifyPolicyCount
    *  触发器的总数
    *
    * @return int|null
    */
    public function getNotifyPolicyCount()
    {
        return $this->container['notifyPolicyCount'];
    }

    /**
    * Sets notifyPolicyCount
    *
    * @param int|null $notifyPolicyCount 触发器的总数
    *
    * @return $this
    */
    public function setNotifyPolicyCount($notifyPolicyCount)
    {
        $this->container['notifyPolicyCount'] = $notifyPolicyCount;
        return $this;
    }

    /**
    * Gets replicaRegistryCount
    *  镜像同步策略的目标仓库总数
    *
    * @return int|null
    */
    public function getReplicaRegistryCount()
    {
        return $this->container['replicaRegistryCount'];
    }

    /**
    * Sets replicaRegistryCount
    *
    * @param int|null $replicaRegistryCount 镜像同步策略的目标仓库总数
    *
    * @return $this
    */
    public function setReplicaRegistryCount($replicaRegistryCount)
    {
        $this->container['replicaRegistryCount'] = $replicaRegistryCount;
        return $this;
    }

    /**
    * Gets intranetEndpointQuota
    *  内网访问控制的配额
    *
    * @return int|null
    */
    public function getIntranetEndpointQuota()
    {
        return $this->container['intranetEndpointQuota'];
    }

    /**
    * Sets intranetEndpointQuota
    *
    * @param int|null $intranetEndpointQuota 内网访问控制的配额
    *
    * @return $this
    */
    public function setIntranetEndpointQuota($intranetEndpointQuota)
    {
        $this->container['intranetEndpointQuota'] = $intranetEndpointQuota;
        return $this;
    }

    /**
    * Gets intranetEndpointCount
    *  内网访问控制的总数
    *
    * @return int|null
    */
    public function getIntranetEndpointCount()
    {
        return $this->container['intranetEndpointCount'];
    }

    /**
    * Sets intranetEndpointCount
    *
    * @param int|null $intranetEndpointCount 内网访问控制的总数
    *
    * @return $this
    */
    public function setIntranetEndpointCount($intranetEndpointCount)
    {
        $this->container['intranetEndpointCount'] = $intranetEndpointCount;
        return $this;
    }

    /**
    * Gets longTermQuota
    *  长期登录指令的配额
    *
    * @return int|null
    */
    public function getLongTermQuota()
    {
        return $this->container['longTermQuota'];
    }

    /**
    * Sets longTermQuota
    *
    * @param int|null $longTermQuota 长期登录指令的配额
    *
    * @return $this
    */
    public function setLongTermQuota($longTermQuota)
    {
        $this->container['longTermQuota'] = $longTermQuota;
        return $this;
    }

    /**
    * Gets signPolicyCount
    *  镜像签名策略的总数
    *
    * @return int|null
    */
    public function getSignPolicyCount()
    {
        return $this->container['signPolicyCount'];
    }

    /**
    * Sets signPolicyCount
    *
    * @param int|null $signPolicyCount 镜像签名策略的总数
    *
    * @return $this
    */
    public function setSignPolicyCount($signPolicyCount)
    {
        $this->container['signPolicyCount'] = $signPolicyCount;
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

