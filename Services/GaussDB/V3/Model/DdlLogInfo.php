<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DdlLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DdlLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * createTime  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    * status  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fileName' => 'string',
            'fileSize' => 'int',
            'createTime' => 'string',
            'endTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * createTime  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    * status  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fileName' => null,
        'fileSize' => null,
        'createTime' => null,
        'endTime' => null,
        'status' => null
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
    * createTime  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    * status  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'fileSize' => 'file_size',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * createTime  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    * status  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    * fileName  **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
    * fileSize  **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    * createTime  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    * status  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
        if ($this->container['fileSize'] === null) {
            $invalidProperties[] = "'fileSize' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets id
    *  **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：  日志文件ID。  **取值范围**：  不涉及。
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
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName **参数解释**：  日志文件名称。  **取值范围**：  不涉及。
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
    * @return int
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int $fileSize **参数解释**：  日志文件大小，单位为字节。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime **参数解释**：  日志文件上传的创建时间。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释**：  日志文件上传的结束时间。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**：  日志文件的状态。  **取值范围**：  - Active：表示正常。 - Disable：表示不可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

