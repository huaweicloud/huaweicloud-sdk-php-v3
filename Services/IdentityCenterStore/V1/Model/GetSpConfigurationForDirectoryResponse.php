<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetSpConfigurationForDirectoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetSpConfigurationForDirectoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * spOidcConfig  spOidcConfig
    * spSamlConfig  spSamlConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'spOidcConfig' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPOIDCConfig',
            'spSamlConfig' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * spOidcConfig  spOidcConfig
    * spSamlConfig  spSamlConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'spOidcConfig' => null,
        'spSamlConfig' => null
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
    * spOidcConfig  spOidcConfig
    * spSamlConfig  spSamlConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'spOidcConfig' => 'sp_oidc_config',
            'spSamlConfig' => 'sp_saml_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * spOidcConfig  spOidcConfig
    * spSamlConfig  spSamlConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'spOidcConfig' => 'setSpOidcConfig',
            'spSamlConfig' => 'setSpSamlConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * spOidcConfig  spOidcConfig
    * spSamlConfig  spSamlConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'spOidcConfig' => 'getSpOidcConfig',
            'spSamlConfig' => 'getSpSamlConfig'
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
        $this->container['spOidcConfig'] = isset($data['spOidcConfig']) ? $data['spOidcConfig'] : null;
        $this->container['spSamlConfig'] = isset($data['spSamlConfig']) ? $data['spSamlConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets spOidcConfig
    *  spOidcConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPOIDCConfig|null
    */
    public function getSpOidcConfig()
    {
        return $this->container['spOidcConfig'];
    }

    /**
    * Sets spOidcConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPOIDCConfig|null $spOidcConfig spOidcConfig
    *
    * @return $this
    */
    public function setSpOidcConfig($spOidcConfig)
    {
        $this->container['spOidcConfig'] = $spOidcConfig;
        return $this;
    }

    /**
    * Gets spSamlConfig
    *  spSamlConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig|null
    */
    public function getSpSamlConfig()
    {
        return $this->container['spSamlConfig'];
    }

    /**
    * Sets spSamlConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig|null $spSamlConfig spSamlConfig
    *
    * @return $this
    */
    public function setSpSamlConfig($spSamlConfig)
    {
        $this->container['spSamlConfig'] = $spSamlConfig;
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

