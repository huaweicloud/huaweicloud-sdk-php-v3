<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrustedKeySpaceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrustedKeySpaceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyspaceName  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    * keystoreId  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyspaceName' => 'string',
            'type' => 'string',
            'keystoreId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyspaceName  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    * keystoreId  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyspaceName' => null,
        'type' => null,
        'keystoreId' => null,
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
    * keyspaceName  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    * keystoreId  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyspaceName' => 'keyspace_name',
            'type' => 'type',
            'keystoreId' => 'keystore_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyspaceName  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    * keystoreId  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'keyspaceName' => 'setKeyspaceName',
            'type' => 'setType',
            'keystoreId' => 'setKeystoreId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyspaceName  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    * keystoreId  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'keyspaceName' => 'getKeyspaceName',
            'type' => 'getType',
            'keystoreId' => 'getKeystoreId',
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
    const TYPE__1 = '1';
    const TYPE__2 = '2';
    const TYPE__3 = '3';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__1,
            self::TYPE__2,
            self::TYPE__3,
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
        $this->container['keyspaceName'] = isset($data['keyspaceName']) ? $data['keyspaceName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
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
        if ($this->container['keyspaceName'] === null) {
            $invalidProperties[] = "'keyspaceName' can't be null";
        }
            if ((mb_strlen($this->container['keyspaceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyspaceName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keyspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyspaceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets keyspaceName
    *  **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getKeyspaceName()
    {
        return $this->container['keyspaceName'];
    }

    /**
    * Sets keyspaceName
    *
    * @param string $keyspaceName **参数解释：** 密钥空间名称 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceName($keyspaceName)
    {
        $this->container['keyspaceName'] = $keyspaceName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
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
    * @param string|null $type **参数解释：** 密钥空间类型 **约束限制：** 不涉及 **取值范围：** - 1 默认密钥空间 - 2 专属加密集群密钥空间 - 3 外部密钥存储密钥空间 **默认取值：** 1
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets keystoreId
    *  **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string|null $keystoreId **参数解释：** 密钥空间关联的密钥库ID,仅type为2或3时必填，关联的密钥库ID需要和类型匹配 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 密钥空间描述信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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

