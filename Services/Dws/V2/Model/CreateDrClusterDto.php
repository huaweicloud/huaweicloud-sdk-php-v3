<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDrClusterDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDrClusterDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    * gatewayIp  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    * internalIps  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    * endpoint  **参数解释**： 域名。 **取值范围**： 不涉及。
    * dbAdminPwd  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    * disasterRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * kernelVersion  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'clusterId' => 'string',
            'cidr' => 'string',
            'gatewayIp' => 'string',
            'internalIps' => 'string',
            'privateIps' => 'string',
            'endpoint' => 'string',
            'dbAdminPwd' => 'string',
            'disasterRecoveryId' => 'string',
            'kernelVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    * gatewayIp  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    * internalIps  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    * endpoint  **参数解释**： 域名。 **取值范围**： 不涉及。
    * dbAdminPwd  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    * disasterRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * kernelVersion  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'clusterId' => null,
        'cidr' => null,
        'gatewayIp' => null,
        'internalIps' => null,
        'privateIps' => null,
        'endpoint' => null,
        'dbAdminPwd' => null,
        'disasterRecoveryId' => null,
        'kernelVersion' => null
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
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    * gatewayIp  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    * internalIps  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    * endpoint  **参数解释**： 域名。 **取值范围**： 不涉及。
    * dbAdminPwd  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    * disasterRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * kernelVersion  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'cidr' => 'cidr',
            'gatewayIp' => 'gateway_ip',
            'internalIps' => 'internal_ips',
            'privateIps' => 'private_ips',
            'endpoint' => 'endpoint',
            'dbAdminPwd' => 'db_admin_pwd',
            'disasterRecoveryId' => 'disaster_recovery_id',
            'kernelVersion' => 'kernel_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    * gatewayIp  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    * internalIps  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    * endpoint  **参数解释**： 域名。 **取值范围**： 不涉及。
    * dbAdminPwd  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    * disasterRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * kernelVersion  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'cidr' => 'setCidr',
            'gatewayIp' => 'setGatewayIp',
            'internalIps' => 'setInternalIps',
            'privateIps' => 'setPrivateIps',
            'endpoint' => 'setEndpoint',
            'dbAdminPwd' => 'setDbAdminPwd',
            'disasterRecoveryId' => 'setDisasterRecoveryId',
            'kernelVersion' => 'setKernelVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    * gatewayIp  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    * internalIps  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    * endpoint  **参数解释**： 域名。 **取值范围**： 不涉及。
    * dbAdminPwd  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    * disasterRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * kernelVersion  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'cidr' => 'getCidr',
            'gatewayIp' => 'getGatewayIp',
            'internalIps' => 'getInternalIps',
            'privateIps' => 'getPrivateIps',
            'endpoint' => 'getEndpoint',
            'dbAdminPwd' => 'getDbAdminPwd',
            'disasterRecoveryId' => 'getDisasterRecoveryId',
            'kernelVersion' => 'getKernelVersion'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['internalIps'] = isset($data['internalIps']) ? $data['internalIps'] : null;
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['dbAdminPwd'] = isset($data['dbAdminPwd']) ? $data['dbAdminPwd'] : null;
        $this->container['disasterRecoveryId'] = isset($data['disasterRecoveryId']) ? $data['disasterRecoveryId'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
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
    * Gets clusterName
    *  **参数解释**： 集群名称。 **取值范围**： 不涉及。
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
    * @param string|null $clusterName **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 不涉及。
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
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets cidr
    *  **参数解释**： 子网的网段。 **取值范围**： 不涉及。
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
    * @param string|null $cidr **参数解释**： 子网的网段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string|null $gatewayIp **参数解释**： 子网的网关。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets internalIps
    *  **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInternalIps()
    {
        return $this->container['internalIps'];
    }

    /**
    * Sets internalIps
    *
    * @param string|null $internalIps **参数解释**： 主网卡IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInternalIps($internalIps)
    {
        $this->container['internalIps'] = $internalIps;
        return $this;
    }

    /**
    * Gets privateIps
    *  **参数解释**： 内网IP。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param string|null $privateIps **参数解释**： 内网IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets endpoint
    *  **参数解释**： 域名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint **参数解释**： 域名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets dbAdminPwd
    *  **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbAdminPwd()
    {
        return $this->container['dbAdminPwd'];
    }

    /**
    * Sets dbAdminPwd
    *
    * @param string|null $dbAdminPwd **参数解释**： 数据库管理员密码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbAdminPwd($dbAdminPwd)
    {
        $this->container['dbAdminPwd'] = $dbAdminPwd;
        return $this;
    }

    /**
    * Gets disasterRecoveryId
    *  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisasterRecoveryId()
    {
        return $this->container['disasterRecoveryId'];
    }

    /**
    * Sets disasterRecoveryId
    *
    * @param string|null $disasterRecoveryId **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisasterRecoveryId($disasterRecoveryId)
    {
        $this->container['disasterRecoveryId'] = $disasterRecoveryId;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion **参数解释**： 内核的版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
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

