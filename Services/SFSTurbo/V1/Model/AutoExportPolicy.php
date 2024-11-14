<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoExportPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoExportPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * events  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'events' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * events  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'events' => null
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
    * events  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * events  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * events  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'events' => 'getEvents'
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
    const EVENTS__NEW = 'NEW';
    const EVENTS_CHANGED = 'CHANGED';
    const EVENTS_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS__NEW,
            self::EVENTS_CHANGED,
            self::EVENTS_DELETED,
        ];
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
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
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
    * Gets events
    *  后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @return string[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[]|null $events 后端存储自动导出到OBS桶的数据更新类型。 - NEW：表示新增数据，SFS Turbo联动目录下创建的文件，及之后对这些文件进行的元数据和数据修改，会被自动同步到OBS桶里。 - CHANGED：表示修改数据，从OBS桶里导入到SFS Turbo联动目录下的文件，在SFS Turbo上对这些文件所进行的数据和元数据的修改，会被自动同步到OBS桶里。 - DELETED：表示删除数据，在SFS Turbo联动目录下删除文件，OBS桶对应的对象也会被删除，只有被SFS Turbo写入的OBS对象才会被删除。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
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

