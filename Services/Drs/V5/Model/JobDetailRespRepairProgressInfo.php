<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobDetailRespRepairProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobDetailResp_repair_progress_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    * progress  修复进度，百分比。
    * errorMsg  错误信息。
    * count  总数。
    * repairProgressDetails  repairProgressDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'progress' => 'string',
            'errorMsg' => 'string',
            'count' => 'int',
            'repairProgressDetails' => '\HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfoRepairProgressDetails'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    * progress  修复进度，百分比。
    * errorMsg  错误信息。
    * count  总数。
    * repairProgressDetails  repairProgressDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'progress' => null,
        'errorMsg' => null,
        'count' => 'int32',
        'repairProgressDetails' => null
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
    * status  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    * progress  修复进度，百分比。
    * errorMsg  错误信息。
    * count  总数。
    * repairProgressDetails  repairProgressDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'progress' => 'progress',
            'errorMsg' => 'error_msg',
            'count' => 'count',
            'repairProgressDetails' => 'repair_progress_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    * progress  修复进度，百分比。
    * errorMsg  错误信息。
    * count  总数。
    * repairProgressDetails  repairProgressDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'errorMsg' => 'setErrorMsg',
            'count' => 'setCount',
            'repairProgressDetails' => 'setRepairProgressDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    * progress  修复进度，百分比。
    * errorMsg  错误信息。
    * count  总数。
    * repairProgressDetails  repairProgressDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'errorMsg' => 'getErrorMsg',
            'count' => 'getCount',
            'repairProgressDetails' => 'getRepairProgressDetails'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['repairProgressDetails'] = isset($data['repairProgressDetails']) ? $data['repairProgressDetails'] : null;
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
    * Gets status
    *  修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 修复状态。 取值：\"FAILED\", \"SUCCEEDED\", \"FINISHED\", \"SUCCESS\"
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progress
    *  修复进度，百分比。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 修复进度，百分比。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets count
    *  总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets repairProgressDetails
    *  repairProgressDetails
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfoRepairProgressDetails|null
    */
    public function getRepairProgressDetails()
    {
        return $this->container['repairProgressDetails'];
    }

    /**
    * Sets repairProgressDetails
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfoRepairProgressDetails|null $repairProgressDetails repairProgressDetails
    *
    * @return $this
    */
    public function setRepairProgressDetails($repairProgressDetails)
    {
        $this->container['repairProgressDetails'] = $repairProgressDetails;
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

