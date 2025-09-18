<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Area implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Area';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * id  大区ID。
    * enName  大区英文名称。
    * esName  大区西语名称。
    * ptName  大区葡语名称。
    * station  站点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'enName' => 'string',
            'esName' => 'string',
            'ptName' => 'string',
            'station' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * id  大区ID。
    * enName  大区英文名称。
    * esName  大区西语名称。
    * ptName  大区葡语名称。
    * station  站点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'enName' => null,
        'esName' => null,
        'ptName' => null,
        'station' => null
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
    * name  实例名称。
    * id  大区ID。
    * enName  大区英文名称。
    * esName  大区西语名称。
    * ptName  大区葡语名称。
    * station  站点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'enName' => 'en_name',
            'esName' => 'es_name',
            'ptName' => 'pt_name',
            'station' => 'station'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * id  大区ID。
    * enName  大区英文名称。
    * esName  大区西语名称。
    * ptName  大区葡语名称。
    * station  站点。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'enName' => 'setEnName',
            'esName' => 'setEsName',
            'ptName' => 'setPtName',
            'station' => 'setStation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * id  大区ID。
    * enName  大区英文名称。
    * esName  大区西语名称。
    * ptName  大区葡语名称。
    * station  站点。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'enName' => 'getEnName',
            'esName' => 'getEsName',
            'ptName' => 'getPtName',
            'station' => 'getStation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['esName'] = isset($data['esName']) ? $data['esName'] : null;
        $this->container['ptName'] = isset($data['ptName']) ? $data['ptName'] : null;
        $this->container['station'] = isset($data['station']) ? $data['station'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) > 36)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['esName']) && (mb_strlen($this->container['esName']) > 36)) {
                $invalidProperties[] = "invalid value for 'esName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['esName']) && (mb_strlen($this->container['esName']) < 0)) {
                $invalidProperties[] = "invalid value for 'esName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ptName']) && (mb_strlen($this->container['ptName']) > 36)) {
                $invalidProperties[] = "invalid value for 'ptName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ptName']) && (mb_strlen($this->container['ptName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ptName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['station']) && (mb_strlen($this->container['station']) > 36)) {
                $invalidProperties[] = "invalid value for 'station', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['station']) && (mb_strlen($this->container['station']) < 0)) {
                $invalidProperties[] = "invalid value for 'station', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  实例名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  大区ID。
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
    * @param string|null $id 大区ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enName
    *  大区英文名称。
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 大区英文名称。
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets esName
    *  大区西语名称。
    *
    * @return string|null
    */
    public function getEsName()
    {
        return $this->container['esName'];
    }

    /**
    * Sets esName
    *
    * @param string|null $esName 大区西语名称。
    *
    * @return $this
    */
    public function setEsName($esName)
    {
        $this->container['esName'] = $esName;
        return $this;
    }

    /**
    * Gets ptName
    *  大区葡语名称。
    *
    * @return string|null
    */
    public function getPtName()
    {
        return $this->container['ptName'];
    }

    /**
    * Sets ptName
    *
    * @param string|null $ptName 大区葡语名称。
    *
    * @return $this
    */
    public function setPtName($ptName)
    {
        $this->container['ptName'] = $ptName;
        return $this;
    }

    /**
    * Gets station
    *  站点。
    *
    * @return string|null
    */
    public function getStation()
    {
        return $this->container['station'];
    }

    /**
    * Sets station
    *
    * @param string|null $station 站点。
    *
    * @return $this
    */
    public function setStation($station)
    {
        $this->container['station'] = $station;
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

