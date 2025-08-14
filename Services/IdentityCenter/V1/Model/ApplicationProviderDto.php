<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationProviderDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationProviderDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationProviderUrn  应用程序提供者URN
    * displayData  displayData
    * federationProtocol  支持的协议
    * applicationProviderId  应用程序提供者唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationProviderUrn' => 'string',
            'displayData' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDataDto',
            'federationProtocol' => 'string',
            'applicationProviderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationProviderUrn  应用程序提供者URN
    * displayData  displayData
    * federationProtocol  支持的协议
    * applicationProviderId  应用程序提供者唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationProviderUrn' => null,
        'displayData' => null,
        'federationProtocol' => null,
        'applicationProviderId' => null
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
    * applicationProviderUrn  应用程序提供者URN
    * displayData  displayData
    * federationProtocol  支持的协议
    * applicationProviderId  应用程序提供者唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationProviderUrn' => 'application_provider_urn',
            'displayData' => 'display_data',
            'federationProtocol' => 'federation_protocol',
            'applicationProviderId' => 'application_provider_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationProviderUrn  应用程序提供者URN
    * displayData  displayData
    * federationProtocol  支持的协议
    * applicationProviderId  应用程序提供者唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationProviderUrn' => 'setApplicationProviderUrn',
            'displayData' => 'setDisplayData',
            'federationProtocol' => 'setFederationProtocol',
            'applicationProviderId' => 'setApplicationProviderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationProviderUrn  应用程序提供者URN
    * displayData  displayData
    * federationProtocol  支持的协议
    * applicationProviderId  应用程序提供者唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationProviderUrn' => 'getApplicationProviderUrn',
            'displayData' => 'getDisplayData',
            'federationProtocol' => 'getFederationProtocol',
            'applicationProviderId' => 'getApplicationProviderId'
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
    const FEDERATION_PROTOCOL_SAML = 'SAML';
    const FEDERATION_PROTOCOL_OAUTH = 'OAUTH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFederationProtocolAllowableValues()
    {
        return [
            self::FEDERATION_PROTOCOL_SAML,
            self::FEDERATION_PROTOCOL_OAUTH,
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
        $this->container['applicationProviderUrn'] = isset($data['applicationProviderUrn']) ? $data['applicationProviderUrn'] : null;
        $this->container['displayData'] = isset($data['displayData']) ? $data['displayData'] : null;
        $this->container['federationProtocol'] = isset($data['federationProtocol']) ? $data['federationProtocol'] : null;
        $this->container['applicationProviderId'] = isset($data['applicationProviderId']) ? $data['applicationProviderId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationProviderUrn'] === null) {
            $invalidProperties[] = "'applicationProviderUrn' can't be null";
        }
            $allowedValues = $this->getFederationProtocolAllowableValues();
                if (!is_null($this->container['federationProtocol']) && !in_array($this->container['federationProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'federationProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['applicationProviderId'] === null) {
            $invalidProperties[] = "'applicationProviderId' can't be null";
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
    * Gets applicationProviderUrn
    *  应用程序提供者URN
    *
    * @return string
    */
    public function getApplicationProviderUrn()
    {
        return $this->container['applicationProviderUrn'];
    }

    /**
    * Sets applicationProviderUrn
    *
    * @param string $applicationProviderUrn 应用程序提供者URN
    *
    * @return $this
    */
    public function setApplicationProviderUrn($applicationProviderUrn)
    {
        $this->container['applicationProviderUrn'] = $applicationProviderUrn;
        return $this;
    }

    /**
    * Gets displayData
    *  displayData
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDataDto|null
    */
    public function getDisplayData()
    {
        return $this->container['displayData'];
    }

    /**
    * Sets displayData
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDataDto|null $displayData displayData
    *
    * @return $this
    */
    public function setDisplayData($displayData)
    {
        $this->container['displayData'] = $displayData;
        return $this;
    }

    /**
    * Gets federationProtocol
    *  支持的协议
    *
    * @return string|null
    */
    public function getFederationProtocol()
    {
        return $this->container['federationProtocol'];
    }

    /**
    * Sets federationProtocol
    *
    * @param string|null $federationProtocol 支持的协议
    *
    * @return $this
    */
    public function setFederationProtocol($federationProtocol)
    {
        $this->container['federationProtocol'] = $federationProtocol;
        return $this;
    }

    /**
    * Gets applicationProviderId
    *  应用程序提供者唯一标识符（ID）
    *
    * @return string
    */
    public function getApplicationProviderId()
    {
        return $this->container['applicationProviderId'];
    }

    /**
    * Sets applicationProviderId
    *
    * @param string $applicationProviderId 应用程序提供者唯一标识符（ID）
    *
    * @return $this
    */
    public function setApplicationProviderId($applicationProviderId)
    {
        $this->container['applicationProviderId'] = $applicationProviderId;
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

