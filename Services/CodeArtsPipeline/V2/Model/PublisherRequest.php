<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublisherRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublisherRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * userId  用户ID
    * description  描述
    * logoUrl  图标URL
    * website  网页地址
    * supportUrl  地址
    * sourceUrl  地址
    * enName  英文名
    * publisherUniqueId  唯一ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'userId' => 'string',
            'description' => 'string',
            'logoUrl' => 'string',
            'website' => 'string',
            'supportUrl' => 'string',
            'sourceUrl' => 'string',
            'enName' => 'string',
            'publisherUniqueId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * userId  用户ID
    * description  描述
    * logoUrl  图标URL
    * website  网页地址
    * supportUrl  地址
    * sourceUrl  地址
    * enName  英文名
    * publisherUniqueId  唯一ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'userId' => null,
        'description' => null,
        'logoUrl' => null,
        'website' => null,
        'supportUrl' => null,
        'sourceUrl' => null,
        'enName' => null,
        'publisherUniqueId' => null
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
    * name  名称
    * userId  用户ID
    * description  描述
    * logoUrl  图标URL
    * website  网页地址
    * supportUrl  地址
    * sourceUrl  地址
    * enName  英文名
    * publisherUniqueId  唯一ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'userId' => 'user_id',
            'description' => 'description',
            'logoUrl' => 'logo_url',
            'website' => 'website',
            'supportUrl' => 'support_url',
            'sourceUrl' => 'source_url',
            'enName' => 'en_name',
            'publisherUniqueId' => 'publisher_unique_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * userId  用户ID
    * description  描述
    * logoUrl  图标URL
    * website  网页地址
    * supportUrl  地址
    * sourceUrl  地址
    * enName  英文名
    * publisherUniqueId  唯一ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'userId' => 'setUserId',
            'description' => 'setDescription',
            'logoUrl' => 'setLogoUrl',
            'website' => 'setWebsite',
            'supportUrl' => 'setSupportUrl',
            'sourceUrl' => 'setSourceUrl',
            'enName' => 'setEnName',
            'publisherUniqueId' => 'setPublisherUniqueId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * userId  用户ID
    * description  描述
    * logoUrl  图标URL
    * website  网页地址
    * supportUrl  地址
    * sourceUrl  地址
    * enName  英文名
    * publisherUniqueId  唯一ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'userId' => 'getUserId',
            'description' => 'getDescription',
            'logoUrl' => 'getLogoUrl',
            'website' => 'getWebsite',
            'supportUrl' => 'getSupportUrl',
            'sourceUrl' => 'getSourceUrl',
            'enName' => 'getEnName',
            'publisherUniqueId' => 'getPublisherUniqueId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logoUrl'] = isset($data['logoUrl']) ? $data['logoUrl'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['supportUrl'] = isset($data['supportUrl']) ? $data['supportUrl'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['publisherUniqueId'] = isset($data['publisherUniqueId']) ? $data['publisherUniqueId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['supportUrl'] === null) {
            $invalidProperties[] = "'supportUrl' can't be null";
        }
        if ($this->container['enName'] === null) {
            $invalidProperties[] = "'enName' can't be null";
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
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets logoUrl
    *  图标URL
    *
    * @return string|null
    */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
    * Sets logoUrl
    *
    * @param string|null $logoUrl 图标URL
    *
    * @return $this
    */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;
        return $this;
    }

    /**
    * Gets website
    *  网页地址
    *
    * @return string|null
    */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
    * Sets website
    *
    * @param string|null $website 网页地址
    *
    * @return $this
    */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;
        return $this;
    }

    /**
    * Gets supportUrl
    *  地址
    *
    * @return string
    */
    public function getSupportUrl()
    {
        return $this->container['supportUrl'];
    }

    /**
    * Sets supportUrl
    *
    * @param string $supportUrl 地址
    *
    * @return $this
    */
    public function setSupportUrl($supportUrl)
    {
        $this->container['supportUrl'] = $supportUrl;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  地址
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 地址
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets enName
    *  英文名
    *
    * @return string
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string $enName 英文名
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets publisherUniqueId
    *  唯一ID
    *
    * @return string|null
    */
    public function getPublisherUniqueId()
    {
        return $this->container['publisherUniqueId'];
    }

    /**
    * Sets publisherUniqueId
    *
    * @param string|null $publisherUniqueId 唯一ID
    *
    * @return $this
    */
    public function setPublisherUniqueId($publisherUniqueId)
    {
        $this->container['publisherUniqueId'] = $publisherUniqueId;
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

