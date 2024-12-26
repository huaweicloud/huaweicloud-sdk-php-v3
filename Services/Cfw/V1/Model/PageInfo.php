<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endRow  endRow
    * hasNextPage  hasNextPage
    * hasPreviousPage  hasPreviousPage
    * isFirstPage  isFirstPage
    * isLastPage  isLastPage
    * list  list
    * navigateFirstPage  navigateFirstPage
    * navigateLastPage  navigateLastPage
    * navigatePages  navigatePages
    * navigatepageNums  navigatepageNums
    * nextPage  nextPage
    * pageNum  pageNum
    * pageSize  pageSize
    * pages  pages
    * prePage  prePage
    * size  size
    * startRow  startRow
    * total  total
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endRow' => 'int',
            'hasNextPage' => 'bool',
            'hasPreviousPage' => 'bool',
            'isFirstPage' => 'bool',
            'isLastPage' => 'bool',
            'list' => 'object[]',
            'navigateFirstPage' => 'int',
            'navigateLastPage' => 'int',
            'navigatePages' => 'int',
            'navigatepageNums' => 'int[]',
            'nextPage' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'pages' => 'int',
            'prePage' => 'int',
            'size' => 'int',
            'startRow' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endRow  endRow
    * hasNextPage  hasNextPage
    * hasPreviousPage  hasPreviousPage
    * isFirstPage  isFirstPage
    * isLastPage  isLastPage
    * list  list
    * navigateFirstPage  navigateFirstPage
    * navigateLastPage  navigateLastPage
    * navigatePages  navigatePages
    * navigatepageNums  navigatepageNums
    * nextPage  nextPage
    * pageNum  pageNum
    * pageSize  pageSize
    * pages  pages
    * prePage  prePage
    * size  size
    * startRow  startRow
    * total  total
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endRow' => 'int64',
        'hasNextPage' => null,
        'hasPreviousPage' => null,
        'isFirstPage' => null,
        'isLastPage' => null,
        'list' => null,
        'navigateFirstPage' => 'int32',
        'navigateLastPage' => 'int32',
        'navigatePages' => 'int32',
        'navigatepageNums' => 'int32',
        'nextPage' => 'int32',
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'pages' => 'int32',
        'prePage' => 'int32',
        'size' => 'int32',
        'startRow' => 'int64',
        'total' => 'int64'
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
    * endRow  endRow
    * hasNextPage  hasNextPage
    * hasPreviousPage  hasPreviousPage
    * isFirstPage  isFirstPage
    * isLastPage  isLastPage
    * list  list
    * navigateFirstPage  navigateFirstPage
    * navigateLastPage  navigateLastPage
    * navigatePages  navigatePages
    * navigatepageNums  navigatepageNums
    * nextPage  nextPage
    * pageNum  pageNum
    * pageSize  pageSize
    * pages  pages
    * prePage  prePage
    * size  size
    * startRow  startRow
    * total  total
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endRow' => 'endRow',
            'hasNextPage' => 'hasNextPage',
            'hasPreviousPage' => 'hasPreviousPage',
            'isFirstPage' => 'isFirstPage',
            'isLastPage' => 'isLastPage',
            'list' => 'list',
            'navigateFirstPage' => 'navigateFirstPage',
            'navigateLastPage' => 'navigateLastPage',
            'navigatePages' => 'navigatePages',
            'navigatepageNums' => 'navigatepageNums',
            'nextPage' => 'nextPage',
            'pageNum' => 'pageNum',
            'pageSize' => 'pageSize',
            'pages' => 'pages',
            'prePage' => 'prePage',
            'size' => 'size',
            'startRow' => 'startRow',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endRow  endRow
    * hasNextPage  hasNextPage
    * hasPreviousPage  hasPreviousPage
    * isFirstPage  isFirstPage
    * isLastPage  isLastPage
    * list  list
    * navigateFirstPage  navigateFirstPage
    * navigateLastPage  navigateLastPage
    * navigatePages  navigatePages
    * navigatepageNums  navigatepageNums
    * nextPage  nextPage
    * pageNum  pageNum
    * pageSize  pageSize
    * pages  pages
    * prePage  prePage
    * size  size
    * startRow  startRow
    * total  total
    *
    * @var string[]
    */
    protected static $setters = [
            'endRow' => 'setEndRow',
            'hasNextPage' => 'setHasNextPage',
            'hasPreviousPage' => 'setHasPreviousPage',
            'isFirstPage' => 'setIsFirstPage',
            'isLastPage' => 'setIsLastPage',
            'list' => 'setList',
            'navigateFirstPage' => 'setNavigateFirstPage',
            'navigateLastPage' => 'setNavigateLastPage',
            'navigatePages' => 'setNavigatePages',
            'navigatepageNums' => 'setNavigatepageNums',
            'nextPage' => 'setNextPage',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'pages' => 'setPages',
            'prePage' => 'setPrePage',
            'size' => 'setSize',
            'startRow' => 'setStartRow',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endRow  endRow
    * hasNextPage  hasNextPage
    * hasPreviousPage  hasPreviousPage
    * isFirstPage  isFirstPage
    * isLastPage  isLastPage
    * list  list
    * navigateFirstPage  navigateFirstPage
    * navigateLastPage  navigateLastPage
    * navigatePages  navigatePages
    * navigatepageNums  navigatepageNums
    * nextPage  nextPage
    * pageNum  pageNum
    * pageSize  pageSize
    * pages  pages
    * prePage  prePage
    * size  size
    * startRow  startRow
    * total  total
    *
    * @var string[]
    */
    protected static $getters = [
            'endRow' => 'getEndRow',
            'hasNextPage' => 'getHasNextPage',
            'hasPreviousPage' => 'getHasPreviousPage',
            'isFirstPage' => 'getIsFirstPage',
            'isLastPage' => 'getIsLastPage',
            'list' => 'getList',
            'navigateFirstPage' => 'getNavigateFirstPage',
            'navigateLastPage' => 'getNavigateLastPage',
            'navigatePages' => 'getNavigatePages',
            'navigatepageNums' => 'getNavigatepageNums',
            'nextPage' => 'getNextPage',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'pages' => 'getPages',
            'prePage' => 'getPrePage',
            'size' => 'getSize',
            'startRow' => 'getStartRow',
            'total' => 'getTotal'
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
        $this->container['endRow'] = isset($data['endRow']) ? $data['endRow'] : null;
        $this->container['hasNextPage'] = isset($data['hasNextPage']) ? $data['hasNextPage'] : null;
        $this->container['hasPreviousPage'] = isset($data['hasPreviousPage']) ? $data['hasPreviousPage'] : null;
        $this->container['isFirstPage'] = isset($data['isFirstPage']) ? $data['isFirstPage'] : null;
        $this->container['isLastPage'] = isset($data['isLastPage']) ? $data['isLastPage'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['navigateFirstPage'] = isset($data['navigateFirstPage']) ? $data['navigateFirstPage'] : null;
        $this->container['navigateLastPage'] = isset($data['navigateLastPage']) ? $data['navigateLastPage'] : null;
        $this->container['navigatePages'] = isset($data['navigatePages']) ? $data['navigatePages'] : null;
        $this->container['navigatepageNums'] = isset($data['navigatepageNums']) ? $data['navigatepageNums'] : null;
        $this->container['nextPage'] = isset($data['nextPage']) ? $data['nextPage'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['prePage'] = isset($data['prePage']) ? $data['prePage'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['startRow'] = isset($data['startRow']) ? $data['startRow'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets endRow
    *  endRow
    *
    * @return int|null
    */
    public function getEndRow()
    {
        return $this->container['endRow'];
    }

    /**
    * Sets endRow
    *
    * @param int|null $endRow endRow
    *
    * @return $this
    */
    public function setEndRow($endRow)
    {
        $this->container['endRow'] = $endRow;
        return $this;
    }

    /**
    * Gets hasNextPage
    *  hasNextPage
    *
    * @return bool|null
    */
    public function getHasNextPage()
    {
        return $this->container['hasNextPage'];
    }

    /**
    * Sets hasNextPage
    *
    * @param bool|null $hasNextPage hasNextPage
    *
    * @return $this
    */
    public function setHasNextPage($hasNextPage)
    {
        $this->container['hasNextPage'] = $hasNextPage;
        return $this;
    }

    /**
    * Gets hasPreviousPage
    *  hasPreviousPage
    *
    * @return bool|null
    */
    public function getHasPreviousPage()
    {
        return $this->container['hasPreviousPage'];
    }

    /**
    * Sets hasPreviousPage
    *
    * @param bool|null $hasPreviousPage hasPreviousPage
    *
    * @return $this
    */
    public function setHasPreviousPage($hasPreviousPage)
    {
        $this->container['hasPreviousPage'] = $hasPreviousPage;
        return $this;
    }

    /**
    * Gets isFirstPage
    *  isFirstPage
    *
    * @return bool|null
    */
    public function getIsFirstPage()
    {
        return $this->container['isFirstPage'];
    }

    /**
    * Sets isFirstPage
    *
    * @param bool|null $isFirstPage isFirstPage
    *
    * @return $this
    */
    public function setIsFirstPage($isFirstPage)
    {
        $this->container['isFirstPage'] = $isFirstPage;
        return $this;
    }

    /**
    * Gets isLastPage
    *  isLastPage
    *
    * @return bool|null
    */
    public function getIsLastPage()
    {
        return $this->container['isLastPage'];
    }

    /**
    * Sets isLastPage
    *
    * @param bool|null $isLastPage isLastPage
    *
    * @return $this
    */
    public function setIsLastPage($isLastPage)
    {
        $this->container['isLastPage'] = $isLastPage;
        return $this;
    }

    /**
    * Gets list
    *  list
    *
    * @return object[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param object[]|null $list list
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets navigateFirstPage
    *  navigateFirstPage
    *
    * @return int|null
    */
    public function getNavigateFirstPage()
    {
        return $this->container['navigateFirstPage'];
    }

    /**
    * Sets navigateFirstPage
    *
    * @param int|null $navigateFirstPage navigateFirstPage
    *
    * @return $this
    */
    public function setNavigateFirstPage($navigateFirstPage)
    {
        $this->container['navigateFirstPage'] = $navigateFirstPage;
        return $this;
    }

    /**
    * Gets navigateLastPage
    *  navigateLastPage
    *
    * @return int|null
    */
    public function getNavigateLastPage()
    {
        return $this->container['navigateLastPage'];
    }

    /**
    * Sets navigateLastPage
    *
    * @param int|null $navigateLastPage navigateLastPage
    *
    * @return $this
    */
    public function setNavigateLastPage($navigateLastPage)
    {
        $this->container['navigateLastPage'] = $navigateLastPage;
        return $this;
    }

    /**
    * Gets navigatePages
    *  navigatePages
    *
    * @return int|null
    */
    public function getNavigatePages()
    {
        return $this->container['navigatePages'];
    }

    /**
    * Sets navigatePages
    *
    * @param int|null $navigatePages navigatePages
    *
    * @return $this
    */
    public function setNavigatePages($navigatePages)
    {
        $this->container['navigatePages'] = $navigatePages;
        return $this;
    }

    /**
    * Gets navigatepageNums
    *  navigatepageNums
    *
    * @return int[]|null
    */
    public function getNavigatepageNums()
    {
        return $this->container['navigatepageNums'];
    }

    /**
    * Sets navigatepageNums
    *
    * @param int[]|null $navigatepageNums navigatepageNums
    *
    * @return $this
    */
    public function setNavigatepageNums($navigatepageNums)
    {
        $this->container['navigatepageNums'] = $navigatepageNums;
        return $this;
    }

    /**
    * Gets nextPage
    *  nextPage
    *
    * @return int|null
    */
    public function getNextPage()
    {
        return $this->container['nextPage'];
    }

    /**
    * Sets nextPage
    *
    * @param int|null $nextPage nextPage
    *
    * @return $this
    */
    public function setNextPage($nextPage)
    {
        $this->container['nextPage'] = $nextPage;
        return $this;
    }

    /**
    * Gets pageNum
    *  pageNum
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum pageNum
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
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
    * Gets pages
    *  pages
    *
    * @return int|null
    */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
    * Sets pages
    *
    * @param int|null $pages pages
    *
    * @return $this
    */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;
        return $this;
    }

    /**
    * Gets prePage
    *  prePage
    *
    * @return int|null
    */
    public function getPrePage()
    {
        return $this->container['prePage'];
    }

    /**
    * Sets prePage
    *
    * @param int|null $prePage prePage
    *
    * @return $this
    */
    public function setPrePage($prePage)
    {
        $this->container['prePage'] = $prePage;
        return $this;
    }

    /**
    * Gets size
    *  size
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size size
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets startRow
    *  startRow
    *
    * @return int|null
    */
    public function getStartRow()
    {
        return $this->container['startRow'];
    }

    /**
    * Sets startRow
    *
    * @param int|null $startRow startRow
    *
    * @return $this
    */
    public function setStartRow($startRow)
    {
        $this->container['startRow'] = $startRow;
        return $this;
    }

    /**
    * Gets total
    *  total
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total total
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

