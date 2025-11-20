<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectionType  收藏项类型。 * VOICE：音色
    * collectionIds  收藏的资产或者模板ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectionType' => 'string',
            'collectionIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectionType  收藏项类型。 * VOICE：音色
    * collectionIds  收藏的资产或者模板ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectionType' => null,
        'collectionIds' => null
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
    * collectionType  收藏项类型。 * VOICE：音色
    * collectionIds  收藏的资产或者模板ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectionType' => 'collection_type',
            'collectionIds' => 'collection_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectionType  收藏项类型。 * VOICE：音色
    * collectionIds  收藏的资产或者模板ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'collectionType' => 'setCollectionType',
            'collectionIds' => 'setCollectionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectionType  收藏项类型。 * VOICE：音色
    * collectionIds  收藏的资产或者模板ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'collectionType' => 'getCollectionType',
            'collectionIds' => 'getCollectionIds'
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
    const COLLECTION_TYPE_VOICE = 'VOICE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCollectionTypeAllowableValues()
    {
        return [
            self::COLLECTION_TYPE_VOICE,
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
        $this->container['collectionType'] = isset($data['collectionType']) ? $data['collectionType'] : null;
        $this->container['collectionIds'] = isset($data['collectionIds']) ? $data['collectionIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCollectionTypeAllowableValues();
                if (!is_null($this->container['collectionType']) && !in_array($this->container['collectionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'collectionType', must be one of '%s'",
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
    * Gets collectionType
    *  收藏项类型。 * VOICE：音色
    *
    * @return string|null
    */
    public function getCollectionType()
    {
        return $this->container['collectionType'];
    }

    /**
    * Sets collectionType
    *
    * @param string|null $collectionType 收藏项类型。 * VOICE：音色
    *
    * @return $this
    */
    public function setCollectionType($collectionType)
    {
        $this->container['collectionType'] = $collectionType;
        return $this;
    }

    /**
    * Gets collectionIds
    *  收藏的资产或者模板ID。
    *
    * @return string[]|null
    */
    public function getCollectionIds()
    {
        return $this->container['collectionIds'];
    }

    /**
    * Sets collectionIds
    *
    * @param string[]|null $collectionIds 收藏的资产或者模板ID。
    *
    * @return $this
    */
    public function setCollectionIds($collectionIds)
    {
        $this->container['collectionIds'] = $collectionIds;
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

