<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHealthMonitorOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHealthMonitorOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  健康检查间隔。健康检查间隔。取值：1-50s。
    * domainName  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    * expectedCodes  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    * httpMethod  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    * maxRetries  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    * maxRetriesDown  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    * monitorPort  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    * name  健康检查名称。
    * timeout  一次健康检查请求的超时时间。  建议该值小于delay的值。
    * urlPath  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    * type  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'delay' => 'int',
            'domainName' => 'string',
            'expectedCodes' => 'string',
            'httpMethod' => 'string',
            'maxRetries' => 'int',
            'maxRetriesDown' => 'int',
            'monitorPort' => 'int',
            'name' => 'string',
            'timeout' => 'int',
            'urlPath' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  健康检查间隔。健康检查间隔。取值：1-50s。
    * domainName  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    * expectedCodes  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    * httpMethod  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    * maxRetries  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    * maxRetriesDown  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    * monitorPort  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    * name  健康检查名称。
    * timeout  一次健康检查请求的超时时间。  建议该值小于delay的值。
    * urlPath  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    * type  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'delay' => 'int32',
        'domainName' => null,
        'expectedCodes' => null,
        'httpMethod' => null,
        'maxRetries' => 'int32',
        'maxRetriesDown' => 'int32',
        'monitorPort' => 'int32',
        'name' => null,
        'timeout' => 'int32',
        'urlPath' => null,
        'type' => null
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
    * adminStateUp  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  健康检查间隔。健康检查间隔。取值：1-50s。
    * domainName  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    * expectedCodes  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    * httpMethod  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    * maxRetries  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    * maxRetriesDown  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    * monitorPort  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    * name  健康检查名称。
    * timeout  一次健康检查请求的超时时间。  建议该值小于delay的值。
    * urlPath  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    * type  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'delay' => 'delay',
            'domainName' => 'domain_name',
            'expectedCodes' => 'expected_codes',
            'httpMethod' => 'http_method',
            'maxRetries' => 'max_retries',
            'maxRetriesDown' => 'max_retries_down',
            'monitorPort' => 'monitor_port',
            'name' => 'name',
            'timeout' => 'timeout',
            'urlPath' => 'url_path',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  健康检查间隔。健康检查间隔。取值：1-50s。
    * domainName  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    * expectedCodes  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    * httpMethod  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    * maxRetries  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    * maxRetriesDown  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    * monitorPort  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    * name  健康检查名称。
    * timeout  一次健康检查请求的超时时间。  建议该值小于delay的值。
    * urlPath  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    * type  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'delay' => 'setDelay',
            'domainName' => 'setDomainName',
            'expectedCodes' => 'setExpectedCodes',
            'httpMethod' => 'setHttpMethod',
            'maxRetries' => 'setMaxRetries',
            'maxRetriesDown' => 'setMaxRetriesDown',
            'monitorPort' => 'setMonitorPort',
            'name' => 'setName',
            'timeout' => 'setTimeout',
            'urlPath' => 'setUrlPath',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
    * delay  健康检查间隔。健康检查间隔。取值：1-50s。
    * domainName  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    * expectedCodes  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    * httpMethod  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    * maxRetries  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    * maxRetriesDown  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    * monitorPort  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    * name  健康检查名称。
    * timeout  一次健康检查请求的超时时间。  建议该值小于delay的值。
    * urlPath  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    * type  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'delay' => 'getDelay',
            'domainName' => 'getDomainName',
            'expectedCodes' => 'getExpectedCodes',
            'httpMethod' => 'getHttpMethod',
            'maxRetries' => 'getMaxRetries',
            'maxRetriesDown' => 'getMaxRetriesDown',
            'monitorPort' => 'getMonitorPort',
            'name' => 'getName',
            'timeout' => 'getTimeout',
            'urlPath' => 'getUrlPath',
            'type' => 'getType'
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
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_HEAD = 'HEAD';
    const HTTP_METHOD_POST = 'POST';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHttpMethodAllowableValues()
    {
        return [
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_HEAD,
            self::HTTP_METHOD_POST,
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['maxRetriesDown'] = isset($data['maxRetriesDown']) ? $data['maxRetriesDown'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['delay']) && ($this->container['delay'] > 50)) {
                $invalidProperties[] = "invalid value for 'delay', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] < 1)) {
                $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 100)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && !preg_match("/^[a-zA-Z0-9][a-zA-Z0-9-.]*$/", $this->container['domainName'])) {
                $invalidProperties[] = "invalid value for 'domainName', must be conform to the pattern /^[a-zA-Z0-9][a-zA-Z0-9-.]*$/.";
            }
            if (!is_null($this->container['expectedCodes']) && (mb_strlen($this->container['expectedCodes']) > 64)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['expectedCodes']) && (mb_strlen($this->container['expectedCodes']) < 1)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expectedCodes']) && !preg_match("/^(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))(,(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))){0,4}$/", $this->container['expectedCodes'])) {
                $invalidProperties[] = "invalid value for 'expectedCodes', must be conform to the pattern /^(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))(,(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))){0,4}$/.";
            }
            $allowedValues = $this->getHttpMethodAllowableValues();
                if (!is_null($this->container['httpMethod']) && !in_array($this->container['httpMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'httpMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) > 16)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxRetries']) && ($this->container['maxRetries'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['maxRetries']) && ($this->container['maxRetries'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxRetriesDown']) && ($this->container['maxRetriesDown'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['maxRetriesDown']) && ($this->container['maxRetriesDown'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['monitorPort']) && ($this->container['monitorPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['monitorPort']) && ($this->container['monitorPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 50)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) > 80)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be smaller than or equal to 80.";
            }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlPath']) && !preg_match("/^(\/([a-zA-Z0-9-._~!$\\[\\]^%?#&amp;'()*+,;=:@]|(%[a-fA-F0-9]{2}))*)+$/", $this->container['urlPath'])) {
                $invalidProperties[] = "invalid value for 'urlPath', must be conform to the pattern /^(\/([a-zA-Z0-9-._~!$\\[\\]^%?#&amp;'()*+,;=:@]|(%[a-fA-F0-9]{2}))*)+$/.";
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
    *  参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
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
    * @param bool|null $adminStateUp 参数解释：健康检查的管理状态。  取值范围： - true：表示开启健康检查。 - false表示关闭健康检查。
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
    *  健康检查间隔。健康检查间隔。取值：1-50s。
    *
    * @return int|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int|null $delay 健康检查间隔。健康检查间隔。取值：1-50s。
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
    *  发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 发送健康检查请求的域名。  取值：以数字或字母开头，只能包含数字、字母、’-’、’.’。 不能传空，但可传null或不传，表示使用负载均衡器的vip作为http请求的目的地址。  使用说明：当type为HTTP/HTTPS时生效。
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
    *  期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
    *
    * @return string|null
    */
    public function getExpectedCodes()
    {
        return $this->container['expectedCodes'];
    }

    /**
    * Sets expectedCodes
    *
    * @param string|null $expectedCodes 期望响应状态码。  取值： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。
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
    *  HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    *
    * @return string|null
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string|null $httpMethod HTTP请求方法。  取值：GET、HEAD、POST，默认GET。  使用说明：当type为HTTP/HTTPS时生效。
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets maxRetries
    *  健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
    *
    * @return int|null
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int|null $maxRetries 健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。取值范围：1-10。
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
    *  健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
    *
    * @return int|null
    */
    public function getMaxRetriesDown()
    {
        return $this->container['maxRetriesDown'];
    }

    /**
    * Sets maxRetriesDown
    *
    * @param int|null $maxRetriesDown 健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。取值范围：1-10。
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
    *  参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
    *
    * @return int|null
    */
    public function getMonitorPort()
    {
        return $this->container['monitorPort'];
    }

    /**
    * Sets monitorPort
    *
    * @param int|null $monitorPort 参数解释：健康检查端口号。 [约束限制：当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu) 取值范围：1-65535和null，传null表示使用后端服务器端口号。
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
    *  健康检查名称。
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
    * @param string|null $name 健康检查名称。
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
    *  一次健康检查请求的超时时间。  建议该值小于delay的值。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 一次健康检查请求的超时时间。  建议该值小于delay的值。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets urlPath
    *  健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    *
    * @return string|null
    */
    public function getUrlPath()
    {
        return $this->container['urlPath'];
    }

    /**
    * Sets urlPath
    *
    * @param string|null $urlPath 健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  使用说明：当type为HTTP/HTTPS时生效。
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
        return $this;
    }

    /**
    * Gets type
    *  健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 健康检查请求协议。  取值：TCP、UDP_CONNECT、HTTP、HTTPS、TLS和GRPC。  使用说明： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

