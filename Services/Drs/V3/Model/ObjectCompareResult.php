<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectCompareResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectCompareResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskId  对象级对比任务的id。
    * objectCompareOverview  对象对比结果概览。
    * objectCompareDetails  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskId' => 'string',
            'objectCompareOverview' => '\HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultOverview[]',
            'objectCompareDetails' => 'map[string,\HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultDetails[]]',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskId  对象级对比任务的id。
    * objectCompareOverview  对象对比结果概览。
    * objectCompareDetails  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskId' => null,
        'objectCompareOverview' => null,
        'objectCompareDetails' => null,
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
    * compareTaskId  对象级对比任务的id。
    * objectCompareOverview  对象对比结果概览。
    * objectCompareDetails  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskId' => 'compare_task_id',
            'objectCompareOverview' => 'object_compare_overview',
            'objectCompareDetails' => 'object_compare_details',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskId  对象级对比任务的id。
    * objectCompareOverview  对象对比结果概览。
    * objectCompareDetails  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskId' => 'setCompareTaskId',
            'objectCompareOverview' => 'setObjectCompareOverview',
            'objectCompareDetails' => 'setObjectCompareDetails',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskId  对象级对比任务的id。
    * objectCompareOverview  对象对比结果概览。
    * objectCompareDetails  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskId' => 'getCompareTaskId',
            'objectCompareOverview' => 'getObjectCompareOverview',
            'objectCompareDetails' => 'getObjectCompareDetails',
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
        $this->container['objectCompareOverview'] = isset($data['objectCompareOverview']) ? $data['objectCompareOverview'] : null;
        $this->container['objectCompareDetails'] = isset($data['objectCompareDetails']) ? $data['objectCompareDetails'] : null;
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
    *  对象级对比任务的id。
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
    * @param string $compareTaskId 对象级对比任务的id。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets objectCompareOverview
    *  对象对比结果概览。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultOverview[]|null
    */
    public function getObjectCompareOverview()
    {
        return $this->container['objectCompareOverview'];
    }

    /**
    * Sets objectCompareOverview
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultOverview[]|null $objectCompareOverview 对象对比结果概览。
    *
    * @return $this
    */
    public function setObjectCompareOverview($objectCompareOverview)
    {
        $this->container['objectCompareOverview'] = $objectCompareOverview;
        return $this;
    }

    /**
    * Gets objectCompareDetails
    *  对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultDetails[]]|null
    */
    public function getObjectCompareDetails()
    {
        return $this->container['objectCompareDetails'];
    }

    /**
    * Sets objectCompareDetails
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResultDetails[]]|null $objectCompareDetails 对象对比结果详情。KEY值为对象对比结果概览中的对象类型。
    *
    * @return $this
    */
    public function setObjectCompareDetails($objectCompareDetails)
    {
        $this->container['objectCompareDetails'] = $objectCompareDetails;
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

