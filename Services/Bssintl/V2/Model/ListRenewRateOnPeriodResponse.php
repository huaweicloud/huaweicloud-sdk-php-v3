<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRenewRateOnPeriodResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRenewRateOnPeriodResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currency  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    * renewInquiryResults  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    * failResourceInfos  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currency' => 'string',
            'renewInquiryResults' => '\HuaweiCloud\SDK\Bssintl\V2\Model\RenewInquiryResultInfo[]',
            'officialWebsiteRatingResult' => '\HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResultV2',
            'optionalDiscountRatingResults' => '\HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResultV2[]',
            'failResourceInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\FailResourceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currency  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    * renewInquiryResults  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    * failResourceInfos  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currency' => null,
        'renewInquiryResults' => null,
        'officialWebsiteRatingResult' => null,
        'optionalDiscountRatingResults' => null,
        'failResourceInfos' => null
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
    * currency  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    * renewInquiryResults  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    * failResourceInfos  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currency' => 'currency',
            'renewInquiryResults' => 'renew_inquiry_results',
            'officialWebsiteRatingResult' => 'official_website_rating_result',
            'optionalDiscountRatingResults' => 'optional_discount_rating_results',
            'failResourceInfos' => 'fail_resource_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currency  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    * renewInquiryResults  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    * failResourceInfos  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @var string[]
    */
    protected static $setters = [
            'currency' => 'setCurrency',
            'renewInquiryResults' => 'setRenewInquiryResults',
            'officialWebsiteRatingResult' => 'setOfficialWebsiteRatingResult',
            'optionalDiscountRatingResults' => 'setOptionalDiscountRatingResults',
            'failResourceInfos' => 'setFailResourceInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currency  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    * renewInquiryResults  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    * failResourceInfos  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @var string[]
    */
    protected static $getters = [
            'currency' => 'getCurrency',
            'renewInquiryResults' => 'getRenewInquiryResults',
            'officialWebsiteRatingResult' => 'getOfficialWebsiteRatingResult',
            'optionalDiscountRatingResults' => 'getOptionalDiscountRatingResults',
            'failResourceInfos' => 'getFailResourceInfos'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['renewInquiryResults'] = isset($data['renewInquiryResults']) ? $data['renewInquiryResults'] : null;
        $this->container['officialWebsiteRatingResult'] = isset($data['officialWebsiteRatingResult']) ? $data['officialWebsiteRatingResult'] : null;
        $this->container['optionalDiscountRatingResults'] = isset($data['optionalDiscountRatingResults']) ? $data['optionalDiscountRatingResults'] : null;
        $this->container['failResourceInfos'] = isset($data['failResourceInfos']) ? $data['failResourceInfos'] : null;
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
    * Gets currency
    *  |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency |参数名称：币种。CNY：人民币。USD：美元。| |参数约束及描述：币种。CNY：人民币。USD：美元。|
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets renewInquiryResults
    *  |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\RenewInquiryResultInfo[]|null
    */
    public function getRenewInquiryResults()
    {
        return $this->container['renewInquiryResults'];
    }

    /**
    * Sets renewInquiryResults
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\RenewInquiryResultInfo[]|null $renewInquiryResults |参数名称：主资源（包含从资源）询价结果| |参数约束以及描述：主资源（包含从资源）询价结果|
    *
    * @return $this
    */
    public function setRenewInquiryResults($renewInquiryResults)
    {
        $this->container['renewInquiryResults'] = $renewInquiryResults;
        return $this;
    }

    /**
    * Gets officialWebsiteRatingResult
    *  officialWebsiteRatingResult
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResultV2|null
    */
    public function getOfficialWebsiteRatingResult()
    {
        return $this->container['officialWebsiteRatingResult'];
    }

    /**
    * Sets officialWebsiteRatingResult
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResultV2|null $officialWebsiteRatingResult officialWebsiteRatingResult
    *
    * @return $this
    */
    public function setOfficialWebsiteRatingResult($officialWebsiteRatingResult)
    {
        $this->container['officialWebsiteRatingResult'] = $officialWebsiteRatingResult;
        return $this;
    }

    /**
    * Gets optionalDiscountRatingResults
    *  |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResultV2[]|null
    */
    public function getOptionalDiscountRatingResults()
    {
        return $this->container['optionalDiscountRatingResults'];
    }

    /**
    * Sets optionalDiscountRatingResults
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResultV2[]|null $optionalDiscountRatingResults |参数名称：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果| |参数约束以及描述：存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果|
    *
    * @return $this
    */
    public function setOptionalDiscountRatingResults($optionalDiscountRatingResults)
    {
        $this->container['optionalDiscountRatingResults'] = $optionalDiscountRatingResults;
        return $this;
    }

    /**
    * Gets failResourceInfos
    *  |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\FailResourceInfo[]|null
    */
    public function getFailResourceInfos()
    {
        return $this->container['failResourceInfos'];
    }

    /**
    * Sets failResourceInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\FailResourceInfo[]|null $failResourceInfos |参数名称：失败的资源信息列表| |参数约束以及描述：失败的资源信息列表|
    *
    * @return $this
    */
    public function setFailResourceInfos($failResourceInfos)
    {
        $this->container['failResourceInfos'] = $failResourceInfos;
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

