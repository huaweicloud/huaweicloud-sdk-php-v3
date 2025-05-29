<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WarRoomIncident implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WarRoomIncident';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键
    * incidentId  事件id
    * isChangeEvent  是否变更事件
    * failureLevel  事件级别
    * incidentUrl  事件单号链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'incidentId' => 'string',
            'isChangeEvent' => 'bool',
            'failureLevel' => 'string',
            'incidentUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键
    * incidentId  事件id
    * isChangeEvent  是否变更事件
    * failureLevel  事件级别
    * incidentUrl  事件单号链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'incidentId' => null,
        'isChangeEvent' => null,
        'failureLevel' => null,
        'incidentUrl' => null
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
    * id  主键
    * incidentId  事件id
    * isChangeEvent  是否变更事件
    * failureLevel  事件级别
    * incidentUrl  事件单号链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'incidentId' => 'incident_id',
            'isChangeEvent' => 'is_change_event',
            'failureLevel' => 'failure_level',
            'incidentUrl' => 'incident_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键
    * incidentId  事件id
    * isChangeEvent  是否变更事件
    * failureLevel  事件级别
    * incidentUrl  事件单号链接
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'incidentId' => 'setIncidentId',
            'isChangeEvent' => 'setIsChangeEvent',
            'failureLevel' => 'setFailureLevel',
            'incidentUrl' => 'setIncidentUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键
    * incidentId  事件id
    * isChangeEvent  是否变更事件
    * failureLevel  事件级别
    * incidentUrl  事件单号链接
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'incidentId' => 'getIncidentId',
            'isChangeEvent' => 'getIsChangeEvent',
            'failureLevel' => 'getFailureLevel',
            'incidentUrl' => 'getIncidentUrl'
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
        $this->container['incidentId'] = isset($data['incidentId']) ? $data['incidentId'] : null;
        $this->container['isChangeEvent'] = isset($data['isChangeEvent']) ? $data['isChangeEvent'] : null;
        $this->container['failureLevel'] = isset($data['failureLevel']) ? $data['failureLevel'] : null;
        $this->container['incidentUrl'] = isset($data['incidentUrl']) ? $data['incidentUrl'] : null;
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
            if ((mb_strlen($this->container['id']) > 100)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentId']) && (mb_strlen($this->container['incidentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'incidentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['incidentId']) && (mb_strlen($this->container['incidentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failureLevel']) && (mb_strlen($this->container['failureLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'failureLevel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['failureLevel']) && (mb_strlen($this->container['failureLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'failureLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentUrl']) && (mb_strlen($this->container['incidentUrl']) > 20000)) {
                $invalidProperties[] = "invalid value for 'incidentUrl', the character length must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['incidentUrl']) && (mb_strlen($this->container['incidentUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentUrl', the character length must be bigger than or equal to 0.";
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
    *  主键
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
    * @param string $id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets incidentId
    *  事件id
    *
    * @return string|null
    */
    public function getIncidentId()
    {
        return $this->container['incidentId'];
    }

    /**
    * Sets incidentId
    *
    * @param string|null $incidentId 事件id
    *
    * @return $this
    */
    public function setIncidentId($incidentId)
    {
        $this->container['incidentId'] = $incidentId;
        return $this;
    }

    /**
    * Gets isChangeEvent
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsChangeEvent()
    {
        return $this->container['isChangeEvent'];
    }

    /**
    * Sets isChangeEvent
    *
    * @param bool|null $isChangeEvent 是否变更事件
    *
    * @return $this
    */
    public function setIsChangeEvent($isChangeEvent)
    {
        $this->container['isChangeEvent'] = $isChangeEvent;
        return $this;
    }

    /**
    * Gets failureLevel
    *  事件级别
    *
    * @return string|null
    */
    public function getFailureLevel()
    {
        return $this->container['failureLevel'];
    }

    /**
    * Sets failureLevel
    *
    * @param string|null $failureLevel 事件级别
    *
    * @return $this
    */
    public function setFailureLevel($failureLevel)
    {
        $this->container['failureLevel'] = $failureLevel;
        return $this;
    }

    /**
    * Gets incidentUrl
    *  事件单号链接
    *
    * @return string|null
    */
    public function getIncidentUrl()
    {
        return $this->container['incidentUrl'];
    }

    /**
    * Sets incidentUrl
    *
    * @param string|null $incidentUrl 事件单号链接
    *
    * @return $this
    */
    public function setIncidentUrl($incidentUrl)
    {
        $this->container['incidentUrl'] = $incidentUrl;
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

