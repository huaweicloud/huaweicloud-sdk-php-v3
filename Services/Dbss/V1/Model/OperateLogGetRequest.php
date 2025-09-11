<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateLogGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateLogGetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  time
    * userName  操作日志用户名
    * action  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    * result  执行结果 - success - fail
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => '\HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean',
            'userName' => 'string',
            'action' => 'string',
            'result' => 'string',
            'page' => 'string',
            'size' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  time
    * userName  操作日志用户名
    * action  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    * result  执行结果 - success - fail
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'userName' => null,
        'action' => null,
        'result' => null,
        'page' => null,
        'size' => null
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
    * time  time
    * userName  操作日志用户名
    * action  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    * result  执行结果 - success - fail
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'userName' => 'user_name',
            'action' => 'action',
            'result' => 'result',
            'page' => 'page',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  time
    * userName  操作日志用户名
    * action  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    * result  执行结果 - success - fail
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'userName' => 'setUserName',
            'action' => 'setAction',
            'result' => 'setResult',
            'page' => 'setPage',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  time
    * userName  操作日志用户名
    * action  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    * result  执行结果 - success - fail
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'userName' => 'getUserName',
            'action' => 'getAction',
            'result' => 'getResult',
            'page' => 'getPage',
            'size' => 'getSize'
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
    const RESULT_SUCCESS = 'success';
    const RESULT_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_FAIL,
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
    * Gets time
    *  time
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean $time time
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets userName
    *  操作日志用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 操作日志用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets action
    *  动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作名称 - CREATE - DELETE - DOWNLOAD - UPDATE
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets result
    *  执行结果 - success - fail
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 执行结果 - success - fail
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets page
    *  页数
    *
    * @return string
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param string $page 页数
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页条数
    *
    * @return string
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string $size 每页条数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

