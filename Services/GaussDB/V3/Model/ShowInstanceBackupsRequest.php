<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceBackupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceBackupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * orderField  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    * orderRule  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    * filterField  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    * filterContent  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'orderField' => 'string',
            'orderRule' => 'string',
            'filterField' => 'string',
            'filterContent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * orderField  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    * orderRule  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    * filterField  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    * filterContent  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'offset' => null,
        'limit' => null,
        'orderField' => null,
        'orderRule' => null,
        'filterField' => null,
        'filterContent' => null
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
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * orderField  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    * orderRule  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    * filterField  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    * filterContent  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderField' => 'order_field',
            'orderRule' => 'order_rule',
            'filterField' => 'filter_field',
            'filterContent' => 'filter_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * orderField  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    * orderRule  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    * filterField  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    * filterContent  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderField' => 'setOrderField',
            'orderRule' => 'setOrderRule',
            'filterField' => 'setFilterField',
            'filterContent' => 'setFilterContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * orderField  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    * orderRule  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    * filterField  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    * filterContent  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderField' => 'getOrderField',
            'orderRule' => 'getOrderRule',
            'filterField' => 'getFilterField',
            'filterContent' => 'getFilterContent'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['orderRule'] = isset($data['orderRule']) ? $data['orderRule'] : null;
        $this->container['filterField'] = isset($data['filterField']) ? $data['filterField'] : null;
        $this->container['filterContent'] = isset($data['filterContent']) ? $data['filterContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    *  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
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
    * @param string|null $xLanguage **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
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
    * Gets offset
    *  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
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
    *  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orderField
    *  **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getOrderField()
    {
        return $this->container['orderField'];
    }

    /**
    * Sets orderField
    *
    * @param string|null $orderField **参数解释**:  根据指定字段排序。  **约束限制**:  不涉及。  **取值范围**:  - name：备份名称。 - beginTime：备份开启时间。 - type：备份类型。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets orderRule
    *  **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getOrderRule()
    {
        return $this->container['orderRule'];
    }

    /**
    * Sets orderRule
    *
    * @param string|null $orderRule **参数解释**: 排序规则。  **约束限制**: 不涉及。  **取值范围**: - asc：升序。 - desc：降序。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOrderRule($orderRule)
    {
        $this->container['orderRule'] = $orderRule;
        return $this;
    }

    /**
    * Gets filterField
    *  **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getFilterField()
    {
        return $this->container['filterField'];
    }

    /**
    * Sets filterField
    *
    * @param string|null $filterField **参数解释**: 过滤字段类型。 **约束限制**: 不涉及。 **取值范围**: name：根据备份名称进行过滤。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setFilterField($filterField)
    {
        $this->container['filterField'] = $filterField;
        return $this;
    }

    /**
    * Gets filterContent
    *  **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getFilterContent()
    {
        return $this->container['filterContent'];
    }

    /**
    * Sets filterContent
    *
    * @param string|null $filterContent **参数解释**: 过滤内容。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setFilterContent($filterContent)
    {
        $this->container['filterContent'] = $filterContent;
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

