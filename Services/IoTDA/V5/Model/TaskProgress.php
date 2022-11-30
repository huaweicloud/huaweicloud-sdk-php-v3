<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  子任务总个数。
    * processing  正在执行的子任务个数。
    * success  执行成功的子任务个数。
    * fail  执行失败的的子任务个数。
    * waitting  等待执行的子任务个数。
    * failWaitRetry  失败等待重试的子任务个数。
    * stopped  停止的子任务个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'processing' => 'int',
            'success' => 'int',
            'fail' => 'int',
            'waitting' => 'int',
            'failWaitRetry' => 'int',
            'stopped' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  子任务总个数。
    * processing  正在执行的子任务个数。
    * success  执行成功的子任务个数。
    * fail  执行失败的的子任务个数。
    * waitting  等待执行的子任务个数。
    * failWaitRetry  失败等待重试的子任务个数。
    * stopped  停止的子任务个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'processing' => null,
        'success' => null,
        'fail' => null,
        'waitting' => null,
        'failWaitRetry' => null,
        'stopped' => null
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
    * total  子任务总个数。
    * processing  正在执行的子任务个数。
    * success  执行成功的子任务个数。
    * fail  执行失败的的子任务个数。
    * waitting  等待执行的子任务个数。
    * failWaitRetry  失败等待重试的子任务个数。
    * stopped  停止的子任务个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'processing' => 'processing',
            'success' => 'success',
            'fail' => 'fail',
            'waitting' => 'waitting',
            'failWaitRetry' => 'fail_wait_retry',
            'stopped' => 'stopped'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  子任务总个数。
    * processing  正在执行的子任务个数。
    * success  执行成功的子任务个数。
    * fail  执行失败的的子任务个数。
    * waitting  等待执行的子任务个数。
    * failWaitRetry  失败等待重试的子任务个数。
    * stopped  停止的子任务个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'processing' => 'setProcessing',
            'success' => 'setSuccess',
            'fail' => 'setFail',
            'waitting' => 'setWaitting',
            'failWaitRetry' => 'setFailWaitRetry',
            'stopped' => 'setStopped'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  子任务总个数。
    * processing  正在执行的子任务个数。
    * success  执行成功的子任务个数。
    * fail  执行失败的的子任务个数。
    * waitting  等待执行的子任务个数。
    * failWaitRetry  失败等待重试的子任务个数。
    * stopped  停止的子任务个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'processing' => 'getProcessing',
            'success' => 'getSuccess',
            'fail' => 'getFail',
            'waitting' => 'getWaitting',
            'failWaitRetry' => 'getFailWaitRetry',
            'stopped' => 'getStopped'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['fail'] = isset($data['fail']) ? $data['fail'] : null;
        $this->container['waitting'] = isset($data['waitting']) ? $data['waitting'] : null;
        $this->container['failWaitRetry'] = isset($data['failWaitRetry']) ? $data['failWaitRetry'] : null;
        $this->container['stopped'] = isset($data['stopped']) ? $data['stopped'] : null;
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
    * Gets total
    *  子任务总个数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 子任务总个数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets processing
    *  正在执行的子任务个数。
    *
    * @return int|null
    */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
    * Sets processing
    *
    * @param int|null $processing 正在执行的子任务个数。
    *
    * @return $this
    */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;
        return $this;
    }

    /**
    * Gets success
    *  执行成功的子任务个数。
    *
    * @return int|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param int|null $success 执行成功的子任务个数。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets fail
    *  执行失败的的子任务个数。
    *
    * @return int|null
    */
    public function getFail()
    {
        return $this->container['fail'];
    }

    /**
    * Sets fail
    *
    * @param int|null $fail 执行失败的的子任务个数。
    *
    * @return $this
    */
    public function setFail($fail)
    {
        $this->container['fail'] = $fail;
        return $this;
    }

    /**
    * Gets waitting
    *  等待执行的子任务个数。
    *
    * @return int|null
    */
    public function getWaitting()
    {
        return $this->container['waitting'];
    }

    /**
    * Sets waitting
    *
    * @param int|null $waitting 等待执行的子任务个数。
    *
    * @return $this
    */
    public function setWaitting($waitting)
    {
        $this->container['waitting'] = $waitting;
        return $this;
    }

    /**
    * Gets failWaitRetry
    *  失败等待重试的子任务个数。
    *
    * @return int|null
    */
    public function getFailWaitRetry()
    {
        return $this->container['failWaitRetry'];
    }

    /**
    * Sets failWaitRetry
    *
    * @param int|null $failWaitRetry 失败等待重试的子任务个数。
    *
    * @return $this
    */
    public function setFailWaitRetry($failWaitRetry)
    {
        $this->container['failWaitRetry'] = $failWaitRetry;
        return $this;
    }

    /**
    * Gets stopped
    *  停止的子任务个数。
    *
    * @return int|null
    */
    public function getStopped()
    {
        return $this->container['stopped'];
    }

    /**
    * Sets stopped
    *
    * @param int|null $stopped 停止的子任务个数。
    *
    * @return $this
    */
    public function setStopped($stopped)
    {
        $this->container['stopped'] = $stopped;
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

