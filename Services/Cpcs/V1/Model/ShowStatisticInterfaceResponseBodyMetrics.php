<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticInterfaceResponseBodyMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticInterfaceResponseBody_metrics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pkiDigestBusiStatistic  杂凑
    * pkiDecryptBusiStatistic  解密
    * pkiGenerateKeyBusiStatistic  生成密钥
    * pkiVerifyBusiStatistic  验章次数
    * pkiEncryptBusiStatistic  加密
    * tsaVerifyBusiStatistic  验证次数
    * tsaParseBusiStatistic  解析次数
    * svsVerifyBusiStatistic  svs验签
    * pkiRandomBusiStatistic  生成随机
    * timestamp  统计时间，UNIX时间戳，单位毫秒
    * svsCertBusiStatistic  svs获取证书等相关证书操作
    * svsEncodeBusiStatistic  svs编码
    * tsaApplyBusiStatistic  申请次数
    * svsSignBusiStatistic  svs签名
    * svsDecryptBusiStatistic  svs解密
    * kmsBusiStatistic  调用次数
    * sealVerifyBusiStatistic  验章次数
    * pkiSignBusiStatistic  签名
    * secauthBusiStatistic  口令验证
    * sealSignBusiStatistic  签章次数
    * splitBusiStatistic  签名次数
    * svsRandomBusiStatistic  svs生成随机
    * svsEncryptBusiStatistic  svs加密
    * smsDecBusiStatistic  解密次数
    * svsDigestBusiStatistic  svs杂凑
    * svsDecodeBusiStatistic  svs解码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pkiDigestBusiStatistic' => 'double',
            'pkiDecryptBusiStatistic' => 'double',
            'pkiGenerateKeyBusiStatistic' => 'double',
            'pkiVerifyBusiStatistic' => 'double',
            'pkiEncryptBusiStatistic' => 'double',
            'tsaVerifyBusiStatistic' => 'double',
            'tsaParseBusiStatistic' => 'double',
            'svsVerifyBusiStatistic' => 'double',
            'pkiRandomBusiStatistic' => 'double',
            'timestamp' => 'int',
            'svsCertBusiStatistic' => 'double',
            'svsEncodeBusiStatistic' => 'double',
            'tsaApplyBusiStatistic' => 'double',
            'svsSignBusiStatistic' => 'double',
            'svsDecryptBusiStatistic' => 'double',
            'kmsBusiStatistic' => 'double',
            'sealVerifyBusiStatistic' => 'double',
            'pkiSignBusiStatistic' => 'double',
            'secauthBusiStatistic' => 'double',
            'sealSignBusiStatistic' => 'double',
            'splitBusiStatistic' => 'double',
            'svsRandomBusiStatistic' => 'double',
            'svsEncryptBusiStatistic' => 'double',
            'smsDecBusiStatistic' => 'double',
            'svsDigestBusiStatistic' => 'double',
            'svsDecodeBusiStatistic' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pkiDigestBusiStatistic  杂凑
    * pkiDecryptBusiStatistic  解密
    * pkiGenerateKeyBusiStatistic  生成密钥
    * pkiVerifyBusiStatistic  验章次数
    * pkiEncryptBusiStatistic  加密
    * tsaVerifyBusiStatistic  验证次数
    * tsaParseBusiStatistic  解析次数
    * svsVerifyBusiStatistic  svs验签
    * pkiRandomBusiStatistic  生成随机
    * timestamp  统计时间，UNIX时间戳，单位毫秒
    * svsCertBusiStatistic  svs获取证书等相关证书操作
    * svsEncodeBusiStatistic  svs编码
    * tsaApplyBusiStatistic  申请次数
    * svsSignBusiStatistic  svs签名
    * svsDecryptBusiStatistic  svs解密
    * kmsBusiStatistic  调用次数
    * sealVerifyBusiStatistic  验章次数
    * pkiSignBusiStatistic  签名
    * secauthBusiStatistic  口令验证
    * sealSignBusiStatistic  签章次数
    * splitBusiStatistic  签名次数
    * svsRandomBusiStatistic  svs生成随机
    * svsEncryptBusiStatistic  svs加密
    * smsDecBusiStatistic  解密次数
    * svsDigestBusiStatistic  svs杂凑
    * svsDecodeBusiStatistic  svs解码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pkiDigestBusiStatistic' => 'double',
        'pkiDecryptBusiStatistic' => 'double',
        'pkiGenerateKeyBusiStatistic' => 'double',
        'pkiVerifyBusiStatistic' => 'double',
        'pkiEncryptBusiStatistic' => 'double',
        'tsaVerifyBusiStatistic' => 'double',
        'tsaParseBusiStatistic' => 'double',
        'svsVerifyBusiStatistic' => 'double',
        'pkiRandomBusiStatistic' => 'double',
        'timestamp' => 'int64',
        'svsCertBusiStatistic' => 'double',
        'svsEncodeBusiStatistic' => 'double',
        'tsaApplyBusiStatistic' => 'double',
        'svsSignBusiStatistic' => 'double',
        'svsDecryptBusiStatistic' => 'double',
        'kmsBusiStatistic' => 'double',
        'sealVerifyBusiStatistic' => 'double',
        'pkiSignBusiStatistic' => 'double',
        'secauthBusiStatistic' => 'double',
        'sealSignBusiStatistic' => 'double',
        'splitBusiStatistic' => 'double',
        'svsRandomBusiStatistic' => 'double',
        'svsEncryptBusiStatistic' => 'double',
        'smsDecBusiStatistic' => 'double',
        'svsDigestBusiStatistic' => 'double',
        'svsDecodeBusiStatistic' => 'double'
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
    * pkiDigestBusiStatistic  杂凑
    * pkiDecryptBusiStatistic  解密
    * pkiGenerateKeyBusiStatistic  生成密钥
    * pkiVerifyBusiStatistic  验章次数
    * pkiEncryptBusiStatistic  加密
    * tsaVerifyBusiStatistic  验证次数
    * tsaParseBusiStatistic  解析次数
    * svsVerifyBusiStatistic  svs验签
    * pkiRandomBusiStatistic  生成随机
    * timestamp  统计时间，UNIX时间戳，单位毫秒
    * svsCertBusiStatistic  svs获取证书等相关证书操作
    * svsEncodeBusiStatistic  svs编码
    * tsaApplyBusiStatistic  申请次数
    * svsSignBusiStatistic  svs签名
    * svsDecryptBusiStatistic  svs解密
    * kmsBusiStatistic  调用次数
    * sealVerifyBusiStatistic  验章次数
    * pkiSignBusiStatistic  签名
    * secauthBusiStatistic  口令验证
    * sealSignBusiStatistic  签章次数
    * splitBusiStatistic  签名次数
    * svsRandomBusiStatistic  svs生成随机
    * svsEncryptBusiStatistic  svs加密
    * smsDecBusiStatistic  解密次数
    * svsDigestBusiStatistic  svs杂凑
    * svsDecodeBusiStatistic  svs解码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pkiDigestBusiStatistic' => 'pkiDigestBusiStatistic',
            'pkiDecryptBusiStatistic' => 'pkiDecryptBusiStatistic',
            'pkiGenerateKeyBusiStatistic' => 'pkiGenerateKeyBusiStatistic',
            'pkiVerifyBusiStatistic' => 'pkiVerifyBusiStatistic',
            'pkiEncryptBusiStatistic' => 'pkiEncryptBusiStatistic',
            'tsaVerifyBusiStatistic' => 'tsaVerifyBusiStatistic',
            'tsaParseBusiStatistic' => 'tsaParseBusiStatistic',
            'svsVerifyBusiStatistic' => 'svsVerifyBusiStatistic',
            'pkiRandomBusiStatistic' => 'pkiRandomBusiStatistic',
            'timestamp' => 'timestamp',
            'svsCertBusiStatistic' => 'svsCertBusiStatistic',
            'svsEncodeBusiStatistic' => 'svsEncodeBusiStatistic',
            'tsaApplyBusiStatistic' => 'tsaApplyBusiStatistic',
            'svsSignBusiStatistic' => 'svsSignBusiStatistic',
            'svsDecryptBusiStatistic' => 'svsDecryptBusiStatistic',
            'kmsBusiStatistic' => 'kmsBusiStatistic',
            'sealVerifyBusiStatistic' => 'sealVerifyBusiStatistic',
            'pkiSignBusiStatistic' => 'pkiSignBusiStatistic',
            'secauthBusiStatistic' => 'secauthBusiStatistic',
            'sealSignBusiStatistic' => 'sealSignBusiStatistic',
            'splitBusiStatistic' => 'splitBusiStatistic',
            'svsRandomBusiStatistic' => 'svsRandomBusiStatistic',
            'svsEncryptBusiStatistic' => 'svsEncryptBusiStatistic',
            'smsDecBusiStatistic' => 'smsDecBusiStatistic',
            'svsDigestBusiStatistic' => 'svsDigestBusiStatistic',
            'svsDecodeBusiStatistic' => 'svsDecodeBusiStatistic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pkiDigestBusiStatistic  杂凑
    * pkiDecryptBusiStatistic  解密
    * pkiGenerateKeyBusiStatistic  生成密钥
    * pkiVerifyBusiStatistic  验章次数
    * pkiEncryptBusiStatistic  加密
    * tsaVerifyBusiStatistic  验证次数
    * tsaParseBusiStatistic  解析次数
    * svsVerifyBusiStatistic  svs验签
    * pkiRandomBusiStatistic  生成随机
    * timestamp  统计时间，UNIX时间戳，单位毫秒
    * svsCertBusiStatistic  svs获取证书等相关证书操作
    * svsEncodeBusiStatistic  svs编码
    * tsaApplyBusiStatistic  申请次数
    * svsSignBusiStatistic  svs签名
    * svsDecryptBusiStatistic  svs解密
    * kmsBusiStatistic  调用次数
    * sealVerifyBusiStatistic  验章次数
    * pkiSignBusiStatistic  签名
    * secauthBusiStatistic  口令验证
    * sealSignBusiStatistic  签章次数
    * splitBusiStatistic  签名次数
    * svsRandomBusiStatistic  svs生成随机
    * svsEncryptBusiStatistic  svs加密
    * smsDecBusiStatistic  解密次数
    * svsDigestBusiStatistic  svs杂凑
    * svsDecodeBusiStatistic  svs解码
    *
    * @var string[]
    */
    protected static $setters = [
            'pkiDigestBusiStatistic' => 'setPkiDigestBusiStatistic',
            'pkiDecryptBusiStatistic' => 'setPkiDecryptBusiStatistic',
            'pkiGenerateKeyBusiStatistic' => 'setPkiGenerateKeyBusiStatistic',
            'pkiVerifyBusiStatistic' => 'setPkiVerifyBusiStatistic',
            'pkiEncryptBusiStatistic' => 'setPkiEncryptBusiStatistic',
            'tsaVerifyBusiStatistic' => 'setTsaVerifyBusiStatistic',
            'tsaParseBusiStatistic' => 'setTsaParseBusiStatistic',
            'svsVerifyBusiStatistic' => 'setSvsVerifyBusiStatistic',
            'pkiRandomBusiStatistic' => 'setPkiRandomBusiStatistic',
            'timestamp' => 'setTimestamp',
            'svsCertBusiStatistic' => 'setSvsCertBusiStatistic',
            'svsEncodeBusiStatistic' => 'setSvsEncodeBusiStatistic',
            'tsaApplyBusiStatistic' => 'setTsaApplyBusiStatistic',
            'svsSignBusiStatistic' => 'setSvsSignBusiStatistic',
            'svsDecryptBusiStatistic' => 'setSvsDecryptBusiStatistic',
            'kmsBusiStatistic' => 'setKmsBusiStatistic',
            'sealVerifyBusiStatistic' => 'setSealVerifyBusiStatistic',
            'pkiSignBusiStatistic' => 'setPkiSignBusiStatistic',
            'secauthBusiStatistic' => 'setSecauthBusiStatistic',
            'sealSignBusiStatistic' => 'setSealSignBusiStatistic',
            'splitBusiStatistic' => 'setSplitBusiStatistic',
            'svsRandomBusiStatistic' => 'setSvsRandomBusiStatistic',
            'svsEncryptBusiStatistic' => 'setSvsEncryptBusiStatistic',
            'smsDecBusiStatistic' => 'setSmsDecBusiStatistic',
            'svsDigestBusiStatistic' => 'setSvsDigestBusiStatistic',
            'svsDecodeBusiStatistic' => 'setSvsDecodeBusiStatistic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pkiDigestBusiStatistic  杂凑
    * pkiDecryptBusiStatistic  解密
    * pkiGenerateKeyBusiStatistic  生成密钥
    * pkiVerifyBusiStatistic  验章次数
    * pkiEncryptBusiStatistic  加密
    * tsaVerifyBusiStatistic  验证次数
    * tsaParseBusiStatistic  解析次数
    * svsVerifyBusiStatistic  svs验签
    * pkiRandomBusiStatistic  生成随机
    * timestamp  统计时间，UNIX时间戳，单位毫秒
    * svsCertBusiStatistic  svs获取证书等相关证书操作
    * svsEncodeBusiStatistic  svs编码
    * tsaApplyBusiStatistic  申请次数
    * svsSignBusiStatistic  svs签名
    * svsDecryptBusiStatistic  svs解密
    * kmsBusiStatistic  调用次数
    * sealVerifyBusiStatistic  验章次数
    * pkiSignBusiStatistic  签名
    * secauthBusiStatistic  口令验证
    * sealSignBusiStatistic  签章次数
    * splitBusiStatistic  签名次数
    * svsRandomBusiStatistic  svs生成随机
    * svsEncryptBusiStatistic  svs加密
    * smsDecBusiStatistic  解密次数
    * svsDigestBusiStatistic  svs杂凑
    * svsDecodeBusiStatistic  svs解码
    *
    * @var string[]
    */
    protected static $getters = [
            'pkiDigestBusiStatistic' => 'getPkiDigestBusiStatistic',
            'pkiDecryptBusiStatistic' => 'getPkiDecryptBusiStatistic',
            'pkiGenerateKeyBusiStatistic' => 'getPkiGenerateKeyBusiStatistic',
            'pkiVerifyBusiStatistic' => 'getPkiVerifyBusiStatistic',
            'pkiEncryptBusiStatistic' => 'getPkiEncryptBusiStatistic',
            'tsaVerifyBusiStatistic' => 'getTsaVerifyBusiStatistic',
            'tsaParseBusiStatistic' => 'getTsaParseBusiStatistic',
            'svsVerifyBusiStatistic' => 'getSvsVerifyBusiStatistic',
            'pkiRandomBusiStatistic' => 'getPkiRandomBusiStatistic',
            'timestamp' => 'getTimestamp',
            'svsCertBusiStatistic' => 'getSvsCertBusiStatistic',
            'svsEncodeBusiStatistic' => 'getSvsEncodeBusiStatistic',
            'tsaApplyBusiStatistic' => 'getTsaApplyBusiStatistic',
            'svsSignBusiStatistic' => 'getSvsSignBusiStatistic',
            'svsDecryptBusiStatistic' => 'getSvsDecryptBusiStatistic',
            'kmsBusiStatistic' => 'getKmsBusiStatistic',
            'sealVerifyBusiStatistic' => 'getSealVerifyBusiStatistic',
            'pkiSignBusiStatistic' => 'getPkiSignBusiStatistic',
            'secauthBusiStatistic' => 'getSecauthBusiStatistic',
            'sealSignBusiStatistic' => 'getSealSignBusiStatistic',
            'splitBusiStatistic' => 'getSplitBusiStatistic',
            'svsRandomBusiStatistic' => 'getSvsRandomBusiStatistic',
            'svsEncryptBusiStatistic' => 'getSvsEncryptBusiStatistic',
            'smsDecBusiStatistic' => 'getSmsDecBusiStatistic',
            'svsDigestBusiStatistic' => 'getSvsDigestBusiStatistic',
            'svsDecodeBusiStatistic' => 'getSvsDecodeBusiStatistic'
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
        $this->container['pkiDigestBusiStatistic'] = isset($data['pkiDigestBusiStatistic']) ? $data['pkiDigestBusiStatistic'] : null;
        $this->container['pkiDecryptBusiStatistic'] = isset($data['pkiDecryptBusiStatistic']) ? $data['pkiDecryptBusiStatistic'] : null;
        $this->container['pkiGenerateKeyBusiStatistic'] = isset($data['pkiGenerateKeyBusiStatistic']) ? $data['pkiGenerateKeyBusiStatistic'] : null;
        $this->container['pkiVerifyBusiStatistic'] = isset($data['pkiVerifyBusiStatistic']) ? $data['pkiVerifyBusiStatistic'] : null;
        $this->container['pkiEncryptBusiStatistic'] = isset($data['pkiEncryptBusiStatistic']) ? $data['pkiEncryptBusiStatistic'] : null;
        $this->container['tsaVerifyBusiStatistic'] = isset($data['tsaVerifyBusiStatistic']) ? $data['tsaVerifyBusiStatistic'] : null;
        $this->container['tsaParseBusiStatistic'] = isset($data['tsaParseBusiStatistic']) ? $data['tsaParseBusiStatistic'] : null;
        $this->container['svsVerifyBusiStatistic'] = isset($data['svsVerifyBusiStatistic']) ? $data['svsVerifyBusiStatistic'] : null;
        $this->container['pkiRandomBusiStatistic'] = isset($data['pkiRandomBusiStatistic']) ? $data['pkiRandomBusiStatistic'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['svsCertBusiStatistic'] = isset($data['svsCertBusiStatistic']) ? $data['svsCertBusiStatistic'] : null;
        $this->container['svsEncodeBusiStatistic'] = isset($data['svsEncodeBusiStatistic']) ? $data['svsEncodeBusiStatistic'] : null;
        $this->container['tsaApplyBusiStatistic'] = isset($data['tsaApplyBusiStatistic']) ? $data['tsaApplyBusiStatistic'] : null;
        $this->container['svsSignBusiStatistic'] = isset($data['svsSignBusiStatistic']) ? $data['svsSignBusiStatistic'] : null;
        $this->container['svsDecryptBusiStatistic'] = isset($data['svsDecryptBusiStatistic']) ? $data['svsDecryptBusiStatistic'] : null;
        $this->container['kmsBusiStatistic'] = isset($data['kmsBusiStatistic']) ? $data['kmsBusiStatistic'] : null;
        $this->container['sealVerifyBusiStatistic'] = isset($data['sealVerifyBusiStatistic']) ? $data['sealVerifyBusiStatistic'] : null;
        $this->container['pkiSignBusiStatistic'] = isset($data['pkiSignBusiStatistic']) ? $data['pkiSignBusiStatistic'] : null;
        $this->container['secauthBusiStatistic'] = isset($data['secauthBusiStatistic']) ? $data['secauthBusiStatistic'] : null;
        $this->container['sealSignBusiStatistic'] = isset($data['sealSignBusiStatistic']) ? $data['sealSignBusiStatistic'] : null;
        $this->container['splitBusiStatistic'] = isset($data['splitBusiStatistic']) ? $data['splitBusiStatistic'] : null;
        $this->container['svsRandomBusiStatistic'] = isset($data['svsRandomBusiStatistic']) ? $data['svsRandomBusiStatistic'] : null;
        $this->container['svsEncryptBusiStatistic'] = isset($data['svsEncryptBusiStatistic']) ? $data['svsEncryptBusiStatistic'] : null;
        $this->container['smsDecBusiStatistic'] = isset($data['smsDecBusiStatistic']) ? $data['smsDecBusiStatistic'] : null;
        $this->container['svsDigestBusiStatistic'] = isset($data['svsDigestBusiStatistic']) ? $data['svsDigestBusiStatistic'] : null;
        $this->container['svsDecodeBusiStatistic'] = isset($data['svsDecodeBusiStatistic']) ? $data['svsDecodeBusiStatistic'] : null;
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
    * Gets pkiDigestBusiStatistic
    *  杂凑
    *
    * @return double|null
    */
    public function getPkiDigestBusiStatistic()
    {
        return $this->container['pkiDigestBusiStatistic'];
    }

    /**
    * Sets pkiDigestBusiStatistic
    *
    * @param double|null $pkiDigestBusiStatistic 杂凑
    *
    * @return $this
    */
    public function setPkiDigestBusiStatistic($pkiDigestBusiStatistic)
    {
        $this->container['pkiDigestBusiStatistic'] = $pkiDigestBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiDecryptBusiStatistic
    *  解密
    *
    * @return double|null
    */
    public function getPkiDecryptBusiStatistic()
    {
        return $this->container['pkiDecryptBusiStatistic'];
    }

    /**
    * Sets pkiDecryptBusiStatistic
    *
    * @param double|null $pkiDecryptBusiStatistic 解密
    *
    * @return $this
    */
    public function setPkiDecryptBusiStatistic($pkiDecryptBusiStatistic)
    {
        $this->container['pkiDecryptBusiStatistic'] = $pkiDecryptBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiGenerateKeyBusiStatistic
    *  生成密钥
    *
    * @return double|null
    */
    public function getPkiGenerateKeyBusiStatistic()
    {
        return $this->container['pkiGenerateKeyBusiStatistic'];
    }

    /**
    * Sets pkiGenerateKeyBusiStatistic
    *
    * @param double|null $pkiGenerateKeyBusiStatistic 生成密钥
    *
    * @return $this
    */
    public function setPkiGenerateKeyBusiStatistic($pkiGenerateKeyBusiStatistic)
    {
        $this->container['pkiGenerateKeyBusiStatistic'] = $pkiGenerateKeyBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiVerifyBusiStatistic
    *  验章次数
    *
    * @return double|null
    */
    public function getPkiVerifyBusiStatistic()
    {
        return $this->container['pkiVerifyBusiStatistic'];
    }

    /**
    * Sets pkiVerifyBusiStatistic
    *
    * @param double|null $pkiVerifyBusiStatistic 验章次数
    *
    * @return $this
    */
    public function setPkiVerifyBusiStatistic($pkiVerifyBusiStatistic)
    {
        $this->container['pkiVerifyBusiStatistic'] = $pkiVerifyBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiEncryptBusiStatistic
    *  加密
    *
    * @return double|null
    */
    public function getPkiEncryptBusiStatistic()
    {
        return $this->container['pkiEncryptBusiStatistic'];
    }

    /**
    * Sets pkiEncryptBusiStatistic
    *
    * @param double|null $pkiEncryptBusiStatistic 加密
    *
    * @return $this
    */
    public function setPkiEncryptBusiStatistic($pkiEncryptBusiStatistic)
    {
        $this->container['pkiEncryptBusiStatistic'] = $pkiEncryptBusiStatistic;
        return $this;
    }

    /**
    * Gets tsaVerifyBusiStatistic
    *  验证次数
    *
    * @return double|null
    */
    public function getTsaVerifyBusiStatistic()
    {
        return $this->container['tsaVerifyBusiStatistic'];
    }

    /**
    * Sets tsaVerifyBusiStatistic
    *
    * @param double|null $tsaVerifyBusiStatistic 验证次数
    *
    * @return $this
    */
    public function setTsaVerifyBusiStatistic($tsaVerifyBusiStatistic)
    {
        $this->container['tsaVerifyBusiStatistic'] = $tsaVerifyBusiStatistic;
        return $this;
    }

    /**
    * Gets tsaParseBusiStatistic
    *  解析次数
    *
    * @return double|null
    */
    public function getTsaParseBusiStatistic()
    {
        return $this->container['tsaParseBusiStatistic'];
    }

    /**
    * Sets tsaParseBusiStatistic
    *
    * @param double|null $tsaParseBusiStatistic 解析次数
    *
    * @return $this
    */
    public function setTsaParseBusiStatistic($tsaParseBusiStatistic)
    {
        $this->container['tsaParseBusiStatistic'] = $tsaParseBusiStatistic;
        return $this;
    }

    /**
    * Gets svsVerifyBusiStatistic
    *  svs验签
    *
    * @return double|null
    */
    public function getSvsVerifyBusiStatistic()
    {
        return $this->container['svsVerifyBusiStatistic'];
    }

    /**
    * Sets svsVerifyBusiStatistic
    *
    * @param double|null $svsVerifyBusiStatistic svs验签
    *
    * @return $this
    */
    public function setSvsVerifyBusiStatistic($svsVerifyBusiStatistic)
    {
        $this->container['svsVerifyBusiStatistic'] = $svsVerifyBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiRandomBusiStatistic
    *  生成随机
    *
    * @return double|null
    */
    public function getPkiRandomBusiStatistic()
    {
        return $this->container['pkiRandomBusiStatistic'];
    }

    /**
    * Sets pkiRandomBusiStatistic
    *
    * @param double|null $pkiRandomBusiStatistic 生成随机
    *
    * @return $this
    */
    public function setPkiRandomBusiStatistic($pkiRandomBusiStatistic)
    {
        $this->container['pkiRandomBusiStatistic'] = $pkiRandomBusiStatistic;
        return $this;
    }

    /**
    * Gets timestamp
    *  统计时间，UNIX时间戳，单位毫秒
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 统计时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets svsCertBusiStatistic
    *  svs获取证书等相关证书操作
    *
    * @return double|null
    */
    public function getSvsCertBusiStatistic()
    {
        return $this->container['svsCertBusiStatistic'];
    }

    /**
    * Sets svsCertBusiStatistic
    *
    * @param double|null $svsCertBusiStatistic svs获取证书等相关证书操作
    *
    * @return $this
    */
    public function setSvsCertBusiStatistic($svsCertBusiStatistic)
    {
        $this->container['svsCertBusiStatistic'] = $svsCertBusiStatistic;
        return $this;
    }

    /**
    * Gets svsEncodeBusiStatistic
    *  svs编码
    *
    * @return double|null
    */
    public function getSvsEncodeBusiStatistic()
    {
        return $this->container['svsEncodeBusiStatistic'];
    }

    /**
    * Sets svsEncodeBusiStatistic
    *
    * @param double|null $svsEncodeBusiStatistic svs编码
    *
    * @return $this
    */
    public function setSvsEncodeBusiStatistic($svsEncodeBusiStatistic)
    {
        $this->container['svsEncodeBusiStatistic'] = $svsEncodeBusiStatistic;
        return $this;
    }

    /**
    * Gets tsaApplyBusiStatistic
    *  申请次数
    *
    * @return double|null
    */
    public function getTsaApplyBusiStatistic()
    {
        return $this->container['tsaApplyBusiStatistic'];
    }

    /**
    * Sets tsaApplyBusiStatistic
    *
    * @param double|null $tsaApplyBusiStatistic 申请次数
    *
    * @return $this
    */
    public function setTsaApplyBusiStatistic($tsaApplyBusiStatistic)
    {
        $this->container['tsaApplyBusiStatistic'] = $tsaApplyBusiStatistic;
        return $this;
    }

    /**
    * Gets svsSignBusiStatistic
    *  svs签名
    *
    * @return double|null
    */
    public function getSvsSignBusiStatistic()
    {
        return $this->container['svsSignBusiStatistic'];
    }

    /**
    * Sets svsSignBusiStatistic
    *
    * @param double|null $svsSignBusiStatistic svs签名
    *
    * @return $this
    */
    public function setSvsSignBusiStatistic($svsSignBusiStatistic)
    {
        $this->container['svsSignBusiStatistic'] = $svsSignBusiStatistic;
        return $this;
    }

    /**
    * Gets svsDecryptBusiStatistic
    *  svs解密
    *
    * @return double|null
    */
    public function getSvsDecryptBusiStatistic()
    {
        return $this->container['svsDecryptBusiStatistic'];
    }

    /**
    * Sets svsDecryptBusiStatistic
    *
    * @param double|null $svsDecryptBusiStatistic svs解密
    *
    * @return $this
    */
    public function setSvsDecryptBusiStatistic($svsDecryptBusiStatistic)
    {
        $this->container['svsDecryptBusiStatistic'] = $svsDecryptBusiStatistic;
        return $this;
    }

    /**
    * Gets kmsBusiStatistic
    *  调用次数
    *
    * @return double|null
    */
    public function getKmsBusiStatistic()
    {
        return $this->container['kmsBusiStatistic'];
    }

    /**
    * Sets kmsBusiStatistic
    *
    * @param double|null $kmsBusiStatistic 调用次数
    *
    * @return $this
    */
    public function setKmsBusiStatistic($kmsBusiStatistic)
    {
        $this->container['kmsBusiStatistic'] = $kmsBusiStatistic;
        return $this;
    }

    /**
    * Gets sealVerifyBusiStatistic
    *  验章次数
    *
    * @return double|null
    */
    public function getSealVerifyBusiStatistic()
    {
        return $this->container['sealVerifyBusiStatistic'];
    }

    /**
    * Sets sealVerifyBusiStatistic
    *
    * @param double|null $sealVerifyBusiStatistic 验章次数
    *
    * @return $this
    */
    public function setSealVerifyBusiStatistic($sealVerifyBusiStatistic)
    {
        $this->container['sealVerifyBusiStatistic'] = $sealVerifyBusiStatistic;
        return $this;
    }

    /**
    * Gets pkiSignBusiStatistic
    *  签名
    *
    * @return double|null
    */
    public function getPkiSignBusiStatistic()
    {
        return $this->container['pkiSignBusiStatistic'];
    }

    /**
    * Sets pkiSignBusiStatistic
    *
    * @param double|null $pkiSignBusiStatistic 签名
    *
    * @return $this
    */
    public function setPkiSignBusiStatistic($pkiSignBusiStatistic)
    {
        $this->container['pkiSignBusiStatistic'] = $pkiSignBusiStatistic;
        return $this;
    }

    /**
    * Gets secauthBusiStatistic
    *  口令验证
    *
    * @return double|null
    */
    public function getSecauthBusiStatistic()
    {
        return $this->container['secauthBusiStatistic'];
    }

    /**
    * Sets secauthBusiStatistic
    *
    * @param double|null $secauthBusiStatistic 口令验证
    *
    * @return $this
    */
    public function setSecauthBusiStatistic($secauthBusiStatistic)
    {
        $this->container['secauthBusiStatistic'] = $secauthBusiStatistic;
        return $this;
    }

    /**
    * Gets sealSignBusiStatistic
    *  签章次数
    *
    * @return double|null
    */
    public function getSealSignBusiStatistic()
    {
        return $this->container['sealSignBusiStatistic'];
    }

    /**
    * Sets sealSignBusiStatistic
    *
    * @param double|null $sealSignBusiStatistic 签章次数
    *
    * @return $this
    */
    public function setSealSignBusiStatistic($sealSignBusiStatistic)
    {
        $this->container['sealSignBusiStatistic'] = $sealSignBusiStatistic;
        return $this;
    }

    /**
    * Gets splitBusiStatistic
    *  签名次数
    *
    * @return double|null
    */
    public function getSplitBusiStatistic()
    {
        return $this->container['splitBusiStatistic'];
    }

    /**
    * Sets splitBusiStatistic
    *
    * @param double|null $splitBusiStatistic 签名次数
    *
    * @return $this
    */
    public function setSplitBusiStatistic($splitBusiStatistic)
    {
        $this->container['splitBusiStatistic'] = $splitBusiStatistic;
        return $this;
    }

    /**
    * Gets svsRandomBusiStatistic
    *  svs生成随机
    *
    * @return double|null
    */
    public function getSvsRandomBusiStatistic()
    {
        return $this->container['svsRandomBusiStatistic'];
    }

    /**
    * Sets svsRandomBusiStatistic
    *
    * @param double|null $svsRandomBusiStatistic svs生成随机
    *
    * @return $this
    */
    public function setSvsRandomBusiStatistic($svsRandomBusiStatistic)
    {
        $this->container['svsRandomBusiStatistic'] = $svsRandomBusiStatistic;
        return $this;
    }

    /**
    * Gets svsEncryptBusiStatistic
    *  svs加密
    *
    * @return double|null
    */
    public function getSvsEncryptBusiStatistic()
    {
        return $this->container['svsEncryptBusiStatistic'];
    }

    /**
    * Sets svsEncryptBusiStatistic
    *
    * @param double|null $svsEncryptBusiStatistic svs加密
    *
    * @return $this
    */
    public function setSvsEncryptBusiStatistic($svsEncryptBusiStatistic)
    {
        $this->container['svsEncryptBusiStatistic'] = $svsEncryptBusiStatistic;
        return $this;
    }

    /**
    * Gets smsDecBusiStatistic
    *  解密次数
    *
    * @return double|null
    */
    public function getSmsDecBusiStatistic()
    {
        return $this->container['smsDecBusiStatistic'];
    }

    /**
    * Sets smsDecBusiStatistic
    *
    * @param double|null $smsDecBusiStatistic 解密次数
    *
    * @return $this
    */
    public function setSmsDecBusiStatistic($smsDecBusiStatistic)
    {
        $this->container['smsDecBusiStatistic'] = $smsDecBusiStatistic;
        return $this;
    }

    /**
    * Gets svsDigestBusiStatistic
    *  svs杂凑
    *
    * @return double|null
    */
    public function getSvsDigestBusiStatistic()
    {
        return $this->container['svsDigestBusiStatistic'];
    }

    /**
    * Sets svsDigestBusiStatistic
    *
    * @param double|null $svsDigestBusiStatistic svs杂凑
    *
    * @return $this
    */
    public function setSvsDigestBusiStatistic($svsDigestBusiStatistic)
    {
        $this->container['svsDigestBusiStatistic'] = $svsDigestBusiStatistic;
        return $this;
    }

    /**
    * Gets svsDecodeBusiStatistic
    *  svs解码
    *
    * @return double|null
    */
    public function getSvsDecodeBusiStatistic()
    {
        return $this->container['svsDecodeBusiStatistic'];
    }

    /**
    * Sets svsDecodeBusiStatistic
    *
    * @param double|null $svsDecodeBusiStatistic svs解码
    *
    * @return $this
    */
    public function setSvsDecodeBusiStatistic($svsDecodeBusiStatistic)
    {
        $this->container['svsDecodeBusiStatistic'] = $svsDecodeBusiStatistic;
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

