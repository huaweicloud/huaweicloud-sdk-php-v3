<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerBudgetRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerBudgetRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    * indirectPartnerId  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    * operationType  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'indirectPartnerId' => 'string',
            'operationType' => 'string',
            'budgetType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    * indirectPartnerId  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    * operationType  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'indirectPartnerId' => null,
        'operationType' => null,
        'budgetType' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * customerId  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    * indirectPartnerId  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    * operationType  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'indirectPartnerId' => 'indirect_partner_id',
            'operationType' => 'operation_type',
            'budgetType' => 'budget_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    * indirectPartnerId  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    * operationType  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'operationType' => 'setOperationType',
            'budgetType' => 'setBudgetType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    * indirectPartnerId  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    * operationType  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'indirectPartnerId' => 'getIndirectPartnerId',
            'operationType' => 'getOperationType',
            'budgetType' => 'getBudgetType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['budgetType'] = isset($data['budgetType']) ? $data['budgetType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets customerId
    *  |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId |参数名称：客户ID| |参数的约束及描述：该参数必填，范围限制：1-64|
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId |参数名称：云经销商ID| |参数的约束及描述：该参数非必填，范围限制：0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户预算调整记录，必须携带该字段|
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets operationType
    *  |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType |参数名称：操作类别| |参数的约束及描述：该参数非必填，SETTING：设置，DELETE：解除关联关系，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets budgetType
    *  |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    *
    * @return string|null
    */
    public function getBudgetType()
    {
        return $this->container['budgetType'];
    }

    /**
    * Sets budgetType
    *
    * @param string|null $budgetType |参数名称：预算模式| |参数的约束及描述：该参数非必填，MONTHLY：月度预算，PACKAGE：一次性预算，此参数不携带时，查询所有类型数据。此参数携带值不支持为空或者空串。|
    *
    * @return $this
    */
    public function setBudgetType($budgetType)
    {
        $this->container['budgetType'] = $budgetType;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
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
    * @param int|null $offset |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，从0开始，默认值为0。|
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
    *  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
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
    * @param int|null $limit |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

