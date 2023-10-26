<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubmissionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubmissionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * submissions  作业运行信息，详见submissions参数说明。
    * total  查询该作业总的历史记录数。
    * pageNo  查询作业记录时，分页数。
    * pageSize  分页查询，每页返回的记录数。默认值：10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'submissions' => '\HuaweiCloud\SDK\Cdm\V1\Model\Submission[]',
            'total' => 'int',
            'pageNo' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * submissions  作业运行信息，详见submissions参数说明。
    * total  查询该作业总的历史记录数。
    * pageNo  查询作业记录时，分页数。
    * pageSize  分页查询，每页返回的记录数。默认值：10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'submissions' => null,
        'total' => 'int32',
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
    * submissions  作业运行信息，详见submissions参数说明。
    * total  查询该作业总的历史记录数。
    * pageNo  查询作业记录时，分页数。
    * pageSize  分页查询，每页返回的记录数。默认值：10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'submissions' => 'submissions',
            'total' => 'total',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * submissions  作业运行信息，详见submissions参数说明。
    * total  查询该作业总的历史记录数。
    * pageNo  查询作业记录时，分页数。
    * pageSize  分页查询，每页返回的记录数。默认值：10。
    *
    * @var string[]
    */
    protected static $setters = [
            'submissions' => 'setSubmissions',
            'total' => 'setTotal',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * submissions  作业运行信息，详见submissions参数说明。
    * total  查询该作业总的历史记录数。
    * pageNo  查询作业记录时，分页数。
    * pageSize  分页查询，每页返回的记录数。默认值：10。
    *
    * @var string[]
    */
    protected static $getters = [
            'submissions' => 'getSubmissions',
            'total' => 'getTotal',
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
        $this->container['submissions'] = isset($data['submissions']) ? $data['submissions'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets submissions
    *  作业运行信息，详见submissions参数说明。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Submission[]|null
    */
    public function getSubmissions()
    {
        return $this->container['submissions'];
    }

    /**
    * Sets submissions
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Submission[]|null $submissions 作业运行信息，详见submissions参数说明。
    *
    * @return $this
    */
    public function setSubmissions($submissions)
    {
        $this->container['submissions'] = $submissions;
        return $this;
    }

    /**
    * Gets total
    *  查询该作业总的历史记录数。
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
    * @param int|null $total 查询该作业总的历史记录数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets pageNo
    *  查询作业记录时，分页数。
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
    * @param int|null $pageNo 查询作业记录时，分页数。
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
    *  分页查询，每页返回的记录数。默认值：10。
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
    * @param int|null $pageSize 分页查询，每页返回的记录数。默认值：10。
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

