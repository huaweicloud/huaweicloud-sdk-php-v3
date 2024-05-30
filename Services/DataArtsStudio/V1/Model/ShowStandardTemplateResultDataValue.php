<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStandardTemplateResultDataValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStandardTemplateResult_data_value';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allFields  数据标准全部属性，集合中是单个StandElementFieldVO对象
    * optional  可选项,集合中是单个StandElementFieldVO对象
    * systemDefault  系统默认项，集合中是单个StandElementFieldVO对象
    * custom  自定义项,集合中是单个StandElementFieldVO对象
    * hasTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]',
            'optional' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]',
            'systemDefault' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]',
            'custom' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]',
            'hasTemplate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allFields  数据标准全部属性，集合中是单个StandElementFieldVO对象
    * optional  可选项,集合中是单个StandElementFieldVO对象
    * systemDefault  系统默认项，集合中是单个StandElementFieldVO对象
    * custom  自定义项,集合中是单个StandElementFieldVO对象
    * hasTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allFields' => null,
        'optional' => null,
        'systemDefault' => null,
        'custom' => null,
        'hasTemplate' => null
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
    * allFields  数据标准全部属性，集合中是单个StandElementFieldVO对象
    * optional  可选项,集合中是单个StandElementFieldVO对象
    * systemDefault  系统默认项，集合中是单个StandElementFieldVO对象
    * custom  自定义项,集合中是单个StandElementFieldVO对象
    * hasTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allFields' => 'allFields',
            'optional' => 'optional',
            'systemDefault' => 'system_default',
            'custom' => 'custom',
            'hasTemplate' => 'hasTemplate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allFields  数据标准全部属性，集合中是单个StandElementFieldVO对象
    * optional  可选项,集合中是单个StandElementFieldVO对象
    * systemDefault  系统默认项，集合中是单个StandElementFieldVO对象
    * custom  自定义项,集合中是单个StandElementFieldVO对象
    * hasTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $setters = [
            'allFields' => 'setAllFields',
            'optional' => 'setOptional',
            'systemDefault' => 'setSystemDefault',
            'custom' => 'setCustom',
            'hasTemplate' => 'setHasTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allFields  数据标准全部属性，集合中是单个StandElementFieldVO对象
    * optional  可选项,集合中是单个StandElementFieldVO对象
    * systemDefault  系统默认项，集合中是单个StandElementFieldVO对象
    * custom  自定义项,集合中是单个StandElementFieldVO对象
    * hasTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $getters = [
            'allFields' => 'getAllFields',
            'optional' => 'getOptional',
            'systemDefault' => 'getSystemDefault',
            'custom' => 'getCustom',
            'hasTemplate' => 'getHasTemplate'
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
        $this->container['allFields'] = isset($data['allFields']) ? $data['allFields'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['systemDefault'] = isset($data['systemDefault']) ? $data['systemDefault'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['hasTemplate'] = isset($data['hasTemplate']) ? $data['hasTemplate'] : null;
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
    * Gets allFields
    *  数据标准全部属性，集合中是单个StandElementFieldVO对象
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null
    */
    public function getAllFields()
    {
        return $this->container['allFields'];
    }

    /**
    * Sets allFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null $allFields 数据标准全部属性，集合中是单个StandElementFieldVO对象
    *
    * @return $this
    */
    public function setAllFields($allFields)
    {
        $this->container['allFields'] = $allFields;
        return $this;
    }

    /**
    * Gets optional
    *  可选项,集合中是单个StandElementFieldVO对象
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null $optional 可选项,集合中是单个StandElementFieldVO对象
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets systemDefault
    *  系统默认项，集合中是单个StandElementFieldVO对象
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null
    */
    public function getSystemDefault()
    {
        return $this->container['systemDefault'];
    }

    /**
    * Sets systemDefault
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null $systemDefault 系统默认项，集合中是单个StandElementFieldVO对象
    *
    * @return $this
    */
    public function setSystemDefault($systemDefault)
    {
        $this->container['systemDefault'] = $systemDefault;
        return $this;
    }

    /**
    * Gets custom
    *  自定义项,集合中是单个StandElementFieldVO对象
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementFieldVO[]|null $custom 自定义项,集合中是单个StandElementFieldVO对象
    *
    * @return $this
    */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
        return $this;
    }

    /**
    * Gets hasTemplate
    *  是否使用模板
    *
    * @return bool|null
    */
    public function getHasTemplate()
    {
        return $this->container['hasTemplate'];
    }

    /**
    * Sets hasTemplate
    *
    * @param bool|null $hasTemplate 是否使用模板
    *
    * @return $this
    */
    public function setHasTemplate($hasTemplate)
    {
        $this->container['hasTemplate'] = $hasTemplate;
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

