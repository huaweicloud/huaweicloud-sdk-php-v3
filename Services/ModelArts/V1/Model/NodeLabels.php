<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeLabels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeLabels';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsNodeCluster  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    * osModelartsNodeElasticQuota  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    * osModelartsNodeNodepool  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    * osModelartsNodeBatchUid  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    * osModelartsNodeBatchName  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    * osModelartsNodeBatchType  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    * osModelartsNodeBatchCount  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    * osModelartsResourceId  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    * osModelartsBillingStatus  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    * osModelartsNodeVolcanoSchedulerCabinetExclusive  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    * cceKubectlKubernetesIoCabinet  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    * osModelartsNodeUnderlyingInstanceId  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    * osModelartsNodeHaRedundantEnabled  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    * osModelartsNodeNodepoolname  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsNodeCluster' => 'string',
            'osModelartsNodeElasticQuota' => 'string',
            'osModelartsNodeNodepool' => 'string',
            'osModelartsNodeBatchUid' => 'string',
            'osModelartsNodeBatchName' => 'string',
            'osModelartsNodeBatchType' => 'string',
            'osModelartsNodeBatchCount' => 'string',
            'osModelartsResourceId' => 'string',
            'osModelartsTenantDomainId' => 'string',
            'osModelartsTenantProjectId' => 'string',
            'osModelartsBillingStatus' => 'string',
            'osModelartsNodeVolcanoSchedulerCabinetExclusive' => 'string',
            'cceKubectlKubernetesIoCabinet' => 'string',
            'osModelartsNodeUnderlyingInstanceId' => 'string',
            'osModelartsNodeHaRedundantEnabled' => 'string',
            'osModelartsNodeNodepoolname' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsNodeCluster  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    * osModelartsNodeElasticQuota  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    * osModelartsNodeNodepool  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    * osModelartsNodeBatchUid  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    * osModelartsNodeBatchName  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    * osModelartsNodeBatchType  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    * osModelartsNodeBatchCount  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    * osModelartsResourceId  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    * osModelartsBillingStatus  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    * osModelartsNodeVolcanoSchedulerCabinetExclusive  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    * cceKubectlKubernetesIoCabinet  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    * osModelartsNodeUnderlyingInstanceId  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    * osModelartsNodeHaRedundantEnabled  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    * osModelartsNodeNodepoolname  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsNodeCluster' => null,
        'osModelartsNodeElasticQuota' => null,
        'osModelartsNodeNodepool' => null,
        'osModelartsNodeBatchUid' => null,
        'osModelartsNodeBatchName' => null,
        'osModelartsNodeBatchType' => null,
        'osModelartsNodeBatchCount' => null,
        'osModelartsResourceId' => null,
        'osModelartsTenantDomainId' => null,
        'osModelartsTenantProjectId' => null,
        'osModelartsBillingStatus' => null,
        'osModelartsNodeVolcanoSchedulerCabinetExclusive' => null,
        'cceKubectlKubernetesIoCabinet' => null,
        'osModelartsNodeUnderlyingInstanceId' => null,
        'osModelartsNodeHaRedundantEnabled' => null,
        'osModelartsNodeNodepoolname' => null
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
    * osModelartsNodeCluster  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    * osModelartsNodeElasticQuota  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    * osModelartsNodeNodepool  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    * osModelartsNodeBatchUid  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    * osModelartsNodeBatchName  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    * osModelartsNodeBatchType  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    * osModelartsNodeBatchCount  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    * osModelartsResourceId  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    * osModelartsBillingStatus  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    * osModelartsNodeVolcanoSchedulerCabinetExclusive  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    * cceKubectlKubernetesIoCabinet  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    * osModelartsNodeUnderlyingInstanceId  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    * osModelartsNodeHaRedundantEnabled  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    * osModelartsNodeNodepoolname  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsNodeCluster' => 'os.modelarts.node/cluster',
            'osModelartsNodeElasticQuota' => 'os.modelarts.node/elastic.quota',
            'osModelartsNodeNodepool' => 'os.modelarts.node/nodepool',
            'osModelartsNodeBatchUid' => 'os.modelarts.node/batch.uid',
            'osModelartsNodeBatchName' => 'os.modelarts.node/batch.name',
            'osModelartsNodeBatchType' => 'os.modelarts.node/batch.type',
            'osModelartsNodeBatchCount' => 'os.modelarts.node/batch.count',
            'osModelartsResourceId' => 'os.modelarts/resource.id',
            'osModelartsTenantDomainId' => 'os.modelarts/tenant.domain.id',
            'osModelartsTenantProjectId' => 'os.modelarts/tenant.project.id',
            'osModelartsBillingStatus' => 'os.modelarts/billing.status',
            'osModelartsNodeVolcanoSchedulerCabinetExclusive' => 'os.modelarts.node/volcano.scheduler.cabinet-exclusive',
            'cceKubectlKubernetesIoCabinet' => 'cce.kubectl.kubernetes.io/cabinet',
            'osModelartsNodeUnderlyingInstanceId' => 'os.modelarts.node/underlying.instance.id',
            'osModelartsNodeHaRedundantEnabled' => 'os.modelarts.node/ha.redundant.enabled',
            'osModelartsNodeNodepoolname' => 'os.modelarts.node/nodepoolname'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsNodeCluster  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    * osModelartsNodeElasticQuota  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    * osModelartsNodeNodepool  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    * osModelartsNodeBatchUid  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    * osModelartsNodeBatchName  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    * osModelartsNodeBatchType  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    * osModelartsNodeBatchCount  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    * osModelartsResourceId  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    * osModelartsBillingStatus  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    * osModelartsNodeVolcanoSchedulerCabinetExclusive  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    * cceKubectlKubernetesIoCabinet  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    * osModelartsNodeUnderlyingInstanceId  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    * osModelartsNodeHaRedundantEnabled  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    * osModelartsNodeNodepoolname  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsNodeCluster' => 'setOsModelartsNodeCluster',
            'osModelartsNodeElasticQuota' => 'setOsModelartsNodeElasticQuota',
            'osModelartsNodeNodepool' => 'setOsModelartsNodeNodepool',
            'osModelartsNodeBatchUid' => 'setOsModelartsNodeBatchUid',
            'osModelartsNodeBatchName' => 'setOsModelartsNodeBatchName',
            'osModelartsNodeBatchType' => 'setOsModelartsNodeBatchType',
            'osModelartsNodeBatchCount' => 'setOsModelartsNodeBatchCount',
            'osModelartsResourceId' => 'setOsModelartsResourceId',
            'osModelartsTenantDomainId' => 'setOsModelartsTenantDomainId',
            'osModelartsTenantProjectId' => 'setOsModelartsTenantProjectId',
            'osModelartsBillingStatus' => 'setOsModelartsBillingStatus',
            'osModelartsNodeVolcanoSchedulerCabinetExclusive' => 'setOsModelartsNodeVolcanoSchedulerCabinetExclusive',
            'cceKubectlKubernetesIoCabinet' => 'setCceKubectlKubernetesIoCabinet',
            'osModelartsNodeUnderlyingInstanceId' => 'setOsModelartsNodeUnderlyingInstanceId',
            'osModelartsNodeHaRedundantEnabled' => 'setOsModelartsNodeHaRedundantEnabled',
            'osModelartsNodeNodepoolname' => 'setOsModelartsNodeNodepoolname'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsNodeCluster  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    * osModelartsNodeElasticQuota  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    * osModelartsNodeNodepool  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    * osModelartsNodeBatchUid  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    * osModelartsNodeBatchName  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    * osModelartsNodeBatchType  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    * osModelartsNodeBatchCount  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    * osModelartsResourceId  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    * osModelartsBillingStatus  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    * osModelartsNodeVolcanoSchedulerCabinetExclusive  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    * cceKubectlKubernetesIoCabinet  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    * osModelartsNodeUnderlyingInstanceId  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    * osModelartsNodeHaRedundantEnabled  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    * osModelartsNodeNodepoolname  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsNodeCluster' => 'getOsModelartsNodeCluster',
            'osModelartsNodeElasticQuota' => 'getOsModelartsNodeElasticQuota',
            'osModelartsNodeNodepool' => 'getOsModelartsNodeNodepool',
            'osModelartsNodeBatchUid' => 'getOsModelartsNodeBatchUid',
            'osModelartsNodeBatchName' => 'getOsModelartsNodeBatchName',
            'osModelartsNodeBatchType' => 'getOsModelartsNodeBatchType',
            'osModelartsNodeBatchCount' => 'getOsModelartsNodeBatchCount',
            'osModelartsResourceId' => 'getOsModelartsResourceId',
            'osModelartsTenantDomainId' => 'getOsModelartsTenantDomainId',
            'osModelartsTenantProjectId' => 'getOsModelartsTenantProjectId',
            'osModelartsBillingStatus' => 'getOsModelartsBillingStatus',
            'osModelartsNodeVolcanoSchedulerCabinetExclusive' => 'getOsModelartsNodeVolcanoSchedulerCabinetExclusive',
            'cceKubectlKubernetesIoCabinet' => 'getCceKubectlKubernetesIoCabinet',
            'osModelartsNodeUnderlyingInstanceId' => 'getOsModelartsNodeUnderlyingInstanceId',
            'osModelartsNodeHaRedundantEnabled' => 'getOsModelartsNodeHaRedundantEnabled',
            'osModelartsNodeNodepoolname' => 'getOsModelartsNodeNodepoolname'
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
        $this->container['osModelartsNodeCluster'] = isset($data['osModelartsNodeCluster']) ? $data['osModelartsNodeCluster'] : null;
        $this->container['osModelartsNodeElasticQuota'] = isset($data['osModelartsNodeElasticQuota']) ? $data['osModelartsNodeElasticQuota'] : null;
        $this->container['osModelartsNodeNodepool'] = isset($data['osModelartsNodeNodepool']) ? $data['osModelartsNodeNodepool'] : null;
        $this->container['osModelartsNodeBatchUid'] = isset($data['osModelartsNodeBatchUid']) ? $data['osModelartsNodeBatchUid'] : null;
        $this->container['osModelartsNodeBatchName'] = isset($data['osModelartsNodeBatchName']) ? $data['osModelartsNodeBatchName'] : null;
        $this->container['osModelartsNodeBatchType'] = isset($data['osModelartsNodeBatchType']) ? $data['osModelartsNodeBatchType'] : null;
        $this->container['osModelartsNodeBatchCount'] = isset($data['osModelartsNodeBatchCount']) ? $data['osModelartsNodeBatchCount'] : null;
        $this->container['osModelartsResourceId'] = isset($data['osModelartsResourceId']) ? $data['osModelartsResourceId'] : null;
        $this->container['osModelartsTenantDomainId'] = isset($data['osModelartsTenantDomainId']) ? $data['osModelartsTenantDomainId'] : null;
        $this->container['osModelartsTenantProjectId'] = isset($data['osModelartsTenantProjectId']) ? $data['osModelartsTenantProjectId'] : null;
        $this->container['osModelartsBillingStatus'] = isset($data['osModelartsBillingStatus']) ? $data['osModelartsBillingStatus'] : null;
        $this->container['osModelartsNodeVolcanoSchedulerCabinetExclusive'] = isset($data['osModelartsNodeVolcanoSchedulerCabinetExclusive']) ? $data['osModelartsNodeVolcanoSchedulerCabinetExclusive'] : null;
        $this->container['cceKubectlKubernetesIoCabinet'] = isset($data['cceKubectlKubernetesIoCabinet']) ? $data['cceKubectlKubernetesIoCabinet'] : null;
        $this->container['osModelartsNodeUnderlyingInstanceId'] = isset($data['osModelartsNodeUnderlyingInstanceId']) ? $data['osModelartsNodeUnderlyingInstanceId'] : null;
        $this->container['osModelartsNodeHaRedundantEnabled'] = isset($data['osModelartsNodeHaRedundantEnabled']) ? $data['osModelartsNodeHaRedundantEnabled'] : null;
        $this->container['osModelartsNodeNodepoolname'] = isset($data['osModelartsNodeNodepoolname']) ? $data['osModelartsNodeNodepoolname'] : null;
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
    * Gets osModelartsNodeCluster
    *  **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeCluster()
    {
        return $this->container['osModelartsNodeCluster'];
    }

    /**
    * Sets osModelartsNodeCluster
    *
    * @param string|null $osModelartsNodeCluster **参数解释**：节点所在的集群名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeCluster($osModelartsNodeCluster)
    {
        $this->container['osModelartsNodeCluster'] = $osModelartsNodeCluster;
        return $this;
    }

    /**
    * Gets osModelartsNodeElasticQuota
    *  **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeElasticQuota()
    {
        return $this->container['osModelartsNodeElasticQuota'];
    }

    /**
    * Sets osModelartsNodeElasticQuota
    *
    * @param string|null $osModelartsNodeElasticQuota **参数解释**：节点绑定的逻辑池。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeElasticQuota($osModelartsNodeElasticQuota)
    {
        $this->container['osModelartsNodeElasticQuota'] = $osModelartsNodeElasticQuota;
        return $this;
    }

    /**
    * Gets osModelartsNodeNodepool
    *  **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeNodepool()
    {
        return $this->container['osModelartsNodeNodepool'];
    }

    /**
    * Sets osModelartsNodeNodepool
    *
    * @param string|null $osModelartsNodeNodepool **参数解释**：节点所在的节点池id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeNodepool($osModelartsNodeNodepool)
    {
        $this->container['osModelartsNodeNodepool'] = $osModelartsNodeNodepool;
        return $this;
    }

    /**
    * Gets osModelartsNodeBatchUid
    *  **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeBatchUid()
    {
        return $this->container['osModelartsNodeBatchUid'];
    }

    /**
    * Sets osModelartsNodeBatchUid
    *
    * @param string|null $osModelartsNodeBatchUid **参数解释**：批量创建批次标识。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeBatchUid($osModelartsNodeBatchUid)
    {
        $this->container['osModelartsNodeBatchUid'] = $osModelartsNodeBatchUid;
        return $this;
    }

    /**
    * Gets osModelartsNodeBatchName
    *  **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeBatchName()
    {
        return $this->container['osModelartsNodeBatchName'];
    }

    /**
    * Sets osModelartsNodeBatchName
    *
    * @param string|null $osModelartsNodeBatchName **参数解释**：批量创建批次名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeBatchName($osModelartsNodeBatchName)
    {
        $this->container['osModelartsNodeBatchName'] = $osModelartsNodeBatchName;
        return $this;
    }

    /**
    * Gets osModelartsNodeBatchType
    *  **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    *
    * @return string|null
    */
    public function getOsModelartsNodeBatchType()
    {
        return $this->container['osModelartsNodeBatchType'];
    }

    /**
    * Sets osModelartsNodeBatchType
    *
    * @param string|null $osModelartsNodeBatchType **参数解释**：批量创建批次类型。 **取值范围**：可选值如下：   - hyperinstance：超节点。
    *
    * @return $this
    */
    public function setOsModelartsNodeBatchType($osModelartsNodeBatchType)
    {
        $this->container['osModelartsNodeBatchType'] = $osModelartsNodeBatchType;
        return $this;
    }

    /**
    * Gets osModelartsNodeBatchCount
    *  **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeBatchCount()
    {
        return $this->container['osModelartsNodeBatchCount'];
    }

    /**
    * Sets osModelartsNodeBatchCount
    *
    * @param string|null $osModelartsNodeBatchCount **参数解释**：批量创建的节点个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeBatchCount($osModelartsNodeBatchCount)
    {
        $this->container['osModelartsNodeBatchCount'] = $osModelartsNodeBatchCount;
        return $this;
    }

    /**
    * Gets osModelartsResourceId
    *  **参数解释**：节点的资源id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsResourceId()
    {
        return $this->container['osModelartsResourceId'];
    }

    /**
    * Sets osModelartsResourceId
    *
    * @param string|null $osModelartsResourceId **参数解释**：节点的资源id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsResourceId($osModelartsResourceId)
    {
        $this->container['osModelartsResourceId'] = $osModelartsResourceId;
        return $this;
    }

    /**
    * Gets osModelartsTenantDomainId
    *  **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTenantDomainId()
    {
        return $this->container['osModelartsTenantDomainId'];
    }

    /**
    * Sets osModelartsTenantDomainId
    *
    * @param string|null $osModelartsTenantDomainId **参数解释**：节点的租户id，记录节点创建在哪个租户账号下。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTenantDomainId($osModelartsTenantDomainId)
    {
        $this->container['osModelartsTenantDomainId'] = $osModelartsTenantDomainId;
        return $this;
    }

    /**
    * Gets osModelartsTenantProjectId
    *  **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTenantProjectId()
    {
        return $this->container['osModelartsTenantProjectId'];
    }

    /**
    * Sets osModelartsTenantProjectId
    *
    * @param string|null $osModelartsTenantProjectId **参数解释**：节点的项目id，记录节点创建在租户账号下哪个项目中。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTenantProjectId($osModelartsTenantProjectId)
    {
        $this->container['osModelartsTenantProjectId'] = $osModelartsTenantProjectId;
        return $this;
    }

    /**
    * Gets osModelartsBillingStatus
    *  **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    *
    * @return string|null
    */
    public function getOsModelartsBillingStatus()
    {
        return $this->container['osModelartsBillingStatus'];
    }

    /**
    * Sets osModelartsBillingStatus
    *
    * @param string|null $osModelartsBillingStatus **参数解释**：节点计费状态。 **取值范围**：可选值如下： - 0：正常状态。 - 1：冻结状态。 - 2：删除状态或者终止状态。
    *
    * @return $this
    */
    public function setOsModelartsBillingStatus($osModelartsBillingStatus)
    {
        $this->container['osModelartsBillingStatus'] = $osModelartsBillingStatus;
        return $this;
    }

    /**
    * Gets osModelartsNodeVolcanoSchedulerCabinetExclusive
    *  **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeVolcanoSchedulerCabinetExclusive()
    {
        return $this->container['osModelartsNodeVolcanoSchedulerCabinetExclusive'];
    }

    /**
    * Sets osModelartsNodeVolcanoSchedulerCabinetExclusive
    *
    * @param string|null $osModelartsNodeVolcanoSchedulerCabinetExclusive **参数解释**：标识该节点是否被整柜作业独占。当被某个整柜作业独占时，该标签存在，标签的值为独占的训练作业ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeVolcanoSchedulerCabinetExclusive($osModelartsNodeVolcanoSchedulerCabinetExclusive)
    {
        $this->container['osModelartsNodeVolcanoSchedulerCabinetExclusive'] = $osModelartsNodeVolcanoSchedulerCabinetExclusive;
        return $this;
    }

    /**
    * Gets cceKubectlKubernetesIoCabinet
    *  **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCceKubectlKubernetesIoCabinet()
    {
        return $this->container['cceKubectlKubernetesIoCabinet'];
    }

    /**
    * Sets cceKubectlKubernetesIoCabinet
    *
    * @param string|null $cceKubectlKubernetesIoCabinet **参数解释**：节点所在tor交换机ip。多个tor交换机ip之间以中划线-分隔。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCceKubectlKubernetesIoCabinet($cceKubectlKubernetesIoCabinet)
    {
        $this->container['cceKubectlKubernetesIoCabinet'] = $cceKubectlKubernetesIoCabinet;
        return $this;
    }

    /**
    * Gets osModelartsNodeUnderlyingInstanceId
    *  **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeUnderlyingInstanceId()
    {
        return $this->container['osModelartsNodeUnderlyingInstanceId'];
    }

    /**
    * Sets osModelartsNodeUnderlyingInstanceId
    *
    * @param string|null $osModelartsNodeUnderlyingInstanceId **参数解释**：节点底层资源的实例ID，如超节点的ECS实例ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeUnderlyingInstanceId($osModelartsNodeUnderlyingInstanceId)
    {
        $this->container['osModelartsNodeUnderlyingInstanceId'] = $osModelartsNodeUnderlyingInstanceId;
        return $this;
    }

    /**
    * Gets osModelartsNodeHaRedundantEnabled
    *  **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    *
    * @return string|null
    */
    public function getOsModelartsNodeHaRedundantEnabled()
    {
        return $this->container['osModelartsNodeHaRedundantEnabled'];
    }

    /**
    * Sets osModelartsNodeHaRedundantEnabled
    *
    * @param string|null $osModelartsNodeHaRedundantEnabled **参数解释**：节点是否启用高可用冗余。 **取值范围**：   - true：开启   - false：未开启
    *
    * @return $this
    */
    public function setOsModelartsNodeHaRedundantEnabled($osModelartsNodeHaRedundantEnabled)
    {
        $this->container['osModelartsNodeHaRedundantEnabled'] = $osModelartsNodeHaRedundantEnabled;
        return $this;
    }

    /**
    * Gets osModelartsNodeNodepoolname
    *  **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodeNodepoolname()
    {
        return $this->container['osModelartsNodeNodepoolname'];
    }

    /**
    * Sets osModelartsNodeNodepoolname
    *
    * @param string|null $osModelartsNodeNodepoolname **参数解释**：节点所在的节点池名称,最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能 以-，-default结尾。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodeNodepoolname($osModelartsNodeNodepoolname)
    {
        $this->container['osModelartsNodeNodepoolname'] = $osModelartsNodeNodepoolname;
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

