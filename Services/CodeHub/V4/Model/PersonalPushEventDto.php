<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PersonalPushEventDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PersonalPushEventDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * author  author
    * repository  repository
    * pushData  pushData
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'author' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PersonalEventAuthorDto',
            'repository' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto',
            'pushData' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PushEventPayloadDto',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * author  author
    * repository  repository
    * pushData  pushData
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'author' => null,
        'repository' => null,
        'pushData' => null,
        'createdAt' => null
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
    * author  author
    * repository  repository
    * pushData  pushData
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'author' => 'author',
            'repository' => 'repository',
            'pushData' => 'push_data',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * author  author
    * repository  repository
    * pushData  pushData
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'author' => 'setAuthor',
            'repository' => 'setRepository',
            'pushData' => 'setPushData',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * author  author
    * repository  repository
    * pushData  pushData
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'author' => 'getAuthor',
            'repository' => 'getRepository',
            'pushData' => 'getPushData',
            'createdAt' => 'getCreatedAt'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['pushData'] = isset($data['pushData']) ? $data['pushData'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
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
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PersonalEventAuthorDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PersonalEventAuthorDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets repository
    *  repository
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto|null $repository repository
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets pushData
    *  pushData
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PushEventPayloadDto|null
    */
    public function getPushData()
    {
        return $this->container['pushData'];
    }

    /**
    * Sets pushData
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PushEventPayloadDto|null $pushData pushData
    *
    * @return $this
    */
    public function setPushData($pushData)
    {
        $this->container['pushData'] = $pushData;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

