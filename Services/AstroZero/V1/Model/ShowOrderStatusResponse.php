<?php

namespace HuaweiCloud\SDK\AstroZero\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrderStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrderStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resCode  响应码
    * resMsg  响应信息
    * result  result
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resCode' => 'string',
            'resMsg' => 'string',
            'result' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resCode  响应码
    * resMsg  响应信息
    * result  result
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resCode' => null,
        'resMsg' => null,
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
    * resCode  响应码
    * resMsg  响应信息
    * result  result
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resCode' => 'resCode',
            'resMsg' => 'resMsg',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resCode  响应码
    * resMsg  响应信息
    * result  result
    *
    * @var string[]
    */
    protected static $setters = [
            'resCode' => 'setResCode',
            'resMsg' => 'setResMsg',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resCode  响应码
    * resMsg  响应信息
    * result  result
    *
    * @var string[]
    */
    protected static $getters = [
            'resCode' => 'getResCode',
            'resMsg' => 'getResMsg',
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
        $this->container['resCode'] = isset($data['resCode']) ? $data['resCode'] : null;
        $this->container['resMsg'] = isset($data['resMsg']) ? $data['resMsg'] : null;
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
    * Gets resCode
    *  响应码
    *
    * @return string|null
    */
    public function getResCode()
    {
        return $this->container['resCode'];
    }

    /**
    * Sets resCode
    *
    * @param string|null $resCode 响应码
    *
    * @return $this
    */
    public function setResCode($resCode)
    {
        $this->container['resCode'] = $resCode;
        return $this;
    }

    /**
    * Gets resMsg
    *  响应信息
    *
    * @return string|null
    */
    public function getResMsg()
    {
        return $this->container['resMsg'];
    }

    /**
    * Sets resMsg
    *
    * @param string|null $resMsg 响应信息
    *
    * @return $this
    */
    public function setResMsg($resMsg)
    {
        $this->container['resMsg'] = $resMsg;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return object|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param object|null $result result
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

