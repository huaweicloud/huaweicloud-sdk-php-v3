<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEsListenerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEsListenerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议类型，支持HTTP、HTTPS
    * protocolPort  端口。
    * serverCertId  server证书Id。如protocol为HTTPS则该字段必选。
    * caCertId  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    * type  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'protocolPort' => 'int',
            'serverCertId' => 'string',
            'caCertId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议类型，支持HTTP、HTTPS
    * protocolPort  端口。
    * serverCertId  server证书Id。如protocol为HTTPS则该字段必选。
    * caCertId  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    * type  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'protocolPort' => null,
        'serverCertId' => null,
        'caCertId' => null,
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
    * protocol  协议类型，支持HTTP、HTTPS
    * protocolPort  端口。
    * serverCertId  server证书Id。如protocol为HTTPS则该字段必选。
    * caCertId  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    * type  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'protocolPort' => 'protocol_port',
            'serverCertId' => 'server_cert_id',
            'caCertId' => 'ca_cert_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议类型，支持HTTP、HTTPS
    * protocolPort  端口。
    * serverCertId  server证书Id。如protocol为HTTPS则该字段必选。
    * caCertId  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    * type  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'protocolPort' => 'setProtocolPort',
            'serverCertId' => 'setServerCertId',
            'caCertId' => 'setCaCertId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议类型，支持HTTP、HTTPS
    * protocolPort  端口。
    * serverCertId  server证书Id。如protocol为HTTPS则该字段必选。
    * caCertId  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    * type  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'protocolPort' => 'getProtocolPort',
            'serverCertId' => 'getServerCertId',
            'caCertId' => 'getCaCertId',
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['serverCertId'] = isset($data['serverCertId']) ? $data['serverCertId'] : null;
        $this->container['caCertId'] = isset($data['caCertId']) ? $data['caCertId'] : null;
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
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
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
    * Gets protocol
    *  协议类型，支持HTTP、HTTPS
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议类型，支持HTTP、HTTPS
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocolPort
    *  端口。
    *
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort 端口。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets serverCertId
    *  server证书Id。如protocol为HTTPS则该字段必选。
    *
    * @return string|null
    */
    public function getServerCertId()
    {
        return $this->container['serverCertId'];
    }

    /**
    * Sets serverCertId
    *
    * @param string|null $serverCertId server证书Id。如protocol为HTTPS则该字段必选。
    *
    * @return $this
    */
    public function setServerCertId($serverCertId)
    {
        $this->container['serverCertId'] = $serverCertId;
        return $this;
    }

    /**
    * Gets caCertId
    *  CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    *
    * @return string|null
    */
    public function getCaCertId()
    {
        return $this->container['caCertId'];
    }

    /**
    * Sets caCertId
    *
    * @param string|null $caCertId CA证书Id。如protocol为HTTPS且为双向认证时则该字段必选。
    *
    * @return $this
    */
    public function setCaCertId($caCertId)
    {
        $this->container['caCertId'] = $caCertId;
        return $this;
    }

    /**
    * Gets type
    *  类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型：searchTool 表示对Elasticsearch/Opensearch进行监听器配，viewTool 表示对Kibana/Opensearch Dashboard进行监听器配置，默认为searchTool 。
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

