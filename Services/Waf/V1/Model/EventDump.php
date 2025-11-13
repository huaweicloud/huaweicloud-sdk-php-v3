<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventDump implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventDump';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  文件来源
    * state  文件状态
    * description  事件描述
    * id  文件id
    * filename  文件名
    * obsname  文件obs名
    * tenantid  租户id
    * start  统计开始时间
    * end  统计截止时间
    * total  总计事件数
    * url  链接
    * urltimestamp  更新url时间戳
    * timestamp  文件生成时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'state' => 'string',
            'description' => 'string',
            'id' => 'string',
            'filename' => 'string',
            'obsname' => 'string',
            'tenantid' => 'string',
            'start' => 'int',
            'end' => 'int',
            'total' => 'int',
            'url' => 'string',
            'urltimestamp' => 'int',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  文件来源
    * state  文件状态
    * description  事件描述
    * id  文件id
    * filename  文件名
    * obsname  文件obs名
    * tenantid  租户id
    * start  统计开始时间
    * end  统计截止时间
    * total  总计事件数
    * url  链接
    * urltimestamp  更新url时间戳
    * timestamp  文件生成时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'state' => null,
        'description' => null,
        'id' => null,
        'filename' => null,
        'obsname' => null,
        'tenantid' => null,
        'start' => 'int64',
        'end' => 'int64',
        'total' => 'int64',
        'url' => null,
        'urltimestamp' => 'int64',
        'timestamp' => 'int64'
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
    * source  文件来源
    * state  文件状态
    * description  事件描述
    * id  文件id
    * filename  文件名
    * obsname  文件obs名
    * tenantid  租户id
    * start  统计开始时间
    * end  统计截止时间
    * total  总计事件数
    * url  链接
    * urltimestamp  更新url时间戳
    * timestamp  文件生成时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'state' => 'state',
            'description' => 'description',
            'id' => 'id',
            'filename' => 'filename',
            'obsname' => 'obsname',
            'tenantid' => 'tenantid',
            'start' => 'start',
            'end' => 'end',
            'total' => 'total',
            'url' => 'url',
            'urltimestamp' => 'urltimestamp',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  文件来源
    * state  文件状态
    * description  事件描述
    * id  文件id
    * filename  文件名
    * obsname  文件obs名
    * tenantid  租户id
    * start  统计开始时间
    * end  统计截止时间
    * total  总计事件数
    * url  链接
    * urltimestamp  更新url时间戳
    * timestamp  文件生成时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'state' => 'setState',
            'description' => 'setDescription',
            'id' => 'setId',
            'filename' => 'setFilename',
            'obsname' => 'setObsname',
            'tenantid' => 'setTenantid',
            'start' => 'setStart',
            'end' => 'setEnd',
            'total' => 'setTotal',
            'url' => 'setUrl',
            'urltimestamp' => 'setUrltimestamp',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  文件来源
    * state  文件状态
    * description  事件描述
    * id  文件id
    * filename  文件名
    * obsname  文件obs名
    * tenantid  租户id
    * start  统计开始时间
    * end  统计截止时间
    * total  总计事件数
    * url  链接
    * urltimestamp  更新url时间戳
    * timestamp  文件生成时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'state' => 'getState',
            'description' => 'getDescription',
            'id' => 'getId',
            'filename' => 'getFilename',
            'obsname' => 'getObsname',
            'tenantid' => 'getTenantid',
            'start' => 'getStart',
            'end' => 'getEnd',
            'total' => 'getTotal',
            'url' => 'getUrl',
            'urltimestamp' => 'getUrltimestamp',
            'timestamp' => 'getTimestamp'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['obsname'] = isset($data['obsname']) ? $data['obsname'] : null;
        $this->container['tenantid'] = isset($data['tenantid']) ? $data['tenantid'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['urltimestamp'] = isset($data['urltimestamp']) ? $data['urltimestamp'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    * Gets source
    *  文件来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 文件来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets state
    *  文件状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 文件状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets description
    *  事件描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 事件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  文件id
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
    * @param string|null $id 文件id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets filename
    *  文件名
    *
    * @return string|null
    */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
    * Sets filename
    *
    * @param string|null $filename 文件名
    *
    * @return $this
    */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;
        return $this;
    }

    /**
    * Gets obsname
    *  文件obs名
    *
    * @return string|null
    */
    public function getObsname()
    {
        return $this->container['obsname'];
    }

    /**
    * Sets obsname
    *
    * @param string|null $obsname 文件obs名
    *
    * @return $this
    */
    public function setObsname($obsname)
    {
        $this->container['obsname'] = $obsname;
        return $this;
    }

    /**
    * Gets tenantid
    *  租户id
    *
    * @return string|null
    */
    public function getTenantid()
    {
        return $this->container['tenantid'];
    }

    /**
    * Sets tenantid
    *
    * @param string|null $tenantid 租户id
    *
    * @return $this
    */
    public function setTenantid($tenantid)
    {
        $this->container['tenantid'] = $tenantid;
        return $this;
    }

    /**
    * Gets start
    *  统计开始时间
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 统计开始时间
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  统计截止时间
    *
    * @return int|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int|null $end 统计截止时间
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets total
    *  总计事件数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总计事件数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets url
    *  链接
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets urltimestamp
    *  更新url时间戳
    *
    * @return int|null
    */
    public function getUrltimestamp()
    {
        return $this->container['urltimestamp'];
    }

    /**
    * Sets urltimestamp
    *
    * @param int|null $urltimestamp 更新url时间戳
    *
    * @return $this
    */
    public function setUrltimestamp($urltimestamp)
    {
        $this->container['urltimestamp'] = $urltimestamp;
        return $this;
    }

    /**
    * Gets timestamp
    *  文件生成时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 文件生成时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

