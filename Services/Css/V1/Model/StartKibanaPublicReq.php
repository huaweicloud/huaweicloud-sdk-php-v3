<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartKibanaPublicReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartKibanaPublicReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipSize  带宽。单位：Mbit/s
    * elbWhiteList  elbWhiteList
    * isAutoPay  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipSize' => 'int',
            'elbWhiteList' => '\HuaweiCloud\SDK\Css\V1\Model\StartKibanaPublicReqElbWhitelist',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipSize  带宽。单位：Mbit/s
    * elbWhiteList  elbWhiteList
    * isAutoPay  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipSize' => null,
        'elbWhiteList' => null,
        'isAutoPay' => 'int32'
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
    * eipSize  带宽。单位：Mbit/s
    * elbWhiteList  elbWhiteList
    * isAutoPay  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipSize' => 'eipSize',
            'elbWhiteList' => 'elbWhiteList',
            'isAutoPay' => 'isAutoPay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipSize  带宽。单位：Mbit/s
    * elbWhiteList  elbWhiteList
    * isAutoPay  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @var string[]
    */
    protected static $setters = [
            'eipSize' => 'setEipSize',
            'elbWhiteList' => 'setElbWhiteList',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipSize  带宽。单位：Mbit/s
    * elbWhiteList  elbWhiteList
    * isAutoPay  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @var string[]
    */
    protected static $getters = [
            'eipSize' => 'getEipSize',
            'elbWhiteList' => 'getElbWhiteList',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['eipSize'] = isset($data['eipSize']) ? $data['eipSize'] : null;
        $this->container['elbWhiteList'] = isset($data['elbWhiteList']) ? $data['elbWhiteList'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eipSize'] === null) {
            $invalidProperties[] = "'eipSize' can't be null";
        }
        if ($this->container['elbWhiteList'] === null) {
            $invalidProperties[] = "'elbWhiteList' can't be null";
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
    * Gets eipSize
    *  带宽。单位：Mbit/s
    *
    * @return int
    */
    public function getEipSize()
    {
        return $this->container['eipSize'];
    }

    /**
    * Sets eipSize
    *
    * @param int $eipSize 带宽。单位：Mbit/s
    *
    * @return $this
    */
    public function setEipSize($eipSize)
    {
        $this->container['eipSize'] = $eipSize;
        return $this;
    }

    /**
    * Gets elbWhiteList
    *  elbWhiteList
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\StartKibanaPublicReqElbWhitelist
    */
    public function getElbWhiteList()
    {
        return $this->container['elbWhiteList'];
    }

    /**
    * Sets elbWhiteList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\StartKibanaPublicReqElbWhitelist $elbWhiteList elbWhiteList
    *
    * @return $this
    */
    public function setElbWhiteList($elbWhiteList)
    {
        $this->container['elbWhiteList'] = $elbWhiteList;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay 是否自动支付。下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。该参数适用于包周期集群。  - 1: 是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 - 0: 否（需要客户手动去支付，客户可以选择折扣和优惠券）。默认值为“0”。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

