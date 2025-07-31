<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicZonesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicZonesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * links  links
    * zones  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'zones' => '\HuaweiCloud\SDK\Dns\V2\Model\PublicZoneResp[]',
            'metadata' => '\HuaweiCloud\SDK\Dns\V2\Model\Metadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * links  links
    * zones  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'links' => null,
        'zones' => null,
        'metadata' => null
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
    * links  links
    * zones  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'links' => 'links',
            'zones' => 'zones',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * links  links
    * zones  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'links' => 'setLinks',
            'zones' => 'setZones',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * links  links
    * zones  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'links' => 'getLinks',
            'zones' => 'getZones',
            'metadata' => 'getMetadata'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['zones'] = isset($data['zones']) ? $data['zones'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets zones
    *  **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PublicZoneResp[]|null
    */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
    * Sets zones
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PublicZoneResp[]|null $zones **参数解释：** 查询公网域名的列表响应。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZones($zones)
    {
        $this->container['zones'] = $zones;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Metadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Metadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

