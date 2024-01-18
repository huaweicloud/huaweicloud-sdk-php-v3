<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListenerResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListenerResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  监听器ID
    * tenantId  监听器所在的项目ID。
    * name  监听器名称。
    * description  监听器的描述信息
    * adminStateUp  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  监听器绑定的负载均衡器ID的列表。
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    * protocol  监听器的监听协议
    * protocolPort  监听器的监听端口。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * tags  监听器的标签。
    * createdAt  监听器的创建时间。
    * updatedAt  监听器的更新时间。
    * insertHeaders  insertHeaders
    * projectId  监听器所在的项目ID。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'adminStateUp' => 'bool',
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'connectionLimit' => 'int',
            'http2Enable' => 'bool',
            'protocol' => 'string',
            'protocolPort' => 'int',
            'defaultPoolId' => 'string',
            'defaultTlsContainerRef' => 'string',
            'clientCaTlsContainerRef' => 'string',
            'sniContainerRefs' => 'string[]',
            'tags' => 'string[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'insertHeaders' => '\HuaweiCloud\SDK\Elb\V2\Model\InsertHeader',
            'projectId' => 'string',
            'tlsCiphersPolicy' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  监听器ID
    * tenantId  监听器所在的项目ID。
    * name  监听器名称。
    * description  监听器的描述信息
    * adminStateUp  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  监听器绑定的负载均衡器ID的列表。
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    * protocol  监听器的监听协议
    * protocolPort  监听器的监听端口。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * tags  监听器的标签。
    * createdAt  监听器的创建时间。
    * updatedAt  监听器的更新时间。
    * insertHeaders  insertHeaders
    * projectId  监听器所在的项目ID。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'loadbalancers' => null,
        'connectionLimit' => 'int32',
        'http2Enable' => null,
        'protocol' => null,
        'protocolPort' => 'int32',
        'defaultPoolId' => null,
        'defaultTlsContainerRef' => null,
        'clientCaTlsContainerRef' => null,
        'sniContainerRefs' => null,
        'tags' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'insertHeaders' => null,
        'projectId' => null,
        'tlsCiphersPolicy' => null,
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
    * id  监听器ID
    * tenantId  监听器所在的项目ID。
    * name  监听器名称。
    * description  监听器的描述信息
    * adminStateUp  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  监听器绑定的负载均衡器ID的列表。
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    * protocol  监听器的监听协议
    * protocolPort  监听器的监听端口。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * tags  监听器的标签。
    * createdAt  监听器的创建时间。
    * updatedAt  监听器的更新时间。
    * insertHeaders  insertHeaders
    * projectId  监听器所在的项目ID。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'loadbalancers' => 'loadbalancers',
            'connectionLimit' => 'connection_limit',
            'http2Enable' => 'http2_enable',
            'protocol' => 'protocol',
            'protocolPort' => 'protocol_port',
            'defaultPoolId' => 'default_pool_id',
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref',
            'sniContainerRefs' => 'sni_container_refs',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'insertHeaders' => 'insert_headers',
            'projectId' => 'project_id',
            'tlsCiphersPolicy' => 'tls_ciphers_policy',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  监听器ID
    * tenantId  监听器所在的项目ID。
    * name  监听器名称。
    * description  监听器的描述信息
    * adminStateUp  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  监听器绑定的负载均衡器ID的列表。
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    * protocol  监听器的监听协议
    * protocolPort  监听器的监听端口。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * tags  监听器的标签。
    * createdAt  监听器的创建时间。
    * updatedAt  监听器的更新时间。
    * insertHeaders  insertHeaders
    * projectId  监听器所在的项目ID。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'loadbalancers' => 'setLoadbalancers',
            'connectionLimit' => 'setConnectionLimit',
            'http2Enable' => 'setHttp2Enable',
            'protocol' => 'setProtocol',
            'protocolPort' => 'setProtocolPort',
            'defaultPoolId' => 'setDefaultPoolId',
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef',
            'sniContainerRefs' => 'setSniContainerRefs',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'insertHeaders' => 'setInsertHeaders',
            'projectId' => 'setProjectId',
            'tlsCiphersPolicy' => 'setTlsCiphersPolicy',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  监听器ID
    * tenantId  监听器所在的项目ID。
    * name  监听器名称。
    * description  监听器的描述信息
    * adminStateUp  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
    * loadbalancers  监听器绑定的负载均衡器ID的列表。
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    * protocol  监听器的监听协议
    * protocolPort  监听器的监听端口。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * tags  监听器的标签。
    * createdAt  监听器的创建时间。
    * updatedAt  监听器的更新时间。
    * insertHeaders  insertHeaders
    * projectId  监听器所在的项目ID。
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'loadbalancers' => 'getLoadbalancers',
            'connectionLimit' => 'getConnectionLimit',
            'http2Enable' => 'getHttp2Enable',
            'protocol' => 'getProtocol',
            'protocolPort' => 'getProtocolPort',
            'defaultPoolId' => 'getDefaultPoolId',
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef',
            'sniContainerRefs' => 'getSniContainerRefs',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'insertHeaders' => 'getInsertHeaders',
            'projectId' => 'getProjectId',
            'tlsCiphersPolicy' => 'getTlsCiphersPolicy',
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
    const PROTOCOL_TERMINATED_HTTPS = 'TERMINATED_HTTPS';
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
            self::PROTOCOL_TERMINATED_HTTPS,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['loadbalancers'] = isset($data['loadbalancers']) ? $data['loadbalancers'] : null;
        $this->container['connectionLimit'] = isset($data['connectionLimit']) ? $data['connectionLimit'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['defaultPoolId'] = isset($data['defaultPoolId']) ? $data['defaultPoolId'] : null;
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
        $this->container['sniContainerRefs'] = isset($data['sniContainerRefs']) ? $data['sniContainerRefs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['insertHeaders'] = isset($data['insertHeaders']) ? $data['insertHeaders'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tlsCiphersPolicy'] = isset($data['tlsCiphersPolicy']) ? $data['tlsCiphersPolicy'] : null;
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
        if ($this->container['connectionLimit'] === null) {
            $invalidProperties[] = "'connectionLimit' can't be null";
        }
            if (($this->container['connectionLimit'] < -1)) {
                $invalidProperties[] = "invalid value for 'connectionLimit', must be bigger than or equal to -1.";
            }
        if ($this->container['http2Enable'] === null) {
            $invalidProperties[] = "'http2Enable' can't be null";
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

        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
        }
            if (($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
            }
        if ($this->container['defaultPoolId'] === null) {
            $invalidProperties[] = "'defaultPoolId' can't be null";
        }
        if ($this->container['defaultTlsContainerRef'] === null) {
            $invalidProperties[] = "'defaultTlsContainerRef' can't be null";
        }
        if ($this->container['clientCaTlsContainerRef'] === null) {
            $invalidProperties[] = "'clientCaTlsContainerRef' can't be null";
        }
        if ($this->container['sniContainerRefs'] === null) {
            $invalidProperties[] = "'sniContainerRefs' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 19)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if ((mb_strlen($this->container['updatedAt']) > 19)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['insertHeaders'] === null) {
            $invalidProperties[] = "'insertHeaders' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['tlsCiphersPolicy'] === null) {
            $invalidProperties[] = "'tlsCiphersPolicy' can't be null";
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
    *  监听器ID
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
    * @param string $id 监听器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  监听器所在的项目ID。
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
    * @param string $tenantId 监听器所在的项目ID。
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
    *  监听器名称。
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
    * @param string $name 监听器名称。
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
    *  监听器的描述信息
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
    * @param string $description 监听器的描述信息
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
    *  监听器的管理状态。只支持设定为true，该字段的值无实际意义。
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
    * @param bool $adminStateUp 监听器的管理状态。只支持设定为true，该字段的值无实际意义。
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
    *  监听器绑定的负载均衡器ID的列表。
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
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $loadbalancers 监听器绑定的负载均衡器ID的列表。
    *
    * @return $this
    */
    public function setLoadbalancers($loadbalancers)
    {
        $this->container['loadbalancers'] = $loadbalancers;
        return $this;
    }

    /**
    * Gets connectionLimit
    *  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    *
    * @return int
    */
    public function getConnectionLimit()
    {
        return $this->container['connectionLimit'];
    }

    /**
    * Sets connectionLimit
    *
    * @param int $connectionLimit 监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    *
    * @return $this
    */
    public function setConnectionLimit($connectionLimit)
    {
        $this->container['connectionLimit'] = $connectionLimit;
        return $this;
    }

    /**
    * Gets http2Enable
    *  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    *
    * @return bool
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool $http2Enable HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时生效。
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets protocol
    *  监听器的监听协议
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
    * @param string $protocol 监听器的监听协议
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
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort 监听器的监听端口。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets defaultPoolId
    *  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    *
    * @return string
    */
    public function getDefaultPoolId()
    {
        return $this->container['defaultPoolId'];
    }

    /**
    * Sets defaultPoolId
    *
    * @param string $defaultPoolId 监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
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
    * @return string
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string $defaultTlsContainerRef 监听器使用的服务器证书ID。
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
    * @return string
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string $clientCaTlsContainerRef 监听器使用的CA证书ID。
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
        return $this;
    }

    /**
    * Gets sniContainerRefs
    *  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    *
    * @return string[]
    */
    public function getSniContainerRefs()
    {
        return $this->container['sniContainerRefs'];
    }

    /**
    * Sets sniContainerRefs
    *
    * @param string[] $sniContainerRefs 监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    *
    * @return $this
    */
    public function setSniContainerRefs($sniContainerRefs)
    {
        $this->container['sniContainerRefs'] = $sniContainerRefs;
        return $this;
    }

    /**
    * Gets tags
    *  监听器的标签。
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 监听器的标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  监听器的创建时间。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 监听器的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  监听器的更新时间。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 监听器的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets insertHeaders
    *  insertHeaders
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\InsertHeader
    */
    public function getInsertHeaders()
    {
        return $this->container['insertHeaders'];
    }

    /**
    * Sets insertHeaders
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\InsertHeader $insertHeaders insertHeaders
    *
    * @return $this
    */
    public function setInsertHeaders($insertHeaders)
    {
        $this->container['insertHeaders'] = $insertHeaders;
        return $this;
    }

    /**
    * Gets projectId
    *  监听器所在的项目ID。
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
    * @param string $projectId 监听器所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tlsCiphersPolicy
    *  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    *
    * @return string
    */
    public function getTlsCiphersPolicy()
    {
        return $this->container['tlsCiphersPolicy'];
    }

    /**
    * Sets tlsCiphersPolicy
    *
    * @param string $tlsCiphersPolicy 监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效，且默认值为tls-1-0。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略
    *
    * @return $this
    */
    public function setTlsCiphersPolicy($tlsCiphersPolicy)
    {
        $this->container['tlsCiphersPolicy'] = $tlsCiphersPolicy;
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
    *  设置保护的原因。 >仅当protection_status为consoleProtection时有效。
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
    * @param string|null $protectionReason 设置保护的原因。 >仅当protection_status为consoleProtection时有效。
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

