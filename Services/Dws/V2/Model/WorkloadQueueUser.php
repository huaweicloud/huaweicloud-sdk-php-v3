<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadQueueUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadQueueUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  用户名
    * occupyResourceList  执行计划阶段
    * execResult  执行结果。
    * execLog  执行日志。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'occupyResourceList' => '\HuaweiCloud\SDK\Dws\V2\Model\OccupyResource[]',
            'execResult' => 'int',
            'execLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  用户名
    * occupyResourceList  执行计划阶段
    * execResult  执行结果。
    * execLog  执行日志。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'occupyResourceList' => null,
        'execResult' => null,
        'execLog' => null
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
    * userName  用户名
    * occupyResourceList  执行计划阶段
    * execResult  执行结果。
    * execLog  执行日志。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'occupyResourceList' => 'occupy_resource_list',
            'execResult' => 'exec_result',
            'execLog' => 'exec_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  用户名
    * occupyResourceList  执行计划阶段
    * execResult  执行结果。
    * execLog  执行日志。
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'occupyResourceList' => 'setOccupyResourceList',
            'execResult' => 'setExecResult',
            'execLog' => 'setExecLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  用户名
    * occupyResourceList  执行计划阶段
    * execResult  执行结果。
    * execLog  执行日志。
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'occupyResourceList' => 'getOccupyResourceList',
            'execResult' => 'getExecResult',
            'execLog' => 'getExecLog'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['occupyResourceList'] = isset($data['occupyResourceList']) ? $data['occupyResourceList'] : null;
        $this->container['execResult'] = isset($data['execResult']) ? $data['execResult'] : null;
        $this->container['execLog'] = isset($data['execLog']) ? $data['execLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['occupyResourceList'] === null) {
            $invalidProperties[] = "'occupyResourceList' can't be null";
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
    * Gets userName
    *  用户名
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets occupyResourceList
    *  执行计划阶段
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\OccupyResource[]
    */
    public function getOccupyResourceList()
    {
        return $this->container['occupyResourceList'];
    }

    /**
    * Sets occupyResourceList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\OccupyResource[] $occupyResourceList 执行计划阶段
    *
    * @return $this
    */
    public function setOccupyResourceList($occupyResourceList)
    {
        $this->container['occupyResourceList'] = $occupyResourceList;
        return $this;
    }

    /**
    * Gets execResult
    *  执行结果。
    *
    * @return int|null
    */
    public function getExecResult()
    {
        return $this->container['execResult'];
    }

    /**
    * Sets execResult
    *
    * @param int|null $execResult 执行结果。
    *
    * @return $this
    */
    public function setExecResult($execResult)
    {
        $this->container['execResult'] = $execResult;
        return $this;
    }

    /**
    * Gets execLog
    *  执行日志。
    *
    * @return string|null
    */
    public function getExecLog()
    {
        return $this->container['execLog'];
    }

    /**
    * Sets execLog
    *
    * @param string|null $execLog 执行日志。
    *
    * @return $this
    */
    public function setExecLog($execLog)
    {
        $this->container['execLog'] = $execLog;
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

