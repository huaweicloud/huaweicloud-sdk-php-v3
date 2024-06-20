<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBasePluginsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBasePluginsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户ID
    * attribution  插件属性,可选official、published
    * offset  偏移
    * limit  大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'attribution' => 'string',
            'offset' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户ID
    * attribution  插件属性,可选official、published
    * offset  偏移
    * limit  大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'attribution' => null,
        'offset' => null,
        'limit' => null
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
    * domainId  租户ID
    * attribution  插件属性,可选official、published
    * offset  偏移
    * limit  大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'attribution' => 'attribution',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户ID
    * attribution  插件属性,可选official、published
    * offset  偏移
    * limit  大小
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'attribution' => 'setAttribution',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户ID
    * attribution  插件属性,可选official、published
    * offset  偏移
    * limit  大小
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'attribution' => 'getAttribution',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['attribution'] = isset($data['attribution']) ? $data['attribution'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['attribution'] === null) {
            $invalidProperties[] = "'attribution' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets domainId
    *  租户ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets attribution
    *  插件属性,可选official、published
    *
    * @return string
    */
    public function getAttribution()
    {
        return $this->container['attribution'];
    }

    /**
    * Sets attribution
    *
    * @param string $attribution 插件属性,可选official、published
    *
    * @return $this
    */
    public function setAttribution($attribution)
    {
        $this->container['attribution'] = $attribution;
        return $this;
    }

    /**
    * Gets offset
    *  偏移
    *
    * @return string
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string $offset 偏移
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  大小
    *
    * @return string
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string $limit 大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

