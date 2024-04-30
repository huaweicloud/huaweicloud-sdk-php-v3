<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VariableResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VariableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * type  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * description  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * default  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * sensitive  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * nullable  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * validations  参数的校验模块
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'default' => 'object',
            'sensitive' => 'bool',
            'nullable' => 'bool',
            'validations' => '\HuaweiCloud\SDK\Aos\V1\Model\VariableValidationResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * type  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * description  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * default  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * sensitive  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * nullable  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * validations  参数的校验模块
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'description' => null,
        'default' => null,
        'sensitive' => null,
        'nullable' => null,
        'validations' => null
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
    * name  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * type  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * description  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * default  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * sensitive  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * nullable  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * validations  参数的校验模块
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'default' => 'default',
            'sensitive' => 'sensitive',
            'nullable' => 'nullable',
            'validations' => 'validations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * type  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * description  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * default  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * sensitive  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * nullable  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * validations  参数的校验模块
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'default' => 'setDefault',
            'sensitive' => 'setSensitive',
            'nullable' => 'setNullable',
            'validations' => 'setValidations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * type  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * description  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * default  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * sensitive  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * nullable  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    * validations  参数的校验模块
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'default' => 'getDefault',
            'sensitive' => 'getSensitive',
            'nullable' => 'getNullable',
            'validations' => 'getValidations'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
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
    * Gets name
    *  参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数的名字  以HCL格式的模板为例，name 为 `my_hello_world_variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，name 为 `my_hello_world_variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参数的类型  以HCL格式的模板为例，type 为 `string`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，type 为 `string`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 参数的描述  以HCL格式的模板为例，description 为 `this is a variable`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，description 为 `this is a variable`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets default
    *  参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return object|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param object|null $default 参数默认值。此返回值的类型将与type保持一致  例如，对于type为string的变量，此值的返回类型为string；对于type为number的变量，此值的返回类型为number  以HCL格式的模板为例，default 为 `hello world`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，default 为 `hello world`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets sensitive
    *  参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return bool|null
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param bool|null $sensitive 参数是否为敏感字段  如果variable中没有定义sensitive，默认返回false。  以HCL格式的模板为例，sensitive 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，sensitive 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
        return $this;
    }

    /**
    * Gets nullable
    *  参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return bool|null
    */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
    * Sets nullable
    *
    * @param bool|null $nullable 参数是否可设置为null。  如果variable中没有定义nullable，默认返回true。  以HCL格式的模板为例，nullable 为 `false`  ```hcl variable \"my_hello_world_variable\" {   type = string   description = \"this is a variable\"   default = \"hello world\"   sensitive = false   nullable = false   validation {     condition     = length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \"hello\"     error_message = \"my_hello_world_variable should start with 'hello'.\"   } } ```  以json格式的模板为例，nullable 为 `false`  ```json {   \"variable\": {     \"my_hello_world_variable\": [       {         \"default\": \"hello world\",         \"description\": \"this is a variable\",         \"nullable\": false,         \"sensitive\": false,         \"type\": \"string\",         \"validation\": [           {             \"condition\": \"${length(var.my_hello_world_variable) > 0 && substr(var.my_hello_world_variable, 0, 5) == \\\"hello\\\"}\",             \"error_message\": \"my_hello_world_variable should start with 'hello'.\"           }         ]       }     ]   } } ```
    *
    * @return $this
    */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;
        return $this;
    }

    /**
    * Gets validations
    *  参数的校验模块
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\VariableValidationResponse[]|null
    */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
    * Sets validations
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VariableValidationResponse[]|null $validations 参数的校验模块
    *
    * @return $this
    */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;
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

