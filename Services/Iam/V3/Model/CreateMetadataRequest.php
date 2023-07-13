<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMetadataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMetadataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idpId  身份提供商ID。
    * protocolId  协议ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idpId' => 'string',
            'protocolId' => 'string',
            'body' => '\HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idpId  身份提供商ID。
    * protocolId  协议ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idpId' => null,
        'protocolId' => null,
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
    * idpId  身份提供商ID。
    * protocolId  协议ID。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idpId' => 'idp_id',
            'protocolId' => 'protocol_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idpId  身份提供商ID。
    * protocolId  协议ID。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'idpId' => 'setIdpId',
            'protocolId' => 'setProtocolId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idpId  身份提供商ID。
    * protocolId  协议ID。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'idpId' => 'getIdpId',
            'protocolId' => 'getProtocolId',
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
        $this->container['idpId'] = isset($data['idpId']) ? $data['idpId'] : null;
        $this->container['protocolId'] = isset($data['protocolId']) ? $data['protocolId'] : null;
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
        if ($this->container['idpId'] === null) {
            $invalidProperties[] = "'idpId' can't be null";
        }
        if ($this->container['protocolId'] === null) {
            $invalidProperties[] = "'protocolId' can't be null";
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
    * Gets idpId
    *  身份提供商ID。
    *
    * @return string
    */
    public function getIdpId()
    {
        return $this->container['idpId'];
    }

    /**
    * Sets idpId
    *
    * @param string $idpId 身份提供商ID。
    *
    * @return $this
    */
    public function setIdpId($idpId)
    {
        $this->container['idpId'] = $idpId;
        return $this;
    }

    /**
    * Gets protocolId
    *  协议ID。
    *
    * @return string
    */
    public function getProtocolId()
    {
        return $this->container['protocolId'];
    }

    /**
    * Sets protocolId
    *
    * @param string $protocolId 协议ID。
    *
    * @return $this
    */
    public function setProtocolId($protocolId)
    {
        $this->container['protocolId'] = $protocolId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataRequestBody|null $body body
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

