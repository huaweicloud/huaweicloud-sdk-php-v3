<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportExcelJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportExcelJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态
    * fileName  文件名
    * link  链接
    * errCode  错误码
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'fileName' => 'string',
            'link' => 'string',
            'errCode' => 'string',
            'errMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态
    * fileName  文件名
    * link  链接
    * errCode  错误码
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'fileName' => null,
        'link' => null,
        'errCode' => null,
        'errMsg' => null
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
    * status  状态
    * fileName  文件名
    * link  链接
    * errCode  错误码
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'fileName' => 'file_name',
            'link' => 'link',
            'errCode' => 'err_code',
            'errMsg' => 'err_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态
    * fileName  文件名
    * link  链接
    * errCode  错误码
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'fileName' => 'setFileName',
            'link' => 'setLink',
            'errCode' => 'setErrCode',
            'errMsg' => 'setErrMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态
    * fileName  文件名
    * link  链接
    * errCode  错误码
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'fileName' => 'getFileName',
            'link' => 'getLink',
            'errCode' => 'getErrCode',
            'errMsg' => 'getErrMsg'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['errCode'] = isset($data['errCode']) ? $data['errCode'] : null;
        $this->container['errMsg'] = isset($data['errMsg']) ? $data['errMsg'] : null;
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
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets link
    *  链接
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 链接
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets errCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrCode()
    {
        return $this->container['errCode'];
    }

    /**
    * Sets errCode
    *
    * @param string|null $errCode 错误码
    *
    * @return $this
    */
    public function setErrCode($errCode)
    {
        $this->container['errCode'] = $errCode;
        return $this;
    }

    /**
    * Gets errMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrMsg()
    {
        return $this->container['errMsg'];
    }

    /**
    * Sets errMsg
    *
    * @param string|null $errMsg 错误信息
    *
    * @return $this
    */
    public function setErrMsg($errMsg)
    {
        $this->container['errMsg'] = $errMsg;
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

