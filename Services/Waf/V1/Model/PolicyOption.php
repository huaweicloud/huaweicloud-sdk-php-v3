<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * webattack  基础防护是否开启
    * common  常规检测是否开启
    * crawler  预留参数，该参数值一直为true，用户可忽略该参数值
    * crawlerEngine  搜索engine是否开启
    * crawlerScanner  反爬虫检测是否开启
    * crawlerScript  脚本反爬虫是否开启
    * crawlerOther  其他爬虫是否开启
    * webshell  Webshell检测是否开启
    * cc  cc规则是否开启
    * custom  精准防护是否开启
    * whiteblackip  黑白名单防护是否开启
    * geoip  地理位置访问控制规则是否开启
    * ignore  误报屏蔽是否开启
    * privacy  隐私屏蔽是否开启
    * antitamper  网页防篡改规则是否开启
    * antileakage  防敏感信息泄露规则是否开启
    * botEnable  网站反爬虫总开关是否开启
    * modulexEnabled  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'webattack' => 'bool',
            'common' => 'bool',
            'crawler' => 'bool',
            'crawlerEngine' => 'bool',
            'crawlerScanner' => 'bool',
            'crawlerScript' => 'bool',
            'crawlerOther' => 'bool',
            'webshell' => 'bool',
            'cc' => 'bool',
            'custom' => 'bool',
            'whiteblackip' => 'bool',
            'geoip' => 'bool',
            'ignore' => 'bool',
            'privacy' => 'bool',
            'antitamper' => 'bool',
            'antileakage' => 'bool',
            'botEnable' => 'bool',
            'modulexEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * webattack  基础防护是否开启
    * common  常规检测是否开启
    * crawler  预留参数，该参数值一直为true，用户可忽略该参数值
    * crawlerEngine  搜索engine是否开启
    * crawlerScanner  反爬虫检测是否开启
    * crawlerScript  脚本反爬虫是否开启
    * crawlerOther  其他爬虫是否开启
    * webshell  Webshell检测是否开启
    * cc  cc规则是否开启
    * custom  精准防护是否开启
    * whiteblackip  黑白名单防护是否开启
    * geoip  地理位置访问控制规则是否开启
    * ignore  误报屏蔽是否开启
    * privacy  隐私屏蔽是否开启
    * antitamper  网页防篡改规则是否开启
    * antileakage  防敏感信息泄露规则是否开启
    * botEnable  网站反爬虫总开关是否开启
    * modulexEnabled  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'webattack' => null,
        'common' => null,
        'crawler' => null,
        'crawlerEngine' => null,
        'crawlerScanner' => null,
        'crawlerScript' => null,
        'crawlerOther' => null,
        'webshell' => null,
        'cc' => null,
        'custom' => null,
        'whiteblackip' => null,
        'geoip' => null,
        'ignore' => null,
        'privacy' => null,
        'antitamper' => null,
        'antileakage' => null,
        'botEnable' => null,
        'modulexEnabled' => null
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
    * webattack  基础防护是否开启
    * common  常规检测是否开启
    * crawler  预留参数，该参数值一直为true，用户可忽略该参数值
    * crawlerEngine  搜索engine是否开启
    * crawlerScanner  反爬虫检测是否开启
    * crawlerScript  脚本反爬虫是否开启
    * crawlerOther  其他爬虫是否开启
    * webshell  Webshell检测是否开启
    * cc  cc规则是否开启
    * custom  精准防护是否开启
    * whiteblackip  黑白名单防护是否开启
    * geoip  地理位置访问控制规则是否开启
    * ignore  误报屏蔽是否开启
    * privacy  隐私屏蔽是否开启
    * antitamper  网页防篡改规则是否开启
    * antileakage  防敏感信息泄露规则是否开启
    * botEnable  网站反爬虫总开关是否开启
    * modulexEnabled  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'webattack' => 'webattack',
            'common' => 'common',
            'crawler' => 'crawler',
            'crawlerEngine' => 'crawler_engine',
            'crawlerScanner' => 'crawler_scanner',
            'crawlerScript' => 'crawler_script',
            'crawlerOther' => 'crawler_other',
            'webshell' => 'webshell',
            'cc' => 'cc',
            'custom' => 'custom',
            'whiteblackip' => 'whiteblackip',
            'geoip' => 'geoip',
            'ignore' => 'ignore',
            'privacy' => 'privacy',
            'antitamper' => 'antitamper',
            'antileakage' => 'antileakage',
            'botEnable' => 'bot_enable',
            'modulexEnabled' => 'modulex_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * webattack  基础防护是否开启
    * common  常规检测是否开启
    * crawler  预留参数，该参数值一直为true，用户可忽略该参数值
    * crawlerEngine  搜索engine是否开启
    * crawlerScanner  反爬虫检测是否开启
    * crawlerScript  脚本反爬虫是否开启
    * crawlerOther  其他爬虫是否开启
    * webshell  Webshell检测是否开启
    * cc  cc规则是否开启
    * custom  精准防护是否开启
    * whiteblackip  黑白名单防护是否开启
    * geoip  地理位置访问控制规则是否开启
    * ignore  误报屏蔽是否开启
    * privacy  隐私屏蔽是否开启
    * antitamper  网页防篡改规则是否开启
    * antileakage  防敏感信息泄露规则是否开启
    * botEnable  网站反爬虫总开关是否开启
    * modulexEnabled  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'webattack' => 'setWebattack',
            'common' => 'setCommon',
            'crawler' => 'setCrawler',
            'crawlerEngine' => 'setCrawlerEngine',
            'crawlerScanner' => 'setCrawlerScanner',
            'crawlerScript' => 'setCrawlerScript',
            'crawlerOther' => 'setCrawlerOther',
            'webshell' => 'setWebshell',
            'cc' => 'setCc',
            'custom' => 'setCustom',
            'whiteblackip' => 'setWhiteblackip',
            'geoip' => 'setGeoip',
            'ignore' => 'setIgnore',
            'privacy' => 'setPrivacy',
            'antitamper' => 'setAntitamper',
            'antileakage' => 'setAntileakage',
            'botEnable' => 'setBotEnable',
            'modulexEnabled' => 'setModulexEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * webattack  基础防护是否开启
    * common  常规检测是否开启
    * crawler  预留参数，该参数值一直为true，用户可忽略该参数值
    * crawlerEngine  搜索engine是否开启
    * crawlerScanner  反爬虫检测是否开启
    * crawlerScript  脚本反爬虫是否开启
    * crawlerOther  其他爬虫是否开启
    * webshell  Webshell检测是否开启
    * cc  cc规则是否开启
    * custom  精准防护是否开启
    * whiteblackip  黑白名单防护是否开启
    * geoip  地理位置访问控制规则是否开启
    * ignore  误报屏蔽是否开启
    * privacy  隐私屏蔽是否开启
    * antitamper  网页防篡改规则是否开启
    * antileakage  防敏感信息泄露规则是否开启
    * botEnable  网站反爬虫总开关是否开启
    * modulexEnabled  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'webattack' => 'getWebattack',
            'common' => 'getCommon',
            'crawler' => 'getCrawler',
            'crawlerEngine' => 'getCrawlerEngine',
            'crawlerScanner' => 'getCrawlerScanner',
            'crawlerScript' => 'getCrawlerScript',
            'crawlerOther' => 'getCrawlerOther',
            'webshell' => 'getWebshell',
            'cc' => 'getCc',
            'custom' => 'getCustom',
            'whiteblackip' => 'getWhiteblackip',
            'geoip' => 'getGeoip',
            'ignore' => 'getIgnore',
            'privacy' => 'getPrivacy',
            'antitamper' => 'getAntitamper',
            'antileakage' => 'getAntileakage',
            'botEnable' => 'getBotEnable',
            'modulexEnabled' => 'getModulexEnabled'
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
        $this->container['webattack'] = isset($data['webattack']) ? $data['webattack'] : null;
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
        $this->container['crawler'] = isset($data['crawler']) ? $data['crawler'] : null;
        $this->container['crawlerEngine'] = isset($data['crawlerEngine']) ? $data['crawlerEngine'] : null;
        $this->container['crawlerScanner'] = isset($data['crawlerScanner']) ? $data['crawlerScanner'] : null;
        $this->container['crawlerScript'] = isset($data['crawlerScript']) ? $data['crawlerScript'] : null;
        $this->container['crawlerOther'] = isset($data['crawlerOther']) ? $data['crawlerOther'] : null;
        $this->container['webshell'] = isset($data['webshell']) ? $data['webshell'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['whiteblackip'] = isset($data['whiteblackip']) ? $data['whiteblackip'] : null;
        $this->container['geoip'] = isset($data['geoip']) ? $data['geoip'] : null;
        $this->container['ignore'] = isset($data['ignore']) ? $data['ignore'] : null;
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
        $this->container['antitamper'] = isset($data['antitamper']) ? $data['antitamper'] : null;
        $this->container['antileakage'] = isset($data['antileakage']) ? $data['antileakage'] : null;
        $this->container['botEnable'] = isset($data['botEnable']) ? $data['botEnable'] : null;
        $this->container['modulexEnabled'] = isset($data['modulexEnabled']) ? $data['modulexEnabled'] : null;
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
    * Gets webattack
    *  基础防护是否开启
    *
    * @return bool|null
    */
    public function getWebattack()
    {
        return $this->container['webattack'];
    }

    /**
    * Sets webattack
    *
    * @param bool|null $webattack 基础防护是否开启
    *
    * @return $this
    */
    public function setWebattack($webattack)
    {
        $this->container['webattack'] = $webattack;
        return $this;
    }

    /**
    * Gets common
    *  常规检测是否开启
    *
    * @return bool|null
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param bool|null $common 常规检测是否开启
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
        return $this;
    }

    /**
    * Gets crawler
    *  预留参数，该参数值一直为true，用户可忽略该参数值
    *
    * @return bool|null
    */
    public function getCrawler()
    {
        return $this->container['crawler'];
    }

    /**
    * Sets crawler
    *
    * @param bool|null $crawler 预留参数，该参数值一直为true，用户可忽略该参数值
    *
    * @return $this
    */
    public function setCrawler($crawler)
    {
        $this->container['crawler'] = $crawler;
        return $this;
    }

    /**
    * Gets crawlerEngine
    *  搜索engine是否开启
    *
    * @return bool|null
    */
    public function getCrawlerEngine()
    {
        return $this->container['crawlerEngine'];
    }

    /**
    * Sets crawlerEngine
    *
    * @param bool|null $crawlerEngine 搜索engine是否开启
    *
    * @return $this
    */
    public function setCrawlerEngine($crawlerEngine)
    {
        $this->container['crawlerEngine'] = $crawlerEngine;
        return $this;
    }

    /**
    * Gets crawlerScanner
    *  反爬虫检测是否开启
    *
    * @return bool|null
    */
    public function getCrawlerScanner()
    {
        return $this->container['crawlerScanner'];
    }

    /**
    * Sets crawlerScanner
    *
    * @param bool|null $crawlerScanner 反爬虫检测是否开启
    *
    * @return $this
    */
    public function setCrawlerScanner($crawlerScanner)
    {
        $this->container['crawlerScanner'] = $crawlerScanner;
        return $this;
    }

    /**
    * Gets crawlerScript
    *  脚本反爬虫是否开启
    *
    * @return bool|null
    */
    public function getCrawlerScript()
    {
        return $this->container['crawlerScript'];
    }

    /**
    * Sets crawlerScript
    *
    * @param bool|null $crawlerScript 脚本反爬虫是否开启
    *
    * @return $this
    */
    public function setCrawlerScript($crawlerScript)
    {
        $this->container['crawlerScript'] = $crawlerScript;
        return $this;
    }

    /**
    * Gets crawlerOther
    *  其他爬虫是否开启
    *
    * @return bool|null
    */
    public function getCrawlerOther()
    {
        return $this->container['crawlerOther'];
    }

    /**
    * Sets crawlerOther
    *
    * @param bool|null $crawlerOther 其他爬虫是否开启
    *
    * @return $this
    */
    public function setCrawlerOther($crawlerOther)
    {
        $this->container['crawlerOther'] = $crawlerOther;
        return $this;
    }

    /**
    * Gets webshell
    *  Webshell检测是否开启
    *
    * @return bool|null
    */
    public function getWebshell()
    {
        return $this->container['webshell'];
    }

    /**
    * Sets webshell
    *
    * @param bool|null $webshell Webshell检测是否开启
    *
    * @return $this
    */
    public function setWebshell($webshell)
    {
        $this->container['webshell'] = $webshell;
        return $this;
    }

    /**
    * Gets cc
    *  cc规则是否开启
    *
    * @return bool|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param bool|null $cc cc规则是否开启
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets custom
    *  精准防护是否开启
    *
    * @return bool|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param bool|null $custom 精准防护是否开启
    *
    * @return $this
    */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
        return $this;
    }

    /**
    * Gets whiteblackip
    *  黑白名单防护是否开启
    *
    * @return bool|null
    */
    public function getWhiteblackip()
    {
        return $this->container['whiteblackip'];
    }

    /**
    * Sets whiteblackip
    *
    * @param bool|null $whiteblackip 黑白名单防护是否开启
    *
    * @return $this
    */
    public function setWhiteblackip($whiteblackip)
    {
        $this->container['whiteblackip'] = $whiteblackip;
        return $this;
    }

    /**
    * Gets geoip
    *  地理位置访问控制规则是否开启
    *
    * @return bool|null
    */
    public function getGeoip()
    {
        return $this->container['geoip'];
    }

    /**
    * Sets geoip
    *
    * @param bool|null $geoip 地理位置访问控制规则是否开启
    *
    * @return $this
    */
    public function setGeoip($geoip)
    {
        $this->container['geoip'] = $geoip;
        return $this;
    }

    /**
    * Gets ignore
    *  误报屏蔽是否开启
    *
    * @return bool|null
    */
    public function getIgnore()
    {
        return $this->container['ignore'];
    }

    /**
    * Sets ignore
    *
    * @param bool|null $ignore 误报屏蔽是否开启
    *
    * @return $this
    */
    public function setIgnore($ignore)
    {
        $this->container['ignore'] = $ignore;
        return $this;
    }

    /**
    * Gets privacy
    *  隐私屏蔽是否开启
    *
    * @return bool|null
    */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
    * Sets privacy
    *
    * @param bool|null $privacy 隐私屏蔽是否开启
    *
    * @return $this
    */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;
        return $this;
    }

    /**
    * Gets antitamper
    *  网页防篡改规则是否开启
    *
    * @return bool|null
    */
    public function getAntitamper()
    {
        return $this->container['antitamper'];
    }

    /**
    * Sets antitamper
    *
    * @param bool|null $antitamper 网页防篡改规则是否开启
    *
    * @return $this
    */
    public function setAntitamper($antitamper)
    {
        $this->container['antitamper'] = $antitamper;
        return $this;
    }

    /**
    * Gets antileakage
    *  防敏感信息泄露规则是否开启
    *
    * @return bool|null
    */
    public function getAntileakage()
    {
        return $this->container['antileakage'];
    }

    /**
    * Sets antileakage
    *
    * @param bool|null $antileakage 防敏感信息泄露规则是否开启
    *
    * @return $this
    */
    public function setAntileakage($antileakage)
    {
        $this->container['antileakage'] = $antileakage;
        return $this;
    }

    /**
    * Gets botEnable
    *  网站反爬虫总开关是否开启
    *
    * @return bool|null
    */
    public function getBotEnable()
    {
        return $this->container['botEnable'];
    }

    /**
    * Sets botEnable
    *
    * @param bool|null $botEnable 网站反爬虫总开关是否开启
    *
    * @return $this
    */
    public function setBotEnable($botEnable)
    {
        $this->container['botEnable'] = $botEnable;
        return $this;
    }

    /**
    * Gets modulexEnabled
    *  modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @return bool|null
    */
    public function getModulexEnabled()
    {
        return $this->container['modulexEnabled'];
    }

    /**
    * Sets modulexEnabled
    *
    * @param bool|null $modulexEnabled modulex智能cc防护是否开启，该特性是公测特性，在公测期间，只支持仅记录模式。
    *
    * @return $this
    */
    public function setModulexEnabled($modulexEnabled)
    {
        $this->container['modulexEnabled'] = $modulexEnabled;
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

