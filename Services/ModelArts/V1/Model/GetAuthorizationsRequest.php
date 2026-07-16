<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetAuthorizationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetAuthorizationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sortBy  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    * order  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
    * offset  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sortBy' => 'string',
            'order' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sortBy  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    * order  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
    * offset  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sortBy' => null,
        'order' => null,
        'limit' => null,
        'offset' => null
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
    * sortBy  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    * order  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
    * offset  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sortBy' => 'sort_by',
            'order' => 'order',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sortBy  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    * order  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
    * offset  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
    *
    * @var string[]
    */
    protected static $setters = [
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sortBy  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    * order  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
    * offset  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
    *
    * @var string[]
    */
    protected static $getters = [
            'sortBy' => 'getSortBy',
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
    const SORT_BY_USER_NAME = 'user_name';
    const SORT_BY_CREATE_TIME = 'create_time';
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_USER_NAME,
            self::SORT_BY_CREATE_TIME,
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
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
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
            $allowedValues = $this->getSortByAllowableValues();
                if (!is_null($this->container['sortBy']) && !in_array($this->container['sortBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortBy', must be one of '%s'",
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
    * Gets sortBy
    *  **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy **参数解释**：指定排序字段。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - user_name：IAM用户名称。 - create_time：创建时间。 **默认取值**：user_name。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
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
    * @param string|null $order **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：递增排序。 - DESC：递减排序。 **默认取值**：ASC。
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
    *  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
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
    * @param int|null $limit **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,1000]。 **默认取值**：1000。
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
    *  **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
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
    * @param int|null $offset **参数解释**：分页列表的起始页。 **约束限制**：不涉及。 **取值范围**：非负整数。 **默认取值**：0。
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

