<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLaunchTemplateVersionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLaunchTemplateVersionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  max number of resources to return
    * marker  next page resource index id
    * launchTemplateId  模板id
    * imageId  镜像id
    * flavorId  规格id
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'launchTemplateId' => 'string',
            'imageId' => 'string',
            'flavorId' => 'string',
            'version' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  max number of resources to return
    * marker  next page resource index id
    * launchTemplateId  模板id
    * imageId  镜像id
    * flavorId  规格id
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'launchTemplateId' => null,
        'imageId' => null,
        'flavorId' => null,
        'version' => null
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
    * limit  max number of resources to return
    * marker  next page resource index id
    * launchTemplateId  模板id
    * imageId  镜像id
    * flavorId  规格id
    * version  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'launchTemplateId' => 'launch_template_id',
            'imageId' => 'image_id',
            'flavorId' => 'flavor_id',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  max number of resources to return
    * marker  next page resource index id
    * launchTemplateId  模板id
    * imageId  镜像id
    * flavorId  规格id
    * version  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'launchTemplateId' => 'setLaunchTemplateId',
            'imageId' => 'setImageId',
            'flavorId' => 'setFlavorId',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  max number of resources to return
    * marker  next page resource index id
    * launchTemplateId  模板id
    * imageId  镜像id
    * flavorId  规格id
    * version  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'launchTemplateId' => 'getLaunchTemplateId',
            'imageId' => 'getImageId',
            'flavorId' => 'getFlavorId',
            'version' => 'getVersion'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['launchTemplateId'] = isset($data['launchTemplateId']) ? $data['launchTemplateId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets limit
    *  max number of resources to return
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit max number of resources to return
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  next page resource index id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker next page resource index id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets launchTemplateId
    *  模板id
    *
    * @return string|null
    */
    public function getLaunchTemplateId()
    {
        return $this->container['launchTemplateId'];
    }

    /**
    * Sets launchTemplateId
    *
    * @param string|null $launchTemplateId 模板id
    *
    * @return $this
    */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->container['launchTemplateId'] = $launchTemplateId;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets flavorId
    *  规格id
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 规格id
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return int[]|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int[]|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

