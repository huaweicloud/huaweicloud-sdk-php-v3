<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    * message  错误信息。
    * statement  执行的SQL语句。
    * status  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    * resultLocation  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    * content  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'message' => 'string',
            'statement' => 'string',
            'status' => 'string',
            'resultLocation' => 'string',
            'content' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    * message  错误信息。
    * statement  执行的SQL语句。
    * status  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    * resultLocation  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    * content  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'message' => null,
        'statement' => null,
        'status' => null,
        'resultLocation' => null,
        'content' => null
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
    * id  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    * message  错误信息。
    * statement  执行的SQL语句。
    * status  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    * resultLocation  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    * content  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'message' => 'message',
            'statement' => 'statement',
            'status' => 'status',
            'resultLocation' => 'result_location',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    * message  错误信息。
    * statement  执行的SQL语句。
    * status  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    * resultLocation  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    * content  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'message' => 'setMessage',
            'statement' => 'setStatement',
            'status' => 'setStatus',
            'resultLocation' => 'setResultLocation',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    * message  错误信息。
    * statement  执行的SQL语句。
    * status  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    * resultLocation  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    * content  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'message' => 'getMessage',
            'statement' => 'getStatement',
            'status' => 'getStatus',
            'resultLocation' => 'getResultLocation',
            'content' => 'getContent'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resultLocation'] = isset($data['resultLocation']) ? $data['resultLocation'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
    *  SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
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
    * @param string|null $id SQL的执行id。执行select、show和desc语句时才会生成id，其他操作id为空
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets message
    *  错误信息。
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
    * @param string|null $message 错误信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets statement
    *  执行的SQL语句。
    *
    * @return string|null
    */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
    * Sets statement
    *
    * @param string|null $statement 执行的SQL语句。
    *
    * @return $this
    */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;
        return $this;
    }

    /**
    * Gets status
    *  SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
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
    * @param string|null $status SQL的执行状态。 - QUEUED - WAITING_FOR_RESOURCES - PLANNING - STARTING - RUNNING - FINISHING - FINISHED - FAILED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resultLocation
    *  SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    *
    * @return string|null
    */
    public function getResultLocation()
    {
        return $this->container['resultLocation'];
    }

    /**
    * Sets resultLocation
    *
    * @param string|null $resultLocation SQL查询语句的最终结果归档路径。 说明： 只有select的语句才会在将SQL的执行结果转储到result_location中。
    *
    * @return $this
    */
    public function setResultLocation($resultLocation)
    {
        $this->container['resultLocation'] = $resultLocation;
        return $this;
    }

    /**
    * Gets content
    *  SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @return string[][]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string[][]|null $content SQL的执行结果。 说明： 只有非select的语句才会在content中返回结果，如果SQL中没有结果，content为空。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

