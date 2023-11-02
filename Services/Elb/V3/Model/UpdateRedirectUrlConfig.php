<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRedirectUrlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRedirectUrlConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
    * host  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
    * port  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
    * path  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
    * query  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
    * statusCode  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'host' => 'string',
            'port' => 'string',
            'path' => 'string',
            'query' => 'string',
            'statusCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
    * host  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
    * port  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
    * path  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
    * query  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
    * statusCode  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'host' => null,
        'port' => null,
        'path' => null,
        'query' => null,
        'statusCode' => null
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
    * protocol  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
    * host  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
    * port  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
    * path  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
    * query  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
    * statusCode  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'host' => 'host',
            'port' => 'port',
            'path' => 'path',
            'query' => 'query',
            'statusCode' => 'status_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
    * host  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
    * port  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
    * path  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
    * query  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
    * statusCode  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'host' => 'setHost',
            'port' => 'setPort',
            'path' => 'setPath',
            'query' => 'setQuery',
            'statusCode' => 'setStatusCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
    * host  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
    * port  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
    * path  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
    * query  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
    * statusCode  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'host' => 'getHost',
            'port' => 'getPort',
            'path' => 'getPath',
            'query' => 'getQuery',
            'statusCode' => 'getStatusCode'
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

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 36)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
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
            $allowedValues = $this->getStatusCodeAllowableValues();
                if (!is_null($this->container['statusCode']) && !in_array($this->container['statusCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statusCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['statusCode']) && (mb_strlen($this->container['statusCode']) > 16)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['statusCode']) && (mb_strlen($this->container['statusCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be bigger than or equal to 1.";
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
    *  重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
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
    * @param string|null $protocol 重定向的协议。默认值${protocol}表示继承原值（即与被转发请求保持一致）。  取值范围： - HTTP - HTTPS - ${protocol}
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
    *  重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
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
    * @param string|null $host 重定向的主机名。字符串只能包含英文字母、数字、“-”、“.”，必须以字母、数字开头。 默认值${host}表示继承原值（即与被转发请求保持一致）。
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
    *  重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
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
    * @param string|null $port 重定向到的端口。默认值${port}表示继承原值（即与被转发请求保持一致）。
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
    *  重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
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
    * @param string|null $path 重定向的路径。默认值${path}表示继承原值（即与被转发请求保持一致）。  只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头
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
    *  重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
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
    * @param string|null $query 重定向的查询字符串。默认${query}表示继承原值（即与被转发请求保持一致）。举例如下：  若该字段被设置为：${query}&name=my_name，则在转发符合条件的URL （如https://www.xxx.com:8080/elb?type=loadbalancer， 此时${query}表示type=loadbalancer）时，将会重定向到 https://www.xxx.com:8080/elb?type=loadbalancer&name=my_name。  只能包含英文字母、数字和特殊字符：!$&'()*+,-./:;=?@^_`。字母区分大小写。
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
    *  重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 重定向后的返回码。  取值范围： - 301 - 302 - 303 - 307 - 308
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
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

