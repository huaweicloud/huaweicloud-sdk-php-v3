<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiCloudClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiCloudClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * provider  集群服务商
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * status  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    * version  anp-agent的版本
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'provider' => 'string',
            'server' => 'string',
            'imageRepo' => 'string',
            'status' => 'string',
            'version' => 'string',
            'currentExpirationDate' => 'int',
            'certificateExpirationDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * provider  集群服务商
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * status  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    * version  anp-agent的版本
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'provider' => null,
        'server' => null,
        'imageRepo' => null,
        'status' => null,
        'version' => null,
        'currentExpirationDate' => 'int64',
        'certificateExpirationDate' => 'int64'
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
    * clusterId  集群id
    * clusterName  集群名称
    * provider  集群服务商
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * status  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    * version  anp-agent的版本
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'provider' => 'provider',
            'server' => 'server',
            'imageRepo' => 'image_repo',
            'status' => 'status',
            'version' => 'version',
            'currentExpirationDate' => 'current_expiration_date',
            'certificateExpirationDate' => 'certificate_expiration_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * provider  集群服务商
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * status  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    * version  anp-agent的版本
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'provider' => 'setProvider',
            'server' => 'setServer',
            'imageRepo' => 'setImageRepo',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'currentExpirationDate' => 'setCurrentExpirationDate',
            'certificateExpirationDate' => 'setCertificateExpirationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * provider  集群服务商
    * server  集群apiserver地址
    * imageRepo  镜像仓地址
    * status  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    * version  anp-agent的版本
    * currentExpirationDate  当前有效期结束时间
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'provider' => 'getProvider',
            'server' => 'getServer',
            'imageRepo' => 'getImageRepo',
            'status' => 'getStatus',
            'version' => 'getVersion',
            'currentExpirationDate' => 'getCurrentExpirationDate',
            'certificateExpirationDate' => 'getCertificateExpirationDate'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['imageRepo'] = isset($data['imageRepo']) ? $data['imageRepo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['currentExpirationDate'] = isset($data['currentExpirationDate']) ? $data['currentExpirationDate'] : null;
        $this->container['certificateExpirationDate'] = isset($data['certificateExpirationDate']) ? $data['certificateExpirationDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 255)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 1)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) > 128)) {
                $invalidProperties[] = "invalid value for 'server', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) < 1)) {
                $invalidProperties[] = "invalid value for 'server', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageRepo']) && (mb_strlen($this->container['imageRepo']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageRepo']) && (mb_strlen($this->container['imageRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentExpirationDate']) && ($this->container['currentExpirationDate'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['currentExpirationDate']) && ($this->container['currentExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be bigger than or equal to 0.";
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
    * Gets clusterId
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets provider
    *  集群服务商
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
    * @param string|null $provider 集群服务商
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
    * Gets status
    *  **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** anp-agent的连接状态 **取值范围**   - not_connect：未连接。   - connect_success：连接成功。   - connect_fail：连接失败。   - connect_disruption：连接中断。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  anp-agent的版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version anp-agent的版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

