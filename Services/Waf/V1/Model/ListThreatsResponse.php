<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListThreatsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListThreatsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xss  时间区间内xss攻击数量
    * sqli  时间区间内sqli攻击数量
    * cmdi  时间区间内cmdi攻击数量
    * lfi  时间区间内lfi攻击数量
    * rfi  时间区间内rfi攻击数量
    * webshell  时间区间内webshell攻击数量
    * robot  时间区间内恶意爬虫数量
    * cc  时间区间内cc攻击数量
    * custom  时间区间内对自定义规则攻击数量
    * whiteblackip  时间区间内对黑白名单规则攻击数量
    * antileakage  时间区间内反泄漏数量
    * antitamper  时间区间内防篡改数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xss' => 'int',
            'sqli' => 'int',
            'cmdi' => 'int',
            'lfi' => 'int',
            'rfi' => 'int',
            'webshell' => 'int',
            'robot' => 'int',
            'cc' => 'int',
            'custom' => 'int',
            'whiteblackip' => 'int',
            'antileakage' => 'int',
            'antitamper' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xss  时间区间内xss攻击数量
    * sqli  时间区间内sqli攻击数量
    * cmdi  时间区间内cmdi攻击数量
    * lfi  时间区间内lfi攻击数量
    * rfi  时间区间内rfi攻击数量
    * webshell  时间区间内webshell攻击数量
    * robot  时间区间内恶意爬虫数量
    * cc  时间区间内cc攻击数量
    * custom  时间区间内对自定义规则攻击数量
    * whiteblackip  时间区间内对黑白名单规则攻击数量
    * antileakage  时间区间内反泄漏数量
    * antitamper  时间区间内防篡改数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xss' => null,
        'sqli' => null,
        'cmdi' => null,
        'lfi' => null,
        'rfi' => null,
        'webshell' => null,
        'robot' => null,
        'cc' => null,
        'custom' => null,
        'whiteblackip' => null,
        'antileakage' => null,
        'antitamper' => null
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
    * xss  时间区间内xss攻击数量
    * sqli  时间区间内sqli攻击数量
    * cmdi  时间区间内cmdi攻击数量
    * lfi  时间区间内lfi攻击数量
    * rfi  时间区间内rfi攻击数量
    * webshell  时间区间内webshell攻击数量
    * robot  时间区间内恶意爬虫数量
    * cc  时间区间内cc攻击数量
    * custom  时间区间内对自定义规则攻击数量
    * whiteblackip  时间区间内对黑白名单规则攻击数量
    * antileakage  时间区间内反泄漏数量
    * antitamper  时间区间内防篡改数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xss' => 'xss',
            'sqli' => 'sqli',
            'cmdi' => 'cmdi',
            'lfi' => 'lfi',
            'rfi' => 'rfi',
            'webshell' => 'webshell',
            'robot' => 'robot',
            'cc' => 'cc',
            'custom' => 'custom',
            'whiteblackip' => 'whiteblackip',
            'antileakage' => 'antileakage',
            'antitamper' => 'antitamper'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xss  时间区间内xss攻击数量
    * sqli  时间区间内sqli攻击数量
    * cmdi  时间区间内cmdi攻击数量
    * lfi  时间区间内lfi攻击数量
    * rfi  时间区间内rfi攻击数量
    * webshell  时间区间内webshell攻击数量
    * robot  时间区间内恶意爬虫数量
    * cc  时间区间内cc攻击数量
    * custom  时间区间内对自定义规则攻击数量
    * whiteblackip  时间区间内对黑白名单规则攻击数量
    * antileakage  时间区间内反泄漏数量
    * antitamper  时间区间内防篡改数量
    *
    * @var string[]
    */
    protected static $setters = [
            'xss' => 'setXss',
            'sqli' => 'setSqli',
            'cmdi' => 'setCmdi',
            'lfi' => 'setLfi',
            'rfi' => 'setRfi',
            'webshell' => 'setWebshell',
            'robot' => 'setRobot',
            'cc' => 'setCc',
            'custom' => 'setCustom',
            'whiteblackip' => 'setWhiteblackip',
            'antileakage' => 'setAntileakage',
            'antitamper' => 'setAntitamper'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xss  时间区间内xss攻击数量
    * sqli  时间区间内sqli攻击数量
    * cmdi  时间区间内cmdi攻击数量
    * lfi  时间区间内lfi攻击数量
    * rfi  时间区间内rfi攻击数量
    * webshell  时间区间内webshell攻击数量
    * robot  时间区间内恶意爬虫数量
    * cc  时间区间内cc攻击数量
    * custom  时间区间内对自定义规则攻击数量
    * whiteblackip  时间区间内对黑白名单规则攻击数量
    * antileakage  时间区间内反泄漏数量
    * antitamper  时间区间内防篡改数量
    *
    * @var string[]
    */
    protected static $getters = [
            'xss' => 'getXss',
            'sqli' => 'getSqli',
            'cmdi' => 'getCmdi',
            'lfi' => 'getLfi',
            'rfi' => 'getRfi',
            'webshell' => 'getWebshell',
            'robot' => 'getRobot',
            'cc' => 'getCc',
            'custom' => 'getCustom',
            'whiteblackip' => 'getWhiteblackip',
            'antileakage' => 'getAntileakage',
            'antitamper' => 'getAntitamper'
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
        $this->container['xss'] = isset($data['xss']) ? $data['xss'] : null;
        $this->container['sqli'] = isset($data['sqli']) ? $data['sqli'] : null;
        $this->container['cmdi'] = isset($data['cmdi']) ? $data['cmdi'] : null;
        $this->container['lfi'] = isset($data['lfi']) ? $data['lfi'] : null;
        $this->container['rfi'] = isset($data['rfi']) ? $data['rfi'] : null;
        $this->container['webshell'] = isset($data['webshell']) ? $data['webshell'] : null;
        $this->container['robot'] = isset($data['robot']) ? $data['robot'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['whiteblackip'] = isset($data['whiteblackip']) ? $data['whiteblackip'] : null;
        $this->container['antileakage'] = isset($data['antileakage']) ? $data['antileakage'] : null;
        $this->container['antitamper'] = isset($data['antitamper']) ? $data['antitamper'] : null;
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
    * Gets xss
    *  时间区间内xss攻击数量
    *
    * @return int|null
    */
    public function getXss()
    {
        return $this->container['xss'];
    }

    /**
    * Sets xss
    *
    * @param int|null $xss 时间区间内xss攻击数量
    *
    * @return $this
    */
    public function setXss($xss)
    {
        $this->container['xss'] = $xss;
        return $this;
    }

    /**
    * Gets sqli
    *  时间区间内sqli攻击数量
    *
    * @return int|null
    */
    public function getSqli()
    {
        return $this->container['sqli'];
    }

    /**
    * Sets sqli
    *
    * @param int|null $sqli 时间区间内sqli攻击数量
    *
    * @return $this
    */
    public function setSqli($sqli)
    {
        $this->container['sqli'] = $sqli;
        return $this;
    }

    /**
    * Gets cmdi
    *  时间区间内cmdi攻击数量
    *
    * @return int|null
    */
    public function getCmdi()
    {
        return $this->container['cmdi'];
    }

    /**
    * Sets cmdi
    *
    * @param int|null $cmdi 时间区间内cmdi攻击数量
    *
    * @return $this
    */
    public function setCmdi($cmdi)
    {
        $this->container['cmdi'] = $cmdi;
        return $this;
    }

    /**
    * Gets lfi
    *  时间区间内lfi攻击数量
    *
    * @return int|null
    */
    public function getLfi()
    {
        return $this->container['lfi'];
    }

    /**
    * Sets lfi
    *
    * @param int|null $lfi 时间区间内lfi攻击数量
    *
    * @return $this
    */
    public function setLfi($lfi)
    {
        $this->container['lfi'] = $lfi;
        return $this;
    }

    /**
    * Gets rfi
    *  时间区间内rfi攻击数量
    *
    * @return int|null
    */
    public function getRfi()
    {
        return $this->container['rfi'];
    }

    /**
    * Sets rfi
    *
    * @param int|null $rfi 时间区间内rfi攻击数量
    *
    * @return $this
    */
    public function setRfi($rfi)
    {
        $this->container['rfi'] = $rfi;
        return $this;
    }

    /**
    * Gets webshell
    *  时间区间内webshell攻击数量
    *
    * @return int|null
    */
    public function getWebshell()
    {
        return $this->container['webshell'];
    }

    /**
    * Sets webshell
    *
    * @param int|null $webshell 时间区间内webshell攻击数量
    *
    * @return $this
    */
    public function setWebshell($webshell)
    {
        $this->container['webshell'] = $webshell;
        return $this;
    }

    /**
    * Gets robot
    *  时间区间内恶意爬虫数量
    *
    * @return int|null
    */
    public function getRobot()
    {
        return $this->container['robot'];
    }

    /**
    * Sets robot
    *
    * @param int|null $robot 时间区间内恶意爬虫数量
    *
    * @return $this
    */
    public function setRobot($robot)
    {
        $this->container['robot'] = $robot;
        return $this;
    }

    /**
    * Gets cc
    *  时间区间内cc攻击数量
    *
    * @return int|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param int|null $cc 时间区间内cc攻击数量
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
    *  时间区间内对自定义规则攻击数量
    *
    * @return int|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param int|null $custom 时间区间内对自定义规则攻击数量
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
    *  时间区间内对黑白名单规则攻击数量
    *
    * @return int|null
    */
    public function getWhiteblackip()
    {
        return $this->container['whiteblackip'];
    }

    /**
    * Sets whiteblackip
    *
    * @param int|null $whiteblackip 时间区间内对黑白名单规则攻击数量
    *
    * @return $this
    */
    public function setWhiteblackip($whiteblackip)
    {
        $this->container['whiteblackip'] = $whiteblackip;
        return $this;
    }

    /**
    * Gets antileakage
    *  时间区间内反泄漏数量
    *
    * @return int|null
    */
    public function getAntileakage()
    {
        return $this->container['antileakage'];
    }

    /**
    * Sets antileakage
    *
    * @param int|null $antileakage 时间区间内反泄漏数量
    *
    * @return $this
    */
    public function setAntileakage($antileakage)
    {
        $this->container['antileakage'] = $antileakage;
        return $this;
    }

    /**
    * Gets antitamper
    *  时间区间内防篡改数量
    *
    * @return int|null
    */
    public function getAntitamper()
    {
        return $this->container['antitamper'];
    }

    /**
    * Sets antitamper
    *
    * @param int|null $antitamper 时间区间内防篡改数量
    *
    * @return $this
    */
    public function setAntitamper($antitamper)
    {
        $this->container['antitamper'] = $antitamper;
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

