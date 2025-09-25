<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeImageWhiteListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeImageWhiteListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  指定具体镜像
    * description  白名单的描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'queryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyQueryInfo',
            'imageInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyImageInfo[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  指定具体镜像
    * description  白名单的描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'queryInfo' => null,
        'imageInfo' => null,
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
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  指定具体镜像
    * description  白名单的描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'queryInfo' => 'query_info',
            'imageInfo' => 'image_info',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  指定具体镜像
    * description  白名单的描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'queryInfo' => 'setQueryInfo',
            'imageInfo' => 'setImageInfo',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  指定具体镜像
    * description  白名单的描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'queryInfo' => 'getQueryInfo',
            'imageInfo' => 'getImageInfo',
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['queryInfo'] = isset($data['queryInfo']) ? $data['queryInfo'] : null;
        $this->container['imageInfo'] = isset($data['imageInfo']) ? $data['imageInfo'] : null;
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
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleType']) && !preg_match("/^all_images|specific_image_types|specific_images$/", $this->container['ruleType'])) {
                $invalidProperties[] = "invalid value for 'ruleType', must be conform to the pattern /^all_images|specific_image_types|specific_images$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
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
    * Gets ruleType
    *  **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType **参数解释**： 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_images：白名单应用于全部镜像。 - specific_image_types：白名单应用于指定镜像类型(仅用于指定仓库镜像类型)。 - specific_images：白名单应用于指定镜像。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets queryInfo
    *  queryInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyQueryInfo|null
    */
    public function getQueryInfo()
    {
        return $this->container['queryInfo'];
    }

    /**
    * Sets queryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyQueryInfo|null $queryInfo queryInfo
    *
    * @return $this
    */
    public function setQueryInfo($queryInfo)
    {
        $this->container['queryInfo'] = $queryInfo;
        return $this;
    }

    /**
    * Gets imageInfo
    *  指定具体镜像
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyImageInfo[]|null
    */
    public function getImageInfo()
    {
        return $this->container['imageInfo'];
    }

    /**
    * Sets imageInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AddImageWhiteListsRequestBodyImageInfo[]|null $imageInfo 指定具体镜像
    *
    * @return $this
    */
    public function setImageInfo($imageInfo)
    {
        $this->container['imageInfo'] = $imageInfo;
        return $this;
    }

    /**
    * Gets description
    *  白名单的描述信息
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
    * @param string|null $description 白名单的描述信息
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

