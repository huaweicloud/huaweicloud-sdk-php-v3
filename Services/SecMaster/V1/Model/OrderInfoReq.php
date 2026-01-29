<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scene  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    * promotionInfo  促销折扣信息 String，JSON格式
    * operateType  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    * tagList  计费标签
    * productList  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    * config  config
    * periodType  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    * periodNum  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    * isAutoRenew  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scene' => 'string',
            'promotionInfo' => 'string',
            'operateType' => 'string',
            'tagList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]',
            'productList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Product[]',
            'config' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OrderConfig',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scene  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    * promotionInfo  促销折扣信息 String，JSON格式
    * operateType  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    * tagList  计费标签
    * productList  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    * config  config
    * periodType  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    * periodNum  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    * isAutoRenew  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scene' => null,
        'promotionInfo' => null,
        'operateType' => null,
        'tagList' => null,
        'productList' => null,
        'config' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'isAutoRenew' => 'int32'
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
    * scene  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    * promotionInfo  促销折扣信息 String，JSON格式
    * operateType  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    * tagList  计费标签
    * productList  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    * config  config
    * periodType  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    * periodNum  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    * isAutoRenew  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scene' => 'scene',
            'promotionInfo' => 'promotion_info',
            'operateType' => 'operate_type',
            'tagList' => 'tag_list',
            'productList' => 'product_list',
            'config' => 'config',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scene  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    * promotionInfo  促销折扣信息 String，JSON格式
    * operateType  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    * tagList  计费标签
    * productList  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    * config  config
    * periodType  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    * periodNum  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    * isAutoRenew  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @var string[]
    */
    protected static $setters = [
            'scene' => 'setScene',
            'promotionInfo' => 'setPromotionInfo',
            'operateType' => 'setOperateType',
            'tagList' => 'setTagList',
            'productList' => 'setProductList',
            'config' => 'setConfig',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scene  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    * promotionInfo  促销折扣信息 String，JSON格式
    * operateType  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    * tagList  计费标签
    * productList  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    * config  config
    * periodType  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    * periodNum  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    * isAutoRenew  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @var string[]
    */
    protected static $getters = [
            'scene' => 'getScene',
            'promotionInfo' => 'getPromotionInfo',
            'operateType' => 'getOperateType',
            'tagList' => 'getTagList',
            'productList' => 'getProductList',
            'config' => 'getConfig',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew'
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
    const SCENE_PREPAID = 'PREPAID';
    const SCENE_POSTPAID = 'POSTPAID';
    const SCENE_CONFIG = 'CONFIG';
    const OPERATE_TYPE_CREATE = 'CREATE';
    const OPERATE_TYPE_ALERT_CONFIG = 'ALERT_CONFIG';
    const PERIOD_TYPE_2 = 2;
    const PERIOD_TYPE_3 = 3;
    const PERIOD_NUM_1 = 1;
    const PERIOD_NUM_2 = 2;
    const PERIOD_NUM_3 = 3;
    const PERIOD_NUM_4 = 4;
    const PERIOD_NUM_5 = 5;
    const PERIOD_NUM_6 = 6;
    const PERIOD_NUM_7 = 7;
    const PERIOD_NUM_8 = 8;
    const PERIOD_NUM_9 = 9;
    const IS_AUTO_RENEW_0 = 0;
    const IS_AUTO_RENEW_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSceneAllowableValues()
    {
        return [
            self::SCENE_PREPAID,
            self::SCENE_POSTPAID,
            self::SCENE_CONFIG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_CREATE,
            self::OPERATE_TYPE_ALERT_CONFIG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_2,
            self::PERIOD_TYPE_3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodNumAllowableValues()
    {
        return [
            self::PERIOD_NUM_1,
            self::PERIOD_NUM_2,
            self::PERIOD_NUM_3,
            self::PERIOD_NUM_4,
            self::PERIOD_NUM_5,
            self::PERIOD_NUM_6,
            self::PERIOD_NUM_7,
            self::PERIOD_NUM_8,
            self::PERIOD_NUM_9,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoRenewAllowableValues()
    {
        return [
            self::IS_AUTO_RENEW_0,
            self::IS_AUTO_RENEW_1,
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
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['productList'] = isset($data['productList']) ? $data['productList'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
        }
            $allowedValues = $this->getSceneAllowableValues();
                if (!is_null($this->container['scene']) && !in_array($this->container['scene'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scene', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['scene']) > 10)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['scene']) < 2)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) > 2048)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) < 2)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operateType']) > 15)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['operateType']) < 3)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['periodType']) && ($this->container['periodType'] > 3)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['periodType']) && ($this->container['periodType'] < 2)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getPeriodNumAllowableValues();
                if (!is_null($this->container['periodNum']) && !in_array($this->container['periodNum'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodNum', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getIsAutoRenewAllowableValues();
                if (!is_null($this->container['isAutoRenew']) && !in_array($this->container['isAutoRenew'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoRenew', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
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
    * Gets scene
    *  场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene 场景描述，执行包年包月(PREPAID)、按需(POSTPAID)开通，或者配置资源（CONFIG）用量，缺省值：PREPAID，大小写不敏感
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销折扣信息 String，JSON格式
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 促销折扣信息 String，JSON格式
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 操作类型，比如创建场景为：CREATE、订单用量预警配置为：ALERT_CONFIG，大小写不敏感
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets tagList
    *  计费标签
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]|null $tagList 计费标签
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets productList
    *  当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Product[]|null
    */
    public function getProductList()
    {
        return $this->container['productList'];
    }

    /**
    * Sets productList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Product[]|null $productList 当scene=PREPAID 或者 POSTPAID时，当前字段必填 商品列表
    *
    * @return $this
    */
    public function setProductList($productList)
    {
        $this->container['productList'] = $productList;
        return $this;
    }

    /**
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OrderConfig|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OrderConfig|null $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets periodType
    *  当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 当scene=PREPAID时需要填写，订购周期类型： 2：月； 3：年；
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数，当scene=PREPAID时需要填写该值 取值大于0；小于等于0会报错。 当period_type=2时，其可选范围为[1, 9]，当period_type=3，其可选范围为[1, 3]
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 当scene=PREPAID时，当前字段必填，是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
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

