<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * avgSuccessRatio  构建成功率
    * buildNo  构建总时长
    * jobTotal  任务总数
    * versionTotal  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'avgSuccessRatio' => 'int',
            'buildNo' => 'int',
            'jobTotal' => 'int',
            'versionTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * avgSuccessRatio  构建成功率
    * buildNo  构建总时长
    * jobTotal  任务总数
    * versionTotal  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'avgSuccessRatio' => null,
        'buildNo' => null,
        'jobTotal' => null,
        'versionTotal' => null
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
    * avgSuccessRatio  构建成功率
    * buildNo  构建总时长
    * jobTotal  任务总数
    * versionTotal  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'avgSuccessRatio' => 'avg_success_ratio',
            'buildNo' => 'build_no',
            'jobTotal' => 'job_total',
            'versionTotal' => 'version_total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * avgSuccessRatio  构建成功率
    * buildNo  构建总时长
    * jobTotal  任务总数
    * versionTotal  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'avgSuccessRatio' => 'setAvgSuccessRatio',
            'buildNo' => 'setBuildNo',
            'jobTotal' => 'setJobTotal',
            'versionTotal' => 'setVersionTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * avgSuccessRatio  构建成功率
    * buildNo  构建总时长
    * jobTotal  任务总数
    * versionTotal  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'avgSuccessRatio' => 'getAvgSuccessRatio',
            'buildNo' => 'getBuildNo',
            'jobTotal' => 'getJobTotal',
            'versionTotal' => 'getVersionTotal'
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
        $this->container['avgSuccessRatio'] = isset($data['avgSuccessRatio']) ? $data['avgSuccessRatio'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['jobTotal'] = isset($data['jobTotal']) ? $data['jobTotal'] : null;
        $this->container['versionTotal'] = isset($data['versionTotal']) ? $data['versionTotal'] : null;
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
    * Gets avgSuccessRatio
    *  构建成功率
    *
    * @return int|null
    */
    public function getAvgSuccessRatio()
    {
        return $this->container['avgSuccessRatio'];
    }

    /**
    * Sets avgSuccessRatio
    *
    * @param int|null $avgSuccessRatio 构建成功率
    *
    * @return $this
    */
    public function setAvgSuccessRatio($avgSuccessRatio)
    {
        $this->container['avgSuccessRatio'] = $avgSuccessRatio;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建总时长
    *
    * @return int|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int|null $buildNo 构建总时长
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets jobTotal
    *  任务总数
    *
    * @return int|null
    */
    public function getJobTotal()
    {
        return $this->container['jobTotal'];
    }

    /**
    * Sets jobTotal
    *
    * @param int|null $jobTotal 任务总数
    *
    * @return $this
    */
    public function setJobTotal($jobTotal)
    {
        $this->container['jobTotal'] = $jobTotal;
        return $this;
    }

    /**
    * Gets versionTotal
    *  版本
    *
    * @return string|null
    */
    public function getVersionTotal()
    {
        return $this->container['versionTotal'];
    }

    /**
    * Sets versionTotal
    *
    * @param string|null $versionTotal 版本
    *
    * @return $this
    */
    public function setVersionTotal($versionTotal)
    {
        $this->container['versionTotal'] = $versionTotal;
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

