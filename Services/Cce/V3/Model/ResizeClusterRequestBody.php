<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorResize  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    * skippedTasks  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorResize' => 'string',
            'skippedTasks' => 'string[]',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\ResizeClusterRequestBodyExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorResize  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    * skippedTasks  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorResize' => null,
        'skippedTasks' => null,
        'extendParam' => null
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
    * flavorResize  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    * skippedTasks  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorResize' => 'flavorResize',
            'skippedTasks' => 'skippedTasks',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorResize  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    * skippedTasks  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorResize' => 'setFlavorResize',
            'skippedTasks' => 'setSkippedTasks',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorResize  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    * skippedTasks  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorResize' => 'getFlavorResize',
            'skippedTasks' => 'getSkippedTasks',
            'extendParam' => 'getExtendParam'
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
    const SKIPPED_TASKS_INGRESS_CHECKER = 'IngressChecker';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSkippedTasksAllowableValues()
    {
        return [
            self::SKIPPED_TASKS_INGRESS_CHECKER,
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
        $this->container['flavorResize'] = isset($data['flavorResize']) ? $data['flavorResize'] : null;
        $this->container['skippedTasks'] = isset($data['skippedTasks']) ? $data['skippedTasks'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorResize'] === null) {
            $invalidProperties[] = "'flavorResize' can't be null";
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
    * Gets flavorResize
    *  **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    *
    * @return string
    */
    public function getFlavorResize()
    {
        return $this->container['flavorResize'];
    }

    /**
    * Sets flavorResize
    *
    * @param string $flavorResize **参数解释**： 要变更的目标规格。仅支持变更集群最大节点规模，不支持变更控制节点数，且不支持降低集群规格。例如原集群规格为cce.s2.medium，仅支持变更至cce.s2.large及以上规格，不支持变更至cce.s2.small或cce.s1.medium。 **约束限制**： VPC 网络模型建议集群规模为 1000 节点及以下。集群本身规模受 VPC 路由表配额上限限制，若扩容规格至cce.s2.xlarge，可能出现实际节点规模无法达到目标规模的情况。 **取值范围**： - cce.s1.small: 小规模单控制节点CCE集群（最大50节点） - cce.s1.medium: 中等规模单控制节点CCE集群（最大200节点） - cce.s2.small: 小规模三控制节点CCE集群（最大50节点） - cce.s2.medium: 中等规模三控制节点CCE集群（最大200节点） - cce.s2.large: 大规模三控制节点CCE集群（最大1000节点） - cce.s2.xlarge: 超大规模三控制节点CCE集群（最大2000节点） - [cce.s3.small: 小规模五控制节点CCE集群（最大50节点）](tag:hcs,hcs_sm) - [cce.s3.medium: 中等规模五控制节点CCE集群（最大200节点）](tag:hcs,hcs_sm) - [cce.s3.large: 大规模五控制节点CCE集群（最大1000节点）](tag:hcs,hcs_sm) - [cce.s3.xlarge: 超大规模五控制节点CCE集群（最大2000节点）](tag:hcs,hcs_sm) **默认取值**： 不涉及  >    关于规格参数中的字段说明如下： >    - s1：单控制节点的集群，控制节点数为1。单控制节点故障后，集群将不可用，但已运行工作负载不受影响。 >    - s2：三控制节点的集群，即高可用集群，控制节点数为3。当某个控制节点故障时，集群仍然可用。 >    [- s3：五控制节点的集群，即超高可用集群，控制节点数为5。当某2个控制节点故障时，集群仍然可用。](tag:hcs,hcs_sm) >    [- dec：表示专属云的CCE集群规格。例如cce.dec.s1.small表示小规模单控制节点的专属云CCE集群（最大50节点）。](tag:hws,hws_hk) >    - small：表示集群支持管理的最大节点规模为50节点。 >    - medium：表示集群支持管理的最大节点规模为200节点。 >    - large：表示集群支持管理的最大节点规模为1000节点。 >    - xlarge：表示集群支持管理的最大节点规模为2000节点。
    *
    * @return $this
    */
    public function setFlavorResize($flavorResize)
    {
        $this->container['flavorResize'] = $flavorResize;
        return $this;
    }

    /**
    * Gets skippedTasks
    *  **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    *
    * @return string[]|null
    */
    public function getSkippedTasks()
    {
        return $this->container['skippedTasks'];
    }

    /**
    * Sets skippedTasks
    *
    * @param string[]|null $skippedTasks **参数解释**： 该参数用于控制集群规格变更时跳过部分任务。 **约束限制**： 无 **取值范围**： - IngressChecker: 集群规格变更时跳过Ingress与ELB配置一致性检查  > - 跳过Ingress与ELB配置一致性检查可能导致业务中断，请谨慎操作！ > - 集群不可用或者过载时，必须跳过Ingress与ELB配置一致性检查，否则会导致集群规格变更失败。[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws)[请确保变更集群规格前已按 [ELB Ingress与ELB配置不一致如何处理？](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00493.html) 指南解决一致性问题。](tag:hws_hk)  **默认取值**： 集群不可用时默认包含IngressChecker
    *
    * @return $this
    */
    public function setSkippedTasks($skippedTasks)
    {
        $this->container['skippedTasks'] = $skippedTasks;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ResizeClusterRequestBodyExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ResizeClusterRequestBodyExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

