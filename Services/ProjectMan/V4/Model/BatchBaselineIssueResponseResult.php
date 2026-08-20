<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchBaselineIssueResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchBaselineIssueResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  基线成功的工作项列表。
    * failed  基线失败的工作项列表。
    * successNum  成功数量。
    * failNum  失败数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]',
            'failed' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]',
            'successNum' => 'int',
            'failNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  基线成功的工作项列表。
    * failed  基线失败的工作项列表。
    * successNum  成功数量。
    * failNum  失败数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'failed' => null,
        'successNum' => 'int32',
        'failNum' => 'int32'
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
    * success  基线成功的工作项列表。
    * failed  基线失败的工作项列表。
    * successNum  成功数量。
    * failNum  失败数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'failed' => 'failed',
            'successNum' => 'success_num',
            'failNum' => 'fail_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  基线成功的工作项列表。
    * failed  基线失败的工作项列表。
    * successNum  成功数量。
    * failNum  失败数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'failed' => 'setFailed',
            'successNum' => 'setSuccessNum',
            'failNum' => 'setFailNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  基线成功的工作项列表。
    * failed  基线失败的工作项列表。
    * successNum  成功数量。
    * failNum  失败数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'failed' => 'getFailed',
            'successNum' => 'getSuccessNum',
            'failNum' => 'getFailNum'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
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
    * Gets success
    *  基线成功的工作项列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]|null $success 基线成功的工作项列表。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failed
    *  基线失败的工作项列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueBaselineResult[]|null $failed 基线失败的工作项列表。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets successNum
    *  成功数量。
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum 成功数量。
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failNum
    *  失败数量。
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum 失败数量。
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
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

