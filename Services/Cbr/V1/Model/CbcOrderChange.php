<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CbcOrderChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CbcOrderChange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceConsoleUrl  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    * productInfo  productInfo
    * resourceId  待变更的资源ID
    * isAutoPay  是否自动支付，默认非自动支付：false
    * promotionInfo  购买折扣
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceConsoleUrl' => 'string',
            'productInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\CbcProductInfoOrderChange',
            'resourceId' => 'string',
            'isAutoPay' => 'bool',
            'promotionInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceConsoleUrl  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    * productInfo  productInfo
    * resourceId  待变更的资源ID
    * isAutoPay  是否自动支付，默认非自动支付：false
    * promotionInfo  购买折扣
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceConsoleUrl' => null,
        'productInfo' => null,
        'resourceId' => null,
        'isAutoPay' => null,
        'promotionInfo' => null
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
    * cloudServiceConsoleUrl  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    * productInfo  productInfo
    * resourceId  待变更的资源ID
    * isAutoPay  是否自动支付，默认非自动支付：false
    * promotionInfo  购买折扣
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceConsoleUrl' => 'cloud_service_console_url',
            'productInfo' => 'product_info',
            'resourceId' => 'resource_id',
            'isAutoPay' => 'is_auto_pay',
            'promotionInfo' => 'promotion_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceConsoleUrl  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    * productInfo  productInfo
    * resourceId  待变更的资源ID
    * isAutoPay  是否自动支付，默认非自动支付：false
    * promotionInfo  购买折扣
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceConsoleUrl' => 'setCloudServiceConsoleUrl',
            'productInfo' => 'setProductInfo',
            'resourceId' => 'setResourceId',
            'isAutoPay' => 'setIsAutoPay',
            'promotionInfo' => 'setPromotionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceConsoleUrl  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    * productInfo  productInfo
    * resourceId  待变更的资源ID
    * isAutoPay  是否自动支付，默认非自动支付：false
    * promotionInfo  购买折扣
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceConsoleUrl' => 'getCloudServiceConsoleUrl',
            'productInfo' => 'getProductInfo',
            'resourceId' => 'getResourceId',
            'isAutoPay' => 'getIsAutoPay',
            'promotionInfo' => 'getPromotionInfo'
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
        $this->container['cloudServiceConsoleUrl'] = isset($data['cloudServiceConsoleUrl']) ? $data['cloudServiceConsoleUrl'] : null;
        $this->container['productInfo'] = isset($data['productInfo']) ? $data['productInfo'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudServiceConsoleUrl']) && (mb_strlen($this->container['cloudServiceConsoleUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'cloudServiceConsoleUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['cloudServiceConsoleUrl']) && (mb_strlen($this->container['cloudServiceConsoleUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceConsoleUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productInfo'] === null) {
            $invalidProperties[] = "'productInfo' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
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
    * Gets cloudServiceConsoleUrl
    *  云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    *
    * @return string|null
    */
    public function getCloudServiceConsoleUrl()
    {
        return $this->container['cloudServiceConsoleUrl'];
    }

    /**
    * Sets cloudServiceConsoleUrl
    *
    * @param string|null $cloudServiceConsoleUrl 云服务ConsoleURL。订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息
    *
    * @return $this
    */
    public function setCloudServiceConsoleUrl($cloudServiceConsoleUrl)
    {
        $this->container['cloudServiceConsoleUrl'] = $cloudServiceConsoleUrl;
        return $this;
    }

    /**
    * Gets productInfo
    *  productInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CbcProductInfoOrderChange
    */
    public function getProductInfo()
    {
        return $this->container['productInfo'];
    }

    /**
    * Sets productInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CbcProductInfoOrderChange $productInfo productInfo
    *
    * @return $this
    */
    public function setProductInfo($productInfo)
    {
        $this->container['productInfo'] = $productInfo;
        return $this;
    }

    /**
    * Gets resourceId
    *  待变更的资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 待变更的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付，默认非自动支付：false
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否自动支付，默认非自动支付：false
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  购买折扣
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
    * @param string|null $promotionInfo 购买折扣
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
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

