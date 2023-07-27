<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthmonitorResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthmonitorResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  健康检查ID
    * projectId  健康检查所在的项目ID。
    * tenantId  健康检查所在的项目ID。
    * name  健康检查名称。
    * adminStateUp  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * monitorPort  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    * timeout  健康检查的超时时间。建议该值小于delay的值。
    * type  健康检查类型
    * expectedCodes  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * domainName  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * urlPath  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * httpMethod  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * delay  健康检查间隔，单位秒
    * maxRetries  最大重试次数
    * pools  健康检查关联的后端云服务器组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'monitorPort' => 'int',
            'timeout' => 'int',
            'type' => 'string',
            'expectedCodes' => 'string',
            'domainName' => 'string',
            'urlPath' => 'string',
            'httpMethod' => 'string',
            'delay' => 'int',
            'maxRetries' => 'int',
            'pools' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  健康检查ID
    * projectId  健康检查所在的项目ID。
    * tenantId  健康检查所在的项目ID。
    * name  健康检查名称。
    * adminStateUp  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * monitorPort  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    * timeout  健康检查的超时时间。建议该值小于delay的值。
    * type  健康检查类型
    * expectedCodes  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * domainName  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * urlPath  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * httpMethod  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * delay  健康检查间隔，单位秒
    * maxRetries  最大重试次数
    * pools  健康检查关联的后端云服务器组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'tenantId' => null,
        'name' => null,
        'adminStateUp' => null,
        'monitorPort' => 'int32',
        'timeout' => 'int32',
        'type' => null,
        'expectedCodes' => null,
        'domainName' => null,
        'urlPath' => null,
        'httpMethod' => null,
        'delay' => 'int32',
        'maxRetries' => 'int32',
        'pools' => null
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
    * id  健康检查ID
    * projectId  健康检查所在的项目ID。
    * tenantId  健康检查所在的项目ID。
    * name  健康检查名称。
    * adminStateUp  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * monitorPort  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    * timeout  健康检查的超时时间。建议该值小于delay的值。
    * type  健康检查类型
    * expectedCodes  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * domainName  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * urlPath  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * httpMethod  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * delay  健康检查间隔，单位秒
    * maxRetries  最大重试次数
    * pools  健康检查关联的后端云服务器组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'monitorPort' => 'monitor_port',
            'timeout' => 'timeout',
            'type' => 'type',
            'expectedCodes' => 'expected_codes',
            'domainName' => 'domain_name',
            'urlPath' => 'url_path',
            'httpMethod' => 'http_method',
            'delay' => 'delay',
            'maxRetries' => 'max_retries',
            'pools' => 'pools'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  健康检查ID
    * projectId  健康检查所在的项目ID。
    * tenantId  健康检查所在的项目ID。
    * name  健康检查名称。
    * adminStateUp  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * monitorPort  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    * timeout  健康检查的超时时间。建议该值小于delay的值。
    * type  健康检查类型
    * expectedCodes  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * domainName  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * urlPath  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * httpMethod  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * delay  健康检查间隔，单位秒
    * maxRetries  最大重试次数
    * pools  健康检查关联的后端云服务器组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'monitorPort' => 'setMonitorPort',
            'timeout' => 'setTimeout',
            'type' => 'setType',
            'expectedCodes' => 'setExpectedCodes',
            'domainName' => 'setDomainName',
            'urlPath' => 'setUrlPath',
            'httpMethod' => 'setHttpMethod',
            'delay' => 'setDelay',
            'maxRetries' => 'setMaxRetries',
            'pools' => 'setPools'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  健康检查ID
    * projectId  健康检查所在的项目ID。
    * tenantId  健康检查所在的项目ID。
    * name  健康检查名称。
    * adminStateUp  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * monitorPort  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    * timeout  健康检查的超时时间。建议该值小于delay的值。
    * type  健康检查类型
    * expectedCodes  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * domainName  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * urlPath  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * httpMethod  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    * delay  健康检查间隔，单位秒
    * maxRetries  最大重试次数
    * pools  健康检查关联的后端云服务器组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'monitorPort' => 'getMonitorPort',
            'timeout' => 'getTimeout',
            'type' => 'getType',
            'expectedCodes' => 'getExpectedCodes',
            'domainName' => 'getDomainName',
            'urlPath' => 'getUrlPath',
            'httpMethod' => 'getHttpMethod',
            'delay' => 'getDelay',
            'maxRetries' => 'getMaxRetries',
            'pools' => 'getPools'
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
    const TYPE_TCP = 'TCP';
    const TYPE_UDP_CONNECT = 'UDP_CONNECT';
    const TYPE_HTTP = 'HTTP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TCP,
            self::TYPE_UDP_CONNECT,
            self::TYPE_HTTP,
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
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
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['monitorPort'] === null) {
            $invalidProperties[] = "'monitorPort' can't be null";
        }
            if (($this->container['monitorPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['monitorPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be bigger than or equal to 1.";
            }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] > 50)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 50.";
            }
            if (($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['expectedCodes'] === null) {
            $invalidProperties[] = "'expectedCodes' can't be null";
        }
            if ((mb_strlen($this->container['expectedCodes']) > 64)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['expectedCodes']) < 1)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 100)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['urlPath'] === null) {
            $invalidProperties[] = "'urlPath' can't be null";
        }
            if ((mb_strlen($this->container['urlPath']) > 16)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['urlPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['httpMethod'] === null) {
            $invalidProperties[] = "'httpMethod' can't be null";
        }
        if ($this->container['delay'] === null) {
            $invalidProperties[] = "'delay' can't be null";
        }
            if (($this->container['delay'] > 50)) {
                $invalidProperties[] = "invalid value for 'delay', must be smaller than or equal to 50.";
            }
            if (($this->container['delay'] < 1)) {
                $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 1.";
            }
        if ($this->container['maxRetries'] === null) {
            $invalidProperties[] = "'maxRetries' can't be null";
        }
            if (($this->container['maxRetries'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be smaller than or equal to 10.";
            }
            if (($this->container['maxRetries'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be bigger than or equal to 1.";
            }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
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
    *  健康检查ID
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
    * @param string $id 健康检查ID
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
    *  健康检查所在的项目ID。
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
    * @param string $projectId 健康检查所在的项目ID。
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
    *  健康检查所在的项目ID。
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
    * @param string $tenantId 健康检查所在的项目ID。
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
    *  健康检查名称。
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
    * @param string $name 健康检查名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
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
    * @param bool $adminStateUp 健康检查的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets monitorPort
    *  健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    *
    * @return int
    */
    public function getMonitorPort()
    {
        return $this->container['monitorPort'];
    }

    /**
    * Sets monitorPort
    *
    * @param int $monitorPort 健康检查端口号。默认为空，表示使用后端云服务器组的端口。
    *
    * @return $this
    */
    public function setMonitorPort($monitorPort)
    {
        $this->container['monitorPort'] = $monitorPort;
        return $this;
    }

    /**
    * Gets timeout
    *  健康检查的超时时间。建议该值小于delay的值。
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 健康检查的超时时间。建议该值小于delay的值。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets type
    *  健康检查类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 健康检查类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets expectedCodes
    *  期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return string
    */
    public function getExpectedCodes()
    {
        return $this->container['expectedCodes'];
    }

    /**
    * Sets expectedCodes
    *
    * @param string $expectedCodes 期望HTTP响应状态码，指定下列值：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setExpectedCodes($expectedCodes)
    {
        $this->container['expectedCodes'] = $expectedCodes;
        return $this;
    }

    /**
    * Gets domainName
    *  功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 功能说明：健康检查测试member健康状态时，发送的http请求的域名。仅当type为HTTP时生效。使用说明：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets urlPath
    *  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return string
    */
    public function getUrlPath()
    {
        return $this->container['urlPath'];
    }

    /**
    * Sets urlPath
    *
    * @param string $urlPath HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
        return $this;
    }

    /**
    * Gets httpMethod
    *  HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return string
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string $httpMethod HTTP方法，可以为GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets delay
    *  健康检查间隔，单位秒
    *
    * @return int
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int $delay 健康检查间隔，单位秒
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets maxRetries
    *  最大重试次数
    *
    * @return int
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int $maxRetries 最大重试次数
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets pools
    *  健康检查关联的后端云服务器组列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $pools 健康检查关联的后端云服务器组列表
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
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

