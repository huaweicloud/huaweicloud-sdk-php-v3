<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRedirectUrlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRedirectUrlConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    * host  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    * port  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    * path  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    * query  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    * statusCode  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'host' => 'string',
            'port' => 'string',
            'path' => 'string',
            'query' => 'string',
            'statusCode' => 'string',
            'insertHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig',
            'removeHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    * host  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    * port  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    * path  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    * query  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    * statusCode  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'host' => null,
        'port' => null,
        'path' => null,
        'query' => null,
        'statusCode' => null,
        'insertHeadersConfig' => null,
        'removeHeadersConfig' => null
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
    * protocol  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    * host  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    * port  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    * path  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    * query  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    * statusCode  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'host' => 'host',
            'port' => 'port',
            'path' => 'path',
            'query' => 'query',
            'statusCode' => 'status_code',
            'insertHeadersConfig' => 'insert_headers_config',
            'removeHeadersConfig' => 'remove_headers_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    * host  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    * port  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    * path  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    * query  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    * statusCode  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'host' => 'setHost',
            'port' => 'setPort',
            'path' => 'setPath',
            'query' => 'setQuery',
            'statusCode' => 'setStatusCode',
            'insertHeadersConfig' => 'setInsertHeadersConfig',
            'removeHeadersConfig' => 'setRemoveHeadersConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    * host  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    * port  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    * path  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    * query  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    * statusCode  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'host' => 'getHost',
            'port' => 'getPort',
            'path' => 'getPath',
            'query' => 'getQuery',
            'statusCode' => 'getStatusCode',
            'insertHeadersConfig' => 'getInsertHeadersConfig',
            'removeHeadersConfig' => 'getRemoveHeadersConfig'
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
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const PROTOCOL__PROTOCOL = '${protocol}';
    const STATUS_CODE__301 = '301';
    const STATUS_CODE__302 = '302';
    const STATUS_CODE__303 = '303';
    const STATUS_CODE__307 = '307';
    const STATUS_CODE__308 = '308';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
            self::PROTOCOL__PROTOCOL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusCodeAllowableValues()
    {
        return [
            self::STATUS_CODE__301,
            self::STATUS_CODE__302,
            self::STATUS_CODE__303,
            self::STATUS_CODE__307,
            self::STATUS_CODE__308,
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['insertHeadersConfig'] = isset($data['insertHeadersConfig']) ? $data['insertHeadersConfig'] : null;
        $this->container['removeHeadersConfig'] = isset($data['removeHeadersConfig']) ? $data['removeHeadersConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) > 128)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) < 1)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) > 16)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) < 1)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 128)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 128)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 0)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
        }
            $allowedValues = $this->getStatusCodeAllowableValues();
                if (!is_null($this->container['statusCode']) && !in_array($this->container['statusCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statusCode', must be one of '%s'",
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
    *  参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
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
    * @param string|null $protocol 参数解释：重定向的协议。  取值范围： - HTTP - HTTPS - ${protocol}，表示继承原值（即与被转发请求保持一致）。  默认取值：${protocol}
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets host
    *  参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 参数解释：重定向的主机名。  取值范围：字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets port
    *  参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 参数解释：重定向到的端口。  默认取值：${port}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets path
    *  参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 参数解释：重定向的路径。  取值范围：只能包含英文字母、数字、_~';@^-%#&$.\\*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${path}，表示继承原值（即与被转发请求保持一致）。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets query
    *  参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 参数解释：重定向的查询字符串。举例如下：  将query设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.example.com:8080/elb?type=loadbalancer）时，将会重定向到 https://www.example.com:8080/elb?type=loadbalancer&name=my_name。在例子中${query}表示type=loadbalancer。  取值范围：只能包含英文字母、数字和特殊字符：!$&'()\\*+,-./:;=?@^_`。字母区分大小写。其中$1，$2会匹配请求url通配符星号（\\*）  默认取值：${query}表示继承原值（即与被转发请求保持一致）
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets statusCode
    *  参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @return string
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string $statusCode 参数解释：重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets insertHeadersConfig
    *  insertHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig|null
    */
    public function getInsertHeadersConfig()
    {
        return $this->container['insertHeadersConfig'];
    }

    /**
    * Sets insertHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig|null $insertHeadersConfig insertHeadersConfig
    *
    * @return $this
    */
    public function setInsertHeadersConfig($insertHeadersConfig)
    {
        $this->container['insertHeadersConfig'] = $insertHeadersConfig;
        return $this;
    }

    /**
    * Gets removeHeadersConfig
    *  removeHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig|null
    */
    public function getRemoveHeadersConfig()
    {
        return $this->container['removeHeadersConfig'];
    }

    /**
    * Sets removeHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig|null $removeHeadersConfig removeHeadersConfig
    *
    * @return $this
    */
    public function setRemoveHeadersConfig($removeHeadersConfig)
    {
        $this->container['removeHeadersConfig'] = $removeHeadersConfig;
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

