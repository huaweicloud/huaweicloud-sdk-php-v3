<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * physicalResourceId  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * physicalResourceName  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * logicalResourceName  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * logicalResourceType  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * indexKey  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * resourceStatus  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * resourceAttributes  资源属性列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'physicalResourceId' => 'string',
            'physicalResourceName' => 'string',
            'logicalResourceName' => 'string',
            'logicalResourceType' => 'string',
            'indexKey' => 'string',
            'resourceStatus' => 'string',
            'statusMessage' => 'string',
            'resourceAttributes' => '\HuaweiCloud\SDK\Aos\V1\Model\ResourceAttribute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * physicalResourceId  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * physicalResourceName  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * logicalResourceName  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * logicalResourceType  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * indexKey  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * resourceStatus  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * resourceAttributes  资源属性列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'physicalResourceId' => null,
        'physicalResourceName' => null,
        'logicalResourceName' => null,
        'logicalResourceType' => null,
        'indexKey' => null,
        'resourceStatus' => null,
        'statusMessage' => null,
        'resourceAttributes' => null
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
    * physicalResourceId  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * physicalResourceName  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * logicalResourceName  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * logicalResourceType  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * indexKey  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * resourceStatus  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * resourceAttributes  资源属性列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'physicalResourceId' => 'physical_resource_id',
            'physicalResourceName' => 'physical_resource_name',
            'logicalResourceName' => 'logical_resource_name',
            'logicalResourceType' => 'logical_resource_type',
            'indexKey' => 'index_key',
            'resourceStatus' => 'resource_status',
            'statusMessage' => 'status_message',
            'resourceAttributes' => 'resource_attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * physicalResourceId  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * physicalResourceName  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * logicalResourceName  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * logicalResourceType  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * indexKey  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * resourceStatus  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * resourceAttributes  资源属性列表
    *
    * @var string[]
    */
    protected static $setters = [
            'physicalResourceId' => 'setPhysicalResourceId',
            'physicalResourceName' => 'setPhysicalResourceName',
            'logicalResourceName' => 'setLogicalResourceName',
            'logicalResourceType' => 'setLogicalResourceType',
            'indexKey' => 'setIndexKey',
            'resourceStatus' => 'setResourceStatus',
            'statusMessage' => 'setStatusMessage',
            'resourceAttributes' => 'setResourceAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * physicalResourceId  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * physicalResourceName  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    * logicalResourceName  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * logicalResourceType  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * indexKey  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * resourceStatus  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * resourceAttributes  资源属性列表
    *
    * @var string[]
    */
    protected static $getters = [
            'physicalResourceId' => 'getPhysicalResourceId',
            'physicalResourceName' => 'getPhysicalResourceName',
            'logicalResourceName' => 'getLogicalResourceName',
            'logicalResourceType' => 'getLogicalResourceType',
            'indexKey' => 'getIndexKey',
            'resourceStatus' => 'getResourceStatus',
            'statusMessage' => 'getStatusMessage',
            'resourceAttributes' => 'getResourceAttributes'
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
    const RESOURCE_STATUS_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const RESOURCE_STATUS_CREATION_FAILED = 'CREATION_FAILED';
    const RESOURCE_STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const RESOURCE_STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const RESOURCE_STATUS_DELETION_FAILED = 'DELETION_FAILED';
    const RESOURCE_STATUS_DELETION_COMPLETE = 'DELETION_COMPLETE';
    const RESOURCE_STATUS_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const RESOURCE_STATUS_UPDATE_FAILED = 'UPDATE_FAILED';
    const RESOURCE_STATUS_UPDATE_COMPLETE = 'UPDATE_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceStatusAllowableValues()
    {
        return [
            self::RESOURCE_STATUS_CREATION_IN_PROGRESS,
            self::RESOURCE_STATUS_CREATION_FAILED,
            self::RESOURCE_STATUS_CREATION_COMPLETE,
            self::RESOURCE_STATUS_DELETION_IN_PROGRESS,
            self::RESOURCE_STATUS_DELETION_FAILED,
            self::RESOURCE_STATUS_DELETION_COMPLETE,
            self::RESOURCE_STATUS_UPDATE_IN_PROGRESS,
            self::RESOURCE_STATUS_UPDATE_FAILED,
            self::RESOURCE_STATUS_UPDATE_COMPLETE,
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
        $this->container['physicalResourceId'] = isset($data['physicalResourceId']) ? $data['physicalResourceId'] : null;
        $this->container['physicalResourceName'] = isset($data['physicalResourceName']) ? $data['physicalResourceName'] : null;
        $this->container['logicalResourceName'] = isset($data['logicalResourceName']) ? $data['logicalResourceName'] : null;
        $this->container['logicalResourceType'] = isset($data['logicalResourceType']) ? $data['logicalResourceType'] : null;
        $this->container['indexKey'] = isset($data['indexKey']) ? $data['indexKey'] : null;
        $this->container['resourceStatus'] = isset($data['resourceStatus']) ? $data['resourceStatus'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['resourceAttributes'] = isset($data['resourceAttributes']) ? $data['resourceAttributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResourceStatusAllowableValues();
                if (!is_null($this->container['resourceStatus']) && !in_array($this->container['resourceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceStatus', must be one of '%s'",
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
    * Gets physicalResourceId
    *  资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    *
    * @return string|null
    */
    public function getPhysicalResourceId()
    {
        return $this->container['physicalResourceId'];
    }

    /**
    * Sets physicalResourceId
    *
    * @param string|null $physicalResourceId 资源的物理id，由该资源的provider、云服务或其他服务提供方在资源部署的时候生成  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    *
    * @return $this
    */
    public function setPhysicalResourceId($physicalResourceId)
    {
        $this->container['physicalResourceId'] = $physicalResourceId;
        return $this;
    }

    /**
    * Gets physicalResourceName
    *  资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    *
    * @return string|null
    */
    public function getPhysicalResourceName()
    {
        return $this->container['physicalResourceName'];
    }

    /**
    * Sets physicalResourceName
    *
    * @param string|null $physicalResourceName 资源的物理名称，由该资源的provider、云服务或其他服务提供方在资源部署的时候定义  注：与physical相关的参数可以在模板以外的地方，作为该资源的一种标识
    *
    * @return $this
    */
    public function setPhysicalResourceName($physicalResourceName)
    {
        $this->container['physicalResourceName'] = $physicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceName
    *  资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getLogicalResourceName()
    {
        return $this->container['logicalResourceName'];
    }

    /**
    * Sets logicalResourceName
    *
    * @param string|null $logicalResourceName 资源的逻辑名称，由用户在模板中定义  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return $this
    */
    public function setLogicalResourceName($logicalResourceName)
    {
        $this->container['logicalResourceName'] = $logicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceType
    *  资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getLogicalResourceType()
    {
        return $this->container['logicalResourceType'];
    }

    /**
    * Sets logicalResourceType
    *
    * @param string|null $logicalResourceType 资源的类型  注：与 logical 相关的参数仅仅在模板内部，作为该资源的一种标识  以HCL格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，logical_resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    *
    * @return $this
    */
    public function setLogicalResourceType($logicalResourceType)
    {
        $this->container['logicalResourceType'] = $logicalResourceType;
        return $this;
    }

    /**
    * Gets indexKey
    *  资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getIndexKey()
    {
        return $this->container['indexKey'];
    }

    /**
    * Sets indexKey
    *
    * @param string|null $indexKey 资源的索引，如果用户在模板中使用了count或for_each则会返回index_key。如果index_key出现，则logical_resource_name + index_key可以作为该资源的一种标识  如果用户在模板中使用count，则index_key为从0开始的数字  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[0]`和`huaweicloud_vpc.my_hello_world_vpc[1]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则index_key为用户自定义的字符串  以HCL格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，用户在模板中可以通过`huaweicloud_vpc.my_hello_world_vpc[\"vpc1\"]`和`huaweicloud_vpc.my_hello_world_vpc[\"vpc2\"]`标识两个资源  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return $this
    */
    public function setIndexKey($indexKey)
    {
        $this->container['indexKey'] = $indexKey;
        return $this;
    }

    /**
    * Gets resourceStatus
    *  资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    *
    * @return string|null
    */
    public function getResourceStatus()
    {
        return $this->container['resourceStatus'];
    }

    /**
    * Sets resourceStatus
    *
    * @param string|null $resourceStatus 资源的状态 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    *
    * @return $this
    */
    public function setResourceStatus($resourceStatus)
    {
        $this->container['resourceStatus'] = $resourceStatus;
        return $this;
    }

    /**
    * Gets statusMessage
    *  当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 当该资源状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets resourceAttributes
    *  资源属性列表
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ResourceAttribute[]|null
    */
    public function getResourceAttributes()
    {
        return $this->container['resourceAttributes'];
    }

    /**
    * Sets resourceAttributes
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ResourceAttribute[]|null $resourceAttributes 资源属性列表
    *
    * @return $this
    */
    public function setResourceAttributes($resourceAttributes)
    {
        $this->container['resourceAttributes'] = $resourceAttributes;
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

