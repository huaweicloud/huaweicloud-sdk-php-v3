<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHealthmonitorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHealthmonitorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的健康检查个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  健康检查ID。
    * name  健康检查名称。
    * delay  健康检查间隔，单位秒，取值范围[1，50]。
    * maxRetries  健康检查最大重试次数，取值范围[1，10]。
    * adminStateUp  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    * timeout  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
    * type  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    * monitorPort  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    * expectedCodes  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
    * domainName  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
    * urlPath  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
    * httpMethod  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'delay' => 'int',
            'maxRetries' => 'int',
            'adminStateUp' => 'bool',
            'timeout' => 'int',
            'type' => 'string',
            'monitorPort' => 'int',
            'expectedCodes' => 'string',
            'domainName' => 'string',
            'urlPath' => 'string',
            'httpMethod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的健康检查个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  健康检查ID。
    * name  健康检查名称。
    * delay  健康检查间隔，单位秒，取值范围[1，50]。
    * maxRetries  健康检查最大重试次数，取值范围[1，10]。
    * adminStateUp  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    * timeout  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
    * type  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    * monitorPort  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    * expectedCodes  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
    * domainName  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
    * urlPath  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
    * httpMethod  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'delay' => 'int32',
        'maxRetries' => 'int32',
        'adminStateUp' => null,
        'timeout' => 'int32',
        'type' => null,
        'monitorPort' => 'int32',
        'expectedCodes' => null,
        'domainName' => null,
        'urlPath' => null,
        'httpMethod' => null
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
    * limit  分页查询中每页的健康检查个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  健康检查ID。
    * name  健康检查名称。
    * delay  健康检查间隔，单位秒，取值范围[1，50]。
    * maxRetries  健康检查最大重试次数，取值范围[1，10]。
    * adminStateUp  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    * timeout  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
    * type  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    * monitorPort  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    * expectedCodes  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
    * domainName  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
    * urlPath  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
    * httpMethod  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'delay' => 'delay',
            'maxRetries' => 'max_retries',
            'adminStateUp' => 'admin_state_up',
            'timeout' => 'timeout',
            'type' => 'type',
            'monitorPort' => 'monitor_port',
            'expectedCodes' => 'expected_codes',
            'domainName' => 'domain_name',
            'urlPath' => 'url_path',
            'httpMethod' => 'http_method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的健康检查个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  健康检查ID。
    * name  健康检查名称。
    * delay  健康检查间隔，单位秒，取值范围[1，50]。
    * maxRetries  健康检查最大重试次数，取值范围[1，10]。
    * adminStateUp  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    * timeout  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
    * type  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    * monitorPort  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    * expectedCodes  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
    * domainName  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
    * urlPath  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
    * httpMethod  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'delay' => 'setDelay',
            'maxRetries' => 'setMaxRetries',
            'adminStateUp' => 'setAdminStateUp',
            'timeout' => 'setTimeout',
            'type' => 'setType',
            'monitorPort' => 'setMonitorPort',
            'expectedCodes' => 'setExpectedCodes',
            'domainName' => 'setDomainName',
            'urlPath' => 'setUrlPath',
            'httpMethod' => 'setHttpMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的健康检查个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  健康检查ID。
    * name  健康检查名称。
    * delay  健康检查间隔，单位秒，取值范围[1，50]。
    * maxRetries  健康检查最大重试次数，取值范围[1，10]。
    * adminStateUp  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    * timeout  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
    * type  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    * monitorPort  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    * expectedCodes  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
    * domainName  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
    * urlPath  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
    * httpMethod  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'delay' => 'getDelay',
            'maxRetries' => 'getMaxRetries',
            'adminStateUp' => 'getAdminStateUp',
            'timeout' => 'getTimeout',
            'type' => 'getType',
            'monitorPort' => 'getMonitorPort',
            'expectedCodes' => 'getExpectedCodes',
            'domainName' => 'getDomainName',
            'urlPath' => 'getUrlPath',
            'httpMethod' => 'getHttpMethod'
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
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
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
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 100)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) > 80)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be smaller than or equal to 80.";
            }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) > 16)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be bigger than or equal to 0.";
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
    *  分页查询中每页的健康检查个数
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
    * @param int|null $limit 分页查询中每页的健康检查个数
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
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
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
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的健康检查的id。不指定时表示查询第一页。
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
    *  健康检查ID。
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
    * @param string|null $id 健康检查ID。
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
    * Gets delay
    *  健康检查间隔，单位秒，取值范围[1，50]。
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
    * @param int|null $delay 健康检查间隔，单位秒，取值范围[1，50]。
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
    *  健康检查最大重试次数，取值范围[1，10]。
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
    * @param int|null $maxRetries 健康检查最大重试次数，取值范围[1，10]。
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
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
    * @param bool|null $adminStateUp 健康检查的管理状态。取值范围：true/false。默认为true；true表示开启健康检查；false表示关闭健康检查。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets timeout
    *  健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
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
    * @param int|null $timeout 健康检查超时时间，单位秒，取值范围[1，50]。 建议该值小于delay的值。
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
    *  健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
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
    * @param string|null $type 健康检查的类型。取值范围：TCP、UDP_CONNECT、HTTP。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets monitorPort
    *  健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
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
    * @param int|null $monitorPort 健康检查端口号]。默认为空，表示使用后端云服务器的protocol_port作为健康检查的检查端口。
    *
    * @return $this
    */
    public function setMonitorPort($monitorPort)
    {
        $this->container['monitorPort'] = $monitorPort;
        return $this;
    }

    /**
    * Gets expectedCodes
    *  期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
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
    * @param string|null $expectedCodes 期望HTTP响应状态码；默认值：“200”。取值范围：单值，例如200；列表，例如200，202；区间，例如200-204。仅当type为HTTP时生效。 该字段为预留字段，暂未启用。
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
    *  健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
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
    * @param string|null $domainName 健康检查时，发送的http请求的域名。仅当type为HTTP时生效。默认为空，表示使用负载均衡器的vip_address作为http请求的目的地址。以数字或字母开头，只能包含数字、字母、’-’、’.’。例如：www.huaweitest.com
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
    *  健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
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
    * @param string|null $urlPath 健康检查时发送的http请求路径。默认为“/”。以“/”开头。仅当type为HTTP时生效。例如：“/test”
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
    *  HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
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
    * @param string|null $httpMethod HTTP请求的方法；默认值：GET取值范围：GET、HEAD、POST、PUT、DELETE、TRACE、OPTIONS、CONNECT、PATCH。仅当type为HTTP时生效。
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
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

