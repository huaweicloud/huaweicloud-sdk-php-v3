<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainAddressId  **参数解释**： 域名地址id **取值范围**： 不涉及
    * domainName  **参数解释**： 域名 **取值范围**： 不涉及
    * description  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainAddressId' => 'string',
            'domainName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainAddressId  **参数解释**： 域名地址id **取值范围**： 不涉及
    * domainName  **参数解释**： 域名 **取值范围**： 不涉及
    * description  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainAddressId' => null,
        'domainName' => null,
        'description' => null
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
    * domainAddressId  **参数解释**： 域名地址id **取值范围**： 不涉及
    * domainName  **参数解释**： 域名 **取值范围**： 不涉及
    * description  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainAddressId' => 'domain_address_id',
            'domainName' => 'domain_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainAddressId  **参数解释**： 域名地址id **取值范围**： 不涉及
    * domainName  **参数解释**： 域名 **取值范围**： 不涉及
    * description  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'domainAddressId' => 'setDomainAddressId',
            'domainName' => 'setDomainName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainAddressId  **参数解释**： 域名地址id **取值范围**： 不涉及
    * domainName  **参数解释**： 域名 **取值范围**： 不涉及
    * description  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'domainAddressId' => 'getDomainAddressId',
            'domainName' => 'getDomainName',
            'description' => 'getDescription'
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
        $this->container['domainAddressId'] = isset($data['domainAddressId']) ? $data['domainAddressId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets domainAddressId
    *  **参数解释**： 域名地址id **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDomainAddressId()
    {
        return $this->container['domainAddressId'];
    }

    /**
    * Sets domainAddressId
    *
    * @param string|null $domainAddressId **参数解释**： 域名地址id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDomainAddressId($domainAddressId)
    {
        $this->container['domainAddressId'] = $domainAddressId;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**： 域名 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释**： 域名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 域名描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

