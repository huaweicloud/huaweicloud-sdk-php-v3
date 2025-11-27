<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlanItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlanItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * index  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * action  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    * providerName  该项目所属的provider名称。
    * mode  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    * imported  当前资源的变更是否是导入的。
    * resourceId  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    * attributes  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceName' => 'string',
            'index' => 'string',
            'action' => 'string',
            'actionReason' => 'string',
            'providerName' => 'string',
            'mode' => 'string',
            'drifted' => 'bool',
            'imported' => 'bool',
            'resourceId' => 'string',
            'attributes' => '\HuaweiCloud\SDK\Rfs\V1\Model\ExecutionPlanDiffAttribute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * index  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * action  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    * providerName  该项目所属的provider名称。
    * mode  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    * imported  当前资源的变更是否是导入的。
    * resourceId  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    * attributes  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceName' => null,
        'index' => null,
        'action' => null,
        'actionReason' => null,
        'providerName' => null,
        'mode' => null,
        'drifted' => null,
        'imported' => null,
        'resourceId' => null,
        'attributes' => null
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
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * index  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * action  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    * providerName  该项目所属的provider名称。
    * mode  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    * imported  当前资源的变更是否是导入的。
    * resourceId  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    * attributes  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'index' => 'index',
            'action' => 'action',
            'actionReason' => 'action_reason',
            'providerName' => 'provider_name',
            'mode' => 'mode',
            'drifted' => 'drifted',
            'imported' => 'imported',
            'resourceId' => 'resource_id',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * index  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * action  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    * providerName  该项目所属的provider名称。
    * mode  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    * imported  当前资源的变更是否是导入的。
    * resourceId  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    * attributes  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'index' => 'setIndex',
            'action' => 'setAction',
            'actionReason' => 'setActionReason',
            'providerName' => 'setProviderName',
            'mode' => 'setMode',
            'drifted' => 'setDrifted',
            'imported' => 'setImported',
            'resourceId' => 'setResourceId',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * index  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * action  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    * providerName  该项目所属的provider名称。
    * mode  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    * imported  当前资源的变更是否是导入的。
    * resourceId  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    * attributes  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'index' => 'getIndex',
            'action' => 'getAction',
            'actionReason' => 'getActionReason',
            'providerName' => 'getProviderName',
            'mode' => 'getMode',
            'drifted' => 'getDrifted',
            'imported' => 'getImported',
            'resourceId' => 'getResourceId',
            'attributes' => 'getAttributes'
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
    const ACTION_ADD = 'ADD';
    const ACTION_ADD_THEN_DELETE = 'ADD_THEN_DELETE';
    const ACTION_DELETE = 'DELETE';
    const ACTION_DELETE_THEN_ADD = 'DELETE_THEN_ADD';
    const ACTION_UPDATE = 'UPDATE';
    const ACTION_NO_OPERATION = 'NO_OPERATION';
    const MODE_DATA = 'DATA';
    const MODE_RESOURCE = 'RESOURCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_ADD_THEN_DELETE,
            self::ACTION_DELETE,
            self::ACTION_DELETE_THEN_ADD,
            self::ACTION_UPDATE,
            self::ACTION_NO_OPERATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_DATA,
            self::MODE_RESOURCE,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionReason'] = isset($data['actionReason']) ? $data['actionReason'] : null;
        $this->container['providerName'] = isset($data['providerName']) ? $data['providerName'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['drifted'] = isset($data['drifted']) ? $data['drifted'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets resourceType
    *  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets index
    *  资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index 资源的索引，如果用户在模板中使用了count或for_each则会返回index。如果index出现，则resource_name + index可以作为该资源的一种标识  如果用户在模板中使用count，则index为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets action
    *  资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 资源变更的类型 * `ADD` - 新增资源 * `ADD_THEN_DELETE` - 由不可更新的资源返回，先创建新资源，再删除旧资源 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 由不可更新的资源返回，先删除旧资源，再创建新资源 * `UPDATE` - 更新资源  * `NO_OPERATION` - 仅变更资源的依赖关系，但是对资源本身并无修改的操作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets actionReason
    *  触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    *
    * @return string|null
    */
    public function getActionReason()
    {
        return $this->container['actionReason'];
    }

    /**
    * Sets actionReason
    *
    * @param string|null $actionReason 触发该项目变更的原因，例如用户更新模板；远端删除资源等等
    *
    * @return $this
    */
    public function setActionReason($actionReason)
    {
        $this->container['actionReason'] = $actionReason;
        return $this;
    }

    /**
    * Gets providerName
    *  该项目所属的provider名称。
    *
    * @return string|null
    */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
    * Sets providerName
    *
    * @param string|null $providerName 该项目所属的provider名称。
    *
    * @return $this
    */
    public function setProviderName($providerName)
    {
        $this->container['providerName'] = $providerName;
        return $this;
    }

    /**
    * Gets mode
    *  资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 资源模式 * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets drifted
    *  当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    *
    * @return bool|null
    */
    public function getDrifted()
    {
        return $this->container['drifted'];
    }

    /**
    * Sets drifted
    *
    * @param bool|null $drifted 当前资源的变更是否由偏差导致。  偏差，也叫漂移。指的是资源被资源编排服务创建以后，又经历过非资源编排服务触发的修改，如手动修改、调用SDK修改等，使得资源的配置与本服务所记录的资源的配置不一致。这种不一致便称为偏差。  当资源产生偏差以后： * 如果用户试图创建执行计划，则会提示用户产生偏差 * 如果用户直接部署，则偏差有可能被覆盖，资源编排服务只保证资源和模板最终一致。  资源的偏差有两种类型： * 资源定位属性被修改：如果是定位属性被修改，常见于删除后重建，此时资源已经不属于同一个资源。资源编排服务会认为此资源已经被删除，会尝试创建一个新的资源。 * 资源普通属性被修改：如果是普通属性被修改，则资源编排服务依然可以找到资源，但是下次部署会尝试修复偏差，即将资源保持和模板最终一致。  **注：资源编排服务团队极力推荐，如果资源是通过本服务创建的，请一直使用本服务进行维护和更新以确保资源和模板保持一致。建议非紧急事件以外的情况不要手动调整。**
    *
    * @return $this
    */
    public function setDrifted($drifted)
    {
        $this->container['drifted'] = $drifted;
        return $this;
    }

    /**
    * Gets imported
    *  当前资源的变更是否是导入的。
    *
    * @return bool|null
    */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
    * Sets imported
    *
    * @param bool|null $imported 当前资源的变更是否是导入的。
    *
    * @return $this
    */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源的物理ID，是唯一ID，由为该资源提供服务的provider、云服务或其他服务提供方在资源部署的时候生成
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets attributes
    *  执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @return \HuaweiCloud\SDK\Rfs\V1\Model\ExecutionPlanDiffAttribute[]|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\Rfs\V1\Model\ExecutionPlanDiffAttribute[]|null $attributes 执行计划项目中变更的属性，当无属性变更时为空列表。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

