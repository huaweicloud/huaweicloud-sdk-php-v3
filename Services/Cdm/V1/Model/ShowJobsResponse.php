<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  作业数,查询单个作业时为0
    * jobs  作业列表，请参见jobs参数说明
    * pageNo  返回指定页号的作业
    * pageSize  每页作业数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'jobs' => '\HuaweiCloud\SDK\Cdm\V1\Model\Job[]',
            'pageNo' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  作业数,查询单个作业时为0
    * jobs  作业列表，请参见jobs参数说明
    * pageNo  返回指定页号的作业
    * pageSize  每页作业数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'jobs' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32'
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
    * total  作业数,查询单个作业时为0
    * jobs  作业列表，请参见jobs参数说明
    * pageNo  返回指定页号的作业
    * pageSize  每页作业数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'jobs' => 'jobs',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  作业数,查询单个作业时为0
    * jobs  作业列表，请参见jobs参数说明
    * pageNo  返回指定页号的作业
    * pageSize  每页作业数
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'jobs' => 'setJobs',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  作业数,查询单个作业时为0
    * jobs  作业列表，请参见jobs参数说明
    * pageNo  返回指定页号的作业
    * pageSize  每页作业数
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'jobs' => 'getJobs',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
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
    * Gets total
    *  作业数,查询单个作业时为0
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
    * @param int|null $total 作业数,查询单个作业时为0
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets jobs
    *  作业列表，请参见jobs参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Job[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Job[]|null $jobs 作业列表，请参见jobs参数说明
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets pageNo
    *  返回指定页号的作业
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
    * @param int|null $pageNo 返回指定页号的作业
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
    *  每页作业数
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
    * @param int|null $pageSize 每页作业数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

