<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolMetaAnnotations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolMetaAnnotations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    * osModelartsPromotionInfo  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsFlavorResourceIds  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTmsTags  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSchedulerQueueStrategy  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSubpoolsCount  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainName  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolScopeExternalDependencyTrain  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsDescription' => 'string',
            'osModelartsBillingMode' => 'string',
            'osModelartsPeriodNum' => 'string',
            'osModelartsPeriodType' => 'string',
            'osModelartsAutoRenew' => 'string',
            'osModelartsPromotionInfo' => 'string',
            'osModelartsServiceConsoleUrl' => 'string',
            'osModelartsOrderId' => 'string',
            'osModelartsFlavorResourceIds' => 'string',
            'osModelartsTmsTags' => 'string',
            'osModelartsPoolSchedulerQueueStrategy' => 'string',
            'osModelartsPoolSubpoolsCount' => 'string',
            'osModelartsTenantDomainName' => 'string',
            'osModelartsPoolScopeExternalDependencyTrain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    * osModelartsPromotionInfo  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsFlavorResourceIds  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTmsTags  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSchedulerQueueStrategy  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSubpoolsCount  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainName  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolScopeExternalDependencyTrain  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsDescription' => null,
        'osModelartsBillingMode' => null,
        'osModelartsPeriodNum' => null,
        'osModelartsPeriodType' => null,
        'osModelartsAutoRenew' => null,
        'osModelartsPromotionInfo' => null,
        'osModelartsServiceConsoleUrl' => null,
        'osModelartsOrderId' => null,
        'osModelartsFlavorResourceIds' => null,
        'osModelartsTmsTags' => null,
        'osModelartsPoolSchedulerQueueStrategy' => null,
        'osModelartsPoolSubpoolsCount' => null,
        'osModelartsTenantDomainName' => null,
        'osModelartsPoolScopeExternalDependencyTrain' => null
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
    * osModelartsPeriodNum  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    * osModelartsPromotionInfo  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsFlavorResourceIds  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTmsTags  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSchedulerQueueStrategy  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSubpoolsCount  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainName  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolScopeExternalDependencyTrain  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsDescription' => 'os.modelarts/description',
            'osModelartsBillingMode' => 'os.modelarts/billing.mode',
            'osModelartsPeriodNum' => 'os.modelarts/period.num',
            'osModelartsPeriodType' => 'os.modelarts/period.type',
            'osModelartsAutoRenew' => 'os.modelarts/auto.renew',
            'osModelartsPromotionInfo' => 'os.modelarts/promotion.info',
            'osModelartsServiceConsoleUrl' => 'os.modelarts/service.console.url',
            'osModelartsOrderId' => 'os.modelarts/order.id',
            'osModelartsFlavorResourceIds' => 'os.modelarts/flavor.resource.ids',
            'osModelartsTmsTags' => 'os.modelarts/tms.tags',
            'osModelartsPoolSchedulerQueueStrategy' => 'os.modelarts.pool/scheduler.queue.strategy',
            'osModelartsPoolSubpoolsCount' => 'os.modelarts.pool/subpools.count',
            'osModelartsTenantDomainName' => 'os.modelarts/tenant.domain.name',
            'osModelartsPoolScopeExternalDependencyTrain' => 'os.modelarts.pool/scope.external.dependency.train'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    * osModelartsPromotionInfo  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsFlavorResourceIds  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTmsTags  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSchedulerQueueStrategy  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSubpoolsCount  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainName  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolScopeExternalDependencyTrain  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsDescription' => 'setOsModelartsDescription',
            'osModelartsBillingMode' => 'setOsModelartsBillingMode',
            'osModelartsPeriodNum' => 'setOsModelartsPeriodNum',
            'osModelartsPeriodType' => 'setOsModelartsPeriodType',
            'osModelartsAutoRenew' => 'setOsModelartsAutoRenew',
            'osModelartsPromotionInfo' => 'setOsModelartsPromotionInfo',
            'osModelartsServiceConsoleUrl' => 'setOsModelartsServiceConsoleUrl',
            'osModelartsOrderId' => 'setOsModelartsOrderId',
            'osModelartsFlavorResourceIds' => 'setOsModelartsFlavorResourceIds',
            'osModelartsTmsTags' => 'setOsModelartsTmsTags',
            'osModelartsPoolSchedulerQueueStrategy' => 'setOsModelartsPoolSchedulerQueueStrategy',
            'osModelartsPoolSubpoolsCount' => 'setOsModelartsPoolSubpoolsCount',
            'osModelartsTenantDomainName' => 'setOsModelartsTenantDomainName',
            'osModelartsPoolScopeExternalDependencyTrain' => 'setOsModelartsPoolScopeExternalDependencyTrain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsDescription  **参数解释**：资源池的描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsBillingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：按需计费 - 1：包周期计费 **默认取值**：不涉及。
    * osModelartsPeriodNum  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPeriodType  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
    * osModelartsAutoRenew  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    * osModelartsPromotionInfo  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsServiceConsoleUrl  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsFlavorResourceIds  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTmsTags  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSchedulerQueueStrategy  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolSubpoolsCount  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainName  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolScopeExternalDependencyTrain  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsDescription' => 'getOsModelartsDescription',
            'osModelartsBillingMode' => 'getOsModelartsBillingMode',
            'osModelartsPeriodNum' => 'getOsModelartsPeriodNum',
            'osModelartsPeriodType' => 'getOsModelartsPeriodType',
            'osModelartsAutoRenew' => 'getOsModelartsAutoRenew',
            'osModelartsPromotionInfo' => 'getOsModelartsPromotionInfo',
            'osModelartsServiceConsoleUrl' => 'getOsModelartsServiceConsoleUrl',
            'osModelartsOrderId' => 'getOsModelartsOrderId',
            'osModelartsFlavorResourceIds' => 'getOsModelartsFlavorResourceIds',
            'osModelartsTmsTags' => 'getOsModelartsTmsTags',
            'osModelartsPoolSchedulerQueueStrategy' => 'getOsModelartsPoolSchedulerQueueStrategy',
            'osModelartsPoolSubpoolsCount' => 'getOsModelartsPoolSubpoolsCount',
            'osModelartsTenantDomainName' => 'getOsModelartsTenantDomainName',
            'osModelartsPoolScopeExternalDependencyTrain' => 'getOsModelartsPoolScopeExternalDependencyTrain'
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
        $this->container['osModelartsPromotionInfo'] = isset($data['osModelartsPromotionInfo']) ? $data['osModelartsPromotionInfo'] : null;
        $this->container['osModelartsServiceConsoleUrl'] = isset($data['osModelartsServiceConsoleUrl']) ? $data['osModelartsServiceConsoleUrl'] : null;
        $this->container['osModelartsOrderId'] = isset($data['osModelartsOrderId']) ? $data['osModelartsOrderId'] : null;
        $this->container['osModelartsFlavorResourceIds'] = isset($data['osModelartsFlavorResourceIds']) ? $data['osModelartsFlavorResourceIds'] : null;
        $this->container['osModelartsTmsTags'] = isset($data['osModelartsTmsTags']) ? $data['osModelartsTmsTags'] : null;
        $this->container['osModelartsPoolSchedulerQueueStrategy'] = isset($data['osModelartsPoolSchedulerQueueStrategy']) ? $data['osModelartsPoolSchedulerQueueStrategy'] : null;
        $this->container['osModelartsPoolSubpoolsCount'] = isset($data['osModelartsPoolSubpoolsCount']) ? $data['osModelartsPoolSubpoolsCount'] : null;
        $this->container['osModelartsTenantDomainName'] = isset($data['osModelartsTenantDomainName']) ? $data['osModelartsTenantDomainName'] : null;
        $this->container['osModelartsPoolScopeExternalDependencyTrain'] = isset($data['osModelartsPoolScopeExternalDependencyTrain']) ? $data['osModelartsPoolScopeExternalDependencyTrain'] : null;
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
    *  **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $osModelartsPeriodNum **参数解释**：包周期资源池的订购周期。 **约束限制**：和os.modelarts/period.type字段配合使用。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
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
    * @param string|null $osModelartsPeriodType **参数解释**：包周期资源池的订购类型。 **约束限制**：和os.modelarts/period.num字段配合使用。 **取值范围**：可选值如下： - 2：包月。 - 3：包年。 **默认取值**：不涉及。
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
    *  **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
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
    * @param string|null $osModelartsAutoRenew **参数解释**：包周期资源池的自动续费类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 0：不自动续费。 - 1：自动续费。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOsModelartsAutoRenew($osModelartsAutoRenew)
    {
        $this->container['osModelartsAutoRenew'] = $osModelartsAutoRenew;
        return $this;
    }

    /**
    * Gets osModelartsPromotionInfo
    *  **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $osModelartsPromotionInfo **参数解释**：包周期资源池购买时选择的折扣信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $osModelartsServiceConsoleUrl **参数解释**：购买包周期资源在订单支付完成后跳转地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $osModelartsOrderId **参数解释**：包周期资源池购买时传递的订单ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsOrderId($osModelartsOrderId)
    {
        $this->container['osModelartsOrderId'] = $osModelartsOrderId;
        return $this;
    }

    /**
    * Gets osModelartsFlavorResourceIds
    *  **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsFlavorResourceIds()
    {
        return $this->container['osModelartsFlavorResourceIds'];
    }

    /**
    * Sets osModelartsFlavorResourceIds
    *
    * @param string|null $osModelartsFlavorResourceIds **参数解释**：包周期资源池中资源规格对应的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsFlavorResourceIds($osModelartsFlavorResourceIds)
    {
        $this->container['osModelartsFlavorResourceIds'] = $osModelartsFlavorResourceIds;
        return $this;
    }

    /**
    * Gets osModelartsTmsTags
    *  **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTmsTags()
    {
        return $this->container['osModelartsTmsTags'];
    }

    /**
    * Sets osModelartsTmsTags
    *
    * @param string|null $osModelartsTmsTags **参数解释**：资源池上的资源标签。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTmsTags($osModelartsTmsTags)
    {
        $this->container['osModelartsTmsTags'] = $osModelartsTmsTags;
        return $this;
    }

    /**
    * Gets osModelartsPoolSchedulerQueueStrategy
    *  **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPoolSchedulerQueueStrategy()
    {
        return $this->container['osModelartsPoolSchedulerQueueStrategy'];
    }

    /**
    * Sets osModelartsPoolSchedulerQueueStrategy
    *
    * @param string|null $osModelartsPoolSchedulerQueueStrategy **参数解释**：资源池调度队列的策略，用于定义任务调度的规则。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPoolSchedulerQueueStrategy($osModelartsPoolSchedulerQueueStrategy)
    {
        $this->container['osModelartsPoolSchedulerQueueStrategy'] = $osModelartsPoolSchedulerQueueStrategy;
        return $this;
    }

    /**
    * Gets osModelartsPoolSubpoolsCount
    *  **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPoolSubpoolsCount()
    {
        return $this->container['osModelartsPoolSubpoolsCount'];
    }

    /**
    * Sets osModelartsPoolSubpoolsCount
    *
    * @param string|null $osModelartsPoolSubpoolsCount **参数解释**：资源池包含的逻辑子池的数量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPoolSubpoolsCount($osModelartsPoolSubpoolsCount)
    {
        $this->container['osModelartsPoolSubpoolsCount'] = $osModelartsPoolSubpoolsCount;
        return $this;
    }

    /**
    * Gets osModelartsTenantDomainName
    *  **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTenantDomainName()
    {
        return $this->container['osModelartsTenantDomainName'];
    }

    /**
    * Sets osModelartsTenantDomainName
    *
    * @param string|null $osModelartsTenantDomainName **参数解释**：资源池的租户账号 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTenantDomainName($osModelartsTenantDomainName)
    {
        $this->container['osModelartsTenantDomainName'] = $osModelartsTenantDomainName;
        return $this;
    }

    /**
    * Gets osModelartsPoolScopeExternalDependencyTrain
    *  **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPoolScopeExternalDependencyTrain()
    {
        return $this->container['osModelartsPoolScopeExternalDependencyTrain'];
    }

    /**
    * Sets osModelartsPoolScopeExternalDependencyTrain
    *
    * @param string|null $osModelartsPoolScopeExternalDependencyTrain **参数解释**：训练外部依赖标识 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPoolScopeExternalDependencyTrain($osModelartsPoolScopeExternalDependencyTrain)
    {
        $this->container['osModelartsPoolScopeExternalDependencyTrain'] = $osModelartsPoolScopeExternalDependencyTrain;
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

