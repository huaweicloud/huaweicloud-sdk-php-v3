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
    * source  source
    * state  state
    * description  description
    * id  id
    * filename  filename
    * obsname  obsname
    * tenantid  tenantid
    * start  start
    * end  end
    * total  total
    * url  url
    * urltimestamp  urltimestamp
    * timestamp  timestamp
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
    * source  source
    * state  state
    * description  description
    * id  id
    * filename  filename
    * obsname  obsname
    * tenantid  tenantid
    * start  start
    * end  end
    * total  total
    * url  url
    * urltimestamp  urltimestamp
    * timestamp  timestamp
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
    * source  source
    * state  state
    * description  description
    * id  id
    * filename  filename
    * obsname  obsname
    * tenantid  tenantid
    * start  start
    * end  end
    * total  total
    * url  url
    * urltimestamp  urltimestamp
    * timestamp  timestamp
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
    * source  source
    * state  state
    * description  description
    * id  id
    * filename  filename
    * obsname  obsname
    * tenantid  tenantid
    * start  start
    * end  end
    * total  total
    * url  url
    * urltimestamp  urltimestamp
    * timestamp  timestamp
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
    * source  source
    * state  state
    * description  description
    * id  id
    * filename  filename
    * obsname  obsname
    * tenantid  tenantid
    * start  start
    * end  end
    * total  total
    * url  url
    * urltimestamp  urltimestamp
    * timestamp  timestamp
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
    *  source
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
    * @param string|null $source source
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
    *  state
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
    * @param string|null $state state
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
    *  description
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
    * @param string|null $description description
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
    *  id
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
    * @param string|null $id id
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
    *  filename
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
    * @param string|null $filename filename
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
    *  obsname
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
    * @param string|null $obsname obsname
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
    *  tenantid
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
    * @param string|null $tenantid tenantid
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
    *  start
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
    * @param int|null $start start
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
    *  end
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
    * @param int|null $end end
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
    *  total
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
    * @param int|null $total total
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
    *  url
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
    * @param string|null $url url
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
    *  urltimestamp
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
    * @param int|null $urltimestamp urltimestamp
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
    *  timestamp
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
    * @param int|null $timestamp timestamp
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

