<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadBatchTaskFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadBatchTaskFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileId  上传的批量任务文件ID，由平台自动生成。
    * fileName  上传的批量任务文件名称。
    * uploadTime  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileId' => 'string',
            'fileName' => 'string',
            'uploadTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileId  上传的批量任务文件ID，由平台自动生成。
    * fileName  上传的批量任务文件名称。
    * uploadTime  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileId' => null,
        'fileName' => null,
        'uploadTime' => null
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
    * fileId  上传的批量任务文件ID，由平台自动生成。
    * fileName  上传的批量任务文件名称。
    * uploadTime  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileId' => 'file_id',
            'fileName' => 'file_name',
            'uploadTime' => 'upload_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileId  上传的批量任务文件ID，由平台自动生成。
    * fileName  上传的批量任务文件名称。
    * uploadTime  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileId' => 'setFileId',
            'fileName' => 'setFileName',
            'uploadTime' => 'setUploadTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileId  上传的批量任务文件ID，由平台自动生成。
    * fileName  上传的批量任务文件名称。
    * uploadTime  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileId' => 'getFileId',
            'fileName' => 'getFileName',
            'uploadTime' => 'getUploadTime'
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
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['uploadTime'] = isset($data['uploadTime']) ? $data['uploadTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileId']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['fileId'])) {
                $invalidProperties[] = "invalid value for 'fileId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 60)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uploadTime']) && !preg_match("/^[TZ0-9_-]{1,16}$/", $this->container['uploadTime'])) {
                $invalidProperties[] = "invalid value for 'uploadTime', must be conform to the pattern /^[TZ0-9_-]{1,16}$/.";
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
    * Gets fileId
    *  上传的批量任务文件ID，由平台自动生成。
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId 上传的批量任务文件ID，由平台自动生成。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileName
    *  上传的批量任务文件名称。
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
    * @param string|null $fileName 上传的批量任务文件名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets uploadTime
    *  在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getUploadTime()
    {
        return $this->container['uploadTime'];
    }

    /**
    * Sets uploadTime
    *
    * @param string|null $uploadTime 在物联网平台上传文件的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setUploadTime($uploadTime)
    {
        $this->container['uploadTime'] = $uploadTime;
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

