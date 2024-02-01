<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名名称。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * name  日志文件名字。
    * size  文件大小(Byte)。
    * link  下载链接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'name' => 'string',
            'size' => 'int',
            'link' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名名称。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * name  日志文件名字。
    * size  文件大小(Byte)。
    * link  下载链接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'name' => null,
        'size' => 'int64',
        'link' => null
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
    * domainName  域名名称。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * name  日志文件名字。
    * size  文件大小(Byte)。
    * link  下载链接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'name' => 'name',
            'size' => 'size',
            'link' => 'link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名名称。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * name  日志文件名字。
    * size  文件大小(Byte)。
    * link  下载链接。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'name' => 'setName',
            'size' => 'setSize',
            'link' => 'setLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名名称。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * name  日志文件名字。
    * size  文件大小(Byte)。
    * link  下载链接。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'name' => 'getName',
            'size' => 'getSize',
            'link' => 'getLink'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
    * Gets domainName
    *  域名名称。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名名称。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets startTime
    *  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets name
    *  日志文件名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 日志文件名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  文件大小(Byte)。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小(Byte)。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets link
    *  下载链接。
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
    * @param string|null $link 下载链接。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
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

