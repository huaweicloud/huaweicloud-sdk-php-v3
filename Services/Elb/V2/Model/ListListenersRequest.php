<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListListenersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListListenersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的监听器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  监听器ID。
    * name  监听器名称。
    * description  监听器的描述信息。
    * loadbalancerId  监听器所在的负载均衡器ID。
    * connectionLimit  监听器的最大连接数。
    * adminStateUp  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    * defaultPoolId  监听器的默认后端云服务器组ID。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * protocol  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    * protocolPort  监听器的监听端口。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    * tlsContainerId  查询证书所关联的监听器
    * http2Enable  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'loadbalancerId' => 'string',
            'connectionLimit' => 'int',
            'adminStateUp' => 'bool',
            'defaultPoolId' => 'string',
            'defaultTlsContainerRef' => 'string',
            'clientCaTlsContainerRef' => 'string',
            'protocol' => 'string',
            'protocolPort' => 'int',
            'tlsCiphersPolicy' => 'string',
            'tlsContainerId' => 'string',
            'http2Enable' => 'bool',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的监听器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  监听器ID。
    * name  监听器名称。
    * description  监听器的描述信息。
    * loadbalancerId  监听器所在的负载均衡器ID。
    * connectionLimit  监听器的最大连接数。
    * adminStateUp  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    * defaultPoolId  监听器的默认后端云服务器组ID。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * protocol  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    * protocolPort  监听器的监听端口。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    * tlsContainerId  查询证书所关联的监听器
    * http2Enable  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'loadbalancerId' => null,
        'connectionLimit' => 'int32',
        'adminStateUp' => null,
        'defaultPoolId' => null,
        'defaultTlsContainerRef' => null,
        'clientCaTlsContainerRef' => null,
        'protocol' => null,
        'protocolPort' => 'int32',
        'tlsCiphersPolicy' => null,
        'tlsContainerId' => null,
        'http2Enable' => null,
        'enterpriseProjectId' => null
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
    * limit  分页查询中每页的监听器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  监听器ID。
    * name  监听器名称。
    * description  监听器的描述信息。
    * loadbalancerId  监听器所在的负载均衡器ID。
    * connectionLimit  监听器的最大连接数。
    * adminStateUp  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    * defaultPoolId  监听器的默认后端云服务器组ID。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * protocol  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    * protocolPort  监听器的监听端口。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    * tlsContainerId  查询证书所关联的监听器
    * http2Enable  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'loadbalancerId' => 'loadbalancer_id',
            'connectionLimit' => 'connection_limit',
            'adminStateUp' => 'admin_state_up',
            'defaultPoolId' => 'default_pool_id',
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref',
            'protocol' => 'protocol',
            'protocolPort' => 'protocol_port',
            'tlsCiphersPolicy' => 'tls_ciphers_policy',
            'tlsContainerId' => 'tls_container_id',
            'http2Enable' => 'http2_enable',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的监听器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  监听器ID。
    * name  监听器名称。
    * description  监听器的描述信息。
    * loadbalancerId  监听器所在的负载均衡器ID。
    * connectionLimit  监听器的最大连接数。
    * adminStateUp  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    * defaultPoolId  监听器的默认后端云服务器组ID。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * protocol  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    * protocolPort  监听器的监听端口。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    * tlsContainerId  查询证书所关联的监听器
    * http2Enable  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'loadbalancerId' => 'setLoadbalancerId',
            'connectionLimit' => 'setConnectionLimit',
            'adminStateUp' => 'setAdminStateUp',
            'defaultPoolId' => 'setDefaultPoolId',
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef',
            'protocol' => 'setProtocol',
            'protocolPort' => 'setProtocolPort',
            'tlsCiphersPolicy' => 'setTlsCiphersPolicy',
            'tlsContainerId' => 'setTlsContainerId',
            'http2Enable' => 'setHttp2Enable',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的监听器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  监听器ID。
    * name  监听器名称。
    * description  监听器的描述信息。
    * loadbalancerId  监听器所在的负载均衡器ID。
    * connectionLimit  监听器的最大连接数。
    * adminStateUp  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    * defaultPoolId  监听器的默认后端云服务器组ID。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * protocol  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    * protocolPort  监听器的监听端口。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    * tlsContainerId  查询证书所关联的监听器
    * http2Enable  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'loadbalancerId' => 'getLoadbalancerId',
            'connectionLimit' => 'getConnectionLimit',
            'adminStateUp' => 'getAdminStateUp',
            'defaultPoolId' => 'getDefaultPoolId',
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef',
            'protocol' => 'getProtocol',
            'protocolPort' => 'getProtocolPort',
            'tlsCiphersPolicy' => 'getTlsCiphersPolicy',
            'tlsContainerId' => 'getTlsContainerId',
            'http2Enable' => 'getHttp2Enable',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['connectionLimit'] = isset($data['connectionLimit']) ? $data['connectionLimit'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['defaultPoolId'] = isset($data['defaultPoolId']) ? $data['defaultPoolId'] : null;
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['tlsCiphersPolicy'] = isset($data['tlsCiphersPolicy']) ? $data['tlsCiphersPolicy'] : null;
        $this->container['tlsContainerId'] = isset($data['tlsContainerId']) ? $data['tlsContainerId'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets limit
    *  分页查询中每页的监听器个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页查询中每页的监听器个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的监听器的id。不指定时表示查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  监听器ID。
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
    * @param string|null $id 监听器ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  监听器名称。
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
    * @param string|null $name 监听器名称。
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
    *  监听器的描述信息。
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
    * @param string|null $description 监听器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  监听器所在的负载均衡器ID。
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
    * @param string|null $loadbalancerId 监听器所在的负载均衡器ID。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets connectionLimit
    *  监听器的最大连接数。
    *
    * @return int|null
    */
    public function getConnectionLimit()
    {
        return $this->container['connectionLimit'];
    }

    /**
    * Sets connectionLimit
    *
    * @param int|null $connectionLimit 监听器的最大连接数。
    *
    * @return $this
    */
    public function setConnectionLimit($connectionLimit)
    {
        $this->container['connectionLimit'] = $connectionLimit;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
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
    * @param bool|null $adminStateUp 监听器的管理状态。该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets defaultPoolId
    *  监听器的默认后端云服务器组ID。
    *
    * @return string|null
    */
    public function getDefaultPoolId()
    {
        return $this->container['defaultPoolId'];
    }

    /**
    * Sets defaultPoolId
    *
    * @param string|null $defaultPoolId 监听器的默认后端云服务器组ID。
    *
    * @return $this
    */
    public function setDefaultPoolId($defaultPoolId)
    {
        $this->container['defaultPoolId'] = $defaultPoolId;
        return $this;
    }

    /**
    * Gets defaultTlsContainerRef
    *  监听器使用的服务器证书ID。
    *
    * @return string|null
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string|null $defaultTlsContainerRef 监听器使用的服务器证书ID。
    *
    * @return $this
    */
    public function setDefaultTlsContainerRef($defaultTlsContainerRef)
    {
        $this->container['defaultTlsContainerRef'] = $defaultTlsContainerRef;
        return $this;
    }

    /**
    * Gets clientCaTlsContainerRef
    *  监听器使用的CA证书ID。
    *
    * @return string|null
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string|null $clientCaTlsContainerRef 监听器使用的CA证书ID。
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
        return $this;
    }

    /**
    * Gets protocol
    *  监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 监听器的监听协议。取值范围：TCP、HTTP、UDP、TERMINATED_HTTPS。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocolPort
    *  监听器的监听端口。
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 监听器的监听端口。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets tlsCiphersPolicy
    *  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    *
    * @return string|null
    */
    public function getTlsCiphersPolicy()
    {
        return $this->container['tlsCiphersPolicy'];
    }

    /**
    * Sets tlsCiphersPolicy
    *
    * @param string|null $tlsCiphersPolicy 监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict四种安全策略。
    *
    * @return $this
    */
    public function setTlsCiphersPolicy($tlsCiphersPolicy)
    {
        $this->container['tlsCiphersPolicy'] = $tlsCiphersPolicy;
        return $this;
    }

    /**
    * Gets tlsContainerId
    *  查询证书所关联的监听器
    *
    * @return string|null
    */
    public function getTlsContainerId()
    {
        return $this->container['tlsContainerId'];
    }

    /**
    * Sets tlsContainerId
    *
    * @param string|null $tlsContainerId 查询证书所关联的监听器
    *
    * @return $this
    */
    public function setTlsContainerId($tlsContainerId)
    {
        $this->container['tlsContainerId'] = $tlsContainerId;
        return $this;
    }

    /**
    * Gets http2Enable
    *  HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    *
    * @return bool|null
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool|null $http2Enable HTTP2功能的开启状态。取值范围：true/false。true：开启。false：关闭。
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
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
    * @param string|null $enterpriseProjectId 企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

