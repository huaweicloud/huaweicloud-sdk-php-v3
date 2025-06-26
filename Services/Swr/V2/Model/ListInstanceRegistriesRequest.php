<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceRegistriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceRegistriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * orderColumn  排序字段，支持created_at、updated_at、name，默认为created_at
    * orderType  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    * name  名称，模糊查询
    * type  仓库类型
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'orderColumn' => 'string',
            'orderType' => 'string',
            'name' => 'string',
            'type' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * orderColumn  排序字段，支持created_at、updated_at、name，默认为created_at
    * orderType  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    * name  名称，模糊查询
    * type  仓库类型
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'orderColumn' => null,
        'orderType' => null,
        'name' => null,
        'type' => null,
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
    * instanceId  企业仓库实例ID
    * orderColumn  排序字段，支持created_at、updated_at、name，默认为created_at
    * orderType  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    * name  名称，模糊查询
    * type  仓库类型
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'orderColumn' => 'order_column',
            'orderType' => 'order_type',
            'name' => 'name',
            'type' => 'type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  企业仓库实例ID
    * orderColumn  排序字段，支持created_at、updated_at、name，默认为created_at
    * orderType  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    * name  名称，模糊查询
    * type  仓库类型
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'orderColumn' => 'setOrderColumn',
            'orderType' => 'setOrderType',
            'name' => 'setName',
            'type' => 'setType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  企业仓库实例ID
    * orderColumn  排序字段，支持created_at、updated_at、name，默认为created_at
    * orderType  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    * name  名称，模糊查询
    * type  仓库类型
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'orderColumn' => 'getOrderColumn',
            'orderType' => 'getOrderType',
            'name' => 'getName',
            'type' => 'getType',
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
    const ORDER_COLUMN_CREATED_AT = 'created_at';
    const ORDER_COLUMN_UPDATED_AT = 'updated_at';
    const ORDER_COLUMN_NAME = 'name';
    const ORDER_TYPE_DESC = 'desc';
    const ORDER_TYPE_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderColumnAllowableValues()
    {
        return [
            self::ORDER_COLUMN_CREATED_AT,
            self::ORDER_COLUMN_UPDATED_AT,
            self::ORDER_COLUMN_NAME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_DESC,
            self::ORDER_TYPE_ASC,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            $allowedValues = $this->getOrderColumnAllowableValues();
                if (!is_null($this->container['orderColumn']) && !in_array($this->container['orderColumn'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderColumn', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderTypeAllowableValues();
                if (!is_null($this->container['orderType']) && !in_array($this->container['orderType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceId
    *  企业仓库实例ID
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
    * @param string $instanceId 企业仓库实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets orderColumn
    *  排序字段，支持created_at、updated_at、name，默认为created_at
    *
    * @return string|null
    */
    public function getOrderColumn()
    {
        return $this->container['orderColumn'];
    }

    /**
    * Sets orderColumn
    *
    * @param string|null $orderColumn 排序字段，支持created_at、updated_at、name，默认为created_at
    *
    * @return $this
    */
    public function setOrderColumn($orderColumn)
    {
        $this->container['orderColumn'] = $orderColumn;
        return $this;
    }

    /**
    * Gets orderType
    *  排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    *
    * @return string|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param string|null $orderType 排序方式，支持desc、asc，默认desc; 注意：order_type需要与order_column配合使用
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets name
    *  名称，模糊查询
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
    * @param string|null $name 名称，模糊查询
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
    *  仓库类型
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
    * @param string|null $type 仓库类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets offset
    *  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
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
    * @param int|null $offset 起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
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
    *  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
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
    * @param int|null $limit 返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
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

