<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Counter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'counter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bytesWritten  写入的字节数
    * totalFiles  总文件数
    * rowsRead  读取的行数
    * bytesRead  读取的字节数
    * rowsWritten  写入的行数
    * filesWritten  写入的文件数
    * filesRead  读取的文件数
    * totalSize  总字节数
    * filesSkipped  跳过的文件数
    * rowsWrittenSkipped  跳过的行数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bytesWritten' => 'int',
            'totalFiles' => 'int',
            'rowsRead' => 'int',
            'bytesRead' => 'int',
            'rowsWritten' => 'int',
            'filesWritten' => 'int',
            'filesRead' => 'int',
            'totalSize' => 'int',
            'filesSkipped' => 'int',
            'rowsWrittenSkipped' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bytesWritten  写入的字节数
    * totalFiles  总文件数
    * rowsRead  读取的行数
    * bytesRead  读取的字节数
    * rowsWritten  写入的行数
    * filesWritten  写入的文件数
    * filesRead  读取的文件数
    * totalSize  总字节数
    * filesSkipped  跳过的文件数
    * rowsWrittenSkipped  跳过的行数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bytesWritten' => 'int64',
        'totalFiles' => 'int32',
        'rowsRead' => 'int64',
        'bytesRead' => 'int64',
        'rowsWritten' => 'int64',
        'filesWritten' => 'int32',
        'filesRead' => 'int32',
        'totalSize' => 'int64',
        'filesSkipped' => 'int32',
        'rowsWrittenSkipped' => 'int64'
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
    * bytesWritten  写入的字节数
    * totalFiles  总文件数
    * rowsRead  读取的行数
    * bytesRead  读取的字节数
    * rowsWritten  写入的行数
    * filesWritten  写入的文件数
    * filesRead  读取的文件数
    * totalSize  总字节数
    * filesSkipped  跳过的文件数
    * rowsWrittenSkipped  跳过的行数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bytesWritten' => 'BYTES_WRITTEN',
            'totalFiles' => 'TOTAL_FILES',
            'rowsRead' => 'ROWS_READ',
            'bytesRead' => 'BYTES_READ',
            'rowsWritten' => 'ROWS_WRITTEN',
            'filesWritten' => 'FILES_WRITTEN',
            'filesRead' => 'FILES_READ',
            'totalSize' => 'TOTAL_SIZE',
            'filesSkipped' => 'FILES_SKIPPED',
            'rowsWrittenSkipped' => 'ROWS_WRITTEN_SKIPPED'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bytesWritten  写入的字节数
    * totalFiles  总文件数
    * rowsRead  读取的行数
    * bytesRead  读取的字节数
    * rowsWritten  写入的行数
    * filesWritten  写入的文件数
    * filesRead  读取的文件数
    * totalSize  总字节数
    * filesSkipped  跳过的文件数
    * rowsWrittenSkipped  跳过的行数
    *
    * @var string[]
    */
    protected static $setters = [
            'bytesWritten' => 'setBytesWritten',
            'totalFiles' => 'setTotalFiles',
            'rowsRead' => 'setRowsRead',
            'bytesRead' => 'setBytesRead',
            'rowsWritten' => 'setRowsWritten',
            'filesWritten' => 'setFilesWritten',
            'filesRead' => 'setFilesRead',
            'totalSize' => 'setTotalSize',
            'filesSkipped' => 'setFilesSkipped',
            'rowsWrittenSkipped' => 'setRowsWrittenSkipped'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bytesWritten  写入的字节数
    * totalFiles  总文件数
    * rowsRead  读取的行数
    * bytesRead  读取的字节数
    * rowsWritten  写入的行数
    * filesWritten  写入的文件数
    * filesRead  读取的文件数
    * totalSize  总字节数
    * filesSkipped  跳过的文件数
    * rowsWrittenSkipped  跳过的行数
    *
    * @var string[]
    */
    protected static $getters = [
            'bytesWritten' => 'getBytesWritten',
            'totalFiles' => 'getTotalFiles',
            'rowsRead' => 'getRowsRead',
            'bytesRead' => 'getBytesRead',
            'rowsWritten' => 'getRowsWritten',
            'filesWritten' => 'getFilesWritten',
            'filesRead' => 'getFilesRead',
            'totalSize' => 'getTotalSize',
            'filesSkipped' => 'getFilesSkipped',
            'rowsWrittenSkipped' => 'getRowsWrittenSkipped'
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
        $this->container['bytesWritten'] = isset($data['bytesWritten']) ? $data['bytesWritten'] : null;
        $this->container['totalFiles'] = isset($data['totalFiles']) ? $data['totalFiles'] : null;
        $this->container['rowsRead'] = isset($data['rowsRead']) ? $data['rowsRead'] : null;
        $this->container['bytesRead'] = isset($data['bytesRead']) ? $data['bytesRead'] : null;
        $this->container['rowsWritten'] = isset($data['rowsWritten']) ? $data['rowsWritten'] : null;
        $this->container['filesWritten'] = isset($data['filesWritten']) ? $data['filesWritten'] : null;
        $this->container['filesRead'] = isset($data['filesRead']) ? $data['filesRead'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['filesSkipped'] = isset($data['filesSkipped']) ? $data['filesSkipped'] : null;
        $this->container['rowsWrittenSkipped'] = isset($data['rowsWrittenSkipped']) ? $data['rowsWrittenSkipped'] : null;
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
    * Gets bytesWritten
    *  写入的字节数
    *
    * @return int|null
    */
    public function getBytesWritten()
    {
        return $this->container['bytesWritten'];
    }

    /**
    * Sets bytesWritten
    *
    * @param int|null $bytesWritten 写入的字节数
    *
    * @return $this
    */
    public function setBytesWritten($bytesWritten)
    {
        $this->container['bytesWritten'] = $bytesWritten;
        return $this;
    }

    /**
    * Gets totalFiles
    *  总文件数
    *
    * @return int|null
    */
    public function getTotalFiles()
    {
        return $this->container['totalFiles'];
    }

    /**
    * Sets totalFiles
    *
    * @param int|null $totalFiles 总文件数
    *
    * @return $this
    */
    public function setTotalFiles($totalFiles)
    {
        $this->container['totalFiles'] = $totalFiles;
        return $this;
    }

    /**
    * Gets rowsRead
    *  读取的行数
    *
    * @return int|null
    */
    public function getRowsRead()
    {
        return $this->container['rowsRead'];
    }

    /**
    * Sets rowsRead
    *
    * @param int|null $rowsRead 读取的行数
    *
    * @return $this
    */
    public function setRowsRead($rowsRead)
    {
        $this->container['rowsRead'] = $rowsRead;
        return $this;
    }

    /**
    * Gets bytesRead
    *  读取的字节数
    *
    * @return int|null
    */
    public function getBytesRead()
    {
        return $this->container['bytesRead'];
    }

    /**
    * Sets bytesRead
    *
    * @param int|null $bytesRead 读取的字节数
    *
    * @return $this
    */
    public function setBytesRead($bytesRead)
    {
        $this->container['bytesRead'] = $bytesRead;
        return $this;
    }

    /**
    * Gets rowsWritten
    *  写入的行数
    *
    * @return int|null
    */
    public function getRowsWritten()
    {
        return $this->container['rowsWritten'];
    }

    /**
    * Sets rowsWritten
    *
    * @param int|null $rowsWritten 写入的行数
    *
    * @return $this
    */
    public function setRowsWritten($rowsWritten)
    {
        $this->container['rowsWritten'] = $rowsWritten;
        return $this;
    }

    /**
    * Gets filesWritten
    *  写入的文件数
    *
    * @return int|null
    */
    public function getFilesWritten()
    {
        return $this->container['filesWritten'];
    }

    /**
    * Sets filesWritten
    *
    * @param int|null $filesWritten 写入的文件数
    *
    * @return $this
    */
    public function setFilesWritten($filesWritten)
    {
        $this->container['filesWritten'] = $filesWritten;
        return $this;
    }

    /**
    * Gets filesRead
    *  读取的文件数
    *
    * @return int|null
    */
    public function getFilesRead()
    {
        return $this->container['filesRead'];
    }

    /**
    * Sets filesRead
    *
    * @param int|null $filesRead 读取的文件数
    *
    * @return $this
    */
    public function setFilesRead($filesRead)
    {
        $this->container['filesRead'] = $filesRead;
        return $this;
    }

    /**
    * Gets totalSize
    *  总字节数
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 总字节数
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets filesSkipped
    *  跳过的文件数
    *
    * @return int|null
    */
    public function getFilesSkipped()
    {
        return $this->container['filesSkipped'];
    }

    /**
    * Sets filesSkipped
    *
    * @param int|null $filesSkipped 跳过的文件数
    *
    * @return $this
    */
    public function setFilesSkipped($filesSkipped)
    {
        $this->container['filesSkipped'] = $filesSkipped;
        return $this;
    }

    /**
    * Gets rowsWrittenSkipped
    *  跳过的行数
    *
    * @return int|null
    */
    public function getRowsWrittenSkipped()
    {
        return $this->container['rowsWrittenSkipped'];
    }

    /**
    * Sets rowsWrittenSkipped
    *
    * @param int|null $rowsWrittenSkipped 跳过的行数
    *
    * @return $this
    */
    public function setRowsWrittenSkipped($rowsWrittenSkipped)
    {
        $this->container['rowsWrittenSkipped'] = $rowsWrittenSkipped;
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

