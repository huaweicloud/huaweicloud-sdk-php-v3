<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoNetworkForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_network_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localAddress  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    * localPort  **参数解释**： 本地端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源ip **取值范围**： 不涉及
    * remoteAddress  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    * remotePort  **参数解释**： 远程端口 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * appProtocol  **参数解释**： 应用层协议 **取值范围**： 不涉及
    * flowDirection  **参数解释**： 流量方向 **取值范围**： 不涉及
    * count  **参数解释**： 连接次数 **取值范围**： 不涉及
    * firstTime  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    * lastTime  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    * requestMethod  **参数解释**： 请求方法 **取值范围**： 不涉及
    * requestUrl  **参数解释**： 请求地址 **取值范围**： 不涉及
    * queryString  **参数解释**： 查询字符串 **取值范围**： 不涉及
    * requestParams  **参数解释**： 请求参数 **取值范围**： 不涉及
    * requestHeader  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localAddress' => 'string',
            'localPort' => 'int',
            'srcIp' => 'string',
            'remoteAddress' => 'string',
            'remotePort' => 'int',
            'protocol' => 'string',
            'appProtocol' => 'string',
            'flowDirection' => 'string',
            'count' => 'int',
            'firstTime' => 'int',
            'lastTime' => 'int',
            'requestMethod' => 'string',
            'requestUrl' => 'string',
            'queryString' => 'string',
            'requestParams' => 'string',
            'requestHeader' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localAddress  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    * localPort  **参数解释**： 本地端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源ip **取值范围**： 不涉及
    * remoteAddress  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    * remotePort  **参数解释**： 远程端口 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * appProtocol  **参数解释**： 应用层协议 **取值范围**： 不涉及
    * flowDirection  **参数解释**： 流量方向 **取值范围**： 不涉及
    * count  **参数解释**： 连接次数 **取值范围**： 不涉及
    * firstTime  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    * lastTime  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    * requestMethod  **参数解释**： 请求方法 **取值范围**： 不涉及
    * requestUrl  **参数解释**： 请求地址 **取值范围**： 不涉及
    * queryString  **参数解释**： 查询字符串 **取值范围**： 不涉及
    * requestParams  **参数解释**： 请求参数 **取值范围**： 不涉及
    * requestHeader  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localAddress' => null,
        'localPort' => 'int32',
        'srcIp' => null,
        'remoteAddress' => null,
        'remotePort' => 'int32',
        'protocol' => null,
        'appProtocol' => null,
        'flowDirection' => null,
        'count' => 'int32',
        'firstTime' => 'int64',
        'lastTime' => 'int64',
        'requestMethod' => null,
        'requestUrl' => null,
        'queryString' => null,
        'requestParams' => null,
        'requestHeader' => null
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
    * localAddress  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    * localPort  **参数解释**： 本地端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源ip **取值范围**： 不涉及
    * remoteAddress  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    * remotePort  **参数解释**： 远程端口 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * appProtocol  **参数解释**： 应用层协议 **取值范围**： 不涉及
    * flowDirection  **参数解释**： 流量方向 **取值范围**： 不涉及
    * count  **参数解释**： 连接次数 **取值范围**： 不涉及
    * firstTime  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    * lastTime  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    * requestMethod  **参数解释**： 请求方法 **取值范围**： 不涉及
    * requestUrl  **参数解释**： 请求地址 **取值范围**： 不涉及
    * queryString  **参数解释**： 查询字符串 **取值范围**： 不涉及
    * requestParams  **参数解释**： 请求参数 **取值范围**： 不涉及
    * requestHeader  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localAddress' => 'local_address',
            'localPort' => 'local_port',
            'srcIp' => 'src_ip',
            'remoteAddress' => 'remote_address',
            'remotePort' => 'remote_port',
            'protocol' => 'protocol',
            'appProtocol' => 'app_protocol',
            'flowDirection' => 'flow_direction',
            'count' => 'count',
            'firstTime' => 'first_time',
            'lastTime' => 'last_time',
            'requestMethod' => 'request_method',
            'requestUrl' => 'request_url',
            'queryString' => 'query_string',
            'requestParams' => 'request_params',
            'requestHeader' => 'request_header'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localAddress  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    * localPort  **参数解释**： 本地端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源ip **取值范围**： 不涉及
    * remoteAddress  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    * remotePort  **参数解释**： 远程端口 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * appProtocol  **参数解释**： 应用层协议 **取值范围**： 不涉及
    * flowDirection  **参数解释**： 流量方向 **取值范围**： 不涉及
    * count  **参数解释**： 连接次数 **取值范围**： 不涉及
    * firstTime  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    * lastTime  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    * requestMethod  **参数解释**： 请求方法 **取值范围**： 不涉及
    * requestUrl  **参数解释**： 请求地址 **取值范围**： 不涉及
    * queryString  **参数解释**： 查询字符串 **取值范围**： 不涉及
    * requestParams  **参数解释**： 请求参数 **取值范围**： 不涉及
    * requestHeader  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'localAddress' => 'setLocalAddress',
            'localPort' => 'setLocalPort',
            'srcIp' => 'setSrcIp',
            'remoteAddress' => 'setRemoteAddress',
            'remotePort' => 'setRemotePort',
            'protocol' => 'setProtocol',
            'appProtocol' => 'setAppProtocol',
            'flowDirection' => 'setFlowDirection',
            'count' => 'setCount',
            'firstTime' => 'setFirstTime',
            'lastTime' => 'setLastTime',
            'requestMethod' => 'setRequestMethod',
            'requestUrl' => 'setRequestUrl',
            'queryString' => 'setQueryString',
            'requestParams' => 'setRequestParams',
            'requestHeader' => 'setRequestHeader'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localAddress  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    * localPort  **参数解释**： 本地端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源ip **取值范围**： 不涉及
    * remoteAddress  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    * remotePort  **参数解释**： 远程端口 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * appProtocol  **参数解释**： 应用层协议 **取值范围**： 不涉及
    * flowDirection  **参数解释**： 流量方向 **取值范围**： 不涉及
    * count  **参数解释**： 连接次数 **取值范围**： 不涉及
    * firstTime  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    * lastTime  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    * requestMethod  **参数解释**： 请求方法 **取值范围**： 不涉及
    * requestUrl  **参数解释**： 请求地址 **取值范围**： 不涉及
    * queryString  **参数解释**： 查询字符串 **取值范围**： 不涉及
    * requestParams  **参数解释**： 请求参数 **取值范围**： 不涉及
    * requestHeader  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'localAddress' => 'getLocalAddress',
            'localPort' => 'getLocalPort',
            'srcIp' => 'getSrcIp',
            'remoteAddress' => 'getRemoteAddress',
            'remotePort' => 'getRemotePort',
            'protocol' => 'getProtocol',
            'appProtocol' => 'getAppProtocol',
            'flowDirection' => 'getFlowDirection',
            'count' => 'getCount',
            'firstTime' => 'getFirstTime',
            'lastTime' => 'getLastTime',
            'requestMethod' => 'getRequestMethod',
            'requestUrl' => 'getRequestUrl',
            'queryString' => 'getQueryString',
            'requestParams' => 'getRequestParams',
            'requestHeader' => 'getRequestHeader'
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
        $this->container['localAddress'] = isset($data['localAddress']) ? $data['localAddress'] : null;
        $this->container['localPort'] = isset($data['localPort']) ? $data['localPort'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['remoteAddress'] = isset($data['remoteAddress']) ? $data['remoteAddress'] : null;
        $this->container['remotePort'] = isset($data['remotePort']) ? $data['remotePort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['appProtocol'] = isset($data['appProtocol']) ? $data['appProtocol'] : null;
        $this->container['flowDirection'] = isset($data['flowDirection']) ? $data['flowDirection'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['firstTime'] = isset($data['firstTime']) ? $data['firstTime'] : null;
        $this->container['lastTime'] = isset($data['lastTime']) ? $data['lastTime'] : null;
        $this->container['requestMethod'] = isset($data['requestMethod']) ? $data['requestMethod'] : null;
        $this->container['requestUrl'] = isset($data['requestUrl']) ? $data['requestUrl'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['requestParams'] = isset($data['requestParams']) ? $data['requestParams'] : null;
        $this->container['requestHeader'] = isset($data['requestHeader']) ? $data['requestHeader'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['localAddress']) && !preg_match("/^.*$/", $this->container['localAddress'])) {
                $invalidProperties[] = "invalid value for 'localAddress', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['localPort']) && ($this->container['localPort'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'localPort', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['localPort']) && ($this->container['localPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'localPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remoteAddress']) && !preg_match("/^.*$/", $this->container['remoteAddress'])) {
                $invalidProperties[] = "invalid value for 'remoteAddress', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['remotePort']) && ($this->container['remotePort'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'remotePort', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['remotePort']) && ($this->container['remotePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'remotePort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && !preg_match("/^.*$/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['appProtocol']) && !preg_match("/^.*$/", $this->container['appProtocol'])) {
                $invalidProperties[] = "invalid value for 'appProtocol', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['flowDirection']) && !preg_match("/^.*$/", $this->container['flowDirection'])) {
                $invalidProperties[] = "invalid value for 'flowDirection', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstTime']) && ($this->container['firstTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstTime']) && ($this->container['firstTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastTime']) && ($this->container['lastTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastTime']) && ($this->container['lastTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastTime', must be bigger than or equal to 0.";
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
    * Gets localAddress
    *  **参数解释**： 本地ip地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLocalAddress()
    {
        return $this->container['localAddress'];
    }

    /**
    * Sets localAddress
    *
    * @param string|null $localAddress **参数解释**： 本地ip地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalAddress($localAddress)
    {
        $this->container['localAddress'] = $localAddress;
        return $this;
    }

    /**
    * Gets localPort
    *  **参数解释**： 本地端口 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLocalPort()
    {
        return $this->container['localPort'];
    }

    /**
    * Sets localPort
    *
    * @param int|null $localPort **参数解释**： 本地端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalPort($localPort)
    {
        $this->container['localPort'] = $localPort;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： 源ip **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string|null $srcIp **参数解释**： 源ip **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets remoteAddress
    *  **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRemoteAddress()
    {
        return $this->container['remoteAddress'];
    }

    /**
    * Sets remoteAddress
    *
    * @param string|null $remoteAddress **参数解释**： 远端ip地址(攻击者ip) **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRemoteAddress($remoteAddress)
    {
        $this->container['remoteAddress'] = $remoteAddress;
        return $this;
    }

    /**
    * Gets remotePort
    *  **参数解释**： 远程端口 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRemotePort()
    {
        return $this->container['remotePort'];
    }

    /**
    * Sets remotePort
    *
    * @param int|null $remotePort **参数解释**： 远程端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRemotePort($remotePort)
    {
        $this->container['remotePort'] = $remotePort;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议 **取值范围**： 不涉及
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
    * @param string|null $protocol **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets appProtocol
    *  **参数解释**： 应用层协议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppProtocol()
    {
        return $this->container['appProtocol'];
    }

    /**
    * Sets appProtocol
    *
    * @param string|null $appProtocol **参数解释**： 应用层协议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppProtocol($appProtocol)
    {
        $this->container['appProtocol'] = $appProtocol;
        return $this;
    }

    /**
    * Gets flowDirection
    *  **参数解释**： 流量方向 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getFlowDirection()
    {
        return $this->container['flowDirection'];
    }

    /**
    * Sets flowDirection
    *
    * @param string|null $flowDirection **参数解释**： 流量方向 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFlowDirection($flowDirection)
    {
        $this->container['flowDirection'] = $flowDirection;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 连接次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 连接次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets firstTime
    *  **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getFirstTime()
    {
        return $this->container['firstTime'];
    }

    /**
    * Sets firstTime
    *
    * @param int|null $firstTime **参数解释**： 首次连接时间(毫秒) **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFirstTime($firstTime)
    {
        $this->container['firstTime'] = $firstTime;
        return $this;
    }

    /**
    * Gets lastTime
    *  **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLastTime()
    {
        return $this->container['lastTime'];
    }

    /**
    * Sets lastTime
    *
    * @param int|null $lastTime **参数解释**： 最后一连接时间(毫秒) **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLastTime($lastTime)
    {
        $this->container['lastTime'] = $lastTime;
        return $this;
    }

    /**
    * Gets requestMethod
    *  **参数解释**： 请求方法 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRequestMethod()
    {
        return $this->container['requestMethod'];
    }

    /**
    * Sets requestMethod
    *
    * @param string|null $requestMethod **参数解释**： 请求方法 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestMethod($requestMethod)
    {
        $this->container['requestMethod'] = $requestMethod;
        return $this;
    }

    /**
    * Gets requestUrl
    *  **参数解释**： 请求地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
    * Sets requestUrl
    *
    * @param string|null $requestUrl **参数解释**： 请求地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestUrl($requestUrl)
    {
        $this->container['requestUrl'] = $requestUrl;
        return $this;
    }

    /**
    * Gets queryString
    *  **参数解释**： 查询字符串 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
    * Sets queryString
    *
    * @param string|null $queryString **参数解释**： 查询字符串 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;
        return $this;
    }

    /**
    * Gets requestParams
    *  **参数解释**： 请求参数 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRequestParams()
    {
        return $this->container['requestParams'];
    }

    /**
    * Sets requestParams
    *
    * @param string|null $requestParams **参数解释**： 请求参数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestParams($requestParams)
    {
        $this->container['requestParams'] = $requestParams;
        return $this;
    }

    /**
    * Gets requestHeader
    *  **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRequestHeader()
    {
        return $this->container['requestHeader'];
    }

    /**
    * Sets requestHeader
    *
    * @param string|null $requestHeader **参数解释**： 请求头信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestHeader($requestHeader)
    {
        $this->container['requestHeader'] = $requestHeader;
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

