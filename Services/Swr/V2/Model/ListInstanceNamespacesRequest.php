<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceNamespacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceNamespacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）
    * orderType  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
    * name  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    * public  是否公开，非空且非true默认返回false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderColumn' => 'string',
            'orderType' => 'string',
            'name' => 'string',
            'public' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）
    * orderType  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
    * name  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    * public  是否公开，非空且非true默认返回false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'orderColumn' => null,
        'orderType' => null,
        'name' => null,
        'public' => null
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
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）
    * orderType  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
    * name  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    * public  是否公开，非空且非true默认返回false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderColumn' => 'order_column',
            'orderType' => 'order_type',
            'name' => 'name',
            'public' => 'public'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  企业仓库实例ID
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）
    * orderType  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
    * name  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    * public  是否公开，非空且非true默认返回false
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderColumn' => 'setOrderColumn',
            'orderType' => 'setOrderType',
            'name' => 'setName',
            'public' => 'setPublic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  企业仓库实例ID
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）
    * orderType  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
    * name  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    * public  是否公开，非空且非true默认返回false
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderColumn' => 'getOrderColumn',
            'orderType' => 'getOrderType',
            'name' => 'getName',
            'public' => 'getPublic'
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
    const ORDER_COLUMN_UPDATED_AT = 'updated_at';
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
            self::ORDER_COLUMN_UPDATED_AT,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets orderColumn
    *  按列排序，可设置为updated_at（按更新时间排序）
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
    * @param string|null $orderColumn 按列排序，可设置为updated_at（按更新时间排序）
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
    *  排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
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
    * @param string|null $orderType 排序类型，可设置为desc（降序）、asc（升序），与order_column配合使用
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
    *  命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
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
    * @param string|null $name 命名空间名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，1-64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets public
    *  是否公开，非空且非true默认返回false
    *
    * @return string|null
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param string|null $public 是否公开，非空且非true默认返回false
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
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

