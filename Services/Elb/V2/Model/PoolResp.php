<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端云服务器组的ID
    * projectId  后端云服务器组所在的项目ID。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  后端云服务器组绑定的负载均衡器ID的列表。
    * listeners  后端云服务器组关联的监听器ID的列表。
    * members  后端云服务器组关联的后端云服务器ID的列表。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * sessionPersistence  sessionPersistence
    * protocol  后端云服务器组的后端协议。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'adminStateUp' => 'bool',
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'listeners' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'members' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'healthmonitorId' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence',
            'protocol' => 'string',
            'lbAlgorithm' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端云服务器组的ID
    * projectId  后端云服务器组所在的项目ID。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  后端云服务器组绑定的负载均衡器ID的列表。
    * listeners  后端云服务器组关联的监听器ID的列表。
    * members  后端云服务器组关联的后端云服务器ID的列表。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * sessionPersistence  sessionPersistence
    * protocol  后端云服务器组的后端协议。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'loadbalancers' => null,
        'listeners' => null,
        'members' => null,
        'healthmonitorId' => null,
        'sessionPersistence' => null,
        'protocol' => null,
        'lbAlgorithm' => null,
        'protectionStatus' => null,
        'protectionReason' => null
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
    * id  后端云服务器组的ID
    * projectId  后端云服务器组所在的项目ID。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  后端云服务器组绑定的负载均衡器ID的列表。
    * listeners  后端云服务器组关联的监听器ID的列表。
    * members  后端云服务器组关联的后端云服务器ID的列表。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * sessionPersistence  sessionPersistence
    * protocol  后端云服务器组的后端协议。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'loadbalancers' => 'loadbalancers',
            'listeners' => 'listeners',
            'members' => 'members',
            'healthmonitorId' => 'healthmonitor_id',
            'sessionPersistence' => 'session_persistence',
            'protocol' => 'protocol',
            'lbAlgorithm' => 'lb_algorithm',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端云服务器组的ID
    * projectId  后端云服务器组所在的项目ID。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  后端云服务器组绑定的负载均衡器ID的列表。
    * listeners  后端云服务器组关联的监听器ID的列表。
    * members  后端云服务器组关联的后端云服务器ID的列表。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * sessionPersistence  sessionPersistence
    * protocol  后端云服务器组的后端协议。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'loadbalancers' => 'setLoadbalancers',
            'listeners' => 'setListeners',
            'members' => 'setMembers',
            'healthmonitorId' => 'setHealthmonitorId',
            'sessionPersistence' => 'setSessionPersistence',
            'protocol' => 'setProtocol',
            'lbAlgorithm' => 'setLbAlgorithm',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端云服务器组的ID
    * projectId  后端云服务器组所在的项目ID。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  后端云服务器组绑定的负载均衡器ID的列表。
    * listeners  后端云服务器组关联的监听器ID的列表。
    * members  后端云服务器组关联的后端云服务器ID的列表。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * sessionPersistence  sessionPersistence
    * protocol  后端云服务器组的后端协议。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'loadbalancers' => 'getLoadbalancers',
            'listeners' => 'getListeners',
            'members' => 'getMembers',
            'healthmonitorId' => 'getHealthmonitorId',
            'sessionPersistence' => 'getSessionPersistence',
            'protocol' => 'getProtocol',
            'lbAlgorithm' => 'getLbAlgorithm',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason'
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
    const PROTOCOL_UDP = 'UDP';
    const PROTOCOL_TCP = 'TCP';
    const PROTOCOL_HTTP = 'HTTP';
    const LB_ALGORITHM_ROUND_ROBIN = 'ROUND_ROBIN';
    const LB_ALGORITHM_LEAST_CONNECTIONS = 'LEAST_CONNECTIONS';
    const LB_ALGORITHM_SOURCE_IP = 'SOURCE_IP';
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_UDP,
            self::PROTOCOL_TCP,
            self::PROTOCOL_HTTP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLbAlgorithmAllowableValues()
    {
        return [
            self::LB_ALGORITHM_ROUND_ROBIN,
            self::LB_ALGORITHM_LEAST_CONNECTIONS,
            self::LB_ALGORITHM_SOURCE_IP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['loadbalancers'] = isset($data['loadbalancers']) ? $data['loadbalancers'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['healthmonitorId'] = isset($data['healthmonitorId']) ? $data['healthmonitorId'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['loadbalancers'] === null) {
            $invalidProperties[] = "'loadbalancers' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['members'] === null) {
            $invalidProperties[] = "'members' can't be null";
        }
        if ($this->container['healthmonitorId'] === null) {
            $invalidProperties[] = "'healthmonitorId' can't be null";
        }
        if ($this->container['sessionPersistence'] === null) {
            $invalidProperties[] = "'sessionPersistence' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['lbAlgorithm'] === null) {
            $invalidProperties[] = "'lbAlgorithm' can't be null";
        }
            $allowedValues = $this->getLbAlgorithmAllowableValues();
                if (!is_null($this->container['lbAlgorithm']) && !in_array($this->container['lbAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lbAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  后端云服务器组的ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 后端云服务器组的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  后端云服务器组所在的项目ID。
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
    * @param string $projectId 后端云服务器组所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tenantId
    *  后端云服务器组所在的项目ID。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 后端云服务器组所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  后端云服务器组的名称。
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
    * @param string $name 后端云服务器组的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  后端云服务器组的描述信息
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 后端云服务器组的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets loadbalancers
    *  后端云服务器组绑定的负载均衡器ID的列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getLoadbalancers()
    {
        return $this->container['loadbalancers'];
    }

    /**
    * Sets loadbalancers
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $loadbalancers 后端云服务器组绑定的负载均衡器ID的列表。
    *
    * @return $this
    */
    public function setLoadbalancers($loadbalancers)
    {
        $this->container['loadbalancers'] = $loadbalancers;
        return $this;
    }

    /**
    * Gets listeners
    *  后端云服务器组关联的监听器ID的列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $listeners 后端云服务器组关联的监听器ID的列表。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets members
    *  后端云服务器组关联的后端云服务器ID的列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $members 后端云服务器组关联的后端云服务器ID的列表。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets healthmonitorId
    *  后端云服务器组关联的健康检查的ID。
    *
    * @return string
    */
    public function getHealthmonitorId()
    {
        return $this->container['healthmonitorId'];
    }

    /**
    * Sets healthmonitorId
    *
    * @param string $healthmonitorId 后端云服务器组关联的健康检查的ID。
    *
    * @return $this
    */
    public function setHealthmonitorId($healthmonitorId)
    {
        $this->container['healthmonitorId'] = $healthmonitorId;
        return $this;
    }

    /**
    * Gets sessionPersistence
    *  sessionPersistence
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence
    */
    public function getSessionPersistence()
    {
        return $this->container['sessionPersistence'];
    }

    /**
    * Sets sessionPersistence
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence $sessionPersistence sessionPersistence
    *
    * @return $this
    */
    public function setSessionPersistence($sessionPersistence)
    {
        $this->container['sessionPersistence'] = $sessionPersistence;
        return $this;
    }

    /**
    * Gets protocol
    *  后端云服务器组的后端协议。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 后端云服务器组的后端协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    *
    * @return string
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string $lbAlgorithm 后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason 设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
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

