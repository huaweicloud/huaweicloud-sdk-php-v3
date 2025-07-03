<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LaunchTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LaunchTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板id
    * name  模板名称
    * description  模板描述
    * createdAt  创建时间
    * updatedAt  更新时间
    * defaultVersion  模板默认版本号
    * latestVersion  模板最新版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'defaultVersion' => 'int',
            'latestVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板id
    * name  模板名称
    * description  模板描述
    * createdAt  创建时间
    * updatedAt  更新时间
    * defaultVersion  模板默认版本号
    * latestVersion  模板最新版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'defaultVersion' => null,
        'latestVersion' => null
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
    * id  模板id
    * name  模板名称
    * description  模板描述
    * createdAt  创建时间
    * updatedAt  更新时间
    * defaultVersion  模板默认版本号
    * latestVersion  模板最新版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'defaultVersion' => 'default_version',
            'latestVersion' => 'latest_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板id
    * name  模板名称
    * description  模板描述
    * createdAt  创建时间
    * updatedAt  更新时间
    * defaultVersion  模板默认版本号
    * latestVersion  模板最新版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'defaultVersion' => 'setDefaultVersion',
            'latestVersion' => 'setLatestVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板id
    * name  模板名称
    * description  模板描述
    * createdAt  创建时间
    * updatedAt  更新时间
    * defaultVersion  模板默认版本号
    * latestVersion  模板最新版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'defaultVersion' => 'getDefaultVersion',
            'latestVersion' => 'getLatestVersion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['defaultVersion'] = isset($data['defaultVersion']) ? $data['defaultVersion'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['defaultVersion'] === null) {
            $invalidProperties[] = "'defaultVersion' can't be null";
        }
        if ($this->container['latestVersion'] === null) {
            $invalidProperties[] = "'latestVersion' can't be null";
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
    * Gets id
    *  模板id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 模板id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets defaultVersion
    *  模板默认版本号
    *
    * @return int
    */
    public function getDefaultVersion()
    {
        return $this->container['defaultVersion'];
    }

    /**
    * Sets defaultVersion
    *
    * @param int $defaultVersion 模板默认版本号
    *
    * @return $this
    */
    public function setDefaultVersion($defaultVersion)
    {
        $this->container['defaultVersion'] = $defaultVersion;
        return $this;
    }

    /**
    * Gets latestVersion
    *  模板最新版本号
    *
    * @return int
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param int $latestVersion 模板最新版本号
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
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

