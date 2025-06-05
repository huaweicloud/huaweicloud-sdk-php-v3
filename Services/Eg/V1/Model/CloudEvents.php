<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudEvents';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件唯一标识串，同一个事件来源里必须唯一
    * source  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    * specversion  CloudEvents协议版本，格式为major.minor
    * type  事件类型
    * datacontenttype  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    * dataschema  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    * data  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    * time  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    * subject  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'source' => 'string',
            'specversion' => 'string',
            'type' => 'string',
            'datacontenttype' => 'string',
            'dataschema' => 'string',
            'data' => 'object',
            'time' => 'string',
            'subject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件唯一标识串，同一个事件来源里必须唯一
    * source  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    * specversion  CloudEvents协议版本，格式为major.minor
    * type  事件类型
    * datacontenttype  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    * dataschema  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    * data  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    * time  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    * subject  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'source' => null,
        'specversion' => null,
        'type' => null,
        'datacontenttype' => null,
        'dataschema' => null,
        'data' => null,
        'time' => 'dateTime',
        'subject' => null
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
    * id  事件唯一标识串，同一个事件来源里必须唯一
    * source  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    * specversion  CloudEvents协议版本，格式为major.minor
    * type  事件类型
    * datacontenttype  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    * dataschema  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    * data  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    * time  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    * subject  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'source' => 'source',
            'specversion' => 'specversion',
            'type' => 'type',
            'datacontenttype' => 'datacontenttype',
            'dataschema' => 'dataschema',
            'data' => 'data',
            'time' => 'time',
            'subject' => 'subject'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件唯一标识串，同一个事件来源里必须唯一
    * source  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    * specversion  CloudEvents协议版本，格式为major.minor
    * type  事件类型
    * datacontenttype  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    * dataschema  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    * data  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    * time  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    * subject  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'source' => 'setSource',
            'specversion' => 'setSpecversion',
            'type' => 'setType',
            'datacontenttype' => 'setDatacontenttype',
            'dataschema' => 'setDataschema',
            'data' => 'setData',
            'time' => 'setTime',
            'subject' => 'setSubject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件唯一标识串，同一个事件来源里必须唯一
    * source  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    * specversion  CloudEvents协议版本，格式为major.minor
    * type  事件类型
    * datacontenttype  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    * dataschema  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    * data  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    * time  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    * subject  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'source' => 'getSource',
            'specversion' => 'getSpecversion',
            'type' => 'getType',
            'datacontenttype' => 'getDatacontenttype',
            'dataschema' => 'getDataschema',
            'data' => 'getData',
            'time' => 'getTime',
            'subject' => 'getSubject'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['specversion'] = isset($data['specversion']) ? $data['specversion'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['datacontenttype'] = isset($data['datacontenttype']) ? $data['datacontenttype'] : null;
        $this->container['dataschema'] = isset($data['dataschema']) ? $data['dataschema'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['specversion'] === null) {
            $invalidProperties[] = "'specversion' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  事件唯一标识串，同一个事件来源里必须唯一
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
    * @param string $id 事件唯一标识串，同一个事件来源里必须唯一
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets source
    *  事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source 事件来源上下文标识串，source+id可以唯一确定一个事件。采用URI-Reference格式，参考https://tools.ietf.org/html/rfc3986#section-4.1
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets specversion
    *  CloudEvents协议版本，格式为major.minor
    *
    * @return string
    */
    public function getSpecversion()
    {
        return $this->container['specversion'];
    }

    /**
    * Sets specversion
    *
    * @param string $specversion CloudEvents协议版本，格式为major.minor
    *
    * @return $this
    */
    public function setSpecversion($specversion)
    {
        $this->container['specversion'] = $specversion;
        return $this;
    }

    /**
    * Gets type
    *  事件类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 事件类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets datacontenttype
    *  事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    *
    * @return string|null
    */
    public function getDatacontenttype()
    {
        return $this->container['datacontenttype'];
    }

    /**
    * Sets datacontenttype
    *
    * @param string|null $datacontenttype 事件内容格式，采用MIME格式，遵循RFC2046，参考https://tools.ietf.org/html/rfc2046
    *
    * @return $this
    */
    public function setDatacontenttype($datacontenttype)
    {
        $this->container['datacontenttype'] = $datacontenttype;
        return $this;
    }

    /**
    * Gets dataschema
    *  事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    *
    * @return string|null
    */
    public function getDataschema()
    {
        return $this->container['dataschema'];
    }

    /**
    * Sets dataschema
    *
    * @param string|null $dataschema 事件内容模型定义的URI，遵循RFC3986，参考https://tools.ietf.org/html/rfc3986#section-4.3
    *
    * @return $this
    */
    public function setDataschema($dataschema)
    {
        $this->container['dataschema'] = $dataschema;
        return $this;
    }

    /**
    * Gets data
    *  事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    *
    * @return object|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param object|null $data 事件的负载内容，采用datacontenttype字段指定的格式，内容字段遵循dataschema字段的描述
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets time
    *  事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 事件发生UTC日期时间，相同来源的事件格式相同，遵循RFC3339，格式需满足2018-04-05T17:31:00Z，参考https://tools.ietf.org/html/rfc3339
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets subject
    *  事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 事件发生的主题或对象，用以标识哪个具体对象发生了当前事件
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
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

