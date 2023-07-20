<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Events implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Events';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * annotations  annotations
    * metadata  metadata
    * arrivesAt  到达时间(时间戳)
    * endsAt  告警清除时间(时间戳)
    * id  告警id
    * startsAt  告警产生时间(时间戳)
    * timeout  告警自动清除时间(时间戳)
    * type  告警规则类型(SQL/关键词)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'annotations' => '\HuaweiCloud\SDK\Lts\V2\Model\Annotations',
            'metadata' => '\HuaweiCloud\SDK\Lts\V2\Model\Metadata',
            'arrivesAt' => 'int',
            'endsAt' => 'int',
            'id' => 'string',
            'startsAt' => 'int',
            'timeout' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * annotations  annotations
    * metadata  metadata
    * arrivesAt  到达时间(时间戳)
    * endsAt  告警清除时间(时间戳)
    * id  告警id
    * startsAt  告警产生时间(时间戳)
    * timeout  告警自动清除时间(时间戳)
    * type  告警规则类型(SQL/关键词)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'annotations' => null,
        'metadata' => null,
        'arrivesAt' => 'int64',
        'endsAt' => 'int64',
        'id' => null,
        'startsAt' => 'int64',
        'timeout' => 'int64',
        'type' => null
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
    * annotations  annotations
    * metadata  metadata
    * arrivesAt  到达时间(时间戳)
    * endsAt  告警清除时间(时间戳)
    * id  告警id
    * startsAt  告警产生时间(时间戳)
    * timeout  告警自动清除时间(时间戳)
    * type  告警规则类型(SQL/关键词)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'annotations' => 'annotations',
            'metadata' => 'metadata',
            'arrivesAt' => 'arrives_at',
            'endsAt' => 'ends_at',
            'id' => 'id',
            'startsAt' => 'starts_at',
            'timeout' => 'timeout',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * annotations  annotations
    * metadata  metadata
    * arrivesAt  到达时间(时间戳)
    * endsAt  告警清除时间(时间戳)
    * id  告警id
    * startsAt  告警产生时间(时间戳)
    * timeout  告警自动清除时间(时间戳)
    * type  告警规则类型(SQL/关键词)
    *
    * @var string[]
    */
    protected static $setters = [
            'annotations' => 'setAnnotations',
            'metadata' => 'setMetadata',
            'arrivesAt' => 'setArrivesAt',
            'endsAt' => 'setEndsAt',
            'id' => 'setId',
            'startsAt' => 'setStartsAt',
            'timeout' => 'setTimeout',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * annotations  annotations
    * metadata  metadata
    * arrivesAt  到达时间(时间戳)
    * endsAt  告警清除时间(时间戳)
    * id  告警id
    * startsAt  告警产生时间(时间戳)
    * timeout  告警自动清除时间(时间戳)
    * type  告警规则类型(SQL/关键词)
    *
    * @var string[]
    */
    protected static $getters = [
            'annotations' => 'getAnnotations',
            'metadata' => 'getMetadata',
            'arrivesAt' => 'getArrivesAt',
            'endsAt' => 'getEndsAt',
            'id' => 'getId',
            'startsAt' => 'getStartsAt',
            'timeout' => 'getTimeout',
            'type' => 'getType'
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
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['arrivesAt'] = isset($data['arrivesAt']) ? $data['arrivesAt'] : null;
        $this->container['endsAt'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startsAt'] = isset($data['startsAt']) ? $data['startsAt'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['annotations'] === null) {
            $invalidProperties[] = "'annotations' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['arrivesAt'] === null) {
            $invalidProperties[] = "'arrivesAt' can't be null";
        }
        if ($this->container['endsAt'] === null) {
            $invalidProperties[] = "'endsAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startsAt'] === null) {
            $invalidProperties[] = "'startsAt' can't be null";
        }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets annotations
    *  annotations
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Annotations
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Annotations $annotations annotations
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Metadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Metadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets arrivesAt
    *  到达时间(时间戳)
    *
    * @return int
    */
    public function getArrivesAt()
    {
        return $this->container['arrivesAt'];
    }

    /**
    * Sets arrivesAt
    *
    * @param int $arrivesAt 到达时间(时间戳)
    *
    * @return $this
    */
    public function setArrivesAt($arrivesAt)
    {
        $this->container['arrivesAt'] = $arrivesAt;
        return $this;
    }

    /**
    * Gets endsAt
    *  告警清除时间(时间戳)
    *
    * @return int
    */
    public function getEndsAt()
    {
        return $this->container['endsAt'];
    }

    /**
    * Sets endsAt
    *
    * @param int $endsAt 告警清除时间(时间戳)
    *
    * @return $this
    */
    public function setEndsAt($endsAt)
    {
        $this->container['endsAt'] = $endsAt;
        return $this;
    }

    /**
    * Gets id
    *  告警id
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
    * @param string $id 告警id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startsAt
    *  告警产生时间(时间戳)
    *
    * @return int
    */
    public function getStartsAt()
    {
        return $this->container['startsAt'];
    }

    /**
    * Sets startsAt
    *
    * @param int $startsAt 告警产生时间(时间戳)
    *
    * @return $this
    */
    public function setStartsAt($startsAt)
    {
        $this->container['startsAt'] = $startsAt;
        return $this;
    }

    /**
    * Gets timeout
    *  告警自动清除时间(时间戳)
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 告警自动清除时间(时间戳)
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets type
    *  告警规则类型(SQL/关键词)
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
    * @param string $type 告警规则类型(SQL/关键词)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

