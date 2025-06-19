<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * octopusJobName  临时任务名称
    * actualBuildNumber  实际构建次数
    * dailyBuildNumber  构建每日编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'octopusJobName' => 'string',
            'actualBuildNumber' => 'string',
            'dailyBuildNumber' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * octopusJobName  临时任务名称
    * actualBuildNumber  实际构建次数
    * dailyBuildNumber  构建每日编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'octopusJobName' => null,
        'actualBuildNumber' => null,
        'dailyBuildNumber' => null
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
    * octopusJobName  临时任务名称
    * actualBuildNumber  实际构建次数
    * dailyBuildNumber  构建每日编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'octopusJobName' => 'octopus_job_name',
            'actualBuildNumber' => 'actual_build_number',
            'dailyBuildNumber' => 'daily_build_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * octopusJobName  临时任务名称
    * actualBuildNumber  实际构建次数
    * dailyBuildNumber  构建每日编号
    *
    * @var string[]
    */
    protected static $setters = [
            'octopusJobName' => 'setOctopusJobName',
            'actualBuildNumber' => 'setActualBuildNumber',
            'dailyBuildNumber' => 'setDailyBuildNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * octopusJobName  临时任务名称
    * actualBuildNumber  实际构建次数
    * dailyBuildNumber  构建每日编号
    *
    * @var string[]
    */
    protected static $getters = [
            'octopusJobName' => 'getOctopusJobName',
            'actualBuildNumber' => 'getActualBuildNumber',
            'dailyBuildNumber' => 'getDailyBuildNumber'
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
        $this->container['octopusJobName'] = isset($data['octopusJobName']) ? $data['octopusJobName'] : null;
        $this->container['actualBuildNumber'] = isset($data['actualBuildNumber']) ? $data['actualBuildNumber'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
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
    * Gets octopusJobName
    *  临时任务名称
    *
    * @return string|null
    */
    public function getOctopusJobName()
    {
        return $this->container['octopusJobName'];
    }

    /**
    * Sets octopusJobName
    *
    * @param string|null $octopusJobName 临时任务名称
    *
    * @return $this
    */
    public function setOctopusJobName($octopusJobName)
    {
        $this->container['octopusJobName'] = $octopusJobName;
        return $this;
    }

    /**
    * Gets actualBuildNumber
    *  实际构建次数
    *
    * @return string|null
    */
    public function getActualBuildNumber()
    {
        return $this->container['actualBuildNumber'];
    }

    /**
    * Sets actualBuildNumber
    *
    * @param string|null $actualBuildNumber 实际构建次数
    *
    * @return $this
    */
    public function setActualBuildNumber($actualBuildNumber)
    {
        $this->container['actualBuildNumber'] = $actualBuildNumber;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建每日编号
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建每日编号
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
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

