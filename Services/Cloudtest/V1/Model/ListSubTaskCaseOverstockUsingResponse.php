<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubTaskCaseOverstockUsingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubTaskCaseOverstockUsingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endRow  当前页面最后一个元素在数据库中的行号
    * hasNextPage  是否有下一页
    * hasPreviousPage  是否有前一页
    * isFirstPage  是否为第一页
    * isLastPage  是否为最后一页
    * list  返回结果
    * navigateFirstPage  导航条上的第一页
    * navigateLastPage  导航条上的最后一页
    * navigatePages  导航页码数
    * navigatepageNums  所有导航页号
    * nextPage  下一页
    * pageNum  当前页
    * pageSize  每页的数量
    * pages  总页数
    * prePage  前一页
    * size  当前页的数量
    * startRow  当前页面第一个元素在数据库中的行号
    * total  总条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endRow' => 'int',
            'hasNextPage' => 'bool',
            'hasPreviousPage' => 'bool',
            'isFirstPage' => 'bool',
            'isLastPage' => 'bool',
            'list' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\SubtaskcaseOverstockDto[]',
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
    * endRow  当前页面最后一个元素在数据库中的行号
    * hasNextPage  是否有下一页
    * hasPreviousPage  是否有前一页
    * isFirstPage  是否为第一页
    * isLastPage  是否为最后一页
    * list  返回结果
    * navigateFirstPage  导航条上的第一页
    * navigateLastPage  导航条上的最后一页
    * navigatePages  导航页码数
    * navigatepageNums  所有导航页号
    * nextPage  下一页
    * pageNum  当前页
    * pageSize  每页的数量
    * pages  总页数
    * prePage  前一页
    * size  当前页的数量
    * startRow  当前页面第一个元素在数据库中的行号
    * total  总条数
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
    * endRow  当前页面最后一个元素在数据库中的行号
    * hasNextPage  是否有下一页
    * hasPreviousPage  是否有前一页
    * isFirstPage  是否为第一页
    * isLastPage  是否为最后一页
    * list  返回结果
    * navigateFirstPage  导航条上的第一页
    * navigateLastPage  导航条上的最后一页
    * navigatePages  导航页码数
    * navigatepageNums  所有导航页号
    * nextPage  下一页
    * pageNum  当前页
    * pageSize  每页的数量
    * pages  总页数
    * prePage  前一页
    * size  当前页的数量
    * startRow  当前页面第一个元素在数据库中的行号
    * total  总条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endRow' => 'end_row',
            'hasNextPage' => 'has_next_page',
            'hasPreviousPage' => 'has_previous_page',
            'isFirstPage' => 'is_first_page',
            'isLastPage' => 'is_last_page',
            'list' => 'list',
            'navigateFirstPage' => 'navigate_first_page',
            'navigateLastPage' => 'navigate_last_page',
            'navigatePages' => 'navigate_pages',
            'navigatepageNums' => 'navigatepage_nums',
            'nextPage' => 'next_page',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'pages' => 'pages',
            'prePage' => 'pre_page',
            'size' => 'size',
            'startRow' => 'start_row',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endRow  当前页面最后一个元素在数据库中的行号
    * hasNextPage  是否有下一页
    * hasPreviousPage  是否有前一页
    * isFirstPage  是否为第一页
    * isLastPage  是否为最后一页
    * list  返回结果
    * navigateFirstPage  导航条上的第一页
    * navigateLastPage  导航条上的最后一页
    * navigatePages  导航页码数
    * navigatepageNums  所有导航页号
    * nextPage  下一页
    * pageNum  当前页
    * pageSize  每页的数量
    * pages  总页数
    * prePage  前一页
    * size  当前页的数量
    * startRow  当前页面第一个元素在数据库中的行号
    * total  总条数
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
    * endRow  当前页面最后一个元素在数据库中的行号
    * hasNextPage  是否有下一页
    * hasPreviousPage  是否有前一页
    * isFirstPage  是否为第一页
    * isLastPage  是否为最后一页
    * list  返回结果
    * navigateFirstPage  导航条上的第一页
    * navigateLastPage  导航条上的最后一页
    * navigatePages  导航页码数
    * navigatepageNums  所有导航页号
    * nextPage  下一页
    * pageNum  当前页
    * pageSize  每页的数量
    * pages  总页数
    * prePage  前一页
    * size  当前页的数量
    * startRow  当前页面第一个元素在数据库中的行号
    * total  总条数
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
    *  当前页面最后一个元素在数据库中的行号
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
    * @param int|null $endRow 当前页面最后一个元素在数据库中的行号
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
    *  是否有下一页
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
    * @param bool|null $hasNextPage 是否有下一页
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
    *  是否有前一页
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
    * @param bool|null $hasPreviousPage 是否有前一页
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
    *  是否为第一页
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
    * @param bool|null $isFirstPage 是否为第一页
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
    *  是否为最后一页
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
    * @param bool|null $isLastPage 是否为最后一页
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
    *  返回结果
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\SubtaskcaseOverstockDto[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\SubtaskcaseOverstockDto[]|null $list 返回结果
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
    *  导航条上的第一页
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
    * @param int|null $navigateFirstPage 导航条上的第一页
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
    *  导航条上的最后一页
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
    * @param int|null $navigateLastPage 导航条上的最后一页
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
    *  导航页码数
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
    * @param int|null $navigatePages 导航页码数
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
    *  所有导航页号
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
    * @param int[]|null $navigatepageNums 所有导航页号
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
    *  下一页
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
    * @param int|null $nextPage 下一页
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
    *  当前页
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
    * @param int|null $pageNum 当前页
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
    *  每页的数量
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
    * @param int|null $pageSize 每页的数量
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
    *  总页数
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
    * @param int|null $pages 总页数
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
    *  前一页
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
    * @param int|null $prePage 前一页
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
    *  当前页的数量
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
    * @param int|null $size 当前页的数量
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
    *  当前页面第一个元素在数据库中的行号
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
    * @param int|null $startRow 当前页面第一个元素在数据库中的行号
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
    *  总条数
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
    * @param int|null $total 总条数
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

