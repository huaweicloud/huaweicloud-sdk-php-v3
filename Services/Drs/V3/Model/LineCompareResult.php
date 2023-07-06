<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineCompareResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineCompareResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskId  行对比任务的id。
    * lineCompareOverview  行对比结果概览。
    * lineCompareOverviewCount  行对比结果概览总数。
    * lineCompareDetails  行对比结果详情。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskId' => 'string',
            'lineCompareOverview' => '\HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultOverview[]',
            'lineCompareOverviewCount' => 'int',
            'lineCompareDetails' => '\HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultDetails[]',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskId  行对比任务的id。
    * lineCompareOverview  行对比结果概览。
    * lineCompareOverviewCount  行对比结果概览总数。
    * lineCompareDetails  行对比结果详情。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskId' => null,
        'lineCompareOverview' => null,
        'lineCompareOverviewCount' => 'int32',
        'lineCompareDetails' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * compareTaskId  行对比任务的id。
    * lineCompareOverview  行对比结果概览。
    * lineCompareOverviewCount  行对比结果概览总数。
    * lineCompareDetails  行对比结果详情。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskId' => 'compare_task_id',
            'lineCompareOverview' => 'line_compare_overview',
            'lineCompareOverviewCount' => 'line_compare_overview_count',
            'lineCompareDetails' => 'line_compare_details',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskId  行对比任务的id。
    * lineCompareOverview  行对比结果概览。
    * lineCompareOverviewCount  行对比结果概览总数。
    * lineCompareDetails  行对比结果详情。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskId' => 'setCompareTaskId',
            'lineCompareOverview' => 'setLineCompareOverview',
            'lineCompareOverviewCount' => 'setLineCompareOverviewCount',
            'lineCompareDetails' => 'setLineCompareDetails',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskId  行对比任务的id。
    * lineCompareOverview  行对比结果概览。
    * lineCompareOverviewCount  行对比结果概览总数。
    * lineCompareDetails  行对比结果详情。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskId' => 'getCompareTaskId',
            'lineCompareOverview' => 'getLineCompareOverview',
            'lineCompareOverviewCount' => 'getLineCompareOverviewCount',
            'lineCompareDetails' => 'getLineCompareDetails',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['compareTaskId'] = isset($data['compareTaskId']) ? $data['compareTaskId'] : null;
        $this->container['lineCompareOverview'] = isset($data['lineCompareOverview']) ? $data['lineCompareOverview'] : null;
        $this->container['lineCompareOverviewCount'] = isset($data['lineCompareOverviewCount']) ? $data['lineCompareOverviewCount'] : null;
        $this->container['lineCompareDetails'] = isset($data['lineCompareDetails']) ? $data['lineCompareDetails'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets compareTaskId
    *  行对比任务的id。
    *
    * @return string|null
    */
    public function getCompareTaskId()
    {
        return $this->container['compareTaskId'];
    }

    /**
    * Sets compareTaskId
    *
    * @param string|null $compareTaskId 行对比任务的id。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets lineCompareOverview
    *  行对比结果概览。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultOverview[]|null
    */
    public function getLineCompareOverview()
    {
        return $this->container['lineCompareOverview'];
    }

    /**
    * Sets lineCompareOverview
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultOverview[]|null $lineCompareOverview 行对比结果概览。
    *
    * @return $this
    */
    public function setLineCompareOverview($lineCompareOverview)
    {
        $this->container['lineCompareOverview'] = $lineCompareOverview;
        return $this;
    }

    /**
    * Gets lineCompareOverviewCount
    *  行对比结果概览总数。
    *
    * @return int|null
    */
    public function getLineCompareOverviewCount()
    {
        return $this->container['lineCompareOverviewCount'];
    }

    /**
    * Sets lineCompareOverviewCount
    *
    * @param int|null $lineCompareOverviewCount 行对比结果概览总数。
    *
    * @return $this
    */
    public function setLineCompareOverviewCount($lineCompareOverviewCount)
    {
        $this->container['lineCompareOverviewCount'] = $lineCompareOverviewCount;
        return $this;
    }

    /**
    * Gets lineCompareDetails
    *  行对比结果详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultDetails[]|null
    */
    public function getLineCompareDetails()
    {
        return $this->container['lineCompareDetails'];
    }

    /**
    * Sets lineCompareDetails
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResultDetails[]|null $lineCompareDetails 行对比结果详情。
    *
    * @return $this
    */
    public function setLineCompareDetails($lineCompareDetails)
    {
        $this->container['lineCompareDetails'] = $lineCompareDetails;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

