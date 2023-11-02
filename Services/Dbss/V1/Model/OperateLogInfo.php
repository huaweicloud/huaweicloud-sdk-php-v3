<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  操作日志ID
    * user  操作日志用户
    * time  该条记录发生的时间，格式为时间戳
    * function  该条记录的功能类型
    * action  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    * name  该条记录对应的用户操作对象
    * description  该条记录具体的描述
    * result  该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'user' => 'string',
            'time' => 'string',
            'function' => 'string',
            'action' => 'string',
            'name' => 'string',
            'description' => 'string',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  操作日志ID
    * user  操作日志用户
    * time  该条记录发生的时间，格式为时间戳
    * function  该条记录的功能类型
    * action  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    * name  该条记录对应的用户操作对象
    * description  该条记录具体的描述
    * result  该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'user' => null,
        'time' => null,
        'function' => null,
        'action' => null,
        'name' => null,
        'description' => null,
        'result' => null
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
    * id  操作日志ID
    * user  操作日志用户
    * time  该条记录发生的时间，格式为时间戳
    * function  该条记录的功能类型
    * action  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    * name  该条记录对应的用户操作对象
    * description  该条记录具体的描述
    * result  该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'user' => 'user',
            'time' => 'time',
            'function' => 'function',
            'action' => 'action',
            'name' => 'name',
            'description' => 'description',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  操作日志ID
    * user  操作日志用户
    * time  该条记录发生的时间，格式为时间戳
    * function  该条记录的功能类型
    * action  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    * name  该条记录对应的用户操作对象
    * description  该条记录具体的描述
    * result  该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'user' => 'setUser',
            'time' => 'setTime',
            'function' => 'setFunction',
            'action' => 'setAction',
            'name' => 'setName',
            'description' => 'setDescription',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  操作日志ID
    * user  操作日志用户
    * time  该条记录发生的时间，格式为时间戳
    * function  该条记录的功能类型
    * action  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    * name  该条记录对应的用户操作对象
    * description  该条记录具体的描述
    * result  该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'user' => 'getUser',
            'time' => 'getTime',
            'function' => 'getFunction',
            'action' => 'getAction',
            'name' => 'getName',
            'description' => 'getDescription',
            'result' => 'getResult'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
    * Gets id
    *  操作日志ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 操作日志ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets user
    *  操作日志用户
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 操作日志用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets time
    *  该条记录发生的时间，格式为时间戳
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 该条记录发生的时间，格式为时间戳
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets function
    *  该条记录的功能类型
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function 该条记录的功能类型
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets action
    *  该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
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
    * @param string|null $action 该条记录的操作类型  create：创建  update：更新  operate：操作（开关）  delete：删除
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets name
    *  该条记录对应的用户操作对象
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 该条记录对应的用户操作对象
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  该条记录具体的描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 该条记录具体的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets result
    *  该条记录对应用户执行的结果  success表示成功  fail表示失败
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
    * @param string|null $result 该条记录对应用户执行的结果  success表示成功  fail表示失败
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

