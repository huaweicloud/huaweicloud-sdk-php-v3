<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditUpgradeStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditUpgradeStep';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * msg  消息
    * resultCode  结果码
    * stepName  步骤名称
    * time  升级时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'msg' => 'string',
            'resultCode' => 'string',
            'stepName' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * msg  消息
    * resultCode  结果码
    * stepName  步骤名称
    * time  升级时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'msg' => null,
        'resultCode' => null,
        'stepName' => null,
        'time' => null
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
    * msg  消息
    * resultCode  结果码
    * stepName  步骤名称
    * time  升级时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'msg' => 'msg',
            'resultCode' => 'result_code',
            'stepName' => 'step_name',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * msg  消息
    * resultCode  结果码
    * stepName  步骤名称
    * time  升级时间
    *
    * @var string[]
    */
    protected static $setters = [
            'msg' => 'setMsg',
            'resultCode' => 'setResultCode',
            'stepName' => 'setStepName',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * msg  消息
    * resultCode  结果码
    * stepName  步骤名称
    * time  升级时间
    *
    * @var string[]
    */
    protected static $getters = [
            'msg' => 'getMsg',
            'resultCode' => 'getResultCode',
            'stepName' => 'getStepName',
            'time' => 'getTime'
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
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets msg
    *  消息
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg 消息
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets resultCode
    *  结果码
    *
    * @return string|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param string|null $resultCode 结果码
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets stepName
    *  步骤名称
    *
    * @return string|null
    */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
    * Sets stepName
    *
    * @param string|null $stepName 步骤名称
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets time
    *  升级时间
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
    * @param string|null $time 升级时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

