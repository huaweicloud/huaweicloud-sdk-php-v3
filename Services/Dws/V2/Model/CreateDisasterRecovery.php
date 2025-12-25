<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDisasterRecovery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDisasterRecovery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    * primaryClusterId  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    * standbyClusterId  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    * drSyncPeriod  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    * primaryObsBucket  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    * standbyObsBucket  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    * discoveryRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * primaryClusterRegion  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    * standbyClusterRegion  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    * primaryClusterProjectId  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    * standbyClusterProjectId  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    * clusterRole  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    * primaryClusterInfo  primaryClusterInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'drType' => 'string',
            'primaryClusterId' => 'string',
            'standbyClusterId' => 'string',
            'drSyncPeriod' => 'string',
            'primaryObsBucket' => 'string',
            'standbyObsBucket' => 'string',
            'discoveryRecoveryId' => 'string',
            'primaryClusterRegion' => 'string',
            'standbyClusterRegion' => 'string',
            'primaryClusterProjectId' => 'string',
            'standbyClusterProjectId' => 'string',
            'clusterRole' => 'string',
            'primaryClusterInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\CreateDrClusterDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    * primaryClusterId  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    * standbyClusterId  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    * drSyncPeriod  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    * primaryObsBucket  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    * standbyObsBucket  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    * discoveryRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * primaryClusterRegion  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    * standbyClusterRegion  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    * primaryClusterProjectId  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    * standbyClusterProjectId  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    * clusterRole  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    * primaryClusterInfo  primaryClusterInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'drType' => null,
        'primaryClusterId' => null,
        'standbyClusterId' => null,
        'drSyncPeriod' => null,
        'primaryObsBucket' => null,
        'standbyObsBucket' => null,
        'discoveryRecoveryId' => null,
        'primaryClusterRegion' => null,
        'standbyClusterRegion' => null,
        'primaryClusterProjectId' => null,
        'standbyClusterProjectId' => null,
        'clusterRole' => null,
        'primaryClusterInfo' => null
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
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    * primaryClusterId  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    * standbyClusterId  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    * drSyncPeriod  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    * primaryObsBucket  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    * standbyObsBucket  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    * discoveryRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * primaryClusterRegion  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    * standbyClusterRegion  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    * primaryClusterProjectId  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    * standbyClusterProjectId  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    * clusterRole  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    * primaryClusterInfo  primaryClusterInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'drType' => 'dr_type',
            'primaryClusterId' => 'primary_cluster_id',
            'standbyClusterId' => 'standby_cluster_id',
            'drSyncPeriod' => 'dr_sync_period',
            'primaryObsBucket' => 'primary_obs_bucket',
            'standbyObsBucket' => 'standby_obs_bucket',
            'discoveryRecoveryId' => 'discovery_recovery_id',
            'primaryClusterRegion' => 'primary_cluster_region',
            'standbyClusterRegion' => 'standby_cluster_region',
            'primaryClusterProjectId' => 'primary_cluster_project_id',
            'standbyClusterProjectId' => 'standby_cluster_project_id',
            'clusterRole' => 'cluster_role',
            'primaryClusterInfo' => 'primary_cluster_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    * primaryClusterId  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    * standbyClusterId  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    * drSyncPeriod  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    * primaryObsBucket  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    * standbyObsBucket  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    * discoveryRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * primaryClusterRegion  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    * standbyClusterRegion  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    * primaryClusterProjectId  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    * standbyClusterProjectId  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    * clusterRole  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    * primaryClusterInfo  primaryClusterInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'drType' => 'setDrType',
            'primaryClusterId' => 'setPrimaryClusterId',
            'standbyClusterId' => 'setStandbyClusterId',
            'drSyncPeriod' => 'setDrSyncPeriod',
            'primaryObsBucket' => 'setPrimaryObsBucket',
            'standbyObsBucket' => 'setStandbyObsBucket',
            'discoveryRecoveryId' => 'setDiscoveryRecoveryId',
            'primaryClusterRegion' => 'setPrimaryClusterRegion',
            'standbyClusterRegion' => 'setStandbyClusterRegion',
            'primaryClusterProjectId' => 'setPrimaryClusterProjectId',
            'standbyClusterProjectId' => 'setStandbyClusterProjectId',
            'clusterRole' => 'setClusterRole',
            'primaryClusterInfo' => 'setPrimaryClusterInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    * primaryClusterId  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    * standbyClusterId  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    * drSyncPeriod  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    * primaryObsBucket  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    * standbyObsBucket  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    * discoveryRecoveryId  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    * primaryClusterRegion  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    * standbyClusterRegion  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    * primaryClusterProjectId  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    * standbyClusterProjectId  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    * clusterRole  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    * primaryClusterInfo  primaryClusterInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'drType' => 'getDrType',
            'primaryClusterId' => 'getPrimaryClusterId',
            'standbyClusterId' => 'getStandbyClusterId',
            'drSyncPeriod' => 'getDrSyncPeriod',
            'primaryObsBucket' => 'getPrimaryObsBucket',
            'standbyObsBucket' => 'getStandbyObsBucket',
            'discoveryRecoveryId' => 'getDiscoveryRecoveryId',
            'primaryClusterRegion' => 'getPrimaryClusterRegion',
            'standbyClusterRegion' => 'getStandbyClusterRegion',
            'primaryClusterProjectId' => 'getPrimaryClusterProjectId',
            'standbyClusterProjectId' => 'getStandbyClusterProjectId',
            'clusterRole' => 'getClusterRole',
            'primaryClusterInfo' => 'getPrimaryClusterInfo'
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
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['primaryClusterId'] = isset($data['primaryClusterId']) ? $data['primaryClusterId'] : null;
        $this->container['standbyClusterId'] = isset($data['standbyClusterId']) ? $data['standbyClusterId'] : null;
        $this->container['drSyncPeriod'] = isset($data['drSyncPeriod']) ? $data['drSyncPeriod'] : null;
        $this->container['primaryObsBucket'] = isset($data['primaryObsBucket']) ? $data['primaryObsBucket'] : null;
        $this->container['standbyObsBucket'] = isset($data['standbyObsBucket']) ? $data['standbyObsBucket'] : null;
        $this->container['discoveryRecoveryId'] = isset($data['discoveryRecoveryId']) ? $data['discoveryRecoveryId'] : null;
        $this->container['primaryClusterRegion'] = isset($data['primaryClusterRegion']) ? $data['primaryClusterRegion'] : null;
        $this->container['standbyClusterRegion'] = isset($data['standbyClusterRegion']) ? $data['standbyClusterRegion'] : null;
        $this->container['primaryClusterProjectId'] = isset($data['primaryClusterProjectId']) ? $data['primaryClusterProjectId'] : null;
        $this->container['standbyClusterProjectId'] = isset($data['standbyClusterProjectId']) ? $data['standbyClusterProjectId'] : null;
        $this->container['clusterRole'] = isset($data['clusterRole']) ? $data['clusterRole'] : null;
        $this->container['primaryClusterInfo'] = isset($data['primaryClusterInfo']) ? $data['primaryClusterInfo'] : null;
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
        if ($this->container['drType'] === null) {
            $invalidProperties[] = "'drType' can't be null";
        }
        if ($this->container['primaryClusterId'] === null) {
            $invalidProperties[] = "'primaryClusterId' can't be null";
        }
        if ($this->container['standbyClusterId'] === null) {
            $invalidProperties[] = "'standbyClusterId' can't be null";
        }
        if ($this->container['drSyncPeriod'] === null) {
            $invalidProperties[] = "'drSyncPeriod' can't be null";
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
    *  **参数解释**： 名称。 **取值范围**： 不涉及。
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
    * @param string $name **参数解释**： 名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets drType
    *  **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    *
    * @return string
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string $drType **参数解释**： 容灾类型。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets primaryClusterId
    *  **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getPrimaryClusterId()
    {
        return $this->container['primaryClusterId'];
    }

    /**
    * Sets primaryClusterId
    *
    * @param string $primaryClusterId **参数解释**： 主集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrimaryClusterId($primaryClusterId)
    {
        $this->container['primaryClusterId'] = $primaryClusterId;
        return $this;
    }

    /**
    * Gets standbyClusterId
    *  **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getStandbyClusterId()
    {
        return $this->container['standbyClusterId'];
    }

    /**
    * Sets standbyClusterId
    *
    * @param string $standbyClusterId **参数解释**： 备集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyClusterId($standbyClusterId)
    {
        $this->container['standbyClusterId'] = $standbyClusterId;
        return $this;
    }

    /**
    * Gets drSyncPeriod
    *  **参数解释**： 同步周期。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDrSyncPeriod()
    {
        return $this->container['drSyncPeriod'];
    }

    /**
    * Sets drSyncPeriod
    *
    * @param string $drSyncPeriod **参数解释**： 同步周期。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDrSyncPeriod($drSyncPeriod)
    {
        $this->container['drSyncPeriod'] = $drSyncPeriod;
        return $this;
    }

    /**
    * Gets primaryObsBucket
    *  **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPrimaryObsBucket()
    {
        return $this->container['primaryObsBucket'];
    }

    /**
    * Sets primaryObsBucket
    *
    * @param string|null $primaryObsBucket **参数解释**： 主集群OBS桶。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrimaryObsBucket($primaryObsBucket)
    {
        $this->container['primaryObsBucket'] = $primaryObsBucket;
        return $this;
    }

    /**
    * Gets standbyObsBucket
    *  **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStandbyObsBucket()
    {
        return $this->container['standbyObsBucket'];
    }

    /**
    * Sets standbyObsBucket
    *
    * @param string|null $standbyObsBucket **参数解释**： 备集群obs桶。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyObsBucket($standbyObsBucket)
    {
        $this->container['standbyObsBucket'] = $standbyObsBucket;
        return $this;
    }

    /**
    * Gets discoveryRecoveryId
    *  **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiscoveryRecoveryId()
    {
        return $this->container['discoveryRecoveryId'];
    }

    /**
    * Sets discoveryRecoveryId
    *
    * @param string|null $discoveryRecoveryId **参数解释**： 容灾ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiscoveryRecoveryId($discoveryRecoveryId)
    {
        $this->container['discoveryRecoveryId'] = $discoveryRecoveryId;
        return $this;
    }

    /**
    * Gets primaryClusterRegion
    *  **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPrimaryClusterRegion()
    {
        return $this->container['primaryClusterRegion'];
    }

    /**
    * Sets primaryClusterRegion
    *
    * @param string|null $primaryClusterRegion **参数解释**： 容灾主Region。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrimaryClusterRegion($primaryClusterRegion)
    {
        $this->container['primaryClusterRegion'] = $primaryClusterRegion;
        return $this;
    }

    /**
    * Gets standbyClusterRegion
    *  **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStandbyClusterRegion()
    {
        return $this->container['standbyClusterRegion'];
    }

    /**
    * Sets standbyClusterRegion
    *
    * @param string|null $standbyClusterRegion **参数解释**： 容灾备Region。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyClusterRegion($standbyClusterRegion)
    {
        $this->container['standbyClusterRegion'] = $standbyClusterRegion;
        return $this;
    }

    /**
    * Gets primaryClusterProjectId
    *  **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPrimaryClusterProjectId()
    {
        return $this->container['primaryClusterProjectId'];
    }

    /**
    * Sets primaryClusterProjectId
    *
    * @param string|null $primaryClusterProjectId **参数解释**： 容灾主集群项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrimaryClusterProjectId($primaryClusterProjectId)
    {
        $this->container['primaryClusterProjectId'] = $primaryClusterProjectId;
        return $this;
    }

    /**
    * Gets standbyClusterProjectId
    *  **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStandbyClusterProjectId()
    {
        return $this->container['standbyClusterProjectId'];
    }

    /**
    * Sets standbyClusterProjectId
    *
    * @param string|null $standbyClusterProjectId **参数解释**： 容灾备集群项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyClusterProjectId($standbyClusterProjectId)
    {
        $this->container['standbyClusterProjectId'] = $standbyClusterProjectId;
        return $this;
    }

    /**
    * Gets clusterRole
    *  **参数解释**： 集群角色。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterRole()
    {
        return $this->container['clusterRole'];
    }

    /**
    * Sets clusterRole
    *
    * @param string|null $clusterRole **参数解释**： 集群角色。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterRole($clusterRole)
    {
        $this->container['clusterRole'] = $clusterRole;
        return $this;
    }

    /**
    * Gets primaryClusterInfo
    *  primaryClusterInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CreateDrClusterDto|null
    */
    public function getPrimaryClusterInfo()
    {
        return $this->container['primaryClusterInfo'];
    }

    /**
    * Sets primaryClusterInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CreateDrClusterDto|null $primaryClusterInfo primaryClusterInfo
    *
    * @return $this
    */
    public function setPrimaryClusterInfo($primaryClusterInfo)
    {
        $this->container['primaryClusterInfo'] = $primaryClusterInfo;
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

