<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServerBlockDevicesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServerBlockDevicesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachableQuantity  attachableQuantity
    * volumeAttachments  云服务器挂载信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachableQuantity' => '\HuaweiCloud\SDK\Ecs\V2\Model\BlockDeviceAttachableQuantity',
            'volumeAttachments' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerBlockDevice[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachableQuantity  attachableQuantity
    * volumeAttachments  云服务器挂载信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachableQuantity' => null,
        'volumeAttachments' => null
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
    * attachableQuantity  attachableQuantity
    * volumeAttachments  云服务器挂载信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachableQuantity' => 'attachableQuantity',
            'volumeAttachments' => 'volumeAttachments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachableQuantity  attachableQuantity
    * volumeAttachments  云服务器挂载信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'attachableQuantity' => 'setAttachableQuantity',
            'volumeAttachments' => 'setVolumeAttachments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachableQuantity  attachableQuantity
    * volumeAttachments  云服务器挂载信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'attachableQuantity' => 'getAttachableQuantity',
            'volumeAttachments' => 'getVolumeAttachments'
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
        $this->container['attachableQuantity'] = isset($data['attachableQuantity']) ? $data['attachableQuantity'] : null;
        $this->container['volumeAttachments'] = isset($data['volumeAttachments']) ? $data['volumeAttachments'] : null;
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
    * Gets attachableQuantity
    *  attachableQuantity
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\BlockDeviceAttachableQuantity|null
    */
    public function getAttachableQuantity()
    {
        return $this->container['attachableQuantity'];
    }

    /**
    * Sets attachableQuantity
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\BlockDeviceAttachableQuantity|null $attachableQuantity attachableQuantity
    *
    * @return $this
    */
    public function setAttachableQuantity($attachableQuantity)
    {
        $this->container['attachableQuantity'] = $attachableQuantity;
        return $this;
    }

    /**
    * Gets volumeAttachments
    *  云服务器挂载信息列表。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerBlockDevice[]|null
    */
    public function getVolumeAttachments()
    {
        return $this->container['volumeAttachments'];
    }

    /**
    * Sets volumeAttachments
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerBlockDevice[]|null $volumeAttachments 云服务器挂载信息列表。
    *
    * @return $this
    */
    public function setVolumeAttachments($volumeAttachments)
    {
        $this->container['volumeAttachments'] = $volumeAttachments;
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

