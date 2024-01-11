<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePoolReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePoolReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    * listenerId  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * sessionPersistence  sessionPersistence
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'lbAlgorithm' => 'string',
            'loadbalancerId' => 'string',
            'listenerId' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'adminStateUp' => 'bool',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    * listenerId  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * sessionPersistence  sessionPersistence
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'lbAlgorithm' => null,
        'loadbalancerId' => null,
        'listenerId' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'sessionPersistence' => null,
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
    * protocol  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    * listenerId  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * sessionPersistence  sessionPersistence
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'lbAlgorithm' => 'lb_algorithm',
            'loadbalancerId' => 'loadbalancer_id',
            'listenerId' => 'listener_id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'sessionPersistence' => 'session_persistence',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    * listenerId  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * sessionPersistence  sessionPersistence
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'lbAlgorithm' => 'setLbAlgorithm',
            'loadbalancerId' => 'setLoadbalancerId',
            'listenerId' => 'setListenerId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'sessionPersistence' => 'setSessionPersistence',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    * listenerId  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    * tenantId  后端云服务器组所在的项目ID。
    * name  后端云服务器组的名称。
    * description  后端云服务器组的描述信息
    * adminStateUp  后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    * sessionPersistence  sessionPersistence
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'lbAlgorithm' => 'getLbAlgorithm',
            'loadbalancerId' => 'getLoadbalancerId',
            'listenerId' => 'getListenerId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'sessionPersistence' => 'getSessionPersistence',
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
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
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets protocol
    *  后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
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
    * @param string $protocol 后端云服务器组的后端协议。取值：UDP、TCP、HTTP。当指定istener_id创建后端云服务器组时，后端云服务器组的protocol和它关联的监听器的protocol有如下关系：监听器的protocol为TCP时，后端云服务器组的protocol必须为TCP。监听器的protocol为UDP时，后端云服务器组的protocol必须为UDP。监听器的protocol为HTTP或TERMINATED_HTTPS时，后端云服务器组的protocol必须为HTTP。
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
    *  后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
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
    * @param string $lbAlgorithm 后端云服务器组的负载均衡算法，取值：ROUND_ROBIN：加权轮询算法；LEAST_CONNECTIONS：加权最少连接算法；SOURCE_IP：源IP算法；当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 后端云服务器组关联的负载均衡器ID。listener_id和loadbalancer_id中至少指定一个。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets listenerId
    *  后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId 后端云服务器组关联的监听器的ID。listener_id和loadbalancer_id中至少指定一个。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets tenantId
    *  后端云服务器组所在的项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 后端云服务器组所在的项目ID。
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 后端云服务器组的名称。
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
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 后端云服务器组的描述信息
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
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 后端云服务器组的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets sessionPersistence
    *  sessionPersistence
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence|null
    */
    public function getSessionPersistence()
    {
        return $this->container['sessionPersistence'];
    }

    /**
    * Sets sessionPersistence
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\SessionPersistence|null $sessionPersistence sessionPersistence
    *
    * @return $this
    */
    public function setSessionPersistence($sessionPersistence)
    {
        $this->container['sessionPersistence'] = $sessionPersistence;
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

