<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobUpdateRecordListVoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobUpdateRecordListVo_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobUpdateRecords  job_update_records
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobUpdateRecords' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobUpdateRecordListVoResultJobUpdateRecords[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobUpdateRecords  job_update_records
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobUpdateRecords' => null,
        'total' => null
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
    * jobUpdateRecords  job_update_records
    * total  总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobUpdateRecords' => 'job_update_records',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobUpdateRecords  job_update_records
    * total  总数
    *
    * @var string[]
    */
    protected static $setters = [
            'jobUpdateRecords' => 'setJobUpdateRecords',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobUpdateRecords  job_update_records
    * total  总数
    *
    * @var string[]
    */
    protected static $getters = [
            'jobUpdateRecords' => 'getJobUpdateRecords',
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
        $this->container['jobUpdateRecords'] = isset($data['jobUpdateRecords']) ? $data['jobUpdateRecords'] : null;
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
    * Gets jobUpdateRecords
    *  job_update_records
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobUpdateRecordListVoResultJobUpdateRecords[]|null
    */
    public function getJobUpdateRecords()
    {
        return $this->container['jobUpdateRecords'];
    }

    /**
    * Sets jobUpdateRecords
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobUpdateRecordListVoResultJobUpdateRecords[]|null $jobUpdateRecords job_update_records
    *
    * @return $this
    */
    public function setJobUpdateRecords($jobUpdateRecords)
    {
        $this->container['jobUpdateRecords'] = $jobUpdateRecords;
        return $this;
    }

    /**
    * Gets total
    *  总数
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
    * @param int|null $total 总数
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

