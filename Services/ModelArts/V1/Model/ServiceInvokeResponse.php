<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceInvokeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceInvokeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    * protocol  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    * authType  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    * internetAccessEnable  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    * intranetApprovalEnable  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    * dynamicRoutingEnable  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    * strategy  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    * metricApiScheme  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    * metricApiPort  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    * metricApiPath  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    * emsEnable  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    * requestRetryEnable  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    * requestRetryCntMax  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    * requestRetryIntervalMs  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    * fuseConfigs  fuseConfigs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'protocol' => 'string',
            'authType' => 'string',
            'internetAccessEnable' => 'bool',
            'intranetApprovalEnable' => 'bool',
            'dynamicRoutingEnable' => 'bool',
            'strategy' => 'string',
            'metricApiScheme' => 'string',
            'metricApiPort' => 'string',
            'metricApiPath' => 'string',
            'emsEnable' => 'bool',
            'requestRetryEnable' => 'bool',
            'requestRetryCntMax' => 'int',
            'requestRetryIntervalMs' => 'int',
            'fuseConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FuseConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    * protocol  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    * authType  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    * internetAccessEnable  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    * intranetApprovalEnable  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    * dynamicRoutingEnable  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    * strategy  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    * metricApiScheme  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    * metricApiPort  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    * metricApiPath  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    * emsEnable  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    * requestRetryEnable  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    * requestRetryCntMax  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    * requestRetryIntervalMs  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    * fuseConfigs  fuseConfigs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => 'int32',
        'protocol' => null,
        'authType' => null,
        'internetAccessEnable' => null,
        'intranetApprovalEnable' => null,
        'dynamicRoutingEnable' => null,
        'strategy' => null,
        'metricApiScheme' => null,
        'metricApiPort' => null,
        'metricApiPath' => null,
        'emsEnable' => null,
        'requestRetryEnable' => null,
        'requestRetryCntMax' => 'int32',
        'requestRetryIntervalMs' => 'int32',
        'fuseConfigs' => null
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
    * port  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    * protocol  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    * authType  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    * internetAccessEnable  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    * intranetApprovalEnable  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    * dynamicRoutingEnable  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    * strategy  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    * metricApiScheme  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    * metricApiPort  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    * metricApiPath  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    * emsEnable  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    * requestRetryEnable  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    * requestRetryCntMax  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    * requestRetryIntervalMs  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    * fuseConfigs  fuseConfigs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'protocol' => 'protocol',
            'authType' => 'auth_type',
            'internetAccessEnable' => 'internet_access_enable',
            'intranetApprovalEnable' => 'intranet_approval_enable',
            'dynamicRoutingEnable' => 'dynamic_routing_enable',
            'strategy' => 'strategy',
            'metricApiScheme' => 'metric_api_scheme',
            'metricApiPort' => 'metric_api_port',
            'metricApiPath' => 'metric_api_path',
            'emsEnable' => 'ems_enable',
            'requestRetryEnable' => 'request_retry_enable',
            'requestRetryCntMax' => 'request_retry_cnt_max',
            'requestRetryIntervalMs' => 'request_retry_interval_ms',
            'fuseConfigs' => 'fuse_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    * protocol  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    * authType  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    * internetAccessEnable  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    * intranetApprovalEnable  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    * dynamicRoutingEnable  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    * strategy  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    * metricApiScheme  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    * metricApiPort  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    * metricApiPath  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    * emsEnable  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    * requestRetryEnable  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    * requestRetryCntMax  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    * requestRetryIntervalMs  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    * fuseConfigs  fuseConfigs
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'protocol' => 'setProtocol',
            'authType' => 'setAuthType',
            'internetAccessEnable' => 'setInternetAccessEnable',
            'intranetApprovalEnable' => 'setIntranetApprovalEnable',
            'dynamicRoutingEnable' => 'setDynamicRoutingEnable',
            'strategy' => 'setStrategy',
            'metricApiScheme' => 'setMetricApiScheme',
            'metricApiPort' => 'setMetricApiPort',
            'metricApiPath' => 'setMetricApiPath',
            'emsEnable' => 'setEmsEnable',
            'requestRetryEnable' => 'setRequestRetryEnable',
            'requestRetryCntMax' => 'setRequestRetryCntMax',
            'requestRetryIntervalMs' => 'setRequestRetryIntervalMs',
            'fuseConfigs' => 'setFuseConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    * protocol  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    * authType  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    * internetAccessEnable  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    * intranetApprovalEnable  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    * dynamicRoutingEnable  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    * strategy  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    * metricApiScheme  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    * metricApiPort  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    * metricApiPath  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    * emsEnable  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    * requestRetryEnable  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    * requestRetryCntMax  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    * requestRetryIntervalMs  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    * fuseConfigs  fuseConfigs
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'protocol' => 'getProtocol',
            'authType' => 'getAuthType',
            'internetAccessEnable' => 'getInternetAccessEnable',
            'intranetApprovalEnable' => 'getIntranetApprovalEnable',
            'dynamicRoutingEnable' => 'getDynamicRoutingEnable',
            'strategy' => 'getStrategy',
            'metricApiScheme' => 'getMetricApiScheme',
            'metricApiPort' => 'getMetricApiPort',
            'metricApiPath' => 'getMetricApiPath',
            'emsEnable' => 'getEmsEnable',
            'requestRetryEnable' => 'getRequestRetryEnable',
            'requestRetryCntMax' => 'getRequestRetryCntMax',
            'requestRetryIntervalMs' => 'getRequestRetryIntervalMs',
            'fuseConfigs' => 'getFuseConfigs'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['internetAccessEnable'] = isset($data['internetAccessEnable']) ? $data['internetAccessEnable'] : null;
        $this->container['intranetApprovalEnable'] = isset($data['intranetApprovalEnable']) ? $data['intranetApprovalEnable'] : null;
        $this->container['dynamicRoutingEnable'] = isset($data['dynamicRoutingEnable']) ? $data['dynamicRoutingEnable'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['metricApiScheme'] = isset($data['metricApiScheme']) ? $data['metricApiScheme'] : null;
        $this->container['metricApiPort'] = isset($data['metricApiPort']) ? $data['metricApiPort'] : null;
        $this->container['metricApiPath'] = isset($data['metricApiPath']) ? $data['metricApiPath'] : null;
        $this->container['emsEnable'] = isset($data['emsEnable']) ? $data['emsEnable'] : null;
        $this->container['requestRetryEnable'] = isset($data['requestRetryEnable']) ? $data['requestRetryEnable'] : null;
        $this->container['requestRetryCntMax'] = isset($data['requestRetryCntMax']) ? $data['requestRetryCntMax'] : null;
        $this->container['requestRetryIntervalMs'] = isset($data['requestRetryIntervalMs']) ? $data['requestRetryIntervalMs'] : null;
        $this->container['fuseConfigs'] = isset($data['fuseConfigs']) ? $data['fuseConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
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
    * Gets port
    *  **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port **参数解释：** 服务端口号。 **取值范围：** [1, 65535]。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
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
    * @param string $protocol **参数解释：** 服务请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets authType
    *  **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType **参数解释：** 认证类型。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets internetAccessEnable
    *  **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    *
    * @return bool|null
    */
    public function getInternetAccessEnable()
    {
        return $this->container['internetAccessEnable'];
    }

    /**
    * Sets internetAccessEnable
    *
    * @param bool|null $internetAccessEnable **参数解释：** 外网访问。 **取值范围：** - TRUE：要外网访问。 - FALSE：不要外网访问。
    *
    * @return $this
    */
    public function setInternetAccessEnable($internetAccessEnable)
    {
        $this->container['internetAccessEnable'] = $internetAccessEnable;
        return $this;
    }

    /**
    * Gets intranetApprovalEnable
    *  **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    *
    * @return bool|null
    */
    public function getIntranetApprovalEnable()
    {
        return $this->container['intranetApprovalEnable'];
    }

    /**
    * Sets intranetApprovalEnable
    *
    * @param bool|null $intranetApprovalEnable **参数解释：** 内网审批。 **取值范围：** - TRUE：要内网审批。 - FALSE：不要内网审批。
    *
    * @return $this
    */
    public function setIntranetApprovalEnable($intranetApprovalEnable)
    {
        $this->container['intranetApprovalEnable'] = $intranetApprovalEnable;
        return $this;
    }

    /**
    * Gets dynamicRoutingEnable
    *  **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    *
    * @return bool|null
    */
    public function getDynamicRoutingEnable()
    {
        return $this->container['dynamicRoutingEnable'];
    }

    /**
    * Sets dynamicRoutingEnable
    *
    * @param bool|null $dynamicRoutingEnable **参数解释：** 动态路由开关。 **取值范围：** - TRUE：开启动态路由。 - FALSE：不开启动态路由。
    *
    * @return $this
    */
    public function setDynamicRoutingEnable($dynamicRoutingEnable)
    {
        $this->container['dynamicRoutingEnable'] = $dynamicRoutingEnable;
        return $this;
    }

    /**
    * Gets strategy
    *  **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    *
    * @return string|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string|null $strategy **参数解释：** 智能路由策略。 **取值范围：** - ROUND_ROBIN：轮询。 - ORIGIN_IP_HASH：源IP哈希。 - MIN_CONN：最小连接数。 - MIN_FIRST_TOKEN_TIME：最小首token时延。 - COMPOSITE：综合负载。 - SLO_BASED：SLO优先级。
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets metricApiScheme
    *  **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    *
    * @return string|null
    */
    public function getMetricApiScheme()
    {
        return $this->container['metricApiScheme'];
    }

    /**
    * Sets metricApiScheme
    *
    * @param string|null $metricApiScheme **参数解释：** 指标接口服务请求协议。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。
    *
    * @return $this
    */
    public function setMetricApiScheme($metricApiScheme)
    {
        $this->container['metricApiScheme'] = $metricApiScheme;
        return $this;
    }

    /**
    * Gets metricApiPort
    *  **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    *
    * @return string|null
    */
    public function getMetricApiPort()
    {
        return $this->container['metricApiPort'];
    }

    /**
    * Sets metricApiPort
    *
    * @param string|null $metricApiPort **参数解释：** 指标接口端口号。 **取值范围：** [1, 65535]。
    *
    * @return $this
    */
    public function setMetricApiPort($metricApiPort)
    {
        $this->container['metricApiPort'] = $metricApiPort;
        return $this;
    }

    /**
    * Gets metricApiPath
    *  **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMetricApiPath()
    {
        return $this->container['metricApiPath'];
    }

    /**
    * Sets metricApiPath
    *
    * @param string|null $metricApiPath **参数解释：** 指标接口path。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMetricApiPath($metricApiPath)
    {
        $this->container['metricApiPath'] = $metricApiPath;
        return $this;
    }

    /**
    * Gets emsEnable
    *  **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    *
    * @return bool|null
    */
    public function getEmsEnable()
    {
        return $this->container['emsEnable'];
    }

    /**
    * Sets emsEnable
    *
    * @param bool|null $emsEnable **参数解释：** 是否开启EMS加速。 **取值范围：** - TRUE：开启EMS加速。 - FALSE：不开启EMS加速。
    *
    * @return $this
    */
    public function setEmsEnable($emsEnable)
    {
        $this->container['emsEnable'] = $emsEnable;
        return $this;
    }

    /**
    * Gets requestRetryEnable
    *  **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    *
    * @return bool|null
    */
    public function getRequestRetryEnable()
    {
        return $this->container['requestRetryEnable'];
    }

    /**
    * Sets requestRetryEnable
    *
    * @param bool|null $requestRetryEnable **参数解释：** proxy支持请求重调度开关。 **取值范围：** - true：开启proxy支持请求重调度。 - false：不开启proxy支持请求重调度。
    *
    * @return $this
    */
    public function setRequestRetryEnable($requestRetryEnable)
    {
        $this->container['requestRetryEnable'] = $requestRetryEnable;
        return $this;
    }

    /**
    * Gets requestRetryCntMax
    *  **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    *
    * @return int|null
    */
    public function getRequestRetryCntMax()
    {
        return $this->container['requestRetryCntMax'];
    }

    /**
    * Sets requestRetryCntMax
    *
    * @param int|null $requestRetryCntMax **参数解释：** proxy支持请求重调度的重试次数 **取值范围：** [1, 10]。
    *
    * @return $this
    */
    public function setRequestRetryCntMax($requestRetryCntMax)
    {
        $this->container['requestRetryCntMax'] = $requestRetryCntMax;
        return $this;
    }

    /**
    * Gets requestRetryIntervalMs
    *  **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    *
    * @return int|null
    */
    public function getRequestRetryIntervalMs()
    {
        return $this->container['requestRetryIntervalMs'];
    }

    /**
    * Sets requestRetryIntervalMs
    *
    * @param int|null $requestRetryIntervalMs **参数解释：** proxy支持请求重调度的重试间隔，单位ms **取值范围：** [1, 10000]。
    *
    * @return $this
    */
    public function setRequestRetryIntervalMs($requestRetryIntervalMs)
    {
        $this->container['requestRetryIntervalMs'] = $requestRetryIntervalMs;
        return $this;
    }

    /**
    * Gets fuseConfigs
    *  fuseConfigs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FuseConfig|null
    */
    public function getFuseConfigs()
    {
        return $this->container['fuseConfigs'];
    }

    /**
    * Sets fuseConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FuseConfig|null $fuseConfigs fuseConfigs
    *
    * @return $this
    */
    public function setFuseConfigs($fuseConfigs)
    {
        $this->container['fuseConfigs'] = $fuseConfigs;
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

