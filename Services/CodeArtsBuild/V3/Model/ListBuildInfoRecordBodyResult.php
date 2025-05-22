<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBuildInfoRecordBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBuildInfoRecordBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * healthScore  健康度
    * pageIndex  分页页数
    * totalPage  总页数
    * totalRecord  总条数
    * jobBuildStates  构建历史详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'healthScore' => 'string',
            'pageIndex' => 'string',
            'totalPage' => 'string',
            'totalRecord' => 'string',
            'jobBuildStates' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * healthScore  健康度
    * pageIndex  分页页数
    * totalPage  总页数
    * totalRecord  总条数
    * jobBuildStates  构建历史详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'healthScore' => null,
        'pageIndex' => null,
        'totalPage' => null,
        'totalRecord' => null,
        'jobBuildStates' => null
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
    * healthScore  健康度
    * pageIndex  分页页数
    * totalPage  总页数
    * totalRecord  总条数
    * jobBuildStates  构建历史详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'healthScore' => 'health_score',
            'pageIndex' => 'page_index',
            'totalPage' => 'total_page',
            'totalRecord' => 'total_record',
            'jobBuildStates' => 'job_build_states'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * healthScore  健康度
    * pageIndex  分页页数
    * totalPage  总页数
    * totalRecord  总条数
    * jobBuildStates  构建历史详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'healthScore' => 'setHealthScore',
            'pageIndex' => 'setPageIndex',
            'totalPage' => 'setTotalPage',
            'totalRecord' => 'setTotalRecord',
            'jobBuildStates' => 'setJobBuildStates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * healthScore  健康度
    * pageIndex  分页页数
    * totalPage  总页数
    * totalRecord  总条数
    * jobBuildStates  构建历史详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'healthScore' => 'getHealthScore',
            'pageIndex' => 'getPageIndex',
            'totalPage' => 'getTotalPage',
            'totalRecord' => 'getTotalRecord',
            'jobBuildStates' => 'getJobBuildStates'
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
        $this->container['healthScore'] = isset($data['healthScore']) ? $data['healthScore'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalRecord'] = isset($data['totalRecord']) ? $data['totalRecord'] : null;
        $this->container['jobBuildStates'] = isset($data['jobBuildStates']) ? $data['jobBuildStates'] : null;
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
    * Gets healthScore
    *  健康度
    *
    * @return string|null
    */
    public function getHealthScore()
    {
        return $this->container['healthScore'];
    }

    /**
    * Sets healthScore
    *
    * @param string|null $healthScore 健康度
    *
    * @return $this
    */
    public function setHealthScore($healthScore)
    {
        $this->container['healthScore'] = $healthScore;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页页数
    *
    * @return string|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param string|null $pageIndex 分页页数
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数
    *
    * @return string|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param string|null $totalPage 总页数
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalRecord
    *  总条数
    *
    * @return string|null
    */
    public function getTotalRecord()
    {
        return $this->container['totalRecord'];
    }

    /**
    * Sets totalRecord
    *
    * @param string|null $totalRecord 总条数
    *
    * @return $this
    */
    public function setTotalRecord($totalRecord)
    {
        $this->container['totalRecord'] = $totalRecord;
        return $this;
    }

    /**
    * Gets jobBuildStates
    *  构建历史详情列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecord[]|null
    */
    public function getJobBuildStates()
    {
        return $this->container['jobBuildStates'];
    }

    /**
    * Sets jobBuildStates
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecord[]|null $jobBuildStates 构建历史详情列表
    *
    * @return $this
    */
    public function setJobBuildStates($jobBuildStates)
    {
        $this->container['jobBuildStates'] = $jobBuildStates;
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

