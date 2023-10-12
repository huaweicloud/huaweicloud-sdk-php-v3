<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastore  datastore
    * instances  节点对象列表。
    * publicKibanaResp  publicKibanaResp
    * elbWhiteList  elbWhiteList
    * updated  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * name  集群名称。
    * publicIp  公网IP信息。
    * created  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * id  集群ID。
    * status  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * endpoint  用户VPC访问IP地址和端口号。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * vpcepIp  终端节点IP。
    * bandwidthSize  公网带宽大小。单位：Mbit/s
    * httpsEnable  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    * diskEncrypted  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    * backupAvailable  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    * actionProgress  集群行为进度，显示创建或扩容进度的百分比。
    * actions  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    * enterpriseProjectId  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    * tags  集群标签。
    * failedReason  failedReason
    * period  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    * bandwidthResourceId  es公网访问的资源id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastore' => '\HuaweiCloud\SDK\Css\V1\Model\ClusterDetailDatastore',
            'instances' => '\HuaweiCloud\SDK\Css\V1\Model\ClusterDetailInstances[]',
            'publicKibanaResp' => '\HuaweiCloud\SDK\Css\V1\Model\PublicKibanaRespBody',
            'elbWhiteList' => '\HuaweiCloud\SDK\Css\V1\Model\ElbWhiteListResp',
            'updated' => 'string',
            'name' => 'string',
            'publicIp' => 'string',
            'created' => 'string',
            'id' => 'string',
            'status' => 'string',
            'endpoint' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'vpcepIp' => 'string',
            'bandwidthSize' => 'int',
            'httpsEnable' => 'bool',
            'diskEncrypted' => 'bool',
            'authorityEnable' => 'bool',
            'backupAvailable' => 'bool',
            'actionProgress' => 'object',
            'actions' => 'string[]',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Css\V1\Model\ClusterDetailTags[]',
            'failedReason' => '\HuaweiCloud\SDK\Css\V1\Model\ClusterDetailFailedReasons',
            'period' => 'bool',
            'bandwidthResourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastore  datastore
    * instances  节点对象列表。
    * publicKibanaResp  publicKibanaResp
    * elbWhiteList  elbWhiteList
    * updated  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * name  集群名称。
    * publicIp  公网IP信息。
    * created  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * id  集群ID。
    * status  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * endpoint  用户VPC访问IP地址和端口号。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * vpcepIp  终端节点IP。
    * bandwidthSize  公网带宽大小。单位：Mbit/s
    * httpsEnable  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    * diskEncrypted  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    * backupAvailable  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    * actionProgress  集群行为进度，显示创建或扩容进度的百分比。
    * actions  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    * enterpriseProjectId  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    * tags  集群标签。
    * failedReason  failedReason
    * period  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    * bandwidthResourceId  es公网访问的资源id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastore' => null,
        'instances' => null,
        'publicKibanaResp' => null,
        'elbWhiteList' => null,
        'updated' => null,
        'name' => null,
        'publicIp' => null,
        'created' => null,
        'id' => null,
        'status' => null,
        'endpoint' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'vpcepIp' => null,
        'bandwidthSize' => 'int32',
        'httpsEnable' => null,
        'diskEncrypted' => null,
        'authorityEnable' => null,
        'backupAvailable' => null,
        'actionProgress' => null,
        'actions' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'failedReason' => null,
        'period' => null,
        'bandwidthResourceId' => null
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
    * datastore  datastore
    * instances  节点对象列表。
    * publicKibanaResp  publicKibanaResp
    * elbWhiteList  elbWhiteList
    * updated  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * name  集群名称。
    * publicIp  公网IP信息。
    * created  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * id  集群ID。
    * status  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * endpoint  用户VPC访问IP地址和端口号。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * vpcepIp  终端节点IP。
    * bandwidthSize  公网带宽大小。单位：Mbit/s
    * httpsEnable  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    * diskEncrypted  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    * backupAvailable  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    * actionProgress  集群行为进度，显示创建或扩容进度的百分比。
    * actions  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    * enterpriseProjectId  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    * tags  集群标签。
    * failedReason  failedReason
    * period  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    * bandwidthResourceId  es公网访问的资源id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastore' => 'datastore',
            'instances' => 'instances',
            'publicKibanaResp' => 'publicKibanaResp',
            'elbWhiteList' => 'elbWhiteList',
            'updated' => 'updated',
            'name' => 'name',
            'publicIp' => 'publicIp',
            'created' => 'created',
            'id' => 'id',
            'status' => 'status',
            'endpoint' => 'endpoint',
            'vpcId' => 'vpcId',
            'subnetId' => 'subnetId',
            'securityGroupId' => 'securityGroupId',
            'vpcepIp' => 'vpcepIp',
            'bandwidthSize' => 'bandwidthSize',
            'httpsEnable' => 'httpsEnable',
            'diskEncrypted' => 'diskEncrypted',
            'authorityEnable' => 'authorityEnable',
            'backupAvailable' => 'backupAvailable',
            'actionProgress' => 'actionProgress',
            'actions' => 'actions',
            'enterpriseProjectId' => 'enterpriseProjectId',
            'tags' => 'tags',
            'failedReason' => 'failedReason',
            'period' => 'period',
            'bandwidthResourceId' => 'bandwidthResourceId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastore  datastore
    * instances  节点对象列表。
    * publicKibanaResp  publicKibanaResp
    * elbWhiteList  elbWhiteList
    * updated  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * name  集群名称。
    * publicIp  公网IP信息。
    * created  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * id  集群ID。
    * status  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * endpoint  用户VPC访问IP地址和端口号。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * vpcepIp  终端节点IP。
    * bandwidthSize  公网带宽大小。单位：Mbit/s
    * httpsEnable  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    * diskEncrypted  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    * backupAvailable  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    * actionProgress  集群行为进度，显示创建或扩容进度的百分比。
    * actions  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    * enterpriseProjectId  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    * tags  集群标签。
    * failedReason  failedReason
    * period  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    * bandwidthResourceId  es公网访问的资源id
    *
    * @var string[]
    */
    protected static $setters = [
            'datastore' => 'setDatastore',
            'instances' => 'setInstances',
            'publicKibanaResp' => 'setPublicKibanaResp',
            'elbWhiteList' => 'setElbWhiteList',
            'updated' => 'setUpdated',
            'name' => 'setName',
            'publicIp' => 'setPublicIp',
            'created' => 'setCreated',
            'id' => 'setId',
            'status' => 'setStatus',
            'endpoint' => 'setEndpoint',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'vpcepIp' => 'setVpcepIp',
            'bandwidthSize' => 'setBandwidthSize',
            'httpsEnable' => 'setHttpsEnable',
            'diskEncrypted' => 'setDiskEncrypted',
            'authorityEnable' => 'setAuthorityEnable',
            'backupAvailable' => 'setBackupAvailable',
            'actionProgress' => 'setActionProgress',
            'actions' => 'setActions',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'failedReason' => 'setFailedReason',
            'period' => 'setPeriod',
            'bandwidthResourceId' => 'setBandwidthResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastore  datastore
    * instances  节点对象列表。
    * publicKibanaResp  publicKibanaResp
    * elbWhiteList  elbWhiteList
    * updated  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * name  集群名称。
    * publicIp  公网IP信息。
    * created  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    * id  集群ID。
    * status  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * endpoint  用户VPC访问IP地址和端口号。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * vpcepIp  终端节点IP。
    * bandwidthSize  公网带宽大小。单位：Mbit/s
    * httpsEnable  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    * diskEncrypted  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    * backupAvailable  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    * actionProgress  集群行为进度，显示创建或扩容进度的百分比。
    * actions  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    * enterpriseProjectId  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    * tags  集群标签。
    * failedReason  failedReason
    * period  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    * bandwidthResourceId  es公网访问的资源id
    *
    * @var string[]
    */
    protected static $getters = [
            'datastore' => 'getDatastore',
            'instances' => 'getInstances',
            'publicKibanaResp' => 'getPublicKibanaResp',
            'elbWhiteList' => 'getElbWhiteList',
            'updated' => 'getUpdated',
            'name' => 'getName',
            'publicIp' => 'getPublicIp',
            'created' => 'getCreated',
            'id' => 'getId',
            'status' => 'getStatus',
            'endpoint' => 'getEndpoint',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'vpcepIp' => 'getVpcepIp',
            'bandwidthSize' => 'getBandwidthSize',
            'httpsEnable' => 'getHttpsEnable',
            'diskEncrypted' => 'getDiskEncrypted',
            'authorityEnable' => 'getAuthorityEnable',
            'backupAvailable' => 'getBackupAvailable',
            'actionProgress' => 'getActionProgress',
            'actions' => 'getActions',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'failedReason' => 'getFailedReason',
            'period' => 'getPeriod',
            'bandwidthResourceId' => 'getBandwidthResourceId'
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
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['publicKibanaResp'] = isset($data['publicKibanaResp']) ? $data['publicKibanaResp'] : null;
        $this->container['elbWhiteList'] = isset($data['elbWhiteList']) ? $data['elbWhiteList'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['vpcepIp'] = isset($data['vpcepIp']) ? $data['vpcepIp'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['httpsEnable'] = isset($data['httpsEnable']) ? $data['httpsEnable'] : null;
        $this->container['diskEncrypted'] = isset($data['diskEncrypted']) ? $data['diskEncrypted'] : null;
        $this->container['authorityEnable'] = isset($data['authorityEnable']) ? $data['authorityEnable'] : null;
        $this->container['backupAvailable'] = isset($data['backupAvailable']) ? $data['backupAvailable'] : null;
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['bandwidthResourceId'] = isset($data['bandwidthResourceId']) ? $data['bandwidthResourceId'] : null;
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
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailDatastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailDatastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets instances
    *  节点对象列表。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailInstances[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailInstances[]|null $instances 节点对象列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets publicKibanaResp
    *  publicKibanaResp
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\PublicKibanaRespBody|null
    */
    public function getPublicKibanaResp()
    {
        return $this->container['publicKibanaResp'];
    }

    /**
    * Sets publicKibanaResp
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\PublicKibanaRespBody|null $publicKibanaResp publicKibanaResp
    *
    * @return $this
    */
    public function setPublicKibanaResp($publicKibanaResp)
    {
        $this->container['publicKibanaResp'] = $publicKibanaResp;
        return $this;
    }

    /**
    * Gets elbWhiteList
    *  elbWhiteList
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ElbWhiteListResp|null
    */
    public function getElbWhiteList()
    {
        return $this->container['elbWhiteList'];
    }

    /**
    * Sets elbWhiteList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ElbWhiteListResp|null $elbWhiteList elbWhiteList
    *
    * @return $this
    */
    public function setElbWhiteList($elbWhiteList)
    {
        $this->container['elbWhiteList'] = $elbWhiteList;
        return $this;
    }

    /**
    * Gets updated
    *  集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 集群上次修改时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets name
    *  集群名称。
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
    * @param string|null $name 集群名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网IP信息。
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
    * @param string|null $publicIp 公网IP信息。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets created
    *  集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 集群创建时间，格式为ISO8601： CCYY-MM-DDThh:mm:ss。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets id
    *  集群ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 集群ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
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
    * @param string|null $status 集群状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets endpoint
    *  用户VPC访问IP地址和端口号。
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
    * @param string|null $endpoint 用户VPC访问IP地址和端口号。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID。
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
    * @param string|null $vpcId VPC ID。
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
    *  子网ID。
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
    * @param string|null $subnetId 子网ID。
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
    *  安全组ID。
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
    * @param string|null $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets vpcepIp
    *  终端节点IP。
    *
    * @return string|null
    */
    public function getVpcepIp()
    {
        return $this->container['vpcepIp'];
    }

    /**
    * Sets vpcepIp
    *
    * @param string|null $vpcepIp 终端节点IP。
    *
    * @return $this
    */
    public function setVpcepIp($vpcepIp)
    {
        $this->container['vpcepIp'] = $vpcepIp;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  公网带宽大小。单位：Mbit/s
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
    * @param int|null $bandwidthSize 公网带宽大小。单位：Mbit/s
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets httpsEnable
    *  通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    *
    * @return bool|null
    */
    public function getHttpsEnable()
    {
        return $this->container['httpsEnable'];
    }

    /**
    * Sets httpsEnable
    *
    * @param bool|null $httpsEnable 通信加密状态。 - false：未设置通信加密。 - true：已设置通信加密。
    *
    * @return $this
    */
    public function setHttpsEnable($httpsEnable)
    {
        $this->container['httpsEnable'] = $httpsEnable;
        return $this;
    }

    /**
    * Gets diskEncrypted
    *  磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    *
    * @return bool|null
    */
    public function getDiskEncrypted()
    {
        return $this->container['diskEncrypted'];
    }

    /**
    * Sets diskEncrypted
    *
    * @param bool|null $diskEncrypted 磁盘是否加密。  - true : 磁盘已加密。 - false : 磁盘未加密。
    *
    * @return $this
    */
    public function setDiskEncrypted($diskEncrypted)
    {
        $this->container['diskEncrypted'] = $diskEncrypted;
        return $this;
    }

    /**
    * Gets authorityEnable
    *  是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    *
    * @return bool|null
    */
    public function getAuthorityEnable()
    {
        return $this->container['authorityEnable'];
    }

    /**
    * Sets authorityEnable
    *
    * @param bool|null $authorityEnable 是否开启认证，取值范围为true或false。默认关闭认证功能。 - true：表示集群开启认证。 - false：表示集群不开启认证。
    *
    * @return $this
    */
    public function setAuthorityEnable($authorityEnable)
    {
        $this->container['authorityEnable'] = $authorityEnable;
        return $this;
    }

    /**
    * Gets backupAvailable
    *  快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    *
    * @return bool|null
    */
    public function getBackupAvailable()
    {
        return $this->container['backupAvailable'];
    }

    /**
    * Sets backupAvailable
    *
    * @param bool|null $backupAvailable 快照是否开启。 - true: 快照开启状态。 - false: 快照关闭状态。
    *
    * @return $this
    */
    public function setBackupAvailable($backupAvailable)
    {
        $this->container['backupAvailable'] = $backupAvailable;
        return $this;
    }

    /**
    * Gets actionProgress
    *  集群行为进度，显示创建或扩容进度的百分比。
    *
    * @return object|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param object|null $actionProgress 集群行为进度，显示创建或扩容进度的百分比。
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets actions
    *  集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 集群当前行为。REBOOTING表示重启、GROWING表示扩容、RESTORING表示恢复集群、SNAPSHOTTING表示创建快照等。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
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
    * @param string|null $enterpriseProjectId 集群所属的企业项目ID。  如果集群所属用户没有开通企业项目，则不会返回该参数。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  集群标签。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailTags[]|null $tags 集群标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets failedReason
    *  failedReason
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailFailedReasons|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ClusterDetailFailedReasons|null $failedReason failedReason
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets period
    *  是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    *
    * @return bool|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param bool|null $period 是否为包周期集群。 - \"true\" 表示是包周期计费的集群。 - \"false\" 表示是按需计费的集群。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets bandwidthResourceId
    *  es公网访问的资源id
    *
    * @return string|null
    */
    public function getBandwidthResourceId()
    {
        return $this->container['bandwidthResourceId'];
    }

    /**
    * Sets bandwidthResourceId
    *
    * @param string|null $bandwidthResourceId es公网访问的资源id
    *
    * @return $this
    */
    public function setBandwidthResourceId($bandwidthResourceId)
    {
        $this->container['bandwidthResourceId'] = $bandwidthResourceId;
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

