<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLastPushEventInRepositoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLastPushEventInRepositoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ref  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * repository  repository
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ref' => 'string',
            'createdAt' => 'string',
            'repository' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryBriefDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ref  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * repository  repository
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ref' => null,
        'createdAt' => null,
        'repository' => null
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
    * ref  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * repository  repository
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ref' => 'ref',
            'createdAt' => 'created_at',
            'repository' => 'repository'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ref  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * repository  repository
    *
    * @var string[]
    */
    protected static $setters = [
            'ref' => 'setRef',
            'createdAt' => 'setCreatedAt',
            'repository' => 'setRepository'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ref  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * repository  repository
    *
    * @var string[]
    */
    protected static $getters = [
            'ref' => 'getRef',
            'createdAt' => 'getCreatedAt',
            'repository' => 'getRepository'
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
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) > 255)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) < 1)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be bigger than or equal to 1.";
            }
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
    * Gets ref
    *  **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref **参数解释：** 分支或者tag名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets repository
    *  repository
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryBriefDto|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryBriefDto|null $repository repository
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
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

