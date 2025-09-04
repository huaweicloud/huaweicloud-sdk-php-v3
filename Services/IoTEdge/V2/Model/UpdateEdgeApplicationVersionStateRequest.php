<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEdgeApplicationVersionStateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEdgeApplicationVersionStateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用ID，应用唯一标识。
    * version  应用版本,应用内版本唯一。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'version' => 'string',
            'body' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeAppVersionStateDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用ID，应用唯一标识。
    * version  应用版本,应用内版本唯一。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'version' => null,
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
    * edgeAppId  应用ID，应用唯一标识。
    * version  应用版本,应用内版本唯一。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'version' => 'version',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用ID，应用唯一标识。
    * version  应用版本,应用内版本唯一。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'version' => 'setVersion',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用ID，应用唯一标识。
    * version  应用版本,应用内版本唯一。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'version' => 'getVersion',
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
        if ($this->container['edgeAppId'] === null) {
            $invalidProperties[] = "'edgeAppId' can't be null";
        }
            if ((mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['edgeAppId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets edgeAppId
    *  应用ID，应用唯一标识。
    *
    * @return string
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string $edgeAppId 应用ID，应用唯一标识。
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets version
    *  应用版本,应用内版本唯一。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 应用版本,应用内版本唯一。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeAppVersionStateDTO|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeAppVersionStateDTO|null $body body
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

