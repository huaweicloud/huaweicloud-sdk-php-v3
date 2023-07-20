<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetQuerySearchCriteriasBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetQuerySearchCriteriasBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * criteria  快速查询字段
    * name  快速查询名称
    * id  快速查询id
    * searchType  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'criteria' => 'string',
            'name' => 'string',
            'id' => 'string',
            'searchType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * criteria  快速查询字段
    * name  快速查询名称
    * id  快速查询id
    * searchType  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'criteria' => null,
        'name' => null,
        'id' => null,
        'searchType' => null
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
    * criteria  快速查询字段
    * name  快速查询名称
    * id  快速查询id
    * searchType  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'criteria' => 'criteria',
            'name' => 'name',
            'id' => 'id',
            'searchType' => 'search_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * criteria  快速查询字段
    * name  快速查询名称
    * id  快速查询id
    * searchType  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @var string[]
    */
    protected static $setters = [
            'criteria' => 'setCriteria',
            'name' => 'setName',
            'id' => 'setId',
            'searchType' => 'setSearchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * criteria  快速查询字段
    * name  快速查询名称
    * id  快速查询id
    * searchType  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @var string[]
    */
    protected static $getters = [
            'criteria' => 'getCriteria',
            'name' => 'getName',
            'id' => 'getId',
            'searchType' => 'getSearchType'
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
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
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
    * Gets criteria
    *  快速查询字段
    *
    * @return string|null
    */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
    * Sets criteria
    *
    * @param string|null $criteria 快速查询字段
    *
    * @return $this
    */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;
        return $this;
    }

    /**
    * Gets name
    *  快速查询名称
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
    * @param string|null $name 快速查询名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  快速查询id
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
    * @param string|null $id 快速查询id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets searchType
    *  快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @return string|null
    */
    public function getSearchType()
    {
        return $this->container['searchType'];
    }

    /**
    * Sets searchType
    *
    * @param string|null $searchType 快速查询类型： 原始日志：ORIGINALLOG 可视化日志: VISUALIZATION
    *
    * @return $this
    */
    public function setSearchType($searchType)
    {
        $this->container['searchType'] = $searchType;
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

