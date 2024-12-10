<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepoTagRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepoTagRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceTag  源镜像版本名称
    * destinationTag  目标镜像版本名称
    * override  是否覆盖
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceTag' => 'string',
            'destinationTag' => 'string',
            'override' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceTag  源镜像版本名称
    * destinationTag  目标镜像版本名称
    * override  是否覆盖
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceTag' => null,
        'destinationTag' => null,
        'override' => null
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
    * sourceTag  源镜像版本名称
    * destinationTag  目标镜像版本名称
    * override  是否覆盖
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceTag' => 'source_tag',
            'destinationTag' => 'destination_tag',
            'override' => 'override'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceTag  源镜像版本名称
    * destinationTag  目标镜像版本名称
    * override  是否覆盖
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceTag' => 'setSourceTag',
            'destinationTag' => 'setDestinationTag',
            'override' => 'setOverride'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceTag  源镜像版本名称
    * destinationTag  目标镜像版本名称
    * override  是否覆盖
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceTag' => 'getSourceTag',
            'destinationTag' => 'getDestinationTag',
            'override' => 'getOverride'
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
        $this->container['sourceTag'] = isset($data['sourceTag']) ? $data['sourceTag'] : null;
        $this->container['destinationTag'] = isset($data['destinationTag']) ? $data['destinationTag'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceTag'] === null) {
            $invalidProperties[] = "'sourceTag' can't be null";
        }
        if ($this->container['destinationTag'] === null) {
            $invalidProperties[] = "'destinationTag' can't be null";
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
    * Gets sourceTag
    *  源镜像版本名称
    *
    * @return string
    */
    public function getSourceTag()
    {
        return $this->container['sourceTag'];
    }

    /**
    * Sets sourceTag
    *
    * @param string $sourceTag 源镜像版本名称
    *
    * @return $this
    */
    public function setSourceTag($sourceTag)
    {
        $this->container['sourceTag'] = $sourceTag;
        return $this;
    }

    /**
    * Gets destinationTag
    *  目标镜像版本名称
    *
    * @return string
    */
    public function getDestinationTag()
    {
        return $this->container['destinationTag'];
    }

    /**
    * Sets destinationTag
    *
    * @param string $destinationTag 目标镜像版本名称
    *
    * @return $this
    */
    public function setDestinationTag($destinationTag)
    {
        $this->container['destinationTag'] = $destinationTag;
        return $this;
    }

    /**
    * Gets override
    *  是否覆盖
    *
    * @return bool|null
    */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
    * Sets override
    *
    * @param bool|null $override 是否覆盖
    *
    * @return $this
    */
    public function setOverride($override)
    {
        $this->container['override'] = $override;
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

