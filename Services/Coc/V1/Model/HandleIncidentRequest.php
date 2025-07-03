<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandleIncidentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandleIncidentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * incidentId  事件单ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'incidentId' => 'string',
            'body' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecuteActionParamsV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * incidentId  事件单ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'incidentId' => null,
        'body' => null
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
    * incidentId  事件单ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'incidentId' => 'incident_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * incidentId  事件单ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'incidentId' => 'setIncidentId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * incidentId  事件单ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'incidentId' => 'getIncidentId',
            'body' => 'getBody'
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
        $this->container['incidentId'] = isset($data['incidentId']) ? $data['incidentId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['incidentId'] === null) {
            $invalidProperties[] = "'incidentId' can't be null";
        }
            if ((mb_strlen($this->container['incidentId']) > 50)) {
                $invalidProperties[] = "invalid value for 'incidentId', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['incidentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'incidentId', the character length must be bigger than or equal to 1.";
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
    * Gets incidentId
    *  事件单ID
    *
    * @return string
    */
    public function getIncidentId()
    {
        return $this->container['incidentId'];
    }

    /**
    * Sets incidentId
    *
    * @param string $incidentId 事件单ID
    *
    * @return $this
    */
    public function setIncidentId($incidentId)
    {
        $this->container['incidentId'] = $incidentId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecuteActionParamsV2|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecuteActionParamsV2|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

