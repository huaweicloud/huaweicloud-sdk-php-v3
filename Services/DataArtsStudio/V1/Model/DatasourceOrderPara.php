<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasourceOrderPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasourceOrderPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  排序参数名称
    * field  对应的参数字段
    * optional  是否可选
    * sort  排序方式
    * order  排序参数顺序
    * description  排序参数描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'field' => 'string',
            'optional' => 'bool',
            'sort' => 'string',
            'order' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  排序参数名称
    * field  对应的参数字段
    * optional  是否可选
    * sort  排序方式
    * order  排序参数顺序
    * description  排序参数描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'field' => null,
        'optional' => null,
        'sort' => null,
        'order' => 'int32',
        'description' => null
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
    * name  排序参数名称
    * field  对应的参数字段
    * optional  是否可选
    * sort  排序方式
    * order  排序参数顺序
    * description  排序参数描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'field' => 'field',
            'optional' => 'optional',
            'sort' => 'sort',
            'order' => 'order',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  排序参数名称
    * field  对应的参数字段
    * optional  是否可选
    * sort  排序方式
    * order  排序参数顺序
    * description  排序参数描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'field' => 'setField',
            'optional' => 'setOptional',
            'sort' => 'setSort',
            'order' => 'setOrder',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  排序参数名称
    * field  对应的参数字段
    * optional  是否可选
    * sort  排序方式
    * order  排序参数顺序
    * description  排序参数描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'field' => 'getField',
            'optional' => 'getOptional',
            'sort' => 'getSort',
            'order' => 'getOrder',
            'description' => 'getDescription'
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
    const SORT_ASC = 'ASC';
    const SORT_DESC = 'DESC';
    const SORT_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_ASC,
            self::SORT_DESC,
            self::SORT_CUSTOM,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
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
    * Gets name
    *  排序参数名称
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
    * @param string|null $name 排序参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets field
    *  对应的参数字段
    *
    * @return string|null
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string|null $field 对应的参数字段
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets optional
    *  是否可选
    *
    * @return bool|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool|null $optional 是否可选
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets sort
    *  排序方式
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序方式
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets order
    *  排序参数顺序
    *
    * @return int|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int|null $order 排序参数顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets description
    *  排序参数描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 排序参数描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

