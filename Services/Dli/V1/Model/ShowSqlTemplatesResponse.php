<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlTemplatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlTemplatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  是否成功。
    * message  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    * sqlCount  SQL模板总数。
    * sqls  sqls
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'sqlCount' => 'int',
            'sqls' => '\HuaweiCloud\SDK\Dli\V1\Model\SqlsResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  是否成功。
    * message  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    * sqlCount  SQL模板总数。
    * sqls  sqls
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'sqlCount' => 'int32',
        'sqls' => null
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
    * isSuccess  是否成功。
    * message  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    * sqlCount  SQL模板总数。
    * sqls  sqls
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'sqlCount' => 'sql_count',
            'sqls' => 'sqls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  是否成功。
    * message  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    * sqlCount  SQL模板总数。
    * sqls  sqls
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'sqlCount' => 'setSqlCount',
            'sqls' => 'setSqls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  是否成功。
    * message  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    * sqlCount  SQL模板总数。
    * sqls  sqls
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'sqlCount' => 'getSqlCount',
            'sqls' => 'getSqls'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['sqlCount'] = isset($data['sqlCount']) ? $data['sqlCount'] : null;
        $this->container['sqls'] = isset($data['sqls']) ? $data['sqls'] : null;
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
    * Gets isSuccess
    *  是否成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 是否成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
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
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。执行失败时，用于显示执行失败的原因。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets sqlCount
    *  SQL模板总数。
    *
    * @return int|null
    */
    public function getSqlCount()
    {
        return $this->container['sqlCount'];
    }

    /**
    * Sets sqlCount
    *
    * @param int|null $sqlCount SQL模板总数。
    *
    * @return $this
    */
    public function setSqlCount($sqlCount)
    {
        $this->container['sqlCount'] = $sqlCount;
        return $this;
    }

    /**
    * Gets sqls
    *  sqls
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\SqlsResp[]|null
    */
    public function getSqls()
    {
        return $this->container['sqls'];
    }

    /**
    * Sets sqls
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\SqlsResp[]|null $sqls sqls
    *
    * @return $this
    */
    public function setSqls($sqls)
    {
        $this->container['sqls'] = $sqls;
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

