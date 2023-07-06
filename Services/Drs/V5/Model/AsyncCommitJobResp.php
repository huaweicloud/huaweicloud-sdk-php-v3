<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AsyncCommitJobResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AsyncCommitJobResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * asyncJobId  批量异步任务ID。
    * status  批量异步任务状态。
    * msg  提交指定ID批量异步任务结果信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'asyncJobId' => 'string',
            'status' => 'string',
            'msg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * asyncJobId  批量异步任务ID。
    * status  批量异步任务状态。
    * msg  提交指定ID批量异步任务结果信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'asyncJobId' => null,
        'status' => null,
        'msg' => null
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
    * asyncJobId  批量异步任务ID。
    * status  批量异步任务状态。
    * msg  提交指定ID批量异步任务结果信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'asyncJobId' => 'async_job_id',
            'status' => 'status',
            'msg' => 'msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * asyncJobId  批量异步任务ID。
    * status  批量异步任务状态。
    * msg  提交指定ID批量异步任务结果信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'asyncJobId' => 'setAsyncJobId',
            'status' => 'setStatus',
            'msg' => 'setMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * asyncJobId  批量异步任务ID。
    * status  批量异步任务状态。
    * msg  提交指定ID批量异步任务结果信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'asyncJobId' => 'getAsyncJobId',
            'status' => 'getStatus',
            'msg' => 'getMsg'
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
        $this->container['asyncJobId'] = isset($data['asyncJobId']) ? $data['asyncJobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['asyncJobId'] === null) {
            $invalidProperties[] = "'asyncJobId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['msg'] === null) {
            $invalidProperties[] = "'msg' can't be null";
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
    * Gets asyncJobId
    *  批量异步任务ID。
    *
    * @return string
    */
    public function getAsyncJobId()
    {
        return $this->container['asyncJobId'];
    }

    /**
    * Sets asyncJobId
    *
    * @param string $asyncJobId 批量异步任务ID。
    *
    * @return $this
    */
    public function setAsyncJobId($asyncJobId)
    {
        $this->container['asyncJobId'] = $asyncJobId;
        return $this;
    }

    /**
    * Gets status
    *  批量异步任务状态。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 批量异步任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets msg
    *  提交指定ID批量异步任务结果信息。
    *
    * @return string
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string $msg 提交指定ID批量异步任务结果信息。
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
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

