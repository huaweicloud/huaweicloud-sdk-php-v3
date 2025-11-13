<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件id
    * time  攻击发生时的时间戳(毫秒)
    * policyid  策略id
    * sip  源ip，Web访问者的IP地址（攻击者IP地址）
    * host  域名
    * url  攻击的url链接
    * attack  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * rule  命中的规则id
    * payload  命中的载荷
    * payloadLocation  命中的载荷位置
    * action  防护动作
    * requestLine  请求方法和路径
    * headers  http请求header
    * cookie  请求cookie
    * status  响应码状态
    * processTime  处理时长
    * region  地理位置
    * hostId  域名id
    * responseTime  响应时长
    * responseSize  响应体大小
    * responseBody  响应体
    * requestBody  请求体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'time' => 'int',
            'policyid' => 'string',
            'sip' => 'string',
            'host' => 'string',
            'url' => 'string',
            'attack' => 'string',
            'rule' => 'string',
            'payload' => 'string',
            'payloadLocation' => 'string',
            'action' => 'string',
            'requestLine' => 'string',
            'headers' => 'object',
            'cookie' => 'string',
            'status' => 'string',
            'processTime' => 'int',
            'region' => 'string',
            'hostId' => 'string',
            'responseTime' => 'int',
            'responseSize' => 'int',
            'responseBody' => 'string',
            'requestBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件id
    * time  攻击发生时的时间戳(毫秒)
    * policyid  策略id
    * sip  源ip，Web访问者的IP地址（攻击者IP地址）
    * host  域名
    * url  攻击的url链接
    * attack  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * rule  命中的规则id
    * payload  命中的载荷
    * payloadLocation  命中的载荷位置
    * action  防护动作
    * requestLine  请求方法和路径
    * headers  http请求header
    * cookie  请求cookie
    * status  响应码状态
    * processTime  处理时长
    * region  地理位置
    * hostId  域名id
    * responseTime  响应时长
    * responseSize  响应体大小
    * responseBody  响应体
    * requestBody  请求体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'time' => 'int64',
        'policyid' => null,
        'sip' => null,
        'host' => null,
        'url' => null,
        'attack' => null,
        'rule' => null,
        'payload' => null,
        'payloadLocation' => null,
        'action' => null,
        'requestLine' => null,
        'headers' => null,
        'cookie' => null,
        'status' => null,
        'processTime' => null,
        'region' => null,
        'hostId' => null,
        'responseTime' => 'int64',
        'responseSize' => null,
        'responseBody' => null,
        'requestBody' => null
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
    * id  事件id
    * time  攻击发生时的时间戳(毫秒)
    * policyid  策略id
    * sip  源ip，Web访问者的IP地址（攻击者IP地址）
    * host  域名
    * url  攻击的url链接
    * attack  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * rule  命中的规则id
    * payload  命中的载荷
    * payloadLocation  命中的载荷位置
    * action  防护动作
    * requestLine  请求方法和路径
    * headers  http请求header
    * cookie  请求cookie
    * status  响应码状态
    * processTime  处理时长
    * region  地理位置
    * hostId  域名id
    * responseTime  响应时长
    * responseSize  响应体大小
    * responseBody  响应体
    * requestBody  请求体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'time' => 'time',
            'policyid' => 'policyid',
            'sip' => 'sip',
            'host' => 'host',
            'url' => 'url',
            'attack' => 'attack',
            'rule' => 'rule',
            'payload' => 'payload',
            'payloadLocation' => 'payload_location',
            'action' => 'action',
            'requestLine' => 'request_line',
            'headers' => 'headers',
            'cookie' => 'cookie',
            'status' => 'status',
            'processTime' => 'process_time',
            'region' => 'region',
            'hostId' => 'host_id',
            'responseTime' => 'response_time',
            'responseSize' => 'response_size',
            'responseBody' => 'response_body',
            'requestBody' => 'request_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件id
    * time  攻击发生时的时间戳(毫秒)
    * policyid  策略id
    * sip  源ip，Web访问者的IP地址（攻击者IP地址）
    * host  域名
    * url  攻击的url链接
    * attack  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * rule  命中的规则id
    * payload  命中的载荷
    * payloadLocation  命中的载荷位置
    * action  防护动作
    * requestLine  请求方法和路径
    * headers  http请求header
    * cookie  请求cookie
    * status  响应码状态
    * processTime  处理时长
    * region  地理位置
    * hostId  域名id
    * responseTime  响应时长
    * responseSize  响应体大小
    * responseBody  响应体
    * requestBody  请求体
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'time' => 'setTime',
            'policyid' => 'setPolicyid',
            'sip' => 'setSip',
            'host' => 'setHost',
            'url' => 'setUrl',
            'attack' => 'setAttack',
            'rule' => 'setRule',
            'payload' => 'setPayload',
            'payloadLocation' => 'setPayloadLocation',
            'action' => 'setAction',
            'requestLine' => 'setRequestLine',
            'headers' => 'setHeaders',
            'cookie' => 'setCookie',
            'status' => 'setStatus',
            'processTime' => 'setProcessTime',
            'region' => 'setRegion',
            'hostId' => 'setHostId',
            'responseTime' => 'setResponseTime',
            'responseSize' => 'setResponseSize',
            'responseBody' => 'setResponseBody',
            'requestBody' => 'setRequestBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件id
    * time  攻击发生时的时间戳(毫秒)
    * policyid  策略id
    * sip  源ip，Web访问者的IP地址（攻击者IP地址）
    * host  域名
    * url  攻击的url链接
    * attack  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * rule  命中的规则id
    * payload  命中的载荷
    * payloadLocation  命中的载荷位置
    * action  防护动作
    * requestLine  请求方法和路径
    * headers  http请求header
    * cookie  请求cookie
    * status  响应码状态
    * processTime  处理时长
    * region  地理位置
    * hostId  域名id
    * responseTime  响应时长
    * responseSize  响应体大小
    * responseBody  响应体
    * requestBody  请求体
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'time' => 'getTime',
            'policyid' => 'getPolicyid',
            'sip' => 'getSip',
            'host' => 'getHost',
            'url' => 'getUrl',
            'attack' => 'getAttack',
            'rule' => 'getRule',
            'payload' => 'getPayload',
            'payloadLocation' => 'getPayloadLocation',
            'action' => 'getAction',
            'requestLine' => 'getRequestLine',
            'headers' => 'getHeaders',
            'cookie' => 'getCookie',
            'status' => 'getStatus',
            'processTime' => 'getProcessTime',
            'region' => 'getRegion',
            'hostId' => 'getHostId',
            'responseTime' => 'getResponseTime',
            'responseSize' => 'getResponseSize',
            'responseBody' => 'getResponseBody',
            'requestBody' => 'getRequestBody'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['sip'] = isset($data['sip']) ? $data['sip'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['attack'] = isset($data['attack']) ? $data['attack'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['payloadLocation'] = isset($data['payloadLocation']) ? $data['payloadLocation'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['requestLine'] = isset($data['requestLine']) ? $data['requestLine'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['cookie'] = isset($data['cookie']) ? $data['cookie'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['responseTime'] = isset($data['responseTime']) ? $data['responseTime'] : null;
        $this->container['responseSize'] = isset($data['responseSize']) ? $data['responseSize'] : null;
        $this->container['responseBody'] = isset($data['responseBody']) ? $data['responseBody'] : null;
        $this->container['requestBody'] = isset($data['requestBody']) ? $data['requestBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  事件id
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
    * @param string|null $id 事件id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets time
    *  攻击发生时的时间戳(毫秒)
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 攻击发生时的时间戳(毫秒)
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets sip
    *  源ip，Web访问者的IP地址（攻击者IP地址）
    *
    * @return string|null
    */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
    * Sets sip
    *
    * @param string|null $sip 源ip，Web访问者的IP地址（攻击者IP地址）
    *
    * @return $this
    */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;
        return $this;
    }

    /**
    * Gets host
    *  域名
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
    * @param string|null $host 域名
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets url
    *  攻击的url链接
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 攻击的url链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets attack
    *  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    *
    * @return string|null
    */
    public function getAttack()
    {
        return $this->container['attack'];
    }

    /**
    * Sets attack
    *
    * @param string|null $attack 攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄露   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    *
    * @return $this
    */
    public function setAttack($attack)
    {
        $this->container['attack'] = $attack;
        return $this;
    }

    /**
    * Gets rule
    *  命中的规则id
    *
    * @return string|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string|null $rule 命中的规则id
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets payload
    *  命中的载荷
    *
    * @return string|null
    */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
    * Sets payload
    *
    * @param string|null $payload 命中的载荷
    *
    * @return $this
    */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;
        return $this;
    }

    /**
    * Gets payloadLocation
    *  命中的载荷位置
    *
    * @return string|null
    */
    public function getPayloadLocation()
    {
        return $this->container['payloadLocation'];
    }

    /**
    * Sets payloadLocation
    *
    * @param string|null $payloadLocation 命中的载荷位置
    *
    * @return $this
    */
    public function setPayloadLocation($payloadLocation)
    {
        $this->container['payloadLocation'] = $payloadLocation;
        return $this;
    }

    /**
    * Gets action
    *  防护动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 防护动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets requestLine
    *  请求方法和路径
    *
    * @return string|null
    */
    public function getRequestLine()
    {
        return $this->container['requestLine'];
    }

    /**
    * Sets requestLine
    *
    * @param string|null $requestLine 请求方法和路径
    *
    * @return $this
    */
    public function setRequestLine($requestLine)
    {
        $this->container['requestLine'] = $requestLine;
        return $this;
    }

    /**
    * Gets headers
    *  http请求header
    *
    * @return object|null
    */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
    * Sets headers
    *
    * @param object|null $headers http请求header
    *
    * @return $this
    */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
    * Gets cookie
    *  请求cookie
    *
    * @return string|null
    */
    public function getCookie()
    {
        return $this->container['cookie'];
    }

    /**
    * Sets cookie
    *
    * @param string|null $cookie 请求cookie
    *
    * @return $this
    */
    public function setCookie($cookie)
    {
        $this->container['cookie'] = $cookie;
        return $this;
    }

    /**
    * Gets status
    *  响应码状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 响应码状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets processTime
    *  处理时长
    *
    * @return int|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param int|null $processTime 处理时长
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets region
    *  地理位置
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 地理位置
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets hostId
    *  域名id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 域名id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets responseTime
    *  响应时长
    *
    * @return int|null
    */
    public function getResponseTime()
    {
        return $this->container['responseTime'];
    }

    /**
    * Sets responseTime
    *
    * @param int|null $responseTime 响应时长
    *
    * @return $this
    */
    public function setResponseTime($responseTime)
    {
        $this->container['responseTime'] = $responseTime;
        return $this;
    }

    /**
    * Gets responseSize
    *  响应体大小
    *
    * @return int|null
    */
    public function getResponseSize()
    {
        return $this->container['responseSize'];
    }

    /**
    * Sets responseSize
    *
    * @param int|null $responseSize 响应体大小
    *
    * @return $this
    */
    public function setResponseSize($responseSize)
    {
        $this->container['responseSize'] = $responseSize;
        return $this;
    }

    /**
    * Gets responseBody
    *  响应体
    *
    * @return string|null
    */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
    * Sets responseBody
    *
    * @param string|null $responseBody 响应体
    *
    * @return $this
    */
    public function setResponseBody($responseBody)
    {
        $this->container['responseBody'] = $responseBody;
        return $this;
    }

    /**
    * Gets requestBody
    *  请求体
    *
    * @return string|null
    */
    public function getRequestBody()
    {
        return $this->container['requestBody'];
    }

    /**
    * Sets requestBody
    *
    * @param string|null $requestBody 请求体
    *
    * @return $this
    */
    public function setRequestBody($requestBody)
    {
        $this->container['requestBody'] = $requestBody;
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

