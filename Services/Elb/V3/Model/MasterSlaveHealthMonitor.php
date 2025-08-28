<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasterSlaveHealthMonitor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasterSlaveHealthMonitor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    * domainName  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * expectedCodes  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    * httpMethod  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    * id  **参数解释**：健康检查ID  **取值范围**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    * monitorPort  **参数解释**：健康检查端口号。  **取值范围**：1-65535
    * name  **参数解释**：健康检查名称。  **取值范围**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
    * type  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'delay' => 'int',
            'domainName' => 'string',
            'expectedCodes' => 'string',
            'httpMethod' => 'string',
            'id' => 'string',
            'maxRetries' => 'int',
            'maxRetriesDown' => 'int',
            'monitorPort' => 'int',
            'name' => 'string',
            'timeout' => 'int',
            'type' => 'string',
            'urlPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    * domainName  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * expectedCodes  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    * httpMethod  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    * id  **参数解释**：健康检查ID  **取值范围**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    * monitorPort  **参数解释**：健康检查端口号。  **取值范围**：1-65535
    * name  **参数解释**：健康检查名称。  **取值范围**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
    * type  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'delay' => 'int32',
        'domainName' => null,
        'expectedCodes' => null,
        'httpMethod' => null,
        'id' => null,
        'maxRetries' => 'int32',
        'maxRetriesDown' => 'int32',
        'monitorPort' => 'int32',
        'name' => null,
        'timeout' => 'int32',
        'type' => null,
        'urlPath' => null
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
    * adminStateUp  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    * domainName  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * expectedCodes  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    * httpMethod  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    * id  **参数解释**：健康检查ID  **取值范围**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    * monitorPort  **参数解释**：健康检查端口号。  **取值范围**：1-65535
    * name  **参数解释**：健康检查名称。  **取值范围**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
    * type  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'delay' => 'delay',
            'domainName' => 'domain_name',
            'expectedCodes' => 'expected_codes',
            'httpMethod' => 'http_method',
            'id' => 'id',
            'maxRetries' => 'max_retries',
            'maxRetriesDown' => 'max_retries_down',
            'monitorPort' => 'monitor_port',
            'name' => 'name',
            'timeout' => 'timeout',
            'type' => 'type',
            'urlPath' => 'url_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    * domainName  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * expectedCodes  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    * httpMethod  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    * id  **参数解释**：健康检查ID  **取值范围**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    * monitorPort  **参数解释**：健康检查端口号。  **取值范围**：1-65535
    * name  **参数解释**：健康检查名称。  **取值范围**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
    * type  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'delay' => 'setDelay',
            'domainName' => 'setDomainName',
            'expectedCodes' => 'setExpectedCodes',
            'httpMethod' => 'setHttpMethod',
            'id' => 'setId',
            'maxRetries' => 'setMaxRetries',
            'maxRetriesDown' => 'setMaxRetriesDown',
            'monitorPort' => 'setMonitorPort',
            'name' => 'setName',
            'timeout' => 'setTimeout',
            'type' => 'setType',
            'urlPath' => 'setUrlPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    * domainName  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    * expectedCodes  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    * httpMethod  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    * id  **参数解释**：健康检查ID  **取值范围**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    * monitorPort  **参数解释**：健康检查端口号。  **取值范围**：1-65535
    * name  **参数解释**：健康检查名称。  **取值范围**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
    * type  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'delay' => 'getDelay',
            'domainName' => 'getDomainName',
            'expectedCodes' => 'getExpectedCodes',
            'httpMethod' => 'getHttpMethod',
            'id' => 'getId',
            'maxRetries' => 'getMaxRetries',
            'maxRetriesDown' => 'getMaxRetriesDown',
            'monitorPort' => 'getMonitorPort',
            'name' => 'getName',
            'timeout' => 'getTimeout',
            'type' => 'getType',
            'urlPath' => 'getUrlPath'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['maxRetriesDown'] = isset($data['maxRetriesDown']) ? $data['maxRetriesDown'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
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
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['expectedCodes'] === null) {
            $invalidProperties[] = "'expectedCodes' can't be null";
        }
        if ($this->container['httpMethod'] === null) {
            $invalidProperties[] = "'httpMethod' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
        if ($this->container['maxRetriesDown'] === null) {
            $invalidProperties[] = "'maxRetriesDown' can't be null";
        }
            if (($this->container['maxRetriesDown'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be smaller than or equal to 10.";
            }
            if (($this->container['maxRetriesDown'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be bigger than or equal to 1.";
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
        if ($this->container['urlPath'] === null) {
            $invalidProperties[] = "'urlPath' can't be null";
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
    * Gets adminStateUp
    *  **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
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
    * @param bool $adminStateUp **参数解释**：健康检查的管理状态。  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
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
    * @param int $delay **参数解释**：健康检查间隔。  **取值范围**：1-50，单位：秒。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
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
    * @param string $domainName **参数解释**：发送健康检查请求的域名。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets expectedCodes
    *  **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
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
    * @param string $expectedCodes **参数解释**：期望响应状态码。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。
    *
    * @return $this
    */
    public function setExpectedCodes($expectedCodes)
    {
        $this->container['expectedCodes'] = $expectedCodes;
        return $this;
    }

    /**
    * Gets httpMethod
    *  **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
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
    * @param string $httpMethod **约束限制**：HTTP请求方法。  **取值范围**：GET、HEAD、POST
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：健康检查ID  **取值范围**：不涉及
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
    * @param string $id **参数解释**：健康检查ID  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets maxRetries
    *  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
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
    * @param int $maxRetries **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **取值范围**：1-10
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets maxRetriesDown
    *  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    *
    * @return int
    */
    public function getMaxRetriesDown()
    {
        return $this->container['maxRetriesDown'];
    }

    /**
    * Sets maxRetriesDown
    *
    * @param int $maxRetriesDown **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **取值范围**：1-10
    *
    * @return $this
    */
    public function setMaxRetriesDown($maxRetriesDown)
    {
        $this->container['maxRetriesDown'] = $maxRetriesDown;
        return $this;
    }

    /**
    * Gets monitorPort
    *  **参数解释**：健康检查端口号。  **取值范围**：1-65535
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
    * @param int $monitorPort **参数解释**：健康检查端口号。  **取值范围**：1-65535
    *
    * @return $this
    */
    public function setMonitorPort($monitorPort)
    {
        $this->container['monitorPort'] = $monitorPort;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：健康检查名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：健康检查名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets timeout
    *  **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
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
    * @param int $timeout **参数解释**：一次健康检查请求的超时时间。  **取值范围**：不涉及
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
    *  **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
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
    * @param string $type **参数解释**：健康检查请求协议。  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets urlPath
    *  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
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
    * @param string $urlPath **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
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

