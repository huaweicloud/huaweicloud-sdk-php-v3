<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownLoadFileInfoItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownLoadFileInfoItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * downloadUrl  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    * expireTime  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fileName' => 'string',
            'fileSize' => 'int',
            'downloadUrl' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * downloadUrl  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    * expireTime  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fileName' => null,
        'fileSize' => null,
        'downloadUrl' => null,
        'expireTime' => null
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
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * downloadUrl  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    * expireTime  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'fileSize' => 'file_size',
            'downloadUrl' => 'download_url',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * downloadUrl  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    * expireTime  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'downloadUrl' => 'setDownloadUrl',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * downloadUrl  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    * expireTime  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'downloadUrl' => 'getDownloadUrl',
            'expireTime' => 'getExpireTime'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    *  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
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
    * @param string|null $id **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
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
    * @param string|null $fileName **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl **参数解释**：  日志下载链接。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime **参数解释**：  下载链接过期时间，格式为\"yyyy-MM-dd HH:mm:ss\"。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

