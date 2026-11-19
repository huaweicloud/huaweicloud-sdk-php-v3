<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKillProcessHistoryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKillProcessHistoryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * pageNum  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    * pageSize  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * pageNum  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    * pageSize  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'pageNum' => 'int32',
        'pageSize' => 'int32'
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
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * pageNum  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    * pageSize  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * pageNum  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    * pageSize  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * pageNum  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    * pageSize  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
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
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**：  Kill会话的开始时间。  **约束限制**：  - 格式为UNIX时间戳，单位是毫秒。 - start_time要小于end_time。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**：    Kill会话的结束时间。    **约束限制**：    - 格式为UNIX时间戳，单位是毫秒。 - end_time要大于start_time。   **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageNum
    *  **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum **参数解释**：    当前页数。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    1。
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize **参数解释**：    每页大小。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    1-100。  **默认取值**：    10。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

