<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVulHandleTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVulHandleTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * handleType  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    * minStartTime  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * maxStartTime  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * status  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'handleType' => 'string',
            'minStartTime' => 'int',
            'maxStartTime' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * handleType  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    * minStartTime  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * maxStartTime  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * status  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'handleType' => null,
        'minStartTime' => 'int64',
        'maxStartTime' => 'int64',
        'status' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * handleType  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    * minStartTime  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * maxStartTime  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * status  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'handleType' => 'handle_type',
            'minStartTime' => 'min_start_time',
            'maxStartTime' => 'max_start_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * handleType  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    * minStartTime  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * maxStartTime  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * status  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'handleType' => 'setHandleType',
            'minStartTime' => 'setMinStartTime',
            'maxStartTime' => 'setMaxStartTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * handleType  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    * minStartTime  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * maxStartTime  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * status  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'handleType' => 'getHandleType',
            'minStartTime' => 'getMinStartTime',
            'maxStartTime' => 'getMaxStartTime',
            'status' => 'getStatus'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['handleType'] = isset($data['handleType']) ? $data['handleType'] : null;
        $this->container['minStartTime'] = isset($data['minStartTime']) ? $data['minStartTime'] : null;
        $this->container['maxStartTime'] = isset($data['maxStartTime']) ? $data['maxStartTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['handleType']) && (mb_strlen($this->container['handleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'handleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['handleType']) && (mb_strlen($this->container['handleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleType']) && !preg_match("/^(immediate_repair|verify)$/", $this->container['handleType'])) {
                $invalidProperties[] = "invalid value for 'handleType', must be conform to the pattern /^(immediate_repair|verify)$/.";
            }
            if (!is_null($this->container['minStartTime']) && ($this->container['minStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'minStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxStartTime']) && ($this->container['maxStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(running|finished)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(running|finished)$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets handleType
    *  **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleType()
    {
        return $this->container['handleType'];
    }

    /**
    * Sets handleType
    *
    * @param string|null $handleType **参数解释**: 处置任务类型 **约束限制**: 不涉及 **取值范围**: - immediate_repair：立即修复。 - verify：验证。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleType($handleType)
    {
        $this->container['handleType'] = $handleType;
        return $this;
    }

    /**
    * Gets minStartTime
    *  **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getMinStartTime()
    {
        return $this->container['minStartTime'];
    }

    /**
    * Sets minStartTime
    *
    * @param int|null $minStartTime **参数解释**: 任务开始时间的最小值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMinStartTime($minStartTime)
    {
        $this->container['minStartTime'] = $minStartTime;
        return $this;
    }

    /**
    * Gets maxStartTime
    *  **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getMaxStartTime()
    {
        return $this->container['maxStartTime'];
    }

    /**
    * Sets maxStartTime
    *
    * @param int|null $maxStartTime **参数解释**: 任务开始时间的最大值，时间戳，单位毫秒 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMaxStartTime($maxStartTime)
    {
        $this->container['maxStartTime'] = $maxStartTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 任务状态 **约束限制**: 不涉及 **取值范围**: - running：执行中。 - finished：已完成。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

