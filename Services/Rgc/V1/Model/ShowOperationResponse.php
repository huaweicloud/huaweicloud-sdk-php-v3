<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOperationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOperationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationId  操作ID。
    * percentageComplete  完成进度百分比。
    * status  状态。
    * percentageDetails  创建账号、注册OU、纳管账号的详细进度信息。
    * message  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationId' => 'string',
            'percentageComplete' => 'int',
            'status' => 'string',
            'percentageDetails' => '\HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalPercentageDetail[]',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationId  操作ID。
    * percentageComplete  完成进度百分比。
    * status  状态。
    * percentageDetails  创建账号、注册OU、纳管账号的详细进度信息。
    * message  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationId' => null,
        'percentageComplete' => null,
        'status' => null,
        'percentageDetails' => null,
        'message' => null
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
    * operationId  操作ID。
    * percentageComplete  完成进度百分比。
    * status  状态。
    * percentageDetails  创建账号、注册OU、纳管账号的详细进度信息。
    * message  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationId' => 'operation_id',
            'percentageComplete' => 'percentage_complete',
            'status' => 'status',
            'percentageDetails' => 'percentage_details',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationId  操作ID。
    * percentageComplete  完成进度百分比。
    * status  状态。
    * percentageDetails  创建账号、注册OU、纳管账号的详细进度信息。
    * message  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'operationId' => 'setOperationId',
            'percentageComplete' => 'setPercentageComplete',
            'status' => 'setStatus',
            'percentageDetails' => 'setPercentageDetails',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationId  操作ID。
    * percentageComplete  完成进度百分比。
    * status  状态。
    * percentageDetails  创建账号、注册OU、纳管账号的详细进度信息。
    * message  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'operationId' => 'getOperationId',
            'percentageComplete' => 'getPercentageComplete',
            'status' => 'getStatus',
            'percentageDetails' => 'getPercentageDetails',
            'message' => 'getMessage'
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
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['percentageComplete'] = isset($data['percentageComplete']) ? $data['percentageComplete'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['percentageDetails'] = isset($data['percentageDetails']) ? $data['percentageDetails'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operationId']) && (mb_strlen($this->container['operationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'operationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operationId']) && (mb_strlen($this->container['operationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 256)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets operationId
    *  操作ID。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId 操作ID。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
        return $this;
    }

    /**
    * Gets percentageComplete
    *  完成进度百分比。
    *
    * @return int|null
    */
    public function getPercentageComplete()
    {
        return $this->container['percentageComplete'];
    }

    /**
    * Sets percentageComplete
    *
    * @param int|null $percentageComplete 完成进度百分比。
    *
    * @return $this
    */
    public function setPercentageComplete($percentageComplete)
    {
        $this->container['percentageComplete'] = $percentageComplete;
        return $this;
    }

    /**
    * Gets status
    *  状态。
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
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets percentageDetails
    *  创建账号、注册OU、纳管账号的详细进度信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalPercentageDetail[]|null
    */
    public function getPercentageDetails()
    {
        return $this->container['percentageDetails'];
    }

    /**
    * Sets percentageDetails
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalPercentageDetail[]|null $percentageDetails 创建账号、注册OU、纳管账号的详细进度信息。
    *
    * @return $this
    */
    public function setPercentageDetails($percentageDetails)
    {
        $this->container['percentageDetails'] = $percentageDetails;
        return $this;
    }

    /**
    * Gets message
    *  创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 创建账号、注册OU、纳管账号的错误信息描述。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

