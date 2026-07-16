<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateApiKeyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateApiKeyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * description  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    * scope  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'scope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * description  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    * scope  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'scope' => null
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
    * name  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * description  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    * scope  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * description  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    * scope  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * description  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    * scope  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'scope' => 'getScope'
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
    const SCOPE_USER = 'USER';
    const SCOPE_SERVICE = 'SERVICE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_USER,
            self::SCOPE_SERVICE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
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
    * Gets name
    *  **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** api-key名称，用户在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **约束限制：** api-key在删除之前名字不能重复。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
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
    *  **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
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
    * @param string|null $description **参数解释：** api-key描述。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过256，不能包含感叹号，大于号，小于号，等号，与，单引号，双引号。 **默认取值：** 默认为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string $scope **参数解释：** api-key生效范围。 **约束限制：** 不涉及。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

