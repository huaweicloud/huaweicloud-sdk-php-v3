<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLandingZoneConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLandingZoneConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commonConfiguration  commonConfiguration
    * loggingConfiguration  loggingConfiguration
    * organizationStructure  organizationStructure
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commonConfiguration' => '\HuaweiCloud\SDK\Rgc\V1\Model\CommonConfiguration',
            'loggingConfiguration' => '\HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration',
            'organizationStructure' => '\HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLineRsp[]',
            'regions' => '\HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commonConfiguration  commonConfiguration
    * loggingConfiguration  loggingConfiguration
    * organizationStructure  organizationStructure
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commonConfiguration' => null,
        'loggingConfiguration' => null,
        'organizationStructure' => null,
        'regions' => null
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
    * commonConfiguration  commonConfiguration
    * loggingConfiguration  loggingConfiguration
    * organizationStructure  organizationStructure
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commonConfiguration' => 'common_configuration',
            'loggingConfiguration' => 'logging_configuration',
            'organizationStructure' => 'organization_structure',
            'regions' => 'regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commonConfiguration  commonConfiguration
    * loggingConfiguration  loggingConfiguration
    * organizationStructure  organizationStructure
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'commonConfiguration' => 'setCommonConfiguration',
            'loggingConfiguration' => 'setLoggingConfiguration',
            'organizationStructure' => 'setOrganizationStructure',
            'regions' => 'setRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commonConfiguration  commonConfiguration
    * loggingConfiguration  loggingConfiguration
    * organizationStructure  organizationStructure
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'commonConfiguration' => 'getCommonConfiguration',
            'loggingConfiguration' => 'getLoggingConfiguration',
            'organizationStructure' => 'getOrganizationStructure',
            'regions' => 'getRegions'
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
        $this->container['commonConfiguration'] = isset($data['commonConfiguration']) ? $data['commonConfiguration'] : null;
        $this->container['loggingConfiguration'] = isset($data['loggingConfiguration']) ? $data['loggingConfiguration'] : null;
        $this->container['organizationStructure'] = isset($data['organizationStructure']) ? $data['organizationStructure'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
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
    * Gets commonConfiguration
    *  commonConfiguration
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\CommonConfiguration|null
    */
    public function getCommonConfiguration()
    {
        return $this->container['commonConfiguration'];
    }

    /**
    * Sets commonConfiguration
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\CommonConfiguration|null $commonConfiguration commonConfiguration
    *
    * @return $this
    */
    public function setCommonConfiguration($commonConfiguration)
    {
        $this->container['commonConfiguration'] = $commonConfiguration;
        return $this;
    }

    /**
    * Gets loggingConfiguration
    *  loggingConfiguration
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration|null
    */
    public function getLoggingConfiguration()
    {
        return $this->container['loggingConfiguration'];
    }

    /**
    * Sets loggingConfiguration
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration|null $loggingConfiguration loggingConfiguration
    *
    * @return $this
    */
    public function setLoggingConfiguration($loggingConfiguration)
    {
        $this->container['loggingConfiguration'] = $loggingConfiguration;
        return $this;
    }

    /**
    * Gets organizationStructure
    *  organizationStructure
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLineRsp[]|null
    */
    public function getOrganizationStructure()
    {
        return $this->container['organizationStructure'];
    }

    /**
    * Sets organizationStructure
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLineRsp[]|null $organizationStructure organizationStructure
    *
    * @return $this
    */
    public function setOrganizationStructure($organizationStructure)
    {
        $this->container['organizationStructure'] = $organizationStructure;
        return $this;
    }

    /**
    * Gets regions
    *  纳管的区域信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null $regions 纳管的区域信息。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
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

