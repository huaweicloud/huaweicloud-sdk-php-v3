<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecretTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecretTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretName  凭据的名称。
    * status  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    * taskId  任务ID。 该参数与其他参数不能同时存在。
    * limit  每页返回的个数。 默认值：50。
    * marker  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretName' => 'string',
            'status' => 'string',
            'taskId' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretName  凭据的名称。
    * status  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    * taskId  任务ID。 该参数与其他参数不能同时存在。
    * limit  每页返回的个数。 默认值：50。
    * marker  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretName' => null,
        'status' => null,
        'taskId' => null,
        'limit' => 'int32',
        'marker' => null
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
    * secretName  凭据的名称。
    * status  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    * taskId  任务ID。 该参数与其他参数不能同时存在。
    * limit  每页返回的个数。 默认值：50。
    * marker  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretName' => 'secret_name',
            'status' => 'status',
            'taskId' => 'task_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretName  凭据的名称。
    * status  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    * taskId  任务ID。 该参数与其他参数不能同时存在。
    * limit  每页返回的个数。 默认值：50。
    * marker  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @var string[]
    */
    protected static $setters = [
            'secretName' => 'setSecretName',
            'status' => 'setStatus',
            'taskId' => 'setTaskId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretName  凭据的名称。
    * status  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    * taskId  任务ID。 该参数与其他参数不能同时存在。
    * limit  每页返回的个数。 默认值：50。
    * marker  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @var string[]
    */
    protected static $getters = [
            'secretName' => 'getSecretName',
            'status' => 'getStatus',
            'taskId' => 'getTaskId',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
        ];
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
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['secretName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets secretName
    *  凭据的名称。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 凭据的名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
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
    * @param string|null $status 任务状态。取值 ：  - SUCCESS ：任务轮转成功。 - FAILED ：任务轮转失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID。 该参数与其他参数不能同时存在。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID。 该参数与其他参数不能同时存在。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。 默认值：50。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。 默认值：50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的任务ID，为空时为查询第一页。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的任务ID，为空时为查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

