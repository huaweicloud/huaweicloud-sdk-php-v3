<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTestCasesByIssueInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTestCasesByIssueInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNo  页码
    * pageSize  每页数量
    * sortField  排序字段
    * sortType  排序类型
    * versionUri  版本uri
    * relateType  关联关系类型
    * keyWord  关键字
    * rankIds  用例等级ID集合
    * resultCodes  结果Code集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNo' => 'int',
            'pageSize' => 'int',
            'sortField' => 'string',
            'sortType' => 'string',
            'versionUri' => 'string',
            'relateType' => 'string',
            'keyWord' => 'string',
            'rankIds' => 'string[]',
            'resultCodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNo  页码
    * pageSize  每页数量
    * sortField  排序字段
    * sortType  排序类型
    * versionUri  版本uri
    * relateType  关联关系类型
    * keyWord  关键字
    * rankIds  用例等级ID集合
    * resultCodes  结果Code集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'sortField' => null,
        'sortType' => null,
        'versionUri' => null,
        'relateType' => null,
        'keyWord' => null,
        'rankIds' => null,
        'resultCodes' => null
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
    * pageNo  页码
    * pageSize  每页数量
    * sortField  排序字段
    * sortType  排序类型
    * versionUri  版本uri
    * relateType  关联关系类型
    * keyWord  关键字
    * rankIds  用例等级ID集合
    * resultCodes  结果Code集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'versionUri' => 'version_uri',
            'relateType' => 'relate_type',
            'keyWord' => 'key_word',
            'rankIds' => 'rank_ids',
            'resultCodes' => 'result_codes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNo  页码
    * pageSize  每页数量
    * sortField  排序字段
    * sortType  排序类型
    * versionUri  版本uri
    * relateType  关联关系类型
    * keyWord  关键字
    * rankIds  用例等级ID集合
    * resultCodes  结果Code集合
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'versionUri' => 'setVersionUri',
            'relateType' => 'setRelateType',
            'keyWord' => 'setKeyWord',
            'rankIds' => 'setRankIds',
            'resultCodes' => 'setResultCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNo  页码
    * pageSize  每页数量
    * sortField  排序字段
    * sortType  排序类型
    * versionUri  版本uri
    * relateType  关联关系类型
    * keyWord  关键字
    * rankIds  用例等级ID集合
    * resultCodes  结果Code集合
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'versionUri' => 'getVersionUri',
            'relateType' => 'getRelateType',
            'keyWord' => 'getKeyWord',
            'rankIds' => 'getRankIds',
            'resultCodes' => 'getResultCodes'
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
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['relateType'] = isset($data['relateType']) ? $data['relateType'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['rankIds'] = isset($data['rankIds']) ? $data['rankIds'] : null;
        $this->container['resultCodes'] = isset($data['resultCodes']) ? $data['resultCodes'] : null;
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
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量
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
    * @param int|null $pageSize 每页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortType
    *  排序类型
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序类型
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本uri
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets relateType
    *  关联关系类型
    *
    * @return string|null
    */
    public function getRelateType()
    {
        return $this->container['relateType'];
    }

    /**
    * Sets relateType
    *
    * @param string|null $relateType 关联关系类型
    *
    * @return $this
    */
    public function setRelateType($relateType)
    {
        $this->container['relateType'] = $relateType;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets rankIds
    *  用例等级ID集合
    *
    * @return string[]|null
    */
    public function getRankIds()
    {
        return $this->container['rankIds'];
    }

    /**
    * Sets rankIds
    *
    * @param string[]|null $rankIds 用例等级ID集合
    *
    * @return $this
    */
    public function setRankIds($rankIds)
    {
        $this->container['rankIds'] = $rankIds;
        return $this;
    }

    /**
    * Gets resultCodes
    *  结果Code集合
    *
    * @return string[]|null
    */
    public function getResultCodes()
    {
        return $this->container['resultCodes'];
    }

    /**
    * Sets resultCodes
    *
    * @param string[]|null $resultCodes 结果Code集合
    *
    * @return $this
    */
    public function setResultCodes($resultCodes)
    {
        $this->container['resultCodes'] = $resultCodes;
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

