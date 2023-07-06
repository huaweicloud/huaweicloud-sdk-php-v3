<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCompareResultReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCompareResultReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareId  请求查询结果的对象级对比任务id。
    * lineCompareId  请求查询结果的行对比任务id。
    * contentCompareId  请求查询结果的内容对比任务id。
    * currentPage  分页查询的当前页码，对查询对比任务的结果生效。
    * perPage  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'objectLevelCompareId' => 'string',
            'lineCompareId' => 'string',
            'contentCompareId' => 'string',
            'currentPage' => 'int',
            'perPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareId  请求查询结果的对象级对比任务id。
    * lineCompareId  请求查询结果的行对比任务id。
    * contentCompareId  请求查询结果的内容对比任务id。
    * currentPage  分页查询的当前页码，对查询对比任务的结果生效。
    * perPage  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'objectLevelCompareId' => null,
        'lineCompareId' => null,
        'contentCompareId' => null,
        'currentPage' => 'int32',
        'perPage' => 'int32'
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
    * jobId  任务id。
    * objectLevelCompareId  请求查询结果的对象级对比任务id。
    * lineCompareId  请求查询结果的行对比任务id。
    * contentCompareId  请求查询结果的内容对比任务id。
    * currentPage  分页查询的当前页码，对查询对比任务的结果生效。
    * perPage  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'objectLevelCompareId' => 'object_level_compare_id',
            'lineCompareId' => 'line_compare_id',
            'contentCompareId' => 'content_compare_id',
            'currentPage' => 'current_page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id。
    * objectLevelCompareId  请求查询结果的对象级对比任务id。
    * lineCompareId  请求查询结果的行对比任务id。
    * contentCompareId  请求查询结果的内容对比任务id。
    * currentPage  分页查询的当前页码，对查询对比任务的结果生效。
    * perPage  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'objectLevelCompareId' => 'setObjectLevelCompareId',
            'lineCompareId' => 'setLineCompareId',
            'contentCompareId' => 'setContentCompareId',
            'currentPage' => 'setCurrentPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id。
    * objectLevelCompareId  请求查询结果的对象级对比任务id。
    * lineCompareId  请求查询结果的行对比任务id。
    * contentCompareId  请求查询结果的内容对比任务id。
    * currentPage  分页查询的当前页码，对查询对比任务的结果生效。
    * perPage  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'objectLevelCompareId' => 'getObjectLevelCompareId',
            'lineCompareId' => 'getLineCompareId',
            'contentCompareId' => 'getContentCompareId',
            'currentPage' => 'getCurrentPage',
            'perPage' => 'getPerPage'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['objectLevelCompareId'] = isset($data['objectLevelCompareId']) ? $data['objectLevelCompareId'] : null;
        $this->container['lineCompareId'] = isset($data['lineCompareId']) ? $data['lineCompareId'] : null;
        $this->container['contentCompareId'] = isset($data['contentCompareId']) ? $data['contentCompareId'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['currentPage'] === null) {
            $invalidProperties[] = "'currentPage' can't be null";
        }
        if ($this->container['perPage'] === null) {
            $invalidProperties[] = "'perPage' can't be null";
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
    * Gets jobId
    *  任务id。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets objectLevelCompareId
    *  请求查询结果的对象级对比任务id。
    *
    * @return string|null
    */
    public function getObjectLevelCompareId()
    {
        return $this->container['objectLevelCompareId'];
    }

    /**
    * Sets objectLevelCompareId
    *
    * @param string|null $objectLevelCompareId 请求查询结果的对象级对比任务id。
    *
    * @return $this
    */
    public function setObjectLevelCompareId($objectLevelCompareId)
    {
        $this->container['objectLevelCompareId'] = $objectLevelCompareId;
        return $this;
    }

    /**
    * Gets lineCompareId
    *  请求查询结果的行对比任务id。
    *
    * @return string|null
    */
    public function getLineCompareId()
    {
        return $this->container['lineCompareId'];
    }

    /**
    * Sets lineCompareId
    *
    * @param string|null $lineCompareId 请求查询结果的行对比任务id。
    *
    * @return $this
    */
    public function setLineCompareId($lineCompareId)
    {
        $this->container['lineCompareId'] = $lineCompareId;
        return $this;
    }

    /**
    * Gets contentCompareId
    *  请求查询结果的内容对比任务id。
    *
    * @return string|null
    */
    public function getContentCompareId()
    {
        return $this->container['contentCompareId'];
    }

    /**
    * Sets contentCompareId
    *
    * @param string|null $contentCompareId 请求查询结果的内容对比任务id。
    *
    * @return $this
    */
    public function setContentCompareId($contentCompareId)
    {
        $this->container['contentCompareId'] = $contentCompareId;
        return $this;
    }

    /**
    * Gets currentPage
    *  分页查询的当前页码，对查询对比任务的结果生效。
    *
    * @return int
    */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
    * Sets currentPage
    *
    * @param int $currentPage 分页查询的当前页码，对查询对比任务的结果生效。
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
        return $this;
    }

    /**
    * Gets perPage
    *  分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @return int
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int $perPage 分页查询的每页个数，对查询对比任务的结果生效。
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
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

