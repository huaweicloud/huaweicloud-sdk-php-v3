<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceIdKey  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    * resourceIdValue  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceKey  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * time  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    * eventMessage  该资源栈事件对应的详细信息
    * elapsedSeconds  此事件执行所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceName' => 'string',
            'resourceIdKey' => 'string',
            'resourceIdValue' => 'string',
            'resourceKey' => 'string',
            'time' => 'string',
            'eventType' => 'string',
            'eventMessage' => 'string',
            'elapsedSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceIdKey  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    * resourceIdValue  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceKey  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * time  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    * eventMessage  该资源栈事件对应的详细信息
    * elapsedSeconds  此事件执行所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceName' => null,
        'resourceIdKey' => null,
        'resourceIdValue' => null,
        'resourceKey' => null,
        'time' => null,
        'eventType' => null,
        'eventMessage' => null,
        'elapsedSeconds' => null
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
    * resourceIdKey  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    * resourceIdValue  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceKey  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * time  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    * eventMessage  该资源栈事件对应的详细信息
    * elapsedSeconds  此事件执行所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'resourceIdKey' => 'resource_id_key',
            'resourceIdValue' => 'resource_id_value',
            'resourceKey' => 'resource_key',
            'time' => 'time',
            'eventType' => 'event_type',
            'eventMessage' => 'event_message',
            'elapsedSeconds' => 'elapsed_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceIdKey  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    * resourceIdValue  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceKey  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * time  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    * eventMessage  该资源栈事件对应的详细信息
    * elapsedSeconds  此事件执行所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'resourceIdKey' => 'setResourceIdKey',
            'resourceIdValue' => 'setResourceIdValue',
            'resourceKey' => 'setResourceKey',
            'time' => 'setTime',
            'eventType' => 'setEventType',
            'eventMessage' => 'setEventMessage',
            'elapsedSeconds' => 'setElapsedSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源的类型  以HCL格式的模板为例，resource_type 为 huaweicloud_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_type 为 huaweicloud_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceName  资源的名称，默认为资源的逻辑名称  以HCL格式的模板为例，resource_name 为 my_hello_world_vpc  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   name = \"test_vpc\" } ```  以json格式的模板为例，resource_name 为 my_hello_world_vpc  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\"       }     }   } } ```
    * resourceIdKey  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    * resourceIdValue  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceKey  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    * time  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    * eventMessage  该资源栈事件对应的详细信息
    * elapsedSeconds  此事件执行所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'resourceIdKey' => 'getResourceIdKey',
            'resourceIdValue' => 'getResourceIdValue',
            'resourceKey' => 'getResourceKey',
            'time' => 'getTime',
            'eventType' => 'getEventType',
            'eventMessage' => 'getEventMessage',
            'elapsedSeconds' => 'getElapsedSeconds'
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
    const EVENT_TYPE_LOG = 'LOG';
    const EVENT_TYPE_ERROR = 'ERROR';
    const EVENT_TYPE_DRIFT = 'DRIFT';
    const EVENT_TYPE_SUMMARY = 'SUMMARY';
    const EVENT_TYPE_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const EVENT_TYPE_CREATION_FAILED = 'CREATION_FAILED';
    const EVENT_TYPE_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const EVENT_TYPE_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const EVENT_TYPE_DELETION_FAILED = 'DELETION_FAILED';
    const EVENT_TYPE_DELETION_COMPLETE = 'DELETION_COMPLETE';
    const EVENT_TYPE_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const EVENT_TYPE_UPDATE_FAILED = 'UPDATE_FAILED';
    const EVENT_TYPE_UPDATE_COMPLETE = 'UPDATE_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_LOG,
            self::EVENT_TYPE_ERROR,
            self::EVENT_TYPE_DRIFT,
            self::EVENT_TYPE_SUMMARY,
            self::EVENT_TYPE_CREATION_IN_PROGRESS,
            self::EVENT_TYPE_CREATION_FAILED,
            self::EVENT_TYPE_CREATION_COMPLETE,
            self::EVENT_TYPE_DELETION_IN_PROGRESS,
            self::EVENT_TYPE_DELETION_FAILED,
            self::EVENT_TYPE_DELETION_COMPLETE,
            self::EVENT_TYPE_UPDATE_IN_PROGRESS,
            self::EVENT_TYPE_UPDATE_FAILED,
            self::EVENT_TYPE_UPDATE_COMPLETE,
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
        $this->container['resourceIdKey'] = isset($data['resourceIdKey']) ? $data['resourceIdKey'] : null;
        $this->container['resourceIdValue'] = isset($data['resourceIdValue']) ? $data['resourceIdValue'] : null;
        $this->container['resourceKey'] = isset($data['resourceKey']) ? $data['resourceKey'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventMessage'] = isset($data['eventMessage']) ? $data['eventMessage'] : null;
        $this->container['elapsedSeconds'] = isset($data['elapsedSeconds']) ? $data['elapsedSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
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
    * Gets resourceIdKey
    *  资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    *
    * @return string|null
    */
    public function getResourceIdKey()
    {
        return $this->container['resourceIdKey'];
    }

    /**
    * Sets resourceIdKey
    *
    * @param string|null $resourceIdKey 资源id的名称，即对应资源作为id使用的值的名称，当资源未创建的时候，不返回resource_id_key 此id由provider定义，因此不同的provider可能遵循了不同的命名规则，具体的命名规则请与provider开发者确认或阅读provider文档
    *
    * @return $this
    */
    public function setResourceIdKey($resourceIdKey)
    {
        $this->container['resourceIdKey'] = $resourceIdKey;
        return $this;
    }

    /**
    * Gets resourceIdValue
    *  资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    *
    * @return string|null
    */
    public function getResourceIdValue()
    {
        return $this->container['resourceIdValue'];
    }

    /**
    * Sets resourceIdValue
    *
    * @param string|null $resourceIdValue 资源id的值，即对应资源作为id使用的值，当资源未创建的时候，不返回resource_id_value
    *
    * @return $this
    */
    public function setResourceIdValue($resourceIdValue)
    {
        $this->container['resourceIdValue'] = $resourceIdValue;
        return $this;
    }

    /**
    * Gets resourceKey
    *  资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return string|null
    */
    public function getResourceKey()
    {
        return $this->container['resourceKey'];
    }

    /**
    * Sets resourceKey
    *
    * @param string|null $resourceKey 资源键，如果用户在模板中使用了count或for_each则会返回resource_key  如果用户在模板中使用count，则resource_key为从0开始的数字  以HCL格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   count = 2   name = \"test_vpc\" } ```  以json格式的模板为例，模板中count为2，意味着将会生成两个资源，对应的resource_key分别为0和1  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"name\": \"test_vpc\",         \"count\": 2       }     }   } } ```  如果用户在模板中使用for_each，则resource_key为用户自定义的字符串  以HCL格式的模板为例，resource_key分别为vpc1和vpc2  ```hcl resource \"huaweicloud_vpc\" \"my_hello_world_vpc\" {   for_each = {     \"vpc1\" = \"test_vpc\"     \"vpc2\" = \"test_vpc\"   }   name = each.value } ```  以json格式的模板为例，resource_key分别为vpc1和vpc2  ```json {   \"resource\": {     \"huaweicloud_vpc\": {       \"my_hello_world_vpc\": {         \"for_each\": {           \"vpc1\": \"test_vpc\",           \"vpc2\": \"test_vpc\"         }         \"name\": \"${each.value}\"       }     }   } } ```
    *
    * @return $this
    */
    public function setResourceKey($resourceKey)
    {
        $this->container['resourceKey'] = $resourceKey;
        return $this;
    }

    /**
    * Gets time
    *  事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 事件发生的时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets eventType
    *  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则是DELETION后CREATION，或者CREATION后DELETION，具体以何种行为进行替换式更新由Provider定义。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventMessage
    *  该资源栈事件对应的详细信息
    *
    * @return string|null
    */
    public function getEventMessage()
    {
        return $this->container['eventMessage'];
    }

    /**
    * Sets eventMessage
    *
    * @param string|null $eventMessage 该资源栈事件对应的详细信息
    *
    * @return $this
    */
    public function setEventMessage($eventMessage)
    {
        $this->container['eventMessage'] = $eventMessage;
        return $this;
    }

    /**
    * Gets elapsedSeconds
    *  此事件执行所花的时间，以秒为单位
    *
    * @return int|null
    */
    public function getElapsedSeconds()
    {
        return $this->container['elapsedSeconds'];
    }

    /**
    * Sets elapsedSeconds
    *
    * @param int|null $elapsedSeconds 此事件执行所花的时间，以秒为单位
    *
    * @return $this
    */
    public function setElapsedSeconds($elapsedSeconds)
    {
        $this->container['elapsedSeconds'] = $elapsedSeconds;
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

