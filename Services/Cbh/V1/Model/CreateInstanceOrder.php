<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceOrder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceKey  云堡垒机实例key。
    * cloudServiceType  云服务类型，默认填写“hws.service.type.cbh”。
    * regionId  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * chargingMode  计费模式。 - 0 包周期计费。
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * productInfos  产品信息
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    * subscriptionNum  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceKey' => 'int',
            'cloudServiceType' => 'string',
            'regionId' => 'string',
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'productInfos' => '\HuaweiCloud\SDK\Cbh\V1\Model\ProductInfos[]',
            'isAutoRenew' => 'int',
            'subscriptionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceKey  云堡垒机实例key。
    * cloudServiceType  云服务类型，默认填写“hws.service.type.cbh”。
    * regionId  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * chargingMode  计费模式。 - 0 包周期计费。
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * productInfos  产品信息
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    * subscriptionNum  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceKey' => null,
        'cloudServiceType' => null,
        'regionId' => null,
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => null,
        'productInfos' => null,
        'isAutoRenew' => null,
        'subscriptionNum' => null
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
    * instanceKey  云堡垒机实例key。
    * cloudServiceType  云服务类型，默认填写“hws.service.type.cbh”。
    * regionId  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * chargingMode  计费模式。 - 0 包周期计费。
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * productInfos  产品信息
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    * subscriptionNum  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceKey' => 'instance_key',
            'cloudServiceType' => 'cloud_service_type',
            'regionId' => 'region_id',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'productInfos' => 'product_infos',
            'isAutoRenew' => 'is_auto_renew',
            'subscriptionNum' => 'subscription_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceKey  云堡垒机实例key。
    * cloudServiceType  云服务类型，默认填写“hws.service.type.cbh”。
    * regionId  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * chargingMode  计费模式。 - 0 包周期计费。
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * productInfos  产品信息
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    * subscriptionNum  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceKey' => 'setInstanceKey',
            'cloudServiceType' => 'setCloudServiceType',
            'regionId' => 'setRegionId',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'productInfos' => 'setProductInfos',
            'isAutoRenew' => 'setIsAutoRenew',
            'subscriptionNum' => 'setSubscriptionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceKey  云堡垒机实例key。
    * cloudServiceType  云服务类型，默认填写“hws.service.type.cbh”。
    * regionId  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * chargingMode  计费模式。 - 0 包周期计费。
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * productInfos  产品信息
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    * subscriptionNum  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceKey' => 'getInstanceKey',
            'cloudServiceType' => 'getCloudServiceType',
            'regionId' => 'getRegionId',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'productInfos' => 'getProductInfos',
            'isAutoRenew' => 'getIsAutoRenew',
            'subscriptionNum' => 'getSubscriptionNum'
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
        $this->container['instanceKey'] = isset($data['instanceKey']) ? $data['instanceKey'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceKey'] === null) {
            $invalidProperties[] = "'instanceKey' can't be null";
        }
            if (($this->container['instanceKey'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'instanceKey', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['instanceKey'] < 0)) {
                $invalidProperties[] = "invalid value for 'instanceKey', must be bigger than or equal to 0.";
            }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if (($this->container['chargingMode'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['chargingMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 0.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['periodType'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 0.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['periodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 0.";
            }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
        }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
            }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
            if (($this->container['subscriptionNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['subscriptionNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be bigger than or equal to 0.";
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
    * Gets instanceKey
    *  云堡垒机实例key。
    *
    * @return int
    */
    public function getInstanceKey()
    {
        return $this->container['instanceKey'];
    }

    /**
    * Sets instanceKey
    *
    * @param int $instanceKey 云堡垒机实例key。
    *
    * @return $this
    */
    public function setInstanceKey($instanceKey)
    {
        $this->container['instanceKey'] = $instanceKey;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型，默认填写“hws.service.type.cbh”。
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 云服务类型，默认填写“hws.service.type.cbh”。
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets regionId
    *  云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 云堡垒机实例局点ID。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。 - 0 包周期计费。
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式。 - 0 包周期计费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型。 - 2：月 - 3：年
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 订购周期类型。 - 2：月 - 3：年
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
    *  订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 订购周期数。 - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品信息
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\ProductInfos[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\ProductInfos[] $productInfos 产品信息
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
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
    * @param int|null $isAutoRenew 是否自动续订。 - 1，自动续订 - 0，不自动续订（默认）
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum 订购数量。当前仅支持订购1个，填写默认值1。
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
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

