<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPtrRecordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPtrRecordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * links  links
    * metadata  metadata
    * floatingips  弹性公网IP的PTR记录ID列表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'metadata' => '\HuaweiCloud\SDK\Dns\V2\Model\Metadata',
            'floatingips' => '\HuaweiCloud\SDK\Dns\V2\Model\ListPtrRecordsFloatingResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * links  links
    * metadata  metadata
    * floatingips  弹性公网IP的PTR记录ID列表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'links' => null,
        'metadata' => null,
        'floatingips' => null
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
    * metadata  metadata
    * floatingips  弹性公网IP的PTR记录ID列表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'links' => 'links',
            'metadata' => 'metadata',
            'floatingips' => 'floatingips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * links  links
    * metadata  metadata
    * floatingips  弹性公网IP的PTR记录ID列表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'links' => 'setLinks',
            'metadata' => 'setMetadata',
            'floatingips' => 'setFloatingips'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * links  links
    * metadata  metadata
    * floatingips  弹性公网IP的PTR记录ID列表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'links' => 'getLinks',
            'metadata' => 'getMetadata',
            'floatingips' => 'getFloatingips'
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
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['floatingips'] = isset($data['floatingips']) ? $data['floatingips'] : null;
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
    * Gets floatingips
    *  弹性公网IP的PTR记录ID列表信息。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\ListPtrRecordsFloatingResp[]|null
    */
    public function getFloatingips()
    {
        return $this->container['floatingips'];
    }

    /**
    * Sets floatingips
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\ListPtrRecordsFloatingResp[]|null $floatingips 弹性公网IP的PTR记录ID列表信息。
    *
    * @return $this
    */
    public function setFloatingips($floatingips)
    {
        $this->container['floatingips'] = $floatingips;
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

