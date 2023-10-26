<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogItemsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogItemsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorCode  响应码,SVCSTG_AMS_2000000代表正常返回。
    * errorMessage  响应信息描述。
    * result  查询结果元数据信息，包括返回总数及结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorCode  响应码,SVCSTG_AMS_2000000代表正常返回。
    * errorMessage  响应信息描述。
    * result  查询结果元数据信息，包括返回总数及结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorCode' => null,
        'errorMessage' => null,
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
    * errorCode  响应码,SVCSTG_AMS_2000000代表正常返回。
    * errorMessage  响应信息描述。
    * result  查询结果元数据信息，包括返回总数及结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorCode' => 'errorCode',
            'errorMessage' => 'errorMessage',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorCode  响应码,SVCSTG_AMS_2000000代表正常返回。
    * errorMessage  响应信息描述。
    * result  查询结果元数据信息，包括返回总数及结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorCode  响应码,SVCSTG_AMS_2000000代表正常返回。
    * errorMessage  响应信息描述。
    * result  查询结果元数据信息，包括返回总数及结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets errorCode
    *  响应码,SVCSTG_AMS_2000000代表正常返回。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 响应码,SVCSTG_AMS_2000000代表正常返回。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  响应信息描述。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 响应信息描述。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets result
    *  查询结果元数据信息，包括返回总数及结果。
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
    * @param string|null $result 查询结果元数据信息，包括返回总数及结果。
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

