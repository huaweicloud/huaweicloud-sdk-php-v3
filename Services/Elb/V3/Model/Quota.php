<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Quota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Quota';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'loadbalancer' => 'int',
            'certificate' => 'int',
            'listener' => 'int',
            'l7policy' => 'int',
            'conditionPerPolicy' => 'int',
            'pool' => 'int',
            'healthmonitor' => 'int',
            'member' => 'int',
            'membersPerPool' => 'int',
            'listenersPerPool' => 'int',
            'ipgroup' => 'int',
            'ipgroupBindings' => 'int',
            'ipgroupMaxLength' => 'int',
            'securityPolicy' => 'int',
            'listenersPerLoadbalancer' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'loadbalancer' => 'int32',
        'certificate' => 'int32',
        'listener' => 'int32',
        'l7policy' => 'int32',
        'conditionPerPolicy' => 'int32',
        'pool' => 'int32',
        'healthmonitor' => 'int32',
        'member' => 'int32',
        'membersPerPool' => 'int32',
        'listenersPerPool' => 'int32',
        'ipgroup' => 'int32',
        'ipgroupBindings' => 'int32',
        'ipgroupMaxLength' => 'int32',
        'securityPolicy' => 'int32',
        'listenersPerLoadbalancer' => 'int32'
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
    * projectId  项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'loadbalancer' => 'loadbalancer',
            'certificate' => 'certificate',
            'listener' => 'listener',
            'l7policy' => 'l7policy',
            'conditionPerPolicy' => 'condition_per_policy',
            'pool' => 'pool',
            'healthmonitor' => 'healthmonitor',
            'member' => 'member',
            'membersPerPool' => 'members_per_pool',
            'listenersPerPool' => 'listeners_per_pool',
            'ipgroup' => 'ipgroup',
            'ipgroupBindings' => 'ipgroup_bindings',
            'ipgroupMaxLength' => 'ipgroup_max_length',
            'securityPolicy' => 'security_policy',
            'listenersPerLoadbalancer' => 'listeners_per_loadbalancer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'loadbalancer' => 'setLoadbalancer',
            'certificate' => 'setCertificate',
            'listener' => 'setListener',
            'l7policy' => 'setL7policy',
            'conditionPerPolicy' => 'setConditionPerPolicy',
            'pool' => 'setPool',
            'healthmonitor' => 'setHealthmonitor',
            'member' => 'setMember',
            'membersPerPool' => 'setMembersPerPool',
            'listenersPerPool' => 'setListenersPerPool',
            'ipgroup' => 'setIpgroup',
            'ipgroupBindings' => 'setIpgroupBindings',
            'ipgroupMaxLength' => 'setIpgroupMaxLength',
            'securityPolicy' => 'setSecurityPolicy',
            'listenersPerLoadbalancer' => 'setListenersPerLoadbalancer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'loadbalancer' => 'getLoadbalancer',
            'certificate' => 'getCertificate',
            'listener' => 'getListener',
            'l7policy' => 'getL7policy',
            'conditionPerPolicy' => 'getConditionPerPolicy',
            'pool' => 'getPool',
            'healthmonitor' => 'getHealthmonitor',
            'member' => 'getMember',
            'membersPerPool' => 'getMembersPerPool',
            'listenersPerPool' => 'getListenersPerPool',
            'ipgroup' => 'getIpgroup',
            'ipgroupBindings' => 'getIpgroupBindings',
            'ipgroupMaxLength' => 'getIpgroupMaxLength',
            'securityPolicy' => 'getSecurityPolicy',
            'listenersPerLoadbalancer' => 'getListenersPerLoadbalancer'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['loadbalancer'] = isset($data['loadbalancer']) ? $data['loadbalancer'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['listener'] = isset($data['listener']) ? $data['listener'] : null;
        $this->container['l7policy'] = isset($data['l7policy']) ? $data['l7policy'] : null;
        $this->container['conditionPerPolicy'] = isset($data['conditionPerPolicy']) ? $data['conditionPerPolicy'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['membersPerPool'] = isset($data['membersPerPool']) ? $data['membersPerPool'] : null;
        $this->container['listenersPerPool'] = isset($data['listenersPerPool']) ? $data['listenersPerPool'] : null;
        $this->container['ipgroup'] = isset($data['ipgroup']) ? $data['ipgroup'] : null;
        $this->container['ipgroupBindings'] = isset($data['ipgroupBindings']) ? $data['ipgroupBindings'] : null;
        $this->container['ipgroupMaxLength'] = isset($data['ipgroupMaxLength']) ? $data['ipgroupMaxLength'] : null;
        $this->container['securityPolicy'] = isset($data['securityPolicy']) ? $data['securityPolicy'] : null;
        $this->container['listenersPerLoadbalancer'] = isset($data['listenersPerLoadbalancer']) ? $data['listenersPerLoadbalancer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['loadbalancer'] === null) {
            $invalidProperties[] = "'loadbalancer' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
        if ($this->container['listener'] === null) {
            $invalidProperties[] = "'listener' can't be null";
        }
        if ($this->container['l7policy'] === null) {
            $invalidProperties[] = "'l7policy' can't be null";
        }
        if ($this->container['conditionPerPolicy'] === null) {
            $invalidProperties[] = "'conditionPerPolicy' can't be null";
        }
        if ($this->container['pool'] === null) {
            $invalidProperties[] = "'pool' can't be null";
        }
        if ($this->container['healthmonitor'] === null) {
            $invalidProperties[] = "'healthmonitor' can't be null";
        }
        if ($this->container['member'] === null) {
            $invalidProperties[] = "'member' can't be null";
        }
        if ($this->container['membersPerPool'] === null) {
            $invalidProperties[] = "'membersPerPool' can't be null";
        }
        if ($this->container['listenersPerPool'] === null) {
            $invalidProperties[] = "'listenersPerPool' can't be null";
        }
        if ($this->container['ipgroup'] === null) {
            $invalidProperties[] = "'ipgroup' can't be null";
        }
        if ($this->container['ipgroupBindings'] === null) {
            $invalidProperties[] = "'ipgroupBindings' can't be null";
        }
        if ($this->container['ipgroupMaxLength'] === null) {
            $invalidProperties[] = "'ipgroupMaxLength' can't be null";
        }
        if ($this->container['securityPolicy'] === null) {
            $invalidProperties[] = "'securityPolicy' can't be null";
        }
        if ($this->container['listenersPerLoadbalancer'] === null) {
            $invalidProperties[] = "'listenersPerLoadbalancer' can't be null";
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
    * Gets projectId
    *  项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets loadbalancer
    *  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getLoadbalancer()
    {
        return $this->container['loadbalancer'];
    }

    /**
    * Sets loadbalancer
    *
    * @param int $loadbalancer 负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setLoadbalancer($loadbalancer)
    {
        $this->container['loadbalancer'] = $loadbalancer;
        return $this;
    }

    /**
    * Gets certificate
    *  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param int $certificate 证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets listener
    *  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getListener()
    {
        return $this->container['listener'];
    }

    /**
    * Sets listener
    *
    * @param int $listener 监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setListener($listener)
    {
        $this->container['listener'] = $listener;
        return $this;
    }

    /**
    * Gets l7policy
    *  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getL7policy()
    {
        return $this->container['l7policy'];
    }

    /**
    * Sets l7policy
    *
    * @param int $l7policy 转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setL7policy($l7policy)
    {
        $this->container['l7policy'] = $l7policy;
        return $this;
    }

    /**
    * Gets conditionPerPolicy
    *  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getConditionPerPolicy()
    {
        return $this->container['conditionPerPolicy'];
    }

    /**
    * Sets conditionPerPolicy
    *
    * @param int $conditionPerPolicy 转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setConditionPerPolicy($conditionPerPolicy)
    {
        $this->container['conditionPerPolicy'] = $conditionPerPolicy;
        return $this;
    }

    /**
    * Gets pool
    *  后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
    * Sets pool
    *
    * @param int $pool 后端云服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param int $healthmonitor 健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
        return $this;
    }

    /**
    * Gets member
    *  后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
    * Sets member
    *
    * @param int $member 后端云服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setMember($member)
    {
        $this->container['member'] = $member;
        return $this;
    }

    /**
    * Gets membersPerPool
    *  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getMembersPerPool()
    {
        return $this->container['membersPerPool'];
    }

    /**
    * Sets membersPerPool
    *
    * @param int $membersPerPool 单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setMembersPerPool($membersPerPool)
    {
        $this->container['membersPerPool'] = $membersPerPool;
        return $this;
    }

    /**
    * Gets listenersPerPool
    *  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getListenersPerPool()
    {
        return $this->container['listenersPerPool'];
    }

    /**
    * Sets listenersPerPool
    *
    * @param int $listenersPerPool 单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setListenersPerPool($listenersPerPool)
    {
        $this->container['listenersPerPool'] = $listenersPerPool;
        return $this;
    }

    /**
    * Gets ipgroup
    *  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroup()
    {
        return $this->container['ipgroup'];
    }

    /**
    * Sets ipgroup
    *
    * @param int $ipgroup IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroup($ipgroup)
    {
        $this->container['ipgroup'] = $ipgroup;
        return $this;
    }

    /**
    * Gets ipgroupBindings
    *  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroupBindings()
    {
        return $this->container['ipgroupBindings'];
    }

    /**
    * Sets ipgroupBindings
    *
    * @param int $ipgroupBindings IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroupBindings($ipgroupBindings)
    {
        $this->container['ipgroupBindings'] = $ipgroupBindings;
        return $this;
    }

    /**
    * Gets ipgroupMaxLength
    *  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroupMaxLength()
    {
        return $this->container['ipgroupMaxLength'];
    }

    /**
    * Sets ipgroupMaxLength
    *
    * @param int $ipgroupMaxLength IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroupMaxLength($ipgroupMaxLength)
    {
        $this->container['ipgroupMaxLength'] = $ipgroupMaxLength;
        return $this;
    }

    /**
    * Gets securityPolicy
    *  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getSecurityPolicy()
    {
        return $this->container['securityPolicy'];
    }

    /**
    * Sets securityPolicy
    *
    * @param int $securityPolicy 自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setSecurityPolicy($securityPolicy)
    {
        $this->container['securityPolicy'] = $securityPolicy;
        return $this;
    }

    /**
    * Gets listenersPerLoadbalancer
    *  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @return int
    */
    public function getListenersPerLoadbalancer()
    {
        return $this->container['listenersPerLoadbalancer'];
    }

    /**
    * Sets listenersPerLoadbalancer
    *
    * @param int $listenersPerLoadbalancer 单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @return $this
    */
    public function setListenersPerLoadbalancer($listenersPerLoadbalancer)
    {
        $this->container['listenersPerLoadbalancer'] = $listenersPerLoadbalancer;
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

