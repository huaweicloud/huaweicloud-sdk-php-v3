<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SegmentDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SegmentDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualOrder  录制人工分段序号，每次启动录制，生成一个分段
    * segmentOrder  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    * segmentSize  录制分段总文件大小（字节）
    * fileList  录制文件自动切片列表，每3小时文件切片一次
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualOrder' => 'int',
            'segmentOrder' => 'int',
            'segmentSize' => 'string',
            'fileList' => '\HuaweiCloud\SDK\Meeting\V1\Model\SegmentFileDO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualOrder  录制人工分段序号，每次启动录制，生成一个分段
    * segmentOrder  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    * segmentSize  录制分段总文件大小（字节）
    * fileList  录制文件自动切片列表，每3小时文件切片一次
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualOrder' => null,
        'segmentOrder' => null,
        'segmentSize' => null,
        'fileList' => null
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
    * manualOrder  录制人工分段序号，每次启动录制，生成一个分段
    * segmentOrder  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    * segmentSize  录制分段总文件大小（字节）
    * fileList  录制文件自动切片列表，每3小时文件切片一次
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualOrder' => 'manualOrder',
            'segmentOrder' => 'segmentOrder',
            'segmentSize' => 'segmentSize',
            'fileList' => 'fileList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualOrder  录制人工分段序号，每次启动录制，生成一个分段
    * segmentOrder  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    * segmentSize  录制分段总文件大小（字节）
    * fileList  录制文件自动切片列表，每3小时文件切片一次
    *
    * @var string[]
    */
    protected static $setters = [
            'manualOrder' => 'setManualOrder',
            'segmentOrder' => 'setSegmentOrder',
            'segmentSize' => 'setSegmentSize',
            'fileList' => 'setFileList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualOrder  录制人工分段序号，每次启动录制，生成一个分段
    * segmentOrder  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    * segmentSize  录制分段总文件大小（字节）
    * fileList  录制文件自动切片列表，每3小时文件切片一次
    *
    * @var string[]
    */
    protected static $getters = [
            'manualOrder' => 'getManualOrder',
            'segmentOrder' => 'getSegmentOrder',
            'segmentSize' => 'getSegmentSize',
            'fileList' => 'getFileList'
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
        $this->container['manualOrder'] = isset($data['manualOrder']) ? $data['manualOrder'] : null;
        $this->container['segmentOrder'] = isset($data['segmentOrder']) ? $data['segmentOrder'] : null;
        $this->container['segmentSize'] = isset($data['segmentSize']) ? $data['segmentSize'] : null;
        $this->container['fileList'] = isset($data['fileList']) ? $data['fileList'] : null;
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
    * Gets manualOrder
    *  录制人工分段序号，每次启动录制，生成一个分段
    *
    * @return int|null
    */
    public function getManualOrder()
    {
        return $this->container['manualOrder'];
    }

    /**
    * Sets manualOrder
    *
    * @param int|null $manualOrder 录制人工分段序号，每次启动录制，生成一个分段
    *
    * @return $this
    */
    public function setManualOrder($manualOrder)
    {
        $this->container['manualOrder'] = $manualOrder;
        return $this;
    }

    /**
    * Gets segmentOrder
    *  录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    *
    * @return int|null
    */
    public function getSegmentOrder()
    {
        return $this->container['segmentOrder'];
    }

    /**
    * Sets segmentOrder
    *
    * @param int|null $segmentOrder 录制片段内的文件自动切片序号（每次启动录制后，每三小时一个分片文件，多次人工启动重新从1开始）
    *
    * @return $this
    */
    public function setSegmentOrder($segmentOrder)
    {
        $this->container['segmentOrder'] = $segmentOrder;
        return $this;
    }

    /**
    * Gets segmentSize
    *  录制分段总文件大小（字节）
    *
    * @return string|null
    */
    public function getSegmentSize()
    {
        return $this->container['segmentSize'];
    }

    /**
    * Sets segmentSize
    *
    * @param string|null $segmentSize 录制分段总文件大小（字节）
    *
    * @return $this
    */
    public function setSegmentSize($segmentSize)
    {
        $this->container['segmentSize'] = $segmentSize;
        return $this;
    }

    /**
    * Gets fileList
    *  录制文件自动切片列表，每3小时文件切片一次
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\SegmentFileDO[]|null
    */
    public function getFileList()
    {
        return $this->container['fileList'];
    }

    /**
    * Sets fileList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\SegmentFileDO[]|null $fileList 录制文件自动切片列表，每3小时文件切片一次
    *
    * @return $this
    */
    public function setFileList($fileList)
    {
        $this->container['fileList'] = $fileList;
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

