<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PulsarForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PulsarForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  **参数说明**：pulsar的访问url。
    * topic  **参数说明**：用于接收满足规则条件数据的topic。
    * certId  **参数说明**：证书id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'topic' => 'string',
            'certId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  **参数说明**：pulsar的访问url。
    * topic  **参数说明**：用于接收满足规则条件数据的topic。
    * certId  **参数说明**：证书id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'topic' => null,
        'certId' => null
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
    * url  **参数说明**：pulsar的访问url。
    * topic  **参数说明**：用于接收满足规则条件数据的topic。
    * certId  **参数说明**：证书id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'topic' => 'topic',
            'certId' => 'cert_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  **参数说明**：pulsar的访问url。
    * topic  **参数说明**：用于接收满足规则条件数据的topic。
    * certId  **参数说明**：证书id
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'topic' => 'setTopic',
            'certId' => 'setCertId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  **参数说明**：pulsar的访问url。
    * topic  **参数说明**：用于接收满足规则条件数据的topic。
    * certId  **参数说明**：证书id
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'topic' => 'getTopic',
            'certId' => 'getCertId'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 512)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 256)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 64)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 1)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 1.";
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
    * Gets url
    *  **参数说明**：pulsar的访问url。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url **参数说明**：pulsar的访问url。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：用于接收满足规则条件数据的topic。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数说明**：用于接收满足规则条件数据的topic。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets certId
    *  **参数说明**：证书id
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId **参数说明**：证书id
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
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

