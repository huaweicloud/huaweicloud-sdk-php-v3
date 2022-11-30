<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommandBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommandBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    * result  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    * resultDetail  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandName' => 'string',
            'result' => 'string',
            'resultDetail' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    * result  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    * resultDetail  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandName' => null,
        'result' => null,
        'resultDetail' => null
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
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    * result  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    * resultDetail  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandName' => 'command_name',
            'result' => 'result',
            'resultDetail' => 'result_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    * result  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    * resultDetail  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @var string[]
    */
    protected static $setters = [
            'commandName' => 'setCommandName',
            'result' => 'setResult',
            'resultDetail' => 'setResultDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    * result  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    * resultDetail  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @var string[]
    */
    protected static $getters = [
            'commandName' => 'getCommandName',
            'result' => 'getResult',
            'resultDetail' => 'getResultDetail'
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
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['resultDetail'] = isset($data['resultDetail']) ? $data['resultDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['commandName'] === null) {
            $invalidProperties[] = "'commandName' can't be null";
        }
            if ((mb_strlen($this->container['commandName']) > 255)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['commandName']) < 0)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            if ((mb_strlen($this->container['result']) > 255)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resultDetail'] === null) {
            $invalidProperties[] = "'resultDetail' can't be null";
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
    * Gets commandName
    *  命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    *
    * @return string
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string $commandName 命令名称，分为：START、STOP、DELETE、SYNC、UPLOAD_LOG、RSET_LOG_ACL
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets result
    *  命令执行结果  success代表执行命令成功  fail代表命令执行失败
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 命令执行结果  success代表执行命令成功  fail代表命令执行失败
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets resultDetail
    *  JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @return object
    */
    public function getResultDetail()
    {
        return $this->container['resultDetail'];
    }

    /**
    * Sets resultDetail
    *
    * @param object $resultDetail JSON格式的命令执行结果，只用于保存数据库，没有其他作用
    *
    * @return $this
    */
    public function setResultDetail($resultDetail)
    {
        $this->container['resultDetail'] = $resultDetail;
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

