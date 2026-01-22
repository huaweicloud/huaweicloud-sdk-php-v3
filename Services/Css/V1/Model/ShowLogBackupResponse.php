<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLogBackupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLogBackupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logList  logList
    * type  查询日志的类型。
    * completed  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logList' => '\HuaweiCloud\SDK\Css\V1\Model\LogList[]',
            'type' => 'string',
            'completed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logList  logList
    * type  查询日志的类型。
    * completed  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logList' => null,
        'type' => null,
        'completed' => null
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
    * logList  logList
    * type  查询日志的类型。
    * completed  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logList' => 'logList',
            'type' => 'type',
            'completed' => 'completed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logList  logList
    * type  查询日志的类型。
    * completed  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'logList' => 'setLogList',
            'type' => 'setType',
            'completed' => 'setCompleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logList  logList
    * type  查询日志的类型。
    * completed  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'logList' => 'getLogList',
            'type' => 'getType',
            'completed' => 'getCompleted'
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
        $this->container['logList'] = isset($data['logList']) ? $data['logList'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
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
    * Gets logList
    *  logList
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\LogList[]|null
    */
    public function getLogList()
    {
        return $this->container['logList'];
    }

    /**
    * Sets logList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\LogList[]|null $logList logList
    *
    * @return $this
    */
    public function setLogList($logList)
    {
        $this->container['logList'] = $logList;
        return $this;
    }

    /**
    * Gets type
    *  查询日志的类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 查询日志的类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets completed
    *  **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @return bool|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param bool|null $completed **参数解释**： 日志文件是否已经查询完。 **取值范围**： - true： 日志文件已经查询完，没有更多结果了。 - false：日志文件未查询完，因日志条数已达到请求条数或者日志大小达到1MB，查询提前返回结果。
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
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

