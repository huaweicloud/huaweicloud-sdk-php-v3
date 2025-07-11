<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServerRequestServerCertificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServerRequest_server_certificate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    * source  证书来源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'source' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    * source  证书来源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'source' => null
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
    * id  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    * source  证书来源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    * source  证书来源
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    * source  证书来源
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'source' => 'getSource'
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
    const SOURCE_CCM = 'CCM';
    const SOURCE_SERVICE_SIGN = 'SERVICE_SIGN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_CCM,
            self::SOURCE_SERVICE_SIGN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 16.";
            }
            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
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
    * @param string|null $id 服务端证书ID,为CCM服务中的证书ID。服务端证书类型为CCM时，必填
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets source
    *  证书来源
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
    * @param string|null $source 证书来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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

