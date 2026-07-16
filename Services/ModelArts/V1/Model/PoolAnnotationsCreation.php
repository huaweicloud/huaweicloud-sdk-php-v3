<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolAnnotationsCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolAnnotationsCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    * osModelartsAutoPay  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    * osModelartsPromotionInfo  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsDescription' => 'string',
            'osModelartsBillingMode' => 'string',
            'osModelartsPeriodNum' => 'string',
            'osModelartsPeriodType' => 'string',
            'osModelartsAutoRenew' => 'string',
            'osModelartsAutoPay' => 'string',
            'osModelartsPromotionInfo' => 'string',
            'osModelartsServiceConsoleUrl' => 'string',
            'osModelartsOrderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    * osModelartsAutoPay  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    * osModelartsPromotionInfo  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsDescription' => null,
        'osModelartsBillingMode' => null,
        'osModelartsPeriodNum' => null,
        'osModelartsPeriodType' => null,
        'osModelartsAutoRenew' => null,
        'osModelartsAutoPay' => null,
        'osModelartsPromotionInfo' => null,
        'osModelartsServiceConsoleUrl' => null,
        'osModelartsOrderId' => null
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
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    * osModelartsAutoPay  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    * osModelartsPromotionInfo  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsDescription' => 'os.modelarts/description',
            'osModelartsBillingMode' => 'os.modelarts/billing.mode',
            'osModelartsPeriodNum' => 'os.modelarts/period.num',
            'osModelartsPeriodType' => 'os.modelarts/period.type',
            'osModelartsAutoRenew' => 'os.modelarts/auto.renew',
            'osModelartsAutoPay' => 'os.modelarts/auto.pay',
            'osModelartsPromotionInfo' => 'os.modelarts/promotion.info',
            'osModelartsServiceConsoleUrl' => 'os.modelarts/service.console.url',
            'osModelartsOrderId' => 'os.modelarts/order.id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    * osModelartsAutoPay  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    * osModelartsPromotionInfo  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsDescription' => 'setOsModelartsDescription',
            'osModelartsBillingMode' => 'setOsModelartsBillingMode',
            'osModelartsPeriodNum' => 'setOsModelartsPeriodNum',
            'osModelartsPeriodType' => 'setOsModelartsPeriodType',
            'osModelartsAutoRenew' => 'setOsModelartsAutoRenew',
            'osModelartsAutoPay' => 'setOsModelartsAutoPay',
            'osModelartsPromotionInfo' => 'setOsModelartsPromotionInfo',
            'osModelartsServiceConsoleUrl' => 'setOsModelartsServiceConsoleUrl',
            'osModelartsOrderId' => 'setOsModelartsOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    * osModelartsAutoPay  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    * osModelartsPromotionInfo  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsDescription' => 'getOsModelartsDescription',
            'osModelartsBillingMode' => 'getOsModelartsBillingMode',
            'osModelartsPeriodNum' => 'getOsModelartsPeriodNum',
            'osModelartsPeriodType' => 'getOsModelartsPeriodType',
            'osModelartsAutoRenew' => 'getOsModelartsAutoRenew',
            'osModelartsAutoPay' => 'getOsModelartsAutoPay',
            'osModelartsPromotionInfo' => 'getOsModelartsPromotionInfo',
            'osModelartsServiceConsoleUrl' => 'getOsModelartsServiceConsoleUrl',
            'osModelartsOrderId' => 'getOsModelartsOrderId'
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
        $this->container['osModelartsDescription'] = isset($data['osModelartsDescription']) ? $data['osModelartsDescription'] : null;
        $this->container['osModelartsBillingMode'] = isset($data['osModelartsBillingMode']) ? $data['osModelartsBillingMode'] : null;
        $this->container['osModelartsPeriodNum'] = isset($data['osModelartsPeriodNum']) ? $data['osModelartsPeriodNum'] : null;
        $this->container['osModelartsPeriodType'] = isset($data['osModelartsPeriodType']) ? $data['osModelartsPeriodType'] : null;
        $this->container['osModelartsAutoRenew'] = isset($data['osModelartsAutoRenew']) ? $data['osModelartsAutoRenew'] : null;
        $this->container['osModelartsAutoPay'] = isset($data['osModelartsAutoPay']) ? $data['osModelartsAutoPay'] : null;
        $this->container['osModelartsPromotionInfo'] = isset($data['osModelartsPromotionInfo']) ? $data['osModelartsPromotionInfo'] : null;
        $this->container['osModelartsServiceConsoleUrl'] = isset($data['osModelartsServiceConsoleUrl']) ? $data['osModelartsServiceConsoleUrl'] : null;
        $this->container['osModelartsOrderId'] = isset($data['osModelartsOrderId']) ? $data['osModelartsOrderId'] : null;
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
    * Gets osModelartsDescription
    *  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsDescription()
    {
        return $this->container['osModelartsDescription'];
    }

    /**
    * Sets osModelartsDescription
    *
    * @param string|null $osModelartsDescription **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsDescription($osModelartsDescription)
    {
        $this->container['osModelartsDescription'] = $osModelartsDescription;
        return $this;
    }

    /**
    * Gets osModelartsBillingMode
    *  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsBillingMode()
    {
        return $this->container['osModelartsBillingMode'];
    }

    /**
    * Sets osModelartsBillingMode
    *
    * @param string|null $osModelartsBillingMode **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsBillingMode($osModelartsBillingMode)
    {
        $this->container['osModelartsBillingMode'] = $osModelartsBillingMode;
        return $this;
    }

    /**
    * Gets osModelartsPeriodNum
    *  **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPeriodNum()
    {
        return $this->container['osModelartsPeriodNum'];
    }

    /**
    * Sets osModelartsPeriodNum
    *
    * @param string|null $osModelartsPeriodNum **参数解释**：包周期订购周期，比如2。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPeriodNum($osModelartsPeriodNum)
    {
        $this->container['osModelartsPeriodNum'] = $osModelartsPeriodNum;
        return $this;
    }

    /**
    * Gets osModelartsPeriodType
    *  **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPeriodType()
    {
        return $this->container['osModelartsPeriodType'];
    }

    /**
    * Sets osModelartsPeriodType
    *
    * @param string|null $osModelartsPeriodType **参数解释**：包周期订购类型。当计费模式为包周期时该参数必传。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 2：月 - 3：年 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPeriodType($osModelartsPeriodType)
    {
        $this->container['osModelartsPeriodType'] = $osModelartsPeriodType;
        return $this;
    }

    /**
    * Gets osModelartsAutoRenew
    *  **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    *
    * @return string|null
    */
    public function getOsModelartsAutoRenew()
    {
        return $this->container['osModelartsAutoRenew'];
    }

    /**
    * Sets osModelartsAutoRenew
    *
    * @param string|null $osModelartsAutoRenew **参数解释**：是否自动续费。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费  - 1：自动续费 **默认取值**：0。
    *
    * @return $this
    */
    public function setOsModelartsAutoRenew($osModelartsAutoRenew)
    {
        $this->container['osModelartsAutoRenew'] = $osModelartsAutoRenew;
        return $this;
    }

    /**
    * Gets osModelartsAutoPay
    *  **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsAutoPay()
    {
        return $this->container['osModelartsAutoPay'];
    }

    /**
    * Sets osModelartsAutoPay
    *
    * @param string|null $osModelartsAutoPay **参数解释**：是否自动付费，仅在用户购买包周期资源时生效。 **约束限制**：不涉及。 **取值范围**：可选值如下： - true：自动付费 - false：手动付费，默认值 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsAutoPay($osModelartsAutoPay)
    {
        $this->container['osModelartsAutoPay'] = $osModelartsAutoPay;
        return $this;
    }

    /**
    * Gets osModelartsPromotionInfo
    *  **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPromotionInfo()
    {
        return $this->container['osModelartsPromotionInfo'];
    }

    /**
    * Sets osModelartsPromotionInfo
    *
    * @param string|null $osModelartsPromotionInfo **参数解释**：用户在cbc选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPromotionInfo($osModelartsPromotionInfo)
    {
        $this->container['osModelartsPromotionInfo'] = $osModelartsPromotionInfo;
        return $this;
    }

    /**
    * Gets osModelartsServiceConsoleUrl
    *  **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsServiceConsoleUrl()
    {
        return $this->container['osModelartsServiceConsoleUrl'];
    }

    /**
    * Sets osModelartsServiceConsoleUrl
    *
    * @param string|null $osModelartsServiceConsoleUrl **参数解释**：订购订单支付完成后跳转的url地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsServiceConsoleUrl($osModelartsServiceConsoleUrl)
    {
        $this->container['osModelartsServiceConsoleUrl'] = $osModelartsServiceConsoleUrl;
        return $this;
    }

    /**
    * Gets osModelartsOrderId
    *  **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsOrderId()
    {
        return $this->container['osModelartsOrderId'];
    }

    /**
    * Sets osModelartsOrderId
    *
    * @param string|null $osModelartsOrderId **参数解释**：订单id，包周期资源池创建或者计费模式变更的时候该参数必需。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsOrderId($osModelartsOrderId)
    {
        $this->container['osModelartsOrderId'] = $osModelartsOrderId;
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

