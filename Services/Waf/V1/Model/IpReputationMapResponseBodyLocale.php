<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpReputationMapResponseBodyLocale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpReputationMapResponseBody_locale';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * drPeng  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * google  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tencent  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * meiTuan  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * microsoft  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * aliCloud  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * amazon  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vnet  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hw  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'drPeng' => 'string',
            'google' => 'string',
            'tencent' => 'string',
            'meiTuan' => 'string',
            'microsoft' => 'string',
            'aliCloud' => 'string',
            'amazon' => 'string',
            'vnet' => 'string',
            'hw' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * drPeng  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * google  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tencent  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * meiTuan  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * microsoft  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * aliCloud  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * amazon  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vnet  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hw  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'drPeng' => null,
        'google' => null,
        'tencent' => null,
        'meiTuan' => null,
        'microsoft' => null,
        'aliCloud' => null,
        'amazon' => null,
        'vnet' => null,
        'hw' => null
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
    * drPeng  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * google  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tencent  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * meiTuan  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * microsoft  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * aliCloud  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * amazon  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vnet  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hw  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'drPeng' => 'Dr.Peng',
            'google' => 'Google',
            'tencent' => 'Tencent',
            'meiTuan' => 'MeiTuan',
            'microsoft' => 'Microsoft',
            'aliCloud' => 'AliCloud',
            'amazon' => 'Amazon',
            'vnet' => 'VNET',
            'hw' => 'HW'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * drPeng  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * google  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tencent  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * meiTuan  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * microsoft  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * aliCloud  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * amazon  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vnet  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hw  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'drPeng' => 'setDrPeng',
            'google' => 'setGoogle',
            'tencent' => 'setTencent',
            'meiTuan' => 'setMeiTuan',
            'microsoft' => 'setMicrosoft',
            'aliCloud' => 'setAliCloud',
            'amazon' => 'setAmazon',
            'vnet' => 'setVnet',
            'hw' => 'setHw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * drPeng  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * google  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tencent  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * meiTuan  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * microsoft  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * aliCloud  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * amazon  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vnet  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hw  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'drPeng' => 'getDrPeng',
            'google' => 'getGoogle',
            'tencent' => 'getTencent',
            'meiTuan' => 'getMeiTuan',
            'microsoft' => 'getMicrosoft',
            'aliCloud' => 'getAliCloud',
            'amazon' => 'getAmazon',
            'vnet' => 'getVnet',
            'hw' => 'getHw'
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
        $this->container['drPeng'] = isset($data['drPeng']) ? $data['drPeng'] : null;
        $this->container['google'] = isset($data['google']) ? $data['google'] : null;
        $this->container['tencent'] = isset($data['tencent']) ? $data['tencent'] : null;
        $this->container['meiTuan'] = isset($data['meiTuan']) ? $data['meiTuan'] : null;
        $this->container['microsoft'] = isset($data['microsoft']) ? $data['microsoft'] : null;
        $this->container['aliCloud'] = isset($data['aliCloud']) ? $data['aliCloud'] : null;
        $this->container['amazon'] = isset($data['amazon']) ? $data['amazon'] : null;
        $this->container['vnet'] = isset($data['vnet']) ? $data['vnet'] : null;
        $this->container['hw'] = isset($data['hw']) ? $data['hw'] : null;
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
    * Gets drPeng
    *  **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDrPeng()
    {
        return $this->container['drPeng'];
    }

    /**
    * Sets drPeng
    *
    * @param string|null $drPeng **参数解释：** 鹏博士，一家提供互联网数据中心、云计算等服务的企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDrPeng($drPeng)
    {
        $this->container['drPeng'] = $drPeng;
        return $this;
    }

    /**
    * Gets google
    *  **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getGoogle()
    {
        return $this->container['google'];
    }

    /**
    * Sets google
    *
    * @param string|null $google **参数解释：** 谷歌公司，全球知名的科技企业，提供搜索引擎、云计算等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setGoogle($google)
    {
        $this->container['google'] = $google;
        return $this;
    }

    /**
    * Gets tencent
    *  **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTencent()
    {
        return $this->container['tencent'];
    }

    /**
    * Sets tencent
    *
    * @param string|null $tencent **参数解释：** 腾讯，中国知名的互联网企业，提供社交、游戏、金融等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTencent($tencent)
    {
        $this->container['tencent'] = $tencent;
        return $this;
    }

    /**
    * Gets meiTuan
    *  **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMeiTuan()
    {
        return $this->container['meiTuan'];
    }

    /**
    * Sets meiTuan
    *
    * @param string|null $meiTuan **参数解释：** 美团网，中国领先的生活服务电子商务平台 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMeiTuan($meiTuan)
    {
        $this->container['meiTuan'] = $meiTuan;
        return $this;
    }

    /**
    * Gets microsoft
    *  **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMicrosoft()
    {
        return $this->container['microsoft'];
    }

    /**
    * Sets microsoft
    *
    * @param string|null $microsoft **参数解释：** 微软公司，全球知名的科技企业，提供操作系统、办公软件等服务 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMicrosoft($microsoft)
    {
        $this->container['microsoft'] = $microsoft;
        return $this;
    }

    /**
    * Gets aliCloud
    *  **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAliCloud()
    {
        return $this->container['aliCloud'];
    }

    /**
    * Sets aliCloud
    *
    * @param string|null $aliCloud **参数解释：** 阿里云，阿里巴巴集团旗下的云计算品牌 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAliCloud($aliCloud)
    {
        $this->container['aliCloud'] = $aliCloud;
        return $this;
    }

    /**
    * Gets amazon
    *  **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAmazon()
    {
        return $this->container['amazon'];
    }

    /**
    * Sets amazon
    *
    * @param string|null $amazon **参数解释：** 亚马逊，全球知名的电子商务和云计算企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAmazon($amazon)
    {
        $this->container['amazon'] = $amazon;
        return $this;
    }

    /**
    * Gets vnet
    *  **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVnet()
    {
        return $this->container['vnet'];
    }

    /**
    * Sets vnet
    *
    * @param string|null $vnet **参数解释：** 世纪互联，中国领先的电信中立互联网基础设施服务提供商 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVnet($vnet)
    {
        $this->container['vnet'] = $vnet;
        return $this;
    }

    /**
    * Gets hw
    *  **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getHw()
    {
        return $this->container['hw'];
    }

    /**
    * Sets hw
    *
    * @param string|null $hw **参数解释：** 华为，全球知名的通信技术企业 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHw($hw)
    {
        $this->container['hw'] = $hw;
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

