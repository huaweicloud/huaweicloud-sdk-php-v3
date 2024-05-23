<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadErrorlogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadErrorlogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * list  错误日志下载链接列表
    * status  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    * count  - 错误日志链接数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'list' => '\HuaweiCloud\SDK\Rds\V3\Model\ErrorlogDownloadInfo[]',
            'status' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * list  错误日志下载链接列表
    * status  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    * count  - 错误日志链接数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'list' => null,
        'status' => null,
        'count' => null
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
    * list  错误日志下载链接列表
    * status  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    * count  - 错误日志链接数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'list' => 'list',
            'status' => 'status',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * list  错误日志下载链接列表
    * status  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    * count  - 错误日志链接数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'list' => 'setList',
            'status' => 'setStatus',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * list  错误日志下载链接列表
    * status  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    * count  - 错误日志链接数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'list' => 'getList',
            'status' => 'getStatus',
            'count' => 'getCount'
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
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets list
    *  错误日志下载链接列表
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ErrorlogDownloadInfo[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ErrorlogDownloadInfo[]|null $list 错误日志下载链接列表
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets status
    *  - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
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
    * @param string|null $status - 错误日志下载链接生成状态。FINISH，表示下载链接已经生成完成。CREATING，表示正在生成文件，准备下载链接。FAILED，表示存在日志文件准备失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets count
    *  - 错误日志链接数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count - 错误日志链接数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

