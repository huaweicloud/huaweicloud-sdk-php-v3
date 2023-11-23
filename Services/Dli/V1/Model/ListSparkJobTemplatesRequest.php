<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSparkJobTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSparkJobTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型。
    * keyword  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    * pageSize  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    * currentPage  当前页码，默认为第一页。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'keyword' => 'string',
            'pageSize' => 'int',
            'currentPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型。
    * keyword  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    * pageSize  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    * currentPage  当前页码，默认为第一页。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'keyword' => null,
        'pageSize' => 'int32',
        'currentPage' => 'int32'
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
    * type  类型。
    * keyword  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    * pageSize  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    * currentPage  当前页码，默认为第一页。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'keyword' => 'keyword',
            'pageSize' => 'page-size',
            'currentPage' => 'current-page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型。
    * keyword  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    * pageSize  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    * currentPage  当前页码，默认为第一页。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'keyword' => 'setKeyword',
            'pageSize' => 'setPageSize',
            'currentPage' => 'setCurrentPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型。
    * keyword  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    * pageSize  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    * currentPage  当前页码，默认为第一页。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'keyword' => 'getKeyword',
            'pageSize' => 'getPageSize',
            'currentPage' => 'getCurrentPage'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
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
    * Gets type
    *  类型。
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
    * @param string|null $type 类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets keyword
    *  模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 模板名过滤关键字，模糊匹配，获取模板名含有该关键字的所有模板。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
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
    * @param int|null $pageSize 每页显示的最大结果行数，范围: [1, 100]。默认值为：50。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets currentPage
    *  当前页码，默认为第一页。
    *
    * @return int|null
    */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
    * Sets currentPage
    *
    * @param int|null $currentPage 当前页码，默认为第一页。
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
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

