<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModelConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModelConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categories  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    * categoryLayerConfig  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    * featurePageLinkTemplate  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categories' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory[]',
            'categoryLayerConfig' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]',
            'featurePageLinkTemplate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categories  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    * categoryLayerConfig  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    * featurePageLinkTemplate  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categories' => null,
        'categoryLayerConfig' => null,
        'featurePageLinkTemplate' => null
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
    * categories  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    * categoryLayerConfig  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    * featurePageLinkTemplate  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categories' => 'categories',
            'categoryLayerConfig' => 'category_layer_config',
            'featurePageLinkTemplate' => 'feature_page_link_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categories  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    * categoryLayerConfig  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    * featurePageLinkTemplate  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'categories' => 'setCategories',
            'categoryLayerConfig' => 'setCategoryLayerConfig',
            'featurePageLinkTemplate' => 'setFeaturePageLinkTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categories  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    * categoryLayerConfig  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    * featurePageLinkTemplate  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'categories' => 'getCategories',
            'categoryLayerConfig' => 'getCategoryLayerConfig',
            'featurePageLinkTemplate' => 'getFeaturePageLinkTemplate'
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
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['categoryLayerConfig'] = isset($data['categoryLayerConfig']) ? $data['categoryLayerConfig'] : null;
        $this->container['featurePageLinkTemplate'] = isset($data['featurePageLinkTemplate']) ? $data['featurePageLinkTemplate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets categories
    *  **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory[]|null $categories **参数解释**： 工作项属性。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets categoryLayerConfig
    *  **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]|null
    */
    public function getCategoryLayerConfig()
    {
        return $this->container['categoryLayerConfig'];
    }

    /**
    * Sets categoryLayerConfig
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]|null $categoryLayerConfig **参数解释**： 工作项层级关系。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategoryLayerConfig($categoryLayerConfig)
    {
        $this->container['categoryLayerConfig'] = $categoryLayerConfig;
        return $this;
    }

    /**
    * Gets featurePageLinkTemplate
    *  **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFeaturePageLinkTemplate()
    {
        return $this->container['featurePageLinkTemplate'];
    }

    /**
    * Sets featurePageLinkTemplate
    *
    * @param string|null $featurePageLinkTemplate **参数解释**： 工作项功能页面跳转链接模板。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFeaturePageLinkTemplate($featurePageLinkTemplate)
    {
        $this->container['featurePageLinkTemplate'] = $featurePageLinkTemplate;
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

