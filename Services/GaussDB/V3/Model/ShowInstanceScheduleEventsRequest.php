<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceScheduleEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceScheduleEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * id  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    * level  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    * sortField  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    * order  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    * limit  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    * offset  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'id' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'type' => 'string',
            'level' => 'string',
            'sortField' => 'string',
            'order' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * id  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    * level  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    * sortField  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    * order  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    * limit  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    * offset  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'id' => null,
        'instanceId' => null,
        'status' => null,
        'type' => null,
        'level' => null,
        'sortField' => null,
        'order' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * id  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    * level  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    * sortField  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    * order  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    * limit  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    * offset  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'id' => 'id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'type' => 'type',
            'level' => 'level',
            'sortField' => 'sort_field',
            'order' => 'order',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * id  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    * level  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    * sortField  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    * order  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    * limit  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    * offset  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'type' => 'setType',
            'level' => 'setLevel',
            'sortField' => 'setSortField',
            'order' => 'setOrder',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * id  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    * level  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    * sortField  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    * order  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    * limit  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    * offset  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'type' => 'getType',
            'level' => 'getLevel',
            'sortField' => 'getSortField',
            'order' => 'getOrder',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets xLanguage
    *  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：  事件ID。  您可以登录管理控制台，在事件管理列表中查看事件ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为ev07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：  事件状态。  **约束限制**：  不涉及。  **取值范围**：  - inquiring：待授权。 - scheduled：待执行。 - executing：执行中。 - completed：执行完成。 - canceled：事件关闭。 - failed：执行失败。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
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
    * @param string|null $type **参数解释**：  事件类型。  **约束限制**：  不涉及。  **取值范围**：  - system.lifecycle.rebuild_node：备机重建事件。 - system.lifecycle.db_upgrade：数据库内核小版本升级事件。 - system.scheduled_event.high_cpu_memory：实例CPU或内存高负载事件，需要变更实例规格。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**：  事件级别。  **约束限制**：  不涉及。  **取值范围**：  - critical：紧急。 - major：重要。 - minor：一般。 - info：提示。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets sortField
    *  **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField **参数解释**：  响应列表排序字段。  **约束限制**：  不涉及。  **取值范围**：  - created_time：创建时间。 - updated_time：更新时间。 - execution_time_window：执行时间窗。 - execute_time： 执行时间。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order **参数解释**：  响应列表根据sort_field字段的排序方式（升序/降序）。  **约束限制**：  sort_field不为空时生效。  **取值范围**：  - asc：升序排列。 - desc：降序排列。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：              查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：              索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  ≥0  **默认取值**：  0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

