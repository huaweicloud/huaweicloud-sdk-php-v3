<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iamUserIDs  权限策略关联的IAM用户信息
    * type  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    * contents  权限策略内容
    * description  权限策略描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iamUserIDs' => 'string[]',
            'type' => 'string',
            'contents' => '\HuaweiCloud\SDK\Ucs\V1\Model\Content[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iamUserIDs  权限策略关联的IAM用户信息
    * type  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    * contents  权限策略内容
    * description  权限策略描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iamUserIDs' => null,
        'type' => null,
        'contents' => null,
        'description' => null
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
    * iamUserIDs  权限策略关联的IAM用户信息
    * type  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    * contents  权限策略内容
    * description  权限策略描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iamUserIDs' => 'iamUserIDs',
            'type' => 'type',
            'contents' => 'contents',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iamUserIDs  权限策略关联的IAM用户信息
    * type  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    * contents  权限策略内容
    * description  权限策略描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'iamUserIDs' => 'setIamUserIDs',
            'type' => 'setType',
            'contents' => 'setContents',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iamUserIDs  权限策略关联的IAM用户信息
    * type  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    * contents  权限策略内容
    * description  权限策略描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'iamUserIDs' => 'getIamUserIDs',
            'type' => 'getType',
            'contents' => 'getContents',
            'description' => 'getDescription'
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
        $this->container['iamUserIDs'] = isset($data['iamUserIDs']) ? $data['iamUserIDs'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets iamUserIDs
    *  权限策略关联的IAM用户信息
    *
    * @return string[]|null
    */
    public function getIamUserIDs()
    {
        return $this->container['iamUserIDs'];
    }

    /**
    * Sets iamUserIDs
    *
    * @param string[]|null $iamUserIDs 权限策略关联的IAM用户信息
    *
    * @return $this
    */
    public function setIamUserIDs($iamUserIDs)
    {
        $this->container['iamUserIDs'] = $iamUserIDs;
        return $this;
    }

    /**
    * Gets type
    *  权限策略类型，只允许四种类型：readonly/develop/admin/custom
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 权限策略类型，只允许四种类型：readonly/develop/admin/custom
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets contents
    *  权限策略内容
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Content[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Content[]|null $contents 权限策略内容
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets description
    *  权限策略描述信息
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
    * @param string|null $description 权限策略描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

