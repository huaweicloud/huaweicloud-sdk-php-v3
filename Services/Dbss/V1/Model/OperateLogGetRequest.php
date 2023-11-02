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
    * userName  筛选角色用户获取操作日志
    * operateName  筛选操作对象名称获取操作日志
    * result  根据执行结果获取操作日志 [success, fail]
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => '\HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean',
            'userName' => 'string',
            'operateName' => 'string',
            'result' => 'string',
            'page' => 'string',
            'size' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  time
    * userName  筛选角色用户获取操作日志
    * operateName  筛选操作对象名称获取操作日志
    * result  根据执行结果获取操作日志 [success, fail]
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'userName' => null,
        'operateName' => null,
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
    * userName  筛选角色用户获取操作日志
    * operateName  筛选操作对象名称获取操作日志
    * result  根据执行结果获取操作日志 [success, fail]
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'userName' => 'user_name',
            'operateName' => 'operate_name',
            'result' => 'result',
            'page' => 'page',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  time
    * userName  筛选角色用户获取操作日志
    * operateName  筛选操作对象名称获取操作日志
    * result  根据执行结果获取操作日志 [success, fail]
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'userName' => 'setUserName',
            'operateName' => 'setOperateName',
            'result' => 'setResult',
            'page' => 'setPage',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  time
    * userName  筛选角色用户获取操作日志
    * operateName  筛选操作对象名称获取操作日志
    * result  根据执行结果获取操作日志 [success, fail]
    * page  页数
    * size  每页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'userName' => 'getUserName',
            'operateName' => 'getOperateName',
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
        $this->container['operateName'] = isset($data['operateName']) ? $data['operateName'] : null;
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
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\TimeRangeBean|null $time time
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
    *  筛选角色用户获取操作日志
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
    * @param string|null $userName 筛选角色用户获取操作日志
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets operateName
    *  筛选操作对象名称获取操作日志
    *
    * @return string|null
    */
    public function getOperateName()
    {
        return $this->container['operateName'];
    }

    /**
    * Sets operateName
    *
    * @param string|null $operateName 筛选操作对象名称获取操作日志
    *
    * @return $this
    */
    public function setOperateName($operateName)
    {
        $this->container['operateName'] = $operateName;
        return $this;
    }

    /**
    * Gets result
    *  根据执行结果获取操作日志 [success, fail]
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
    * @param string|null $result 根据执行结果获取操作日志 [success, fail]
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
    * @return string|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param string|null $page 页数
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
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 每页条数
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

