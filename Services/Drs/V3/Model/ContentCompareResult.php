<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContentCompareResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContentCompareResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskId  内容对比的任务id。
    * contentCompareOverview  内容对比结果概览。
    * contentCompareOverviewCount  内容对比结果概览总数。
    * contentCompareDetails  内容对比结果详情。
    * contentCompareDiffs  内容对比结果差异。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskId' => 'string',
            'contentCompareOverview' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultOverview[]',
            'contentCompareOverviewCount' => 'int',
            'contentCompareDetails' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDetails[]',
            'contentCompareDiffs' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDiffs[]',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskId  内容对比的任务id。
    * contentCompareOverview  内容对比结果概览。
    * contentCompareOverviewCount  内容对比结果概览总数。
    * contentCompareDetails  内容对比结果详情。
    * contentCompareDiffs  内容对比结果差异。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskId' => null,
        'contentCompareOverview' => null,
        'contentCompareOverviewCount' => 'int32',
        'contentCompareDetails' => null,
        'contentCompareDiffs' => null,
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
    * compareTaskId  内容对比的任务id。
    * contentCompareOverview  内容对比结果概览。
    * contentCompareOverviewCount  内容对比结果概览总数。
    * contentCompareDetails  内容对比结果详情。
    * contentCompareDiffs  内容对比结果差异。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskId' => 'compare_task_id',
            'contentCompareOverview' => 'content_compare_overview',
            'contentCompareOverviewCount' => 'content_compare_overview_count',
            'contentCompareDetails' => 'content_compare_details',
            'contentCompareDiffs' => 'content_compare_diffs',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskId  内容对比的任务id。
    * contentCompareOverview  内容对比结果概览。
    * contentCompareOverviewCount  内容对比结果概览总数。
    * contentCompareDetails  内容对比结果详情。
    * contentCompareDiffs  内容对比结果差异。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskId' => 'setCompareTaskId',
            'contentCompareOverview' => 'setContentCompareOverview',
            'contentCompareOverviewCount' => 'setContentCompareOverviewCount',
            'contentCompareDetails' => 'setContentCompareDetails',
            'contentCompareDiffs' => 'setContentCompareDiffs',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskId  内容对比的任务id。
    * contentCompareOverview  内容对比结果概览。
    * contentCompareOverviewCount  内容对比结果概览总数。
    * contentCompareDetails  内容对比结果详情。
    * contentCompareDiffs  内容对比结果差异。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskId' => 'getCompareTaskId',
            'contentCompareOverview' => 'getContentCompareOverview',
            'contentCompareOverviewCount' => 'getContentCompareOverviewCount',
            'contentCompareDetails' => 'getContentCompareDetails',
            'contentCompareDiffs' => 'getContentCompareDiffs',
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
        $this->container['contentCompareOverview'] = isset($data['contentCompareOverview']) ? $data['contentCompareOverview'] : null;
        $this->container['contentCompareOverviewCount'] = isset($data['contentCompareOverviewCount']) ? $data['contentCompareOverviewCount'] : null;
        $this->container['contentCompareDetails'] = isset($data['contentCompareDetails']) ? $data['contentCompareDetails'] : null;
        $this->container['contentCompareDiffs'] = isset($data['contentCompareDiffs']) ? $data['contentCompareDiffs'] : null;
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
        if ($this->container['compareTaskId'] === null) {
            $invalidProperties[] = "'compareTaskId' can't be null";
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
    * Gets compareTaskId
    *  内容对比的任务id。
    *
    * @return string
    */
    public function getCompareTaskId()
    {
        return $this->container['compareTaskId'];
    }

    /**
    * Sets compareTaskId
    *
    * @param string $compareTaskId 内容对比的任务id。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets contentCompareOverview
    *  内容对比结果概览。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultOverview[]|null
    */
    public function getContentCompareOverview()
    {
        return $this->container['contentCompareOverview'];
    }

    /**
    * Sets contentCompareOverview
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultOverview[]|null $contentCompareOverview 内容对比结果概览。
    *
    * @return $this
    */
    public function setContentCompareOverview($contentCompareOverview)
    {
        $this->container['contentCompareOverview'] = $contentCompareOverview;
        return $this;
    }

    /**
    * Gets contentCompareOverviewCount
    *  内容对比结果概览总数。
    *
    * @return int|null
    */
    public function getContentCompareOverviewCount()
    {
        return $this->container['contentCompareOverviewCount'];
    }

    /**
    * Sets contentCompareOverviewCount
    *
    * @param int|null $contentCompareOverviewCount 内容对比结果概览总数。
    *
    * @return $this
    */
    public function setContentCompareOverviewCount($contentCompareOverviewCount)
    {
        $this->container['contentCompareOverviewCount'] = $contentCompareOverviewCount;
        return $this;
    }

    /**
    * Gets contentCompareDetails
    *  内容对比结果详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDetails[]|null
    */
    public function getContentCompareDetails()
    {
        return $this->container['contentCompareDetails'];
    }

    /**
    * Sets contentCompareDetails
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDetails[]|null $contentCompareDetails 内容对比结果详情。
    *
    * @return $this
    */
    public function setContentCompareDetails($contentCompareDetails)
    {
        $this->container['contentCompareDetails'] = $contentCompareDetails;
        return $this;
    }

    /**
    * Gets contentCompareDiffs
    *  内容对比结果差异。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDiffs[]|null
    */
    public function getContentCompareDiffs()
    {
        return $this->container['contentCompareDiffs'];
    }

    /**
    * Sets contentCompareDiffs
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResultDiffs[]|null $contentCompareDiffs 内容对比结果差异。
    *
    * @return $this
    */
    public function setContentCompareDiffs($contentCompareDiffs)
    {
        $this->container['contentCompareDiffs'] = $contentCompareDiffs;
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

