<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTablesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTablesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  查看表所在的数据库名称。
    * currentPage  currentPage
    * keyword  过滤表名称的关键词。
    * pageSize  pageSize
    * tableType  tableType
    * withDetail  是否获取表的详细信息（所有者，size等）。
    * withPriv  withPriv
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'currentPage' => 'int',
            'keyword' => 'string',
            'pageSize' => 'int',
            'tableType' => 'string',
            'withDetail' => 'bool',
            'withPriv' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  查看表所在的数据库名称。
    * currentPage  currentPage
    * keyword  过滤表名称的关键词。
    * pageSize  pageSize
    * tableType  tableType
    * withDetail  是否获取表的详细信息（所有者，size等）。
    * withPriv  withPriv
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'currentPage' => 'int32',
        'keyword' => null,
        'pageSize' => 'int32',
        'tableType' => null,
        'withDetail' => null,
        'withPriv' => null
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
    * databaseName  查看表所在的数据库名称。
    * currentPage  currentPage
    * keyword  过滤表名称的关键词。
    * pageSize  pageSize
    * tableType  tableType
    * withDetail  是否获取表的详细信息（所有者，size等）。
    * withPriv  withPriv
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'currentPage' => 'current-page',
            'keyword' => 'keyword',
            'pageSize' => 'page-size',
            'tableType' => 'table-type',
            'withDetail' => 'with-detail',
            'withPriv' => 'with-priv'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  查看表所在的数据库名称。
    * currentPage  currentPage
    * keyword  过滤表名称的关键词。
    * pageSize  pageSize
    * tableType  tableType
    * withDetail  是否获取表的详细信息（所有者，size等）。
    * withPriv  withPriv
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'currentPage' => 'setCurrentPage',
            'keyword' => 'setKeyword',
            'pageSize' => 'setPageSize',
            'tableType' => 'setTableType',
            'withDetail' => 'setWithDetail',
            'withPriv' => 'setWithPriv'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  查看表所在的数据库名称。
    * currentPage  currentPage
    * keyword  过滤表名称的关键词。
    * pageSize  pageSize
    * tableType  tableType
    * withDetail  是否获取表的详细信息（所有者，size等）。
    * withPriv  withPriv
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'currentPage' => 'getCurrentPage',
            'keyword' => 'getKeyword',
            'pageSize' => 'getPageSize',
            'tableType' => 'getTableType',
            'withDetail' => 'getWithDetail',
            'withPriv' => 'getWithPriv'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['withDetail'] = isset($data['withDetail']) ? $data['withDetail'] : null;
        $this->container['withPriv'] = isset($data['withPriv']) ? $data['withPriv'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
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
    * Gets databaseName
    *  查看表所在的数据库名称。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 查看表所在的数据库名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets currentPage
    *  currentPage
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
    * @param int|null $currentPage currentPage
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
        return $this;
    }

    /**
    * Gets keyword
    *  过滤表名称的关键词。
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
    * @param string|null $keyword 过滤表名称的关键词。
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
    *  pageSize
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
    * @param int|null $pageSize pageSize
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets tableType
    *  tableType
    *
    * @return string|null
    */
    public function getTableType()
    {
        return $this->container['tableType'];
    }

    /**
    * Sets tableType
    *
    * @param string|null $tableType tableType
    *
    * @return $this
    */
    public function setTableType($tableType)
    {
        $this->container['tableType'] = $tableType;
        return $this;
    }

    /**
    * Gets withDetail
    *  是否获取表的详细信息（所有者，size等）。
    *
    * @return bool|null
    */
    public function getWithDetail()
    {
        return $this->container['withDetail'];
    }

    /**
    * Sets withDetail
    *
    * @param bool|null $withDetail 是否获取表的详细信息（所有者，size等）。
    *
    * @return $this
    */
    public function setWithDetail($withDetail)
    {
        $this->container['withDetail'] = $withDetail;
        return $this;
    }

    /**
    * Gets withPriv
    *  withPriv
    *
    * @return bool|null
    */
    public function getWithPriv()
    {
        return $this->container['withPriv'];
    }

    /**
    * Sets withPriv
    *
    * @param bool|null $withPriv withPriv
    *
    * @return $this
    */
    public function setWithPriv($withPriv)
    {
        $this->container['withPriv'] = $withPriv;
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

