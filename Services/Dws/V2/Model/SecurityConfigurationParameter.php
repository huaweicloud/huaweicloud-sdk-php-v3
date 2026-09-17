<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigurationParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigurationParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    * value  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    * value  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null
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
    * name  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    * value  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    * value  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    * value  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    *  **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
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
    * @param string|null $name **参数解释**： 参数名。 **取值范围**： audit_dml_state：审计dml操作开关； audit_system_object：审计DDL操作、其它操作； audit_adm：安全管理员用户名； audit_exec_status：审计执行结果； audit_operation_checked：审计DML操作、审计其它操作的具体勾选项； enableSeparationOfDuty：三权分立开关； audit_user_violation：越权访问操作； ssl：ssl开关； require_ssl：是否校验ssl； audit_function_exec：审计存储过程执行操作； audit_copy_exec：对COPY操作进行记录； audit_resource_policy：日志保留策略； audit_file_remain_time：时间策略下的最少保留天数，已废弃； audit_dml_state_select：审计SELECT操作； security_adm：安全管理员； audit_dump_switch：日志转储开关； kernel_audit_dump_switch：内核日志转储开关； audit_system_object_detail：审计DDL操作、其它操作的具体勾选项；
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

