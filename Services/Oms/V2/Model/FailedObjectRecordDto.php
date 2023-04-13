<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailedObjectRecordDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailedObjectRecordDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  是否支持失败对象重传。
    * listFileKey  失败对象列表文件路径。
    * errorCode  失败对象列表上传失败的错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'bool',
            'listFileKey' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  是否支持失败对象重传。
    * listFileKey  失败对象列表文件路径。
    * errorCode  失败对象列表上传失败的错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'listFileKey' => null,
        'errorCode' => null
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
    * result  是否支持失败对象重传。
    * listFileKey  失败对象列表文件路径。
    * errorCode  失败对象列表上传失败的错误码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'listFileKey' => 'list_file_key',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  是否支持失败对象重传。
    * listFileKey  失败对象列表文件路径。
    * errorCode  失败对象列表上传失败的错误码。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'listFileKey' => 'setListFileKey',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  是否支持失败对象重传。
    * listFileKey  失败对象列表文件路径。
    * errorCode  失败对象列表上传失败的错误码。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'listFileKey' => 'getListFileKey',
            'errorCode' => 'getErrorCode'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['listFileKey'] = isset($data['listFileKey']) ? $data['listFileKey'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['listFileKey']) && (mb_strlen($this->container['listFileKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['listFileKey']) && (mb_strlen($this->container['listFileKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 10)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
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
    * Gets result
    *  是否支持失败对象重传。
    *
    * @return bool|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param bool|null $result 是否支持失败对象重传。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets listFileKey
    *  失败对象列表文件路径。
    *
    * @return string|null
    */
    public function getListFileKey()
    {
        return $this->container['listFileKey'];
    }

    /**
    * Sets listFileKey
    *
    * @param string|null $listFileKey 失败对象列表文件路径。
    *
    * @return $this
    */
    public function setListFileKey($listFileKey)
    {
        $this->container['listFileKey'] = $listFileKey;
        return $this;
    }

    /**
    * Gets errorCode
    *  失败对象列表上传失败的错误码。
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
    * @param string|null $errorCode 失败对象列表上传失败的错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

