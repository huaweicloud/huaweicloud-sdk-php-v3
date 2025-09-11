<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSessionStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSessionStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * dimension  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    * offset  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
    * orderField  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    * order  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'dimension' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderField' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * dimension  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    * offset  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
    * orderField  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    * order  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'dimension' => null,
        'offset' => null,
        'limit' => null,
        'orderField' => null,
        'order' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * dimension  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    * offset  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
    * orderField  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    * order  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'dimension' => 'dimension',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderField' => 'order_field',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * dimension  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    * offset  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
    * orderField  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    * order  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'dimension' => 'setDimension',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderField' => 'setOrderField',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * dimension  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    * offset  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
    * orderField  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    * order  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'dimension' => 'getDimension',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderField' => 'getOrderField',
            'order' => 'getOrder'
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
    const DIMENSION_USENAME = 'usename';
    const DIMENSION_CLIENT_ADDR = 'client_addr';
    const DIMENSION_DATNAME = 'datname';
    const ORDER_FIELD_ACTIVE_NUM = 'active_num';
    const ORDER_FIELD_TOTAL_NUM = 'total_num';
    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimensionAllowableValues()
    {
        return [
            self::DIMENSION_USENAME,
            self::DIMENSION_CLIENT_ADDR,
            self::DIMENSION_DATNAME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderFieldAllowableValues()
    {
        return [
            self::ORDER_FIELD_ACTIVE_NUM,
            self::ORDER_FIELD_TOTAL_NUM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9]{1,36}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9]{1,36}$/.";
            }
        if ($this->container['dimension'] === null) {
            $invalidProperties[] = "'dimension' can't be null";
        }
            $allowedValues = $this->getDimensionAllowableValues();
                if (!is_null($this->container['dimension']) && !in_array($this->container['dimension'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimension', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderFieldAllowableValues();
                if (!is_null($this->container['orderField']) && !in_array($this->container['orderField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderField', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
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
    * Gets xLanguage
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
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
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
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
    *  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
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
    * @param string $instanceId **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dimension
    *  **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string $dimension **参数解释**  统计维度。 **约束限制**: 不涉及。 **取值范围** - usename：用户名。 - client_addr：访问来源。 - datname：数据库名。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释** 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围** [0, 2^31-1] **默认取值** 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    *  **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
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
    * @param int|null $limit **参数解释** 查询记录数。 **约束限制**: 不涉及。 **取值范围** [1, 100] **默认取值** 默认为100。
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
    *  **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
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
    * @param string|null $orderField **参数解释** 实时会话统计排序字段。 **约束限制**: 不涉及。 **取值范围** - active_num：活跃会话数。 - total_num：总会话数。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
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
    * @param string|null $order **参数解释** 实时会话统计排序方式。 **约束限制**: 不涉及。 **取值范围** - ASC：根据order_field值升序。 - DESC：根据order_field值降序。  **默认取值** ASC
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

